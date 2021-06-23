<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM articulo;");
		$articulos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($articulos);
	}else{
		echo "Error en el sistema";
	}


	
?>

<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="css/estilos.css">
	<title>Lista de articulos</title>
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
		<h1>Bienvenido: <?php echo $_SESSION['nombre'] ?></h1>
		<a href="cerrar.php">Cerrar Sesión</a>
		<h3>Lista de Articulos</h3>
		<table>
			<tr>
				<td bgcolor="FF0099">Código</td>
				<td bgcolor="FF0099">Tipo de Articulo</td>
				<td bgcolor="FF0099">Color</td>
				<td bgcolor="FF0099">Precio</td>
				<td bgcolor="FF0099">Editar</td>
				<td bgcolor="FF0099">Eliminar</td>
			</tr>

			<?php 
				foreach ($articulos as $dato) {
					?>
					<tr>
						<td bgcolor="FF99FF"><?php echo $dato->id_articulo; ?></td>
						<td bgcolor="FF99FF"><?php echo $dato->tipo_articulo; ?></td>
						<td bgcolor="FF99FF"><?php echo $dato->color; ?></td>
						<td bgcolor="FF99FF"><?php echo $dato->precio; ?></td>
						<td bgcolor="FF99FF"><a href="editar.php?id=<?php echo $dato->id_articulo; ?>">Editar</a></td>
						<td bgcolor="FF99FF"><a href="eliminar.php?id=<?php echo $dato->id_articulo; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3>Ingresar articulos:</h3>
		<form method="POST" action="insertar.php">
			<table>
				<tr style="background-color: #FF99FF">
					<td>Tipo de Articulo: </td>
					<td><input type="text" name="txtTipo"></td>
				</tr>
				<tr style="background-color: #FF99FF">
					<td>Color: </td>
					<td><input type="text" name="txtColor"></td>
				</tr>
				<tr style="background-color: #FF99FF">
					<td>Precio: </td>
					<td><input type="text" name="txtPrecio"></td>
				</tr>
			
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input style="background-color: #FF0099" type="reset" name=""></td>
					<td><input style="background-color: #FF0099" type="submit" value="INGRESAR ARTICULO"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
<div class="footer">
  <h3>Comentarios y Sugerencias</h3>
<p>Atención a clientes: (999) 999 99 99</p>
<p>mueblerama@gmail.com</p>
  <p>©Mueblerama 2021 Aviso de Privacidad Términos y Condiciones</p>
</div>

</body>
</html>