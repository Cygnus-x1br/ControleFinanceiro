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
        $routes['card_menu'] = array(
            'route' => '/card_menu',
            'controller' => 'AdminController',
            'action' => 'cardMenu'
        );
        $routes['add_movement'] = array(
            'route' => '/add_movement',
            'controller' => 'AccountController',
            'action' => 'addMovement'
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
        $routes['list_subclasses'] = array(
            'route' => '/list_subclasses',
            'controller' => 'AdminController',
            'action' => 'listSubClasses'
        );
        $routes['save_subclasses'] = array(
            'route' => '/save_subclasses',
            'controller' => 'AdminController',
            'action' => 'saveSubClasses'
        );
        $routes['add_card'] = array(
            'route' => '/add_card',
            'controller' => 'CardController',
            'action' => 'addCard'
        );
        $routes['list_cards'] = array(
            'route' => '/list_cards',
            'controller' => 'CardController',
            'action' => 'listCards'
        );
        $routes['saveCard'] = array(
            'route' => '/saveCard',
            'controller' => 'CardController',
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
