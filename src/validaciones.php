<?php
// Reglas propuestas para practicar CI. No conectadas aún al formulario real.
function validarProducto(array $datos): array {
    $errores = [];
    $descripcion = $datos['descripcion'] ?? null;
    if (!is_string($descripcion) || preg_match_all('/./us', trim($descripcion)) < 5 || preg_match_all('/./us', trim($descripcion)) > 200) {
        $errores[] = 'Descripción: entre 5 y 200 caracteres';
    }
    $cantidad = filter_var($datos['cantidad'] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    if ($cantidad === false || $cantidad === null) $errores[] = 'Cantidad: entero mayor o igual a 1';
    $fecha = $datos['fecha_cadu'] ?? null;
    if (!is_string($fecha) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
        $errores[] = 'Fecha: formato YYYY-MM-DD';
    } else {
        $f = DateTimeImmutable::createFromFormat('!Y-m-d', $fecha);
        if (!$f || $f->format('Y-m-d') !== $fecha) $errores[] = 'Fecha de caducidad inválida';
    }
    foreach (['id_tipo_producto','id_marca','id_proveedor'] as $campo) {
        $id = filter_var($datos[$campo] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
        if ($id === false || $id === null) $errores[] = "ID inválido: $campo";
    }
    return $errores;
}
