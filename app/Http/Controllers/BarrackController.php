<?php

namespace App\Http\Controllers;

use App\Models\BarrackModel;
use Illuminate\Http\Request;

class BarrackController extends Controller
{
    public function create (){
        return view('barrackview');
    }

    public function barrackMP (Request $request){
        // Guardar en la base de datos
        BarrackModel::create([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', 'Cuartel guardado correctamente.');
    }
}
