<?php
require_once "../admin/bd/conexion.php";

$sql = "CALL Ssal()";
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
                        <img class="img-fluid" src="admin/servicios/' . $row['id'] . $row['precio_'] . '.jpg" alt="" style="width: 200px; height: 150px;">
                        <h4 class="bg-dark text-primary p-2 m-0">' . $row['precio_'] . '</h4>
                    </div>
                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                        <h5 class="text-uppercase">' . $row['servicio_'] . '</h5>
                        <span>' . $row['descripcion_'] . '</span>
                    </div>
                </div>
            </div>';
    }
} else {
    $html = '<p>No hay servicios disponibles.</p>';
}

// Devolver el HTML generado
echo $html;

// ... (código para cerrar la conexión a la base de datos)
?>