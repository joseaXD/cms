<?php
include 'cabecera.php'; 
include '../includes/config.php';


$sql = sprintf("SELECT id, titulo FROM articulos ORDER BY id DESC");
$res = mysql_query($sql);
if (!$res) die('Invalid query: ' . mysql_error());
?>

<table id="articulos">
    <thead>
        <tr>
        <th scope="col">Título del artículo</th>
        <th scope="col">Modificar</th>
        <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>               
		<?php while ($post = mysql_fetch_array($res)) { ?>
		    <tr>
		    <td class="titulo"><a href="articulos.php?id=<?php echo $post['id'] ?>"><?php echo $post['titulo'] ?></a></td>
		    <td><a href="articulos.php?id=<?php echo $post['id'] ?>"><img src="../imagenes/editar.png"></a></td>
		    <td><a href="index.php?accion=eliminar&id=<?php echo $post['id'] ?>"><img src="../imagenes/eliminar.png"></a></td>
		    </tr>
		<?php } ?>
    </tbody>
</table> 