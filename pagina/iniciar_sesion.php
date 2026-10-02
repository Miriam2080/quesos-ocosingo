<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../info/css/bootstrap.min.css">
    <link rel="stylesheet" href="../info/css/all.min.css">
    <link rel="stylesheet" href="../info/estilos.css">
    <title>Inicio de sesión</title>
</head>

<body>
    <section>
        <div class="container mt-5 pt-5">
            <div class="login-form">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 shadown">
                        <div class="card-body text-center">
                            <svg class=" my-3 " xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                            <form action="validar.php" method="post">
                                <h2 class="text-center">BIENVENIDO</h2>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Nombre de usuario</label>
                                    <input type="text" class="form-control" id="username" name="username" required autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password" required autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../jquery-3.7.1.min.js"></script>
    <script src="../info/js/bootstrap.bundle.min.js"></script>
    <script>
    </script>
</body>
</html>