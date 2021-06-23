<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'model/conexion.php';
	$tipo = $_POST['txtTipo'];
	$color = $_POST['txtColor'];
	$precio = $_POST['txtPrecio'];

	$sentencia = $bd->prepare("INSERT INTO articulo(tipo_articulo,color,precio) VALUES (?,?,?);");
	$resultado = $sentencia->execute([$tipo,$color,$precio]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>