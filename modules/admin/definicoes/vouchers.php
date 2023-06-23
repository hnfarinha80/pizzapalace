<!--Criar formulário criação de voucher

vou_code
vou_nome
vou_data_ini
vou_data_fim
vou_valor

Listar vouchers

Mostrar editável campos:

vou_code, vou_nome, vou_data_ini, vou_data_fim, vou_valor + hidden vou_id + botao UPDATE e botao Apagar

 Criar categorias, editar/eliminar categorias -->
<div class="row">
	<div class="col col-3 text_center vtext_middle"><h4>Codigo</h4></div>
	<div class="col col-3 text_center vtext_middle"><h4>Datas</h4></div>
	<div class="col col-3 text_center vtext_middle"><h4>Valor</h4></div>
	<div class="col col-3 text_center vtext_middle"></div>
</div>
<!-- Crição de nova Categoria -->
<h3>Criar Novo Voucher</h3>
<form method="post">
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<input type="text" name="vou_code" placeholder="Codigo">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Data Inicio</label>
		<input type="date" name="vou_data_ini" placeholder="Data Inicio" value=""><br>
		<label>Data Fim</label>
		<input type="date" name="vou_data_fim" placeholder="Data Fim" value="">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<input type="text" name="vou_valor" placeholder="Valor">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<button type="submit" class="bt bt_primary" name="nova_voucher">Criar Voucher</button>
	</div>
</div>
</form>
<?php 
if(isset($_POST['nova_voucher'])){
	criar_novo_voucher($_POST["vou_code"], $_POST["vou_data_ini"], $_POST["vou_data_fim"], $_POST["vou_valor"]);
}
?>
<!-- Fim Criação de nova Categoria -->

<!-- Lista de categorias existentes -->
<h3>Vouchers Existentes</h3>
<form method="post">
<div class="row">
	<div class="col col-3 text_center vtext_middle">
		<input type="text" name="vou_code" placeholder="Codigo" value="">
		<input type="hidden" name="vou_id" value="">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Data Inicio</label>
		<input type="date" name="vou_data_ini" placeholder="Data Inicio" value=""><br>
		<label>Data Fim</label>
		<input type="date" name="vou_data_fim" placeholder="Data Fim" value="">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<input type="text" name="vou_valor" placeholder="Valor">
		
	</div>
	<div class="col col-3 text_center vtext_middle">
		<button type="submit" class="bt bt_action" name="atualizar_voucher">
			<i class="fas fa-info"></i> Atualizar Voucher</button>
		<button type="submit" class="bt bt_cancel" name="eliminar_voucher">
			<i class="fas fa-trash"></i> Apagar Voucher</button>
	</div>
</div>
</form>
<!-- Fim Lista de categorias existentes -->