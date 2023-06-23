<?php
function footer_social(){
	include 'connections/conn.php';
	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT con_facebook,con_twitter,con_tiktok,con_youtube FROM contactos WHERE con_id = 1"));
	include 'connections/deconn.php';
	if($q["con_facebook"] != ''){
		echo '<li><a href="'.$q["con_facebook"].'" target="_blank"><i class="fab fa-square-facebook"></i></a></li>';
	}
	if($q["con_twitter"] != ''){
		echo '<li><a href="'.$q["con_twitter"].'" target="_blank"><i class="fab fa-twitter"></i></a></li>';
	}
	if($q["con_tiktok"] != ''){
		echo '<li><a href="'.$q["con_tiktok"].'" target="_blank"><i class="fab fa-tiktok"></i></a></li>';
	}
	if($q["con_youtube"] != ''){
		echo '<li><a href="'.$q["con_youtube"].'" target="_blank"><i class="fab fa-square-youtube"></i></a></li>';
	}
}
?>