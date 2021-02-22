<?php


class Pedido {
	private $id;
	private $id_cliente;

	public function getId(){
		return $this->id;
	}

	public function getIdCliente(){
		return $this->id_cliente;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setIdCliente($id_cliente){
		$this->id_cliente = $id_cliente;
	}
}
?>