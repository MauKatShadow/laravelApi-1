<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'user_id',
        'titulo',
        'descripcion',
        'ingredientes',
        'instrucciones',
<<<<<<< HEAD
        'imagen'
=======
        'imagen',
>>>>>>> af90c534c64298ce6eea814c4b5aea13e07f82d3
    ];

    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
