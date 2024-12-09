<?php

require_once "../bd/conexion.php";

$id = $conn->real_escape_string($_POST['id']);

$sql = "CALL Udi('$id')";

if($conn->query($sql)){

}

header('Location: ../permisos.php');