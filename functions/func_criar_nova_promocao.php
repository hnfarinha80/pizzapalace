<?php 
function criar_nova_promocao($prom_nome, $prom_data_ini, $prom_data_fim, $prom_per_val, $prom_int_val){
	include 'connections/conn.php';
	mysqli_query($conn,"INSERT INTO promocoes(prom_nome, prom_data_ini, prom_data_fim, prom_per_val, prom_int_val) VALUES ('$prom_nome', '$prom_data_ini', '$prom_data_fim', '$prom_per_val', '$prom_int_val')");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=promocoes">';
}
?>