
<?php
	$produtos = $_REQUEST['produtos'];
    $emlinha = 3
?>

    <?php $i = -1 ?>
	<?php foreach($produtos as $produto): ?>

    <?php $i++; ?>
    <?php if($i%$emlinha == 0): // Se for primeiro, o quarto, o sétimo, o décimo... (no caso de tres)?>
        <?php if($i != 0): // Se não for o primeiro ?>
            </div>
        <?php endif; ?>
        <div class="card-deck mt-3">
    <?php endif; ?>

    <div class="card" style="background-color: #FFF6F1">
      <img class="card-img-top" style="height:250px" src="<?php echo 'images/'.$produto->getId().'.jpg'; ?>" alt="Imagem do produto">
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
    <?php
        if ($i+1%$emlinha != 0){ // Se acabou sem ter preenchido três
            $i++;
            while ($i%$emlinha != 0){
                echo '<div class="card border-0"></div>'; // Preenche com um item vazio
                $i++;
            }
        }
        ?>
    </div> <! -- Fechar card-deck -->


	<br>

</div>

<footer class="bg-light">
  <div class="container-fluid p-4">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
        Feito por 
        <a href="https://github.com/mifegui">Eric</a> e
        <a href="https://github.com/erickRochaIP">Erick</a>
        <br>
        no
        <a href="https://github.com/erickRochaIP/ROCKET-BREAD-DELIVERY">Github</a>
        </div>
      <div class="col-md-6">
        Use <span class="font-italic"> admin </span> e <span class="font-italic"> admin </span> como usuário e senha para fazer login
       </div>
      </div>
    </div>
  </div>
</footer>


