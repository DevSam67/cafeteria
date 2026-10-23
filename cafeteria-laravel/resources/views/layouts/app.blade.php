<!DOCTYPE html>
<html lang="es">

<head>
    ...
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header>
        ...
        <nav>
            ...
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        ...
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>