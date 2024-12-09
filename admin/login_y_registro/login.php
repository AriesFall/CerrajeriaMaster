<?php
session_start();
require_once "../bd/conexion.php";

if ($_POST) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $stmt = $conn->prepare("CALL Usalwu(?)");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->bind_result($id, $usuario_bd, $contrasena_bd, $nombre, $tipo_usuario);
    $stmt->fetch();
    $stmt->close();

    if (!empty($usuario_bd) && password_verify($contrasena, $contrasena_bd)) {
        $_SESSION['id'] = $id;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['tipo_usuario'] = $tipo_usuario;

        if ($_SESSION['tipo_usuario'] == 1) {
            header("Location: ../index.php");
        } else if ($_SESSION['tipo_usuario'] == 2) {
            header("Location: ../buttons.php");
        } else if ($_SESSION['tipo_usuario'] == 0) {
            echo '
                <script>
                alert("No tienes permisos de usuario");
                window.location = "../sesion.php";
                </script>
            ';
        }
    } else {
        echo '
            <script>
            alert("La contraseña no coincide o el usuario no existe");
            window.location = "../sesion.php";
            </script>
        ';
    }
    
    mysqli_close($conn);
}
?>