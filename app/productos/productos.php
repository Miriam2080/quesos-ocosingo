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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
                <h1 class="text-center">Productos</h1>
                <form class="row g-3 mb-6 d-flex justify-content-center">
                    <div class="col-auto col-lg-4 ">
                        <label for="searchproductoInput" class="visually-hidden ">Buscar</label>
                        <input type="search" class="form-control" id="searchproductoInput" placeholder="Buscar">
                    </div>
                    <div class="col-auto">
                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#nuevoproducto">
                            <i class="fa-solid fa-circle-plus"></i>
                            Agregar registro</a>
                    </div>
                    <div class="col-auto text-right">
                        <a class="btn btn-success" href="../../fpdf2/Pruebahproductos.php" target="_blank">
                            <i class="fa-solid fa-file-pdf"></i>
                            Reportes</a>
                    </div>
                </form>
                <div class="table-responsive">
                    <h2 class="text-center mb-4 text-white">Nombre del Cliente </h2>
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Id</th>
                                <th>Fecha de caducidad</th>
                                <th>Descripcion</th>
                                <th>Cantidad</th>
                                <th>Caracteristica</th>
                                <th>Id tipo producto</th>
                                <th>Id marca</th>
                                <th>Id proveedor</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require '../configuracion/basedatos.php';
                            $sqlProductos = "SELECT * from producto";
                            $productos = $conn->query($sqlProductos);
                            
                            while ($informacion = $productos->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $informacion['id_producto']; ?></td>
                                    <td><?= $informacion['fecha_cadu']; ?></td>
                                    <td><?= $informacion['descripcion']; ?></td>
                                    <td><?= $informacion['cantidad']; ?></td>
                                    <td><?= $informacion['caracteristica']; ?></td>
                                    <td><?= $informacion['id_tipo_producto']; ?></td>
                                    <td><?= $informacion['id_marca']; ?></td>
                                    <td><?= $informacion['id_proveedor']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editaProducto" data-bs-id="<?= $informacion['id_producto']; ?>"><i class="fa-solid fa-pencil"></i></a>
                                           <a class="btn btn-sm btn-danger"
   data-bs-toggle="modal"
   data-bs-target="#eliminaProducto"
   data-bs-id="<?= $informacion['id_producto']; ?>">
    <i class="fa-solid fa-trash"></i>
</a>
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
        $sqlTipoPro = "SELECT id_tipo_producto, nombre_tipo_producto FROM tipo_producto";
        $nuevoProducto = $conn->query($sqlTipoPro);

        $sqlMarca = "SELECT id_marca, nombre_marca FROM marca";
        $nuevaMarca = $conn->query($sqlMarca);

        $sqlProve = "SELECT id_proveedor, nombre FROM proveedores";
        $nuevoProve = $conn->query($sqlProve);
    ?>

    <?php include 'agregarProducto.php'; ?>
    <?php include 'editarProducto.php'; ?>
    <?php include 'eliminarProducto.php'; ?>

    <!--<script src="../../info/js/editar.js"></script> -->
    <script>
        //LLama al los botones
        let editarModal = document.querySelector('#editaProducto');
        let eliminarModal = document.querySelector('#eliminaProducto');

        //Editar
        editarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');

            let inpuID = editarModal.querySelector('.modal-body #idproducto');
            let fechaCadu = editarModal.querySelector('.modal-body #fecha_cadu');
            let descripcion = editarModal.querySelector('.modal-body #descripcion');
            let cantidad= editarModal.querySelector('.modal-body #cantidad');
            let caracteristica = editarModal.querySelector('.modal-body #caracteristica');
            let tipoProdu = editarModal.querySelector('.modal-body #tipo_producto');
            let idMarca = editarModal.querySelector('.modal-body #marca');
            let idProve = editarModal.querySelector('.modal-body #proveedor');

            //Agregar evento
            caracteristica.addEventListener('blur', validando);

            let url = "getProducto.php"
            let formData = new FormData()
            formData.append('idproducto', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {
                    inpuID.value = data.id_producto;
                    fechaCadu.value = data.fecha_cadu;
                    descripcion.value = data.descripcion;
                    cantidad.value = data.cantidad;
                    caracteristica.value = data.caracteristica;
                    tipoProdu.value = data.id_tipo_producto;
                    idMarca.value = data.id_marca;
                    idProve.value = data.id_proveedor;

                }).catch(err => console.log(err));


                //VALIDANDO ESPACIOS
                function validando(e){
                if (e.target.value.trim() === '') {
                    alert('Esta vacio')
                }
            }

        })//Fin de editar


        eliminarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            eliminarModal.querySelector('.modal-footer #idproducto').value = id
        })
        const searchInput = document.querySelector('#searchproductoInput');
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