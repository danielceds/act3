<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['app']) >= 1 && strlen($_POST['apm']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $app = trim($_POST['app']);
	    $apm = trim($_POST['apm']);
		$email = trim($_POST['email']);
	    $consulta = "INSERT INTO alumnos(nombres, apellido_paterno, apellido_materno, correo_electronico) VALUES ('$name', '$app', '$apm', '$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
        } else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>