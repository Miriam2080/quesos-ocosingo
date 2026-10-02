<?php

require '../configuracion/basedatos.php';


$nombre=$conn->real_escape_string( $_POST["nombre"]);
$apellido_pat=$_POST["apaterno"];
$apellido_mat=$_POST["amaterno"];
$fechaPlanta=$_POST["fecha_planta"];
$calle=$_POST["calle"];
$numero=$_POST["numero"];
$fehcaNacimi=$_POST["fecha_nacimiento"];
$sueldo=$_POST["sueldo"];
$colonia=$_POST["colonia"];
$estudio=$_POST["estudio"];

$sql="INSERT into empleado(nombre, ap_paterno, ap_materno, fecha_de_planta, calle, numero, fecha_nacimiento, sueldo, id_colonia, id_estudio)values 
('$nombre', '$apellido_pat', '$apellido_mat', '$fechaPlanta','$calle', '$numero', '$fehcaNacimi', '$sueldo', '$colonia', '$estudio')";

if ($conn->query($sql)) {
    $id= $conn->insert_id;
}

header('Location: empleado.php');