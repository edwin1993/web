<?php

    $titulo = "Novedades - Grupo Valor";



    //Llamando una función
    //view('view', ['language' => $language, 'titulo' => $titulo]);
    //con compact comprimimos las variables que queremos enviar para no tener que declarar todo el arreglo
    view('novedades', compact('titulo'));


