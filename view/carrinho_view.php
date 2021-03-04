<?php $total=0 ?>
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12">
            <h1> Seu carrinho de compras </h1>
        </div>
        <div class="p-4 col-md-7 col-sm-12 itensCarrinho">
            <?php
            if (isset($_REQUEST['itensCarrinho'])){
            ?>
                <div class="row">
                    <div class="caption col-md-2">
                       <span> Quantia </span>
                    </div>
                    <div class="caption col-md-6 text-left">
                       <span> Item </span>
                    </div>
                    <div class="caption col-md-2 text-right">
                       <span> Preço </span>
                    </div>
                    <div class="caption col-md-2 text-right">
                       <span> Excluir </span>
                    </div>
                </div>
                <?php 
                foreach($_REQUEST['itensCarrinho'] as $item): ?>
                    <div class="mt-2 pt-3 pb-2 row itemCarrinho">
                        <div class="quantia-carr col-md-2 text-center">
                            <span> <?php echo $item[2]; ?> </span>
                        </div>
                        <div class="nome-item-carr col-md-5 text-left">
                            <span> <?php echo $item[0]; ?> </span>
                        </div>
                        <div class="preco-carr col-md-3 text-right">
                            <span>R$ <?php echo $item[1]; ?> </span>
                        </div>
                        <div class="quantia-carr col-md-2 text-center">
                            <span> 
                                <form action="index.php" method="get">
                                    <input type="hidden" name="id_produto" value="<?php echo $item[4]; ?>">
                                    <input type="hidden" name="class" value="ItemPedido">
                                    <input type="hidden" name="acao" value="eliminaItem">
                                    <button>X</button>
                                </form>
                            </span>
                        </div>
                        <?php 
                            $total += $item[3]
                        ?>
                    </div>
                <?php
                endforeach; 
            }else{
            ?>
                <div class="caption col-md-6">
                    <span> Carrinho Vazio </span>
                </div>
            <?php
            }?>

            <div class="mt-5 row">
                <div class=" col-md-6">
                <span class="total-carr"> Total:  </span>
                <span class="preco-total-carr">R$ <?php echo $total;?></span>
                </div>
                <div class="col-md-6">
                    <div class="row">
                    <div class="form-inline">
                    <div class="col-md-6">
                    <form action="index.php" method="get">
                    <input type="hidden" name="class" value="Produto">
                    <input type="hidden" name="acao" value="getAllProdutoCarrinho">
                    <button class="btn btn-secondary btn-lg">Voltar</button>
                    </form>
                    </div>
                    <div class="col-md-6">
                    <form action="index.php" method="get">
                    <input type="hidden" name="class" value="Cliente">
                    <input type="hidden" name="acao" value="setCliente">
                    <button class="btn btn-primary btn-lg ">Comprar</button>
                    </form>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
