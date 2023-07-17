<?php 
carrinho_montra();
if(isset($_POST["atualizar_item"])){
	atualizar_item($_POST["ite_art_id"], $_POST['ite_qta']);
}
if(isset($_POST["eliminar_item"])){
	eliminar_item($_POST["ite_art_id"]);
}
?>
