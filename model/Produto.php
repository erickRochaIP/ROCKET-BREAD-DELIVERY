<?php


class Produto {
	private $id;
	private $nome;
	private $descricao;
	private $preco;
	private $ativo;

	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function getAtivo(){
		return $this->ativo;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function setPreco($preco){
		$this->preco = $preco;
	}

	public function setAtivo($ativo){
		$this->ativo = $ativo;
	}

	public function setProduto($nome, $descricao, $preco, $ativo){
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->preco = $preco;
		$this->ativo = $ativo;
	}

	public function getProdutoById($id){
		require_once 'db_const.php';
    	$conec = new PDO($dsn, $user, $pass);
    	$sql = 'SELECT id, nome, descricao, preco, ativo FROM produto WHERE id = '.$id.';';
    	$stmt = $conec->prepare($sql);
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$stmt->execute();
    	while ($row = $stmt->fetch())
    	{
    		$this->setNome($row['nome']);
    		$this->setDescricao($row['descricao']);
    		$this->setPreco($row['preco']);
    		$this->setAtivo($row['ativo']);
    	}
    	$this->id = $id;

    	return $this;
	}

	public function saveProduto(){
		require_once 'db_const.php';
    	$conec = new PDO($dsn, $user, $pass);
    	$sql = 'INSERT INTO produto(nome, descricao, preco, ativo) VALUES(?, ?, ?, ?)';
    	$stmt = $conec->prepare($sql);
    	$stmt->execute([$this->nome, $this->descricao, $this->preco, $this->ativo]);
    	
    	return $stmt;
	}
}
?>