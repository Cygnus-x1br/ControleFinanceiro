<?php

namespace App\Models;

use MF\Model\Model;


class SubClasses extends Model
{
    private $idmovement_subclass;
    private $subclass_name;
    private $subclass_description;
    private $id_movement_class;

    public function __get($atribute)
    {
        return $this->$atribute;
    }

    public function __set($atribute, $value)
    {
        $this->$atribute = $value;
    }

    public function getAllSubClasses()
    {
        $query = "SELECT * FROM tb_movement_subclass";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addSubClasses()
    {
        $query = "INSERT INTO tb_movement_subclass(subclass_name, subclass_description, ID_MOVEMENT_CLASS)
         VALUES(:subclass_name, :subclass_description, :id_movement_class)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':subclass_name', $this->__get('subclass_name'));
        $stmt->bindValue(':subclass_description', $this->__get('subclass_description'));
        $stmt->bindValue(':id_movement_class', $this->__get('id_movement_class'));
        $stmt->execute();

        return $this;
    }
}
