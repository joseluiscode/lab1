<?php
 require_once("idiomas.php");
 $objeto = new formIdiomas();
 $idioma="EN";

 if(isset($_POST)){
     $idioma = $_POST["idioma"];
     $objeto->idioma = $idioma; 
 }
 
 $objeto->cambiarIdioma();

if(isset($_POST)){
$email = $_POST["email"];
$nombre =$_POST["nombre"];
$apellido=$_POST["apellido"];
}

echo"
<h1>RESULTADO</h1>
". $objeto->obtenerEmail().":$email<BR>
".$objeto->obtenerNombre().":$nombre<BR>
".$objeto->obtenerApellido().":$apellido<BR>
";

?>