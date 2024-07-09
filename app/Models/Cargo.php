<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_cargo'];
    protected $primaryKey = 'id_cargo';

    public function profesional()
    {
        return $this->hasMany(Profesionale::class);
    }
}
