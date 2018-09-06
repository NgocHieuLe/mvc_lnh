<?php

/**
 * Created by PhpStorm.
 * User: macintoshhd
 * Date: 8/26/18
 * Time: 9:44 AM
 */
class BaseController
{
    protected $folder;
    function render($file, $data = array())
    {
        $view_file = 'views/' . $this->folder . '/' . $file . '.php';
        if (!is_file($view_file))
        {
            throw new Exception("File not found");
        }
        extract($data);
        ob_start();
        require_once($view_file);
        $content = ob_get_clean();
        require_once('views/layout/application.php');
    }
}