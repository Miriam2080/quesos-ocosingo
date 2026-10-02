<?php

require '../configuracion/basedatos.php';

$id= $_POST["idempleado"];

$sql="SELECT id_empleado, nombre, ap_paterno, ap_materno, fecha_de_planta, calle, numero , fecha_nacimiento,sueldo , id_colonia, id_estudio FROM empleado WHERE id_empleado=$id";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$empleado = [];
#print_r($cliente);
if($rows > 0){
    $empleado = $resultado->fetch_array();
}

echo json_encode($empleado ,JSON_UNESCAPED_UNICODE);