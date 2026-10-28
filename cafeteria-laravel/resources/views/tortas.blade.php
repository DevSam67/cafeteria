@extends('layouts.app')

@section('title', 'PASTELERIA LA ESPIGA')

@section('content')

<section>
    <p>Bienvenidos a la pasteleria la espiga, si quieres pasteles
         en nuestra pasteleria encontraras una gran variedad
    </p>
</section>

<section>
    <h2>Tortas</h2>

    <p>Hay {{ count($tortas) }} tortas en la vitrina.</p>
</br>
    <a href="{{ route('tortas.nuevo') }}">
            <button type="button">Agregar nueva torta</button>
        </a>
    <ul>
        </br>
        @foreach ($tortas as $torta)
            <li>
                {{ $torta->sabor }} - {{ $torta->precio }}
            </li>
        @endforeach
    </ul>
</section>

<section>
    <p>
        Vitrina atendida por Samuel Canedo Caballero
    </p>
</section>


@endsection