<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //la tabla con la cual el modelo se relaciona 
    protected $table="regions";
    //la clave primaria de dicha tabla 
    protected $primaryKey="region_id";
    //anular los campos de auditoria 
    public $timestamps = false;
    use HasFactory;

    //relacion entre region y paises 1:M
    public function paises(){
        return $this->hasMany(County::class,'region_id');
    }
}
