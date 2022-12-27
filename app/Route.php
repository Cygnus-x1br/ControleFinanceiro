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
        $routes['addClass'] = array(
            'route' => '/addClass',
            'controller' => 'AdminController',
            'action' => 'addClass'
        );
        $routes['addSubClass'] = array(
            'route' => '/addSubClass',
            'controller' => 'AdminController',
            'action' => 'addSubClass'
        );
        $routes['addCard'] = array(
            'route' => '/addCard',
            'controller' => 'AdminController',
            'action' => 'addCard'
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
