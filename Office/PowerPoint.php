<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guía Completa de Microsoft PowerPoint 2025</title>
  <style>
    :root {
      --powerpoint-red: #B7472A;
      --accent: #D24726;
      --bg: #F7F9FC;
      --bg-2: #EEF2F8;
      --card: #FFFFFF;
      --border: #E5EAF2;
      --txt: #1F2937;
      --txt-2: #4B5563;
      --txt-3: #6B7280;
      --ok: #107C10;
      --warn: #FF8C00;
      --danger: #D13438;
      --info: #0078D4;
      --ff: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif;
      --fs-hero: clamp(2rem, 1.2rem + 2.5vw, 3rem);
      --fs-xl: clamp(1.5rem, 1rem + 1.6vw, 2.2rem);
      --fs-lg: clamp(1.1rem, .95rem + .6vw, 1.35rem);
      --fs: 1rem;
      --fs-sm: .94rem;
      --fs-xs: .84rem;
      --radius: 14px;
      --radius-sm: 10px;
      --speed: 180ms;
      --container: 1180px;
      --sd4: 0 2px 6px rgba(0,0,0,.06);
      --sd8: 0 6px 15px rgba(0,0,0,.08);
      --sd16: 0 14px 34px rgba(0,0,0,.12);
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: var(--ff);
      font-size: var(--fs);
      line-height: 1.65;
      color: var(--txt);
      background: var(--bg);
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    img { max-width: 100%; display: block; height: auto; }
    a { color: var(--accent); text-decoration: none; }
    a:hover { text-decoration: underline; }
    .container { max-width: var(--container); margin: 0 auto; padding: 0 22px; }
    .progress { position: fixed; top: 0; left: 0; width: 100%; height: 3px; background: transparent; z-index: 1000; }
    .progress .bar { height: 100%; width: 0%; background: linear-gradient(90deg, var(--powerpoint-red), var(--accent)); transition: width 0.3s ease; }
    header { position: sticky; top: 0; z-index: 900; background: color-mix(in srgb, var(--card) 85%, transparent); backdrop-filter: saturate(160%) blur(16px); border-bottom: 1px solid var(--border); box-shadow: 0 1px 0 rgba(0,0,0,.03); }
    .nav { display: flex; align-items: center; justify-content: space-between; max-width: var(--container); margin: 0 auto; padding: 12px 22px; gap: 16px; flex-wrap: wrap; }
    .brand { display: flex; align-items: center; gap: 10px; color: var(--powerpoint-red); font-weight: 700; }
    .brand img { width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, var(--powerpoint-red), var(--accent)); box-shadow: var(--sd8); padding: 6px; }
    .brand h1 { font-size: 1.1rem; white-space: nowrap; }
    .search { position: relative; flex: 1; max-width: 500px; margin: 0 20px; }
    .searchbox { position: relative; display: flex; align-items: center; background: var(--bg-2); border: 1px solid var(--border); border-radius: 999px; padding: 8px 14px; transition: all var(--speed); box-shadow: inset 0 1px 0 rgba(255,255,255,.7); }
    .searchbox:focus-within { background: #fff; box-shadow: 0 0 0 2px var(--accent); }
    .search .icon { width: 18px; height: 18px; color: var(--txt-3); }
    #siteSearch { border: 0; background: transparent; width: 100%; padding: 0 8px; outline: none; color: var(--txt); }
    #siteSearch::placeholder { color: var(--txt-3); }
    .clear-btn { background: none; border: 0; color: var(--txt-3); cursor: pointer; padding: 2px; border-radius: 4px; font-size: 1.2rem; line-height: 1; }
    .clear-btn:hover { color: var(--txt-2); }
    .results { position: absolute; top: 100%; left: 0; right: 0; background: var(--card); border: 1px solid var(--border); border-radius: 14px; margin-top: 8px; box-shadow: var(--sd16); max-height: 300px; overflow: auto; display: none; }
    .results.show { display: block; }
    .search-result { display: block; padding: 10px 14px; color: var(--txt); text-decoration: none; border-bottom: 1px solid var(--border); transition: background var(--speed); }
    .search-result:hover { background: var(--bg-2); }
    .no-results { padding: 10px 14px; color: var(--txt-3); font-style: italic; }
    .actions { display: flex; align-items: center; gap: 12px; }
    .theme-switch { display: flex; align-items: center; gap: 6px; cursor: pointer; padding: 6px 10px; border-radius: 999px; border: 1px solid var(--border); background: var(--card); font-size: .9rem; transition: all var(--speed); }
    .theme-switch:hover { border-color: var(--accent); }
    .theme-switch .dot { width: 18px; height: 18px; border-radius: 50%; background: var(--accent); position: relative; overflow: hidden; }
    .hamb { display: flex; flex-direction: column; gap: 4px; cursor: pointer; padding: 8px; border-radius: 8px; border: 1px solid var(--border); background: var(--card); }
    .hamb span { width: 20px; height: 2px; background: var(--txt); border-radius: 1px; transition: all var(--speed); }
    #menuToggle:checked ~ .actions .hamb span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
    #menuToggle:checked ~ .actions .hamb span:nth-child(2) { opacity: 0; }
    #menuToggle:checked ~ .actions .hamb span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }
    .navlinks { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; width: 100%; margin-top: 12px; display: none; }
    #menuToggle:checked ~ .navlinks { display: flex; }
    .navlinks a { padding: 8px 14px; border-radius: 999px; color: var(--txt); border: 1px solid transparent; transition: all var(--speed); }
    .navlinks a:hover { background: var(--card); border-color: var(--border); text-decoration: none; }
    .toc-toggle { display: none; margin-bottom: 16px; padding: 10px 16px; background: var(--card); border: 1px solid var(--border); border-radius: 999px; cursor: pointer; font-size: .9rem; transition: all var(--speed); align-self: flex-start; }
    .toc-toggle:hover { background: var(--bg-2); border-color: var(--accent); }
    .wrap { display: grid; grid-template-columns: 280px 1fr; gap: 32px; max-width: var(--container); margin: 32px auto; padding: 0 22px; }
    @media (max-width: 1024px) { .wrap { grid-template-columns: 1fr; } }
    .toc { position: sticky; top: 100px; align-self: start; background: var(--card); border: 1px solid var(--border); border-radius: 14px; padding: 16px; box-shadow: var(--sd4); height: 80vh; overflow-y: auto; }
    .toc h2 { font-size: 1.1rem; margin-bottom: 12px; color: var(--powerpoint-red); }
    .toc ul { list-style: none; padding-left: 0; }
    .toc li { margin: .5rem 0; }
    .toc a { color: var(--txt-2); font-size: .9rem; display: block; padding: 4px 0; border-left: 2px solid transparent; padding-left: 8px; transition: all var(--speed); }
    .toc a:hover { color: var(--txt); border-left-color: var(--accent); text-decoration: none; }
    @media (max-width: 1024px) {
      .toc-toggle { display: block; }
      .toc { display: none; position: relative; top: 0; margin-bottom: 24px; }
      .toc.show { display: block; }
    }
    main { min-height: 80vh; }
    .hero { background: linear-gradient(135deg, var(--powerpoint-red), var(--accent)); color: #fff; padding: 64px 32px; border-radius: 14px; margin-bottom: 32px; text-align: center; }
    .hero h2 { font-size: var(--fs-hero); font-weight: 300; margin-bottom: 16px; }
    .hero p { font-size: var(--fs-lg); opacity: .95; max-width: 800px; margin: 0 auto 24px; }
    .actions { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
    .btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; border-radius: 999px; font-weight: 600; background: var(--accent); color: #fff; border: 1px solid transparent; transition: all var(--speed); text-decoration: none; }
    .btn:hover { background: color-mix(in srgb, var(--accent), black 10%); transform: translateY(-2px); box-shadow: var(--sd8); text-decoration: none; }
    .btn-outline { background: transparent; border-color: rgba(255,255,255,.4); color: #fff; }
    .btn-outline:hover { background: rgba(255,255,255,.1); border-color: rgba(255,255,255,.6); }
    .block { margin-bottom: 64px; }
    .block h3 { font-size: var(--fs-xl); font-weight: 300; color: var(--powerpoint-red); margin-bottom: 16px; border-bottom: 1px solid var(--border); padding-bottom: 8px; }
    .lead { font-size: var(--fs-lg); color: var(--txt-2); margin-bottom: 32px; max-width: 900px; }
    .grid { display: grid; gap: 24px; }
    .grid-2 { grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); }
    .grid-3 { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
    .card { background: var(--card); border: 1px solid var(--border); border-radius: 14px; padding: 24px; box-shadow: var(--sd4); transition: all var(--speed); }
    .card:hover { transform: translateY(-2px); box-shadow: var(--sd8); border-color: var(--accent); }
    .card h4 { font-size: 1.25rem; margin-bottom: 12px; color: var(--powerpoint-red); }
    .muted { color: var(--txt-3); font-size: .9rem; }
    .steps { list-style: none; padding-left: 0; }
    .steps li { position: relative; padding-left: 28px; margin-bottom: 12px; }
    .steps li:before { content: ""; position: absolute; left: 0; top: 8px; width: 12px; height: 12px; border-radius: 50%; background: var(--accent); }
    .steps ol { list-style: decimal; padding-left: 20px; margin-top: 8px; }
    .steps ol li { margin-bottom: 8px; padding-left: 4px; }
    .steps ol li:before { display: none; }
    .callout { padding: 16px; border-radius: 10px; margin: 20px 0; border-left: 4px solid var(--info); background: rgba(0,120,212,.05); }
    .callout.ok { border-left-color: var(--ok); background: rgba(16,124,16,.05); }
    .callout.warn { border-left-color: var(--warn); background: rgba(255,140,0,.05); }
    .callout.danger { border-left-color: var(--danger); background: rgba(209,52,56,.05); }
    .callout.info { border-left-color: var(--info); background: rgba(0,120,212,.05); }
    table { width: 100%; border-collapse: collapse; margin: 20px 0; }
    th, td { border: 1px solid var(--border); padding: 12px; text-align: left; }
    th { background: var(--bg-2); font-weight: 600; }
    tr:nth-child(even) { background: var(--bg-2); }
    .code { background: var(--bg-2); border: 1px solid var(--border); border-radius: 8px; padding: 16px; font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace; font-size: .9rem; overflow-x: auto; margin: 20px 0; }
    code { background: var(--bg-2); border: 1px solid var(--border); border-radius: 4px; padding: 2px 6px; font-family: inherit; font-size: .85rem; }
    footer { background: var(--bg-2); border-top: 1px solid var(--border); margin-top: 80px; padding: 40px 0; }
    .footer-inner { max-width: var(--container); margin: 0 auto; padding: 0 22px; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 32px; }
    .footer-brand { display: flex; align-items: center; gap: 8px; margin-bottom: 12px; }
    .footer-brand img { width: 24px; height: 24px; }
    .footer-note { color: var(--txt-2); font-size: .9rem; margin-bottom: 16px; }
    .footer-social { display: flex; gap: 12px; }
    .footer-social a { display: grid; place-items: center; width: 36px; height: 36px; border-radius: 50%; background: var(--card); border: 1px solid var(--border); text-decoration: none; transition: all var(--speed); }
    .footer-social a:hover { background: var(--accent); color: #fff; border-color: var(--accent); transform: translateY(-2px); }
    .footer-title { font-weight: 600; margin-bottom: 12px; color: var(--powerpoint-red); }
    .footer-list { list-style: none; padding-left: 0; }
    .footer-list li { margin-bottom: 8px; }
    .footer-list a { color: var(--txt-2); transition: color var(--speed); }
    .footer-list a:hover { color: var(--txt); }
    .backtop { position: fixed; bottom: 20px; right: 20px; width: 48px; height: 48px; border-radius: 50%; background: var(--accent); color: #fff; display: grid; place-items: center; text-decoration: none; box-shadow: var(--sd8); transition: all var(--speed); z-index: 100; }
    .backtop:hover { transform: translateY(-2px); box-shadow: var(--sd16); text-decoration: none; }
    .visually-hidden { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0; }
    .skip { position: absolute; top: -40px; left: 6px; background: var(--accent); color: #fff; padding: 8px; border-radius: 4px; z-index: 1000; transition: top 0.3s; }
    .skip:focus { top: 6px; }
    .noscript { background: var(--warn); color: #fff; padding: 12px; text-align: center; }
    @media (prefers-color-scheme: dark) {
      :root { --bg: #151A24; --bg-2: #1B2230; --card: #1F2633; --border: #2B3240; --txt: #E6E8EE; --txt-2: #CDD3E1; --txt-3: #AAB3C7; }
    }
    @media (max-width: 768px) {
      .nav { flex-direction: column; align-items: stretch; }
      .search { margin: 12px 0; max-width: 100%; }
      .actions { justify-content: space-between; }
      .wrap { padding: 0 16px; }
      .hero { padding: 32px 20px; }
      .footer-inner { gap: 24px; }
      .grid-2, .grid-3 { grid-template-columns: 1fr; }
    }
    .img-frame {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--sd4);
      margin: 20px 0;
      overflow: hidden;
      text-align: center;
      transition: transform var(--speed);
    }
    .img-frame:hover {
      transform: scale(1.02);
      box-shadow: var(--sd8);
    }
    .img-frame img {
      width: 100%;
      height: auto;
      display: block;
      border-bottom: 1px solid var(--border);
    }
    .img-frame figcaption {
      font-size: var(--fs-sm);
      color: var(--txt-3);
      padding: 8px 12px;
      background: var(--bg-2);
    }
    .keyboard-shortcut {
      background: var(--bg-2);
      border: 1px solid var(--border);
      border-radius: 4px;
      padding: 4px 8px;
      font-family: monospace;
      font-size: .85rem;
      display: inline-block;
      margin: 0 4px;
    }
    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 16px;
      margin: 20px 0;
    }
    .feature-item {
      background: var(--bg-2);
      padding: 12px;
      border-radius: 8px;
      border-left: 4px solid var(--accent);
    }
    .feature-item h5 {
      font-size: 1rem;
      margin-bottom: 8px;
      color: var(--powerpoint-red);
    }
    .timeline {
      margin: 20px 0;
    }
    .timeline-item {
      margin-bottom: 24px;
      padding-left: 20px;
      border-left: 2px solid var(--accent);
      position: relative;
    }
    .timeline-year {
      position: absolute;
      left: -28px;
      top: 0;
      background: var(--accent);
      color: #fff;
      width: 40px;
      height: 24px;
      border-radius: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: .8rem;
    }
    .module-icon {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 1.1rem;
      margin-bottom: 8px;
      color: var(--powerpoint-red);
    }
    .module-icon i {
      font-size: 1.3rem;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="top">
  <a class="skip" href="#inicio">Saltar al contenido</a>
  <div class="progress" aria-hidden="true"><div class="bar" id="progressBar"></div></div>
  <header>
    <nav class="nav" aria-label="Principal">
      <input type="checkbox" id="menuToggle" class="visually-hidden" aria-hidden="true">
      <input type="checkbox" id="themeToggle" class="visually-hidden" aria-hidden="true">
      <div class="brand">
        <img src="https://cdn-icons-png.flaticon.com/512/732/732221.png" alt="Logotipo de PowerPoint" width="38" height="38">
        <h1>Guía Completa de Microsoft PowerPoint 2025</h1>
      </div>
      <div class="search" role="search">
        <form class="searchbox" autocomplete="off" onsubmit="return false;">
          <svg class="icon" viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16a6.471 6.471 0 0 0 4.23-1.57l.27.28v.79l5 5 1.5-1.5-5-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
          </svg>
          <input id="siteSearch" type="search" placeholder="Buscar en la guía..."
                 aria-autocomplete="list" aria-controls="searchResults" aria-expanded="false">
          <button type="button" id="clearSearch" class="clear-btn" aria-label="Limpiar búsqueda">&times;</button>
        </form>
        <div id="searchResults" class="results" role="listbox" aria-hidden="true"></div>
      </div>
      <div class="actions">
        <label class="theme-switch" for="themeToggle" title="Tema claro/oscuro">
          <span class="dot" aria-hidden="true"></span><span> Tema</span>
        </label>
        <label class="hamb" for="menuToggle" aria-label="Abrir menú" aria-controls="primaryNav" aria-expanded="false">
          <span></span><span></span><span></span>
        </label>
      </div>
      <div id="primaryNav" class="navlinks" role="navigation" aria-label="Secciones">
        <a href="index.php">Inicio</a>
        <a href="PowerPoint.php">PowerPoint</a>
        <a href="Excel.php">Excel</a>
        <a href="Word.php">Word</a>
        <a href="OneDrive.php">One Drive</a>
        <a href="Outlook.php">Outlook</a>
      </div>
    </nav>
  </header>
  <div class="wrap">
    <button class="toc-toggle" id="tocToggle">Mostrar tabla de contenidos</button>
    <aside class="toc" aria-label="Tabla de contenidos" id="toc">
      <h2>Contenido</h2>
      <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#modulo1">Módulo 1: Introducción a Microsoft PowerPoint</a></li>
        <li><a href="#modulo2">Módulo 2: Creación de Presentaciones</a></li>
        <li><a href="#modulo3">Módulo 3: Manejo y Formato de Texto</a></li>
        <li><a href="#modulo4">Módulo 4: Elementos Multimedia y Visuales</a></li>
        <li><a href="#modulo5">Módulo 5: Tablas y Objetos de Otras Aplicaciones</a></li>
        <li><a href="#modulo6">Módulo 6: Diseño de Diapositivas</a></li>
        <li><a href="#modulo7">Módulo 7: Animaciones y Transiciones</a></li>
        <li><a href="#modulo8">Módulo 8: Diseño Efectivo de Presentaciones</a></li>
        <li><a href="#modulo9">Módulo 9: Herramientas de Presentación</a></li>
        <li><a href="#modulo10">Módulo 10: Colaboración y Trabajo en Línea</a></li>
        <li><a href="#modulo11">Módulo 11: Funciones Avanzadas</a></li>
        <li><a href="#modulo12">Módulo 12: Exportación y Publicación</a></li>
        <li><a href="#modulo13">Módulo 13: Atajos, Consejos y Recursos</a></li>
        <li><a href="#modulo14">Módulo 14: Prácticas y Proyectos</a></li>
        <li><a href="#modulo15">Módulo 15: Diseño Profesional y Storytelling Visual</a></li>
      </ul>
    </aside>
    <main>
      <!-- Sección de Inicio -->
      <section class="hero" id="inicio">
        <h2>Guía Completa de Microsoft PowerPoint 2025</h2>
        <p>Domina <strong>Microsoft PowerPoint 2025</strong> con esta guía detallada: desde lo básico hasta funciones avanzadas, diseño profesional, colaboración en la nube, automatización y más. Incluye ejemplos prácticos, imágenes, consejos y tutoriales paso a paso para que puedas crear presentaciones impactantes y profesionales. Esta guía está diseñada tanto para principiantes como para usuarios avanzados, con módulos que cubren desde la interfaz básica hasta técnicas de storytelling visual y herramientas de inteligencia artificial integradas.</p>
        <div class="actions">
          <a class="btn" href="#modulo1">Comenzar Aprendizaje</a>
          <a class="btn btn-outline" href="#modulo13">Ver Atajos Rápidos</a>
        </div>
        <figure class="img-frame">
          <img src="https://via.placeholder.com/800x450/B7472A/FFFFFF?text=Microsoft+PowerPoint+2025" alt="Interfaz de Microsoft PowerPoint 2025 mostrando la cinta de opciones y una presentación de ejemplo">
          <figcaption>Microsoft PowerPoint 2025: la herramienta líder para crear presentaciones visuales impactantes, con nuevas funciones de IA, diseño mejorado y herramientas de colaboración.</figcaption>
        </figure>
      </section>

      <!-- Módulo 1: Introducción a Microsoft PowerPoint -->
      <section id="modulo1" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-cube"></i>
          <span>Módulo 1: Introducción a Microsoft PowerPoint</span>
        </div>
        <h3>Módulo 1. Introducción a Microsoft PowerPoint</h3>
        <p class="lead">Microsoft PowerPoint es la herramienta líder para crear presentaciones visuales impactantes. En este módulo, explorarás su interfaz, historia, versiones y las operaciones básicas para empezar a trabajar con diapositivas. Aprenderás cómo PowerPoint se ha convertido en un estándar en educación, negocios y comunicación profesional, y cómo sus funciones avanzadas pueden ayudarte a crear presentaciones memorables y efectivas.</p>

        <!-- ¿Qué es Microsoft PowerPoint? -->
        <div class="card">
          <h4>¿Qué es Microsoft PowerPoint y para qué se utiliza?</h4>
          <p>PowerPoint es una aplicación de presentación desarrollada por Microsoft, diseñada para crear diapositivas visuales que combinan texto, imágenes, gráficos, audio, video y animaciones. Es ampliamente utilizada en diversos ámbitos:</p>
          <div class="feature-grid">
            <div class="feature-item">
              <h5>Educación</h5>
              <p>Profesores y estudiantes lo usan para crear lecciones interactivas, exposiciones y proyectos académicos. Permite integrar multimedia, diagramas y notas para facilitar el aprendizaje. PowerPoint es especialmente útil para:</p>
              <ul class="steps">
                <li>Crear presentaciones visuales para explicar conceptos complejos.</li>
                <li>Diseñar materiales didácticos con imágenes, gráficos y animaciones.</li>
                <li>Organizar información en diapositivas para facilitar la comprensión.</li>
                <li>Incluir notas del orador para guiar la exposición en clase.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5>Empresas</h5>
              <p>Ideal para reuniones, informes de ventas, presentaciones de proyectos y pitches a clientes. Ayuda a comunicar ideas de manera clara y persuasiva. En el entorno corporativo, PowerPoint se utiliza para:</p>
              <ul class="steps">
                <li>Presentar informes financieros con gráficos y tablas.</li>
                <li>Crear propuestas comerciales con diseños profesionales.</li>
                <li>Realizar presentaciones de proyectos con cronogramas y diagramas.</li>
                <li>Comunicar estrategias y objetivos de manera visual.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5>Comunicación profesional</h5>
              <p>Se utiliza en conferencias, seminarios, talleres y eventos para transmitir información de manera clara y atractiva, con soporte para colaboración en tiempo real. PowerPoint es esencial para:</p>
              <ul class="steps">
                <li>Crear presentaciones para conferencias y charlas.</li>
                <li>Diseñar materiales visuales para talleres y capacitaciones.</li>
                <li>Compartir información en reuniones y eventos corporativos.</li>
                <li>Facilitar la comunicación en equipos de trabajo remotos.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5>Marketing y publicidad</h5>
              <p>Permite diseñar presentaciones promocionales, catálogos de productos y campañas visuales, con herramientas para animaciones y efectos profesionales. En marketing, PowerPoint se usa para:</p>
              <ul class="steps">
                <li>Crear catálogos de productos con imágenes y descripciones.</li>
                <li>Diseñar presentaciones para lanzamientos de productos.</li>
                <li>Desarrollar campañas publicitarias con elementos visuales impactantes.</li>
                <li>Presentar informes de mercado con gráficos y datos.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5>Formación y capacitación</h5>
              <p>Facilita la creación de materiales de entrenamiento para empleados o equipos de trabajo, con plantillas reutilizables y contenido interactivo. PowerPoint es ideal para:</p>
              <ul class="steps">
                <li>Diseñar manuales de capacitación con instrucciones paso a paso.</li>
                <li>Crear presentaciones para inducciones de nuevos empleados.</li>
                <li>Desarrollar materiales de formación con ejemplos visuales.</li>
                <li>Incluir cuestionarios y ejercicios interactivos.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5>Eventos y ceremonias</h5>
              <p>Se usa para crear presentaciones en bodas, graduaciones, premios y otros eventos especiales, con opciones para música, videos y transiciones. PowerPoint permite:</p>
              <ul class="steps">
                <li>Crear presentaciones para ceremonias con fotos y música.</li>
                <li>Diseñar diapositivas para eventos con cronogramas y detalles.</li>
                <li>Incluir videos y animaciones para hacer más dinámicos los eventos.</li>
                <li>Personalizar presentaciones con temas y colores específicos.</li>
              </ul>
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://via.placeholder.com/800x450/B7472A/FFFFFF?text=Ejemplo+de+Presentación+en+PowerPoint" alt="Ejemplo de presentación en PowerPoint">
            <figcaption>Ejemplo de una presentación profesional en PowerPoint, mostrando diapositivas con texto, imágenes, gráficos y animaciones.</figcaption>
          </figure>
        </div>

        <!-- Historia y versiones de PowerPoint -->
        <div class="card">
          <h4>Historia y evolución de Microsoft PowerPoint</h4>
          <p>PowerPoint fue lanzado por primera vez en 1987 y ha evolucionado significativamente, incorporando nuevas funciones y tecnologías para adaptarse a las necesidades de los usuarios. A continuación, se presenta una línea de tiempo detallada de su evolución:</p>
          <div class="timeline">
            <div class="timeline-item">
              <div class="timeline-year">1987</div>
              <p><strong>PowerPoint 1.0:</strong> Desarrollado por Forefront Inc. y adquirido por Microsoft. Solo disponible para Macintosh, con herramientas básicas para crear diapositivas en blanco y negro. Su interfaz era simple y se enfocaba en la creación de transparencias para proyectores. Esta versión sentó las bases para el desarrollo futuro de la herramienta, aunque su funcionalidad era limitada en comparación con las versiones actuales.</p>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">1990</div>
              <p><strong>PowerPoint para Windows:</strong> Versión 2.0, con interfaz gráfica y soporte para color. Introdujo la capacidad de insertar gráficos simples y mejoró la compatibilidad con impresoras. Fue un éxito inmediato en el entorno corporativo, ya que permitió a los usuarios crear presentaciones más visuales y atractivas. Esta versión también marcó el inicio de la expansión de PowerPoint más allá de la plataforma Macintosh.</p>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/400x250/B7472A/FFFFFF?text=PowerPoint+1990" alt="PowerPoint 1990">
                <figcaption>Interfaz de PowerPoint 2.0 para Windows, mostrando herramientas básicas de diseño y la barra de menús clásica.</figcaption>
              </figure>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">1997</div>
              <p><strong>PowerPoint 97:</strong> Introdujo el Asistente de Office (Clippy) y mejoras en la edición de gráficos y animaciones básicas. También incorporó la capacidad de insertar objetos OLE, como hojas de cálculo de Excel. Esta versión fue parte de la suite Office 97 y representó un avance significativo en la integración de PowerPoint con otras aplicaciones de Microsoft, facilitando la creación de presentaciones más dinámicas y profesionales.</p>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2007</div>
              <p><strong>PowerPoint 2007:</strong> Revolucionó la interfaz con la cinta de opciones (Ribbon), reemplazando los menús tradicionales. Introdujo temas de diseño, estilos predefinidos y mejoras en la gestión de multimedia. Esta versión sentó las bases de la interfaz moderna de PowerPoint, haciendo que la herramienta fuera más intuitiva y accesible para los usuarios. La cinta de opciones permitió una organización más lógica de las funciones, mejorando la productividad.</p>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/400x250/B7472A/FFFFFF?text=PowerPoint+2007" alt="PowerPoint 2007">
                <figcaption>PowerPoint 2007 introdujo la cinta de opciones (Ribbon) y temas de diseño, marcando un antes y después en la experiencia de usuario.</figcaption>
              </figure>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2016</div>
              <p><strong>PowerPoint 2016:</strong> Integración con OneDrive para colaboración en tiempo real, nuevas herramientas de diseño como "Diseñador" y "Morfología", y soporte para modelos 3D. También mejoró la compatibilidad con dispositivos táctiles, permitiendo a los usuarios trabajar de manera más flexible y colaborativa. La función "Diseñador" utiliza inteligencia artificial para sugerir diseños de diapositivas basados en el contenido, mientras que "Morfología" permite crear transiciones fluidas entre diapositivas.</p>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2025</div>
              <p><strong>PowerPoint 2025:</strong> Inteligencia artificial integrada (Copilot), que permite generar presentaciones automáticamente a partir de documentos o esquemas. Incluye diseño mejorado, animaciones avanzadas, mayor enfoque en la colaboración en la nube y herramientas de storytelling visual para crear narrativas más efectivas. Copilot en PowerPoint 2025 puede:</p>
              <ul class="steps">
                <li>Generar diapositivas a partir de un documento de Word o un esquema.</li>
                <li>Sugerir diseños y estilos basados en el contenido de la presentación.</li>
                <li>Automatizar la creación de gráficos y tablas a partir de datos.</li>
                <li>Optimizar el diseño para diferentes tipos de audiencia y propósitos.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/400x250/B7472A/FFFFFF?text=PowerPoint+2025" alt="PowerPoint 2025">
                <figcaption>PowerPoint 2025 incluye Copilot, un asistente de IA que ayuda a generar, editar y optimizar presentaciones automáticamente, además de nuevas plantillas y efectos visuales.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout info">
            <strong>Dato curioso:</strong> El nombre "PowerPoint" fue elegido para reflejar la capacidad de la herramienta de "potenciar" (power) los "puntos" (points) clave de una presentación, haciendo que las ideas sean más claras y persuasivas. Originalmente, el software se llamaba "Presenter", pero el nombre fue cambiado para enfatizar su capacidad de mejorar la comunicación visual.
          </div>
        </div>

        <!-- Diferencias entre PowerPoint de escritorio, móvil y en línea -->
        <div class="card">
          <h4>Diferencias entre PowerPoint de escritorio, móvil y en línea</h4>
          <p>PowerPoint está disponible en diferentes plataformas, cada una con sus propias características y limitaciones. A continuación, se detallan las diferencias clave entre las versiones de escritorio, móvil y en línea:</p>
          <div class="grid grid-2">
            <div>
              <h5>PowerPoint de escritorio</h5>
              <ul class="steps">
                <li><strong>Funcionalidad completa:</strong> Todas las herramientas avanzadas, como macros, complementos y animaciones complejas, están disponibles en la versión de escritorio. Esto la hace ideal para usuarios que necesitan crear presentaciones sofisticadas y personalizadas.</li>
                <li><strong>Trabajo sin conexión:</strong> No requiere conexión a internet para crear o editar presentaciones, lo que es útil en entornos con conectividad limitada o para trabajar en lugares remotos.</li>
                <li><strong>Integración con Office:</strong> Compatibilidad total con Excel, Word y otras aplicaciones de Microsoft, lo que facilita la importación y exportación de datos entre diferentes programas.</li>
                <li><strong>Requisitos:</strong> Necesita instalación en Windows o macOS, lo que puede limitar su uso en dispositivos con sistemas operativos no compatibles.</li>
                <li><strong>Actualizaciones:</strong> Las actualizaciones de funciones y seguridad se instalan localmente, lo que puede requerir permisos administrativos en algunos entornos corporativos.</li>
              </ul>
            </div>
            <div>
              <h5>PowerPoint en línea</h5>
              <ul class="steps">
                <li><strong>Acceso desde navegador:</strong> Funciona en cualquier dispositivo con conexión a internet, lo que permite acceder a las presentaciones desde cualquier lugar y en cualquier momento.</li>
                <li><strong>Colaboración en tiempo real:</strong> Ideal para trabajar en equipo, ya que permite que múltiples usuarios editen la misma presentación simultáneamente, con cambios sincronizados en tiempo real.</li>
                <li><strong>Limitaciones:</strong> Algunas funciones avanzadas, como macros y complementos, no están disponibles en la versión en línea, lo que puede limitar su uso para presentaciones complejas.</li>
                <li><strong>Almacenamiento:</strong> Guarda automáticamente los cambios en OneDrive o SharePoint, lo que facilita el acceso y la recuperación de versiones anteriores.</li>
                <li><strong>Compatibilidad:</strong> Funciona en la mayoría de los navegadores modernos, lo que la hace accesible desde una amplia variedad de dispositivos, incluyendo Chromebooks y tablets.</li>
              </ul>
            </div>
          </div>
          <div class="grid grid-2">
            <div>
              <h5>PowerPoint móvil</h5>
              <ul class="steps">
                <li><strong>Aplicación para dispositivos:</strong> Disponible en iOS y Android, lo que permite crear, editar y presentar desde smartphones y tablets.</li>
                <li><strong>Interfaz simplificada:</strong> Diseñada para pantallas táctiles y uso en movimiento, con herramientas optimizadas para la interacción con los dedos.</li>
                <li><strong>Funciones básicas:</strong> Permite crear, editar y presentar, pero con menos opciones que la versión de escritorio. Algunas funciones avanzadas pueden no estar disponibles.</li>
                <li><strong>Sincronización:</strong> Integración con OneDrive para acceder a presentaciones desde cualquier lugar y sincronizar cambios entre dispositivos.</li>
                <li><strong>Presentaciones en movimiento:</strong> Ideal para revisar o presentar sobre la marcha, con herramientas para controlar la presentación desde el dispositivo móvil.</li>
              </ul>
            </div>
            <div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Versiones+de+PowerPoint" alt="Versiones de PowerPoint">
                <figcaption>Comparación de las versiones de PowerPoint: escritorio (funcionalidad completa), en línea (colaboración) y móvil (portabilidad).</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout info">
            <strong>Consejo:</strong> Si trabajas en equipo o necesitas acceder a tus presentaciones desde diferentes dispositivos, la versión en línea de PowerPoint es una excelente opción. Sin embargo, si necesitas funciones avanzadas o trabajas sin conexión, la versión de escritorio es la más adecuada.
          </div>
        </div>

        <!-- Usos en educación, empresas y comunicación profesional -->
        <div class="card">
          <h4>Usos en educación, empresas y comunicación profesional</h4>
          <p>PowerPoint es una herramienta versátil que se adapta a diferentes contextos. A continuación, se detallan sus aplicaciones en educación, empresas y comunicación profesional:</p>
          <div class="grid grid-3">
            <div class="feature-item">
              <h5>Educación</h5>
              <ul class="steps">
                <li>Creación de <strong>lecciones interactivas</strong> con multimedia, como videos, imágenes y audio, para hacer las clases más dinámicas y atractivas.</li>
                <li>Presentaciones de <strong>proyectos académicos</strong> y tesis, con diapositivas que incluyen gráficos, tablas y notas para apoyar la exposición oral.</li>
                <li>Uso de <strong>diagramas y animaciones</strong> para explicar conceptos complejos, como procesos biológicos, fórmulas matemáticas o eventos históricos.</li>
                <li>Integración con <strong>Microsoft Teams</strong> para clases virtuales, permitiendo compartir presentaciones en tiempo real y colaborar con estudiantes.</li>
                <li>Creación de <strong>materiales de estudio</strong> reutilizables, como resúmenes visuales, mapas conceptuales y líneas de tiempo.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5>Empresas</h5>
              <ul class="steps">
                <li>Presentaciones de <strong>informes financieros</strong> y datos, con gráficos y tablas que facilitan la comprensión de la información.</li>
                <li><strong>Pitches de ventas</strong> con gráficos y animaciones persuasivas, diseñados para captar la atención de clientes potenciales.</li>
                <li>Reuniones y <strong>videoconferencias</strong> con integración de Teams, permitiendo presentar y colaborar de manera remota.</li>
                <li>Plantillas corporativas para mantener la <strong>identidad visual</strong> de la empresa en todas las presentaciones.</li>
                <li>Creación de <strong>informes ejecutivos</strong> con resúmenes visuales de proyectos, metas y resultados.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5>Comunicación profesional</h5>
              <ul class="steps">
                <li><strong>Conferencias y seminarios</strong> con diapositivas profesionales, que incluyen imágenes, gráficos y textos claros para apoyar la exposición.</li>
                <li>Presentaciones en <strong>eventos y ferias</strong> con contenido multimedia, como videos y animaciones, para atraer la atención del público.</li>
                <li>Uso de <strong>storytelling visual</strong> para conectar con la audiencia, creando narrativas que combinan datos y emociones.</li>
                <li>Exportación a <strong>PDF o video</strong> para distribución en diferentes formatos, facilitando el acceso a la información.</li>
                <li>Creación de <strong>presentaciones interactivas</strong> con hipervínculos y botones de acción para navegar entre diapositivas y recursos externos.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Elementos de la interfaz -->
        <div class="card">
          <h4>Elementos de la interfaz de PowerPoint 2025</h4>
          <p>La interfaz de PowerPoint 2025 está organizada para maximizar la productividad. A continuación, se describen los elementos principales de la interfaz:</p>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Cinta de opciones (Ribbon):</strong> Organizada en pestañas como <strong>Inicio</strong> (herramientas básicas de formato), <strong>Insertar</strong> (para añadir elementos como imágenes, gráficos y tablas), <strong>Diseño</strong> (para aplicar temas y fondos), <strong>Transiciones</strong> (efectos entre diapositivas), <strong>Animaciones</strong> (movimientos dentro de una diapositiva), <strong>Presentación con diapositivas</strong> (herramientas para presentar), <strong>Revisar</strong> (corrección y comentarios) y <strong>Vista</strong> (opciones de visualización).</li>
                <li><strong>Barra de herramientas de acceso rápido:</strong> Atajos personalizables para funciones frecuentes como <strong>Guardar</strong>, <strong>Deshacer</strong> y <strong>Rehacer</strong>. Puedes añadir más comandos según tus necesidades.</li>
                <li><strong>Panel de diapositivas:</strong> Muestra miniaturas de las diapositivas para navegar y organizar fácilmente el contenido de la presentación. Permite arrastrar y soltar diapositivas para cambiar su orden.</li>
                <li><strong>Área de trabajo:</strong> Espacio principal para editar la diapositiva actual, donde puedes añadir y modificar texto, imágenes y otros elementos.</li>
                <li><strong>Barra de título:</strong> Muestra el nombre del archivo y los controles estándar de ventana (minimizar, maximizar, cerrar).</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Área de notas:</strong> Espacio para añadir notas del orador, útil durante la presentación para recordar puntos clave o detalles adicionales que no están en las diapositivas.</li>
                <li><strong>Barra de estado:</strong> Información como número de diapositivas, tema aplicado, estado de guardado y zoom actual. También muestra alertas y mensajes del sistema.</li>
                <li><strong>Vistas:</strong> Opciones como <strong>Normal</strong> (edición estándar), <strong>Clasificador de diapositivas</strong> (vista general de todas las diapositivas), <strong>Presentación con diapositivas</strong> (modo de presentación a pantalla completa) y <strong>Modo lectura</strong> (vista optimizada para leer).</li>
                <li><strong>Zoom:</strong> Control para acercar o alejar el área de trabajo, útil para trabajar con detalles pequeños o ver una visión general de la diapositiva.</li>
                <li><strong>Barra de desplazamiento:</strong> Permite navegar vertical y horizontalmente en diapositivas grandes o con mucho contenido.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x400/B7472A/FFFFFF?text=Interfaz+de+PowerPoint+2025" alt="Interfaz de PowerPoint 2025">
                <figcaption>Interfaz de PowerPoint 2025 con la cinta de opciones, panel de diapositivas, área de trabajo y área de notas.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa la vista <strong>Clasificador de diapositivas</strong> (<span class="keyboard-shortcut">Alt + W + 2</span>) para reorganizar diapositivas rápidamente. Esta vista te permite ver todas las diapositivas en miniatura y arrastrarlas para cambiar su orden, lo que es especialmente útil en presentaciones largas.
          </div>
        </div>

        <!-- Cómo crear, guardar, abrir y cerrar presentaciones -->
        <div class="card">
          <h4>Cómo crear, guardar, abrir y cerrar presentaciones</h4>
          <p>Operaciones básicas para manejar archivos en PowerPoint 2025:</p>
          <div class="grid grid-2">
            <div>
              <h5>Crear una presentación</h5>
              <ul class="steps">
                <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + N</span> para crear una presentación en blanco rápidamente.</li>
                <li>O haz clic en <strong>Archivo → Nuevo</strong> y elige entre las siguientes opciones:</li>
                <ul class="steps">
                  <li><strong>Presentación en blanco</strong>: Ideal para empezar desde cero y personalizar cada aspecto del diseño.</li>
                  <li><strong>Plantillas</strong>: Diseños predefinidos para negocios, educación, marketing y otros propósitos. Las plantillas incluyen esquemas de color, fuentes y diseños de diapositivas listos para usar.</li>
                  <li><strong>Temas</strong>: Combinaciones de colores y fuentes que puedes aplicar a una presentación en blanco para darle un aspecto profesional rápidamente.</li>
                  <li><strong>Presentaciones recientes</strong>: Acceso rápido a los archivos abiertos recientemente.</li>
                </ul>
                <li>PowerPoint 2025 también ofrece la opción de crear presentaciones a partir de documentos de Word o esquemas, utilizando la inteligencia artificial de Copilot para generar diapositivas automáticamente.</li>
              </ul>
            </div>
            <div>
              <h5>Guardar una presentación</h5>
              <ul class="steps">
                <li>Usa <span class="keyboard-shortcut">Ctrl + S</span> para guardar los cambios realizados en la presentación actual.</li>
                <li>Para guardar como un nuevo archivo, usa <span class="keyboard-shortcut">F12</span> o ve a <strong>Archivo → Guardar como</strong>.</li>
                <li>Formatos disponibles para guardar:</li>
                <ul class="steps">
                  <li><strong>.pptx</strong>: Formato estándar de PowerPoint, compatible con versiones recientes y ideal para editar y compartir.</li>
                  <li><strong>.ppsx</strong>: Presentación lista para mostrar, se abre directamente en modo presentación sin editar.</li>
                  <li><strong>.pdf</strong>: Para distribución impresa o digital sin riesgo de edición, preservando el formato y diseño.</li>
                  <li><strong>.potx</strong>: Plantilla reutilizable, útil para crear presentaciones con un diseño consistente.</li>
                  <li><strong>.mp4</strong>: Exportar la presentación como video, incluyendo narraciones, transiciones y animaciones.</li>
                  <li><strong>.odp</strong>: Formato OpenDocument para compatibilidad con software de código abierto como LibreOffice.</li>
                </ul>
                <li>PowerPoint 2025 también permite guardar presentaciones directamente en OneDrive o SharePoint para acceder a ellas desde cualquier dispositivo y colaborar en tiempo real.</li>
              </ul>
            </div>
          </div>
          <div class="grid grid-2">
            <div>
              <h5>Abrir una presentación</h5>
              <ul class="steps">
                <li>Usa <span class="keyboard-shortcut">Ctrl + O</span> para abrir una presentación existente.</li>
                <li>O haz clic en <strong>Archivo → Abrir</strong> y selecciona desde:</li>
                <ul class="steps">
                  <li><strong>Este equipo</strong>: Archivos almacenados localmente en tu computadora.</li>
                  <li><strong>OneDrive</strong>: Archivos almacenados en la nube, accesibles desde cualquier dispositivo con conexión a internet.</li>
                  <li><strong>Recientes</strong>: Presentaciones abiertas recientemente, para un acceso rápido.</li>
                  <li><strong>Sitios de SharePoint</strong>: Archivos almacenados en sitios de SharePoint de tu organización.</li>
                </ul>
                <li>PowerPoint 2025 muestra una vista previa de los archivos al seleccionarlos, lo que facilita identificar la presentación correcta.</li>
              </ul>
            </div>
            <div>
              <h5>Cerrar una presentación</h5>
              <ul class="steps">
                <li>Usa <span class="keyboard-shortcut">Ctrl + W</span> para cerrar la presentación actual.</li>
                <li>O haz clic en la <strong>X</strong> de la pestaña de la presentación.</li>
                <li>PowerPoint pregunta si deseas guardar los cambios antes de cerrar, lo que ayuda a evitar la pérdida de información.</li>
                <li>Si trabajas con múltiples presentaciones abiertas, puedes cerrarlas todas a la vez desde <strong>Archivo → Cerrar todo</strong>.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Guardar+y+Abrir" alt="Guardar y abrir en PowerPoint">
                <figcaption>Ejemplo de cómo guardar, abrir y cerrar presentaciones en PowerPoint 2025, incluyendo opciones para guardar en la nube y acceder a archivos recientes.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout warn">
            <strong>Importante:</strong> Activa el <strong>AutoGuardado</strong> en OneDrive (<strong>Archivo → Opciones → Guardar</strong>) para evitar perder cambios en caso de cierre inesperado o errores del sistema. El AutoGuardado guarda automáticamente los cambios cada pocos segundos, lo que proporciona tranquilidad al trabajar en presentaciones importantes.
          </div>
        </div>

        <!-- Formatos de archivo -->
        <div class="card">
          <h4>Formatos de archivo en PowerPoint 2025</h4>
          <p>PowerPoint 2025 soporta múltiples formatos para diferentes necesidades. A continuación, se detallan los formatos más comunes y sus usos recomendados:</p>
          <table>
            <thead>
              <tr>
                <th>Formato</th>
                <th>Extensión</th>
                <th>Uso recomendado</th>
                <th>Detalles adicionales</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Presentación de PowerPoint</td>
                <td>.pptx</td>
                <td>Formato estándar para editar y compartir presentaciones.</td>
                <td>Compatibilidad total con PowerPoint 2007 y versiones posteriores. Permite editar todos los elementos de la presentación.</td>
              </tr>
              <tr>
                <td>Presentación de PowerPoint (solo lectura)</td>
                <td>.ppsx</td>
                <td>Para abrir directamente en modo presentación sin editar.</td>
                <td>Útil para enviar presentaciones que solo deben ser vistas, sin riesgo de modificaciones accidentales.</td>
              </tr>
              <tr>
                <td>Plantilla de PowerPoint</td>
                <td>.potx</td>
                <td>Guardar diseños reutilizables con estilos predefinidos.</td>
                <td>Las plantillas incluyen diseños de diapositivas, esquemas de color y fuentes, y pueden ser personalizadas para diferentes proyectos.</td>
              </tr>
              <tr>
                <td>PDF</td>
                <td>.pdf</td>
                <td>Distribución impresa o digital sin riesgo de edición.</td>
                <td>Preserva el formato y diseño de la presentación, pero no permite editar el contenido. Ideal para compartir con clientes o imprimir.</td>
              </tr>
              <tr>
                <td>Video</td>
                <td>.mp4</td>
                <td>Exportar presentaciones con narración y transiciones como video.</td>
                <td>Permite incluir narraciones, animaciones y transiciones en un formato de video, ideal para compartir en plataformas como YouTube o redes sociales.</td>
              </tr>
              <tr>
                <td>Imágenes</td>
                <td>.jpg, .png</td>
                <td>Guardar diapositivas individuales como imágenes.</td>
                <td>Útil para crear miniaturas, compartir diapositivas en redes sociales o insertarlas en documentos.</td>
              </tr>
              <tr>
                <td>OpenDocument</td>
                <td>.odp</td>
                <td>Compatibilidad con software de código abierto como LibreOffice.</td>
                <td>Permite abrir y editar presentaciones en programas alternativos a PowerPoint, aunque algunas funciones avanzadas pueden no ser compatibles.</td>
              </tr>
              <tr>
                <td>Macro de PowerPoint</td>
                <td>.ppsm</td>
                <td>Presentaciones con macros habilitadas.</td>
                <td>Permite ejecutar macros y automatizar tareas, pero puede representar un riesgo de seguridad si se abren archivos de fuentes no confiables.</td>
              </tr>
              <tr>
                <td>Plantilla de macro de PowerPoint</td>
                <td>.potm</td>
                <td>Plantillas con macros habilitadas.</td>
                <td>Similar a .potx, pero con soporte para macros, útil para automatizar procesos en presentaciones reutilizables.</td>
              </tr>
            </tbody>
          </table>
          <div class="callout info">
            <strong>Consejo:</strong> Usa el formato <strong>.ppsx</strong> para enviar presentaciones que no requieran edición, ya que se abren directamente en modo pantalla completa. Esto es especialmente útil para presentaciones que se enviarán a clientes o colegas que solo necesitan ver el contenido.
          </div>
        </div>
      </section>

      <!-- Módulo 2: Creación de Presentaciones -->
      <section id="modulo2" class="block">
        <div class="module-icon">
          <i class="fa-regular fa-file-powerpoint"></i>
          <span>Módulo 2: Creación de Presentaciones</span>
        </div>
        <h3>Módulo 2. Creación de Presentaciones</h3>
        <p class="lead">Aprende a crear presentaciones desde cero, utilizando plantillas, patrones de diapositivas y diseños predefinidos. Este módulo te enseñará a manejar las herramientas básicas para estructurar tus diapositivas de manera profesional. Desde la creación de una presentación en blanco hasta el uso de plantillas personalizadas, dominarás las técnicas para organizar y diseñar diapositivas efectivas.</p>

        <!-- Crear una presentación en blanco -->
        <div class="card">
          <h4>Crear una presentación en blanco</h4>
          <p>Comienza con una presentación en blanco para tener total libertad en el diseño. Esto es ideal cuando necesitas un diseño personalizado o cuando ninguna de las plantillas predefinidas se ajusta a tus necesidades:</p>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + N</span> para crear una presentación en blanco rápidamente.</li>
                <li>O haz clic en <strong>Archivo → Nuevo → Presentación en blanco</strong>.</li>
                <li>Beneficios de empezar en blanco:</li>
                <ul class="steps">
                  <li>Total libertad para personalizar diseño, colores y fuentes según tus preferencias o las guías de estilo de tu organización.</li>
                  <li>Ideal para presentaciones con requisitos específicos de diseño o contenido, donde las plantillas predefinidas no son adecuadas.</li>
                  <li>Permite aplicar tu propio estilo corporativo o personal, asegurando que la presentación refleje tu identidad visual.</li>
                  <li>Facilita la creación de diseños únicos y creativos, sin las limitaciones de las plantillas estándar.</li>
                </ul>
                <li>Al crear una presentación en blanco, PowerPoint 2025 te ofrece una diapositiva de título predeterminada, que puedes personalizar o eliminar según tus necesidades.</li>
              </ul>
            </div>
            <div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Presentación+en+Blanco" alt="Presentación en blanco en PowerPoint">
                <figcaption>Presentación en blanco en PowerPoint 2025, lista para personalizar con tus propios diseños, colores y contenido.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Si no estás seguro de por dónde empezar, usa la opción <strong>Diseño de diapositivas</strong> en la pestaña <strong>Inicio</strong> para aplicar un diseño básico a tu diapositiva en blanco. Esto te dará una estructura inicial que podrás personalizar posteriormente.
          </div>
        </div>

        <!-- Uso de plantillas prediseñadas y temas -->
        <div class="card">
          <h4>Uso de plantillas prediseñadas y temas</h4>
          <p>Las plantillas y temas te permiten ahorrar tiempo y mantener un diseño profesional. PowerPoint 2025 ofrece una amplia variedad de plantillas para diferentes propósitos, desde presentaciones empresariales hasta proyectos educativos. Los temas, por otro lado, proporcionan esquemas de color y fuentes coherentes que puedes aplicar a cualquier presentación:</p>
          <div class="grid grid-2">
            <div>
              <h5>Seleccionar una plantilla</h5>
              <ul class="steps">
                <li>Ve a <strong>Archivo → Nuevo</strong> para acceder a la galería de plantillas.</li>
                <li>Explora categorías como:</li>
                <ul class="steps">
                  <li><strong>Negocios</strong>: Plantillas para informes, propuestas, pitches y presentaciones corporativas. Incluyen diseños profesionales con gráficos, tablas y espacios para contenido.</li>
                  <li><strong>Educación</strong>: Plantillas para lecciones, proyectos, portafolios y presentaciones académicas. Suelen incluir diseños claros y espacios para texto e imágenes.</li>
                  <li><strong>Marketing</strong>: Plantillas para campañas, catálogos, informes de mercado y presentaciones promocionales. Incluyen diseños llamativos con espacios para imágenes y gráficos.</li>
                  <li><strong>Eventos</strong>: Plantillas para invitaciones, programas, presentaciones de eventos y ceremonias. Suelen incluir diseños temáticos y espacios para detalles logísticos.</li>
                  <li><strong>Personales</strong>: Plantillas para currículums, portafolios, álbumes de fotos y presentaciones personales. Incluyen diseños creativos y espacios para contenido multimedia.</li>
                </ul>
                <li>Selecciona una plantilla y haz clic en <strong>Crear</strong> para abrir una nueva presentación basada en ese diseño.</li>
                <li>PowerPoint aplicará automáticamente diseños, colores y fuentes predefinidos, que podrás personalizar según tus necesidades.</li>
                <li>Las plantillas suelen incluir diapositivas de ejemplo con sugerencias de contenido, que puedes modificar o eliminar.</li>
              </ul>
            </div>
            <div>
              <h5>Aplicar un tema</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Diseño</strong> para acceder a la galería de temas.</li>
                <li>Selecciona un tema de la galería. Algunos ejemplos populares incluyen:</li>
                <ul class="steps">
                  <li><strong>Organico</strong>: Diseño moderno con colores naturales y fuentes limpias, ideal para presentaciones corporativas o educativas.</li>
                  <li><strong>Ion</strong>: Tema con un enfoque minimalista y colores vibrantes, adecuado para presentaciones creativas o de marketing.</li>
                  <li><strong>Faceta</strong>: Diseño elegante con tonos oscuros y fuentes sofisticadas, ideal para presentaciones formales o eventos.</li>
                  <li><strong>Verve</strong>: Tema colorido y dinámico, perfecto para presentaciones informales o proyectos creativos.</li>
                </ul>
                <li>Personaliza el tema con las siguientes opciones:</li>
                <ul class="steps">
                  <li><strong>Colores</strong>: Cambia la paleta de colores del tema para que coincida con tu identidad visual o preferencias personales.</li>
                  <li><strong>Fuentes</strong>: Selecciona combinaciones de tipografías que se apliquen a títulos y texto del cuerpo en toda la presentación.</li>
                  <li><strong>Efectos</strong>: Ajusta sombras, reflejos y estilos 3D para dar profundidad y estilo a los elementos de tus diapositivas.</li>
                  <li><strong>Fondos</strong>: Cambia el estilo de fondo del tema, incluyendo colores sólidos, degradados, texturas o imágenes.</li>
                </ul>
                <li>Los temas se aplican a toda la presentación, asegurando coherencia visual en todas las diapositivas.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Plantillas+y+Temas" alt="Plantillas y temas en PowerPoint">
                <figcaption>Galería de plantillas y temas en PowerPoint 2025, con opciones para negocios, educación, marketing y eventos. Las plantillas incluyen diseños predefinidos que puedes personalizar según tus necesidades.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa plantillas de sitios como <a href="https://templates.office.com" target="_blank">Office Templates</a> o <a href="https://slidesgo.com" target="_blank">Slidesgo</a> para acceder a diseños profesionales gratuitos. Estos sitios ofrecen una amplia variedad de plantillas para diferentes propósitos, desde presentaciones académicas hasta informes corporativos.
          </div>
        </div>

        <!-- Insertar, duplicar y eliminar diapositivas -->
        <div class="card">
          <h4>Insertar, duplicar y eliminar diapositivas</h4>
          <p>Gestiona las diapositivas de tu presentación con estas herramientas esenciales. Saber cómo insertar, duplicar y eliminar diapositivas te permitirá organizar y estructurar tu contenido de manera efectiva:</p>
          <div class="grid grid-2">
            <div>
              <h5>Insertar una diapositiva</h5>
              <ul class="steps">
                <li>Haz clic en <strong>Inicio → Nueva diapositiva</strong> para insertar una nueva diapositiva después de la seleccionada.</li>
                <li>O usa el atajo <span class="keyboard-shortcut">Ctrl + M</span> para insertar una diapositiva rápidamente.</li>
                <li>Selecciona un diseño para la nueva diapositiva:</li>
                <ul class="steps">
                  <li><strong>Título</strong>: Diseño con un título prominente, ideal para diapositivas de introducción o secciones.</li>
                  <li><strong>Título y contenido</strong>: Incluye un título y un área de contenido para texto, imágenes, gráficos o tablas. Es el diseño más versátil y utilizado.</li>
                  <li><strong>Sección</strong>: Diseño para separar temas o secciones dentro de la presentación, útil para organizar contenido largo.</li>
                  <li><strong>Comparación</strong>: Diseño con dos áreas de contenido, ideal para mostrar diferencias o comparaciones entre dos elementos.</li>
                  <li><strong>Dos contenidos</strong>: Similar al diseño de comparación, pero con un título adicional para cada área de contenido.</li>
                  <li><strong>Solo título</strong>: Diseño minimalista con solo un título, útil para diapositivas de transición o mensajes simples.</li>
                  <li><strong>En blanco</strong>: Diapositiva completamente en blanco, ideal para diseños personalizados o contenido gráfico.</li>
                </ul>
                <li>PowerPoint 2025 también permite insertar diapositivas desde otras presentaciones, usando la opción <strong>Reutilizar diapositivas</strong> en el menú <strong>Inicio</strong>.</li>
              </ul>
            </div>
            <div>
              <h5>Duplicar una diapositiva</h5>
              <ul class="steps">
                <li>Selecciona la diapositiva que deseas duplicar en el panel izquierdo, donde se muestran las miniaturas.</li>
                <li>Haz clic derecho sobre la diapositiva y elige <strong>Duplicar diapositiva</strong> en el menú contextual.</li>
                <li>O usa el atajo <span class="keyboard-shortcut">Ctrl + D</span> para duplicar la diapositiva seleccionada rápidamente.</li>
                <li>Duplicar diapositivas es útil para:</li>
                <ul class="steps">
                  <li>Mantener el formato y contenido similar en diapositivas consecutivas, ahorrando tiempo en el diseño.</li>
                  <li>Crear variaciones de una diapositiva con cambios menores, como actualizar datos o imágenes.</li>
                  <li>Experimentar con diferentes diseños o contenidos sin perder la versión original.</li>
                </ul>
              </ul>
            </div>
          </div>
          <div class="grid grid-2">
            <div>
              <h5>Eliminar una diapositiva</h5>
              <ul class="steps">
                <li>Selecciona la diapositiva que deseas eliminar en el panel izquierdo.</li>
                <li>Presiona la tecla <span class="keyboard-shortcut">Supr</span> (Delete) en tu teclado.</li>
                <li>O haz clic derecho sobre la diapositiva y elige <strong>Eliminar diapositiva</strong> en el menú contextual.</li>
                <li>PowerPoint no pide confirmación al eliminar una diapositiva, pero puedes deshacer la acción inmediatamente usando <span class="keyboard-shortcut">Ctrl + Z</span>.</li>
                <li>Si eliminas una diapositiva por error y no te das cuenta de inmediato, puedes recuperar versiones anteriores de la presentación usando el historial de versiones en OneDrive o SharePoint.</li>
              </ul>
            </div>
            <div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Gestionar+Diapositivas" alt="Gestionar diapositivas en PowerPoint">
                <figcaption>Panel de diapositivas en PowerPoint 2025, mostrando cómo insertar, duplicar y eliminar diapositivas. El panel permite una gestión eficiente del contenido de la presentación.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa la vista <strong>Clasificador de diapositivas</strong> (<span class="keyboard-shortcut">Alt + W + 2</span>) para reorganizar diapositivas rápidamente. Esta vista te permite ver todas las diapositivas en miniatura y arrastrarlas para cambiar su orden, lo que es especialmente útil en presentaciones largas o complejas.
          </div>
        </div>

        <!-- Cambiar el diseño y disposición de diapositivas -->
        <div class="card">
          <h4>Cambiar el diseño y disposición de diapositivas</h4>
          <p>Personaliza el diseño de tus diapositivas para adaptarlas a tu contenido y estilo. PowerPoint 2025 ofrece una variedad de diseños predefinidos y herramientas para ajustar la disposición de los elementos en tus diapositivas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Cambiar el diseño</h5>
              <ul class="steps">
                <li>Selecciona la diapositiva que deseas modificar en el panel izquierdo.</li>
                <li>Ve a la pestaña <strong>Inicio</strong> y haz clic en <strong>Diseño</strong> para acceder a la galería de diseños.</li>
                <li>Elige entre opciones como:</li>
                <ul class="steps">
                  <li><strong>Título</strong>: Diseño con un título prominente en la parte superior, ideal para diapositivas de introducción o títulos de sección.</li>
                  <li><strong>Título y contenido</strong>: Incluye un título y un área de contenido flexible para texto, imágenes, gráficos, tablas o multimedia. Es el diseño más versátil.</li>
                  <li><strong>Sección</strong>: Diseño para separar secciones dentro de la presentación, útil para organizar contenido largo en partes lógicas.</li>
                  <li><strong>Dos contenidos</strong>: Diseño con dos áreas de contenido lado a lado, ideal para comparaciones o mostrar información relacionada.</li>
                  <li><strong>Solo título</strong>: Diseño minimalista con solo un título, útil para diapositivas de transición o mensajes simples.</li>
                  <li><strong>En blanco</strong>: Diapositiva completamente en blanco, ideal para diseños personalizados o contenido gráfico sin estructura predefinida.</li>
                  <li><strong>Contenido con título</strong>: Similar a "Título y contenido", pero con el área de contenido en la parte superior y el título en la parte inferior.</li>
                </ul>
                <li>Al cambiar el diseño, PowerPoint conserva el contenido existente y lo ajusta al nuevo diseño siempre que sea posible.</li>
              </ul>
            </div>
            <div>
              <h5>Personalizar la disposición</h5>
              <ul class="steps">
                <li>Arrastra los marcadores de posición (placeholders) dentro de la diapositiva para reorganizar su disposición según tus necesidades.</li>
                <li>Ajusta el tamaño de los cuadros de texto, imágenes u otros elementos arrastrando sus bordes o esquinas.</li>
                <li>Usa las <strong>Guías</strong> (<span class="keyboard-shortcut">Alt + F9</span>) para alinear elementos con precisión. Las guías son líneas que aparecen en la diapositiva para ayudarte a alinear objetos.</li>
                <li>Activa la <strong>Cuadrícula</strong> en <strong>Vista → Mostrar → Cuadrícula</strong> para alinear elementos a una cuadrícula invisible, lo que facilita la creación de diseños ordenados.</li>
                <li>Usa la función <strong>Alinear</strong> en la pestaña <strong>Inicio</strong> para alinear múltiples elementos seleccionados entre sí o con respecto a la diapositiva.</li>
                <li>La opción <strong>Distribuir</strong> te permite espaciar elementos seleccionados de manera uniforme, ya sea horizontal o verticalmente.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Diseño+de+Diapositivas" alt="Diseño de diapositivas en PowerPoint">
                <figcaption>Ejemplo de cómo cambiar diseños y disposiciones en PowerPoint 2025. La imagen muestra una diapositiva con marcadores de posición para título y contenido, así como herramientas para alinear y distribuir elementos.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Si necesitas un diseño que no está disponible en los diseños predefinidos, puedes crear un diseño personalizado usando una diapositiva en blanco y luego guardarlo como parte del patrón de diapositivas para reutilizarlo en otras diapositivas.
          </div>
        </div>

        <!-- Uso del patrón de diapositivas (Slide Master) -->
        <div class="card">
          <h4>Uso del patrón de diapositivas (Slide Master)</h4>
          <p>El patrón de diapositivas (Slide Master) te permite definir estilos globales para toda la presentación. Esto incluye colores, fuentes, fondos, logotipos y otros elementos que deseas que aparezcan en todas las diapositivas. Usar el patrón de diapositivas asegura coherencia visual y ahorra tiempo al aplicar cambios globales:</p>
          <div class="grid grid-2">
            <div>
              <h5>Acceder al patrón de diapositivas</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Vista</strong> y selecciona <strong>Patrón de diapositivas</strong> para abrir el editor del patrón.</li>
                <li>En el editor del patrón de diapositivas, verás:</li>
                <ul class="steps">
                  <li><strong>Patrón principal (Slide Master)</strong>: La diapositiva principal que afecta a todas las diapositivas de la presentación. Los cambios realizados aquí se aplicarán a todas las diapositivas.</li>
                  <li><strong>Diseños (Layouts)</strong>: Variantes del patrón principal para diferentes tipos de diapositivas, como títulos, secciones o contenido. Cada diseño hereda los estilos del patrón principal pero puede personalizarse individualmente.</li>
                </ul>
                <li>Selecciona el patrón principal para realizar cambios globales, como añadir un logotipo o cambiar la fuente predeterminada.</li>
                <li>Selecciona un diseño específico para personalizar solo ese tipo de diapositiva, como añadir un pie de página solo a las diapositivas de título.</li>
              </ul>
            </div>
            <div>
              <h5>Personalizar el patrón</h5>
              <ul class="steps">
                <li>Añade elementos comunes a todas las diapositivas:</li>
                <ul class="steps">
                  <li><strong>Logotipos</strong>: Inserta el logotipo de tu organización en la misma posición en todas las diapositivas, asegurando coherencia visual.</li>
                  <li><strong>Pies de página</strong>: Incluye información como el número de diapositiva, la fecha o el nombre de la presentación en cada diapositiva.</li>
                  <li><strong>Fondos o imágenes de marca</strong>: Aplica un fondo común o una imagen de marca que aparezca en todas las diapositivas.</li>
                  <li><strong>Encabezados</strong>: Añade un encabezado con el título de la presentación o el nombre del evento.</li>
                </ul>
                <li>Define estilos globales para:</li>
                <ul class="steps">
                  <li><strong>Títulos y subtítulos</strong>: Establece el tamaño, fuente, color y alineación de los títulos en todas las diapositivas.</li>
                  <li><strong>Viñetas y niveles de texto</strong>: Personaliza el estilo de las viñetas, incluyendo su forma, tamaño, color y sangría.</li>
                  <li><strong>Colores y fuentes corporativas</strong>: Aplica la paleta de colores y las fuentes de tu organización para mantener la identidad visual.</li>
                  <li><strong>Efectos y estilos</strong>: Define estilos para formas, imágenes y otros elementos, como bordes, sombras y efectos 3D.</li>
                </ul>
                <li>Usa el patrón de diapositivas para crear diseños personalizados que puedas aplicar a diapositivas específicas, como diseños para portadas, secciones o diapositivas de cierre.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Patrón+de+Diapositivas" alt="Patrón de diapositivas en PowerPoint">
                <figcaption>Vista del patrón de diapositivas en PowerPoint 2025, mostrando cómo personalizar diseños globales. La imagen incluye el patrón principal y varios diseños de diapositivas, así como herramientas para añadir logotipos, pies de página y estilos de texto.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa el patrón de diapositivas para mantener <strong>coherencia visual</strong> en presentaciones largas o corporativas. Esto asegura que todas las diapositivas tengan el mismo estilo, lo que mejora la profesionalidad y facilita la creación de presentaciones complejas.
          </div>
        </div>

        <!-- Guardar como plantilla personalizada -->
        <div class="card">
          <h4>Guardar como plantilla personalizada</h4>
          <p>Guarda tus diseños como plantillas para reutilizarlos en futuras presentaciones. Esto es especialmente útil si creas presentaciones con un estilo o estructura similar con frecuencia. Las plantillas personalizadas te permiten mantener la coherencia visual y ahorrar tiempo en el diseño:</p>
          <div class="grid grid-2">
            <div>
              <h5>Guardar una plantilla</h5>
              <ul class="steps">
                <li>Diseña tu presentación con los elementos que deseas incluir en la plantilla:</li>
                <ul class="steps">
                  <li><strong>Logotipos y colores corporativos</strong>: Asegúrate de que la plantilla refleje la identidad visual de tu organización.</li>
                  <li><strong>Estilos de texto y viñetas</strong>: Define fuentes, tamaños y estilos para títulos, subtítulos y texto del cuerpo.</li>
                  <li><strong>Diseños de diapositivas personalizados</strong>: Crea y guarda diseños específicos para diferentes tipos de diapositivas, como portadas, secciones o diapositivas de contenido.</li>
                  <li><strong>Elementos gráficos</strong>: Incluye formas, íconos o imágenes que uses frecuentemente en tus presentaciones.</li>
                </ul>
                <li>Ve a <strong>Archivo → Guardar como</strong> y selecciona la ubicación donde deseas guardar la plantilla.</li>
                <li>En el cuadro de diálogo <strong>Guardar como</strong>, selecciona <strong>Plantilla de PowerPoint (*.potx)</strong> en el menú desplegable de tipos de archivo.</li>
                <li>Guarda la plantilla en la carpeta <strong>Plantillas personalizadas de Office</strong> para que aparezca en la galería de plantillas al crear una nueva presentación.</li>
                <li>Asigna un nombre descriptivo a la plantilla para facilitar su identificación posterior.</li>
              </ul>
            </div>
            <div>
              <h5>Usar una plantilla personalizada</h5>
              <ul class="steps">
                <li>Ve a <strong>Archivo → Nuevo → Personalizado</strong> para acceder a tus plantillas guardadas.</li>
                <li>Selecciona tu plantilla personalizada y haz clic en <strong>Crear</strong> para abrir una nueva presentación basada en ese diseño.</li>
                <li>Beneficios de usar plantillas personalizadas:</li>
                <ul class="steps">
                  <li><strong>Consistencia en diseños</strong>: Todas tus presentaciones tendrán el mismo estilo visual, lo que refuerza tu identidad corporativa o personal.</li>
                  <li><strong>Ahorro de tiempo</strong>: No necesitas rediseñar cada presentación desde cero, ya que la plantilla incluye todos los elementos y estilos que usas con frecuencia.</li>
                  <li><strong>Mantenimiento de identidad visual</strong>: Asegura que todas tus presentaciones cumplan con las guías de estilo de tu organización.</li>
                  <li><strong>Flexibilidad</strong>: Puedes modificar la plantilla según las necesidades específicas de cada presentación, añadiendo o eliminando elementos según sea necesario.</li>
                </ul>
                <li>Actualiza tus plantillas periódicamente para reflejar cambios en tu identidad visual o necesidades de diseño.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Plantillas+Personalizadas" alt="Plantillas personalizadas en PowerPoint">
                <figcaption>Ejemplo de cómo guardar y usar plantillas personalizadas en PowerPoint 2025. La imagen muestra el proceso de guardado de una plantilla y su posterior selección al crear una nueva presentación.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Comparte tus plantillas personalizadas con tu equipo de trabajo guardándolas en una ubicación compartida en OneDrive o SharePoint. Esto asegura que todos los miembros del equipo usen los mismos estilos y diseños, mejorando la coherencia en las presentaciones de la organización.
          </div>
        </div>
      </section>

      <!-- Módulo 3: Manejo y Formato de Texto -->
      <section id="modulo3" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-font"></i>
          <span>Módulo 3: Manejo y Formato de Texto</span>
        </div>
        <h3>Módulo 3. Manejo y Formato de Texto</h3>
        <p class="lead">Aprende a insertar, editar y dar formato al texto en tus diapositivas. Este módulo cubre desde lo básico, como insertar cuadros de texto y cambiar fuentes, hasta técnicas avanzadas para mejorar la legibilidad y el impacto visual de tu contenido. Dominar el manejo del texto te permitirá crear diapositivas claras, profesionales y efectivas.</p>

        <!-- Insertar y editar cuadros de texto -->
        <div class="card">
          <h4>Insertar y editar cuadros de texto</h4>
          <p>Los cuadros de texto son esenciales para añadir contenido a tus diapositivas. PowerPoint 2025 ofrece herramientas flexibles para insertar, mover, redimensionar y formatear cuadros de texto, lo que te permite organizar la información de manera efectiva:</p>
          <div class="grid grid-2">
            <div>
              <h5>Insertar un cuadro de texto</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Cuadro de texto</strong> en el grupo <strong>Texto</strong>.</li>
                <li>Haz clic en la diapositiva donde deseas insertar el cuadro de texto y arrastra para definir su tamaño inicial.</li>
                <li>Escribe o pega el texto dentro del cuadro. PowerPoint ajusta automáticamente el tamaño del cuadro si el texto excede sus límites, aunque puedes desactivar esta opción si lo prefieres.</li>
                <li>Ajusta el tamaño del cuadro de texto arrastrando sus controladores (los pequeños círculos o cuadrados en los bordes).</li>
                <li>Mueve el cuadro de texto arrastrándolo a la posición deseada en la diapositiva.</li>
                <li>PowerPoint 2025 también permite convertir formas en cuadros de texto, lo que te da más flexibilidad en el diseño.</li>
              </ul>
            </div>
            <div>
              <h5>Editar un cuadro de texto</h5>
              <ul class="steps">
                <li>Selecciona el cuadro de texto haciendo clic en su borde. Aparecerán controladores alrededor del cuadro para indicar que está seleccionado.</li>
                <li>Edita el contenido del cuadro de texto haciendo clic dentro de él y modificando el texto según sea necesario.</li>
                <li>Cambia el tamaño o posición del cuadro arrastrando sus bordes o el cuadro en sí.</li>
                <li>Usa las opciones de formato en la pestaña <strong>Inicio</strong> para personalizar el texto:</li>
                <ul class="steps">
                  <li><strong>Fuente</strong>: Cambia el tipo de letra, tamaño, color y estilo (negrita, cursiva, subrayado).</li>
                  <li><strong>Alineación</strong>: Ajusta la alineación del texto (izquierda, centro, derecha, justificado).</li>
                  <li><strong>Viñetas y numeración</strong>: Añade viñetas o numeración para organizar listas y mejorar la legibilidad.</li>
                  <li><strong>Espaciado</strong>: Modifica el interlineado y el espaciado entre párrafos para mejorar la distribución del texto.</li>
                  <li><strong>Efectos de texto</strong>: Aplica sombras, contornos, reflejos y otros efectos para resaltar el texto.</li>
                </ul>
                <li>Usa la opción <strong>Formato de forma</strong> (que aparece al seleccionar el cuadro de texto) para personalizar el fondo, bordes y efectos del cuadro en sí.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Cuadros+de+Texto" alt="Cuadros de texto en PowerPoint">
                <figcaption>Ejemplo de cómo insertar y editar cuadros de texto en PowerPoint 2025. La imagen muestra un cuadro de texto seleccionado, con opciones de formato visibles en la cinta de opciones.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Para mantener la coherencia visual, usa los estilos de texto definidos en el patrón de diapositivas. Esto asegura que todos los cuadros de texto en tu presentación tengan el mismo formato, lo que mejora la profesionalidad y facilita la edición.
          </div>
        </div>

        <!-- Cambiar fuente, tamaño y color -->
        <div class="card">
          <h4>Cambiar fuente, tamaño y color</h4>
          <p>Personaliza el texto para mejorar la legibilidad y el diseño de tus diapositivas. PowerPoint 2025 ofrece una amplia variedad de opciones para ajustar la apariencia del texto, lo que te permite adaptarlo al estilo de tu presentación y a las necesidades de tu audiencia:</p>
          <div class="grid grid-2">
            <div>
              <h5>Fuente y tamaño</h5>
              <ul class="steps">
                <li>Selecciona el texto que deseas modificar. Puedes seleccionar un cuadro de texto completo, un párrafo o incluso caracteres individuales.</li>
                <li>Ve a la pestaña <strong>Inicio</strong> y usa las opciones del grupo <strong>Fuente</strong> para cambiar:</li>
                <ul class="steps">
                  <li><strong>Tipo de fuente</strong>: Elige entre fuentes instaladas en tu sistema. PowerPoint 2025 incluye fuentes seguras para la web, como:</li>
                  <ul class="steps">
                    <li><strong>Calibri</strong>: Fuente moderna y legible, ideal para presentaciones profesionales y académicas.</li>
                    <li><strong>Arial</strong>: Fuente clásica y versátil, ampliamente utilizada en documentos y presentaciones.</li>
                    <li><strong>Times New Roman</strong>: Fuente formal y tradicional, adecuada para presentaciones académicas o documentos oficiales.</li>
                    <li><strong>Verdana</strong>: Fuente diseñada para pantallas, con buena legibilidad en tamaños pequeños.</li>
                    <li><strong>Helvetica</strong>: Fuente limpia y moderna, popular en diseño gráfico y presentaciones creativas.</li>
                  </ul>
                  <li><strong>Tamaño de fuente</strong>: Ajusta el tamaño del texto. Para presentaciones, se recomienda:</li>
                  <ul class="steps">
                    <li>Títulos: <strong>36-44 pt</strong> para asegurar visibilidad desde cualquier distancia.</li>
                    <li>Subtítulos: <strong>28-32 pt</strong> para jerarquizar la información.</li>
                    <li>Texto del cuerpo: <strong>18-24 pt</strong> para garantizar legibilidad sin saturar la diapositiva.</li>
                    <li>Pies de página o notas: <strong>12-14 pt</strong>, ya que este texto suele ser secundario.</li>
                  </ul>
                </ul>
                <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + Shift + P</span> para abrir el cuadro de diálogo <strong>Fuente</strong> y ajustar opciones avanzadas, como espaciado entre caracteres o efectos de texto.</li>
                <li>PowerPoint 2025 también permite descargar fuentes adicionales desde Microsoft Fonts o servicios como Google Fonts, ampliando tus opciones de diseño.</li>
              </ul>
            </div>
            <div>
              <h5>Color y efectos</h5>
              <ul class="steps">
                <li>Selecciona el texto y usa el selector de color en el grupo <strong>Fuente</strong> de la pestaña <strong>Inicio</strong> para cambiar el color.</li>
                <li>Puedes elegir entre:</li>
                <ul class="steps">
                  <li><strong>Colores del tema</strong>: Paleta de colores definida en el tema de la presentación, lo que asegura coherencia visual.</li>
                  <li><strong>Colores estándar</strong>: Selección de colores predefinidos por PowerPoint.</li>
                  <li><strong>Más colores</strong>: Selector de color personalizado para elegir cualquier tono.</li>
                  <li><strong>Cuentagotas</strong>: Herramienta para seleccionar un color directamente de una imagen o elemento en la diapositiva.</li>
                </ul>
                <li>Aplica efectos de texto para resaltar información:</li>
                <ul class="steps">
                  <li><strong>Negrita</strong> (<span class="keyboard-shortcut">Ctrl + N</span>): Para enfatizar palabras o frases clave.</li>
                  <li><strong>Cursiva</strong> (<span class="keyboard-shortcut">Ctrl + K</span>): Para destacar términos técnicos, títulos de libros o frases en otros idiomas.</li>
                  <li><strong>Subrayado</strong> (<span class="keyboard-shortcut">Ctrl + S</span>): Para resaltar enlaces o información importante, aunque su uso excesivo puede distraer.</li>
                  <li><strong>Tachado</strong>: Para indicar información obsoleta o errores en el texto.</li>
                  <li><strong>Sombra</strong>: Añade profundidad al texto, útil para títulos o encabezados.</li>
                  <li><strong>Contorno</strong>: Destaca el texto con un borde, ideal para mejorar la legibilidad sobre fondos complejos.</li>
                  <li><strong>Resplandor</strong>: Efecto de brillo alrededor del texto, útil para llamar la atención en presentaciones creativas.</li>
                  <li><strong>Reflejo</strong>: Crea un efecto espejo debajo del texto, añadiendo un toque visual interesante.</li>
                </ul>
                <li>Usa la opción <strong>Formato de texto</strong> (accesible desde el menú contextual al hacer clic derecho en el texto) para ajustar efectos avanzados, como degradados, texturas o contornos personalizados.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Formato+de+Texto" alt="Formato de texto en PowerPoint">
                <figcaption>Ejemplo de cómo cambiar fuente, tamaño, color y efectos de texto en PowerPoint 2025. La imagen muestra el grupo <strong>Fuente</strong> en la cinta de opciones, con opciones para ajustar el tipo de letra, tamaño, color y efectos.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa <strong>fuentes sans-serif</strong> (como Arial, Calibri o Helvetica) para mejor legibilidad en pantallas. Estas fuentes no tienen remates (las pequeñas líneas en los extremos de las letras), lo que las hace más claras y fáciles de leer en presentaciones proyectadas. Evita usar más de dos o tres fuentes diferentes en una misma presentación para mantener la coherencia visual.
          </div>
        </div>

        <!-- Alineación, interlineado y espaciado -->
        <div class="card">
          <h4>Alineación, interlineado y espaciado</h4>
          <p>Ajusta la distribución del texto para mejorar la legibilidad y el diseño de tus diapositivas. Una alineación adecuada y un espaciado consistente hacen que el contenido sea más fácil de seguir y visualmente atractivo:</p>
          <div class="grid grid-2">
            <div>
              <h5>Alineación del texto</h5>
              <ul class="steps">
                <li>Selecciona el texto o párrafo que deseas alinear.</li>
                <li>Usa los botones de alineación en el grupo <strong>Párrafo</strong> de la pestaña <strong>Inicio</strong>:</li>
                <ul class="steps">
                  <li><strong>Izquierda</strong> (<span class="keyboard-shortcut">Ctrl + L</span>): Alinea el texto al margen izquierdo, creando un borde irregular en el margen derecho. Es la alineación más común para textos en español y otros idiomas que se leen de izquierda a derecha.</li>
                  <li><strong>Centro</strong> (<span class="keyboard-shortcut">Ctrl + E</span>): Centra el texto entre los márgenes izquierdo y derecho, útil para títulos, subtítulos y mensajes cortos.</li>
                  <li><strong>Derecha</strong> (<span class="keyboard-shortcut">Ctrl + R</span>): Alinea el texto al margen derecho, creando un borde irregular en el margen izquierdo. Se usa comúnmente en diseños creativos o para textos en idiomas que se leen de derecha a izquierda.</li>
                  <li><strong>Justificar</strong> (<span class="keyboard-shortcut">Ctrl + J</span>): Alinea el texto a ambos márgenes, creando bordes rectos en ambos lados. Es útil para textos largos, como párrafos descriptivos, pero puede crear espacios irregulares entre palabras.</li>
                </ul>
                <li>La alineación afecta la legibilidad y el flujo visual del texto. Por ejemplo, el texto justificado puede parecer más formal, pero puede ser difícil de leer en pantallas si los espacios entre palabras son muy irregulares.</li>
                <li>Para textos en columnas o listas, la alineación a la izquierda suele ser la más legible y profesional.</li>
              </ul>
            </div>
            <div>
              <h5>Interlineado y espaciado</h5>
              <ul class="steps">
                <li>Selecciona el texto o párrafo al que deseas ajustar el interlineado o espaciado.</li>
                <li>Ajusta el interlineado en el grupo <strong>Párrafo</strong> de la pestaña <strong>Inicio</strong>:</li>
                <ul class="steps">
                  <li><strong>1.0</strong>: Espaciado estándar entre líneas, adecuado para la mayoría de los textos en presentaciones.</li>
                  <li><strong>1.5</strong>: Mayor espacio entre líneas, lo que mejora la legibilidad en textos densos o para audiencias que pueden tener dificultades visuales.</li>
                  <li><strong>2.0</strong>: Espaciado doble, útil para textos largos o cuando deseas enfatizar cada línea individualmente.</li>
                  <li><strong>Opciones de interlineado</strong>: Permite definir un valor personalizado en puntos o líneas.</li>
                </ul>
                <li>Ajusta el espaciado antes y después de los párrafos:</li>
                <ul class="steps">
                  <li>Usa las opciones <strong>Espaciado antes</strong> y <strong>Espaciado después</strong> en el cuadro de diálogo <strong>Párrafo</strong> (accesible desde el grupo <strong>Párrafo</strong> en la pestaña <strong>Inicio</strong>).</li>
                  <li>El espaciado entre párrafos ayuda a separar visualmente diferentes ideas o secciones, mejorando la organización del contenido.</li>
                </ul>
                <li>Usa la opción <strong>Sangría</strong> para ajustar la posición horizontal del texto, creando jerarquías visuales en listas o párrafos.</li>
                <li>El interlineado y el espaciado afectan la densidad del texto en la diapositiva. Un interlineado mayor puede hacer que el texto ocupe más espacio, pero mejora la legibilidad.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Alineación+y+Espaciado" alt="Alineación y espaciado en PowerPoint">
                <figcaption>Ejemplo de alineación y espaciado de texto en PowerPoint 2025. La imagen muestra opciones para alinear texto (izquierda, centro, derecha, justificado) y ajustar el interlineado y espaciado entre párrafos.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Para presentaciones proyectadas, usa un interlineado de al menos <strong>1.5</strong> y evita justificar textos largos, ya que los espacios irregulares entre palabras pueden dificultar la lectura. Además, deja suficiente espacio entre párrafos para separar visualmente las ideas y mejorar la claridad.
          </div>
        </div>

        <!-- Viñetas y numeraciones -->
        <div class="card">
          <h4>Viñetas y numeraciones</h4>
          <p>Organiza la información en listas para mejorar la claridad y la estructura de tus diapositivas. Las viñetas y numeraciones son herramientas esenciales para presentar información de manera ordenada y fácil de seguir:</p>
          <div class="grid grid-2">
            <div>
              <h5>Listas con viñetas</h5>
              <ul class="steps">
                <li>Selecciona el texto que deseas convertir en una lista con viñetas. Puede ser un párrafo existente o texto recién escrito.</li>
                <li>Haz clic en el botón <strong>Viñetas</strong> en el grupo <strong>Párrafo</strong> de la pestaña <strong>Inicio</strong>.</li>
                <li>O usa el atajo <span class="keyboard-shortcut">Ctrl + Shift + L</span> para aplicar viñetas rápidamente.</li>
                <li>Personaliza el estilo de las viñetas:</li>
                <ul class="steps">
                  <li>Ve a <strong>Inicio → Viñetas → Definir nueva viñeta</strong> para acceder a opciones avanzadas.</li>
                  <li>Elige entre diferentes símbolos para las viñetas, como:</li>
                  <ul class="steps">
                    <li><strong>Círculos</strong> (●): Viñetas redondas y simples, ideales para listas generales.</li>
                    <li><strong>Cuadrados</strong> (■): Viñetas con forma de cuadrado, útiles para listas con elementos importantes.</li>
                    <li><strong>Flechas</strong> (►): Viñetas en forma de flecha, ideales para indicar pasos o direcciones.</li>
                    <li><strong>Guiones</strong> (−): Viñetas simples y discretas, adecuadas para listas secundarias.</li>
                  </ul>
                  <li>Cambia el color, tamaño y posición de las viñetas para adaptarlas al diseño de tu presentación.</li>
                  <li>Usa imágenes personalizadas como viñetas para añadir un toque creativo a tus listas.</li>
                </ul>
                <li>PowerPoint 2025 permite crear listas anidadas con diferentes niveles de viñetas, lo que es útil para organizar información jerárquica.</li>
                <li>Usa el tabulador (<span class="keyboard-shortcut">Tab</span>) para aumentar el nivel de sangría de un elemento de la lista y <span class="keyboard-shortcut">Shift + Tab</span> para disminuirlo.</li>
              </ul>
            </div>
            <div>
              <h5>Listas numeradas</h5>
              <ul class="steps">
                <li>Selecciona el texto que deseas convertir en una lista numerada.</li>
                <li>Haz clic en el botón <strong>Numeración</strong> en el grupo <strong>Párrafo</strong> de la pestaña <strong>Inicio</strong>.</li>
                <li>Personaliza el formato de la numeración:</li>
                <ul class="steps">
                  <li>Ve a <strong>Inicio → Numeración</strong> para acceder a opciones de formato.</li>
                  <li>Elige entre diferentes estilos de numeración:</li>
                  <ul class="steps">
                    <li><strong>1, 2, 3</strong>: Numeración estándar con números arábigos, ideal para listas secuenciales o pasos.</li>
                    <li><strong>a, b, c</strong>: Letras minúsculas, útil para listas secundarias o subelementos.</li>
                    <li><strong>A, B, C</strong>: Letras mayúsculas, adecuadas para secciones principales o elementos destacados.</li>
                    <li><strong>i, ii, iii</strong>: Números romanos en minúscula, útiles para documentos formales o legales.</li>
                    <li><strong>I, II, III</strong>: Números romanos en mayúscula, ideales para secciones principales en presentaciones formales.</li>
                  </ul>
                  <li>Ajusta el inicio de la numeración si es necesario, por ejemplo, para continuar una lista desde un número específico.</li>
                  <li>Cambia el color, tamaño y fuente de los números para que coincidan con el estilo de tu presentación.</li>
                </ul>
                <li>Las listas numeradas son ideales para:</li>
                <ul class="steps">
                  <li>Pasos en un proceso o procedimiento.</li>
                  <li>Elementos que deben seguir un orden específico.</li>
                  <li>Jerarquías o clasificaciones.</li>
                  <li>Referencias a secciones o apartados en un documento.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Viñetas+y+Numeración" alt="Viñetas y numeración en PowerPoint">
                <figcaption>Ejemplo de listas con viñetas y numeración en PowerPoint 2025. La imagen muestra opciones para personalizar el estilo de las viñetas y numeraciones, así como listas anidadas con diferentes niveles de sangría.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa viñetas para listas no ordenadas, donde el orden de los elementos no es importante, y numeración para pasos o procesos secuenciales. Evita mezclar viñetas y numeraciones en la misma lista, ya que esto puede confundir a la audiencia. Además, limita el número de elementos en cada lista a 5-7 para mantener la claridad y evitar saturar la diapositiva.
          </div>
        </div>

        <!-- Conversión de texto a SmartArt -->
        <div class="card">
          <h4>Conversión de texto a SmartArt</h4>
          <p>Transforma listas de texto en diagramas visuales usando SmartArt. Esta herramienta te permite convertir información lineal en gráficos atractivos y fáciles de entender, mejorando la comunicación de ideas complejas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Convertir texto en SmartArt</h5>
              <ul class="steps">
                <li>Selecciona el texto que deseas convertir. Puede ser una lista con viñetas, una lista numerada o párrafos separados.</li>
                <li>Ve a la pestaña <strong>Inicio</strong> y haz clic en <strong>Convertir en SmartArt</strong> en el grupo <strong>Párrafo</strong>.</li>
                <li>PowerPoint mostrará una galería de diseños de SmartArt. Elige un diseño que se ajuste al tipo de información que estás presentando:</li>
                <ul class="steps">
                  <li><strong>Lista</strong>: Para elementos secuenciales o no ordenados, como características de un producto o pasos simples.</li>
                  <li><strong>Proceso</strong>: Para representar pasos en un flujo de trabajo, como un proceso de producción o un procedimiento.</li>
                  <li><strong>Ciclo</strong>: Para procesos circulares o continuos, como ciclos de vida o procesos de retroalimentación.</li>
                  <li><strong>Jerarquía</strong>: Para organigramas o estructuras jerárquicas, como la organización de un equipo o departamento.</li>
                  <li><strong>Relación</strong>: Para mostrar conexiones entre elementos, como causas y efectos o componentes de un sistema.</li>
                  <li><strong>Matriz</strong>: Para comparar elementos en una cuadrícula, como análisis FODA o tablas comparativas.</li>
                  <li><strong>Pirámide</strong>: Para representar jerarquías o proporciones, como estructuras organizacionales o distribución de recursos.</li>
                </ul>
                <li>PowerPoint convertirá automáticamente el texto seleccionado en un diagrama SmartArt, distribuyendo el contenido en las formas correspondientes.</li>
                <li>El panel de texto de SmartArt te permite editar el contenido directamente, y los cambios se reflejarán en el diagrama.</li>
                <li>Puedes añadir o eliminar formas en el diagrama según sea necesario, usando los botones <strong>Agregar forma</strong> en la pestaña <strong>Diseño de SmartArt</strong>.</li>
              </ul>
            </div>
            <div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=SmartArt" alt="SmartArt en PowerPoint">
                <figcaption>Ejemplo de conversión de texto a SmartArt en PowerPoint 2025. La imagen muestra una lista de texto convertida en un diagrama de proceso, con opciones para personalizar el diseño y el estilo del gráfico.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa SmartArt para presentar información compleja de manera visual y fácil de entender. Por ejemplo, convierte una lista de pasos en un diagrama de proceso o una lista de características en un gráfico de relación. Esto no solo mejora la claridad, sino que también hace que tus diapositivas sean más atractivas y profesionales.
          </div>
        </div>

        <!-- WordArt y efectos de texto -->
        <div class="card">
          <h4>WordArt y efectos de texto</h4>
          <p>Añade estilo y creatividad a tus textos con WordArt y efectos especiales. Estas herramientas te permiten resaltar títulos, mensajes clave o cualquier texto que desees destacar en tus diapositivas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Insertar WordArt</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>WordArt</strong> en el grupo <strong>Texto</strong>.</li>
                <li>PowerPoint mostrará una galería de estilos de WordArt predefinidos. Elige el estilo que mejor se ajuste al diseño de tu presentación.</li>
                <li>Haz clic en el estilo seleccionado para insertar un cuadro de WordArt en tu diapositiva.</li>
                <li>Escribe o pega el texto que deseas resaltar. El texto de WordArt se comporta como un objeto gráfico, por lo que puedes moverlo, redimensionarlo y rotarlo libremente.</li>
                <li>Personaliza el WordArt usando las herramientas de la pestaña <strong>Formato de forma</strong> (que aparece al seleccionar el WordArt):</li>
                <ul class="steps">
                  <li>Cambia la <strong>fuente</strong>, <strong>tamaño</strong> y <strong>color</strong> del texto.</li>
                  <li>Ajusta el <strong>relleno</strong> del texto, incluyendo colores sólidos, degradados o texturas.</li>
                  <li>Aplica <strong>contornos</strong> al texto para resaltarlo, con opciones para ajustar el grosor, color y estilo del contorno.</li>
                  <li>Usa <strong>efectos 3D</strong> para dar profundidad al texto, como biseles, rotaciones o perspectivas.</li>
                  <li>Añade <strong>sombras</strong> o <strong>reflejos</strong> para mejorar el aspecto visual del WordArt.</li>
                </ul>
                <li>WordArt es ideal para:</li>
                <ul class="steps">
                  <li>Títulos de diapositivas o portadas.</li>
                  <li>Mensajes clave o frases destacadas.</li>
                  <li>Logotipos o nombres de marca en presentaciones creativas.</li>
                  <li>Elementos decorativos que añaden estilo a la presentación.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Efectos de texto</h5>
              <ul class="steps">
                <li>Selecciona el texto al que deseas aplicar efectos. Puede ser texto en un cuadro de texto, WordArt o incluso texto en formas.</li>
                <li>Ve a la pestaña <strong>Formato de forma</strong> (para WordArt o texto en formas) o <strong>Inicio</strong> (para texto en cuadros de texto estándar).</li>
                <li>Aplica efectos desde el grupo <strong>Estilos de WordArt</strong> o <strong>Efectos de texto</strong>:</li>
                <ul class="steps">
                  <li><strong>Sombra</strong>: Añade una sombra detrás del texto para darle profundidad. Puedes ajustar la dirección, distancia y transparencia de la sombra.</li>
                  <li><strong>Reflejo</strong>: Crea un efecto espejo debajo del texto, útil para diseños modernos y llamativos. Ajusta la transparencia y el tamaño del reflejo.</li>
                  <li><strong>Resplandor</strong>: Añade un brillo alrededor del texto, ideal para resaltar títulos o mensajes importantes. Controla el color, tamaño y transparencia del resplandor.</li>
                  <li><strong>Bisel</strong>: Da un efecto de relieve 3D al texto, con opciones para ajustar la profundidad, dirección y color del bisel.</li>
                  <li><strong>Giro 3D</strong>: Rota el texto en el espacio 3D para crear efectos dinámicos. Ajusta la perspectiva, profundidad y ángulo de rotación.</li>
                  <li><strong>Transformar</strong>: Aplica distorsiones al texto, como curvas, ondas o inflados, para efectos creativos.</li>
                </ul>
                <li>Combina múltiples efectos para crear textos únicos y llamativos. Por ejemplo, usa sombra y resplandor juntos para un efecto dramático.</li>
                <li>Los efectos de texto son especialmente útiles para:</li>
                <ul class="steps">
                  <li>Presentaciones creativas o artísticas.</li>
                  <li>Diapositivas de portada o títulos.</li>
                  <li>Mensajes que necesitan destacar visualmente.</li>
                  <li>Presentaciones para audiencias jóvenes o en contextos informales.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=WordArt+y+Efectos" alt="WordArt y efectos en PowerPoint">
                <figcaption>Ejemplo de WordArt y efectos de texto en PowerPoint 2025. La imagen muestra un título con WordArt aplicado, incluyendo efectos de sombra, reflejo y resplandor, así como opciones para personalizar el estilo 3D y la rotación.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout warn">
            <strong>Precaución:</strong> Usa WordArt y efectos de texto con moderación. Demasiados efectos pueden distraer a la audiencia y hacer que la presentación parezca poco profesional. Limita su uso a títulos, mensajes clave o elementos decorativos, y asegúrate de que el texto siga siendo legible.
          </div>
        </div>
      </section>

      <!-- Módulo 4: Elementos Multimedia y Visuales -->
      <section id="modulo4" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-image"></i>
          <span>Módulo 4: Elementos Multimedia y Visuales</span>
        </div>
        <h3>Módulo 4. Elementos Multimedia y Visuales</h3>
        <p class="lead">Aprende a enriquecer tus presentaciones con imágenes, formas, gráficos, audio, video y otros elementos multimedia. Este módulo te enseñará a insertar, editar y personalizar estos elementos para crear diapositivas dinámicas y atractivas. Desde la inserción básica de imágenes hasta la edición avanzada de gráficos y la incorporación de modelos 3D, dominarás las herramientas para hacer que tus presentaciones destaquen visualmente.</p>

        <!-- Insertar imágenes -->
        <div class="card">
          <h4>Insertar imágenes (desde archivo o en línea)</h4>
          <p>Las imágenes son esenciales para transmitir ideas de manera visual y hacer que tus diapositivas sean más atractivas. PowerPoint 2025 ofrece múltiples opciones para insertar imágenes desde diferentes fuentes:</p>
          <div class="grid grid-2">
            <div>
              <h5>Desde archivo</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Imágenes → Este dispositivo</strong> en el grupo <strong>Ilustraciones</strong>.</li>
                <li>Navega hasta la ubicación del archivo de imagen en tu computadora y selecciona la imagen que deseas insertar.</li>
                <li>Haz clic en <strong>Insertar</strong> para añadir la imagen a tu diapositiva.</li>
                <li>Formatos de imagen soportados:</li>
                <ul class="steps">
                  <li><strong>JPG/JPEG</strong>: Formato común para fotos y imágenes con muchos colores. Ideal para imágenes complejas, aunque con pérdida de calidad al comprimir.</li>
                  <li><strong>PNG</strong>: Formato que soporta transparencias y es ideal para gráficos, logotipos e imágenes con áreas transparentes.</li>
                  <li><strong>GIF</strong>: Formato para imágenes animadas o gráficos simples. Útil para añadir movimiento a tus diapositivas.</li>
                  <li><strong>BMP</strong>: Formato de mapa de bits sin compresión, que conserva la calidad pero resulta en archivos grandes. Poco común en presentaciones modernas.</li>
                  <li><strong>TIFF</strong>: Formato de alta calidad utilizado en diseño gráfico e impresión. Adecuado para imágenes que requieren máxima fidelidad.</li>
                </ul>
                <li>Arrastra los controladores (los pequeños círculos o cuadrados en las esquinas y bordes) para ajustar el tamaño de la imagen según sea necesario.</li>
                <li>Mantén presionada la tecla <span class="keyboard-shortcut">Shift</span> mientras arrastras un controlador de esquina para redimensionar la imagen proporcionalmente.</li>
                <li>PowerPoint 2025 permite insertar múltiples imágenes a la vez, seleccionando varios archivos en el cuadro de diálogo de inserción.</li>
              </ul>
            </div>
            <div>
              <h5>En línea</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Imágenes → Imágenes en línea</strong>.</li>
                <li>PowerPoint abrirá un panel de búsqueda donde podrás:</li>
                <ul class="steps">
                  <li>Buscar imágenes en <strong>Bing</strong>, usando palabras clave relacionadas con el contenido que necesitas.</li>
                  <li>Seleccionar imágenes de tu cuenta de <strong>OneDrive</strong>, si tienes archivos almacenados en la nube.</li>
                  <li>Explorar imágenes de <strong>stock</strong> proporcionadas por Microsoft, que incluyen fotos, íconos y gráficos de alta calidad.</li>
                </ul>
                <li>Usa los filtros de licencia para asegurarte de que las imágenes sean de uso libre o tengan licencias que permitan su uso en presentaciones. PowerPoint 2025 incluye opciones para filtrar por <strong>Licencia Creative Commons</strong>.</li>
                <li>Selecciona la imagen deseada y haz clic en <strong>Insertar</strong> para añadirla a tu diapositiva.</li>
                <li>Las imágenes insertadas desde fuentes en línea se descargan y guardan localmente en la presentación, por lo que estarán disponibles incluso sin conexión a internet.</li>
                <li>Ajusta el tamaño y la posición de la imagen según sea necesario, usando los controladores y las herramientas de alineación.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Insertar+Imágenes" alt="Insertar imágenes en PowerPoint">
                <figcaption>Ejemplo de cómo insertar imágenes desde archivo o en línea en PowerPoint 2025. La imagen muestra el panel de inserción de imágenes en línea, con opciones para buscar en Bing, seleccionar de OneDrive o explorar imágenes de stock.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al insertar imágenes, considera su resolución y tamaño de archivo. Imágenes de alta resolución pueden hacer que tu presentación sea más pesada, lo que puede afectar su rendimiento al abrirla o compartirla. Usa herramientas como el <strong>Compresor de imágenes</strong> en PowerPoint (disponible en la pestaña <strong>Formato de imagen</strong>) para reducir el tamaño de los archivos sin perder calidad visual.
          </div>
        </div>

        <!-- Recorte y formato de imágenes -->
        <div class="card">
          <h4>Recorte y formato de imágenes</h4>
          <p>Edita imágenes directamente en PowerPoint para que se ajusten a tu diseño y mejoren el aspecto visual de tus diapositivas. Las herramientas de recorte y formato te permiten personalizar imágenes sin necesidad de software externo:</p>
          <div class="grid grid-2">
            <div>
              <h5>Recortar una imagen</h5>
              <ul class="steps">
                <li>Selecciona la imagen que deseas recortar haciendo clic en ella.</li>
                <li>Ve a la pestaña <strong>Formato de imagen</strong> (que aparece automáticamente al seleccionar una imagen) y haz clic en <strong>Recortar</strong> en el grupo <strong>Tamaño</strong>.</li>
                <li>PowerPoint mostrará controladores de recorte (líneas negras con círculos en las esquinas) alrededor de la imagen. Arrastra estos controladores para recortar la imagen según sea necesario.</li>
                <li>Opciones avanzadas de recorte:</li>
                <ul class="steps">
                  <li><strong>Relación de aspecto</strong>: Elige una proporción predefinida (como 1:1 para cuadrados, 16:9 para pantallas panorámicas o 4:3 para formatos estándar) para mantener la proporción al recortar.</li>
                  <li><strong>Recortar a forma</strong>: Recorta la imagen en formas específicas, como círculos, estrellas, flechas o formas personalizadas, para efectos creativos.</li>
                  <li><strong>Rellenar</strong>: Ajusta el recorte para que la imagen llene un espacio específico, recortando automáticamente los bordes según sea necesario.</li>
                  <li><strong>Ajustar</strong>: Recorta la imagen para que se ajuste dentro de un marco específico, manteniendo las proporciones originales.</li>
                </ul>
                <li>Usa la herramienta <strong>Girar</strong> en el grupo <strong>Organizar</strong> para rotar la imagen según sea necesario. Puedes girar la imagen en incrementos de 90 grados o libremente.</li>
                <li>Haz clic fuera de la imagen o presiona <span class="keyboard-shortcut">Esc</span> para aplicar los cambios de recorte.</li>
                <li>El recorte no elimina permanentemente las partes recortadas de la imagen; puedes ajustar o deshacer el recorte en cualquier momento.</li>
              </ul>
            </div>
            <div>
              <h5>Formato de imagen</h5>
              <ul class="steps">
                <li>Selecciona la imagen y ve a la pestaña <strong>Formato de imagen</strong> para acceder a las herramientas de formato.</li>
                <li>Ajusta las siguientes opciones para mejorar la apariencia de la imagen:</li>
                <ul class="steps">
                  <li><strong>Correcciones</strong>: Mejora el aspecto de la imagen ajustando:</li>
                  <ul class="steps">
                    <li><strong>Brillo</strong>: Aumenta o disminuye la luminosidad de la imagen.</li>
                    <li><strong>Contraste</strong>: Ajusta la diferencia entre las áreas claras y oscuras.</li>
                    <li><strong>Nitidez</strong>: Enriquece los detalles de la imagen para que aparezcan más definidos.</li>
                    <li><strong>Recolorear</strong>: Cambia los tonos de color de la imagen, como convertirla a escala de grises o aplicar filtros de color.</li>
                  </ul>
                  <li><strong>Color</strong>: Modifica los colores de la imagen:</li>
                  <ul class="steps">
                    <li><strong>Saturación</strong>: Ajusta la intensidad de los colores.</li>
                    <li><strong>Tono</strong>: Cambia el matiz general de la imagen.</li>
                    <li><strong>Temperatura de color</strong>: Ajusta los tonos cálidos o fríos de la imagen.</li>
                    <li><strong>Recolorear</strong>: Aplica colores predefinidos o personalizados a la imagen.</li>
                  </ul>
                  <li><strong>Efectos artísticos</strong>: Aplica filtros creativos a la imagen, como:</li>
                  <ul class="steps">
                    <li><strong>Acuarela</strong>: Efecto de pintura acuarela.</li>
                    <li><strong>Lápiz</strong>: Convierte la imagen en un dibujo a lápiz.</li>
                    <li><strong>Mosaico</strong>: Divide la imagen en pequeños cuadrados de color.</li>
                    <li><strong>Desenfoque</strong>: Suaviza los detalles de la imagen.</li>
                    <li><strong>Relieve</strong>: Da un efecto 3D a la imagen.</li>
                  </ul>
                  <li><strong>Bordes</strong>: Añade bordes a la imagen para resaltarla:</li>
                  <ul class="steps">
                    <li>Ajusta el <strong>color</strong>, <strong>grosor</strong> y <strong>estilo</strong> del borde (sólido, punteado, etc.).</li>
                    <li>Usa bordes para integrar la imagen con el diseño de la diapositiva o para crear efectos visuales.</li>
                  </ul>
                  <li><strong>Estilos de imagen</strong>: Aplica combinaciones predefinidas de efectos, como sombras, reflejos o biseles, para dar profundidad y estilo a la imagen.</li>
                </ul>
                <li>Usa la opción <strong>Restablecer imagen</strong> para eliminar todos los ajustes de formato y volver a la imagen original.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Recortar+y+Formato" alt="Recortar y formato de imágenes en PowerPoint">
                <figcaption>Ejemplo de recorte y formato de imágenes en PowerPoint 2025. La imagen muestra una foto recortada en forma de círculo, con ajustes de brillo, contraste y efectos artísticos aplicados.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Para mantener la coherencia visual, aplica los mismos ajustes de formato a todas las imágenes de tu presentación. Puedes copiar el formato de una imagen y aplicarlo a otras usando la herramienta <strong>Copiar formato</strong> (<span class="keyboard-shortcut">Ctrl + Shift + C</span> para copiar y <span class="keyboard-shortcut">Ctrl + Shift + V</span> para pegar).
          </div>
        </div>

        <!-- Insertar formas, líneas e íconos -->
        <div class="card">
          <h4>Insertar formas, líneas e íconos</h4>
          <p>Añade elementos gráficos a tus diapositivas para mejorar la visualización y la organización del contenido. Las formas, líneas e íconos son herramientas versátiles que te permiten crear diseños personalizados y resaltar información:</p>
          <div class="grid grid-2">
            <div>
              <h5>Formas</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Formas</strong> en el grupo <strong>Ilustraciones</strong>.</li>
                <li>PowerPoint mostrará una galería de formas organizadas en categorías, como:</li>
                <ul class="steps">
                  <li><strong>Líneas</strong>: Rectas, curvas, flechas y conectores para crear diagramas de flujo o relaciones entre elementos.</li>
                  <li><strong>Rectángulos</strong>: Cuadrados, rectángulos redondeados y otras variantes para crear cuadros de texto o áreas de contenido.</li>
                  <li><strong>Formas básicas</strong>: Óvalos, triángulos, diamantes y otras formas geométricas simples.</li>
                  <li><strong>Formas de bloque</strong>: Formas más complejas, como pentágonos, hexágonos o estrellas, para diseños creativos.</li>
                  <li><strong>Formas de llamada</strong>: Globos de diálogo, etiquetas y otras formas para resaltar información o añadir comentarios.</li>
                  <li><strong>Cintas y estrellas</strong>: Formas decorativas para añadir estilo a tus diapositivas.</li>
                </ul>
                <li>Selecciona la forma deseada y haz clic en la diapositiva para insertarla. Arrastra para definir su tamaño inicial.</li>
                <li>Personaliza la forma usando las herramientas de la pestaña <strong>Formato de forma</strong>:</li>
                <ul class="steps">
                  <li>Cambia el <strong>relleno</strong> (color sólido, degradado, textura o imagen).</li>
                  <li>Ajusta el <strong>contorno</strong> (color, grosor y estilo del borde).</li>
                  <li>Aplica <strong>efectos</strong>, como sombras, reflejos, resplandores o rotaciones 3D.</li>
                  <li>Añade <strong>texto</strong> dentro de la forma, que se ajustará automáticamente al contorno de la misma.</li>
                </ul>
                <li>Usa las opciones <strong>Editar forma</strong> para modificar los puntos de la forma y crear diseños personalizados.</li>
                <li>Las formas son ideales para:</li>
                <ul class="steps">
                  <li>Crear diagramas de flujo, organigramas o mapas conceptuales.</li>
                  <li>Resaltar información importante con cuadros o etiquetas.</li>
                  <li>Diseñar elementos decorativos o separadores visuales.</li>
                  <li>Organizar contenido en secciones claras y estructuradas.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Íconos</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Iconos</strong> en el grupo <strong>Ilustraciones</strong>.</li>
                <li>PowerPoint abrirá un panel con una biblioteca de íconos organizados en categorías, como:</li>
                <ul class="steps">
                  <li><strong>Negocios</strong>: Íconos relacionados con finanzas, marketing, recursos humanos y operaciones.</li>
                  <li><strong>Educación</strong>: Íconos de libros, graduaciones, ciencia y herramientas de enseñanza.</li>
                  <li><strong>Tecnología</strong>: Íconos de dispositivos, redes, programación y hardware.</li>
                  <li><strong>Salud</strong>: Íconos médicos, de bienestar y fitness.</li>
                  <li><strong>Naturaleza</strong>: Íconos de plantas, animales, clima y medio ambiente.</li>
                  <li><strong>Transporte</strong>: Íconos de vehículos, viajes y logística.</li>
                </ul>
                <li>Busca íconos usando palabras clave en la barra de búsqueda del panel.</li>
                <li>Selecciona un ícono y haz clic en <strong>Insertar</strong> para añadirlo a tu diapositiva.</li>
                <li>Personaliza el ícono usando las herramientas de la pestaña <strong>Formato de gráficos</strong>:</li>
                <ul class="steps">
                  <li>Cambia el <strong>color</strong> del ícono para que coincida con el esquema de colores de tu presentación.</li>
                  <li>Ajusta el <strong>tamaño</strong> del ícono arrastrando sus controladores o usando las opciones de tamaño en la pestaña <strong>Formato</strong>.</li>
                  <li>Aplica <strong>efectos</strong>, como sombras o rotaciones, para integrar el ícono con el diseño de la diapositiva.</li>
                </ul>
                <li>Los íconos son útiles para:</li>
                <ul class="steps">
                  <li>Representar conceptos de manera visual y concisa.</li>
                  <li>Añadir elementos decorativos que refuercen el mensaje del texto.</li>
                  <li>Crear infografías o diagramas con símbolos reconocibles.</li>
                  <li>Mejorar la accesibilidad de la presentación para audiencias diversas.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Formas+e+Íconos" alt="Formas e íconos en PowerPoint">
                <figcaption>Ejemplo de cómo insertar formas e íconos en PowerPoint 2025. La imagen muestra una galería de formas geométricas y un panel de íconos categorizados, con opciones para personalizar su apariencia.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa íconos y formas de manera consistente en toda tu presentación. Por ejemplo, asigna un ícono específico a cada sección o tema para ayudar a la audiencia a identificar y recordar la información. Además, asegúrate de que los íconos y formas no distraigan del contenido principal, manteniendo un equilibrio entre diseño y claridad.
          </div>
        </div>

        <!-- SmartArt -->
        <div class="card">
          <h4>Insertar y personalizar SmartArt</h4>
          <p>Crea diagramas visuales para representar procesos, jerarquías, relaciones y otros conceptos complejos. SmartArt te permite convertir información lineal en gráficos atractivos y fáciles de entender, mejorando la comunicación de ideas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Insertar SmartArt</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>SmartArt</strong> en el grupo <strong>Ilustraciones</strong>.</li>
                <li>PowerPoint abrirá un cuadro de diálogo con una galería de diseños de SmartArt organizados en categorías. Elige un tipo de gráfico según el tipo de información que deseas representar:</li>
                <ul class="steps">
                  <li><strong>Lista</strong>: Para elementos secuenciales o no ordenados, como características, pasos simples o elementos de una colección.</li>
                  <li><strong>Proceso</strong>: Para representar pasos en un flujo de trabajo, como procesos de producción, procedimientos o cronogramas.</li>
                  <li><strong>Ciclo</strong>: Para procesos circulares o continuos, como ciclos de vida, procesos de retroalimentación o sistemas recurrentes.</li>
                  <li><strong>Jerarquía</strong>: Para organigramas o estructuras jerárquicas, como la organización de un equipo, departamento o empresa.</li>
                  <li><strong>Relación</strong>: Para mostrar conexiones entre elementos, como causas y efectos, componentes de un sistema o redes.</li>
                  <li><strong>Matriz</strong>: Para comparar elementos en una cuadrícula, como análisis FODA, tablas comparativas o matrices de decisiones.</li>
                  <li><strong>Pirámide</strong>: Para representar jerarquías, proporciones o estructuras organizacionales, como pirámides de necesidades o distribución de recursos.</li>
                </ul>
                <li>Selecciona un diseño específico dentro de la categoría elegida. PowerPoint mostrará una vista previa del diseño con texto de ejemplo.</li>
                <li>Haz clic en <strong>Aceptar</strong> para insertar el gráfico SmartArt en tu diapositiva.</li>
                <li>El gráfico SmartArt incluirá un panel de texto donde podrás editar el contenido. Escribe o pega tu texto en el panel, y PowerPoint lo distribuirá automáticamente en las formas del gráfico.</li>
                <li>Añade o elimina formas según sea necesario, usando los botones <strong>Agregar forma</strong> en la pestaña <strong>Diseño de SmartArt</strong>.</li>
              </ul>
            </div>
            <div>
              <h5>Personalizar SmartArt</h5>
              <ul class="steps">
                <li>Selecciona el gráfico SmartArt y ve a las pestañas <strong>Diseño de SmartArt</strong> y <strong>Formato de SmartArt</strong> para acceder a las herramientas de personalización.</li>
                <li>En la pestaña <strong>Diseño de SmartArt</strong>:</li>
                <ul class="steps">
                  <li>Cambia el <strong>diseño</strong> del gráfico seleccionando otra opción de la galería. PowerPoint conservará tu texto y lo adaptará al nuevo diseño.</li>
                  <li>Ajusta la <strong>jerarquía</strong> del gráfico, como promover o degradar formas para cambiar su nivel en la estructura.</li>
                  <li>Cambia la <strong>dirección</strong> del gráfico (por ejemplo, de izquierda a derecha o de arriba abajo) para adaptarlo al diseño de tu diapositiva.</li>
                </ul>
                <li>En la pestaña <strong>Formato de SmartArt</strong>:</li>
                <ul class="steps">
                  <li>Aplica <strong>estilos</strong> predefinidos al gráfico para cambiar rápidamente su apariencia. Los estilos incluyen combinaciones de colores, efectos y diseños.</li>
                  <li>Cambia los <strong>colores</strong> del gráfico usando la paleta de colores del tema o seleccionando colores personalizados.</li>
                  <li>Personaliza las <strong>formas</strong> individuales del gráfico, como cambiar su tamaño, color de relleno o efectos.</li>
                  <li>Añade <strong>efectos</strong> a las formas, como sombras, reflejos o rotaciones 3D, para dar profundidad al gráfico.</li>
                </ul>
                <li>Usa la herramienta <strong>Panel de texto</strong> para editar el contenido del gráfico en cualquier momento. Los cambios en el texto se reflejarán automáticamente en el gráfico.</li>
                <li>SmartArt es ideal para:</li>
                <ul class="steps">
                  <li>Explicar procesos complejos de manera visual y clara.</li>
                  <li>Mostrar relaciones entre elementos, como organigramas o redes.</li>
                  <li>Resumir información en formatos atractivos y fáciles de entender.</li>
                  <li>Crear infografías o diagramas dentro de tus diapositivas.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=SmartArt" alt="SmartArt en PowerPoint">
                <figcaption>Ejemplo de SmartArt en PowerPoint 2025, mostrando un diagrama de proceso con formas personalizadas, colores y efectos aplicados. La imagen incluye el panel de texto para editar el contenido del gráfico.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa SmartArt para reemplazar listas de texto largas o tablas complejas. Por ejemplo, convierte una lista de pasos en un diagrama de proceso o una lista de características en un gráfico de relación. Esto no solo mejora la claridad, sino que también hace que tus diapositivas sean más atractivas y memorables.
          </div>
        </div>

        <!-- Gráficos -->
        <div class="card">
          <h4>Insertar gráficos (barras, líneas, pastel, etc.)</h4>
          <p>Visualiza datos con gráficos dinámicos y profesionales. PowerPoint 2025 ofrece una variedad de tipos de gráficos que te permiten representar información numérica de manera clara y efectiva:</p>
          <div class="grid grid-2">
            <div>
              <h5>Insertar un gráfico</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Gráfico</strong> en el grupo <strong>Ilustraciones</strong>.</li>
                <li>PowerPoint abrirá un cuadro de diálogo con una variedad de tipos de gráficos organizados en categorías. Selecciona el tipo de gráfico que mejor se ajuste a tus datos:</li>
                <ul class="steps">
                  <li><strong>Columna</strong>: Para comparar valores entre categorías. Ideal para mostrar datos discretos, como ventas por producto o resultados por región.</li>
                  <li><strong>Línea</strong>: Para mostrar tendencias a lo largo del tiempo. Útil para representar datos continuos, como crecimiento mensual o cambios en el tiempo.</li>
                  <li><strong>Circular</strong>: Para mostrar proporciones de un total. Adecuado para representar porcentajes, como distribución de mercado o participación de ventas.</li>
                  <li><strong>Barra</strong>: Similar al gráfico de columnas, pero con las barras dispuestas horizontalmente. Ideal para comparar categorías con nombres largos.</li>
                  <li><strong>Área</strong>: Para enfatizar la magnitud del cambio a lo largo del tiempo. Útil para mostrar tendencias acumulativas, como ingresos totales.</li>
                  <li><strong>Dispersión (XY)</strong>: Para mostrar relaciones entre dos variables. Adecuado para análisis estadísticos o correlaciones.</li>
                  <li><strong>Cotizaciones</strong>: Para representar datos financieros, como precios de acciones. Incluye gráficos de velas o de cotización.</li>
                </ul>
                <li>Haz clic en <strong>Aceptar</strong> para insertar el gráfico en tu diapositiva. PowerPoint abrirá una hoja de cálculo de Excel integrada, donde podrás ingresar o pegar tus datos.</li>
                <li>Edita los datos en la hoja de cálculo. Los cambios se reflejarán automáticamente en el gráfico de PowerPoint.</li>
                <li>Cierra la hoja de cálculo de Excel para volver a PowerPoint. Puedes volver a abrirla en cualquier momento haciendo clic en <strong>Editar datos</strong> en la pestaña <strong>Diseño de gráfico</strong>.</li>
                <li>PowerPoint 2025 también permite importar datos desde archivos de Excel existentes, vinculando el gráfico a la hoja de cálculo para que los cambios en los datos se actualicen automáticamente.</li>
              </ul>
            </div>
            <div>
              <h5>Personalizar gráficos</h5>
              <ul class="steps">
                <li>Selecciona el gráfico y ve a las pestañas <strong>Diseño de gráfico</strong> y <strong>Formato de gráfico</strong> para acceder a las herramientas de personalización.</li>
                <li>En la pestaña <strong>Diseño de gráfico</strong>:</li>
                <ul class="steps">
                  <li>Cambia el <strong>tipo de gráfico</strong> seleccionando otra opción de la galería. PowerPoint conservará tus datos y los adaptará al nuevo tipo de gráfico.</li>
                  <li>Aplica un <strong>diseño de gráfico</strong> predefinido para cambiar rápidamente la disposición de los elementos del gráfico.</li>
                  <li>Añade o elimina elementos del gráfico, como <strong>títulos</strong>, <strong>leyendas</strong>, <strong>etiquetas de datos</strong> o <strong>líneas de cuadrícula</strong>.</li>
                  <li>Cambia la <strong>disposición</strong> de los elementos del gráfico para optimizar el espacio y la claridad.</li>
                </ul>
                <li>En la pestaña <strong>Formato de gráfico</strong>:</li>
                <ul class="steps">
                  <li>Personaliza los <strong>colores</strong> del gráfico usando la paleta de colores del tema o seleccionando colores personalizados.</li>
                  <li>Ajusta los <strong>estilos de línea</strong> y <strong>rellenos</strong> de los elementos del gráfico, como barras, líneas o áreas.</li>
                  <li>Aplica <strong>efectos</strong> a los elementos del gráfico, como sombras, reflejos o rotaciones 3D.</li>
                  <li>Cambia el <strong>formato de los ejes</strong>, incluyendo escalas, unidades y etiquetas.</li>
                </ul>
                <li>Usa la herramienta <strong>Filtro de gráfico</strong> para resaltar elementos específicos del gráfico, como series de datos individuales.</li>
                <li>Los gráficos son ideales para:</li>
                <ul class="steps">
                  <li>Presentar datos numéricos de manera visual y fácil de entender.</li>
                  <li>Comparar valores entre categorías o a lo largo del tiempo.</li>
                  <li>Mostrar tendencias, proporciones o relaciones en los datos.</li>
                  <li>Resumir información compleja en formatos claros y profesionales.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Gráficos" alt="Gráficos en PowerPoint">
                <figcaption>Ejemplo de gráficos en PowerPoint 2025, mostrando un gráfico de columnas con datos editables, opciones de diseño y personalización de colores y estilos.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa gráficos para representar datos de manera visual en lugar de tablas o listas de números. Por ejemplo, convierte una tabla de ventas por región en un gráfico de columnas o un gráfico circular para mostrar las proporciones. Esto facilita la comprensión de la información y hace que tus diapositivas sean más impactantes.
          </div>
        </div>

        <!-- Audio y video -->
        <div class="card">
          <h4>Insertar audio y video</h4>
          <p>Añade elementos multimedia a tus presentaciones para hacerlas más dinámicas y atractivas. El audio y el video pueden ayudar a transmitir mensajes de manera más efectiva, especialmente en presentaciones interactivas o para audiencias remotas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Insertar audio</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Audio</strong> en el grupo <strong>Multimedia</strong>.</li>
                <li>PowerPoint te dará dos opciones para insertar audio:</li>
                <ul class="steps">
                  <li><strong>Audio en mi PC</strong>: Para insertar archivos de audio almacenados localmente en tu computadora. Los formatos soportados incluyen:</li>
                  <ul class="steps">
                    <li><strong>MP3</strong>: Formato común para música y grabaciones de voz.</li>
                    <li><strong>WAV</strong>: Formato sin compresión, ideal para grabaciones de alta calidad.</li>
                    <li><strong>WMA</strong>: Formato de Windows Media Audio, compatible con sistemas Windows.</li>
                    <li><strong>AAC</strong>: Formato avanzado de codificación de audio, común en dispositivos Apple.</li>
                  </ul>
                  <li><strong>Grabación de audio</strong>: Para grabar audio directamente en PowerPoint usando el micrófono de tu computadora. Esto es útil para añadir narraciones o comentarios personalizados.</li>
                </ul>
                <li>Selecciona la opción deseada y sigue las instrucciones para insertar o grabar el audio.</li>
                <li>El audio insertado aparecerá como un ícono de altavoz en tu diapositiva. Puedes mover este ícono a cualquier posición.</li>
                <li>Configura las opciones de reproducción en la pestaña <strong>Reproducción de audio</strong>:</li>
                <ul class="steps">
                  <li><strong>Iniciar</strong>: Elige si el audio se reproducirá automáticamente al mostrar la diapositiva o al hacer clic en el ícono.</li>
                  <li><strong>Volumen</strong>: Ajusta el nivel de volumen del audio.</li>
                  <li><strong>Recortar audio</strong>: Edita el audio para reproducir solo una parte específica.</li>
                  <li><strong>Desvanecer</strong>: Añade efectos de desvanecimiento al inicio y al final del audio.</li>
                  <li><strong>Bucle</strong>: Configura el audio para que se reproduzca en bucle hasta que se detenga manualmente.</li>
                  <li><strong>Ocultar durante la presentación</strong>: Esconde el ícono del altavoz durante la presentación para un aspecto más limpio.</li>
                </ul>
                <li>El audio es útil para:</li>
                <ul class="steps">
                  <li>Añadir narraciones o explicaciones a tus diapositivas.</li>
                  <li>Incluir música de fondo para crear ambiente.</li>
                  <li>Reproducir grabaciones de entrevistas, discursos o sonidos relevantes.</li>
                  <li>Mejorar la accesibilidad para audiencias con discapacidades visuales.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Insertar video</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Video</strong> en el grupo <strong>Multimedia</strong>.</li>
                <li>PowerPoint te dará dos opciones para insertar video:</li>
                <ul class="steps">
                  <li><strong>Video en mi PC</strong>: Para insertar archivos de video almacenados localmente. Los formatos soportados incluyen:</li>
                  <ul class="steps">
                    <li><strong>MP4</strong>: Formato común para videos, compatible con la mayoría de dispositivos.</li>
                    <li><strong>WMV</strong>: Formato de Windows Media Video, optimizado para sistemas Windows.</li>
                    <li><strong>MOV</strong>: Formato de QuickTime, común en dispositivos Apple.</li>
                    <li><strong>AVI</strong>: Formato de video de Windows, aunque puede resultar en archivos grandes.</li>
                  </ul>
                  <li><strong>Video en línea</strong>: Para insertar videos desde fuentes en línea, como YouTube o Microsoft Stream. PowerPoint te permitirá buscar videos o pegar un enlace directo.</li>
                </ul>
                <li>Selecciona la opción deseada y sigue las instrucciones para insertar el video.</li>
                <li>El video insertado aparecerá como un marco en tu diapositiva. Puedes redimensionar este marco arrastrando sus controladores.</li>
                <li>Configura las opciones de reproducción en la pestaña <strong>Reproducción de video</strong>:</li>
                <ul class="steps">
                  <li><strong>Iniciar</strong>: Elige si el video se reproducirá automáticamente o al hacer clic.</li>
                  <li><strong>Volumen</strong>: Ajusta el nivel de volumen del video.</li>
                  <li><strong>Recortar video</strong>: Edita el video para reproducir solo una parte específica.</li>
                  <li><strong>Desvanecer</strong>: Añade efectos de desvanecimiento al inicio y al final del video.</li>
                  <li><strong>Bucle</strong>: Configura el video para que se reproduzca en bucle.</li>
                  <li><strong>Reproducir a pantalla completa</strong>: El video se reproducirá en modo de pantalla completa durante la presentación.</li>
                  <li><strong>Ocultar durante la presentación</strong>: Esconde el marco del video cuando no se esté reproduciendo.</li>
                </ul>
                <li>El video es útil para:</li>
                <ul class="steps">
                  <li>Mostrar demostraciones de productos o servicios.</li>
                  <li>Incluir testimonios de clientes o entrevistas.</li>
                  <li>Presentar animaciones o simulaciones.</li>
                  <li>Añadir contenido multimedia para hacer la presentación más dinámica.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Audio+y+Video" alt="Audio y video en PowerPoint">
                <figcaption>Ejemplo de cómo insertar audio y video en PowerPoint 2025. La imagen muestra un ícono de audio y un marco de video en una diapositiva, con opciones de reproducción y configuración visibles.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout warn">
            <strong>Precaución:</strong> Al insertar audio o video, considera el tamaño del archivo y su impacto en el rendimiento de la presentación. Archivos multimedia grandes pueden hacer que la presentación sea lenta al abrirla o al cambiar de diapositiva. Usa la opción <strong>Comprimir multimedia</strong> en la pestaña <strong>Archivo</strong> para reducir el tamaño de los archivos sin perder calidad significativa.
          </div>
        </div>

        <!-- Modelos 3D -->
        <div class="card">
          <h4>Insertar modelos 3D y capturas de pantalla</h4>
          <p>Añade elementos interactivos y visuales avanzados a tus presentaciones. Los modelos 3D y las capturas de pantalla te permiten incluir contenido dinámico y realista, mejorando la engagement de la audiencia:</p>
          <div class="grid grid-2">
            <div>
              <h5>Modelos 3D</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Modelos 3D</strong> en el grupo <strong>Ilustraciones</strong>.</li>
                <li>PowerPoint te dará dos opciones para insertar modelos 3D:</li>
                <ul class="steps">
                  <li><strong>Este dispositivo</strong>: Para insertar archivos de modelos 3D almacenados localmente. Los formatos soportados incluyen:</li>
                  <ul class="steps">
                    <li><strong>FBX</strong>: Formato común para modelos 3D, compatible con muchas aplicaciones de diseño.</li>
                    <li><strong>OBJ</strong>: Formato abierto para modelos 3D, ampliamente utilizado en diseño y animación.</li>
                    <li><strong>3MF</strong>: Formato moderno para manufactura aditiva y diseño 3D.</li>
                    <li><strong>GLB</strong>: Formato binario para modelos 3D en la web, compatible con muchas plataformas.</li>
                  </ul>
                  <li><strong>Stock de modelos 3D</strong>: Para insertar modelos 3D de la biblioteca de Microsoft, que incluye una variedad de objetos, personajes y escenas predefinidas.</li>
                </ul>
                <li>Selecciona la opción deseada y sigue las instrucciones para insertar el modelo 3D.</li>
                <li>El modelo 3D aparecerá en tu diapositiva como un objeto interactivo. Puedes:</li>
                <ul class="steps">
                  <li>Girar el modelo en cualquier dirección arrastrando con el ratón, lo que te permite mostrar diferentes ángulos durante la presentación.</li>
                  <li>Inclinar el modelo para verlo desde arriba o desde abajo, útil para mostrar detalles específicos.</li>
                  <li>Acercar o alejar el modelo para enfocar áreas particulares.</li>
                  <li>Ajustar el tamaño del modelo arrastrando sus controladores.</li>
                </ul>
                <li>Configura las opciones de vista en la pestaña <strong>Formato de modelo 3D</strong>:</li>
                <ul class="steps">
                  <li><strong>Estilos de modelo 3D</strong>: Aplica efectos predefinidos al modelo, como iluminación o materiales.</li>
                  <li><strong>Panorama</strong>: Configura la vista inicial del modelo que verá la audiencia al inicio.</li>
                  <li><strong>Animación</strong>: Añade animaciones al modelo para que gire automáticamente durante la presentación.</li>
                </ul>
                <li>Los modelos 3D son ideales para:</li>
                <ul class="steps">
                  <li>Mostrar productos o prototipos en presentaciones de ventas o diseño.</li>
                  <li>Explicar conceptos complejos, como estructuras moleculares o maquinaria.</li>
                  <li>Añadir elementos visuales interactivos que capturen la atención de la audiencia.</li>
                  <li>Crear presentaciones inmersivas para eventos o demostraciones.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Capturas de pantalla</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Captura de pantalla</strong> en el grupo <strong>Ilustraciones</strong>.</li>
                <li>PowerPoint te dará dos opciones para insertar capturas de pantalla:</li>
                <ul class="steps">
                  <li><strong>Ventana abierta</strong>: Para capturar una ventana específica que esté abierta en tu computadora. PowerPoint mostrará miniaturas de las ventanas disponibles para que elijas.</li>
                  <li><strong>Recorte de pantalla</strong>: Para seleccionar manualmente un área de la pantalla y capturar solo esa parte. La pantalla se atenuará y podrás arrastrar para definir el área de captura.</li>
                </ul>
                <li>Selecciona la opción deseada y sigue las instrucciones para insertar la captura de pantalla.</li>
                <li>La captura de pantalla se insertará en tu diapositiva como una imagen editable. Puedes:</li>
                <ul class="steps">
                  <li>Recortar la imagen para enfocar solo la parte relevante.</li>
                  <li>Ajustar el tamaño y la posición de la imagen arrastrando sus controladores.</li>
                  <li>Aplicar efectos de formato, como bordes, sombras o ajustes de color.</li>
                </ul>
                <li>Las capturas de pantalla son útiles para:</li>
                <ul class="steps">
                  <li>Mostrar ejemplos de software, páginas web o aplicaciones.</li>
                  <li>Incluir imágenes de documentos o presentaciones externas.</li>
                  <li>Capturar datos o gráficos de otras fuentes para incorporarlos a tu presentación.</li>
                  <li>Crear tutoriales o guías visuales paso a paso.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Modelos+3D+y+Capturas" alt="Modelos 3D y capturas en PowerPoint">
                <figcaption>Ejemplo de modelos 3D y capturas de pantalla en PowerPoint 2025. La imagen muestra un modelo 3D interactivo de un producto y una captura de pantalla de una aplicación, con opciones para girar el modelo y editar la captura.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa modelos 3D para crear presentaciones interactivas que permitan a la audiencia explorar el contenido desde diferentes ángulos. Por ejemplo, en una presentación de un producto, permite a los espectadores girar el modelo para ver detalles específicos. Esto no solo mejora la engagement, sino que también facilita la comprensión de conceptos complejos.
          </div>
        </div>
      </section>

      <!-- Módulo 5: Tablas y Objetos de Otras Aplicaciones -->
      <section id="modulo5" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-table"></i>
          <span>Módulo 5: Tablas y Objetos de Otras Aplicaciones</span>
        </div>
        <h3>Módulo 5. Tablas y Objetos de Otras Aplicaciones</h3>
        <p class="lead">Organiza datos en tablas y vincula objetos de otras aplicaciones como Excel. Este módulo te enseñará a insertar, editar y personalizar tablas, así como a integrar datos externos en tus presentaciones. Desde la creación de tablas simples hasta la importación de datos dinámicos de Excel, dominarás las herramientas para presentar información de manera clara y profesional.</p>

        <!-- Crear e insertar tablas -->
        <div class="card">
          <h4>Crear e insertar tablas</h4>
          <p>Las tablas son útiles para presentar datos de manera organizada y estructurada. PowerPoint 2025 ofrece herramientas flexibles para crear tablas personalizadas y adaptarlas a tus necesidades:</p>
          <div class="grid grid-2">
            <div>
              <h5>Insertar una tabla</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Tabla</strong> en el grupo <strong>Tablas</strong>.</li>
                <li>PowerPoint te dará dos opciones para insertar una tabla:</li>
                <ul class="steps">
                  <li>Arrastra sobre la cuadrícula para seleccionar el número de filas y columnas que deseas en tu tabla. PowerPoint insertará una tabla con ese tamaño en tu diapositiva.</li>
                  <li>Haz clic en <strong>Insertar tabla</strong> para especificar el número exacto de filas y columnas en un cuadro de diálogo. Esto es útil para tablas grandes o cuando necesitas un tamaño específico.</li>
                </ul>
                <li>La tabla insertada incluirá un diseño básico con bordes y un color de relleno predeterminado, que podrás personalizar según tus necesidades.</li>
                <li>Escribe o pega el contenido en las celdas de la tabla. Puedes navegar entre celdas usando las teclas de dirección o haciendo clic directamente en la celda deseada.</li>
                <li>PowerPoint ajusta automáticamente el tamaño de las filas y columnas según el contenido, aunque puedes desactivar esta opción si prefieres un tamaño fijo.</li>
              </ul>
            </div>
            <div>
              <h5>Editar una tabla</h5>
              <ul class="steps">
                <li>Selecciona la tabla haciendo clic en cualquier celda. Aparecerán las pestañas <strong>Diseño de tabla</strong> y <strong>Presentación de tabla</strong> en la cinta de opciones.</li>
                <li>Añade o elimina filas y columnas:</li>
                <ul class="steps">
                  <li>Haz clic derecho en una fila o columna y selecciona <strong>Insertar</strong> o <strong>Eliminar</strong> en el menú contextual.</li>
                  <li>Usa los botones en la pestaña <strong>Presentación de tabla</strong> para insertar o eliminar filas y columnas rápidamente.</li>
                </ul>
                <li>Arrastra los bordes de las filas o columnas para ajustar su ancho o alto manualmente. Mantén presionada la tecla <span class="keyboard-shortcut">Shift</span> mientras arrastras para ajustar varias filas o columnas al mismo tiempo.</li>
                <li>Usa la opción <strong>Distribuir filas</strong> o <strong>Distribuir columnas</strong> en la pestaña <strong>Presentación de tabla</strong> para igualar el tamaño de las filas o columnas seleccionadas.</li>
                <li>Combina o divide celdas:</li>
                <ul class="steps">
                  <li>Selecciona las celdas que deseas combinar y haz clic en <strong>Combinar celdas</strong> en la pestaña <strong>Presentación de tabla</strong>.</li>
                  <li>Usa <strong>Dividir celdas</strong> para dividir una celda combinada en varias celdas individuales.</li>
                </ul>
                <li>Ordena los datos de la tabla usando la opción <strong>Ordenar</strong> en la pestaña <strong>Diseño de tabla</strong>, lo que es útil para organizar información alfabética o numéricamente.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Tablas" alt="Tablas en PowerPoint">
                <figcaption>Ejemplo de cómo crear e insertar tablas en PowerPoint 2025. La imagen muestra una tabla con datos de ejemplo, opciones para añadir filas y columnas, y herramientas para ajustar el tamaño y la alineación de las celdas.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa tablas para presentar datos tabulares de manera clara, pero evita saturar las diapositivas con demasiada información. Si la tabla es muy grande, considera dividirla en varias diapositivas o usar un gráfico para representar los datos de manera visual. Además, aplica estilos de tabla consistentes en toda la presentación para mantener la coherencia visual.
          </div>
        </div>

        <!-- Formato de tablas -->
        <div class="card">
          <h4>Dar formato a celdas y bordes</h4>
          <p>Personaliza el aspecto de tus tablas para mejorar su legibilidad y adaptación al diseño de tu presentación. PowerPoint 2025 ofrece una variedad de opciones para formatear tablas, desde estilos predefinidos hasta ajustes detallados:</p>
          <div class="grid grid-2">
            <div>
              <h5>Estilos de tabla</h5>
              <ul class="steps">
                <li>Selecciona la tabla y ve a la pestaña <strong>Diseño de tabla</strong> para acceder a las opciones de formato.</li>
                <li>Aplica un estilo de tabla predefinido:</li>
                <ul class="steps">
                  <li>Haz clic en el botón <strong>Estilos de tabla</strong> para ver una galería de diseños predefinidos.</li>
                  <li>Los estilos incluyen combinaciones de colores, bordes y efectos que se aplican a toda la tabla.</li>
                  <li>Algunos estilos destacan las filas de encabezado o las filas alternas para mejorar la legibilidad.</li>
                </ul>
                <li>Personaliza los bordes de la tabla:</li>
                <ul class="steps">
                  <li>Usa el botón <strong>Bordes</strong> para ajustar el estilo, color y grosor de los bordes.</li>
                  <li>Elige entre bordes para toda la tabla, solo para las celdas externas o para celdas internas específicas.</li>
                  <li>Aplica bordes personalizados a celdas individuales seleccionándolas y usando las opciones de borde en la pestaña <strong>Diseño de tabla</strong>.</li>
                </ul>
                <li>Cambia el color de relleno de las celdas:</li>
                <ul class="steps">
                  <li>Selecciona las celdas que deseas formatear y usa el botón <strong>Sombreado</strong> para aplicar un color de fondo.</li>
                  <li>Elige colores del tema de la presentación o selecciona colores personalizados.</li>
                  <li>Usa el sombreado para resaltar filas o columnas importantes, como totales o datos clave.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Formato de celdas</h5>
              <ul class="steps">
                <li>Selecciona las celdas individuales que deseas formatear. Puedes seleccionar una celda, un rango de celdas o toda la tabla.</li>
                <li>Ajusta la alineación del texto dentro de las celdas:</li>
                <ul class="steps">
                  <li>Usa los botones de alineación en la pestaña <strong>Inicio</strong> para alinear el texto a la izquierda, centro, derecha o justificado.</li>
                  <li>Ajusta la dirección del texto (horizontal o vertical) usando la opción <strong>Dirección del texto</strong> en la pestaña <strong>Presentación de tabla</strong>.</li>
                </ul>
                <li>Cambia el formato del texto:</li>
                <ul class="steps">
                  <li>Aplica negrita, cursiva o subrayado para resaltar información importante.</li>
                  <li>Cambia el color, tamaño y fuente del texto para que coincida con el diseño de tu presentación.</li>
                  <li>Usa viñetas o numeración dentro de las celdas para organizar listas de elementos.</li>
                </ul>
                <li>Combina celdas para crear encabezados o secciones:</li>
                <ul class="steps">
                  <li>Selecciona las celdas que deseas combinar y haz clic en <strong>Combinar celdas</strong> en la pestaña <strong>Presentación de tabla</strong>.</li>
                  <li>Usa esta función para crear títulos que abarquen varias columnas o para organizar datos en grupos lógicos.</li>
                </ul>
                <li>Ajusta el tamaño de las celdas:</li>
                <ul class="steps">
                  <li>Arrastra los bordes de las filas o columnas para cambiar su altura o ancho.</li>
                  <li>Usa la opción <strong>Distribuir filas</strong> o <strong>Distribuir columnas</strong> para igualar el tamaño de las filas o columnas seleccionadas.</li>
                  <li>Configura el ajuste de texto para que el contenido se ajuste automáticamente al tamaño de la celda o se desborde si es necesario.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Formato+de+Tablas" alt="Formato de tablas en PowerPoint">
                <figcaption>Ejemplo de formato de tablas en PowerPoint 2025. La imagen muestra una tabla con estilos aplicados, bordes personalizados y celdas combinadas, así como opciones para ajustar el sombreado y la alineación del texto.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Para mejorar la legibilidad de tus tablas, usa colores de relleno contrastantes para las filas de encabezado y filas alternas. Esto ayuda a la audiencia a seguir las filas y columnas fácilmente. Además, evita usar demasiados colores o estilos diferentes, ya que esto puede hacer que la tabla parezca desordenada.
          </div>
        </div>

        <!-- Objetos de Excel -->
        <div class="card">
          <h4>Insertar objetos de Excel y vincular datos</h4>
          <p>Integra datos de Excel en tus presentaciones para mostrar información numérica de manera dinámica y profesional. PowerPoint 2025 permite insertar hojas de cálculo de Excel como objetos incrustados o vinculados, lo que facilita la actualización de datos y el mantenimiento de la precisión:</p>
          <div class="grid grid-2">
            <div>
              <h5>Insertar hoja de cálculo</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Objeto</strong> en el grupo <strong>Texto</strong>.</li>
                <li>En el cuadro de diálogo <strong>Insertar objeto</strong>, selecciona <strong>Hoja de cálculo de Microsoft Excel</strong> y haz clic en <strong>Aceptar</strong>.</li>
                <li>PowerPoint insertará una hoja de cálculo de Excel en tu diapositiva y abrirá una ventana de Excel donde podrás ingresar o editar los datos.</li>
                <li>Edita los datos directamente en la ventana de Excel. Los cambios se reflejarán automáticamente en la hoja de cálculo insertada en PowerPoint.</li>
                <li>Cierra la ventana de Excel para volver a PowerPoint. Puedes volver a abrirla en cualquier momento haciendo doble clic en la hoja de cálculo insertada.</li>
                <li>Redimensiona la hoja de cálculo arrastrando sus controladores para ajustar su tamaño en la diapositiva.</li>
                <li>La hoja de cálculo incrustada se comporta como un objeto de PowerPoint, por lo que puedes moverla, copiarla o aplicarle efectos de formato.</li>
              </ul>
            </div>
            <div>
              <h5>Vincular datos</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Objeto</strong> en el grupo <strong>Texto</strong>.</li>
                <li>En el cuadro de diálogo <strong>Insertar objeto</strong>, selecciona <strong>Crear desde archivo</strong>.</li>
                <li>Haz clic en <strong>Examinar</strong> para seleccionar el archivo de Excel que contiene los datos que deseas vincular.</li>
                <li>Marca la casilla <strong>Vincular</strong> para crear un vínculo entre el archivo de Excel y la presentación de PowerPoint.</li>
                <li>Haz clic en <strong>Aceptar</strong> para insertar los datos vinculados en tu diapositiva.</li>
                <li>Los datos vinculados aparecerán en tu diapositiva como una tabla o gráfico de Excel. Cualquier cambio que realices en el archivo de Excel original se reflejará automáticamente en la presentación de PowerPoint.</li>
                <li>Para actualizar los datos vinculados manualmente, haz clic derecho en el objeto vinculado y selecciona <strong>Actualizar vínculo</strong>.</li>
                <li>Los objetos vinculados son útiles para:</li>
                <ul class="steps">
                  <li>Presentaciones que requieren datos actualizados frecuentemente, como informes financieros o dashboards.</li>
                  <li>Trabajar con datos complejos que se gestionan en Excel pero se presentan en PowerPoint.</li>
                  <li>Mantener la consistencia entre múltiples presentaciones que usan los mismos datos.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Excel+en+PowerPoint" alt="Excel en PowerPoint">
                <figcaption>Ejemplo de cómo insertar y vincular objetos de Excel en PowerPoint 2025. La imagen muestra una hoja de cálculo incrustada y un gráfico vinculado, con opciones para editar datos y actualizar vínculos.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout warn">
            <strong>Precaución:</strong> Al vincular datos de Excel, asegúrate de que el archivo de origen esté disponible y en la ubicación correcta. Si mueves o eliminas el archivo de Excel, los vínculos en PowerPoint se romperán y los datos no se actualizarán. Además, ten en cuenta que los archivos con objetos vinculados pueden ser más grandes y requerir más recursos al abrirse.
          </div>
        </div>

        <!-- Hipervínculos y botones -->
        <div class="card">
          <h4>Insertar hipervínculos y botones de acción</h4>
          <p>Añade interactividad a tus presentaciones con hipervínculos y botones de acción. Estas herramientas te permiten crear presentaciones dinámicas que permiten a la audiencia navegar entre diapositivas, acceder a recursos externos o interactuar con el contenido:</p>
          <div class="grid grid-2">
            <div>
              <h5>Hipervínculos</h5>
              <ul class="steps">
                <li>Selecciona el texto, forma o imagen al que deseas añadir un hipervínculo.</li>
                <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + K</span> o ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Hipervínculo</strong> en el grupo <strong>Vínculos</strong>.</li>
                <li>En el cuadro de diálogo <strong>Insertar hipervínculo</strong>, elige el destino del vínculo:</li>
                <ul class="steps">
                  <li><strong>Archivo o página web existente</strong>: Vincula a un archivo local, una página web o un correo electrónico. Ingresa la dirección URL o selecciona el archivo desde tu computadora.</li>
                  <li><strong>Lugar en este documento</strong>: Vincula a una diapositiva específica dentro de la misma presentación. Selecciona la diapositiva de destino en la lista.</li>
                  <li><strong>Crear nuevo documento</strong>: Crea un nuevo archivo de PowerPoint o Word vinculado al hipervínculo.</li>
                  <li><strong>Dirección de correo electrónico</strong>: Abre un nuevo mensaje de correo electrónico con una dirección y asunto predefinidos.</li>
                </ul>
                <li>Configura opciones adicionales:</li>
                <ul class="steps">
                  <li><strong>Información sobre herramientas</strong>: Añade texto que aparecerá al pasar el cursor sobre el hipervínculo.</li>
                  <li><strong>Editar hipervínculo</strong>: Modifica el destino o la apariencia del vínculo en cualquier momento.</li>
                </ul>
                <li>Los hipervínculos son útiles para:</li>
                <ul class="steps">
                  <li>Crear índices interactivos que permitan navegar entre secciones de la presentación.</li>
                  <li>Vincular a recursos externos, como documentos, páginas web o correos electrónicos.</li>
                  <li>Añadir referencias cruzadas entre diapositivas relacionadas.</li>
                  <li>Facilitar la navegación en presentaciones largas o complejas.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Botones de acción</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Formas</strong> en el grupo <strong>Ilustraciones</strong>.</li>
                <li>Desplázate hasta la sección <strong>Botones de acción</strong> y selecciona un botón predefinido, como:</li>
                <ul class="steps">
                  <li><strong>Botón personalizado</strong>: Un botón en blanco que puedes personalizar con texto e imágenes.</li>
                  <li><strong>Inicio</strong>: Botón para ir a la primera diapositiva.</li>
                  <li><strong>Anterior</strong>: Botón para retroceder a la diapositiva anterior.</li>
                  <li><strong>Siguiente</strong>: Botón para avanzar a la siguiente diapositiva.</li>
                  <li><strong>Último</strong>: Botón para ir a la última diapositiva.</li>
                  <li><strong>Reproducir</strong>: Botón para reproducir un elemento multimedia.</li>
                  <li><strong>Documento</strong>: Botón para abrir un archivo vinculado.</li>
                  <li><strong>Ayuda</strong>: Botón para mostrar información adicional.</li>
                </ul>
                <li>Dibuja el botón en tu diapositiva arrastrando para definir su tamaño.</li>
                <li>En el cuadro de diálogo <strong>Configuración de acción</strong>, elige la acción que realizará el botón:</li>
                <ul class="steps">
                  <li><strong>Hipervínculo a</strong>: Vincula el botón a una diapositiva, archivo, página web o correo electrónico.</li>
                  <li><strong>Ejecutar programa</strong>: Abre un programa o archivo externo.</li>
                  <li><strong>Ejecutar macro</strong>: Ejecuta una macro de VBA para automatizar tareas.</li>
                  <li><strong>Acción de objeto</strong>: Realiza una acción específica en un objeto incrustado, como reproducir un video.</li>
                </ul>
                <li>Personaliza el botón:</li>
                <ul class="steps">
                  <li>Cambia el texto del botón para describir su función claramente.</li>
                  <li>Ajusta el color, estilo y efectos del botón usando las herramientas de formato.</li>
                  <li>Añade íconos o imágenes al botón para hacerlo más intuitivo.</li>
                </ul>
                <li>Los botones de acción son ideales para:</li>
                <ul class="steps">
                  <li>Crear menús de navegación interactivos en tus presentaciones.</li>
                  <li>Facilitar la exploración de contenido no lineal, como presentaciones con múltiples rutas.</li>
                  <li>Añadir elementos interactivos que mejoren la engagement de la audiencia.</li>
                  <li>Automatizar tareas repetitivas, como avanzar a la siguiente diapositiva o abrir un archivo específico.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Hipervínculos+y+Botones" alt="Hipervínculos y botones en PowerPoint">
                <figcaption>Ejemplo de hipervínculos y botones de acción en PowerPoint 2025. La imagen muestra un hipervínculo aplicado a un texto y un botón de acción personalizado, con opciones para configurar destinos y acciones.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa hipervínculos y botones de acción para crear presentaciones interactivas que permitan a la audiencia explorar el contenido según sus intereses. Por ejemplo, en una presentación de productos, usa botones para navegar entre diferentes categorías o características. Esto no solo mejora la experiencia del usuario, sino que también hace que tu presentación sea más memorable y efectiva.
          </div>
        </div>
      </section>

      <!-- Módulo 6: Diseño de Diapositivas -->
      <section id="modulo6" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-paint-brush"></i>
          <span>Módulo 6: Diseño de Diapositivas</span>
        </div>
        <h3>Módulo 6. Diseño de Diapositivas</h3>
        <p class="lead">Aprende a diseñar diapositivas profesionales con fondos, colores, temas y principios de diseño visual. Este módulo te ayudará a crear presentaciones coherentes y atractivas, aplicando técnicas de diseño que mejoren la claridad y el impacto de tu contenido. Desde la configuración de fondos hasta la aplicación de temas y la creación de diseños personalizados, dominarás las herramientas para hacer que tus diapositivas destaquen.</p>

        <!-- Configurar fondo -->
        <div class="card">
          <h4>Configurar fondo de diapositivas</h4>
          <p>Personaliza el fondo de tus diapositivas para mejorar su aspecto visual y adaptarlas al estilo de tu presentación. PowerPoint 2025 ofrece múltiples opciones para configurar fondos, desde colores sólidos hasta imágenes y texturas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Cambiar el fondo</h5>
              <ul class="steps">
                <li>Selecciona la diapositiva o diapositivas a las que deseas aplicar el fondo. Para aplicar el mismo fondo a todas las diapositivas, selecciona el patrón de diapositivas.</li>
                <li>Ve a la pestaña <strong>Diseño</strong> y haz clic en <strong>Formato de fondo</strong> en el grupo <strong>Personalizar</strong>.</li>
                <li>PowerPoint abrirá el panel <strong>Formato de fondo</strong> con las siguientes opciones:</li>
                <ul class="steps">
                  <li><strong>Color sólido</strong>: Elige un color de fondo único. Puedes seleccionar colores del tema de la presentación o definir un color personalizado.</li>
                  <li><strong>Degradado</strong>: Aplica un fondo con transición suave entre dos o más colores. PowerPoint ofrece degradados predefinidos o te permite crear uno personalizado.</li>
                  <li><strong>Imagen o textura</strong>: Usa una imagen como fondo. Puedes insertar una imagen desde tu computadora o seleccionar una textura predefinida. Ajusta la transparencia de la imagen para que no compita con el texto.</li>
                  <li><strong>Patrón</strong>: Aplica un patrón geométrico como fondo, con opciones para ajustar los colores del patrón.</li>
                </ul>
                <li>Configura opciones adicionales:</li>
                <ul class="steps">
                  <li><strong>Transparencia</strong>: Ajusta el nivel de transparencia del fondo para que el contenido de la diapositiva sea más visible.</li>
                  <li><strong>Aplicar a todo</strong>: Aplica el fondo seleccionado a todas las diapositivas de la presentación.</li>
                  <li><strong>Restablecer fondo</strong>: Vuelve al fondo predeterminado del tema.</li>
                </ul>
                <li>Los fondos son esenciales para:</li>
                <ul class="steps">
                  <li>Establecer el tono visual de la presentación, como profesional, creativo o formal.</li>
                  <li>Mejorar la legibilidad del texto y otros elementos en la diapositiva.</li>
                  <li>Crear coherencia visual entre todas las diapositivas.</li>
                  <li>Reflejar la identidad de marca de tu organización o el tema de la presentación.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Aplicar fondos a múltiples diapositivas</h5>
              <ul class="steps">
                <li>Para aplicar el mismo fondo a varias diapositivas, selecciona las diapositivas deseadas en el panel de diapositivas (mantén presionada la tecla <span class="keyboard-shortcut">Ctrl</span> mientras haces clic para seleccionar múltiples diapositivas).</li>
                <li>Ve a la pestaña <strong>Diseño</strong> y configura el fondo como se describió anteriormente. Los cambios se aplicarán a todas las diapositivas seleccionadas.</li>
                <li>Para aplicar un fondo a todas las diapositivas de la presentación, edita el patrón de diapositivas:</li>
                <ul class="steps">
                  <li>Ve a la pestaña <strong>Vista</strong> y selecciona <strong>Patrón de diapositivas</strong>.</li>
                  <li>Selecciona el patrón principal (la primera diapositiva en el panel) y configura el fondo.</li>
                  <li>Los cambios en el patrón de diapositivas se aplicarán automáticamente a todas las diapositivas de la presentación.</li>
                </ul>
                <li>Usa fondos diferentes para secciones específicas de tu presentación:</li>
                <ul class="steps">
                  <li>Por ejemplo, usa un fondo oscuro para la portada y un fondo claro para las diapositivas de contenido.</li>
                  <li>Cambia el fondo para destacar secciones importantes, como conclusiones o llamadas a la acción.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Fondo+de+Diapositivas" alt="Fondo de diapositivas en PowerPoint">
                <figcaption>Ejemplo de cómo configurar fondos en PowerPoint 2025. La imagen muestra el panel <strong>Formato de fondo</strong> con opciones para aplicar colores sólidos, degradados, imágenes o texturas, así como ajustes de transparencia.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al usar imágenes como fondo, elige imágenes de alta resolución con suficiente contraste para que el texto sea legible. Ajusta la transparencia de la imagen o añade un fondo semitransparente detrás del texto si es necesario. Evita fondos demasiado llamativos o con patrones complejos, ya que pueden distraer a la audiencia.
          </div>
        </div>

        <!-- Temas y colores -->
        <div class="card">
          <h4>Usar temas y combinaciones de colores</h4>
          <p>Aplica temas para mantener un diseño profesional y coherente en toda tu presentación. Los temas en PowerPoint 2025 incluyen combinaciones de colores, fuentes y efectos que se aplican automáticamente a todas las diapositivas, asegurando una apariencia uniforme y atractiva:</p>
          <div class="grid grid-2">
            <div>
              <h5>Aplicar un tema</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Diseño</strong> para acceder a la galería de temas.</li>
                <li>PowerPoint mostrará una variedad de temas predefinidos, organizados en categorías como:</li>
                <ul class="steps">
                  <li><strong>Profesional</strong>: Temas con diseños limpios y colores neutros, ideales para presentaciones corporativas.</li>
                  <li><strong>Creativo</strong>: Temas con colores vibrantes y diseños modernos, adecuados para presentaciones artísticas o de marketing.</li>
                  <li><strong>Formal</strong>: Temas con estilos clásicos y elegantes, perfectos para presentaciones académicas o eventos formales.</li>
                  <li><strong>Minimalista</strong>: Temas con diseños simples y espacio en blanco, ideales para enfocar la atención en el contenido.</li>
                </ul>
                <li>Selecciona un tema haciendo clic en él. PowerPoint aplicará automáticamente el tema a toda la presentación, incluyendo:</li>
                <ul class="steps">
                  <li>Combinación de colores predefinida para texto, fondos y acentos.</li>
                  <li>Fuentes para títulos, subtítulos y texto del cuerpo.</li>
                  <li>Estilos para formas, gráficos y otros elementos visuales.</li>
                  <li>Efectos como sombras, reflejos y bordes.</li>
                </ul>
                <li>Los temas incluyen diseños de diapositivas predefinidos, que puedes usar como punto de partida para tus diapositivas.</li>
                <li>Al aplicar un tema, PowerPoint conserva el contenido de tus diapositivas y ajusta su apariencia para que coincida con el nuevo tema.</li>
              </ul>
            </div>
            <div>
              <h5>Personalizar colores</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Diseño</strong> y haz clic en <strong>Colores</strong> en el grupo <strong>Personalizar</strong>.</li>
                <li>PowerPoint mostrará una paleta de combinaciones de colores predefinidas, organizadas por temas. Cada combinación incluye:</li>
                <ul class="steps">
                  <li>Colores para texto y fondos.</li>
                  <li>Colores de acento para resaltar elementos.</li>
                  <li>Colores para hipervínculos y texto visitado.</li>
                </ul>
                <li>Selecciona una combinación de colores predefinida o crea una personalizada:</li>
                <ul class="steps">
                  <li>Haz clic en <strong>Personalizar colores</strong> para abrir el cuadro de diálogo de personalización.</li>
                  <li>Ajusta cada color en la paleta, seleccionando colores del selector o ingresando valores hexadecimales.</li>
                  <li>Asigna un nombre a tu combinación personalizada y guárdala para usarla en otras presentaciones.</li>
                </ul>
                <li>Los colores personalizados se guardan con el tema y estarán disponibles en la galería de colores para futuras presentaciones.</li>
                <li>Usa combinaciones de colores para:</li>
                <ul class="steps">
                  <li>Reflejar la identidad de marca de tu organización, usando los colores corporativos.</li>
                  <li>Crear presentaciones temáticas, como usar colores cálidos para presentaciones sobre energía o colores fríos para temas tecnológicos.</li>
                  <li>Mejorar la accesibilidad, eligiendo combinaciones con suficiente contraste entre texto y fondos.</li>
                  <li>Diferenciar secciones de la presentación, usando paletas de colores distintas para cada parte.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Temas+y+Colores" alt="Temas y colores en PowerPoint">
                <figcaption>Ejemplo de temas y combinaciones de colores en PowerPoint 2025. La imagen muestra la galería de temas con opciones para aplicar diseños predefinidos y el cuadro de diálogo para personalizar combinaciones de colores.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al personalizar un tema, guarda tu combinación de colores y fuentes como un tema personalizado para reutilizarlo en futuras presentaciones. Ve a <strong>Diseño → Temas → Guardar tema actual</strong> para guardar tu diseño. Esto asegura la coherencia visual en todas tus presentaciones y ahorra tiempo en el diseño.
          </div>
        </div>

        <!-- Diseño coherente -->
        <div class="card">
          <h4>Diseño coherente y principios visuales</h4>
          <p>Sigue estos principios de diseño para crear presentaciones profesionales y efectivas. Un diseño coherente mejora la legibilidad, facilita la comprensión y hace que tu presentación sea más memorable:</p>
          <div class="grid grid-2">
            <div>
              <h5>Coherencia visual</h5>
              <ul class="steps">
                <li>Mantén la misma combinación de colores en todas las diapositivas, usando los colores del tema o una paleta personalizada.</li>
                <li>Usa las mismas fuentes para títulos, subtítulos y texto del cuerpo en toda la presentación. Limita el número de fuentes diferentes a dos o tres para evitar distracciones.</li>
                <li>Aplica el mismo estilo a elementos similares, como viñetas, formas o íconos. Por ejemplo, usa el mismo color y forma para todas las viñetas de primer nivel.</li>
                <li>Mantén tamaños y posiciones consistentes para elementos recurrentes, como logotipos, pies de página o cuadros de texto.</li>
                <li>Usa el patrón de diapositivas para definir estilos globales, como fondos, colores y diseños, que se aplicarán automáticamente a todas las diapositivas.</li>
                <li>Repite elementos visuales, como formas, líneas o imágenes, para crear un hilo conductor en la presentación.</li>
                <li>La coherencia visual ayuda a:</li>
                <ul class="steps">
                  <li>Reforzar la identidad de marca de tu organización.</li>
                  <li>Facilitar la navegación y comprensión del contenido por parte de la audiencia.</li>
                  <li>Crear una experiencia visual agradable y profesional.</li>
                  <li>Reducir la carga cognitiva, permitiendo que la audiencia se enfoque en el mensaje.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Jerarquía visual</h5>
              <ul class="steps">
                <li>Organiza el contenido de tus diapositivas para guiar la atención de la audiencia:</li>
                <ul class="steps">
                  <li>Destaca los títulos y subtítulos con tamaños de fuente mayores y colores contrastantes.</li>
                  <li>Usa viñetas, numeración o sangrías para organizar la información en niveles lógicos.</li>
                  <li>Coloca los elementos más importantes en la parte superior o centro de la diapositiva, donde son más visibles.</li>
                  <li>Usa colores, formas o íconos para resaltar información clave o llamadas a la acción.</li>
                </ul>
                <li>Agrupa elementos relacionados visualmente:</li>
                <ul class="steps">
                  <li>Usa líneas, formas o colores de fondo para conectar elementos que pertenecen juntos.</li>
                  <li>Deja espacio en blanco entre grupos de información para separarlos claramente.</li>
                  <li>Alinea los elementos para crear una estructura ordenada y fácil de seguir.</li>
                </ul>
                <li>Usa la regla de los tercios para colocar elementos importantes:</li>
                <ul class="steps">
                  <li>Divide mentalmente la diapositiva en nueve partes iguales, con dos líneas horizontales y dos verticales.</li>
                  <li>Coloca los elementos clave en las intersecciones de estas líneas o a lo largo de ellas para crear un diseño equilibrado y dinámico.</li>
                </ul>
                <li>Limita la cantidad de información en cada diapositiva:</li>
                <ul class="steps">
                  <li>Usa la regla <strong>6x6</strong>: no más de 6 viñetas por diapositiva y no más de 6 palabras por viñeta.</li>
                  <li>Divide contenido complejo en múltiples diapositivas para mantener la claridad.</li>
                  <li>Usa el área de notas para incluir información adicional que no cabe en la diapositiva.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Diseño+Coherente" alt="Diseño coherente en PowerPoint">
                <figcaption>Ejemplo de diseño coherente en PowerPoint 2025. La imagen muestra una diapositiva con jerarquía visual clara, usando tamaños de fuente, colores y alineación para organizar la información de manera efectiva.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Antes de empezar a diseñar tu presentación, crea un esquema visual que defina los colores, fuentes, estilos y diseños que usarás. Esto te ayudará a mantener la coherencia y ahorrar tiempo durante el proceso de creación. Además, revisa cada diapositiva para asegurarte de que sigue los principios de diseño y que no hay elementos inconsistentes.
          </div>
        </div>
      </section>

      <!-- Módulo 7: Animaciones y Transiciones -->
      <section id="modulo7" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-film"></i>
          <span>Módulo 7: Animaciones y Transiciones</span>
        </div>
        <h3>Módulo 7. Animaciones y Transiciones</h3>
        <p class="lead">Aprende a añadir animaciones y transiciones para hacer tus presentaciones más dinámicas y atractivas. Este módulo te enseñará a usar efectos de entrada, salida, énfasis y trayectorias, así como a configurar transiciones entre diapositivas. Desde animaciones sutiles hasta efectos avanzados, dominarás las herramientas para crear presentaciones interactivas y memorables que capturen la atención de tu audiencia.</p>

        <!-- Diferencias entre animación y transición -->
        <div class="card">
          <h4>Diferencias entre animación y transición</h4>
          <p>Las animaciones y transiciones son herramientas poderosas para mejorar el flujo y el impacto visual de tus presentaciones. Aunque a menudo se confunden, tienen propósitos distintos:</p>
          <div class="grid grid-2">
            <div>
              <h5>Animaciones</h5>
              <ul class="steps">
                <li>Aplicadas a elementos individuales dentro de una diapositiva, como texto, imágenes, formas o gráficos.</li>
                <li>Controlan cómo aparecen, desaparecen o se resaltan los elementos durante la presentación.</li>
                <li>Se configuran en la pestaña <strong>Animaciones</strong>, donde puedes elegir entre una variedad de efectos y ajustar su duración, orden y activación.</li>
                <li>Las animaciones se utilizan para:</li>
                <ul class="steps">
                  <li>Introducir elementos de manera gradual para evitar saturar a la audiencia con demasiada información a la vez.</li>
                  <li>Resaltar puntos clave o llamadas a la acción, atrayendo la atención hacia ellos.</li>
                  <li>Crear narrativas visuales, donde los elementos aparecen en un orden lógico que guía la explicación.</li>
                  <li>Añadir interactividad, permitiendo que la audiencia explore el contenido según su interés.</li>
                </ul>
                <li>Tipos de animaciones:</li>
                <ul class="steps">
                  <li><strong>Entrada</strong>: Efectos para que los elementos aparezcan en la diapositiva (ej: Aparecer, Desvanecer, Volar).</li>
                  <li><strong>Salida</strong>: Efectos para que los elementos desaparezcan (ej: Desvanecer, Salir volando).</li>
                  <li><strong>Énfasis</strong>: Efectos para resaltar elementos sin moverlos (ej: Cambiar color, Latido, Girar).</li>
                  <li><strong>Trayectorias de movimiento</strong>: Efectos para mover elementos a lo largo de una trayectoria personalizada.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Transiciones</h5>
              <ul class="steps">
                <li>Aplicadas al cambio entre diapositivas, controlando el efecto visual que ocurre al pasar de una diapositiva a otra.</li>
                <li>Se configuran en la pestaña <strong>Transiciones</strong>, donde puedes elegir entre efectos como Desvanecer, Empujar o Cortina, y ajustar su duración y sonido.</li>
                <li>Las transiciones se utilizan para:</li>
                <ul class="steps">
                  <li>Crear un flujo suave entre diapositivas, mejorando la experiencia visual de la presentación.</li>
                  <li>Separar secciones o temas dentro de la presentación, indicando un cambio de contenido.</li>
                  <li>Añadir un toque profesional o creativo, dependiendo del estilo de la transición.</li>
                  <li>Mantener el interés de la audiencia durante cambios de diapositiva.</li>
                </ul>
                <li>Tipos de transiciones:</li>
                <ul class="steps">
                  <li><strong>Sutiles</strong>: Efectos simples y profesionales, como Desvanecer o Fundido.</li>
                  <li><strong>Emocionantes</strong>: Efectos más llamativos, como Empujar, Cortina o Girar.</li>
                  <li><strong>Dinámicas</strong>: Efectos con movimiento, como Zoom, Panorámica o Rebote.</li>
                </ul>
                <li>Diferencias clave:</li>
                <ul class="steps">
                  <li>Las animaciones afectan a elementos <strong>dentro</strong> de una diapositiva, mientras que las transiciones afectan al cambio <strong>entre</strong> diapositivas.</li>
                  <li>Las animaciones se activan durante la presentación de una diapositiva, mientras que las transiciones ocurren al cambiar de diapositiva.</li>
                  <li>Las animaciones se configuran para elementos individuales, mientras que las transiciones se aplican a toda la diapositiva.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Animaciones+y+Transiciones" alt="Animaciones y transiciones en PowerPoint">
                <figcaption>Diferencia entre animaciones (elementos dentro de una diapositiva) y transiciones (cambio entre diapositivas) en PowerPoint 2025. La imagen muestra ejemplos de animaciones de entrada y transiciones sutiles aplicadas a diapositivas.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa animaciones y transiciones de manera estratégica para mejorar la claridad y el impacto de tu presentación. Por ejemplo, usa animaciones de entrada para introducir elementos gradualmente y transiciones sutiles para mantener un flujo profesional. Evita efectos excesivos o distractores que puedan restar valor a tu mensaje.
          </div>
        </div>

        <!-- Transiciones -->
        <div class="card">
          <h4>Aplicar transiciones entre diapositivas</h4>
          <p>Configura transiciones para mejorar el flujo de tu presentación y crear una experiencia visual cohesiva. Las transiciones bien elegidas pueden hacer que tu presentación se sienta más profesional y atractiva:</p>
          <div class="grid grid-2">
            <div>
              <h5>Aplicar una transición</h5>
              <ul class="steps">
                <li>Selecciona la diapositiva a la que deseas aplicar la transición en el panel de diapositivas.</li>
                <li>Ve a la pestaña <strong>Transiciones</strong> para acceder a la galería de efectos de transición.</li>
                <li>PowerPoint organiza las transiciones en tres categorías:</li>
                <ul class="steps">
                  <li><strong>Sutiles</strong>: Efectos simples y profesionales, como:</li>
                  <ul class="steps">
                    <li><strong>Desvanecer</strong>: La diapositiva actual se desvanece mientras aparece la siguiente. Es una de las transiciones más utilizadas por su simplicidad y elegancia.</li>
                    <li><strong>Fundido</strong>: Similar a Desvanecer, pero con un efecto más suave y gradual.</li>
                    <li><strong>Alejar</strong>: La diapositiva actual se aleja mientras la siguiente se acerca, creando un efecto de zoom.</li>
                  </ul>
                  <li><strong>Emocionantes</strong>: Efectos más llamativos, como:</li>
                  <ul class="steps">
                    <li><strong>Empujar</strong>: La diapositiva siguiente "empuja" a la actual fuera de la pantalla en una dirección específica (arriba, abajo, izquierda o derecha).</li>
                    <li><strong>Cortina</strong>: Un efecto de barrido que revela la diapositiva siguiente en una dirección.</li>
                    <li><strong>Girar</strong>: La diapositiva actual gira mientras aparece la siguiente.</li>
                  </ul>
                  <li><strong>Dinámicas</strong>: Efectos con movimiento más complejo, como:</li>
                  <ul class="steps">
                    <li><strong>Zoom</strong>: La diapositiva siguiente se acerca o aleja para revelarse.</li>
                    <li><strong>Panorámica</strong>: Un efecto de desplazamiento que simula el movimiento de una cámara.</li>
                    <li><strong>Rebote</strong>: La diapositiva siguiente "rebota" al entrar en la pantalla.</li>
                  </ul>
                </ul>
                <li>Selecciona una transición haciendo clic en ella. PowerPoint aplicará una vista previa del efecto a la diapositiva seleccionada.</li>
                <li>Para aplicar la misma transición a todas las diapositivas de la presentación, haz clic en <strong>Aplicar a todo</strong> en el grupo <strong>Transición a esta diapositiva</strong>.</li>
              </ul>
            </div>
            <div>
              <h5>Configurar la transición</h5>
              <ul class="steps">
                <li>Ajusta la duración de la transición usando el control <strong>Duración</strong> en el grupo <strong>Transición a esta diapositiva</strong>. La duración se mide en segundos y determina qué tan rápido o lento ocurre el efecto.</li>
                <li>Añade un sonido a la transición:</li>
                <ul class="steps">
                  <li>Selecciona un sonido de la lista desplegable en el grupo <strong>Transición a esta diapositiva</strong>.</li>
                  <li>PowerPoint ofrece una variedad de sonidos predefinidos, como aplausos, campanas o efectos de transición.</li>
                  <li>Para aplicar un sonido personalizado, selecciona <strong>Otros sonidos</strong> y busca el archivo de audio en tu computadora.</li>
                </ul>
                <li>Configura cómo se activa la transición:</li>
                <ul class="steps">
                  <li><strong>Al hacer clic</strong>: La transición ocurre cuando haces clic con el ratón o presionas una tecla durante la presentación. Esta es la opción predeterminada y te da control sobre el ritmo de la presentación.</li>
                  <li><strong>Automáticamente después de</strong>: La transición ocurre después de un período de tiempo específico, que puedes definir en segundos. Esto es útil para presentaciones automáticas o kioscos.</li>
                </ul>
                <li>Vista previa de la transición:</li>
                <ul class="steps">
                  <li>Haz clic en <strong>Vista previa</strong> en el grupo <strong>Transición a esta diapositiva</strong> para ver cómo se verá la transición durante la presentación.</li>
                  <li>Usa la vista <strong>Presentación con diapositivas</strong> para probar la transición en el contexto de la presentación completa.</li>
                </ul>
                <li>Consejos para usar transiciones efectivamente:</li>
                <ul class="steps">
                  <li>Usa transiciones sutiles para presentaciones formales o profesionales, como Desvanecer o Fundido.</li>
                  <li>Reserva transiciones más llamativas para presentaciones creativas o informales, donde un efecto dinámico pueda añadir interés.</li>
                  <li>Mantén la coherencia usando la misma transición o un conjunto limitado de transiciones en toda la presentación.</li>
                  <li>Evita transiciones demasiado largas o complejas, ya que pueden distraer a la audiencia y ralentizar la presentación.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Transiciones" alt="Transiciones en PowerPoint">
                <figcaption>Ejemplo de transiciones en PowerPoint 2025, mostrando opciones como Desvanecer, Empujar y Cortina. La imagen incluye controles para ajustar la duración, sonido y activación de las transiciones.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Para presentaciones profesionales, usa transiciones sutiles como Desvanecer o Fundido con una duración corta (0.5-1 segundo). Esto crea un flujo suave sin distraer a la audiencia. Si usas transiciones automáticas, asegúrate de que el tiempo sea suficiente para que la audiencia lea y asimile el contenido de cada diapositiva antes de pasar a la siguiente.
          </div>
        </div>

        <!-- Tipos de animaciones -->
        <div class="card">
          <h4>Tipos de animaciones: entrada, salida, énfasis y trayectorias</h4>
          <p>Añade animaciones a los elementos de tus diapositivas para controlar cómo aparecen, desaparecen o se resaltan durante la presentación. Las animaciones bien aplicadas pueden mejorar la claridad, enfatizar puntos clave y hacer que tu presentación sea más dinámica:</p>
          <div class="grid grid-2">
            <div>
              <h5>Animaciones de entrada</h5>
              <ul class="steps">
                <li>Selecciona el elemento al que deseas aplicar la animación, como un cuadro de texto, imagen, forma o gráfico.</li>
                <li>Ve a la pestaña <strong>Animaciones</strong> y haz clic en <strong>Agregar animación</strong> en el grupo <strong>Animación avanzada</strong>.</li>
                <li>PowerPoint mostrará una lista de efectos de entrada. Selecciona uno de los siguientes:</li>
                <ul class="steps">
                  <li><strong>Aparecer</strong>: El elemento aparece instantáneamente en su posición final. Es simple y efectivo para la mayoría de las presentaciones.</li>
                  <li><strong>Desvanecer</strong>: El elemento se desvanece gradualmente, creando un efecto suave y profesional.</li>
                  <li><strong>Volar</strong>: El elemento "vuela" desde una dirección específica (arriba, abajo, izquierda, derecha) hasta su posición final. Útil para indicar la procedencia o flujo de información.</li>
                  <li><strong>Zoom</strong>: El elemento se amplía desde un punto pequeño hasta su tamaño completo, llamando la atención.</li>
                  <li><strong>Girar</strong>: El elemento gira mientras aparece, añadiendo un efecto dinámico.</li>
                  <li><strong>Rebotar</strong>: El elemento "rebota" al entrar en la diapositiva, ideal para presentaciones informales o creativas.</li>
                  <li><strong>Dividir</strong>: El elemento se divide en partes que aparecen desde diferentes direcciones.</li>
                </ul>
                <li>Configura las opciones de la animación:</li>
                <ul class="steps">
                  <li><strong>Dirección</strong>: Para animaciones como Volar o Deslizar, elige la dirección desde la que aparecerá el elemento.</li>
                  <li><strong>Velocidad</strong>: Ajusta la duración de la animación (rápida, media o lenta).</li>
                  <li><strong>Iniciar</strong>: Define cuándo comienza la animación (al hacer clic, con la anterior o después de la anterior).</li>
                </ul>
                <li>Las animaciones de entrada son ideales para:</li>
                <ul class="steps">
                  <li>Introducir elementos gradualmente para evitar saturar a la audiencia con demasiada información a la vez.</li>
                  <li>Crear un flujo lógico en la presentación, donde los elementos aparecen en el orden en que se discuten.</li>
                  <li>Resaltar la aparición de información clave, como resultados o conclusiones.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Animaciones de énfasis</h5>
              <ul class="steps">
                <li>Selecciona el elemento que deseas resaltar durante la presentación.</li>
                <li>Ve a la pestaña <strong>Animaciones</strong> y haz clic en <strong>Agregar animación</strong>.</li>
                <li>Selecciona un efecto de énfasis de la lista:</li>
                <ul class="steps">
                  <li><strong>Cambiar color</strong>: El elemento cambia de color temporalmente, útil para resaltar información importante.</li>
                  <li><strong>Latido</strong>: El elemento late o parpadea, llamando la atención de manera sutil pero efectiva.</li>
                  <li><strong>Girar</strong>: El elemento gira en su posición, ideal para indicar actividad o dinamismo.</li>
                  <li><strong>Crecer/Reducir</strong>: El elemento aumenta o disminuye de tamaño, útil para enfatizar o minimizar su importancia.</li>
                  <li><strong>Onda</strong>: El elemento parece ondularse, añadiendo un efecto visual interesante.</li>
                  <li><strong>Brillo</strong>: El elemento brilla o parpadea con un efecto de luz, ideal para llamar la atención en presentaciones oscuras.</li>
                </ul>
                <li>Configura las opciones de la animación:</li>
                <ul class="steps">
                  <li><strong>Intensidad</strong>: Ajusta qué tan pronunciado es el efecto (ej: cuánto cambia el color o tamaño).</li>
                  <li><strong>Duración</strong>: Define cuánto tiempo dura el efecto de énfasis.</li>
                  <li><strong>Repetición</strong>: Configura si el efecto se repite y cuántas veces.</li>
                </ul>
                <li>Las animaciones de énfasis son útiles para:</li>
                <ul class="steps">
                  <li>Resaltar puntos clave o llamadas a la acción durante la presentación.</li>
                  <li>Dirigir la atención de la audiencia hacia información específica en momentos cruciales.</li>
                  <li>Añadir dinamismo a elementos estáticos, como gráficos o imágenes.</li>
                  <li>Indicar cambios de estado, como pasar de un tema a otro.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Animaciones" alt="Animaciones en PowerPoint">
                <figcaption>Ejemplo de animaciones de entrada y énfasis en PowerPoint 2025. La imagen muestra un cuadro de texto con una animación de entrada (Desvanecer) y una forma con una animación de énfasis (Latido), junto con opciones para configurar dirección, velocidad y activación.</figcaption>
              </figure>
            </div>
          </div>
          <div class="grid grid-2">
            <div>
              <h5>Animaciones de salida</h5>
              <ul class="steps">
                <li>Selecciona el elemento que deseas que desaparezca de la diapositiva.</li>
                <li>Ve a la pestaña <strong>Animaciones</strong> y haz clic en <strong>Agregar animación</strong>.</li>
                <li>Selecciona un efecto de salida de la lista:</li>
                <ul class="steps">
                  <li><strong>Desvanecer</strong>: El elemento se desvanece gradualmente hasta desaparecer. Es el efecto de salida más común y profesional.</li>
                  <li><strong>Salir volando</strong>: El elemento "vuela" fuera de la diapositiva en una dirección específica.</li>
                  <li><strong>Deslizar</strong>: El elemento se desliza fuera de la diapositiva en una dirección.</li>
                  <li><strong>Zoom</strong>: El elemento se reduce de tamaño hasta desaparecer.</li>
                  <li><strong>Girar</strong>: El elemento gira mientras desaparece.</li>
                </ul>
                <li>Configura las opciones de la animación:</li>
                <ul class="steps">
                  <li><strong>Dirección</strong>: Para animaciones como Salir volando, elige la dirección en la que el elemento abandonará la diapositiva.</li>
                  <li><strong>Velocidad</strong>: Ajusta qué tan rápido ocurre la animación.</li>
                  <li><strong>Iniciar</strong>: Define cuándo comienza la animación de salida, como después de una animación de énfasis o al hacer clic.</li>
                </ul>
                <li>Las animaciones de salida son útiles para:</li>
                <ul class="steps">
                  <li>Eliminar información temporal, como ejemplos o datos que ya no son relevantes.</li>
                  <li>Crear transiciones suaves entre temas, haciendo que los elementos antiguos desaparezcan antes de introducir nuevos.</li>
                  <li>Simplificar diapositivas complejas, mostrando solo la información relevante en cada momento.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Trayectorias de movimiento</h5>
              <ul class="steps">
                <li>Selecciona el elemento que deseas mover a lo largo de una trayectoria personalizada.</li>
                <li>Ve a la pestaña <strong>Animaciones</strong> y haz clic en <strong>Agregar animación</strong>.</li>
                <li>Desplázate hasta la sección <strong>Trayectorias de movimiento</strong> y selecciona una opción:</li>
                <ul class="steps">
                  <li><strong>Líneas</strong>: Movimientos en línea recta (horizontal, vertical o diagonal).</li>
                  <li><strong>Curvas</strong>: Movimientos a lo largo de una curva suave.</li>
                  <li><strong>Círculos</strong>: Movimientos en forma de círculo o arco.</li>
                  <li><strong>Formas</strong>: Movimientos que siguen formas específicas, como estrellas o espirales.</li>
                  <li><strong>Personalizar trayectoria</strong>: Dibuja una trayectoria única arrastrando el ratón.</li>
                </ul>
                <li>Si seleccionas <strong>Personalizar trayectoria</strong>:</li>
                <ul class="steps">
                  <li>Haz clic en la diapositiva para establecer el punto de inicio de la trayectoria.</li>
                  <li>Arrastra para dibujar la trayectoria que deseas que siga el elemento.</li>
                  <li>Haz clic en el punto final para completar la trayectoria. PowerPoint mostrará una línea punteada que indica el camino.</li>
                  <li>Puedes editar la trayectoria arrastrando los puntos de control o añadiendo nuevos puntos.</li>
                </ul>
                <li>Configura las opciones de la trayectoria:</li>
                <ul class="steps">
                  <li><strong>Suavizar inicio/fin</strong>: Ajusta si el movimiento comienza y termina de manera suave o abrupta.</li>
                  <li><strong>Bloquear trayectoria</strong>: Evita que la trayectoria se mueva accidentalmente al editar otros elementos.</li>
                  <li><strong>Invertir trayectoria</strong>: Cambia la dirección del movimiento.</li>
                </ul>
                <li>Las trayectorias de movimiento son ideales para:</li>
                <ul class="steps">
                  <li>Crear efectos visuales dinámicos, como elementos que se mueven a través de la diapositiva.</li>
                  <li>Simular procesos o flujos, como el movimiento de un producto a través de una línea de producción.</li>
                  <li>Añadir interactividad, permitiendo que la audiencia siga el movimiento de elementos clave.</li>
                  <li>Resaltar relaciones entre elementos, moviendo objetos para mostrar conexiones.</li>
                </ul>
              </ul>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa animaciones de manera estratégica para guiar la atención de la audiencia y mejorar la claridad de tu mensaje. Por ejemplo, usa animaciones de entrada para introducir elementos en el orden en que los discutes, y animaciones de énfasis para resaltar puntos clave. Evita sobrecargar las diapositivas con demasiadas animaciones, ya que esto puede distraer y restar profesionalismo a tu presentación.
          </div>
        </div>

        <!-- Panel de animación -->
        <div class="card">
          <h4>Panel de animación y orden de efectos</h4>
          <p>Organiza y controla el orden de las animaciones en tus diapositivas usando el panel de animación. Esta herramienta te permite ajustar la secuencia, el tiempo y las propiedades de cada animación, asegurando que los efectos ocurran en el momento y orden correctos:</p>
          <div class="grid grid-2">
            <div>
              <h5>Usar el panel de animación</h5>
              <ul class="steps">
                <li>Abre el panel de animación yendo a la pestaña <strong>Animaciones</strong> y haciendo clic en <strong>Panel de animación</strong> en el grupo <strong>Animación avanzada</strong>.</li>
                <li>El panel de animación mostrará una lista de todas las animaciones aplicadas a los elementos de la diapositiva actual, en el orden en que ocurren.</li>
                <li>Cada entrada en el panel incluye:</li>
                <ul class="steps">
                  <li>El <strong>número de orden</strong> de la animación.</li>
                  <li>El <strong>nombre del elemento</strong> animado (ej: "Cuadro de texto 2").</li>
                  <li>El <strong>tipo de animación</strong> aplicada (ej: "Desvanecer").</li>
                  <li>Un <strong>icono</strong> que indica el tipo de animación (entrada, énfasis, salida o trayectoria).</li>
                  <li>Una <strong>barra de tiempo</strong> que muestra la duración y el momento de inicio de la animación.</li>
                </ul>
                <li>Arrastra las animaciones hacia arriba o abajo en la lista para cambiar su orden de reproducción.</li>
                <li>Selecciona una animación en el panel para resaltarla en la diapositiva y acceder a sus opciones de configuración.</li>
                <li>Usa los controles en la parte superior del panel para:</li>
                <ul class="steps">
                  <li><strong>Reproducir</strong>: Ejecutar las animaciones en orden para previsualizarlas.</li>
                  <li><strong>Vista previa</strong>: Ver una animación específica sin reproducir las demás.</li>
                  <li><strong>Agregar animación</strong>: Añadir una nueva animación al elemento seleccionado.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Configurar efectos</h5>
              <ul class="steps">
                <li>Selecciona una animación en el panel de animación para acceder a sus opciones de configuración en la pestaña <strong>Animaciones</strong>.</li>
                <li>Ajusta las siguientes propiedades:</li>
                <ul class="steps">
                  <li><strong>Iniciar</strong>: Define cuándo comienza la animación:</li>
                  <ul class="steps">
                    <li><strong>Al hacer clic</strong>: La animación comienza cuando haces clic con el ratón durante la presentación. Esto te da control sobre el ritmo.</li>
                    <li><strong>Con la anterior</strong>: La animación comienza al mismo tiempo que la animación anterior en la secuencia.</li>
                    <li><strong>Después de la anterior</strong>: La animación comienza automáticamente después de que finalice la animación anterior.</li>
                  </ul>
                  <li><strong>Duración</strong>: Ajusta cuánto tiempo dura la animación, en segundos. Una duración más corta hace que la animación sea más rápida y dinámica, mientras que una duración más larga la hace más suave y gradual.</li>
                  <li><strong>Retardo</strong>: Define un tiempo de espera antes de que comience la animación, útil para crear pausas dramáticas o sincronizar animaciones con narraciones.</li>
                  <li><strong>Opciones de efecto</strong>: Configura propiedades específicas del tipo de animación, como:</li>
                  <ul class="steps">
                    <li>Para animaciones de entrada como <strong>Volar</strong>, elige la dirección (arriba, abajo, izquierda, derecha).</li>
                    <li>Para animaciones de énfasis como <strong>Cambiar color</strong>, selecciona el color de destino.</li>
                    <li>Para trayectorias de movimiento, ajusta la suavidad o la dirección del movimiento.</li>
                  </ul>
                </ul>
                <li>Usa la opción <strong>Secuencia de animación</strong> para ver cómo interactúan las animaciones en el tiempo:</li>
                <ul class="steps">
                  <li>El panel mostrará una línea de tiempo con barras que representan la duración y el momento de cada animación.</li>
                  <li>Arrastra las barras para ajustar el tiempo de inicio o la duración de las animaciones.</li>
                  <li>Usa esto para sincronizar animaciones con audio, video o narraciones.</li>
                </ul>
                <li>Consejos para usar el panel de animación:</li>
                <ul class="steps">
                  <li>Nombra tus elementos de manera descriptiva (ej: "Título principal", "Gráfico de ventas") para identificarlos fácilmente en el panel.</li>
                  <li>Agrupa animaciones relacionadas usando la opción <strong>Agrupar</strong> en la pestaña <strong>Inicio</strong>, para manejarlas como una sola unidad.</li>
                  <li>Usa la opción <strong>Desencadenador</strong> para hacer que una animación comience cuando se hace clic en un elemento específico, como un botón.</li>
                  <li>Prueba las animaciones en el modo <strong>Presentación con diapositivas</strong> para asegurarte de que ocurran en el orden y ritmo deseados.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Panel+de+Animación" alt="Panel de animación en PowerPoint">
                <figcaption>Ejemplo del panel de animación en PowerPoint 2025, mostrando cómo organizar y configurar efectos. La imagen incluye una lista de animaciones con sus propiedades, una línea de tiempo para ajustar el momento y duración, y controles para previsualizar los efectos.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al configurar animaciones, considera el ritmo de tu presentación y la atención de tu audiencia. Usa animaciones "Al hacer clic" para mantener el control y permitir pausas para explicaciones, y animaciones "Después de la anterior" para secuencias automáticas que no requieren interacción. Asegúrate de que las animaciones mejoren la claridad y el impacto de tu mensaje, en lugar de distraer o ralentizar la presentación.
          </div>
        </div>
      </section>

      <!-- Módulo 8: Diseño Efectivo de Presentaciones -->
      <section id="modulo8" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-chart-simple"></i>
          <span>Módulo 8: Diseño Efectivo de Presentaciones</span>
        </div>
        <h3>Módulo 8. Diseño Efectivo de Presentaciones</h3>
        <p class="lead">Aprende los principios del diseño visual y el storytelling para crear presentaciones impactantes. Este módulo te enseñará a estructurar tu contenido, evitar errores comunes y usar recursos visuales de manera efectiva. Desde la aplicación de principios de diseño hasta la creación de narrativas persuasivas, dominarás las técnicas para conectar con tu audiencia y transmitir tu mensaje de manera clara y memorable.</p>

        <!-- Principios del diseño visual -->
        <div class="card">
          <h4>Principios del diseño visual</h4>
          <p>Sigue estos principios de diseño para crear presentaciones profesionales, claras y atractivas. Un buen diseño visual mejora la legibilidad, facilita la comprensión y hace que tu presentación sea más efectiva:</p>
          <div class="grid grid-2">
            <div>
              <h5>Contraste</h5>
              <ul class="steps">
                <li>Usa colores, tamaños y formas contrastantes para destacar elementos importantes y crear jerarquías visuales:</li>
                <ul class="steps">
                  <li><strong>Color</strong>: Combina colores claros y oscuros para texto y fondos. Por ejemplo, usa texto oscuro sobre fondos claros o viceversa para mejorar la legibilidad.</li>
                  <li><strong>Tamaño</strong>: Varía el tamaño de los elementos para indicar su importancia. Los títulos deben ser más grandes que el texto del cuerpo, y los elementos clave deben destacar.</li>
                  <li><strong>Forma</strong>: Usa formas diferentes para distinguir tipos de contenido. Por ejemplo, usa círculos para ideas y cuadrados para acciones.</li>
                  <li><strong>Espacio</strong>: Deja espacio en blanco alrededor de los elementos importantes para resaltarlos.</li>
                </ul>
                <li>El contraste ayuda a:</li>
                <ul class="steps">
                  <li>Guiar la atención de la audiencia hacia los puntos clave.</li>
                  <li>Mejorar la legibilidad del texto y la claridad de los gráficos.</li>
                  <li>Crear un diseño dinámico y visualmente interesante.</li>
                  <li>Diferenciar secciones o tipos de contenido en la presentación.</li>
                </ul>
                <li>Ejemplos de contraste efectivo:</li>
                <ul class="steps">
                  <li>Texto blanco sobre un fondo oscuro para diapositivas de portada o secciones importantes.</li>
                  <li>Títulos en negrita y grandes con texto del cuerpo más pequeño y ligero.</li>
                  <li>Formas de colores brillantes sobre fondos neutros para resaltar datos o estadísticas.</li>
                  <li>Imágenes con bordes o sombras para separarlas del texto circundante.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Alineación</h5>
              <ul class="steps">
                <li>Organiza los elementos de tus diapositivas usando guías y cuadrículas para crear un diseño ordenado y profesional:</li>
                <ul class="steps">
                  <li>Usa las <strong>guías</strong> de PowerPoint (actívalas con <span class="keyboard-shortcut">Alt + F9</span>) para alinear elementos con precisión.</li>
                  <li>Alinea los bordes de los elementos (texto, imágenes, formas) con las guías o entre sí para crear un diseño limpio.</li>
                  <li>Usa la <strong>cuadrícula</strong> (actívala en <strong>Vista → Mostrar → Cuadrícula</strong>) para mantener un espaciado consistente entre elementos.</li>
                  <li>Alinea el texto dentro de los cuadros de texto (izquierda, centro, derecha) para mejorar la legibilidad.</li>
                </ul>
                <li>La alineación mejora:</li>
                <ul class="steps">
                  <li>La organización visual de la diapositiva, haciendo que el contenido sea más fácil de seguir.</li>
                  <li>La profesionalidad del diseño, evitando un aspecto desordenado o amateur.</li>
                  <li>La coherencia entre diapositivas, manteniendo un estilo uniforme en toda la presentación.</li>
                </ul>
                <li>Consejos para alinear elementos:</li>
                <ul class="steps">
                  <li>Usa la herramienta <strong>Alinear</strong> en la pestaña <strong>Inicio</strong> para alinear múltiples elementos seleccionados.</li>
                  <li>Distribuye elementos uniformemente usando la opción <strong>Distribuir</strong>.</li>
                  <li>Mantén márgenes consistentes en los bordes de la diapositiva para un aspecto equilibrado.</li>
                  <li>Usa la alineación a la izquierda para textos en español, ya que es la más natural para idiomas que se leen de izquierda a derecha.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Principios+de+Diseño" alt="Principios de diseño en PowerPoint">
                <figcaption>Ejemplo de contraste y alineación en PowerPoint 2025. La imagen muestra una diapositiva con texto oscuro sobre fondo claro (contraste) y elementos alineados a guías y cuadrículas (alineación).</figcaption>
              </figure>
            </div>
          </div>
          <div class="grid grid-2">
            <div>
              <h5>Repetición</h5>
              <ul class="steps">
                <li>Repite elementos visuales, como colores, formas, fuentes y estilos, para crear coherencia y reforzar la identidad de tu presentación:</li>
                <ul class="steps">
                  <li>Usa los mismos <strong>colores</strong> en todas las diapositivas, basados en la paleta del tema o una combinación personalizada.</li>
                  <li>Aplica las mismas <strong>fuentes</strong> para títulos, subtítulos y texto del cuerpo en toda la presentación.</li>
                  <li>Repite <strong>formas</strong> o <strong>íconos</strong> para representar conceptos similares. Por ejemplo, usa el mismo ícono para todas las diapositivas de una sección.</li>
                  <li>Mantén estilos consistentes para <strong>viñetas</strong>, <strong>bordes</strong> y <strong>efectos</strong>.</li>
                </ul>
                <li>La repetición ayuda a:</li>
                <ul class="steps">
                  <li>Crear una identidad visual reconocible para tu presentación o marca.</li>
                  <li>Facilitar la navegación de la audiencia, ya que los elementos repetidos actúan como señales visuales.</li>
                  <li>Reducir la carga cognitiva, permitiendo que la audiencia se enfoque en el contenido en lugar del diseño.</li>
                  <li>Unificar diapositivas dispares, como cuando combinas contenido de diferentes fuentes.</li>
                </ul>
                <li>Ejemplos de repetición efectiva:</li>
                <ul class="steps">
                  <li>Usar el mismo color de acento para todos los títulos de sección.</li>
                  <li>Aplicar el mismo estilo de viñetas a todas las listas en la presentación.</li>
                  <li>Incluir un logotipo o elemento gráfico en la misma posición en todas las diapositivas.</li>
                  <li>Repetir un patrón de fondo o textura en diapositivas relacionadas.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Proximidad</h5>
              <ul class="steps">
                <li>Agrupa elementos relacionados y usa espacio en blanco para separar secciones distintas, mejorando la organización y claridad:</li>
                <ul class="steps">
                  <li>Agrupa <strong>elementos relacionados</strong> cerca unos de otros, como texto e imágenes que pertenecen a la misma idea.</li>
                  <li>Usa <strong>espacio en blanco</strong> (áreas sin contenido) para separar grupos de información o secciones diferentes.</li>
                  <li>Alinea elementos relacionados vertical u horizontalmente para indicar su conexión.</li>
                  <li>Usa bordes, líneas o colores de fondo para enmarcar grupos de elementos.</li>
                </ul>
                <li>La proximidad mejora:</li>
                <ul class="steps">
                  <li>La comprensión de la relación entre elementos, como datos y sus explicaciones.</li>
                  <li>La organización visual de la diapositiva, haciendo que el contenido sea más fácil de escanear.</li>
                  <li>La legibilidad, al evitar que elementos no relacionados compitan por la atención.</li>
                </ul>
                <li>Consejos para usar la proximidad:</li>
                <ul class="steps">
                  <li>Mantén un espaciado consistente entre elementos relacionados y un espaciado mayor entre grupos distintos.</li>
                  <li>Usa la proximidad para crear jerarquías visuales, como agrupar subtítulos con sus párrafos correspondientes.</li>
                  <li>Evita saturar la diapositiva con demasiados elementos; si es necesario, divide el contenido en múltiples diapositivas.</li>
                  <li>Usa la proximidad para guiar el flujo de lectura, como colocar elementos en el orden en que deben ser leídos.</li>
                </ul>
              </ul>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Antes de diseñar tus diapositivas, crea un sistema de diseño que defina cómo aplicarás estos principios. Por ejemplo, decide una paleta de colores, un conjunto de fuentes y estilos para viñetas, y aplícalos de manera consistente en toda la presentación. Esto no solo mejorará la coherencia visual, sino que también ahorrará tiempo durante el proceso de creación.
          </div>
        </div>

        <!-- Reglas de oro -->
        <div class="card">
          <h4>Reglas de oro: "menos texto, más impacto"</h4>
          <p>Evita sobrecargar tus diapositivas con texto y enfócate en transmitir tu mensaje de manera clara y visual. Las presentaciones efectivas usan el texto como apoyo, no como script:</p>
          <div class="grid grid-2">
            <div>
              <h5>Menos texto</h5>
              <ul class="steps">
                <li>Limita la cantidad de texto en cada diapositiva:</li>
                <ul class="steps">
                  <li>Usa <strong>frases cortas</strong> en lugar de párrafos largos. Cada viñeta o línea debe transmitir una idea clara y concisa.</li>
                  <li>Incluye solo la <strong>información esencial</strong> en la diapositiva. Los detalles adicionales pueden ir en las notas del orador o compartirse verbalmente.</li>
                  <li>Sigue la regla <strong>6x6</strong>: no más de 6 viñetas por diapositiva y no más de 6 palabras por viñeta.</li>
                  <li>Divide contenido complejo en <strong>múltiples diapositivas</strong> para mantener la claridad.</li>
                </ul>
                <li>Usa el texto para:</li>
                <ul class="steps">
                  <li><strong>Títulos y subtítulos</strong>: Para organizar el contenido y guiar a la audiencia.</li>
                  <li><strong>Viñetas o listas</strong>: Para presentar información de manera estructurada.</li>
                  <li><strong>Datos clave</strong>: Para resaltar estadísticas, fechas o nombres importantes.</li>
                  <li><strong>Llamadas a la acción</strong>: Para indicar qué debe hacer la audiencia a continuación.</li>
                </ul>
                <li>Evita:</li>
                <ul class="steps">
                  <li>Párrafos largos o bloques de texto denso, que son difíciles de leer y entender rápidamente.</li>
                  <li>Información redundante o repetitiva, que puede distraer o aburrir a la audiencia.</li>
                  <li>Texto demasiado pequeño, que dificulta la legibilidad desde la distancia.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Más impacto visual</h5>
              <ul class="steps">
                <li>Reemplaza el texto con elementos visuales siempre que sea posible:</li>
                <ul class="steps">
                  <li>Usa <strong>imágenes</strong> para ilustrar conceptos, mostrar ejemplos o transmitir emociones.</li>
                  <li>Incluye <strong>gráficos</strong> para representar datos numéricos de manera clara y atractiva.</li>
                  <li>Añade <strong>diagramas</strong> (como SmartArt) para explicar procesos, jerarquías o relaciones.</li>
                  <li>Usa <strong>íconos</strong> para representar ideas de manera sencilla y universal.</li>
                </ul>
                <li>Destaca la información clave con:</li>
                <ul class="steps">
                  <li><strong>Colores contrastantes</strong> para resaltar datos importantes o llamadas a la acción.</li>
                  <li><strong>Animaciones</strong> para introducir elementos gradualmente o enfatizar puntos clave.</li>
                  <li><strong>Tamaños mayores</strong> para títulos, estadísticas o mensajes principales.</li>
                  <li><strong>Efectos visuales</strong>, como sombras o bordes, para hacer que los elementos destaquen.</li>
                </ul>
                <li>Organiza el contenido para maximizar el impacto:</li>
                <ul class="steps">
                  <li>Usa la <strong>regla de los tercios</strong> para colocar elementos importantes en las intersecciones de las líneas divisorias.</li>
                  <li>Deja <strong>espacio en blanco</strong> alrededor de los elementos clave para que respiren y llamen la atención.</li>
                  <li>Agrupa <strong>elementos relacionados</strong> y sepáralos de otros grupos con espacio o líneas.</li>
                  <li>Usa <strong>flechas o líneas</strong> para guiar la vista de la audiencia hacia la información más relevante.</li>
                </ul>
                <li>Ejemplos de impacto visual:</li>
                <ul class="steps">
                  <li>Reemplazar una lista de características con íconos y descripciones breves.</li>
                  <li>Convertir una tabla de datos en un gráfico de barras o circular.</li>
                  <li>Usar una imagen de fondo con texto superpuesto para transmitir un mensaje emocional.</li>
                  <li>Añadir una animación que revele datos gradualmente para mantener el interés.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Menos+Texto" alt="Menos texto en PowerPoint">
                <figcaption>Comparación entre una diapositiva con mucho texto (izquierda) y otra con menos texto y más visuales (derecha) en PowerPoint 2025. La imagen muestra cómo reemplazar párrafos con viñetas, gráficos e imágenes para mejorar la claridad y el impacto.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout warn">
            <strong>Error común:</strong> Evita diapositivas con más de 6 líneas de texto o 6 viñetas. El exceso de texto hace que las diapositivas sean difíciles de leer y entender rápidamente, y puede llevar a que la audiencia se distraiga o pierda el interés. Usa el área de notas para incluir detalles adicionales y practica tu presentación para asegurarte de que el texto en las diapositivas sea solo un apoyo visual.
          </div>
        </div>

        <!-- Storytelling visual -->
        <div class="card">
          <h4>Storytelling visual: cómo contar una historia</h4>
          <p>Estructura tu presentación como una narrativa para conectar emocionalmente con tu audiencia y hacer que tu mensaje sea más memorable. El storytelling visual combina técnicas de narración con elementos visuales para transmitir ideas de manera clara y persuasiva:</p>
          <div class="grid grid-2">
            <div>
              <h5>Estructura narrativa</h5>
              <ul class="steps">
                <li>Organiza tu presentación en tres actos claros, similares a una historia tradicional:</li>
                <ul class="steps">
                  <li><strong>Inicio (Planteamiento)</strong>:</li>
                  <ul class="steps">
                    <li>Presenta el <strong>tema</strong> de manera clara y atractiva. Usa una pregunta, dato impactante o anécdota para captar la atención.</li>
                    <li>Establece el <strong>contexto</strong>, explicando por qué el tema es importante o relevante para la audiencia.</li>
                    <li>Define el <strong>objetivo</strong> de la presentación y qué puede esperar la audiencia.</li>
                    <li>Ejemplo: "¿Sabías que el 80% de los proyectos fallan por falta de comunicación? Hoy aprenderemos cómo evitarlo."</li>
                  </ul>
                  <li><strong>Desarrollo (Nudo)</strong>:</li>
                  <ul class="steps">
                    <li>Explica los <strong>puntos clave</strong> de manera lógica y secuencial. Usa datos, ejemplos y visuales para apoyar tus argumentos.</li>
                    <li>Incluye <strong>transiciones suaves</strong> entre temas para mantener el flujo de la narrativa.</li>
                    <li>Usa <strong>historias o casos de estudio</strong> para ilustrar tus puntos y hacerlos más relatable.</li>
                    <li>Ejemplo: "Veamos tres estrategias probadas para mejorar la comunicación en equipos, con ejemplos de empresas que las han implementado con éxito."</li>
                  </ul>
                  <li><strong>Cierre (Desenlace)</strong>:</li>
                  <ul class="steps">
                    <li>Resume los <strong>puntos principales</strong> de manera concisa, reforzando el mensaje clave.</li>
                    <li>Proporciona una <strong>llamada a la acción</strong> clara, indicando qué debe hacer la audiencia a continuación.</li>
                    <li>Termina con un <strong>mensaje memorable</strong>, como una cita, pregunta retórica o visión inspiradora.</li>
                    <li>Ejemplo: "En resumen, la comunicación efectiva requiere claridad, consistencia y empatía. ¿Qué estrategia implementarás primero en tu equipo?"</li>
                  </ul>
                </ul>
                <li>Consejos para estructurar tu narrativa:</li>
                <ul class="steps">
                  <li>Usa la <strong>regla de los tres puntos</strong> por diapositiva: 1 idea principal + 3 puntos de apoyo.</li>
                  <li>Mantén un <strong>hilo conductor</strong> que conecte todas las partes de la presentación, como un tema, pregunta o metáfora recurrente.</li>
                  <li>Equilibra <strong>información y emoción</strong>, combinando datos con historias o ejemplos que resuenen con la audiencia.</li>
                  <li>Practica la <strong>transición entre secciones</strong> para que la narrativa fluya de manera natural.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Conexión emocional</h5>
              <ul class="steps">
                <li>Usa elementos visuales y narrativos para crear una conexión emocional con tu audiencia:</li>
                <ul class="steps">
                  <li><strong>Imágenes</strong>: Selecciona imágenes que evquen emociones o refuercen tu mensaje. Por ejemplo, usa fotos de equipos trabajando juntos para hablar de colaboración.</li>
                  <li><strong>Historias personales</strong>: Comparte anécdotas o experiencias propias que ilustren tus puntos y humanicen la presentación.</li>
                  <li><strong>Casos de estudio</strong>: Presenta ejemplos reales de éxito o fracaso que demuestren los conceptos que estás explicando.</li>
                  <li><strong>Metáforas y analogías</strong>: Usa comparaciones creativas para explicar ideas complejas de manera sencilla. Por ejemplo, compara un proceso con un viaje.</li>
                </ul>
                <li>Técnicas para mejorar la conexión emocional:</li>
                <ul class="steps">
                  <li>Usa un <strong>tono conversacional</strong>, como si estuvieras hablando directamente con cada miembro de la audiencia.</li>
                  <li>Haz <strong>preguntas retóricas</strong> para involucrar a la audiencia y hacerla reflexionar.</li>
                  <li>Incluye <strong>testimonios</strong> o citas de personas relevantes para respaldar tus argumentos.</li>
                  <li>Usa <strong>humor</strong> de manera apropiada para aligerar el ambiente y hacer la presentación más disfrutable.</li>
                </ul>
                <li>Ejemplos de conexión emocional:</li>
                <ul class="steps">
                  <li>En una presentación sobre liderazgo, incluye una foto de un líder inspirador y cuenta una historia breve sobre su impacto.</li>
                  <li>Para hablar de innovación, muestra imágenes de productos revolucionarios y comparte cómo cambiaron la industria.</li>
                  <li>Al presentar datos financieros, usa gráficos con colores que evquen crecimiento (verde) o advertencia (rojo).</li>
                  <li>En una charla motivacional, termina con una cita inspiradora superpuesta sobre una imagen impactante.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Storytelling" alt="Storytelling en PowerPoint">
                <figcaption>Ejemplo de storytelling visual en PowerPoint: inicio (pregunta impactante), desarrollo (datos con gráficos e imágenes), y cierre (llamada a la acción con mensaje memorable).</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Antes de diseñar tus diapositivas, escribe un <strong>guion</strong> que incluya la estructura narrativa y los puntos clave de tu presentación. Esto te ayudará a organizar tus ideas y asegurarte de que cada diapositiva apoye la historia que estás contando. Practica la presentación en voz alta para ajustar el ritmo y la transición entre secciones, y pide retroalimentación a colegas para mejorar la claridad y el impacto emocional.
          </div>
        </div>
      </section>

      <!-- Módulo 9: Herramientas de Presentación -->
      <section id="modulo9" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-play"></i>
          <span>Módulo 9: Herramientas de Presentación</span>
        </div>
        <h3>Módulo 9. Herramientas de Presentación</h3>
        <p class="lead">Domina las herramientas para presentar de manera efectiva. Este módulo cubre el modo presentación, uso del puntero, vista del moderador, ensayo de tiempos y grabación de narraciones. Aprenderás a controlar el flujo de tu presentación, interactuar con la audiencia y asegurarte de que tu mensaje se transmita de manera clara y profesional, ya sea en persona o de forma remota.</p>

        <!-- Modo presentación -->
        <div class="card">
          <h4>Modo presentación: iniciar y navegar</h4>
          <p>Aprende a presentar tus diapositivas de manera profesional, utilizando las herramientas de PowerPoint para controlar el flujo, interactuar con el contenido y mantener la atención de la audiencia:</p>
          <div class="grid grid-2">
            <div>
              <h5>Iniciar la presentación</h5>
              <ul class="steps">
                <li>Usa el atajo <span class="keyboard-shortcut">F5</span> para iniciar la presentación desde la primera diapositiva. Esto es útil cuando estás listo para comenzar desde el principio.</li>
                <li>Usa el atajo <span class="keyboard-shortcut">Shift + F5</span> para iniciar la presentación desde la diapositiva actualmente seleccionada. Esto es ideal para practicar una sección específica o retomar la presentación después de una pausa.</li>
                <li>O ve a la pestaña <strong>Presentación con diapositivas</strong> y selecciona:</li>
                <ul class="steps">
                  <li><strong>Desde el principio</strong>: Para comenzar la presentación desde la primera diapositiva.</li>
                  <li><strong>Desde la diapositiva actual</strong>: Para iniciar desde la diapositiva seleccionada en el panel.</li>
                  <li><strong>Presentación personalizada</strong>: Para mostrar solo un subconjunto de diapositivas en un orden específico.</li>
                </ul>
                <li>PowerPoint entrará en modo de presentación a pantalla completa, donde verás la primera diapositiva y tendrás acceso a herramientas de navegación.</li>
                <li>Antes de iniciar, asegúrate de que:</li>
                <ul class="steps">
                  <li>Todos los elementos multimedia (audio, video) estén listos para reproducirse.</li>
                  <li>Las animaciones y transiciones estén configuradas correctamente.</li>
                  <li>El equipo de proyección esté conectado y configurado adecuadamente.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Navegar durante la presentación</h5>
              <ul class="steps">
                <li>Usa las siguientes herramientas para avanzar y retroceder entre diapositivas:</li>
                <ul class="steps">
                  <li><strong>Flechas del teclado</strong>: <span class="keyboard-shortcut">→</span> para avanzar y <span class="keyboard-shortcut">←</span> para retroceder.</li>
                  <li><strong>Ratón</strong>: Haz clic para avanzar a la siguiente diapositiva o animación. Haz clic derecho para acceder a un menú con opciones de navegación.</li>
                  <li><strong>Barra espaciadora</strong>: Presiona la barra espaciadora para avanzar.</li>
                  <li><strong>Teclas de página</strong>: <span class="keyboard-shortcut">Página abajo</span> para avanzar y <span class="keyboard-shortcut">Página arriba</span> para retroceder.</li>
                </ul>
                <li>Accede a herramientas adicionales durante la presentación:</li>
                <ul class="steps">
                  <li><strong>Puntero láser</strong> (<span class="keyboard-shortcut">Ctrl + P</span>): Convierte el cursor en un puntero láser rojo para señalar elementos en la pantalla. Mantén presionada la tecla <span class="keyboard-shortcut">Ctrl</span> mientras haces clic y arrastras.</li>
                  <li><strong>Resaltador</strong> (<span class="keyboard-shortcut">Ctrl + I</span>): Usa el cursor como un resaltador para dibujar en la pantalla. Selecciona el color y grosor del resaltador en el menú de herramientas.</li>
                  <li><strong>Zoom</strong> (<span class="keyboard-shortcut">Ctrl + T</span>): Acercate a una parte específica de la diapositiva para enfatizar detalles. Usa el ratón para dibujar un rectángulo alrededor del área que deseas ampliar.</li>
                  <li><strong>Pantalla en blanco</strong> (<span class="keyboard-shortcut">B</span> o <span class="keyboard-shortcut>.</span>): Oculta temporalmente la pantalla para centrar la atención en ti. Presiona <span class="keyboard-shortcut">B</span> para pantalla negra o <span class="keyboard-shortcut>.</span> para pantalla blanca. Presiona la misma tecla para volver a la presentación.</li>
                </ul>
                <li>Navega a diapositivas específicas:</li>
                <ul class="steps">
                  <li>Escribe el número de la diapositiva y presiona <span class="keyboard-shortcut">Enter</span> para ir directamente a ella.</li>
                  <li>Haz clic derecho y selecciona <strong>Ir a diapositiva</strong> para ver una lista de todas las diapositivas y elegir una.</li>
                  <li>Usa hipervínculos o botones de acción si los has configurado en tu presentación.</li>
                </ul>
                <li>Salir del modo presentación:</li>
                <ul class="steps">
                  <li>Presiona <span class="keyboard-shortcut">Esc</span> en cualquier momento para terminar la presentación y volver al modo de edición.</li>
                  <li>Haz clic en el botón de salida (X) en la barra de herramientas de presentación.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Modo+Presentación" alt="Modo presentación en PowerPoint">
                <figcaption>Ejemplo del modo presentación en PowerPoint 2025, mostrando herramientas de navegación como puntero láser, resaltador y zoom. La imagen incluye una diapositiva en pantalla completa con la barra de herramientas de presentación visible.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Antes de presentar, practica la navegación entre diapositivas y el uso de herramientas como el puntero láser y el zoom. Familiarízate con los atajos de teclado para cambiar de diapositiva y acceder a herramientas rápidamente. Si presentas en un entorno desconocido, llega temprano para probar el equipo y asegurarte de que todo funcione correctamente.
          </div>
        </div>

        <!-- Vista del moderador -->
        <div class="card">
          <h4>Vista del moderador y notas del orador</h4>
          <p>Usa la vista del moderador para controlar tu presentación con herramientas avanzadas, como ver notas, previsualizar diapositivas y gestionar el tiempo. Esta vista es especialmente útil para presentaciones formales o cuando necesitas mantener el flujo sin perder de vista el contenido:</p>
          <div class="grid grid-2">
            <div>
              <h5>Vista del moderador</h5>
              <ul class="steps">
                <li>Inicia la vista del moderador usando el atajo <span class="keyboard-shortcut">Alt + F5</span> o seleccionando <strong>Presentación con diapositivas → Presentación del moderador</strong> en la pestaña <strong>Presentación con diapositivas</strong>.</li>
                <li>La vista del moderador muestra:</li>
                <ul class="steps">
                  <li><strong>Diapositiva actual</strong>: La diapositiva que la audiencia está viendo, en tamaño grande.</li>
                  <li><strong>Siguiente diapositiva</strong>: Una vista previa de la siguiente diapositiva, para que sepas qué viene después.</li>
                  <li><strong>Notas del orador</strong>: El texto que hayas escrito en el área de notas de la diapositiva actual, útil para recordar puntos clave o detalles adicionales.</li>
                  <li><strong>Herramientas de navegación</strong>: Botones para avanzar, retroceder, ir a una diapositiva específica o acceder a otras herramientas.</li>
                  <li><strong>Tiempo</strong>: Un temporizador que muestra cuánto tiempo llevas en la diapositiva actual y en toda la presentación.</li>
                  <li><strong>Miniaturas</strong>: Una lista de miniaturas de todas las diapositivas, que te permite navegar rápidamente a cualquier parte de la presentación.</li>
                </ul>
                <li>Usa las herramientas de la vista del moderador para:</li>
                <ul class="steps">
                  <li>Ver tus <strong>notas</strong> sin que la audiencia las vea, lo que te ayuda a recordar puntos importantes o datos específicos.</li>
                  <li>Previsualizar la <strong>siguiente diapositiva</strong> para prepararte para la transición.</li>
                  <li>Navegar a cualquier diapositiva haciendo clic en su miniatura en el panel izquierdo.</li>
                  <li>Controlar el <strong>tiempo</strong> de tu presentación, asegurándote de que te mantengas dentro del límite establecido.</li>
                  <li>Acceder a herramientas como el <strong>puntero láser</strong>, <strong>resaltador</strong> o <strong>zoom</strong> sin salir de la vista.</li>
                  <li>Ver un <strong>reloj</strong> con la hora actual, útil para presentaciones con límites de tiempo estrictos.</li>
                </ul>
                <li>La vista del moderador es ideal para:</li>
                <ul class="steps">
                  <li>Presentaciones formales o profesionales, donde necesitas mantener el control y el flujo.</li>
                  <li>Eventos con audiencias grandes, donde las notas te ayudan a recordar detalles importantes.</li>
                  <li>Presentaciones con múltiples secciones o diapositivas complejas, donde la navegación rápida es esencial.</li>
                  <li>Situaciones donde necesitas monitorear el tiempo cuidadosamente, como en conferencias o pitches.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Notas del orador</h5>
              <ul class="steps">
                <li>Añade notas a tus diapositivas para recordar puntos clave, datos adicionales o instrucciones durante la presentación:</li>
                <ul class="steps">
                  <li>Ve a la vista <strong>Normal</strong> y selecciona una diapositiva.</li>
                  <li>Escribe tus notas en el panel <strong>Notas</strong> en la parte inferior de la ventana de PowerPoint.</li>
                  <li>Formatea el texto de las notas usando las herramientas básicas de formato, como negrita o viñetas, para organizar la información.</li>
                  <li>Las notas pueden incluir:</li>
                  <ul class="steps">
                    <li>Puntos clave que debes mencionar al presentar la diapositiva.</li>
                    <li>Datos o estadísticas adicionales que no caben en la diapositiva.</li>
                    <li>Instrucciones para ti, como "hacer pausa aquí" o "mostrar video".</li>
                    <li>Respuestas a posibles preguntas de la audiencia.</li>
                  </ul>
                </ul>
                <li>Usa las notas durante la presentación:</li>
                <ul class="steps">
                  <li>En la vista del moderador, las notas aparecen en un panel dedicado, con texto legible y formato claro.</li>
                  <li>Puedes ajustar el tamaño del texto de las notas en la vista del moderador para que sea más fácil de leer.</li>
                  <li>Las notas son visibles solo para ti; la audiencia no las ve en la pantalla principal.</li>
                </ul>
                <li>Imprime las notas para tener una copia física durante la presentación:</li>
                <ul class="steps">
                  <li>Ve a <strong>Archivo → Imprimir</strong> y selecciona <strong>Notas</strong> en el menú <strong>Configuración</strong>.</li>
                  <li>Elige si deseas imprimir las diapositivas con notas en tamaño completo o múltiples diapositivas por página.</li>
                  <li>Usa las notas impresas como guión durante la presentación, especialmente si no tienes acceso a la vista del moderador.</li>
                </ul>
                <li>Consejos para escribir notas efectivas:</li>
                <ul class="steps">
                  <li>Sé <strong>conciso</strong>: Usa viñetas o frases cortas en lugar de párrafos largos.</li>
                  <li>Destaca <strong>palabras clave</strong> con negrita o colores para encontrarlas rápidamente.</li>
                  <li>Incluye <strong>señales visuales</strong>, como "→" para indicar cuándo avanzar a la siguiente diapositiva.</li>
                  <li>Practica con tus notas para asegurarte de que el ritmo y el flujo sean naturales.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Vista+del+Moderador" alt="Vista del moderador en PowerPoint">
                <figcaption>Ejemplo de la vista del moderador en PowerPoint 2025, mostrando la diapositiva actual, la siguiente diapositiva, notas del orador y herramientas de navegación. La imagen incluye un temporizador y miniaturas de diapositivas para navegar rápidamente.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa las notas del orador para incluir <strong>historias personales</strong>, <strong>ejemplos</strong> o <strong>anécdotas</strong> que no están en las diapositivas. Esto te permite hacer la presentación más interesante y personal sin saturar las diapositivas con texto. Además, practica presentar con la vista del moderador para familiarizarte con la navegación y el uso de notas, y ajusta el tamaño del texto de las notas para que sea fácil de leer rápidamente.
          </div>
        </div>

        <!-- Ensayar tiempos -->
        <div class="card">
          <h4>Ensayar tiempos y configuraciones automáticas</h4>
          <p>Prepara tu presentación con ensayos de tiempo y configura opciones automáticas para presentaciones sin interacción. Estas herramientas te ayudan a ajustar el ritmo, asegurarte de que el contenido se presente en el tiempo asignado y crear presentaciones autónomas para kioscos o exhibiciones:</p>
          <div class="grid grid-2">
            <div>
              <h5>Ensayar tiempos</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Presentación con diapositivas</strong> y selecciona <strong>Ensayar tiempos</strong> en el grupo <strong>Configurar</strong>.</li>
                <li>PowerPoint entrará en modo de presentación y mostrará la primera diapositiva junto con un temporizador.</li>
                <li>Practica tu presentación como lo harías frente a una audiencia:</li>
                <ul class="steps">
                  <li>Habla en voz alta y usa las notas del orador si es necesario.</li>
                  <li>Avanza a la siguiente diapositiva cuando estés listo, usando las flechas del teclado o el ratón.</li>
                  <li>PowerPoint registrará el tiempo que pasas en cada diapositiva y el tiempo total de la presentación.</li>
                </ul>
                <li>Al finalizar la presentación, PowerPoint mostrará un resumen con:</li>
                <ul class="steps">
                  <li>El <strong>tiempo total</strong> de la presentación.</li>
                  <li>El <strong>tiempo por diapositiva</strong>, incluyendo cuáles se excedieron o quedaron cortas.</li>
                  <li>La opción de <strong>guardar los tiempos</strong> para usarlos en presentaciones automáticas.</li>
                </ul>
                <li>Usa la información del ensayo para:</li>
                <ul class="steps">
                  <li>Ajustar el <strong>contenido</strong> de las diapositivas que requieren más o menos tiempo.</li>
                  <li>Practicar la <strong>transición</strong> entre diapositivas para que sea más fluida.</li>
                  <li>Identificar <strong>secciones</strong> que necesitan más explicación o ejemplos.</li>
                  <li>Asegurarte de que la presentación se ajuste al tiempo asignado, especialmente en eventos con límites estrictos.</li>
                </ul>
                <li>Consejos para ensayar tiempos:</li>
                <ul class="steps">
                  <li>Haz varios ensayos para ajustar el ritmo y la fluidez.</li>
                  <li>Practica con el equipo y en el lugar donde presentarás, si es posible, para familiarizarte con el entorno.</li>
                  <li>Pide retroalimentación a colegas para identificar áreas que necesiten mejora.</li>
                  <li>Usa un <strong>temporizador visible</strong> durante el ensayo para monitorear tu progreso.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Presentaciones automáticas</h5>
              <ul class="steps">
                <li>Configura tu presentación para que avance automáticamente, útil para kioscos, exhibiciones o presentaciones sin moderador:</li>
                <ul class="steps">
                  <li>Ve a la pestaña <strong>Presentación con diapositivas</strong> y selecciona <strong>Configurar presentación</strong>.</li>
                  <li>En el cuadro de diálogo <strong>Configurar presentación</strong>, elige:</li>
                  <ul class="steps">
                    <li><strong>Presentación automática</strong>: Para que las diapositivas avancen automáticamente según los tiempos ensayados.</li>
                    <li><strong>Presentación en bucle hasta 'Esc'</strong>: Para que la presentación se repita continuamente hasta que se presione <span class="keyboard-shortcut">Esc</span>.</li>
                    <li><strong>Mostrar sin narración</strong> o <strong>Mostrar sin animación</strong>: Para simplificar la presentación si es necesario.</li>
                  </ul>
                  <li>Haz clic en <strong>Aceptar</strong> para guardar la configuración.</li>
                </ul>
                <li>Si has ensayado tiempos, PowerPoint usará esos tiempos para avanzar las diapositivas automáticamente. Si no, deberás configurar los tiempos manualmente:</li>
                <ul class="steps">
                  <li>Ve a la pestaña <strong>Transiciones</strong> y ajusta el tiempo en el campo <strong>Avanzar diapositiva</strong>.</li>
                  <li>Marca la casilla <strong>Después de</strong> e ingresa el número de segundos que deseas que cada diapositiva se muestre.</li>
                  <li>Aplica el mismo tiempo a todas las diapositivas usando <strong>Aplicar a todo</strong>.</li>
                </ul>
                <li>Inicia la presentación automática:</li>
                <ul class="steps">
                  <li>Usa el atajo <span class="keyboard-shortcut">F5</span> o ve a <strong>Presentación con diapositivas → Desde el principio</strong>.</li>
                  <li>PowerPoint avanzará las diapositivas automáticamente según los tiempos configurados.</li>
                  <li>Para salir de la presentación automática, presiona <span class="keyboard-shortcut">Esc</span>.</li>
                </ul>
                <li>Las presentaciones automáticas son útiles para:</li>
                <ul class="steps">
                  <li><strong>Kioscos interactivos</strong> en ferias o eventos, donde los visitantes pueden ver la presentación sin asistencia.</li>
                  <li><strong>Exhibiciones</strong> en lobbies, recepciones o áreas públicas.</li>
                  <li><strong>Presentaciones en línea</strong> donde los espectadores ven el contenido a su propio ritmo.</li>
                  <li><strong>Demostraciones de productos</strong> en tiendas o stands, donde la presentación se repite continuamente.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Ensayar+Tiempos" alt="Ensayar tiempos en PowerPoint">
                <figcaption>Ejemplo de cómo ensayar tiempos y configurar presentaciones automáticas en PowerPoint 2025. La imagen muestra el temporizador de ensayo, opciones para guardar tiempos y la configuración de presentación automática con bucle.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al ensayar tiempos, graba tu presentación usando la herramienta de grabación de PowerPoint (disponible en <strong>Presentación con diapositivas → Grabar presentación</strong>). Esto te permite revisar tu desempeño, ajustar el ritmo y mejorar la claridad. Para presentaciones automáticas, asegúrate de que los tiempos sean suficientes para que la audiencia lea y asimile el contenido de cada diapositiva antes de avanzar.
          </div>
        </div>

        <!-- Grabar narraciones -->
        <div class="card">
          <h4>Grabar narraciones y subtítulos</h4>
          <p>Añade audio y subtítulos a tus presentaciones para hacerlas más accesibles y dinámicas. Las narraciones grabadas te permiten compartir presentaciones sin estar presente, mientras que los subtítulos mejoran la comprensión para audiencias diversas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Grabar narración</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Presentación con diapositivas</strong> y selecciona <strong>Grabar presentación</strong> en el grupo <strong>Configurar</strong>.</li>
                <li>PowerPoint abrirá la vista de grabación, donde verás:</li>
                <ul class="steps">
                  <li>La diapositiva actual en tamaño grande.</li>
                  <li>Un panel de <strong>notas del orador</strong> para guiar tu narración.</li>
                  <li>Controles de <strong>grabación</strong>, incluyendo botones para iniciar, pausar y detener la grabación.</li>
                  <li>Un <strong>temporizador</strong> para monitorear la duración de tu narración.</li>
                </ul>
                <li>Configura las opciones de grabación:</li>
                <ul class="steps">
                  <li>Marca las casillas para grabar <strong>narración</strong> y <strong>puntero láser</strong> si deseas incluir movimientos del puntero en tu grabación.</li>
                  <li>Selecciona si deseas grabar desde la <strong>diapositiva actual</strong> o desde el <strong>principio</strong>.</li>
                </ul>
                <li>Haz clic en <strong>Iniciar grabación</strong> (o usa el atajo <span class="keyboard-shortcut">Alt + R</span>) para comenzar. PowerPoint mostrará un conteo de 3 segundos antes de empezar.</li>
                <li>Narra tu presentación:</li>
                <ul class="steps">
                  <li>Habla claramente y a un ritmo natural, usando las notas del orador como guía.</li>
                  <li>Avanza a la siguiente diapositiva usando las flechas del teclado o el ratón cuando estés listo.</li>
                  <li>PowerPoint grabará tu voz y sincronizará la narración con las diapositivas y las animaciones.</li>
                  <li>Usa el puntero láser o el resaltador si los has habilitado, ya que estos movimientos también se grabarán.</li>
                </ul>
                <li>Al finalizar, PowerPoint guardará la narración con la presentación. Puedes:</li>
                <ul class="steps">
                  <li>Reproducir la presentación con narración para revisarla.</li>
                  <li>Volver a grabar secciones específicas si es necesario.</li>
                  <li>Exportar la presentación como un video que incluya la narración.</li>
                </ul>
                <li>Las narraciones grabadas son útiles para:</li>
                <ul class="steps">
                  <li>Crear <strong>presentaciones autónomas</strong> que puedan verse sin tu presencia, como en cursos en línea o materiales de capacitación.</li>
                  <li>Compartir presentaciones con <strong>audiencias remotas</strong>, donde no puedes estar presente para explicarlas.</li>
                  <li>Proporcionar <strong>explicaciones detalladas</strong> de diapositivas complejas, como gráficos o datos técnicos.</li>
                  <li>Mejorar la <strong>accesibilidad</strong> para personas con discapacidades visuales o que prefieren aprender mediante audio.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Subtítulos automáticos</h5>
              <ul class="steps">
                <li>Añade subtítulos en tiempo real a tu presentación para mejorar la accesibilidad y la comprensión:</li>
                <ul class="steps">
                  <li>Ve a la pestaña <strong>Presentación con diapositivas</strong> y selecciona <strong>Subtítulos</strong> en el grupo <strong>Accesibilidad</strong>.</li>
                  <li>Selecciona <strong>Subtítulos en tiempo real</strong> para activar la función.</li>
                  <li>PowerPoint mostrará un panel de configuración donde podrás:</li>
                  <ul class="steps">
                    <li>Elegir el <strong>idioma</strong> de los subtítulos (ej: Español, Inglés, Francés).</li>
                    <li>Seleccionar la <strong>posición</strong> de los subtítulos en la pantalla (arriba o abajo).li>
                    <li>Ajustar el <strong>tamaño del texto</strong> y el <strong>color</strong> para que sean legibles.</li>
                  </ul>
                </ul>
                <li>Inicia la presentación con subtítulos:</li>
                <ul class="steps">
                  <li>Usa <span class="keyboard-shortcut">F5</span> o ve a <strong>Presentación con diapositivas → Desde el principio</strong>.</li>
                  <li>PowerPoint transcribirá tu voz en tiempo real y mostrará los subtítulos en la pantalla.</li>
                  <li>Los subtítulos aparecerán como texto en la parte inferior (o superior) de la diapositiva, sincronizados con tu voz.</li>
                </ul>
                <li>Configura opciones adicionales durante la presentación:</li>
                <ul class="steps">
                  <li>Usa el menú de subtítulos (accesible desde el panel de herramientas) para:</li>
                  <ul class="steps">
                    <li><strong>Pausar o reanudar</strong> los subtítulos.</li>
                    <li>Ajustar la <strong>posición</strong> o el <strong>tamaño</strong> del texto.</li>
                    <li>Cambiar el <strong>idioma</strong> si es necesario.</li>
                  </ul>
                </ul>
                <li>Los subtítulos automáticos son útiles para:</li>
                <ul class="steps">
                  <li>Mejorar la <strong>accesibilidad</strong> para personas con discapacidades auditivas o en entornos ruidosos.</li>
                  <li>Facilitar la comprensión para <strong>audiencias multilingües</strong> o con diferentes niveles de dominio del idioma.</li>
                  <li>Proporcionar un <strong>registro escrito</strong> de tu presentación, útil para tomar notas o revisar después.</li>
                  <li>Mejorar la <strong>retención</strong> de la información, ya que la audiencia puede leer y escuchar simultáneamente.</li>
                </ul>
                <li>Consejos para usar subtítulos efectivamente:</li>
                <ul class="steps">
                  <li>Habla <strong>claramente</strong> y a un ritmo moderado para que la transcripción sea precisa.</li>
                  <li>Evita <strong>ruidos de fondo</strong> que puedan interferir con la transcripción.</li>
                  <li>Revisa los subtítulos ocasionalmente para asegurarte de que sean correctos, especialmente con términos técnicos.</li>
                  <li>Usa subtítulos en <strong>presentaciones grabadas</strong> para hacerlas más accesibles cuando se compartan.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Narraciones+y+Subtítulos" alt="Narraciones y subtítulos en PowerPoint">
                <figcaption>Ejemplo de cómo grabar narraciones y activar subtítulos en PowerPoint 2025. La imagen muestra la vista de grabación con notas del orador y controles de audio, así como subtítulos en tiempo real durante una presentación.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al grabar narraciones, practica varias veces para ajustar el ritmo y la claridad. Usa un micrófono de calidad para mejorar la calidad del audio, y graba en un entorno silencioso para evitar ruidos de fondo. Para subtítulos, elige un tamaño y color de texto que sean legibles desde la distancia, y coloca los subtítulos en una posición que no obstruya el contenido importante de la diapositiva.
          </div>
        </div>
      </section>

      <!-- Módulo 10: Colaboración y Trabajo en Línea -->
      <section id="modulo10" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-cloud"></i>
          <span>Módulo 10: Colaboración y Trabajo en Línea</span>
        </div>
        <h3>Módulo 10. Colaboración y Trabajo en Línea</h3>
        <p class="lead">Colabora en tiempo real con otros usuarios, guarda presentaciones en OneDrive o SharePoint, y comparte archivos de manera segura. Este módulo cubre las herramientas de colaboración integradas en PowerPoint 2025, que te permiten trabajar con equipos remotos, sincronizar cambios y gestionar versiones de manera eficiente. Desde el guardado en la nube hasta la coautoría en tiempo real, dominarás las funciones para mejorar la productividad y la coordinación en proyectos colaborativos.</p>

        <!-- Guardar en OneDrive -->
        <div class="card">
          <h4>Guardar en OneDrive o SharePoint</h4>
          <p>Almacena tus presentaciones en la nube para acceder a ellas desde cualquier dispositivo, colaborar con otros usuarios y mantener tus archivos seguros y actualizados. PowerPoint 2025 se integra perfectamente con OneDrive y SharePoint para facilitar el trabajo en equipo y la gestión de versiones:</p>
          <div class="grid grid-2">
            <div>
              <h5>Guardar en OneDrive</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Archivo</strong> y selecciona <strong>Guardar como</strong>.</li>
                <li>En el cuadro de diálogo <strong>Guardar como</strong>, selecciona <strong>OneDrive</strong> en la lista de ubicaciones.</li>
                <li>Si aún no has iniciado sesión, PowerPoint te pedirá que ingreses tus credenciales de Microsoft (correo y contraseña).</li>
                <li>Navega a la carpeta de OneDrive donde deseas guardar la presentación. Puedes crear una nueva carpeta si es necesario.</li>
                <li>Ingresa un nombre para tu presentación y haz clic en <strong>Guardar</strong>.</li>
                <li>PowerPoint guardará el archivo en OneDrive y lo sincronizará automáticamente con la nube. Verás un indicador en la barra de título que confirma que el archivo se está guardando en OneDrive.</li>
                <li>Activa el <strong>AutoGuardado</strong> para asegurarte de que los cambios se guarden automáticamente:</li>
                <ul class="steps">
                  <li>Ve a <strong>Archivo → Opciones → Guardar</strong>.</li>
                  <li>Marca la casilla <strong>AutoGuardar archivos de OneDrive y SharePoint cada pocos segundos</strong>.</li>
                  <li>Establece el intervalo de guardado automático (por ejemplo, cada 5 o 10 segundos).</li>
                </ul>
                <li>Beneficios de guardar en OneDrive:</li>
                <ul class="steps">
                  <li><strong>Acceso desde cualquier dispositivo</strong>: Abre y edita tu presentación desde computadoras, tablets o smartphones con conexión a internet.</li>
                  <li><strong>Colaboración en tiempo real</strong>: Trabaja simultáneamente con otros usuarios en el mismo archivo, con cambios sincronizados automáticamente.</li>
                  <li><strong>Historial de versiones</strong>: Recupera versiones anteriores de la presentación en caso de errores o cambios no deseados.</li>
                  <li><strong>Compartir fácilmente</strong>: Comparte el archivo con otros usuarios mediante enlaces o permisos específicos.</li>
                  <li><strong>Sincronización automática</strong>: Los cambios se guardan y sincronizan en segundo plano, sin necesidad de acción manual.</li>
                  <li><strong>Seguridad</strong>: OneDrive ofrece protección contra pérdida de datos y acceso no autorizado.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Guardar en SharePoint</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Archivo</strong> y selecciona <strong>Guardar como</strong>.</li>
                <li>En el cuadro de diálogo <strong>Guardar como</strong>, selecciona <strong>Agregar un lugar</strong> y elige <strong>SharePoint</strong>.</li>
                <li>Ingresa la URL del sitio de SharePoint de tu organización o selecciona uno de los sitios recientes.</li>
                <li>Si se te solicita, inicia sesión con tus credenciales corporativas.</li>
                <li>Navega a la biblioteca de documentos donde deseas guardar la presentación. Puedes crear una nueva carpeta si es necesario.</li>
                <li>Ingresa un nombre para tu presentación y haz clic en <strong>Guardar</strong>.</li>
                <li>PowerPoint guardará el archivo en SharePoint y lo sincronizará con la biblioteca de documentos.</li>
                <li>Configura opciones adicionales en SharePoint:</li>
                <ul class="steps">
                  <li><strong>Metadatos</strong>: Añade etiquetas o propiedades a la presentación para facilitar su búsqueda y organización.</li>
                  <li><strong>Permisos</strong>: Define quién puede ver o editar el archivo dentro de tu organización.</li>
                  <li><strong>Flujo de trabajo</strong>: Asocia la presentación con procesos de aprobación o revisión si es necesario.</li>
                </ul>
                <li>Beneficios de guardar en SharePoint:</li>
                <ul class="steps">
                  <li><strong>Colaboración en equipo</strong>: Comparte y edita presentaciones con colegas dentro de tu organización, con control de versiones y permisos.</li>
                  <li><strong>Integración con Office 365</strong>: Accede a otras herramientas de Microsoft, como Teams o Outlook, directamente desde SharePoint.</li>
                  <li><strong>Gestión de documentos</strong>: Organiza presentaciones en bibliotecas con metadatos y flujos de trabajo personalizados.</li>
                  <li><strong>Seguridad corporativa</strong>: Aprovecha las políticas de seguridad y cumplimiento de tu organización.</li>
                  <li><strong>Acceso desde cualquier lugar</strong>: Abre y edita archivos desde dispositivos dentro de la red corporativa o mediante VPN.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=OneDrive" alt="OneDrive en PowerPoint">
                <figcaption>Ejemplo de cómo guardar presentaciones en OneDrive y SharePoint desde PowerPoint 2025. La imagen muestra el cuadro de diálogo para seleccionar ubicaciones en la nube, opciones de AutoGuardado y sincronización de cambios.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al guardar en OneDrive o SharePoint, organiza tus presentaciones en carpetas lógicas y usa nombres de archivo descriptivos. Esto facilitará la búsqueda y gestión de archivos, especialmente cuando trabajas en múltiples proyectos. Además, aprovecha el historial de versiones para recuperar contenido eliminado accidentalmente o revertir cambios no deseados.
          </div>
        </div>

        <!-- Compartir presentaciones -->
        <div class="card">
          <h4>Compartir presentaciones en línea</h4>
          <p>Comparte tus presentaciones con otros usuarios y controla los permisos de acceso. PowerPoint 2025 ofrece múltiples opciones para compartir archivos, desde enviar enlaces hasta configurar permisos específicos para diferentes usuarios:</p>
          <div class="grid grid-2">
            <div>
              <h5>Compartir desde PowerPoint</h5>
              <ul class="steps">
                <li>Haz clic en el botón <strong>Compartir</strong> en la esquina superior derecha de la ventana de PowerPoint. También puedes ir a <strong>Archivo → Compartir</strong>.</li>
                <li>PowerPoint abrirá un panel de compartir donde podrás:</li>
                <ul class="steps">
                  <li>Ingresar las <strong>direcciones de correo electrónico</strong> de los destinatarios con quienes deseas compartir la presentación.</li>
                  <li>Elegir el nivel de permisos para cada destinatario:</li>
                  <ul class="steps">
                    <li><strong>Puede editar</strong>: Permite al destinatario hacer cambios en la presentación. Los cambios se sincronizarán en tiempo real si el archivo está en OneDrive o SharePoint.</li>
                    <li><strong>Puede ver</strong>: Permite al destinatario ver la presentación, pero no hacer cambios.</li>
                  </ul>
                  <li>Añadir un <strong>mensaje personalizado</strong> que se incluirá en la notificación por correo electrónico.</li>
                  <li>Configurar opciones adicionales:</li>
                  <ul class="steps">
                    <li><strong>Permitir edición</strong>: Define si los destinatarios pueden editar el archivo.</li>
                    <li><strong>Bloquear el archivo</strong>: Evita que otros usuarios hagan cambios mientras tú estás editando.</li>
                    <li><strong>Establecer fecha de caducidad</strong>: Limita el acceso al archivo después de una fecha específica.</li>
                  </ul>
                </ul>
                <li>Haz clic en <strong>Enviar</strong> para compartir la presentación. Los destinatarios recibirán un correo electrónico con un enlace al archivo.</li>
                <li>Gestiona el acceso compartido:</li>
                <ul class="steps">
                  <li>Ve a <strong>Archivo → Información → Compartido con</strong> para ver y administrar los permisos.</li>
                  <li>Cambia los permisos o revoca el acceso en cualquier momento.</li>
                  <li>Verifica quién ha abierto o editado el archivo recientemente.</li>
                </ul>
                <li>Compartir desde PowerPoint es ideal para:</li>
                <ul class="steps">
                  <li>Colaborar con <strong>equipos de trabajo</strong> en presentaciones compartidas.</li>
                  <li>Enviar presentaciones a <strong>clientes o colegas</strong> para revisión o aprobación.</li>
                  <li>Distribuir materiales de <strong>capacitación o educación</strong> a estudiantes o empleados.</li>
                  <li>Compartir <strong>informes o actualizaciones</strong> con stakeholders internos o externos.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Enlaces compartibles</h5>
              <ul class="steps">
                <li>Genera un enlace compartible para enviar la presentación mediante correo electrónico, mensajería o redes sociales:</li>
                <ul class="steps">
                  <li>Haz clic en el botón <strong>Compartir</strong> y selecciona <strong>Obtener un vínculo</strong> en el panel de compartir.</li>
                  <li>Elige el tipo de enlace que deseas crear:</li>
                  <ul class="steps">
                    <li><strong>Cualquiera con el vínculo puede editar</strong>: Permite que cualquier persona con el enlace edite la presentación.</li>
                    <li><strong>Cualquiera con el vínculo puede ver</strong>: Permite que cualquier persona con el enlace vea la presentación, pero no la edite.</li>
                    <li><strong>Personas específicas</strong>: Solo los usuarios que especifiques podrán acceder al enlace (requiere inicio de sesión).</li>
                  </ul>
                  <li>Configura opciones adicionales para el enlace:</li>
                  <ul class="steps">
                    <li><strong>Permitir edición</strong>: Define si los usuarios con el enlace pueden editar el archivo.</li>
                    <li><strong>Establecer fecha de caducidad</strong>: El enlace dejará de funcionar después de la fecha seleccionada.</li>
                    <li><strong>Establecer contraseña</strong>: Requiere una contraseña para acceder al archivo (solo disponible en algunos planes de OneDrive).</li>
                  </ul>
                  <li>Haz clic en <strong>Aplicar</strong> para generar el enlace.</li>
                  <li>Copia el enlace y compártelo mediante correo electrónico, mensajería instantánea o redes sociales.</li>
                </ul>
                <li>Gestiona los enlaces compartidos:</li>
                <ul class="steps">
                  <li>Ve a <strong>Archivo → Información → Compartido con</strong> para ver una lista de todos los enlaces compartidos.</li>
                  <li>Revoca el acceso a un enlace en cualquier momento seleccionándolo y haciendo clic en <strong>Eliminar vínculo</strong>.</li>
                  <li>Cambia los permisos de un enlace existente editando su configuración.</li>
                </ul>
                <li>Consejos para usar enlaces compartibles:</li>
                <ul class="steps">
                  <li>Usa enlaces con <strong>permisos restrictivos</strong> (solo vista) cuando compartas presentaciones finales o con información sensible.</li>
                  <li>Establece <strong>fechas de caducidad</strong> para enlaces temporales, como los usados en eventos o promociones.</li>
                  <li>Compartir enlaces mediante <strong>mensajería segura</strong> o correo electrónico para evitar acceso no autorizado.</li>
                  <li>Monitorea el <strong>acceso al enlace</strong> para ver quién ha abierto la presentación y cuándo.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Compartir+Presentaciones" alt="Compartir presentaciones en PowerPoint">
                <figcaption>Ejemplo de cómo compartir presentaciones con permisos en PowerPoint 2025. La imagen muestra el panel de compartir con opciones para enviar invitaciones por correo electrónico y generar enlaces compartibles con configuraciones de permisos.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al compartir presentaciones, considera el nivel de acceso que cada destinatario necesita. Por ejemplo, otorga permisos de edición solo a colaboradores directos y permisos de vista a revisores o stakeholders. Además, usa enlaces con fechas de caducidad para contenido temporal y revisa periódicamente la lista de personas con acceso para mantener la seguridad.
          </div>
        </div>

        <!-- Colaboración en tiempo real -->
        <div class="card">
          <h4>Colaboración en tiempo real</h4>
          <p>Trabaja simultáneamente con otros usuarios en la misma presentación, viendo los cambios en tiempo real y comunicándote mediante comentarios y chat. La colaboración en tiempo real en PowerPoint 2025 facilita el trabajo en equipo, especialmente para equipos remotos o distribuidos:</p>
          <div class="grid grid-2">
            <div>
              <h5>Coautoría</h5>
              <ul class="steps">
                <li>Para colaborar en tiempo real, todos los usuarios deben tener acceso a la presentación almacenada en OneDrive o SharePoint.</li>
                <li>Abre la presentación desde OneDrive o SharePoint en PowerPoint 2025. Verás un indicador en la barra de título que muestra que el archivo está guardado en la nube.</li>
                <li>Invita a otros usuarios a colaborar:</li>
                <ul class="steps">
                  <li>Haz clic en el botón <strong>Compartir</strong> y sigue los pasos para enviar invitaciones por correo electrónico o generar un enlace compartible.</li>
                  <li>Asegúrate de que los destinatarios tengan permisos de <strong>edición</strong> para poder colaborar.</li>
                </ul>
                <li>Cuando otros usuarios abran la presentación, verás sus nombres y cursores en tiempo real:</li>
                <ul class="steps">
                  <li>Cada colaborador aparece con un <strong>color de cursor único</strong> y su nombre en la barra de título.</li>
                  <li>Los cambios que realicen otros usuarios se sincronizarán automáticamente en tu versión de la presentación.</li>
                  <li>PowerPoint muestra un indicador cuando alguien más está editando la misma diapositiva que tú.</li>
                </ul>
                <li>Usa el panel <strong>Personas</strong> para ver quién está trabajando en la presentación:</li>
                <ul class="steps">
                  <li>Haz clic en el botón <strong>Personas</strong> en la barra de título para abrir el panel.</li>
                  <li>Verás una lista de todos los colaboradores actuales, con sus fotos de perfil (si están disponibles) y el estado de actividad.</li>
                  <li>Haz clic en el nombre de un colaborador para ver sus cambios recientes o comunicarte con ellos.</li>
                </ul>
                <li>Consejos para colaborar en tiempo real:</li>
                <ul class="steps">
                  <li>Comunícate con tu equipo mediante <strong>chat</strong> o <strong>comentarios</strong> para coordinar cambios y evitar conflictos.</li>
                  <li>Asigna <strong>tareas específicas</strong> a cada colaborador, como editar secciones distintas, para evitar superposiciones.</li>
                  <li>Guarda frecuentemente (<span class="keyboard-shortcut">Ctrl + S</span>) para asegurarte de que tus cambios se sincronicen.</li>
                  <li>Usa <strong>colores o estilos distintos</strong> para identificar fácilmente los cambios de cada colaborador.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Comentarios y chat</h5>
              <ul class="steps">
                <li>Añade comentarios a la presentación para discutir cambios o hacer preguntas sin modificar el contenido:</li>
                <ul class="steps">
                  <li>Selecciona el texto o elemento al que deseas añadir un comentario.</li>
                  <li>Ve a la pestaña <strong>Revisar</strong> y haz clic en <strong>Nuevo comentario</strong> en el grupo <strong>Comentarios</strong>.</li>
                  <li>Escribe tu comentario en el panel que aparece a la derecha. Puedes mencionar a otros colaboradores usando el símbolo @ seguido de su nombre.</li>
                  <li>Haz clic en <strong>Publicar</strong> para añadir el comentario. Aparecerá un indicador en el elemento comentado.</li>
                </ul>
                <li>Gestiona los comentarios:</li>
                <ul class="steps">
                  <li>Ve al panel <strong>Comentarios</strong> para ver todos los comentarios en la presentación.</li>
                  <li>Haz clic en un comentario para responder, resolverlo o eliminarlo.</li>
                  <li>Usa el filtro para ver comentarios de usuarios específicos o por estado (abiertos, resueltos).</li>
                </ul>
                <li>Usa el chat integrado para comunicarte con los colaboradores en tiempo real:</li>
                <ul class="steps">
                  <li>Haz clic en el botón <strong>Chat</strong> en la barra de título para abrir el panel de chat.</li>
                  <li>Escribe tu mensaje y presiona <span class="keyboard-shortcut">Enter</span> para enviarlo. Todos los colaboradores actuales verán el mensaje.</li>
                  <li>El chat es útil para:</li>
                  <ul class="steps">
                    <li>Coordinar cambios o ediciones en tiempo real.</li>
                    <li>Hacer preguntas rápidas o aclarar dudas sin salir de la presentación.</li>
                    <li>Discutir ideas o sugerencias antes de implementarlas.</li>
                  </ul>
                </ul>
                <li>Consejos para usar comentarios y chat:</li>
                <ul class="steps">
                  <li>Sé <strong>claro y conciso</strong> en tus comentarios y mensajes para evitar malentendidos.</li>
                  <li>Usa <strong>menciones (@nombre)</strong> para dirigir comentarios a usuarios específicos.</li>
                  <li>Resuelve los comentarios una vez que se hayan abordado para mantener el panel organizado.</li>
                  <li>Evita discusiones largas en el chat; usa comentarios para temas más detallados.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Colaboración" alt="Colaboración en PowerPoint">
                <figcaption>Ejemplo de colaboración en tiempo real en PowerPoint 2025, mostrando el panel de personas con colaboradores activos, comentarios en una diapositiva y el chat integrado para comunicación en tiempo real.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al colaborar en tiempo real, establece <strong>reglas claras</strong> con tu equipo sobre cómo y cuándo hacer cambios. Por ejemplo, asigna roles específicos (como editor, revisor o aprobador) y usa comentarios para proponer cambios antes de implementarlos. Además, aprovecha el historial de versiones en OneDrive o SharePoint para recuperar contenido si se realizan cambios no deseados durante la colaboración.
          </div>
        </div>
      </section>

      <!-- Módulo 11: Funciones Avanzadas -->
      <section id="modulo11" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-gear"></i>
          <span>Módulo 11: Funciones Avanzadas</span>
        </div>
        <h3>Módulo 11. Funciones Avanzadas</h3>
        <p class="lead">Automatiza tareas, usa macros, vincula datos dinámicos y explora complementos avanzados. Este módulo cubre herramientas para usuarios que buscan maximizar su productividad en PowerPoint. Desde la creación de hipervínculos interactivos hasta la automatización con macros y la integración con otras aplicaciones, dominarás funciones avanzadas para personalizar y optimizar tus presentaciones.</p>

        <!-- Hipervínculos -->
        <div class="card">
          <h4>Uso de hipervínculos internos y externos</h4>
          <p>Añade interactividad a tus presentaciones con hipervínculos que permitan navegar entre diapositivas, abrir archivos o acceder a recursos en línea. Los hipervínculos son esenciales para crear presentaciones dinámicas y no lineales:</p>
          <div class="grid grid-2">
            <div>
              <h5>Hipervínculos internos</h5>
              <ul class="steps">
                <li>Selecciona el texto, forma o imagen al que deseas añadir un hipervínculo interno.</li>
                <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + K</span> o ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Hipervínculo</strong> en el grupo <strong>Vínculos</strong>.</li>
                <li>En el cuadro de diálogo <strong>Insertar hipervínculo</strong>, selecciona <strong>Lugar en este documento</strong> en el panel izquierdo.</li>
                <li>PowerPoint mostrará una lista de las diapositivas de tu presentación. Selecciona la diapositiva de destino:</li>
                <ul class="steps">
                  <li>Puedes elegir entre diapositivas individuales, la primera o última diapositiva, o diapositivas con títulos específicos.</li>
                  <li>Si tu presentación tiene secciones, también podrás vincular a la primera diapositiva de cada sección.</li>
                </ul>
                <li>Haz clic en <strong>Aceptar</strong> para crear el hipervínculo. El texto o elemento seleccionado cambiará de color para indicar que es un vínculo.</li>
                <li>Prueba el hipervínculo en modo presentación:</li>
                <ul class="steps">
                  <li>Inicia la presentación con <span class="keyboard-shortcut">F5</span>.</li>
                  <li>Haz clic en el hipervínculo para navegar a la diapositiva de destino.</li>
                  <li>Usa el botón <strong>Atrás</strong> (flecha izquierda) para regresar a la diapositiva anterior.</li>
                </ul>
                <li>Los hipervínculos internos son útiles para:</li>
                <ul class="steps">
                  <li>Crear <strong>índices interactivos</strong> que permitan a la audiencia navegar entre secciones.</li>
                  <li>Facilitar la <strong>navegación no lineal</strong>, como en presentaciones con múltiples rutas o opciones.</li>
                  <li>Vincular <strong>diapositivas relacionadas</strong>, como datos y sus explicaciones detalladas.</li>
                  <li>Crear <strong>presentaciones autónomas</strong> donde los usuarios puedan explorar el contenido según sus intereses.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Hipervínculos externos</h5>
              <ul class="steps">
                <li>Selecciona el texto, forma o imagen al que deseas añadir un hipervínculo externo.</li>
                <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + K</span> o ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Hipervínculo</strong>.</li>
                <li>En el cuadro de diálogo <strong>Insertar hipervínculo</strong>, selecciona <strong>Archivo o página web existente</strong> en el panel izquierdo.</li>
                <li>Ingresa la dirección URL del destino en el campo <strong>Dirección</strong>:</li>
                <ul class="steps">
                  <li>Para páginas web, ingresa la URL completa (ej: <strong>https://www.ejemplo.com</strong>).</li>
                  <li>Para archivos locales, haz clic en <strong>Examinar</strong> y selecciona el archivo en tu computadora.</li>
                  <li>Para direcciones de correo electrónico, ingresa <strong>mailto:direccion@ejemplo.com</strong>.</li>
                </ul>
                <li>Configura opciones adicionales:</li>
                <ul class="steps">
                  <li><strong>Información sobre herramientas</strong>: Añade texto que aparecerá al pasar el cursor sobre el hipervínculo.</li>
                  <li><strong>Editar hipervínculo</strong>: Modifica el destino o la apariencia del vínculo en cualquier momento.</li>
                </ul>
                <li>Haz clic en <strong>Aceptar</strong> para crear el hipervínculo.</li>
                <li>Prueba el hipervínculo externo:</li>
                <ul class="steps">
                  <li>En modo presentación, haz clic en el hipervínculo para abrir el destino en el navegador o programa correspondiente.</li>
                  <li>PowerPoint mostrará un mensaje de advertencia si el hipervínculo lleva a un sitio externo, para evitar navegación accidental.</li>
                </ul>
                <li>Los hipervínculos externos son útiles para:</li>
                <ul class="steps">
                  <li>Vincular a <strong>recursos en línea</strong>, como artículos, videos o documentos de referencia.</li>
                  <li>Abrir <strong>archivos relacionados</strong>, como hojas de cálculo de Excel o documentos de Word.</li>
                  <li>Enviar <strong>correos electrónicos</strong> predefinidos con destinatarios y asuntos específicos.</li>
                  <li>Crear <strong>presentaciones interactivas</strong> que integren contenido de múltiples fuentes.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Hipervínculos" alt="Hipervínculos en PowerPoint">
                <figcaption>Ejemplo de hipervínculos internos (a diapositivas) y externos (a webs) en PowerPoint 2025. La imagen muestra el cuadro de diálogo para insertar hipervínculos, con opciones para vincular a diapositivas, archivos o páginas web.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al usar hipervínculos, asegúrate de que los destinos (especialmente los externos) estén accesibles y sean relevantes para tu audiencia. Prueba todos los hipervínculos antes de presentar para evitar errores o enlaces rotos. Además, considera añadir una diapositiva de "Recursos" al final de tu presentación con una lista de todos los hipervínculos externos, para que la audiencia pueda acceder a ellos fácilmente.
          </div>
        </div>

        <!-- Navegación interactiva -->
        <div class="card">
          <h4>Navegación interactiva (botones, menús, índice)</h4>
          <p>Crea presentaciones interactivas con botones de acción, menús personalizados e índices que permitan a la audiencia explorar el contenido de manera no lineal. La navegación interactiva mejora la engagement y facilita la adaptación a diferentes necesidades de la audiencia:</p>
          <div class="grid grid-2">
            <div>
              <h5>Botones de acción</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Insertar</strong> y selecciona <strong>Formas</strong> en el grupo <strong>Ilustraciones</strong>.</li>
                <li>Desplázate hasta la sección <strong>Botones de acción</strong> y selecciona un botón predefinido:</li>
                <ul class="steps">
                  <li><strong>Botón personalizado</strong>: Un botón en blanco que puedes personalizar con texto e imágenes.</li>
                  <li><strong>Inicio</strong>: Botón para ir a la primera diapositiva.</li>
                  <li><strong>Anterior</strong>: Botón para retroceder a la diapositiva anterior.</li>
                  <li><strong>Siguiente</strong>: Botón para avanzar a la siguiente diapositiva.</li>
                  <li><strong>Último</strong>: Botón para ir a la última diapositiva.</li>
                  <li><strong>Reproducir</strong>: Botón para reproducir un elemento multimedia.</li>
                  <li><strong>Documento</strong>: Botón para abrir un archivo vinculado.</li>
                  <li><strong>Ayuda</strong>: Botón para mostrar información adicional.</li>
                </ul>
                <li>Dibuja el botón en tu diapositiva arrastrando para definir su tamaño y posición.</li>
                <li>En el cuadro de diálogo <strong>Configuración de acción</strong>, elige la acción que realizará el botón:</li>
                <ul class="steps">
                  <li><strong>Hipervínculo a</strong>: Vincula el botón a una diapositiva, archivo, página web o correo electrónico.</li>
                  <li><strong>Ejecutar programa</strong>: Abre un programa o archivo externo.</li>
                  <li><strong>Ejecutar macro</strong>: Ejecuta una macro de VBA para automatizar tareas.</li>
                  <li><strong>Acción de objeto</strong>: Realiza una acción específica en un objeto incrustado, como reproducir un video.</li>
                </ul>
                <li>Personaliza el botón:</li>
                <ul class="steps">
                  <li>Cambia el texto del botón para describir su función claramente (ej: "Volver al inicio", "Ver detalles").</li>
                  <li>Ajusta el color, estilo y efectos del botón usando las herramientas de formato en la pestaña <strong>Formato de forma</strong>.</li>
                  <li>Añade íconos o imágenes al botón para hacerlo más intuitivo y atractivo.</li>
                </ul>
                <li>Prueba el botón en modo presentación:</li>
                <ul class="steps">
                  <li>Inicia la presentación con <span class="keyboard-shortcut">F5</span>.</li>
                  <li>Haz clic en el botón para verificar que realiza la acción esperada.</li>
                  <li>Ajusta la posición o tamaño del botón si es necesario para mejorar la usabilidad.</li>
                </ul>
                <li>Los botones de acción son ideales para:</li>
                <ul class="steps">
                  <li>Crear <strong>menús de navegación</strong> en la portada o diapositivas de sección.</li>
                  <li>Facilitar la <strong>exploración no lineal</strong> del contenido, como en presentaciones con múltiples rutas.</li>
                  <li>Añadir <strong>interactividad</strong> a diapositivas con elementos multimedia o datos externos.</li>
                  <li>Automatizar <strong>tareas repetitivas</strong>, como avanzar a la siguiente diapositiva o abrir un archivo específico.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Menús interactivos</h5>
              <ul class="steps">
                <li>Diseña un menú interactivo usando formas, texto e hipervínculos para crear una tabla de contenido visual:</li>
                <ul class="steps">
                  <li>Crea una diapositiva dedicada al menú, generalmente después de la portada.</li>
                  <li>Usa formas (como rectángulos o botones) para representar cada sección o tema de tu presentación.</li>
                  <li>Añade texto a las formas para describir cada sección (ej: "Introducción", "Datos", "Conclusiones").</li>
                  <li>Aplica estilos consistentes a todas las formas del menú, como colores, bordes y efectos.</li>
                </ul>
                <li>Añade hipervínculos a cada elemento del menú:</li>
                <ul class="steps">
                  <li>Selecciona una forma y usa el atajo <span class="keyboard-shortcut">Ctrl + K</span> para abrir el cuadro de diálogo <strong>Insertar hipervínculo</strong>.</li>
                  <li>Selecciona <strong>Lugar en este documento</strong> y elige la diapositiva de destino para esa sección.</li>
                  <li>Repite el proceso para cada elemento del menú.</li>
                </ul>
                <li>Añade un botón "Volver al menú" en cada diapositiva de sección:</li>
                <ul class="steps">
                  <li>Inserta un botón de acción o forma en cada diapositiva que no sea el menú.</li>
                  <li>Configura el botón para que vincule a la diapositiva del menú.</li>
                  <li>Coloca el botón en una posición consistente (ej: esquina inferior derecha) para facilitar su ubicación.</li>
                </ul>
                <li>Personaliza el menú para mejorar su usabilidad:</li>
                <ul class="steps">
                  <li>Usa colores o íconos distintos para cada sección, para que sean fácilmente reconocibles.</li>
                  <li>Agrupa elementos relacionados y sepáralos con espacio o líneas.</li>
                  <li>Añade una descripción breve debajo de cada elemento para explicar su contenido.</li>
                </ul>
                <li>Prueba el menú en modo presentación:</li>
                <ul class="steps">
                  <li>Inicia la presentación y navega desde el menú a cada sección.</li>
                  <li>Verifica que los botones "Volver al menú" funcionen correctamente en cada diapositiva.</li>
                  <li>Ajusta el diseño o la posición de los elementos si es necesario para mejorar la experiencia del usuario.</li>
                </ul>
                <li>Los menús interactivos son útiles para:</li>
                <ul class="steps">
                  <li>Presentaciones largas con <strong>múltiples secciones</strong>, donde la audiencia puede elegir qué temas explorar.</li>
                  <li><strong>Cursos o capacitaciones</strong> donde los participantes necesitan acceder a diferentes módulos.</li>
                  <li>Presentaciones <strong>no lineales</strong>, como portafolios o demostraciones de productos con múltiples opciones.</li>
                  <li><strong>Kioscos interactivos</strong> donde los usuarios exploran el contenido sin un presentador.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Navegación+Interactiva" alt="Navegación interactiva en PowerPoint">
                <figcaption>Ejemplo de navegación interactiva con botones y menús en PowerPoint 2025. La imagen muestra un menú con botones personalizados que vinculan a diferentes secciones, y una diapositiva con un botón "Volver al menú".</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al diseñar navegación interactiva, mantén un <strong>diseño consistente</strong> en todos los botones y menús. Usa los mismos colores, fuentes y estilos para que la audiencia reconozca fácilmente los elementos interactivos. Además, prueba la navegación con usuarios reales para identificar posibles problemas de usabilidad y ajustar el diseño según sea necesario.
          </div>
        </div>

        <!-- Macros -->
        <div class="card">
          <h4>Uso de macros y automatización (PowerPoint VBA básico)</h4>
          <p>Automatiza tareas repetitivas y personaliza PowerPoint con macros y scripts de VBA (Visual Basic for Applications). Las macros te permiten ahorrar tiempo y mejorar la precisión en presentaciones complejas o con procesos repetitivos:</p>
          <div class="grid grid-2">
            <div>
              <h5>Grabar una macro</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Vista</strong> y selecciona <strong>Macros</strong> en el grupo <strong>Macros</strong>.</li>
                <li>Haz clic en <strong>Grabar macro</strong> para iniciar el proceso de grabación.</li>
                <li>En el cuadro de diálogo <strong>Grabar macro</strong>, configura las siguientes opciones:</li>
                <ul class="steps">
                  <li><strong>Nombre de la macro</strong>: Asigna un nombre descriptivo que identifique la tarea que automatizará (ej: "Formato_Títulos").</li>
                  <li><strong>Asignar macro a</strong>: Elige si deseas asignar la macro a un botón en la barra de herramientas o a un atajo de teclado.</li>
                  <li><strong>Guardar macro en</strong>: Selecciona dónde guardar la macro (generalmente en la presentación actual).</li>
                  <li><strong>Descripción</strong>: Añade una descripción breve de lo que hace la macro, útil para recordarlo más tarde.</li>
                </ul>
                <li>Haz clic en <strong>Aceptar</strong> para comenzar la grabación. PowerPoint registrará todas las acciones que realices a partir de este momento.</li>
                <li>Realiza las acciones que deseas automatizar:</li>
                <ul class="steps">
                  <li>Por ejemplo, para una macro que formatea títulos, selecciona un título, cambia su fuente, tamaño y color, y aplica un efecto.</li>
                  <li>Sé preciso en tus acciones, ya que la macro repetirá exactamente lo que hagas.</li>
                  <li>Evita acciones no relacionadas, como hacer clic en áreas irrelevantes de la pantalla.</li>
                </ul>
                <li>Detén la grabación:</li>
                <ul class="steps">
                  <li>Ve a la pestaña <strong>Vista</strong> y selecciona <strong>Macros → Detener grabación</strong>.</li>
                  <li>O haz clic en el botón <strong>Detener grabación</strong> en la barra de herramientas de acceso rápido si lo has añadido.</li>
                </ul>
                <li>La macro grabada estará disponible para usarse en cualquier momento.</li>
                <li>Consejos para grabar macros:</li>
                <ul class="steps">
                  <li>Planifica las acciones antes de grabar para evitar errores o pasos innecesarios.</li>
                  <li>Usa nombres claros y descriptivos para las macros, como "Insertar_Logotipo" o "Aplicar_Tema_Corporativo".</li>
                  <li>Prueba la macro después de grabarla para asegurarte de que funciona como esperabas.</li>
                  <li>Guarda una copia de seguridad de tu presentación antes de grabar macros complejas.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Ejecutar una macro</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Vista</strong> y selecciona <strong>Macros → Ver macros</strong>.</li>
                <li>PowerPoint abrirá el cuadro de diálogo <strong>Macro</strong>, donde verás una lista de todas las macros disponibles en la presentación.</li>
                <li>Selecciona la macro que deseas ejecutar y haz clic en <strong>Ejecutar</strong>.</li>
                <li>La macro realizará automáticamente las acciones que grabaste, aplicándolas al elemento seleccionado actualmente.</li>
                <li>Asigna un atajo de teclado a una macro para un acceso más rápido:</li>
                <ul class="steps">
                  <li>En el cuadro de diálogo <strong>Macro</strong>, selecciona la macro y haz clic en <strong>Opciones</strong>.</li>
                  <li>Ingresa una combinación de teclas (ej: <span class="keyboard-shortcut">Ctrl + Shift + T</span>) para ejecutar la macro.</li>
                  <li>Asegúrate de que el atajo no entre en conflicto con otros atajos de PowerPoint.</li>
                </ul>
                <li>Añade un botón a la barra de herramientas para ejecutar la macro:</li>
                <ul class="steps">
                  <li>Ve a <strong>Archivo → Opciones → Barra de herramientas de acceso rápido</strong>.</li>
                  <li>Selecciona <strong>Macros</strong> en el menú desplegable <strong>Elegir comandos de</strong>.</li>
                  <li>Selecciona la macro que deseas añadir y haz clic en <strong>Agregar</strong>.</li>
                  <li>La macro aparecerá como un botón en la barra de herramientas de acceso rápido.</li>
                </ul>
                <li>Edita una macro para personalizarla o corregir errores:</li>
                <ul class="steps">
                  <li>En el cuadro de diálogo <strong>Macro</strong>, selecciona la macro y haz clic en <strong>Editar</strong>.</li>
                  <li>PowerPoint abrirá el editor de VBA, donde podrás modificar el código de la macro.</li>
                  <li>Si no estás familiarizado con VBA, ten cuidado al editar el código, ya que errores pueden hacer que la macro no funcione.</li>
                </ul>
                <li>Consejos para ejecutar macros:</li>
                <ul class="steps">
                  <li>Prueba las macros en una copia de tu presentación antes de usarlas en el archivo original.</li>
                  <li>Documenta qué hace cada macro, especialmente si trabajas en equipo, para que otros puedan entender su función.</li>
                  <li>Usa macros para tareas repetitivas, como aplicar formatos, insertar elementos o generar informes.</li>
                  <li>Evita ejecutar macros de fuentes no confiables, ya que pueden contener código malicioso.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Macros" alt="Macros en PowerPoint">
                <figcaption>Ejemplo de cómo grabar y ejecutar macros en PowerPoint 2025. La imagen muestra el cuadro de diálogo para grabar una macro, la lista de macros disponibles y opciones para asignar atajos de teclado o botones.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout warn">
            <strong>Precaución:</strong> Las macros pueden contener código malicioso que dañe tu computadora o comprometa la seguridad de tus datos. Solo ejecuta macros de fuentes confiables y asegúrate de que tu software antivirus esté actualizado. PowerPoint muestra una advertencia de seguridad al abrir presentaciones con macros; habilita las macros solo si confías en el origen del archivo.
          </div>
        </div>
      </section>

      <!-- Módulo 12: Exportación y Publicación -->
      <section id="modulo12" class="block">
        <div class="module-icon">
          <i class="fa-solid fa-file-export"></i>
          <span>Módulo 12: Exportación y Publicación</span>
        </div>
        <h3>Módulo 12. Exportación y Publicación</h3>
        <p class="lead">Prepara tus presentaciones para imprimir o exportar a otros formatos como PDF, video o HTML. Este módulo cubre la configuración de impresión, exportación y publicación en línea. Aprenderás a optimizar tus presentaciones para diferentes medios, desde documentos impresos hasta videos para redes sociales, asegurando que tu contenido se vea profesional en cualquier formato.</p>

        <!-- Configuración de impresión -->
        <div class="card">
          <h4>Configuración de impresión y vista preliminar</h4>
          <p>Prepara tus diapositivas para imprimir, ajustando la disposición, el formato y la calidad para obtener resultados profesionales. PowerPoint 2025 ofrece múltiples opciones de impresión que te permiten personalizar la salida según tus necesidades:</p>
          <div class="grid grid-2">
            <div>
              <h5>Vista preliminar</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Archivo</strong> y selecciona <strong>Imprimir</strong> para abrir el panel de impresión.</li>
                <li>PowerPoint mostrará una vista preliminar de cómo se verán las diapositivas impresas, con opciones para ajustar la configuración:</li>
                <ul class="steps">
                  <li><strong>Impresora</strong>: Selecciona la impresora que deseas usar. Puedes elegir entre impresoras locales o en red.</li>
                  <li><strong>Configuración</strong>: Define el diseño de impresión:</li>
                  <ul class="steps">
                    <li><strong>Diapositivas completas</strong>: Imprime cada diapositiva en una página separada, ideal para repartir a la audiencia.</li>
                    <li><strong>Páginas de notas</strong>: Imprime cada diapositiva con sus notas del orador en la misma página, útil para el presentador.</li>
                    <li><strong>Esquema</strong>: Imprime solo el texto del esquema de la presentación, sin imágenes ni gráficos.</li>
                    <li><strong>Handouts</strong>: Imprime múltiples diapositivas por página (2, 3, 4, 6 o 9), con espacio para notas. Ideal para distribuir a la audiencia.</li>
                  </ul>
                  <li><strong>Orientación</strong>: Elige entre <strong>Horizontal</strong> (predeterminado para diapositivas) o <strong>Vertical</strong> (para algunos handouts o notas).</li>
                  <li><strong>Tamaño del papel</strong>: Selecciona el tamaño de papel, como Carta, A4 o personalizado.</li>
                  <li><strong>Márgenes</strong>: Ajusta los márgenes si es necesario, aunque PowerPoint optimiza automáticamente el espacio.</li>
                </ul>
                <li>Revisa la vista preliminar para asegurarte de que:</li>
                <ul class="steps">
                  <li>El contenido de cada diapositiva es legible y está completo.</li>
                  <li>Las imágenes y gráficos se ven claramente, sin recortes.</li>
                  <li>El texto en las notas o handouts es del tamaño adecuado.</li>
                  <li>Los colores se ven como esperabas (algunas impresoras pueden variar los tonos).</li>
                </ul>
                <li>Usa las flechas en la parte inferior del panel para navegar entre las páginas y revisar todas las diapositivas o handouts.</li>
              </ul>
            </div>
            <div>
              <h5>Opciones de impresión</h5>
              <ul class="steps">
                <li>Ajusta las siguientes opciones antes de imprimir:</li>
                <ul class="steps">
                  <li><strong>Imprimir todas las diapositivas</strong>: Imprime toda la presentación. Usa esta opción para handouts o copias completas.</li>
                  <li><strong>Imprimir selección</strong>: Imprime solo las diapositivas seleccionadas en el panel de diapositivas.</li>
                  <li><strong>Imprimir diapositivas actuales</strong>: Imprime solo la diapositiva que está abierta actualmente.</li>
                  <li><strong>Imprimir rango personalizado</strong>: Especifica un rango de diapositivas (ej: 1-5, 8, 10-12).</li>
                </ul>
                <li>Configura opciones de color:</li>
                <ul class="steps">
                  <li><strong>Color</strong>: Imprime en color si tu impresora lo soporta. Ideal para presentaciones con gráficos o imágenes importantes.</li>
                  <li><strong>Escala de grises</strong>: Convierte los colores a tonos de gris, útil para impresoras en blanco y negro o para ahorrar tinta.</li>
                  <li><strong>Blanco y negro puro</strong>: Imprime en negro sobre fondo blanco, la opción más económica.</li>
                </ul>
                <li>Ajusta la calidad de impresión:</li>
                <ul class="steps">
                  <li><strong>Alta calidad</strong>: Imprime con la máxima resolución, ideal para presentaciones con detalles finos o imágenes.</li>
                  <li><strong>Calidad media</strong>: Equilibrio entre calidad y velocidad, adecuado para la mayoría de las presentaciones.</li>
                  <li><strong>Borrador</strong>: Imprime rápidamente con menor calidad, útil para revisiones internas.</li>
                </ul>
                <li>Imprime múltiples copias:</li>
                <ul class="steps">
                  <li>Ingresa el número de copias que deseas imprimir en el campo <strong>Copias</strong>.</li>
                  <li>Marca la casilla <strong>Intercalar</strong> si deseas imprimir múltiples copias de páginas sueltas intercaladas (útil para handouts).</li>
                </ul>
                <li>Imprime en ambas caras del papel (si tu impresora lo soporta):</li>
                <ul class="steps">
                  <li>Selecciona <strong>Impresión a doble cara</strong> en las opciones de la impresora.</li>
                  <li>Elige entre <strong>Voltear en el lado largo</strong> (para hojas horizontales) o <strong>Voltear en el lado corto</strong> (para hojas verticales).</li>
                </ul>
                <li>Guarda la configuración de impresión para usarla en el futuro:</li>
                <ul class="steps">
                  <li>Haz clic en <strong>Guardar configuración de impresión</strong> si tu impresora lo permite.</li>
                  <li>Asigna un nombre a la configuración para identificarla fácilmente.</li>
                </ul>
                <li>Consejos para imprimir presentaciones:</li>
                <ul class="steps">
                  <li>Usa <strong>papel de alta calidad</strong> para presentaciones importantes, especialmente si incluyen imágenes o gráficos.</li>
                  <li>Imprime una <strong>página de prueba</strong> antes de hacer múltiples copias, para verificar la alineación y los colores.</li>
                  <li>Para handouts, considera imprimir <strong>3 diapositivas por página</strong> con líneas para notas, lo que ahorra papel y facilita que la audiencia tome apuntes.</li>
                  <li>Si imprime notas del orador, usa la opción <strong>Páginas de notas</strong> con una diapositiva y sus notas por página para mayor claridad.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Impresión" alt="Impresión en PowerPoint">
                <figcaption>Ejemplo de configuración de impresión en PowerPoint 2025. La imagen muestra el panel de impresión con opciones para seleccionar el diseño (diapositivas, notas, handouts), ajustar la orientación y calidad, y previsualizar las páginas antes de imprimir.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Antes de imprimir una presentación larga, revisa la vista preliminar para identificar diapositivas con contenido que pueda no ajustarse bien al papel. Ajusta el diseño o el tamaño de fuente si es necesario, y considera imprimir solo las diapositivas clave si el documento es muy extenso. Además, usa la opción de impresión a doble cara para ahorrar papel en handouts o documentos internos.
          </div>
        </div>

        <!-- Exportar a PDF y video -->
        <div class="card">
          <h4>Exportar a PDF, video y otros formatos</h4>
          <p>Convierte tus presentaciones a otros formatos para distribuirlas o compartirlas de manera más versátil. PowerPoint 2025 ofrece opciones para exportar a PDF, video, imágenes y otros formatos, lo que te permite adaptar tu contenido a diferentes necesidades y plataformas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Exportar a PDF</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Archivo</strong> y selecciona <strong>Exportar</strong>.</li>
                <li>Selecciona <strong>Crear PDF/XPS</strong> en el panel de exportación.</li>
                <li>Haz clic en <strong>Crear PDF/XPS</strong> para abrir el cuadro de diálogo de guardado.</li>
                <li>Configura las opciones de exportación:</li>
                <ul class="steps">
                  <li><strong>Nombre del archivo</strong>: Asigna un nombre descriptivo al archivo PDF.</li>
                  <li><strong>Ubicación</strong>: Elige dónde guardar el archivo en tu computadora o en la nube.</li>
                  <li><strong>Optimizar para</strong>: Selecciona entre:</li>
                  <ul class="steps">
                    <li><strong>Calidad estándar</strong>: Equilibrio entre tamaño de archivo y calidad, adecuado para la mayoría de los usos.</li>
                    <li><strong>Tamaño mínimo</strong>: Reduce el tamaño del archivo, útil para enviar por correo electrónico, pero con menor calidad.</li>
                  </ul>
                  <li><strong>Opciones</strong>: Haz clic en este botón para ajustar configuraciones avanzadas:</li>
                  <ul class="steps">
                    <li><strong>Rango de páginas</strong>: Elige si deseas exportar todas las diapositivas o un rango específico.</li>
                    <li><strong>Publicar información del documento</strong>: Incluye propiedades como título, autor y palabras clave en el PDF.</li>
                    <li><strong>Estructura de tags para accesibilidad</strong>: Mejora la accesibilidad para lectores de pantalla.</li>
                    <li><strong>Marcas y sangrías</strong>: Incluye marcas de recorte y sangrías para impresión profesional.</li>
                  </ul>
                </ul>
                <li>Haz clic en <strong>Publicar</strong> para crear el archivo PDF.</li>
                <li>El archivo PDF conservará:</li>
                <ul class="steps">
                  <li>El diseño y formato de tus diapositivas, incluyendo fuentes, colores y disposiciones.</li>
                  <li>Las notas del orador si seleccionaste incluir páginas de notas.</li>
                  <li>La calidad de las imágenes y gráficos, aunque puedes ajustar la resolución para reducir el tamaño del archivo.</li>
                </ul>
                <li>Usa el archivo PDF para:</li>
                <ul class="steps">
                  <li>Distribuir presentaciones que no deben editarse, como informes finales o materiales para clientes.</li>
                  <li>Compartir por correo electrónico, ya que los archivos PDF son universales y mantienen el formato.</li>
                  <li>Imprimir con alta calidad, especialmente si la impresora no es compatible con PowerPoint.</li>
                  <li>Publicar en línea, como en sitios web o plataformas de cursos, donde se necesita un formato estandarizado.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>Exportar a video</h5>
              <ul class="steps">
                <li>Ve a la pestaña <strong>Archivo</strong> y selecciona <strong>Exportar</strong>.</li>
                <li>Selecciona <strong>Crear video</strong> en el panel de exportación.</li>
                <li>Configura las opciones de exportación de video:</li>
                <ul class="steps">
                  <li><strong>Calidad del video</strong>: Elige la resolución del video:</li>
                  <ul class="steps">
                    <li><strong>Ultra HD (4K)</strong>: La máxima calidad, ideal para presentaciones con detalles finos o pantallas grandes.</li>
                    <li><strong>Full HD (1080p)</strong>: Alta calidad para la mayoría de los usos, equilibrando tamaño y claridad.</li>
                    <li><strong>HD (720p)</strong>: Calidad estándar, adecuada para videos más pequeños o para ahorrar espacio.</li>
                    <li><strong>Calidad estándar (480p)</strong>: Para videos con requisitos mínimos de calidad o tamaño reducido.</li>
                  </ul>
                  <li><strong>Temporizador y narraciones</strong>:</li>
                  <ul class="steps">
                    <li><strong>Usar tiempos y narraciones grabados</strong>: Incluye narraciones y tiempos de diapositiva que hayas grabado previamente.</li>
                    <li><strong>No usar tiempos y narraciones grabados</strong>: Crea un video con la duración predeterminada para cada diapositiva.</li>
                  </ul>
                  <li><strong>Segundos por diapositiva</strong>: Si no has grabado tiempos, ingresa el número de segundos que cada diapositiva debe aparecer en el video.</li>
                </ul>
                <li>Haz clic en <strong>Crear video</strong> para generar el archivo.</li>
                <li>PowerPoint procesará la presentación y creará un archivo de video en formato <strong>MP4</strong>, que es compatible con la mayoría de reproductores y plataformas.</li>
                <li>El video incluirá:</li>
                <ul class="steps">
                  <li>Todas las diapositivas en secuencia, con transiciones y animaciones.</li>
                  <li>Narraciones de audio si las has grabado o incluido.</li>
                  <li>Música de fondo o efectos de sonido si los has añadido.</li>
                  <li>El puntero láser o anotaciones si los has usado durante la grabación.</li>
                </ul>
                <li>Usa el video para:</li>
                <ul class="steps">
                  <li>Publicar en <strong>plataformas de video</strong>, como YouTube, Vimeo o redes sociales.</li>
                  <li>Incluir en <strong>cursos en línea</strong> o materiales de capacitación, donde se necesita un formato multimedia.</li>
                  <li>Enviar por correo electrónico o mensajería, especialmente si la presentación incluye animaciones o narraciones.</li>
                  <li>Reproducir en <strong>kioscos o pantallas públicas</strong>, donde se requiere un formato autónomo.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Exportar+a+PDF+y+Video" alt="Exportar a PDF y video en PowerPoint">
                <figcaption>Ejemplo de cómo exportar a PDF y video en PowerPoint 2025. La imagen muestra las opciones para ajustar la calidad, incluir narraciones y seleccionar el rango de diapositivas al exportar.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al exportar a PDF, selecciona <strong>Estructura de tags para accesibilidad</strong> para hacer que tu documento sea más accesible para personas con discapacidades visuales. Al exportar a video, elige una resolución adecuada para el uso previsto: <strong>Full HD (1080p)</strong> es ideal para la mayoría de las presentaciones, mientras que <strong>Ultra HD (4K)</strong> es mejor para pantallas grandes o contenido con muchos detalles.
          </div>
        </div>

        <!-- Publicar en la web -->
        <div class="card">
          <h4>Publicar presentaciones en la web o YouTube</h4>
          <p>Comparte tus presentaciones en línea para llegar a una audiencia más amplia. PowerPoint 2025 facilita la publicación en plataformas web, lo que te permite distribuir tu contenido de manera accesible y atractiva:</p>
          <div class="grid grid-2">
            <div>
              <h5>OneDrive o SharePoint</h5>
              <ul class="steps">
                <li>Guarda tu presentación en OneDrive o SharePoint como se describió en el Módulo 10.</li>
                <li>Comparte el enlace de la presentación con permisos de visualización:</li>
                <ul class="steps">
                  <li>Haz clic en el botón <strong>Compartir</strong> en la esquina superior derecha.</li>
                  <li>Selecciona <strong>Cualquiera con el vínculo puede ver</strong> para generar un enlace público.</li>
                  <li>O ingresa direcciones de correo electrónico específicas si deseas limitar el acceso.</li>
                  <li>Haz clic en <strong>Aplicar</strong> para generar el enlace compartible.</li>
                </ul>
                <li>Configura opciones adicionales para el enlace:</li>
                <ul class="steps">
                  <li><strong>Permitir edición</strong>: Decide si los destinatarios pueden editar la presentación.</li>
                  <li><strong>Establecer fecha de caducidad</strong>: El enlace dejará de funcionar después de la fecha seleccionada.</li>
                  <li><strong>Establecer contraseña</strong>: Requiere una contraseña para acceder al archivo (disponible en algunos planes).</li>
                </ul>
                <li>Usa el enlace para incrustar la presentación en un sitio web:</li>
                <ul class="steps">
                  <li>Abre el enlace en un navegador y haz clic en <strong>Insertar</strong> (si está disponible).</li>
                  <li>Copia el código de inserción proporcionado.</li>
                  <li>Pega el código en el HTML de tu sitio web o blog para incrustar la presentación.</li>
                  <li>La presentación incrustada permitirá a los visitantes ver las diapositivas y navegar entre ellas.</li>
                </ul>
                <li>Beneficios de publicar en OneDrive/SharePoint:</li>
                <ul class="steps">
                  <li><strong>Acceso en cualquier momento</strong>: La presentación está disponible 24/7 para cualquier persona con el enlace.</li>
                  <li><strong>Actualizaciones automáticas</strong>: Los cambios que realices en la presentación se reflejarán automáticamente en el enlace compartido.</li>
                  <li><strong>Sin necesidad de descargas</strong>: Los espectadores pueden ver la presentación directamente en el navegador.</li>
                  <li><strong>Integración con Office Online</strong>: Los usuarios pueden ver la presentación usando PowerPoint para la web sin necesidad de tener la aplicación instalada.</li>
                </ul>
              </ul>
            </div>
            <div>
              <h5>YouTube</h5>
              <ul class="steps">
                <li>Exporta tu presentación a video como se describió anteriormente, seleccionando <strong>Crear video</strong> en la pestaña <strong>Archivo → Exportar</strong>.</li>
                <li>Guarda el video en tu computadora en formato <strong>MP4</strong>.</li>
                <li>Sube el video a YouTube:</li>
                <ul class="steps">
                  <li>Inicia sesión en tu cuenta de YouTube y haz clic en el ícono de la cámara en la esquina superior derecha.</li>
                  <li>Selecciona <strong>Subir video</strong> y arrastra el archivo MP4 a la ventana de carga.</li>
                  <li>Mientras el video se sube, completa la información:</li>
                  <ul class="steps">
                    <li><strong>Título</strong>: Asigna un título descriptivo y atractivo.</li>
                    <li><strong>Descripción</strong>: Añade una descripción detallada, incluyendo palabras clave para SEO.</li>
                    <li><strong>Miniatura</strong>: Selecciona una miniatura llamativa o sube una imagen personalizada.</li>
                    <li><strong>Etiquetas</strong>: Añade etiquetas relevantes para ayudar a los espectadores a encontrar tu video.</li>
                  </ul>
                  <li>Configura la privacidad del video:</li>
                  <ul class="steps">
                    <li><strong>Público</strong>: Cualquiera puede buscar y ver el video.</li>
                    <li><strong>No listado</strong>: Solo las personas con el enlace pueden ver el video (ideal para compartir con grupos específicos).</li>
                    <li><strong>Privado</strong>: Solo tú y los usuarios que invites pueden ver el video.</li>
                  </ul>
                  <li>Haz clic en <strong>Publicar</strong> para completar la carga.</li>
                </ul>
                <li>Comparte el video de YouTube:</li>
                <ul class="steps">
                  <li>Usa el enlace del video para compartirlo por correo electrónico, redes sociales o mensajería.</li>
                  <li>Incrustar el video en un sitio web copiando el código de inserción desde YouTube.</li>
                  <li>Configura opciones avanzadas, como:</li>
                  <ul class="steps">
                    <li><strong>Subtítulos</strong>: Añade subtítulos automáticos o personalizados para mejorar la accesibilidad.</li>
                    <li><strong>Tarjetas y pantallas finales</strong>: Dirige a los espectadores a otros videos o sitios web al final del video.</li>
                    <li><strong>Comentarios</strong>: Decide si permitir comentarios y cómo moderarlos.</li>
                  </ul>
                </ul>
                <li>Beneficios de publicar en YouTube:</li>
                <ul class="steps">
                  <li><strong>Alcance global</strong>: YouTube es la segunda plataforma de búsqueda más grande del mundo, lo que aumenta la visibilidad de tu contenido.</li>
                  <li><strong>Herramientas de análisis</strong>: YouTube Analytics te permite ver métricas como reproducciones, tiempo de visualización y demografía de la audiencia.</li>
                  <li><strong>Monetización</strong>: Puedes ganar ingresos con anuncios si cumples con los requisitos del Programa de Socios de YouTube.</li>
                  <li><strong>Integración con redes sociales</strong>: Comparte fácilmente tus videos en Facebook, Twitter y otras plataformas.</li>
                  <li><strong>Accesibilidad</strong>: YouTube ofrece herramientas para añadir subtítulos y traducciones, haciendo tu contenido accesible a una audiencia global.</li>
                </ul>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/B7472A/FFFFFF?text=Publicar+en+la+Web" alt="Publicar en la web en PowerPoint">
                <figcaption>Ejemplo de cómo publicar presentaciones en YouTube desde PowerPoint 2025. La imagen muestra el proceso de exportar a video, subir a YouTube y configurar opciones de privacidad y compartición.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Al publicar en YouTube, usa un <strong>título descriptivo</strong> y <strong>etiquetas relevantes</strong> para mejorar el SEO y ayudar a los espectadores a encontrar tu video. Considera crear una <strong>miniatura personalizada</strong> que llame la atención y refleje el contenido de la presentación. Si tu video es parte de una serie, organízalos en una <strong>lista de reproducción</strong> para facilitar la navegación.
          </div>
        </div>
      </section>

      <!-- MÓDULO 13: ATAJOS, CONSEJOS Y RECURSOS -->
      <div class="module" id="modulo13">
        <div class="module-icon">
          <i class="fa-solid fa-lightbulb"></i>
          <span>Módulo 13: Atajos, Consejos y Recursos</span>
        </div>
        <h3>Módulo 13. Atajos, Consejos y Recursos</h3>
        <p class="lead">
          Domina atajos de teclado, optimiza el rendimiento de PowerPoint y descubre recursos gratuitos para mejorar tus presentaciones.
          Este módulo te ayudará a trabajar más rápido y eficientemente, con consejos prácticos para presentar en vivo,
          diseñar diapositivas efectivas y acceder a plantillas, íconos y fuentes de alta calidad.
        </p>

        <!-- Atajos de teclado -->
        <div class="card">
          <h4>Atajos de teclado esenciales</h4>
          <p>
            Memoriza estos atajos de teclado para agilizar tu trabajo en PowerPoint y mejorar tu productividad.
            Los atajos te permiten realizar acciones comunes rápidamente, sin necesidad de usar el ratón:
          </p>
          <div class="grid grid-2">
            <div>
              <table>
                <thead>
                  <tr>
                    <th>Atajo</th>
                    <th>Función</th>
                    <th>Contexto</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + N</span></td>
                    <td>Nueva presentación</td>
                    <td>Crea un nuevo archivo de PowerPoint en blanco.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + O</span></td>
                    <td>Abrir presentación</td>
                    <td>Abre un archivo de PowerPoint existente.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + S</span></td>
                    <td>Guardar</td>
                    <td>Guarda los cambios en la presentación actual.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">F12</span></td>
                    <td>Guardar como</td>
                    <td>Abre el cuadro de diálogo para guardar una copia con otro nombre o formato.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + W</span></td>
                    <td>Cerrar presentación</td>
                    <td>Cierra la presentación actual.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">F5</span></td>
                    <td>Iniciar presentación</td>
                    <td>Comienza la presentación desde la primera diapositiva.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Shift + F5</span></td>
                    <td>Iniciar desde diapositiva actual</td>
                    <td>Inicia la presentación desde la diapositiva seleccionada.</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div>
              <table>
                <thead>
                  <tr>
                    <th>Atajo</th>
                    <th>Función</th>
                    <th>Contexto</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="keyboard-shortcut">Esc</span></td>
                    <td>Salir del modo presentación</td>
                    <td>Termina la presentación y vuelve al modo de edición.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + M</span></td>
                    <td>Nueva diapositiva</td>
                    <td>Inserta una nueva diapositiva con el diseño predeterminado.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + D</span></td>
                    <td>Duplicar diapositiva</td>
                    <td>Crea una copia de la diapositiva seleccionada.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + K</span></td>
                    <td>Insertar hipervínculo</td>
                    <td>Abre el cuadro de diálogo para añadir un hipervínculo al elemento seleccionado.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + Shift + C</span></td>
                    <td>Copiar formato</td>
                    <td>Copia el formato (fuente, color, estilo) de un elemento.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + Shift + V</span></td>
                    <td>Pegar formato</td>
                    <td>Aplica el formato copiado al elemento seleccionado.</td>
                  </tr>
                  <tr>
                    <td><span class="keyboard-shortcut">Ctrl + G</span></td>
                    <td>Agrupar objetos</td>
                    <td>Combina múltiples elementos seleccionados en un solo grupo.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://via.placeholder.com/800x450/B7472A/FFFFFF?text=Atajos+de+Teclado" alt="Atajos de teclado en PowerPoint">
            <figcaption>
              Infografía con los atajos de teclado más útiles en PowerPoint 2025, organizados por categorías como navegación, formato, presentación y edición.
            </figcaption>
          </figure>
          <div class="callout ok">
            <strong>Consejo:</strong>
            Para memorizar los atajos de teclado, imprime esta lista y colócala cerca de tu área de trabajo.
            Practica usando los atajos más comunes (como <span class="keyboard-shortcut">Ctrl + S</span> para guardar o <span class="keyboard-shortcut">F5</span> para presentar)
            hasta que se conviertan en un hábito.
          </div>
        </div>

        <!-- Consejos para presentaciones -->
        <div class="card">
          <h4>Consejos para presentaciones en vivo</h4>
          <p>
            Prepara y ejecuta presentaciones efectivas con estos consejos prácticos.
            Desde la preparación técnica hasta la interacción con la audiencia:
          </p>
          <div class="grid grid-2">
            <div>
              <h5>🎤 Preparación</h5>
              <ul class="steps">
                <li><strong>Ensaya varias veces:</strong>
                  <ul class="steps">
                    <li>Practica en voz alta para ajustar ritmo y entonación.</li>
                    <li>Usa un temporizador para mantenerte en el tiempo asignado.</li>
                  </ul>
                </li>
                <li><strong>Verifica equipo y entorno:</strong>
                  <ul class="steps">
                    <li>Prueba proyector, audio y conexiones.</li>
                    <li>Revisa iluminación y acústica del lugar.</li>
                  </ul>
                </li>
              </ul>
            </div>
            <div>
              <h5>📢 Durante la presentación</h5>
              <ul class="steps">
                <li><strong>Mantén contacto visual:</strong>
                  <ul class="steps">
                    <li>No leas diapositivas; úsalas como apoyo.</li>
                    <li>Dirige tu mirada a diferentes partes del público.</li>
                  </ul>
                </li>
                <li><strong>Controla ritmo y voz:</strong>
                  <ul class="steps">
                    <li>Habla despacio y con claridad.</li>
                    <li>Usa pausas para enfatizar ideas clave.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="callout ok">
            <strong>Técnica:</strong>
            Usa el "elevator pitch" para empezar: resume el objetivo en 30 segundos.
          </div>
        </div>

        <!-- Reducir tamaño de archivo -->
        <div class="card">
          <h4>Cómo reducir el tamaño del archivo</h4>
          <p>
            Optimiza tus presentaciones para que sean más ligeras:
          </p>
          <ol class="steps">
            <li><strong>Comprimir imágenes:</strong>
              <ul class="steps">
                <li>Selecciona imagen → Formato → Comprimir imágenes.</li>
                <li>Elige resolución adecuada (96 ppp para pantalla).</li>
              </ul>
            </li>
            <li><strong>Eliminar datos ocultos:</strong>
              <ul class="steps">
                <li>Ve a Archivo → Información → Inspeccionar documento.</li>
              </ul>
            </li>
          </ol>
          <div class="callout warn">
            <strong>Advertencia:</strong>
            Evita fuentes no instaladas en el sistema del destinatario.
          </div>
        </div>

        <!-- Recursos gratuitos -->
        <div class="card">
          <h4>Recursos gratuitos para presentaciones</h4>
          <p>
            Bancos de íconos, tipografías y plantillas:
          </p>
          <div class="grid grid-2">
            <div>
              <h5>🖼️ Íconos y gráficos</h5>
              <ul class="resources">
                <li><a href="https://thenounproject.com" target="_blank">The Noun Project</a></li>
                <li><a href="https://flaticon.com" target="_blank">Flaticon</a></li>
              </ul>
            </div>
            <div>
              <h5>📄 Plantillas</h5>
              <ul class="resources">
                <li><a href="https://slidesgo.com" target="_blank">Slidesgo</a></li>
                <li><a href="https://templates.office.com" target="_blank">Office Templates</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Presentar con control remoto -->
        <div class="card">
          <h4>Presentar con control remoto o móvil</h4>
          <p>
            Apps para controlar presentaciones desde tu smartphone:
          </p>
          <div class="grid grid-2">
            <div>
              <h5>📱 PowerPoint Mobile</h5>
              <ol class="steps">
                <li>Descarga la app <a href="#" target="_blank">PowerPoint Mobile</a>.</li>
                <li>Usa controles táctiles para navegar.</li>
              </ol>
            </div>
            <div>
              <h5>🎮 Apps de terceros</h5>
              <ul class="resources">
                <li><a href="#" target="_blank">Presenter for PowerPoint</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- MÓDULO 14: PRÁCTICAS Y PROYECTOS -->
      <div class="module" id="modulo14">
        <div class="module-icon">
          <i class="fa-solid fa-laptop-code"></i>
          <span>Módulo 14: Prácticas y Proyectos</span>
        </div>
        <h3>Módulo 14. Prácticas y Proyectos</h3>
        <p class="lead">
          Ejercicios prácticos para reforzar tus habilidades en PowerPoint,
          desde presentaciones básicas hasta proyectos multimedia avanzados.
        </p>

        <div class="card">
          <h4>Ejercicios prácticos</h4>
          <p>
            Cada ejercicio incluye objetivos claros y pasos detallados:
          </p>
          <div class="grid grid-3">
            <!-- Ejercicio básico -->
            <div class="exercise">
              <h5>📌 Ejercicio básico: Presentación personal</h5>
              <p><strong>Objetivo:</strong> Crear 5 diapositivas sobre ti.</p>
              <ul class="steps">
                <li><strong>Requisitos:</strong>
                  <ul class="steps">
                    <li>Usa plantilla de <a href="#" target="_blank">Slidesgo</a>.</li>
                    <li>Incluye 1 imagen y 1 forma (ej: flecha).</li>
                  </ul>
                </li>
                <li><strong>Pasos:</strong>
                  <ol class="steps">
                    <li>Diapositiva 1: Portada con nombre y foto.</li>
                    <li>Diapositiva 2: "Sobre mí" con viñetas.</li>
                  </ol>
                </li>
              </ul>
            </div>

            <!-- Ejercicio intermedio -->
            <div class="exercise">
              <h5>📊 Ejercicio intermedio: Exposición educativa</h5>
              <p><strong>Objetivo:</strong> Diseñar 10 diapositivas sobre un tema.</p>
              <ul class="steps">
                <li><strong>Requisitos:</strong>
                  <ul class="steps">
                    <li>Incluye gráfico y animaciones.</li>
                    <li>Añade notas del orador en 3 diapositivas.</li>
                  </ul>
                </li>
              </ul>
            </div>

            <!-- Ejercicio avanzado -->
            <div class="exercise">
              <h5>🎬 Ejercicio avanzado: Presentación multimedia</h5>
              <p><strong>Objetivo:</strong> Crear presentación interactiva.</p>
              <ul class="steps">
                <li><strong>Requisitos:</strong>
                  <ul class="steps">
                    <li>Incrusta video/audio.</li>
                    <li>Usa 3 tipos de animaciones.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="callout ok">
            <strong>Recursos:</strong> Plantillas en <a href="#" target="_blank">Slidesgo</a>.
          </div>
        </div>

        <div class="project-card">
          <h4>Proyecto final: Presentación profesional</h4>
          <p>
            Demuestra todo lo aprendido con una presentación completa:
          </p>
          <ol class="steps">
            <li><strong>Portada:</strong> Título, imagen y logotipo.</li>
            <li><strong>Contenido:</strong> 3 secciones con gráficos.</li>
            <li><strong>Exportación:</strong> Guarda en .pptx y .pdf.</li>
          </ol>
          <div class="callout success">
            <strong>Evaluación:</strong> Comparte tu proyecto en .pptx.
          </div>
        </div>
      </div>

      <!-- MÓDULO 15: STORYTELLING -->
      <div class="module" id="modulo15">
        <div class="module-icon">
          <i class="fa-solid fa-book-open"></i>
          <span>Módulo 15: Diseño Profesional y Storytelling</span>
        </div>
        <h3>Módulo 15. Diseño Profesional y Storytelling Visual</h3>
        <p class="lead">
          Aprende a diseñar presentaciones que conecten emocionalmente con tu audiencia.
        </p>

        <div class="card">
          <h4>Storytelling visual</h4>
          <div class="grid grid-2">
            <div>
              <h5>📖 Estructura narrativa</h5>
              <ol class="steps">
                <li><strong>Introducción:</strong> Presenta un problema.</li>
                <li><strong>Desarrollo:</strong> Datos y ejemplos.</li>
              </ol>
            </div>
            <div>
              <h5>🎨 Técnicas visuales</h5>
              <ul class="steps">
                <li><strong>Metáforas:</strong> Usa imágenes abstractas.</li>
                <li><strong>Secuencias:</strong> Ordena diapositivas.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <h4>Diseño para distintos públicos</h4>
          <div class="grid grid-3">
            <div class="audience-type">
              <h5>🏢 Empresarial</h5>
              <ul class="steps">
                <li><strong>Colores:</strong> Azules o grises.</li>
                <li><strong>Fuentes:</strong> Sans-serif.</li>
              </ul>
            </div>
            <div class="audience-type">
              <h5>🎓 Académico</h5>
              <ul class="steps">
                <li><strong>Colores:</strong> Neutros.</li>
                <li><strong>Fuentes:</strong> Serif.</li>
              </ul>
            </div>
            <div class="audience-type">
              <h5>👩‍🏫 Educativo</h5>
              <ul class="steps">
                <li><strong>Colores:</strong> Brillantes.</li>
                <li><strong>Fuentes:</strong> Redondeadas.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- FOOTER IDÉNTICO AL EJEMPLO -->
      <footer>
        <div class="footer-inner">
          <div>
            <div class="footer-brand">
              <img src="https://cdn-icons-png.flaticon.com/512/732/732221.png" alt="PowerPoint 2025" width="24" height="24">
              <span>Guía Completa de Microsoft PowerPoint 2025</span>
            </div>
            <p class="footer-note">© 2025. Todos los derechos reservados.</p>
            <div class="footer-social">
              <a href="#" title="Facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" title="Twitter" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" title="LinkedIn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" title="YouTube" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div>
            <h5 class="footer-title">Recursos</h5>
            <ul class="footer-list">
              <li><a href="#inicio">Inicio</a></li>
              <li><a href="#modulo1">Módulo 1: Introducción</a></li>
            </ul>
          </div>
          <div>
            <h5 class="footer-title">Módulos Avanzados</h5>
            <ul class="footer-list">
              <li><a href="#modulo13">Atajos y Recursos</a></li>
              <li><a href="#modulo14">Prácticas y Proyectos</a></li>
              <li><a href="#modulo15">Storytelling</a></li>
            </ul>
          </div>
          <div>
            <h5 class="footer-title">Suscríbete</h5>
            <form class="newsletter-form">
              <input type="email" placeholder="Tu correo electrónico">
              <button type="submit">Suscribirse</button>
            </form>
          </div>
        </div>
      </footer>
      <a class="backtop" href="#top" aria-label="Volver al inicio">↑</a>

      <!-- SCRIPTS IDÉNTICOS -->
      <script>
        // Progress bar
        window.addEventListener('scroll', () => {
          const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
          const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
          const scrolled = (winScroll / height) * 100;
          document.getElementById('progressBar').style.width = scrolled + '%';
        });

        // Theme switch
        const themeToggle = document.getElementById('themeToggle');
        themeToggle.addEventListener('change', () => {
          document.body.classList.toggle('dark');
        });

        // Search functionality
        const siteSearch = document.getElementById('siteSearch');
        const searchResults = document.getElementById('searchResults');
        const clearSearch = document.getElementById('clearSearch');
        const searchData = [
          { title: "Atajos, Consejos y Recursos", url: "#modulo13", keywords: "atajos, teclado, consejos, recursos, reducir tamaño, plantillas gratuitas" },
          { title: "Prácticas y Proyectos", url: "#modulo14", keywords: "prácticas, proyectos, ejercicios, presentación personal, portafolio" },
          { title: "Diseño Profesional y Storytelling", url: "#modulo15", keywords: "storytelling, diseño profesional, metáforas visuales, secuencias narrativas, públicos" }
        ];

        siteSearch.addEventListener('input', () => {
          const query = siteSearch.value.toLowerCase();
          if (query.length > 0) {
            const results = searchData.filter(item =>
              item.title.toLowerCase().includes(query) ||
              item.keywords.toLowerCase().includes(query)
            );
            displayResults(results);
          } else {
            searchResults.classList.remove('show');
          }
        });

        function displayResults(results) {
          if (results.length > 0) {
            searchResults.innerHTML = results.map(result =>
              `<a href="${result.url}" class="search-result">${result.title}</a>`
            ).join('');
            searchResults.classList.add('show');
          } else {
            searchResults.innerHTML = '<div class="no-results">No se encontraron resultados.</div>';
            searchResults.classList.add('show');
          }
        }

        // Rest of scripts (identical to your example)
        const tocToggle = document.getElementById('tocToggle');
        const toc = document.getElementById('toc');
        tocToggle.addEventListener('click', () => {
          toc.classList.toggle('show');
          tocToggle.textContent = toc.classList.contains('show') ? '📋 Ocultar tabla de contenidos' : '📋 Mostrar tabla de contenidos';
        });

        const backTop = document.querySelector('.backtop');
        backTop.addEventListener('click', (e) => {
          e.preventDefault();
          window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
              const targetElement = document.querySelector(targetId);
              if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
              }
            }
          });
        });

        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
          themeToggle.checked = true;
          document.body.classList.add('dark');
        }
      </script>
    </main>
  </div>
</body>
</html>
