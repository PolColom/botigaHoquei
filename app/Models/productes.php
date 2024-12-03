<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productes extends Model
{
    protected $table="productes";

    public function comanda(){
        return $this->belongsToMany(comanda::class);
    }

    public function tipus_producte(){
        return $this->belongsTo(tipus_producte::class);
    }

}
