<?php
require_once __DIR__ .'/../model/ItemPedido.php';

class ItemPedidoController {
	public function getCarrinho($post){
		require __DIR__.'/../view/carrinho_view.php';
	}
}
?>