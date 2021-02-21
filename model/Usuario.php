<?php
	class Usuario{
		private $id;
		private $nomeusuario;
		private $senha;
		private $nivelacesso;
		
		public function getId(){
			return $this->id;
		}

		public function getNomeUsuario(){
			return $this->nomeusuario;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function getNivelAcesso(){
			return $this->nivelacesso;
		}


		public function setId($id){
			$this->id = $id;
		}

		public function setNomeUsuario($nomeusuario){
			$this->nomeusuario = $nomeusuario;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function setNivelAcesso($nivelacesso){
			$this->nivelacesso = $nivelacesso;
		}

		public function login($nomeusuario, $senha){
			require_once __DIR__ .'/../db_const.php';
    		$conec = new PDO($dsn, $user, $pass);
	    	$sql = 'SELECT id, nomeusuario, senha, nivelacesso FROM usuario WHERE nomeusuario = "'.$nomeusuario.'" AND senha = "'.$senha.'";';
	    	$stmt = $conec->prepare($sql);
	    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	    	$stmt->execute();

	    	if ($stmt->rowCount() != 1){
	    		throw new Exception("Inconsistent row count");
	    		
	    	}

	    	$row  = $stmt -> fetch();

	    	$usuario = new Usuario();
	    	$usuario->setId($row['id']);
	    	$usuario->setNomeUsuario($row['nomeusuario']);
	    	$usuario->setSenha($row['senha']);
	    	$usuario->setNivelAcesso($row['nivelacesso']);

	    	return $usuario;
		}
	}
?>