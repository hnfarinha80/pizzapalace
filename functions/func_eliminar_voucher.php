<?php 
function eliminar_voucher($vou_id){
	include 'connections/conn.php';
	mysqli_query($conn,"DELETE FROM vouchers WHERE vou_id = '$vou_id'");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=vouchers">';
}

?>