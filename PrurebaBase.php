<html>
<h1>CONEXION PHP CON BASE DE DATOS</h1>
<?php
 class conexion
 {
  function recuperarDatos()
  {
   $con = mysql_connect('localhost','root','') or die ("NO CONECTO BASE DE DATOS"); 
   mysql_select_db('programacion',$con);
   
   	$query="SELECT * FROM contacto;";
	$resultado = mysql_query($query);
	
	while($fila = mysql_fetch_array($resultado))
	{
	 echo "<tr>"
	 echo "<td>$fila[Id]</td></td><td>$fila[Nombre]</td><td>$fila[Telefono]</td><td>$fila[Celular]</td><td>$fila[Direccion]</td><td>$fila[Colonia]</td>";
	 echo "</tr>";
	}
  }
 }
?>
</html>