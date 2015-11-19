<?php if ($_POST) {
    include '../../includes/config.php';
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $autor = $_POST['autor'];
    $id = $_POST['post'];
    if ($id > 0) {
        $sql = sprintf("UPDATE articulos SET titulo = '$titulo', contenido = '$contenido' WHERE id = '$id'");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
    }
    else {
        $sql = sprintf("INSERT INTO articulos VALUES (NULL, '$titulo', '$contenido', '$autor')");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
        $new_id = mysql_insert_id();
        echo $new_id;
    }
 
} ?>