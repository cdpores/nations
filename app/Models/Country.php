<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla con la cual el modelo de relaciona
    protected $table="countries";
    //clave ptimaria de la tabla 
    protected $primaryKey="country_id";
    //anular campos de auditoria 
    public $timestamps=false;
    use HasFactory;

    //Relacion inversa M:1 paises y region
    public function region(){
        return $this->belongsTo(Region:: class, 'region_id');
    }
    //Relacion M:M entre pais y su idioma
    public function idiomas(){
        return $this->belongsToMany(Idioma::class, 'country_languages', 'country_id', 'language_id')->withPivot('official');
    }
}
