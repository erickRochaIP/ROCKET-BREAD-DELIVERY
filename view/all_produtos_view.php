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
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Descricao</th>
		<th>Preco</th>
		<th>Ativo</th>
	</tr>
	<?php foreach($produtos as $produto): ?>
	<tr>
		<td><?php echo $produto->getId(); ?></td>
		<td><?php echo $produto->getNome(); ?></td>
		<td><?php echo $produto->getDescricao(); ?></td>
		<td><?php echo $produto->getPreco(); ?></td>
		<td><?php echo $produto->getAtivo(); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>