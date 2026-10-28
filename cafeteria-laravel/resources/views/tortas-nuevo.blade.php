@extends('layouts.app')

@section('title', 'Productos - Cafetería Cochala')

@section('content')

<section>
    <h2>Agregar nueva torta</h2>

    <form action="{{ route('tortas.guardar') }}" method="post" no validate>

        @csrf

        <label for="nombre">Sabor:</label>
        <input type="text" id="nombre" name="sabor">

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio">

        <button type="submit">Guardar producto</button>

    </form>
    @if ($errors->any())
    <div class="aviso error">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
</section>
@endsection
