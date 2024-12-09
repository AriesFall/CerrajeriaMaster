<?php require_once "vistas/parte_superior.php"?>
<?php require_once "bd/conexion.php";
$sqlpersonas = "CALL PEsal";
$personas = $conn->query($sqlpersonas);

?>
<!--INICIO del cont principal-->
<div class="container">
    <h1 class="font-weight-normal">Contenido principal</h1>
    
    <div class="col-auto">
        <a href="#" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#modalpersona"><i class="fa-solid fa-circle-plus"></i> Nuevo</a>
    </div>
    <br>
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersona" class="table table-condensed table-striped table-bordered table-hover mt-4" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>                                
                                <th>Email</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row_personas = $personas->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row_personas['id'];?></td>
                                    <td><?= $row_personas['nombre'];?></td>
                                    <td><?= $row_personas['apellidos'];?></td>
                                    <td><?= $row_personas['email'];?></td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarmodal" data-bs-id="<?= $row_personas['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarmodal" data-bs-id="<?= $row_personas['id']; ?>"><i class="fa-solid fa-trash"></i> Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>                            
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>
    
    <?php include 'crud_persona/modalpersona.php'; ?>
    <?php include 'crud_persona/editarmodal.php'; ?>
    <?php include 'crud_persona/eliminarmodal.php'; ?>

    <script>
        let editarmodal = document.getElementById('editarmodal')
        let eliminarmodal = document.getElementById('eliminarmodal')
        let modalpersona = document.getElementById('modalpersona')

        modalpersona.addEventListener('hide.bs.modal', event => {
            modalpersona.querySelector('.modal-body #nombre').value = ""
            modalpersona.querySelector('.modal-body #apellidos').value = ""
            modalpersona.querySelector('.modal-body #email').value = ""
        })

        editarmodal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editarmodal.querySelector('.modal-body #id')
            let inputNombre = editarmodal.querySelector('.modal-body #nombre')
            let inputApellidos = editarmodal.querySelector('.modal-body #apellidos')
            let inputEmail = editarmodal.querySelector('.modal-body #email')

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

             }).catch(err => console.log(err))
        })

        eliminarmodal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            eliminarmodal.querySelector('.modal-footer #id').value =  id
        })
    </script>

</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>