<?php
	foreach ($_REQUEST['clientes'] as $cliente) {
		echo 'Id Cliente: '.$cliente->getId();
		?>
		<form action="index.php" method="get">
			<?php
				echo '<input type="hidden" name="id_cliente" value="'.$cliente->getId().'" />';
			?>
			<input type="hidden" name="class" value="Pedido" />
			<input type="hidden" name="acao" value="getPedidosCliente" />
			<button>Ver pedidos</button>

		</form>
		<br>
		<?php
	}
?>