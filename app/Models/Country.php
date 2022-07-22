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
}
