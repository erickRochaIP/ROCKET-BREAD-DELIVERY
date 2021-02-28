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

	public function getEnderecoByClienteId($id_cliente){
		require __DIR__.'/../db_const.php';
			$conec = new PDO($dsn, $user, $pass);
		$sql = 'SELECT endereco.id, rua, bairro, numero, cidade FROM endereco JOIN cliente ON endereco.id = cliente.id_endereco WHERE cliente.id = :id_cliente';
		$stmt = $conec->prepare($sql);
		$stmt->bindValue(':id_cliente', $id_cliente, PDO::PARAM_INT);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$row = $stmt->fetch();

		$this->setId($row['id']);
		$this->setBairro($row['bairro']);
		$this->setRua($row['rua']);
		$this->setNumero($row['numero']);
		$this->setCidade($row['cidade']);

		return $this;
	}

	public function cadastro($rua, $bairro, $numero, $cidade){
		require __DIR__.'/../db_const.php';
			$conec = new PDO($dsn, $user, $pass);
		$sql = 'SELECT id FROM endereco WHERE rua = :rua AND numero = :numero;';
		$stmt = $conec->prepare($sql);
		$stmt->bindValue(':rua', $rua, PDO::PARAM_STR);
		$stmt->bindValue(':numero', $numero, PDO::PARAM_INT);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();

		if ($stmt->rowCount() != 0){
			$row = $stmt->fetch();
			$this->setId($row['id']);
		} else {
			$insert = 'INSERT INTO endereco (rua, bairro, numero, cidade) VALUES (?, ?, ?, ?)';
			$stmt = $conec->prepare($insert);
			$stmt->execute([$rua, $bairro, $numero, $cidade]);

			$stmt = $conec->prepare($sql);
			$stmt->bindValue(':rua', $rua);
			$stmt->bindValue(':numero', $numero);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$row = $stmt->fetch();
			$this->setId($row['id']);
		}
	}
}
?>