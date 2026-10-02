<?php

require '../configuracion/basedatos.php';


$nombre=$conn->real_escape_string( $_POST["nombre"]);
$apellido_pat=$_POST["apaterno"];
$apellido_mat=$_POST["amaterno"];
$rfc=$_POST["rfc"];
$telefono=$_POST["telefono"];
$calle=$_POST["calle"];
$numero=$_POST["numero"];
$colonia=$_POST["Colonia"];

$sql="INSERT into proveedores(nombre, ap_paterno, ap_materno, rfc, telefono, calle, numero, id_colonia)values 
('$nombre', '$apellido_pat', '$apellido_mat', '$rfc', '$telefono', '$calle','$numero', '$colonia')";

if ($conn->query($sql)) {
    $id= $conn->insert_id;
}

header('Location: proveedores.php');