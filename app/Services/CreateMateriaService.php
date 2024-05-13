<?php

namespace App\Services;

use App\Models\MateriaModel;

class CreateMateriaService
{
    public function createMateria($materiaData)
    {
        return MateriaModel::create($materiaData);
    }
}
