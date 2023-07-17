<?php 
function delete_artigo($art_id){
	include 'connections/conn.php';
	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT art_photo FROM artigos WHERE art_id = '$art_id'"));
	$delete_file = 'img/artigos/'.$q["art_photo"];
	unlink($delete_file);
	mysqli_query($conn,"DELETE FROM artigos WHERE art_id = '$art_id'");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=artigos">';
}
?>