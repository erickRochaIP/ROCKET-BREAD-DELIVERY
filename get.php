<?php
session_start();
$classe = $_GET['class'];
$metodo = $_GET['acao'];

$classe .= 'Controller';

require_once __DIR__ .'/controller/'.$classe.'.php';

$obj = new $classe();
$obj->$metodo($_GET);
?>