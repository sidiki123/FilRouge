<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function events() {

        return $this->hasMany(Event::class,'id_categorie','id');
            
     }
}
