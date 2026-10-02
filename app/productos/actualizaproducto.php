<?php

require '../configuracion/basedatos.php';

$id=$conn->real_escape_string($_POST['idproducto']);
$fechaC=$conn->real_escape_string( $_POST["fecha_cadu"]);
$descri=$_POST["descripcion"];
$cantidad=$_POST["cantidad"];
$caract=$_POST["caracteristica"];
$tipo=$_POST["id_tipo_producto"];
$marca=$_POST["id_marca"];
$iproveedor=$_POST["id_proveedor"];

$sql="UPDATE producto SET fecha_cadu='$fechaC', descripcion='$descri', cantidad='$cantidad',caracteristica='$caract', id_tipo_producto='$tipo', 
id_marca='$marca', id_proveedor='$iproveedor'
WHERE id_producto=$id"; 


if ($conn->query($sql)) {
    $id= $conn->insert_id;
}

header('Location: productos.php');