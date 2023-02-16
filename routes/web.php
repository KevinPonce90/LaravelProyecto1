<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

use function PHPUnit\Framework\isNull;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/canciones/{id?}', [PaginaController::class, 'canciones']);
Route::get('contacto', [PaginaController::class, 'contacto']);
Route::post('contacto', [PaginaController::class, 'bautizo']);

    //$var = 'WASA';
    //dd($canciones);
    //return view('canciones', compact('canciones', 'var')); //Metodo para enviar varibale pero le envias la cadena de la variable
    //->with(['canciones' => $canciones, 'var' => $var]); Metodo para enviar variable h


//Route::get('/canciones/{id}', function($id) {
    
//    $canciones = [];
//    $canciones[] = ['nombre' => 'Balada', 'artista' => 'Manuel'];
//    $canciones[] = ['nombre' => 'Sol', 'artista' => 'Luismi'];
//    $canciones[] = ['nombre' => 'MuchoParaMi', 'artista' => 'SantaRM'];

//    $select_Cancion = $canciones[$id];
//    return view('info-Cancion', compact('select_Cancion'));

//});