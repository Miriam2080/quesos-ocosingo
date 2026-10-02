<?php

require '../configuracion/basedatos.php';

$id=$conn->real_escape_string($_POST['idempleado']);


$sql="DELETE FROM empleado WHERE id_empleado=$id"; 


if ($conn->query($sql)) {
}

header('Location: empleado.php');