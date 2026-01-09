<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/732/732221.png" />
  <title>Guía Completa de OneDrive 2025 | Aprende desde Cero hasta Avanzado</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --onedrive-blue: #0078D4;
      --accent: #107C10;
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
    a { color: var(--onedrive-blue); text-decoration: none; }
    a:hover { text-decoration: underline; }
    .container { max-width: var(--container); margin: 0 auto; padding: 0 22px; }
    .progress { position: fixed; top: 0; left: 0; width: 100%; height: 3px; background: transparent; z-index: 1000; }
    .progress .bar { height: 100%; width: 0%; background: linear-gradient(90deg, var(--onedrive-blue), var(--accent)); transition: width 0.3s ease; }
    header { position: sticky; top: 0; z-index: 900; background: color-mix(in srgb, var(--card) 85%, transparent); backdrop-filter: saturate(160%) blur(16px); border-bottom: 1px solid var(--border); box-shadow: 0 1px 0 rgba(0,0,0,.03); }
    .nav { display: flex; align-items: center; justify-content: space-between; max-width: var(--container); margin: 0 auto; padding: 12px 22px; gap: 16px; flex-wrap: wrap; }
    .brand { display: flex; align-items: center; gap: 10px; color: var(--onedrive-blue); font-weight: 700; }
    .brand img { width: 38px; height: 38px; }
    .brand h1 { font-size: 1.1rem; white-space: nowrap; }
    .search { position: relative; flex: 1; max-width: 500px; margin: 0 20px; }
    .searchbox { position: relative; display: flex; align-items: center; background: var(--bg-2); border: 1px solid var(--border); border-radius: 999px; padding: 8px 14px; transition: all var(--speed); box-shadow: inset 0 1px 0 rgba(255,255,255,.7); }
    .searchbox:focus-within { background: #fff; box-shadow: 0 0 0 2px var(--onedrive-blue); }
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
    .theme-switch:hover { border-color: var(--onedrive-blue); }
    .theme-switch .dot { width: 18px; height: 18px; border-radius: 50%; background: var(--onedrive-blue); position: relative; overflow: hidden; }
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
    .toc-toggle:hover { background: var(--bg-2); border-color: var(--onedrive-blue); }
    .wrap { display: grid; grid-template-columns: 280px 1fr; gap: 32px; max-width: var(--container); margin: 32px auto; padding: 0 22px; }
    @media (max-width: 1024px) { .wrap { grid-template-columns: 1fr; } }
    .toc { position: sticky; top: 100px; align-self: start; background: var(--card); border: 1px solid var(--border); border-radius: 14px; padding: 16px; box-shadow: var(--sd4); height: 80vh; overflow-y: auto; }
    .toc h2 { font-size: 1.1rem; margin-bottom: 12px; color: var(--onedrive-blue); }
    .toc ul { list-style: none; padding-left: 0; }
    .toc li { margin: .5rem 0; }
    .toc a { color: var(--txt-2); font-size: .9rem; display: block; padding: 4px 0; border-left: 2px solid transparent; padding-left: 8px; transition: all var(--speed); }
    .toc a:hover { color: var(--txt); border-left-color: var(--onedrive-blue); text-decoration: none; }
    @media (max-width: 1024px) {
      .toc-toggle { display: block; }
      .toc { display: none; position: relative; top: 0; margin-bottom: 24px; }
      .toc.show { display: block; }
    }
    main { min-height: 80vh; }
    .hero { background: linear-gradient(135deg, var(--onedrive-blue), var(--accent)); color: #fff; padding: 64px 32px; border-radius: 14px; margin-bottom: 32px; text-align: center; }
    .hero h2 { font-size: var(--fs-hero); font-weight: 300; margin-bottom: 16px; }
    .hero p { font-size: var(--fs-lg); opacity: .95; max-width: 800px; margin: 0 auto 24px; }
    .actions { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
    .btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; border-radius: 999px; font-weight: 600; background: var(--onedrive-blue); color: #fff; border: 1px solid transparent; transition: all var(--speed); text-decoration: none; }
    .btn:hover { background: color-mix(in srgb, var(--onedrive-blue), black 10%); transform: translateY(-2px); box-shadow: var(--sd8); text-decoration: none; }
    .btn-outline { background: transparent; border-color: rgba(255,255,255,.4); color: #fff; }
    .btn-outline:hover { background: rgba(255,255,255,.1); border-color: rgba(255,255,255,.6); }
    .block { margin-bottom: 64px; }
    .block h3 { font-size: var(--fs-xl); font-weight: 300; color: var(--onedrive-blue); margin-bottom: 16px; border-bottom: 1px solid var(--border); padding-bottom: 8px; }
    .lead { font-size: var(--fs-lg); color: var(--txt-2); margin-bottom: 32px; max-width: 900px; }
    .grid { display: grid; gap: 24px; }
    .grid-2 { grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); }
    .grid-3 { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
    .card { background: var(--card); border: 1px solid var(--border); border-radius: 14px; padding: 24px; box-shadow: var(--sd4); transition: all var(--speed); }
    .card:hover { transform: translateY(-2px); box-shadow: var(--sd8); border-color: var(--onedrive-blue); }
    .card h4 { font-size: 1.25rem; margin-bottom: 12px; color: var(--onedrive-blue); }
    .muted { color: var(--txt-3); font-size: .9rem; }
    .steps { list-style: none; padding-left: 0; }
    .steps li { position: relative; padding-left: 28px; margin-bottom: 12px; }
    .steps li:before { content: ""; position: absolute; left: 0; top: 8px; width: 12px; height: 12px; border-radius: 50%; background: var(--onedrive-blue); }
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
    .footer-social a:hover { background: var(--onedrive-blue); color: #fff; border-color: var(--onedrive-blue); transform: translateY(-2px); }
    .footer-title { font-weight: 600; margin-bottom: 12px; color: var(--onedrive-blue); }
    .footer-list { list-style: none; padding-left: 0; }
    .footer-list li { margin-bottom: 8px; }
    .footer-list a { color: var(--txt-2); transition: color var(--speed); }
    .footer-list a:hover { color: var(--txt); }
    .backtop { position: fixed; bottom: 20px; right: 20px; width: 48px; height: 48px; border-radius: 50%; background: var(--onedrive-blue); color: #fff; display: grid; place-items: center; text-decoration: none; box-shadow: var(--sd8); transition: all var(--speed); z-index: 100; }
    .backtop:hover { transform: translateY(-2px); box-shadow: var(--sd16); text-decoration: none; }
    .visually-hidden { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0; }
    .skip { position: absolute; top: -40px; left: 6px; background: var(--onedrive-blue); color: #fff; padding: 8px; border-radius: 4px; z-index: 1000; transition: top 0.3s; }
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
      border-left: 4px solid var(--onedrive-blue);
    }
    .feature-item h5 {
      font-size: 1rem;
      margin-bottom: 8px;
      color: var(--onedrive-blue);
    }
    .table-responsive {
      overflow-x: auto;
    }
  </style>
</head>
<body id="top">
  <a class="skip" href="#inicio">Saltar al contenido</a>
  <div class="progress" aria-hidden="true"><div class="bar" id="progressBar"></div></div>
  <header>
    <nav class="nav" aria-label="Principal">
      <input type="checkbox" id="menuToggle" class="visually-hidden" aria-hidden="true">
      <input type="checkbox" id="themeToggle" class="visually-hidden" aria-hidden="true">
      <div class="brand">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/OneDrive_logo.svg/1200px-OneDrive_logo.svg.png" alt="Logotipo de OneDrive" width="38" height="38">
        <h1>Guía Completa de OneDrive 2025</h1>
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
        <a href="OneDrive.php">One Drive</a>
        <a href="Word.php">Word</a>
        <a href="Excel.php">Excel</a>
        <a href="PowerPoint.php">PowerPoint</a>
        <a href="Outlook.php">Outlook</a>
        <a href="Access.php">Access</a>
        <a href="Teams.php">Teams</a>
      </div>
    </nav>
  </header>
  <div class="wrap">
    <button class="toc-toggle" id="tocToggle">📋 Mostrar tabla de contenidos</button>
    <aside class="toc" aria-label="Tabla de contenidos" id="toc">
      <h2>Contenido</h2>
      <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#modulo1">Módulo 1: Introducción a OneDrive</a></li>
        <li><a href="#modulo2">Módulo 2: Operaciones Básicas con Archivos</a></li>
        <li><a href="#modulo3">Módulo 3: Sincronización con el Equipo</a></li>
        <li><a href="#modulo4">Módulo 4: Compartir y Colaborar</a></li>
        <li><a href="#modulo5">Módulo 5: Funciones Avanzadas</a></li>
        <li><a href="#modulo6">Módulo 6: Seguridad y Privacidad</a></li>
        <li><a href="#modulo7">Módulo 7: Casos de Uso y Ejercicios</a></li>
      </ul>
    </aside>
    <main>
      <!-- Sección de Inicio -->
      <section class="hero" id="inicio">
        <h2>Guía Completa de OneDrive 2025</h2>
        <p>Domina <strong>OneDrive</strong> con esta guía detallada: desde lo básico hasta funciones avanzadas, sincronización, colaboración, seguridad y más. Incluye ejemplos prácticos, imágenes, consejos y tutoriales paso a paso.</p>
        <div class="actions">
          <a class="btn" href="#modulo1">Comenzar Aprendizaje</a>
          <a class="btn btn-outline" href="#modulo7">Ver Casos Prácticos</a>
        </div>
        <figure class="img-frame">
          <img src="https://mistralaiblackforestprod.blob.core.windows.net/images/blackforest/271a/336d/-d7d/f-4988-a680-09e444969348/image.jpg?se=2025-11-21T21%3A58%3A55Z&sp=r&sv=2025-01-05&sr=b&sig=DefikAw3yJP6keRaTovcqIIdvXccu13PWpQxMlonSNQ%3D" alt="OneDrive: almacenamiento en la nube con sincronización en todos tus dispositivos">
          <figcaption>OneDrive: tu espacio en la nube para guardar, compartir y colaborar en archivos desde cualquier dispositivo.</figcaption>
        </figure>
      </section>

      <!-- Módulo 1: Introducción a OneDrive -->
      <section id="modulo1" class="block">
        <h3>Módulo 1. Introducción a OneDrive</h3>
        <p class="lead">OneDrive es el servicio de almacenamiento en la nube de Microsoft, ideal para guardar, sincronizar y compartir archivos. En este módulo, explorarás qué es OneDrive, sus beneficios, requisitos y cómo acceder desde diferentes dispositivos.</p>

        <!-- ¿Qué es OneDrive? -->
        <div class="card" id="que-es-onedrive">
          <h4>¿Qué es OneDrive?</h4>
          <p><strong>Definición:</strong> OneDrive es un servicio de almacenamiento en la nube desarrollado por Microsoft. Permite guardar archivos, sincronizarlos entre dispositivos y compartirlos con otros usuarios. Está integrado con <strong>Microsoft 365</strong>, facilitando la edición de documentos de Word, Excel y PowerPoint directamente desde la nube.</p>

          <div class="feature-grid">
            <div class="feature-item">
              <h5>Almacenamiento seguro</h5>
              <p>Guarda tus archivos en la nube y accede a ellos desde cualquier lugar con internet.</p>
            </div>
            <div class="feature-item">
              <h5>Sincronización automática</h5>
              <p>Mantén tus archivos actualizados en todos tus dispositivos (PC, móvil, tablet).</p>
            </div>
            <div class="feature-item">
              <h5>Colaboración en tiempo real</h5>
              <p>Comparte archivos y trabaja con otros usuarios al mismo tiempo en documentos de Office.</p>
            </div>
            <div class="feature-item">
              <h5>Integración con Microsoft 365</h5>
              <p>Abre y edita archivos de Word, Excel y PowerPoint sin descargarlos, directamente desde OneDrive.</p>
            </div>
          </div>

          <h5>Diferencias entre OneDrive Personal y OneDrive para Empresas/Escuelas</h5>
          <div class="table-responsive">
            <table>
              <thead>
                <tr>
                  <th>OneDrive Personal</th>
                  <th>OneDrive para Empresas/Escuelas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Diseñado para uso individual.</td>
                  <td>Diseñado para organizaciones (empresas, escuelas).</td>
                </tr>
                <tr>
                  <td>5 GB de almacenamiento gratuito (ampliable con Microsoft 365).</td>
                  <td>1 TB por usuario (incluido en planes empresariales de Microsoft 365).</td>
                </tr>
                <tr>
                  <td>Funciones básicas de compartir y colaborar.</td>
                  <td>Herramientas avanzadas de administración, seguridad y cumplimiento normativo.</td>
                </tr>
                <tr>
                  <td>Ideal para usuarios domésticos.</td>
                  <td>Ideal para equipos de trabajo, con integración a SharePoint y Teams.</td>
                </tr>
              </tbody>
            </table>
          </div>

          <h5>Relación con Microsoft 365</h5>
          <p>OneDrive está <strong>totalmente integrado</strong> con las aplicaciones de Microsoft 365. Esto permite:</p>
          <ul class="steps">
            <li>Crear, editar y guardar documentos de Office directamente en OneDrive.</li>
            <li>Los cambios se guardan automáticamente en la nube.</li>
            <li>Compartir documentos y colaborar en tiempo real con otros usuarios.</li>
          </ul>
        </div>

        <!-- Beneficios de usar OneDrive -->
        <div class="card" id="beneficios-onedrive">
          <h4>Beneficios de usar OneDrive</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Acceso desde cualquier dispositivo:</strong> PC, Mac, móvil o web.</li>
                <li><strong>Copia de seguridad automática:</strong> Protege tus archivos contra pérdidas o eliminaciones accidentales.</li>
                <li><strong>Historial de versiones:</strong> Recupera versiones anteriores de tus archivos (hasta 30 días en cuentas personales).</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Colaboración en tiempo real:</strong> Edita documentos de Office con otros usuarios simultáneamente.</li>
                <li><strong>Compartir archivos fácilmente:</strong> Envía enlaces o invita a otros a colaborar sin adjuntar archivos.</li>
                <li><strong>Integración con Microsoft 365:</strong> Usa OneDrive con Word, Excel, PowerPoint, Teams y Outlook.</li>
              </ul>
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://mistralaiblackforestprod.blob.core.windows.net/images/blackforest/3680/96a9/-c8b/0-473f-a203-6896bfb4491a/image.jpg?se=2025-11-21T21%3A58%3A56Z&sp=r&sv=2025-01-05&sr=b&sig=4GsDFSYnEEs8CZU0OllbIllvGon9MOLtx1ZnLmvCckw%3D" alt="Beneficios de OneDrive">
            <figcaption>OneDrive ofrece acceso multi-dispositivo, copia de seguridad automática y colaboración en tiempo real.</figcaption>
          </figure>
        </div>

        <!-- Requisitos para usar OneDrive -->
        <div class="card" id="requisitos-onedrive">
          <h4>Requisitos para usar OneDrive</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Cuenta de Microsoft:</strong> Necesitas una cuenta de Microsoft (Outlook, Hotmail, Live o cuenta institucional).</li>
                <li><strong>Espacio de almacenamiento:</strong> OneDrive ofrece 5 GB gratis. Puedes ampliarlo con planes de Microsoft 365.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Acceso a internet:</strong> Para sincronizar y acceder a tus archivos en la nube.</li>
                <li><strong>Dispositivos compatibles:</strong> Windows, Mac, Android, iOS o navegador web.</li>
              </ul>
            </div>
          </div>

          <h5>Planes de almacenamiento</h5>
          <div class="table-responsive">
            <table>
              <thead>
                <tr>
                  <th>Plan</th>
                  <th>Almacenamiento</th>
                  <th>Costo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>OneDrive Gratis</td>
                  <td>5 GB</td>
                  <td>$0</td>
                </tr>
                <tr>
                  <td>Microsoft 365 Personal</td>
                  <td>1 TB</td>
                  <td>$69.99/año</td>
                </tr>
                <tr>
                  <td>Microsoft 365 Familia (hasta 6 usuarios)</td>
                  <td>1 TB por usuario</td>
                  <td>$99.99/año</td>
                </tr>
                <tr>
                  <td>OneDrive para Empresas (Plan 1)</td>
                  <td>1 TB</td>
                  <td>Incluido en Microsoft 365 Business</td>
                </tr>
                <tr>
                  <td>OneDrive para Empresas (Plan 2)</td>
                  <td>Almacenamiento ilimitado</td>
                  <td>Incluido en Microsoft 365 Enterprise</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Si usas Microsoft 365, OneDrive ya está incluido con 1 TB de almacenamiento por usuario.
          </div>
        </div>

        <!-- Formas de acceder a OneDrive -->
        <div class="card" id="acceder-onedrive">
          <h4>Formas de acceder a OneDrive</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Navegador web:</strong> Inicia sesión en <a href="https://onedrive.live.com" target="_blank">onedrive.live.com</a>.</li>
                <li><strong>Windows:</strong> Usa la carpeta OneDrive en el Explorador de Archivos.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Aplicación móvil:</strong> Descarga la app para <a href="https://play.google.com/store/apps/details?id=com.microsoft.skydrive" target="_blank">Android</a> o <a href="https://apps.apple.com/mx/app/onedrive/id477537958" target="_blank">iOS</a>.</li>
                <li><strong>Mac:</strong> Descarga OneDrive desde la <a href="https://apps.apple.com/mx/app/onedrive/id823766827" target="_blank">Mac App Store</a>.</li>
              </ul>
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://mistralaiblackforestprod.blob.core.windows.net/images/blackforest/36af/bb5d/-637/a-4686-b365-070809c07daf/image.jpg?se=2025-11-21T21%3A58%3A55Z&sp=r&sv=2025-01-05&sr=b&sig=ldQfAQXj1VWIByKqVvlSqCqtSv9fQEyUR/Udq6BVLgQ%3D" alt="Acceso a OneDrive desde diferentes dispositivos">
            <figcaption>Accede a OneDrive desde el navegador, Windows, móvil o Mac.</figcaption>
          </figure>
        </div>

        <!-- Interfaz general de OneDrive Web -->
        <div class="card" id="interfaz-onedrive">
          <h4>Interfaz general de OneDrive Web</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Barra de navegación:</strong> Acceso rápido a Archivos, Fotos, Compartido y Papelera.</li>
                <li><strong>Vista de archivos:</strong> Organiza y visualiza tus archivos en diferentes formatos (iconos, lista, detalles).</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Botones principales:</strong> Nuevo, Cargar, Compartir, Eliminar, Mover a, Copiar a.</li>
                <li><strong>Búsqueda:</strong> Busca archivos por nombre o contenido.</li>
              </ul>
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://mistralaiblackforestprod.blob.core.windows.net/images/blackforest/3680/96a9/-c8b/0-473f-a203-6896bfb4491a/image.jpg?se=2025-11-21T21%3A58%3A56Z&sp=r&sv=2025-01-05&sr=b&sig=4GsDFSYnEEs8CZU0OllbIllvGon9MOLtx1ZnLmvCckw%3D" alt="Interfaz de OneDrive Web">
            <figcaption>Interfaz de OneDrive Web: barra de navegación, vista de archivos y botones principales.</figcaption>
          </figure>
        </div>
      </section>

      <!-- Módulo 2: Operaciones básicas con archivos -->
      <section id="modulo2" class="block">
        <h3>Módulo 2. Operaciones Básicas con Archivos</h3>
        <p class="lead">Aprende a crear, subir, organizar y buscar archivos en OneDrive. Este módulo cubre las operaciones esenciales para manejar tu información en la nube.</p>

        <!-- Crear elementos en OneDrive -->
        <div class="card" id="crear-elementos">
          <h4>Crear elementos en OneDrive</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Crear carpetas:</strong> Haz clic en <strong>Nuevo → Carpeta</strong> y asigna un nombre.</li>
                <li><strong>Crear archivos de Office:</strong> Usa el botón <strong>Nuevo</strong> para crear documentos de Word, Excel, PowerPoint o OneNote.</li>
              </ul>
            </div>
            <div>
              <figure class="img-frame">
                <img src="https://mistralaiblackforestprod.blob.core.windows.net/images/blackforest/e426/3e7d/-081/d-4588-a803-caa1b8818119/image.jpg?se=2025-11-21T21%3A59%3A00Z&sp=r&sv=2025-01-05&sr=b&sig=hFxF59QR7qGyK4R6Ul/D4F9ZcbpGlPxDy7jP6q/Li1M%3D" alt="Crear carpetas y archivos en OneDrive">
                <figcaption>Crea carpetas y archivos de Office en OneDrive desde el botón "Nuevo".</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Subir archivos y carpetas -->
        <div class="card" id="subir-archivos">
          <h4>Subir archivos y carpetas</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Botón Cargar:</strong> Haz clic en <strong>Cargar → Archivos</strong> o <strong>Cargar → Carpeta</strong>.</li>
                <li><strong>Arrastrar y soltar:</strong> Arrastra archivos desde tu computadora a la ventana de OneDrive.</li>
              </ul>
            </div>
            <div>
              <figure class="img-frame">
                <img src="https://i.imgur.com/JQZ5X7l.png" alt="Subir archivos a OneDrive">
                <figcaption>Sube archivos a OneDrive usando el botón "Cargar" o arrastrando y soltando.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout info">
            <strong>Límite de tamaño:</strong> OneDrive permite subir archivos de hasta 250 GB, pero se recomienda dividir archivos muy grandes.
          </div>
        </div>

        <!-- Organizar información -->
        <div class="card" id="organizar-archivos">
          <h4>Organizar información</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Renombrar:</strong> Selecciona el archivo y haz clic en <strong>Renombrar</strong> (o presiona <span class="keyboard-shortcut">F2</span>).</li>
                <li><strong>Mover:</strong> Usa <strong>Mover a</strong> para cambiar la ubicación del archivo.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Copiar:</strong> Usa <strong>Copiar a</strong> para duplicar archivos en otra carpeta.</li>
                <li><strong>Eliminar:</strong> Selecciona el archivo y haz clic en <strong>Eliminar</strong> (se envía a la papelera).</li>
              </ul>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa carpetas por proyectos o temas para mantener todo organizado.
          </div>
        </div>

        <!-- Buscar y filtrar archivos -->
        <div class="card" id="buscar-archivos">
          <h4>Buscar y filtrar archivos</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Cuadro de búsqueda:</strong> Escribe el nombre o contenido del archivo.</li>
                <li><strong>Ordenar:</strong> Por nombre, fecha de modificación o tamaño.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Filtrar:</strong> Por tipo de archivo (Documentos, Imágenes, Videos) o fecha.</li>
                <li><strong>Vista reciente:</strong> Accede rápidamente a los archivos abiertos últimamente.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Visualizar archivos -->
        <div class="card" id="visualizar-archivos">
          <h4>Visualizar archivos</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Vista previa:</strong> Haz clic en un archivo para ver su contenido en línea.</li>
                <li><strong>Abrir en aplicación:</strong> Usa el botón <strong>Abrir</strong> para editar en Word, Excel, etc.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Vista en navegador:</strong> Edita documentos directamente en la web.</li>
                <li><strong>Descargar:</strong> Guarda una copia local del archivo.</li>
              </ul>
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://i.imgur.com/5XJQZ9P.png" alt="Visualizar archivos en OneDrive">
            <figcaption>Visualiza archivos en OneDrive sin descargarlos, directamente en el navegador.</figcaption>
          </figure>
        </div>
      </section>

      <!-- Módulo 3: Sincronización con el equipo -->
      <section id="modulo3" class="block">
        <h3>Módulo 3. Sincronización con el Equipo</h3>
        <p class="lead">Aprende a sincronizar OneDrive con tu computadora para trabajar sin conexión y mantener tus archivos actualizados en todos tus dispositivos.</p>

        <!-- Instalar y configurar el cliente de OneDrive -->
        <div class="card" id="instalar-onedrive">
          <h4>Instalar y configurar el cliente de OneDrive</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Verificar instalación:</strong> OneDrive viene preinstalado en Windows 10/11. Búscalo en el menú Inicio.</li>
                <li><strong>Descargar:</strong> Si no lo tienes, descárgalo desde <a href="https://www.microsoft.com/es-es/microsoft-365/onedrive/download" target="_blank">Microsoft</a>.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Iniciar sesión:</strong> Usa tu cuenta de Microsoft (personal o de trabajo/escuela).</li>
                <li><strong>Configurar sincronización:</strong> Elige qué carpetas sincronizar con tu dispositivo.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Carpeta OneDrive en el explorador de archivos -->
        <div class="card" id="carpeta-onedrive">
          <h4>Carpeta OneDrive en el explorador de archivos</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Ubicación:</strong> En Windows: <code>C:\Users\[TuUsuario]\OneDrive</code>.</li>
                <li><strong>Iconos de sincronización:</strong>
                  <ul class="steps">
                    <li>✅ Verde: Archivo sincronizado.</li>
                    <li>🔄 Azul: Sincronizando.</li>
                    <li>❌ Rojo: Error de sincronización.</li>
                    <li>☁️ Blanco: Solo en línea (no descargado).</li>
                  </ul>
                </li>
              </ul>
            </div>
            <div>
              <figure class="img-frame">
                <img src="https://i.imgur.com/JQZ5X7l.png" alt="Carpeta OneDrive en el explorador de archivos">
                <figcaption>La carpeta OneDrive en el explorador de archivos muestra iconos de sincronización.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Configurar qué se sincroniza -->
        <div class="card" id="configurar-sincronizacion">
          <h4>Configurar qué se sincroniza</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Elegir carpetas:</strong> Haz clic derecho en el icono de OneDrive en la barra de tareas y selecciona <strong>Configuración → Cuenta → Elegir carpetas</strong>.</li>
                <li><strong>Pausar sincronización:</strong> Útil para ahorrar ancho de banda.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Verificar estado:</strong> Desde el icono de OneDrive en la barra de tareas.</li>
                <li><strong>Sincronización selectiva:</strong> Solo sincroniza las carpetas que necesites.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Trabajar sin conexión -->
        <div class="card" id="trabajar-offline">
          <h4>Trabajar sin conexión (Offline)</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Archivos disponibles sin conexión:</strong> Haz clic derecho en el archivo y selecciona <strong>Disponible sin conexión</strong>.</li>
                <li><strong>Cambios sincronizados:</strong> Al reconectarte a internet, los cambios se actualizan automáticamente.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>OneDrive en móviles:</strong> Instala la app para acceder a tus archivos desde cualquier lugar.</li>
                <li><strong>Copia de seguridad de fotos:</strong> Configura la app para respaldar automáticamente tus fotos.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- OneDrive en dispositivos móviles -->
        <div class="card" id="onedrive-moviles">
          <h4>OneDrive en dispositivos móviles</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Instalación:</strong> Descarga la app para <a href="https://play.google.com/store/apps/details?id=com.microsoft.skydrive" target="_blank">Android</a> o <a href="https://apps.apple.com/mx/app/onedrive/id477537958" target="_blank">iOS</a>.</li>
                <li><strong>Inicio de sesión:</strong> Usa tu cuenta de Microsoft.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Subir fotos:</strong> Configura la copia de seguridad automática de la cámara.</li>
                <li><strong>Acceso a archivos:</strong> Visualiza, edita y comparte archivos desde tu móvil.</li>
              </ul>
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://i.imgur.com/5XJQZ9P.png" alt="OneDrive en dispositivos móviles">
            <figcaption>Usa la app de OneDrive en tu móvil para acceder a archivos y respaldar fotos automáticamente.</figcaption>
          </figure>
        </div>
      </section>

      <!-- Módulo 4: Compartir y colaborar -->
      <section id="modulo4" class="block">
        <h3>Módulo 4. Compartir y Colaborar</h3>
        <p class="lead">Aprende a compartir archivos y carpetas, y a colaborar en tiempo real con otros usuarios. Ideal para equipos de trabajo, proyectos académicos o uso personal.</p>

        <!-- Conceptos de compartir -->
        <div class="card" id="conceptos-compartir">
          <h4>Conceptos de compartir</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Privado vs. compartido:</strong> Por defecto, tus archivos son privados. Puedes compartirlos con otros usuarios.</li>
                <li><strong>Permisos:</strong> Elige entre <strong>solo lectura</strong> (ver) o <strong>edición</strong>.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Enlace de acceso:</strong> Genera un enlace para compartir sin adjuntar archivos.</li>
                <li><strong>Invitación por correo:</strong> Envía una invitación a usuarios específicos.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Compartir un archivo o carpeta -->
        <div class="card" id="compartir-archivos">
          <h4>Compartir un archivo o carpeta</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Desde OneDrive Web:</strong> Selecciona el archivo y haz clic en <strong>Compartir</strong>.</li>
                <li><strong>Invitación por correo:</strong> Ingresa las direcciones de los destinatarios.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Generar enlace:</strong> Configura permisos (edición, solo lectura, vencimiento).</li>
                <li><strong>Desde el explorador:</strong> Haz clic derecho en el archivo y selecciona <strong>Compartir</strong>.</li>
              </ul>
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://i.imgur.com/JQZ5X7l.png" alt="Compartir archivos en OneDrive">
            <figcaption>Compartir archivos en OneDrive: invitación por correo y generación de enlaces.</figcaption>
          </figure>
        </div>

        <!-- Administrar elementos compartidos -->
        <div class="card" id="administrar-compartidos">
          <h4>Administrar elementos compartidos</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Ver archivos compartidos:</strong> En la sección <strong>Compartido</strong>.</li>
                <li><strong>Cambiar permisos:</strong> De editor a solo lectura o revocar acceso.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Dejar de compartir:</strong> Elimina el enlace o los permisos de los usuarios.</li>
                <li><strong>Archivos compartidos contigo:</strong> Accede a lo que otros han compartido contigo.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Colaboración en tiempo real -->
        <div class="card" id="colaboracion-tiempo-real">
          <h4>Colaboración en tiempo real</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Edición simultánea:</strong> Abre el archivo en Word, Excel o PowerPoint en línea.</li>
                <li><strong>Ver quién está editando:</strong> Los cambios se muestran en tiempo real.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Comentarios:</strong> Deja comentarios para discutir cambios.</li>
                <li><strong>Sugerencias:</strong> Propón ediciones sin modificar el documento original.</li>
              </ul>
            </div>
          </div>
          <div class="callout ok">
            <strong>Consejo:</strong> Usa nombres claros para tus archivos y organiza las carpetas por proyecto o equipo.
          </div>
        </div>

        <!-- Buenas prácticas de colaboración -->
        <div class="card" id="buenas-practicas-colaboracion">
          <h4>Buenas prácticas de colaboración</h4>
          <ul class="steps">
            <li>Usa <strong>nombres claros</strong> para archivos y carpetas.</li>
            <li>Crea <strong>carpetas por proyecto</strong> o equipo de trabajo.</li>
            <li>Evita versiones duplicadas (ej: "v1", "v2", "final-final").</li>
            <li>Usa <strong>comentarios</strong> para comunicarte con los colaboradores.</li>
          </ul>
        </div>
      </section>

      <!-- Módulo 5: Funciones avanzadas -->
      <section id="modulo5" class="block">
        <h3>Módulo 5. Funciones Avanzadas de Organización y Productividad</h3>
        <p class="lead">Profundiza en herramientas que mejoran tu productividad: versiones de archivos, integración con Microsoft 365, búsqueda avanzada y más.</p>

        <!-- Vistas y secciones especiales -->
        <div class="card" id="vistas-especiales">
          <h4>Vistas y secciones especiales en OneDrive</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Recientes:</strong> Archivos abiertos últimamente.</li>
                <li><strong>Compartido:</strong> Archivos que has compartido o que otros han compartido contigo.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Papelera de reciclaje:</strong> Recupera archivos eliminados (se conservan 30 días).</li>
                <li><strong>Para ti:</strong> Recomendaciones basadas en tu actividad.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Versiones de archivos -->
        <div class="card" id="versiones-archivos">
          <h4>Versiones de archivos</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Ver historial:</strong> Haz clic derecho en el archivo y selecciona <strong>Historial de versiones</strong>.</li>
                <li><strong>Recuperar versión:</strong> Selecciona una versión anterior y haz clic en <strong>Restaurar</strong>.</li>
              </ul>
            </div>
            <div>
              <figure class="img-frame">
                <img src="https://i.imgur.com/5XJQZ9P.png" alt="Historial de versiones en OneDrive">
                <figcaption>Recupera versiones anteriores de tus archivos en OneDrive.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Integración con Microsoft 365 -->
        <div class="card" id="integracion-microsoft365">
          <h4>Integración con Microsoft 365</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Guardar en OneDrive:</strong> Desde Word, Excel o PowerPoint, guarda directamente en OneDrive.</li>
                <li><strong>Acceder desde Teams:</strong> Usa archivos de OneDrive en canales de Teams.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Adjuntar desde Outlook:</strong> Envía enlaces a archivos de OneDrive en lugar de adjuntos.</li>
                <li><strong>Edición en línea:</strong> Abre y edita documentos directamente en el navegador.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Búsqueda avanzada -->
        <div class="card" id="busqueda-avanzada">
          <h4>Búsqueda avanzada</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Búsqueda por contenido:</strong> OneDrive busca dentro de los documentos.</li>
                <li><strong>Filtrar por tipo:</strong> Documentos, imágenes, videos, etc.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Filtrar por persona:</strong> Archivos modificados o compartidos por alguien.</li>
                <li><strong>Ordenar:</strong> Por fecha, nombre o tamaño.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Atajos y trucos -->
        <div class="card" id="atajos-trucos">
          <h4>Atajos y trucos</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Arrastrar archivos:</strong> Desde el correo o el escritorio a OneDrive.</li>
                <li><strong>Anclar carpetas:</strong> Accede rápidamente a las carpetas importantes.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Accesos directos:</strong> Crea shortcuts a carpetas de otros usuarios.</li>
                <li><strong>OneDrive en el correo:</strong> Adjunta archivos como enlaces de OneDrive.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Módulo 6: Seguridad y privacidad -->
      <section id="modulo6" class="block">
        <h3>Módulo 6. Seguridad, Privacidad y Administración</h3>
        <p class="lead">Protege tus archivos y datos con herramientas de seguridad avanzadas, como la Bóveda Personal, autenticación en dos pasos y permisos de acceso.</p>

        <!-- Seguridad en OneDrive -->
        <div class="card" id="seguridad-onedrive">
          <h4>Seguridad en OneDrive</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Cifrado:</strong> Tus datos están cifrados en tránsito y en reposo.</li>
                <li><strong>Autenticación en dos pasos:</strong> Añade una capa extra de seguridad a tu cuenta.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Bóveda Personal:</strong> Guarda archivos sensibles con protección adicional.</li>
                <li><strong>Permisos:</strong> Controla quién puede ver o editar tus archivos.</li>
              </ul>
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://i.imgur.com/5XJQZ9P.png" alt="Seguridad en OneDrive">
            <figcaption>OneDrive protege tus archivos con cifrado, autenticación en dos pasos y la Bóveda Personal.</figcaption>
          </figure>
        </div>

        <!-- OneDrive Personal Vault -->
        <div class="card" id="personal-vault">
          <h4>OneDrive Personal Vault</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Habilitar la Bóveda:</strong> Ve a <strong>Configuración → Opciones → Bóveda Personal</strong>.</li>
                <li><strong>Archivos recomendados:</strong> Documentos de identidad, contratos, información financiera.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Acceso seguro:</strong> Requiere verificación en dos pasos para abrir.</li>
                <li><strong>Cierre automático:</strong> La bóveda se bloquea después de un tiempo de inactividad.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Permisos y control de acceso -->
        <div class="card" id="permisos-acceso">
          <h4>Permisos y control de acceso</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Permisos de edición:</strong> Decide si los usuarios pueden editar o solo ver.</li>
                <li><strong>Enlaces con vencimiento:</strong> Configura una fecha límite para el acceso.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Compartir con externos:</strong> Usa contraseñas para enlaces compartidos con personas fuera de tu organización.</li>
                <li><strong>Revocación de acceso:</strong> Elimina permisos cuando ya no sean necesarios.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Buenas prácticas de seguridad -->
        <div class="card" id="buenas-practicas-seguridad">
          <h4>Buenas prácticas de seguridad</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Contraseñas seguras:</strong> Usa combinaciones complejas y únicas.</li>
                <li><strong>Identificar phishing:</strong> No abras enlaces o archivos sospechosos.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Cuenta comprometida:</strong> Cambia tu contraseña y revisa la actividad reciente.</li>
                <li><strong>Actualizaciones:</strong> Mantén tu sistema y apps actualizados.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Administración para organizaciones -->
        <div class="card" id="administracion-empresas">
          <h4>Administración para organizaciones (OneDrive para empresas)</h4>
          <ul class="steps">
            <li><strong>Rol del administrador:</strong> Gestiona políticas de almacenamiento y seguridad.</li>
            <li><strong>Políticas de almacenamiento:</strong> Configura retención y eliminación de datos.</li>
            <li><strong>Integración con SharePoint y Teams:</strong> Colabora en proyectos y equipos.</li>
          </ul>
        </div>
      </section>

      <!-- Módulo 7: Casos de uso y ejercicios -->
      <section id="modulo7" class="block">
        <h3>Módulo 7. Casos de Uso y Ejercicios Prácticos</h3>
        <p class="lead">Aplica lo aprendido con ejemplos reales: respaldar fotos, colaborar en documentos, proteger archivos sensibles y más.</p>

        <!-- Escenarios típicos -->
        <div class="card" id="escenarios-tipicos">
          <h4>Escenarios típicos</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Respaldo de fotos:</strong> Configura la app móvil para respaldar automáticamente tus fotos.</li>
                <li><strong>Trabajo en equipo:</strong> Comparte una carpeta de proyecto con tu equipo y colabora en tiempo real.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Material académico:</strong> Comparte apuntes y tareas con tus compañeros o alumnos.</li>
                <li><strong>Contratos con proveedores:</strong> Envía enlaces seguros a documentos importantes.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Ejercicios prácticos -->
        <div class="card" id="ejercicios-practicos">
          <h4>Ejercicios prácticos</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Crear una carpeta de proyecto:</strong> Sube archivos y compártela con un compañero.</li>
                <li><strong>Sincronizar en PC y laptop:</strong> Verifica que los archivos se actualicen en ambos dispositivos.</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Recuperar una versión anterior:</strong> Modifica un archivo y restaura una versión previa.</li>
                <li><strong>Proteger un documento:</strong> Guarda un archivo sensible en la Bóveda Personal.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Checklist de dominio -->
        <div class="card" id="checklist-dominio">
          <h4>Checklist de dominio</h4>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li>¿Sabes cómo subir y organizar archivos?</li>
                <li>¿Puedes sincronizar OneDrive con tu computadora?</li>
                <li>¿Conoces cómo compartir archivos y colaborar?</li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li>¿Puedes recuperar versiones anteriores de un archivo?</li>
                <li>¿Sabes cómo proteger tus archivos con la Bóveda Personal?</li>
                <li>¿Has practicado con los ejercicios propuestos?</li>
              </ul>
            </div>
          </div>
          <div class="callout ok">
            <strong>Autoevaluación:</strong> Si respondiste "sí" a la mayoría, ¡estás listo para usar OneDrive como un profesional!
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-inner">
      <div>
        <div class="footer-brand">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/OneDrive_logo.svg/1200px-OneDrive_logo.svg.png" width="24" height="24" alt="OneDrive">
          <span>Guía Completa de OneDrive 2025</span>
        </div>
        <p class="footer-note">Domina OneDrive con ejemplos prácticos, desde lo básico hasta funciones avanzadas, sincronización, colaboración y seguridad.</p>
        <div class="footer-social" aria-label="Redes sociales">
          <a href="#" aria-label="Twitter/X" title="Twitter/X">
            <i class="fa-brands fa-x-twitter"></i>
          </a>
          <a href="#" aria-label="LinkedIn" title="LinkedIn">
            <i class="fa-brands fa-linkedin-in"></i>
          </a>
          <a href="#" aria-label="YouTube" title="YouTube">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
      <div>
        <div class="footer-title">Módulos</div>
        <ul class="footer-list">
          <li><a href="#modulo1">1. Introducción a OneDrive</a></li>
          <li><a href="#modulo2">2. Operaciones Básicas</a></li>
          <li><a href="#modulo3">3. Sincronización</a></li>
          <li><a href="#modulo4">4. Compartir y Colaborar</a></li>
          <li><a href="#modulo5">5. Funciones Avanzadas</a></li>
          <li><a href="#modulo6">6. Seguridad y Privacidad</a></li>
          <li><a href="#modulo7">7. Casos de Uso</a></li>
        </ul>
      </div>
      <div>
        <div class="footer-title">Recursos</div>
        <ul class="footer-list">
          <li><a href="https://support.microsoft.com/es-es/onedrive" target="_blank">Soporte de Microsoft</a></li>
          <li><a href="https://www.microsoft.com/es-es/microsoft-365/onedrive" target="_blank">OneDrive Online</a></li>
        </ul>
      </div>
      <div>
        <div class="footer-title">Contacto</div>
        <ul class="footer-list">
          <li><a href="mailto:info@onedriveguia.com">info@onedriveguia.com</a></li>
          <li>© 2025 Guía de OneDrive</li>
        </ul>
      </div>
    </div>
  </footer>
  <a class="backtop" href="#top" aria-label="Volver arriba">↑</a>

  <!-- Scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const searchData = [
        { title: "Introducción a OneDrive", href: "#modulo1", description: "Qué es OneDrive, beneficios, requisitos y cómo acceder." },
        { title: "Operaciones Básicas con Archivos", href: "#modulo2", description: "Crear, subir, organizar y buscar archivos en OneDrive." },
        { title: "Sincronización con el Equipo", href: "#modulo3", description: "Sincronizar OneDrive con Windows, Mac y móviles." },
        { title: "Compartir y Colaborar", href: "#modulo4", description: "Compartir archivos, colaborar en tiempo real y gestionar permisos." },
        { title: "Funciones Avanzadas", href: "#modulo5", description: "Versiones de archivos, integración con Microsoft 365 y búsqueda avanzada." },
        { title: "Seguridad y Privacidad", href: "#modulo6", description: "Bóveda Personal, permisos, autenticación en dos pasos y buenas prácticas." },
        { title: "Casos de Uso y Ejercicios", href: "#modulo7", description: "Ejemplos prácticos y ejercicios para dominar OneDrive." }
      ];
      const searchInput = document.getElementById('siteSearch');
      const searchResults = document.getElementById('searchResults');
      const clearSearch = document.getElementById('clearSearch');
      function showSearchResults(query) {
        searchResults.innerHTML = '';
        if (!query) {
          searchResults.classList.remove('show');
          return;
        }
        const filtered = searchData.filter(item =>
          item.title.toLowerCase().includes(query.toLowerCase()) ||
          item.description.toLowerCase().includes(query.toLowerCase())
        );
        if (filtered.length > 0) {
          filtered.forEach(item => {
            const resultItem = document.createElement('a');
            resultItem.href = item.href;
            resultItem.className = 'search-result';
            resultItem.innerHTML = `
              <strong>${item.title}</strong>
              <p>${item.description}</p>
            `;
            searchResults.appendChild(resultItem);
          });
          searchResults.classList.add('show');
        } else {
          const noResults = document.createElement('div');
          noResults.className = 'no-results';
          noResults.textContent = 'No se encontraron resultados.';
          searchResults.appendChild(noResults);
          searchResults.classList.add('show');
        }
      }
      searchInput.addEventListener('input', () => {
        showSearchResults(searchInput.value);
      });
      clearSearch.addEventListener('click', () => {
        searchInput.value = '';
        searchResults.classList.remove('show');
        searchInput.focus();
      });
      document.addEventListener('click', (e) => {
        if (!e.target.closest('.search')) {
          searchResults.classList.remove('show');
        }
      });
      window.addEventListener('scroll', function() {
        const winHeight = window.innerHeight;
        const docHeight = document.documentElement.scrollHeight;
        const scrollTop = window.pageYOffset;
        const trackLength = docHeight - winHeight;
        const progress = Math.floor(scrollTop / trackLength * 100);
        document.getElementById('progressBar').style.width = progress + '%';
      });
      const themeToggle = document.getElementById('themeToggle');
      themeToggle.addEventListener('change', function() {
        document.body.classList.toggle('theme-dark', this.checked);
        localStorage.setItem('theme', this.checked ? 'dark' : 'light');
      });
      if (localStorage.getItem('theme') === 'dark') {
        themeToggle.checked = true;
        document.body.classList.add('theme-dark');
      }
      const backTop = document.querySelector('.backtop');
      window.addEventListener('scroll', function() {
        backTop.style.display = window.pageYOffset > 300 ? 'grid' : 'none';
      });
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
          }
        });
      });
      const tocToggle = document.getElementById('tocToggle');
      const toc = document.getElementById('toc');
      tocToggle.addEventListener('click', function() {
        toc.classList.toggle('show');
        const isExpanded = toc.classList.contains('show');
        tocToggle.textContent = isExpanded ? '📋 Ocultar tabla de contenidos' : '📋 Mostrar tabla de contenidos';
      });
      if (window.innerWidth <= 1024) {
        toc.classList.remove('show');
      }
      window.addEventListener('resize', function() {
        if (window.innerWidth <= 1024) {
          toc.classList.remove('show');
          tocToggle.textContent = '📋 Mostrar tabla de contenidos';
        } else {
          toc.classList.add('show');
        }
      });
    });
  </script>
</body>
</html>
