<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class BarrackModel extends Model
{
    use HasFactory;

    protected $table = 'barracks'; // Asegúrate de que coincide con el nombre en la BD

    protected $fillable = ['name', 'location']; // Permite insertar estos campos

    function soldiers (){
        return $this -> hasMany(Soldier::class);
    }

    function companies () {
        return $this -> belongsToMany(CompanyModel::class);
    }
}
