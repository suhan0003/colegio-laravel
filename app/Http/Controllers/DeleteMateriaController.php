<?php

namespace App\Http\Controllers;

use App\Services\DeleteMateriaService;
use Illuminate\Http\Request;

class DeleteMateriaController extends Controller
{
    protected $materiaService;

    public function __construct(DeleteMateriaService $materiaService)
    {
        $this->materiaService = $materiaService;
    }

    public function delete($id)
    {
        $result = $this->materiaService->deleteMateria($id);

        if ($result) {

            return response()->json(['message' => 'Materia eliminada correctamente'], 200);
        } else {
    
            return response()->json(['message' => 'Materia no encontrada'], 404);
        }
    }
}
