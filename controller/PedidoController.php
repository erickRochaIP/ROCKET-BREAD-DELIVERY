<?php
require_once __DIR__ .'/../model/Pedido.php';

class PedidoController {
	public function getItensPedidos($post){
		$pedido = new Pedido();

		$_REQUEST['itens'] = $pedido->getItensPedidos($post['id']);

		require __DIR__.'/../view/pedido_view.php';
	}

	public function realizar_pedido($post){
		echo "cheguei ate aqui";
	}
}
?>