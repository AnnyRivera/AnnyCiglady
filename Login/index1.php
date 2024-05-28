<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - AnnyCiglady</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estinde.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">AnnyCiglady</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos1.html">Productos</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrito</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Mi Cuenta</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Soporte</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de Nosotros</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/pub1.jpeg" class="d-block w-100" alt="Carrusel 1">
            </div>
            <div class="carousel-item">
                <img src="images/fondo2.png" class="d-block w-100" alt="Carrusel 2">
            </div>
            <div class="carousel-item">
                <img src="images/fondo3.png" class="d-block w-100" alt="Carrusel 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- Sección de Categorías -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Categorías</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="category-card">
                    <img src="images/frutos.jpg" class="card-img-top" alt="Categoría 1">
                    <div class="card-body">
                        <h5 class="card-title">Frutas</h5>
                        <a href="index.html" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-card">
                    <img src="images/verduras.jpg" class="card-img-top" alt="Categoría 2">
                    <div class="card-body">
                        <h5 class="card-title">Verduras</h5>
                        <a href="index.html" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="category-card">
                    <img src="images/cereal.jpg" class="card-img-top" alt="Categoría 3">
                    <div class="card-body">
                        <h5 class="card-title">Cereales</h5>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-card">
                    <img src="images/lacteos.jpg" class="card-img-top" alt="Categoría 4">
                    <div class="card-body">
                        <h5 class="card-title">Lácteos</h5>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Sección de Productos Destacados -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Productos Destacados</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="product-card">
                    <img src="images/Manzana.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Manzana</h5>
                        <p class="card-text">Manzana roja fresca</p>
                        <a href="index.html" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="images/Banana.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Banana</h5>
                        <p class="card-text">Plátanos amarillos maduros</p>
                        <a href="index.html" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="images/3.jpg" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Uvas</h5>
                        <p class="card-text">Uvas dulces</p>
                        <a href="index.html" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="images/4.jpg" class="card-img-top" alt="Producto 4">
                    <div class="card-body">
                        <h5 class="card-title">Naranjas</h5>
                        <p class="card-text">Naranjas jugosas</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de Página -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">AnnyCiglady</h5>
                    <p>
                        Somos una tienda dedicada a ofrecer las frutas más frescas y de la mejor calidad.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Enlaces</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#" class="text-dark">Inicio</a>
                        </li>
                        <li>
                            <a href=" index.html" class="text-dark">Productos</a>
                        </li>
                        <li>
                        <a href="mapadesitio.html" class="text-dark">Mapa Del Sitio</a>
                        </li>
                         <!--<li>
                            <a href="#" class="text-dark">Cuenta</a>
                        </li> -->
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contacto</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#" class="text-dark"><i class="fas fa-phone"></i> +52 123 456 7890</a>
                        </li>
                        <li>
                            <a href="#" class="text-dark"><i class="fas fa-envelope"></i> contacto@annyciglady.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 AnnyCiglady. Todos los derechos reservados.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
