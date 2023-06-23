<?php
function drop_down_promocoes(){

	echo '<select name="art_prom_id">
	 <option value="0" selected>Não</option>';
	 include 'connections/conn.php';
	$q = mysqli_query($conn,"SELECT * FROM promocoes");
	while($a = mysqli_fetch_array($q)){
		echo '<option value="'.$a["prom_id"].'">'.$a["prom_nome"].'</option>';
	}
	include 'connections/deconn.php';
	echo '</select>';
}
?>