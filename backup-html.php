<!--<div class="montra">-->
		
		$opcao = $_REQUEST['conteudo'];
			if(empty($opcao)){
				echo 'Home';
			}else{
				$opcao = $opcao * 3;
				for ($i=0; $i < $opcao; $i++) { 
					$preco = $opcao + 10 +$i;
					echo '<div class="pizza">
					<img src="../img/demo.jpg">
					<h3>'.$opcao.' '.$i.'</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					<div class="row">
						<div class="col col-6 p1 vtext_middle">
							<b>'.
							number_format($preco,2,'.',',')
							.'€</b>
						</div>
						<div class="col col-6 p1 vtext_middle">
							<button class="bt bt_primary">Comprar</button>
						</div>
					</div>
				</div>';
				}
			}
		?>
		<!--
			<div class="pizza">
				<img src="../img/demo.jpg">
				<h3>Titulo</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				<div class="row">
					<div class="col col-6 p1 vtext_middle">
						<b>10.00€</b>
					</div>
					<div class="col col-6 p1 vtext_middle">
						<button class="bt bt_primary">Comprar</button>
					</div>
				</div>
			</div>
			<div class="pizza">
				<img src="../img/demo.jpg">
				<h3>Titulo</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				<div class="row">
					<div class="col col-6 p1 vtext_middle">
						<b>10.00€</b>
					</div>
					<div class="col col-6 p1 vtext_middle">
						<button class="bt bt_primary">Comprar</button>
					</div>
				</div>
			</div>
			<div class="pizza">
				<img src="../img/demo.jpg">
				<h3>Titulo</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				<div class="row">
					<div class="col col-6 p1 vtext_middle">
						<b>10.00€</b>
					</div>
					<div class="col col-6 p1 vtext_middle">
						<button class="bt bt_primary">Comprar</button>
					</div>
				</div>
			</div>
			<div class="pizza">
				<img src="../img/demo.jpg">
				<h3>Titulo</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				<div class="row">
					<div class="col col-6 p1 vtext_middle">
						<b>10.00€</b>
					</div>
					<div class="col col-6 p1 vtext_middle">
						<button class="bt bt_primary">Comprar</button>
					</div>
				</div>
			</div>
			<div class="limpa"></div>
		</div>-->