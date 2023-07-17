<?php 
function validar_login($log_email, $log_senha){
	//chamada a ligacao da bd
	include 'connections/conn.php';

	//Comparar os dados inseridos no form com a bd
	//mysqli_fetch_array - Retornar sob a form de array os valores obtidos na bd
	//mysqli_query - executar determinado comando sql (identificar a ligacao a usar para executar o comando)
	$validar = mysqli_fetch_array(mysqli_query($conn, "SELECT log_id, log_email, log_senha, log_type FROM logins WHERE log_email = '$log_email' AND log_senha = '$log_senha'"));
	//Nao existem as credenciais inseridas na BD
	if(!$validar){
		echo '<h4>Os dados inseridos não são válidos</h4>';
	}else{
		$_SESSION["log_type"] = $validar["log_type"];
		$_SESSION["log_email"] = $log_email;
		$_SESSION["log_id"] = $validar["log_id"];
		echo '<meta http-equiv="refresh" content="0;url=?">';
	}
	/* validacao "manual" de credenciais 
	if($log_email == 'admin@mail.com' && $log_senha == '123'){
		//cricao de variavel de sessao
		$_SESSION["log_type"] = '1';
		$_SESSION["log_email"] = $log_email;
		//recarregar o browser para determinada posicao no site
		echo '<meta http-equiv="refresh" content="0;url=?">';
	}else if($log_email == 'user@mail.com' && $log_senha == '123'){
		$_SESSION["log_type"] = '0';
		$_SESSION["log_email"] = $log_email;
		echo '<meta http-equiv="refresh" content="0;url=?">';
	}
	else{
		echo '<h4>Os dados inseridos não são válidos</h4>';
	}
	*/
	include 'connections/deconn.php';
}
?>