<?php
	
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="prueba_artistik";
    $db_table="cliente";

	$link = mysqli_connect($db_host, $db_user, $db_password) or die("<h2>Error de conexión con el servidor</h2> 
    <a href='Eliminar.html'>Volver</a>");

	$db = mysqli_select_db($link, $db_name) or die("<h2>Error de conexión con la base de datos</h2> 
    <a href='Eliminar.html'>Volver</a>");

	$cedulac = $_POST['cedula_c'];

    $select="SELECT * FROM $db_table where cedula=$cedulac";

    $delete="DELETE FROM $db_table WHERE cedula=$cedulac";

	$resultado=mysqli_query($link,$select) or die("<h2>Error en la consulta</h2> 
    <a href='Eliminar.html'>Volver</a>");

    
    if(mysqli_num_rows($resultado)>0)
    {
        mysqli_query($link,$delete);

        echo'<h2>Cliente eliminado</h2>
        <a href="Home.html">Volver</a>';
      
        // Libera la memoria del resultado
        mysqli_free_result($resultado);
       
    }
    else
    {
        echo'<h2>No existe un cliente con el número de cédula indicado</h2>
        <a href="Home.html">Volver</a>';
    }


		
	mysqli_close($link);
?>