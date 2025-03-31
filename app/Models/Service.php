<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    function soldiers (){
        return $this -> belongsToMany(Soldier::class);
    }
}
