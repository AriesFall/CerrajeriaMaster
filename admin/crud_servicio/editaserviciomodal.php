<!-- Modal edita registro -->
<div class="modal fade" id="editaserviciomodal" tabindex="-1" aria-labelledby="editaserviciomodallLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-white" id="editaserviciomodallLabel">Editar servicio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="crud_servicio/actualizaservicio.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" id="id" name="id">

                    <div class="mb-2">
                        <label for="servicio_" class="form-label">Servicio:</label>
                        <input type="text" name="servicio_" id="servicio_" class="form-control form-control-sm" maxlength="40" required>
                    </div>

                    <div class="mb-2">
                        <label for="descripcion_" class="form-label">Descripción:</label>
                        <textarea name="descripcion_" id="descripcion_" class="form-control form-control-sm" rows="5" maxlength="180" required></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="precio_" class="form-label">Precio:</label>
                        <input type="text" name="precio_" id="precio_" class="form-control form-control-sm" maxlength="40" required></input>

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