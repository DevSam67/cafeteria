@extends('layouts.app')

@section('title', 'Productos - Cafetería Cochala')

@section('content')

    <section>
        <h2>Nuestros productos</h2>
        <p>Conoce algunos de los productos que ofrecemos.</p>
        </br>
    <ul>
        
        @foreach ($productos as $producto)
    <li>
        <strong>{{ $producto->nombre }}</strong>
        - Bs {{ $producto->precio }}
    </li>
@endforeach 
    </ul>
</section>

@endsection