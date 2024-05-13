<?php 

namespace App\Http\Controllers\Usuario;

use App\Services\Usuario\GetUsuariosService; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class GetUsuariosController extends Controller
{

    protected $usuarioService;

    public function __construct(GetUsuariosService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

    public function get()
    {
        $usuarios = $this->usuarioService->getUsuarios();

        return response()->json(['usuarios' => $usuarios], 200);
    }
    
}
