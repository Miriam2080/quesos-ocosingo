<?php
session_start();
include_once '../app/configuracion/basedatos.php';


/*require 'app/configuracion/basedatos.php';*/

$usuario = $_POST['username'];
$contrasena = $_POST['password'];
$_SESSION['username'] = $usuario;


//$contrasenaenciptar = password_hash($contrasena, PASSWORD_DEFAULT);

//$query = "INSERT INTO usuario (nombre_usuario, contrasena) VALUES ('$usuario', '$contrasena')";

$conn = mysqli_connect('localhost', 'root', '', 'quesos_ocosingo');
$consulta = "SELECT * FROM  usuario where nombre_usuario='$usuario'";


$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_num_rows($resultado);



if ($filas) {
    header("Location: principal.php");
} else {
    $_SESSION['error'] = "Error de autenticación";
    header("Location: iniciar_sesion.php");
}
mysqli_free_result($resultado);
mysqli_close($conn);
?>