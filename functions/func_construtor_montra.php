<?php
function construtor_montra($cat_id){
	include 'connections/conn.php';
	$q = mysqli_query($conn, "SELECT * FROM artigos WHERE art_cat_id = '$cat_id'");
	
	while($a = mysqli_fetch_array($q)){
		echo '<div class="artigo_montra">
		<img src="img/artigos/'.$a["art_photo"].'">
		<div class="artigo_titulo">'.$a["art_nome"].'</div>
		<div class="row">
			<div class="col col-6">
				Preço: '.number_format($a["art_preco"],2,',','.').'€
			</div>
			<div class="col col-6">
				<a class="bt bt_primary" href="addtocart.php?art_id='.$a["art_id"].'&
qta=1"><i class="fas fa-shopping-cart"> Adicionar</i></a>
			</div>
		</div>
	</div>';
	}
	include 'connections/deconn.php';
}
?>