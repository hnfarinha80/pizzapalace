<?php 
function eliminar_categoria($cat_id){

	include 'connections/conn.php';
	mysqli_query($conn,"DELETE FROM categorias WHERE cat_id = '$cat_id'");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=categorias">';

}
?>