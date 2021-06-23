<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM articulo WHERE id_articulo = ?;");
		$sentencia->execute([$id]);
		$producto = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($producto);
	}else{
		echo "Error en el sistema";
	}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/estilos.css">
	<title>Editar Articulo</title>
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
		<h3>Editar articulo:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr style="background-color: #FF99FF">
					<td>Tipo de Articulo: </td>
					<td><input type="text" name="txt2Tipo" value="<?php echo $producto->tipo_articulo; ?>"></td>
				</tr>
				<tr style="background-color: #FF99FF">
					<td>Color: </td>
					<td><input type="text" name="txt2Color" value="<?php echo $producto->color; ?>"></td>
				</tr>
				<tr style="background-color: #FF99FF">
					<td>Precio: </td>
					<td><input type="text" name="txt2Precio" value="<?php echo $producto->precio; ?>"></td>
				</tr>
				
				<tr style="background-color: #FF99FF">
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $producto->id_articulo; ?>">
					<td colspan="2"><input style="background-color: #FF0099" type="submit" value="EDITAR ARTICULO"></td>
				</tr>
			</table>
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