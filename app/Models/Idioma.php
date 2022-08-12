<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //la tabla con la cual el modelo de relaciona
    protected $table="languages";
    //clave ptimaria de la tabla 
    protected $primaryKey="language_id";
    //anular campos de auditoria 
    public $timestamps=false;
    use HasFactory;

    //Relacion M:M con paises(Country)
    public function paises(){
        //Parametros
        //1 modelo a relacionar
        //la tabla pivot
        //FK del modleo actual en el pivot 
        //la FK del modeloa relacionar en el pivot
        return $this->belongsToMany(Country::class, 'country_languages', 'language_id', 'country_id')->withPivot('official');
    }
    use HasFactory;
}
