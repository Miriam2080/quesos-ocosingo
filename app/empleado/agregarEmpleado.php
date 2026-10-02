<?php
require '../configuracion/basedatos.php';
    $sqlColonia = "SELECT id_colonia, nombre_colonia FROM colonia";
    $nuevaColonia = $conn->query($sqlColonia);

    $sqlEstudio = "SELECT id_estudio, grado_de_estudios FROM estudios";
    $nuevoEstudio = $conn->query($sqlEstudio);
    ?>
<div class="modal fade" id="nuevoempleado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoempeladoModal">Agregar empelado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guardarEmpleado.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"  required pattern="[A-Za-zÁ-ÿ]+([ ]?[A-Za-zÁ-ÿ]+)" title="El nombre solo debe contener letras y espacios">
                    </div>

                    <div class="mb-3">
                        <label for="apaterno" class="form-label">Apellido Paterno:</label>
                        <input type="text" name="apaterno" id="apaterno" class="form-control"  required pattern="[A-Za-zÁ-ÿ]+([ ]?[A-Za-zÁ-ÿ]+)" title="El nombre solo debe contener letras y espacios">
                    </div>

                    <div class="mb-3">
                        <label for="amaterno" class="form-label">Apellido Materno: </label>
                        <input type="text" name="amaterno" id="amaterno" class="form-control"  required pattern="[A-Za-zÁ-ÿ]+([ ]?[A-Za-zÁ-ÿ]+)" title="El nombre solo debe contener letras y espacios">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_planta" class="form-label">Fecha de planta:</label>
                        <input type="date" id="fecha_planta" name="fecha_planta" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="calle" class="form-label">Calle: </label>
                        <input type="text" name="calle" id="calle" class="form-control"  required pattern="[A-Za-zÁ-ÿ]+([ ]?[A-Za-zÁ-ÿ]+)" title="El nombre solo debe contener letras y espacios">
                    </div>

                    <div class="mb-3">
                        <label for="numero" class="form-label">Numero: </label>
                        <input type="number" name="numero" id="numero" class="form-control" pattern="\d+" title="Por favor, ingresa solo números">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento: </label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required max=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
                    </div>
                    <div class="mb-3">
                        <label for="sueldo" class="form-label">Sueldo: </label>
                        <input type="number" name="sueldo" id="sueldo" class="form-control" pattern="^\d+(\.\d{1,2})?$" title="Por favor, ingrese un salario válido (máximo dos decimales)" required>
                    </div>

                    <div class="mb-3">
                        <label for="colonia" class="form-label"> Colonia </label>
                        <select name="colonia" id="colonia" class="form-select" required>
                            <option value="">Seleccionar..</option>
                            <?php while ($row_colonia = $nuevaColonia->fetch_assoc()) { ?>
                                <option value="<?php echo $row_colonia["id_colonia"]; ?>"><?= $row_colonia["nombre_colonia"] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="estudio" class="form-label"> Estudio </label>
                        <select name="estudio" id="estudio" class="form-select" required>
                            <option value="">Seleccionar..</option>
                            <?php while ($row_estudio = $nuevoEstudio->fetch_assoc()) { ?>
                                <option value="<?php echo $row_estudio["id_estudio"]; ?>"><?= $row_estudio["grado_de_estudios"] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>Guardar cambios </button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
