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

	public function getRegistroByIdPedido($id_pedido){
		require __DIR__.'/../db_const.php';
		$conec = new PDO($dsn, $user, $pass);
		$sql = 'SELECT id, id_pedido, hora, data, situacao FROM registro WHERE id_pedido = :id_pedido ORDER BY id DESC LIMIT 1';
		$stmt = $conec->prepare($sql);
		$stmt->bindValue('id_pedido', $id_pedido);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();

		$row = $stmt->fetch();

		$registro = new Registro();
		$registro->setId($row['id']);
		$registro->setIdPedido($row['id_pedido']);
		$registro->setData($row['data']);
		$registro->setHora($row['hora']);
		$registro->setSituacao($row['situacao']);

		return $registro;
	}

	public function registrar($id_pedido){
		require __DIR__.'/../db_const.php';
		$conec = new PDO($dsn, $user, $pass);
		$insert = 'INSERT INTO registro (id_pedido, hora, data, situacao) VALUES (?, CURTIME(), CURDATE(), 1)';
		$stmt = $conec->prepare($insert);
		$stmt->execute([$id_pedido]);
	}
}
?>