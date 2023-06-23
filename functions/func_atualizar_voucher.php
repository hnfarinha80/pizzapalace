<?php
function atualizar_voucher($vou_code,$vou_id,$vou_data_ini,$vou_data_fim,$vou_valor){
	include 'connections/conn.php';
	mysqli_query($conn,"UPDATE vouchers SET vou_code = '$vou_code', vou_data_ini = '$vou_data_ini', vou_data_fim = '$vou_data_fim', vou_valor = '$vou_valor' WHERE vou_id = '$vou_id'");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=vouchers">';
}
?>