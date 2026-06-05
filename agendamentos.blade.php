<div>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo | Espaço Isis Perfect Corpore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6B5B95',
                        secondary: '#C9A961',
                        dark: '#2D2A3E',
                        light: '#F8F7FC',
                        danger: '#EF4444',
                        success: '#22C55E',
                        warning: '#F59E0B',
                    },
                    fontFamily: {
                        playfair: ['Playfair Display', 'serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer utilities {
            .text-shadow {
                text-shadow: 0 2px 4px rgba(0,0,0,0.2);
            }
            .scroll-smooth {
                scroll-behavior: smooth;
            }
            .card-hover {
                @apply transition-all duration-300 hover:shadow-xl hover:-translate-y-1;
            }
            .btn-hover {
                @apply transition-all duration-200 hover:shadow-md hover:-translate-y-0.5;
            }
        }
    </style>
</head>
<body class="bg-light text-dark font-poppins scroll-smooth">

    <!-- ✅ Navbar Administrativa -->
    <header class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-md shadow-md">
        <div class="container mx-auto px-4 py-3 flex flex-col md:flex-row items-center justify-between">
            <div class="mb-3 md:mb-0">
                <a href="{{ route('home') }}" class="text-[clamp(1.2rem,2vw,1.6rem)] font-playfair font-bold text-primary">
                    Espaço Isis <span class="text-secondary">Admin</span>
                </a>
            </div>

            <nav class="flex flex-wrap justify-center gap-4 md:gap-6">
                <a href="#inicio" class="font-medium text-primary bg-primary/10 px-3 py-1 rounded-full">Início</a>
                <a href="#agendamentos" class="font-medium hover:text-primary transition-colors">Agendamentos</a>
                <a href="#cadastro" class="font-medium hover:text-primary transition-colors">Cadastro de Clientes</a>
                <a href="#galeria-admin" class="font-medium hover:text-primary transition-colors">Galeria</a>
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-primary transition-colors">
                    <i class="fa fa-external-link mr-1"></i> Ver Site
                </a>
            </nav>
        </div>
    </header>

    <main class="pt-24 pb-16">
        <div class="container mx-auto px-4">

            <!-- ✅ PAINEL DE VISUALIZAÇÕES / ESTATÍSTICAS -->
            <section id="inicio" class="mb-16">
                <div class="text-center mb-10">
                    <h1 class="font-playfair font-bold text-[clamp(1.8rem,4vw,3rem)] text-primary mb-2">Visão Geral</h1>
                    <p class="text-gray-600">Acompanhamento de acessos e movimentações do sistema</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white rounded-2xl shadow-lg p-6 card-hover border-l-4 border-primary">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium">Visitas Hoje</p>
                                <h3 class="text-3xl font-bold text-primary mt-1">127</h3>
                                <p class="text-success text-xs mt-2 flex items-center">
                                    <i class="fa fa-arrow-up mr-1"></i> 12% em relação a ontem
</p>
</div>
<div class="bg-primary/10 p-4 rounded-full text-primary">
<i class="fa fa-eye text-2xl"></i>
</div>
</div>
</div>
<div class="bg-white rounded-2xl shadow-lg p-6 card-hover border-l-4 border-success">
<div class="flex items-center justify-between">
<div>
<p class="text-gray-500 text-sm font-medium">Atendimentos</p>
<h3 class="text-3xl font-bold text-success mt-1">{{ count($cadastros) }}</h3>
<p class="text-success text-xs mt-2 flex items-center">
<i class="fa fa-check-circle mr-1"></i> Total finalizados
</p>
</div>
<div class="bg-success/10 p-4 rounded-full text-success">
<i class="fa fa-calendar-check-o text-2xl"></i>
</div>
</div>
</div>
<div class="bg-white rounded-2xl shadow-lg p-6 card-hover border-l-4 border-warning">
<div class="flex items-center justify-between">
<div>
<p class="text-gray-500 text-sm font-medium">Pendentes</p>
<h3 class="text-3xl font-bold text-warning mt-1">{{ $agendamentos->where('status','pendente')->count() }}</h3>
<p class="text-warning text-xs mt-2 flex items-center">
<i class="fa fa-clock-o mr-1"></i> Aguardando atendimento
</p>
</div>
<div class="bg-warning/10 p-4 rounded-full text-warning">
<i class="fa fa-hourglass-half text-2xl"></i>
</div>
</div>
</div>
<div class="bg-white rounded-2xl shadow-lg p-6 card-hover border-l-4 border-secondary">
<div class="flex items-center justify-between">
<div>
<p class="text-gray-500 text-sm font-medium">Novos Clientes</p>
<h3 class="text-3xl font-bold text-secondary mt-1">+{{ count($cadastros) }}</h3>
<p class="text-secondary text-xs mt-2 flex items-center">
<i class="fa fa-user-plus mr-1"></i> Este mês
</p>
</div>
<div class="bg-secondary/10 p-4 rounded-full text-secondary">
<i class="fa fa-users text-2xl"></i>
</div>
</div>
</div>
</div>
</section>
<section id="agendamentos" class="mb-20">
<div class="text-center mb-12">
<h2 class="font-playfair font-bold text-[clamp(1.8rem,4vw,3rem)] text-primary mb-2">Agendamentos</h2>
<p class="text-gray-600">Visualize todos os atendimentos marcados. <strong>Somente visualização</strong> — os agendamentos são feitos exclusivamente pela tela inicial do site.</p>
</div>
<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full">
<thead>
<tr class="bg-gradient-to-r from-primary/10 to-secondary/10">
<th class="py-4 px-6 text-left font-semibold text-primary">Cliente</th>
<th class="py-4 px-6 text-left font-semibold text-primary">Telefone</th>
<th class="py-4 px-6 text-left font-semibold text-primary">Serviço</th>
<th class="py-4 px-6 text-left font-semibold text-primary">Data/Hora</th>
<th class="py-4 px-6 text-left font-semibold text-primary">Status</th>
<th class="py-4 px-6 text-center font-semibold text-primary">Ação</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-100">
@foreach($agendamentos as $agendamento)
<tr class="hover:bg-light/50 transition-colors">
<td class="py-4 px-6">{{ $agendamento->nome_completo }}</td>
<td class="py-4 px-6">{{ $agendamento->telefone }}</td>
<td class="py-4 px-6">{{ $agendamento->servico }}</td>
<td class="py-4 px-6">{{ \Carbon\Carbon::parse($agendamento->data_hora)->format('d/m/Y H:i') }}</td>
<td class="py-4 px-6">
<span class="px-3 py-1 rounded-full text-xs font-medium
@if($agendamento->status == 'pendente') bg-warning/10 text-warning
@elseif($agendamento->status == 'confirmado') bg-primary/10 text-primary
@elseif($agendamento->status == 'concluido') bg-success/10 text-success
@else bg-danger/10 text-danger @endif">
{{ ucfirst($agendamento->status) }}
</span>
</td>
<td class="py-4 px-6 text-center">
@if($agendamento->status != 'concluido')
<button wire:click="concluirAtendimento({{ $agendamento->id }})" class="bg-success/10 text-success px-3 py-1 rounded-lg hover:bg-success/20 transition-colors" title="Finalizar atendimento e enviar para cadastro">
<i class="fa fa-check mr-1"></i> Finalizar
</button>
@else
<span class="text-gray-400 text-sm">No Cadastro</span>
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</section>
<section id="cadastro" class="mb-20">
<div class="text-center mb-12">
<h2 class="font-playfair font-bold text-[clamp(1.8rem,4vw,3rem)] text-primary mb-2">Cadastro de Clientes</h2>
<p class="text-gray-600">Dados pessoais completos de todos os clientes atendidos. Edite, exclua, envie mensagem, preencha a ficha de anamnese e exporte PDF.</p>
</div>
<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full">
<thead>
<tr class="bg-gradient-to-r from-success/10 to-primary/10">
<th class="py-4 px-6 text-left font-semibold text-primary">Nome Completo</th>
<th class="py-4 px-6 text-left font-semibold text-primary">Contato</th>
<th class="py-4 px-6 text-left font-semibold text-primary">Endereço</th>
<th class="py-4 px-6 text-center font-semibold text-primary">Ações</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-100">
@foreach($clientes as $cliente)
<tr class="hover:bg-light/50 transition-colors">
<td class="py-4 px-6 font-medium">{{ $cliente->nome_completo }}</td>
<td class="py-4 px-6">
<div><i class="fa fa-phone text-gray-500 mr-1"></i> {{ $cliente->telefone }}</div>
<div><i class="fa fa-envelope text-gray-500 mr-1"></i> {{ $cliente->email }}</div>
</td>
<td class="py-4 px-6 text-sm">
{{ $cliente->rua }}, {{ $cliente->numero }} - {{ $cliente->bairro }}<br>
{{ $cliente->cidade }} - CEP: {{ $cliente->cep }}
</td>
<td class="py-4 px-6">
<div class="flex justify-center gap-2 flex-wrap">
<!-- ✅ Botão WhatsApp -->
<a href="https://wa.me/55{{ preg_replace('/\D/', '', $cliente->telefone) }}?text=Olá%20{{ explode(' ', $cliente->nome_completo)[0] }}!%20Tudo%20bem?%20Estamos%20entrando%20em%20contato%20para%20confirmar%20seu%20agendamento%20no%20Espaço%20Isis%20Perfect%20Corpore."
target="_blank" class="bg-green-500/10 text-green-600 p-2 rounded-lg hover:bg-green-500/20 transition-colors" title="Enviar mensagem WhatsApp">
<i class="fa fa-whatsapp"></i>
</a>
<!-- ✅ Editar -->
<button wire:click="abrirEditarCliente({{ $cliente->id }})" class="bg-primary/10 text-primary p-2 rounded-lg hover:bg-primary/20 transition-colors" title="Editar dados">
    <i class="fa fa-pencil"></i>
</button>

<!-- ✅ Ficha Anamnese (ÚNICA POR CLIENTE) -->
@if(!$cliente->anamnese)
    <button wire:click="abrirAnamnese({{ $cliente->id }})" class="bg-secondary/10 text-secondary p-2 rounded-lg hover:bg-secondary/20 transition-colors" title="Preencher Ficha de Anamnese">
        <i class="fa fa-file-text"></i>
    </button>
@else
    <button wire:click="verAnamnese({{ $cliente->id }})" class="bg-secondary/30 text-secondary p-2 rounded-lg" title="Ficha já preenchida - Visualizar">
        <i class="fa fa-check-square-o"></i>
    </button>
@endif

<!-- ✅ Exportar PDF -->
<button wire:click="exportarPdfCliente({{ $cliente->id }})" class="bg-success/10 text-success p-2 rounded-lg hover:bg-success/20 transition-colors" title="Baixar Ficha Completa PDF">
    <i class="fa fa-file-pdf-o"></i>
</button>

<!-- ✅ Excluir -->
<button wire:click="excluirCliente({{ $cliente->id }})" onclick="return confirm('Tem certeza? Ação irreversível!')" class="bg-danger/10 text-danger p-2 rounded-lg hover:bg-danger/20 transition-colors" title="Excluir cliente">
    <i class="fa fa-trash"></i>
</button>
</div>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</section>
<section id="galeria-admin" class="mb-20">
<div class="text-center mb-12">
<h2 class="font-playfair font-bold text-[clamp(1.8rem,4vw,3rem)] text-primary mb-2">Gerenciar Galeria</h2>
<p class="text-gray-600">Envie fotos reais do espaço, tratamentos e resultados. As imagens aparecem <strong>em tempo real</strong> na galeria do site.</p>
</div>
<div class="bg-white rounded-2xl shadow-lg p-8 mb-10 card-hover">
<div class="max-w-xl mx-auto text-center">
<label for="foto" class="block mb-4 font-semibold text-lg text-dark">
<i class="fa fa-cloud-upload text-4xl text-secondary mb-3"></i><br>
Clique ou arraste as fotos aqui
</label>
<input type="file" wire:model="fotos" multiple accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
<p class="text-xs text-gray-500 mt-2">Formatos: JPG, PNG, WEBP | Tamanho máximo: 5MB por imagem</p>
<div class="mt-6">
<button wire:click="salvarGaleria" class="bg-secondary hover:bg-secondary/90 text-white px-8 py-3 rounded-full btn-hover shadow-lg">
<i class="fa fa-save mr-2"></i> Publicar Fotos na Galeria
</button>
</div>
</div>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
    @foreach($fotosGaleria as $foto)
        <div class="relative group rounded-lg overflow-hidden shadow-md card-hover">
            <img src="{{ asset('storage/galeria/' . $foto->imagem) }}" alt="Foto da galeria" class="w-full h-32 object-cover">
            
            <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                <button wire:click="excluirFotoGaleria({{ $foto->id }})" 
                        class="bg-danger text-white p-2 rounded-full hover:bg-danger/90 transition-colors" 
                        title="Remover foto">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
        </div>
    @endforeach
</div>
</section>
</div>
</main>
<div id="modal-editar-cliente" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm hidden">
<div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto m-4 shadow-2xl">
<div class="p-6 border-b border-gray-100 flex justify-between items-center">
<h3 class="font-playfair font-bold text-2xl text-primary">Editar Dados do Cliente</h3>
<button onclick="fecharModal('modal-editar-cliente')" class="text-gray-400 hover:text-dark">
<i class="fa fa-times text-xl"></i>
</button>
</div>
<div class="p-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="md:col-span-2">
<label class="block text-sm font-medium text-gray-700 mb-1">Nome Completo</label>
<input type="text" wire:model="clienteEdit.nome_completo" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Telefone / WhatsApp</label>
<input type="text" wire:model="clienteEdit.telefone" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
<input type="email" wire:model="clienteEdit.email" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">CEP</label>
<input type="text" wire:model="clienteEdit.cep" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Rua / Logradouro</label>
<input type="text" wire:model="clienteEdit.rua" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Número</label>
<input type="text" wire:model="clienteEdit.numero" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Bairro</label>
<input type="text" wire:model="clienteEdit.bairro" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Cidade / UF</label>
<input type="text" wire:model="clienteEdit.cidade" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
</div>
</div>
<div class="mt-8 flex justify-end gap-3">
<button onclick="fecharModal('modal-editar-cliente')" class="px-6 py-2 border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
Cancelar
</button>
<button wire:click="salvarEdicaoCliente" class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg btn-hover shadow-md">
Salvar Alterações
</button>
</div>
</div>
</div>
</div>
<div id="modal-anamnese" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm hidden">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto m-4 shadow-2xl">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center">
            <h3 class="font-playfair font-bold text-2xl text-primary">Ficha de Anamnese</h3>
            <button onclick="fecharModal('modal-anamnese')" class="text-gray-400 hover:text-dark">
                <i class="fa fa-times text-xl"></i>
            </button>
        </div>
<div class="p-6">
<!-- ✅ DADOS PESSOAIS (PREENCHIDOS AUTOMATICAMENTE, NÃO EDITÁVEIS) -->
<div class="mb-8 p-4 bg-primary/5 rounded-xl">
<h4 class="font-semibold text-primary mb-3">Dados Pessoais</h4>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
<div><strong>Nome:</strong> {{ $clienteSelecionado->nome_completo ?? '' }}</div>
<div><strong>Telefone:</strong> {{ $clienteSelecionado->telefone ?? '' }}</div>
<div><strong>E-mail:</strong> {{ $clienteSelecionado->email ?? '' }}</div>
<div><strong>Endereço:</strong> {{ $clienteSelecionado->rua ?? '' }}, {{ $clienteSelecionado->numero ?? '' }} - {{ $clienteSelecionado->bairro ?? '' }}</div>
<div><strong>Cidade/UF:</strong> {{ $clienteSelecionado->cidade ?? '' }}</div>
<div><strong>CEP:</strong> {{ $clienteSelecionado->cep ?? '' }}</div>
</div>
</div>
<div class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="md:col-span-2">
<label class="block text-sm font-medium text-gray-700 mb-2">Queixa Principal / Objetivo do Atendimento *</label>
<textarea wire:model="anamnese.objetivo" rows="3" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Ex: Redução de medidas, tratamento de estrias, limpeza de pele..." required></textarea>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Histórico de Doenças</label>
<textarea wire:model="anamnese.doencas" rows="3" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Hipertensão, diabetes, problemas cardíacos, alergias..."></textarea>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Medicações de Uso Contínuo</label>
<textarea wire:model="anamnese.medicamentos" rows="3" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Lista de remédios que utiliza regularmente..."></textarea>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Alergias</label>
<textarea wire:model="anamnese.alergias" rows="3" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Produtos, substâncias, medicamentos..."></textarea>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Cirurgias e Procedimentos Anteriores</label>
<textarea wire:model="anamnese.cirurgias" rows="3" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Cirurgias, tratamentos estéticos anteriores..."></textarea>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Gestante ou Lactante?</label>
<select wire:model="anamnese.gestante" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
<option value="">Selecione</option>
<option value="sim">Sim</option>
<option value="nao">Não</option>
<option value="nao_se_aplica">Não se aplica</option>
</select>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Prática Atividade Física Regular?</label>
<select wire:model="anamnese.atividade_fisica" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary">
<option value="">Selecione</option>
<option value="sim">Sim</option>
<option value="nao">Não</option>
</select>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Hábitos Alimentares</label>
<textarea wire:model="anamnese.alimentacao" rows="3" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Dieta, frequência das refeições, consumo de água..."></textarea>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Tabagismo e Consumo de Álcool</label>
<textarea wire:model="anamnese.habitos" rows="3" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Fuma? Consome bebida alcoólica? Com que frequência?"></textarea>
</div>
<div class="md:col-span-2">
<label class="block text-sm font-medium text-gray-700 mb-2">Cuidados Especiais e Observações Gerais</label>
<textarea wire:model="anamnese.observacoes" rows="4" class="w-full border border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Qualquer informação adicional que julgar importante..."></textarea>
</div>
</div>
</div>
<div class="mt-8 flex justify-end gap-3">
<button onclick="fecharModal('modal-anamnese')" class="px-6 py-2 border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
Cancelar
</button>
<button wire:click="salvarAnamnese" class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg btn-hover shadow-md">
Salvar Ficha
</button>
</div>
</div>
</div>
</div>
<footer class="bg-black text-white py-12">
<div class="container mx-auto px-4">
<div class="text-center">
<div class="mb-4">
<span class="font-playfair font-bold text-2xl text-secondary">Espaço Isis Perfect Corpore</span>
</div>
<p class="text-gray-500 text-sm mb-4">Sistema de Gestão e Atendimento Estético</p>
<p class="text-gray-600 text-xs">© {{ date('Y') }} Todos os direitos reservados</p>
</div>
</div>
</footer>
<script>
function abrirModal(id) {
document.getElementById(id).classList.remove('hidden');
document.body.style.overflow = 'hidden';
}
function fecharModal(id) {
document.getElementById(id).classList.add('hidden');
document.body.style.overflow = 'auto';
}
document.addEventListener('click', function(e) {
const modais = document.querySelectorAll('[id^="modal-"]');
modais.forEach(modal => {
if (e.target === modal) fecharModal(modal.id);
});
});
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
anchor.addEventListener('click', function (e) {
e.preventDefault();
const target = document.querySelector(this.getAttribute('href'));
if(target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
});
});
window.addEventListener('scroll', function() {
const header = document.querySelector('header');
if (window.scrollY > 40) {
header.classList.add('shadow-lg', 'bg-white');
header.classList.remove('bg-white/95');
} else {
header.classList.remove('shadow-lg');
header.classList.add('bg-white/95');
}
});
</script>
</body>
</html>
</div>
