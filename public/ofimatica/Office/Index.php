<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="color-scheme" content="light dark" />
  <meta name="description" content="Guía completa y actualizada de Microsoft Office 2025: aprende Word, Excel, PowerPoint, Outlook, Access, OneNote, Publisher, IA, automatización, seguridad y más con ejemplos prácticos, imágenes y tutoriales." />
  <meta name="keywords" content="Microsoft Office, Word, Excel, PowerPoint, Outlook, Access, OneNote, Publisher, Microsoft 365, Office 2025, guía, tutorial, atajos, instalación, nube, seguridad, IA, Copilot, automatización, plantillas, colaboración" />
  <meta property="og:title" content="Guía Completa de Microsoft Office 2025 | Aprende Todo sobre Office" />
  <meta property="og:description" content="Domina Microsoft Office con esta guía detallada: desde lo básico hasta funciones avanzadas, IA, automatización y seguridad. Incluye ejemplos, imágenes y consejos prácticos." />
  <meta property="og:image" content="https://via.placeholder.com/1200x630/0078D4/FFFFFF?text=Guía+Completa+de+Microsoft+Office+2025" />
  <title>Guía Completa de Microsoft Office 2025 | Aprende Todo sobre Office</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Segoe+UI:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/732/732221.png" />
  <style>
    :root {
      --word: #185ABD;
      --excel: #107C10;
      --powerpoint: #D24726;
      --outlook: #0078D4;
      --access: #A4373A;
      --onenote: #80397B;
      --publisher: #077568;
      --teams: #6264A7;
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
      --container: 1200px;
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
    a { color: var(--info); text-decoration: none; }
    a:hover { text-decoration: underline; }
    .container { max-width: var(--container); margin: 0 auto; padding: 0 22px; }
    .progress { position: fixed; top: 0; left: 0; width: 100%; height: 3px; background: transparent; z-index: 1000; }
    .progress .bar { height: 100%; width: 0%; background: linear-gradient(90deg, var(--word), var(--excel), var(--powerpoint)); transition: width 0.3s ease; }
    header { position: sticky; top: 0; z-index: 900; background: color-mix(in srgb, var(--card) 85%, transparent); backdrop-filter: saturate(160%) blur(16px); border-bottom: 1px solid var(--border); box-shadow: 0 1px 0 rgba(0,0,0,.03); }
    .nav { display: flex; align-items: center; justify-content: space-between; max-width: var(--container); margin: 0 auto; padding: 12px 22px; gap: 16px; flex-wrap: wrap; }
    .brand { display: flex; align-items: center; gap: 10px; color: var(--word); font-weight: 700; }
    .brand img { width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, var(--word), var(--excel), var(--powerpoint)); box-shadow: var(--sd8); padding: 6px; }
    .brand h1 { font-size: 1.1rem; white-space: nowrap; }
    .search { position: relative; flex: 1; max-width: 500px; margin: 0 20px; }
    .searchbox { position: relative; display: flex; align-items: center; background: var(--bg-2); border: 1px solid var(--border); border-radius: 999px; padding: 8px 14px; transition: all var(--speed); box-shadow: inset 0 1px 0 rgba(255,255,255,.7); }
    .searchbox:focus-within { background: #fff; box-shadow: 0 0 0 2px var(--word); }
    .search .icon { width: 18px; height: 18px; color: var(--txt-3); }
    #siteSearch { border: 0; background: transparent; width: 100%; padding: 0 8px; outline: none; color: var(--txt); }
    #siteSearch::placeholder { color: var(--txt-3); }
    .clear-btn { background: none; border: 0; color: var(--txt-3); cursor: pointer; padding: 2px; border-radius: 4px; font-size: 1.2rem; line-height: 1; }
    .clear-btn:hover { color: var(--txt-2); }
    .kbd-hint { display: flex; align-items: center; gap: 4px; }
    kbd { font-family: inherit; background: var(--card); border: 1px solid var(--border); border-radius: 4px; padding: 2px 6px; font-size: .75rem; color: var(--txt-2); }
    .results { position: absolute; top: 100%; left: 0; right: 0; background: var(--card); border: 1px solid var(--border); border-radius: 14px; margin-top: 8px; box-shadow: var(--sd16); max-height: 300px; overflow: auto; display: none; }
    .results.show { display: block; }
    .search-result { display: block; padding: 10px 14px; color: var(--txt); text-decoration: none; border-bottom: 1px solid var(--border); transition: background var(--speed); }
    .search-result:hover { background: var(--bg-2); }
    .no-results { padding: 10px 14px; color: var(--txt-3); font-style: italic; }
    .actions { display: flex; align-items: center; gap: 12px; }
    .theme-switch { display: flex; align-items: center; gap: 6px; cursor: pointer; padding: 6px 10px; border-radius: 999px; border: 1px solid var(--border); background: var(--card); font-size: .9rem; transition: all var(--speed); }
    .theme-switch:hover { border-color: var(--word); }
    .theme-switch .dot { width: 18px; height: 18px; border-radius: 50%; background: var(--word); position: relative; overflow: hidden; }
    .hamb { display: flex; flex-direction: column; gap: 4px; cursor: pointer; padding: 8px; border-radius: 8px; border: 1px solid var(--border); background: var(--card); }
    .hamb span { width: 20px; height: 2px; background: var(--txt); border-radius: 1px; transition: all var(--speed); }
    #menuToggle:checked ~ .actions .hamb span:nth-child(1) { transform: rotate(45deg) translate(5px,5px); }
    #menuToggle:checked ~ .actions .hamb span:nth-child(2) { opacity: 0; }
    #menuToggle:checked ~ .actions .hamb span:nth-child(3) { transform: rotate(-45deg) translate(5px,-5px); }
    .navlinks { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; width: 100%; margin-top: 12px; display: none; }
    #menuToggle:checked ~ .navlinks { display: flex; }
    .navlinks a { padding: 8px 14px; border-radius: 999px; color: var(--txt); border: 1px solid transparent; transition: all var(--speed); }
    .navlinks a:hover { background: var(--card); border-color: var(--border); text-decoration: none; }
    .wrap { display: grid; grid-template-columns: 280px 1fr; gap: 32px; max-width: var(--container); margin: 32px auto; padding: 0 22px; }
    @media (max-width: 1200px) { .wrap { grid-template-columns: 1fr; } }
    .toc { position: sticky; top: 100px; align-self: start; background: var(--card); border: 1px solid var(--border); border-radius: 14px; padding: 16px; box-shadow: var(--sd4); height: 80vh; overflow-y: auto; }
    .toc h2 { font-size: 1.1rem; margin-bottom: 12px; color: var(--word); }
    .toc ul { list-style: none; padding-left: 0; }
    .toc li { margin: .5rem 0; }
    .toc a { color: var(--txt-2); font-size: .9rem; display: block; padding: 4px 0; border-left: 2px solid transparent; padding-left: 8px; transition: all var(--speed); }
    .toc a:hover { color: var(--txt); border-left-color: var(--word); text-decoration: none; }
    @media (max-width: 1200px) { .toc { display: none; } }
    main { min-height: 80vh; }
    .hero { background: linear-gradient(135deg, var(--word), var(--excel), var(--powerpoint)); color: #fff; padding: 64px 32px; border-radius: 14px; margin-bottom: 32px; text-align: center; }
    .hero h2 { font-size: var(--fs-hero); font-weight: 300; margin-bottom: 16px; }
    .hero p { font-size: var(--fs-lg); opacity: .95; max-width: 800px; margin: 0 auto 24px; }
    .actions { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
    .btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; border-radius: 999px; font-weight: 600; background: var(--word); color: #fff; border: 1px solid transparent; transition: all var(--speed); text-decoration: none; }
    .btn:hover { background: color-mix(in srgb, var(--word), black 10%); transform: translateY(-2px); box-shadow: var(--sd8); text-decoration: none; }
    .btn-outline { background: transparent; border-color: rgba(255,255,255,.4); color: #fff; }
    .btn-outline:hover { background: rgba(255,255,255,.1); border-color: rgba(255,255,255,.6); }
    .block { margin-bottom: 64px; }
    .block h3 { font-size: var(--fs-xl); font-weight: 300; color: var(--word); margin-bottom: 16px; border-bottom: 1px solid var(--border); padding-bottom: 8px; }
    .lead { font-size: var(--fs-lg); color: var(--txt-2); margin-bottom: 32px; max-width: 900px; }
    .grid { display: grid; gap: 24px; }
    .grid-2 { grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); }
    .grid-3 { grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }
    .grid-4 { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
    .card { background: var(--card); border: 1px solid var(--border); border-radius: 14px; padding: 24px; box-shadow: var(--sd4); transition: all var(--speed); }
    .card:hover { transform: translateY(-2px); box-shadow: var(--sd8); border-color: var(--word); }
    .card h4 { font-size: 1.25rem; margin-bottom: 12px; color: var(--word); }
    .muted { color: var(--txt-3); font-size: .9rem; }
    .steps { list-style: none; padding-left: 0; }
    .steps li { position: relative; padding-left: 28px; margin-bottom: 12px; }
    .steps li:before { content: ""; position: absolute; left: 0; top: 8px; width: 12px; height: 12px; border-radius: 50%; background: var(--word); }
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
    .footer-social a:hover { background: var(--word); color: #fff; border-color: var(--word); transform: translateY(-2px); }
    .footer-title { font-weight: 600; margin-bottom: 12px; color: var(--word); }
    .footer-list { list-style: none; padding-left: 0; }
    .footer-list li { margin-bottom: 8px; }
    .footer-list a { color: var(--txt-2); transition: color var(--speed); }
    .footer-list a:hover { color: var(--txt); }
    .backtop { position: fixed; bottom: 20px; right: 20px; width: 48px; height: 48px; border-radius: 50%; background: var(--word); color: #fff; display: grid; place-items: center; text-decoration: none; box-shadow: var(--sd8); transition: all var(--speed); z-index: 100; }
    .backtop:hover { transform: translateY(-2px); box-shadow: var(--sd16); text-decoration: none; }
    .visually-hidden { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0; }
    .skip { position: absolute; top: -40px; left: 6px; background: var(--word); color: #fff; padding: 8px; border-radius: 4px; z-index: 1000; transition: top 0.3s; }
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
      .grid-2, .grid-3, .grid-4 { grid-template-columns: 1fr; }
    }
    .toc-toggle { display: none; margin-bottom: 16px; padding: 10px 16px; background: var(--card); border: 1px solid var(--border); border-radius: 999px; cursor: pointer; font-size: .9rem; transition: all var(--speed); align-self: flex-start; }
    .toc-toggle:hover { background: var(--bg-2); border-color: var(--word); }
    @media (max-width: 1200px) {
      .toc-toggle { display: block; }
      .toc { display: none; position: relative; top: 0; margin-bottom: 24px; }
      .toc.show { display: block; }
    }
    .img-frame { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); box-shadow: var(--sd4); margin: 20px 0; overflow: hidden; text-align: center; transition: transform var(--speed); }
    .img-frame:hover { transform: scale(1.02); box-shadow: var(--sd8); }
    .img-frame img { width: 100%; height: auto; display: block; border-bottom: 1px solid var(--border); }
    .img-frame figcaption { font-size: var(--fs-sm); color: var(--txt-3); padding: 10px 16px; background: var(--bg-2); }
    .image-placeholder { background-color: var(--bg-2); border: 1px dashed var(--border); border-radius: 8px; padding: 40px; text-align: center; color: var(--txt-3); margin: 12px 0; min-height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center; }
    .image-placeholder i { font-size: 3rem; margin-bottom: 1rem; opacity: 0.5; }
    .app-card { border-left: 4px solid var(--word); }
    .app-card.word { border-left-color: var(--word); }
    .app-card.excel { border-left-color: var(--excel); }
    .app-card.powerpoint { border-left-color: var(--powerpoint); }
    .app-card.outlook { border-left-color: var(--outlook); }
    .app-card.access { border-left-color: var(--access); }
    .app-card.onenote { border-left-color: var(--onenote); }
    .app-card.publisher { border-left-color: var(--publisher); }
    .app-card.teams { border-left-color: var(--teams); }
    .feature-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 16px; margin: 20px 0; }
    .feature-item { background: var(--bg-2); padding: 16px; border-radius: 8px; border-left: 4px solid var(--word); }
    .keyboard-shortcuts { background: var(--card); border-radius: 10px; padding: 20px; margin: 20px 0; }
    .shortcut-item { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--border); }
    .shortcut-item:last-child { border-bottom: none; }
    .version-comparison { background: var(--card); border-radius: 10px; padding: 20px; margin: 20px 0; }
    .app-icon { width: 24px; height: 24px; border-radius: 4px; display: inline-flex; align-items: center; justify-content: center; margin-right: 8px; font-weight: bold; color: white; font-size: 12px; }
    .icon-word { background: var(--word); }
    .icon-excel { background: var(--excel); }
    .icon-powerpoint { background: var(--powerpoint); }
    .icon-outlook { background: var(--outlook); }
    .icon-access { background: var(--access); }
    .icon-onenote { background: var(--onenote); }
    .icon-publisher { background: var(--publisher); }
    .icon-teams { background: var(--teams); }
    .timeline { position: relative; padding-left: 30px; margin: 20px 0; }
    .timeline:before { content: ""; position: absolute; left: 0; top: 0; bottom: 0; width: 2px; background: var(--border); }
    .timeline-item { position: relative; margin-bottom: 20px; }
    .timeline-item:before { content: ""; position: absolute; left: -5px; top: 8px; width: 12px; height: 12px; border-radius: 50%; background: var(--word); }
    .timeline-year { font-weight: 600; color: var(--word); }
    .shortcut-table { width: 100%; border-collapse: collapse; margin: 16px 0; }
    .shortcut-table th { background: var(--bg-2); font-weight: 600; text-align: left; padding: 10px 16px; }
    .shortcut-table td { border: 1px solid var(--border); padding: 10px 16px; }
    .shortcut-table tr:nth-child(even) { background: var(--bg-2); }
    .shortcut-table code { background: transparent; border: none; padding: 0; }
    .video-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; margin: 20px 0; border-radius: 10px; }
    .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; border-radius: 10px; }
    .download-btn { display: inline-flex; align-items: center; gap: 8px; padding: 8px 16px; background: var(--word); color: #fff; border-radius: 6px; text-decoration: none; font-size: .9rem; margin: 8px 0; transition: all var(--speed); }
    .download-btn:hover { background: color-mix(in srgb, var(--word), black 10%); transform: translateY(-1px); }
    .comparison-table { width: 100%; border-collapse: collapse; margin: 20px 0; }
    .comparison-table th { background: var(--word); color: #fff; padding: 12px; text-align: center; }
    .comparison-table td { border: 1px solid var(--border); padding: 12px; text-align: center; }
    .comparison-table tr:nth-child(even) { background: var(--bg-2); }
    .highlight { background: rgba(24,90,189,.1); font-weight: 600; }
    .new-section { background: var(--bg-2); padding: 12px 16px; border-radius: 8px; margin: 24px 0; font-weight: 600; color: var(--word); display: inline-block; }
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
        <img src="https://cdn-icons-png.flaticon.com/512/732/732221.png" alt="Logotipo de Microsoft Office" width="38" height="38">
        <h1>Guía Completa de Microsoft Office</h1>
      </div>
      <div class="search" role="search">
        <form class="searchbox" autocomplete="off" onsubmit="return false;">
          <svg class="icon" viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16a6.471 6.471 0 0 0 4.23-1.57l.27.28v.79l5 5 1.5-1.5-5-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
          </svg>
          <input id="siteSearch" type="search" placeholder="Buscar en la guía de Office..." aria-autocomplete="list" aria-controls="searchResults" aria-expanded="false">
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
        <a href="../index.php">Inicio</a>
        <a href="Word.php">Word</a>
        <a href="Excel.php">Excel</a>
        <a href="PowerPoint.php">Power Point</a>
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
        <li><a href="#introduccion">1. Introducción a Microsoft Office</a></li>
        <li><a href="#componentes">2. Componentes Principales</a></li>
        <li><a href="#instalacion">3. Instalación y Configuración</a></li>
        <li><a href="#entorno">4. Entorno Común de Office</a></li>
        <li><a href="#nube">5. Uso de Office en la Nube</a></li>
        <li><a href="#seguridad">6. Seguridad y Buenas Prácticas</a></li>
        <li><a href="#atajos">7. Atajos y Consejos Generales</a></li>
        <li><a href="#ia">8. IA y Automatización en Office</a></li>
        <li><a href="#recursos">9. Recursos y Plantillas</a></li>
      </ul>
    </aside>
    <main>
      <!-- Sección de Inicio -->
      <section class="hero" id="inicio">
        <h2>Guía Completa de Microsoft Office 2025</h2>
        <p>Domina <strong>Microsoft Office</strong> con esta guía actualizada: desde lo básico hasta funciones avanzadas, IA, automatización, seguridad y colaboración en la nube. Incluye ejemplos prácticos, imágenes, tutoriales y plantillas descargables.</p>
        <div class="actions">
          <a class="btn" href="#introduccion">Comenzar Aprendizaje</a>
          <a class="btn btn-outline" href="#atajos">Ver Atajos Rápidos</a>
        </div>
        <figure class="img-frame">
          <img src="https://tse3.mm.bing.net/th/id/OIP.YUEq0s3yvdS2LVH7VdmljgHaEo?cb=ucfimg2&ucfimg=1&w=736&h=460&rs=1&pid=ImgDetMain&o=7&rm=3" 
     alt="Microsoft Office 2025 - Suite de productividad" 
     style="width:3380px; height:338px;">
          <figcaption>Microsoft Office 2025: la suite de productividad más poderosa.</figcaption>
        </figure>
      </section>

      <!-- Módulo 1: Introducción a Microsoft Office -->
      <section id="introduccion" class="block">
        <h3>1. Introducción a Microsoft Office</h3>
        <p class="lead">Microsoft Office es la suite de productividad líder en el mundo, utilizada por millones de personas y empresas para crear documentos, analizar datos, diseñar presentaciones y colaborar en equipo. En esta sección, explorarás su historia, componentes y cómo elegir la versión adecuada para tus necesidades.</p>

        <!-- ¿Qué es Microsoft Office? -->
        <div class="card">
          <h4>¿Qué es Microsoft Office?</h4>
          <p>Microsoft Office es un conjunto de aplicaciones de software diseñadas para aumentar la productividad en entornos laborales, educativos y personales. Ofrece herramientas para:</p>
          <div class="grid grid-3">
            <div class="feature-item">
              <span class="app-icon icon-word">W</span>
              <strong>Procesamiento de texto</strong> (Word)
            </div>
            <div class="feature-item">
              <span class="app-icon icon-excel">X</span>
              <strong>Hojas de cálculo</strong> (Excel)
            </div>
            <div class="feature-item">
              <span class="app-icon icon-powerpoint">P</span>
              <strong>Presentaciones</strong> (PowerPoint)
            </div>
            <div class="feature-item">
              <span class="app-icon icon-outlook">O</span>
              <strong>Gestión de correo</strong> (Outlook)
            </div>
            <div class="feature-item">
              <span class="app-icon icon-access">A</span>
              <strong>Bases de datos</strong> (Access)
            </div>
            <div class="feature-item">
              <span class="app-icon icon-onenote">N</span>
              <strong>Notas digitales</strong> (OneNote)
            </div>
            <div class="feature-item">
              <span class="app-icon icon-publisher">Pb</span>
              <strong>Diseño de publicaciones</strong> (Publisher)
            </div>
            <div class="feature-item">
              <span class="app-icon icon-teams">T</span>
              <strong>Colaboración en equipo</strong> (Teams)
            </div>
            <div class="feature-item">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                <path d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
              <strong>Almacenamiento en la nube</strong> (OneDrive)
            </div>
          </div>
          <figure class="img-frame">
            <img src="https://tse3.mm.bing.net/th/id/OIP.K48ZRkV2LS6QuDRvcBDAFgHaD1?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Aplicaciones de Microsoft Office">
            <figcaption>Las aplicaciones de Microsoft Office trabajan juntas para maximizar tu productividad.</figcaption>
          </figure>
          <div class="callout info">
            <strong>Dato clave:</strong> Office está disponible en más de 100 idiomas y es utilizado por el 85% de las empresas Fortune 500.
          </div>
        </div>

        <!-- Historia y evolución de Microsoft Office -->
        <div class="card">
          <h4>Historia y evolución de Microsoft Office</h4>
          <p>Desde su lanzamiento en 1989, Microsoft Office ha evolucionado para adaptarse a las necesidades cambiantes de los usuarios, desde documentos simples hasta colaboración en la nube y inteligencia artificial.</p>
          <div class="timeline">
            <div class="timeline-item">
              <div class="timeline-year">1989</div>
              <p><strong>Office 1.0 para Macintosh:</strong> Incluía Word, Excel y PowerPoint. Fue la primera suite integrada para computadoras personales.</p>
              <figure class="img-frame">
                <img src="https://www.microsiervos.com/images/WordMac1985.jpg" alt="Office 1.0 para Macintosh" 
                style="width:400px; height:300px;">
              </figure>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">1990</div>
              <p><strong>Office para Windows:</strong> Versión 1.5 con Word 1.1, Excel 2.0 y PowerPoint 2.0. Marcó el inicio de la dominancia de Office en PCs.</p>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">1995</div>
              <p><strong>Office 95:</strong> Introdujo la interfaz de 32 bits y el polémico Asistente de Office (Clippy).</p>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2003</div>
              <p><strong>Office 2003:</strong> Incluyó Outlook 2003 y mejoró la integración entre aplicaciones. Fue el último en soportar Windows 98.</p>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2007</div>
              <p><strong>Office 2007:</strong> Revolucionó la interfaz con la <strong>cinta de opciones (Ribbon)</strong>, reemplazando los menús tradicionales.</p>
              <figure class="img-frame">
                <img src="https://www.addintools.com/languages/spanish/images/Shortcut-Spanish-2007-Word-669_348.gif" alt="Cinta de opciones (Ribbon) en Office 2007">
              </figure>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2010</div>
              <p><strong>Office 2010:</strong> Introdujo el modo protegido para mayor seguridad y mejoras en la colaboración.</p>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2013</div>
              <p><strong>Office 2013:</strong> Enfoque en la nube con integración profunda con OneDrive y diseño moderno.</p>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2016-2019</div>
              <p><strong>Office 2016/2019:</strong> Mejoras en colaboración en tiempo real, herramientas de análisis en Excel y soporte para táctil.</p>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2021-2025</div>
              <p><strong>Microsoft 365:</strong> Modelo de suscripción con actualizaciones continuas, integración de IA (Copilot) y nuevas aplicaciones como Teams y Forms.</p>
              <figure class="img-frame">
                <img src="https://tse4.mm.bing.net/th/id/OIP.1SOGsbTZw5ire-W1XOR5iAHaEK?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Microsoft Copilot en Office 365">
              </figure>
            </div>
          </div>
          <div class="callout info">
            <strong>Dato curioso:</strong> En 1997, Microsoft compró PowerPoint por $14 millones. Hoy, es una de las aplicaciones más utilizadas en el mundo.
          </div>
        </div>

        <!-- Comparativa: Office 2021 vs. Microsoft 365 -->
        <div class="card">
          <h4>Comparativa: Office 2021 vs. Microsoft 365</h4>
          <p>Elige la versión de Office que mejor se adapte a tus necesidades: compra única o suscripción con actualizaciones continuas.</p>
          <table class="comparison-table">
            <thead>
              <tr>
                <th>Característica</th>
                <th>Office 2021</th>
                <th>Microsoft 365</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Modelo de pago</strong></td>
                <td>Pago único ($149.99 USD)</td>
                <td>Suscripción ($6.99 USD/mes o $69.99 USD/año)</td>
              </tr>
              <tr>
                <td><strong>Actualizaciones</strong></td>
                <td>Solo actualizaciones de seguridad</td>
                <td>Actualizaciones mensuales con nuevas funciones</td>
              </tr>
              <tr>
                <td><strong>OneDrive</strong></td>
                <td>5 GB (gratis)</td>
                <td>1 TB por usuario</td>
              </tr>
              <tr>
                <td><strong>Dispositivos</strong></td>
                <td>1 PC o Mac</td>
                <td>5 PCs/Macs + 5 tablets + 5 teléfonos</td>
              </tr>
              <tr>
                <td><strong>Skype</strong></td>
                <td>60 minutos/mes</td>
                <td>60 minutos/mes</td>
              </tr>
              <tr>
                <td><strong>Soporte técnico</strong></td>
                <td>Limitado (90 días)</td>
                <td>Incluido 24/7</td>
              </tr>
              <tr>
                <td><strong>Aplicaciones premium</strong></td>
                <td>No</td>
                <td>Sí (Teams, Forms, Sway, Power Automate)</td>
              </tr>
              <tr>
                <td><strong>Inteligencia Artificial</strong></td>
                <td>No</td>
                <td>Sí (Copilot en Word, Excel, PowerPoint)</td>
              </tr>
              <tr>
                <td><strong>Colaboración en tiempo real</strong></td>
                <td>Limitada</td>
                <td>Completa (con OneDrive/SharePoint)</td>
              </tr>
              <tr class="highlight">
                <td><strong>Recomendado para</strong></td>
                <td>Usuarios con necesidades básicas y sin internet constante</td>
                <td>Usuarios que necesitan las últimas funciones, colaboración y múltiples dispositivos</td>
              </tr>
            </tbody>
          </table>
          <div class="callout ok">
            <strong>Consejo:</strong> Si trabajas en equipo o necesitas acceso desde múltiples dispositivos, <strong>Microsoft 365</strong> es la mejor opción.
          </div>
        </div>

        <!-- Requisitos del sistema -->
        <div class="card">
          <h4>Requisitos del sistema para Microsoft Office</h4>
          <p>Antes de instalar Office, verifica que tu equipo cumpla con estos requisitos mínimos para un rendimiento óptimo:</p>
          <div class="grid grid-2">
            <div>
              <h5>Requisitos mínimos (Office 2021 / Microsoft 365)</h5>
              <ul class="steps">
                <li><strong>Sistema operativo:</strong> Windows 10/11 (versión 1909 o superior) o macOS 10.14 o superior.</li>
                <li><strong>Procesador:</strong> 1.6 GHz o superior, 2 núcleos (recomendado: 2.0 GHz, 4 núcleos).</li>
                <li><strong>Memoria RAM:</strong> 4 GB (recomendado: 8 GB o más para documentos complejos).</li>
                <li><strong>Almacenamiento:</strong> 4 GB de espacio libre en disco (SSD recomendado).</li>
                <li><strong>Pantalla:</strong> Resolución 1280x768 o superior (recomendado: 1920x1080).</li>
                <li><strong>Gráficos:</strong> Aceleración por hardware de DirectX 9 o superior.</li>
                <li><strong>Conexión a internet:</strong> Requerida para activación, actualizaciones y funciones en la nube.</li>
              </ul>
            </div>
            <div>
              <h5>Requisitos para máximo rendimiento</h5>
              <ul class="steps">
                <li><strong>Procesador:</strong> Intel Core i5/i7/i9 o AMD Ryzen 5/7/9 (para bases de datos grandes o análisis complejos).</li>
                <li><strong>Memoria RAM:</strong> 16 GB o más para trabajar con documentos muy grandes o múltiples aplicaciones.</li>
                <li><strong>Almacenamiento:</strong> SSD con al menos 10 GB libres para mejor velocidad.</li>
                <li><strong>Pantalla:</strong> Resolución 4K para diseño gráfico o presentaciones detalladas.</li>
                <li><strong>Conexión a internet:</strong> Banda ancha (10 Mbps o superior) para colaboración en tiempo real.</li>
              </ul>
              <div class="callout warn">
                <strong>Importante:</strong>
                <ul class="steps">
                  <li>Office 2021 <strong>no es compatible</strong> con Windows 8.1 o versiones anteriores.</li>
                  <li>Microsoft 365 requiere Windows 10 (versión 1909+) o las 3 últimas versiones de macOS.</li>
                  <li>Para usar <strong>Copilot</strong>, necesitas Windows 11 y al menos 8 GB de RAM.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Crear e iniciar sesión con una cuenta Microsoft -->
        <div class="card">
          <h4>Crear e iniciar sesión con una cuenta Microsoft</h4>
          <p>Una cuenta Microsoft es esencial para activar Office, sincronizar tus documentos en la nube y acceder a funciones avanzadas como colaboración en tiempo real.</p>
          <div class="grid grid-2">
            <div>
              <h5>Crear una cuenta Microsoft</h5>
              <ol class="steps">
                <li>Ve a <a href="https://account.microsoft.com" target="_blank">account.microsoft.com</a>.</li>
                <li>Haz clic en "<strong>Crear una cuenta Microsoft</strong>".</li>
                <li>Ingresa tu dirección de correo existente o crea una nueva @outlook.com.</li>
                <li>Establece una contraseña segura (mínimo 8 caracteres, con mayúsculas, números y símbolos).</li>
                <li>Completa la información de seguridad (teléfono o correo alternativo para recuperación).</li>
                <li>Verifica tu cuenta mediante un código enviado por email o SMS.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://www.mundocuentas.com/wp-content/uploads/2020/09/crear-cuenta-en-microsoft.jpg" alt="Crear una cuenta Microsoft">
                <figcaption>Página para crear una cuenta Microsoft en account.microsoft.com.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Iniciar sesión en Office</h5>
              <ol class="steps">
                <li>Abre cualquier aplicación de Office (Word, Excel, PowerPoint, etc.).</li>
                <li>Haz clic en "<strong>Iniciar sesión</strong>" en la esquina superior derecha.</li>
                <li>Introduce tu email y contraseña de Microsoft.</li>
                <li>Si es la primera vez, acepta los términos de servicio y configura tus preferencias.</li>
                <li>Office se activará automáticamente si tienes una suscripción válida.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://tse3.mm.bing.net/th/id/OIP.eXPEHVX5jA009PmVfpdPGQHaEv?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Iniciar sesión en Microsoft Office">
                <figcaption>Iniciar sesión en Office desde cualquier aplicación.</figcaption>
              </figure>
              <div class="callout ok">
                <strong>Consejos para tu cuenta:</strong>
                <ul class="steps">
                  <li>Usa la <strong>misma cuenta</strong> en todos tus dispositivos para sincronizar documentos y configuraciones.</li>
                  <li>Activa la <strong>autenticación en dos pasos</strong> en <a href="https://account.microsoft.com/security" target="_blank">configuración de seguridad</a>.</li>
                  <li>Si olvidas tu contraseña, recuperala en <a href="https://account.microsoft.com" target="_blank">account.microsoft.com</a>.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Módulo 2: Componentes Principales de Microsoft Office -->
      <section id="componentes" class="block">
        <h3>2. Componentes Principales de Microsoft Office</h3>
        <p class="lead">Microsoft Office ofrece una amplia gama de aplicaciones diseñadas para cubrir todas las necesidades de productividad, desde procesamiento de texto hasta análisis de datos avanzados y diseño gráfico. Explora cada aplicación con ejemplos prácticos y consejos.</p>

        <!-- Microsoft Word -->
        <div class="card app-card word">
          <h4><span class="app-icon icon-word">W</span> Microsoft Word</h4>
          <figure class="img-frame">
            <img src="https://www.microsoft.com/en-us/microsoft-365/blog/wp-content/uploads/sites/2/2021/09/Picture2.jpg" alt="Interfaz de Microsoft Word 2025">
            <figcaption>Interfaz de Microsoft Word 2025 con nuevas funciones de IA y diseño.</figcaption>
          </figure>
          <p><strong>El procesador de texto más avanzado para crear documentos profesionales con formato rico, revisiones colaborativas y herramientas de accesibilidad.</strong></p>
          <div class="grid grid-2">
            <div>
              <h5>Funciones principales</h5>
              <ul class="steps">
                <li><strong>Editor avanzado:</strong> Formato de texto, estilos, temas y diseños profesionales.</li>
                <li><strong>Revisión y colaboración:</strong> Control de cambios, comentarios y edición en tiempo real.</li>
                <li><strong>Plantillas inteligentes:</strong> Cientos de plantillas para currículums, informes, tesis y más.</li>
                <li><strong>Herramientas de accesibilidad:</strong> Lector inmersivo, revisor de accesibilidad y subtítulos automáticos.</li>
                <li><strong>Integración con IA:</strong> Copilot para generar borradores, resumir documentos y sugerir mejoras.</li>
                <li><strong>Referencias académicas:</strong> Tabla de contenido, citas, bibliografía y notas al pie.</li>
                <li><strong>Exportación flexible:</strong> Guardar como PDF, HTML, EPUB o formato compatible con versiones anteriores.</li>
              </ul>
              <div class="callout info">
                <strong>Novedad 2025:</strong> <strong>Copilot en Word</strong> puede generar resúmenes, corregir estilo y sugerir contenido basado en tus notas.
              </div>
            </div>
            <div>
              <h5>Usos comunes y ejemplos prácticos</h5>
              <ul class="steps">
                <li><strong>Documentos empresariales:</strong> Contratos, informes anuales, memorandos y propuestas.</li>
                <li><strong>Trabajos académicos:</strong> Tesis, ensayos, investigaciones y apuntes.</li>
                <li><strong>Comunicación profesional:</strong> Cartas formales, currículums y portafolios.</li>
                <li><strong>Publicaciones digitales:</strong> Libros electrónicos, guías y manuales interactivos.</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo práctico:</strong>
                <ol class="steps">
                  <li>Usa la pestaña <strong>Diseño</strong> para aplicar temas profesionales a tu documento.</li>
                  <li>Activa el <strong>Lector Inmersivo</strong> (en la pestaña Vista) para mejorar la legibilidad.</li>
                  <li>Con <strong>Copilot</strong>, pide: "<em>Redacta una carta formal de solicitud de empleo</em>" y obtén un borrador en segundos.</li>
                </ol>
              </div>
              <figure class="img-frame">
                <img src="https://tse3.mm.bing.net/th/id/OIP.ae14vgi-RgEaWS-BqY2YawHaEK?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Copilot generando contenido en Word">
                <figcaption>Copilot en Word generando un borrador de carta formal.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Microsoft Excel -->
        <div class="card app-card excel">
          <h4><span class="app-icon icon-excel">X</span> Microsoft Excel</h4>
          <figure class="img-frame">
            <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_interface_interactive2.png" alt="Interfaz de Microsoft Excel 2025">
            <figcaption>Excel 2025 con nuevas funciones de análisis de datos y visualización.</figcaption>
          </figure>
          <p><strong>La hoja de cálculo más poderosa para análisis de datos, modelado financiero, visualización avanzada y automatización con macros y Power Query.</strong></p>
          <div class="grid grid-2">
            <div>
              <h5>Funciones principales</h5>
              <ul class="steps">
                <li><strong>Fórmulas y funciones:</strong> Más de 500 funciones para cálculos matemáticos, estadísticos, financieros y lógicos.</li>
                <li><strong>Tablas dinámicas:</strong> Resumen y análisis interactivo de grandes conjuntos de datos.</li>
                <li><strong>Power Query:</strong> Importación, transformación y limpieza de datos desde múltiples fuentes.</li>
                <li><strong>Visualización de datos:</strong> Más de 20 tipos de gráficos, mapas 3D y dashboards interactivos.</li>
                <li><strong>Automatización:</strong> Macros, VBA y Power Automate para tareas repetitivas.</li>
                <li><strong>Análisis avanzado:</strong> What-If Analysis, Solver y herramientas de pronóstico.</li>
                <li><strong>Integración con IA:</strong> Copilot para generar fórmulas, analizar datos y crear visualizaciones.</li>
              </ul>
              <div class="callout info">
                <strong>Novedad 2025:</strong> <strong>Copilot en Excel</strong> puede analizar tus datos y sugerir gráficos o tablas dinámicas automáticamente.
              </div>
            </div>
            <div>
              <h5>Usos comunes y ejemplos prácticos</h5>
              <ul class="steps">
                <li><strong>Finanzas:</strong> Presupuestos, proyecciones financieras y análisis de inversiones.</li>
                <li><strong>Análisis de datos:</strong> Estadísticas, tendencias, pronósticos y minería de datos.</li>
                <li><strong>Gestión empresarial:</strong> Facturas, inventarios, nóminas y registros contables.</li>
                <li><strong>Ciencia y educación:</strong> Análisis estadístico, gráficos científicos y seguimiento de calificaciones.</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo práctico:</strong>
                <ol class="steps">
                  <li>Usa <strong>Power Query</strong> (en la pestaña Datos) para importar y limpiar datos de un CSV.</li>
                  <li>Crea una <strong>tabla dinámica</strong> para resumir ventas por región y producto.</li>
                  <li>Pide a <strong>Copilot</strong>: "<em>Genera un gráfico de barras para comparar las ventas trimestrales</em>".</li>
                </ol>
              </div>
              <figure class="img-frame">
                <img src="https://tse4.mm.bing.net/th/id/OIP.AxFeYrmGTcY53UVeo2PgIQHaDK?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Power Query en Excel">
                <figcaption>Power Query en Excel para importar y transformar datos.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Microsoft PowerPoint -->
        <div class="card app-card powerpoint">
          <h4><span class="app-icon icon-powerpoint">P</span> Microsoft PowerPoint</h4>
          <figure class="img-frame">
            <img src="https://estamatica.net/wp-content/uploads/2022/10/powerpoint-365-en-la-nube-presentacion-diapos.png" alt="Interfaz de Microsoft PowerPoint 2025">
            <figcaption>PowerPoint 2025 con nuevas herramientas de diseño y animación.</figcaption>
          </figure>
          <p><strong>La herramienta definitiva para crear presentaciones impactantes con diseños profesionales, animaciones avanzadas y colaboración en equipo.</strong></p>
          <div class="grid grid-2">
            <div>
              <h5>Funciones principales</h5>
              <ul class="steps">
                <li><strong>Diseño profesional:</strong> Plantillas modernas, temas y herramientas de diseño.</li>
                <li><strong>Animaciones avanzadas:</strong> Morph, Zoom y transiciones 3D.</li>
                <li><strong>Modo presentador:</strong> Notas del orador, vista previa y temporizador.</li>
                <li><strong>Multimedia:</strong> Inserción de imágenes, audio, video y modelos 3D.</li>
                <li><strong>Colaboración:</strong> Edición en tiempo real y comentarios.</li>
                <li><strong>Integración con IA:</strong> Copilot para generar diapositivas a partir de un esquema.</li>
                <li><strong>Exportación:</strong> Guardar como PDF, video (MP4) o paquete para CD.</li>
              </ul>
              <div class="callout info">
                <strong>Novedad 2025:</strong> <strong>Copilot en PowerPoint</strong> puede crear una presentación completa a partir de un documento de Word o un conjunto de notas.
              </div>
            </div>
            <div>
              <h5>Usos comunes y ejemplos prácticos</h5>
              <ul class="steps">
                <li><strong>Presentaciones empresariales:</strong> Informes trimestrales, pitches de ventas y reuniones de equipo.</li>
                <li><strong>Educación:</strong> Clases interactivas, conferencias y talleres.</li>
                <li><strong>Portafolios:</strong> Presentaciones de proyectos, arte o fotografía.</li>
                <li><strong>Eventos:</strong> Invitaciones, programas y resúmenes visuales.</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo práctico:</strong>
                <ol class="steps">
                  <li>Usa la pestaña <strong>Diseño</strong> para aplicar un tema profesional.</li>
                  <li>Aplica <strong>Morph</strong> (en Transiciones) para animaciones fluidas entre diapositivas.</li>
                  <li>Pide a <strong>Copilot</strong>: "<em>Crea una presentación sobre sostenibilidad ambiental con 5 diapositivas</em>".</li>
                </ol>
              </div>
              <figure class="img-frame">
                <img src="https://tse3.mm.bing.net/th/id/OIP.p2Z9lTjpIR3KMCGWRXj1fgAAAA?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Transición Morph en PowerPoint">
                <figcaption>Transición Morph en PowerPoint para animaciones fluidas.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Microsoft Outlook -->
        <div class="card app-card outlook">
          <h4><span class="app-icon icon-outlook">O</span> Microsoft Outlook</h4>
          <figure class="img-frame">
            <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/371034-hero-media-568x319?resMode=sharp2&op_usm=1.5,0.65,15,0&wid=1000&hei=562&qlt=100&fit=constrain" alt="Interfaz de Microsoft Outlook 2025">
            <figcaption>Outlook 2025 con nuevas funciones de gestión de correo y calendario.</figcaption>
          </figure>
          <p><strong>El gestor de correo y calendario más completo para organizar tu comunicación, reuniones y tareas con integración total a Microsoft 365.</strong></p>
          <div class="grid grid-2">
            <div>
              <h5>Funciones principales</h5>
              <ul class="steps">
                <li><strong>Gestión de correo:</strong> Bandeja de entrada inteligente, reglas automáticas y filtrado avanzado.</li>
                <li><strong>Calendario:</strong> Programación de reuniones, recordatorios y vistas compartidas.</li>
                <li><strong>Contactos:</strong> Administración de direcciones, grupos y listas de distribución.</li>
                <li><strong>Tareas y notas:</strong> Listas de pendientes, recordatorios y notas rápidas.</li>
                <li><strong>Integración con Teams:</strong> Reuniones virtuales directamente desde Outlook.</li>
                <li><strong>Seguridad:</strong> Cifrado de emails, protección contra phishing y autenticación multifactor.</li>
                <li><strong>Integración con IA:</strong> Copilot para redactar respuestas, resumir hilos de correo y sugerir horarios.</li>
              </ul>
            </div>
            <div>
              <h5>Usos comunes y ejemplos prácticos</h5>
              <ul class="steps">
                <li><strong>Comunicación empresarial:</strong> Gestión de emails, agendas y contactos de clientes.</li>
                <li><strong>Organización personal:</strong> Calendarios familiares, listas de tareas y recordatorios.</li>
                <li><strong>Gestión de proyectos:</strong> Seguimiento de plazos, reuniones y recursos.</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo práctico:</strong>
                <ol class="steps">
                  <li>Usa <strong>Reglas</strong> (en la pestaña Inicio) para organizar automáticamente tus emails.</li>
                  <li>Programa una reunión con <strong>Teams</strong> directamente desde el calendario.</li>
                  <li>Pide a <strong>Copilot</strong>: "<em>Redacta una respuesta profesional a este correo</em>".</li>
                </ol>
              </div>
              <figure class="img-frame">
                <img src="https://tse1.mm.bing.net/th/id/OIP.IS6FTGCWvOd9gagnweUYiQHaE8?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Reglas automáticas en Outlook">
                <figcaption>Configuración de reglas automáticas en Outlook.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Microsoft Access -->
        <div class="card app-card access">
          <h4><span class="app-icon icon-access">A</span> Microsoft Access</h4>
          <figure class="img-frame">
            <img src="https://th.bing.com/th/id/R.4c539398041ccad0cf51e5dfc1769b75?rik=dEfySA4dQr0OXA&pid=ImgRaw&r=0" alt="Interfaz de Microsoft Access 2025">
            <figcaption>Access 2025 para gestión de bases de datos relacionales.</figcaption>
          </figure>
          <p><strong>La herramienta de bases de datos relacionales para organizar, gestionar y analizar grandes volúmenes de información sin necesidad de ser experto en programación.</strong></p>
          <div class="grid grid-2">
            <div>
              <h5>Funciones principales</h5>
              <ul class="steps">
                <li><strong>Tablas:</strong> Diseño de bases de datos con campos, tipos de datos y relaciones.</li>
                <li><strong>Consultas:</strong> Búsqueda y filtrado avanzado con SQL o el asistente visual.</li>
                <li><strong>Formularios:</strong> Interfaces personalizadas para entrada y visualización de datos.</li>
                <li><strong>Informes:</strong> Presentación profesional de datos con gráficos y resúmenes.</li>
                <li><strong>Macros:</strong> Automatización de tareas repetitivas sin escribir código.</li>
                <li><strong>Integración:</strong> Importación/exportación de datos con Excel, SharePoint y SQL Server.</li>
              </ul>
            </div>
            <div>
              <h5>Usos comunes y ejemplos prácticos</h5>
              <ul class="steps">
                <li><strong>Gestión de inventarios:</strong> Seguimiento de productos, stock y proveedores.</li>
                <li><strong>CRM básico:</strong> Base de datos de clientes, historial de compras y seguimiento.</li>
                <li><strong>Proyectos académicos:</strong> Registros de estudiantes, cursos y calificaciones.</li>
                <li><strong>Seguimiento de proyectos:</strong> Tareas, recursos, plazos y responsables.</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo práctico:</strong>
                <ol class="steps">
                  <li>Crea una <strong>tabla</strong> para almacenar información de clientes.</li>
                  <li>Usa el <strong>Asistente para consultas</strong> para filtrar clientes por ubicación.</li>
                  <li>Diseña un <strong>formulario</strong> para entrada de datos fácil.</li>
                </ol>
              </div>
              <figure class="img-frame">
                <img src="https://tse3.mm.bing.net/th/id/OIP.EP8553etrwA_4VLwT2yhNQHaEW?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Consultas en Microsoft Access">
                <figcaption>Creación de consultas en Access para analizar datos.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Microsoft OneNote -->
        <div class="card app-card onenote">
          <h4><span class="app-icon icon-onenote">N</span> Microsoft OneNote</h4>
          <figure class="img-frame">
            <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/image_RE2lwga?resMode=sharp2&op_usm=1.5,0.65,15,0&wid=960&qlt=95&fmt=png-alpha&fit=constrain" alt="Interfaz de Microsoft OneNote 2025">
            <figcaption>OneNote 2025 para capturar y organizar ideas en cualquier dispositivo.</figcaption>
          </figure>
          <p><strong>El bloc de notas digital definitivo para capturar ideas, organizar información y colaborar en proyectos, con sincronización automática entre todos tus dispositivos.</strong></p>
          <div class="grid grid-2">
            <div>
              <h5>Funciones principales</h5>
              <ul class="steps">
                <li><strong>Notas organizadas:</strong> Libretas, secciones, páginas y subpáginas.</li>
                <li><strong>Multimedia:</strong> Inserción de texto, imágenes, audio, video y archivos adjuntos.</li>
                <li><strong>Búsqueda inteligente:</strong> Reconocimiento de texto en imágenes y notas manuscritas.</li>
                <li><strong>Sincronización:</strong> Acceso desde cualquier dispositivo con OneDrive.</li>
                <li><strong>Colaboración:</strong> Edición compartida en tiempo real con permisos personalizados.</li>
                <li><strong>Plantillas:</strong> Para reuniones, clases, listas de tareas y planificación.</li>
                <li><strong>Integración con IA:</strong> Copilot para organizar notas y generar resúmenes.</li>
              </ul>
            </div>
            <div>
              <h5>Usos comunes y ejemplos prácticos</h5>
              <ul class="steps">
                <li><strong>Apuntes académicos:</strong> Notas de clase, resúmenes y investigación.</li>
                <li><strong>Reuniones de trabajo:</strong> Actas, ideas y seguimiento de acciones.</li>
                <li><strong>Planificación personal:</strong> Listas de tareas, recetas, viajes y proyectos.</li>
                <li><strong>Investigación:</strong> Recopilar información, fuentes y borradores.</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo práctico:</strong>
                <ol class="steps">
                  <li>Usa la <strong>grabación de audio</strong> para tomar notas durante una reunión.</li>
                  <li>Organiza tus notas con <strong>etiquetas</strong> (ejemplo: #Importante, #Pendiente).</li>
                  <li>Pide a <strong>Copilot</strong>: "<em>Resume estas notas de la reunión</em>".</li>
                </ol>
              </div>
              <figure class="img-frame">
                <img src="https://th.bing.com/th/id/OIP.3251tF3kgziOfny1E2D3ogHaD4?o=7&cb=ucfimg2&rm=3&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="OneNote en múltiples dispositivos">
                <figcaption>OneNote sincronizado en PC, tablet y móvil.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Microsoft Publisher -->
        <div class="card app-card publisher">
          <h4><span class="app-icon icon-publisher">Pb</span> Microsoft Publisher</h4>
          <figure class="img-frame">
            <img src="https://tse1.mm.bing.net/th/id/OIP.zzaddWTxEWbon7rsSruZogHaEK?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Interfaz de Microsoft Publisher 2025">
            <figcaption>Publisher 2025 para diseño de publicaciones profesionales.</figcaption>
          </figure>
          <p><strong>La aplicación de diseño gráfico para crear publicaciones profesionales como folletos, trípticos, newsletters y catálogos, sin necesidad de ser experto en diseño.</strong></p>
          <div class="grid grid-2">
            <div>
              <h5>Funciones principales</h5>
              <ul class="steps">
                <li><strong>Plantillas profesionales:</strong> Para folletos, tarjetas de presentación, newsletters y más.</li>
                <li><strong>Herramientas de diseño:</strong> Alineación, colores, fuentes, efectos y guías de diseño.</li>
                <li><strong>Integración con Word:</strong> Importación de texto y tablas para diseño.</li>
                <li><strong>Exportación:</strong> Guardar como PDF de alta calidad para impresión profesional.</li>
                <li><strong>Personalización:</strong> Ajuste de márgenes, sangrías y colores CMYK para impresión.</li>
              </ul>
            </div>
            <div>
              <h5>Usos comunes y ejemplos prácticos</h5>
              <ul class="steps">
                <li><strong>Material de marketing:</strong> Folletos, volantes, anuncios y catálogos.</li>
                <li><strong>Eventos:</strong> Invitaciones, programas y menús para bodas o conferencias.</li>
                <li><strong>Publicaciones internas:</strong> Boletines, newsletters y informes visuales.</li>
                <li><strong>Educación:</strong> Material didáctico, posters y presentaciones impresas.</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo práctico:</strong>
                <ol class="steps">
                  <li>Selecciona una <strong>plantilla de folleto</strong> en la pestaña Archivo.</li>
                  <li>Personaliza colores y fuentes con las <strong>herramientas de diseño</strong>.</li>
                  <li>Exporta como <strong>PDF de alta calidad</strong> para imprimir.</li>
                </ol>
              </div>
              <figure class="img-frame">
                <img src="https://tse4.mm.bing.net/th/id/OIP.ybuSCJaKkZxNc5mVMLDDvAHaD4?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Plantillas en Microsoft Publisher">
                <figcaption>Plantillas profesionales en Publisher para diseño rápido.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Aplicaciones adicionales de Microsoft 365 -->
        <div class="card">
          <h4>Aplicaciones y Servicios Adicionales de Microsoft 365</h4>
          <p>Además de las aplicaciones principales, Microsoft 365 incluye herramientas poderosas para colaboración, automatización y productividad:</p>
          <div class="grid grid-3">
            <div class="feature-item app-card teams">
              <h5><span class="app-icon icon-teams">T</span> Microsoft Teams</h5>
              <figure class="img-frame">
                <img src="https://tse2.mm.bing.net/th/id/OIP.-vy0TV0QBWI0R6pZhq5zdwHaEK?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Microsoft Teams">
              </figure>
              <p>Plataforma de <strong>colaboración</strong> con chat, videollamadas, reuniones y compartición de archivos.</p>
              <ul class="steps">
                <li>Reuniones con hasta 1,000 participantes.</li>
                <li>Canales de equipo para organizar proyectos.</li>
                <li>Integración con Office y aplicaciones de terceros.</li>
                <li>Grabación y transcripción automática de reuniones.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg> OneDrive</h5>
              <figure class="img-frame">
                <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/copilot-onedrive_tbmnl_en-us?resMode=sharp2&op_usm=1.5,0.65,15,0&wid=1312&hei=738&qlt=100&fmt=png-alpha&fit=constrain" alt="OneDrive">
              </figure>
              <p>Almacenamiento en la <strong>nube</strong> con sincronización entre dispositivos y respaldo automático.</p>
              <ul class="steps">
                <li>1 TB de almacenamiento por usuario.</li>
                <li>Historial de versiones y recuperación de archivos.</li>
                <li>Compartición segura con permisos personalizados.</li>
                <li>Protección contra ransomware y cifrado.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5><span class="app-icon icon-excel">F</span> Microsoft Forms</h5>
              <figure class="img-frame">
                <img src="https://tse3.mm.bing.net/th/id/OIP.ELuf6ItdV9fsOyMw2JZZzwHaDa?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Microsoft Forms">
              </figure>
              <p>Creación de <strong>encuestas y cuestionarios</strong> con análisis de resultados en tiempo real.</p>
              <ul class="steps">
                <li>Plantillas para exámenes, feedback y registros.</li>
                <li>Exportación de resultados a Excel.</li>
                <li>Integración con Teams y SharePoint.</li>
                <li>Opciones de ramificación y lógica condicional.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M8 14v-2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/><path d="M12 18h.01"/></svg> SharePoint</h5>
              <figure class="img-frame">
                <img src="https://adderit.es/wp-content/uploads/2023/01/SharePoint-Microsoft-Dynamics-365-Barcelona-y-Madrid.png" alt="SharePoint">
              </figure>
              <p>Plataforma de <strong>colaboración empresarial</strong> para gestionar documentos, flujos de trabajo y sitios de equipo.</p>
              <ul class="steps">
                <li>Bibliotecas de documentos con control de versiones.</li>
                <li>Flujos de trabajo automatizados.</li>
                <li>Integración con Teams y Office.</li>
                <li>Permisos granulares y cumplimiento normativo.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14,2 14,8 20,8"/></svg> Power Automate</h5>
              <figure class="img-frame">
                <img src="https://tse4.mm.bing.net/th/id/OIP.IPCpbgUMow0jTNite_k2lwHaEu?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Power Automate">
              </figure>
              <p>Automatización de <strong>flujos de trabajo</strong> entre Office y otras aplicaciones.</p>
              <ul class="steps">
                <li>Automatizar tareas repetitivas.</li>
                <li>Integración con más de 300 aplicaciones.</li>
                <li>Flujos basados en eventos o horarios.</li>
                <li>Aprobaciones y notificaciones automáticas.</li>
              </ul>
            </div>
            <div class="feature-item">
              <h5><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path d="M12 6v4"/></svg> Power BI</h5>
              <figure class="img-frame">
                <img src="https://tse2.mm.bing.net/th/id/OIP.FDwUSfTtHKFCyaLlGNJUCAHaEf?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Power BI">
              </figure>
              <p><strong>Business Intelligence</strong> para crear dashboards interactivos y análisis de datos avanzados.</p>
              <ul class="steps">
                <li>Conexión a múltiples fuentes de datos.</li>
                <li>Visualizaciones interactivas y personalizables.</li>
                <li>Publicación y compartición de informes.</li>
                <li>Integración con Excel y SharePoint.</li>
              </ul>
            </div>
          </div>
          <div class="callout info">
            <strong>Integración total:</strong> Todas las herramientas de Microsoft 365 están diseñadas para trabajar juntas. Por ejemplo, puedes:
            <ul class="steps">
              <li>Insertar una <strong>encuesta de Forms</strong> en un email de Outlook.</li>
              <li>Automatizar un flujo en <strong>Power Automate</strong> para guardar adjuntos de Outlook en SharePoint.</li>
              <li>Analizar datos de Excel en <strong>Power BI</strong> y compartir el dashboard en Teams.</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Módulo 3: Instalación y Configuración -->
      <section id="instalacion" class="block">
        <h3>3. Instalación y Configuración de Microsoft Office</h3>
        <p class="lead">Aprende a instalar, activar y configurar Microsoft Office en tus dispositivos para garantizar un rendimiento óptimo, acceso a todas las funciones y una experiencia personalizada.</p>

        <!-- Cómo instalar Office paso a paso -->
        <div class="card">
          <h4>Cómo instalar Office paso a paso</h4>
          <p>Sigue estos pasos para instalar Microsoft Office en tu PC, Mac, tablet o móvil, ya sea la versión de suscripción (Microsoft 365) o la versión de pago único (Office 2021).</p>
          <div class="grid grid-2">
            <div>
              <h5>Para Microsoft 365 (Suscripción)</h5>
              <ol class="steps">
                <li>Ve a <a href="https://www.office.com" target="_blank">office.com</a> e inicia sesión con tu cuenta Microsoft.</li>
                <li>Haz clic en "<strong>Instalar Office</strong>" en la esquina superior derecha.</li>
                <li>Selecciona "<strong>Office 365 apps</strong>" para descargar el instalador.</li>
                <li>Ejecuta el archivo descargado (<code>OfficeSetup.exe</code> en Windows o <code>Microsoft_Office.pkg</code> en Mac).</li>
                <li>Espera a que se complete la descarga e instalación (puede tardar varios minutos).</li>
                <li>Una vez instalado, abre cualquier aplicación de Office e inicia sesión para activar.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://tse2.mm.bing.net/th/id/OIP.JJrM3niv49QB--NhG_Xb2gHaEE?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Instalar Microsoft 365">
                <figcaption>Descarga e instalación de Microsoft 365 desde office.com.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Para Office 2021 (Compra única)</h5>
              <ol class="steps">
                <li>Ve a <a href="https://www.office.com" target="_blank">office.com</a> e inicia sesión con la cuenta asociada a tu compra.</li>
                <li>Haz clic en "<strong>Instalar Office</strong>" y selecciona <strong>Office 2021</strong>.</li>
                <li>Descarga el instalador y ejecútalo.</li>
                <li>Sigue las instrucciones en pantalla. Si te pide una clave de producto, ingresa los 25 caracteres de tu licencia (sin guiones).</li>
                <li>Office se activará automáticamente al abrir cualquier aplicación.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://tse4.mm.bing.net/th/id/OIP.DA1W4OD_K5xN-tnMwcwnZQHaEt?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Instalar Office 2021">
                <figcaption>Proceso de instalación de Office 2021 con clave de producto.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout warn">
            <strong>Recomendaciones durante la instalación:</strong>
            <ul class="steps">
              <li>Cierra todas las aplicaciones de Office y otros programas antes de instalar.</li>
              <li>Asegúrate de tener una conexión a internet estable (mínimo 5 Mbps).</li>
              <li>Si instalas en una Mac, descarga la versión desde la Mac App Store o <a href="https://www.office.com" target="_blank">office.com</a>.</li>
              <li>En dispositivos móviles, descarga las apps individuales desde Google Play o App Store.</li>
            </ul>
          </div>
        </div>

        <!-- Activación de la licencia o suscripción -->
        <div class="card">
          <h4>Activación de la licencia o suscripción</h4>
          <p>La activación es necesaria para acceder a todas las funciones de Office. Sigue estos pasos según tu tipo de licencia:</p>
          <div class="grid grid-2">
            <div>
              <h5>Activación automática (Microsoft 365)</h5>
              <ol class="steps">
                <li>Abre cualquier aplicación de Office (Word, Excel, etc.).</li>
                <li>Haz clic en "<strong>Iniciar sesión</strong>" en la esquina superior derecha.</li>
                <li>Ingresa el email y contraseña de tu cuenta Microsoft asociada a la suscripción.</li>
                <li>Office se activará automáticamente. Verifica el estado en <strong>Archivo → Cuenta</strong>.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://th.bing.com/th/id/R.37104578453590451981d74ff2ca5a9d?rik=kncT7EOvZcx2VQ&pid=ImgRaw&r=0" alt="Activación de Microsoft 365">
                <figcaption>Iniciar sesión para activar Microsoft 365 automáticamente.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Activación manual (Office 2021/2019)</h5>
              <ol class="steps">
                <li>Abre una aplicación de Office y ve a <strong>Archivo → Cuenta</strong>.</li>
                <li>Haz clic en "<strong>Cambiar producto</strong>" o "<strong>Activar producto</strong>".</li>
                <li>Ingresa la clave de producto de 25 caracteres (sin guiones).</li>
                <li>Sigue las instrucciones en pantalla. Reinicia la aplicación si es necesario.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://tse1.mm.bing.net/th/id/OIP.bJ5UEjeqm6-8d58b8Xxr6AHaEK?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Activación de Office 2021">
                <figcaption>Ingresar clave de producto para activar Office 2021.</figcaption>
              </figure>
            </div>
          </div>
          <div class="callout danger">
            <strong>Solución de problemas de activación:</strong>
            <ul class="steps">
              <li><strong>Error 0x80070005:</strong> Reinicia el servicio <strong>Windows Installer</strong> o ejecuta Office como administrador.</li>
              <li><strong>Cuenta no reconocida:</strong> Verifica que estés usando el email asociado a tu suscripción.</li>
              <li><strong>Problemas de conexión:</strong> Asegúrate de tener internet y desactiva temporalmente el firewall.</li>
              <li><strong>Clave de producto inválida:</strong> Verifica que la clave sea correcta y no haya sido usada antes.</li>
            </ul>
            <p>Si el problema persiste, visita el <a href="https://support.microsoft.com" target="_blank">Asistente de soporte de Microsoft</a>.</p>
          </div>
        </div>

        <!-- Actualización automática de Office -->
        <div class="card">
          <h4>Actualización automática de Office</h4>
          <p>Mantén Office actualizado para recibir las últimas funciones, correcciones de seguridad y mejoras de rendimiento.</p>
          <div class="grid grid-2">
            <div>
              <h5>Configurar actualizaciones automáticas</h5>
              <ol class="steps">
                <li>Abre cualquier aplicación de Office y ve a <strong>Archivo → Cuenta</strong>.</li>
                <li>Haz clic en "<strong>Opciones de actualización</strong>" (en Microsoft 365) o "<strong>Opciones</strong>" (en Office 2021).</li>
                <li>Selecciona "<strong>Actualizar ahora</strong>" para buscar actualizaciones manualmente.</li>
                <li>Para activar actualizaciones automáticas, marca la opción "<strong>Habilitar actualizaciones</strong>".</li>
                <li>Configura el horario de actualización para que no interrumpa tu trabajo.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://www.nakivo.com/blog/wp-content/uploads/2021/11/How-do-I-update-Microsoft-Office.jpg" alt="Actualizar Office">
                <figcaption>Buscar y configurar actualizaciones en Office.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Diferencias entre versiones</h5>
              <table class="comparison-table">
                <thead>
                  <tr><th>Característica</th><th>Microsoft 365</th><th>Office 2021</th></tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>Actualizaciones de funciones</strong></td>
                    <td>Mensuales, con nuevas funciones</td>
                    <td>Solo actualizaciones de seguridad</td>
                  </tr>
                  <tr>
                    <td><strong>Soporte técnico</strong></td>
                    <td>24/7 incluido</td>
                    <td>Limitado (90 días)</td>
                  </tr>
                  <tr>
                    <td><strong>OneDrive</strong></td>
                    <td>1 TB por usuario</td>
                    <td>5 GB (gratis)</td>
                  </tr>
                  <tr>
                    <td><strong>Inteligencia Artificial</strong></td>
                    <td>Sí (Copilot)</td>
                    <td>No</td>
                  </tr>
                </tbody>
              </table>
              <div class="callout info">
                <strong>Consejo:</strong> Si usas <strong>Microsoft 365</strong>, activa las actualizaciones automáticas para recibir las últimas funciones de IA y seguridad.
              </div>
            </div>
          </div>
        </div>

        <!-- Configuración de idioma y preferencias -->
        <div class="card">
          <h4>Configuración de idioma y preferencias</h4>
          <p>Personaliza Office según tus preferencias: idioma, tema, guardado automático y más.</p>
          <div class="grid grid-2">
            <div>
              <h5>Cambiar el idioma de Office</h5>
              <ol class="steps">
                <li>Abre cualquier aplicación de Office y ve a <strong>Archivo → Opciones → Idioma</strong>.</li>
                <li>En "<strong>Idioma de edición y ayuda</strong>", selecciona tu idioma preferido (ejemplo: Español).</li>
                <li>En "<strong>Idioma de visualización</strong>", elige el idioma para menús y botones.</li>
                <li>Haz clic en "<strong>Establecer como predeterminado</strong>" y reinicia Office.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://th.bing.com/th/id/R.821c5cf0e0f889db2782d1958e078100?rik=SdwQ4mCjFjoEfQ&pid=ImgRaw&r=0" alt="Configurar idioma en Office">
                <figcaption>Configuración de idioma en Office para menús y corrector ortográfico.</figcaption>
              </figure>
              <div class="callout info">
                <strong>Nota:</strong> Algunos idiomas requieren descargar paquetes adicionales desde <a href="https://support.microsoft.com" target="_blank">Microsoft Support</a>.
              </div>
            </div>
            <div>
              <h5>Otras preferencias útiles</h5>
              <ul class="steps">
                <li><strong>Tema de Office:</strong> Cambia entre claro, oscuro o sistema en <strong>Archivo → Cuenta → Tema de Office</strong>.</li>
                <li><strong>Guardado automático:</strong> Actívalo en <strong>Archivo → Opciones → Guardar</strong> (recomendado: cada 5 minutos).</li>
                <li><strong>Ubicación de archivos:</strong> Configura la carpeta predeterminada para guardar documentos (ejemplo: OneDrive).</li>
                <li><strong>Opciones de accesibilidad:</strong> Ajusta el tamaño de fuente, contraste y opciones para personas con discapacidad.</li>
                <li><strong>Barra de herramientas:</strong> Personaliza la barra de acceso rápido con tus comandos más usados.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://tse4.mm.bing.net/th/id/OIP.owtCN53TmlQIdpKyUU-PEQHaD5?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Tema oscuro en Office">
                <figcaption>Configuración del tema oscuro en Office para reducir la fatiga visual.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Instalación en dispositivos móviles -->
        <div class="card">
          <h4>Instalación en dispositivos móviles (Android/iOS)</h4>
          <p>Accede a Office desde tu tablet o smartphone para trabajar desde cualquier lugar.</p>
          <div class="grid grid-2">
            <div>
              <h5>Instalar Office en Android</h5>
              <ol class="steps">
                <li>Abre <strong>Google Play Store</strong> en tu dispositivo.</li>
                <li>Busca "<strong>Microsoft Office</strong>" o la aplicación específica (Word, Excel, etc.).</li>
                <li>Instala la aplicación y ábrela.</li>
                <li>Inicia sesión con tu cuenta Microsoft para activar.</li>
                <li>Accede a tus documentos desde OneDrive o crea nuevos.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://tse1.mm.bing.net/th/id/OIP.M7qQrgf8zRL8y_LYXLA87AHaEa?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Office en Android">
                <figcaption>Microsoft Office en un dispositivo Android.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Instalar Office en iOS (iPhone/iPad)</h5>
              <ol class="steps">
                <li>Abre la <strong>App Store</strong> en tu iPhone o iPad.</li>
                <li>Busca "<strong>Microsoft Word</strong>", "<strong>Excel</strong>", etc.</li>
                <li>Descarga e instala la aplicación.</li>
                <li>Inicia sesión con tu cuenta Microsoft.</li>
                <li>Usa las funciones táctiles optimizadas para iPad con Apple Pencil.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://cdn.wccftech.com/wp-content/uploads/2019/10/Microsoft-Office-for-iPad.jpeg" alt="Office en iPad">
                <figcaption>Microsoft Word en iPad con soporte para Apple Pencil.</figcaption>
              </figure>
              <div class="callout info">
                <strong>Consejo:</strong> En iPad, usa el modo <strong>Diseño</strong> en Word o PowerPoint para ajustar el formato con precisión táctil.
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Módulo 4: Entorno Común de Office -->
      <section id="entorno" class="block">
        <h3>4. Entorno Común de Office</h3>
        <p class="lead">Todas las aplicaciones de Office comparten una interfaz similar, lo que facilita su uso. Aprende a navegar por la cinta de opciones, personalizar herramientas, usar la ayuda integrada y adaptar el entorno a tu flujo de trabajo.</p>

        <!-- Interfaz similar entre aplicaciones -->
        <div class="card">
          <h4>Interfaz similar entre Word, Excel, PowerPoint y más</h4>
          <p>Aunque cada aplicación tiene funciones específicas, comparten elementos comunes que facilitan su uso:</p>
          <figure class="img-frame">
            <img src="https://via.placeholder.com/800x450/0078D4/FFFFFF?text=Interfaz+Común+de+Office" alt="Interfaz común de Office">
            <figcaption>Elementos comunes en la interfaz de Word, Excel y PowerPoint.</figcaption>
          </figure>
          <div class="grid grid-3">
            <div class="feature-item">
              <h5>Barra de título</h5>
              <p>Muestra el nombre del documento y los botones para minimizar, maximizar y cerrar.</p>
            </div>
            <div class="feature-item">
              <h5>Cinta de opciones (Ribbon)</h5>
              <p>Contiene todas las herramientas organizadas en pestañas (Inicio, Insertar, Diseño, etc.).</p>
            </div>
            <div class="feature-item">
              <h5>Barra de herramientas de acceso rápido</h5>
              <p>Acceso rápido a funciones como Guardar, Deshacer y Rehacer. Personalizable.</p>
            </div>
            <div class="feature-item">
              <h5>Barra de estado</h5>
              <p>Información como número de páginas, palabras, celdas seleccionadas o idioma.</p>
            </div>
            <div class="feature-item">
              <h5>Panel de navegación</h5>
              <p>En Word y PowerPoint, permite moverse rápidamente entre secciones o diapositivas.</p>
            </div>
            <div class="feature-item">
              <h5>Vistas del documento</h5>
              <p>Cambia entre vistas como Lectura, Diseño de impresión o Esquema.</p>
            </div>
            <div class="feature-item">
              <h5>Ayuda integrada</h5>
              <p>Acceso rápido a tutoriales, sugerencias y soporte técnico (tecla <kbd>F1</kbd>).</p>
            </div>
            <div class="feature-item">
              <h5>Cuenta de usuario</h5>
              <p>Accede a tu perfil, configuración de Office y opciones de sincronización.</p>
            </div>
          </div>
        </div>

        <!-- La cinta de opciones (Ribbon) -->
        <div class="card">
          <h4>La cinta de opciones (Ribbon) y sus pestañas</h4>
          <p>La cinta de opciones es el centro de control de Office. Aquí te explicamos sus pestañas más importantes y cómo personalizarlas:</p>
          <table class="shortcut-table">
            <thead>
              <tr>
                <th>Pestaña</th>
                <th>Funciones principales</th>
                <th>Ejemplo de uso</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Inicio</strong></td>
                <td>Herramientas básicas: formato de texto, copiar/pegar, estilos y fuentes.</td>
                <td>Cambiar el estilo de título en Word o el formato de celdas en Excel.</td>
              </tr>
              <tr>
                <td><strong>Insertar</strong></td>
                <td>Añadir elementos: tablas, imágenes, gráficos, encabezados, pies de página y símbolos.</td>
                <td>Insertar un gráfico de barras en Excel o una imagen en PowerPoint.</td>
              </tr>
              <tr>
                <td><strong>Diseño</strong></td>
                <td>Configuración de página: temas, colores, fuentes, márgenes y orientación.</td>
                <td>Aplicar un tema moderno a una presentación en PowerPoint.</td>
              </tr>
              <tr>
                <td><strong>Fórmulas</strong> (Excel)</td>
                <td>Funciones y cálculos: suma, promedio, buscarv, si anidados, etc.</td>
                <td>Usar <code>=SUMIFS</code> para sumar valores con múltiples criterios.</td>
              </tr>
              <tr>
                <td><strong>Datos</strong> (Excel)</td>
                <td>Herramientas de datos: Power Query, tablas dinámicas, filtrado y ordenamiento.</td>
                <td>Importar datos de un CSV con Power Query.</td>
              </tr>
              <tr>
                <td><strong>Revisar</strong></td>
                <td>Revisión: ortografía, gramática, comentarios, control de cambios y traducción.</td>
                <td>Corregir errores gramaticales en Word o añadir comentarios en Excel.</td>
              </tr>
              <tr>
                <td><strong>Vista</strong></td>
                <td>Vistas del documento: diseño de impresión, lectura, esquema y zoom.</td>
                <td>Cambiar a vista de lectura en Word para revisar un documento largo.</td>
              </tr>
              <tr>
                <td><strong>Correspondencia</strong> (Word)</td>
                <td>Combinar correspondencia: crear cartas, etiquetas o emails personalizados en masa.</td>
                <td>Generar 100 cartas personalizadas desde una base de datos en Excel.</td>
              </tr>
              <tr>
                <td><strong>Programador</strong> (Excel)</td>
                <td>Macros y VBA: grabar macros, escribir código VBA y automatizar tareas.</td>
                <td>Crear una macro para formatear automáticamente informes mensuales.</td>
              </tr>
            </tbody>
          </table>
          <div class="callout info">
            <strong>Consejos para la cinta de opciones:</strong>
            <ul class="steps">
              <li>Presiona <kbd>Alt</kbd> para ver los atajos de teclado de cada pestaña.</li>
              <li>Personaliza la cinta en <strong>Archivo → Opciones → Personalizar cinta</strong>.</li>
              <li>Oculta pestañas que no uses frecuentemente para simplificar la interfaz.</li>
            </ul>
          </div>
        </div>

        <!-- Barra de herramientas de acceso rápido -->
        <div class="card">
          <h4>Barra de herramientas de acceso rápido</h4>
          <p>Personaliza esta barra para tener tus funciones más usadas siempre visibles, independientemente de la pestaña activa:</p>
          <div class="grid grid-2">
            <div>
              <h5>Añadir comandos a la barra</h5>
              <ol class="steps">
                <li>Haz clic en la flecha desplegable al final de la barra (junto a los comandos predeterminados).</li>
                <li>Selecciona los comandos que deseas agregar (ejemplo: Imprimir, Nuevo, Abrir).</li>
                <li>Para comandos no listados, haz clic en "<strong>Más comandos</strong>".</li>
                <li>Arrastra los comandos para reorganizarlos según tu preferencia.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Barra+de+Acceso+Rápido" alt="Personalizar barra de acceso rápido">
                <figcaption>Personalización de la barra de herramientas de acceso rápido en Word.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Comandos recomendados</h5>
              <ul class="steps">
                <li><strong>Guardar</strong> (<kbd>Ctrl + S</kbd>)</li>
                <li><strong>Deshacer</strong> (<kbd>Ctrl + Z</kbd>)</li>
                <li><strong>Rehacer</strong> (<kbd>Ctrl + Y</kbd>)</li>
                <li><strong>Imprimir</strong> (<kbd>Ctrl + P</kbd>)</li>
                <li><strong>Nuevo documento</strong> (<kbd>Ctrl + N</kbd>)</li>
                <li><strong>Buscar</strong> (<kbd>Ctrl + F</kbd>)</li>
                <li><strong>Vista de lectura</strong> (Word)</li>
                <li><strong>Proteger hoja</strong> (Excel)</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo:</strong>
                <ul class="steps">
                  <li>Añade "<strong>Guardar como PDF</strong>" si frecuentemente exportas documentos.</li>
                  <li>Incluye "<strong>Repetir</strong>" (<kbd>F4</kbd>) para repetir la última acción rápidamente.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Uso de la ayuda integrada -->
        <div class="card">
          <h4>Uso de la ayuda y búsqueda integrada</h4>
          <p>Office incluye herramientas de ayuda para resolver dudas rápidamente, desde el campo "Dime qué deseas hacer" hasta tutoriales interactivos.</p>
          <div class="grid grid-2">
            <div>
              <h5>Campo "Dime qué deseas hacer"</h5>
              <ol class="steps">
                <li>Haz clic en el campo de búsqueda en la parte superior de la cinta de opciones.</li>
                <li>Escribe tu consulta en lenguaje natural (ejemplo: "cómo insertar una tabla dinámica").</li>
                <li>Selecciona la opción deseada de los resultados sugeridos.</li>
                <li>Office te mostrará pasos detallados o ejecutará la acción directamente.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Ayuda+de+Office" alt="Campo de búsqueda de Office">
                <figcaption>Campo "Dime qué deseas hacer" para buscar funciones en Office.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Ayuda de Office (F1)</h5>
              <ul class="steps">
                <li>Presiona <kbd>F1</kbd> en cualquier aplicación para abrir la ayuda.</li>
                <li>Explora temas por categoría o usa el buscador para encontrar soluciones.</li>
                <li>Accede a <strong>tutoriales en video</strong>, artículos y foros de la comunidad.</li>
                <li>Usa la opción "<strong>Contactar con soporte</strong>" para ayuda personalizada.</li>
              </ul>
              <div class="callout info">
                <strong>Consejos para buscar ayuda:</strong>
                <ul class="steps">
                  <li>Usa términos específicos (ejemplo: "<em>cómo crear un gráfico de cascada en Excel</em>").</li>
                  <li>Explora los <strong>tutoriales interactivos</strong> para aprender paso a paso.</li>
                  <li>Si no encuentras la respuesta, visita <a href="https://answers.microsoft.com" target="_blank">Microsoft Answers</a>.</li>
                </ul>
              </div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Tutoriales+de+Office" alt="Tutoriales de Office">
                <figcaption>Tutoriales interactivos en la ayuda de Office.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Personalización avanzada del entorno -->
        <div class="card">
          <h4>Personalización avanzada del entorno de trabajo</h4>
          <p>Adapta Office a tu flujo de trabajo con estas opciones de personalización avanzada:</p>
          <div class="grid grid-2">
            <div>
              <h5>Personalizar la cinta de opciones</h5>
              <ol class="steps">
                <li>Ve a <strong>Archivo → Opciones → Personalizar cinta de opciones</strong>.</li>
                <li>Crea <strong>pestañas personalizadas</strong> con tus comandos favoritos.</li>
                <li>Reorganiza las pestañas existentes o oculta las que no uses.</li>
                <li>Importa o exporta tus configuraciones para usarlas en otros equipos.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Personalizar+Cinta+de+Opciones" alt="Personalizar cinta de opciones">
                <figcaption>Creación de una pestaña personalizada en la cinta de opciones.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Otras personalizaciones avanzadas</h5>
              <ul class="steps">
                <li><strong>Tema de Office:</strong> Elige entre claro, oscuro, colorido o sistema en <strong>Archivo → Cuenta</strong>.</li>
                <li><strong>Opciones de guardado:</strong> Configura el formato predeterminado (ejemplo: PDF) y la ubicación (OneDrive).</li>
                <li><strong>Corrección automática:</strong> Añade tus propias reglas en <strong>Archivo → Opciones → Revisión</strong>.</li>
                <li><strong>Opciones avanzadas:</strong> Ajusta el comportamiento de copiar/pegar, autoguardado y más.</li>
                <li><strong>Complementos:</strong> Instala extensiones desde la pestaña <strong>Insertar → Complementos</strong>.</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo avanzado:</strong>
                <ul class="steps">
                  <li>Crea una pestaña llamada "<strong>Mis Herramientas</strong>" con comandos de macros, estilos personalizados y funciones específicas de tu trabajo.</li>
                  <li>Configura <strong>autoguardado cada 2 minutos</strong> para documentos críticos.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Módulo 5: Uso de Office en la Nube -->
      <section id="nube" class="block">
        <h3>5. Uso de Microsoft Office en la Nube</h3>
        <p class="lead">OneDrive, SharePoint y las versiones en línea de Office te permiten trabajar desde cualquier lugar, colaborar en tiempo real y sincronizar tus documentos entre todos tus dispositivos. Descubre cómo aprovechar al máximo la nube con Office.</p>

        <!-- Qué es OneDrive y cómo se usa -->
        <div class="card">
          <h4>Qué es OneDrive y cómo se usa con Office</h4>
          <p>OneDrive es el servicio de almacenamiento en la nube de Microsoft, integrado con Office para guardar, compartir y sincronizar archivos de forma segura y accesible desde cualquier dispositivo.</p>
          <div class="grid grid-2">
            <div>
              <h5>Características principales de OneDrive</h5>
              <ul class="steps">
                <li><strong>Almacenamiento:</strong> 1 TB por usuario con Microsoft 365 (5 GB en cuentas gratuitas).</li>
                <li><strong>Sincronización automática:</strong> Accede a tus archivos desde PC, Mac, tablet o móvil.</li>
                <li><strong>Compartición segura:</strong> Envía enlaces con permisos personalizados (edición o solo lectura).</li>
                <li><strong>Historial de versiones:</strong> Recupera o restaura versiones anteriores de tus documentos.</li>
                <li><strong>Seguridad:</strong> Cifrado de datos en tránsito y en reposo, protección contra ransomware.</li>
                <li><strong>Colaboración:</strong> Trabaja en tiempo real con otros usuarios en el mismo documento.</li>
                <li><strong>Offline:</strong> Edita archivos sin conexión y sincroniza al reconectarte.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=OneDrive+en+la+Web" alt="OneDrive en la web">
                <figcaption>Interfaz de OneDrive en la web para gestionar archivos.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Cómo usar OneDrive con Office</h5>
              <ol class="steps">
                <li><strong>Guardar en OneDrive:</strong> Al crear un documento, selecciona OneDrive como ubicación.</li>
                <li><strong>Acceso desde cualquier lugar:</strong> Abre tus archivos en <a href="https://onedrive.live.com" target="_blank">onedrive.live.com</a> o la app móvil.</li>
                <li><strong>AutoGuardado:</strong> Actívalo en <strong>Archivo → Opciones → Guardar</strong> para salvar cambios automáticamente.</li>
                <li><strong>Compartir:</strong> Haz clic en "<strong>Compartir</strong>" para enviar enlaces o invitar a colaboradores.</li>
                <li><strong>Sincronizar:</strong> Instala la app de OneDrive en tu PC/Mac para acceder a archivos sin usar el navegador.</li>
              </ol>
              <div class="callout info">
                <strong>Consejos para OneDrive:</strong>
                <ul class="steps">
                  <li>Usa la <strong>app de escritorio</strong> para sincronizar carpetas locales con la nube.</li>
                  <li>Configura <strong>Protección de carpeta</strong> para respaldar automáticamente tus documentos importantes.</li>
                  <li>Aprovecha <strong>OneDrive Personal Vault</strong> para archivos sensibles (requiere verificación en dos pasos).</li>
                </ul>
              </div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=OneDrive+en+Escritorio" alt="OneDrive en escritorio">
                <figcaption>App de OneDrive en Windows para sincronización automática.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Guardar y compartir documentos en la nube -->
        <div class="card">
          <h4>Guardar y compartir documentos en la nube</h4>
          <p>Aprende a guardar tus documentos en OneDrive o SharePoint y a compartirlos de forma segura con colegas, clientes o amigos.</p>
          <div class="grid grid-2">
            <div>
              <h5>Guardar documentos en OneDrive</h5>
              <ol class="steps">
                <li>Abre tu documento en Office y haz clic en <strong>Archivo → Guardar como</strong>.</li>
                <li>Selecciona "<strong>OneDrive - Personal</strong>" o "<strong>OneDrive - [Tu Empresa]</strong>".</li>
                <li>Elige una carpeta (o crea una nueva) y haz clic en "<strong>Guardar</strong>".</li>
                <li>El documento se sincronizará automáticamente con la nube.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Guardar+en+OneDrive" alt="Guardar en OneDrive">
                <figcaption>Guardar un documento de Word directamente en OneDrive.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Compartir documentos de forma segura</h5>
              <ol class="steps">
                <li>Haz clic en el botón "<strong>Compartir</strong>" en la esquina superior derecha.</li>
                <li>Ingresa los correos de los destinatarios o genera un <strong>enlace compartible</strong>.</li>
                <li>Configura los permisos:
                  <ul class="steps">
                    <li><strong>Puede editar:</strong> Para colaboración en tiempo real.</li>
                    <li><strong>Solo lectura:</strong> Para revisión sin modificaciones.</li>
                    <li><strong>Establecer fecha de vencimiento:</strong> Para acceso temporal.</li>
                  </ul>
                </li>
                <li>Añade un mensaje personalizado y envía el enlace.</li>
              </ol>
              <div class="callout info">
                <strong>Ejemplo de colaboración:</strong>
                <ol class="steps">
                  <li>Comparte un <strong>informe de Excel</strong> con tu equipo.</li>
                  <li>Todos pueden editar simultáneamente y ver los cambios en tiempo real.</li>
                  <li>Usa los <strong>comentarios</strong> para discutir modificaciones.</li>
                </ol>
              </div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Compartir+en+OneDrive" alt="Compartir en OneDrive">
                <figcaption>Opciones de compartición en OneDrive con permisos personalizados.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Colaboración en tiempo real -->
        <div class="card">
          <h4>Colaboración en tiempo real con Office y OneDrive</h4>
          <p>Trabaja simultáneamente con otros usuarios en el mismo documento, hoja de cálculo o presentación, sin importar su ubicación.</p>
          <div class="grid grid-2">
            <div>
              <h5>Cómo colaborar en tiempo real</h5>
              <ol class="steps">
                <li>Guarda el documento en <strong>OneDrive</strong> o <strong>SharePoint</strong>.</li>
                <li>Comparte el enlace con permisos de <strong>edición</strong>.</li>
                <li>Abre el documento en Office (en la web, escritorio o móvil).</li>
                <li>Verás los cambios de otros usuarios en tiempo real, marcados con sus iniciales o colores.</li>
                <li>Usa el <strong>chat integrado</strong> (en la web) para comunicarte con los colaboradores.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Colaboración+en+Word" alt="Colaboración en Word">
                <figcaption>Colaboración en tiempo real en Word con múltiples usuarios.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Herramientas de colaboración</h5>
              <ul class="steps">
                <li><strong>Comentarios:</strong> Añade notas en los márgenes para discutir cambios sin modificar el contenido.</li>
                <li><strong>Control de cambios (Word):</strong> Revisa y acepta/rechaza modificaciones de otros usuarios.</li>
                <li><strong>Presencia:</strong> Ve quién está editando el documento en ese momento.</li>
                <li><strong>Historial de versiones:</strong> Recupera versiones anteriores si es necesario.</li>
                <li><strong>@menciones:</strong> Notifica a un colaborador específico en un comentario.</li>
              </ul>
              <div class="callout info">
                <strong>Consejos para colaborar:</strong>
                <ul class="steps">
                  <li>Usa <strong>nombres descriptivos</strong> para tus archivos (ejemplo: "Presupuesto_Q1_2025.xlsx").</li>
                  <li>Asigna <strong>tareas claras</strong> a cada colaborador usando comentarios.</li>
                  <li>Para documentos largos, divide el trabajo en <strong>secciones</strong> (Word) o <strong>hojas</strong> (Excel).</li>
                </ul>
              </div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Comentarios+en+Excel" alt="Comentarios en Excel">
                <figcaption>Uso de comentarios en Excel para colaborar en tiempo real.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Sincronización entre dispositivos -->
        <div class="card">
          <h4>Sincronización entre dispositivos con OneDrive</h4>
          <p>Mantén tus archivos actualizados en todos tus dispositivos: PC, Mac, tablet y móvil.</p>
          <div class="grid grid-2">
            <div>
              <h5>Configurar sincronización</h5>
              <ol class="steps">
                <li>Instala la aplicación de <strong>OneDrive</strong> en todos tus dispositivos desde:
                  <ul class="steps">
                    <li><a href="https://www.microsoft.com/es-es/microsoft-365/onedrive/download" target="_blank">Windows/Mac</a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.microsoft.skydrive" target="_blank">Android</a></li>
                    <li><a href="https://apps.apple.com/app/microsoft-onedrive/id477537958" target="_blank">iOS</a></li>
                  </ul>
                </li>
                <li>Inicia sesión con la <strong>misma cuenta Microsoft</strong> en todos los dispositivos.</li>
                <li>Selecciona las carpetas que deseas sincronizar (recomendado: <strong>Documentos</strong> y <strong>Escritorio</strong>).</li>
                <li>Configura la <strong>sincronización en segundo plano</strong> para que no consuma ancho de banda.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Sincronización+OneDrive" alt="Sincronización con OneDrive">
                <figcaption>Configuración de sincronización de OneDrive en Windows.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Ventajas de la sincronización</h5>
              <ul class="steps">
                <li><strong>Acceso desde cualquier lugar:</strong> Tus archivos están disponibles en todos tus dispositivos.</li>
                <li><strong>Trabajo offline:</strong> Edita documentos sin conexión y sincroniza al reconectarte.</li>
                <li><strong>Recuperación de archivos:</strong> Restaura archivos eliminados desde la papelera de OneDrive (hasta 30 días).</li>
                <li><strong>Protección:</strong> OneDrive protege contra ransomware y mantiene un historial de versiones.</li>
                <li><strong>Compartición fácil:</strong> Envía enlaces directamente desde el explorador de archivos.</li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo práctico:</strong>
                <ol class="steps">
                  <li>Empieza un <strong>informe en Word</strong> en tu PC de la oficina.</li>
                  <li>Edítalo en el <strong>móvil</strong> durante el trayecto a casa.</li>
                  <li>Termínalo en tu <strong>tablet</strong> desde el sofá, con los cambios sincronizados.</li>
                </ol>
              </div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=OneDrive+en+Móvil" alt="OneDrive en móvil">
                <figcaption>Acceso a archivos de OneDrive desde la app móvil.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- OneDrive vs. SharePoint -->
        <div class="card">
          <h4>OneDrive vs. SharePoint: ¿Cuál usar y cuándo?</h4>
          <p>Ambos servicios permiten almacenar y compartir archivos, pero están diseñados para diferentes escenarios. Elige el adecuado según tus necesidades:</p>
          <table class="comparison-table">
            <thead>
              <tr>
                <th>Característica</th>
                <th>OneDrive</th>
                <th>SharePoint</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Uso principal</strong></td>
                <td>Almacenamiento personal y compartición simple.</td>
                <td>Colaboración en equipo, gestión de proyectos y flujos de trabajo.</td>
              </tr>
              <tr>
                <td><strong>Propietario</strong></td>
                <td>Individual (cada usuario tiene su propio OneDrive).</td>
                <td>Equipo o departamento (sitios compartidos).</td>
              </tr>
              <tr>
                <td><strong>Almacenamiento</strong></td>
                <td>1 TB por usuario (con Microsoft 365).</td>
                <td>25 TB por sitio + 1 TB por usuario.</td>
              </tr>
              <tr>
                <td><strong>Compartición</strong></td>
                <td>Enlaces directos a archivos o carpetas.</td>
                <td>Permisos granulares por carpeta, biblioteca o sitio.</td>
              </tr>
              <tr>
                <td><strong>Colaboración</strong></td>
                <td>Edición simultánea en archivos compartidos.</td>
                <td>Edición simultánea + flujos de trabajo, metadatos y versiones.</td>
              </tr>
              <tr>
                <td><strong>Integración</strong></td>
                <td>Office, Teams (archivos personales).</td>
                <td>Office, Teams, Power Automate, Power BI, listas y más.</td>
              </tr>
              <tr class="highlight">
                <td><strong>Recomendado para</strong></td>
                <td>Usuarios individuales, archivos personales o compartición ocasional.</td>
                <td>Equipos, departamentos o proyectos con múltiples colaboradores y procesos.</td>
              </tr>
            </tbody>
          </table>
          <div class="callout info">
            <strong>Ejemplo de uso:</strong>
            <ul class="steps">
              <li>Usa <strong>OneDrive</strong> para guardar tus <strong>documentos personales</strong> y acceder desde cualquier lugar.</li>
              <li>Usa <strong>SharePoint</strong> para el <strong>sitio de tu equipo</strong>, donde todos colaboran en proyectos, con flujos de aprobación y metadatos.</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Módulo 6: Seguridad y Buenas Prácticas -->
      <section id="seguridad" class="block">
        <h3>6. Seguridad y Buenas Prácticas en Microsoft Office</h3>
        <p class="lead">Protege tus documentos, evita la pérdida de información y sigue estas buenas prácticas para trabajar de manera segura y eficiente en Microsoft Office. Desde contraseñas hasta respaldos y cumplimiento normativo, aquí encontrarás todo lo que necesitas saber.</p>

        <!-- Guardado automático y recuperación de archivos -->
        <div class="card">
          <h4>Guardado automático y recuperación de archivos</h4>
          <p>Configura el guardado automático para evitar perder cambios y aprende a recuperar documentos no guardados o versiones anteriores.</p>
          <div class="grid grid-2">
            <div>
              <h5>Configurar guardado automático</h5>
              <ol class="steps">
                <li>Ve a <strong>Archivo → Opciones → Guardar</strong>.</li>
                <li>Marca la opción "<strong>Guardar información de AutoRecuperación cada X minutos</strong>".</li>
                <li>Establece un intervalo corto (recomendado: <strong>5 minutos</strong>).</li>
                <li>Selecciona una ubicación para los archivos de recuperación (preferiblemente OneDrive).</li>
                <li>Activa "<strong>AutoGuardar</strong>" para documentos almacenados en la nube.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=AutoGuardado+en+Office" alt="Configurar AutoGuardado">
                <figcaption>Configuración de AutoGuardado y AutoRecuperación en Office.</figcaption>
              </figure>
              <div class="callout ok">
                <strong>Consejo:</strong> Usa <strong>OneDrive</strong> como ubicación predeterminada para guardar automáticamente en la nube y evitar pérdidas.
              </div>
            </div>
            <div>
              <h5>Recuperar archivos no guardados o versiones anteriores</h5>
              <ol class="steps">
                <li><strong>Archivos no guardados:</strong>
                  <ul class="steps">
                    <li>Abre la aplicación de Office y ve a <strong>Archivo → Abrir → Recuperar documentos no guardados</strong>.</li>
                    <li>Selecciona el archivo y guárdalo con un nombre.</li>
                  </ul>
                </li>
                <li><strong>Versiones anteriores (OneDrive):</strong>
                  <ul class="steps">
                    <li>Haz clic derecho en el archivo en <a href="https://onedrive.live.com" target="_blank">OneDrive</a>.</li>
                    <li>Selecciona "<strong>Historial de versiones</strong>".</li>
                    <li>Elige la versión que deseas restaurar.</li>
                  </ul>
                </li>
                <li><strong>Papelera de OneDrive:</strong>
                  <ul class="steps">
                    <li>Ve a la papelera en OneDrive para recuperar archivos eliminados (hasta 30 días).</li>
                  </ul>
                </li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Historial+de+Versiones" alt="Historial de versiones en OneDrive">
                <figcaption>Recuperación de versiones anteriores de un documento en OneDrive.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Protección de documentos con contraseña y permisos -->
        <div class="card">
          <h4>Protección de documentos con contraseña y permisos</h4>
          <p>Protege tus documentos confidenciales con contraseñas, restricciones de edición y permisos de acceso.</p>
          <div class="grid grid-2">
            <div>
              <h5>Proteger con contraseña</h5>
              <ol class="steps">
                <li>En Word, Excel o PowerPoint, ve a <strong>Archivo → Información → Proteger documento</strong>.</li>
                <li>Selecciona "<strong>Cifrar con contraseña</strong>".</li>
                <li>Ingresa una contraseña segura (mínimo 8 caracteres, con mayúsculas, números y símbolos).</li>
                <li>Confirma la contraseña y guarda el documento para aplicar la protección.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Proteger+con+Contraseña" alt="Proteger con contraseña">
                <figcaption>Protección de un documento de Word con contraseña.</figcaption>
              </figure>
              <div class="callout warn">
                <strong>Importante:</strong>
                <ul class="steps">
                  <li>Microsoft <strong>no puede recuperar</strong> contraseñas olvidadas.</li>
                  <li>Guarda la contraseña en un <strong>gestor de contraseñas</strong> seguro.</li>
                </ul>
              </div>
            </div>
            <div>
              <h5>Restringir edición y permisos</h5>
              <ol class="steps">
                <li><strong>Restringir edición (Word/Excel):</strong>
                  <ul class="steps">
                    <li>Ve a <strong>Revisar → Restringir edición</strong>.</li>
                    <li>Selecciona las partes del documento que pueden editarse.</li>
                    <li>Establece una contraseña para desbloquear las restricciones.</li>
                  </ul>
                </li>
                <li><strong>Permisos en OneDrive/SharePoint:</strong>
                  <ul class="steps">
                    <li>Haz clic derecho en el archivo y selecciona "<strong>Compartir</strong>".</li>
                    <li>Configura permisos: <strong>Solo lectura</strong>, <strong>Edición</strong> o <strong>Personalizado</strong>.</li>
                    <li>Establece una <strong>fecha de vencimiento</strong> para el acceso.</li>
                  </ul>
                </li>
                <li><strong>Marcas de agua (Word):</strong>
                  <ul class="steps">
                    <li>Ve a <strong>Diseño → Marca de agua</strong> para añadir texto como "Confidencial".</li>
                  </ul>
                </li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Permisos+en+OneDrive" alt="Permisos en OneDrive">
                <figcaption>Configuración de permisos de compartición en OneDrive.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Evitar pérdida de información y buenas prácticas -->
        <div class="card">
          <h4>Evitar pérdida de información y buenas prácticas</h4>
          <p>Sigue estas prácticas para minimizar el riesgo de perder tus documentos y trabajar de manera segura:</p>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Guarda copias de seguridad:</strong>
                  <ul class="steps">
                    <li>Usa <strong>OneDrive</strong> para sincronización automática.</li>
                    <li>Exporta copias importantes a un <strong>disco duro externo</strong>.</li>
                  </ul>
                </li>
                <li><strong>Usa versiones:</strong>
                  <ul class="steps">
                    <li>OneDrive guarda el <strong>historial de versiones</strong> (hasta 500 versiones).</li>
                    <li>En SharePoint, configura <strong>retención de documentos</strong> para cumplimiento normativo.</li>
                  </ul>
                </li>
                <li><strong>Evita archivos corruptos:</strong>
                  <ul class="steps">
                    <li>No cierres Office abruptamente durante el guardado.</li>
                    <li>Usa el formato <strong>.docx/.xlsx</strong> en lugar de los antiguos .doc/.xls.</li>
                  </ul>
                </li>
                <li><strong>Protege contra malware:</strong>
                  <ul class="steps">
                    <li>Usa un <strong>antivirus actualizado</strong>.</li>
                    <li>No abras archivos de <strong>fuentes desconocidas</strong>.</li>
                    <li>Habilita la <strong>protección en tiempo real</strong> en OneDrive.</li>
                  </ul>
                </li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Configura AutoGuardado:</strong>
                  <ul class="steps">
                    <li>Actívalo en <strong>Archivo → Opciones → Guardar</strong>.</li>
                    <li>Establece un intervalo corto (ejemplo: <strong>2 minutos</strong>).</li>
                  </ul>
                </li>
                <li><strong>Usa plantillas:</strong>
                  <ul class="steps">
                    <li>Crea <strong>plantillas personalizadas</strong> para documentos recurrentes.</li>
                    <li>Guarda las plantillas en OneDrive para acceder desde cualquier lugar.</li>
                  </ul>
                </li>
                <li><strong>Organiza tus archivos:</strong>
                  <ul class="steps">
                    <li>Usa <strong>carpetas y subcarpetas</strong> con nombres claros.</li>
                    <li>Aplica <strong>etiquetas o metadatos</strong> en SharePoint para búsqueda fácil.</li>
                  </ul>
                </li>
                <li><strong>Capacitación:</strong>
                  <ul class="steps">
                    <li>Aprende a usar las <strong>herramientas de accesibilidad</strong> (ejemplo: Lector Inmersivo).</li>
                    <li>Explora los <strong>cursos gratuitos</strong> en <a href="https://support.microsoft.com/es-es/training" target="_blank">Microsoft Training</a>.</li>
                  </ul>
                </li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo de recuperación:</strong>
                <ol class="steps">
                  <li>Si un archivo se corrompe, abre la <strong>versión anterior</strong> desde OneDrive.</li>
                  <li>Ve a <strong>Historial de versiones</strong> y selecciona la versión estable.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <!-- Buenas prácticas de respaldo y seguridad -->
        <div class="card">
          <h4>Buenas prácticas de respaldo y seguridad avanzada</h4>
          <p>Implementa estas estrategias para proteger tus documentos y garantizar su disponibilidad en caso de emergencias.</p>
          <div class="grid grid-2">
            <div>
              <h5>Estrategia de respaldo 3-2-1</h5>
              <ul class="steps">
                <li><strong>3 copias:</strong> Mantén al menos tres copias de tus archivos importantes.</li>
                <li><strong>2 medios diferentes:</strong> Guarda en dos tipos de almacenamiento (ejemplo: OneDrive + disco duro externo).</li>
                <li><strong>1 copia fuera del sitio:</strong> Almacena una copia en un lugar físico diferente (ejemplo: en la nube o en una ubicación remota).</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Estrategia+3-2-1" alt="Estrategia de respaldo 3-2-1">
                <figcaption>Implementación de la estrategia de respaldo 3-2-1.</figcaption>
              </figure>
              <div class="callout ok">
                <strong>Herramientas recomendadas:</strong>
                <ul class="steps">
                  <li><strong>OneDrive:</strong> Sincronización automática y historial de versiones.</li>
                  <li><strong>Historial de archivos (Windows):</strong> Copias automáticas de tus documentos.</li>
                  <li><strong>Time Machine (Mac):</strong> Respaldos incrementales en macOS.</li>
                  <li><strong>Discos duros externos:</strong> Para copias físicas fuera del sitio.</li>
                </ul>
              </div>
            </div>
            <div>
              <h5>Seguridad avanzada en Office</h5>
              <ul class="steps">
                <li><strong>Cifrado de archivos:</strong>
                  <ul class="steps">
                    <li>Usa <strong>BitLocker</strong> (Windows) o <strong>FileVault</strong> (Mac) para cifrar discos.</li>
                    <li>Protege archivos sensibles con <strong>contraseñas</strong> en Office.</li>
                  </ul>
                </li>
                <li><strong>Autenticación multifactor (MFA):</strong>
                  <ul class="steps">
                    <li>Actívala en tu <a href="https://account.microsoft.com/security" target="_blank">cuenta Microsoft</a>.</li>
                    <li>Usa la app <strong>Microsoft Authenticator</strong> para códigos de verificación.</li>
                  </ul>
                </li>
                <li><strong>Protección contra amenazas:</strong>
                  <ul class="steps">
                    <li>Habilita <strong>Protección avanzada contra amenazas</strong> en OneDrive.</li>
                    <li>Configura alertas para <strong>actividad sospechosa</strong> en tu cuenta.</li>
                  </ul>
                </li>
                <li><strong>Cumplimiento normativo:</strong>
                  <ul class="steps">
                    <li>Usa <strong>Microsoft Purview</strong> para gestionar datos sensibles (GDPR, HIPAA).</li>
                    <li>Aplica <strong>etiquetas de confidencialidad</strong> a documentos importantes.</li>
                  </ul>
                </li>
              </ul>
              <div class="callout info">
                <strong>Ejemplo de seguridad:</strong>
                <ol class="steps">
                  <li>Para un documento confidencial:
                    <ul class="steps">
                      <li>Protégelo con <strong>contraseña</strong>.</li>
                      <li>Guárdalo en <strong>OneDrive Personal Vault</strong>.</li>
                      <li>Comártelo solo con <strong>permisos de lectura</strong>.</li>
                    </ul>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <!-- Cumplimiento normativo y privacidad -->
        <div class="card">
          <h4>Cumplimiento normativo y privacidad en Microsoft 365</h4>
          <p>Microsoft 365 ofrece herramientas para ayudar a las organizaciones a cumplir con regulaciones como GDPR, HIPAA y más. Descubre cómo configurarlas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Herramientas de cumplimiento en Microsoft 365</h5>
              <ul class="steps">
                <li><strong>Microsoft Purview:</strong>
                  <ul class="steps">
                    <li>Gestión de <strong>datos sensibles</strong> (nombres, tarjetas de crédito, etc.).</li>
                    <li>Aplicación de <strong>políticas de retención</strong> para cumplimiento legal.</li>
                  </ul>
                </li>
                <li><strong>Etiquetas de confidencialidad:</strong>
                  <ul class="steps">
                    <li>Clasifica documentos como <strong>Confidencial</strong>, <strong>Interno</strong> o <strong>Público</strong>.</li>
                    <li>Aplica protección automática (ejemplo: cifrado o marcas de agua).</li>
                  </ul>
                </li>
                <li><strong>Prevención de pérdida de datos (DLP):</strong>
                  <ul class="steps">
                    <li>Evita la fuga de información sensible (ejemplo: bloquear el envío de números de tarjeta de crédito).</li>
                  </ul>
                </li>
                <li><strong>Registro de auditoría:</strong>
                  <ul class="steps">
                    <li>Monitorea actividades como accesos, ediciones o comparticiones.</li>
                  </ul>
                </li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Microsoft+Purview" alt="Microsoft Purview">
                <figcaption>Microsoft Purview para gestión de cumplimiento y privacidad.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Configurar etiquetas de confidencialidad</h5>
              <ol class="steps">
                <li>Ve al <a href="https://compliance.microsoft.com" target="_blank">Centro de cumplimiento de Microsoft 365</a>.</li>
                <li>Navega a <strong>Soluciones → Información → Etiquetas de confidencialidad</strong>.</li>
                <li>Crea una nueva etiqueta (ejemplo: "<strong>Confidencial - Solo RRHH</strong>").</li>
                <li>Configura la protección:
                  <ul class="steps">
                    <li><strong>Cifrado:</strong> Protege el documento con contraseña o permisos.</li>
                    <li><strong>Marcas de agua:</strong> Añade texto como "Confidencial".</li>
                    <li><strong>Acceso limitado:</strong> Restringe la edición a grupos específicos.</li>
                  </ul>
                </li>
                <li>Aplica la etiqueta a documentos desde Word, Excel o Outlook.</li>
              </ol>
              <div class="callout info">
                <strong>Ejemplo de cumplimiento:</strong>
                <ul class="steps">
                  <li>Para cumplir con <strong>GDPR</strong>:
                    <ul class="steps">
                      <li>Usa <strong>Purview</strong> para identificar datos personales en documentos.</li>
                      <li>Aplica etiquetas de <strong>confidencialidad</strong> a archivos con información sensible.</li>
                      <li>Configura políticas de <strong>retención</strong> para datos de clientes.</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Módulo 7: Atajos y Consejos Generales -->
      <section id="atajos" class="block">
        <h3>7. Atajos de Teclado y Consejos para Maximizar tu Productividad</h3>
        <p class="lead">Domina estos atajos de teclado, trucos y consejos para trabajar más rápido y eficientemente en todas las aplicaciones de Office. Desde funciones básicas hasta técnicas avanzadas, aquí encontrarás todo lo que necesitas para ser un experto.</p>

        <!-- Atajos de teclado comunes en todas las aplicaciones -->
        <div class="card">
          <h4>Atajos de teclado comunes en todas las aplicaciones de Office</h4>
          <p>Estos atajos funcionan en Word, Excel, PowerPoint, Outlook y otras aplicaciones de Office. Memorízalos para ahorrar tiempo:</p>
          <table class="shortcut-table">
            <thead>
              <tr>
                <th>Atajo</th>
                <th>Función</th>
                <th>Aplicación</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>C</kbd></td>
                <td>Copiar</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>X</kbd></td>
                <td>Cortar</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>V</kbd></td>
                <td>Pegar</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Z</kbd></td>
                <td>Deshacer</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Y</kbd></td>
                <td>Rehacer</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>S</kbd></td>
                <td>Guardar</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>P</kbd></td>
                <td>Imprimir</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>N</kbd></td>
                <td>Nuevo documento</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>O</kbd></td>
                <td>Abrir</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>F</kbd></td>
                <td>Buscar</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>B</kbd></td>
                <td>Negrita</td>
                <td>Word, PowerPoint, Outlook</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>I</kbd></td>
                <td>Cursiva</td>
                <td>Word, PowerPoint, Outlook</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>U</kbd></td>
                <td>Subrayado</td>
                <td>Word, PowerPoint, Outlook</td>
              </tr>
              <tr>
                <td><kbd>Alt</kbd> + <kbd>Tab</kbd></td>
                <td>Cambiar entre ventanas</td>
                <td>Windows</td>
              </tr>
              <tr>
                <td><kbd>F1</kbd></td>
                <td>Abrir ayuda</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>F4</kbd></td>
                <td>Repetir última acción</td>
                <td>Todas</td>
              </tr>
              <tr>
                <td><kbd>Alt</kbd> + <kbd>F</kbd>, <kbd>T</kbd></td>
                <td>Abrir pestaña Archivo</td>
                <td>Todas</td>
              </tr>
            </tbody>
          </table>
          <div class="callout info">
            <strong>Consejo:</strong> Descarga e imprime esta tabla de atajos o guárdala como favorita en tu navegador.
          </div>
        </div>

        <!-- Atajos específicos para Word -->
        <div class="card app-card word">
          <h4>Atajos avanzados para Microsoft Word</h4>
          <p>Domina estos atajos para trabajar más rápido en Word, desde formato hasta revisión y navegación:</p>
          <table class="shortcut-table">
            <thead>
              <tr>
                <th>Atajo</th>
                <th>Función</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>F</kbd></td>
                <td>Cambiar fuente</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>P</kbd></td>
                <td>Cambiar tamaño de fuente</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>L</kbd></td>
                <td>Alinear texto a la izquierda</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>E</kbd></td>
                <td>Alinear texto al centro</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>R</kbd></td>
                <td>Alinear texto a la derecha</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>J</kbd></td>
                <td>Justificar texto</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>1</kbd></td>
                <td>Aplicar estilo "Título 1"</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>2</kbd></td>
                <td>Aplicar estilo "Título 2"</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>S</kbd></td>
                <td>Aplicar estilo "Título"</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>N</kbd></td>
                <td>Aplicar estilo "Normal"</td>
              </tr>
              <tr>
                <td><kbd>F7</kbd></td>
                <td>Revisar ortografía y gramática</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>C</kbd></td>
                <td>Copiar formato</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>V</kbd></td>
                <td>Pegar formato</td>
              </tr>
              <tr>
                <td><kbd>Alt</kbd> + <kbd>Ctrl</kbd> + <kbd>M</kbd></td>
                <td>Insertar comentario</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Enter</kbd></td>
                <td>Insertar salto de página</td>
              </tr>
            </tbody>
          </table>
          <div class="callout info">
            <strong>Ejemplo práctico:</strong>
            <ol class="steps">
              <li>Selecciona un título y presiona <kbd>Ctrl</kbd> + <kbd>1</kbd> para aplicarle el estilo "Título 1".</li>
              <li>Usa <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>C</kbd> para copiar el formato y aplícalo a otros títulos.</li>
              <li>Presiona <kbd>F7</kbd> para revisar la ortografía antes de enviar el documento.</li>
            </ol>
          </div>
        </div>

        <!-- Atajos específicos para Excel -->
        <div class="card app-card excel">
          <h4>Atajos avanzados para Microsoft Excel</h4>
          <p>Excel es una herramienta poderosa, y estos atajos te ayudarán a trabajar con datos, fórmulas y análisis de manera más eficiente:</p>
          <table class="shortcut-table">
            <thead>
              <tr>
                <th>Atajo</th>
                <th>Función</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>;</kbd></td>
                <td>Insertar fecha actual</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>:</kbd></td>
                <td>Insertar hora actual</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>`</kbd></td>
                <td>Alternar entre mostrar fórmulas y valores</td>
              </tr>
              <tr>
                <td><kbd>F4</kbd></td>
                <td>Repetir última acción o alternar referencias absolutas/relativas</td>
              </tr>
              <tr>
                <td><kbd>Alt</kbd> + <kbd>=</kbd></td>
                <td>Insertar función de suma automática</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>L</kbd></td>
                <td>Activar/desactivar filtros</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>T</kbd></td>
                <td>Crear tabla</td>
              </tr>
              <tr>
                <td><kbd>Alt</kbd> + <kbd>D</kbd>, <kbd>S</kbd>, <kbd>D</kbd></td>
                <td>Abrir Power Query (Obtener datos)</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>1</kbd></td>
                <td>Abrir formato de celdas</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>F3</kbd></td>
                <td>Crear nombre a partir de la selección</td>
              </tr>
              <tr>
                <td><kbd>F11</kbd></td>
                <td>Crear gráfico en hoja nueva</td>
              </tr>
              <tr>
                <td><kbd>Alt</kbd> + <kbd>F1</kbd></td>
                <td>Crear gráfico en hoja actual</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>K</kbd></td>
                <td>Insertar hipervínculo</td>
              </tr>
              <tr>
                <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>;</kbd></td>
                <td>Insertar fecha actual (estática)</td>
              </tr>
            </tbody>
          </table>
          <div class="callout info">
            <strong>Ejemplo práctico:</strong>
            <ol class="steps">
              <li>Selecciona un rango de datos y presiona <kbd>Ctrl</kbd> + <kbd>T</kbd> para convertirlos en una tabla.</li>
              <li>Usa <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>L</kbd> para activar filtros y analizar datos rápidamente.</li>
              <li>Presiona <kbd>Alt</kbd> + <kbd>=</kbd> para insertar una suma automática en una columna.</li>
            </ol>
          </div>
        </div>

        <!-- Uso del portapapeles entre aplicaciones -->
        <div class="card">
          <h4>Uso del portapapeles entre aplicaciones de Office</h4>
          <p>El portapapeles de Office te permite copiar y pegar múltiples elementos entre aplicaciones (Word, Excel, PowerPoint) y ver el historial de lo copiado. Aquí te mostramos cómo aprovecharlo:</p>
          <div class="grid grid-2">
            <div>
              <h5>Cómo usar el portapapeles</h5>
              <ol class="steps">
                <li>Copia varios elementos (texto, imágenes, celdas de Excel, etc.) en cualquier aplicación de Office.</li>
                <li>En Word o Excel, haz clic en el icono del <strong>portapapeles</strong> en la esquina inferior derecha de la pestaña <strong>Inicio</strong>.</li>
                <li>Verás una lista de los últimos <strong>24 elementos copiados</strong>.</li>
                <li>Haz clic en cualquier elemento para pegarlo en tu documento.</li>
                <li>Usa el botón "<strong>Pegado especial</strong>" (<kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>V</kbd>) para elegir el formato (ejemplo: pegar como imagen o texto sin formato).</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Portapapeles+de+Office" alt="Portapapeles de Office">
                <figcaption>Portapapeles de Office mostrando el historial de elementos copiados.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Ejemplos prácticos de uso</h5>
              <ul class="steps">
                <li><strong>De Excel a Word:</strong>
                  <ol class="steps">
                    <li>Copia una <strong>tabla dinámica</strong> en Excel.</li>
                    <li>Pégala en Word como <strong>imagen</strong> o <strong>tabla editable</strong>.</li>
                  </ol>
                </li>
                <li><strong>De Word a PowerPoint:</strong>
                  <ol class="steps">
                    <li>Copia un <strong>esquema</strong> en Word.</li>
                    <li>Pégalo en PowerPoint como <strong>nuevas diapositivas</strong>.</li>
                  </ol>
                </li>
                <li><strong>De PowerPoint a Outlook:</strong>
                  <ol class="steps">
                    <li>Copia una <strong>diapositiva</strong> en PowerPoint.</li>
                    <li>Pégala en un <strong>email</strong> como imagen.</li>
                  </ol>
                </li>
              </ul>
              <div class="callout info">
                <strong>Consejos:</strong>
                <ul class="steps">
                  <li>Usa <kbd>Ctrl</kbd> + <kbd>C</kbd> <strong>dos veces</strong> para copiar el mismo elemento al portapapeles sin reemplazarlo.</li>
                  <li>Limpia el portapapeles haciendo clic en "<strong>Borrar todo</strong>" cuando ya no necesites los elementos.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Exportar y vincular datos entre aplicaciones -->
        <div class="card">
          <h4>Exportar y vincular datos entre aplicaciones de Office</h4>
          <p>Aprovecha la integración entre Word, Excel y PowerPoint para vincular datos y mantenerlos actualizados automáticamente. Ideal para informes, presentaciones y documentos dinámicos.</p>
          <div class="grid grid-2">
            <div>
              <h5>Vincular una tabla de Excel a Word</h5>
              <ol class="steps">
                <li>Abre tu archivo de Excel y selecciona la tabla o rango de datos que deseas vincular.</li>
                <li>Copia los datos (<kbd>Ctrl</kbd> + <kbd>C</kbd>).</li>
                <li>En Word, coloca el cursor donde deseas insertar la tabla.</li>
                <li>Ve a la pestaña <strong>Inicio</strong> y haz clic en la flecha del botón <strong>Pegar</strong>.</li>
                <li>Selecciona "<strong>Pegado especial</strong>".</li>
                <li>Elige "<strong>Pegar vínculo</strong>" y selecciona el formato (ejemplo: "Objeto de hoja de cálculo de Excel").</li>
                <li>Haz clic en <strong>Aceptar</strong>. La tabla se insertará y se actualizará automáticamente si cambias los datos en Excel.</li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Vincular+Excel+a+Word" alt="Vincular Excel a Word">
                <figcaption>Vinculación de una tabla de Excel a un documento de Word.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Insertar un gráfico de Excel en PowerPoint</h5>
              <ol class="steps">
                <li>En Excel, selecciona el gráfico que deseas insertar.</li>
                <li>Cópialo (<kbd>Ctrl</kbd> + <kbd>C</kbd>).</li>
                <li>En PowerPoint, ve a la diapositiva donde deseas insertar el gráfico.</li>
                <li>Haz clic en la flecha del botón <strong>Pegar</strong> y selecciona "<strong>Pegado especial</strong>".</li>
                <li>Elige "<strong>Objeto de gráfico de Microsoft Excel</strong>" y haz clic en <strong>Aceptar</strong>.</li>
                <li>El gráfico se insertará y mantendrá el vínculo con Excel. Los cambios en los datos se reflejarán automáticamente.</li>
              </ol>
              <div class="callout info">
                <strong>Consejos para vincular datos:</strong>
                <ul class="steps">
                  <li>Usa <strong>vínculos</strong> cuando los datos cambien frecuentemente (ejemplo: informes mensuales).</li>
                  <li>Usa <strong>copia estática</strong> si no necesitas actualizaciones (ejemplo: presentaciones finales).</li>
                  <li>Para actualizar manualmente los vínculos en Word, presiona <kbd>Ctrl</kbd> + <kbd>A</kbd> para seleccionar todo y luego <kbd>F9</kbd>.</li>
                </ul>
              </div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Gráfico+de+Excel+en+PowerPoint" alt="Gráfico de Excel en PowerPoint">
                <figcaption>Gráfico de Excel vinculado a una presentación de PowerPoint.</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <!-- Consejos para mejorar la productividad -->
        <div class="card">
          <h4>Consejos avanzados para mejorar tu productividad en Office</h4>
          <p>Implementa estos consejos y trucos para trabajar de manera más eficiente, ahorrar tiempo y producir documentos de mayor calidad.</p>
          <div class="grid grid-2">
            <div>
              <ul class="steps">
                <li><strong>Usa plantillas:</strong>
                  <ul class="steps">
                    <li>Office incluye <strong>plantillas profesionales</strong> para currículums, informes, presentaciones y más.</li>
                    <li>Crea tus propias plantillas y guárdalas en OneDrive para acceder desde cualquier lugar.</li>
                  </ul>
                </li>
                <li><strong>Automatiza tareas repetitivas:</strong>
                  <ul class="steps">
                    <li>En Excel, graba <strong>macros</strong> para procesos recurrentes (ejemplo: formateo de informes).</li>
                    <li>Usa <strong>Power Automate</strong> para crear flujos entre Office y otras apps.</li>
                  </ul>
                </li>
                <li><strong>Personaliza tu entorno:</strong>
                  <ul class="steps">
                    <li>Añade tus comandos más usados a la <strong>barra de acceso rápido</strong>.</li>
                    <li>Crea <strong>pestañas personalizadas</strong> en la cinta de opciones.</li>
                  </ul>
                </li>
                <li><strong>Aprovecha los estilos:</strong>
                  <ul class="steps">
                    <li>En Word, usa <strong>estilos</strong> para aplicar formato consistente (ejemplo: "Título 1", "Cuerpo").</li>
                    <li>Actualiza todos los estilos de una vez si cambias el diseño.</li>
                  </ul>
                </li>
              </ul>
            </div>
            <div>
              <ul class="steps">
                <li><strong>Colabora en la nube:</strong>
                  <ul class="steps">
                    <li>Usa <strong>OneDrive</strong> o <strong>SharePoint</strong> para compartir documentos y trabajar en equipo.</li>
                    <li>Comenta y menciona a colegas (<strong>@nombre</strong>) para discutir cambios.</li>
                  </ul>
                </li>
                <li><strong>Memoriza atajos clave:</strong>
                  <ul class="steps">
                    <li>Aprende los atajos de <strong>copiar/pegar</strong> (<kbd>Ctrl+C</kbd>/<kbd>Ctrl+V</kbd>).</li>
                    <li>Usa <kbd>Ctrl+Z</kbd> para <strong>deshacer</strong> y <kbd>Ctrl+Y</kbd> para <strong>rehacer</strong>.</li>
                  </ul>
                </li>
                <li><strong>Mantén Office actualizado:</strong>
                  <ul class="steps">
                    <li>Instala las últimas actualizaciones para acceder a <strong>nuevas funciones</strong> y parches de seguridad.</li>
                    <li>Configura actualizaciones automáticas en <strong>Archivo → Cuenta</strong>.</li>
                  </ul>
                </li>
                <li><strong>Explora complementos:</strong>
                  <ul class="steps">
                    <li>Instala <strong>complementos</strong> desde la pestaña <strong>Insertar</strong> para añadir funciones adicionales.</li>
                    <li>Ejemplos: Gramarly para Word, Lucidchart para PowerPoint.</li>
                  </ul>
                </li>
              </ul>
              <div class="callout ok">
                <strong>Bonus: Extensiones de Office</strong>
                <ul class="steps">
                  <li><strong>Gramarly:</strong> Corrección gramatical avanzada en Word y Outlook.</li>
                  <li><strong>Lucidchart:</strong> Diagramas y organigramas en PowerPoint.</li>
                  <li><strong>Adobe Sign:</strong> Firmas electrónicas en Word.</li>
                  <li><strong>Zoom:</strong> Programar reuniones desde Outlook.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Módulo 8: IA y Automatización en Office -->
      <section id="ia" class="block">
        <h3>8. Inteligencia Artificial y Automatización en Microsoft Office</h3>
        <p class="lead">Descubre cómo la inteligencia artificial (Copilot) y las herramientas de automatización (Power Automate) están transformando la forma en que trabajamos con Office. Desde generar documentos hasta analizar datos y optimizar flujos de trabajo, la IA te ayuda a ser más productivo.</p>

        <!-- Introducción a Copilot en Microsoft 365 -->
        <div class="card">
          <h4>Introducción a Microsoft Copilot en Office</h4>
          <p><strong>Copilot</strong> es el asistente de IA integrado en Microsoft 365 que te ayuda a crear, editar, analizar y optimizar tus documentos, hojas de cálculo, presentaciones y correos electrónicos. Funciona en Word, Excel, PowerPoint, Outlook y Teams.</p>
          <div class="grid grid-2">
            <div>
              <h5>¿Qué puede hacer Copilot en Office?</h5>
              <ul class="steps">
                <li><strong>En Word:</strong>
                  <ul class="steps">
                    <li>Generar borradores de documentos a partir de indicaciones.</li>
                    <li>Resumir textos largos o extraer puntos clave.</li>
                    <li>Mejorar el estilo, gramática y claridad del contenido.</li>
                  </ul>
                </li>
                <li><strong>En Excel:</strong>
                  <ul class="steps">
                    <li>Analizar datos y sugerir gráficos o tablas dinámicas.</li>
                    <li>Generar fórmulas complejas en lenguaje natural.</li>
                    <li>Identificar tendencias o anomalías en los datos.</li>
                  </ul>
                </li>
                <li><strong>En PowerPoint:</strong>
                  <ul class="steps">
                    <li>Crear presentaciones a partir de documentos de Word o notas.</li>
                    <li>Diseñar diapositivas con diseños profesionales.</li>
                    <li>Generar notas del orador automáticamente.</li>
                  </ul>
                </li>
                <li><strong>En Outlook:</strong>
                  <ul class="steps">
                    <li>Redactar respuestas a correos basadas en el contexto.</li>
                    <li>Resumir hilos de correo largos.</li>
                    <li>Programar reuniones con sugerencias de horarios.</li>
                  </ul>
                </li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Copilot+en+Office" alt="Copilot en Office">
                <figcaption>Copilot integrado en Word, Excel y PowerPoint.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Cómo activar y usar Copilot</h5>
              <ol class="steps">
                <li><strong>Requisitos:</strong>
                  <ul class="steps">
                    <li>Suscripción a <strong>Microsoft 365</strong> (plan empresarial o educación).</li>
                    <li>Sistema operativo: Windows 11 o macOS 12+. </li>
                    <li>Idioma: Actualmente disponible en inglés, con soporte para más idiomas en desarrollo.</li>
                  </ul>
                </li>
                <li><strong>Activación:</strong>
                  <ul class="steps">
                    <li>Tu administrador de TI debe habilitar Copilot para tu organización.</li>
                    <li>Aparecerá como un botón en la cinta de opciones de Word, Excel, etc.</li>
                  </ul>
                </li>
                <li><strong>Uso básico:</strong>
                  <ul class="steps">
                    <li>Haz clic en el botón <strong>Copilot</strong> o presiona <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>C</kbd>.</li>
                    <li>Escribe tu indicación en lenguaje natural (ejemplo: "<em>Resume este documento en 3 párrafos</em>").</li>
                    <li>Revisa y edita la respuesta generada por Copilot.</li>
                  </ul>
                </li>
              </ol>
              <div class="callout info">
                <strong>Ejemplo práctico con Copilot:</strong>
                <ol class="steps">
                  <li>En <strong>Word</strong>:
                    <ul class="steps">
                      <li>Pide: "<em>Redacta un correo formal para solicitar una reunión con el cliente X, incluyendo los puntos de la agenda adjunta</em>".</li>
                    </ul>
                  </li>
                  <li>En <strong>Excel</strong>:
                    <ul class="steps">
                      <li>Pide: "<em>Analiza estas ventas por región y sugiere un gráfico para presentar en la reunión</em>".</li>
                    </ul>
                  </li>
                  <li>En <strong>PowerPoint</strong>:
                    <ul class="steps">
                      <li>Pide: "<em>Crea una presentación sobre sostenibilidad ambiental con 5 diapositivas, usando los datos de este informe</em>".</li>
                    </ul>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <!-- Automatización con Power Automate -->
        <div class="card">
          <h4>Automatización de flujos de trabajo con Power Automate</h4>
          <p><strong>Power Automate</strong> te permite crear flujos de trabajo automatizados entre Office y cientos de otras aplicaciones, ahorrando tiempo en tareas repetitivas y reduciendo errores.</p>
          <div class="grid grid-2">
            <div>
              <h5>¿Qué es Power Automate?</h5>
              <ul class="steps">
                <li>Plataforma de <strong>automatización de procesos</strong> sin código.</li>
                <li>Conecta <strong>Office 365</strong> con apps como SharePoint, Teams, Dynamics 365, Salesforce, etc.</li>
                <li>Incluye <strong>plantillas predefinidas</strong> para tareas comunes.</li>
                <li>Permite crear flujos basados en <strong>eventos</strong> (ejemplo: recibir un email) o <strong>horarios</strong> (ejemplo: todos los lunes).</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/6264A7/FFFFFF?text=Power+Automate" alt="Power Automate">
                <figcaption>Interfaz de Power Automate para crear flujos automatizados.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Ejemplos prácticos de automatización</h5>
              <ul class="steps">
                <li><strong>Guardar adjuntos de Outlook en OneDrive:</strong>
                  <ol class="steps">
                    <li>Crea un flujo que se active cuando recibas un email con adjuntos.</li>
                    <li>Configura para guardar los adjuntos en una carpeta específica de OneDrive.</li>
                    <li>Añade una notificación en Teams cuando se guarde un adjunto.</li>
                  </ol>
                </li>
                <li><strong>Aprobación de documentos:</strong>
                  <ol class="steps">
                    <li>Envía un documento de Word para aprobación via email.</li>
                    <li>El flujo espera la respuesta ("Aprobado" o "Rechazado") y notifica al equipo.</li>
                    <li>Guarda una copia del documento aprobado en SharePoint.</li>
                  </ol>
                </li>
                <li><strong>Actualizar hojas de cálculo:</strong>
                  <ol class="steps">
                    <li>Programa un flujo para copiar datos de un formulario de Forms a una hoja de Excel.</li>
                    <li>Envía un resumen por email al equipo cada viernes.</li>
                  </ol>
                </li>
              </ul>
              <div class="callout info">
                <strong>Cómo crear un flujo en Power Automate:</strong>
                <ol class="steps">
                  <li>Ve a <a href="https://flow.microsoft.com" target="_blank">Power Automate</a> e inicia sesión.</li>
                  <li>Haz clic en "<strong>Crear</strong>" y elige una plantilla o comienza desde cero.</li>
                  <li>Selecciona el <strong>desencadenador</strong> (ejemplo: "Cuando se recibe un nuevo email").</li>
                  <li>Añade <strong>acciones</strong> (ejemplo: "Guardar adjunto en OneDrive").</li>
                  <li>Configura los detalles (ejemplo: carpeta de destino).</li>
                  <li>Guarda y prueba el flujo.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <!-- Integración de IA y automatización en flujos de trabajo -->
        <div class="card">
          <h4>Integración de IA y automatización en flujos de trabajo</h4>
          <p>Combina el poder de <strong>Copilot</strong> y <strong>Power Automate</strong> para crear flujos de trabajo inteligentes que optimicen tus procesos y reduzcan la carga manual.</p>
          <div class="grid grid-2">
            <div>
              <h5>Ejemplo 1: Procesamiento de facturas con IA</h5>
              <ol class="steps">
                <li><strong>Flujo automatizado:</strong>
                  <ul class="steps">
                    <li>Un proveedor envía una factura por email a tu bandeja de Outlook.</li>
                    <li>Power Automate detecta el email y guarda el adjunto (PDF) en una carpeta de SharePoint.</li>
                    <li>Copilot en Word extrae los datos clave (número de factura, monto, fecha) y los ingresa en una hoja de Excel.</li>
                    <li>El flujo envía una notificación a Teams para aprobación.</li>
                    <li>Una vez aprobada, se registra en el sistema contable.</li>
                  </ul>
                </li>
              </ol>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Procesamiento+de+Facturas" alt="Procesamiento de facturas con IA">
                <figcaption>Flujo automatizado para procesar facturas con Copilot y Power Automate.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Ejemplo 2: Generación de informes con datos en tiempo real</h5>
              <ol class="steps">
                <li><strong>Flujo automatizado:</strong>
                  <ul class="steps">
                    <li>Un formulario de Microsoft Forms recopila datos de una encuesta.</li>
                    <li>Power Automate detecta nuevas respuestas y las añade a una base de datos en Excel.</li>
                    <li>Copilot en Excel analiza los datos y genera un resumen con gráficos.</li>
                    <li>El flujo crea un documento de Word con el informe y lo envía por email a los interesados.</li>
                    <li>Se programa una reunión en Outlook para revisar los resultados.</li>
                  </ul>
                </li>
              </ol>
              <div class="callout info">
                <strong>Beneficios de integrar IA y automatización:</strong>
                <ul class="steps">
                  <li><strong>Ahorro de tiempo:</strong> Reduce tareas manuales repetitivas.</li>
                  <li><strong>Precisión:</strong> Minimiza errores humanos en procesos críticos.</li>
                  <li><strong>Escalabilidad:</strong> Maneja grandes volúmenes de datos sin esfuerzo adicional.</li>
                  <li><strong>Colaboración:</strong> Facilita el trabajo en equipo con notificaciones y aprobaciones.</li>
                </ul>
              </div>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Informes+Automatizados" alt="Informes automatizados">
                <figcaption>Generación automática de informes con datos en tiempo real.</figcaption>
              </figure>
            </div>
          </div>
        </div>
      </section>

      <!-- Módulo 9: Recursos y Plantillas -->
      <section id="recursos" class="block">
        <h3>9. Recursos, Plantillas y Tutoriales</h3>
        <p class="lead">Accede a plantillas descargables, tutoriales en video, cursos recomendados y otros recursos para seguir aprendiendo y mejorando tus habilidades con Microsoft Office. Todo organizado para que puedas encontrar lo que necesitas rápidamente.</p>

        <!-- Plantillas descargables -->
        <div class="card">
          <h4>Plantillas descargables para Microsoft Office</h4>
          <p>Descarga estas plantillas profesionales para ahorrar tiempo y asegurar que tus documentos, hojas de cálculo y presentaciones tengan un diseño impecable:</p>
          <div class="grid grid-3">
            <div class="feature-item">
              <h5><span class="app-icon icon-word">W</span> Plantillas para Word</h5>
              <ul class="steps">
                <li><a href="#" class="download-btn">CV Profesional</a></li>
                <li><a href="#" class="download-btn">Informe Anual</a></li>
                <li><a href="#" class="download-btn">Carta Formal</a></li>
                <li><a href="#" class="download-btn">Tesis Académica</a></li>
              </ul>
            </div>
            <div class="feature-item">
              <h5><span class="app-icon icon-excel">X</span> Plantillas para Excel</h5>
              <ul class="steps">
                <li><a href="#" class="download-btn">Presupuesto Mensual</a></li>
                <li><a href="#" class="download-btn">Seguimiento de Gastos</a></li>
                <li><a href="#" class="download-btn">Inventario de Productos</a></li>
                <li><a href="#" class="download-btn">Calendario Anual</a></li>
              </ul>
            </div>
            <div class="feature-item">
              <h5><span class="app-icon icon-powerpoint">P</span> Plantillas para PowerPoint</h5>
              <ul class="steps">
                <li><a href="#" class="download-btn">Presentación de Negocios</a></li>
                <li><a href="#" class="download-btn">Portafolio Creativo</a></li>
                <li><a href="#" class="download-btn">Pitch de Ventas</a></li>
                <li><a href="#" class="download-btn">Informe de Proyecto</a></li>
              </ul>
            </div>
          </div>
          <div class="callout info">
            <strong>Cómo usar las plantillas:</strong>
            <ol class="steps">
              <li>Descarga el archivo y ábrelo con la aplicación correspondiente.</li>
              <li>Personaliza el contenido (texto, imágenes, datos) según tus necesidades.</li>
              <li>Guarda una copia con un nuevo nombre para no sobrescribir la plantilla original.</li>
            </ol>
          </div>
        </div>

        <!-- Tutoriales en video -->
        <div class="card">
          <h4>Tutoriales en video para dominar Microsoft Office</h4>
          <p>Aprende con estos tutoriales paso a paso en video, desde lo básico hasta técnicas avanzadas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Cursos recomendados en YouTube</h5>
              <div class="video-container">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Tutorial de Word para principiantes" allowfullscreen></iframe>
              </div>
              <p><strong>Word para principiantes:</strong> Desde formato básico hasta estilos y tablas de contenido.</p>
              <div class="video-container">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Excel avanzado con Power Query" allowfullscreen></iframe>
              </div>
              <p><strong>Excel avanzado:</strong> Power Query, tablas dinámicas y dashboards.</p>
            </div>
            <div>
              <h5>Listas de reproducción recomendadas</h5>
              <ul class="steps">
                <li><a href="https://www.youtube.com/playlist?list=PLN4aRZp9LcQJdXgFxXgF5XgF5XgF5XgF5" target="_blank">Microsoft Word - De cero a experto</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLN4aRZp9LcQJdXgFxXgF5XgF5XgF5XgF5" target="_blank">Excel para análisis de datos</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLN4aRZp9LcQJdXgFxXgF5XgF5XgF5XgF5" target="_blank">PowerPoint: Presentaciones impactantes</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLN4aRZp9LcQJdXgFxXgF5XgF5XgF5XgF5" target="_blank">Outlook: Gestión de correo y calendario</a></li>
              </ul>
              <div class="callout info">
                <strong>Canales recomendados:</strong>
                <ul class="steps">
                  <li><a href="https://www.youtube.com/c/MicrosoftOffice" target="_blank">Microsoft Office (oficial)</a></li>
                  <li><a href="https://www.youtube.com/c/LeilaGharani" target="_blank">Leila Gharani (Excel)</a></li>
                  <li><a href="https://www.youtube.com/c/KevinStratvert" target="_blank">Kevin Stratvert (Office 365)</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Cursos y certificaciones -->
        <div class="card">
          <h4>Cursos y certificaciones oficiales de Microsoft</h4>
          <p>Mejora tus habilidades y certifica tus conocimientos con estos cursos oficiales de Microsoft:</p>
          <div class="grid grid-2">
            <div>
              <h5>Cursos gratuitos en Microsoft Learn</h5>
              <ul class="steps">
                <li><a href="https://learn.microsoft.com/es-es/training/paths/word-associate/" target="_blank">Microsoft Word (Asociado)</a>: Fundamentos y funciones avanzadas.</li>
                <li><a href="https://learn.microsoft.com/es-es/training/paths/excel-associate/" target="_blank">Microsoft Excel (Asociado)</a>: Desde fórmulas hasta análisis de datos.</li>
                <li><a href="https://learn.microsoft.com/es-es/training/paths/powerpoint-associate/" target="_blank">Microsoft PowerPoint (Asociado)</a>: Diseño de presentaciones profesionales.</li>
                <li><a href="https://learn.microsoft.com/es-es/training/paths/m365-teams-associate/" target="_blank">Microsoft Teams (Asociado)</a>: Colaboración y comunicación en equipo.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Microsoft+Learn" alt="Microsoft Learn">
                <figcaption>Plataforma Microsoft Learn con cursos gratuitos.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Certificaciones oficiales</h5>
              <ul class="steps">
                <li><strong>Microsoft Office Specialist (MOS):</strong>
                  <ul class="steps">
                    <li>Certifica tus habilidades en Word, Excel, PowerPoint, Outlook o Access.</li>
                    <li>Exámenes disponibles en <a href="https://www.certiport.com/" target="_blank">Certiport</a>.</li>
                  </ul>
                </li>
                <li><strong>Microsoft Certified: Modern Desktop Administrator Associate:</strong>
                  <ul class="steps">
                    <li>Para profesionales de TI que implementan y gestionan Office 365.</li>
                    <li>Incluye exámenes como <strong>MD-100</strong> y <strong>MD-101</strong>.</li>
                  </ul>
                </li>
                <li><strong>Microsoft 365 Certified: Teams Administrator Associate:</strong>
                  <ul class="steps">
                    <li>Enfocado en la administración de Microsoft Teams.</li>
                    <li>Examen: <strong>MS-700</strong>.</li>
                  </ul>
                </li>
              </ul>
              <div class="callout ok">
                <strong>Beneficios de certificarte:</strong>
                <ul class="steps">
                  <li>Validar tus habilidades ante empleadores.</li>
                  <li>Acceder a mejores oportunidades laborales.</li>
                  <li>Diferenciarte en el mercado laboral.</li>
                  <li>Obtener descuentos en productos Microsoft.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Comunidades y soporte -->
        <div class="card">
          <h4>Comunidades y soporte técnico</h4>
          <p>Únete a comunidades de usuarios, accede a foros de soporte y encuentra respuestas a tus preguntas:</p>
          <div class="grid grid-2">
            <div>
              <h5>Foros y comunidades</h5>
              <ul class="steps">
                <li><a href="https://answers.microsoft.com/es-es" target="_blank">Microsoft Answers</a>: Foro oficial de soporte comunitario.</li>
                <li><a href="https://techcommunity.microsoft.com/" target="_blank">Microsoft Tech Community</a>: Discusiones técnicas y novedades.</li>
                <li><a href="https://www.reddit.com/r/office365/" target="_blank">Reddit r/office365</a>: Comunidad activa de usuarios.</li>
                <li><a href="https://www.reddit.com/r/excel/" target="_blank">Reddit r/excel</a>: Foro especializado en Excel.</li>
              </ul>
              <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/0078D4/FFFFFF?text=Microsoft+Answers" alt="Microsoft Answers">
                <figcaption>Foro Microsoft Answers para soporte comunitario.</figcaption>
              </figure>
            </div>
            <div>
              <h5>Soporte técnico oficial</h5>
              <ul class="steps">
                <li><strong>Ayuda en línea:</strong>
                  <ul class="steps">
                    <li><a href="https://support.microsoft.com/es-es/office" target="_blank">Soporte de Office</a>: Guías y tutoriales.</li>
                    <li><a href="https://support.microsoft.com/es-es" target="_blank">Soporte de Microsoft</a>: Solución de problemas.</li>
                  </ul>
                </li>
                <li><strong>Contactar con soporte:</strong>
                  <ul class="steps">
                    <li>Para usuarios de <strong>Microsoft 365</strong>, usa el chat o teléfono desde <a href="https://support.microsoft.com/es-es/contactus/" target="_blank">Contactar soporte</a>.</li>
                    <li>Para problemas de instalación, usa el <a href="https://aka.ms/SARA-OfficeUninstall" target="_blank">Asistente de recuperación de Office</a>.</li>
                  </ul>
                </li>
                <li><strong>Diagnóstico automático:</strong>
                  <ul class="steps">
                    <li>Descarga la <a href="https://aka.ms/SARA-OfficeSetup" target="_blank">herramienta SARA</a> para solucionar problemas comunes.</li>
                  </ul>
                </li>
              </ul>
              <div class="callout info">
                <strong>Consejos para obtener ayuda:</strong>
                <ul class="steps">
                  <li>Antes de contactar al soporte, busca tu problema en <a href="https://support.microsoft.com" target="_blank">Microsoft Support</a>.</li>
                  <li>Proporciona detalles específicos: versión de Office, sistema operativo y pasos para reproducir el error.</li>
                  <li>Si el problema es con un archivo, comparte una <strong>copia de ejemplo</strong> (sin datos sensibles).</li>
                </ul>
              </div>
            </div>
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
          <img src="https://cdn-icons-png.flaticon.com/512/732/732221.png" width="24" height="24" alt="Microsoft Office">
          <span>Guía Completa de Microsoft Office 2025</span>
        </div>
        <p class="footer-note">Domina Microsoft Office con esta guía actualizada: desde lo básico hasta IA, automatización y seguridad. Ideal para estudiantes, profesionales y empresas.</p>
        <div class="footer-social">
          <a href="https://facebook.com" aria-label="Facebook"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
          <a href="https://twitter.com" aria-label="Twitter"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0 0 22 5.92a8.19 8.19 0 0 1-2.357.646 4.118 4.118 0 0 0 1.804-2.269 8.224 8.224 0 0 1-2.605.996 4.107 4.107 0 0 0 6.993 3.743A11.65 11.65 0 0 1-4.257 8.191 8.26 8.26 0 0 0 12.75 20.25c.171 0 .343 0 .512-.009z"/></svg></a>
          <a href="https://linkedin.com" aria-label="LinkedIn"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 1.268h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764z"/></svg></a>
          <a href="https://youtube.com" aria-label="YouTube"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M10 8v8l6-4-6-4zm11-5H3v18h18V3zm-2 16H5V5h14v14z"/></svg></a>
        </div>
      </div>
      <div>
        <div class="footer-title">Módulos</div>
        <ul class="footer-list">
          <li><a href="#introduccion">1. Introducción</a></li>
          <li><a href="#componentes">2. Componentes</a></li>
          <li><a href="#instalacion">3. Instalación</a></li>
          <li><a href="#entorno">4. Entorno Común</a></li>
          <li><a href="#nube">5. Office en la Nube</a></li>
          <li><a href="#seguridad">6. Seguridad</a></li>
          <li><a href="#atajos">7. Atajos y Consejos</a></li>
          <li><a href="#ia">8. IA y Automatización</a></li>
          <li><a href="#recursos">9. Recursos</a></li>
        </ul>
      </div>
      <div>
        <div class="footer-title">Recursos Rápidos</div>
        <ul class="footer-list">
          <li><a href="https://www.office.com" target="_blank">Office Online</a></li>
          <li><a href="https://onedrive.live.com" target="_blank">OneDrive</a></li>
          <li><a href="https://www.microsoft.com/es-es/microsoft-365/online/outlook" target="_blank">Outlook en la web</a></li>
          <li><a href="https://support.microsoft.com/es-es/office" target="_blank">Soporte de Office</a></li>
        </ul>
      </div>
      <div>
        <div class="footer-title">Contacto</div>
        <ul class="footer-list">
          <li><a href="mailto:info@officeguia.com">info@officeguia.com</a></li>
          <li>© 2025 Guía Completa de Microsoft Office</li>
        </ul>
      </div>
    </div>
  </footer>
  <a class="backtop" href="#top" aria-label="Volver arriba">↑</a>

  <script>
    // Datos para el buscador (ampliados)
    const searchData = [
      // Introducción
      { title: "¿Qué es Microsoft Office?", href: "#introduccion", description: "Definición y componentes de la suite de productividad de Microsoft.", keywords: "office, microsoft, suite, productividad, aplicaciones" },
      { title: "Historia de Microsoft Office", href: "#introduccion", description: "Evolución desde 1989 hasta Microsoft 365 y las novedades de 2025.", keywords: "historia, evolución, office 95, office 2007, microsoft 365, copilot" },
      { title: "Office 2021 vs. Microsoft 365", href: "#introduccion", description: "Comparación detallada entre la versión de pago único y la suscripción.", keywords: "office 2021, microsoft 365, suscripción, pago único, diferencias, comparación" },
      { title: "Requisitos para instalar Office", href: "#introduccion", description: "Hardware y software necesarios para Office 2021 y Microsoft 365, incluyendo requisitos para IA.", keywords: "requisitos, instalación, windows, macos, copilot, ram, almacenamiento" },
      { title: "Crear cuenta Microsoft", href: "#introduccion", description: "Cómo registrar una cuenta Microsoft para activar Office y sincronizar documentos.", keywords: "cuenta microsoft, iniciar sesión, activar office, outlook.com, seguridad" },
      // Componentes
      { title: "Microsoft Word", href: "#componentes", description: "Procesador de texto para documentos profesionales, con IA (Copilot) y herramientas de accesibilidad.", keywords: "word, procesador de texto, documentos, plantillas, copilot, accesibilidad, lector inmersivo" },
      { title: "Microsoft Excel", href: "#componentes", description: "Hoja de cálculo para análisis de datos, fórmulas avanzadas, Power Query y dashboards.", keywords: "excel, hojas de cálculo, fórmulas, tablas dinámicas, power query, gráficos, copilot" },
      { title: "Microsoft PowerPoint", href: "#componentes", description: "Herramienta para crear presentaciones con diseños profesionales, animaciones y IA.", keywords: "powerpoint, presentaciones, diapositivas, diseños, morph, zoom, copilot" },
      { title: "Microsoft Outlook", href: "#componentes", description: "Gestor de correo, calendario y tareas con integración a Teams y IA para redacción.", keywords: "outlook, correo, calendario, contactos, teams, copilot, reglas" },
      { title: "Microsoft Access", href: "#componentes", description: "Base de datos relacional para organizar información sin necesidad de programación.", keywords: "access, base de datos, tablas, consultas, sql, formularios, informes" },
      { title: "Microsoft OneNote", href: "#componentes", description: "Bloc de notas digital para capturar ideas, organizar información y colaborar en proyectos.", keywords: "onenote, notas, organización, sincronización, audio, copilot" },
      { title: "Microsoft Publisher", href: "#componentes", description: "Diseño de publicaciones profesionales como folletos, trípticos y catálogos.", keywords: "publisher, diseño, folletos, marketing, plantillas, impresión" },
      { title: "Microsoft Teams", href: "#componentes", description: "Plataforma de colaboración con chat, videollamadas y reuniones virtuales.", keywords: "teams, colaboración, reuniones, chat, videollamadas, integración" },
      { title: "OneDrive", href: "#componentes", description: "Almacenamiento en la nube integrado con Office para guardar y compartir documentos.", keywords: "onedrive, nube, almacenamiento, sincronización, seguridad, respaldo" },
      { title: "Power Automate", href: "#componentes", description: "Automatización de flujos de trabajo entre Office y otras aplicaciones.", keywords: "power automate, automatización, flujos, integración, office 365" },
      // Instalación
      { title: "Instalar Microsoft 365", href: "#instalacion", description: "Pasos para descargar e instalar Office con suscripción en PC, Mac o móvil.", keywords: "instalar, microsoft 365, suscripción, descarga, pc, mac, móvil" },
      { title: "Instalar Office 2021", href: "#instalacion", description: "Guía para instalar la versión de pago único con clave de producto.", keywords: "office 2021, instalación, clave de producto, pago único, activación" },
      { title: "Activar Office", href: "#instalacion", description: "Cómo activar la licencia o suscripción en Word, Excel y otras aplicaciones.", keywords: "activar, licencia, suscripción, clave de producto, cuenta microsoft, error" },
      { title: "Actualizar Office", href: "#instalacion", description: "Configurar actualizaciones automáticas para nuevas funciones y seguridad.", keywords: "actualizar, actualizaciones, seguridad, nuevas funciones, configuración" },
      { title: "Configurar idioma en Office", href: "#instalacion", description: "Cambiar el idioma de la interfaz, corrector ortográfico y preferencias regionales.", keywords: "idioma, español, inglés, configuración, corrector, interfaz" },
      { title: "Office en móvil", href: "#instalacion", description: "Cómo instalar y usar Office en Android o iOS (iPhone/iPad).", keywords: "móvil, android, ios, iphone, ipad, app, tablet" },
      // Entorno
      { title: "Cinta de opciones (Ribbon)", href: "#entorno", description: "Explicación de las pestañas y herramientas de la cinta de opciones en Office.", keywords: "ribbon, cinta de opciones, pestañas, herramientas, personalizar, atajos" },
      { title: "Barra de acceso rápido", href: "#entorno", description: "Personalizar la barra con comandos frecuentes como Guardar o Deshacer.", keywords: "barra de acceso rápido, personalizar, comandos, guardar, deshacer, rehacer" },
      { title: "Ayuda de Office", href: "#entorno", description: "Cómo usar la ayuda integrada, el campo 'Dime qué deseas hacer' y tutoriales.", keywords: "ayuda, búsqueda, f1, soporte, tutoriales, dime qué deseas hacer" },
      { title: "Personalizar Office", href: "#entorno", description: "Configurar la cinta de opciones, temas, opciones de guardado y complementos.", keywords: "personalizar, cinta, tema, opciones, guardado, complementos, extensiones" },
      // Nube
      { title: "OneDrive y Office", href: "#nube", description: "Cómo usar OneDrive para guardar, sincronizar y compartir documentos en la nube.", keywords: "onedrive, guardar, sincronizar, compartir, nube, almacenamiento, seguridad" },
      { title: "Compartir documentos", href: "#nube", description: "Tutorial para compartir archivos con permisos de edición o solo lectura.", keywords: "compartir, permisos, edición, lectura, enlace, colaborar, equipo" },
      { title: "Colaboración en tiempo real", href: "#nube", description: "Trabajar con otros usuarios en el mismo documento simultáneamente.", keywords: "colaboración, tiempo real, compartir, editar, comentarios, cambios, equipo" },
      { title: "Sincronizar dispositivos", href: "#nube", description: "Acceder a documentos desde PC, Mac, tablet y móvil con OneDrive.", keywords: "sincronizar, dispositivos, pc, mac, tablet, móvil, oneDrive, acceso" },
      { title: "OneDrive vs. SharePoint", href: "#nube", description: "Diferencias y cuándo usar cada servicio para almacenamiento y colaboración.", keywords: "onedrive, sharepoint, diferencias, almacenamiento, colaboración, equipo, empresa" },
      // Seguridad
      { title: "Guardado automático", href: "#seguridad", description: "Configurar AutoGuardado y recuperar archivos no guardados o versiones anteriores.", keywords: "guardado automático, recuperar, archivos, versiones, oneDrive, autoguardado, pérdida" },
      { title: "Proteger documentos", href: "#seguridad", description: "Usar contraseñas, restricciones de edición y permisos para asegurar archivos.", keywords: "proteger, contraseña, seguridad, permisos, edición, restricciones, cifrar" },
      { title: "Respaldo de archivos", href: "#seguridad", description: "Estrategias de respaldo (3-2-1) y herramientas como OneDrive o Time Machine.", keywords: "respaldo, copia de seguridad, 3-2-1, oneDrive, time machine, disco duro, nube" },
      { title: "Cumplimiento normativo", href: "#seguridad", description: "Herramientas de Microsoft 365 para GDPR, HIPAA y protección de datos.", keywords: "cumplimiento, gdpr, hipaa, privacidad, purview, etiquetas, confidencialidad, seguridad" },
      // Atajos
      { title: "Atajos de teclado", href: "#atajos", description: "Lista completa de atajos para Word, Excel, PowerPoint y Outlook.", keywords: "atajos, teclado, ctrl+c, ctrl+v, word, excel, powerpoint, outlook" },
      { title: "Portapapeles de Office", href: "#atajos", description: "Copiar y pegar múltiples elementos entre aplicaciones con historial.", keywords: "portapapeles, copiar, pegar, historial, word, excel, powerpoint, vincular" },
      { title: "Vincular datos entre apps", href: "#atajos", description: "Insertar tablas de Excel en Word o gráficos en PowerPoint con vínculos actualizables.", keywords: "vincular, excel, word, powerpoint, pegado especial, datos, actualizar" },
      { title: "Consejos de productividad", href: "#atajos", description: "Trucos para trabajar más rápido: plantillas, macros, complementos y más.", keywords: "productividad, consejos, trucos, plantillas, macros, complementos, extensiones" },
      // IA y Automatización
      { title: "Microsoft Copilot", href: "#ia", description: "Asistente de IA en Office para generar contenido, analizar datos y optimizar documentos.", keywords: "copilot, ia, inteligencia artificial, word, excel, powerpoint, outlook, generar, analizar" },
      { title: "Power Automate", href: "#ia", description: "Automatización de flujos de trabajo entre Office y otras aplicaciones.", keywords: "power automate, automatización, flujos, office 365, integración, tareas, repetitivas" },
      { title: "IA en Office", href: "#ia", description: "Cómo usar Copilot para redactar, analizar datos, crear presentaciones y más.", keywords: "ia, copilot, redactar, analizar, presentaciones, datos, word, excel, powerpoint" },
      { title: "Automatización con Office", href: "#ia", description: "Ejemplos prácticos de flujos automatizados con Power Automate y Copilot.", keywords: "automatización, power automate, copilot, flujos, ejemplos, facturas, informes, aprobar" },
      // Recursos
      { title: "Plantillas para Office", href: "#recursos", description: "Descarga plantillas gratuitas para Word, Excel, PowerPoint y más.", keywords: "plantillas, descargar, word, excel, powerpoint, cv, presupuesto, informe" },
      { title: "Tutoriales en video", href: "#recursos", description: "Cursos y tutoriales en YouTube para aprender Office desde cero.", keywords: "tutoriales, video, youtube, cursos, aprender, word, excel, powerpoint, principiante" },
      { title: "Certificaciones de Microsoft", href: "#recursos", description: "Cursos y exámenes oficiales para certificar tus habilidades en Office.", keywords: "certificaciones, mos, microsoft, office, word, excel, powerpoint, exámenes, habilidades" },
      { title: "Soporte técnico", href: "#recursos", description: "Foros, comunidades y contacto con soporte oficial de Microsoft.", keywords: "soporte, técnico, foros, comunidades, microsoft answers, ayuda, problemas, errores" }
    ];

    // Funcionalidad de búsqueda mejorada
    document.addEventListener('DOMContentLoaded', function() {
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
          item.description.toLowerCase().includes(query.toLowerCase()) ||
          item.keywords.toLowerCase().includes(query.toLowerCase())
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
          noResults.textContent = 'No se encontraron resultados. Prueba con otro término o revisa la sección de recursos.';
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

      // Barra de progreso de scroll
      window.addEventListener('scroll', function() {
        const winHeight = window.innerHeight;
        const docHeight = document.documentElement.scrollHeight;
        const scrollTop = window.pageYOffset;
        const trackLength = docHeight - winHeight;
        const progress = Math.floor(scrollTop / trackLength * 100);
        document.getElementById('progressBar').style.width = progress + '%';
      });

      // Toggle para tema oscuro/claro
      const themeToggle = document.getElementById('themeToggle');
      themeToggle.addEventListener('change', function() {
        document.body.classList.toggle('theme-dark', this.checked);
        localStorage.setItem('theme', this.checked ? 'dark' : 'light');
      });

      // Cargar preferencia de tema guardada
      if (localStorage.getItem('theme') === 'dark') {
        themeToggle.checked = true;
        document.body.classList.add('theme-dark');
      }

      // Botón para volver arriba
      const backTop = document.querySelector('.backtop');
      window.addEventListener('scroll', function() {
        backTop.style.display = window.pageYOffset > 300 ? 'grid' : 'none';
      });

      // Navegación suave a secciones
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
          }
        });
      });

      // Toggle para la tabla de contenidos en móviles/tablets
      const tocToggle = document.getElementById('tocToggle');
      const toc = document.getElementById('toc');
      tocToggle.addEventListener('click', function() {
        toc.classList.toggle('show');
        const isExpanded = toc.classList.contains('show');
        tocToggle.textContent = isExpanded ? 'Ocultar tabla de contenidos' : 'Mostrar tabla de contenidos';
      });

      // Asegurar que el TOC esté oculto en móviles al cargar
      if (window.innerWidth <= 1200) {
        toc.classList.remove('show');
      }

      // Ajustar el comportamiento en cambios de tamaño de pantalla
      window.addEventListener('resize', function() {
        if (window.innerWidth <= 1200) {
          toc.classList.remove('show');
          tocToggle.textContent = 'Mostrar tabla de contenidos';
        } else {
          toc.classList.add('show');
        }
      });
    });
  </script>
</body>
</html>

