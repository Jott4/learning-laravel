<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{


    public function turmas()
    {
        return $this->hasMany(Turma::class, 'turma_id', 'id');
    }

}
