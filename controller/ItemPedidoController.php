<?php
require_once __DIR__ .'/../model/ItemPedido.php';

class ItemPedidoController {
	public function getCarrinho($post){

		require_once __DIR__.'/../model/Produto.php';

		if(isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0){
			$_REQUEST['itensCarrinho'] = array();
			foreach ($_SESSION['carrinho'] as $item) {
				$produto = new Produto();
				$produto = $produto->getProdutoById($item[0]);

				$itemCarrinho = array();
				$itemCarrinho[] = $produto->getNome();
				$itemCarrinho[] = $produto->getPreco();
				$itemCarrinho[] = $item[1];
				$itemCarrinho[] = floatval($produto->getPreco()) * $item[1];
				$itemCarrinho[] = $item[0];

				$_REQUEST['itensCarrinho'][] = $itemCarrinho;
			}
		}

		require __DIR__.'/../view/carrinho_view.php';
	}

	public function eliminaItem($post){
		if (isset($post['id_produto'])){
			foreach ($_SESSION['carrinho'] as $key => $value) {
				if($value[0] == $post['id_produto']){
					unset($_SESSION['carrinho'][$key]);
					break;			
				}

			}
		}

		return $this->getCarrinho($post);
	}
}
?>