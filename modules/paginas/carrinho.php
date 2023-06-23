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
	<!-- apresentar lista de prds existente e "talao" compra -->
	<div class="row">
		<div class="col col-9">
			<form method="post">
			<div class="row item_carrinho">
				<div class="col col-3">
					<img src="../foto.jpg">
				</div>
				<div class="col col-3">
					<b>Pizza Bacana</b>
					<p>cogumelos eetc</p>
				</div>
				<div class="col col-1">
					<label>Qtd:</label>
					<input type="hidden" name="item_prd_id">
					<input type="number" min="1" step="1" name="item_prd_qtd">	
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
		</div>
		<div class="col col-3">
			<div class="talao p5">
				
					<div class="col-12 text_right">
						55 x Pizza Bacana - 15.00€
					</div>
					<div class="col-12 text_right">
						55 x Pizza Bacana - 15.00€
					</div>
					<div class="col-12 text_right">
						55 x Pizza Bacana - 15.00€
					</div>
					<div class="col-12 text_right">
						55 x Pizza Bacana - 15.00€
					</div>
					<div class="col-12 text_right mt5">
						<b>Total:</b> 100.00€
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
</section>