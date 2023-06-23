<?php 
function lista_edicao_categorias(){
	include 'connections/conn.php';
	$q = mysqli_query($conn,"SELECT * FROM categorias");
	while($a = mysqli_fetch_array($q)){
	//$a = mysqli_fetch_array($q);
		echo '
		<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col col-3 text_center vtext_middle">
					<img src="img/categorias/'.$a["cat_photo"].'">
					<input type="file" name="cat_photo">
					<input type="hidden" name="cat_id" value="'.$a["cat_id"].'">
				</div>
				<div class="col col-3 text_center vtext_middle">
					<input type="text" name="cat_title" placeholder="Titulo" value="'.$a["cat_title"].'">
				</div>
				<div class="col col-3 text_center vtext_middle">
					<button type="submit" class="bt bt_action" name="atualizar_categoria">
						<i class="fas fa-info"></i> Atualizar Categoria</button>
				</div>
				<div class="col col-3 text_center vtext_middle">
					<button type="submit" class="bt bt_cancel" name="eliminar_categoria">
						<i class="fas fa-trash"></i> Apagar Categoria</button>
				</div>
			</div>
		</form>
		';
	}
	include 'connections/deconn.php';
	//exit();
	//echo '<meta http-equiv="refresh" content="0;url=?p=definicoes&opt=categorias">';
}

?>