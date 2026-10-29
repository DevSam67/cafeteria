<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Cafetería Cochala')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header>
        <h1>Cafeteria Cochala</h1>

        <nav>
            <button id="tema" type="button">🌙 Modo oscuro</button>

            <button id="menu" type="button">☰ Menú</button>

            <ul id="menu-list">
                <li>
                    <a href="{{ route('inicio') }}">Inicio</a>
                </li>

                <li>
                    <a href="{{ route('productos') }}">Productos</a>
                </li>

                <li>
                    <a href="#">Nosotros</a>
                </li>

                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p> 2026 Samuel Canedo Caballero - Todos los derechos Reservados</p>
    </footer>

</body>

</html>