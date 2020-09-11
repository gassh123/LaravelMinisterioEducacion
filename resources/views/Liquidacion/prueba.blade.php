<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url('prueba/pruebaform')}}">
@csrf
    <input type="text" name=institucion_id> Ingrese institucion
    <input type="text" name=docente_id> Ingrese docente
    <button type="submit">Listo</button>
    </form>
</body>
</html>