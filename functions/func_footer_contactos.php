<?php
function footer_contactos(){
	include 'connections/conn.php';
	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT con_telefone,con_email,con_telemovel FROM contactos WHERE con_id = 1"));
	include 'connections/deconn.php';
	if($q["con_telefone"] != ''){
		echo '<li><i class="fas fa-phone-alt"></i> '.$q["con_telefone"].'</li>';
	}
	if($q["con_telemovel"] != ''){
		echo '<li><i class="fas fa-phone-alt"></i> '.$q["con_telemovel"].'</li>';
	}
	if($q["con_email"] != ''){
		echo '<li><i class="fas fa-envelope"></i> '.$q["con_email"].'</li>';
	}
}
?>