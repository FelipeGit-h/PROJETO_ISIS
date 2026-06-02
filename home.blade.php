<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Espaço Isis Perfect Corpore - Estética Avançada</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap');

:root {
    --primary: #6B5B95; --primary-dark: #524673; --gold: #C9A961;
    --white: #FFFFFF; --off-white: #F8F7FC; --gray: #6C6C7D; --dark: #2D2A3E;
    --success: #22C55E; --shadow-lg: 0 16px 48px rgba(107, 91, 149, 0.16);
}
* { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; }
body { font-family: 'Poppins', sans-serif; color: var(--dark); background: var(--white); line-height: 1.6; }
h1, h2, h3 { font-family: 'Playfair Display', serif; color: var(--primary-dark); }
.container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

header { position: fixed; top: 0; width: 100%; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); z-index: 1000; box-shadow: 0 2px 8px rgba(107, 91, 149, 0.08); }
nav { display: flex; justify-content: space-between; align-items: center; padding: 16px 0; }
.logo { display: flex; align-items: center; gap: 12px; font-size: 1.25rem; font-weight: 600; color: var(--primary); text-decoration: none; }
.logo svg { width: 40px; height: 40px; }
.nav-links { display: flex; gap: 32px; list-style: none; align-items: center; }
.nav-links a { text-decoration: none; color: var(--dark); font-weight: 500; transition: color 0.3s; }
.nav-links a:hover { color: var(--primary); }
.btn-primary {
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: var(--white); padding: 12px 28px; border-radius: 50px; border: none;
    font-weight: 600; cursor: pointer; transition: all 0.3s; text-decoration: none; display: inline-block;
}
.btn-primary:hover { transform: translateY(-2px); box-shadow: var(--shadow-lg); }

