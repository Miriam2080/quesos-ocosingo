<?php

require '../configuracion/basedatos.php';


$fecha_cadu = $conn->real_escape_string($_POST["fecha_cadu"]);
$descripcion = $_POST["descripcion"];
$cantidad = $_POST["cantidad"];
$caracteristica = $_POST["caracteristica"];
$id_tipo_producto = $_POST["id_tipo_producto"];
$id_marca = $_POST["id_marca"];
$id_proveedor = $_POST["id_proveedor"];

$sql = "INSERT into producto(fecha_cadu, descripcion, cantidad, caracteristica, id_tipo_producto, id_marca, id_proveedor) values 
('$fecha_cadu', '$descripcion', '$cantidad','$caracteristica','$id_tipo_producto','$id_marca','$id_proveedor')";

if ($conn->query($sql)) {
 $id = $conn->insert_id;
}

header('Location: productos.php');