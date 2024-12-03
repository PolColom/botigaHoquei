<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tipus_producte extends Model
{
    protected $table="tipus_producte";

    public function productes(){
        return $this->hasMany(productes::class);
    }
}
