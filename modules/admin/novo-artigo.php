<?php 
@$art_id = $_REQUEST["art_id"];
//saber se vai ser criado novo ou se é para editar
if($art_id == ''){
	//novo artigo
	echo '
	<section>
	<div class="row mb1">
		<div class="col col-3 text_left">
			<h4>Criar Artigo</h4>
		</div>
		<div class="col col-9"></div>
	</div>
	<form method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col col-3">
				<label>Fotografia</label>
				<input type="file" name="art_photo">
			</div>
			<div class="col col-3">
				<label>Nome</label>
				<input type="text" name="art_name">
			</div>
			<div class="col col-3">
				<label>Preço</label>
				<input type="text" name="art_preco">
			</div>
		</div>
		<div class="row">
			<div class="col col-6">
				<label>Selecione a categoria</label>';
				drop_down_categorias(0);
			echo'</div>
			<div class="col col-6">
				<label>Aplicar promoção?</label>';
				drop_down_promocoes(0);
			echo'
			</div>
		</div>
		<div class="row">
			<div class="col col-12">
				<button class="bt bt_primary" type="submit" name="criar_artigo">Criar Artigo</button>
			</div>
			
		</div>
	</form>
	</section>
	';
}else{
	//edição de artigo
	include 'connections/conn.php';
	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM artigos WHERE art_id = '$art_id'"));
	echo '
	<section>
	<div class="row mb1">
		<div class="col col-3 text_left">
			<h4>Editar Artigo</h4>
		</div>
		<div class="col col-9"></div>
	</div>
	<form method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col col-3">
				<img src="img/artigos/'.$q["art_photo"].'">
				<label>Fotografia</label>
				<input type="file" name="art_photo">
			</div>
			<div class="col col-3">
				<label>Nome</label>
				<input type="text" name="art_name" value="'.$q["art_nome"].'">
			</div>
			<div class="col col-3">
				<label>Preço</label>
				<input type="text" name="art_preco" value="'.$q["art_preco"].'">
			</div>
		</div>
		<div class="row">
			<div class="col col-6">
				<label>Selecione a categoria</label>';
				drop_down_categorias($q["art_cat_id"]);
			echo'</div>
			<div class="col col-6">
				<label>Aplicar promoção?</label>';
				drop_down_promocoes($q["art_prom_id"]);
			echo'</div>
		</div>
		<div class="row">
			<div class="col col-12">
				<input type="hidden" name="art_id" value="'.$q["art_id"].'">
				<button class="bt bt_primary" type="submit" name="atualizar_artigo">Atualizar Artigo</button>
			</div>
			
		</div>
	</form>
	</section>
	';
}

if(isset($_POST["criar_artigo"])){
	$art_photo = $_FILES["art_photo"]["name"];
	move_uploaded_file($_FILES["art_photo"]["tmp_name"], 'img/artigos/'.$art_photo);
	criar_artigo($art_photo,$_POST["art_name"],$_POST["art_preco"], $_POST['art_cat_id'], $_POST['art_prom_id']);
}
if(isset($_POST["atualizar_artigo"])){
	$art_photo = $_FILES["art_photo"]["name"];
	move_uploaded_file($_FILES["art_photo"]["tmp_name"], 'img/artigos/'.$art_photo);
	editar_artigo($art_photo,$_POST["art_name"],$_POST["art_preco"], $_POST['art_cat_id'], $_POST['art_prom_id'], $_POST["art_id"]);
}
	?>

