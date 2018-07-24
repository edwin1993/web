<?php
    //declarando una función
    function view($template, $vars = array())
    {
        //Convierte el arreglo asociativo en variables individuales
        extract($vars);
        require "views/$template.tpl.php";
    }

    function controller($name)
    {
        if (empty($name))
        {
            $name = 'home';
        }
        $file = "controllers/$name.php";
        //exit($file);

        if (file_exists($file))
        {
            require $file;
        }
        else
        {
            require 'controllers/404.php';
        }



    }