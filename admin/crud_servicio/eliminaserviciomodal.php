<!-- Modal elimina registro -->
<div class="modal fade" id="eliminaserviciomodal" tabindex="-1" aria-labelledby="eliminaserviciomodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h1 class="modal-title fs-5 text-white" id="eliminaserviciomodalLabel">Aviso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Desea eliminar el registro?
            </div>

            <div class="modal-footer">
                <form action="crud_servicio/eliminaserviciomodal.php" method="post">

                    <input type="hidden" name="id" id="id">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-secondary">Eliminar</button>
                </form>
            </div>

        </div>
    </div>
</div>