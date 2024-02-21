<!DOCTYPE html>
<html lang="es">
<head>
<meta charset= "utf-8">
<link rel="stylesheet" href="/css/formulario.css">
<title>Editar comentario</title>
</head>
<body>
    <div class = "nav">
    <a href= "/comentario"> Navegar al index </a>
        <a href= "/info/alumno"> Navegar al informacion de alumno </a>
        <a href= "/info/prof"> Navegar al informacion de maestro </a>

    </div>
    <form action="{{route('comentario.update', $comentario)}}" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <h3>Ingrese su nombre:</h3>
        <input type="text" name="nameInput" id="nameInput" value={{old('nameInput') ?? $comentario->nombres}}>
    </div>
    <div>
        <h3>Ingrese su correo:</h3>
        <input type="text" name="correoInput" id="correoInput" value="{{ old('correoInput') ?? $comentario->correo}}">
    </div>
    <div>
        <h3>Comentarios adicionales:</h3>
        <textarea id="extra" name="extra" rows="5" cols="33" >{{old('extra') ?? $comentario->comentario}}</textarea>
    </div>
    <div>
        <h3>Lugar de contacto:</h3>
        <select id="ciudad" name="ciudad">
            <option value="gdl" @selected(old('ciudad') ?? $comentario->ciudad == 'gdl')>Guadalajara</option>
            <option value="zapopan" @selected(old('ciudad') ?? $comentario->ciudad == 'zapopan')>Zapopan</option>
            <option value="tlaquepaque" @selected(old('ciudad') ?? $comentario->ciudad == 'tlaquepaque')>San Pedro Tlaquepaque</option>
            <option value="tonala" @selected(old('ciudad') ?? $comentario->ciudad == 'tonala')>Tonala</option>
        </select>
    </div>
    <div>
        <button type="submit" id="button" name="button">enviar formulario</button>
    </div>
    </form>
</body>
</html>