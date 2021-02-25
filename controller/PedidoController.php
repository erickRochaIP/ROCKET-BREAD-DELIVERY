<?php
require_once __DIR__ .'/../model/Pedido.php';

class PedidoController {
	public function getItensPedidos($post){
		$pedido = new Pedido();

		$_REQUEST['itens'] = $pedido->getItensPedidos($post['id']);

		require __DIR__.'/../view/pedido_view.php';
	}

	public function realizar_pedido($post){
		require_once __DIR__ .'/../model/Endereco.php';
		$endereco = new Endereco();
		try{
			$endereco->cadastro($post['rua'], $post['bairro'], $post['numero'], $post['cidade']);
		}catch(Exception $e){
			$_REQUEST['mensagem'] = $e->getMessage();
			require_once __DIR__.'/../error.php';
		}

		require_once __DIR__ .'/../model/Cliente.php';
		$cliente = new Cliente();
		try{
			$cliente->cadastro($endereco->getId());
		}catch(Exception $e){
			$_REQUEST['mensagem'] = $e->getMessage();
			require_once __DIR__.'/../error.php';
		}

		$pedido = new Pedido();
		try{
			$pedido->cadastro($cliente->getId());
			$pedido->cadastrarItens($_SESSION['carrinho']);
		}catch(Exception $e){
			$_REQUEST['mensagem'] = $e->getMessage();
			require_once __DIR__.'/../error.php';
		}

		echo "Deu tudo certo";


	}
}
?>