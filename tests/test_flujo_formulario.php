<?php
// Verifica que el MISMO servicio usado por guardarProducto.php impida guardar datos inválidos.
require_once __DIR__ . '/../src/registro_productos.php';
$valido = [
    'fecha_cadu' => '2026-12-20', 'descripcion' => 'Queso bola artesanal',
    'cantidad' => 12, 'caracteristica' => 'Queso artesanal fresco',
    'id_tipo_producto' => 1, 'id_marca' => 2, 'id_proveedor' => 3,
];
$fallos = 0;
$llamadas = 0;
$insertar = static function (array $datos) use (&$llamadas): void {
    $llamadas++;
    if ($datos['descripcion'] !== 'Queso bola artesanal') {
        throw new RuntimeException('Datos inesperados');
    }
};
$errores = procesarAltaProducto($valido, $insertar);
$ok = $errores === [] && $llamadas === 1;
echo ($ok ? 'OK' : 'FAIL') . ' - Datos válidos llegan a persistencia' . PHP_EOL;
if (!$ok) $fallos++;

$invalido = array_replace($valido, ['cantidad' => 0]);
$errores = procesarAltaProducto($invalido, $insertar);
$ok = $errores !== [] && $llamadas === 1;
echo ($ok ? 'OK' : 'FAIL') . ' - Cantidad inválida bloquea INSERT' . PHP_EOL;
if (!$ok) $fallos++;

$invalido = array_replace($valido, ['caracteristica' => '']);
$errores = procesarAltaProducto($invalido, $insertar);
$ok = $errores !== [] && $llamadas === 1;
echo ($ok ? 'OK' : 'FAIL') . ' - Característica vacía bloquea INSERT' . PHP_EOL;
if (!$ok) $fallos++;

echo 'Total: 3 | Correctas: ' . (3 - $fallos) . ' | Fallidas: ' . $fallos . PHP_EOL;
exit($fallos > 0 ? 1 : 0);
