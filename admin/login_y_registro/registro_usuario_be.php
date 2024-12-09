<?php

require_once "../bd/conexion.php";

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['nombre_completo']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['nombre_usuario']) >= 1 && strlen($_POST['contra']) >= 1) {
        $nombre_completo = trim($_POST['nombre_completo']);
        $correo = trim($_POST['correo']);
        $nombre_usuario = trim($_POST['nombre_usuario']);
        $contra = trim($_POST['contra']);

        $hashed_contra = password_hash($contra, PASSWORD_BCRYPT);

        
        $query = "CALL Uiiuccn(NULL, '$nombre_usuario', '$correo', '$hashed_contra', '$nombre_completo')";
        $result = mysqli_query($conn, $query);

        
        if ($result) {
            
        } else {
          
        }
    } else {
       
    }
}

mysqli_close($conn);
header("Location: ../sesion.php");
?>