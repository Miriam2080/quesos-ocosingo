<?php
$conexion = null; $fallo = 0;
try {
 require __DIR__ . '/conexion_pruebas.php';
 $conexion->beginTransaction();
 $stmt=$conexion->prepare('INSERT INTO productos_prueba (descripcion,cantidad,fecha_cadu,id_tipo_producto,id_marca,id_proveedor) VALUES (?,?,?,?,?,?)');
 $stmt->execute(['Queso bola artesanal',12,'2026-12-20',1,2,3]);
 $id=$conexion->lastInsertId();
 $consulta=$conexion->prepare('SELECT descripcion,cantidad,fecha_cadu FROM productos_prueba WHERE id=?');
 $consulta->execute([$id]); $fila=$consulta->fetch();
 if ($fila && $fila['descripcion']==='Queso bola artesanal' && (int)$fila['cantidad']===12 && $fila['fecha_cadu']==='2026-12-20') {
   echo 'OK - inserción y consulta en MySQL'.PHP_EOL;
 } else {echo 'FAIL - los datos consultados no coinciden'.PHP_EOL; $fallo=1;}
} catch (Throwable $e) {echo 'FAIL - integración: '.$e->getMessage().PHP_EOL; $fallo=1;}
finally {if ($conexion && $conexion->inTransaction()) {$conexion->rollBack(); echo 'Limpieza: transacción revertida'.PHP_EOL;}}
exit($fallo);
