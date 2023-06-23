<section>
	<h3>Definições</h3>
	<div class="row">
		<div class="col col-3">
			<a href="?p=definicoes&opt=categorias">
				<button class="bt bt_primary">Categorias</button>
			</a>
			<a href="?p=definicoes&opt=banners">
				<button class="bt bt_primary">Banners</button>
			</a>
			<a href="?p=definicoes&opt=promocoes">
				<button class="bt bt_primary">Promoções</button>
			</a>
			<a href="?p=definicoes&opt=slicecoins">
				<button class="bt bt_primary">SliceCoins</button>
			</a>
			<a href="?p=definicoes&opt=vouchers">
				<button class="bt bt_primary">Vouchers</button>
			</a>
			<a href="?p=definicoes&opt=contactos">
				<button class="bt bt_primary">Contactos</button>
			</a>
		</div>
		<div class="col col-9">
			<!-- Opções de definições -->
			<?php 
				@$opt = $_REQUEST['opt'];//ler da url a variavel opt
				switch ($opt) {
					case 'categorias':
						include 'modules/admin/definicoes/categorias.php';
						break;
					case 'banners':
						include 'modules/admin/definicoes/banners.php';
						break;
					case 'promocoes':
						include 'modules/admin/definicoes/promocoes.php';
						break;
					case 'slicecoins':
						include 'modules/admin/definicoes/slicecoins.php';
						break;
					case 'vouchers':
						include 'modules/admin/definicoes/vouchers.php';
						break;
					case 'contactos':
						include 'modules/admin/definicoes/contactos.php';
						break;
					default:
						echo '<h2>Selecione a opção pretendida</h2>';
						break;
				}
			?>
			<!-- Fim de opções de definições -->
		</div>
		</div>
	</div>
</section>