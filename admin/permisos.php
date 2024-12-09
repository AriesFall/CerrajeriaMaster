<?php require_once "vistas/parte_superior.php"?>
<?php require_once "bd/conexion.php";
$sqlpermiso = "CALL Usal()";
$permiso = $conn->query($sqlpermiso);

?>
<!--INICIO del cont principal-->
<div class="container">
    <h1 class="font-weight-normal">Permisos de usuario</h1>
    <br>
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersona" class="table table-condensed table-striped table-bordered table-hover mt-4" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Usuario</th>
                                <th>Nombre</th>                                
                                <th>Correo</th> 
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row_permiso = $permiso->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row_permiso['id'];?></td>
                                    <td><?= $row_permiso['usuario'];?></td>
                                    <td><?= $row_permiso['nombre'];?></td>
                                    <td><?= $row_permiso['correo'];?></td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarpermisomodal" data-bs-id="<?= $row_permiso['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Editar sesión</a>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarpermisomodal" data-bs-id="<?= $row_permiso['id']; ?>"><i class="fa-solid fa-trash"></i> Eliminar sesión</a>
                                    </td>
                                </tr>
                            <?php } ?>                            
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>
    
    <?php include 'crud_permiso/editarpermisomodal.php'; ?>
    <?php include 'crud_permiso/eliminarpermisomodal.php'; ?>

    <script>
        let editarpermisomodal = document.getElementById('editarpermisomodal')
        let eliminarpermisomodal = document.getElementById('eliminarpermisomodal')

        editarpermisomodal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editarpermisomodal.querySelector('.modal-body #id')
            let inputUsuario = editarpermisomodal.querySelector('.modal-body #usuario')
            let inputNombre = editarpermisomodal.querySelector('.modal-body #nombre')
            let inputCorreo = editarpermisomodal.querySelector('.modal-body #correo')

            let url = "crud_permiso/getpermiso.php"
            let formData = new FormData()
            formData.append('id', id)

            fetch(url, {
                method: "POST",
                body: formData
            }).then(response => response.json())
             .then(data => {

                inputId.value = data.id
                inputUsuario.value = data.usuario
                inputNombre.value = data.nombre
                inputCorreo.value = data.correo

             }).catch(err => console.log(err))
        })

        eliminarpermisomodal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            eliminarpermisomodal.querySelector('.modal-footer #id').value =  id
        })
    </script>

</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>