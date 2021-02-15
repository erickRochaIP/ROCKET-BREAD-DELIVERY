<!DOCTYPE html>
<html>
<head>
	<title>Conecta com BD</title>
</head>
<body>
<?php
$db = 'CidadeEstado';
$host = '127.0.0.1';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

$user = '2018952166';
$pass = 'coltec2020';

 try {
    $conec = new PDO($dsn, $user, $pass);
    $conec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'erro ao conectar com BD: ' . $e->getMessage();
    exit;
}
echo "conexão com o banco ".$db ." feita com sucesso!";
?>
</body>
</html>