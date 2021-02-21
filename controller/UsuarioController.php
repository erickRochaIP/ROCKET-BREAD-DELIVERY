<?php
	require_once __DIR__ .'/../model/Usuario.php';

	class UsuarioController{
		public function login($post){
			$usuario = new Usuario();
			try{
				$usuario = $usuario->login($post['username'], $post['password']);

				$_REQUEST['usuario'] = $usuario;
				require_once __DIR__ .'/../view/tela_inicial_view.php';
			}catch(Exception $e){
				$_REQUEST['mensagem'] = "Nome de Usuario ou Senha incorretos";
				require_once __DIR__.'/../login.php';
			}

		}
	}
?>