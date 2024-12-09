<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Página de productos</h1>
</div>
<br>
<!--FIN del cont principal-->
<?php

require_once "bd/conexion.php";

$sqlproductos = "CALL PRsal()";
$productos = $conn->query($sqlproductos);

$dir = "productos/";

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
        <a href="#" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#modalproducto"><i class="fa-solid fa-circle-plus"></i> Nuevo Producto</a>
    </div>
    <br>

        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaProducto" class="table table-condensed table-striped table-bordered table-hover mt-4" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Producto</th>
                                <th>Descripción</th>                                
                                <th>Precio</th>
                                <th>Imagen</th> 
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row_productos = $productos->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row_productos['id'];?></td>
                                    <td><?= $row_productos['producto'];?></td>
                                    <td><?= $row_productos['descripcion'];?></td>
                                    <td><?= $row_productos['precio'];?></td>
                                    <td><img src="<?= $dir . $row_productos['id'] . $row_productos['precio'] . '.jpg';?>" width="100" alt="Imagen visualizandose"></td>                                   
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editaproductomodal" data-bs-id="<?= $row_productos['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaproductomodal" data-bs-id="<?= $row_productos['id']; ?>"><i class="fa-solid fa-trash"></i> Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>                            
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>

    <?php include 'crud_producto/modalproducto.php'; ?>
    <?php include 'crud_producto/editaproductomodal.php'; ?>
    <?php include 'crud_producto/eliminaproductomodal.php'; ?>

    <script>
        let editaModal = document.getElementById('editaproductomodal')
        let eliminaModal = document.getElementById('eliminaModal')
        let modalproducto = document.getElementById('modalproducto')

        modalproducto.addEventListener('hide.bs.modal', event => {
            modalproducto.querySelector('.modal-body #producto').value = ""
            modalproducto.querySelector('.modal-body #descripcion').value = ""
            modalproducto.querySelector('.modal-body #precio').value = ""
            modalproducto.querySelector('.modal-body #poster').value = ""
        })

        editaproductomodal.addEventListener('hide.bs.modal', event => {
            editaproductomodal.querySelector('.modal-body #producto').value = ""
            editaproductomodal.querySelector('.modal-body #descripcion').value = ""
            editaproductomodal.querySelector('.modal-body #precio').value = ""
            editaproductomodal.querySelector('.modal-body #img_poster').value = ""
            editaproductomodal.querySelector('.modal-body #poster').value = ""
        })

        editaproductomodal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editaproductomodal.querySelector('.modal-body #id')
            let inputProducto = editaproductomodal.querySelector('.modal-body #producto')
            let inputDescripcion = editaproductomodal.querySelector('.modal-body #descripcion')
            let inputPrecio = editaproductomodal.querySelector('.modal-body #precio')
            let inputPoster = editaproductomodal.querySelector('.modal-body #img_poster')

            let url = "crud_producto/getproducto.php"
            let formData = new FormData()
            formData.append('id', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    inputId.value = data.id
                    inputProducto.value = data.producto
                    inputDescripcion.value = data.descripcion
                    inputPrecio.value = data.precio
                    poster.src = '<?= $dir ?>' + data.id + data.precio + '.jpg'

                }).catch(err => console.log(err))

        })

        eliminaproductomodal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            eliminaproductomodal.querySelector('.modal-footer #id').value = id
        })
    </script>

<?php require_once "vistas/parte_inferior.php"?>