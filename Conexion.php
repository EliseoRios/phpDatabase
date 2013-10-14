<html>
<h1>CONEXION PHP CON BASE DE DATOS</h1>
<?php
 $conexion = mysql_connect('localhost','root');

class Conexion
{
 function Abrir()
 {
  if( $conexion = mysql_connect('localhost','root'))
  {
   echo "Error";
  //exit();
  }
  else
  {
   mysql_select_db("programacion",$conexion);
  }
 }
 
 function VerTodos()
 {
   $query="SELECT * FORM contacto;";
   ResultadoQuery($query);
 }
 
 function ResultadoQuery()
 {
  $resultado = mysql_result($query);
  echo $resultado;
 }
 
 function Cerrar()
 {
   mysql_close($conexion);
 }
}
header('Loader:Directorio.php');
?>
</html>