<?php

use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicidadController;
use App\Http\Controllers\VideoController;
use App\Models\Anuncio;
use App\Models\Carrera;
use App\Models\Contacto;
use App\Models\Documento;
use Illuminate\Support\Facades\Route;
use App\Models\Galeria;
use App\Models\Pagina;
use App\Models\Video;
use App\Models\Profesionale;
use Illuminate\Http\Request;

Route::get('/', function () {
    $documentos = Documento::all();
    $contactos = Contacto::all();
    $anuncios = Anuncio::all();
    $videos = Video::all();
    $paginas = Pagina::all();
    $profesionales = Profesionale::all();
    $carreras = Carrera::all();
    return view('welcome',[
        'profesionales' => $profesionales,
        'paginas' => $paginas,
        'carreras' => $carreras,
        'videos' => $videos,
        'anuncios' => $anuncios,
        'contactos' => $contactos,
        'documentos' => $documentos
    ]);
});

Route::get('/galeria', function () {
    $galerias = Galeria::all();
    return view('galeria', ['galerias' => $galerias]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/update-number', function (Request $request) {
    $number = $request->input('number');

    // Guardar el número en la sesión o en algún lugar persistente si es necesario
    session(['number' => $number]);

    // Redirigir de vuelta a la página welcome.blade.php
    return redirect('/welcome');
})->name('update.number');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('carreras', CarreraController::class);
Route::resource('profesionales', ProfesionalController::class);
Route::resource('paginas', PaginaController::class);
Route::resource('documentos', DocumentoController::class);
Route::resource('galerias', GaleriaController::class);
Route::resource('users', UserController::class);
Route::resource('cargos', CargoController::class);
Route::resource('videos', VideoController::class);
Route::resource('anuncios', AnuncioController::class);
Route::resource('contactos', ContactoController::class);

require __DIR__.'/auth.php';
