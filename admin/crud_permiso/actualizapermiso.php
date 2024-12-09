<?php
require_once "../bd/conexion.php";

$id = $conn->real_escape_string($_POST['id']);
$usuario = $conn->real_escape_string($_POST['usuario']);
$correo = $conn->real_escape_string($_POST['correo']); 
$nombre = $conn->real_escape_string($_POST['nombre']);
$tipo_usuario = isset($_POST['tipo_usuario']) ? $conn->real_escape_string($_POST['tipo_usuario']) : '';

$sql = "CALL Uuucnt('$id', '$usuario', '$correo', '$nombre', '$tipo_usuario')";
$conn->query($sql);

if ($conn->affected_rows > 0) {
    
} else {
    
}

header('Location: ../permisos.php');
?>