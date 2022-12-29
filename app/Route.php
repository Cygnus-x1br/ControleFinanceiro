<?php


namespace App;

class Route extends \MF\Init\Bootstrap
{
    public function initRoutes()
    {
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );
        $routes['addAccount'] = array(
            'route' => '/addAccount',
            'controller' => 'AccountController',
            'action' => 'addAccount'
        );
        $routes['add_classes'] = array(
            'route' => '/add_classes',
            'controller' => 'AdminController',
            'action' => 'addClasses'
        );
        $routes['list_classes'] = array(
            'route' => '/list_classes',
            'controller' => 'AdminController',
            'action' => 'listClasses'
        );
        $routes['save_classes'] = array(
            'route' => '/save_classes',
            'controller' => 'AdminController',
            'action' => 'saveClasses'
        );
        $routes['add_subclass'] = array(
            'route' => '/add_subclass',
            'controller' => 'AdminController',
            'action' => 'addSubClass'
        );
        $routes['add_card'] = array(
            'route' => '/add_card',
            'controller' => 'AdminController',
            'action' => 'addCard'
        );
        $routes['list_cards'] = array(
            'route' => '/list_cards',
            'controller' => 'AdminController',
            'action' => 'listCards'
        );
        $routes['saveCard'] = array(
            'route' => '/saveCard',
            'controller' => 'AdminController',
            'action' => 'saveCard'
        );
        $routes['getData'] = array(
            'route' => '/getData',
            'controller' => 'AdminController',
            'action' => 'getData'
        );
        $routes['getDataAccount'] = array(
            'route' => '/getDataAccount',
            'controller' => 'AccountController',
            'action' => 'getDataAccount'
        );

        $this->setRoutes($routes);
    }
}
