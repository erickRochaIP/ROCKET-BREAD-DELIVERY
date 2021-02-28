
<?php
	$usuario = $_SESSION['usuario'];

	echo "Logado como: ";
	echo "<br>";

	echo "ID: ".$usuario[0];
	echo "<br>";
	echo "Nome de Usuario: ".$usuario[1];
	echo "<br>";
	echo "Nivel acesso: ".$usuario[2];
	echo "<br>";
?>

<form action="index.php" method="get">

	<input type="hidden" name="class" value="Produto">
	<input type="hidden" name="acao" value="cadastrarProduto">
	<button>Cadastrar Produto</button>
</form>

<form action="index.php" method="get">

	<input type="hidden" name="class" value="Cliente">
	<input type="hidden" name="acao" value="getAllCliente">
	<button>Ver todos os clientes</button>
</form>

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

