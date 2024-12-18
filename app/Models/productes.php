<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipus_Producte;


class productes extends Model{
    use HasFactory;
    protected $table="productes";

    protected $fillable = ['nom_producte', 'quantitat_stock', 'tipus_producte_id'];

    public function comanda(){
        return $this->belongsToMany(comanda::class, "comanda_producte");
    }

    public function tipusProducte(){
        return $this->belongsTo(Tipus_Producte::class, 'tipus_producte_id');
    }

}
