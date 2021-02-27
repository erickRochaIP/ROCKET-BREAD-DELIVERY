
<?php
	$produtos = $_REQUEST['produtos'];
?>

    <?php $i = -1 ?>
	<?php foreach($produtos as $produto): ?>

    <?php $i++; ?>
    <?php if($i%3 == 0): // Se for primeiro, o quarto, o sétimo, o décimo...?>
        <?php if($i != 0): // Se não for o primeiro ?>
            </div>
        <?php endif; ?>
        <div class="card-deck mt-3">
    <?php endif; ?>

    <div class="card" style="background-color: #FFF6F1">
      <!-- <img class="card-img-top" src="..." alt="Imagem do produto"> -->
      <div class="card-body">
        <?php
        echo "<h4 class='card-title'>".$produto->getNome()."</h4>";
        echo "<p class='card-text'>".$produto->getDescricao()."</p>";
        ?>
      </div>
      <div class="card-footer">
	    <form action="index.php" method="get">
	    	<?php
	    		echo '<input type="hidden" name="id" value="'.$produto->getId().'">';
	    	?>
	    	<input type="hidden" name="class" value="Produto">
	    	<input type="hidden" name="acao" value="getProdutoId">
            <button class="btn btn-primary btn-small">Ver Produto</button>
	    </form>
      </div>
    </div>
	<?php endforeach; ?>
    </div> <! -- Fechar card-deck -->

	<form class="mt-5" action="index.php" method="get">
		<input type="hidden" name="class" value="Session">
		<input type="hidden" name="acao" value="destroy_session">
		<button>Destruir sessao</button>
	</form>
	<br>
	<form action="index.php" method="get">
		<input type="hidden" name="class" value="ItemPedido">
		<input type="hidden" name="acao" value="getCarrinho">
		<button>Carrinho</button>
	</form>


</div>
