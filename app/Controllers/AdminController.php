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

        $this->render('addClass', 'layoutMaterialize');
    }
    public function addSubClass()
    {

        $this->render('addSubClass', 'layoutMaterialize');
    }
    public function addCard()
    {

        $this->render('addCard', 'layoutMaterialize');
    }

    public function getData()
    {
        print_r($_POST);
    }
}
