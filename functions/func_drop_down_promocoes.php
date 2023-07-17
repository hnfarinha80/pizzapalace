<?php
function drop_down_promocoes($art_prom_id){
	include 'connections/conn.php';
	$q = mysqli_query($conn,"SELECT * FROM promocoes");
	echo '<select name="art_prom_id">';
	while($a = mysqli_fetch_array($q)){
		if($art_prom_id == $a["prom_id"]){
			echo '<option value="'.$a["prom_id"].'" selected>'.$a["prom_nome"].'</option>';
		}else{
			echo '<option value="'.$a["prom_id"].'">'.$a["prom_nome"].'</option>';
		}
	}
	include 'connections/deconn.php';
	echo '</select>';
}
?>