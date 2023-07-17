<?php
//Habilitar a utilização de variáveis de sessão
session_start();
//mostrar erros
//error_reporting(E_ALL);
//Carrinho compras
include 'func_alocar_carrinho.php';
include 'func_contar_itens_carrinho.php';
include 'func_carrinho_montra.php';
include 'func_atualizar_item.php';
include 'func_eliminar_item.php';

// Funções interface
include 'func_footer_social.php';
include 'func_footer_contactos.php';

// Função de barra de navegação
include 'func_barra_navegacao.php';
include 'func_validar_login.php';
include 'func_lista_artigos.php';
include 'func_lista_encomendas.php';
include 'func_lista_utilizadores.php';
include 'func_criar_registo.php';
include 'func_menu_categorias.php';//menu do utilizador
include 'func_construtor_montra.php';
//chamada das funções da tarefa

//fim chamda das funções da tarefa;
//admin
if(@$_SESSION['log_type'] == 1){
	include 'func_criar_nova_categoria.php';
	include 'func_criar_nova_slice.php';
	include 'func_criar_novo_voucher.php';
	include 'func_criar_nova_promocao.php';
	include 'func_gerir_contacts.php';
	include 'func_lista_edicao_categorias.php';
	include 'func_atualizar_categoria.php';
	include 'func_eliminar_categoria.php';
	include 'func_drop_down_categorias.php';
	include 'func_drop_down_promocoes.php';
	include 'func_lista_vouchers.php';
	include 'func_atualizar_voucher.php';
	include 'func_eliminar_voucher.php';
	include 'func_lista_promocoes.php';
	include 'func_atualizar_promocao.php';
	include 'func_criar_artigo.php';
	include 'func_editar_artigo.php';
	include 'func_delete_artigo.php';
}
?>