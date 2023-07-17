<?php
function drop_down_categorias($art_cat_id){
	echo '<select name="art_cat_id">';
	include 'connections/conn.php';
	$q = mysqli_query($conn,"SELECT * FROM categorias");
	while($a = mysqli_fetch_array($q)){
		if(@$art_cart_id == $a["cat_id"]){
			echo '<option value="'.$a["cat_id"].'" selected>'.$a["cat_title"].'</option>';
		}else{
			echo '<option value="'.$a["cat_id"].'">'.$a["cat_title"].'</option>';
		}
	}
	include 'connections/deconn.php';
	echo '</select>';

}
?>