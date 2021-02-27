<?php
	if(isset($_REQUEST['itensCarrinho'])){
		echo "Carrinho <br>";
		$total = 0;
		foreach ($_REQUEST['itensCarrinho'] as $item) {
			echo $item[0]." ";
			echo $item[1]." ";
			echo $item[2]." ";
			echo $item[3]." ";
			echo "<br>";

			$total += $item[3];
		}

		echo 'Total: '.$total.'<br>';
	}else{
		echo "Carrinho vazio";
		echo "<br>";
	}
?>

<form action="index.php" method="get">
	<input type="hidden" name="class" value="Produto">
	<input type="hidden" name="acao" value="getAllProdutoCarrinho">
	<button>Voltar</button>
</form>

<form action="index.php" method="get">
	<input type="hidden" name="class" value="Cliente">
	<input type="hidden" name="acao" value="setCliente">
	<button>Comprar</button>
</form>
