# ROCKET-BREAD-DELIVERY
Sistema de Gestão de entrega de uma padaria

## Preparando o ambiente

Para que esse sistema funcione na sua máquina é preciso que você tenha instalado um servidor Apache e MySQL. Recomendo que instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html) que é uma ferramenta que reúne tudo que utilizaremos daqui para frente.

Com o XAMPP iniciado, dê start em Apache e MySQL e abra o shell.
```shell
# Acesse o diretório raíz do apache
$ cd c:\xampp\htdocs

# Clone este repositório
$ git clone https://github.com/erickRochaIP/ROCKET-BREAD-DELIVERY.git

# Acesse o diretório do repositório
$ cd ROCKET-BREAD-DELIVERY

# Crie o banco de dados
$ mysql -u 'nome_de_usuario' -p < rocketBreadDelivery.sql
```

Com o repositório clonado no diretório raíz e o banco de dados criado, agora só precisamos deixar essas informações disponíveis para o PHP. No diretório do repositório, crie o arquivo db_const.php no seguinte formato:
```
<?php
$db = 'rocketbreaddelivery';
$host = '127.0.0.1';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

$user = 'nome_de_usuario';
$pass = 'senha_de_usuario';
?>
```
Em que nome_de_usuario é o nome do usuário usado, e senha_de_usuario é a senha deste mesmo usuário.

Para testar se está tudo funcionando, abra o navegador e pesquise por: http://localhost/ROCKET-BREAD-DELIVERY/connect_bd.php