<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriaModel extends Model
{

    protected $table = 'pais';

    protected $fillable = ['id_pais', 'nom_larg', 'nom_cort'];

    
}
