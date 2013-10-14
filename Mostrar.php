<html>
 <head>
  <title> Mostrar </title>
  <link href="" ref="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <div>
   <fieldset>
   <legend>Datos Almacenados</legend>
    <div>
     <?php
	  include("PrurebaBase.php");
	  $Con = new conexion();
	  $Con->recuperarDatos();
	 ?>
    </div>
   </fieldset>
  </div>
 </body>
<html>