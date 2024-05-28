<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
     $sql = "SELECT * FROM usuarios1 WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $token = bin2hex(random_bytes(50)); 
        $token_expiracion = date("Y-m-d H:i:s", strtotime('+1 hour')); 
        
        // $sql = "UPDATE Usuarios SET token_recuperacion = '$token', token_expiracion = '$token_expiracion' WHERE correo = '$correo'";
        
       

            $to = $email;
            $subject = "Recuperación de contraseña";
            $message = "Haz clic en el siguiente enlace para restablecer tu contraseña: http://localhost:8081/email/restablecer_contrase%C3%B1a.php?";
            $headers = "From: no-reply@tudominio.com\r\n";
            
            if (mail($to, $subject, $message, $headers)) {
                echo "Correo de recuperación enviado.";
            } else {
                echo "Error al enviar el correo.";
            }
       
    } else {
        echo "El correo no está registrado.";
    }
    
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="css/pp.css">
</head>
<body>
    <div class="container">
        <h2>Recuperar Contraseña</h2>
        <form method="POST" action="recuperarpsw.php">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>

