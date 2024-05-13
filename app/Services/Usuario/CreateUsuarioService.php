<?php

namespace App\Services\Usuario;

use App\Models\User;

class CreateUsuarioService
{
    public function createUsuario($usuarioData)
    {
        
        $usuarioData['password'] = bcrypt($usuarioData['password']); 

        return User::create($usuarioData);
    }
}
