<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;

    protected $table = 'anamneses';

    protected $fillable = [
    'agendamento_id',
    'queixa_principal',
    'objetivo_tratamento',
    'doencas_cronicas',
    'alergias',
    'medicamentos_uso',
    'gestante_amamentando',
    'fuma',
    'pratica_exercicio',
    'horas_sono',
    'exposicao_sol',
    'tipo_pele',
    'tratamentos_anteriores',
    'observacoes',
    'aceite_termo',
    'termo_consentimento_texto',
    'assinatura_digital_nome',
    'data_assinatura',
];

protected $casts = [
    'aceite_termo' => 'boolean',
    'data_assinatura' => 'datetime',
    'horas_sono' => 'integer',
];

        // Relacionamento com agendamento
    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class);
    }
}