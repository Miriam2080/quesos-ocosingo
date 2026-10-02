<div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="eliminaModalLabel">Eliminar empleado</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ¿Desea eliminar el proveedor?
          </div>
          <div class="modal-footer">
              <form action="deleteEmpleado.php" method="post">
                <input type="hidden" name="idempleado" id="idempleado">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Eliminar </button>
              </form>
          </div>
       
          <div class="modal-footer">

          </div>
        </div>
      </div>
</div>