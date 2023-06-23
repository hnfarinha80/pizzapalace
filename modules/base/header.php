<header class="mb1">
	<div class="row">
		<div class="col col-6">
			<div class="logo">PizzaPalace</div>
		</div>
		<div class="col col-6 text_right vtext_middle">
			<ul>
				<li>
					<?php 
					if(@$_SESSION["log_type"] != ''){
						echo '<a href="?p=profile">';
					}else{
						echo '<a href="?p=login">';
					}
					?>
						<i class="fas fa-user"></i>
					</a>
				</li>
				<li>
					<a href="?p=carrinho">
						<i class="fas fa-shopping-cart"></i><sup>2</sup>
					</a>
				</li>
				<li class="mobile">
					<a href="#">
						<i class="fas fa-bars"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</header>