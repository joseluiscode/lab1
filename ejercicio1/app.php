<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="css/estilos.css">
    <script src="js/validacion.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> 
    
</head>
<body>
<?php
    require("idiomas.php");
    $objeto = new formIdiomas();
    $idioma="EN";
    if(isset($_GET)){
        $idioma = $_GET["idioma"];
        $objeto->idioma = $idioma; 
    }
    
    $objeto->cambiarIdioma();

    echo"
    <form method='post' action='resultado.php'>
    <center>
    <h1>". $objeto->obtenerTitulo() ."</h1> 
    Idioma: <select name='idioma' onchange=\"location.replace('$_SERVER[PHP_SELF]?idioma='+this.value);\">
    <option value='EN'"; if($idioma=="EN"){ echo "selected ";} echo ">Ingl&eacute;s</option>
    <option value='ES'"; if($idioma=="ES"){ echo "selected ";} echo ">Espa&ntilde;ol</option>
    <option value='ITA'"; if($idioma=="ITA"){ echo "selected ";} echo ">Italiano</option>
    <option value='PORT'"; if($idioma=="PORT"){ echo "selected ";} echo ">Portugues</option>
    </select><br>
    ". $objeto->obtenerEmail() ."<input type='text' id='email' name='email'><br><br>
    ". $objeto->obtenerNombre() ."<input type='text' name='nombre'><br><br>
    ". $objeto->obtenerApellido() ."<input type='text' name='apellido'><br><br>
    <input type='submit' value='". $objeto->obtenerBoton() ."'>
    </center>
    </form>
    ";
?>
</body>
</html>