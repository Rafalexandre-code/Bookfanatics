CREATE DATABASE bookfanatics;
USE bookfanatics;
CREATE TABLE dashboard (
                  id int(10) unsigned NOT NULL AUTO_INCREMENT,
                  categoria varchar(45) NOT NULL,
                  PRIMARY KEY (id)
                );
                CREATE TABLE imagem (
                  idimagem int(10) unsigned NOT NULL AUTO_INCREMENT,
                  nome_imagem1 varchar(25) NOT NULL,
                  tamanho_imagem1 varchar(45) NOT NULL,
                  tipo_imagem1 varchar(25) NOT NULL,
                  imagem1 longblob NOT NULL,
                  idprod varchar(255) DEFAULT NULL,
                  PRIMARY KEY (idimagem)
                );
                CREATE TABLE produto (
                  id int(10) unsigned NOT NULL AUTO_INCREMENT,
                  nome varchar(25) NOT NULL,
                  descricao varchar(1000) NOT NULL,
                  val_unitario float(7,2) unsigned NOT NULL,
                  categoria varchar(25) NOT NULL,
                  stock int(10) unsigned NOT NULL,
                  PRIMARY KEY (id)
                );
                CREATE TABLE usuario (
                  id int(10) unsigned NOT NULL AUTO_INCREMENT,
                  nome varchar(255) NOT NULL,
                  sobrenome varchar(255) NOT NULL,
                  endereco varchar(150) NOT NULL,
                  cidade varchar(50) NOT NULL,
                  cep varchar(10) NOT NULL,
                  email varchar(100) NOT NULL,
                  cpf bigint(14) unsigned zerofill NOT NULL,
                  senha varchar(25) NOT NULL,
                  telefone bigint(14) NOT NULL,
                  uf char(2) DEFAULT NULL,
                  PRIMARY KEY (`id`)
                );