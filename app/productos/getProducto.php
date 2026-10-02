<?php

require '../configuracion/basedatos.php';

$id= $_POST["idproducto"];

$sql="SELECT id_producto, fecha_cadu, descripcion, cantidad, caracteristica, id_tipo_producto, id_marca, id_proveedor FROM producto WHERE id_producto=$id";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$producto = [];

if($rows > 0){
    $producto = $resultado->fetch_array();
}

echo json_encode($producto ,JSON_UNESCAPED_UNICODE);