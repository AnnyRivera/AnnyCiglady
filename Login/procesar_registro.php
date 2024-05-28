<?php
require 'conexion.php';

// Recibe los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

// $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

// Inserta los datos en la base de datos
$sql = "INSERT INTO usuarios1 (email, password, username)
VALUES ('$email', '$password', '$username')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión
$conn->close();
?>
