<?php

class Cliente {
	private $id;
	private $id_endereco;
	private $celular;

	public function getId(){
		return $this->id;
	}

	public function getIdEndereco(){
		return $this->id_endereco;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setIdEndereco($id_endereco){
		$this->id_endereco = $id_endereco;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}
}

?>