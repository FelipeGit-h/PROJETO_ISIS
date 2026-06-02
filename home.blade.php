<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Isis Perfect Corpore | Estética Avançada em Goiânia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaria: '#6B5B95',
                        destaque: '#C9A961',
                        clara: '#F8F7FC',
                        escura: '#4A3F69'
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
            .texto-sombra { text-shadow: 0 2px 4px rgba(0,0,0,0.1); }
            .sombra-personalizada { box-shadow: 0 8px 32px rgba(107, 91, 149, 0.15); }
            .transicao-suave { transition: all 0.4s ease; }
        }
    </style>
</head>
<body class="font-poppins bg-clara text-gray-700 overflow-x-hidden">

    <!-- Cabeçalho -->
    <header class="fixed w-full top-0 z-50 py-4 px-6 transicao-suave" id="cabecalho">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-playfair font-bold text-primaria">Espaço Isis</div>

            <nav class="hidden md:flex gap-8">
                <a href="#inicio" class="font-medium hover:text-destaque transicao-suave">Início</a>
                <a href="#resultados" class="font-medium hover:text-destaque transicao-suave">Resultados</a>
                <a href="#servicos" class="font-medium hover:text-destaque transicao-suave">Serviços</a>
                <a href="#sobre" class="font-medium hover:text-destaque transicao-suave">Sobre Nós</a>
            </nav>

            <a href="/admin" class="bg-primaria hover:bg-escura text-white px-5 py-2 rounded-lg transicao-suave">Login</a>
        </div>
    </header>

    <!-- Seção Principal -->
    <section id="inicio" class="min-h-screen flex items-center relative bg-gradient-to-br from-clara to-purple-50 pt-20">
        <div class="container mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <h1 class="font-playfair font-bold text-[clamp(2.5rem,5vw,4rem)] text-primaria leading-tight texto-sombra">
                    Realce sua Beleza <span class="text-destaque">Natural</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-600">
                    Estética avançada em Goiânia, com tecnologia e atendimento personalizado para realçar o melhor de você.
                </p>
                <a href="/agendar" class="inline-block bg-destaque hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-lg text-lg sombra-personalizada transicao-suave transform hover:-translate-y-1">
                    Agendar Avaliação
                </a>
            </div>

            <!-- Simulador Antes/Depois -->
            <div class="relative w-full h-[400px] rounded-2xl overflow-hidden sombra-personalizada">
                <div class="absolute inset-0 flex" id="comparacao">
                    <div class="w-1/2 h-full overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544745725-d05d54f069c9?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Antes do tratamento" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-white/90 px-3 py-1 rounded font-semibold">ANTES</div>
                    </div>
                    <div class="w-1/2 h-full overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1570172619644-b121b96afd9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Depois do tratamento" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-white/90 px-3 py-1 rounded font-semibold">DEPOIS</div>
                    </div>
                </div>
                <div class="absolute left-1/2 top-0 bottom-0 w-1 bg-white/80"></div>
            </div>
        </div>
    </section>

    <!-- Galeria de Resultados -->
    <section id="resultados" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="font-playfair font-bold text-[clamp(2rem,4vw,3rem)] text-center text-primaria mb-16">Resultados Reais</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- 1. Limpeza de Pele Profunda -->
                <div class="bg-clara rounded-2xl overflow-hidden sombra-personalizada transicao-suave hover:scale-[1.02]">
                    <div class="relative h-60 overflow-hidden">
                        <div class="flex h-full">
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Antes Limpeza de Pele" class="w-full h-full object-cover"></div>
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1560750588-73c474c5999c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Depois Limpeza de Pele" class="w-full h-full object-cover"></div>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Limpeza de Pele Profunda</h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600">Pele renovada, poros limpos, sem brilho excessivo e aparência saudável.</p>
                    </div>
                </div>

                <!-- 2. Microagulhamento -->
                <div class="bg-clara rounded-2xl overflow-hidden sombra-personalizada transicao-suave hover:scale-[1.02]">
                    <div class="relative h-60 overflow-hidden">
                        <div class="flex h-full">
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1532074567315-c050e76e048d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Antes Microagulhamento" class="w-full h-full object-cover"></div>
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Depois Microagulhamento" class="w-full h-full object-cover"></div>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Microagulhamento</h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600">Estímulo de colágeno: reduz cicatrizes, fecha poros, deixa pele mais lisa e firme.</p>
                    </div>
                </div>

                <!-- 3. Peeling Químico -->
                <div class="bg-clara rounded-2xl overflow-hidden sombra-personalizada transicao-suave hover:scale-[1.02]">
                    <div class="relative h-60 overflow-hidden">
                        <div class="flex h-full">
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Antes Peeling Químico" class="w-full h-full object-cover"></div>
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Depois Peeling Químico" class="w-full h-full object-cover"></div>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Peeling Químico</h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600">Clareia manchas, uniformiza o tom, renova células e deixa a pele mais brilhante.</p>
                    </div>
                </div>

                <!-- 4. Harmonização Facial -->
                <div class="bg-clara rounded-2xl overflow-hidden sombra-personalizada transicao-suave hover:scale-[1.02]">
                    <div class="relative h-60 overflow-hidden">
                        <div class="flex h-full">
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Antes Harmonização Facial" class="w-full h-full object-cover"></div>
                            <div class="w-1/2"><img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Depois Harmonização Facial" class="w-full h-full object-cover"></div>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Harmonização Facial</h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600">Contornos definidos, volume natural, equilíbrio dos traços e beleza valorizada.</p>
                    </div>
                </div>

                <!-- 5. Dermaplaning -->
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

                <!-- 6. Tratamento Anti-Acne -->
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
        </div>
    </section>

     <!-- Serviços -->
    <section id="servicos" class="py-20 bg-gradient-to-b from-purple-50 to-clara">
        <div class="container mx-auto px-6">
            <h2 class="font-playfair font-bold text-[clamp(2rem,4vw,3rem)] text-center text-primaria mb-16">Nossos Serviços</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Serviço 1: Limpeza de Pele Profunda -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">
                        ✨
                    </div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Limpeza de Pele Profunda</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Remove impurezas, cravos e células mortas, desobstruindo os poros. Deixa a pele mais limpa, saudável, com viço e brilho natural, adequada para todos os tipos de pele.
                    </p>
                </div>

                <!-- Serviço 2: Microagulhamento -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">
                        🧬
                    </div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Microagulhamento</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Estimula a produção natural de colágeno e elastina. Trata cicatrizes de acne, reduz linhas de expressão, fecha poros e melhora significativamente a textura e firmeza da pele.
                    </p>
                </div>

                <!-- Serviço 3: Peeling Químico -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">
                        🌿
                    </div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Peeling Químico</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Renovação celular controlada que clareia manchas, uniformiza o tom da pele, suaviza linhas finas e trata danos causados pelo sol. Resultados visíveis desde a primeira sessão.
                    </p>
                </div>

                <!-- Serviço 4: Harmonização Facial -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">
                        💫
                    </div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Harmonização Facial</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Valoriza os traços naturais equilibrando o rosto. Define contornos, preenche sulcos, devolve volume perdido e melhora a simetria, com resultado natural e elegante.
                    </p>
                </div>

                <!-- Serviço 5: Dermaplaning -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">
                        ✨
                    </div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Dermaplaning</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Remoção de pelinhos finos e camada de células mortas. Proporciona pele extremamente lisa, brilho de "pele de vidro" e faz com que produtos e maquiagem adiram perfeitamente.
                    </p>
                </div>

                <!-- Serviço 6: Tratamento Anti-Acne -->
                <div class="bg-white rounded-2xl p-8 sombra-personalizada transicao-suave hover:scale-[1.03] hover:shadow-xl">
                    <div class="w-16 h-16 bg-primaria/10 text-primaria rounded-full flex items-center justify-center mb-6 text-2xl">
                        🩺
                    </div>
                    <h3 class="font-playfair font-semibold text-xl text-primaria mb-3">Tratamento Anti-Acne</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Protocolo personalizado para controle da oleosidade, redução de inflamações e prevenção de novas espinhas. Trata também as marcas deixadas pela acne, devolvendo a saúde da pele.
                    </p>
                </div>

            </div>

            <div class="text-center mt-16">
                <a href="/agendar" class="inline-block bg-destaque hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-lg text-lg sombra-personalizada transicao-suave transform hover:-translate-y-1">
                    Agendar Avaliação
                </a>
            </div>
        </div>
    </section>
