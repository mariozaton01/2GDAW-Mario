<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="1">
    <tr>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Tipo</td>
        <td>Precio</td>
    </tr>
    <tr>
        <td>{{$zapatilla->getMarca() }}</td>
        <td>{{$zapatilla->getModelo() }}</td>
        <td>{{$zapatilla->getTipo() }}</td>
        <td>{{$zapatilla->getPrecio() }}</td>
    </tr>
</table>
</body>
</html>


