<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Completa de Microsoft PowerPoint - Fluent Design</title>
    <style>
        /* Variables de diseño Fluent para PowerPoint */
        :root {
            --primary-orange: #d24726;
            --primary-dark: #b33d1e;
            --secondary-light: #ff6b47;
            --accent-green: #107c10;
            --accent-blue: #0078d4;
            --accent-purple: #881798;
            --neutral-lightest: #faf9f8;
            --neutral-light: #f3f2f1;
            --neutral-mid: #edebe9;
            --neutral-dark: #605e5c;
            --neutral-darkest: #323130;
            --text-primary: #323130;
            --text-secondary: #605e5c;
            --ppt-light: #fff5f0;
            --ppt-gradient: linear-gradient(135deg, #d24726 0%, #ff6b47 100%);
            --card-shadow: 0 1.6px 3.6px 0 rgba(0,0,0,.132), 0 0.3px 0.9px 0 rgba(0,0,0,.108);
            --card-shadow-hover: 0 6.4px 14.4px 0 rgba(0,0,0,.132), 0 1.2px 3.6px 0 rgba(0,0,0,.108);
            --glass-bg: rgba(243, 242, 241, 0.72);
            --glass-border: rgba(255, 255, 255, 0.18);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', sans-serif;
            background: linear-gradient(135deg, var(--neutral-lightest) 0%, var(--ppt-light) 100%);
            color: var(--text-primary);
            line-height: 1.5;
            overflow-x: hidden;
        }
        
        /* Header con efecto Fluent */
        .header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: var(--glass-bg);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 1px solid var(--glass-border);
            padding: 12px 0;
        }
        
        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            font-size: 18px;
            color: var(--primary-orange);
        }
        
        .logo-icon {
            width: 32px;
            height: 32px;
            background: var(--ppt-gradient);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
        }
        
        .nav {
            display: flex;
            list-style: none;
            gap: 8px;
        }
        
        .nav-item {
            padding: 8px 16px;
            border-radius: 4px;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 400;
        }
        
        .nav-item:hover {
            background: rgba(210, 71, 38, 0.1);
            color: var(--primary-orange);
        }
        
        /* Hero Section */
        .hero {
            padding: 80px 24px 120px;
            text-align: center;
            background: var(--ppt-gradient);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255,255,255,0.1) 0%, transparent 50%);
            animation: float 20s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .hero-content {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 48px;
            font-weight: 300;
            margin-bottom: 24px;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 14px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            backdrop-filter: blur(10px);
        }
        
        .cta-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        /* Contenedor principal */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 24px;
        }
        
        /* Secciones */
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 36px;
            font-weight: 300;
            color: var(--text-primary);
            margin-bottom: 16px;
        }
        
        .section-title p {
            font-size: 18px;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Cards con efecto Fluent */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            padding: 32px;
            box-shadow: var(--card-shadow);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--neutral-mid);
            position: relative;
            overflow: hidden;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--ppt-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-4px);
            box-shadow: var(--card-shadow-hover);
        }
        
        .card:hover::before {
            transform: scaleX(1);
        }
        
        .card-icon {
            width: 48px;
            height: 48px;
            background: var(--ppt-gradient);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            margin-bottom: 20px;
        }
        
        .card h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--text-primary);
        }
        
        .card p {
            color: var(--text-secondary);
            line-height: 1.6;
        }
        
        /* Sección de introducción expandida */
        .intro-section {
            background: var(--neutral-lightest);
        }
        
        .intro-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .intro-text h3 {
            font-size: 28px;
            font-weight: 300;
            margin-bottom: 20px;
            color: var(--primary-orange);
        }
        
        .intro-text p {
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 20px;
            color: var(--text-secondary);
        }
        
        .intro-image {
            background: linear-gradient(45deg, var(--ppt-light), var(--neutral-light));
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            box-shadow: var(--card-shadow);
            border: 2px dashed var(--primary-orange);
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }
        
        .intro-image:hover {
            opacity: 1;
        }
        
        .intro-image .placeholder-text {
            color: var(--primary-orange);
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 12px;
        }
        
        .intro-image .placeholder-desc {
            color: var(--text-secondary);
            font-size: 14px;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 40px;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: var(--card-shadow);
        }
        
        .stat-number {
            font-size: 32px;
            font-weight: 300;
            color: var(--primary-orange);
            display: block;
        }
        
        .stat-label {
            font-size: 14px;
            color: var(--text-secondary);
            margin-top: 4px;
        }
        
        /* Sección de diseño avanzada */
        .design-section {
            background: var(--ppt-light);
        }
        
        .design-principles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
            margin-bottom: 60px;
        }
        
        .principle-card {
            background: white;
            border-radius: 8px;
            padding: 24px;
            box-shadow: var(--card-shadow);
            border-left: 4px solid var(--primary-orange);
            transition: all 0.3s ease;
        }
        
        .principle-card:hover {
            transform: translateX(4px);
            box-shadow: var(--card-shadow-hover);
        }
        
        .principle-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }
        
        .principle-icon {
            width: 32px;
            height: 32px;
            background: var(--primary-orange);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
        }
        
        .principle-name {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary-orange);
        }
        
        /* Galería de ejemplos de diseño */
        .design-gallery {
            margin-top: 60px;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
        
        .gallery-item {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: translateY(-4px);
            box-shadow: var(--card-shadow-hover);
        }
        
        .gallery-image {
            height: 180px;
            background: linear-gradient(45deg, var(--ppt-light), var(--neutral-light));
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 2px dashed var(--primary-orange);
            position: relative;
        }
        
        .gallery-image .placeholder-content {
            text-align: center;
            color: var(--primary-orange);
        }
        
        .gallery-image .placeholder-icon {
            font-size: 36px;
            margin-bottom: 8px;
            opacity: 0.7;
        }
        
        .gallery-image .placeholder-text {
            font-size: 12px;
            opacity: 0.8;
        }
        
        .gallery-content {
            padding: 16px;
        }
        
        .gallery-title {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }
        
        .gallery-desc {
            font-size: 12px;
            color: var(--text-secondary);
            line-height: 1.4;
        }
        
        /* Tutorial cards mejoradas */
        .tutorial-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--neutral-mid);
        }
        
        .tutorial-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--card-shadow-hover);
        }
        
        .tutorial-image {
            height: 200px;
            background: var(--ppt-gradient);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 2px dashed rgba(255,255,255,0.3);
        }
        
        .tutorial-image .placeholder-content {
            text-align: center;
            color: white;
        }
        
        .tutorial-image .placeholder-icon {
            font-size: 48px;
            margin-bottom: 12px;
            opacity: 0.8;
        }
        
        .tutorial-image .placeholder-text {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .tutorial-content {
            padding: 24px;
        }
        
        .tutorial-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }
        
        .difficulty-badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .difficulty-beginner {
            background: rgba(16, 124, 16, 0.1);
            color: var(--accent-green);
        }
        
        .difficulty-intermediate {
            background: rgba(0, 120, 212, 0.1);
            color: var(--accent-blue);
        }
        
        .difficulty-advanced {
            background: rgba(136, 23, 152, 0.1);
            color: var(--accent-purple);
        }
        
        /* Sección de presentación interactiva */
        .interactive-demo {
            background: var(--neutral-darkest);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .demo-container {
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .slide-preview {
            background: white;
            border-radius: 12px;
            height: 350px;
            margin: 40px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-primary);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .slide-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        .slide-btn {
            background: var(--primary-orange);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .slide-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        .slide-btn:disabled {
            background: var(--neutral-dark);
            cursor: not-allowed;
            transform: none;
        }
        
        .slide-counter {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.8);
            min-width: 120px;
        }
        
        /* Tips section mejorada */
        .tips-container {
            display: grid;
            gap: 24px;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .tip-card {
            background: white;
            border-radius: 8px;
            padding: 32px;
            box-shadow: var(--card-shadow);
            border-left: 4px solid var(--primary-orange);
            transition: all 0.2s ease;
        }
        
        .tip-card:hover {
            transform: translateX(4px);
            box-shadow: var(--card-shadow-hover);
        }
        
        .tip-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        
        .tip-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-orange);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
        }
        
        .tip-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--text-primary);
        }
        
        /* Advanced features highlight */
        .feature-highlight {
            background: white;
            border-radius: 12px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: var(--card-shadow);
            border: 1px solid var(--neutral-mid);
            position: relative;
        }
        
        .feature-highlight::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: var(--ppt-gradient);
            border-radius: 12px 12px 0 0;
        }
        
        .feature-highlight h4 {
            font-size: 24px;
            font-weight: 600;
            color: var(--primary-orange);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .feature-highlight-icon {
            font-size: 28px;
        }
        
        .feature-list {
            list-style: none;
            margin: 20px 0;
        }
        
        .feature-list li {
            padding: 8px 0;
            padding-left: 24px;
            position: relative;
        }
        
        .feature-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-orange);
            font-weight: bold;
        }
        
        /* Sección de recursos mejorada */
        .resources-section {
            background: var(--ppt-light);
        }
        
        .resource-card {
            background: white;
            border-radius: 12px;
            padding: 32px;
            text-align: center;
            box-shadow: var(--card-shadow);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--neutral-mid);
        }
        
        .resource-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--card-shadow-hover);
        }
        
        .resource-icon {
            width: 64px;
            height: 64px;
            background: var(--ppt-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            margin: 0 auto 20px;
        }
        
        .resource-card h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--text-primary);
        }
        
        /* Footer */
        .footer {
            background: var(--neutral-darkest);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-section h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: white;
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section li {
            margin-bottom: 12px;
        }
        
        .footer-section a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .footer-section a:hover {
            color: white;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
        }
        
        /* Scroll progress indicator */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: var(--ppt-gradient);
            z-index: 1001;
            transition: width 0.1s ease;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }
            
            .intro-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .header-container {
                padding: 0 16px;
            }
            
            .nav {
                display: none;
            }
            
            .cards-grid {
                grid-template-columns: 1fr;
            }
            
            .design-principles {
                grid-template-columns: 1fr;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }
        
        /* Animaciones suaves */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="progress-bar" id="progressBar"></div>
    
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <div class="logo-icon">📊</div>
                <span>Guía Completa de PowerPoint</span>
            </div>
            <nav class="nav">
                <a href="#inicio" class="nav-item">Inicio</a>
                <a href="#introduccion" class="nav-item">Introducción</a>
                <a href="#funcionalidades" class="nav-item">Funcionalidades</a>
                <a href="#diseno" class="nav-item">Diseño</a>
                <a href="#tutoriales" class="nav-item">Tutoriales</a>
                <a href="#consejos" class="nav-item">Consejos</a>
                <a href="#recursos" class="nav-item">Recursos</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="inicio">
        <div class="hero-content">
            <h1>Crea Presentaciones que Impacten y Persuadan</h1>
            <p>La guía más completa para convertirte en un experto en PowerPoint. Desde diseño visual hasta técnicas de storytelling y presentación profesional.</p>
            <a href="#introduccion" class="cta-button">
                <span>Comenzar Aprendizaje</span>
                <span>→</span>
            </a>
        </div>
    </section>

    <!-- Introducción Expandida -->
    <section class="section intro-section" id="introduccion">
        <div class="container">
            <div class="section-title">
                <h2>¿Por qué Dominar PowerPoint?</h2>
                <p>Descubre por qué PowerPoint sigue siendo la herramienta más poderosa para comunicar ideas y persuadir audiencias</p>
            </div>
            <div class="intro-content">
                <div class="intro-text">
                    <h3>El arte de la comunicación visual</h3>
                    <p>Microsoft PowerPoint ha transformado la forma en que comunicamos ideas desde 1987. Con más de 500 millones de usuarios activos, PowerPoint no es solo una herramienta de presentaciones, sino la plataforma universal para el storytelling empresarial, educativo y creativo.</p>
                    <p>Desde pitch decks que consiguen financiamiento millonario hasta conferencias TED que cambian el mundo, PowerPoint es el lienzo donde las ideas toman forma visual. Dominar sus capacidades avanzadas de diseño, animación, interactividad y narrativa es esencial en la economía del conocimiento actual.</p>
                    <p>Las presentaciones efectivas pueden influir decisiones, cerrar ventas, educar masas y cambiar perspectivas. Según estudios, los profesionales que dominan PowerPoint tienen 67% más probabilidades de liderar proyectos estratégicos y ganan en promedio 18% más que sus pares.</p>
                    
                    <div class="stats-grid">
                        <div class="stat-item">
                            <span class="stat-number">500M+</span>
                            <span class="stat-label">Usuarios Activos</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30M+</span>
                            <span class="stat-label">Presentaciones Diarias</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">92%</span>
                            <span class="stat-label">Fortune 500 Companies</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">+18%</span>
                            <span class="stat-label">Incremento Salarial</span>
                        </div>
                    </div>
                </div>
                <div class="intro-image">
                    <div class="placeholder-content">
                        <img src="IMG/Power.jpg" alt="Interfaz de PowerPoint 365" width="500" height="300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funcionalidades Principales -->
    <section class="section" id="funcionalidades">
        <div class="container">
            <div class="section-title">
                <h2>Funcionalidades Principales</h2>
                <p>Explora las características más poderosas que hacen de PowerPoint la herramienta preferida por comunicadores profesionales</p>
            </div>
            <div class="cards-grid">
                <div class="card fade-in">
                    <div class="card-icon">🎨</div>
                    <h3>Diseño Visual Avanzado</h3>
                    <p>Utiliza Designer AI, temas dinámicos, transiciones cinematográficas y herramientas de alineación inteligente para crear presentaciones visualmente impactantes.</p>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">🎬</div>
                    <h3>Animaciones y Multimedia</h3>
                    <p>Integra videos 4K, audio de alta calidad, animaciones complejas con trayectorias de movimiento y efectos 3D para presentaciones inmersivas.</p>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">📊</div>
                    <h3>Visualización de Datos</h3>
                    <p>Conecta con Excel, Power BI y fuentes externas para crear gráficos dinámicos, infografías interactivas y dashboards en tiempo real.</p>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">🤝</div>
                    <h3>Colaboración Inteligente</h3>
                    <p>Coautoría en tiempo real, comentarios contextuales, control de versiones automático e integración completa con Microsoft Teams.</p>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">🎤</div>
                    <h3>Herramientas de Presentador</h3>
                    <p>Vista del presentador mejorada, teleprompter integrado, grabación de pantalla con cámara, y coaching con IA para mejorar tu delivery.</p>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">🌐</div>
                    <h3>Accesibilidad y Distribución</h3>
                    <p>Generación automática de subtítulos, verificación de accesibilidad, exportación a múltiples formatos y streaming en vivo integrado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Diseño Expandida -->
    <section class="section design-section" id="diseno">
        <div class="container">
            <div class="section-title">
                <h2>Principios de Diseño para Presentaciones</h2>
                <p>Domina los fundamentos del diseño visual y la comunicación efectiva para crear presentaciones que cautiven</p>
            </div>
            
            <div class="design-principles">
                <div class="principle-card fade-in">
                    <div class="principle-header">
                        <div class="principle-icon">🎨</div>
                        <div class="principle-name">Psicología del Color</div>
                    </div>
                    <p>Los colores evocan emociones específicas. El azul transmite confianza (ideal para finanzas), el rojo urgencia (perfecto para llamadas a la acción), el verde crecimiento (excelente para sostenibilidad). Crea paletas coherentes que refuercen tu mensaje.</p>
                </div>
                
                <div class="principle-card fade-in">
                    <div class="principle-header">
                        <div class="principle-icon">✏️</div>
                        <div class="principle-name">Jerarquía Tipográfica</div>
                    </div>
                    <p>Utiliza máximo 2 fuentes por presentación. Establece jerarquía clara: títulos grandes (36-44pt), subtítulos medianos (24-32pt), texto cuerpo legible (18-24pt). Sans-serif para pantallas, serif para elegancia.</p>
                </div>
                
                <div class="principle-card fade-in">
                    <div class="principle-header">
                        <div class="principle-icon">📐</div>
                        <div class="principle-name">Regla de los Tercios</div>
                    </div>
                    <p>Divide mentalmente cada diapositiva en 9 secciones iguales. Coloca elementos importantes en las intersecciones para crear composiciones dinámicas y naturalmente atractivas al ojo humano.</p>
                </div>
                
                <div class="principle-card fade-in">
                    <div class="principle-header">
                        <div class="principle-icon">⚖️</div>
                        <div class="principle-name">Equilibrio y Espaciado</div>
                    </div>
                    <p>El espacio en blanco es tu aliado, no tu enemigo. Permite que el contenido "respire". Usa márgenes generosos (10-15% del slide) y mantén consistencia en espaciado entre elementos.</p>
                </div>
                
                <div class="principle-card fade-in">
                    <div class="principle-header">
                        <div class="principle-icon">🔄</div>
                        <div class="principle-name">Consistencia Visual</div>
                    </div>
                    <p>Establece un sistema de diseño: mismas fuentes, colores, estilos de botón, alineación y espaciado en toda la presentación. La consistencia construye credibilidad y profesionalismo.</p>
                </div>
                
                <div class="principle-card fade-in">
                    <div class="principle-header">
                        <div class="principle-icon">📱</div>
                        <div class="principle-name">Diseño Responsive</div>
                    </div>
                    <p>Diseña pensando en múltiples dispositivos. Tus slides pueden verse en proyectores, laptops, tablets o teléfonos. Mantén elementos principales en el centro y usa tamaños de fuente generosos.</p>
                </div>
            </div>
            
            <!-- Galería de Ejemplos de Diseño -->
            <div class="design-gallery">
                <div class="section-title">
                    <h3>Galería de Ejemplos de Diseño</h3>
                    <p>Inspiración visual para diferentes tipos de presentaciones</p>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item fade-in">
                        <div class="gallery-image">
                            <div class="placeholder-content">
                                <div class="placeholder-icon">💼</div>
                                <div class="placeholder-text">Slide Corporativo</div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-title">Presentación Corporativa</div>
                            <div class="gallery-desc">Diseño limpio y profesional con colores corporativos, tipografía serif elegante</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item fade-in">
                        <div class="gallery-image">
                            <div class="placeholder-content">
                                <div class="placeholder-icon">🚀</div>
                                <div class="placeholder-text">Pitch Deck</div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-title">Startup Pitch Deck</div>
                            <div class="gallery-desc">Diseño dinámico con gradientes modernos, iconos vectoriales y animaciones sutiles</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item fade-in">
                        <div class="gallery-image">
                            <div class="placeholder-content">
                                <div class="placeholder-icon">📚</div>
                                <div class="placeholder-text">Slide Educativo</div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-title">Contenido Educativo</div>
                            <div class="gallery-desc">Diseño amigable con ilustraciones, colores cálidos y elementos interactivos</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item fade-in">
                        <div class="gallery-image">
                            <div class="placeholder-content">
                                <div class="placeholder-icon">📈</div>
                                <div class="placeholder-text">Dashboard</div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-title">Dashboard Ejecutivo</div>
                            <div class="gallery-desc">Visualización de datos con gráficos interactivos, KPIs destacados</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item fade-in">
                        <div class="gallery-image">
                            <div class="placeholder-content">
                                <div class="placeholder-icon">🎭</div>
                                <div class="placeholder-text">Slide Creativo</div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-title">Presentación Creativa</div>
                            <div class="gallery-desc">Diseño experimental con tipografía bold, colores vibrantes</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item fade-in">
                        <div class="gallery-image">
                            <div class="placeholder-content">
                                <div class="placeholder-icon">🔬</div>
                                <div class="placeholder-text">Slide Técnico</div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-title">Presentación Técnica</div>
                            <div class="gallery-desc">Diseño minimalista con diagramas complejos, esquemas técnicos</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tutoriales Mejorados -->
    <section class="section" id="tutoriales">
        <div class="container">
            <div class="section-title">
                <h2>Tutoriales Paso a Paso</h2>
                <p>Aprende con nuestros tutoriales estructurados desde diseño básico hasta técnicas avanzadas de storytelling</p>
            </div>
            <div class="cards-grid">
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <div class="placeholder-content">
                            <div class="placeholder-icon">🎨</div>
                            <div class="placeholder-text">Imagen: Herramientas de diseño básico</div>
                        </div>
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 30 minutos</span>
                            <span class="difficulty-badge difficulty-beginner">Principiante</span>
                        </div>
                        <h3>Fundamentos de Diseño Visual</h3>
                        <p>Aprende a crear slides profesionales usando plantillas, aplicando principios de diseño, seleccionando colores efectivos y organizando contenido de manera visual e impactante.</p>
                    </div>
                </div>
                
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <div class="placeholder-content">
                            <div class="placeholder-icon">🎬</div>
                            <div class="placeholder-text">Imagen: Panel de animaciones PowerPoint</div>
                        </div>
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 45 minutos</span>
                            <span class="difficulty-badge difficulty-intermediate">Intermedio</span>
                        </div>
                        <h3>Animaciones y Transiciones Profesionales</h3>
                        <p>Domina efectos de entrada, énfasis y salida, crea trayectorias de movimiento personalizadas, sincroniza animaciones y aplica transiciones cinematográficas para presentaciones dinámicas.</p>
                    </div>
                </div>
                
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <div class="placeholder-content">
                            <div class="placeholder-icon">📊</div>
                            <div class="placeholder-text">Imagen: Gráficos y SmartArt en acción</div>
                        </div>
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 40 minutos</span>
                            <span class="difficulty-badge difficulty-intermediate">Intermedio</span>
                        </div>
                        <h3>Visualización de Datos Avanzada</h3>
                        <p>Crea gráficos interactivos conectados a Excel, diseña infografías con SmartArt, utiliza iconos vectoriales y desarrolla dashboards que comuniquen insights de manera clara.</p>
                    </div>
                </div>
                
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <div class="placeholder-content">
                            <div class="placeholder-icon">📝</div>
                            <div class="placeholder-text">Imagen: Estructura de storytelling</div>
                        </div>
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 55 minutos</span>
                            <span class="difficulty-badge difficulty-advanced">Avanzado</span>
                        </div>
                        <h3>Storytelling y Narrativa Visual</h3>
                        <p>Estructura presentaciones persuasivas con arcos narrativos, crea tensión y resolución, utiliza metáforas visuales y desarrolla mensajes que generen acción y compromiso.</p>
                    </div>
                </div>
                
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <div class="placeholder-content">
                            <div class="placeholder-icon">🎤</div>
                            <div class="placeholder-text">Imagen: Vista del presentador</div>
                        </div>
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 35 minutos</span>
                            <span class="difficulty-badge difficulty-intermediate">Intermedio</span>
                        </div>
                        <h3>Técnicas de Presentación Efectiva</h3>
                        <p>Utiliza la vista del presentador, integra herramientas de coaching con IA, practica con grabación automática y desarrolla presencia escénica para conectar con audiencias.</p>
                    </div>
                </div>
                
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <div class="placeholder-content">
                            <div class="placeholder-icon">🚀</div>
                            <div class="placeholder-text">Imagen: Plantilla de pitch deck</div>
                        </div>
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 60 minutos</span>
                            <span class="difficulty-badge difficulty-advanced">Avanzado</span>
                        </div>
                        <h3>Creación de Pitch Decks Ganadores</h3>
                        <p>Desarrolla presentaciones de inversión que capten financiamiento: estructura de 10 slides, storytelling para inversionistas, diseño persuasivo y técnicas de cierre efectivo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Presentación Interactiva Mejorada -->
    <section class="interactive-demo">
        <div class="container">
            <div class="demo-container">
                <h2>Demostración Interactiva</h2>
                <p>Explora cómo una presentación bien estructurada cuenta una historia convincente</p>
                
                <div class="slide-preview" id="slidePreview">
                    <div class="slide-content" id="slideContent">
                        <h3 style="color: var(--primary-orange); margin-bottom: 20px;">Bienvenidos: El Poder de las Ideas</h3>
                        <p style="font-size: 18px; line-height: 1.6;">Cada gran cambio comenzó con una presentación que comunicó una visión de manera clara y persuasiva.</p>
                        <div style="margin-top: 30px;">
                            <div style="width: 60px; height: 4px; background: var(--primary-orange); margin: 0 auto;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="slide-nav">
                    <button class="slide-btn" onclick="changeSlide(-1)" id="prevBtn">← Anterior</button>
                    <span class="slide-counter" id="slideCounter">Diapositiva 1 de 6</span>
                    <button class="slide-btn" onclick="changeSlide(1)" id="nextBtn">Siguiente →</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Consejos y Trucos Expandidos -->
    <section class="section" id="consejos">
        <div class="container">
            <div class="section-title">
                <h2>Consejos de Expertos en Presentaciones</h2>
                <p>Técnicas probadas utilizadas por los mejores presentadores del mundo</p>
            </div>
            <div class="tips-container">
                <div class="tip-card fade-in">
                    <div class="tip-header">
                        <div class="tip-icon">🎯</div>
                        <h4 class="tip-title">La Regla 6x6 para Slides Efectivos</h4>
                    </div>
                    <p>Nunca más de 6 líneas de texto por slide, nunca más de 6 palabras por línea. Esta regla garantiza legibilidad y mantiene la atención en ti como presentador, no en leer texto denso en pantalla.</p>
                    <ul class="feature-list">
                        <li>Usa bullet points concisos y poderosos</li>
                        <li>Prefiere imágenes que refuercen tu mensaje verbal</li>
                        <li>Aplica la regla 3-2-1: 3 puntos principales, 2 argumentos por punto, 1 llamada a la acción</li>
                    </ul>
                </div>
                
                <div class="tip-card fade-in">
                    <div class="tip-header">
                        <div class="tip-icon">🎭</div>
                        <h4 class="tip-title">Storytelling: La Estructura de Tres Actos</h4>
                    </div>
                    <p>Estructura tus presentaciones como una película: Planteamiento (problema/situación), Nudo (desarrollo/solución), Desenlace (resultado/acción). Esta estructura narrativa mantiene engagement y facilita recordación.</p>
                    <ul class="feature-list">
                        <li>Acto I: Establece contexto, presenta el problema o oportunidad</li>
                        <li>Acto II: Desarrolla tu propuesta, muestra evidencia y beneficios</li>
                        <li>Acto III: Cierra con llamada a la acción clara y memorable</li>
                    </ul>
                </div>
                
                <div class="tip-card fade-in">
                    <div class="tip-header">
                        <div class="tip-icon">🎨</div>
                        <h4 class="tip-title">Psicología Visual: Colores que Persuaden</h4>
                    </div>
                    <p>Los colores influyen inconscientemente en las decisiones de tu audiencia. Usa esta psicología para reforzar tu mensaje y crear la respuesta emocional deseada.</p>
                    <ul class="feature-list">
                        <li>Azul: Confianza y estabilidad (ideal para finanzas, tecnología)</li>
                        <li>Verde: Crecimiento y sostenibilidad (perfecto para eco-friendly, salud)</li>
                        <li>Rojo: Urgencia y acción (efectivo para ofertas limitadas, call-to-action)</li>
                        <li>Naranja: Energía y creatividad (excelente para innovación, startups)</li>
                    </ul>
                </div>
                
                <div class="tip-card fade-in">
                    <div class="tip-header">
                        <div class="tip-icon">⚡</div>
                        <h4 class="tip-title">La Técnica del "Slide Sorpresa"</h4>
                    </div>
                    <p>Mantén engagement intercalando slides inesperados: una pregunta provocativa, una estadística impactante, una imagen emotiva o un video corto. Rompe la monotonía cada 3-4 slides.</p>
                    <ul class="feature-list">
                        <li>Pregunta retórica que haga reflexionar a la audiencia</li>
                        <li>Estadística contraintuitiva que desafíe assumptions</li>
                        <li>Anécdota personal que humanice tu mensaje</li>
                        <li>Pausa silenciosa para permitir asimilación</li>
                    </ul>
                </div>
                
                <div class="tip-card fade-in">
                    <div class="tip-header">
                        <div class="tip-icon">🎤</div>
                        <h4 class="tip-title">El Método "Tell-Show-Do" para Workshops</h4>
                    </div>
                    <p>Para presentaciones educativas o training: primero DICES qué van a aprender, luego MUESTRAS cómo hacerlo, finalmente les das oportunidad de HACERLO ellos mismos.</p>
                    <ul class="feature-list">
                        <li>Tell: Explica el concepto con slides teóricos claros</li>
                        <li>Show: Demuestra con ejemplos prácticos o video</li>
                        <li>Do: Facilita ejercicio o actividad práctica inmediata</li>
                    </ul>
                </div>
                
                <div class="tip-card fade-in">
                    <div class="tip-header">
                        <div class="tip-icon">📱</div>
                        <h4 class="tip-title">Diseño Multi-Dispositivo y Accesibilidad</h4>
                    </div>
                    <p>Tu presentación debe funcionar perfectamente en proyectores, laptops, tablets y smartphones. Además, debe ser accesible para personas con discapacidades visuales o auditivas.</p>
                    <ul class="feature-list">
                        <li>Usa contraste mínimo 4.5:1 entre texto y fondo</li>
                        <li>Fuentes mínimo 18pt para legibilidad a distancia</li>
                        <li>Incluye texto alternativo en imágenes importantes</li>
                        <li>Considera subtítulos para videos y animaciones</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Recursos Adicionales -->
    <section class="section resources-section" id="recursos">
        <div class="container">
            <div class="section-title">
                <h2>Recursos Adicionales</h2>
                <p>Herramientas, plantillas y materiales para acelerar tu dominio de PowerPoint</p>
            </div>
            <div class="cards-grid">
                <div class="resource-card fade-in">
                    <div class="resource-icon">🎨</div>
                    <h3>Plantillas Premium</h3>
                    <p>Descarga plantillas profesionales para diferentes industrias: corporate, startup, educación, marketing, ventas y presentaciones creativas con animaciones integradas.</p>
                </div>
                <div class="resource-card fade-in">
                    <div class="resource-icon">📸</div>
                    <h3>Banco de Recursos Visuales</h3>
                    <p>Accede a miles de imágenes de alta resolución, iconos vectoriales, ilustraciones personalizadas, videos stock y elementos gráficos libres de derechos.</p>
                </div>
                <div class="resource-card fade-in">
                    <div class="resource-icon">🎥</div>
                    <h3>Masterclasses en Video</h3>
                    <p>Aprende con tutoriales HD sobre diseño avanzado, animaciones complejas, storytelling visual y técnicas de presentación de expertos internacionales.</p>
                </div>
                <div class="resource-card fade-in">
                    <div class="resource-icon">📊</div>
                    <h3>Templates de Datos</h3>
                    <p>Plantillas especializadas para dashboards ejecutivos, reportes financieros, análisis de métricas y visualización de KPIs con conexiones dinámicas.</p>
                </div>
                <div class="resource-card fade-in">
                    <div class="resource-icon">🚀</div>
                    <h3>Pitch Deck Templates</h3>
                    <p>Plantillas probadas de startups exitosas que levantaron financiamiento, con estructura optimizada para inversionistas y consejos de pitch específicos.</p>
                </div>
                <div class="resource-card fade-in">
                    <div class="resource-icon">🎓</div>
                    <h3>Certificaciones y Cursos</h3>
                    <p>Prepárate para certificaciones Microsoft PowerPoint Expert, cursos de diseño gráfico aplicado y workshops de public speaking y storytelling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Guía Completa de PowerPoint</h4>
                    <p>La resource más completa para dominar Microsoft PowerPoint desde conceptos básicos hasta técnicas avanzadas de storytelling visual y presentación profesional.</p>
                    <p>Desarrolla habilidades de comunicación que te posicionarán como un líder influyente en tu industria.</p>
                </div>
                <div class="footer-section">
                    <h4>Navegación Rápida</h4>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#introduccion">Introducción</a></li>
                        <li><a href="#funcionalidades">Funcionalidades</a></li>
                        <li><a href="#diseno">Principios de Diseño</a></li>
                        <li><a href="#tutoriales">Tutoriales</a></li>
                        <li><a href="#consejos">Consejos de Expertos</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Habilidades Relacionadas</h4>
                    <ul>
                        <li><a href="#">Public Speaking</a></li>
                        <li><a href="#">Storytelling Empresarial</a></li>
                        <li><a href="#">Diseño Gráfico</a></li>
                        <li><a href="#">Comunicación Persuasiva</a></li>
                        <li><a href="#">Pitch Perfecto</a></li>
                        <li><a href="#">Liderazgo Visual</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Suite Microsoft 365</h4>
                    <ul>
                        <li><a href="#">Microsoft Word Avanzado</a></li>
                        <li><a href="#">Excel para Análisis</a></li>
                        <li><a href="#">Teams y Colaboración</a></li>
                        <li><a href="#">OneDrive y SharePoint</a></li>
                        <li><a href="#">Power BI Integration</a></li>
                        <li><a href="#">Microsoft Designer</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Guía Completa de Microsoft PowerPoint. Todos los derechos reservados. | Diseñado con Fluent Design System</p>
            </div>
        </div>
    </footer>

    <script src="Script1.js"></script>
</body>
</html>