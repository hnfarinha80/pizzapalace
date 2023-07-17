<?php 
function func_lista_artigos(){
	echo '
	<!-- Listagem de Artigos -->
	<div class="row mb1">
		<div class="col col-2 text_center"><h4>Foto</h4></div>
		<div class="col col-2 text_center"><h4>Nome</h4></div>
		<div class="col col-2 text_center"><h4>Categoria</h4></div>
		<div class="col col-2 text_center"><h4>Preço</h4></div>
		<div class="col col-2 text_center"><h4>Promoção</h4></div>
		<div class="col col-2 text_center"><h4>Opt</h4></div>
	</div>';
	include 'connections/conn.php';
	$q = mysqli_query($conn, "SELECT artigos.*, promocoes.*, categorias.* FROM artigos LEFT JOIN promocoes ON artigos.art_prom_id = promocoes.prom_id LEFT JOIN categorias ON artigos.art_cat_id = categorias.cat_id");
	while($a = mysqli_fetch_array($q)){
		//$cat = mysqli_fetch_array(mysqli_query($conn,"SELECT cat_title FROM categorias WHERE cat_id = '$a[art_cat_id]'"));
		//$prom = mysqli_fetch_array(mysqli_query($conn,"SELECT prom_nome FROM promocoes WHERE prom_id = '$a[art_prom_id]'"));
		$prom_nome = $a["prom_nome"] ? $a["prom_nome"] : "Não aplicável";
		echo '<div class="row mb1 listagem">
				<div class="col col-2 vtext_middle text_center">
					<img src="img/artigos/'.$a["art_photo"].'">
				</div>
				<div class="col col-2 vtext_middle text_center">'.$a["art_nome"].'</div>
				<div class="col col-2 vtext_middle text_center">'.$a["cat_title"].'</div>
				<div class="col col-2 vtext_middle text_center">'.number_format($a["art_preco"],2, ',','.').'€</div>
				<div class="col col-2 vtext_middle text_center">'.$prom_nome.'</div>
				<div class="col col-2 vtext_middle text_center">
				<form method="post">
					<input type="hidden" name="art_id" value="'.$a["art_id"].'">
					<a href="?p=novo-artigo&art_id='.$a["art_id"].'">
						<div class="bt bt_primary">Editar</div>
					</a>
					<button class="bt bt_cancel" type="submit" name="delete_artigo">
						<i class="fas fa-trash"></i>
					</button>
				</form>
				</div>
			</div>';
	}
	include 'connections/deconn.php';
}
?>