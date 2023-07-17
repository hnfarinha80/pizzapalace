<?php 
function menu_categorias(){
	include 'connections/conn.php';
	$q = mysqli_query($conn,"SELECT * FROM categorias LIMIT 0,4");
	$i = 1;
	//passar um parametro adicional no url que corresponde ao id da categoria selecionada.
	while($a = mysqli_fetch_array($q)){
		echo '<li><a href="?p=1&cat='.$a["cat_id"].'"> '.$a["cat_title"].' </a></li>';
		$i++;
	}
	echo '<li><a href="?p=5"> Contactos </a></li>';
	include 'connections/deconn.php';
}
?>