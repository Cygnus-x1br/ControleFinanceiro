<?php

namespace App\Models;

use MF\Model\Model;

class Info extends Model
{
    //protected $db;

    //public function __construct(\PDO $db)
    //{
    //    $this->db = $db;
    //}

    public function getInfo()
    {
        // return array('Sofá', 'Cadeira');
        $query = "SELECT titulo, descricao FROM tb_info";
        return $this->db->query($query)->fetchAll();
    }
}
