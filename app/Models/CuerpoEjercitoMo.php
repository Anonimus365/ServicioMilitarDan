<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuerpoEjercitoMo extends Model
{
    use HasFactory;

    protected $table = 'corps_e'; // Si la tabla tiene otro nombre en la BD ,Laravel asume que la tabla se llama igual que el modelo, pero en plural

    protected $fillable = ['designation'];

    function soldiers (){
        return $this -> hasMany(Soldier::class);
    }
}