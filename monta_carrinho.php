<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Monta carrinho</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="topo">
		<div class="logo">
			<img src="bread_logo.png" height="100px">
		</div>
	</div>
	<?php
	if (isset($_REQUEST['mensagem'])){
		echo $_REQUEST['mensagem'];
	}
	?>

	<div class="form-login">
		<form action="get.php" method="get" id="formLogin">
			<input type="hidden" name="class" value="Produto" />
			<input type="hidden" name="acao" value="getAllProdutoCarrinho" />
			<button class="botaoLogin">Montar</button>
		</form>
	</div>
</body>
</html>