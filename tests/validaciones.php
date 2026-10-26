
<?php

// Validaciones propuestas para el pipeline CI de Quesos Ocosingo.
// Estas validaciones aún no están integradas al formulario principal.

function validarProducto(array $datos): array
{
    $errores = [];

    // 1. Validar descripción
    $descripcion = trim((string)($datos['descripcion'] ?? ''));

    if (strlen($descripcion) < 5 || strlen($descripcion) > 200) {
        $errores[] = 'Descripción: debe tener entre 5 y 200 caracteres';
    } elseif (!preg_match('/^[\p{L}\p{N}\s.,()\-]+$/u', $descripcion)) {
        $errores[] = 'Descripción: contiene caracteres no permitidos';
    }

    // 2. Validar cantidad
    $cantidadTexto = $datos['cantidad'] ?? null;

    $cantidad = filter_var(
        $cantidadTexto,
        FILTER_VALIDATE_INT
    );

    if ($cantidad === false || $cantidad === null || $cantidad < 1) {
        $errores[] = 'Cantidad: debe ser un número entero mayor o igual a 1';
    }

    // 3. Validar formato de fecha
    $fecha = (string)($datos['fecha_cadu'] ?? '');

    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
        $errores[] = 'Fecha: formato incorrecto. Utiliza YYYY-MM-DD';
    } else {
        $f = DateTimeImmutable::createFromFormat('!Y-m-d', $fecha);

        if (!$f || $f->format('Y-m-d') !== $fecha) {
            $errores[] = 'Fecha de caducidad inválida';
        }
    }

    // 4. Validar IDs de relaciones
    foreach (['id_tipo_producto', 'id_marca', 'id_proveedor'] as $campo) {

        $id = filter_var(
            $datos[$campo] ?? null,
            FILTER_VALIDATE_INT
        );

        if ($id === false || $id === null || $id < 1) {
            $errores[] = "ID inválido: $campo";
        }
    }

    return $errores;
}
