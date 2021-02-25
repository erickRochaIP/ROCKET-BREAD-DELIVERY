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

	public function cadastro($id_endereco){
		require __DIR__.'/../db_const.php';
		$conec = new PDO($dsn, $user, $pass);
		$sql = 'SELECT id FROM cliente WHERE id_endereco = "'.$id_endereco.'";';
		$stmt = $conec->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();

		if ($stmt->rowCount() != 0){
			$row = $stmt->fetch();
			$this->setId($row['id']);
		} else {
			$insert = 'INSERT INTO cliente (id_endereco) VALUES (?)';
			$stmt = $conec->prepare($insert);
			$stmt->execute([$id_endereco]);

			$stmt = $conec->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$row = $stmt->fetch();
			$this->setId($row['id']);
		}
	}
}

?>