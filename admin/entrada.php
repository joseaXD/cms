<?php 
session_start();
if($_POST) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
     
    include '../includes/config.php';
    $sql = sprintf("SELECT id FROM usuarios WHERE usuario = '%s' and contrasena =  '%s'",
        mysql_real_escape_string($usuario),
        mysql_real_escape_string(md5($contrasena)));
    $res = mysql_query($sql);
    if (!$res) die('Invalid query: ' . mysql_error());
    list($count) = mysql_fetch_row($res);
    if (!$count) $mensaje = sprintf("Usuario o contraseña equivocados");
    else {
        $_SESSION['entrado'] = true;
        $_SESSION['id'] = $count;
        header('Location:index.php');
    }
     
} ?>
 
 
 
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<link rel="stylesheet" type="text/css" href="../estilos/estilo.css" />
 
</head>
<body>
<div id="registro">

   <form method="post" action="entrada.php">
        <label>Nombre de usuario: </label><input type="text" name="usuario"><br>
        <label>Contraseña </label><input type="password" name="contrasena"><br>
        <div class="submit">
            <input type="submit" value="Entrar">
        </div>
    </form>
</div>
 
</body>
</html>