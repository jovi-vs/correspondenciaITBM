<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <label for="descripcion">Descripcion:{{$unidad->descripcion}}</label>
        <label for="descripcion">ubicacion:{{$unidad->ubicacion}}</label>
        <a href="{{route('unidad.index')}}">Volver a listado</a>

</body>
</html>