<?php 
function editar_artigo($art_photo,$art_name,$art_preco, $art_cat_id, $art_prom_id, $art_id){
	include 'connections/conn.php';
	if($art_photo == ''){
		mysqli_query($conn,"UPDATE artigos SET art_nome = '$art_name', art_preco = '$art_preco', art_cat_id = '$art_cat_id', art_prom_id = '$art_prom_id' WHERE art_id = '$art_id'");
	}else{
		mysqli_query($conn,"UPDATE artigos SET art_photo = '$art_photo', art_nome = '$art_name', art_preco = '$art_preco', art_cat_id = '$art_cat_id', art_prom_id = '$art_prom_id' WHERE art_id = '$art_id'");
	}
	
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=artigos">';
}
//mysqli_query($conn,"UPDATE artigos SET art_nome= '$art_nome', art_preco ='$art_preco', art_photo = '$art_photo', art_cat_id = (SELECT cat_id FROM categorias WHERE cat_title = '$art_cat_id'), art_prom_id = (SELECT prom_id FROM promocoes WHERE prom_nome = '$art_prom_id') WHERE art_id = '$art_id'");

?>