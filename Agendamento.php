<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agendamento extends Model
{
    use HasFactory;

    protected $table = 'agendamentos';

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'servico',
        'data_hora',
        'observacoes',
        'status',
    ];

    protected $casts = [
        'data_hora' => 'datetime',
    ];

    public function anamnese()
    {
        return $this->hasOne(Anamnese::class);
    }

    public function avaliacaoEstetica()
    {
        return $this->hasOne(AvaliacaoEstetica::class);
    }

    public function consentimento()
    {
        return $this->hasOne(Consentimento::class);
    }
}