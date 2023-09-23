<?php
require 'conexion.php';

// Ejemplo de consulta SQL para listar datos de una tabla
$sql = " SELECT * FROM alumnos";
$resultado = mysqli_query($conectar, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conectar));
}

// Recorrer los resultados y mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "nombre: " . $fila["nombre"] ;
    echo "apellido: " . $fila["apellido"];
    echo "  Correo electrónico: " . $fila["email"];
    echo "<br>";
    // Agregar más campos según sea necesario
}
// Cerrar la conexión
mysqli_close($conectar);
?>
