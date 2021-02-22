<?php


class ItemPedido {
	private $id;
	private $id_produto;
	private $id_pedido;
	private $quantidade;

	public function getId(){
		return $this->id;
	}

	public function getIdProduto(){
		return $this->id_produto;
	}

	public function getIdPedido(){
		return $this->id_pedido;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setIdProduto($id_produto){
		$this->id_produto = $id_produto;
	}

	public function setIdPedido($id_pedido){
		$this->id_pedido = $id_pedido;
	}

	public function setQuantidade($id_quantidade){
		$this->id_quantidade = $id_quantidade;
	}
}
?>