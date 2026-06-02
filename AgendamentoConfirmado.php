<?php

namespace App\Events;

use App\Models\Agendamento;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class AgendamentoConfirmado implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public Agendamento $agendamento) {}

    public function broadcastOn(): Channel
    {
        return new Channel('publico');
    }

	public function broadcastAs(): string
    {
        return 'AgendamentoConfirmado';
    }

    public function broadcastWith(): array
    {
        return [
            'nome_cliente' => $this->agendamento->nome_cliente,
            'servico' => $this->agendamento->servico,
            'data' => Carbon::parse($this->agendamento->data_hora)->format('d/m'),
            'hora' => Carbon::parse($this->agendamento->data_hora)->format('H:i'),
        ];
    }
}