<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Página de servicios</h1>
</div>
<br>
<!--FIN del cont principal-->
<?php

require_once "bd/conexion.php";

$sqlservicios = "CALL Ssal()";
$servicios = $conn->query($sqlservicios);

$dir = "servicios/";

?>
        <?php if (isset($_SESSION['msg']) && isset($_SESSION['color'])) { ?>
            <div class="alert alert-<?= $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['msg']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php
            unset($_SESSION['color']);
            unset($_SESSION['msg']);
        } ?>

<div class="col-auto">
        <a href="#" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#modalservicio"><i class="fa-solid fa-circle-plus"></i> Nuevo Servicio</a>
    </div>
    <br>

        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaServicio" class="table table-condensed table-striped table-bordered table-hover mt-4" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Servicio</th>
                                <th>Descripción</th>                                
                                <th>Precio</th>
                                <th>Imagen</th> 
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row_servicios = $servicios->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row_servicios['id'];?></td>
                                    <td><?= $row_servicios['servicio_'];?></td>
                                    <td><?= $row_servicios['descripcion_'];?></td>
                                    <td><?= $row_servicios['precio_'];?></td>
                                    <td><img src="<?= $dir . $row_servicios['id'] . $row_servicios['precio_'] . '.jpg'; ?>" width="100"></td>                                   
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editaserviciomodal" data-bs-id="<?= $row_servicios['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaserviciomodal" data-bs-id="<?= $row_servicios['id']; ?>"><i class="fa-solid fa-trash"></i> Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>                            
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>

    <?php include 'crud_servicio/modalservicio.php'; ?>
    <?php include 'crud_servicio/editaserviciomodal.php'; ?>
    <?php include 'crud_servicio/eliminaserviciomodal.php'; ?>

    <script>
        let editaserviciomodal = document.getElementById('editaserviciomodal')
        let eliminaserviciomodal = document.getElementById('eliminaserviciomodal')
        let modalservicio = document.getElementById('modalservicio')

        modalservicio.addEventListener('hide.bs.modal', event => {
            modalservicio.querySelector('.modal-body #servicio_').value = ""
            modalservicio.querySelector('.modal-body #descripcion_').value = ""
            modalservicio.querySelector('.modal-body #precio_').value = ""
            modalservicio.querySelector('.modal-body #poster').value = ""
        })

        editaserviciomodal.addEventListener('hide.bs.modal', event => {
            editaserviciomodal.querySelector('.modal-body #servicio_').value = ""
            editaserviciomodal.querySelector('.modal-body #descripcion_').value = ""
            editaserviciomodal.querySelector('.modal-body #precio_').value = ""
            editaserviciomodal.querySelector('.modal-body #img_poster').value = ""
            editaserviciomodal.querySelector('.modal-body #poster').value = ""
        })

        editaserviciomodal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editaserviciomodal.querySelector('.modal-body #id')
            let inputServicio_ = editaserviciomodal.querySelector('.modal-body #servicio_')
            let inputDescripcion_ = editaserviciomodal.querySelector('.modal-body #descripcion_')
            let inputPrecio_ = editaserviciomodal.querySelector('.modal-body #precio_')
            let poster = editaserviciomodal.querySelector('.modal-body #img_poster_')

            let url = "crud_servicio/getservicio.php"
            let formData = new FormData()
            formData.append('id', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    inputId.value = data.id
                    inputServicio_.value = data.servicio_
                    inputDescripcion_.value = data.descripcion_
                    inputPrecio_.value = data.precio_
                    poster.src = '<?= $dir ?>' + data.id + data.precio_ + '.jpg'

                }).catch(err => console.log(err))

        })

        eliminaserviciomodal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            eliminaserviciomodal.querySelector('.modal-footer #id').value = id
        })
    </script>

<?php require_once "vistas/parte_inferior.php"?>