<!-- Modal edita registro -->
<div class="modal fade" id="editaproductomodal" tabindex="-1" aria-labelledby="editaproductomodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-white" id="editaproductomodalLabel">Editar producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="crud_producto/actualizaproducto.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" id="id" name="id">

                    <div class="mb-2">
                        <label for="producto" class="form-label">Producto:</label>
                        <input type="text" name="producto" id="producto" class="form-control form-control-sm" maxlength="40" required>
                    </div>

                    <div class="mb-2">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <textarea name="descripcion" id="descripcion" class="form-control form-control-sm" rows="5" maxlength="180" required></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="text" name="precio" id="precio" class="form-control form-control-sm" maxlength="40" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">Imagen:</label>
                        <input type="file" name="poster" id="poster" class="form-control form-control-sm" accept="image/jpeg">
                    </div>

                    <div class="d-flex justify-content-end pt2">
                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-secondary ms-1"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>