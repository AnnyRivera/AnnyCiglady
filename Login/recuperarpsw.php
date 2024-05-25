<?php
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar el correo electrónico enviado desde el formulario
    $email = $_POST["email"];

    // Aquí debes escribir el código para generar un token único y almacenarlo en la base de datos junto con el correo electrónico del usuario

    // Enviar correo electrónico con el enlace para restablecer la contraseña
    $to = $email;
    $subject = "Recuperar Contraseña";
    $message = "Hola, haz clic en el siguiente enlace para restablecer tu contraseña: http://tu-sitio.com/reset_password.php?token=xxxxxxxxxx";
    $headers = "From: tu-correo@tudominio.com" . "\r\n" .
               "Reply-To: tu-correo@tudominio.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        echo "Se ha enviado un correo electrónico con instrucciones para restablecer tu contraseña.";
    } else {
        echo "Error al enviar el correo electrónico.";
    }
}
?>
