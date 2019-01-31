
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/estilos_login.css">
    <title>Document</title>
</head>
<body>

        <?php
	
        $db_host="localhost";
        $db_user="root";
        $db_password="";
        $db_name="prueba_artistik";
        $db_table="usuario";
    
        $link = mysqli_connect($db_host, $db_user, $db_password) or die("<h2>Error de conexión con el servidor</h2> 
        <a href='login.html'>Volver</a>");
    
        $db = mysqli_select_db($link, $db_name) or die("<h2>Error de conexión con la base de datos</h2> 
        <a href='login.html'>Volver</a>");
    
        
        
        $nombreu = $_POST['nombre'];
        $apellidou = $_POST['apellido'];
        $correou = $_POST['email'];
        $tipou = $_POST['tipo_de_usuario'];
        $passwordu = $_POST['pass'];
    
        $select="SELECT * FROM $db_table";

        $insert="INSERT INTO usuario (`nombres`, `apellidos`, `correo`, `tipo_usuario`, `password`) VALUES('$nombreu','$apellidou','$correou','$tipou','$passwordu')";

        //ingresamos la informacion a la base de datos
        mysqli_query($link,$insert) or die("<h2>Error Guardando los datos</h2> 
        <a href='login.php'>Volver</a>");
    
        echo'<a href="login.php">Volver</a>';
            
        mysqli_close($link);
    ?>

</body>
</html>