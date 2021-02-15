<!DOCTYPE html>
<html>
<head>
	<title>Conecta com BD</title>
</head>
<body>
<?php
include 'db_const.php';

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