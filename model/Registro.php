<?php


class Registro {
	private $id;
	private $id_pedido;
	private $data;
	private $hora;
	private $situacao;

	public function getId(){
		return $this->id;
	}

	public function getIdPedido(){
		return $this->id_pedido;
	}

	public function getData(){
		return $this->data;
	}

	public function getHora(){
		return $this->hora;
	}

	public function getSituacao(){
		return $this->situacao;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setIdPedido($id_pedido){
		$this->id_pedido = $id_pedido;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function setHora($hora){
		$this->hora = $hora;
	}

	public function setSituacao($situacao){
		$this->situacao = $situacao;
	}
}
?>