<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_carreras';
    protected $fillable = ['nombre_carrera','descripcion','logo','url_inscripcion','url_plataforma'];
}
