<?php
function gerir_contactos($con_telefone,$con_telemovel,$con_email,$con_morada,$con_cp,$con_localidade,$con_mapa,$con_facebook,$con_twitter,$con_tiktok,$con_youtube){
	include 'connections/conn.php';
	mysqli_query($conn,"UPDATE contactos SET 
		con_telefone = '$con_telefone',
		con_telemovel = '$con_telemovel',
		con_email = '$con_email',
		con_morada = '$con_morada',
		con_cp = '$con_cp',
		con_localidade = '$con_localidade',
		con_mapa = '$con_mapa',
		con_facebook = '$con_facebook',
		con_twitter = '$con_twitter',
		con_tiktok = '$con_tiktok',
		con_youtube = '$con_youtube'
		WHERE con_id = 1");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=contactos">';

}
?>