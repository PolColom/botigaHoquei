<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipus_Producte extends Model{
    use HasFactory;

    protected $table = 'tipus_producte';

    protected $fillable = [
        'nom',
        'tipus',
    ];

    public function productes()
    {
        return $this->hasMany(Productes::class, 'tipus_producte_id');
    }
}
