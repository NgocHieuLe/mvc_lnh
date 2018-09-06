<?php
/**
 * Created by PhpStorm.
 * User: macintoshhd
 * Date: 8/24/18
 * Time: 1:58 PM
 */
    require_once ('connection.php');
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
        if(isset($_GET['action'])){
            $action = $_GET['action'];
        } else {
            $action = 'load';
        }
    } else {
        $controller = 'work';
        $action = 'index';
    }
    require_once ('routes.php');
?>