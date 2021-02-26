
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

