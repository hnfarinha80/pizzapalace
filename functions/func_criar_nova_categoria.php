<?php 
function criar_nova_categoria($cat_photo, $cat_title){
	include 'connections/conn.php';
	mysqli_query($conn,"INSERT INTO categorias( cat_photo, cat_title) VALUES ('$cat_photo','$cat_title')");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=categorias">';
}
?>