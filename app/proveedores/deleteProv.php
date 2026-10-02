<?php

require '../configuracion/basedatos.php';

$id=$conn->real_escape_string($_POST['idproveedor']);


$sql="DELETE FROM proveedores WHERE id_proveedor=$id"; 


if ($conn->query($sql)) {
}

header('Location: proveedores.php');