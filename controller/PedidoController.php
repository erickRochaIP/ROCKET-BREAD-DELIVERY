<?php
require_once __DIR__ .'/../model/Pedido.php';

class PedidoController {
	public function getItensPedidos($post){
		$pedido = new Pedido();

		$itens = $pedido->getItensPedidos($post['id']);

		require_once __DIR__ .'/../model/Registro.php'; 
		$registro = new Registro();
		$_REQUEST['registro'] = $registro->getRegistroByIdPedido($post['id']);

		$_REQUEST['id_pedido'] = $post['id'];

		$_REQUEST['itens'] = array();

		require_once __DIR__ .'/../model/Produto.php';

		foreach ($itens as $item) {
			$produto = new Produto();

			$produto = $produto->getProdutoById($item->getIdProduto());

			$row = array();
			$row[] = $produto;
			$row[] = $item;

			$_REQUEST['itens'][] = $row;
		}

		require __DIR__.'/../view/pedido_view.php';
	}

	public function getPedidosCliente($post){
		$_REQUEST['pedidos'] = array();

		$pedido = new Pedido();
		$pedidos = $pedido->getAllPedidosCliente($post['id_cliente']);
		require __DIR__ .'/../model/Registro.php';
		foreach ($pedidos as $ped) {
			$registro = new Registro();
			$reg = $registro->getRegistroByIdPedido($ped->getId());

			$row = array();
			$row[] = $ped;
			$row[] = $reg;

			$_REQUEST['pedidos'][] = $row;
		}

		require __DIR__.'/../model/Endereco.php';
		$endereco = new Endereco();
		$_REQUEST['endereco'] = $endereco->getEnderecoByClienteId($post['id_cliente']);

		require_once __DIR__ .'/../view/pedidos_cliente_view.php';
	}

	public function getTelaInicial($post){
		$_REQUEST['pedidos'] = array();

		$pedido = new Pedido();
		$pedidos = $pedido->getAllPedidos();

		require __DIR__ .'/../model/Registro.php';

		foreach ($pedidos as $ped) {
			$registro = new Registro();
			$reg = $registro->getRegistroByIdPedido($ped->getId());

			$row = array();
			$row[] = $ped;
			$row[] = $reg;

			$_REQUEST['pedidos'][] = $row;
		}

		require_once __DIR__ .'/../view/tela_inicial_view.php';
	}

	public function realizar_pedido($post){
		require_once __DIR__ .'/../model/Endereco.php';
		$endereco = new Endereco();
		try{
			$endereco->cadastro($post['rua'], $post['bairro'], $post['numero'], $post['cidade']);
		}catch(Exception $e){
			$_REQUEST['mensagem'] = $e->getMessage();
			require_once __DIR__.'/../error.php';
			return;
		}

		require_once __DIR__ .'/../model/Cliente.php';
		$cliente = new Cliente();
		try{
			$cliente->cadastro($endereco->getId());
		}catch(Exception $e){
			$_REQUEST['mensagem'] = $e->getMessage();
			require_once __DIR__.'/../error.php';
			return;
		}

		$pedido = new Pedido();
		try{
			$pedido->cadastro($cliente->getId());
			$pedido->cadastrarItens($_SESSION['carrinho']);
		}catch(Exception $e){
			$_REQUEST['mensagem'] = $e->getMessage();
			require_once __DIR__.'/../error.php';
			return;
		}

		unset($_SESSION['carrinho']);

		require_once __DIR__.'/../view/compra_realizada_view.php';


	}
}
?>