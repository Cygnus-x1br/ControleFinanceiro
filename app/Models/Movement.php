<?php

namespace App\Models;

use MF\Model\Model;


class Movement extends Model
{
    private $idmovement;
    private $movement_type;
    private $description;
    private $value;
    private $pay_method;
    private $installments;
    private $pay_date;
    private $id_movement_class;
    private $id_movement_subclass;


    public function __get($atribute)
    {
        return $this->$atribute;
    }

    public function __set($atribute, $value)
    {
        $this->$atribute = $value;
    }

    public function getAllMovements()
    {
        $query = "SELECT * FROM tb_movements";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addMovements()
    {
        $query = "INSERT INTO tb_movements(class_name, class_description) VALUES(:class_name, :class_description)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':class_name', $this->__get('class_name'));
        $stmt->bindValue(':class_description', $this->__get('class_description'));
        $stmt->execute();

        return $this;
    }
}
