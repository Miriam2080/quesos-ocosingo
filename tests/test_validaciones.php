<?php
require_once __DIR__ . '/../src/validaciones.php';
$valido = ['descripcion'=>'Queso bola artesanal', 'cantidad'=>10, 'fecha_cadu'=>'2026-12-20', 'id_tipo_producto'=>1,'id_marca'=>2,'id_proveedor'=>3];
$casos = [
 ['Producto válido',$valido,true],
 ['Descripción corta',array_replace($valido,['descripcion'=>'abc']),false],
 ['Cantidad cero',array_replace($valido,['cantidad'=>0]),false],
 ['Cantidad negativa',array_replace($valido,['cantidad'=>-3]),false],
 ['Cantidad decimal',array_replace($valido,['cantidad'=>'2.5']),false],
 ['Fecha formato incorrecto',array_replace($valido,['fecha_cadu'=>'20/12/2026']),false],
 ['Fecha imposible',array_replace($valido,['fecha_cadu'=>'2026-02-30']),false],
 ['Tipo no seleccionado',array_replace($valido,['id_tipo_producto'=>0]),false],
 ['Marca no seleccionada',array_replace($valido,['id_marca'=>0]),false],
 ['Proveedor no seleccionado',array_replace($valido,['id_proveedor'=>0]),false],
];
$fallos=0;
foreach($casos as [$nombre,$datos,$esperado]) {
 $resultado = count(validarProducto($datos)) === 0;
 echo ($resultado === $esperado ? 'OK' : 'FAIL') . " - $nombre" . PHP_EOL;
 if ($resultado !== $esperado) $fallos++;
}
echo 'Total: '.count($casos).' | Correctas: '.(count($casos)-$fallos).' | Fallidas: '.$fallos.PHP_EOL;
exit($fallos > 0 ? 1 : 0);
