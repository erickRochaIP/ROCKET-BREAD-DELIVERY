<div class="container">
    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
            <?php foreach ($_REQUEST['clientes'] as $cliente): ?>
            <div class="mt-2 row">
                <div class="col-md-6">
                    <span> Cliente ID: <?php echo $cliente->getId()?> </span>
                </div>
                <div class="col-md-6">
                <form action="index.php" method="get">
                    <input type="hidden" name="id_cliente" value="<?php echo $cliente->getId()?>" /> 
                    <input type="hidden" name="class" value="Pedido" />
                    <input type="hidden" name="acao" value="getPedidosCliente" />
                    <button class="btn btn-secondary">Ver pedidos</button>
                </form>
                </div>
            </div>
            <hr>
            <?php endforeach; ?>
        </div>
    <div class="col-md-3"></div>
    </div>
</div>
