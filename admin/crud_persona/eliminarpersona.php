<?php

require_once "../bd/conexion.php";

$id = $conn->real_escape_string($_POST['id']);

$sql = "CALL PEdi('$id')";

if($conn->query($sql)){

}

header('Location: ../index.php');