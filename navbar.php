<nav class="navbar justify-content-between topo">
  <a class="navbar-brand topo" href="index.php">Rocket Bread Delivery</a>

<div class="form-inline">
<?php
if (isset($_SESSION['usuario'])){
?>
    <?php
    if ($_SESSION['usuario'][2] >= 2){
    ?>
        <form action="index.php" method="get">
            <input type="hidden" name="class" value="Pedido">
            <input type="hidden" name="acao" value="getTelaInicial">
            <button class="btn btn-primary my-sm-0">Pedidos</button>
        </form>

        <form action="index.php" method="get">
            <input type="hidden" name="class" value="Cliente">
            <input type="hidden" name="acao" value="getAllCliente">
            <button class="btn btn-primary my-sm-0">Clientes</button>
        </form>

        <form action="index.php" method="get">
            <input type="hidden" name="class" value="Produto">
            <input type="hidden" name="acao" value="cadastrarProduto">
            <button class="btn btn-primary my-sm-0">Cadastrar Produto</button>
        </form>
        <?php
        if ($_SESSION['usuario'][2] >= 3){
        ?>
            <form action="index.php" method="get">
                <input type="hidden" name="class" value="Usuario">
                <input type="hidden" name="acao" value="getTelaCadastro">
                <button class="btn btn-success my-sm-0 ml-3">Cadastrar</button>
            </form>
        <?php
        }
        ?>
    <?php
    }
    ?>
    <form action="index.php" method="get">
    	<input type="hidden" name="class" value="Usuario">
    	<input type="hidden" name="acao" value="logout">
        <button class="btn btn-primary my-sm-0">Logout</button>
    </form>

<?php 
}else{
?>
    <form action="index.php" method="get">
    	<input type="hidden" name="class" value="Usuario">
    	<input type="hidden" name="acao" value="getTelaLogin">
        <button class="btn btn-primary my-sm-0">Login</button>
    </form>
<?php
}
?>
</div>
</nav>
