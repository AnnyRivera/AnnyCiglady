<?php
// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Guardar los datos en la base de datos
    // Aquí debes escribir el código para conectarte a tu base de datos y ejecutar la consulta SQL para guardar los datos

    // Ejemplo de cómo podría ser la consulta SQL (dependiendo de tu base de datos y estructura de la tabla)
    // $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

    // Ejecutar la consulta SQL
    // Aquí debes usar la función correspondiente para ejecutar la consulta en tu base de datos

    // Ejemplo de cómo podría ser la ejecución de la consulta (usando PDO)
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute();

    // Redireccionar a una página de confirmación o mostrar un mensaje de éxito
    header("Location:message.php");
    exit();
}
?>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/style1.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

<section class="contact_section layout_padding">
    <div class="container">
      <h2 class="font-weight-bold">
        Contáctenos
      </h2>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Name">
                </div>
                <div>
                  <input type="text" placeholder="Phone Number">
                </div>
                <div>
                  <input type="email" placeholder="Email">
                </div>

                <div class="mt-5">
                  <input type="text" placeholder="Message">
                </div>
                <div class="mt-5">
                  <button type="submit">
                    Enviar
                  </button>
                  <a href="principal.html" class="button" type="submit" >
                    Volver
</a>
                </div>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
