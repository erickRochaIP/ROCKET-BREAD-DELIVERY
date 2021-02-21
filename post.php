<?php
$classe = $_POST['class'];
$metodo = $_POST['acao'];

$classe .= 'Controller';

require_once __DIR__ .'/controller/'.$classe.'.php';

$obj = new $classe();
$obj->$metodo($_POST);
?>