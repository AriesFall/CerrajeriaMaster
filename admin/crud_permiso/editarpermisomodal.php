<!-- Modal -->
<div class="modal fade" id="editarpermisomodal" tabindex="-1" aria-labelledby="editarpermisomodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header2">
        <h1 class="modal-title text-white fs-5" id="editarpermisomodalLabel">Modificar permisos de usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="crud_permiso/actualizapermiso.php" method="post">
            <input type="hidden" id="id" name="id">
            <div class="mb-2">
              <label for="usuario" class="form-label">Nombre de usuario:</label>
              <input type="text" name="usuario" id="usuario" class="form-control form-control-sm" maxlength="40" required>
            </div>
            <div class="mb-2">
              <label for="correo" class="form-label">Correo:</label>
              <input type="email" name="correo" id="correo" class="form-control form-control-sm" maxlength="50" required></input>
            </div>
            <div class="mb-2">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" maxlength="40" required></input>
            </div>
            <Label>Seleccionar rol:</Label>
            <br>
            <select name="tipo_usuario" id="tipo_usuario" class="custom-select form-control rounded">
            <option value="0" <?php echo ($tipo_usuario == 0) ? 'selected' : ''; ?>>Ninguno</option>
              <option value="1" <?php echo ($tipo_usuario == 1) ? 'selected' : ''; ?>>Administrador</option>
              <option value="2" <?php echo ($tipo_usuario == 2) ? 'selected' : ''; ?>>Estandar</option>
            </select>
            <br>
            <div class="text-right">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
  .modal-header2
 {
     background-color: #4e73df;
 }
</style>