<!-- Criar categorias, editar/eliminar categorias -->
<div class="row">
	<div class="col col-3 text_center vtext_middle"><h4>Foto</h4></div>
	<div class="col col-3 text_center vtext_middle"><h4>Titulo</h4></div>
	<div class="col col-3 text_center vtext_middle"></div>
	<div class="col col-3 text_center vtext_middle"></div>
</div>
<!-- Crição de nova Categoria -->
<h3>Criar Nova Categoria</h3>
<form method="post" enctype="multipart/form-data">
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<input type="file" name="cat_photo" accept="image/jpeg">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<input type="text" name="cat_title" placeholder="Titulo">
	</div>
	<div class="col col-3 text_center vtext_middle"></div>
	<div class="col col-3 text_center vtext_middle">
		<button type="submit" class="bt bt_primary" name="nova_categoria">Criar Categoria</button>
	</div>
</div>
</form>
<?php 
if(isset($_POST["nova_categoria"])){
	//obter o nome do ficheiro a carregar
	$cat_photo = $_FILES["cat_photo"]["name"];
	//mover o ficheiro para o servidor
	move_uploaded_file($_FILES["cat_photo"]["tmp_name"], 'img/categorias/'.$cat_photo);
	criar_nova_categoria($cat_photo, $_POST["cat_title"]);
}
?>
<!-- Fim Criação de nova Categoria -->

<!-- Lista de categorias existentes -->
<h3>Categorias Existentes</h3>
<?php 
	//criar a lista de categorias
	lista_edicao_categorias();
	//permitir a atualização das categorias existentes
	if(isset($_POST["atualizar_categoria"])){
		//validar o carregamento de nova foto para a categoria
		if(@$_FILES["cat_photo"]["size"] != 0){
			$cat_photo = $_FILES["cat_photo"]["name"];
			move_uploaded_file($_FILES["cat_photo"]["tmp_name"], 'img/categorias/'.$cat_photo);
		}
		atualizar_categoria($_POST["cat_id"], $cat_photo, $_POST["cat_title"]);
	}
	//eliminar uma categoria
	if(isset($_POST["eliminar_categoria"])){
		eliminar_categoria($_POST["cat_id"]);
	}

?>
<!-- Fim Lista de categorias existentes -->