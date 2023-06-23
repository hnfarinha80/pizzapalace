<?php 
function atualizar_categoria($cat_id, $cat_photo, $cat_title){
	include 'connections/conn.php';
	if($cat_photo != ''){
		//eliminar da diretoria a fotografia anterior
		$q = mysqli_fetch_array(mysqli_query($conn,"SELECT cat_photo FROM categorias WHERE cat_id = '$cat_id'"));
		$delete_file = 'img/categorias/'.$q["cat_photo"];
		unlink($delete_file);
		mysqli_query($conn,"UPDATE categorias SET cat_title = '$cat_title', cat_photo = '$cat_photo' WHERE cat_id = '$cat_id'");
	}else{
		//alterar so o nome manter a foto antiga
		mysqli_query($conn,"UPDATE categorias SET cat_title = '$cat_title' WHERE cat_id = '$cat_id'");
	}
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=categorias">';
}	
?>