<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php if (!isset($fila)){
    ?>
    <p><?= "No hay usuarios almacenados."?></p>
<?php } ?>
<ul style="list-style: none">
    <?php echo "<li> $fila</li>";?>
</ul>
<form action="ejercicio01.php" method="post">
    <span>Introduce un nuevo usuario: </span>
    <input type="text" name="usuario">
    <br><br>
    <input type="submit" name="enviar" value="enviar">
    <button name="boton" value="borrar">Borrar usuario.</button>
</form>

</body>
</html>