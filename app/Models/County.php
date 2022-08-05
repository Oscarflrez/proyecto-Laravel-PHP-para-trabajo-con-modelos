<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    //la tabla con la cual el modelo se relaciona 
    protected $table="countries";
    //la clave primaria de dicha tabla 
    protected $primaryKey="country_id";
    //anular los campos de auditoria 
    public $timestamps = false;
    use HasFactory;

    //relacion inversa M:1 entre pais y region
    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }
}
