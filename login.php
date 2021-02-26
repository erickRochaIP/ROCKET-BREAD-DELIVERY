<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
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
		<form action="index.php" method="post" id="formLogin">
			<input type="text" name="username" placeholder="username">
			<br>
			<input type="password" name="password" placeholder="password">
			<br>
			<input type="hidden" name="class" value="Usuario" />
			<input type="hidden" name="acao" value="login" />
			<button class="botaoLogin">Login</button>
		</form>
	</div>
</body>
</html>