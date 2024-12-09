<?php

require_once "../bd/conexion.php";


$id = $conn->real_escape_string($_POST['id']);


$query = "CALL Usalwi(?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();


$result = $stmt->get_result();

$usuario = [];


if ($row = $result->fetch_assoc()) {
    $usuario = $row;
}


$stmt->close();
$conn->close();

echo json_encode($usuario, JSON_UNESCAPED_UNICODE);