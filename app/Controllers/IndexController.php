<?php

namespace App\Controllers;

use stdClass;
use MF\Controller\Action;
use MF\Model\Container;
use App\Models\Produto;
use App\Models\Info;
use App\Connection;

class IndexController extends Action
{

    public function index()
    {
        date_default_timezone_set('America/Sao_Paulo');

        $this->render('index', 'layoutMaterialize');
    }
}
