<html>
 <head>
  <title> Nuevo </title>
  <link href="" ref="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <div>
   <fieldset>
   <legend>Datos recuperados</legend>
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