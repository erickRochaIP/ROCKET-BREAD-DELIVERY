	<?php
		$itens = $_REQUEST['itens'];
		$registro = $_REQUEST['registro'];
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
	<br>

	<?php
		echo "Situacao: ";
		$sit = $registro->getSituacao();

		switch($sit){
			case 1:
				echo "Em preparo";
				break;
			case 2:
				echo "A caminho";
				break;
			case 3:
				echo "Encerrado";
				break;
			default:
				echo "Sem registro";
		}
	?>
	<br>

	<form action="index.php" method="get">

		<select name="situacao">
			<option value="1">Em preparo</option>
			<option value="2">A caminho</option>
			<option value="3">Encerrado</option>
		</select>

		<?php
			echo '<input type="hidden" name="id" value="'.$_REQUEST['id_pedido'].'" />';
		?>
		<input type="hidden" name="class" value="Registro" />
		<input type="hidden" name="acao" value="setPedidoSituacao" />
		<button>Alterar situacao</button>
	</form>

	<form action="index.php" method="get">
		<input type="hidden" name="class" value="Pedido">
		<input type="hidden" name="acao" value="getTelaInicial">
		<button>Tela inicial</button>
	</form>