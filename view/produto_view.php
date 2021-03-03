<?php
	$produto = $_REQUEST['produtos'];
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <img class="img-fluid" style="width: 100%; height:100%" src="<?php echo 'images/'.$produto->getId().'.jpg'; ?>" alt="Imagem do produto">
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <h1>
               <?php echo $produto->getNome() ?>
                </h1>
            </div>

            <div class="col-md-12">
               <span class="label label-primary">
                <!-- Tags -->
               </span>
               <span>
                <!-- Quantidade -->
               </span>
            </div>
            
            <div class="col-md-12">
               <p class="description">
               <?php echo $produto->getDescricao() ?>
               </p>
            </div>

            <div class="col-md-12">
               <h2 class="product-price">
               <?php echo "R$ " . $produto->getPreco() ?>
               </h2>
               <hr>
            </div>

            <div class="ml-4">
            <!-- row Só por segurança, se fosse dar 12 no total, nem precisava -->
            <form action="index.php" method="get">
            <div class="row"> 
            <div class="cold-md-5 ">
                <button onclick="updateCarrinho(-1)" type="button" id="adcCarrinho" class="btn btn-default btn-lg btn-compra">
                    <i class="fa fa-minus"></i>
                </button>
                <input id="qntCarrinho" name="quantidade" class="btn btn-default btn-lg btn-compra-valor" value="1" />
                <button onclick="updateCarrinho(1)"type="button" id="subCarrinho" class="btn btn-default btn-lg btn-compra">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            <div class="col-md-4">
                    <?php
		            echo '<input type="hidden" name="id_produto" value="'.$produto->getId().'">';
                    ?>
                    <input type="hidden" name="class" value="Produto">
                    <input type="hidden" name="acao" value="getAllProdutoCarrinho">
                     <button class="btn btn-lg btn-brand btn-full-width">
                          Adicionar ao carrinho
                     </button>
            </div>
            </div> <!-- end row -->
            </form>
            </div>
        </div>
    </div>
</div>

<br>
	<form action="index.php" method="get">
		<input type="hidden" name="class" value="Produto">
		<input type="hidden" name="acao" value="getAllProdutoCarrinho">
		<button class="btn btn-secondary">Voltar</button>
    </form>
