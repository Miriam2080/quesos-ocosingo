<?php
require '../configuracion/basedatos.php';
$sqlTipoPro = "SELECT id_tipo_producto, nombre_tipo_producto FROM tipo_producto";
$nuevoProducto = $conn->query($sqlTipoPro);

$sqlMarca = "SELECT id_marca, nombre_marca FROM marca";
$nuevaMarca = $conn->query($sqlMarca);

$sqlProve = "SELECT id_proveedor, nombre FROM proveedores";
$nuevoProve = $conn->query($sqlProve);
?>
<div class="modal fade" id="nuevoproducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onclick="">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nuevoproductoModal">Agregar producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="guardarProducto.php" method="post" enctype="multipart/form-data">

          <div class="mb-3">
            <label for="fechacadu" class="form-label">Fecha de caducidad:</label>
            <input type="date" name="fecha_cadu" id="fecha_cadu" class="form-control" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
          </div>

          <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control"  required pattern="^[a-zA-Z0-9,.!? ]{5,200}$">
          </div>

          <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad: </label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" required>
          </div>

          <div class="mb-3">
            <label for="caracteristica" class="form-label">Caracteristica: </label>
            <input type="text" name="caracteristica" id="caracteristica" class="form-control"  required pattern="[A-Za-zÁ-ÿ]+([ ]?[A-Za-zÁ-ÿ]+)">
          </div>

          <div class="mb-3">
            <label for="tipo_producto" class="form-label"> tipo producto </label>
            <select name="id_tipo_producto" id="tipo_producto" class="form-select" required>
              <option value="">Seleccionar..</option>
              <?php while ($row_tipo = $nuevoProducto->fetch_assoc()) { ?>
                <option value="<?php echo $row_tipo["id_tipo_producto"]; ?>"><?= $row_tipo["nombre_tipo_producto"] ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="marca" class="form-label"> Id marca </label>
            <select name="id_marca" id="marca" class="form-select" required>
              <option value="">Seleccionar..</option>
              <?php while ($row_marca = $nuevaMarca->fetch_assoc()) { ?>
                <option value="<?php echo $row_marca["id_marca"]; ?>"><?= $row_marca["nombre_marca"] ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="proveedor" class="form-label"> Id proveedor </label>
            <select name="id_proveedor" id="proveedor" class="form-select" required>
              <option value="">Seleccionar..</option>
              <?php while ($row_proveedor = $nuevoProve->fetch_assoc()) { ?>
                <option value="<?php echo $row_proveedor["id_proveedor"]; ?>"><?= $row_proveedor["nombre"] ?></option>
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
<script>

</script>