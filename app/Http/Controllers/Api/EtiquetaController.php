<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\EtiquetaResource;

use App\Models\Etiqueta;

class EtiquetaController extends Controller
{
    public function index(){
<<<<<<< HEAD
        return EtiquetaResource::collection(Etiqueta::with('recetas.categorias', 'recetas,etiquetas', 'recetas.user')->get());
=======
        return EtiquetaResource::collection(Etiqueta::with('recetas.categoria', 'recetas.etiquetas', 'recetas.user')->get());
>>>>>>> af90c534c64298ce6eea814c4b5aea13e07f82d3
    }

    public function show(Etiqueta $etiqueta){
        return new EtiquetaResource($etiqueta->load('recetas'));
    }
}
