<?php

namespace App\Models;

use MF\Model\Model;


class Classes extends Model
{
    private $idmovement_class;
    private $class_name;
    private $class_description;

    public function __get($atribute)
    {
        return $this->$atribute;
    }

    public function __set($atribute, $value)
    {
        $this->$atribute = $value;
    }

    public function getAllClasses()
    {
        $query = "SELECT * FROM tb_movement_class";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addClasses()
    {
        $query = "INSERT INTO tb_movement_class(class_name, class_description) VALUES(:class_name, :class_description)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':class_name', $this->__get('class_name'));
        $stmt->bindValue(':class_description', $this->__get('class_description'));
        $stmt->execute();

        return $this;
    }
}
