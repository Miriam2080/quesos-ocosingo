<?php
// Controlador real del formulario "Agregar producto".
session_start();
if (empty($_SESSION['username'])) {
    header('Location: ../../pagina/iniciar_sesion.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: productos.php');
    exit;
}

require_once __DIR__ . '/../../src/registro_productos.php';

// Primero se valida. Una solicitud incorrecta NO debe tocar la base de datos.
try {
    $errores = procesarAltaProducto($_POST, function (array $datos): void {
        require __DIR__ . '/../configuracion/basedatos.php'; // Define $conn (mysqli).
        if (!isset($conn) || !($conn instanceof mysqli)) {
            throw new RuntimeException('No hay conexión MySQLi disponible');
        }
        insertarProducto($conn, $datos);
    });

    if ($errores !== []) {
        $_SESSION['producto_mensaje'] = implode(' | ', $errores);
        $_SESSION['producto_tipo'] = 'danger';
    } else {
        $_SESSION['producto_mensaje'] = 'Producto registrado correctamente.';
        $_SESSION['producto_tipo'] = 'success';
    }
} catch (Throwable $e) {
    // El detalle técnico se registra en servidor, sin exponerse al usuario.
    error_log('Error al guardar producto: ' . $e->getMessage());
    $_SESSION['producto_mensaje'] = 'No se pudo guardar. Revise los datos relacionados y la conexión a MySQL.';
    $_SESSION['producto_tipo'] = 'danger';
}

header('Location: productos.php');
exit;
