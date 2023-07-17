<?php 
function atualizar_item($ite_art_id, $ite_qta){
	include 'connections/conn.php';
	mysqli_query($conn,"UPDATE items SET ite_qta = '$ite_qta' WHERE ite_car_id = '$_SESSION[car_id]' AND ite_art_id = '$ite_art_id'");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=carrinho">';
}
?>