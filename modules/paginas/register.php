<section class="login mt-2">
	<h2>Registo</h2>
	<hr>
	<div class="mt-1 p-1">
		<form method="post">
			<label>Nome:</label>
			<input type="text" placeholder="Nome:" name="acc_name" required>
			<label>Email:</label>
			<input type="email" placeholder="Email:" name="log_email" required>
			<label>Senha:</label>
			<input type="password" placeholder="Senha" name="log_senha" required>
			<label>Repita a senha:</label>
			<input type="password" placeholder="Repita a senha" name="contra_senha" required>
			<button type="submit" class="bt bt_primary" name="bt_registar">Registar</button>
			<div class="row mt-1">
				<div class="col col-6 text_left">
				</div>
				<div class="col col-6 text_right">
					<a href="?p=login">Já tem conta? Faça Login aqui.</a>
				</div>
			</div>
		</form>
		<?php 
		if(isset($_POST["bt_registar"])){
			function_criar_registo($_POST["acc_name"], $_POST["log_email"], $_POST["log_senha"], $_POST['contra_senha']);
		}
		?>
	</div>
</section>