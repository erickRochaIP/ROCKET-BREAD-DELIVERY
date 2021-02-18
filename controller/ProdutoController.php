<?php
require_once __DIR__ .'/../model/Produto.php';

class ProdutoController {
	public function getProdutoId($get) {
		$produto = new Produto();

		$_REQUEST['produtos'] = $produto->getProdutoById($get['id']);

		require_once __DIR__ .'/../view/produto_view.php';
	}

	public function saveProduto($get) {
		$produto = new Produto();

		$produto->setProduto($get['nome'], $get['descricao'], $get['preco'], $get['ativo']);
		$result = $produto->saveProduto();

		if ($result){
			echo "Produto salvo: ".$get['nome']." ".$get['descricao']." ".$get['preco']." ".$get['ativo'];			
		}else{
			echo "Problemas na insercao";
		}

	}

	public function getAllProduto($get) {
		$produto = new Produto();

		$_REQUEST['produtos'] = $produto->getAllProduto();

		require_once __DIR__ .'/../view/all_produtos_view.php';
	}
}

?>