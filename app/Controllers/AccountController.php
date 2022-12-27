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

    public function addAccount()
    {

        $this->render('addAccount', 'layoutMaterialize');
    }

    public function getDataAccount()
    {
        echo '<pre>';
        print_r($_POST);
    }
}
