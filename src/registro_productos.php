<?php
// Este servicio conecta las reglas verificadas en CI con el alta real de producto.
require_once __DIR__ . '/validaciones.php';

/**
 * Ejecuta el alta SOLO cuando los datos pasan las validaciones.
 * $insertar recibe datos válidos; la prueba puede reemplazarlo sin usar MySQL.
 * Devuelve un listado de errores (vacío si se guardó correctamente).
 */
function procesarAltaProducto(array $datos, callable $insertar): array
{
    $errores = validarProducto($datos);
    if ($errores !== []) {
        return $errores;
    }
    $insertar($datos);
    return [];
}

/** INSERT real seguro con MySQLi y parámetros preparados. */
function insertarProducto(mysqli $conn, array $datos): void
{
    $sql = 'INSERT INTO producto
        (fecha_cadu, descripcion, cantidad, caracteristica,
         id_tipo_producto, id_marca, id_proveedor)
        VALUES (?, ?, ?, ?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        throw new RuntimeException('No se pudo preparar el registro del producto');
    }
    try {
        $fecha = $datos['fecha_cadu'];
        $descripcion = trim($datos['descripcion']);
        $cantidad = (int) $datos['cantidad'];
        $caracteristica = trim($datos['caracteristica']);
        $tipo = (int) $datos['id_tipo_producto'];
        $marca = (int) $datos['id_marca'];
        $proveedor = (int) $datos['id_proveedor'];
        $stmt->bind_param('ssisiii', $fecha, $descripcion, $cantidad,
            $caracteristica, $tipo, $marca, $proveedor);
        if (!$stmt->execute()) {
            throw new RuntimeException('No fue posible guardar el producto');
        }
    } finally {
        $stmt->close();
    }
}
