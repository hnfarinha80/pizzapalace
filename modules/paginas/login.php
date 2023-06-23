<section class="login mt-2">
	<h2>Login</h2>
	<hr>
	<div class="mt-1 p-1">
		<form method="post">
			<label>Email:</label>
			<input type="email" placeholder="Email:" name="log_email" required>
			<label>Senha:</label>
			<input type="password" placeholder="Senha" name="log_senha" required>
			<button type="submit" class="bt bt_primary" name="bt_login">Entrar</button>
			<div class="row mt-1">
				<div class="col col-6 text_left">
				</div>
				<div class="col col-6 text_right">
					<a href="?p=register">Ainda não tem conta? Registe-se aqui.</a>
				</div>
			</div>
		</form>
		<?php 
		if(isset($_POST["bt_login"])){
			validar_login($_POST["log_email"], $_POST["log_senha"]);
		}
		?>
	</div>
</section>