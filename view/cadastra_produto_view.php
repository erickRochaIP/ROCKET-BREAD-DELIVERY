<div class="form-login">
  <div class="form-group">
	<form action="index.php" method="post" id="formLogin" enctype="multipart/form-data">
		<input class="form-control" type="text" name="nome" placeholder="Nome">
		<input class="form-control" type="text" name="descricao" placeholder="Descricao">
		<input class="form-control" type="file" id="img" name="img" accept="image/*">
		<input class="form-control" type="text" name="preco" placeholder="Preço">

		<input type="hidden" name="ativo" value="1">
		<input type="hidden" name="class" value="Produto" />
		<input type="hidden" name="acao" value="saveProduto" />
		<button class="btn btn-secondary botaoLogin" value="upload">Criar Produto</button>
	</form>
    </div>
</div>
