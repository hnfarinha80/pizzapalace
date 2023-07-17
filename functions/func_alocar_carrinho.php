<?php
function alocar_carrinho(){
	//chave de criação (hash)
	$hoje = date('Y-m-d');
	$unique = uniqid(12);
	$cart_hash = $hoje.$unique;
	//saber se já há carrinho na sessão
	//echo 'Novo Carro: '.$cart_hash;
	include 'connections/conn.php';
	if(@!$_SESSION['car_hash']){
		echo 'Nao ha carro';
		mysqli_query($conn, "INSERT INTO carts (car_hash, car_log_id, car_status) VALUES ('$cart_hash', 0, 0)");
		$car_id = mysqli_insert_id($conn);
		$_SESSION['car_hash'] = $cart_hash;
		$_SESSION["car_id"] = $car_id;
	}else{
		//echo 'Ha carro';
		//echo $_SESSION["car_hash"];
		//echo 'car_id : '.$_SESSION["car_id"];
		//echo 'Log: '.$_SESSION['log_id'];
		if(isset($_SESSION['log_id'])){
			//echo 'Ha login';
			//ver se tem carrinhos em aberto deste login
			$q = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM carts WHERE car_status = 0 AND car_log_id = '$_SESSION[log_id]' AND car_id != '$_SESSION[car_id]'"));
			$new_items = mysqli_query($conn,"SELECT * FROM items WHERE ite_car_id = '$_SESSION[car_id]'");
			$count = mysqli_num_rows($new_items);
			if($count >= 1){
				while($item = mysqli_fetch_array($new_items)){
					$pending_items = mysqli_query($conn,"SELECT * FROM items WHERE ite_car_id = '$q[car_id]' AND ite_art_id = '$new_items[ite_art_id]'");
					if($new_items["ite_art_id"] == $pending_items["ite_art_id"]){
					mysqli_query($conn,"UPDATE items SET ite_qta = ite_qta + '$pending_items[ite_qta]' WHERE ite_car_id = $_SESSION[car_id]");
					mysqli_query($conn,"DELETE FROM items WHERE ite_car_id = '$pending_items[ite_car_id]'");
					mysqli_query($conn,"DELETE FROM carts WHERE car_id = '$pending_items[car_id]'");
					}
				}
			}
		}
	}
	
	
	include 'connections/deconn.php';
}
?>