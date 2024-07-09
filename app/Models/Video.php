<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['url_video', 'descripcion'];
    protected $primaryKey = 'id_video';
    protected $table = 'videos';

}
