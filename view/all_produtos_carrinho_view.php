<!DOCTYPE html>
<html>
<head>
	<title>All Produtos View</title>
</head>
<body>
<?php
	$produtos = $_REQUEST['produtos'];
?>
<table>
	<?php foreach($produtos as $produto): ?>
	<form action="post.php" method="post">
		<?php
			echo $produto->getNome();
			echo '<input type="hidden" name="id" value="'.$produto->getId().'">';

		?>
		<input type="hidden" name="class" value="Produto">
		<input type="hidden" name="acao" value="getProdutoId">
		<button>Ver Produto</button>
	</form>
	<br>
	<?php endforeach; ?>
	<form action="post.php" method="post">
		<input type="hidden" name="class" value="Session">
		<input type="hidden" name="acao" value="destroy_session">
		<button>Destruir sessao</button>
	</form>
	<br>
	<form action="post.php" method="post">
		<input type="hidden" name="class" value="ItemPedido">
		<input type="hidden" name="acao" value="getCarrinho">
		<button>Carrinho</button>
	</form>
</table>
</body>
</html>