<!--Challenge Promoções

Criar formulário para criação de promoção

nome promoção - prom_nome
inicio promocao - prom_data_ini
fim promocao - prom_data_fim
valor % promocao - prom_per_val
valor int promocao - prom_int_val


Seguido de listagem de promocoes: 

Mostrar: 
Nome Promoção + data ini e data fim + valor % ou int + hidden prom_id + botao update e botao apagar

 Criar categorias, editar/eliminar categorias -->
<div class="row">
	<div class="col col-3 text_center vtext_middle"><h4>Nome</h4></div>
	<div class="col col-3 text_center vtext_middle"><h4>Datas</h4></div>
	<div class="col col-3 text_center vtext_middle">Valores</div>
	<div class="col col-3 text_center vtext_middle"></div>
</div>
<!-- Crição de nova Categoria -->
<h3>Criar Nova Promoção</h3>
<form method="post">
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<label>Nome Promoção</label>
		<input type="text" name="prom_nome">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Data Inicio</label>
		<input type="date" name="prom_data_ini" placeholder="Data Inicio"><br>
		<label>Data Fim</label>
		<input type="date" name="prom_data_fim" placeholder="Data Fim">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Valor %: </label>
		<input type="number" min="0" max="10" step="1" name="prom_per_val"><br>
		<label>Valor Inteiro:</label>
		<input type="text" name="prom_int_val" placeholder="Valor Inteiro">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<button type="submit" class="bt bt_primary" name="nova_promocao">Criar Promoção</button>
	</div>
</div>
</form>
<?php 
if(isset($_POST['nova_promocao'])){
	criar_nova_promocao($_POST["prom_nome"], $_POST["prom_data_ini"], $_POST["prom_data_fim"], $_POST["prom_per_val"], $_POST["prom_int_val"]);
}
?>
<!-- Fim Criação de nova Categoria -->

<!-- Lista de categorias existentes -->
<h3>Promoções Existentes</h3>
<form method="post">
<div class="row">
	<div class="col col-3 text_center vtext_middle">
		<label>Nome Promoção</label>
		<input type="text" name="prom_nome" value="">
		<input type="hidden" name="prom_id" value="">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Data Inicio</label>
		<input type="date" name="prom_data_ini" placeholder="Data Inicio" value=""><br>
		<label>Data Fim</label>
		<input type="date" name="prom_data_fim" placeholder="Data Fim" value="">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Valor %: </label>
		<input type="number" min="0" max="10" step="1" name="prom_per_val"><br>
		<label>Valor Inteiro:</label>
		<input type="text" name="prom_int_val" placeholder="Valor Inteiro">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<button type="submit" class="bt bt_action" name="atualizar_promocao">
			<i class="fas fa-info"></i> Atualizar Promoção</button>
		<button type="submit" class="bt bt_cancel" name="eliminar_promocao">
			<i class="fas fa-trash"></i> Apagar Promoção</button>
	</div>
</div>
</form>
<!-- Fim Lista de categorias existentes -->