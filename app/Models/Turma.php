<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public function curso()
    {
        return $this->hasOne(Curso::class, 'id', 'curso_id');
    }
}
