<?php
function func_lista_encomendas(){
	echo '<!-- Listagem de Artigos -->
	<div class="row mb1">
		<div class="col col-2 text_center"><h4>Nº Enc</h4></div>
		<div class="col col-2 text_center"><h4>Data</h4></div>
		<div class="col col-2 text_center"><h4>Artigos</h4></div>
		<div class="col col-2 text_center"><h4>Total</h4></div>
		<div class="col col-2 text_center"><h4>Utilizador</h4></div>
		<div class="col col-2 text_center"><h4></h4></div>
	</div>
	<div class="row mb1 listagem">
		<div class="col col-2 text_center vtext_middle"><b>19922</b></div>
		<div class="col col-2 text_center vtext_middle">16/05/2023</div>
		<div class="col col-2 text_center vtext_middle">
			<ul>
				<li>Pizza 1 x2</li>
				<li>Pizza 1 x2</li>
				<li>Pizza 1 x2</li>
			</ul>
		</div>
		<div class="col col-2 text_center vtext_middle"><b>34.50€</b></div>
		<div class="col col-2 text_center vtext_middle">Alfredo</div>
		<div class="col col-2 text_center vtext_middle">
			<button class="bt bt_primary">
				<i class="fas fa-edit"></i> Ver Perfil</button>
			</button>
		</div>
	</div>
	<!-- Listagem de Encomendas -->';
}
?>