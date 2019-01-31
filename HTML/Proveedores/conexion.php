<?php
	
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="prueba_artistik";
    $db_table="proveedor";

	$link = mysqli_connect($db_host, $db_user, $db_password) or die("<h2>Error de conexión con el servidor</h2> 
    <a href='Ingresar.html'>Volver</a>");

	$db = mysqli_select_db($link, $db_name) or die("<h2>Error de conexión con la base de datos</h2> 
    <a href='Ingresar.html'>Volver</a>");

	
	$cedulap = $_POST['cedula_p'];
	$nombrep = $_POST['nombre_p'];
	$telefonop = $_POST['telefono_p'];
	$correop = $_POST['correo_p'];
	$direccionp = $_POST['direccion_p'];

    $select="SELECT * FROM $db_table";

    $insert="INSERT INTO proveedor (`CEDULA`, `NOMBRE`, `TELEFONO`, `CORREO`, `DIRECCION`) VALUES('$cedulap','$nombrep','$telefonop','$correop','$direccionp')";

	//ingresamos la informacion a la base de datos
	mysqli_query($link,$insert) or die("<h2>Error Guardando los datos</h2> 
    <a href='Ingresar.html'>Volver</a>");

	echo'<h2>Proveedor registrado</h2>
    <a href="Home.html">Volver</a>';
		
	mysqli_close($link);
?>