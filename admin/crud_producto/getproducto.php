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

$sql = "CALL PRsalwi(?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$producto = $result->fetch_assoc();

echo json_encode($producto, JSON_UNESCAPED_UNICODE);

$stmt->close();
$conn->close();
?>