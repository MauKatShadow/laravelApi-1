<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\RecetaResource;
use App\Http\Requests\StoreRecetasRequest;
use Symfony\Component\HttpFoundation\Response;

use App\Http\Requests\UpdateRecetasRequest;

use App\Models\Receta;

class RecetaController extends Controller
{
    public function index(){
        $recetas = Receta::with('categoria','etiquetas','user')->get();
        return RecetaResource::collection($recetas);
    }

    public function store(StoreRecetasRequest $request){
        $receta = Receta::create($request->all());
        $receta->etiquetas()->attach(json_decode($request->etiquetas));

<<<<<<< HEAD
        return response()->json(new RecetaResource($receta), Response::HTTP_CREATED); // 201 created
=======
        return response()->json(new RecetaResource($receta), 
                                Response::HTTP_CREATED); // 201 Created
>>>>>>> af90c534c64298ce6eea814c4b5aea13e07f82d3
    }

    public function show(Receta $receta){
        $receta = $receta->load('categoria','etiquetas','user');
        return new RecetaResource($receta);
    }

    public function update(UpdateRecetasRequest $request, Receta $receta){
        $receta->update($request->all());

        if($etiquetas = json_decode($request->etiquetas)){
            $receta->etiquetas()->sync($etiquetas);
        }

<<<<<<< HEAD
        return response()->json(new RecetaResource($receta), Response::HTTP_ACCEPTED);
=======
        return response()->json(new RecetaResource($receta), 
                                Response::HTTP_ACCEPTED); // 202 Accepted
>>>>>>> af90c534c64298ce6eea814c4b5aea13e07f82d3
    }

    public function destroy(Receta $receta){
        $receta->delete();
<<<<<<< HEAD
        return response()->json(null, Response::HTTP_NO_CONTENT); //204 No content
=======
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204 No Content
>>>>>>> af90c534c64298ce6eea814c4b5aea13e07f82d3
    }

}
