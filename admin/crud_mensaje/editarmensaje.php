<!-- Modal -->
<div class="modal fade" id="editarmensaje" tabindex="-1" aria-labelledby="editarmensajeLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header modal-header2">
        <h1 class="modal-title text-white fs-5" id="editarmensajeLabel">Detalles del mensaje</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" id="id" name="id">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="tema" class="form-label">Tema:</label>
                <input type="text" name="tema" id="tema" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="mensaje" class="form-label">Mensaje:</label>
                <input type="text" name="mensaje" id="mensaje" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="fecha" class="form-label">Fecha de envio:</label>
                <input type="date" name="fecha" id="fecha" class="form-control" required>
            </div>
            <div class="text-right">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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