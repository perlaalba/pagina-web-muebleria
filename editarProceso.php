<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'model/conexion.php';
	$id2 = $_POST['id2'];
	$tipo2 = $_POST['txt2Tipo'];
	$color2 = $_POST['txt2Color'];
	$precio2 = $_POST['txt2Precio'];

	$sentencia = $bd->prepare("UPDATE articulo SET tipo_articulo = ?, color = ?, precio = ?, 
												 WHERE id_articulo = ?;");
	$resultado = $sentencia->execute([$tipo2,$color2,$precio2, $id2]);

	if ($resultado === TRUE) {
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>