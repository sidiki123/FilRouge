<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Event extends Model
{
    protected $table='events';
    protected $primaryKey='id';
    protected $fillable= ['titre','sous_titre','description','photo','id_categorie','date_debut','date_fin','heure','lieu','ville','prix','user_id'];

    public function categ() {

        return $this->belongsTo(Categorie::class,'id_categorie','id');
            
     }

     public function use() {

        return $this->belongsTo(User::class);
            
     }
}
