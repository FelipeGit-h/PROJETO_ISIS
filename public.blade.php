<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lumière</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen">
        <header class="bg-white border-b">
            <div class="max-w-7xl mx-auto px-4 py-4">
                <a href="/" class="text-xl font-bold">Lumière</a>
            </div>
        </header>
        <main>{{ $slot }}</main>
    </div>
    
    @include('components.visitas')
    @include('components.toast')
    @livewireScripts
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        if ('Notification' in window && Notification.permission === 'default') {
            setTimeout(() => {Notification.requestPermission();}, 5000);
        }
        
        if (window.Echo) {
            window.Echo.channel('publico').listen('AgendamentoConfirmado', (e) => {
                window.Livewire.dispatch('toast', { 
                    message: `🎉 ${e.nome_cliente} acabou de agendar ${e.servico} para ${e.data}!` 
                });
                if (Notification.permission === 'granted' && document.hidden) {
                    new Notification('Novo agendamento na Lumière ✨', {
                        body: `${e.nome_cliente} agendou ${e.servico} para ${e.data}`,
                        icon: '/icon-192.png'
                    });
                }
            });
        }
    });
    </script>
    @stack('scripts')
</body>
</html>