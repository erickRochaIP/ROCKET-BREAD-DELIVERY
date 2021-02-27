<!DOCTYPE html>
<html>
<head>
    <title>Rocket Bread Delivery!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">       
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="script.js"></script>
</head>

<body>

<?php 
	session_start();
?>

<div class="conteudo">
<?php

	if(isset($_POST['class']) && isset($_POST['acao'])){
		$classe = $_POST['class'];
		$metodo = $_POST['acao'];

		$classe .= 'Controller';

		require_once __DIR__ .'/controller/'.$classe.'.php';

		$obj = new $classe();
		$obj->$metodo($_POST);
	} else if(isset($_GET['class']) && isset($_GET['acao'])) {
		$classe = $_GET['class'];
		$metodo = $_GET['acao'];

		$classe .= 'Controller';

		require_once __DIR__ .'/controller/'.$classe.'.php';

		$obj = new $classe();
		$obj->$metodo($_GET);
	} else {
		require_once __DIR__.'/controller/ProdutoController.php';
		$obj = new ProdutoController();
		$obj->getAllProdutoCarrinho(0);
	}
?>
</div>

<?php 
	require_once('./navbar.php');
?>
</body>
</html>
