<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Espaço Isis Perfect Corpore</title>
    <meta name="description" content="Estética e bem-estar com qualidade e cuidado especial.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Styles e Configuração Tailwind -->
    <style>
        :root {
            --primaria: #6B5B95;
            --destaque: #C9A961;
            --clara: #F8F5F2;
            --escura: #4A4A68;
        }

        /* Estilos do botão WhatsApp flutuante */
        .whatsapp-float {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 4rem;
            height: 4rem;
            background-color: #25d366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 999;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
        }
        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
        }
    </style>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaria: '#6B5B95',
                        destaque: '#C9A961',
                        clara: '#F8F5F2',
                        escura: '#4A4A68',
                    },
                    fontFamily: {
                        'playfair': ['"Playfair Display"', 'serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <style type="text/tailwindcss">
        @layer utilities {
            .sombra-personalizada {
                box-shadow: 0 4px 20px rgba(107, 91, 149, 0.1);
            }
            .transicao-suave {
                transition: all 0.3s ease;
            }
            .scrolled {
                background-color: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(8px);
                box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            }
        }
    </style>
</head>
<body class="font-poppins text-gray-700 bg-clara antialiased">

    <!-- ✅ ALERTA DE AGENDAMENTO CONCLUÍDO -->
    @if(session()->has('agendamento_concluido'))
    <div class="fixed bottom-4 right-4 z-50 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg animate-bounce">
        ✅ Agendamento concluído com sucesso!
    </div>
    @endif

    <!-- ✅ CABEÇALHO -->
    <header class="fixed w-full top-0 z-40 py-4 px-6 transicao-suave" id="cabecalho">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#inicio" class="text-2xl font-playfair font-bold text-primaria">Isis<span class="text-destaque">Perfect</span></a>

            <!-- Menu Desktop -->
            <nav class="hidden md:flex gap-8">
                <a href="#inicio" class="font-medium hover:text-primaria transicao-suave">Início</a>
                <a href="#sobre" class="font-medium hover:text-primaria transicao-suave">Sobre</a>
                <a href="#servicos" class="font-medium hover:text-primaria transicao-suave">Serviços</a>
                <a href="#resultados" class="font-medium hover:text-primaria transicao-suave">Resultados</a>
                <a href="#contato" class="font-medium hover:text-primaria transicao-suave">Contato</a>
            </nav>

            <a href="#agendar" class="hidden md:block bg-destaque hover:bg-amber-600 text-white px-6 py-2 rounded-lg font-semibold transicao-suave hover:scale-105">
                Agendar
            </a>

            <!-- Botão Menu Mobile -->
            <button class="md:hidden text-primaria text-2xl" id="btnMenu" aria-label="Abrir menu">
                ☰
            </button>
        </div>

        <!-- Menu Mobile -->
        <div class="md:hidden hidden bg-white absolute w-full left-0 shadow-md" id="menuMobile">
            <nav class="flex flex-col p-4 gap-3">
                <a href="#inicio" class="font-medium py-2 hover:text-primaria transicao-suave">Início</a>
                <a href="#sobre" class="font-medium py-2 hover:text-primaria transicao-suave">Sobre</a>
                <a href="#servicos" class="font-medium py-2 hover:text-primaria transicao-suave">Serviços</a>
                <a href="#resultados" class="font-medium py-2 hover:text-primaria transicao-suave">Resultados</a>
                <a href="#contato" class="font-medium py-2 hover:text-primaria transicao-suave">Contato</a>
                <a href="#agendar" class="bg-destaque text-white px-4 py-2 rounded-lg text-center font-semibold mt-2">Agendar</a>
            </nav>
        </div>
    </header>

    <!-- ✅ SEÇÃO INÍCIO -->
    <section id="inicio" class="min-h-screen flex items-center relative overflow-hidden pt-20">
        <div class="absolute top-0 right-0 w-full h-full opacity-10">
            <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                <path d="M477.5,313.5Q429,377,361,420.5Q293,464,208.5,474Q124,484,58.5,422.5Q-7,361,7,262.5Q21,164,87,102Q153,40,241.5,26.5Q330,13,404,77.5Q478,142,477.5,313.5Z" fill="#6B5B95"/>
            </svg>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h1 class="font-playfair font-bold text-[clamp(2.5rem,5vw,4rem)] leading-tight text-escura mb-4">
                        Beleza e Bem-Estar <br>
                        <span class="text-primaria">em um só lugar</span>
                    </h1>
                    <p class="text-gray-600 text-lg mb-8 max-w-xl mx-auto md:mx-0">
                        Cuidados especiais para realçar sua beleza natural e elevar sua autoestima. Tecnologia avançada e atendimento personalizado.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#agendar" class="bg-destaque hover:bg-amber-600 text-white px-8 py-3 rounded-lg font-semibold text-lg transicao-suave hover:scale-105 sombra-personalizada">
                            Agende sua Sessão
                        </a>
                        <a href="#servicos" class="bg-white hover:bg-gray-50 text-primaria border-2 border-primaria px-8 py-3 rounded-lg font-semibold text-lg transicao-suave hover:scale-105">
                            Nossos Serviços
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="w-full h-[500px] rounded-3xl overflow-hidden sombra-personalizada relative">
                        <img src="https://images.unsplash.com/photo-1560750588-73c474c5999c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Espaço de estética" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primaria/30 to-transparent"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl sombra-personalizada max-w-xs hidden md:block">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-xl">✓</div>
                            <div>
                                <p class="font-semibold text-escura">Atendimento Especializado</p>
                                <p class="text-sm text-gray-500">Profissionais qualificados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ✅ SEÇÃO SOBRE NÓS -->
    <section id="sobre" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="font-playfair font-bold text-[clamp(2rem,4vw,3rem)] text-center text-primaria mb-16">Sobre Nós</h2>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="w-full h-[450px] rounded-2xl overflow-hidden sombra-personalizada">
                        <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Sobre nós" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -right-4 -bottom-4 bg-primaria text-white p-4 rounded-xl max-w-[200px] sombra-personalizada hidden md:block">
                        <p class="font-playfair font-bold text-lg">+10 Anos</p>
                        <p class="text-sm opacity-90">Transformando belezas e vidas</p>
                    </div>
                </div>

                <div>
                    <h3 class="font-playfair font-semibold text-2xl text-escura mb-4">Bem-vindo ao Espaço Isis Perfect Corpore</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Somos um centro de estética e bem-estar dedicado a oferecer tratamentos de alta qualidade, unindo ciência, tecnologia e cuidado humano. Nossa missão é proporcionar a você uma experiência única, onde beleza e saúde caminham lado a lado.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Contamos com uma equipe de profissionais altamente capacitados, prontos para indicar o melhor tratamento para o seu objetivo, sempre com segurança e excelência.
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center gap-2">
                            <span class="text-destaque text-xl">✦</span>
                            <span>Ambiente confortável</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-destaque text-xl">✦</span>
                            <span>Produtos certificados</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-destaque text-xl">✦</span>
                            <span>Tecnologia moderna</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-destaque text-xl">✦</span>
                            <span>Atendimento personalizado</span>
                        </div>
                    </div>

                    <a href="#contato" class="inline-block bg-primaria hover:bg-escura text-white px-6 py-3 rounded-lg font-semibold transicao-suave hover:scale-105">
                        Conheça nossa Estrutura
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ✅ SEÇÃO SERVIÇOS -->
    <section id="servicos" class="py-20 bg-gradient-to-b from-purple-50 to-clara">
        <div class="container mx-auto px-6">
            <h2 class="font-playfair font-bold text-[clamp(2rem,4vw,3rem)] text-center text-primaria mb-16">Nossos Serviços</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Serviço 1: Limpeza de Pele Profunda -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">✨</div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Limpeza de Pele Profunda</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Remove impurezas, cravos e células mortas, desobstruindo os poros. Deixa a pele mais limpa, saudável, com viço e brilho natural, adequada para todos os tipos de pele.
                    </p>
                </div>

                <!-- Serviço 2: Microagulhamento -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">🧬</div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Microagulhamento</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Estimula a produção natural de colágeno e elastina. Trata cicatrizes de acne, reduz linhas de expressão, fecha poros e melhora significativamente a textura e firmeza da pele.
                    </p>
                </div>
<!-- Serviço 3: Peeling Químico -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">🌿</div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Peeling Químico</h3>
 		    <p class="text-gray-600 leading-relaxed">
                        Renovação celular controlada que clareia manchas, uniformiza o tom da pele, suaviza linhas finas e trata danos causados pelo sol. Resultados visíveis desde a primeira sessão.
                    </p>
                </div>

                <!-- Serviço 4: Harmonização Facial -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">💫</div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Harmonização Facial</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Valoriza os traços naturais equilibrando o rosto. Define contornos, preenche sulcos, devolve volume perdido e melhora a simetria, com resultado natural e elegante.
                    </p>
                </div>

                <!-- Serviço 5: Dermaplaning -->
                <div class="bg-clara rounded-2xl overflow-hidden sombra-personalizada transicao-suave hover:scale-[1.02]">
                    <div class="relative h-60 overflow-hidden">
                        <div class="flex h-full">
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Antes dermaplaning" class="w-full h-full object-cover"></div>
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1564257631475-4092d1a81f29?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="depois dermaplaning" class="w-full h-full object-cover"></div>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Dermaplaning</h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600">Remoção de pelinhos e células mortas → pele de vidro, brilho e maquiagem perfeita.</p>
                    </div>
                </div>

                <!-- Serviço 6: Tratamento Anti-Acne -->
                <div class="bg-clara rounded-2xl overflow-hidden sombra-personalizada transicao-suave hover:scale-[1.02]">
                    <div class="relative h-60 overflow-hidden">
                        <div class="flex h-full">
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1594489428738-c133f126390f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="antes anti-acne" class="w-full h-full object-cover"></div>
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1583846783214-7227a2999852?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="depois anti-acne" class="w-full h-full object-cover"></div>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Tratamento Anti-Acne</h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600">Controle da oleosidade, redução de espinhas e marcas, pele limpa e saudável.</p>
                    </div>
                </div>

            </div>

            <div class="text-center mt-16">
                <a href="/agendar" class="inline-block bg-destaque hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-lg text-lg sombra-personalizada transicao-suave transform hover:-translate-y-1">
                    Agendar Avaliação
                </a>
            </div>
        </div>
    </section>

    <!-- ✅ SEÇÃO RESULTADOS -->
    <section id="resultados" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="font-playfair font-bold text-[clamp(2rem,4vw,3rem)] text-center text-primaria mb-16">Resultados Reais</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="rounded-2xl overflow-hidden sombra-personalizada">
                    <img src="https://images.unsplash.com/photo-1560750588-73c474c5999c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Resultado de tratamento estético" class="w-full h-64 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden sombra-personalizada">
                    <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Resultado de tratamento estético" class="w-full h-64 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden sombra-personalizada">
                    <img src="https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Resultado de tratamento estético" class="w-full h-64 object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- ✅ SEÇÃO AGENDAR / CONTATO -->
    <section id="agendar" class="py-20 bg-gradient-to-b from-clara to-purple-50" id="contato">
        <div class="container mx-auto px-6">
            <h2 class="font-playfair font-bold text-[clamp(2rem,4vw,3rem)] text-center text-primaria mb-16">Agende sua Visita</h2>
            <div class="max-w-4xl mx-auto bg-white rounded-2xl sombra-personalizada p-8 md:p-12">
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <h3 class="font-playfair font-semibold text-2xl text-escura mb-4">Entre em Contato</h3>
                        <p class="text-gray-600 mb-6">Estamos prontos para receber você e oferecer o melhor atendimento.</p>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center gap-3">📍 Goiânia - GO</li>
                            <li class="flex items-center gap-3">⏰ Seg a Sex: 08h às 19h | Sáb: 08h às 14h</li>
                            <li class="flex items-center gap-3">📞 <a href="https://wa.me/5562993327376" class="text-destaque hover:underline">62 99332-7376</a></li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="https://wa.me/5562993327376?text=Olá! Gostaria de agendar uma avaliação." target="_blank" class="w-full bg-green-600 hover:bg-green-700 text-white text-center py-4 px-6 rounded-lg font-semibold text-lg transicao-suave hover:scale-105 sombra-personalizada">
                            📱 Agendar pelo WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ✅ RODAPÉ -->
    <footer class="bg-escura text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="font-playfair font-bold text-2xl mb-3">Isis<span class="text-destaque">Perfect</span></h3>
                    <p class="text-gray-300">Estética avançada com tecnologia e carinho em Goiânia.</p>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-3">Links Rápidos</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#inicio" class="hover:text-destaque transicao-suave">Início</a></li>
                        <li><a href="#sobre" class="hover:text-destaque transicao-suave">Sobre</a></li>
                        <li><a href="#servicos" class="hover:text-destaque transicao-suave">Serviços</a></li>
                        <li><a href="{{ route('agendar') }}" class="hover:text-destaque transicao-suave">Agendar</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-3">Contato</h4>
                    <p class="text-gray-300">Goiânia - GO<br>
                    <a href="https://wa.me/5562993327376" class="hover:text-destaque transicao-suave">WhatsApp: 62 99332-7376</a></p>
                </div>
            </div>
            <div class="border-t border-gray-600 pt-6 text-center text-gray-400">
                <p>© 2026 Espaço Isis Perfect Corpore. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- ✅ BOTÃO WHATSAPP FLUTUANTE -->
    <a href="https://wa.me/5562993327376?text=Olá! Gostaria de agendar uma avaliação." class="whatsapp-float" target="_blank" aria-label="WhatsApp">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0.16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
    </a>

    <!-- ✅ SCRIPTS -->
    <script>
        // Header scroll efeito
        window.addEventListener('scroll', () => {
            document.getElementById('cabecalho').classList.toggle('scrolled', window.scrollY > 50);
        });

        // Menu Mobile
        const btnMenu = document.getElementById('btnMenu');
        const menuMobile = document.getElementById('menuMobile');
        btnMenu.addEventListener('click', () => {
            menuMobile.classList.toggle('hidden');
        });

        // Fechar menu ao clicar no link
        document.querySelectorAll('#menuMobile a').forEach(link => {
            link.addEventListener('click', () => menuMobile.classList.add('hidden'));
        });
// Galeria autoplay
let currentIndex = 0;
const cards = document.querySelectorAll('.gallery-card');
if (cards.length > 0) {
    function autoplayGallery() {
        cards.forEach(c => c.classList.remove('active'));
        cards[currentIndex].classList.add('active');
        currentIndex = (currentIndex + 1) % cards.length;
    }
    autoplayGallery();
    setInterval(autoplayGallery, 3000);
}

// Toast auto-hide
setTimeout(() => {
    const toast = document.getElementById('toast');
    if (toast) toast.classList.remove('show');
}, 4000);
</script>

</body>
</html>
