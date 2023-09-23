<?php
require 'conexion.php';
// Conectar a la base de datos (asegúrate de haber establecido la conexión antes)
$conectar = mysqli_connect("localhost", "root", "", "utu");

// Verificar la conexión
if (!$conectar) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Variables con los valores a actualizar
$nombre =$_POST['nombre']; 
$apellido = $_POST['apellido'];
$email =$_POST['email']; // Cambia esto al correo que deseas actualizar

// Consulta SQL para actualizar los datos
$consulta = "UPDATE alumnos SET nombre='$nombre', apellido='$apellido' WHERE email='$email'";

// Ejecutar la consulta
$datos = mysqli_query($conectar, $consulta);

// Verificar si la actualización fue exitosa
if ($datos) {
    echo "Actualización exitosa";
} else {
    echo "Error en la actualización: " . mysqli_error($conectar);
}

// Cerrar la conexión a la base de datos
mysqli_close($conectar);
?>


