<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'description', 'category']; 
    protected $guarded = [];

    // para generar url amigable
    // MEJOR MODIFICARLO AQUI EN EL MODELO QUE EN LA CLASE MODEL
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
