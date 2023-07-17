<section class="montra">
	<!-- mostrar linhas de 4 itens tantas qtas as existencias -->
	<?php
	//Receber a variavel da categoria
	$cat_id = $_REQUEST['cat'];
	construtor_montra($cat_id);
	?>

	<div style="clear: both;"></div>
</section>