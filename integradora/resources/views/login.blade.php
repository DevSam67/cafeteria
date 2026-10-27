@extends('layouts.app')

@section('title', 'Iniciar sesión - Cafetería Cochala')

@section('content')

<section class="login">
    <h2>Iniciar sesión</h2>

    <form action="#" method="post">

        @csrf

        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Iniciar sesión</button>

    </form>
</section>

@endsection