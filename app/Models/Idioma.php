<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //la tabla con la cual el modelo se relaciona 
    protected $table="languages";
    //la clave primaria de dicha tabla 
    protected $primaryKey="language_id";
    //anular los campos de auditoria 
    public $timestamps = false;
    use HasFactory;

    //relacion M:M con paises(county)
    public function paises (){
        //belongsToMany: parametros
        //1 El modelo a relacionar
        //2 la tabla de pivot
        //3 la FK del modelo en el pivot
        //4 la FK del modelo la relacionar en el pivot 
        return $this->belongsToMany(County::class,
                                 'country_languages',
                                 'language_id',
                                 'country_id'
                                 )->withPivot('official');
    }
}
