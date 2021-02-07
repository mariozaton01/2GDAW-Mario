<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
<span> Idioma: <?=$idioma;?></span>
<form action="ejercicio03.php" method="post">
    <span>Elige tu idioma: </span>
    <select name="idioma">
        <option>Castellano</option>
        <option>Euskera</option>
    </select>
    <input type="submit" name="enviar">
</form>
</body>
</html>