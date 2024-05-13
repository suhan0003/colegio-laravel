<?php

namespace App\Services\Usuario;

use App\Models\User;

class GetUsuariosService
{

    public function getUsuarios()
    {
        return User::all();
    }
}
