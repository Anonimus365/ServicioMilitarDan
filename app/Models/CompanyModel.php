<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    protected $table = 'companies';

    protected $fillable = ['activity'];

    function soldiers () {
        return $this -> hasMany(Soldier::class);
    }

    function barracks () {
        return $this -> belongsToMany(BarrackModel::class);
    }
}