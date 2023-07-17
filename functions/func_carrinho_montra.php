<?php 
function carrinho_montra(){
	include 'connections/conn.php';
	$check = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM items WHERE ite_car_id = '$_SESSION[car_id]'"));
	if($check != 0){
		//Há artigos carrinho
		$q = mysqli_query($conn,"SELECT items.*, artigos.* FROM items JOIN artigos ON items.ite_art_id = artigos.art_id WHERE items.ite_car_id = '$_SESSION[car_id]'");
		echo '<section>
		<div class="row">
		<div class="col col-9">';
		//correr loop de artigos do carrinho ja na coluna 9 
		while($a = mysqli_fetch_array($q)){
			echo '
			<!-- apresentar lista de prds existente e "talao" compra -->
	<div class="row">
			<form method="post">
			<div class="row item_carrinho">
				<div class="col col-3">
					<img src="img/artigos/'.$a["art_photo"].'">
				</div>
				<div class="col col-3">
					<b>'.$a["art_nome"].'</b>
					<p>descricao</p>
				</div>
				<div class="col col-1">
					<label>Qtd:</label>
					<input type="hidden" name="ite_art_id" value="'.$a["ite_art_id"].'">
					<input type="number" min="1" step="1" name="ite_qta" value="'.$a["ite_qta"].'">	
				</div>
				<div class="col col-1">
					<button type="submit" class="bt bt_primary" name="atualizar_item">
						<i class="fas fa-refresh"></i>
					</button>
					<button type="submit" class="bt bt_cancel" name="eliminar_item">
						<i class="fas fa-trash"></i>
					</button>
				</div>
			</div>
			</form>
		</div>';
		}
		echo '</div>
		<div class="col col-3">
			<div class="talao p5">';
			$total = 0;
			$q = mysqli_query($conn,"SELECT items.*, artigos.* FROM items JOIN artigos ON items.ite_art_id = artigos.art_id WHERE items.ite_car_id = '$_SESSION[car_id]'");
			while($totais = mysqli_fetch_array($q)){
				echo '<div class="col-12 text_right">
						'.$totais["ite_qta"].' x '.$totais["art_nome"].' - '.number_format($totais["art_preco"],2,',','.').'€
					</div>';
					$total = $total + $totais["ite_qta"]*$totais["art_preco"];
			}
					
					echo'
					<div class="col-12 text_right mt5">
						<b>Total:</b> '.number_format($total,2,',','.').'€
					</div>
				
					<div class="col-12 text_right mt5">
						<button class="bt bt_primary" style="width: 50%;">Checkout</button>
					</div>
					<div class="col-12 text_right mt5">
						Icons de meios
					</div>
			</div>
		</div>
	</div>
		</div></section>';
	}else{
		//Não há artigos carrinho
		echo '
		<section>
	<div class="row mt5">
		<div class="col-12 text_center mt5">
		 	<h1>O seu carrinho está vazio! </h1>
		</div>
		<div class="col-12 text_center mt5">
		 	<button type="submit" class="bt bt_primary">
		 		Escolha a sua pizza!
		 	</button>
		</div>
	</div>
</section>
';
	}
	include 'connections/deconn.php';
}
?>