<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/estilos.css">
	<title>Iniciar sesion</title>
	<meta charset="utf-8">
</head>
<body>
<div class="header">
<img src="img/logo.png" alt="logo" style="width:250px;height:125px;">
</div>
<div class="topnav">
  <a href="index.html">Inicio</a>
  <a href="recamaras.html">Recámaras</a>
  <a href="salas.html">Salas</a>
  <a href="cocina.html">Cocina</a>
  <a href="baño.html">Baño</a>
  <a href="electrodomesticos.html">Electrodomesticos</a>
  <a href="decoracion.html">Decoración</a>
  <a href="otros.html">Otros</a>
  <a href="http://localhost/mueblerama">Iniciar Sesión</a>
</div>
	<center>
		<form method="POST" action="loginProceso.php">
			<label>Usuario: </label>
			<input type="text" name="txtUsu">
			<br>
			<label>Contraseña: </label>
			<input type="password" name="txtPass">
			<br>
			<input style="background-color: pink" type="submit" value="Iniciar sesión">
		</form>
	</center>
<div class="footer">
  <h3>Comentarios y Sugerencias</h3>
<p>Atención a clientes: (999) 999 99 99</p>
<p>mueblerama@gmail.com</p>
  <p>©Mueblerama 2021 Aviso de Privacidad Términos y Condiciones</p>
</div>

</body>
</html>