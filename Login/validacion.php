
//pagina de error//


<?php
// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Realizar la conexión a la base de datos
    require 'conexion.php'; // Asegúrate de que este archivo contenga la configuración de la conexión a la base de datos

    // Preparar la consulta para obtener la contraseña almacenada en la base de datos para el usuario dado
    $query = "SELECT password FROM usuarios1 WHERE email = :email";

    // Preparar la sentencia
    $stmt = $cnnPDO->prepare($query);

    // Bind de los parámetros
    $stmt->bindParam(':email', $email);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener el resultado
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si se obtuvo un resultado
    if ($row) {
        // Obtener la contraseña almacenada en la base de datos
        $correct_password = $row['password'];

        // Verificar si la contraseña ingresada coincide con la contraseña almacenada en la base de datos
        if (password_verify($password, $correct_password)) {
            // Si la contraseña es correcta, redirigir al usuario a la página principal
            header("Location: principal.html");
            exit();
        } else {
            // Si la contraseña es incorrecta, redirigir al usuario a la página de error
            header("Location: error.html");
            exit();
        }
    } else {
        // Si no se encontró un usuario con ese nombre de usuario, redirigir al usuario a la página de error
        header("Location: error.html");
        exit();
    }
}
?>
