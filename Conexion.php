<html>
<h1>CONEXION PHP CON BASE DE DATOS</h1>
<?php
 $conexion = mysql_connect('localhost','root');

class Conexion
{
 function Abrir()
 {
  if($conexion)
  {
   echo "Error";
  //exit();
  }
  else
  {
   mysql_select_db("programacion",$conexion);
   $query = "SELECT * FROM contacto";
   $resultado = mysql_result(mysql_query($query,$conexion),1,1);
   echo $resultado;
   mysql_close($conexion);
  }
 }
 
 function Ver()
 {
   $query="SE";
 }
 
 function Cerrar()
 {
  mysql_close($conexion);
 }
}

?>
</html>