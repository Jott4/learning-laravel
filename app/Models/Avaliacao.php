<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;


    protected $casts = [
        'data_inicio ' => 'datetime:Y-m-d',
    ];

    public function turma()
    {
        return $this->hasOne(Turma::class, 'id', 'turma_id');
    }

    public function disciplina()
    {
        return $this->hasOne(Disciplina::class, 'id', 'disciplina_id');
    }


}
