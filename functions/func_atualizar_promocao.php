<?php 
function atualizar_promocao($prom_nome, $prom_id,$prom_data_ini,$prom_data_fim,$prom_per_val,$prom_int_val){
	include 'connections/conn.php';
	mysqli_query($conn,"UPDATE promocoes SET prom_nome = '$prom_nome', prom_data_ini = '$prom_data_ini', prom_data_fim = '$prom_data_fim', prom_per_val = '$prom_per_val' WHERE prom_id = '$prom_id'");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=promocoes">';

}
?>