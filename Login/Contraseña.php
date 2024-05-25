<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="..css/bootstrap.min.css">
        <link href="..css/responsive.css" rel="stylesheet" />
    <!-- Style -->
    <link rel="stylesheet" href="..css/ss.css">

</head>
<body>
    <h2>Recuperar Contraseña</h2>
    <form action="recuperarpsw.php" method="POST">
        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Enviar Correo de Recuperación</button>
    </form>
</body>
</html>

<?  // Utilizamos la funcion mail de php para enviar el correo

    (mail($emailcontacto, $asunto, $mensaje, $cabeceras));

    echo "<div class='alert alert-success' role='alert'>
             <b>Revisa tu bandeja de entrada<br> Te hemos enviado un email con tus datos de registro</b>
         </div>";
}
?>
