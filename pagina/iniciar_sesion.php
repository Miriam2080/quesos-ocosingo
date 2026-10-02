<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../info/css/bootstrap.min.css">
    <link rel="stylesheet" href="../info/css/all.min.css">
    <link rel="stylesheet" href="../info/estilos.css">

    <title>Iniciar sesión | Quesos Ocosingo</title>
</head>

<body class="login-page">

    <div class="login-wrapper">

        <!-- LADO IZQUIERDO -->
        <div class="login-banner">

            <div class="login-overlay"></div>

            <div class="login-banner-content">

                <a href="../index.php" class="login-brand">
                    <span>Quesos</span> Ocosingo
                </a>

                <div class="login-banner-text">

                    <span class="login-subtitle">
                        Tradición chiapaneca
                    </span>

                    <h1>
                        El sabor de Ocosingo en un solo lugar
                    </h1>

                    <p>
                        Accede al sistema para consultar nuestros productos
                        y administrar la información disponible.
                    </p>

                </div>

            </div>

        </div>


        <!-- LADO DERECHO -->
        <div class="login-panel">

            <div class="login-card">

                <div class="login-header">

                    <div class="login-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <h2>
                        Bienvenido
                    </h2>

                    <p>
                        Ingresa tus datos para continuar
                    </p>

                </div>


                <form action="validar.php" method="post">

                    <div class="mb-4">

                        <label for="username" class="form-label login-label">
                            Nombre de usuario
                        </label>

                        <div class="login-input-group">

                            <span class="login-input-icon">
                                <i class="fa-solid fa-user"></i>
                            </span>

                            <input
                                type="text"
                                class="form-control login-input"
                                id="username"
                                name="username"
                                placeholder="Ingresa tu usuario"
                                required
                                autocomplete="username">

                        </div>

                    </div>


                    <div class="mb-3">

                        <label for="password" class="form-label login-label">
                            Contraseña
                        </label>

                        <div class="login-input-group">

                            <span class="login-input-icon">
                                <i class="fa-solid fa-lock"></i>
                            </span>

                            <input
                                type="password"
                                class="form-control login-input"
                                id="password"
                                name="password"
                                placeholder="Ingresa tu contraseña"
                                required
                                autocomplete="current-password">

                            <button
                                type="button"
                                class="btn-show-password"
                                id="btnPassword"
                                aria-label="Mostrar contraseña">

                                <i
                                    class="fa-solid fa-eye"
                                    id="passwordIcon">
                                </i>

                            </button>

                        </div>

                    </div>


                    <button
                        type="submit"
                        class="btn btn-login w-100">

                        Iniciar sesión
                    </button>


                    <div class="login-back">

                        <a href="../index.php">
                            <i class="fa-solid fa-arrow-left"></i>
                            Volver a la página principal
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <script src="../info/js/bootstrap.bundle.min.js"></script>

    <script>
        const btnPassword = document.getElementById('btnPassword');
        const password = document.getElementById('password');
        const passwordIcon = document.getElementById('passwordIcon');

        btnPassword.addEventListener('click', function () {

            if (password.type === 'password') {
                password.type = 'text';
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            }

        });
    </script>

</body>

</html>