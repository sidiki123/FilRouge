<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use Notifiable;
    public $table = "roles";
    protected $fillable=['name'];
    // public function permissions() {

    //     return $this->belongsToMany(Permission::class,'roles_permissions');
            
    //  }
     
       
    public function roles() {
     
        return $this->hasMany(User::class,'users_roles');
            
     }
}
