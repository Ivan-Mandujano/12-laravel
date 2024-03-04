<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        main {
            padding-top: 60px; /* Ajusta el valor según la altura del menú fijo */
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Mi Sitio Web</h1>
    </header>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Acerca de</a>
        <a href="#">Servicios</a>
        <a href="#">Contacto</a>
    </nav>

    <main>
        <!-- Contenido de la página -->
        <h2>Bienvenido a mi sitio web</h2>
        <p>Este es un ejemplo de un menú superior fijo.</p>
        <!-- Más contenido -->
    </main>

    <footer>
        <p>&copy; 2024 Mi Sitio Web</p>
    </footer>
    
</body>
</html>
