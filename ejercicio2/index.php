<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/validar.js"></script>
</head>
<body>
	<CENTER><h1>BIENVENIDO PIZZA SAN MIGUEL</h1></CENTER>
	<center><img src="img/descarga.jpg" width="200" height="200"></center>
		<center>
		<form action='resultado.php' method='post' name='name'>
		<label>>>SELECCIONE TAMAÑO DE PIZZA</label>
		<br>
		<select name='valorPizza' required>
			<option value=''>(SELECIONE)</option>
			<option value='Personal'>Personal $5</option>
			<option value='Grande'>Grande $12</option>
			<option value='Gigante'>Gigante $16</option>
		</select>
		<br><br>
		<label>>>SELECCIONE LA MASA</label>
		<br>
		<select name='masa' required>
  			<option value=''>(SELECCIONE)</option>
	  		<option value='PanPizza'>Pan Pizza $2</option>
	  	<option value='MasaAlta'>Masa Alta $3</option>
		</select>
		<br><br>
		<label>>>SELECCIONE PLATAFORMA</label>
		<br>
		<select name='pagoMetodo' required>
			<option value=''>(SELECCIONE)</option>
			<option value='ViaTelefono'>Telefono </option>
			<option value='ViaInternet'>Internet </option>
			<option value='ViaSucursal'>Sucursal </option>
		</select>
		<br><br>
		<label>>>SELECCIONE EL # DE PIZZAS</label>
		<br>
		<select name='cantidadPizza' required>
			<option value=''>(SELECIONE)</option>
			<option value='DosPiezzas'>2 Piezas 25%</option>
			<option value='TresPiezzas'>3 Piezzas 30%</option>
			<option value='MayorTresPiezzas'>Mayor 3 Piezzas</option>
		</select>
		<br><br>
		<label>>>SELECCIONE EL TIPO DE CLIENTE</label>
		<br>
		<select name='TipoCliente' required>
			<option value=''>(SELECCIONE)</option>
			<option value='ClFrecuente'>Cliente Frecuente 5%</option>
			<option value='ClGrande'>Cliente Grande 7%</option>
			<option value='ClEmpresarial'>Cliente empresarial 9%</option>
		</select>
		<br><br>
		<input type='submit' value='PROCESAR'>
		</form>
		</center>
</body>
</html>