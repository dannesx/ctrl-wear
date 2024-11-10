CREATE DATABASE ctrl_wear;

USE ctrl_wear;

CREATE TABLE roupas (
  id int(4) PRIMARY KEY AUTO_INCREMENT,
  tipo varchar(100) DEFAULT NULL,
  marca varchar(50) DEFAULT NULL,
  tamanho varchar(3) DEFAULT NULL,
  cor varchar(50) DEFAULT NULL,
  preco float(6,2) DEFAULT NULL
);

INSERT INTO roupas VALUES
(1, 'Camiseta', 'Nike', 'M', 'Preto', 10.00),
(2, 'Bermuda', 'Quiksilver', 'P', 'Azul', 68.90),
(3, 'Moletom', 'Adidas', 'M', 'Roxo', 450.00);