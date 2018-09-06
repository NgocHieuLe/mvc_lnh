<?php
/**
 * Created by PhpStorm.
 * User: macintoshhd
 * Date: 8/24/18
 * Time: 8:45 PM
 */
    $controllers = array(
        'pages' => [
            'home' => 'home',
            'error' => 'error'
        ],
        'work' => [
            'load' => 'workLoad',
            'add' => 'workAdd',
            'index' => 'index',
            'delete' => 'workDelete',
            'update' => 'workUpdate'
        ]
    );
    if (!array_key_exists($controller, $controllers)||!array_key_exists($action,$controllers['pages'])&& !array_key_exists($action,$controllers['work']))
    {
        $controller = 'pages';
        $action = 'error';
    }
    else if($action == 'index')
    {
        $method = $action;
    }
    else
    {
        $method ='work'.ucwords($action);
    }

    include_once('controllers/' . $controller . '_controller.php');
    $ctrClass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
    $controller = new $ctrClass;
    $controller->$method();
?>