
<?php
	$produtos = $_REQUEST['produtos'];
?>
<table>
	<?php foreach($produtos as $produto): ?>
	<form action="index.php" method="get">
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
	<form action="index.php" method="get">
		<input type="hidden" name="class" value="Session">
		<input type="hidden" name="acao" value="destroy_session">
		<button>Destruir sessao</button>
	</form>
	<br>
	<form action="index.php" method="get">
		<input type="hidden" name="class" value="ItemPedido">
		<input type="hidden" name="acao" value="getCarrinho">
		<button>Carrinho</button>
	</form>
</table>
