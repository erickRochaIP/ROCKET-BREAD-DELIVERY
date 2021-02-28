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

			require __DIR__ .'/ProdutoController.php';
			$pdControl = new ProdutoController();
			$pdControl->getAllProdutoCarrinho($post);

		}

		public function logout($post){
			unset($_SESSION['usuario']);

			require __DIR__.'/ProdutoController.php';
			$prodControl = new ProdutoController();
			$prodControl->getAllProdutoCarrinho($post);
		}

		public function getTelaCadastro($post){
			require __DIR__.'/../view/cadastro_view.php';
		}

		public function cadastro($post){
			$usuario = new Usuario();
			try{
				$usuario = $usuario->cadastro($post['username'], $post['password'], $post['passwordconf']);
				$_REQUEST['mensagem'] = "Usuario cadastrado!";
				require_once __DIR__.'/../view/cadastro_view.php';
			}catch(Exception $e){
				$_REQUEST['mensagem'] = $e->getMessage();
				require_once __DIR__.'/../view/cadastro_view.php';
			}
		}
	}
?>