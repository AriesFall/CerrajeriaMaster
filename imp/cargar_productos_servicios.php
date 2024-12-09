<?php
require_once "../admin/bd/conexion.php";

$sql = "CALL PRsal()";
$result = $conn->query($sql);

// Construir el HTML para mostrar los productos
$html = '';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Puedes personalizar este bloque según el diseño de tu página
        $html .= '
            <div class="col-lg-6">
                <div class="d-flex h-100">
                    <div class="flex-shrink-0">
                        <img class="img-fluid responsive" src="admin/productos/' . $row['id'] . $row['precio'] . '.jpg" alt="" style="width: 200px; height: 150px;">
                        <h4 class="bg-dark text-primary p-2 m-0 responsive">' . $row['precio'] . '</h4>
                    </div>
                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                        <h5 class="text-uppercase responsive">' . $row['producto'] . '</h5>
                        <span>' . $row['descripcion'] . '</span>
                    </div>
                </div>
            </div>';
    }
} else {
    $html = '<p>No hay productos disponibles.</p>';
}

// Devolver el HTML generado
echo $html;

// ... (código para cerrar la conexión a la base de datos)
?>