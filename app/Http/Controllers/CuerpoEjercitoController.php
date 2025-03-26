<?php

namespace App\Http\Controllers;

use App\Models\CuerpoEjercitoMo;
use Illuminate\Http\Request;

class CuerpoEjercitoController extends Controller
{
    //
    public function create(){
        return view('cuerpoejercito');
    }

    public function cuerpoejercitoM(Request $request){
        // Validación de datos opcional(buena practica)
        $request->validate([
            'designation' => 'required|string|max:255',
        ]);

        // Guardar en la base de datos
        CuerpoEjercitoMo::create([
            'designation' => $request->designation,
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', 'Cuerpo de ejército guardado correctamente.');
    }
}
