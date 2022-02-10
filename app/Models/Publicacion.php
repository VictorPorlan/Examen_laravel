<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{

        protected $fillable= ['titulo', 'extracto','contenido','caducable','comentable','acceso', 'creacion', 'user_id'];
        protected $table = 'Publicaciones';
        public $timestamps = false;
        public $incrementing = true;
}
