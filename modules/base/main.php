<main class="mb1">
<?php 
@$p = $_REQUEST['p'];
switch ($p) {
	case '1':
		include 'modules/paginas/menu1.php';
		break;
	case '2':
		include 'modules/paginas/menu2.php';
		break;
	case '3':
		include 'modules/paginas/menu3.php';
		break;
	case '4':
		include 'modules/paginas/menu4.php';
		break;
	case '5':
		include 'modules/paginas/contactos.php';
		break;
	case 'login':
		include 'modules/paginas/login.php';
		break;
	case 'register':
		include 'modules/paginas/register.php';
		break;
	case 'profile':
		include 'modules/paginas/profile.php';
		break;
	case 'carrinho':
		include 'modules/paginas/carrinho.php';
		break;
	//admin options
		case 'artigos';
			include 'modules/admin/artigos.php';
		break;
		case 'novo-artigo';
			include 'modules/admin/novo-artigo.php';
		break;
		case 'encomendas';
			include 'modules/admin/encomendas.php';
		break;
		case 'utilizadores';
			include 'modules/admin/utilizadores.php';
		break;
		case 'definicoes';
			include 'modules/admin/definicoes.php';
		break;
	default:
		include 'modules/paginas/homepage.php';
		break;
}
?>
</main>