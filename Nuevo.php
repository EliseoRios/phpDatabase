<html>
 <head>
  <title> Nuevo </title>
  <link href="" ref="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <form method="POST" action="Guardar.php">
   <h1>Ingresar datos:</h1>
   <?php
    $Arreglo = array("Nombre","Telefono","Celular","Direccion","Colonia","CP");
	
    for($i=0;$i<6;$i++)
	{
	 echo "<label>".$Arreglo[$i]."</label></br>";
	 echo "<input type='text' name='txt".$Arreglo[$i]."'/></br>";
	}
   ?>
   
   <input type="submit" name="entrar" value="Guardar"/>
   
   </br>
    <a href="Mostrar.php">
     Mostrar datos
	</a>
	
  </form>
 </body>
<html>