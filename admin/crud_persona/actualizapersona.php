<?php

require_once "../bd/conexion.php";

$id = $conn->real_escape_string($_POST['id']);
$nombre = $conn->real_escape_string($_POST['nombre']);
$apellidos = $conn->real_escape_string($_POST['apellidos']);
$email = $conn->real_escape_string($_POST['email']);

$sql = "CALL PEunae('$id', '$nombre', '$apellidos', '$email')";

if($conn->query($sql)){

}

header('Location: ../index.php');