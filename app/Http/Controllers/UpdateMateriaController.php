<?php

namespace App\Http\Controllers;

use App\Services\UpdateMateriaService;
use Illuminate\Http\Request;

class UpdateMateriaController extends Controller
{

    protected $materiaService;

    public function __construct(UpdateMateriaService $materiaService)
    {
        $this->materiaService = $materiaService;
    }

    public function update(Request $request, $id)
    {
        $materiaData = $request->all();

        $materia = $this->materiaService->updateMateria($id, $materiaData);

        if ($materia) {
           
            return response()->json(['materia' => $materia], 200);
        } else {
            
            return response()->json(['message' => 'Materia no encontrada'], 404);
        }
    }


   
}
