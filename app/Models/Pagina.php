<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pagina';
    protected $table = 'paginas';
    protected $fillable = ['descripcion', 'foto', 'url_pagina'];
}
