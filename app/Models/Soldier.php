<?php

namespace App\Models;

use Illuminate\Cache\Events\RetrievingKey;
use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    //

    function company (){
        return $this -> belongsTo(CompanyModel::class);
    }

    function barrack (){
        return $this -> belongsTo(BarrackModel::class);
    }

    function cuerpo (){
        return $this -> belongsTo(CuerpoEjercitoMo::class);
    }

    function services (){
        return $this -> belongsToMany(Service::class);
    }
}

