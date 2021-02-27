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

	public function getAllPedidos(){
		require __DIR__.'/../db_const.php';
		$conec = new PDO($dsn, $user, $pass);
		$sql = 'SELECT id, id_cliente FROM pedido';
		$stmt = $conec->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$pedidos = array();
		require __DIR__.'/ItemPedido.php';
		while ($row = $stmt->fetch()){
			$pedido = new Pedido();
			$pedido->setId($row['id']);
			$pedido->setIdCliente($row['id_cliente']);

			$pedidos[] = $pedido;
		}

		return $pedidos;	
	}

	public function getItensPedidos($id_pedido){
		require __DIR__.'/../db_const.php';
		$conec = new PDO($dsn, $user, $pass);
		$sql = 'SELECT id, id_produto, id_pedido, quantidade FROM item_pedido WHERE id_pedido = :id_pedido';
		$stmt = $conec->prepare($sql);
		$stmt->bindValue(':id_pedido', $id_pedido);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$itens = array();
		require __DIR__.'/ItemPedido.php';
		while ($row = $stmt->fetch()){
			$item = new ItemPedido();
			$item->setId($row['id']);
			$item->setIdProduto($row['id_produto']);
			$item->setIdPedido($row['id_pedido']);
			$item->setQuantidade($row['quantidade']);

			$itens[] = $item;
		}

		return $itens;

	}

	public function cadastro($id_cliente){
		require __DIR__.'/../db_const.php';
		$conec = new PDO($dsn, $user, $pass);
		$insert = 'INSERT INTO pedido (id_cliente) VALUES (?)';
		$stmt = $conec->prepare($insert);
		$stmt->execute([$id_cliente]);

		$this->setId($conec->lastInsertId());

		require __DIR__.'/Registro.php';
		$registro = new Registro();
		$registro->registrar($this->getId(), 1);
	}

	public function cadastrarItens($carrinho){
		require __DIR__.'/../db_const.php';
		$conec = new PDO($dsn, $user, $pass);
		$insert = 'INSERT INTO item_pedido (id_pedido, id_produto, quantidade) VALUES (?, ?, ?)';
		$stmt = $conec->prepare($insert);

		foreach($carrinho as $item){
			$stmt->execute([$this->getId(), $item[0], $item[1]]);
		}
	}
}
?>