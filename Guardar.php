<?php
    $Nombre=$_POST["txtNombre"];
	$Telefono=$_POST["txtTelefono"];
	$Celular=$_POST["txtCelular"];
	$Direccion=$_POST["txtDireccion"];
	$Colonia=$_POST["txtColonia"];
	$CP=$_POST["txtCP"];
	
      include("PrurebaBase.php");
	  $Con = new conexion();
	  $Con->Insertar($Nombre,$Telefono,$Celular,$Direccion,$Colonia,$CP);
?>