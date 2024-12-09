<!-- Modal -->
<div class="modal fade" id="modalservicio" tabindex="-1" aria-labelledby="modalservicioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title text-white fs-5" id="modalservicioLabel">Nuevo Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="crud_servicio/guardaservicio.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="servicio_" class="form-label">Servicio:</label>
                <input type="text" name="servicio_" id="servicio_" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descripcion_" class="form-label">Descripción:</label>
                <input type="text" name="descripcion_" id="descripcion_" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="precio_" class="form-label">Precio:</label>
                <input type="text" name="precio_" id="precio_" class="form-control" maxlength="30" required>
            </div>
            <div class="mb-3">
              <label for="poster" class="form-label">Poster:</label>
              <input type="file" name="poster" id="poster" class="form-control" accept="image/jpeg">
            </div>
            <div class="text-right">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>