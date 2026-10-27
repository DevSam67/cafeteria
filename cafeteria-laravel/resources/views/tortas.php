@extends('layouts.app')

@section('title', 'PASTELERIA LA ESPIGA')

@section('content')

<section>
    <p>Bienvenidos a la pasteleria la espiga, si quieres pasteles
         en nuestra pasteleria encontraras una gran variedad
    </p>
</section>

<section>
    <h2>Productos</h2>

    <p>Conoce nuestro catálogo de productos.</p>

    <ul>
        @foreach ($tortas as $torta)
            <li>
                {{ $torta->nombre }}
            </li>
        @endforeach
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