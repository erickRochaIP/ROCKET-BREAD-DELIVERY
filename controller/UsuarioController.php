<?php
	require_once __DIR__ .'/../model/Usuario.php';

	class UsuarioController{

		public function getTelaLogin($post){
			require __DIR__.'/../view/login_view.php';
		}

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
				require __DIR__.'/../view/login_view.php';
				return;
			}

			require __DIR__ .'/PedidoController.php';
			$pdControl = new PedidoController();
			$pdControl->getTelaInicial($post);

		}

		public function getTelaCadastro($post){
			require __DIR__.'/../view/cadastro_view.php';
		}

		public function cadastro($post){
			$usuario = new Usuario();
			try{
				$usuario = $usuario->cadastro($post['username'], $post['password'], $post['passwordconf']);
				$this->login($post);
			}catch(Exception $e){
				$_REQUEST['mensagem'] = $e->getMessage();
				require_once __DIR__.'/../view/cadastro_view.php';
			}
		}
	}
?>