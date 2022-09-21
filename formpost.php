<!DOCTYPE html>
<html>
<head>
	<title>Registrar nuevo ALUMNO-TUTOR</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Rellena el siguiente formulario para ser ALUMNO-TUTOR</h1>
    	<input type="text" name="id" placeholder="Identificador de usuario">
        <input type="text" name="nombre" placeholder="Nombre">
    	<input type="email" name="apellidos" placeholder="Apellidos">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="curso" placeholder="Curso">
        <input type="text" name="cursoayuda" placeholder="Cursos a ayudar">
        <input type="text" name="areaayuda" placeholder="Áreas de ayuda">
        <input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>
