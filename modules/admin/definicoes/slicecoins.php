<!--Criar quadro de parametros slicecoins

Quadro de rácio

Montante vs slicecoin
data

Exe: 
1€ - 1slice


campos: coin_montante, coin_slice, coin_data

Mostrar rácio atual-->
<h3>Cotação Slice Atual </h3>
<div class="row mb3">
	<div class="col col-12 text_center vtext_middle">
		<b>10.00€ - 1 Slicecoin</b> Data: 19/05/2023
	</div>
</div>

<div class="row">
	<div class="col col-3 text_center vtext_middle"><h4>Nome</h4></div>
	<div class="col col-3 text_center vtext_middle"><h4>Datas</h4></div>
	<div class="col col-3 text_center vtext_middle">Valores</div>
	<div class="col col-3 text_center vtext_middle"></div>
</div>
<!-- Crição de nova Categoria -->
<h3>Nova Cotação</h3>
<form method="post">
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<label>Montante €</label>
		<input type="number" name="coin_montante">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Montante €</label>
		<input type="number" name="coin_slice">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Data</label>
		<input type="date" name="coin_data" placeholder="Data"><br>
	</div>
	<div class="col col-3 text_center vtext_middle">
		<button type="submit" class="bt bt_primary" name="nova_cotacao_slice">Atualizar</button>
	</div>
</div>
</form>
<?php 
if(isset($_POST['nova_cotacao_slice'])){
	criar_nova_slice($_POST["coin_montante"], $_POST["coin_slice"], $_POST["coin_data"]);
}
?>
<!-- Fim Criação de nova Categoria -->


