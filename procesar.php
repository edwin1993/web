<?php
// header("Access-Control-Allow-Origin: *");
// require ('conexion.php');
// $mysqli=f_connect_db();
// $fecha=date("Y-m-d");
// $h=date("h");
// if($h==0){
// 	$h=1;
// }
// $hora=date(($h-1).":i:s - a");

require_once("class.inputfilter.php");
$filter = new InputFilter();
$error_valid = '';
$mensaje     = '';

// $mysqli    = f_connect_db();



$nombre      = $filter->process($_POST['nombre']);
$email       = $filter->process($_POST['email']);
$telefono    = $filter->process($_POST['telefono']);
$asunto     = $filter->process($_POST['asunto']);
$mensaje     = $filter->process($_POST['mensaje']);

if($nombre == ''){
  $error_valid = 'ERROR. Por favor ingrese su nombre completo ';
}else if($email == ''){
  $error_valid = 'ERROR. Por favor ingrese su correo electrónico';
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$error_valid = 'ERROR. '.$email.' No es un correo electrónico  valido, por favor ingrese un correo electrónico correcto.';
}else if($telefono == ''){
  $error_valid = 'ERROR. Por favor ingrese su número de teléfono';
}else if(!is_numeric($telefono) || $telefono < 0){
  $error_valid = 'El número de teléfono  suministrado  contiene caracteres incorrectos, por favor verifíquelo.';
}else if($asunto == ''){
  $error_valid = 'ERROR. Por favor ingrese el asunto';
}else if($mensaje == ''){
  $error_valid = 'ERROR. Por favor ingrese el mensaje';
}

if ( $error_valid == '') {
  $destino= 'adminsitracion@grupovalor.com.co';
  $asunto='Registro Página Web';
  $cabeceras = "From: adminsitracion@grupovalor.com.co\r\nContent-type: text/html\r\n";
  // $cabeceras .= 'Bcc: ' . "\r\n";
  $comentario='
   <html>
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
   <p>A continuación se relacionan los datos del registro.</p>

   <table cellpadding="0" cellspacing="1" style="width: 600px">
    <tr style="background-color: #D9FFE3">
      <td>Pregunta</td>
      <td>Respuesta</td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td>' . $nombre . '</td>
    </tr>
    <tr style="background-color: #D9FFE3">
      <td>Email</td>
      <td>' . $email . '</td>
    </tr>
    <tr>
      <td>Teléfono</td>
      <td>' . $telefono . '</td>
    </tr>
    <tr style="background-color: #D9FFE3">
      <td>Asunto</td>
      <td>' . $asunto . '</td>
    </tr>
    <tr>
      <td>Mensaje</td>
      <td>' . $mensaje . '</td>
    </tr>

  </table>


   </body>
   </html>

  '
  ;
  if(mail($destino,$asunto,$comentario,$cabeceras)){
    $mensajeJson = array(
             "mensaje" => '200',
       );

      echo json_encode($mensajeJson);
  }else{
    $mensajeJson = array(
                 "mensaje" => 'error',
           );

          echo json_encode($mensajeJson);
  }
}else{
  $mensajeJson = array(
               "mensaje" => $error_valid,
         );

        echo json_encode($mensajeJson);
}






?>
