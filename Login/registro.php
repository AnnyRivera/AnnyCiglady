<?php
// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Encriptar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Realizar la conexión a la base de datos
    require 'conexion.php'; // Asegúrate de que este archivo contenga la configuración de la conexión a la base de datos

    // Preparar la consulta SQL para insertar el nuevo usuario en la tabla 'usuarios1'
    $sql = "INSERT INTO usuarios1 (username, email, password) VALUES (:username, :email, :password)";

    // Preparar la sentencia
    $stmt = $cnnPDO->prepare($sql);

    // Bind de los parámetros
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Si el registro fue exitoso, redirigir al usuario a la página de inicio de sesión
        header("Location: login.html");
        exit();
    } else {
        // Si ocurrió un error durante el registro, mostrar un mensaje de error
        echo "Error al registrar el usuario.";
    }
}
?>
