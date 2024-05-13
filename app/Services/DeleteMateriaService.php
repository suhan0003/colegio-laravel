<?php

namespace App\Services;

use App\Models\MateriaModel;

class DeleteMateriaService
{

    public function deleteMateria($id)
    {
        $materia = MateriaModel::find($id);

        if ($materia) {

            $materia->delete();
            return true;

        } else {
   
            return false;
        }
    }

    
}
