<?php 

namespace App\Http\Controllers;

use App\Services\GetMateriasService;
use Illuminate\Http\Request;

class GetMateriasController extends Controller
{

    protected $materiaService;

    public function __construct(GetMateriasService $materiaService)
    {
        $this->materiaService = $materiaService;
    }

    public function get()
    {
        $materias = $this->materiaService->getMaterias();

        return response()->json(['materias' => $materias], 200);
    }
    
}
