<html>
 <head>
  <title> Validando... </title>
  <link href="" ref="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <?php
     $codigo = $_POST['txtCodigo'];
     $contrasenia = $_POST['txtContrasenia'];
	 
    if(trim($codigo)!= null and trim($contrasenia)!= null)
    {
     if(($codigo=="100" && $contrasenia=="udg")||($codigo=="110" && $contrasenia="tonala")||($codigo=="1" && $contrasenia=="root"))
     {
	   //require_once("Sesion.php"); si no accede cierra pagina.
	   include("Sesion.php");
       $IrSesion = new Sesion();
	   $IrSesion->NombreSesion($codigo);
		
	   header('Location:Directorio.php');
	   unset($_POST['txtCodigo']);
	   unset($_POST['txtContrasenia']);
  	 }
	 else
	 {
	  echo "<h4>Datos Incorrectos</h4>";  
	  header('Location:InicioSesion.php');
	 }
    }
    else
    {
      echo "<h4>Favor de llenar los espacios</h4>";
	  header('Location:InicioSesion.php');
    }
  ?>
 </body>
<html>