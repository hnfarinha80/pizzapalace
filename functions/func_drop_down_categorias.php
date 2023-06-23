<?php
function drop_down_categorias(){
	echo '<select name="art_cat_id">';
	include 'connections/conn.php';
	$q = mysqli_query($conn,"SELECT * FROM categorias");
	while($a = mysqli_fetch_array($q)){
		echo '<option value="'.$a["cat_id"].'">'.$a["cat_title"].'</option>';
	}
	include 'connections/deconn.php';
	echo '</select>';

}
?>