<?php

namespace App\Services;

use App\Models\MateriaModel;

class UpdateMateriaService
{

    public function updateMateria($id, $newMateriaData)
    {

        $materia = MateriaModel::find($id);

        if ($materia) {
  
            $materia->update($newMateriaData);
            return $materia;

        } else {
        
            return null;
        }
    }
}
