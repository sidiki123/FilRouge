<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Commande extends Model
{
    public function users() {

        return $this->belongsTo(User::class);
            
     }
}
