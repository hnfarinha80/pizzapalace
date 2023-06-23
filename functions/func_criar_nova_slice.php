<?php 
function criar_nova_slice($coin_montante, $coin_slice, $coin_data){
	include 'connections/conn.php';
	mysqli_query($conn,"INSERT INTO coins(coin_montante, coin_slice, coin_data) VALUES ('$coin_montante', '$coin_slice', '$coin_data')");
	include 'connections/deconn.php';
	echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=slicecoins">';
}
?>