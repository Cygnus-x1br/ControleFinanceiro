CREATE DATABASE cash_control;
USE cash_control;
CREATE TABLE tb_movements(
    IDMOVEMENT INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    movement_type ENUM('D', 'C'),
    description VARCHAR(200) NOT NULL,
    value FLOAT(8, 2) NOT NULL,
    pay_method ENUM('M', 'C'),
    installments INT(2),
    movement_date DATE NOT NULL,
    pay_date DATE NOT NULL,
    ID_MOVEMENT_CLASS INT NOT NULL,
    ID_MOVEMENT_SUBCLASS INT NOT NULL,
);
CREATE TABLE movement_card(
    ID_MOVEMENT INT NOT NULL,
    ID_CREDIT_CARD INT NOT NULL
);
CREATE TABLE tb_movement_class(
    IDMOVEMENT_CLASS INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    class_name VARCHAR(30),
    class_description VARCHAR(60)
);
CREATE TABLE tb_movement_subclass(
    IDMOVEMENT_SUBCLASS INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    subclass_name VARCHAR(30),
    subclass_description VARCHAR(60),
    ID_MOVEMENT_CLASS INT NOT NULL
);
CREATE TABLE tb_credit_card(
    IDCREDIT_CARD INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    card_number VARCHAR(20) NOT NULL,
    card_operator VARCHAR(20) NOT NULL,
    card_pay_date INT(2) NOT NULL,
    card_close_date INT(2) NOT NULL,
    card_limit FLOAT(8, 2) NOT NULL
);