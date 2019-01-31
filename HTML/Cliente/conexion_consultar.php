<?php
	
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="prueba_artistik";
    $db_table="cliente";

	$link = mysqli_connect($db_host, $db_user, $db_password) or die("<h2>Error de conexión con el servidor</h2> 
    <a href='Consultar.html'>Volver</a>");

	$db = mysqli_select_db($link, $db_name) or die("<h2>Error de conexión con la base de datos</h2> 
    <a href='Consultar.html'>Volver</a>");

	
	$cedulac = $_POST['cedula_c'];
	//$nombrec = $_POST['nombre_c'];
	//$telefonoc = $_POST['telefono_c'];
	//$correoc = $_POST['correo_c'];
	//$direccionc = $_POST['direccion_c'];


function sql_dump_result($result) 
  { 
    $line = ''; 
    $head = '';
	
  while($temp = mysqli_fetch_assoc($result)) 
  { 
    if(empty($head)) 
    { 
      $keys = array_keys($temp); 
      $head = '<tr><th>' . implode('</th><th>', $keys). '</th></tr>'; 
    }
	
    $line .= '<tr><td>' . implode('</td><td>', $temp). '</td></tr>'; 
  }
  
  return '<table>' . $head . $line . '</table>'; 
}



    $select="SELECT * FROM $db_table where cedula=$cedulac";

	$resultado=mysqli_query($link,$select) or die("<h2>Error en la consulta</h2> 
    <a href='Consultar.html'>Volver</a>");

    if(mysqli_num_rows($resultado)>0)
    {
       
        
         // Muestra el contenido de la tabla como una tabla HTML	
        echo sql_dump_result($resultado); 
        echo'<h2> </h2>
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