.hero { padding: 140px 0 80px; background: linear-gradient(135deg, var(--off-white) 0%, #F0EDF8 100%); position: relative; }
.hero-content { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.hero-text h1 {
    font-size: 3.5rem; margin-bottom: 20px;
    background: linear-gradient(135deg, var(--primary-dark), var(--primary));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.hero-text p { font-size: 1.1rem; color: var(--gray); margin-bottom: 32px; }
.hero-buttons { display: flex; gap: 16px; }

.before-after-card { background: var(--white); border-radius: 24px; padding: 20px; box-shadow: var(--shadow-lg); }
.before-after-container { position: relative; width: 100%; aspect-ratio: 4/3; border-radius: 16px; overflow: hidden; }
.before-image,.after-image { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
.before-image { background: linear-gradient(135deg, #E0D4C3 0%, #D4B5A0 100%); }
.after-image { background: linear-gradient(135deg, #F5E6D3 0%, #E8C9A0 100%); clip-path: inset(0 50% 0 0); transition: clip-path 0.3s; }
.ba-label { position: absolute; top: 16px; padding: 8px 16px; background: rgba(255,255,255,0.95); border-radius: 50px; font-weight: 600; font-size: 0.85rem; color: var(--primary); }
.ba-label.before { left: 16px; }.ba-label.after { right: 16px; }
.ba-slider { position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); width: 60%; }
.ba-slider input { width: 100%; accent-color: var(--gold); }
.card-title { text-align: center; margin-top: 16px; font-weight: 600; color: var(--primary-dark); }

section { padding: 80px 0; }
.section-header { text-align: center; margin-bottom: 56px; }
.section-header h2 { font-size: 2.5rem; margin-bottom: 16px; }

/* Galeria Antes/Depois com Autoplay */
.gallery { background: var(--off-white); }
.gallery-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; }
.gallery-card { background: var(--white); border-radius: 20px; overflow: hidden; box-shadow: 0 2px 8px rgba(107, 91, 149, 0.08); transition: all 0.3s; }
.gallery-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-lg); }
.gallery-ba { position: relative; aspect-ratio: 4/3; overflow: hidden; }
.gallery-before,.gallery-after { position: absolute; width: 100%; height: 100%; }
.gallery-before { background: linear-gradient(135deg, #E8DCC8 0%, #D4B5A0 100%); }
.gallery-after { background: linear-gradient(135deg, #F8E8D0 0%, #F0D0A0 100%); clip-path: inset(0 100% 0 0); transition: clip-path 1s ease; }
.gallery-card.active.gallery-after { clip-path: inset(0 0 0 0); }
.gallery-info { padding: 20px; }
.gallery-info h3 { font-size: 1.1rem; margin-bottom: 8px; }
.gallery-info p { color: var(--gray); font-size: 0.9rem; }

.services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 32px; }
.service-card { background: var(--white); border-radius: 20px; padding: 40px 32px; text-align: center; box-shadow: 0 2px 8px rgba(107, 91, 149, 0.08); transition: all 0.3s; border: 2px solid transparent; }
.service-card:hover { border-color: var(--gold); transform: translateY(-8px); box-shadow: var(--shadow-lg); }

.about { background: linear-gradient(135deg, var(--off-white) 0%, #F0EDF8 100%); }
.about-content { max-width: 800px; margin: 0 auto; text-align: center; }

footer { background: var(--dark); color: var(--white); padding: 60px 0 24px; }
.footer-content { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 48px; margin-bottom: 48px; }
.footer-brand h3 { color: var(--white); margin-bottom: 16px; }
.footer-links h4 { color: var(--gold); margin-bottom: 16px; }
.footer-links ul { list-style: none; }
.footer-links li { margin-bottom: 12px; }
.footer-links a { color: rgba(255, 255, 255, 0.7); text-decoration: none; }
.footer-bottom { padding-top: 24px; border-top: 1px solid rgba(255, 255, 255, 0.1); text-align: center; color: rgba(255, 255, 255, 0.5); }

.toast { position: fixed; top: 90px; right: 32px; background: var(--white); padding: 20px 24px; border-radius: 16px; box-shadow: var(--shadow-lg); display: flex; align-items: center; gap: 12px; z-index: 3000; transform: translateX(400px); transition: transform 0.3s; border-left: 4px solid var(--success); }
.toast.show { transform: translateX(0); }

/* WhatsApp Flutuante */
.whatsapp-float {
    position: fixed; bottom: 30px; right: 30px; z-index: 999;
    width: 60px; height: 60px; background: #25D366; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
    transition: all 0.3s; animation: pulse 2s infinite;
}
.whatsapp-float:hover { transform: scale(1.1); box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6); }
@keyframes pulse { 0%, 100% { box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4); } 50% { box-shadow: 0 4px 20px rgba(37, 211, 102, 0.7); } }

@media (max-width: 968px) {
   .hero-content { grid-template-columns: 1fr; }
   .nav-links { display: none; }
   .footer-content { grid-template-columns: 1fr; }
}
</style>
</head>
<body>

@if (session('success'))
<div class="toast show" id="toast">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--success)" stroke-width="2">
        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
        <polyline points="22 4 12 14.01 9 11.01"/>
    </svg>
    <span>{{ session('success') }}</span>
</div>
@endif

<header id="header">
    <div class="container">
        <nav>
            <a href="{{ route('home') }}" class="logo">
                <svg viewBox="0 0 40 40" fill="none">
                    <circle cx="20" cy="20" r="18" stroke="url(#logoGradient)" stroke-width="2"/>
                    <path d="M20 10C15 10 12 15 12 20C12 25 15 30 20 30C25 30 28 25 28 20C28 15 25 10 20 10Z" fill="url(#logoGradient)"/>
                    <defs>
                        <linearGradient id="logoGradient" x1="0" y1="0" x2="40" y2="40">
                            <stop offset="0%" stop-color="#6B5B95"/>
                            <stop offset="100%" stop-color="#C9A961"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span>Espaço Isis Perfect Corpore</span>
            </a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#galeria">Resultados</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="{{ route('admin.agendamentos') }}" class="btn-primary">Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero" id="home">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Realce sua Beleza Natural</h1>
                <p>Tratamentos personalizados com tecnologia de ponta. Seu bem-estar e autoestima são nossa prioridade.</p>
                <div class="hero-buttons">
                    <a href="{{ route('agendar') }}" class="btn-primary">Agendar Avaliação</a>
                </div>
            </div>
            <div class="before-after-card">
                <div class="before-after-container">
                    <div class="before-image"></div>
                    <div class="after-image" id="heroAfterImage"></div>
                    <div class="ba-label before">Antes</div>
                    <div class="ba-label after">Depois</div>
                    <div class="ba-slider"><input type="range" min="0" max="100" value="50" id="heroSlider"></div>
                </div>
                <div class="card-title">Harmonização Facial</div>
            </div>
        </div>
    </div>
</section>

<section class="gallery" id="galeria">
    <div class="container">
        <div class="section-header">
            <h2>Resultados Reais</h2>
            <p>Transformações que elevam a autoestima. Veja alguns casos tratados em nossa clínica.</p>
        </div>
        <div class="gallery-grid" id="galleryGrid">
            @php
            $resultados = [
                ['titulo' => 'Limpeza de Pele Profunda', 'desc' => 'Remoção de cravos e hidratação intensiva'],
                ['titulo' => 'Microagulhamento', 'desc' => 'Estímulo de colágeno e redução de poros'],
                ['titulo' => 'Peeling Químico', 'desc' => 'Renovação celular e uniformização'],
                ['titulo' => 'Harmonização Facial', 'desc' => 'Contorno e definição de mandíbula'],
                ['titulo' => 'Dermaplaning', 'desc' => 'Esfoliação e remoção de pelos faciais'],
                ['titulo' => 'Tratamento Anti-Acne', 'desc' => 'Controle de oleosidade e cicatrização'],
            ];
            @endphp
            @foreach($resultados as $index => $r)
            <div class="gallery-card" data-index="{{ $index }}">
                <div class="gallery-ba">
                    <div class="gallery-before"></div>
                    <div class="gallery-after"></div>
                </div>
                <div class="gallery-info">
                    <h3>{{ $r['titulo'] }}</h3>
                    <p>{{ $r['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="servicos">
    <div class="container">
        <div class="section-header">
            <h2>Nossos Serviços</h2>
            <p>Procedimentos estéticos de alta performance</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <h3>Limpeza de Pele</h3>
                <p>Extração profunda, hidratação e revitalização.</p>
            </div>
            <div class="service-card">
                <h3>Harmonização Facial</h3>
                <p>Realce dos contornos naturais com técnicas modernas.</p>
            </div>
            <div class="service-card">
                <h3>Microagulhamento</h3>
                <p>Estímulo natural de colágeno. Reduz cicatrizes e linhas.</p>
            </div>
            <div class="service-card">
                <h3>Peelings Avançados</h3>
                <p>Renovação celular intensiva. Tratamento de manchas.</p>
            </div>
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