<?php
	require_once __DIR__ .'/../model/Usuario.php';

	class UsuarioController{
		public function login($post){
			$usuario = new Usuario();
			try{
				$usuario = $usuario->login($post['username'], $post['password']);

				$_SESSION['usuario'] = array();
				$_SESSION['usuario'][] = $usuario->getId();
				$_SESSION['usuario'][] = $usuario->getNomeUsuario();
				$_SESSION['usuario'][] = $usuario->getNivelAcesso();

			}catch(Exception $e){
				$_REQUEST['mensagem'] = "Nome de Usuario ou Senha incorretos";
				require_once __DIR__.'/../login.php';
				return;
			}

			require_once __DIR__ .'/PedidoController.php';
			$pdControl = new PedidoController();
			$pdControl->getTelaInicial($post);

		}

		public function cadastro($post){
			$usuario = new Usuario();
			try{
				$usuario = $usuario->cadastro($post['username'], $post['password'], $post['passwordconf']);
				$_SESSION['usuario'] = $usuario;
				require_once __DIR__.'/../view/tela_inicial_view.php';
			}catch(Exception $e){
				$_REQUEST['mensagem'] = $e->getMessage();
				require_once __DIR__.'/../cadastro.php';
			}
		}
	}
?>