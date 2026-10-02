<?php

require '../configuracion/basedatos.php';

$id= $_POST["idproveedor"];

$sql="SELECT id_proveedor, nombre, ap_paterno, ap_materno, rfc, telefono, calle, numero, id_colonia FROM proveedores WHERE id_proveedor=$id";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$proveedor = [];
#print_r($cliente);
if($rows > 0){
    $proveedor = $resultado->fetch_array();
}

echo json_encode($proveedor ,JSON_UNESCAPED_UNICODE);