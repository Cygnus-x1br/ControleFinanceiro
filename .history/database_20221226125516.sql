CREATE DATABASE cash_control;
USE cash_control;
CREATE TABLE tb_movements(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    movement_type ENUM() descricao VARCHAR(200) NOT NULL,
    preco FLOAT(8, 2) NOT NULL
);