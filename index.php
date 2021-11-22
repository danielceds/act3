<!DOCTYPE html>
<html>
<head>
	<title>Control escolar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de alumnos</h1>
    	<input type="text" name="name" placeholder="Nombres">
    	<input type="text" name="app" placeholder="Apellido paterno">
		<input type="text" name="apm" placeholder="Apellido materno">
		<input type="email" name="email" placeholder="Correo electronico">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("alumnos.php");
        ?>
</body>
</html>