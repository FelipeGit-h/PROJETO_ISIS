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
            --primary: #6B5B95; 
            --primary-dark: #524673; 
            --gold: #C9A961;
            --white: #FFFFFF; 
            --off-white: #F8F7FC; 
            --gray: #6C6C7D; 
            --dark: #2D2A3E;
            --success: #22C55E; 
            --shadow-lg: 0 16px 48px rgba(107, 91, 149, 0.16);
        }

        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
        }

        html { 
            scroll-behavior: smooth; 
        }

        body { 
            font-family: 'Poppins', sans-serif; 
            color: var(--dark); 
            background: var(--white); 
            line-height: 1.6; 
        }

        h1, h2, h3 { 
            font-family: 'Playfair Display', serif; 
            color: var(--primary-dark); 
        }

        .container { 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 0 24px; 
        }

        header { 
            position: fixed; 
            top: 0; 
            width: 100%; 
            background: rgba(255, 255, 255, 0.95); 
            backdrop-filter: blur(10px); 
            z-index: 1000; 
            box-shadow: 0 2px 8px rgba(107, 91, 149, 0.08); 
        }

        nav { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 16px 0; 
        }

        .logo { 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            font-size: 1.25rem; 
            font-weight: 600; 
            color: var(--primary); 
            text-decoration: none; 
        }

        .logo svg { 
            width: 40px; 
            height: 40px; 
        }

        .nav-links { 
            display: flex; 
            gap: 32px; 
            list-style: none; 
            align-items: center; 
        }

        .nav-links a { 
            text-decoration: none; 
            color: var(--dark); 
            font-weight: 500; 
            transition: color 0.3s; 
        }

        .nav-links a:hover { 
            color: var(--primary); 
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white); 
            padding: 12px 28px; 
            border-radius: 50px; 
            border: none;
            font-weight: 600; 
            cursor: pointer; 
            transition: all 0.3s; 
            text-decoration: none; 
            display: inline-block;
        }

        .btn-primary:hover { 
            transform: translateY(-2px); 
            box-shadow: var(--shadow-lg); 
        }

        .hero { 
            padding: 140px 0 80px; 
            background: linear-gradient(135deg, var(--off-white) 0%, #F0EDF8 100%); 
            position: relative; 
        }

        .hero-content { 
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 60px; 
            align-items: center; 
        }

        .hero-text h1 {
            font-size: 3.5rem; 
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent;
        }

        .hero-text p { 
            font-size: 1.1rem; 
            color: var(--gray); 
            margin-bottom: 32px; 
        }

        .hero-buttons { 
            display: flex; 
            gap: 16px; 
        }

        .before-after-card { 
            background: var(--white); 
            border-radius: 24px; 
            padding: 20px; 
            box-shadow: var(--shadow-lg); 
        }

        .before-after-container { 
            position: relative; 
            width: 100%; 
            aspect-ratio: 4/3; 
            border-radius: 16px; 
            overflow: hidden; 
        }

        .before-image, .after-image { 
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
        }

        .before-image { 
            background: linear-gradient(135deg, #E0D4C3 0%, #D4B5A0 100%); 
        }

        .after-image { 
            background: linear-gradient(135deg, #F5E6D3 0%, #E8C9A0 100%); 
            clip-path: inset(0 50% 0 0); 
            transition: clip-path 0.3s; 
        }

        .ba-label { 
            position: absolute; 
            top: 16px; 
            padding: 8px 16px; 
            background: rgba(255,255,255,0.95); 
            border-radius: 50px; 
            font-weight: 600; 
            font-size: 0.85rem; 
            color: var(--primary); 
        }

        .ba-label.before { left: 16px; } 
        .ba-label.after { right: 16px; }

        .ba-slider { 
            position: absolute; 
            bottom: 20px; 
            left: 50%; 
            transform: translateX(-50%); 
            width: 60%; 
        }

        .ba-slider input { 
            width: 100%; 
            accent-color: var(--gold); 
        }

        .card-title { 
            text-align: center; 
            margin-top: 16px; 
            font-weight: 600; 
            color: var(--primary-dark); 
        }

        section { 
            padding: 80px 0; 
        }

        .section-header { 
            text-align: center; 
            margin-bottom: 56px; 
        }

        .section-header h2 { 
            font-size: 2.5rem; 
            margin-bottom: 16px; 
        }

        /* Galeria Antes/Depois com Autoplay */
        .gallery { 
            background: var(--off-white); 
        }

        .gallery-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); 
            gap: 32px; 
        }

        .gallery-card { 
            background: var(--white); 
            border-radius: 20px; 
            overflow: hidden; 
            box-shadow: 0 2px 8px rgba(107, 91, 149, 0.08); 
            transition: all 0.3s; 
        }

        .gallery-card:hover { 
            transform: translateY(-8px); 
            box-shadow: var(--shadow-lg); 
        }

        .gallery-ba { 
            position: relative; 
            aspect-ratio: 4/3; 
            overflow: hidden; 
        }

        .gallery-before, .gallery-after { 
            position: absolute; 
            width: 100%; 
            height: 100%; 
        }

        .gallery-before { 
            background: linear-gradient(135deg, #E8DCC8 0%, #D4B5A0 100%); 
        }

        .gallery-after { 
            background: linear-gradient(135deg, #F8E8D0 0%, #F0D0A0 100%); 
            clip-path: inset(0 100% 0 0); 
            transition: clip-path 1s ease; 
        }

        .gallery-card.active .gallery-after { 
            clip-path: inset(0 0 0 0); 
        }

        .gallery-info { 
            padding: 20px; 
        }

        .gallery-info h3 { 
            font-size: 1.1rem; 
            margin-bottom: 8px; 
        }

        .gallery-info p { 
            color: var(--gray); 
            font-size: 0.9rem; 
        }

        .services-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); 
            gap: 32px; 
        }

        .service-card { 
            background: var(--white); 
            border-radius: 20px; 
            padding: 40px 32px; 
            text-align: center; 
            box-shadow: 0 2px 8px rgba(107, 91, 149, 0.08); 
            transition: all 0.3s; 
            border: 2px solid transparent; 
        }

        .service-card:hover { 
            border-color: var(--gold); 
            transform: translateY(-8px); 
            box-shadow: var(--shadow-lg); 
        }

        .about { 
            background: linear-gradient(135deg, var(--off-white) 0%, #F0EDF8 100%); 
        }

        .about-content { 
            max-width: 800px; 
            margin: 0 auto; 
            text-align: center; 
        }

        footer { 
            background: var(--dark); 
            color: var(--white); 
            padding: 60px 0 24px; 
        }

        .footer-content { 
            display: grid; 
            grid-template-columns: 2fr 1fr 1fr; 
            gap: 48px; 
            margin-bottom: 48px; 
        }

        .footer-brand h3 { 
            color: var(--white); 
            margin-bottom: 16px; 
        }

        .footer-links h4 { 
            color: var(--gold); 
            margin-bottom: 16px; 
        }

        .footer-links ul { 
            list-style: none; 
        }

        .footer-links li { 
            margin-bottom: 12px; 
        }

        .footer-links a { 
            color: rgba(255, 255, 255, 0.7); 
            text-decoration: none; 
        }

        .footer-bottom { 
            padding-top: 24px; 
            border-top: 1px solid rgba(255, 255, 255, 0.1); 
            text-align: center; 
            color: rgba(255, 255, 255, 0.5); 
        }

        .toast { 
            position: fixed; 
            top: 90px; 
            right: 32px; 
            background: var(--success); 
            color: white; 
            padding: 16px 24px; 
            border-radius: 8px; 
            box-shadow: var(--shadow-lg); 
            z-index: 9999; 
            display: none; 
        }

        .toast.show { 
            display: block; 
            animation: slideIn 0.3s ease; 
        }

        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        /* Menu Mobile */
        .menu-toggle { 
            display: none; 
            font-size: 24px; 
            cursor: pointer; 
        }

        @media (max-width: 768px) {
            .nav-links { 
                position: absolute; 
                top: 100%; 
                left: 0; 
                right: 0; 
                background: white; 
                flex-direction: column; 
                gap: 16px; 
                padding: 16px; 
                box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
                display: none; 
            }
            .nav-links.active { display: flex; }
            .menu-toggle { display: block; }
            .hero-content { grid-template-columns: 1fr; }
            .hero-text h1 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

    <!-- Alerta de sucesso -->
    @if(session()->has('agendamento_concluido'))
    <div class="toast show" id="toast">
        ✅ Agendamento concluído com sucesso!
    </div>
    @endif

    <!-- Cabeçalho -->
    <header>
        <nav class="container">
            <a href="#inicio" class="logo">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2.2l3 6.2 6.8 1-4.8 4.7 1.1 6.7-6.1-3.2-6.1 3.2 1.1-6.7L2.2 9.4l6.8-1z"/>
                </svg>
                <span>Isis Perfect Corpore</span>
            </a>

            <ul class="nav-links" id="navLinks">
                <li><a href="#inicio">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#resultados">Resultados</a></li>
                <li><a href="#contato">Contato</a></li>
                <!-- Botão alterado para Login -->
                <li><a href="http://localhost:8000/admin" class="btn-primary">Login</a></li>
            </ul>

            <div class="menu-toggle" id="menuToggle">☰</div>
        </nav>
    </header>

    <!-- Seção Início -->
    <section class="hero" id="inicio">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Beleza e Bem-Estar em um só lugar</h1>
                    <p>Cuidados especiais para realçar sua beleza natural e elevar sua autoestima. Tecnologia avançada e atendimento personalizado em Goiânia.</p>
                    <div class="hero-buttons">
                        <!-- Botão alterado para rota de agendamento -->
                        <a href="http://localhost:8000/agendar" class="btn-primary">Agende sua Sessão</a>
                        <a href="#servicos" class="btn-primary" style="background: transparent; border: 2px solid var(--primary); color: var(--primary);">Nossos Serviços</a>
                    </div>
                </div>

                <div class="before-after-card">
                    <div class="before-after-container">
                        <div class="before-image"></div>
                        <div class="after-image"></div>
                        <div class="ba-label before">Antes</div>
                                                <div class="ba-label after">Depois</div>
                        <div class="ba-slider">
                            <input type="range" min="0" max="100" value="50" id="slider">
                        </div>
                    </div>
                    <h3 class="card-title">Resultados Reais</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ✅ SEÇÃO SOBRE NÓS -->
    <section id="sobre" class="about">
        <div class="container">
            <div class="section-header">
                <h2>Sobre Nós</h2>
                <p>Conheça um pouco da nossa história e compromisso com você</p>
            </div>
            <div class="about-content">
                <h3 style="color: var(--primary); margin-bottom: 20px; font-size: 1.8rem;">Bem-vindo ao Espaço Isis Perfect Corpore</h3>
                <p style="margin-bottom: 16px; font-size: 1.05rem;">
                    Somos um centro de estética e bem-estar dedicado a oferecer tratamentos de alta qualidade, unindo ciência, tecnologia e cuidado humano. Nossa missão é proporcionar a você uma experiência única, onde beleza e saúde caminham lado a lado.
                </p>
                <p style="margin-bottom: 24px; font-size: 1.05rem;">
                    Contamos com uma equipe de profissionais altamente capacitados, prontos para indicar o melhor tratamento para o seu objetivo, sempre com segurança e excelência.
                </p>
                <div class="services-grid" style="max-width: 600px; margin: 0 auto 32px;">
                    <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <span style="color: var(--gold); font-size: 1.2rem;">✦</span>
                        <span>Ambiente confortável e seguro</span>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <span style="color: var(--gold); font-size: 1.2rem;">✦</span>
                        <span>Produtos certificados e aprovados</span>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <span style="color: var(--gold); font-size: 1.2rem;">✦</span>
                        <span>Tecnologia de ponta</span>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <span style="color: var(--gold); font-size: 1.2rem;">✦</span>
                        <span>Atendimento personalizado</span>
                    </div>
                </div>
                <a href="#contato" class="btn-primary">Conheça nossa Estrutura</a>
            </div>
        </div>
    </section>

    <!-- ✅ SEÇÃO SERVIÇOS -->
    <section id="servicos">
        <div class="container">
            <div class="section-header">
                <h2>Nossos Serviços</h2>
                <p>Tratamentos desenvolvidos para cuidar de você da melhor forma</p>
            </div>

            <div class="services-grid">
                <!-- Serviço 1: Limpeza de Pele Profunda -->
                <div class="service-card">
                    <div style="width: 64px; height: 64px; background: rgba(107, 91, 149, 0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.5rem;">✨</div>
                    <h3 style="margin-bottom: 12px; font-size: 1.2rem;">Limpeza de Pele Profunda</h3>
                    <p style="color: var(--gray); font-size: 0.95rem;">
                        Remove impurezas, cravos e células mortas, desobstruindo os poros. Deixa a pele mais limpa, saudável, com viço e brilho natural, adequada para todos os tipos de pele.
                    </p>
                </div>

                <!-- Serviço 2: Microagulhamento -->
                <div class="service-card">
                    <div style="width: 64px; height: 64px; background: rgba(107, 91, 149, 0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.5rem;">🧬</div>
                    <h3 style="margin-bottom: 12px; font-size: 1.2rem;">Microagulhamento</h3>
                    <p style="color: var(--gray); font-size: 0.95rem;">
                        Estimula a produção natural de colágeno e elastina. Trata cicatrizes de acne, reduz linhas de expressão, fecha poros e melhora significativamente a textura e firmeza da pele.
                    </p>
                </div>

                <!-- Serviço 3: Peeling Químico -->
                <div class="service-card">
                    <div style="width: 64px; height: 64px; background: rgba(107, 91, 149, 0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.5rem;">🌿</div>
                    <h3 style="margin-bottom: 12px; font-size: 1.2rem;">Peeling Químico</h3>
                    <p style="color: var(--gray); font-size: 0.95rem;">
                        Renovação celular controlada que clareia manchas, uniformiza o tom da pele, suaviza linhas finas e trata danos causados pelo sol. Resultados visíveis desde a primeira sessão.
                    </p>
                </div>

                <!-- Serviço 4: Harmonização Facial -->
                <div class="service-card">
                    <div style="width: 64px; height: 64px; background: rgba(107, 91, 149, 0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.5rem;">💫</div>
                    <h3 style="margin-bottom: 12px; font-size: 1.2rem;">Harmonização Facial</h3>
                    <p style="color: var(--gray); font-size: 0.95rem;">
                        Valoriza os traços naturais equilibrando o rosto. Define contornos, preenche sulcos, devolve volume perdido e melhora a simetria, com resultado natural e elegante.
                    </p>
                </div>

                <!-- Serviço 5: Dermaplaning -->
                <div class="service-card">
                    <div style="width: 64px; height: 64px; background: rgba(107, 91, 149, 0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.5rem;">✦</div>
                    <h3 style="margin-bottom: 12px; font-size: 1.2rem;">Dermaplaning</h3>
                    <p style="color: var(--gray); font-size: 0.95rem;">
                        Remoção de pelinhos e células mortas → pele de vidro, brilho e maquiagem perfeita.
                    </p>
                </div>

                <!-- Serviço 6: Tratamento Anti-Acne -->
                <div class="service-card">
                    <div style="width: 64px; height: 64px; background: rgba(107, 91, 149, 0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.5rem;">⚕️</div>
                    <h3 style="margin-bottom: 12px; font-size: 1.2rem;">Tratamento Anti-Acne</h3>
                    <p style="color: var(--gray); font-size: 0.95rem;">
                        Controle da oleosidade, redução de espinhas e marcas, pele limpa e saudável.
                    </p>
                </div>
            </div>

            <div class="text-center" style="margin-top: 64px;">
                <!-- Botão alterado para rota de agendamento -->
                <a href="http://localhost:8000/agendar" class="btn-primary">Agendar Avaliação</a>
            </div>
        </div>
    </section>

    <!-- ✅ SEÇÃO RESULTADOS / GALERIA -->
    <section id="resultados" class="gallery">
        <div class="container">
            <div class="section-header">
                <h2>Resultados Reais</h2>
                <p>Veja a transformação que nossos tratamentos proporcionam</p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-ba">
                        <div class="gallery-before"></div>
                        <div class="gallery-after"></div>
                    </div>
                    <div class="gallery-info">
                        <h3>Rejuvenescimento Facial</h3>
                        <p>Melhora significativa na textura e firmeza da pele</p>
                    </div>
                </div>

                <div class="gallery-card">
                    <div class="gallery-ba">
                        <div class="gallery-before"></div>
                        <div class="gallery-after"></div>
                    </div>
                    <div class="gallery-info">
                        <h3>Clareamento de Manchas</h3>
                        <p>Tom de pele uniforme e mais iluminado</p>
                    </div>
                </div>

                <div class="gallery-card">
                    <div class="gallery-ba">
                        <div class="gallery-before"></div>
                        <div class="gallery-after"></div>
                    </div>
                    <div class="gallery-info">
                        <h3>Tratamento de Acne</h3>
                        <p>Redução de inflamações e marcas pós-acne</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ✅ SEÇÃO AGENDAR / CONTATO -->
    <section id="contato">
        <div class="container">
            <div class="section-header">
                <h2>Agende sua Visita</h2>
                <p>Estamos prontos para atender você com todo carinho e segurança</p>
            </div>

            <div style="max-width: 800px; margin: 0 auto; background: var(--white); border-radius: 24px; padding: 40px; box-shadow: 0 4px 20px rgba(107, 91, 149, 0.1);">
                <div class="services-grid">
                    <div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 20px; color: var(--primary-dark);">Entre em Contato</h3>
                        <p style="color: var(--gray); margin-bottom: 24px;">
                            Nossa equipe está disponível para tirar dúvidas e agendar o seu horário.
                        </p>
                        <ul style="list-style: none; color: var(--gray); line-height: 2;">
                            <li style="display: flex; align-items: center; gap: 8px;">📍 Goiânia - GO</li>
                            <li style="display: flex; align-items: center; gap: 8px;">⏰ Seg a Sex: 08h às 19h | Sáb: 08h às 14h</li>
                            <li style="display: flex; align-items: center; gap: 8px;">📞 <a href="https://wa.me/5562993327376" style="color: var(--gold); text-decoration: none; font-weight: 500;">62 99332-7376</a></li>
                        </ul>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center;">
                        <a href="https://wa.me/5562993327376?text=Olá! Gostaria de agendar uma avaliação." target="_blank" class="btn-primary" style="background: #25d366; width: 100%; text-align: center;">
                            📱 Agendar pelo WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ✅ RODAPÉ -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3>Isis Perfect Corpore</h3>
                    <p style="color: rgba(255,255,255,0.7);">
                        Estética avançada com tecnologia e carinho em Goiânia.
                    </p>
                </div>
                <div class="footer-links">
                    <h4>Links Rápidos</h4>
                    <ul>
                        <li><a href="#inicio">Início</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="http://localhost:8000/agendar">Agendar</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contato</h4>
                    <p style="color: rgba(255,255,255,0.7);">
                        Goiânia - GO<br>
                        <a href="https://wa.me/5562993327376" style="color: var(--gold); text-decoration: none;">WhatsApp: 62 99332-7376</a>
                    </p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2026 Espaço Isis Perfect Corpore. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- ✅ BOTÃO WHATSAPP FLUTUANTE -->
    <a href="https://wa.me/5562993327376?text=Olá! Gostaria de agendar uma avaliação." class="whatsapp-float" target="_blank" style="position: fixed; bottom: 2rem; right: 2rem; width: 4rem; height: 4rem; background-color: #25d366; border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 999; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transition: all 0.3s ease;">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0.16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
    </a>

    <!-- ✅ SCRIPTS -->
    <script>
        // Header scroll efeito
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            header.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Menu Mobile
        const btnMenu = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        btnMenu.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Fechar menu ao clicar no link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => navLinks.classList.remove('active'));
        });

        // Slider Antes/Depois principal
        const slider = document.getElementById('slider');
        const afterImage = document.querySelector('.after-image');
        if(slider && afterImage) {
            slider.addEventListener('input', () => {
                afterImage.style.clipPath = `inset(0 ${100 - slider.value}% 0 0)`;
            });
        }

        // Galeria autoplay CORRIGIDO
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
