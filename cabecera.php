<?php
    session_start();
    if (!$_SESSION['id']) header('Location:entrada.php');
    else $id = $_SESSION['id'];
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../estilos/estilo.css" />
</head>
<body>
    <div id="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="articulos.php">Artículos</a></li>
            <li><a href="comentarios.php">Comentarios</a></li>
            <li><a href="categorias.php">Categorías</a></li>
            <li><a href="menu.php">Menú</a></li>
            <li><a href="barra_lateral.php">Barra lateral</a></li>
            <li style="margin-left:50px"><a href="entrada.php?accion=salir">Salir</a></li>
        </ul>
    </div>
    <div id="contenido">

    