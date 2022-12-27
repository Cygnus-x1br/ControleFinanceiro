CREATE DATABASE mvc;

USE mvc;

CREATE TABLE tb_produtos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(200) NOT NULL,
    preco FLOAT(8,2) NOT NULL
);

INSERT INTO tb_produtos(descricao, preco) VALUES('Sofá', 1250.75), ('Cadeira', 378.99), ('Cama', 870.75), ('Notebook', 1752.49), ('Smartphone', 999.99);

CREATE TABLE tb_info (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	titulo VARCHAR(200) NOT NULL,
	descricao TEXT NOT NULL
);

INSERT INTO tb_info(titulo, descricao)VALUES('Missão', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
INSERT INTO tb_info(titulo, descricao)VALUES('Visão', 'Morbi faucibus elit nec nibh elementum, a ultrices ante condimentum.');
INSERT INTO tb_info(titulo, descricao)VALUES('Valores', 'Pellentesque faucibus egestas justo sed malesuada. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.');
