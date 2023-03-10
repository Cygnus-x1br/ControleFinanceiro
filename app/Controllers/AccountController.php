<?php

namespace App\Controllers;

use stdClass;
use MF\Controller\Action;
use MF\Model\Container;
use App\Models\Produto;
use App\Models\Info;
use App\Connection;

class AccountController extends Action
{

    public function addMovement()
    {

        $this->viewData->cards = $this->listCards();
        $this->viewData->classes = $this->listClasses();
        $this->viewData->subclasses = $this->listSubClasses();
        $this->render('addMovement', 'layoutMaterialize');
    }

    public function getDataAccount()
    {
        echo '<pre>';
        print_r($_POST);
    }

    private function listCards()
    {
        $card = Container::getModel('CreditCard');
        return $card->getAllCards();
    }
    private function listClasses()
    {
        $classes = Container::getModel('Classes');
        return $classes->getAllClasses();
    }
    private function listSubClasses()
    {
        $subclasses = Container::getModel('SubClasses');
        return $subclasses->getAllSubClasses();
    }
}
