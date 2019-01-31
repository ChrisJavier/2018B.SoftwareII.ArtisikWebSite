<?php
	
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="prueba_artistik";
    $db_table="evento";

	$link = mysqli_connect($db_host, $db_user, $db_password) or die("<h2>Error de conexión con el servidor</h2> 
    <a href='Ingresar.html'>Volver</a>");

	$db = mysqli_select_db($link, $db_name) or die("<h2>Error de conexión con la base de datos</h2> 
    <a href='Ingresar.html'>Volver</a>");

	
	$cedulap = $_POST['codigo'];
	$nombrep = $_POST['Direccion'];
	$telefonop = $_POST['Cliente'];
	$correop = $_POST['Hora'];
	$direccionp = $_POST['Fecha'];

    $select="SELECT * FROM $db_table";

    $insert="INSERT INTO evento (`codigo_de_Evento`, `Direccion`, `Cliente`, `Hora`, `Fecha`) VALUES('$cedulap','$nombrep','$telefonop','$correop','$direccionp')";

	//ingresamos la informacion a la base de datos
	mysqli_query($link,$insert) or die("<h2>Error Guardando los datos</h2> 
    <a href='Ingresar.html'>Volver</a>");

	echo'<h2>Evento registrado</h2>
    <a href="Home.html">Volver</a>';
		
	mysqli_close($link);
?>