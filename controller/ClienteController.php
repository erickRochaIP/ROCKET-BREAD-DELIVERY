<?php
require_once __DIR__ .'/../model/Cliente.php';

class ClienteController {
	public function setCliente($post){
		require __DIR__.'/../view/cadastro_cliente_view.php';
	}
}
?>