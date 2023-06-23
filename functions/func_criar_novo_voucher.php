<?php 
function criar_novo_voucher($vou_code, $vou_data_ini, $vou_data_fim, $vou_valor){
	include 'connections/conn.php';
	mysqli_query($conn,"INSERT INTO vouchers(vou_code, vou_data_ini, vou_data_fim, vou_valor) VALUES ('$vou_code', '$vou_data_ini', '$vou_data_fim', '$vou_valor')");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=vouchers">';
}
?>