<?php
function criar_artigo($art_photo,$art_name,$art_preco, $art_cat_id, $art_prom_id){
	include 'connections/conn.php';
	mysqli_query($conn,"INSERT INTO artigos (art_photo, art_nome, art_preco, art_cat_id, art_prom_id) VALUES ('$art_photo', '$art_name', '$art_preco', '$art_cat_id', '$art_prom_id')");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=artigos">';
}
?>