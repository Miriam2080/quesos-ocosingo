<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../configuracion/basedatos.php';

$id = $_POST['idproducto'] ?? null;

if (!$id || !is_numeric($id)) {
    die('No se recibió un ID válido del producto.');
}

$sql = "DELETE FROM producto WHERE id_producto = ?";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die('Error al preparar la consulta: ' . $conn->error);
}

$stmt->bind_param("i", $id);

if ($stmt->execute()) {

    if ($stmt->affected_rows > 0) {
        header('Location: productos.php');
        exit;
    }

    die('No se encontró el producto a eliminar.');

} else {

    die('Error al eliminar producto: ' . $stmt->error);
}