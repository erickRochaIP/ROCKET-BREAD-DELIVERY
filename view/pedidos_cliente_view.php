<?php
	$endereco = $_REQUEST['endereco'];
	echo "Endereco: Numero ".$endereco->getNumero();
	echo ", Rua ".$endereco->getRua();
	echo ", Bairro ".$endereco->getBairro();
	echo ", Cidade ".$endereco->getCidade();
?>
<br>
<?php
	foreach ($_REQUEST['pedidos'] as $pedido) {
		echo 'Id Pedido: '.$pedido[0]->getId().' / Situacao: '.$pedido[1]->getSituacao();
		?>
		<form action="index.php" method="get">
			<?php
				echo '<input type="hidden" name="id" value="'.$pedido[0]->getId().'" />';
			?>
			<input type="hidden" name="class" value="Pedido" />
			<input type="hidden" name="acao" value="getItensPedidos" />
			<button>Abrir pedido</button>

		</form>
		<br>
		<?php
	}
?>