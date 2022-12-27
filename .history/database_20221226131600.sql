CREATE DATABASE cash_control;
USE cash_control;
CREATE TABLE tb_movements(
    IDMOVEMENT INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    movement_type ENUM('D', 'C'),
    --DEBIT / CREDIT
    description VARCHAR(200) NOT NULL,
    value FLOAT(8, 2) NOT NULL,
    pay_method ENUM('M', 'C'),
    -- MONEY / CREDITCARD
    movement_date DATE NOT NULL,
    pay_date DATE NOT NULL,
    ID_MOVEMENT_CLASS INT NOT NULL ID_CREDIT_CARD
);