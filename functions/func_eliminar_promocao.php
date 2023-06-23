<?php 
function eliminar_promocao($prom_id){
	include 'connections/conn.php';
	mysqli_query($conn, "DELETE FROM promocoes WHERE prom_id = '$prom_id'");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=promocoes">';

}
?>