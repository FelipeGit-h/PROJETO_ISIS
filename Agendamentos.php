<?php

namespace App\Livewire\Admin;

use App\Models\Agendamento;
use App\Models\Anamnese;
use Livewire\Component;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;

class Agendamentos extends Component
{
    use WithPagination;

    public $filtroStatus = '';
    public $busca = '';

    protected $paginationTheme = 'tailwind';

    public function updatingFiltroStatus() { $this->resetPage(); }
    public function updatingBusca() { $this->resetPage(); }

    public function exportarPdf($agendamentoId)
    {
        $agendamento = Agendamento::with('anamnese')->findOrFail($agendamentoId);
        
        $pdf = Pdf::loadView('admin.anamnese-pdf', compact('agendamento'));
        return response()->streamDownload(
            fn () => print($pdf->output()),
            "anamnese-{$agendamento->nome}.pdf"
        );
    }

    public function render()
    {
        $query = Agendamento::with('anamnese')
            ->when($this->filtroStatus, fn($q) => $q->where('status', $this->filtroStatus))
            ->when($this->busca, fn($q) => $q->where('nome', 'like', "%{$this->busca}%"))
            ->orderBy('created_at', 'desc');

        $metricas = [
            'total' => Agendamento::count(),
            'hoje' => Agendamento::whereDate('created_at', today())->count(),
            'pendentes' => Agendamento::where('status', 'pendente')->count(),
            'concluidos' => Agendamento::where('status', 'concluido')->count(),
        ];

        return view('livewire.admin.agendamentos', [
            'agendamentos' => $query->paginate(15),
            'metricas' => $metricas,
        ])->layout('layouts.app');
    }
}