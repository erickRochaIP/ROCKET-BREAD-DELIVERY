<?php
require_once __DIR__ .'/../model/Produto.php';

class ProdutoController {

	public function getProdutoId($post) {
		$produto = new Produto();

		$_REQUEST['produtos'] = $produto->getProdutoById($post['id']);

		require_once __DIR__ .'/../view/produto_view.php';
	}

	public function saveProduto($post, $files) {
		$produto = new Produto();

		$produto->setProduto($post['nome'], $post['descricao'], $post['preco'], $post['ativo']);
		$result = $produto->saveProduto();

		if ($result){
			$info = pathinfo($files['img']['name']);
			$ext = $info['extension'];
			$newname = $produto->getId().'.'.$ext;

			$target = __DIR__.'/../images/'.$newname;
			move_uploaded_file($files['img']['tmp_name'], $target);

            echo "Produto salvo: <br>";
            echo "Nome: ".$post['nome']."<br>";
            echo "Descrição: ".$post['descricao']."<br>";
            echo "Preço: ".$post['preco']."<br>";
            echo "Ativo: ".$post['ativo']."<br>";
		}else{
			echo "Problemas na insercao";
		}

	}

	public function cadastrarProduto(){
		require_once __DIR__ .'/../view/cadastra_produto_view.php';
	}

	public function getAllProduto($post) {
		$produto = new Produto();


		$_REQUEST['produtos'] = $produto->getAllProduto();

		require_once __DIR__ .'/../view/all_produtos_view.php';
	}

	public function getAllProdutoCarrinho($post){
		$produto = new Produto();
		if(isset($post['id_produto']) && $post['quantidade'] >= 1){
			if (!isset($_SESSION['carrinho'])){
				$_SESSION['carrinho'] = array();
			}

			$ja_registrado = False;
			$i = 0;

			foreach ($_SESSION['carrinho'] as $item) {
				if($item[0] == $post['id_produto']){
					$ja_registrado = True;
					break;
				}
				$i++;
			}

			if(!$ja_registrado){
				$novo_item = array();
				$novo_item[] = $post['id_produto'];
				$novo_item[] = $post['quantidade'];

				$_SESSION['carrinho'][] = $novo_item;
			}else{
				$_SESSION['carrinho'][$i][1] += $post['quantidade'];
			}
		}
		$_REQUEST['produtos'] = $produto->getAllProduto();

		require_once __DIR__ .'/../view/all_produtos_carrinho_view.php';
	}

}

?>
