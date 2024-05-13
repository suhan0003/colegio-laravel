<?php 

namespace App\Http\Controllers\Usuario;

use App\Services\Usuario\CreateUsuarioService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class CreateUsuarioController extends Controller
{
    protected $usuarioService;

    public function __construct(CreateUsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }


    public function create(Request $request)
    {
        $usuarioData = $request->all();

        $usuario = $this->usuarioService->createUsuario($usuarioData);

        return response()->json(['usuario' => $usuario], 201);
    }

}
