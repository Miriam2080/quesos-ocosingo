<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="info/css/bootstrap.min.css"">
	<link rel=" stylesheet" href="info/css/all.min.css">
    <link rel="stylesheet" href="info/estilos.css">
    <title>Quesos Ocosingo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"> <span class="text-primary">Quesos</span>Ocosingo</a>
            <button class="navbar-toggler" type="button" data-bs-toogle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="pagina/iniciar_sesion.php" class="nav-link">Iniciar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/cheese-5125021_1280.jpg" alt="Quesos" class="d-block w-100 custom-img-size">
                <div class="carousel-caption">
                    <h3>Bienvenidos</h3>
                    <p>"Descubre la excelencia de los sabores artesanales en Quesos Ocosingo. Elaborados con dedicación
                        y tradición, nuestros quesos ofrecen una experiencia inigualable en cada bocado. ¡Visítanos y
                        disfruta del auténtico sabor chiapaneco!"</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/cheese-630511_1280.jpg" alt="queso" class="d-block w-100 custom-img-size">
                <div class="carousel-caption">
                    <h3>Bienvenidos</h3>
                    <p>"Descubre la excelencia de los sabores artesanales en Quesos Ocosingo. Elaborados con dedicación
                        y tradición, nuestros quesos ofrecen una experiencia inigualable en cada bocado. ¡Visítanos y
                        disfruta del auténtico sabor chiapaneco!"</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/jam.jpg" alt="Mermelada" class="d-block w-100 custom-img-size">
                <div class="carousel-caption">
                    <h3>Bienvenidos</h3>
                    <p>"Descubre la excelencia de los sabores artesanales en Quesos Ocosingo. Elaborados con dedicación
                        y tradición, nuestros quesos ofrecen una experiencia inigualable en cada bocado. ¡Visítanos y
                        disfruta del auténtico sabor chiapaneco!"</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <br>
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/tineda.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 ps-lg-5 mt-md-5">
                    <div class="about-text text-white">
                        <h2>Quienes somos</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deleniti error dolor
                            cupiditate placeat quos architecto tenetur dolorem accusantium! Fuga illum sed quasi
                            rerum tempore. Exercitationem cumque illum molestiae sed!
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about section-padding">
        <div class="container mt-3">
            <h1 class="text-center">Nuestros productos</h1>
            <p class="text-center">Puede ver y seleccionar los porductos que desee</p>
            <div class="row">
                <div class="col-sm-3 bg-primary text-white p-3">
                    <i class="fa-solid fa-cheese w-100"></i>
                    <h4>Quesos</h4>
                    <p class="lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae illo sequi ut
                        recusandae quos quas qui, ducimus dicta commodi sunt vitae hic repellendus, temporibus
                        necessitatibus ea nesciunt, laudantium possimus?
                    </p>
                </div>
                <div class="col-sm-3 bg-dark text-white p-3">
                    <h4>Mermelada</h4>
                    <p class="lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae illo sequi ut
                        recusandae quos quas qui, ducimus dicta commodi sunt vitae hic repellendus, temporibus
                        necessitatibus ea nesciunt, laudantium possimus?
                    </p>
                </div>
                <div class="col-sm-3 bg-success text-white p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cup-hot-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2 2 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5" />
                        <path
                            d="m4.4.8-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 3.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 6.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 9.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8" />
                    </svg>
                    <h4>Café</h4>
                    <p class="lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae illo sequi ut
                        recusandae quos quas qui, ducimus dicta commodi sunt vitae hic repellendus, temporibus
                        necessitatibus ea nesciunt, laudantium possimus?
                    </p>
                </div>
                <div class="col-sm-3 bg-danger text-white p-3">
                    <h4>Más productos</h4>
                    <p class="lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae illo sequi ut
                        recusandae quos quas qui, ducimus dicta commodi sunt vitae hic repellendus, temporibus
                        necessitatibus ea nesciunt, laudantium possimus?
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <!-- About Us Section -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Acerca de nootros</h5>
                    <p>
                        Nos enorgullecemos de nuestro enfoque sostenible y de apoyo a la comunidad local. Nuestro equipo de maestros queseros trabaja incansablemente para asegurar que cada queso que sale de nuestra quesería sea una obra maestra de sabor y textura.
                    </p>
                    </p>
                </div>

                <!-- Follow Us Section -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Siguenos</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Facebook</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Twitter</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 todos los derechos reservados

        </div>
    </footer>
    <script src="../info/js/bootstrap.bundle.min.js"></script>
</body>

</html>