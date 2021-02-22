<!DOCTYPE html>
<html>
<head>
	<title>Pedido View</title>
</head>
<body>
<?php
	$itens = $_REQUEST['itens'];
?>
<table>
	<tr>
		<th>ID</th>
		<th>ID_PEDIDO</th>
		<th>ID_PRODUTO</th>
		<th>Quantidade</th>
	</tr>
	<?php foreach($itens as $item): ?>
	<tr>
		<td><?php echo $item->getId(); ?></td>
		<td><?php echo $item->getIdPedido(); ?></td>
		<td><?php echo $item->getIdProduto(); ?></td>
		<td><?php echo $item->getQuantidade(); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>