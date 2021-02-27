<?php
	require_once __DIR__ .'/../model/Usuario.php';

	class UsuarioController{
		public function login($post){
			$usuario = new Usuario();
			try{
				$usuario = $usuario->login($post['username'], $post['password']);

				$_SESSION['usuario'] = $usuario;

			}catch(Exception $e){
				$_REQUEST['mensagem'] = "Nome de Usuario ou Senha incorretos";
				require_once __DIR__.'/../login.php';
				return;
			}

			$_REQUEST['pedidos'] = array();

			require __DIR__ .'/../model/Pedido.php';

			$pedido = new Pedido();
			$pedidos = $pedido->getAllPedidos();

			require __DIR__ .'/../model/Registro.php';

			foreach ($pedidos as $ped) {
				$registro = new Registro();
				$reg = $registro->getRegistroByIdPedido($ped->getId());

				$row = array();
				$row[] = $ped;
				$row[] = $reg;

				$_REQUEST['pedidos'][] = $row;
			}

			require_once __DIR__ .'/../view/tela_inicial_view.php';

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