<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Painel de Agendamentos</h1>
        <div class="text-sm text-gray-500">
            Total: {{ $estatisticas['total'] }}
        </div>
    </div>

    <!-- ✅ ALERTAS DE AÇÃO + BOTÃO WHATSAPP -->
    @if(session()->has('mensagem'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded flex flex-col md:flex-row md:justify-between md:items-center gap-2">
            <span>{{ session('mensagem') }}</span>

            <!-- 📱 BOTÃO DO WHATSAPP APARECE SEMPRE QUE HOUVER LINK -->
            @if($linkWhatsapp)
                <a href="{{ $linkWhatsapp }}" target="_blank" class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-700 transition shadow">
                    📱 Abrir WhatsApp e Enviar
                </a>
            @endif
        </div>
    @endif

    <!-- ✅ ESTATÍSTICAS -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-lg shadow text-center">
            <div class="text-sm text-gray-500">Total</div>
            <div class="text-2xl font-bold text-blue-600">{{ $estatisticas['total'] }}</div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow text-center">
            <div class="text-sm text-gray-500">Hoje</div>
            <div class="text-2xl font-bold text-green-600">{{ $estatisticas['hoje'] }}</div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow text-center">
            <div class="text-sm text-gray-500">Pendentes</div>
            <div class="text-2xl font-bold text-yellow-600">{{ $estatisticas['pendentes'] }}</div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow text-center">
            <div class="text-sm text-gray-500">Concluídos</div>
            <div class="text-2xl font-bold text-purple-600">{{ $estatisticas['concluidos'] }}</div>
        </div>
    </div>

    <!-- ✅ BUSCA E FILTRO -->
    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <div class="flex flex-col md:flex-row gap-4">
            <input
                type="text"
                wire:model.live="busca"
                placeholder="Buscar por nome..."
                class="flex-1 border rounded px-3 py-2"
            >
            <select wire:model.live="filtroStatus" class="border rounded px-3 py-2">
                <option value="todos">Todos os status</option>
                <option value="pendente">Pendente</option>
                <option value="confirmado">Confirmado</option>
                <option value="concluido">Concluído</option>
                <option value="cancelado">Cancelado</option>
            </select>
        </div>
    </div>

    <!-- ✅ TABELA COM AÇÕES -->
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-4 py-3">Cliente</th>
                    <th class="px-4 py-3">Contato</th>
                    <th class="px-4 py-3">Serviço</th>
                    <th class="px-4 py-3">Data / Hora</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3 text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendamentos as $agendamento)
                <tr class="border-t">
                    <td class="px-4 py-3">{{ $agendamento->nome_cliente }}</td>
                    <td class="px-4 py-3">{{ $agendamento->telefone }}</td>
                    <td class="px-4 py-3">{{ $agendamento->servico }}</td>
                    <td class="px-4 py-3">
                        {{ \Carbon\Carbon::parse($agendamento->data_hora)->format('d/m/Y H:i') }}
                    </td>
                    <td class="px-4 py-3">
                        @if($agendamento->status == 'pendente')
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded text-xs font-semibold">Pendente</span>
                        @elseif($agendamento->status == 'confirmado')
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-xs font-semibold">Confirmado</span>
                        @elseif($agendamento->status == 'concluido')
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded text-xs font-semibold">Concluído</span>
                        @elseif($agendamento->status == 'cancelado')
                            <span class="px-2 py-1 bg-red-100 text-red-800 rounded text-xs font-semibold">Cancelado</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if($agendamento->status == 'pendente')
                            <button wire:click="confirmar({{ $agendamento->id }})" class="text-blue-600 hover:text-blue-800 mr-2 font-medium">Confirmar</button>
                            <button wire:click="cancelar({{ $agendamento->id }})" class="text-red-600 hover:text-red-800 mr-2 font-medium">Cancelar</button>
                        @elseif($agendamento->status == 'confirmado')
                            <button wire:click="concluir({{ $agendamento->id }})" class="text-green-600 hover:text-green-800 mr-2 font-medium">Concluir</button>
                            <button wire:click="cancelar({{ $agendamento->id }})" class="text-red-600 hover:text-red-800 mr-2 font-medium">Cancelar</button>
                        @else
                            <span class="text-gray-400 text-xs">Finalizado</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="p-4">
            {{ $agendamentos->links() }}
        </div>
    </div>
</div>
