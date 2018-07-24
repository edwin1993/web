<?php include('includes/rutas.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= $titulo ?></title>
        <meta name="description" content="Novedades GRUPO INMOBILIARIO Y CONSTRUCTOR VALOR S.A. Oficina Principal: Carrera 16 N° 97-37 Tel: (571) 610 7001 Bogotá D.C. Colombia Bogotá D.C. – Barranquilla – Santa Marta – Cartagena – Bucaramanga">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.min.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <div class="wrapper" id="wrapper">
            <?php include 'includes/header.php' ?>

            <section class="content-contacto">
              <section class="submodulos-contacto info-mapa">
                <h2>GRUPO INMOBILIARIO <br>
                  Y CONSTRUCTOR VALOR S.A. </h2>

                <p>Tel: (571) 610 7001  <br>
                  Carrera 16 N° 97-37 <br>
                  Bogotá D.C. Colombia.</p>

                <p><a href="mailto:atencionalcliente@grupovalor.com.co">atencionalcliente@grupovalor.com.co</a></p>

                <div class="mapa-gv">
                  <iframe  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps/ms?msa=0&amp;msid=214533508742915361277.0004e1baec680627304c7&amp;ie=UTF8&amp;t=m&amp;ll=4.688795,-74.054632&amp;spn=0.009581,0.012231&amp;z=15&amp;output=embed"></iframe>
                  <br>
                  <small> <a href="http://goo.gl/maps/eRP3b"  target="_blank">Ver en un mapa ampliado</a></small>
                </div>
              </section>
              <section class="submodulos-contacto formulario-gv">
                <form action="" id="formu" class="form-gv">
                  <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                  <input type="text" id="email" name="email" placeholder="Correo">
                  <input type="text" id="telefono" name="telefono" placeholder="Teléfono">
                  <input type="text" id="asunto" name="asunto" placeholder="Asunto">
                  <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                  <p class="errorform-gv"></p>
                  <button class="button-gv button-borrar">Borrar</button>
                  <input type="submit" class="button-gv enviar" id="enviar" name="enviar" value="ENVIAR">
                </form>
              </section>
            </section>





            <?php include 'includes/footer.php' ?>



        </div>


        <?php include 'includes/scripts.php' ?>

        <script>
            $(document).ready(function(){
              $('.button-borrar').on('click', function( e ) {
                  e.preventDefault();
                  document.getElementById("formu").reset();
              });

            });
        </script>

    </body>
</html>
