<?php

require_once "admin/bd/conexion.php";

if (isset($_POST['enviarmensaje'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['subject']) >= 1 && strlen($_POST['message']) >= 1) {
	    $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $correo = trim($_POST['correo']);
        $subject = trim($_POST['subject']);
	    $message = trim($_POST['message']);
	    $date = date("d/m/y");
	    $sql = "CALL PEinaetmf('$name', '$lastname', '$correo', '$subject', '$message', '$date')";
	    $resultado = mysqli_query($conn,$sql);
	    if ($resultado) {
	    	
	    } else {
	    	
	    }
    }   else {
	    	
    }
}