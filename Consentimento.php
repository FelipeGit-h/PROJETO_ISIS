<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consentimento extends Model
{
    protected $fillable = [
        'agendamento_id',
        'nome_cliente',
        'procedimento',
        'riscos_beneficios',
        'alternativas',
        'esclarecimentos',
        'concordo_procedimento',
        'concordo_fotos',
        'assinatura_nome',
        'observacoes'
    ];

    public function agendamento(): BelongsTo
    {
        return $this->belongsTo(Agendamento::class);
    }
}