@extends('layouts.app')

@section('title', 'Productos - Cafetería Cochala')

@section('content')

<section>
    <h2>Crear nueva torta</h2>

    <form action="{{ route('tortas.guardar') }}" method="post" validate>

        @csrf

        <label for="nombre">Sabor:</label>
        <input type="text" id="nombre" name="nombre"required>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required>

        <button type="submit">Guardar producto</button>

    </form>
</section>
@endsection
