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
		<input type="password" name="passwordconf" placeholder="password">
		<br>
		<input type="hidden" name="class" value="Usuario" />
		<input type="hidden" name="acao" value="cadastro" />
		<button class="botaoLogin">Login</button>
	</form>
</div>