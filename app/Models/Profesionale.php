<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesionale extends Model
{
    use HasFactory;
    protected $table = 'profesionales';
    protected $primaryKey = 'id_profesional';
    protected $fillable = ['nombre','apellido','telefono','foto','id_cargo'];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'id_cargo');
    }
}
