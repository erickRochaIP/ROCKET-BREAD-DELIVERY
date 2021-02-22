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
<form action="post.php" method="post">
	<?php
		echo '<input type="hidden" name="id_produto" value="'.$produto->getId().'">';
	?>
	<input type="number" name="quantidade" min="1">
	<input type="hidden" name="class" value="Produto">
	<input type="hidden" name="acao" value="getAllProdutoCarrinho">
	<button>Adicionar</button>
</form>
</body>
</html>