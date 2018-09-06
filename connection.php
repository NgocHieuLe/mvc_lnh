<?php
/**
 * Created by PhpStorm.
 * User: macintoshhd
 * Date: 8/24/18
 * Time: 8:44 PM
 */
    class Database
    {
        private static $instance = null;
        public static function getInstance(){
            if(!isset(self::$instance)){
                try {
                    self::$instance = new PDO('mysql:host=mysql;dbname=mvc', 'root','root');
                } catch (PDOException $ex){
                    die($ex->getMessage());
                    echo "connected fail";
                }
            }
            return self::$instance;
        }
    }
?>