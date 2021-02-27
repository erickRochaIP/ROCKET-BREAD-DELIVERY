
<?php
	$usuario = $_SESSION['usuario'];

	echo "Logado como: ";
	echo "<br>";

	echo "ID: ".$usuario->getId();
	echo "<br>";
	echo "Nome de Usuario: ".$usuario->getNomeUsuario();
	echo "<br>";
	echo "Nivel acesso: ".$usuario->getNivelAcesso();
	echo "<br>";
?>

<?php
	foreach ($_REQUEST['pedidos'] as $pedido) {
		echo 'Id Pedido: '.$pedido[0]->getId().' / Situacao: '.$pedido[1]->getSituacao().'<br>';
	}
?>

