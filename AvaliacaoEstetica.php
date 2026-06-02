<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AvaliacaoEstetica extends Model
{
    protected $fillable = [
        'agendamento_id',
        'tipo_pele',
        'textura_pele',
        'tom_pele',
        'sensibilidade',
        'manchas',
        'rugas',
        'flacidez',
        'porosidade',
        'lesoes',
        'avaliacao_geral',
        'plano_tratamento',
        'aceite_avaliacao'
    ];

    public function agendamento(): BelongsTo
    {
        return $this->belongsTo(Agendamento::class);
    }
}