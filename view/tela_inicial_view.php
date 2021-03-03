
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
            <div class="form-inline">
            <form class="m-2" action="index.php" method="get">
            	<input type="hidden" name="class" value="Produto">
            	<input type="hidden" name="acao" value="cadastrarProduto">
            	<button class="btn btn-secondary">Cadastrar Produto</button>
            </form>

            <form class="m-2" action="index.php" method="get">
            	<input type="hidden" name="class" value="Cliente">
            	<input type="hidden" name="acao" value="getAllCliente">
            	<button class="btn btn-secondary">Ver todos os clientes</button>
            </form>
            </div>
            </div>

            <table class="table">
            <thead>
                <tr>
                <td> Id do pedido </td>
                <td> Situação </td>
                <td> </td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($_REQUEST['pedidos'] as $pedido): ?>
                <tr>
                <td> <?php echo $pedido[0]->getId() ?> </td>
                <td> <?php echo $pedido[1]->getSituacaoTexto(); ?> </td>
                <td>
            		<form action="index.php" method="get">
            			<?php
            				echo '<input type="hidden" name="id" value="'.$pedido[0]->getId().'" />';
            			?>
            			<input type="hidden" name="class" value="Pedido" />
            			<input type="hidden" name="acao" value="getItensPedidos" />
            			<button class="btn">Abrir pedido</button>

            		</form>
                </td>
                </tr>
            		<?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
        <div class="mt-4 ml-2">
        <?php
        	$usuario = $_SESSION['usuario'];
        
        	echo "Logado como: ".$usuario[1];
        	echo "<br>";
        	echo "ID de usuário: ".$usuario[0];
        	echo "<br>";
        	echo "Nivel de acesso: ".$usuario[2];
        	echo "<br>";
        ?>
        <div>
        </div>
</div>
