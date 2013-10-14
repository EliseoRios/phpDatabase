<html>
 <head>
  <title> Sesion </title>
  <link href="" ref="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <?php
   session_start();
   Class Sesion
   {
	 function NombreSesion($nombre)
	 {
	  $Nombre = $nombre;
	  $_session['NombreUsuario'] = $Nombre;
	 }

	 function CerrarSesion()
	 {
	  session_destroy();
	 }
   }
  ?>
 </body>
<html>