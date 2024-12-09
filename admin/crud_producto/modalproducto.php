<!-- Modal -->
<div class="modal fade" id="modalproducto" tabindex="-1" aria-labelledby="modalproductoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title text-white fs-5" id="modalproductoLabel">Nuevo Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="crud_producto/guardaproducto.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="producto" class="form-label">Producto:</label>
                <input type="text" name="producto" id="producto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" name="precio" id="precio" class="form-control" maxlength="30" required>
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