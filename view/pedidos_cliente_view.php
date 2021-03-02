<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>
                <td>Id do pedido</td>
                <td>Situação</td>
                <td>Produto</td>
                </tr>
                <thead>
                <tbody>
                <?php foreach ($_REQUEST['pedidos'] as $pedido): ?>
                <tr>
                <td> <span><?php echo $pedido[0]->getId(); ?> </span> </td>
                <td> 
                    <span><?php echo $pedido[1]->getSituacaoTexto(); ?> 
                    </span> 
                </td>
                <td>
                    <form action="index.php" method="get">
                        <?php
                            echo '<input type="hidden" name="id" value="'.$pedido[0]->getId().'" />';
                        ?>
                        <input type="hidden" name="class" value="Pedido" />
                        <input type="hidden" name="acao" value="getItensPedidos" />
                        <button class="btn btn-secondary">Abrir pedido</button>
                    </form>
                </td>
                </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
        <?php
            $endereco = $_REQUEST['endereco'];
            echo "Endreço: <br> Numero ".$endereco->getNumero();
            echo ", Rua ".$endereco->getRua();
            echo "<br>";
            echo "Bairro ".$endereco->getBairro();
            echo ", Cidade ".$endereco->getCidade();
        ?>
        </div>
</div>
</div>
