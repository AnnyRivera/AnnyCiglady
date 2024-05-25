<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link rel="stylesheet" href="css/ss.css">
</head>
<body>
    <h1>Search Results</h1>
    <?php
    // Verificar si se ha enviado una consulta de búsqueda
    if (isset($_GET['q'])) {
        // Obtener el término de búsqueda
        $search_query = $_GET['q'];

        // Incluir el archivo de conexión
        require 'conexion.php';

        try {
            // Preparar la consulta SQL para buscar el término en el contenido de las páginas
            $sql = "SELECT username, email FROM usuarios1 WHERE email LIKE :search_query";
            $stmt = $cnnPDO->prepare($sql);
            $stmt->bindValue(':search_query', '%' . $search_query . '%');
            $stmt->execute();

            // Verificar si se encontraron resultados
            if ($stmt->rowCount() > 0) {
                // Mostrar los resultados
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<p><strong>username:</strong> " . htmlspecialchars($row["username"]) . "</p>";
                    echo "<p><strong>email:</strong> " . htmlspecialchars($row["email"]) . "</p>";
                }
            } else {
                // Si no se encontraron resultados, mostrar un mensaje
                echo "<p>No results found for \"" . htmlspecialchars($search_query) . "\"</p>";
            }
        } catch (PDOException $e) {
            echo "Search failed: " . $e->getMessage();
        }
    } else {
        // Si no se proporcionó un término de búsqueda, mostrar un mensaje
        echo "<p>No search query provided.</p>";
    }
    ?>
</body>
</html>
