<?php

namespace App\Controllers;

use stdClass;
use MF\Controller\Action;
use MF\Model\Container;
use App\Models\Produto;
use App\Models\Info;
use App\Connection;

class AdminController extends Action
{

    public function addClass()
    {
        $this->render('add_class', 'layoutMaterialize');
    }
    public function addSubClass()
    {
        $this->render('add_subclass', 'layoutMaterialize');
    }
    public function addCard()
    {
        $this->render('add_card', 'layoutMaterialize');
    }
    public function listCards()
    {
        $card = Container::getModel('CreditCard');
        $cards = $card->getAllCards();
        $this->viewData->cards = $cards;
    }
    private function setCard()
    {
        $card = Container::getModel('CreditCard');
        $card->__set('card_number', $_POST['card_number']);
        $card->__set('card_operator', $_POST['card_operator']);
        $card->__set('card_pay_date', $_POST['card_pay_date']);
        $card->__set('card_close_date', $_POST['card_close_date']);
        $card->__set('card_limit', $_POST['card_limit']);
        $card->addCreditCard();

        header('Location: list_cards');
    }

    public function saveCard()
    {
        if (!empty($_POST['card_number'])) {
            $this->setCard();
        }
    }

    public function getData()
    {
        print_r($_POST);
    }
}
