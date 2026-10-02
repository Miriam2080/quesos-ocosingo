<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['username'];
if ($varsesion == null || $varsesion = '') {
    header('Location: ../../pagina/iniciar_sesion.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <link rel="stylesheet" href="../../info/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../info/css/all.min.css">
    <link rel="stylesheet" href="../../info/css/estilos.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../pagina/principal.php">Regresar</a>
                </li>
            </ul>
        </div>

    </nav>
    <main>
        <div class="container py-3">
            <div class="row">
                <h1 class="text-center">Empleado</h1>
                <form class="row g-3 mb-6 d-flex justify-content-center">
                    <div class="col-auto col-lg-4 ">
                        <label for="searchEmpleadoInput" class="visually-hidden ">Buscar</label>
                        <input type="search" class="form-control" id="searchEmpleadoInput" placeholder="Buscar">
                    </div>
                    <div class="col-auto">
                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#nuevoempleado">
                            <i class="fa-solid fa-circle-plus"></i>
                            Agregar registro</a>
                    </div>
                    <div class="col-auto text-right">
                        <a class="btn btn-success" href="../../fpdf2/reporteEMPLEADO.php" target="_blank">
                            <i class="fa-solid fa-file-pdf"></i>
                            Reportes</a>
                    </div>
                </form>
                <div class="table-responsive">
                    <br>
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Fecha de planta</th>
                                <th>Calle</th>
                                <th>Número</th>
                                <th>Fecha de nacimiento</th>
                                <th>Sueldo</th>
                                <th>Id Colonia</th>
                                <th>Id Estudio</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require '../configuracion/basedatos.php';
                            $sqlempleado = "SELECT * from empleado";
                            $empleados = $conn->query($sqlempleado);

                            while ($informacion = $empleados->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $informacion['id_empleado']; ?></td>
                                    <td><?= $informacion['nombre']; ?></td>
                                    <td><?= $informacion['ap_paterno']; ?></td>
                                    <td><?= $informacion['ap_materno']; ?></td>
                                    <td><?= $informacion['fecha_de_planta']; ?></td>
                                    <td><?= $informacion['calle']; ?></td>
                                    <td><?= $informacion['numero']; ?></td>
                                    <td><?= $informacion['fecha_nacimiento']; ?></td>
                                    <td><?= $informacion['sueldo']; ?></td>
                                    <td><?= $informacion['id_colonia']; ?></td>
                                    <td><?= $informacion['id_estudio']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editaEmpleado" data-bs-id="<?= $informacion['id_empleado']; ?>"><i class="fa-solid fa-pencil"></i></a>
                                            <a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="<?= $informacion['id_empleado']; ?>"><i class="fa-solid fa-trash"></i></a>
                                        </div>

                                    </td>
                                </tr>
                            <?php }
                            ?>

                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </main>
    <?php
    $sqlColonia = "SELECT id_colonia, nombre_colonia FROM colonia";
    $nuevaColonia = $conn->query($sqlColonia);

    $sqlEstudio = "SELECT id_estudio, grado_de_estudios FROM estudios";
    $nuevoEstudio = $conn->query($sqlEstudio);
    ?>
    <?php include 'agregarEmpleado.php'; ?>
    <?php include 'editarEmpleado.php'; ?>
    <?php include 'eliminarEmpleado.php'; ?>

    <!--<script src="../../info/js/editar.js"></script> -->
    <script>
        let editarModal = document.querySelector('#editaEmpleado');
        let eliminarModal = document.querySelector('#eliminaModal');


        editarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');

            let inpuID = editarModal.querySelector('.modal-body #idempleado');
            let nombre = editarModal.querySelector('.modal-body #nombre');
            let aPaterno = editarModal.querySelector('.modal-body #apaterno');
            let aMaterno = editarModal.querySelector('.modal-body #amaterno');
            let fechaPlanta = editarModal.querySelector('.modal-body #fecha_planta');
            let calle = editarModal.querySelector('.modal-body #calle');
            let numero = editarModal.querySelector('.modal-body #numero');
            let fechaNacimiento = editarModal.querySelector('.modal-body #fecha_nacimiento');
            let paga = editarModal.querySelector('.modal-body #sueldo');
            let colonia = editarModal.querySelector('.modal-body #colonia');
            let estudio = editarModal.querySelector('.modal-body #estudio');

            //ASIGNANDO EVENTOS
            nombre.addEventListener('blur', validar);
            aPaterno.addEventListener('blur', validar);
            aPaterno.addEventListener('blur', validar);
            calle.addEventListener('blur', validar);
            //FIN DE ASIGNACION

            let url = "getEmpleado.php"
            let formData = new FormData()
            formData.append('idempleado', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {
                    inpuID.value = data.id_empleado;
                    nombre.value = data.nombre;
                    aPaterno.value = data.ap_paterno;
                    aMaterno.value = data.ap_materno;
                    fechaPlanta.value = data.fecha_de_planta;
                    calle.value = data.calle;
                    numero.value = data.numero;
                    fechaNacimiento.value = data.fecha_nacimiento;
                    paga.value = data.sueldo;
                    colonia.value = data.id_colonia
                    estudio.value = data.id_estudio

                    // console.log('inputID');

                }).catch(err => console.log(err))

        }) //fin de editar

        //VALIDANDO ESPACIOS
        function validar(e) {
            if (e.target.value.trim() === '') {
                alert('Esta vacio')
            }
        } //FIN DE VALIDACION DE ESPACIOS

        //Inicia eliminar
        eliminarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            eliminarModal.querySelector('.modal-footer #idempleado').value = id
        })
        const searchInput = document.querySelector('#searchEmpleadoInput');
        searchInput.addEventListener('input', function() {
            let query = this.value.toLowerCase();
            let rows = document.querySelectorAll('tbody tr');

            rows.forEach(function(row) {
                let cells = row.querySelectorAll('td');
                let match = Array.from(cells).some(function(cell) {
                    return cell.textContent.toLowerCase().includes(query);
                });
                row.style.display = match ? '' : 'none';
            });
        });
    </script>
    <script src="../../info/js/bootstrap.bundle.min.js"></script>
</body>

</html>