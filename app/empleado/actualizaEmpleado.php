<?php

require '../configuracion/basedatos.php';


$id=$conn->real_escape_string( $_POST["idempleado"]);
$nombre=$conn->real_escape_string( $_POST["nombre"]);
$apellido_pat=$_POST["apaterno"];
$apellido_mat=$_POST["amaterno"];
$fechaPlanta=$_POST["fecha_planta"];
$calle=$_POST["calle"];
$numero=$_POST["numero"];
$fechaNacimi=$_POST["fecha_nacimiento"];
$sueldo=$_POST["sueldo"];
$colonia=$_POST["colonia"];
$estudio=$_POST["estudio"];

$sql="UPDATE empleado SET nombre='$nombre', ap_paterno='$apellido_pat', ap_materno='$apellido_mat', fecha_de_planta='$fechaPlanta', calle='$calle', numero='$numero', 
fecha_nacimiento='$fechaNacimi', sueldo='$sueldo', id_colonia='$colonia', id_estudio='$estudio' WHERE id_empleado=$id";


if ($conn->query($sql)) {
    $id= $conn->insert_id;
}

header('Location: empleado.php');