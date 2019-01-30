<?php
	
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="prueba_artistik";
    $db_table="cliente";

	$link = mysqli_connect($db_host, $db_user, $db_password) or die("<h2>Error de conexión con el servidor</h2> 
    <a href='Ingresar.html'>Volver</a>");

	$db = mysqli_select_db($link, $db_name) or die("<h2>Error de conexión con la base de datos</h2> 
    <a href='Ingresar.html'>Volver</a>");

	
	$cedulac = $_POST['cedula_c'];
	$nombrec = $_POST['nombre_c'];
	$telefonoc = $_POST['telefono_c'];
	$correoc = $_POST['correo_c'];
	$direccionc = $_POST['direccion_c'];

    $select="SELECT * FROM $db_table";

    $insert="INSERT INTO cliente (`CEDULA`, `NOMBRE`, `TELEFONO`, `CORREO`, `DIRECCION`) VALUES('$cedulac','$nombrec','$telefonoc','$correoc','$direccionc')";

	//ingresamos la informacion a la base de datos
	mysqli_query($link,$insert) or die("<h2>Error Guardando los datos</h2> 
    <a href='Ingresar.html'>Volver</a>");

	echo'<h2>Registro Exitoso</h2>
    <a href="Home.html">Volver</a>';
		
	mysqli_close($link);
?>