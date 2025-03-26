<?php

namespace App\Http\Controllers;

use App\Models\CompanyModel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create (){
        return view('companyView');
    }

    public function companyMP (Request $request){

        CompanyModel::create([
            'activity' => $request->activity,
        ]);

        return redirect()->back()->with('success', 'Cuartel guardado correctamente.');

    }
}
