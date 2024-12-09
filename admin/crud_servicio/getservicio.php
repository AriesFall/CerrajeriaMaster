<?php

/**
 * CRUD modal en PHP y MySQL
 * 
 * Este archivo consulta los datos del registro y los retorna en formato JSON 
 * @author MRoblesDev
 * @version 1.0
 * https://github.com/mroblesdev
 * 
 */

require_once "../bd/conexion.php";

$id = $conn->real_escape_string($_POST['id']);

$query = "CALL Ssalwi(?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

$servicio = [];

if ($row = $result->fetch_assoc()) {
    $servicio = $row;
}

$stmt->close();
$conn->close();

echo json_encode($servicio, JSON_UNESCAPED_UNICODE);