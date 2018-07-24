<?php

    $segmentos                    = array();
    $segmentos['host']           = $_SERVER["HTTP_HOST"];
    $segmentos['url']            = $_SERVER["REQUEST_URI"];
    // $segmentos['cadena_de_texto'] = $url;
    $segmentos['lengthCadena']   = strlen($segmentos['url']);

    function extraCatoPro ( $url, $posicion_coincidencia, $lengthCadena ) {
            // echo $url . '****' .$posicion_coincidencia .'****' .$lengthCadena;
            return substr($url,$posicion_coincidencia, $lengthCadena);
    }
    function coincidencia ( $url, $cadena_buscada, $lengthCadena ) {
         // echo $url . '****' .$cadena_buscada .'****' .$lengthCadena;
        $pathDinamico = array();
        $posicion_coincidencia = strpos($url, $cadena_buscada);
        if ( $posicion_coincidencia === false ) {
            // echo "NO COINCIDE";
            $pathDinamico['coincidencia'] = 'false';
            $pathDinamico['base'] = 'index.php';
            return $pathDinamico;
        }else{
            // echo "SI COINCIDE";
            $base = extraCatoPro( $url, $posicion_coincidencia, $lengthCadena );
            $pathDinamico['coincidencia'] = 'true';
            $pathDinamico['base'] = $base;
            return $pathDinamico ;

        }
    }
    function categorias ( $segmentos ) {
        $arrayCategorias  = array('nosotros','novedades','proyectos','servicios','ventas','ejecucion','realizados','contacto');
        $lengthCategorias = sizeof($arrayCategorias);

        for ( $i = 0 ; $i < $lengthCategorias ; $i++){
            $cadena_buscada   = $arrayCategorias[$i];
            $resCoincidencia  = coincidencia( $segmentos['url'], $cadena_buscada, $segmentos['lengthCadena'] );

            if ( $resCoincidencia['coincidencia'] === 'true') {
                // $resCoincidencia['base'] = $arrayCategorias[$i]. '/';
                $resCoincidencia['base'] = $arrayCategorias[$i];
                break;
            }
        }




        return $resCoincidencia;
    }
    function inicio ( $segmentos ) {
        $resArray = array();
        $resCategorias = categorias( $segmentos );
        if( $resCategorias['coincidencia'] === 'false' ){
            $resArray['inicio'] = 'active-item-menu';
            $resArray['baseInicio'] = './';
            $resArray['base'] = '';
        }else{
            // echo "CATEGORIAS";
            $resArray[ $resCategorias['base']] = 'active-item-menu';
            $resArray['baseInicio'] = './';
            $resArray['base'] = '';
        }

        return $resArray;


    }


    $res = inicio( $segmentos );






 ?>
