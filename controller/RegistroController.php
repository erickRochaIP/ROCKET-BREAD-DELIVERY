<?php
require __DIR__ .'/../model/Registro.php';

class RegistroController {
	public function setPedidoSituacao($post){
		$registro = new Registro();
		$registro->registrar($post['id'], $post['situacao']);

		require __DIR__ .'/PedidoController.php';

		$pedContr = new PedidoController();
		$pedContr->getItensPedidos($post);

		/*
		require __DIR__ .'/../model/Pedido.php';
		$pedido = new Pedido();

		
		$_REQUEST['itens'] = $pedido->getItensPedidos($post['id']);

		$_REQUEST['registro'] = $registro->getRegistroByIdPedido($post['id']);

		$_REQUEST['id_pedido'] = $post['id'];

		require __DIR__.'/../view/pedido_view.php';
		*/
	}
}
?>