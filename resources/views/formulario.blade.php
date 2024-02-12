<!DOCTYPE html>
<html lang="es">
<head>
<meta charset= "utf-8">
<link rel="stylesheet" href="/css/formulario.css">
<title>Formulario</title>
</head>
<body>
    <div class = "nav">
    <a href= "/info"> Navegar al informacion </a>
        <a href= "/info/alumno"> Navegar al informacion de alumno </a>
        <a href= "/info/prof"> Navegar al informacion de maestro</a>

    </div>
    <form action="/contacto-guarda" method="POST">
    @csrf
    <div>
        <h3>Ingrese su nombre:</h3>
        <input type="text" name="nameInput" id="nameInput">
    </div>
    <div>
        <h3>Ingrese su correo:</h3>
        <input type="text" name="correoInput" id="CorreoInput">
    </div>
    <div>
        <h3>Ingrese su contraseña:</h3>
        <input type="password" name="passInput" id="passInput">
    </div>
    <div>
        <h3>Genero:</h3>
        <input type="radio" name="genero" id="hombre" value="HOMBRE">
        <label for="hombre">Hombre</label>
        <br>
        <input type="radio" name="genero" id="mujer" value="MUJER">
        <label for="mujer">Mujer</label>
        <br>
        <input type="radio" name="genero" id="no" value="NODECIR">
        <label for="no">Prefiero no decirlo</label>

    </div>
    <div>
        <h3>Comentarios adicionales:</h3>
        <textarea id="extra" name="extra" rows="5" cols="33"></textarea>
    </div>
    <div>
        <h3>Lugar de contacto:</h3>
        <select>
            <option value="gdl">Guadalajara</option>
            <option value="zapopan">Zapopan</option>
            <option value="tlaquepaque">San Pedro Tlaquepaque</option>
            <option value="tonala">Tonala</option>
        </select>
    </div>
    <div>
        <input type="checkbox" name="contratar" id="contratar" value="contrato">
        <label for="contratar">Me interesa contratarte</label>
    </div>
    <div>
        <button type="submit" id="button" name="button">enviar formulario</button>
    </div>
    </form>
</body>
</html>