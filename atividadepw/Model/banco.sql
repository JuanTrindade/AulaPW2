create database cadastropw;


use cadastropw;

create table login(
cod int not null auto_increment,
email varchar(100) not null,
usuario varchar(100) not null,
tipousuario varchar(20),
ativo varchar(7) default 'ativo',
senha varchar(100) not null,
primary key (cod)
);

INSERT INTO login (email, usuario, senha) VALUES ('juantrindade123@gmail.com','juantrindade','123456');

INSERT INTO login (email, usuario, senha) VALUES ('marcelopelaes@gmail.com','marcelopelaes','marcelaojava');

INSERT INTO login (email, usuario, senha) VALUES ('pedroramos@gmail.com','Pedro Ramos','asenha');

UPDATE `cadastropw`.`login` SET `tipousuario`='Administrador' WHERE `cod`='1';
UPDATE `cadastropw`.`login` SET `tipousuario`='cliente' WHERE `cod`='2';
UPDATE `cadastropw`.`login` SET `tipousuario` = 'Administrador' WHERE `cod`='3';

select * from login;

create table produto(
id int primary key auto_increment,
foto varchar(100) not null,
nome varchar(100) not null,
descricao varchar(100) not null,
preco numeric(10,2) not null,
estoque int not null,
ativo bool not null default true
);

SELECT * FROM produto WHERE ativo = 1;
INSERT INTO `cadastropw`.`produto` (`foto`, `nome`, `descricao`, `preco`, `estoque`) VALUES ('ola.png', 'Xiaomi Redmi 9 plus', 'Celular incrivel', '150', '123');
INSERT INTO `cadastropw`.`produto` (`foto`, `nome`, `descricao`, `preco`, `estoque`, `ativo`) VALUES ('algo.png', 'Xiaomi Redmi 8 plus', 'Celular incrivelmente incrivel', '250.00', '154', '1');
INSERT INTO `cadastropw`.`produto` (`foto`, `nome`, `descricao`, `preco`, `estoque`, `ativo`) VALUES ('ola2.png', 'Xiaomi Redmi 7 plus', 'Celular top de linha', '255.55', '100', '1');
INSERT INTO `cadastropw`.`produto` (`foto`, `nome`, `descricao`, `preco`, `estoque`, `ativo`) VALUES ('ola3.png', 'Xiaomi Redmi 6 plus', 'Celular topzao', '90.00', '50', '1');


select * from produto;
