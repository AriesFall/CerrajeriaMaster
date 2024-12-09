<?php

require_once "../bd/conexion.php";


$id = $conn->real_escape_string($_POST['id']);


$sql = "CALL PEsalwi(?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$persona = $result->fetch_assoc();

echo json_encode($persona, JSON_UNESCAPED_UNICODE);

$stmt->close();
$conn->close();
?>
