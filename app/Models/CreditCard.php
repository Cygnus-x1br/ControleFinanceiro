<?php

namespace App\Models;

use MF\Model\Model;

class CreditCard extends Model
{

    private $idCreditCard;
    private $card_number;
    private $card_operator;
    private $card_pay_date;
    private $card_close_date;
    private $card_limit;


    public function __get($atribute)
    {
        return $this->$atribute;
    }

    public function __set($atribute, $value)
    {
        $this->$atribute = $value;
    }

    public function getAllCards()
    {
        $query = "SELECT * FROM tb_credit_card";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addCreditCard()
    {
        $query = "INSERT INTO tb_credit_card(card_number, card_operator, card_pay_date, card_close_date, card_limit) VALUES(:card_number, :card_operator, :card_pay_date, :card_close_date, :card_limit);";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':card_number', $this->__get('card_number'));
        $stmt->bindValue(':card_operator', $this->__get('card_operator'));
        $stmt->bindValue(':card_pay_date', $this->__get('card_pay_date'));
        $stmt->bindValue(':card_close_date', $this->__get('card_close_date'));
        $stmt->bindValue(':card_limit', $this->__get('card_limit'));
        $stmt->execute();

        return $this;
    }
}
