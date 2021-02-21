<!DOCTYPE html>
<html>
<head>
	<title>Produto View</title>
</head>
<body>
<?php
	$usuario = $_REQUEST['usuario'];

	echo "Logado como: ";
	echo "<br>";

	echo "ID: ".$usuario->getId();
	echo "<br>";
	echo "Nome de Usuario: ".$usuario->getNomeUsuario();
	echo "<br>";
	echo "Nivel acesso: ".$usuario->getNivelAcesso();
	echo "<br>";
?>

</body>
</html>