<section class="about" id="sobre">
    <div class="container">
        <div class="section-header"><h2>Sobre Nós</h2></div>
        <div class="about-content">
            <p>O Espaço Isis Perfect Corpore é referência em estética avançada em Goiânia. Combinamos tecnologia de ponta com protocolos personalizados.</p>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <h3>Espaço Isis Perfect Corpore</h3>
                <p>Estética avançada com tecnologia e carinho.</p>
            </div>
            <div class="footer-links">
                <h4>Links</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="{{ route('agendar') }}">Agendar</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Contato</h4>
                <ul>
                    <li><a>Goiânia - GO</a></li>
                    <li><a href="https://wa.me/5562999999999">WhatsApp</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2026 Espaço Isis Perfect Corpore. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<!-- WhatsApp Flutuante -->
<a href="https://wa.me/5562999999999?text=Olá! Gostaria de agendar uma avaliação." class="whatsapp-float" target="_blank">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0.16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
    </svg>
</a>

<script>
// Header scroll
window.addEventListener('scroll', () => {
    document.getElementById('header').classList.toggle('scrolled', window.scrollY > 50);
});

// Hero slider
document.getElementById('heroSlider').addEventListener('input', (e) => {
    document.getElementById('heroAfterImage').style.clipPath = `inset(0 ${100 - e.target.value}% 0 0)`;
});

// Galeria autoplay
let currentIndex = 0;
const cards = document.querySelectorAll('.gallery-card');
function autoplayGallery() {
    cards.forEach(c => c.classList.remove('active'));
    cards[currentIndex].classList.add('active');
    currentIndex = (currentIndex + 1) % cards.length;
}
autoplayGallery();
setInterval(autoplayGallery, 3000);

// Toast auto-hide
setTimeout(() => {
    const toast = document.getElementById('toast');
    if (toast) toast.classList.remove('show');
}, 4000);
</script>
</body>
</html>
