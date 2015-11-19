<?php include 'cabecera.php' ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="text/wysiwyg.js"></script>
<script src="text/articulos.js"></script>
<script>
  var wysiwyg = new Wysiwyg;
  wysiwyg.el.insertBefore('.area');
</script>
<link rel="stylesheet" href="text/wysiwyg.css" type="text/css" charset="utf-8">

<?php $post = $_GET['id'];
if ($post > 0) {
    include '../includes/config.php';
    $sql = sprintf("SELECT * FROM articulos WHERE id = '$post'");
    $res = mysql_query($sql);
    if (!$res) die('Invalid query: ' . mysql_error());
    $res = mysql_fetch_array($res);
     
} 
?>
<h2>Escribir un artículo</h2>
<form>
<div class="escritura">
    <label for="titulo">Título</label>
    <input type="text" value="<?php if ($post > 0) echo $res['titulo'] ?>" name="titulo">
    <input type="hidden" value="<?php echo $id ?>" name="autor">
    <input type="hidden" value="<?php echo $post ?>" name="post">
    <div class="area" contenteditable><?php if ($post > 0) echo $res['contenido'] ?></div>
    <?php if ($post > 0) { ?>
    <div class="actualizar">Actualizar</div>
    <?php } else { ?>
    <div class="publicar">Publicar</div>
    <?php } ?>
    </form>
</div>