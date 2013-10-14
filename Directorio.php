<html>
 <head>
  <title>Directorio</title>
  <link href="" rel="stylesheet" type="text/css"/>
 </head>
 
 <body>
 <a href="InicioSesion.php">
  <button>
   <img src="apagar.png" width="300" height="70"/>
    <?php
    include("Sesion.php");
    $IrSesion = new Sesion();
    $IrSesion->CerrarSesion();
   ?>
  </button>
 </a>
 <br/>
  
   <center>
    <a href="Nuevo.php">
    <button>
     <img src="nuevo.jpg" width="500" height="350"/>
    </button>
    </a>
	<a href="Mostrar.php">
	 <button>
	  <image src="Mostrar.jpg" width="500" height="350">
	 </button>
	</a>
   </center>
 </body>
</html>