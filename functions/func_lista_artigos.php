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
	
	for ($i=0; $i < 10; $i++) { 
		echo '<div class="row mb1 listagem">
		<div class="col col-2 vtext_middle text_center">
			<img src="../foto.jpg">
		</div>
		<div class="col col-2 vtext_middle text_center">Pizza xpto</div>
		<div class="col col-2 vtext_middle text_center">Pizzas</div>
		<div class="col col-2 vtext_middle text_center">100.00€</div>
		<div class="col col-2 vtext_middle text_center">S/N nome promo</div>
		<div class="col col-2 vtext_middle text_center">
			<button class="bt bt_primary">Editar</button>
			<button class="bt bt_cancel">
				<i class="fas fa-trash"></i>
			</button>
		</div>
	</div>';
	}
	echo'
	<!-- Fim Listagem de Artigos -->
	';
}
?>