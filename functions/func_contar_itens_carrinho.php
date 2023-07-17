<?php 
function contar_itens_carrinho(){
	include 'connections/conn.php';
	$q = mysqli_query($conn,"SELECT count(*) AS qta FROM items WHERE ite_car_id = '$_SESSION[car_id]'");
	$a = mysqli_fetch_array($q);
	if($a["qta"] >= 1){ echo '<sup>'.$a["qta"].'</sup>';}
	include 'connections/deconn.php';
}
?>