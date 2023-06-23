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
				<label>Selecione a categoria</label>
				<?php drop_down_categorias(); ?>
			</div>
			<div class="col col-6">
				<label>Aplicar promoção?</label>
				<?php drop_down_promocoes(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col col-12">
				<button class="bt bt_primary" type="submit">Criar Artigo</button>
			</div>
			
		</div>
	</form>
</section>