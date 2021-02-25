<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Informar cliente</title>
</head>
<body>

	<form action="post.php" method="post" id="formLogin">
		<input type="text" name="rua" placeholder="rua">
		<br>
		<input type="text" name="bairro" placeholder="bairro">
		<br>			
		<input type="number" name="numero" placeholder="numero">
		<br>
		<input type="text" name="cidade" placeholder="cidade">
		<br>
		<input type="hidden" name="class" value="Pedido" />
		<input type="hidden" name="acao" value="realizar_pedido" />
		<button>Confirmar compra</button>
	</form>

</body>
</html>