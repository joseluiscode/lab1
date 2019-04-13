
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	
</body>
</html>

<?php 
require ("procesar.php");

		$valorPizza = $_POST["valorPizza"];
		$masa = $_POST["masa"];
		$pagoMetodo = $_POST["pagoMetodo"];
		$cantidadPizza = $_POST["cantidadPizza"];
		$TipoCliente = $_POST["TipoCliente"];

		if(isset($_POST)){
		$objeto = new Operacion();
		$objeto->RecogerDatos($valorPizza, $masa, $pagoMetodo, $cantidadPizza, $TipoCliente);


		echo "<br>"."Este es el Valor de la Pizza: ".$objeto->RetornarValorPizza();

		echo "<br>"."Este es el valor de la masa: ".$objeto->RetornarValorMasa();

		echo "<br> Descuento por metodo de pago: ".$objeto->RetornarMetodoPago();

		echo "<br> Descuento por Cantidad de pizza: ".$objeto->RetornarCantidadPizza();

		echo "<br> Descuento por Tipo de Cliente: ".$objeto->RetornarTipoCliente();


		echo "<br><br> Resultado cuenta a pagar: $". round($objeto->RetorCuenta_A_Pagar(),2);

		echo "<br><br><center><a href='index.php'>Regresar></center>";
	}
 ?>