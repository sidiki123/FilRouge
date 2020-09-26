<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Agence extends Model
{
    protected $fillable = ['name','prenom','telephone','nom_agence','telephone_agence','email','password'];

   public function visers() {

    return $this->hasMany(User::class,'id_visiteur');
        
 }
}
