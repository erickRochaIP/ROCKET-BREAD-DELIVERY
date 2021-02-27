<form class="form-login" action="index.php" method="post" id="formLogin">
    <div class="form-group">
        <input class="form-control" type="text" name="rua" placeholder="Rua">
        <input class="form-control" type="text" name="bairro" placeholder="Bairro">
        <input class="form-control" type="number" name="numero" placeholder="Número">
        <input class="form-control" type="text" name="cidade" placeholder="Cidade">
        <input type="hidden" name="class" value="Pedido" />
        <input type="hidden" name="acao" value="realizar_pedido" />
		<button class="btn btn-success">Confirmar Compra</button>
    </div>
</form>
