<?php require_once "vistas/parte_superior.php"?>
<?php require_once "bd/conexion.php";
$sqlpersonas = "CALL PEsal()";
$personas = $conn->query($sqlpersonas);

?>
<!--INICIO del cont principal-->
<div class="container">
    <h1 class="font-weight-normal">Página Mensajes</h1>
    <br>
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersona" class="table table-condensed table-striped table-bordered table-hover mt-4" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Tema</th>
                                <th>Fecha</th> 
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row_personas = $personas->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row_personas['id'];?></td>
                                    <td><?= $row_personas['email'];?></td>
                                    <td><?= $row_personas['tema'];?></td>
                                    <td><?= $row_personas['fecha'];?></td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarmensaje" data-bs-id="<?= $row_personas['id']; ?>"><i class="fa-solid fa-eye"></i> Ver todo</a>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarmensajemodal" data-bs-id="<?= $row_personas['id']; ?>"><i class="fa-solid fa-trash"></i> Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>                            
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>
    
    <?php include 'crud_mensaje/editarmensaje.php'; ?>
    <?php include 'crud_mensaje/eliminarmensajemodal.php'; ?>

    <script>
        let editarmensaje = document.getElementById('editarmensaje')
        let eliminarmensajemodal = document.getElementById('eliminarmensajemodal')

        editarmensaje.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editarmensaje.querySelector('.modal-body #id')
            let inputNombre = editarmensaje.querySelector('.modal-body #nombre')
            let inputApellidos = editarmensaje.querySelector('.modal-body #apellidos')
            let inputEmail = editarmensaje.querySelector('.modal-body #email')
            let inputMensaje = editarmensaje.querySelector('.modal-body #mensaje')
            let inputTema = editarmensaje.querySelector('.modal-body #tema')
            let inputFecha = editarmensaje.querySelector('.modal-body #fecha')

            let url = "crud_persona/getpersona.php"
            let formData = new FormData()
            formData.append('id', id)

            fetch(url, {
                method: "POST",
                body: formData
            }).then(response => response.json())
             .then(data => {

                inputId.value = data.id
                inputNombre.value = data.nombre
                inputApellidos.value = data.apellidos
                inputEmail.value = data.email
                inputMensaje.value = data.mensaje
                inputTema.value = data.tema
                inputFecha.value = data.fecha

             }).catch(err => console.log(err))
        })

        eliminarmensajemodal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            eliminarmensajemodal.querySelector('.modal-footer #id').value =  id
        })
    </script>

</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>