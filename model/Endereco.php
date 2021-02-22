<?php

class Endereco {
	private $id;
	private $rua;
	private $bairro;
	private $numero;
	private $cidade;

	public function getId(){
		return $this->id;
	}

	public function getRua(){
		return $this->rua;
	}

	public function getBairro(){
		return $this->bairro;
	}

	public function getNumero(){
		return $this->numero;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setRua($rua){
		$this->rua = $rua;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}
}
?>