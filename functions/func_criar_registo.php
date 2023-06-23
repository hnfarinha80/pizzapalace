<?php
function function_criar_registo($acc_name, $log_email, $log_senha, $contra_senha){
	//aceder a bd
	include 'connections/conn.php';
	$validar = mysqli_fetch_array(mysqli_query($conn,"SELECT log_email FROM logins WHERE log_email = '$log_email'"));
	if(!$validar){
		//sucesso - nao existe o email na BD podemos registar
		if($log_senha == $contra_senha){
			//criar o registo
			mysqli_query($conn,"INSERT INTO logins (log_email, log_senha) VALUES ('$log_email','$log_senha')");
			//Obter o ultimo id gerado utilizando a ligação (conn)
			$log_id = mysqli_insert_id($conn);
			//guardar o id de login como chave estrangeira na tabela accounts
			mysqli_query($conn, "INSERT INTO accounts (acc_log_id, acc_name) VALUE ('$log_id','$acc_name')");
		echo '<meta http-equiv="refresh" content="0;url=?p=login">';
		}else{
			echo '<h4>As senhas não correspondem</h4>';
		}
	}else{
		echo '<h4>Este email já existe. Esqueceu-se da sua senha?</h4>';
	}
	include 'connections/deconn.php';
}
?>