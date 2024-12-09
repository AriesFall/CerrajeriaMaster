<?php

require_once "../bd/conexion.php";

$id = $conn->real_escape_string($_POST['id']);
$servicio_ = $conn->real_escape_string($_POST['servicio_']);
$descripcion_ = $conn->real_escape_string($_POST['descripcion_']);
$precio_ = $conn->real_escape_string($_POST['precio_']);

$sql = "CALL Sisdp('$servicio_', '$descripcion_', '$precio_')"; /*"INSERT INTO servicios (servicio_, descripcion_, precio_) VALUES('$servicio_', '$descripcion_', '$precio_')";*/

if ($conn->query($sql)) {
    $id = $conn->insert_id;

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro guardado";

    if ($_FILES['poster']['error'] == UPLOAD_ERR_OK) {
        $permitidos = array("image/jpg", "image/jpeg");
        if (in_array($_FILES['poster']['type'], $permitidos)) {

            $dir = "../servicios";

            $info_img = pathinfo($_FILES['poster']['name']);
            $info_img['extension'];

            $poster = $dir . '/' . $id . $precio_ . '.jpg';

            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }

            if (!move_uploaded_file($_FILES['poster']['tmp_name'], $poster)) {
                $_SESSION['color'] = "danger";
                $_SESSION['msg'] .= "<br>Error al guardar imagen";
            }
        } else {
            $_SESSION['color'] = "danger";
            $_SESSION['msg'] .= "<br>Formato de imágen no permitido";
        }
    }
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al guarda imágen";
}


header('Location: ../cards.php');