<section>
	<div class="row mb1">
		<div class="col col-3 text_left">
			<a href="?p=novo-artigo">
			<button class="bt bt_primary">Novo Artigo</button>
			</a>
		</div>
		<div class="col col-9"></div>
	</div>
	<?php 
	func_lista_artigos();
	
	if(isset($_POST["editar_artigo"])){
		editar_artigo($_POST["art_id"]);
	}
	if(isset($_POST["delete_artigo"])){
		delete_artigo($_POST["art_id"]);
	}
	?>

</section>