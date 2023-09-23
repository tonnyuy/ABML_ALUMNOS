<?php
require 'conexion.php';
// 1) Conexión
if ($conectar = mysqli_connect("localhost", "root", "","utu")){
	echo "<p>Conexion OK ...</p>";
	$nombre=$_POST['nombre'];
	echo $nombre;
	
	// 2) Preparar la orden SQL delete
	$consulta= "DELETE FROM alumnos WHERE nombre='$nombre'";
	// puedo seleccionar de DB

	$db = mysqli_select_db( $conectar, "utu" ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// 3) Ejecutar la orden y obtener datos
	$datos= mysqli_query ($conectar,$consulta);

	// 4) Verifico
	if($datos){
		echo " Borrado OK ";
		
	}
	else {
		echo "NO Borrado";
		
	}
	mysqli_close($conectar);
}
else
	{
		echo "<p>error de conexion</p>";
}
?>