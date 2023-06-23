<?php
function lista_vouchers(){
	include 'connections/conn.php';
	$q = mysqli_query($conn,"SELECT * FROM vouchers");
	while($a = mysqli_fetch_array($q)){
		echo '
		<form method="post">
			<div class="row">
				<div class="col col-3 text_center vtext_middle">
					<input type="text" name="vou_code" placeholder="Codigo" value="'.$a["vou_code"].'">
					<input type="hidden" name="vou_id" value="'.$a["vou_id"].'">
				</div>
				<div class="col col-3 text_center vtext_middle">
					<label>Data Inicio</label>
					<input type="date" name="vou_data_ini" placeholder="Data Inicio" value="'.$a["vou_data_ini"].'"><br>
					<label>Data Fim</label>
					<input type="date" name="vou_data_fim" placeholder="Data Fim" value="'.$a["vou_data_fim"].'">
				</div>
				<div class="col col-3 text_center vtext_middle">
					<input type="text" name="vou_valor" placeholder="Valor" value="'.$a["vou_valor"].'">
					
				</div>
				<div class="col col-3 text_center vtext_middle">
					<button type="submit" class="bt bt_action" name="atualizar_voucher">
						<i class="fas fa-info"></i> Atualizar Voucher</button>
					<button type="submit" class="bt bt_cancel" name="eliminar_voucher">
						<i class="fas fa-trash"></i> Apagar Voucher</button>
				</div>
			</div>
		</form>
		';
	}
	include 'connections/deconn.php';
}
?>