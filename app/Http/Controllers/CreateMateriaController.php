<?php 

namespace App\Http\Controllers;

use App\Services\CreateMateriaService;
use Illuminate\Http\Request;

class CreateMateriaController extends Controller
{
    protected $materiaService;

    public function __construct(CreateMateriaService $materiaService)
    {
        $this->materiaService = $materiaService;
    }


    public function create(Request $request)
    {
        $materiaData = $request->all();

        $materia = $this->materiaService->createMateria($materiaData);

        return response()->json(['materia' => $materia], 201);
    }

}
