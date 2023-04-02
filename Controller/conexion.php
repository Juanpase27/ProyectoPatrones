<?php
// Información de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_work";

// Crear conexión
$conex = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Cerrar la conexión
//mysqli_close($conex);
?>