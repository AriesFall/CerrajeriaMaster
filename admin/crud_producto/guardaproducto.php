<?php

require_once "../bd/conexion.php";

$id = $conn->real_escape_string($_POST['id']);
$producto = $conn->real_escape_string($_POST['producto']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);
$precio = $conn->real_escape_string($_POST['precio']);

$sql =/*"INSERT INTO productos (producto, descripcion, precio) VALUES ('$producto', '$descripcion', '$precio')";*/
"CALL PRipdp('$id', '$producto', '$descripcion', '$precio')";

if ($conn->query($sql)) {
    $id = $conn->insert_id;

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro guardado";

    if ($_FILES['poster']['error'] == UPLOAD_ERR_OK) {
        $permitidos = array("image/jpg", "image/jpeg");
        if (in_array($_FILES['poster']['type'], $permitidos)) {

            $dir = "../productos";

            $info_img = pathinfo($_FILES['poster']['name']);
            $info_img['extension'];

            $poster = $dir . '/' . $id . $precio . '.jpg';

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


header('Location: ../buttons.php');