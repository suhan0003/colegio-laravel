<?php

namespace App\Services;

use App\Models\MateriaModel;

class GetMateriasService
{

    public function getMaterias()
    {
        return MateriaModel::all();
    }
}
