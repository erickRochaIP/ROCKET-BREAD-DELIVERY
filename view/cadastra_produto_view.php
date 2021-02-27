<div class="form-login">
	<form action="index.php" method="post" id="formLogin" enctype="multipart/form-data">
		<input type="text" name="nome" placeholder="Nome">
		<br>

		<input type="text" name="descricao" placeholder="Descricao">
		<br>

		<input type="file" id="img" name="img" accept="image/*">
		<br>

		<input type="text" name="preco" placeholder="Preco">
		<br>

		<input type="hidden" name="ativo" value="1">
		<input type="hidden" name="class" value="Produto" />
		<input type="hidden" name="acao" value="saveProduto" />
		<button class="botaoLogin" value="upload">Criar Produto</button>
	</form>
</div>