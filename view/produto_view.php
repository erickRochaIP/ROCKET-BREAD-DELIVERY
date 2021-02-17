<!DOCTYPE html>
<html>
<head>
	<title>Produto View</title>
</head>
<body>
<?php
	$produto = $_REQUEST['produtos'];

	echo "ID: ".$produto->getId();
	echo "<br>";
	echo "Nome: ".$produto->getNome();
	echo "<br>";
	echo "Descricao: ".$produto->getDescricao();
	echo "<br>";
	echo "Preco: ".$produto->getPreco();
	echo "<br>";
	echo "Ativo: ".$produto->getAtivo();
	echo "<br>";
?>

</body>
</html>