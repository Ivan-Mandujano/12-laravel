<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de comentarios</title>
</head>
<body>
    <a href="{{route('comentario.create')}}">Nuevo comentario</a>
    <h1>Lista de comentarios</h1>
    <table>
        <thead>
            <tr>
                <th>
                    Nombre:
                </th>
                <th>
                    Correo:
                </th>
                <th>
                    Ciudad:
                </th>
                <th>
                    Creado / Enviado:
                </th>
                <th>
                    Acciones:
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comentarios as $comentario)
            <tr>
                <td>
                    {{$comentario->nombre}}
                </td>
                <td>
                    {{$comentario->correo}}
                </td>
                <td>
                    {{$comentario->ciudad}}
                </td>
                <td>
                    {{$comentario->created_at}}
                </td>
                <td>
                    <a href="{{route('comentario.show'), $comentario->id}}">Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>