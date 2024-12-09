<!-- Modal -->
<div class="modal fade" id="eliminarpermisomodal" tabindex="-1" aria-labelledby="eliminarpermisomodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header modal-header1 bg-secondary">
        <h1 class="modal-title text-white fs-5" id="eliminarmodalpermisoLabel">Aviso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el registro?
      </div>
      <div class="modal-footer">
      <form action="crud_permiso/eliminarpermiso.php" method="post">
        <input type="hidden" name="id" id="id">
            <div class="text-right">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-secondary">Eliminar</button>
            </div>
        </form>
      </div>

    </div>
  </div>
</div>