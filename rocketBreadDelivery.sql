DROP DATABASE IF EXISTS rocketBreadDelivery;
CREATE DATABASE IF NOT EXISTS rocketBreadDelivery;
USE rocketBreadDelivery;

DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario(
  id int(11) NOT NULL AUTO_INCREMENT,
  nomeusuario char(35) NOT NULL,
  senha char(35),
  nivelacesso int(11) NOT NULL,
  PRIMARY KEY(id)
);

DROP TABLE IF EXISTS cliente;

CREATE TABLE cliente(
  id int(11) NOT NULL AUTO_INCREMENT,
  id_endereco int(11) NOT NULL,
  celular int(11),
  PRIMARY KEY(id)
);

DROP TABLE IF EXISTS produto;

CREATE TABLE produto(
  id int(11) NOT NULL AUTO_INCREMENT,
  nome char(35) NOT NULL,
  descricao char(35),
  preco char(35),
  ativo int(11),
  PRIMARY KEY(id)
);

DROP TABLE IF EXISTS registro;

CREATE TABLE registro(
  id int(11) NOT NULL AUTO_INCREMENT,
  id_pedido int (11) NOT NULL,
  hora TIME(0),
  data DATE,
  situacao int(11),
  PRIMARY KEY(id)
);

DROP TABLE IF EXISTS pedido;

CREATE TABLE pedido(
  id int(11) NOT NULL AUTO_INCREMENT,
  id_cliente int(11) NOT NULL,
  PRIMARY KEY(id)
);

DROP TABLE IF EXISTS item_pedido;

CREATE TABLE item_pedido(
  id int(11) NOT NULL AUTO_INCREMENT,
  id_pedido int(11) NOT NULL,
  id_produto int(11) NOT NULL,
  quantidade int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY(id)
);

DROP TABLE IF EXISTS endereco;

CREATE TABLE endereco(
  id int(11) NOT NULL AUTO_INCREMENT,
  rua char(35),
  bairro char(35),
  numero int(11),
  cidade char(35),
  PRIMARY KEY(id)
);