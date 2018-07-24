<?php
    /*
     * El frontend controller se encarga de configurar nuestra aplicación
     */
    require "config.php";
    require "helpers.php";


    //LLamar al controlador indicado

    /*if (empty ($_GET['url']))
    {
        $_GET['url'] = 'home';
    }*/

    controller($_GET['url']);

