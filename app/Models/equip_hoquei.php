<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class equip_hoquei extends Model
{
    protected $table="equip_hoquei";

    public function equip_hoquei(){
        return $this->hasMany(User::class);
    }
}
