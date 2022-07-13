<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $casts = [
        'aulas_semana' => 'array'
    ];

    public function turma()
    {
        return $this->hasOne(Turma::class, 'id', 'turma_id');
    }

    public function professor()
    {
        return $this->hasOne(Professor::class, 'id', 'professor_id');
    }

}
