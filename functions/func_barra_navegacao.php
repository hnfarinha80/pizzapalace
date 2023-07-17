<?php
// Declaracao de funcao php
function barra_navegacao(){
	//conteudo da funcao
	echo '<li><a href="?"><i class="fas fa-home"></i></a></li>';
		//Menus diferentes para admin / user
	if(@$_SESSION["log_type"] == '1'){
		//Admin Menu
		echo '<li><a href="?p=artigos">Artigos</a></li>';
		echo '<li><a href="?p=encomendas">Encomendas</a></li>';
		echo '<li><a href="?p=utilizadores">Utilizadores</a></li>';
		echo '<li><a href="?p=definicoes">Definições</a></li>';
		//Cria a navegação destes 4 menus de administração, em cada entrada vamos mostrar o nome da opção. Estes ficheiros ficam em modules/admin
	}else{
		//User Menu
		menu_categorias();
		/*for ($i=1; $i < 6; $i++) { 
			if($i == 5){
				echo '<li><a href="?p='.$i.'"> Contactos </a></li>';
			}else{
				echo '<li><a href="?p='.$i.'"> Menu '.$i.'</a></li>';
			}
		}*/
	}
	//Opção de logout da conta autenticada
	if(@$_SESSION["log_type"] != ''){
		echo '<li><a href="sair.php">Sair</a></li>';
	}
}

?>