<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comanda extends Model
{
    protected $table="comanda";

    public function usuaris(){
        return $this->belongsTo(User::class);
    }

    public function productes(){
        return $this->hasMany(productes::class);
    }
}
