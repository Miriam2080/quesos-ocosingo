<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="info/css/bootstrap.min.css">
    <link rel="stylesheet" href="info/css/all.min.css">
    <link rel="stylesheet" href="info/estilos.css">

    <title>Quesos Ocosingo</title>
</head>

<body>

    <!-- =========================
         BARRA DE NAVEGACIÓN
    ========================== -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-principal">
        <div class="container">

            <a href="index.php" class="navbar-brand">
                <span class="marca-quesos">Quesos</span>
                <span class="marca-ocosingo">Ocosingo</span>
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarPrincipal"
                aria-controls="navbarPrincipal"
                aria-expanded="false"
                aria-label="Abrir menú">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarPrincipal">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">
                            Quiénes somos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#productos">
                            Productos
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <a
                            href="pagina/iniciar_sesion.php"
                            class="btn btn-iniciar-sesion">

                            Iniciar sesión
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <!-- =========================
         CARRUSEL PRINCIPAL
    ========================== -->
    <section id="inicio">

        <div
            id="carouselPrincipal"
            class="carousel slide"
            data-bs-ride="carousel">

            <div class="carousel-indicators">

                <button
                    type="button"
                    data-bs-target="#carouselPrincipal"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Imagen 1">
                </button>

                <button
                    type="button"
                    data-bs-target="#carouselPrincipal"
                    data-bs-slide-to="1"
                    aria-label="Imagen 2">
                </button>

                <button
                    type="button"
                    data-bs-target="#carouselPrincipal"
                    data-bs-slide-to="2"
                    aria-label="Imagen 3">
                </button>

            </div>


            <div class="carousel-inner">

                <!-- Imagen 1 -->
                <div class="carousel-item active">

                    <img
                        src="img/cheese-5125021_1280.jpg"
                        class="d-block w-100 imagen-carousel"
                        alt="Quesos artesanales">

                    <div class="oscurecer-carousel"></div>

                    <div class="carousel-caption carousel-contenido">

                        <span class="subtitulo-carousel">
                            Tradición chiapaneca
                        </span>

                        <h1>
                            El auténtico sabor de Ocosingo
                        </h1>

                        <p>
                            Productos elaborados con tradición, dedicación
                            y el sabor característico de nuestra región.
                        </p>

                        <a
                            href="#productos"
                            class="btn btn-principal">

                            Conocer productos
                        </a>

                    </div>
                </div>


                <!-- Imagen 2 -->
                <div class="carousel-item">

                    <img
                        src="img/cheese-630511_1280.jpg"
                        class="d-block w-100 imagen-carousel"
                        alt="Variedad de quesos">

                    <div class="oscurecer-carousel"></div>

                    <div class="carousel-caption carousel-contenido">

                        <span class="subtitulo-carousel">
                            Calidad artesanal
                        </span>

                        <h2>
                            Productos con identidad regional
                        </h2>

                        <p>
                            Disfruta una selección de productos locales
                            elaborados para conservar el sabor de Chiapas.
                        </p>

                        <a
                            href="#nosotros"
                            class="btn btn-principal">

                            Conócenos
                        </a>

                    </div>
                </div>


                <!-- Imagen 3 -->
                <div class="carousel-item">

                    <img
                        src="img/jam.jpg"
                        class="d-block w-100 imagen-carousel"
                        alt="Mermeladas artesanales">

                    <div class="oscurecer-carousel"></div>

                    <div class="carousel-caption carousel-contenido">

                        <span class="subtitulo-carousel">
                            Más que quesos
                        </span>

                        <h2>
                            Sabores para todos los gustos
                        </h2>

                        <p>
                            Encuentra quesos, mermeladas, café y otros
                            productos disponibles en nuestro catálogo.
                        </p>

                        <a
                            href="pagina/iniciar_sesion.php"
                            class="btn btn-principal">

                            Iniciar sesión
                        </a>

                    </div>
                </div>

            </div>


            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselPrincipal"
                data-bs-slide="prev">

                <span class="carousel-control-prev-icon"></span>

                <span class="visually-hidden">
                    Anterior
                </span>
            </button>


            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselPrincipal"
                data-bs-slide="next">

                <span class="carousel-control-next-icon"></span>

                <span class="visually-hidden">
                    Siguiente
                </span>
            </button>

        </div>

    </section>


    <!-- =========================
         QUIÉNES SOMOS
    ========================== -->
    <section id="nosotros" class="seccion-nosotros">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="contenedor-imagen-nosotros">

                        <img
                            src="img/tineda.jpg"
                            class="img-fluid imagen-nosotros"
                            alt="Tienda de productos de Ocosingo">

                    </div>

                </div>


                <div class="col-lg-6">

                    <span class="titulo-pequeno">
                        Nuestra esencia
                    </span>

                    <h2 class="titulo-seccion">
                        ¿Quiénes somos?
                    </h2>

                    <p class="texto-seccion">
                        Quesos Ocosingo es un espacio dedicado a promover
                        productos tradicionales y artesanales de nuestra región.
                        Buscamos acercar a nuestros clientes productos de calidad
                        que representen el sabor y la identidad de Chiapas.
                    </p>

                    <p class="texto-seccion">
                        Nuestro catálogo reúne diferentes productos locales,
                        destacando principalmente los quesos elaborados en
                        Ocosingo y otros productos complementarios.
                    </p>


                    <div class="row mt-4">

                        <div class="col-sm-6 mb-3">

                            <div class="caracteristica">

                                <div class="icono-caracteristica">
                                    <i class="fa-solid fa-cheese"></i>
                                </div>

                                <div>
                                    <h5>
                                        Productos de calidad
                                    </h5>

                                    <p>
                                        Seleccionamos productos representativos
                                        de nuestra región.
                                    </p>
                                </div>

                            </div>

                        </div>


                        <div class="col-sm-6 mb-3">

                            <div class="caracteristica">

                                <div class="icono-caracteristica">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>

                                <div>
                                    <h5>
                                        Tradición local
                                    </h5>

                                    <p>
                                        Promovemos sabores característicos
                                        de Ocosingo, Chiapas.
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         PRODUCTOS
    ========================== -->
    <section id="productos" class="seccion-productos">

        <div class="container">

            <div class="encabezado-seccion text-center">

                <span class="titulo-pequeno">
                    Nuestro catálogo
                </span>

                <h2 class="titulo-seccion">
                    Nuestros productos
                </h2>

                <p>
                    Descubre algunos de los productos que puedes encontrar
                    en Quesos Ocosingo.
                </p>

            </div>


            <div class="row g-4 mt-3">

                <!-- Quesos -->
                <div class="col-lg-3 col-md-6">

                    <div class="tarjeta-producto">

                        <div class="icono-producto">
                            <i class="fa-solid fa-cheese"></i>
                        </div>

                        <h4>
                            Quesos
                        </h4>

                        <p>
                            Diferentes variedades de quesos elaborados
                            con el sabor tradicional de la región.
                        </p>

                    </div>

                </div>


                <!-- Mermeladas -->
                <div class="col-lg-3 col-md-6">

                    <div class="tarjeta-producto">

                        <div class="icono-producto">
                            <i class="fa-solid fa-jar"></i>
                        </div>

                        <h4>
                            Mermeladas
                        </h4>

                        <p>
                            Mermeladas ideales para acompañar nuestros
                            quesos y disfrutar diferentes combinaciones.
                        </p>

                    </div>

                </div>


                <!-- Café -->
                <div class="col-lg-3 col-md-6">

                    <div class="tarjeta-producto">

                        <div class="icono-producto">
                            <i class="fa-solid fa-mug-hot"></i>
                        </div>

                        <h4>
                            Café
                        </h4>

                        <p>
                            Café con aroma y sabor característico,
                            perfecto para complementar tus alimentos.
                        </p>

                    </div>

                </div>


                <!-- Más productos -->
                <div class="col-lg-3 col-md-6">

                    <div class="tarjeta-producto">

                        <div class="icono-producto">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </div>

                        <h4>
                            Más productos
                        </h4>

                        <p>
                            Consulta nuestro catálogo para conocer
                            la variedad de productos disponibles.
                        </p>

                    </div>

                </div>

            </div>


            <div class="text-center mt-5">

                <a
                    href="pagina/iniciar_sesion.php"
                    class="btn btn-principal btn-lg">

                    Ver productos
                </a>

            </div>

        </div>

    </section>


    <!-- =========================
         LLAMADO A LA ACCIÓN
    ========================== -->
    <section class="seccion-acceso">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <h2>
                        ¿Quieres conocer nuestros productos?
                    </h2>

                    <p>
                        Inicia sesión para consultar la información
                        disponible dentro del sistema.
                    </p>

                </div>


                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">

                    <a
                        href="pagina/iniciar_sesion.php"
                        class="btn btn-claro btn-lg">

                        Iniciar sesión
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         FOOTER
    ========================== -->
    <footer class="footer-principal">

        <div class="container py-5">

            <div class="row g-4">

                <div class="col-lg-5 col-md-6">

                    <h4 class="footer-marca">
                        <span>Quesos</span> Ocosingo
                    </h4>

                    <p>
                        Promovemos productos tradicionales de Ocosingo,
                        Chiapas, conservando el sabor y la identidad
                        de nuestra región.
                    </p>

                </div>


                <div class="col-lg-3 col-md-6">

                    <h5>
                        Navegación
                    </h5>

                    <ul class="footer-links">

                        <li>
                            <a href="#inicio">
                                Inicio
                            </a>
                        </li>

                        <li>
                            <a href="#nosotros">
                                Quiénes somos
                            </a>
                        </li>

                        <li>
                            <a href="#productos">
                                Productos
                            </a>
                        </li>

                        <li>
                            <a href="pagina/iniciar_sesion.php">
                                Iniciar sesión
                            </a>
                        </li>

                    </ul>

                </div>


                <div class="col-lg-4 col-md-6">

                    <h5>
                        Síguenos
                    </h5>

                    <div class="redes-sociales">

                        <a href="#" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="#" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="#" aria-label="Twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <div class="footer-copyright">

            <div class="container text-center">
                © 2026 Quesos Ocosingo. Todos los derechos reservados.
            </div>

        </div>

    </footer>


    <script src="info/js/bootstrap.bundle.min.js"></script>

</body>

</html>