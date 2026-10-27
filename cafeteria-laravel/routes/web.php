<?php
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/productos', function () {

    $productos = Producto::all();

    return view('productos', compact('productos'));

})->name('productos');

Route::get('/productos/crear', function () {
    return view('crear-producto');
})->name('productos.crear');

Route::post('/productos', function () {

    $datos = request()->validate([
        'nombre' => 'required|string',
        'precio' => 'required|integer',
    ]);

    Producto::create($datos);

    return redirect()->route('panel');

})->middleware('auth')->name('productos.guardar');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/panel', function () {

    $productos = Producto::all();

    return view('panel', compact('productos'));

})->middleware('auth')->name('panel');

Route::post('/login', function () {

    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        request()->session()->regenerate();

        return redirect()->route('panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
})->name('login.validar');

Route::post('/logout', function () {

    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('inicio');

})->name('logout');

Route::get('/tortas', function () {

    $tortas = Torta::all();

    return view('tortas', compact('tortas'));

})->name('tortas');