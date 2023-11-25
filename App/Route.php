<?php

namespace App;
use MF\Init\Bootstrap;
    class Route extends Bootstrap{
        protected function initRoutes(){
            $routes['home'] = Array(
               'route' => '/',
               'controller' => 'indexController',
               'action' => 'index'
            );
            $routes['sobre_nos'] = Array(
                'route' => '/sobre_nos',
                'controller' => 'indexController',
                'action' => 'sobreNos'
            );

            $this->setRoutes($routes);
        }
    }

?>