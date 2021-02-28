<?php
require_once __DIR__ .'/../model/Cliente.php';

class ClienteController {
	public function setCliente($post){
		require __DIR__.'/../view/cadastro_cliente_view.php';
	}

	public function getAllCliente($post){

		$cliente = new Cliente();
		$_REQUEST['clientes'] = $cliente->getAllClientes();

		require_once __DIR__ .'/../view/clientes_view.php';
	}
}
?>