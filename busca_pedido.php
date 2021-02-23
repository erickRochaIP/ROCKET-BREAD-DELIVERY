<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Busca Pedido</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="topo">
		<div class="logo">
			<img src="bread_logo.png" height="100px">
		</div>
	</div>
	<div class="form-login">
		<form action="get.php" method="get" id="formLogin">
			<input type="text" name="id" placeholder="id do pedido">
			<br>
			<input type="hidden" name="class" value="Pedido" />
			<input type="hidden" name="acao" value="getItensPedidos" />
			<button class="botaoLogin">Busca</button>
		</form>
	</div>
</body>
</html>