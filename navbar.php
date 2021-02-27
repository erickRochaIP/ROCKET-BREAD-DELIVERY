<nav class="navbar justify-content-between topo">
  <a class="navbar-brand topo" href="index.php">Rocket Bread Delivery</a>


<?php
if (isset($_SESSION['usuario'])){
?>
    <form class="form-inline" action="index.php" method="get">
    	<input type="hidden" name="class" value="Usuario">
    	<input type="hidden" name="acao" value="logout">
        <button class="btn btn-primary my-sm-0">Logout</button>
    </form>

<?php 
}else{
?>
    <div class="form-inline">
    <form action="index.php" method="get">
    	<input type="hidden" name="class" value="Usuario">
    	<input type="hidden" name="acao" value="getTelaLogin">
        <button class="btn btn-primary my-sm-0">Login</button>
    </form>
    <form action="index.php" method="get">
    	<input type="hidden" name="class" value="Usuario">
    	<input type="hidden" name="acao" value="getTelaCadastro">
        <button class="btn btn-success my-sm-0 ml-3">Cadastrar</button>
    </form>
    </div>
<?php
}
?>
</nav>
