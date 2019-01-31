<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta name ="viewport" content="witdh=device-witdh, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
    <link rel="stylesheet" href="../../CSS/estilos_internos_cliente.css">
    <link rel="stylesheet" href="../../CSS/estilos_icon.css">
    </head>
<body>
    
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
        
        echo "<div class = 'div'>";
        echo'<h2><center>Cliente eliminado</center></h2>
        <center><a href="Home.html">Volver</a></center>';
        echo "</div>"; 
      
        // Libera la memoria del resultado
        mysqli_free_result($resultado);
       
    }
    else
    {
        echo "<div class = 'div'>"; 
        echo'<h2><center>No existe un cliente con el número de cédula indicado</center></h2>
        <center><a href="Home.html">Volver</a></center>';
        echo "</div>"; 
    }


		
	mysqli_close($link);
?>
    
    
    <header class ="header" id="header">
        <div class = "contenedor">  
           <h1 class = "logo"></h1>
           <span class = "icon-menu" id="btn-menu"></span>
           <nav class = "nav" id="nav">
            <ul class = "menu">
                <li class = "menu__item"><a class = "menu__link" href="Ingresar.html">Ingresar</a></li>
                <li class = "menu__item"><a class = "menu__link" href="Consultar.html">Consultar</a></li>   
                <li class = "menu__item"><a class = "menu__link" href="Actualizar.html">Actualizar</a></li>
                <li class = "menu__item"><a class = "menu__link select" href="Eliminar.html">Eliminar</a></li> 
            </ul>
            </nav>
            
            <span><a href="Home.html" class="inicio">Regresar</a></span>
            <span><a href="../../index.html" class="salir">Salir</a></span>
  
        
            
        </div>
      </header>
      
      
     <script src="../../JS/menu.js"></script>
</body>
</html>

