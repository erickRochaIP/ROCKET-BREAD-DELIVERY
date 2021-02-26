<?php
	if(isset($_SESSION['carrinho'])){
		echo "Carrinho <br>";
		foreach ($_SESSION['carrinho'] as $item) {
			echo $item[0]." ";
			echo $item[1];
			echo "<br>";
		}
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