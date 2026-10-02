<?php

require '../configuracion/basedatos.php';

$id=$conn->real_escape_string($_POST['idproducto']);


$sql="DELETE FROM producto WHERE id_producto=$id"; 


if ($conn->query($sql)) {
}

header('Location: productos.php');