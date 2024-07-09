<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion', 'foto', 'fecha_inicio', 'fecha_fin'];
    protected $primaryKey = 'id_anuncios';
}
