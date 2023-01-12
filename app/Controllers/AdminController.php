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

    public function cardMenu()
    {
        $this->render('card_menu');
    }

    public function addClasses()
    {
        $this->render('add_classes');
    }

    public function listClasses()
    {
        $classes = Container::getModel('Classes');
        $class = $classes->getAllClasses();
        $this->viewData->classes = $class;
        $this->render('list_classes');
    }

    public function setClasses()
    {
        $classes = Container::getModel('Classes');
        $classes->__set('class_name', $_POST['class_name']);
        $classes->__set('class_description', $_POST['class_description']);
        $classes->addClasses();

        header('Location: list_classes');
    }

    public function saveClasses()
    {
        if (!empty($_POST['class_name'])) {
            $this->setClasses();
        }
    }

    public function addSubClass()
    {
        $this->viewData->classes = $this->listClass();
        $this->render('add_subclass');
    }

    public function listSubClasses()
    {
        $subclasses = Container::getModel('SubClasses');
        $subclass = $subclasses->getAllSubClasses();
        $this->viewData->subclasses = $subclass;
        $this->viewData->classes = $this->listClass();
        $this->render('list_subclasses');
    }

    public function setSubClasses()
    {
        $classes = Container::getModel('SubClasses');
        $classes->__set('subclass_name', $_POST['subclass_name']);
        $classes->__set('subclass_description', $_POST['subclass_description']);
        $classes->__set('id_movement_class', $_POST['id_movement_class']);
        $classes->addSubClasses();

        header('Location: list_subclasses');
    }

    public function saveSubClasses()
    {
        if (!empty($_POST['subclass_name'])) {
            $this->setSubClasses();
        }
    }

    private function listClass()
    {
        $classes = Container::getModel('Classes');
        return $classes->getAllClasses();
    }



    public function getData()
    {
        print_r($_POST);
    }
}
