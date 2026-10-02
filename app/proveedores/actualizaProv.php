<?php

require '../configuracion/basedatos.php';

$id=$conn->real_escape_string($_POST['idproveedor']);
$nombre=$conn->real_escape_string( $_POST["nombre"]);
$apellido_pat=$_POST["apaterno"];
$apellido_mat=$_POST["amaterno"];
$rfc=$_POST["rfc"];
$telefono=$_POST["telefono"];
$calle=$_POST["calle"];
$numero=$_POST["numero"];
$colonia=$_POST["Colonia"];

$sql="UPDATE proveedores SET nombre='$nombre', ap_paterno='$apellido_pat', ap_materno='$apellido_mat', rfc='$rfc', telefono='$telefono',
calle='$calle', numero='$numero', id_colonia=$colonia WHERE id_proveedor=$id"; 


if ($conn->query($sql)) {
    $id= $conn->insert_id;
}

header('Location: proveedores.php');