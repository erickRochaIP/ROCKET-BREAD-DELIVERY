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

	<form action="index.php" method="get">
		<input type="hidden" name="class" value="Pedido">
		<input type="hidden" name="acao" value="getTelaInicial">
		<button>Voltar</button>
	</form>