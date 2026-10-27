@extends('layouts.app')

@section('title', 'Inicio - Cafetería Cochala')

@section('content')

<section>
    <p>Bienvenidos a nuestra cafetería.</p>
</section>

<section>
    <h2>Productos</h2>

    <p>Conoce nuestro catálogo de productos.</p>

    <ul>
        <li>Café</li>
        <li>Capuchino</li>
        <li>Pastel</li>
    </ul>
</section>

<section>
    <h2>Sobre nosotros</h2>

    <p>
        Somos una cafetería dedicada a ofrecer productos
        de calidad y un espacio agradable para nuestros clientes.
    </p>
</section>

<section>
    <h2>Contacto</h2>

    <p>Envíanos un mensaje.</p>

    <form id="form-contacto" action="#" novalidate>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje"></textarea>

        <button type="submit">Enviar</button>

        <p id="aviso-contacto" class="aviso"></p>

    </form>
</section>

@endsection