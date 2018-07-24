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
       <div id="fb-root"></div>
       <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5&appId=169110126531285";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));</script>

        <div class="wrapper" id="wrapper">
            <?php include 'includes/header.php' ?>

            <div class="top-novedades">
              <div>
                <p>REALIZADOS EN LOS ÚLTIMOS AÑOS</p>
              </div>
              <div id="regresargv">
                <p>Regresar</p>
              </div>
            </div>

            <section class="content-realizados">
              <article class="n1 project-realizados" data-id="1">
                <figure><img src="img/proyectos/Realizados/fotos/1.jpg"></figure>
                <div class="project-title-novedades">
                  <p>PORTAL DE BELALCAZAR <br>
                    Carrera 30 N° 48 – 30, Bogotá - Colombia <br>
                    Ejecución Mayo 2.009 – Mayo 2.011</p>
                </div>
                <!-- <div class="overlaygv">
                  <i class="fa fa-search"></i>
                </div> -->
              </article>
              <article class="n2 project-realizados" data-id="2">
                <figure><img src="img/proyectos/Realizados/fotos/2.jpg"></figure>
                <div class="project-title-novedades">
                  <p>SIERRAS DEL ESTE <br>
                      Carrera 4 Este No. 61-05, Bogotá - Colombia <br>
                      Ejecución Junio de 2.008 – Agosto 2.010</p>
                </div>
                <!-- <div class="overlaygv">
                  <i class="fa fa-search"></i>
                </div> -->
              </article>
              <article class="n3 project-realizados" data-id="3">
                <figure><img src="img/proyectos/Realizados/fotos/3.jpg"></figure>
                <div class="project-title-novedades">
                  <p>PORTAL DE LA JAVERIANA <br>
                      Calle 45 – Carrera 6ª y 7ª, Bogotá - Colombia <br>
                      Ejecución Marzo de 2.007 – Julio de 2.008</p>
                </div>
                <!-- <div class="overlaygv">
                  <i class="fa fa-search"></i>
                </div> -->
              </article>
              <article class="n3 project-realizados" data-id="3">
                <figure><img src="img/proyectos/Realizados/fotos/4.jpg"></figure>
                <div class="project-title-novedades">
                  <p>JAZZ APARTMENTS <br>
                  Calle 87 N° 15 – 35, Bogotá - Colombia <br>
                  Ejecución Marzo de 2.007 – Julio de 2.008</p>
                </div>
                <!-- <div class="overlaygv">
                  <i class="fa fa-search"></i>
                </div> -->
              </article>
              <article class="n3 project-realizados" data-id="3">
                <figure><img src="img/proyectos/Realizados/fotos/5.jpg"></figure>
                <div class="project-title-novedades">
                  <p>VILLA SANTORINI <br>
                      Carrera 56 No. 167C-03, Bogotá - Colombia <br>
                      Ejecución Diciembre de 2008</p>
                </div>
                <!-- <div class="overlaygv">
                  <i class="fa fa-search"></i>
                </div> -->
              </article>
              <article class="n3 project-realizados" data-id="3">
                <figure><img src="img/proyectos/Realizados/fotos/6.jpg"></figure>
                <div class="project-title-novedades">
                  <p>HOTEL ESTELAR ALTO PRADO <br>
                    Calle 76 N° 56 – 29 , Barranquilla - Colombia <br>
                    Ejecución Junio de 2.009 – Marzo 2.011</p>
                </div>
                <!-- <div class="overlaygv">
                  <i class="fa fa-search"></i>
                </div> -->
              </article>
            </section>





            <?php include 'includes/footer.php' ?>



        </div>


        <?php include 'includes/scripts.php' ?>

    </body>
</html>
