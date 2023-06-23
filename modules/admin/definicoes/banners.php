<!--Challenge Banners

Criar formulário para carregamento de banners, campo com o nome 
ban_photo, ban_titulo, ban_subtitulo

Seguido de "listagem" a mostrar:

- foto do banner carregado, campo em text ban_titulo e ban_subtitulo, campo hidden para o ban_id seguido de botao UPDATE e botao DELETE

 Criar categorias, editar/eliminar categorias -->
<div class="row">
	<div class="col col-3 text_center vtext_middle"><h4>Foto</h4></div>
	<div class="col col-3 text_center vtext_middle"><h4>Titulo</h4></div>
	<div class="col col-3 text_center vtext_middle"><h4>Subtitulo</div>
	<div class="col col-3 text_center vtext_middle"></div>
</div>
<!-- Crição de nova Categoria -->
<h3>Criar Novo Banner</h3>
<form method="post">
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<input type="file" name="ban_photo">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<input type="text" name="ban_titulo" placeholder="Titulo">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<input type="text" name="ban_subtitulo" placeholder="Subtitulo">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<button type="submit" class="bt bt_primary" name="nova_categoria">Criar Banner</button>
	</div>
</div>
</form>
<!-- Fim Criação de nova Categoria -->

<!-- Lista de categorias existentes -->
<h3>Banners Existentes</h3>
<form method="post">
<div class="row">
	<div class="col col-3 text_center vtext_middle">
		<img src="../foto.jpg">
		<input type="file" name="ban_photo">
		<input type="hidden" name="ban_id" value="">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<input type="text" name="ban_titulo" placeholder="Titulo" value="">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<input type="text" name="ban_subtitulo" placeholder="Subtitulo" value="">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<button type="submit" class="bt bt_action" name="atualizar_banner">
			<i class="fas fa-info"></i> Atualizar Banner</button>
		<button type="submit" class="bt bt_cancel" name="eliminar_banner">
			<i class="fas fa-trash"></i> Apagar Banner</button>
	</div>
</div>
</form>
<!-- Fim Lista de categorias existentes -->