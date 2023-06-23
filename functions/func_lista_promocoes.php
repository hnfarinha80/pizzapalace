<?php
function lista_promocoes(){
	include 'connections/conn.php';
	$q = mysqli_query($conn,"SELECT * FROM promocoes");
	while($a = mysqli_fetch_array($q)){
		echo '
		<form method="post">
			<div class="row">
				<div class="col col-3 text_center vtext_middle">
					<label>Nome Promoção</label>
					<input type="text" name="prom_nome" value="'.$a["prom_nome"].'">
					<input type="hidden" name="prom_id" value="'.$a["prom_id"].'">
				</div>
				<div class="col col-3 text_center vtext_middle">
					<label>Data Inicio</label>
					<input type="date" name="prom_data_ini" placeholder="Data Inicio" value="'.$a["prom_data_ini"].'"><br>
					<label>Data Fim</label>
					<input type="date" name="prom_data_fim" placeholder="Data Fim" value="'.$a["prom_data_fim"].'">
				</div>
				<div class="col col-3 text_center vtext_middle">
					<label>Valor %: </label>
					<input type="number" min="0" max="10" step="1" name="prom_per_val" value="'.$a["prom_per_val"].'"><br>
					<label>Valor Inteiro:</label>
					<input type="text" name="prom_int_val" placeholder="Valor Inteiro" value="'.$a["prom_int_val"].'">
				</div>
				<div class="col col-3 text_center vtext_middle">
					<button type="submit" class="bt bt_action" name="atualizar_promocao">
						<i class="fas fa-info"></i> Atualizar Promoção</button>
					<button type="submit" class="bt bt_cancel" name="eliminar_promocao">
						<i class="fas fa-trash"></i> Apagar Promoção</button>
				</div>
			</div>
		</form>
		';
	}
	include 'connections/deconn.php';
}
?>