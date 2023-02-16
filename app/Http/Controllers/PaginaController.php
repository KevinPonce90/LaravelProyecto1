<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function canciones($id = null){
        $canciones = [];
        $canciones[] = ['nombre' => 'Balada', 'artista' => 'Manuel'];
        $canciones[] = ['nombre' => 'Sol', 'artista' => 'Luismi'];
        $canciones[] = ['nombre' => 'MuchoParaMi', 'artista' => 'SantaRM'];

        if(!is_null($id)){
            $select_Cancion = $canciones[$id];
        } else {
            $select_Cancion = null;
        }
        return view('canciones', compact('canciones', 'select_Cancion'));
    }

    public function contacto(){

        return view('contacto', );
    }

    public function bautizo(Request $request){
        //dd($request->all(), $request->nombre, $request->input('codigo')); //Para tomar lo que se esta enviando
        $request->validate([
            'nombre' => 'required|min:3|max:255', //llave - valor cada regla separarla por: | 
            'codigo' => ['required', 'integer', 'max:9'], // cada regla separarla por coma 
        ]);
        // rescibe y valida
        // guarda
        // redirecciona
    }
}
