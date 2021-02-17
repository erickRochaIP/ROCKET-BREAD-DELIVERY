<?php
require_once 'model/Produto.php';

class ProdutoController {
	public function getProductId($id) {
		$produto = new Produto();

		$_REQUEST['produtos'] = $produto->getProdutoById($id);

		require_once 'view/produto_view.php';
	}
}

?>