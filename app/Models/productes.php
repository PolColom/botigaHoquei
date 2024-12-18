<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipus_Producte;

class Productes extends Model{
    use HasFactory;

    protected $table = 'productes';

    protected $fillable = [
        'nom_producte',
        'image_url',
        'quantitat_stock',
        'tipus_producte_id',
        'preu',
        'descripcio',
    ];

    public function tipusProducte(){
        return $this->belongsTo(Tipus_Producte::class, 'tipus_producte_id');
    }
}
