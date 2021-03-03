	<?php
		$itens = $_REQUEST['itens'];
		$registro = $_REQUEST['registro'];
	?>
	<table class="table">
        <thead>
		<tr>
			<th>Id</th>
			<th>Id do pedido</th>
			<th>Id do Produto</th>
			<th>Quantidade</th>
		</tr>
        </thead>

        <tbody>
		<?php foreach($itens as $item): ?>
		<tr>
			<td><?php echo $item->getId(); ?></td>
			<td><?php echo $item->getIdPedido(); ?></td>
			<td><?php echo $item->getIdProduto(); ?></td>
			<td><?php echo $item->getQuantidade(); ?></td>
		</tr>
		<?php endforeach; ?>
        </tbody>
	</table>
	<br>

	<?php
		echo "Situação: ";
		echo $registro->getSituacaoTexto();
	?>
	<br>

    <div class="form-group">
    <div class="form-inline">
	<form class="mt-3" action="index.php" method="get">
		<select class="form-control" name="situacao">
			<option value="1">Em preparo</option>
			<option value="2">A caminho</option>
			<option value="3">Encerrado</option>
		</select>

		<?php
			echo '<input type="hidden" name="id" value="'.$_REQUEST['id_pedido'].'" />';
		?>
		<input type="hidden" name="class" value="Registro" />
		<input type="hidden" name="acao" value="setPedidoSituacao" />
		<button class="btn btn-secondary">Alterar situação</button>
	</form>

</div>
	<form class="mt-4" action="index.php" method="get">
		<input type="hidden" name="class" value="Pedido">
		<input type="hidden" name="acao" value="getTelaInicial">
		<button class="btn">Tela inicial</button>
	</form>
</div>
