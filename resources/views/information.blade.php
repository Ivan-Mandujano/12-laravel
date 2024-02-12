<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "nav">
    <a href= "/info"> Navegar al informacion </a>
        <a href= "/info/alumno"> Navegar al informacion de alumno </a>
        <a href= "/info/prof"> Navegar al informacion de maestro</a>

        <a href= "/contacto"> Navegar a contacto </a>
    </div>

    {{ $type }}
    @if ($type == "alumno")
        <h2>Alumnos: </h2>
        <p>Bla bla bla</p>
    @elseif($type=="prof" || $type=="profesor")
        <h2>Profesores: </h2>
        <p>Bla bla bla</p>
    @else
        <h2>Entrada general: </h2>
        <p>Bla bla bla</p>
    @endif
</body>
</html>