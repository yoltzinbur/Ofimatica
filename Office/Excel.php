<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Guía Completa de Microsoft Excel 2025 | Aprende desde Cero hasta Avanzado</title>
<style>
:root {
    --excel-green: #107C41;
    --excel-green-light: #21A366;
    --excel-green-lighter: #33C481;
    --excel-green-dark: #0D7239;
    --accent: #107C41;
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
    --info: #107C41;
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
.progress .bar { height: 100%; width: 0%; background: linear-gradient(90deg, var(--excel-green), var(--excel-green-light)); transition: width 0.3s ease; }
header { position: sticky; top: 0; z-index: 900; background: color-mix(in srgb, var(--card) 85%, transparent); backdrop-filter: saturate(160%) blur(16px); border-bottom: 1px solid var(--border); box-shadow: 0 1px 0 rgba(0,0,0,.03); }
.nav { display: flex; align-items: center; justify-content: space-between; max-width: var(--container); margin: 0 auto; padding: 12px 22px; gap: 16px; flex-wrap: wrap; }
.brand { display: flex; align-items: center; gap: 10px; color: var(--excel-green); font-weight: 700; }
.brand img { width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, var(--excel-green), var(--excel-green-light)); box-shadow: var(--sd8); padding: 6px; }
.brand h1 { font-size: 1.1rem; white-space: nowrap; }
.search { position: relative; flex: 1; max-width: 500px; margin: 0 20px; }
.searchbox { position: relative; display: flex; align-items: center; background: var(--bg-2); border: 1px solid var(--border); border-radius: 999px; padding: 8px 14px; transition: all var(--speed); box-shadow: inset 0 1px 0 rgba(255,255,255,.7); }
.searchbox:focus-within { background: #fff; box-shadow: 0 0 0 2px var(--excel-green); }
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
.theme-switch:hover { border-color: var(--excel-green); }
.theme-switch .dot { width: 18px; height: 18px; border-radius: 50%; background: var(--excel-green); position: relative; overflow: hidden; }
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
.toc-toggle:hover { background: var(--bg-2); border-color: var(--excel-green); }
.wrap { display: grid; grid-template-columns: 280px 1fr; gap: 32px; max-width: var(--container); margin: 32px auto; padding: 0 22px; }
@media (max-width: 1024px) { .wrap { grid-template-columns: 1fr; } }
.toc { position: sticky; top: 100px; align-self: start; background: var(--card); border: 1px solid var(--border); border-radius: 14px; padding: 16px; box-shadow: var(--sd4); height: 80vh; overflow-y: auto; }
.toc h2 { font-size: 1.1rem; margin-bottom: 12px; color: var(--excel-green); }
.toc ul { list-style: none; padding-left: 0; }
.toc li { margin: .5rem 0; }
.toc a { color: var(--txt-2); font-size: .9rem; display: block; padding: 4px 0; border-left: 2px solid transparent; padding-left: 8px; transition: all var(--speed); }
.toc a:hover { color: var(--txt); border-left-color: var(--excel-green); text-decoration: none; }
@media (max-width: 1024px) {
    .toc-toggle { display: block; }
    .toc { display: none; position: relative; top: 0; margin-bottom: 24px; }
    .toc.show { display: block; }
}
main { min-height: 80vh; }
.hero { background: linear-gradient(135deg, var(--excel-green), var(--excel-green-light)); color: #fff; padding: 64px 32px; border-radius: 14px; margin-bottom: 32px; text-align: center; }
.hero h2 { font-size: var(--fs-hero); font-weight: 300; margin-bottom: 16px; }
.hero p { font-size: var(--fs-lg); opacity: .95; max-width: 800px; margin: 0 auto 24px; }
.actions { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
.btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; border-radius: 999px; font-weight: 600; background: var(--excel-green-light); color: #fff; border: 1px solid transparent; transition: all var(--speed); text-decoration: none; }
.btn:hover { background: color-mix(in srgb, var(--excel-green-light), black 10%); transform: translateY(-2px); box-shadow: var(--sd8); text-decoration: none; }
.btn-outline { background: transparent; border-color: rgba(255,255,255,.4); color: #fff; }
.btn-outline:hover { background: rgba(255,255,255,.1); border-color: rgba(255,255,255,.6); }
.block { margin-bottom: 64px; }
.block h3 { font-size: var(--fs-xl); font-weight: 300; color: var(--excel-green); margin-bottom: 16px; border-bottom: 1px solid var(--border); padding-bottom: 8px; }
.lead { font-size: var(--fs-lg); color: var(--txt-2); margin-bottom: 32px; max-width: 900px; }
.grid { display: grid; gap: 24px; }
.grid-2 { grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); }
.grid-3 { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
.card { background: var(--card); border: 1px solid var(--border); border-radius: 14px; padding: 24px; box-shadow: var(--sd4); transition: all var(--speed); }
.card:hover { transform: translateY(-2px); box-shadow: var(--sd8); border-color: var(--excel-green); }
.card h4 { font-size: 1.25rem; margin-bottom: 12px; color: var(--excel-green); }
.muted { color: var(--txt-3); font-size: .9rem; }
.steps { list-style: none; padding-left: 0; }
.steps li { position: relative; padding-left: 28px; margin-bottom: 12px; }
.steps li:before { content: ""; position: absolute; left: 0; top: 8px; width: 12px; height: 12px; border-radius: 50%; background: var(--excel-green); }
.steps ol { list-style: decimal; padding-left: 20px; margin-top: 8px; }
.steps ol li { margin-bottom: 8px; padding-left: 4px; }
.steps ol li:before { display: none; }
.callout { padding: 16px; border-radius: 10px; margin: 20px 0; border-left: 4px solid var(--info); background: rgba(16, 124, 65, .05); }
.callout.ok { border-left-color: var(--ok); background: rgba(16, 124, 16, .05); }
.callout.warn { border-left-color: var(--warn); background: rgba(255, 140, 0, .05); }
.callout.danger { border-left-color: var(--danger); background: rgba(209, 52, 56, .05); }
.callout.info { border-left-color: var(--info); background: rgba(16, 124, 65, .05); }
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
.footer-social a:hover { background: var(--excel-green); color: #fff; border-color: var(--excel-green); transform: translateY(-2px); }
.footer-title { font-weight: 600; margin-bottom: 12px; color: var(--excel-green); }
.footer-list { list-style: none; padding-left: 0; }
.footer-list li { margin-bottom: 8px; }
.footer-list a { color: var(--txt-2); transition: color var(--speed); }
.footer-list a:hover { color: var(--txt); }
.backtop { position: fixed; bottom: 20px; right: 20px; width: 48px; height: 48px; border-radius: 50%; background: var(--excel-green); color: #fff; display: grid; place-items: center; text-decoration: none; box-shadow: var(--sd8); transition: all var(--speed); z-index: 100; }
.backtop:hover { transform: translateY(-2px); box-shadow: var(--sd16); text-decoration: none; }
.visually-hidden { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0; }
.skip { position: absolute; top: -40px; left: 6px; background: var(--excel-green); color: #fff; padding: 8px; border-radius: 4px; z-index: 1000; transition: top 0.3s; }
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
    border-left: 4px solid var(--excel-green);
}
.feature-item h5 {
    font-size: 1rem;
    margin-bottom: 8px;
    color: var(--excel-green);
}
.timeline {
    position: relative;
    padding-left: 20px;
    margin: 20px 0;
    border-left: 2px solid var(--border);
}
.timeline-item {
    position: relative;
    padding-left: 20px;
    margin-bottom: 20px;
}
.timeline-item:before {
    content: "";
    position: absolute;
    left: -28px;
    top: 0;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--excel-green);
}
.timeline-year {
    font-weight: 700;
    color: var(--excel-green);
    margin-bottom: 4px;
}
.newsletter-form {
    display: flex;
    gap: 8px;
    margin-top: 12px;
}
.newsletter-form input {
    flex: 1;
    padding: 8px 12px;
    border: 1px solid var(--border);
    border-radius: 6px;
    font-size: .9rem;
}
.newsletter-form button {
    padding: 8px 16px;
    background: var(--excel-green);
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background var(--speed);
}
.newsletter-form button:hover {
    background: var(--excel-green-light);
}
.project-card {
    background: var(--bg-2);
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 24px;
    margin: 20px 0;
}
.project-card h4 {
    color: var(--excel-green);
    margin-bottom: 12px;
}
.project-steps {
    margin: 16px 0;
}
.project-example {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 12px;
    margin: 12px 0;
    overflow-x: auto;
}
.project-download {
    display: inline-block;
    margin-top: 16px;
    padding: 8px 16px;
    background: var(--excel-green);
    color: #fff;
    border-radius: 6px;
    text-decoration: none;
    transition: background var(--speed);
}
.project-download:hover {
    background: var(--excel-green-light);
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
    <img src="https://cdn-icons-png.flaticon.com/512/732/732221.png" alt="Logotipo de Excel 2025" width="38" height="38">
    <h1>Guía Completa de Microsoft Excel 2025</h1>
    </div>
    <div class="search" role="search">
    <form class="searchbox" autocomplete="off" onsubmit="return false;">
        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true">
        <path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16a6.471 6.471 0 0 0 4.23-1.57l.27.28v.79l5 5 1.5-1.5-5-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
        </svg>
        <input id="siteSearch" type="search" placeholder="Buscar en la guía de Excel..."
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
        <a href="Excel.php">Excel</a>
        <a href="Word.php">Word</a>
        <a href="PowerPoint.php">Power Point</a>
        <a href="OneDrive.php">One Drive</a>
        <a href="Outlook.php">Outlook</a>
    </div>
</nav>
</header>
<div class="wrap">
<button class="toc-toggle" id="tocToggle">📋 Mostrar tabla de contenidos</button>
<aside class="toc" aria-label="Tabla de contenidos" id="toc">
    <h2>Contenido</h2>
    <ul>
    <li><a href="#inicio">Inicio</a></li>
    <li><a href="#modulo1">Módulo 1: Introducción a Excel</a></li>
    <li><a href="#modulo2">Módulo 2: Manejo de Celdas y Datos</a></li>
    <li><a href="#modulo3">Módulo 3: Formato y Diseño</a></li>
    <li><a href="#modulo4">Módulo 4: Fórmulas y Funciones Básicas</a></li>
    <li><a href="#modulo5">Módulo 5: Gestión de Datos y Tablas</a></li>
    <li><a href="#modulo6">Módulo 6: Gráficos y Visualización</a></li>
    <li><a href="#modulo7">Módulo 7: Funciones Intermedias</a></li>
    <li><a href="#modulo8">Módulo 8: Tablas Dinámicas</a></li>
    <li><a href="#modulo9">Módulo 9: Análisis de Datos</a></li>
    <li><a href="#modulo10">Módulo 10: Funciones Avanzadas</a></li>
    <li><a href="#modulo11">Módulo 11: Diseño de Informes</a></li>
    <li><a href="#modulo12">Módulo 12: Colaboración y Nube</a></li>
    <li><a href="#modulo13">Módulo 13: Macros y Automatización</a></li>
    <li><a href="#modulo14">Módulo 14: Integración con Otros Programas</a></li>
    <li><a href="#modulo15">Módulo 15: Trucos y Atajos</a></li>
    <li><a href="#modulo16">Módulo 16: Prácticas y Proyectos</a></li>
    </ul>
</aside>
<main>
    <!-- Sección de Inicio -->
    <section class="hero" id="inicio">
    <h2>Guía Completa de Microsoft Excel 2025</h2>
    <p>Domina <strong>Microsoft Excel 2025</strong> desde cero hasta nivel avanzado: fórmulas, funciones, tablas dinámicas, macros, análisis de datos, colaboración en la nube y más. Incluye <followup encodedFollowup="%7B%22snippet%22%3A%22ejemplos%20pr%C3%A1cticos%2C%20im%C3%A1genes%2C%20consejos%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20tipo%20de%20ejemplos%20pr%C3%A1cticos%20y%20consejos%20se%20incluyen%20para%20facilitar%20el%20aprendizaje%3F%22%2C%22id%22%3A%22ec17eed6-ec85-4805-afcd-cdb04e56f411%22%7D" /> y <followup encodedFollowup="%7B%22snippet%22%3A%22proyectos%20reales%20para%20aplicar%20lo%20aprendido%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20tipos%20de%20proyectos%20reales%20se%20incluyen%20en%20esta%20gu%C3%ADa%20para%20aplicar%20los%20conocimientos%20de%20Excel%202025%3F%22%2C%22id%22%3A%22accacd40-3e13-4ff8-ada7-f8802661d22f%22%7D" />.</p>
    <div class="actions">
        <a class="btn" href="#modulo1">Comenzar con el Módulo 1</a>
        <a class="btn btn-outline" href="#modulo15">Ver Atajos Rápidos</a>
    </div>
    <figure class="img-frame">
        <img src="https://mistralaiblackforestprod.blob.core.windows.net/images/blackforest/c432/598e/-19e/f-4bc4-a2fa-6dcafe21aed5/image.jpg?se=2025-11-04T22%3A51%3A29Z&sp=r&sv=2025-01-05&sr=b&sig=fIKw/LPy1elFH9pXpZxDqqzeanJFzyDUHoCi7x9q8uU%3D" alt="Interfaz de Microsoft Excel 2025 mostrando una hoja de cálculo con fórmulas y gráficos">
        <figcaption>Microsoft Excel 2025: la herramienta líder para análisis de datos, con <followup encodedFollowup="%7B%22snippet%22%3A%22nuevas%20funciones%20de%20IA%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20ejemplos%20concretos%20hay%20de%20funciones%20de%20IA%20en%20Excel%202025%3F%22%2C%22id%22%3A%2209ba441a-cf76-4d58-8fdf-f3d7e76e225c%22%7D" />, <followup encodedFollowup="%7B%22snippet%22%3A%22gr%C3%A1ficos%20interactivos%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20tipos%20de%20gr%C3%A1ficos%20interactivos%20se%20pueden%20crear%20en%20Excel%202025%20y%20c%C3%B3mo%20se%20implementan%3F%22%2C%22id%22%3A%22a7ca2b53-7ae4-4523-a3bd-c189133fd494%22%7D" /> y <followup encodedFollowup="%7B%22snippet%22%3A%22colaboraci%C3%B3n%20en%20tiempo%20real%22%2C%22question%22%3A%22%C2%BFC%C3%B3mo%20funciona%20la%20colaboraci%C3%B3n%20en%20tiempo%20real%20en%20Excel%202025%20y%20qu%C3%A9%20limitaciones%20tiene%3F%22%2C%22id%22%3A%222ec6a725-085c-49c7-82ed-5c1d36c0aa8a%22%7D" />.</figcaption>
    </figure>
    </section>
    <!-- MÓDULO 1: INTRODUCCIÓN A MICROSOFT EXCEL -->
    <section id="modulo1" class="block">
    <h3>Módulo 1. Introducción a Microsoft Excel 2025</h3>
    <p class="lead">
        Microsoft Excel es la hoja de cálculo más poderosa y versátil del mundo, utilizada en contabilidad, análisis de datos, estadísticas, gestión de proyectos y más. Este módulo te introducirá a su interfaz, historia, usos prácticos y operaciones básicas para que puedas empezar a trabajar con libros de trabajo de manera eficiente.
    </p>
    <!-- Sección: ¿Qué es Microsoft Excel? -->
    <div class="card">
        <h4>¿Qué es Microsoft Excel y para qué sirve?</h4>
        <p>Microsoft Excel es una aplicación de hoja de cálculo que permite:</p>
        <div class="feature-grid">
        <div class="feature-item">
            <h5>Análisis de datos</h5>
            <p>Realiza cálculos complejos, estadísticas, proyecciones financieras y análisis de tendencias con fórmulas y funciones avanzadas.</p>
        </div>
        <div class="feature-item">
            <h5>Gestión de información</h5>
            <p>Organiza, filtra y analiza grandes conjuntos de datos con tablas dinámicas, gráficos y herramientas de datos.</p>
        </div>
        <div class="feature-item">
            <h5>Automatización de tareas</h5>
            <p>Automatiza procesos repetitivos con <followup encodedFollowup="%7B%22snippet%22%3A%22macros%20y%20scripts%20en%20VBA%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20novedades%20hay%20en%20la%20creaci%C3%B3n%20de%20macros%20y%20scripts%20en%20VBA%20para%20Excel%202025%3F%22%2C%22id%22%3A%22dd8439ee-1185-474d-a48f-2edbcb35b9ba%22%7D" />, ahorrando tiempo y reduciendo errores.</p>
        </div>
        <div class="feature-item">
            <h5>Visualización de datos</h5>
            <p>Crea gráficos dinámicos, <followup encodedFollowup="%7B%22snippet%22%3A%22dashboards%20y%20reportes%20visuales%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20herramientas%20o%20caracter%C3%ADsticas%20nuevas%20hay%20en%20Excel%202025%20para%20crear%20dashboards%20y%20reportes%20visuales%3F%22%2C%22id%22%3A%2290803068-64d0-4cd4-80f9-32213bb8381c%22%7D" /> para presentar información de manera clara y profesional.</p>
        </div>
        <div class="feature-item">
            <h5>Colaboración en la nube</h5>
            <p>Trabaja en tiempo real con otros usuarios mediante <followup encodedFollowup="%7B%22snippet%22%3A%22OneDrive%20o%20SharePoint%22%2C%22question%22%3A%22%C2%BFCu%C3%A1les%20son%20las%20diferencias%20entre%20guardar%20y%20colaborar%20en%20Excel%202025%20usando%20OneDrive%20y%20SharePoint%3F%22%2C%22id%22%3A%228ed482b4-e63e-40df-81da-1274ea788763%22%7D" />, con <followup encodedFollowup="%7B%22snippet%22%3A%22control%20de%20versiones%20y%20comentarios%20integrados%22%2C%22question%22%3A%22%C2%BFC%C3%B3mo%20funciona%20el%20control%20de%20versiones%20y%20los%20comentarios%20integrados%20en%20Excel%202025%3F%22%2C%22id%22%3A%22e7b00b1e-8494-40af-8932-5420eb270c40%22%7D" />.</p>
        </div>
        <div class="feature-item">
            <h5><followup encodedFollowup="%7B%22snippet%22%3A%22Integraci%C3%B3n%20con%20Office%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20mejoras%20se%20han%20realizado%20en%20la%20integraci%C3%B3n%20de%20Excel%202025%20con%20otras%20aplicaciones%20de%20Office%3F%22%2C%22id%22%3A%22739e2d52-5150-4631-af8f-a03b2f9ae52c%22%7D" /></h5>
            <p>Comparte datos con Word, PowerPoint y Access para crear informes y presentaciones integradas.</p>
        </div>
        </div>
        <figure class="img-frame">
        <img src="https://mistralaiblackforestprod.blob.core.windows.net/images/blackforest/c432/598e/-19e/f-4bc4-a2fa-6dcafe21aed5/image.jpg?se=2025-11-04T22%3A51%3A29Z&sp=r&sv=2025-01-05&sr=b&sig=fIKw/LPy1elFH9pXpZxDqqzeanJFzyDUHoCi7x9q8uU%3D" alt="Interfaz de Microsoft Excel 2025 mostrando una hoja de cálculo con fórmulas y gráficos">
        <figcaption>Microsoft Excel 2025: la herramienta líder para análisis de datos, con nuevas funciones de IA, gráficos interactivos y colaboración en tiempo real.</figcaption>
        </figure>
        <div class="callout info">
        <strong>Dato clave:</strong> Excel es utilizado por más del 750 millones de usuarios en el mundo, desde estudiantes hasta profesionales en finanzas, ingeniería y ciencia de datos.
        </div>
    </div>
    <!-- Sección: Historia y evolución -->
    <div class="card">
        <h4>Historia y evolución de Microsoft Excel</h4>
        <p>Excel ha evolucionado desde su lanzamiento en 1985, incorporando nuevas funciones y tecnologías para adaptarse a las necesidades de usuarios y empresas:</p>
        <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-year">1985</div>
            <p><strong>Excel 1.0 para Mac:</strong> Primera versión desarrollada para Apple Macintosh, con interfaz gráfica y soporte para ratón. Competía directamente con Lotus 1-2-3, el líder del mercado en ese momento.</p>
        </div>
        <div class="timeline-item">
            <div class="timeline-year">1987</div>
            <p><strong>Excel 2.0 para Windows:</strong> Introdujo barras de herramientas, funciones avanzadas y compatibilidad con Windows 2.0. Fue clave para la adopción masiva en entornos empresariales.</p>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/400x250/107C41/FFFFFF?text=Excel+2.0+para+Windows" alt="Interfaz de Excel 2.0 para Windows en 1987">
            <figcaption>Excel 2.0 para Windows, con barras de herramientas y soporte para gráficos básicos.</figcaption>
            </figure>
        </div>
        <div class="timeline-item">
            <div class="timeline-year">1993</div>
            <p><strong>Excel 5.0:</strong> Introdujo el lenguaje VBA (Visual Basic for Applications) para automatización, mejoras en gráficos 3D y soporte para hojas de cálculo más grandes (16,000 filas).</p>
        </div>
        <div class="timeline-item">
            <div class="timeline-year">1997</div>
            <p><strong>Excel 97:</strong> Parte de Office 97, con mejoras en tablas dinámicas y la introducción del Asistente de Office (Clippy). También incluyó soporte para Internet y correos electrónicos.</p>
        </div>
        <div class="timeline-item">
            <div class="timeline-year">2007</div>
            <p><strong>Excel 2007:</strong> Revolucionó la interfaz con la <strong>cinta de opciones (Ribbon)</strong>, soporte para 1 millón de filas y 16,000 columnas, y nuevos formatos de archivo (.xlsx, .xlsm).</p>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/400x250/107C41/FFFFFF?text=Excel+2007+con+Ribbon" alt="Interfaz de Excel 2007 con la cinta de opciones">
            <figcaption>Excel 2007 introdujo la cinta de opciones (Ribbon) y soporte para hojas de cálculo masivas.</figcaption>
            </figure>
        </div>
        <div class="timeline-item">
            <div class="timeline-year">2013</div>
            <p><strong>Excel 2013:</strong> Integración con la nube (OneDrive), nuevas funciones como <code>AGREGAR</code>, <code>SI.ERROR</code>, y mejoras en <followup encodedFollowup="%7B%22snippet%22%3A%22Power%20Pivot%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20mejoras%20tiene%20Power%20Pivot%20en%20Excel%202025%20y%20c%C3%B3mo%20se%20utiliza%20para%20an%C3%A1lisis%20avanzado%3F%22%2C%22id%22%3A%2265c43c68-7184-4038-a021-ae2c75decc33%22%7D" /> para análisis avanzado.</p>
        </div>
        <div class="timeline-item">
            <div class="timeline-year">2016</div>
            <p><strong>Excel 2016:</strong> Introdujo gráficos recomendados, mapas 3D (Power Map), y la función <code>CONCAT</code> para concatenar cadenas de texto.</p>
        </div>
        <div class="timeline-item">
            <div class="timeline-year">2021</div>
            <p><strong>Excel 2021 y Microsoft 365:</strong> Funciones dinámicas como <code>FILTRAR</code>, <code>ORDENAR</code>, <code>UNICOS</code>, y la integración de <strong><followup encodedFollowup="%7B%22snippet%22%3A%22Power%20Query%22%2C%22question%22%3A%22%C2%BFC%C3%B3mo%20se%20integra%20Power%20Query%20en%20Excel%202025%20y%20qu%C3%A9%20ventajas%20ofrece%20para%20el%20an%C3%A1lisis%20de%20datos%3F%22%2C%22id%22%3A%2214dc9e67-d4dd-46c3-8532-2e56fc324221%22%7D" /></strong> para transformación de datos.</p>
        </div>
        <div class="timeline-item">
            <div class="timeline-year">2025</div>
            <p><strong>Excel 2025:</strong> <followup encodedFollowup="%7B%22snippet%22%3A%22Inteligencia%20artificial%20integrada%20(Copilot)%22%2C%22question%22%3A%22%C2%BFC%C3%B3mo%20funciona%20Copilot%20en%20Excel%202025%20y%20qu%C3%A9%20tareas%20puede%20automatizar%3F%22%2C%22id%22%3A%223fe13575-fde4-481d-884a-be7219ad86f0%22%7D" />, funciones dinámicas avanzadas, mayor capacidad de datos (<followup encodedFollowup="%7B%22snippet%22%3A%22hasta%2010%20millones%20de%20filas%20en%20la%20nube%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20ventajas%20ofrece%20el%20manejo%20de%2010%20millones%20de%20filas%20en%20Excel%202025%20y%20c%C3%B3mo%20afecta%20el%20rendimiento%3F%22%2C%22id%22%3A%2273b2a600-1e93-4de9-8a57-720368fbe693%22%7D" />) y <followup encodedFollowup="%7B%22snippet%22%3A%22herramientas%20de%20colaboraci%C3%B3n%20mejoradas%22%2C%22question%22%3A%22%C2%BFQu%C3%A9%20mejoras%20espec%C3%ADficas%20se%20han%20implementado%20en%20las%20herramientas%20de%20colaboraci%C3%B3n%20de%20Excel%202025%3F%22%2C%22id%22%3A%22e5ed58c8-d35c-4636-b2b8-b3bfc3e07cbe%22%7D" />.</p>
            <figure class="img-frame">
            <img src="https://mistralaiblackforestprod.blob.core.windows.net/images/blackforest/c432/598e/-19e/f-4bc4-a2fa-6dcafe21aed5/image.jpg?se=2025-11-04T22%3A51%3A29Z&sp=r&sv=2025-01-05&sr=b&sig=fIKw/LPy1elFH9pXpZxDqqzeanJFzyDUHoCi7x9q8uU%3D" alt="Interfaz de Excel 2025 con herramientas de IA">
            <figcaption>Excel 2025 incluye Copilot, un asistente de IA para analizar datos, generar fórmulas y crear visualizaciones automáticamente.</figcaption>
            </figure>
        </div>
        </div>
        <div class="callout info">
        <strong>Dato curioso:</strong> El nombre "Excel" fue elegido para transmitir la idea de "excelencia" en el manejo de datos, superando a su principal competidor de la época, Lotus 1-2-3. El éxito de Excel contribuyó significativamente a la adopción masiva de Windows en entornos empresariales.
        </div>
    </div>
    <!-- Sección: Usos comunes -->
    <div class="card">
        <h4>Usos comunes de Excel</h4>
        <p>Excel es una herramienta versátil utilizada en diversos campos profesionales y académicos:</p>
        <div class="grid grid-2">
        <div>
            <ul class="steps">
            <li>
                <strong>Contabilidad y finanzas:</strong>
                <ul class="steps">
                <li>Presupuestos personales o empresariales.</li>
                <li>Estados financieros (balance general, estado de resultados).</li>
                <li>Análisis de costos, proyecciones y cálculos de impuestos.</li>
                <li>Modelos de valoración de empresas (DCF, multiples).</li>
                </ul>
            </li>
            <li>
                <strong>Gestión de proyectos:</strong>
                <ul class="steps">
                <li>Cronogramas con diagramas de Gantt.</li>
                <li>Seguimiento de tareas y asignación de recursos.</li>
                <li>Cálculo de rutas críticas y dependencias entre actividades.</li>
                </ul>
            </li>
            <li>
                <strong>Análisis de datos:</strong>
                <ul class="steps">
                <li>Cálculo de estadísticas descriptivas (media, mediana, desviación estándar).</li>
                <li>Regresiones lineales y análisis de correlación.</li>
                <li>Segmentación de clientes o mercados.</li>
                </ul>
            </li>
            <li>
                <strong>Control de inventarios:</strong>
                <ul class="steps">
                <li>Registros de stock con alertas de reposición.</li>
                <li>Análisis de rotación de inventario y costos de almacenamiento.</li>
                <li>Integración con códigos de barras y sistemas ERP.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <ul class="steps">
            <li>
                <strong>Informes y dashboards:</strong>
                <ul class="steps">
                <li>Visualización de KPIs (indicadores clave de rendimiento).</li>
                <li>Reportes ejecutivos con gráficos dinámicos.</li>
                <li>Tablas de contenido automáticas y referencias cruzadas.</li>
                </ul>
            </li>
            <li>
                <strong>Ciencia y educación:</strong>
                <ul class="steps">
                <li>Análisis de datos experimentales.</li>
                <li>Tablas de resultados y gráficos científicos.</li>
                <li>Cálculos matemáticos complejos con fórmulas avanzadas.</li>
                </ul>
            </li>
            <li>
                <strong>Recursos humanos:</strong>
                <ul class="steps">
                <li>Gestión de nóminas y cálculos de salarios.</li>
                <li>Seguimiento de asistencia y evaluaciones de desempeño.</li>
                <li>Organigramas y análisis de rotación de personal.</li>
                </ul>
            </li>
            <li>
                <strong>Marketing y ventas:</strong>
                <ul class="steps">
                <li>Análisis de campañas publicitarias.</li>
                <li>Seguimiento de leads y conversiones.</li>
                <li>Cálculo de ROI (retorno de inversión) y métricas de redes sociales.</li>
                </ul>
            </li>
            </ul>
        </div>
        </div>
        <figure class="img-frame">
        <img src="https://via.placeholder.com/800x450/107C41/FFFFFF?text=Usos+de+Excel" alt="Ejemplos de usos de Excel en finanzas, estadísticas y gestión de proyectos">
        <figcaption>Ejemplos de usos de Excel en diferentes áreas: finanzas (gráficos de ventas), estadísticas (análisis de datos) y gestión de proyectos (diagrama de Gantt).</figcaption>
        </figure>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Para análisis de datos complejos, combina Excel con <strong>Power BI</strong> (de Microsoft) para crear dashboards interactivos y reportes más avanzados.
        </div>
    </div>
    <!-- Sección: Excel de escritorio vs Excel en línea -->
    <div class="card">
        <h4>Diferencia entre Excel de escritorio y Excel en línea</h4>
        <p>Excel está disponible en dos versiones principales, cada una con ventajas y limitaciones según tus necesidades:</p>
        <table>
        <thead>
            <tr>
            <th>Característica</th>
            <th>Excel de escritorio</th>
            <th>Excel en línea</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><strong>Acceso</strong></td>
            <td>Requiere instalación en PC/Mac. Funciona sin conexión a internet.</td>
            <td>Accesible desde cualquier navegador con internet. No requiere instalación.</td>
            </tr>
            <tr>
            <td><strong>Funciones avanzadas</strong></td>
            <td>
                <ul class="steps">
                <li>Soporte completo para macros (VBA).</li>
                <li>Power Query y Power Pivot para análisis avanzado.</li>
                <li>Solver y herramientas de análisis de datos.</li>
                <li>Complementos de terceros.</li>
                </ul>
            </td>
            <td>
                <ul class="steps">
                <li>Funciones básicas y medianas.</li>
                <li>No soporta macros ni complementos avanzados.</li>
                <li>Power Query y Power Pivot limitados.</li>
                </ul>
            </td>
            </tr>
            <tr>
            <td><strong>Capacidad</strong></td>
            <td>Soporte para hojas de cálculo muy grandes (1,048,576 filas × 16,384 columnas).</td>
            <td>Limitado a 300,000 filas y algunas funciones complejas no están disponibles.</td>
            </tr>
            <tr>
            <td><strong>Colaboración</strong></td>
            <td>Colaboración limitada; requiere OneDrive/SharePoint para trabajo en tiempo real.</td>
            <td>Colaboración en tiempo real con múltiples usuarios. Ideal para equipos remotos.</td>
            </tr>
            <tr>
            <td><strong>Actualizaciones</strong></td>
            <td>Requiere actualizaciones manuales o automáticas del software (ej: Office 365).</td>
            <td>Siempre actualizado con las últimas funciones en la nube. No requiere intervención del usuario.</td>
            </tr>
            <tr>
            <td><strong>Integración</strong></td>
            <td>
                <ul class="steps">
                <li>Integración completa con otras apps de Office (Word, PowerPoint).</li>
                <li>Conexión con bases de datos locales (Access, SQL Server).</li>
                <li>Soporte para archivos locales y en red.</li>
                </ul>
            </td>
            <td>
                <ul class="steps">
                <li>Integración con OneDrive, SharePoint y otras apps en línea.</li>
                <li>Conexión limitada a fuentes de datos externas.</li>
                <li>Ideal para trabajo en la nube y movilidad.</li>
                </ul>
            </td>
            </tr>
            <tr>
            <td><strong>Seguridad</strong></td>
            <td>Protección local con contraseñas y permisos. Riesgo de pérdida si no hay copias de seguridad.</td>
            <td>Almacenamiento seguro en la nube con cifrado y control de acceso. Recuperación fácil de versiones anteriores.</td>
            </tr>
            <tr>
            <td><strong>Rendimiento</strong></td>
            <td>Mayor velocidad en cálculos complejos y macros. Usa los recursos del equipo local.</td>
            <td>Dependiente de la conexión a internet. Puede ser más lento con hojas muy grandes.</td>
            </tr>
        </tbody>
        </table>
        <div class="callout ok">
        <strong>Recomendación:</strong>
        <ul class="steps">
            <li>Usa <strong>Excel de escritorio</strong> para:
            <ul class="steps">
                <li>Análisis de datos complejos.</li>
                <li>Automatización con macros o VBA.</li>
                <li>Trabajo con bases de datos grandes o sensibles.</li>
            </ul>
            </li>
            <li>Usa <strong>Excel en línea</strong> para:
            <ul class="steps">
                <li>Colaboración en equipo.</li>
                <li>Acceso rápido desde cualquier dispositivo.</li>
                <li>Edición básica o revisión de documentos.</li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    <!-- Sección: Interfaz de Excel 2025 -->
    <div class="card">
        <h4>Interfaz de Microsoft Excel 2025</h4>
        <p>La interfaz de Excel 2025 está diseñada para ser intuitiva y eficiente, con las siguientes áreas principales:</p>
        <div class="grid grid-2">
        <div>
            <ul class="steps">
            <li>
                <strong>Cinta de opciones (Ribbon):</strong>
                <ul class="steps">
                <li>Organizada en pestañas temáticas:
                    <ul class="steps">
                    <li><strong>Inicio:</strong> Operaciones básicas (copiar, pegar, formato).</li>
                    <li><strong>Insertar:</strong> Tablas, gráficos, imágenes, funciones.</li>
                    <li><strong>Fórmulas:</strong> Biblioteca de funciones y herramientas de cálculo.</li>
                    <li><strong>Datos:</strong> Importar datos, tablas dinámicas, herramientas de análisis.</li>
                    <li><strong>Revisar:</strong> Ortografía, comentarios, protección.</li>
                    <li><strong>Vista:</strong> Configuración de visualización y macros.</li>
                    </ul>
                </li>
                <li>Personalizable: puedes añadir o quitar comandos según tus necesidades.</li>
                </ul>
            </li>
            <li>
                <strong>Barra de fórmulas:</strong>
                <ul class="steps">
                <li>Muestra el contenido de la celda activa o permite ingresar fórmulas.</li>
                <li>Incluye el botón <strong>Insertar función (fx)</strong> para acceder a la biblioteca de funciones.</li>
                <li>Muestra el resultado de la fórmula y la fórmula misma (ej: <code>=SUMA(A1:A10)</code>).</li>
                </ul>
            </li>
            <li>
                <strong>Barra de herramientas de acceso rápido:</strong>
                <ul class="steps">
                <li>Atajos a funciones comunes como Guardar, Deshacer y Rehacer.</li>
                <li>Personalizable: añade comandos que uses frecuentemente (ej: "Guardar como PDF", "Insertar tabla dinámica").</li>
                </ul>
            </li>
            <li>
                <strong>Hoja de trabajo:</strong>
                <ul class="steps">
                <li>Área principal con celdas organizadas en filas (numeradas) y columnas (letras).</li>
                <li>Cada hoja puede contener hasta 1,048,576 filas y 16,384 columnas.</li>
                <li>Soporte para múltiples hojas en un mismo libro (pestañas en la parte inferior).</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <ul class="steps">
            <li>
                <strong>Columnas, filas y celdas:</strong>
                <ul class="steps">
                <li><strong>Columnas:</strong> Identificadas con letras (A, B, C...) o combinaciones (AA, AB...).</li>
                <li><strong>Filas:</strong> Numeradas secuencialmente (1, 2, 3...).</li>
                <li><strong>Celdas:</strong> Intersección de una columna y una fila (ej: A1, B5). Cada celda puede contener texto, números, fórmulas o formatos.</li>
                <li><strong>Rango:</strong> Conjunto de celdas (ej: A1:B10).</li>
                </ul>
            </li>
            <li>
                <strong>Pestañas de hojas:</strong>
                <ul class="steps">
                <li>Permiten navegar entre diferentes hojas dentro de un mismo libro.</li>
                <li>Puedes añadir, eliminar, renombrar y reorganizar hojas.</li>
                <li>Haz clic derecho sobre una pestaña para acceder a opciones avanzadas.</li>
                </ul>
            </li>
            <li>
                <strong>Barra de estado:</strong>
                <ul class="steps">
                <li>Muestra información como:
                    <ul class="steps">
                    <li>Modo de cálculo (automático/manual).</li>
                    <li>Promedio, suma o conteo de celdas seleccionadas.</li>
                    <li>Zoom y vistas de la hoja.</li>
                    <li>Estado de macros y protección.</li>
                    </ul>
                </li>
                </ul>
            </li>
            <li>
                <strong>Barra de título y menú:</strong>
                <ul class="steps">
                <li>Nombre del libro actual y botones para minimizar, maximizar y cerrar.</li>
                <li>Menú <strong>Archivo</strong> para acceder a opciones como Guardar, Imprimir y Configuración.</li>
                </ul>
            </li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x400/107C41/FFFFFF?text=Interfaz+de+Excel+2025" alt="Interfaz de Excel 2025 con etiquetas">
            <figcaption>Interfaz de Excel 2025 con las principales áreas etiquetadas: cinta de opciones, barra de fórmulas, hoja de trabajo, pestañas y barra de estado.</figcaption>
            </figure>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejos para personalizar la interfaz:</strong>
        <ul class="steps">
            <li>Añade comandos frecuentes a la <strong>barra de herramientas de acceso rápido</strong> (ej: "Guardar como PDF", "Insertar tabla dinámica").</li>
            <li>Oculta o muestra la <strong>cinta de opciones</strong> con <span class="keyboard-shortcut">Ctrl + F1</span>.</li>
            <li>Cambia el <strong>tema de color</strong> en <strong>Archivo → Cuenta → Tema de Office</strong>.</li>
            <li>Usa el <strong>modo de enfoque</strong> (pestaña <strong>Vista</strong>) para minimizar distracciones.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Crear, guardar y abrir libros -->
    <div class="card">
        <h4>Crear, guardar, abrir y cerrar libros de trabajo</h4>
        <p>Operaciones básicas con libros en Excel 2025:</p>
        <div class="grid grid-2">
        <div>
            <h5>Crear un nuevo libro</h5>
            <ul class="steps">
            <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + N</span>.</li>
            <li>O haz clic en <strong>Archivo → Nuevo</strong> y elige una opción:
                <ul class="steps">
                <li><strong>Libro en blanco:</strong> Hoja de cálculo vacía.</li>
                <li><strong>Plantillas:</strong> Presupuestos, calendarios, informes, etc.</li>
                <li><strong>Desde datos existentes:</strong> Importar desde CSV, bases de datos o PDF.</li>
                </ul>
            </li>
            <li>Excel ofrece plantillas para:
                <ul class="steps">
                <li>Presupuestos personales o empresariales.</li>
                <li>Calendarios y planificadores.</li>
                <li>Informes financieros y análisis de datos.</li>
                <li>Listas de tareas y seguimiento de proyectos.</li>
                </ul>
            </li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Plantillas+de+Excel" alt="Galeria de plantillas en Excel 2025">
            <figcaption>Galeria de plantillas integradas en Excel 2025 para diferentes tipos de libros de trabajo, como presupuestos, calendarios y informes.</figcaption>
            </figure>
        </div>
        <div>
            <h5>Abrir un libro existente</h5>
            <ul class="steps">
            <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + O</span>.</li>
            <li>O haz clic en <strong>Archivo → Abrir</strong> y selecciona el archivo desde:
                <ul class="steps">
                <li>OneDrive o SharePoint (recomendado para colaboración).</li>
                <li>Este equipo (disco duro local).</li>
                <li>Ubicaciones recientes.</li>
                </ul>
            </li>
            <li>Excel muestra los libros recientes para acceso rápido en la pestaña <strong>Inicio</strong>.</li>
            <li>Puedes anclar libros importantes para acceder a ellos rápidamente.</li>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Guardar un libro</h5>
            <ul class="steps">
            <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + S</span> para guardar cambios.</li>
            <li>Para guardar como un nuevo archivo, usa <span class="keyboard-shortcut">F12</span> o <strong>Archivo → Guardar como</strong>.</li>
            <li>Elige entre formatos:
                <ul class="steps">
                <li><strong>.xlsx</strong>: Formato predeterminado (sin macros).</li>
                <li><strong>.xlsm</strong>: Para libros con macros.</li>
                <li><strong>.csv</strong>: Para datos separados por comas (compatible con otros programas).</li>
                <li><strong>.pdf</strong>: Para compartir sin edición.</li>
                <li><strong>.ods</strong>: Formato de OpenDocument (compatible con LibreOffice).</li>
                </ul>
            </li>
            <li>Configura opciones avanzadas:
                <ul class="steps">
                <li><strong>Herramientas → Opciones generales:</strong> Contraseña para abrir o modificar.</li>
                <li><strong>Guardar como plantilla (.xltx):</strong> Para reutilizar el diseño.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Cerrar un libro</h5>
            <ul class="steps">
            <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + W</span>.</li>
            <li>O haz clic en la <strong>X</strong> de la pestaña del libro.</li>
            <li>Excel pregunta si deseas guardar cambios antes de cerrar.</li>
            <li>Si hay múltiples libros abiertos, usa <span class="keyboard-shortcut">Ctrl + F4</span> para cerrar solo el activo.</li>
            </ul>
        </div>
        </div>
        <div class="callout warn">
        <strong>Importante:</strong>
        <ul class="steps">
            <li>Configura el <strong>AutoGuardado</strong> en OneDrive para evitar perder cambios:
            <ul class="steps">
                <li>Ve a <strong>Archivo → Opciones → Guardar</strong>.</li>
                <li>Activa <strong>Guardar información de AutoRecuperación cada X minutos</strong>.</li>
                <li>Establece un intervalo corto (ej: 5 minutos).</li>
            </ul>
            </li>
            <li>Usa <strong>Archivo → Información → Administrar libro → Recuperar libros no guardados</strong> para recuperar archivos después de un cierre inesperado.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Tipos de archivos -->
    <div class="card">
        <h4>Tipos de archivos en Excel</h4>
        <p>Excel soporta varios formatos de archivo, cada uno con usos específicos:</p>
        <table>
        <thead>
            <tr>
            <th>Extensión</th>
            <th>Descripción</th>
            <th>Uso típico</th>
            <th>Notas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>.xlsx</td>
            <td>Formato XML sin macros. No admite código VBA. Comprimido para reducir tamaño.</td>
            <td>Libros estándar sin automatización. Compatible con Excel 2007 y posteriores.</td>
            <td>Ideal para compartir con usuarios que no necesitan macros.</td>
            </tr>
            <tr>
            <td>.xlsm</td>
            <td>Formato XML con macros. Admite código VBA y complementos.</td>
            <td>Libros con automatización, macros o complementos personalizados.</td>
            <td>No abrir en equipos sin confianza, ya que las macros pueden contener código malicioso.</td>
            </tr>
            <tr>
            <td>.xls</td>
            <td>Formato binario antiguo (Excel 97-2003). Limitado a 65,536 filas y 256 columnas.</td>
            <td>Compatibilidad con versiones antiguas de Excel o sistemas legacy.</td>
            <td>Evita usarlo para nuevos proyectos debido a sus limitaciones.</td>
            </tr>
            <tr>
            <td>.csv</td>
            <td>Valores separados por comas. Solo datos, sin formato, fórmulas o macros.</td>
            <td>Intercambio de datos con otros sistemas (bases de datos, programas estadísticos).</td>
            <td>Cada celda se guarda como un valor separado por comas. No soporta múltiples hojas.</td>
            </tr>
            <tr>
            <td>.txt</td>
            <td>Archivo de texto plano con datos tabulados o separados por otro delimitador.</td>
            <td>Exportar/importar datos simples a sistemas que no soportan CSV.</td>
            <td>Configura el delimitador (tabulación, punto y coma) al importar.</td>
            </tr>
            <tr>
            <td>.pdf</td>
            <td>Formato de documento portátil. Preserva el formato y diseño, pero no es editable.</td>
            <td>Compartir informes o documentos finales sin riesgo de modificación.</td>
            <td>Usa <strong>Archivo → Exportar → Crear PDF/XPS</strong> para generar.</td>
            </tr>
            <tr>
            <td>.ods</td>
            <td>Formato OpenDocument Spreadsheet. Estándar abierto compatible con LibreOffice, OpenOffice.</td>
            <td>Compatibilidad con software de código abierto o entornos multiplataforma.</td>
            <td>Puede perder algunos formatos avanzados al abrir en Excel.</td>
            </tr>
            <tr>
            <td>.xltx</td>
            <td>Plantilla de Excel sin macros. Diseño predefinido para crear nuevos libros.</td>
            <td>Reutilizar diseños (ej: informes mensuales, facturas).</td>
            <td>Guarda como plantilla desde <strong>Archivo → Guardar como → Plantilla de Excel</strong>.</td>
            </tr>
            <tr>
            <td>.xltm</td>
            <td>Plantilla de Excel con macros. Incluye código VBA para automatización.</td>
            <td>Plantillas con funciones avanzadas o automatización.</td>
            <td>Requiere habilitar macros al abrir.</td>
            </tr>
        </tbody>
        </table>
        <div class="callout info">
        <strong>Consejos para elegir el formato adecuado:</strong>
        <ul class="steps">
            <li>Usa <strong>.xlsx</strong> para la mayoría de los libros (sin macros).</li>
            <li>Usa <strong>.xlsm</strong> solo si necesitas macros o VBA.</li>
            <li>Para compartir datos con otros programas, <strong>.csv</strong> es el formato más universal.</li>
            <li>Exporta a <strong>.pdf</strong> para documentos finales que no deben modificarse.</li>
            <li>Guarda como <strong>.xltx</strong> o <strong>.xltm</strong> para crear plantillas reutilizables.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Ejercicio práctico -->
    <div class="card">
        <h4>Ejercicio práctico: Crear un presupuesto mensual</h4>
        <p>Pongamos en práctica lo aprendido creando un presupuesto mensual básico:</p>
        <div class="grid grid-2">
        <div>
            <ol class="steps">
            <li>
                <strong>Abrir un nuevo libro:</strong>
                <ul class="steps">
                <li>Usa <span class="keyboard-shortcut">Ctrl + N</span> para crear un libro en blanco.</li>
                <li>Guárdalo como <code>Presupuesto_Mensual.xlsx</code> en tu carpeta de documentos.</li>
                </ul>
            </li>
            <li>
                <strong>Configurar la hoja:</strong>
                <ul class="steps">
                <li>Renombra la hoja como "Presupuesto" (haz doble clic en la pestaña "Hoja1").</li>
                <li>Inserta columnas para:
                    <ul class="steps">
                    <li><strong>Categoría</strong> (ej: Alquiler, Comida, Transporte).</li>
                    <li><strong>Presupuestado</strong> (cantidad planeada).</li>
                    <li><strong>Real</strong> (cantidad gastada).</li>
                    <li><strong>Diferencia</strong> (calculada automáticamente).</li>
                    </ul>
                </li>
                </ul>
            </li>
            <li>
                <strong>Ingresar datos:</strong>
                <ul class="steps">
                <li>En la columna <strong>A</strong>, lista las categorías de gastos (ej: A2:A10).</li>
                <li>En las columnas <strong>B</strong> y <strong>C</strong>, ingresa los valores presupuestados y reales.</li>
                <li>En la columna <strong>D</strong>, usa la fórmula <code>=B2-C2</code> para calcular la diferencia y arrastra el controlador de relleno hacia abajo.</li>
                </ul>
            </li>
            </ol>
        </div>
        <div>
            <ol class="steps" start="4">
            <li>
                <strong>Aplicar formato:</strong>
                <ul class="steps">
                <li>Selecciona las celdas con valores monetarios (B2:D10).</li>
                <li>Usa <span class="keyboard-shortcut">Ctrl + Shift + \\\$</span> para aplicar formato de moneda.</li>
                <li>Aplica <strong>formato condicional</strong> a la columna <strong>D</strong>:
                    <ul class="steps">
                    <li>Valores positivos en <strong>verde</strong>.</li>
                    <li>Valores negativos en <strong>rojo</strong>.</li>
                    </ul>
                </li>
                </ul>
            </li>
            <li>
                <strong>Insertar un gráfico:</strong>
                <ul class="steps">
                <li>Selecciona el rango <strong>A1:D10</strong>.</li>
                <li>Ve a <strong>Insertar → Gráfico → Columna agrupada</strong>.</li>
                <li>Ajusta el título del gráfico a "Presupuesto Mensual vs. Gastos Reales".</li>
                </ul>
            </li>
            <li>
                <strong>Guardar y compartir:</strong>
                <ul class="steps">
                <li>Guarda los cambios con <span class="keyboard-shortcut">Ctrl + S</span>.</li>
                <li>Exporta a PDF para compartir: <strong>Archivo → Exportar → Crear PDF/XPS</strong>.</li>
                </ul>
            </li>
            </ol>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Presupuesto+en+Excel" alt="Ejemplo de presupuesto mensual en Excel">
            <figcaption>Ejemplo de presupuesto mensual en Excel, mostrando categorías, fórmulas para diferencias, formato condicional y gráfico de columnas.</figcaption>
            </figure>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo para principiantes:</strong>
        <ul class="steps">
            <li>Usa <strong>referencias absolutas</strong> (ej: <code>\\\$B\\\$1</code>) en fórmulas que debas copiar a otras celdas sin que cambien.</li>
            <li>Aprende atajos como <span class="keyboard-shortcut">Alt + =</span> para insertar rápidamente la función <code>SUMA</code>.</li>
            <li>Explora las <strong>plantillas integradas</strong> de Excel para presupuestos más complejos.</li>
        </ul>
        </div>
    </div>
    </section>
    <!-- MÓDULO 2: MANEJO BÁSICO DE CELDAS Y DATOS -->
    <section id="modulo2" class="block">
    <h3>Módulo 2. Manejo Básico de Celdas y Datos</h3>
    <p class="lead">
        Aprende a seleccionar, copiar, pegar, insertar y eliminar celdas, filas y columnas. Domina el relleno automático, el ajuste de ancho/alto, la navegación con teclado y técnicas para congelar paneles y dividir la ventana.
    </p>
    <!-- Sección: Seleccionar, copiar, cortar y pegar -->
    <div class="card">
        <h4>Seleccionar, copiar, cortar y pegar celdas</h4>
        <p>Operaciones básicas para manejar datos en Excel:</p>
        <div class="grid grid-2">
        <div>
            <h5>Seleccionar celdas</h5>
            <ul class="steps">
            <li>Selecciona una celda haciendo clic en ella.</li>
            <li>Selecciona un rango arrastrando el cursor o usando <span class="keyboard-shortcut">Shift + Flechas</span>.</li>
            <li>Selecciona una columna o fila completa haciendo clic en su encabezado (letra o número).</li>
            <li>Selecciona toda la hoja con <span class="keyboard-shortcut">Ctrl + A</span>.</li>
            <li>Selecciona celdas no adyacentes manteniendo presionada la tecla <span class="keyboard-shortcut">Ctrl</span> mientras haces clic.</li>
            </ul>
        </div>
        <div>
            <h5>Copiar y pegar</h5>
            <ul class="steps">
            <li><strong>Copiar:</strong> Selecciona las celdas y usa <span class="keyboard-shortcut">Ctrl + C</span>.</li>
            <li><strong>Pegar:</strong> Coloca el cursor en la celda destino y usa <span class="keyboard-shortcut">Ctrl + V</span>.</li>
            <li>Opciones de pegado especial:
                <ul class="steps">
                <li><strong>Valores:</strong> Solo los resultados (sin fórmulas).</li>
                <li><strong>Fórmulas:</strong> Solo las fórmulas.</li>
                <li><strong>Formatos:</strong> Solo el formato.</li>
                <li><strong>Transponer:</strong> Intercambia filas por columnas.</li>
                </ul>
            </li>
            <li>Accede a opciones de pegado con <span class="keyboard-shortcut">Ctrl + Alt + V</span>.</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Copiar+y+Pegar+en+Excel" alt="Opciones de copiar y pegar en Excel">
            <figcaption>Opciones de pegado especial en Excel, mostrando cómo pegar solo valores, fórmulas o transponer datos.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Cortar y pegar</h5>
            <ul class="steps">
            <li><strong>Cortar:</strong> Selecciona las celdas y usa <span class="keyboard-shortcut">Ctrl + X</span>.</li>
            <li><strong>Pegar:</strong> Coloca el cursor en la celda destino y usa <span class="keyboard-shortcut">Ctrl + V</span>.</li>
            <li>Las celdas cortadas se mueven (no se duplican como en copiar).</li>
            </ul>
        </div>
        <div>
            <h5>Portapapeles de Office</h5>
            <ul class="steps">
            <li>Excel guarda hasta <strong>24 elementos</strong> en el portapapeles.</li>
            <li>Accede al historial con <span class="keyboard-shortcut">Ctrl + C</span> (dos veces) o haz clic en el icono del portapapeles en la pestaña <strong>Inicio</strong>.</li>
            <li>Pega cualquier elemento del historial haciendo clic en él.</li>
            <li>Borra el portapapeles con el botón <strong>Borrar todo</strong>.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo:</strong> Usa <span class="keyboard-shortcut">Ctrl + D</span> para copiar el contenido de la celda superior a las celdas seleccionadas (relleno hacia abajo).
        </div>
    </div>
    <!-- Sección: Insertar y eliminar filas, columnas y hojas -->
    <div class="card">
        <h4>Insertar y eliminar filas, columnas y hojas</h4>
        <p>Modifica la estructura de tu hoja de cálculo según tus necesidades:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar filas, columnas o celdas</h5>
            <ul class="steps">
            <li>Selecciona la fila, columna o celda donde deseas insertar.</li>
            <li>Usa el atajo:
                <ul class="steps">
                <li><span class="keyboard-shortcut">Ctrl + Shift + +</span> (signo más) para insertar.</li>
                <li><span class="keyboard-shortcut">Alt + I → R</span> para insertar fila.</li>
                <li><span class="keyboard-shortcut">Alt + I → C</span> para insertar columna.</li>
                </ul>
            </li>
            <li>O haz clic derecho y elige <strong>Insertar</strong>.</li>
            <li>Excel desplazará los datos existentes hacia abajo o a la derecha.</li>
            </ul>
        </div>
        <div>
            <h5>Eliminar filas, columnas o celdas</h5>
            <ul class="steps">
            <li>Selecciona la fila, columna o celda que deseas eliminar.</li>
            <li>Usa el atajo <span class="keyboard-shortcut">Ctrl + -</span> (signo menos).</li>
            <li>O haz clic derecho y elige <strong>Eliminar</strong>.</li>
            <li>Excel desplazará los datos hacia arriba o a la izquierda para llenar el espacio.</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Insertar+y+Eliminar" alt="Insertar y eliminar filas en Excel">
            <figcaption>Ejemplo de cómo insertar y eliminar filas, columnas y celdas en Excel, mostrando el menú contextual y atajos de teclado.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Insertar una nueva hoja</h5>
            <ul class="steps">
            <li>Haz clic en el botón <strong>+</strong> al final de las pestañas de hojas.</li>
            <li>O usa el atajo <span class="keyboard-shortcut">Shift + F11</span>.</li>
            <li>Excel nombrará la nueva hoja como "Hoja2", "Hoja3", etc.</li>
            </ul>
        </div>
        <div>
            <h5>Eliminar una hoja</h5>
            <ul class="steps">
            <li>Haz clic derecho en la pestaña de la hoja y elige <strong>Eliminar</strong>.</li>
            <li>O selecciona la hoja y usa <span class="keyboard-shortcut">Alt + E → L</span>.</li>
            <li>Excel pedirá confirmación antes de eliminar.</li>
            </ul>
        </div>
        </div>
        <div class="callout warn">
        <strong>Advertencia:</strong> Eliminar una hoja no se puede deshacer con <span class="keyboard-shortcut">Ctrl + Z</span>. Asegúrate de no necesitar los datos antes de eliminarla.
        </div>
    </div>
    <!-- Sección: Ajustar ancho y alto de celdas -->
    <div class="card">
        <h4>Ajustar ancho y alto de celdas</h4>
        <p>Optimiza la visualización de tus datos ajustando el tamaño de celdas, filas y columnas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Ajustar ancho de columnas</h5>
            <ul class="steps">
            <li>Coloca el cursor en la línea divisoria entre dos encabezados de columna (ej: entre A y B).</li>
            <li>Arrastra para ajustar el ancho manualmente.</li>
            <li>Doble clic en la línea divisoria para <strong>ajustar automáticamente</strong> al contenido.</li>
            <li>Usa <span class="keyboard-shortcut">Alt + O → C → A</span> para ajustar automáticamente la columna seleccionada.</li>
            </ul>
        </div>
        <div>
            <h5>Ajustar alto de filas</h5>
            <ul class="steps">
            <li>Coloca el cursor en la línea divisoria entre dos números de fila (ej: entre 1 y 2).</li>
            <li>Arrastra para ajustar el alto manualmente.</li>
            <li>Doble clic para ajustar automáticamente al contenido.</li>
            <li>Usa <span class="keyboard-shortcut">Alt + O → R → A</span> para ajustar automáticamente la fila seleccionada.</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Ajustar+Celdas" alt="Ajustar ancho y alto de celdas en Excel">
            <figcaption>Ejemplo de cómo ajustar el ancho de columnas y el alto de filas en Excel, mostrando el ajuste automático y manual.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Ajustar múltiples columnas o filas</h5>
            <ul class="steps">
            <li>Selecciona varias columnas o filas manteniendo presionado <span class="keyboard-shortcut">Ctrl</span> o <span class="keyboard-shortcut">Shift</span>.</li>
            <li>Ajusta el ancho o alto de una de ellas; Excel aplicará el cambio a todas las seleccionadas.</li>
            </ul>
        </div>
        <div>
            <h5>Ancho y alto predeterminados</h5>
            <ul class="steps">
            <li>Para restaurar el ancho predeterminado de una columna, haz clic derecho en su encabezado y elige <strong>Ancho estándar</strong>.</li>
            <li>El ancho predeterminado es de 8.43 caracteres (64 píxeles).</li>
            <li>El alto predeterminado es de 15 puntos (20 píxeles).</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <span class="keyboard-shortcut">Ctrl + 0</span> para ocultar la columna seleccionada y <span class="keyboard-shortcut">Ctrl + Shift + 0</span> para mostrarla nuevamente.
        </div>
    </div>
    <!-- Sección: Relleno automático -->
    <div class="card">
        <h4>Uso del relleno automático y series</h4>
        <p>Ahorra tiempo al completar patrones o series de datos automáticamente:</p>
        <div class="grid grid-2">
        <div>
            <h5>Relleno automático básico</h5>
            <ul class="steps">
            <li>Selecciona la celda con el dato inicial (ej: "Enero" en A1).</li>
            <li>Coloca el cursor en la esquina inferior derecha de la celda (el cursor cambiará a una cruz negra).</li>
            <li>Arrastra hacia abajo o a la derecha para rellenar las celdas adyacentes.</li>
            <li>Excel completará la serie automáticamente (ej: "Febrero", "Marzo", etc.).</li>
            </ul>
        </div>
        <div>
            <h5>Series personalizadas</h5>
            <ul class="steps">
            <li>Ingresa los primeros dos valores de la serie (ej: "Trimestre 1" en A1 y "Trimestre 2" en A2).</li>
            <li>Selecciona ambas celdas y arrastra el controlador de relleno.</li>
            <li>Excel continuará el patrón (ej: "Trimestre 3", "Trimestre 4").</li>
            <li>Para series numéricas, ingresa el primer valor y el incremento (ej: 10 en A1 y 20 en A2 → relleno generará 30, 40, etc.).</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Relleno+Automático" alt="Relleno automático en Excel">
            <figcaption>Ejemplo de relleno automático en Excel, mostrando cómo completar series de meses, números y patrones personalizados.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Opciones de relleno</h5>
            <ul class="steps">
            <li>Después de arrastrar el controlador de relleno, haz clic en el icono de <strong>Opciones de autorrelleno</strong> (pequeño cuadrado con flecha).</li>
            <li>Elige entre:
                <ul class="steps">
                <li><strong>Copiar celdas:</strong> Repite el mismo valor.</li>
                <li><strong>Rellenar serie:</strong> Continúa la serie (ej: 1, 2, 3...).</li>
                <li><strong>Rellenar solo formatos:</strong> Copia solo el formato.</li>
                <li><strong>Rellenar sin formato:</strong> Copia solo el contenido.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Series predefinidas</h5>
            <ul class="steps">
            <li>Excel reconoce patrones comunes:
                <ul class="steps">
                <li>Días de la semana (Lunes, Martes...).</li>
                <li>Meses del año (Enero, Febrero...).</li>
                <li>Números (1, 2, 3... o 2, 4, 6...).</li>
                <li>Fechas (01/01/2025, 02/01/2025...).</li>
                </ul>
            </li>
            <li>Para fechas, ingresa la primera fecha y arrastra el controlador de relleno.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo avanzado:</strong> Crea tus propias <strong>listas personalizadas</strong> para relleno automático:
        <ul class="steps">
            <li>Ve a <strong>Archivo → Opciones → Avanzado → Editar listas personalizadas</strong>.</li>
            <li>Añade listas como departamentos, productos o cualquier secuencia que uses frecuentemente.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Borrar contenido -->
    <div class="card">
        <h4>Borrar contenido, formato o todo</h4>
        <p>Elimina datos, formatos o ambos según tus necesidades:</p>
        <div class="grid grid-2">
        <div>
            <h5>Borrar contenido</h5>
            <ul class="steps">
            <li>Selecciona las celdas que deseas borrar.</li>
            <li>Presiona <span class="keyboard-shortcut">Supr</span> o <span class="keyboard-shortcut">Delete</span>.</li>
            <li>O haz clic derecho y elige <strong>Borrar contenido</strong>.</li>
            <li>Solo elimina los valores, dejando las fórmulas y formatos intactos.</li>
            </ul>
        </div>
        <div>
            <h5>Borrar formatos</h5>
            <ul class="steps">
            <li>Selecciona las celdas con formato que deseas eliminar.</li>
            <li>Ve a <strong>Inicio → Borrar → Borrar formatos</strong>.</li>
            <li>O usa el atajo <span class="keyboard-shortcut">Alt + H → E → F</span>.</li>
            <li>Elimina colores, fuentes, bordes y alineaciones, pero conserva los datos.</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Borrar+en+Excel" alt="Opciones de borrar en Excel">
            <figcaption>Opciones para borrar contenido, formatos o todo en Excel, mostrando el menú contextual y atajos.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Borrar todo</h5>
            <ul class="steps">
            <li>Selecciona las celdas que deseas borrar completamente.</li>
            <li>Ve a <strong>Inicio → Borrar → Borrar todo</strong>.</li>
            <li>O usa el atajo <span class="keyboard-shortcut">Alt + H → E → A</span>.</li>
            <li>Elimina contenido, formatos, comentarios y validación de datos.</li>
            </ul>
        </div>
        <div>
            <h5>Opciones avanzadas</h5>
            <ul class="steps">
            <li>Borrar <strong>comentarios</strong>: <strong>Inicio → Borrar → Borrar comentarios</strong>.</li>
            <li>Borrar <strong>hipervínculos</strong>: <strong>Inicio → Borrar → Borrar hipervínculos</strong>.</li>
            <li>Borrar <strong>validación de datos</strong>: Selecciona las celdas y ve a <strong>Datos → Validación de datos → Borrar todo</strong>.</li>
            </ul>
        </div>
        </div>
        <div class="callout warn">
        <strong>Advertencia:</strong> Borrar todo no se puede deshacer con <span class="keyboard-shortcut">Ctrl + Z</span> si cierras el libro. Guarda una copia de seguridad si trabajas con datos importantes.
        </div>
    </div>
    <!-- Sección: Congelar y dividir paneles -->
    <div class="card">
        <h4>Congelar y dividir paneles</h4>
        <p>Mantén visibles los encabezados o áreas específicas mientras desplazas por hojas grandes:</p>
        <div class="grid grid-2">
        <div>
            <h5>Congelar paneles</h5>
            <ul class="steps">
            <li>Selecciona la fila debajo de los encabezados que deseas congelar (ej: fila 2).</li>
            <li>Ve a <strong>Vista → Congelar paneles → Congelar paneles hasta la fila seleccionada</strong>.</li>
            <li>O usa <span class="keyboard-shortcut">Alt + W → F → R</span>.</li>
            <li>Para congelar columnas, selecciona la columna a la derecha de las que deseas congelar.</li>
            <li>Para congelar ambas, selecciona la celda debajo y a la derecha (ej: B2).</li>
            </ul>
        </div>
        <div>
            <h5>Dividir paneles</h5>
            <ul class="steps">
            <li>Coloca el cursor en la barra de desplazamiento horizontal o vertical donde deseas dividir.</li>
            <li>Arrastra el <strong>controlador de división</strong> (pequeño cuadrado) para crear paneles independientes.</li>
            <li>O ve a <strong>Vista → Dividir</strong>.</li>
            <li>Desplázate por cada panel de forma independiente.</li>
            <li>Para eliminar la división, ve a <strong>Vista → Dividir</strong> nuevamente.</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Congelar+y+Dividir" alt="Congelar y dividir paneles en Excel">
            <figcaption>Ejemplo de cómo congelar filas/columnas y dividir paneles en Excel para navegar hojas grandes.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Descongelar paneles</h5>
            <ul class="steps">
            <li>Ve a <strong>Vista → Congelar paneles → Descongelar paneles</strong>.</li>
            <li>O usa <span class="keyboard-shortcut">Alt + W → F → F</span>.</li>
            </ul>
        </div>
        <div>
            <h5>Congelar múltiples filas/columnas</h5>
            <ul class="steps">
            <li>Selecciona la celda donde se intersectan las filas y columnas que deseas congelar (ej: C3 para congelar 2 filas y 2 columnas).</li>
            <li>Ve a <strong>Vista → Congelar paneles → Congelar paneles</strong>.</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <strong>Congelar paneles</strong> para mantener visibles los encabezados de columnas y filas en hojas con miles de registros, y <strong>Dividir paneles</strong> para comparar áreas distantes de la misma hoja.
        </div>
    </div>
    <!-- Sección: Navegación con teclado -->
    <div class="card">
        <h4>Navegación rápida con teclado</h4>
        <p>Ahorra tiempo moviéndote eficientemente por tus hojas de cálculo:</p>
        <div class="grid grid-2">
        <div>
            <h5>Atajos básicos de navegación</h5>
            <table>
            <thead>
                <tr><th>Atajo</th><th>Acción</th></tr>
            </thead>
            <tbody>
                <tr><td><span class="keyboard-shortcut">Flechas</span></td><td>Moverse una celda en la dirección de la flecha.</td></tr>
                <tr><td><span class="keyboard-shortcut">Tab</span></td><td>Moverse a la celda de la derecha.</td></tr>
                <tr><td><span class="keyboard-shortcut">Shift + Tab</span></td><td>Moverse a la celda de la izquierda.</td></tr>
                <tr><td><span class="keyboard-shortcut">Enter</span></td><td>Moverse a la celda de abajo (o a la derecha si está activada la opción).</td></tr>
                <tr><td><span class="keyboard-shortcut">Shift + Enter</span></td><td>Moverse a la celda de arriba.</td></tr>
                <tr><td><span class="keyboard-shortcut">Home</span></td><td>Ir al inicio de la fila (columna A).</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Home</span></td><td>Ir a la celda A1.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + End</span></td><td>Ir a la última celda con datos.</td></tr>
            </tbody>
            </table>
        </div>
        <div>
            <h5>Navegación avanzada</h5>
            <table>
            <thead>
                <tr><th>Atajo</th><th>Acción</th></tr>
            </thead>
            <tbody>
                <tr><td><span class="keyboard-shortcut">Ctrl + Flecha</span></td><td>Ir al borde de la región de datos en la dirección de la flecha.</td></tr>
                <tr><td><span class="keyboard-shortcut">PgUp / PgDn</span></td><td>Desplazarse una pantalla hacia arriba/abajo.</td></tr>
                <tr><td><span class="keyboard-shortcut">Alt + PgUp / PgDn</span></td><td>Desplazarse una pantalla a la izquierda/derecha.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + PgUp / PgDn</span></td><td>Moverse entre hojas del libro.</td></tr>
                <tr><td><span class="keyboard-shortcut">F5</span></td><td>Abrir el cuadro <strong>Ir a</strong> (ej: "A1:D10").</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + G</span></td><td>Alternativa a F5 para <strong>Ir a</strong>.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + F</span></td><td>Buscar en la hoja.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + H</span></td><td>Buscar y reemplazar.</td></tr>
            </tbody>
            </table>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Selección rápida</h5>
            <table>
            <thead>
                <tr><th>Atajo</th><th>Acción</th></tr>
            </thead>
            <tbody>
                <tr><td><span class="keyboard-shortcut">Shift + Flechas</span></td><td>Extender la selección en la dirección de la flecha.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Shift + Flecha</span></td><td>Seleccionar hasta el borde de la región de datos.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + A</span></td><td>Seleccionar toda la hoja (o la región de datos si hay celdas seleccionadas).</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Espacio</span></td><td>Seleccionar la columna completa.</td></tr>
                <tr><td><span class="keyboard-shortcut">Shift + Espacio</span></td><td>Seleccionar la fila completa.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Shift + *</span></td><td>Seleccionar la región actual (datos adyacentes).</td></tr>
            </tbody>
            </table>
        </div>
        <div>
            <h5>Edición rápida</h5>
            <table>
            <thead>
                <tr><th>Atajo</th><th>Acción</th></tr>
            </thead>
            <tbody>
                <tr><td><span class="keyboard-shortcut">F2</span></td><td>Editar la celda activa.</td></tr>
                <tr><td><span class="keyboard-shortcut">Alt + Enter</span></td><td>Salto de línea dentro de una celda.</td></tr>
                <tr><td><span class="keyboard-shortcut">Esc</span></td><td>Cancelar la edición de una celda.</td></tr>
                <tr><td><span class="keyboard-shortcut">Enter</span></td><td>Confirmar la edición y moverse abajo.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + ;</span></td><td>Insertar la fecha actual.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Shift + :</span></td><td>Insertar la hora actual.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + '</span></td><td>Copiar la fórmula de la celda superior.</td></tr>
            </tbody>
            </table>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Navegación+con+Teclado" alt="Atajos de teclado para navegación en Excel">
            <figcaption>Atajos de teclado para navegación y edición rápida en Excel, incluyendo movimiento, selección y edición de celdas.</figcaption>
            </figure>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Combina estos atajos para navegar y editar rápidamente. Por ejemplo:
        <ul class="steps">
            <li><span class="keyboard-shortcut">Ctrl + Flecha abajo</span> + <span class="keyboard-shortcut">Shift + Flecha arriba</span> para seleccionar una columna de datos.</li>
            <li><span class="keyboard-shortcut">F5</span> → escribe "B2:B100" → <span class="keyboard-shortcut">Enter</span> para ir a un rango específico.</li>
            <li><span class="keyboard-shortcut">Ctrl + Shift + L</span> para activar/desactivar filtros.</li>
        </ul>
        </div>
    </div>
    </section>
    <!-- MÓDULO 3: FORMATO Y DISEÑO -->
    <section id="modulo3" class="block">
    <h3>Módulo 3. Formato y Diseño</h3>
    <p class="lead">
        Aprende a aplicar formatos a celdas, usar estilos predefinidos, alinear y combinar celdas, y aplicar formato condicional. Domina el uso de temas, colores y fuentes para crear hojas de cálculo profesionales y visualmente atractivas.
    </p>
    <!-- Sección: Formato de números, fechas y texto -->
    <div class="card">
        <h4>Formato de celdas: números, fechas y texto</h4>
        <p>El formato adecuado mejora la legibilidad y el análisis de tus datos:</p>
        <div class="grid grid-2">
        <div>
            <h5>Formato de números</h5>
            <ul class="steps">
            <li>Selecciona las celdas que deseas formatear.</li>
            <li>Ve a <strong>Inicio → Formato de número</strong>.</li>
            <li>Elige entre:
                <ul class="steps">
                <li><strong>General:</strong> Formato predeterminado.</li>
                <li><strong>Número:</strong> Para decimales (ej: 1234.56).</li>
                <li><strong>Moneda:</strong> Para valores monetarios (ej: $1,234.56).</li>
                <li><strong>Contabilidad:</strong> Alinea símbolos monetarios.</li>
                <li><strong>Fecha y Hora:</strong> Para fechas y horas (ej: 14/03/2025).</li>
                <li><strong>Porcentaje:</strong> Multiplica por 100 y añade % (ej: 56%).</li>
                <li><strong>Fracción:</strong> Para fracciones (ej: 1/2).</li>
                <li><strong>Científico:</strong> Notación científica (ej: 1.23E+03).</li>
                </ul>
            </li>
            <li>Atajos rápidos:
                <ul class="steps">
                <li><span class="keyboard-shortcut">Ctrl + Shift + $</span>: Formato de moneda.</li>
                <li><span class="keyboard-shortcut">Ctrl + Shift + %</span>: Formato de porcentaje.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Formato personalizado</h5>
            <ul class="steps">
            <li>Selecciona las celdas y usa <span class="keyboard-shortcut">Ctrl + 1</span> para abrir <strong>Formato de celdas</strong>.</li>
            <li>En la pestaña <strong>Número</strong>, elige <strong>Personalizado</strong>.</li>
            <li>Ejemplos de formatos personalizados:
                <ul class="steps">
                <li><code>#,##0.00</code>: Dos decimales (ej: 1234.56).</li>
                <li><code>\\\$#,##0_);(\\\$#,##0)</code>: Moneda con paréntesis para negativos.</li>
                <li><code>dd/mm/aaaa</code>: Fecha (ej: 14/03/2025).</li>
                <li><code>0.0%</code>: Porcentaje con un decimal.</li>
                </ul>
            </li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Formato+de+Números" alt="Formato de números en Excel">
            <figcaption>Ejemplos de formato de números en Excel, incluyendo moneda, porcentaje y formatos personalizados.</figcaption>
            </figure>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <code>0</code> para mostrar ceros y <code>#</code> para omitirlos (ej: <code>#.##</code> muestra 1234.5 sin ceros innecesarios).
        </div>
    </div>
    <!-- Sección: Fuentes, colores y bordes -->
    <div class="card">
        <h4>Fuentes, colores y bordes</h4>
        <p>Personaliza la apariencia de tus celdas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Fuentes</h5>
            <ul class="steps">
            <li>Cambia la fuente en <strong>Inicio → Fuente</strong>.</li>
            <li>Opciones comunes:
                <ul class="steps">
                <li><strong>Negrita:</strong> <span class="keyboard-shortcut">Ctrl + B</span>.</li>
                <li><strong>Cursiva:</strong> <span class="keyboard-shortcut">Ctrl + I</span>.</li>
                <li><strong>Subrayado:</strong> <span class="keyboard-shortcut">Ctrl + U</span>.</li>
                <li><strong>Tamaño:</strong> Ajusta el tamaño de la fuente.</li>
                <li><strong>Color:</strong> Cambia el color del texto.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Colores y bordes</h5>
            <ul class="steps">
            <li><strong>Color de relleno:</strong> Cambia el color de fondo de la celda.</li>
            <li><strong>Color de fuente:</strong> Cambia el color del texto.</li>
            <li><strong>Bordes:</strong> Añade bordes a celdas o rangos.
                <ul class="steps">
                <li>Selecciona el estilo y color del borde.</li>
                <li>Usa <strong>Todos los bordes</strong> para aplicar bordes a un rango.</li>
                </ul>
            </li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Fuentes+y+Bordes" alt="Fuentes y bordes en Excel">
                <figcaption>Ejemplo de cómo aplicar fuentes, colores y bordes en Excel para mejorar la presentación de datos.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa colores consistentemente (ej: verde para ganancias, rojo para pérdidas) para facilitar la interpretación de datos.
        </div>
    </div>
    <!-- Sección: Alineación y combinación -->
    <div class="card">
        <h4>Alineación y combinación de celdas</h4>
        <p>Organiza y presenta tus datos de manera clara:</p>
        <div class="grid grid-2">
        <div>
            <h5>Alineación</h5>
            <ul class="steps">
            <li>Selecciona las celdas y usa las opciones en <strong>Inicio → Alineación</strong>:</li>
            <ul class="steps">
                <li><strong>Horizontal:</strong> Izquierda, centro, derecha.</li>
                <li><strong>Vertical:</strong> Superior, centro, inferior.</li>
                <li><strong>Ajustar texto:</strong> Para texto largo en celdas estrechas.</li>
                <li><strong>Orientación:</strong> Gira el texto (ej: 45°).</li>
            </ul>
            </div>
        <div>
            <h5>Combinar celdas</h5>
            <ul class="steps">
            <li>Selecciona las celdas que deseas combinar.</li>
            <li>Usa <strong>Inicio → Combinar y centrar</strong>.</li>
            <li>Opciones:
                <ul class="steps">
                <li><strong>Combinar y centrar:</strong> Une celdas y centra el contenido.</li>
                <li><strong>Combinar horizontalmente:</strong> Para filas.</li>
                <li><strong>Descombinar celdas:</strong> Para separar celdas combinadas.</li>
                </ul>
            </li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Alineación+y+Combinar" alt="Alineación y combinación de celdas en Excel">
                <figcaption>Ejemplo de alineación de texto y combinación de celdas en Excel para crear encabezados y títulos.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout warn">
        <strong>Advertencia:</strong> Combinar celdas puede afectar el ordenamiento y filtrado de datos. Usa esta función con moderación.
        </div>
    </div>
    <!-- Sección: Estilos y temas -->
    <div class="card">
        <h4>Estilos predefinidos y temas</h4>
        <p>Aplica formatos profesionales con un solo clic:</p>
        <div class="grid grid-2">
        <div>
            <h5>Estilos de celda</h5>
            <ul class="steps">
            <li>Selecciona las celdas y ve a <strong>Inicio → Estilos</strong>.</li>
            <li>Elige entre estilos predefinidos:
                <ul class="steps">
                <li><strong>Títulos:</strong> Para encabezados.</li>
                <li><strong>Bueno/Malo/Neutral:</strong> Para indicadores.</li>
                <li><strong>Moneda:</strong> Para valores monetarios.</li>
                <li><strong>Porcentaje:</strong> Para porcentajes.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Temas de Excel</h5>
            <ul class="steps">
            <li>Ve a <strong>Diseño de página → Temas</strong>.</li>
            <li>Elige un tema para cambiar colores, fuentes y efectos en todo el libro.</li>
            <li>Personaliza colores y fuentes del tema en <strong>Diseño de página → Colores/Fuentes</strong>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Estilos+y+Temas" alt="Estilos y temas en Excel">
                <figcaption>Ejemplo de cómo aplicar estilos predefinidos y temas en Excel para un diseño profesional.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <strong>Estilos de tabla</strong> para aplicar formatos coherentes a tablas de datos.
        </div>
    </div>
    <!-- Sección: Formato condicional -->
    <div class="card">
        <h4>Formato condicional</h4>
        <p>Resalta datos importantes automáticamente:</p>
        <div class="grid grid-2">
        <div>
            <h5>Reglas básicas</h5>
            <ul class="steps">
            <li>Selecciona el rango de datos.</li>
            <li>Ve a <strong>Inicio → Formato condicional</strong>.</li>
            <li>Elige una regla:
                <ul class="steps">
                <li><strong>Resaltar reglas de celdas:</strong> Mayor que, menor que, igual a.</li>
                <li><strong>Barras de datos:</strong> Barras horizontales dentro de las celdas.</li>
                <li><strong>Escala de colores:</strong> Degradado de colores.</li>
                <li><strong>Conjuntos de iconos:</strong> Flechas, semáforos, etc.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Reglas avanzadas</h5>
            <ul class="steps">
            <li><strong>Nueva regla:</strong> Crea reglas personalizadas con fórmulas.</li>
            <li>Ejemplo: Resaltar celdas donde <code>=A1>B1</code>.</li>
            <li>Administra reglas en <strong>Inicio → Formato condicional → Administrar reglas</strong>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Formato+Condicional" alt="Formato condicional en Excel">
                <figcaption>Ejemplo de formato condicional en Excel, mostrando barras de datos, escalas de colores y conjuntos de iconos.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa formato condicional para:
        <ul class="steps">
            <li>Resaltar valores atípicos.</li>
            <li>Identificar tendencias (ej: aumento/disminución de ventas).</li>
            <li>Visualizar umbrales (ej: stock bajo).</li>
        </ul>
        </div>
    </div>
    </section>
    <!-- MÓDULO 4: FÓRMULAS Y FUNCIONES BÁSICAS -->
    <section id="modulo4" class="block">
    <h3>Módulo 4. Fórmulas y Funciones Básicas</h3>
    <p class="lead">
        Domina las fórmulas y funciones esenciales de Excel para realizar cálculos, análisis y automatización. Aprende a usar referencias relativas, absolutas y mixtas, y a manejar errores comunes.
    </p>
    <!-- Sección: Introducción a fórmulas -->
    <div class="card">
        <h4>Introducción a fórmulas y operadores</h4>
        <p>Las fórmulas son el corazón de Excel:</p>
        <div class="grid grid-2">
        <div>
            <h5>Operadores aritméticos</h5>
            <ul class="steps">
            <li><code>+</code>: Suma.</li>
            <li><code>-</code>: Resta.</li>
            <li><code>*</code>: Multiplicación.</li>
            <li><code>/</code>: División.</li>
            <li><code>^</code>: Potencia (ej: <code>2^3</code> = 8).</li>
            <li><code>%</code>: Porcentaje (ej: <code>20%</code> = 0.2).</li>
            </ul>
        </div>
        <div>
            <h5>Operadores de comparación</h5>
            <ul class="steps">
            <li><code>=</code>: Igual a.</li>
            <li><code>&gt;</code>: Mayor que.</li>
            <li><code>&lt;</code>: Menor que.</li>
            <li><code>&gt;=</code>: Mayor o igual que.</li>
            <li><code>&lt;=</code>: Menor o igual que.</li>
            <li><code>&lt;&gt;</code>: Distinto de.</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Operadores+en+Excel" alt="Operadores en Excel">
            <figcaption>Ejemplos de operadores aritméticos y de comparación en Excel.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Operadores de texto</h5>
            <ul class="steps">
            <li><code>&</code>: Concatenación (ej: <code>"Hola" & " " & "Mundo"</code>).</li>
            </ul>
        </div>
        <div>
            <h5>Operadores de referencia</h5>
            <ul class="steps">
            <li><code>:</code>: Rango (ej: <code>A1:B10</code>).</li>
            <li><code>,</code>: Unión (ej: <code>SUMA(A1:B10, C1:C10)</code>).</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa paréntesis para definir el orden de operaciones (ej: <code>=(A1+B1)*C1</code>).
        </div>
    </div>
    <!-- Sección: Referencias relativas, absolutas y mixtas -->
    <div class="card">
        <h4>Referencias relativas, absolutas y mixtas</h4>
        <p>Controla cómo Excel ajusta las referencias al copiar fórmulas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Referencias relativas</h5>
            <ul class="steps">
            <li>Formato: <code>A1</code>.</li>
            <li>Se ajustan al copiar la fórmula (ej: <code>=A1+B1</code> copiada a <code>=A2+B2</code>).</li>
            </ul>
        </div>
        <div>
            <h5>Referencias absolutas</h5>
            <ul class="steps">
            <li>Formato: <code>\\\$A\\\$1</code>.</li>
            <li>No cambian al copiar (ej: <code>=\\\$A\\\$1+B1</code> siempre usa A1).</li>
            <li>Usa <span class="keyboard-shortcut">F4</span> para alternar entre relativas/absolutas.</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Referencias+en+Excel" alt="Referencias en Excel">
            <figcaption>Ejemplo de referencias relativas, absolutas y mixtas en Excel.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Referencias mixtas</h5>
            <ul class="steps">
            <li><code>\\\$A1</code>: Columna absoluta, fila relativa.</li>
            <li><code>A\\\$1</code>: Fila absoluta, columna relativa.</li>
            </ul>
        </div>
        <div>
            <h5>Ejemplo práctico</h5>
            <ul class="steps">
            <li>Fórmula con referencia absoluta: <code>=B2*\\\$D\\\$1</code> (D1 es un impuesto fijo).</li>
            <li>Al copiar, solo cambia la referencia relativa (<code>B2</code>).</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa referencias absolutas para valores constantes como tasas de impuesto o porcentajes.
        </div>
    </div>
    <!-- Sección: Funciones básicas -->
    <div class="card">
        <h4>Funciones básicas: SUMA, PROMEDIO, CONTAR</h4>
        <p>Funciones esenciales para cálculos básicos:</p>
        <div class="grid grid-2">
        <div>
            <h5>SUMA</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=SUMA(número1; [número2]; ...)</code>.</li>
            <li>Ejemplo: <code>=SUMA(A1:A10)</code>.</li>
            <li>Atajo: <span class="keyboard-shortcut">Alt + =</span>.</li>
            </ul>
        </div>
        <div>
            <h5>PROMEDIO</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=PROMEDIO(número1; [número2]; ...)</code>.</li>
            <li>Ejemplo: <code>=PROMEDIO(B1:B10)</code>.</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Funciones+Básicas" alt="Funciones básicas en Excel">
            <figcaption>Ejemplo de funciones SUMA, PROMEDIO y CONTAR en Excel.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>CONTAR</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=CONTAR(valor1; [valor2]; ...)</code>.</li>
            <li>Cuenta celdas con números.</li>
            </ul>
        </div>
        <div>
            <h5>CONTARA</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=CONTARA(valor1; [valor2]; ...)</code>.</li>
            <li>Cuenta celdas no vacías.</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <code>CONTAR.SI</code> para contar celdas que cumplen un criterio (ej: <code>=CONTAR.SI(A1:A10; ">100")</code>).
        </div>
    </div>
    <!-- Sección: Funciones lógicas -->
    <div class="card">
        <h4>Funciones lógicas: SI, Y, O</h4>
        <p>Toma decisiones en tus fórmulas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Función SI</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=SI(prueba_lógica; valor_si_verdadero; valor_si_falso)</code>.</li>
            <li>Ejemplo: <code>=SI(A1>100; "Alto"; "Bajo")</code>.</li>
            </ul>
        </div>
        <div>
            <h5>Funciones Y, O</h5>
            <ul class="steps">
            <li><code>Y</code>: <code>=Y(condición1; condición2; ...)</code>.</li>
            <li><code>O</code>: <code>=O(condición1; condición2; ...)</code>.</li>
            <li>Ejemplo: <code>=SI(Y(A1>100; B1<50); "Aprobado"; "Rechazado")</code>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Funciones+Lógicas" alt="Funciones lógicas en Excel">
                <figcaption>Ejemplo de funciones SI, Y y O en Excel para tomar decisiones.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Combina <code>SI</code> con <code>Y</code>/<code>O</code> para condiciones complejas.
        </div>
    </div>
    <!-- Sección: Funciones de texto -->
    <div class="card">
        <h4>Funciones de texto: CONCATENAR, IZQUIERDA, DERECHA</h4>
        <p>Manipula cadenas de texto:</p>
        <div class="grid grid-2">
        <div>
            <h5>CONCATENAR</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=CONCATENAR(texto1; [texto2]; ...)</code>.</li>
            <li>Ejemplo: <code>=CONCATENAR(A1; " "; B1)</code>.</li>
            </ul>
        </div>
        <div>
            <h5>IZQUIERDA, DERECHA</h5>
            <ul class="steps">
            <li><code>IZQUIERDA</code>: <code>=IZQUIERDA(texto; núm_de_caracteres)</code>.</li>
            <li><code>DERECHA</code>: <code>=DERECHA(texto; núm_de_caracteres)</code>.</li>
            <li>Ejemplo: <code>=IZQUIERDA(A1; 3)</code>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Funciones+de+Texto" alt="Funciones de texto en Excel">
                <figcaption>Ejemplo de funciones CONCATENAR, IZQUIERDA y DERECHA en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>EXTRAE</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=EXTRAE(texto; posición_inicial; núm_de_caracteres)</code>.</li>
            <li>Ejemplo: <code>=EXTRAE(A1; 2; 4)</code>.</li>
            </ul>
        </div>
        <div>
            <h5>ENCONTRAR</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=ENCONTRAR(texto_buscado; texto; [posición_inicial])</code>.</li>
            <li>Ejemplo: <code>=ENCONTRAR("@"; A1)</code>.</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <code>SUSTITUIR</code> para reemplazar texto (ej: <code>=SUSTITUIR(A1; "viejo"; "nuevo")</code>).
        </div>
    </div>
    <!-- Sección: Funciones de fecha y hora -->
    <div class="card">
        <h4>Funciones de fecha y hora: HOY, AHORA, DIA, MES, AÑO</h4>
        <p>Trabaja con fechas y horas:</p>
        <div class="grid grid-2">
        <div>
            <h5>HOY y AHORA</h5>
            <ul class="steps">
            <li><code>HOY()</code>: Devuelve la fecha actual.</li>
            <li><code>AHORA()</code>: Devuelve fecha y hora actual.</li>
            </ul>
        </div>
        <div>
            <h5>DIA, MES, AÑO</h5>
            <ul class="steps">
            <li><code>DIA(fecha)</code>: Devuelve el día.</li>
            <li><code>MES(fecha)</code>: Devuelve el mes.</li>
            <li><code>AÑO(fecha)</code>: Devuelve el año.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Funciones+de+Fecha" alt="Funciones de fecha en Excel">
                <figcaption>Ejemplo de funciones HOY, AHORA, DIA, MES y AÑO en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>DIAS.LAB</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=DIAS.LAB(fecha_inicial; fecha_final; [festivos])</code>.</li>
            <li>Ejemplo: <code>=DIAS.LAB(A1; B1)</code>.</li>
            </ul>
        </div>
        <div>
            <h5>FECHA</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=FECHA(año; mes; día)</code>.</li>
            <li>Ejemplo: <code>=FECHA(2025; 12; 31)</code>.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa <code>HOY()</code> para cálculos de plazos (ej: <code>=B1-HOY()</code> para días restantes).
        </div>
    </div>
    <!-- Sección: Manejo de errores -->
    <div class="card">
        <h4>Manejo de errores: SI.ERROR</h4>
        <p>Controla errores en tus fórmulas:</p>
        <div class="grid grid-2">
        <div>
            <h5>SI.ERROR</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=SI.ERROR(valor; valor_si_error)</code>.</li>
            <li>Ejemplo: <code>=SI.ERROR(A1/B1; "Error en división")</code>.</li>
            </ul>
        </div>
        <div>
            <h5>Tipos de errores</h5>
            <ul class="steps">
            <li><code>#¡DIV/0!</code>: División por cero.</li>
            <li><code>#¡NUM!</code>: Error en número.</li>
            <li><code>#¡VALOR!</code>: Tipo de argumento incorrecto.</li>
            <li><code>#¿NOMBRE?</code>: Nombre no reconocido.</li>
            <li><code>#N/A</code>: Valor no disponible.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Manejo+de+Errores" alt="Manejo de errores en Excel">
                <figcaption>Ejemplo de cómo manejar errores en Excel con la función SI.ERROR.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout warn">
        <strong>Advertencia:</strong> Usa <code>SI.ERROR</code> para evitar que errores rompan tus cálculos.
        </div>
    </div>
    </section>
    <!-- MÓDULO 5: GESTIÓN DE DATOS Y TABLAS -->
    <section id="modulo5" class="block">
    <h3>Módulo 5. Gestión de Datos y Tablas</h3>
    <p class="lead">
        Aprende a ordenar, filtrar y validar datos, y a trabajar con tablas de Excel. Domina la importación y exportación de datos desde diferentes fuentes.
    </p>
    <!-- Sección: Ordenar y filtrar -->
    <div class="card">
        <h4>Ordenar y filtrar datos</h4>
        <p>Organiza y analiza tus datos eficientemente:</p>
        <div class="grid grid-2">
        <div>
            <h5>Ordenar datos</h5>
            <ul class="steps">
            <li>Selecciona el rango de datos.</li>
            <li>Ve a <strong>Datos → Ordenar</strong>.</li>
            <li>Elige la columna y el orden (ascendente/descendente).</li>
            <li>Atajo: <span class="keyboard-shortcut">Alt + D → S</span>.</li>
            </ul>
        </div>
        <div>
            <h5>Ordenar por múltiples columnas</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Ordenar</strong>.</li>
            <li>Haz clic en <strong>Agregar nivel</strong>.</li>
            <li>Define el orden para cada columna.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Ordenar+Datos" alt="Ordenar datos en Excel">
                <figcaption>Ejemplo de cómo ordenar datos por múltiples columnas en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Filtrar datos</h5>
            <ul class="steps">
            <li>Selecciona el rango y ve a <strong>Datos → Filtrar</strong>.</li>
            <li>Usa los menús desplegables en los encabezados.</li>
            <li>Atajo: <span class="keyboard-shortcut">Ctrl + Shift + L</span>.</li>
            </ul>
        </div>
        <div>
            <h5>Filtros avanzados</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Avanzado</strong>.</li>
            <li>Define el rango de datos y el rango de criterios.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa <strong>Segmentación de datos</strong> para filtrar tablas dinámicas interactivamente.
        </div>
    </div>
    <!-- Sección: Validación de datos -->
    <div class="card">
        <h4>Validación de datos</h4>
        <p>Controla qué datos se pueden ingresar en tus celdas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Crear reglas de validación</h5>
            <ul class="steps">
            <li>Selecciona las celdas y ve a <strong>Datos → Validación de datos</strong>.</li>
            <li>Elige el tipo de validación:
                <ul class="steps">
                <li>Número entero o decimal.</li>
                <li>Fecha u hora.</li>
                <li>Longitud de texto.</li>
                <li>Lista desplegable.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Mensajes de entrada y error</h5>
            <ul class="steps">
            <li>Configura mensajes para guiar al usuario.</li>
            <li>Define acciones para datos no válidos (advertencia, error, información).</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Validación+de+Datos" alt="Validación de datos en Excel">
                <figcaption>Ejemplo de validación de datos en Excel, mostrando listas desplegables y mensajes de error.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa listas desplegables para estandarizar entradas (ej: "Sí/No", categorías de productos).
        </div>
    </div>
    <!-- Sección: Tablas de Excel -->
    <div class="card">
        <h4>Trabajar con tablas de Excel</h4>
        <p>Las tablas permiten gestionar y analizar datos de manera estructurada:</p>
        <div class="grid grid-2">
        <div>
            <h5>Crear una tabla</h5>
            <ul class="steps">
            <li>Selecciona el rango de datos.</li>
            <li>Ve a <strong>Insertar → Tabla</strong> o usa <span class="keyboard-shortcut">Ctrl + T</span>.</li>
            <li>Excel detectará automáticamente los encabezados.</li>
            <li>Las tablas tienen nombres automáticos (ej: Tabla1, Tabla2).</li>
            </ul>
        </div>
        <div>
            <h5>Estilos de tabla</h5>
            <ul class="steps">
            <li>Ve a <strong>Diseño → Estilos de tabla</strong>.</li>
            <li>Elige entre estilos predefinidos o personaliza colores.</li>
            <li>Las tablas mantienen el formato al añadir nuevas filas.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Tablas+en+Excel" alt="Tablas en Excel">
                <figcaption>Ejemplo de tabla en Excel con estilo aplicado y fila de totales.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Fila de totales</h5>
            <ul class="steps">
            <li>Activa la fila de totales en <strong>Diseño → Fila de totales</strong>.</li>
            <li>Excel añadirá una fila al final con funciones como <code>SUMA</code>, <code>PROMEDIO</code>, etc.</li>
            <li>Haz clic en una celda de la fila de totales para elegir la función.</li>
            </ul>
        </div>
        <div>
            <h5>Referencias estructuradas</h5>
            <ul class="steps">
            <li>Las tablas permiten usar referencias con nombres de columnas:
                <ul class="steps">
                <li>Ejemplo: <code>=SUMA(Tabla1[Ventas])</code>.</li>
                <li>Se actualizan automáticamente al añadir/eliminar filas.</li>
                </ul>
            </li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa tablas para:
        <ul class="steps">
            <li>Ordenar y filtrar datos rápidamente.</li>
            <li>Aplicar formato condicional.</li>
            <li>Crear gráficos dinámicos.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Subtotales -->
    <div class="card">
        <h4>Subtotales automáticos</h4>
        <p>Agrupa y resume datos en una lista:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar subtotales</h5>
            <ul class="steps">
            <li>Ordena los datos por la columna que deseas agrupar.</li>
            <li>Ve a <strong>Datos → Subtotal</strong>.</li>
            <li>Elige la columna para agrupar y la función (SUMA, PROMEDIO, etc.).</li>
            <li>Excel insertará subtotales y un esquema para contraer/expandir grupos.</li>
            </ul>
        </div>
        <div>
            <h5>Eliminar subtotales</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Subtotal → Quitar todos</strong>.</li>
            <li>O usa <span class="keyboard-shortcut">Alt + D → S → R</span>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Subtotales+en+Excel" alt="Subtotales en Excel">
                <figcaption>Ejemplo de subtotales en Excel, mostrando datos agrupados por categoría con sumas parciales.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa subtotales para resúmenes rápidos en informes financieros o de ventas.
        </div>
    </div>
    <!-- Sección: Eliminar duplicados -->
    <div class="card">
        <h4>Eliminar duplicados</h4>
        <p>Elimina filas repetidas en un rango o tabla:</p>
        <div class="grid grid-2">
        <div>
            <h5>Eliminar duplicados</h5>
            <ul class="steps">
            <li>Selecciona el rango o tabla.</li>
            <li>Ve a <strong>Datos → Eliminar duplicados</strong>.</li>
            <li>Elige las columnas para comparar.</li>
            <li>Excel mostrará cuántas filas se eliminaron.</li>
            </ul>
        </div>
        <div>
            <h5>Opciones avanzadas</h5>
            <ul class="steps">
            <li>Usa <strong>Condicional</strong> para resaltar duplicados antes de eliminarlos:
                <ul class="steps">
                <li>Ve a <strong>Inicio → Formato condicional → Reglas para celdas que contengan → Valores duplicados</strong>.</li>
                </ul>
            </li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Eliminar+Duplicados" alt="Eliminar duplicados en Excel">
                <figcaption>Ejemplo de cómo identificar y eliminar duplicados en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout warn">
        <strong>Advertencia:</strong> Esta acción no se puede deshacer. Guarda una copia de seguridad antes de eliminar duplicados.
        </div>
    </div>
    <!-- Sección: Protección de celdas y hojas -->
    <div class="card">
        <h4>Protección de celdas y hojas</h4>
        <p>Controla qué usuarios pueden editar celdas o hojas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Bloquear celdas</h5>
            <ul class="steps">
            <li>Selecciona las celdas que deseas proteger.</li>
            <li>Ve a <strong>Inicio → Formato → Bloquear celda</strong>.</li>
            <li>Por defecto, todas las celdas están bloqueadas, pero la protección no se activa hasta proteger la hoja.</li>
            </ul>
        </div>
        <div>
            <h5>Proteger hoja</h5>
            <ul class="steps">
            <li>Ve a <strong>Revisar → Proteger hoja</strong>.</li>
            <li>Establece una contraseña (opcional).</li>
            <li>Elige qué acciones permitir (ej: seleccionar celdas bloqueadas, insertar filas).</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Proteger+Hoja" alt="Proteger hoja en Excel">
                <figcaption>Ejemplo de cómo proteger una hoja en Excel con contraseña.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Desproteger hoja</h5>
            <ul class="steps">
            <li>Ve a <strong>Revisar → Desproteger hoja</strong>.</li>
            <li>Ingresa la contraseña si la hay.</li>
            </ul>
        </div>
        <div>
            <h5>Proteger libro</h5>
            <ul class="steps">
            <li>Ve a <strong>Revisar → Proteger libro</strong>.</li>
            <li>Establece una contraseña para evitar que se añadan, eliminen o oculten hojas.</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa la protección para:
        <ul class="steps">
            <li>Evitar cambios accidentales en fórmulas.</li>
            <li>Limitar el acceso a datos sensibles.</li>
            <li>Permitir solo la edición en celdas específicas.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Importar y exportar datos -->
    <div class="card">
        <h4>Importar y exportar datos</h4>
        <p>Trabaja con datos de otras fuentes:</p>
        <div class="grid grid-2">
        <div>
            <h5>Importar desde CSV o texto</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Obtener datos → Desde archivo → Desde texto/CSV</strong>.</li>
            <li>Elige el archivo y configura el delimitador (coma, tabulación, etc.).</li>
            <li>Excel mostrará una vista previa para ajustar columnas y tipos de datos.</li>
            </ul>
        </div>
        <div>
            <h5>Exportar a CSV</h5>
            <ul class="steps">
            <li>Ve a <strong>Archivo → Guardar como</strong>.</li>
            <li>Elige <strong>CSV (delimitado por comas) (*.csv)</strong>.</li>
            <li>Excel advertirá que solo se guardará la hoja activa.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Importar+Datos" alt="Importar datos en Excel">
                <figcaption>Ejemplo de cómo importar datos desde un archivo CSV a Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Conexiones a bases de datos</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Obtener datos → Desde base de datos</strong>.</li>
            <li>Elige el origen (SQL Server, Access, Oracle, etc.).</li>
            <li>Ingresa las credenciales y selecciona la tabla o consulta.</li>
            </ul>
        </div>
        <div>
            <h5>Actualizar datos importados</h5>
            <ul class="steps">
            <li>Haz clic derecho en la tabla importada y elige <strong>Actualizar</strong>.</li>
            <li>O ve a <strong>Datos → Actualizar todo</strong>.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa <strong>Power Query</strong> (en <strong>Datos → Obtener datos</strong>) para transformar y limpiar datos antes de importarlos.
        </div>
    </div>
    </section>
    <!-- MÓDULO 6: GRÁFICOS Y VISUALIZACIÓN -->
    <section id="modulo6" class="block">
    <h3>Módulo 6. Gráficos y Visualización</h3>
    <p class="lead">
        Aprende a crear, personalizar y combinar gráficos para presentar tus datos de manera clara y profesional. Domina el uso de minigráficos, imágenes y formas.
    </p>
    <!-- Sección: Tipos de gráficos -->
    <div class="card">
        <h4>Tipos de gráficos en Excel</h4>
        <p>Elige el gráfico adecuado para tus datos:</p>
        <div class="grid grid-2">
        <div>
            <h5>Gráficos de columnas</h5>
            <ul class="steps">
            <li>Ideal para comparar valores entre categorías.</li>
            <li>Variantes: apiladas, 3D, cilindros.</li>
            </ul>
        </div>
        <div>
            <h5>Gráficos de líneas</h5>
            <ul class="steps">
            <li>Muestra tendencias a lo largo del tiempo.</li>
            <li>Útil para series de datos continuas.</li>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Gráficos circulares</h5>
            <ul class="steps">
            <li>Muestra proporciones de un total.</li>
            <li>Evita usar con más de 5-6 categorías.</li>
            </ul>
        </div>
        <div>
            <h5>Gráficos de barras</h5>
            <ul class="steps">
            <li>Similar a columnas, pero con categorías en el eje vertical.</li>
            <li>Útil para nombres largos o muchos elementos.</li>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Gráficos de área</h5>
            <ul class="steps">
            <li>Destaca la magnitud de cambios a lo largo del tiempo.</li>
            <li>Variantes: apiladas, 3D.</li>
            </ul>
        </div>
        <div>
            <h5>Gráficos de dispersión (XY)</h5>
            <ul class="steps">
            <li>Muestra relaciones entre dos variables.</li>
            <li>Útil para análisis de correlación.</li>
            </ul>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Tipos+de+Gráficos" alt="Tipos de gráficos en Excel">
            <figcaption>Ejemplos de gráficos en Excel: columnas, líneas, circulares, barras, área y dispersión.</figcaption>
            </figure>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <strong>Gráficos recomendados</strong> (<strong>Insertar → Gráficos recomendados</strong>) para que Excel sugiera el mejor tipo según tus datos.
        </div>
    </div>
    <!-- Sección: Crear y modificar gráficos -->
    <div class="card">
        <h4>Crear y modificar gráficos</h4>
        <p>Pasos para crear un gráfico:</p>
        <div class="grid grid-2">
        <div>
            <ol class="steps">
            <li>Selecciona el rango de datos (incluyendo encabezados).</li>
            <li>Ve a <strong>Insertar → Gráfico</strong> y elige el tipo.</li>
            <li>Excel insertará el gráfico con datos predeterminados.</li>
            </ol>
        </div>
        <div>
            <ol class="steps" start="4">
            <li>Usa las pestañas <strong>Diseño</strong> y <strong>Formato</strong> para personalizar.</li>
            <li>Añade títulos, etiquetas y leyendas.</li>
            <li>Cambia colores y estilos.</li>
            </ol>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Crear+Gráficos" alt="Crear gráficos en Excel">
            <figcaption>Ejemplo de cómo crear un gráfico de columnas en Excel a partir de una tabla de datos.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Cambiar tipo de gráfico</h5>
            <ul class="steps">
            <li>Selecciona el gráfico y ve a <strong>Diseño → Cambiar tipo de gráfico</strong>.</li>
            <li>Elige un nuevo tipo sin perder los datos.</li>
            </ul>
        </div>
        <div>
            <h5>Mover y redimensionar</h5>
            <ul class="steps">
            <li>Arrastra el gráfico para moverlo.</li>
            <li>Usa los controladores de tamaño para redimensionar.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Mantén los gráficos simples y evita el "desorden visual" (demasiados colores, efectos 3D, etc.).
        </div>
    </div>
    <!-- Sección: Personalizar gráficos -->
    <div class="card">
        <h4>Personalizar elementos del gráfico</h4>
        <p>Ajusta cada componente para mejorar la claridad:</p>
        <div class="grid grid-2">
        <div>
            <h5>Títulos y etiquetas</h5>
            <ul class="steps">
            <li>Añade un título descriptivo: <strong>Diseño → Añadir elemento de gráfico → Título del gráfico</strong>.</li>
            <li>Añade etiquetas de datos para mostrar valores exactos.</li>
            </ul>
        </div>
        <div>
            <h5>Ejes</h5>
            <ul class="steps">
            <li>Ajusta la escala de los ejes (mínimo, máximo, intervalos).</li>
            <li>Cambia el formato de números (moneda, porcentaje, etc.).</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Personalizar+Gráficos" alt="Personalizar gráficos en Excel">
                <figcaption>Ejemplo de personalización de un gráfico en Excel: títulos, etiquetas, colores y estilo.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Leyenda</h5>
            <ul class="steps">
            <li>Mueve la leyenda a una posición clara.</li>
            <li>Cambia el formato de texto (fuente, tamaño, color).</li>
            </ul>
        </div>
        <div>
            <h5>Series de datos</h5>
            <ul class="steps">
            <li>Cambia colores de las series.</li>
            <li>Añade líneas de tendencia o barras de error.</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa la <strong>Barra de herramientas de gráfico</strong> (aparece al seleccionar el gráfico) para acceso rápido a opciones.
        </div>
    </div>
    <!-- Sección: Gráficos combinados -->
    <div class="card">
        <h4>Gráficos combinados</h4>
        <p>Combina dos tipos de gráficos en uno (ej: columnas y líneas):</p>
        <div class="grid grid-2">
        <div>
            <h5>Crear un gráfico combinado</h5>
            <ul class="steps">
            <li>Selecciona los datos y crea un gráfico inicial.</li>
            <li>Haz clic derecho en una serie y elige <strong>Cambiar tipo de gráfico de serie</strong>.</li>
            <li>Elige un tipo diferente para la serie seleccionada.</li>
            </ul>
        </div>
        <div>
            <h5>Ejemplo práctico</h5>
            <ul class="steps">
            <li>Usa columnas para valores absolutos.</li>
            <li>Usa líneas para tendencias o porcentajes.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Gráficos+Combinados" alt="Gráficos combinados en Excel">
                <figcaption>Ejemplo de gráfico combinado en Excel: columnas para ventas y línea para porcentaje de crecimiento.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa gráficos combinados para:
        <ul class="steps">
            <li>Comparar valores absolutos y relativos.</li>
            <li>Mostrar datos con escalas muy diferentes.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Minigráficos -->
    <div class="card">
        <h4>Minigráficos (Sparklines)</h4>
        <p>Pequeños gráficos dentro de una celda para mostrar tendencias:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar minigráficos</h5>
            <ul class="steps">
            <li>Selecciona la celda donde insertar el minigráfico.</li>
            <li>Ve a <strong>Insertar → Minigráficos</strong>.</li>
            <li>Elige el tipo (línea, columna, ganancia/pérdida).</li>
            <li>Selecciona el rango de datos.</li>
            </ul>
        </div>
        <div>
            <h5>Personalizar minigráficos</h5>
            <ul class="steps">
            <li>Cambia el estilo y color.</li>
            <li>Muestra puntos altos/bajos y marcadores.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Minigráficos+en+Excel" alt="Minigráficos en Excel">
                <figcaption>Ejemplo de minigráficos en Excel mostrando tendencias de ventas por mes.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa minigráficos en dashboards o informes para mostrar tendencias de manera compacta.
        </div>
    </div>
    <!-- Sección: Imágenes y formas -->
    <div class="card">
        <h4>Insertar imágenes y formas en gráficos</h5>
        <p>Mejora la presentación visual:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar imágenes</h5>
            <ul class="steps">
            <li>Ve a <strong>Insertar → Imágenes</strong>.</li>
            <li>Elige una imagen de tu equipo o en línea.</li>
            <li>Ajusta el tamaño y posición.</li>
            </ul>
        </div>
        <div>
            <h5>Formas y cuadros de texto</h5>
            <ul class="steps">
            <li>Añade formas para resaltar áreas: <strong>Insertar → Formas</strong>.</li>
            <li>Usa cuadros de texto para anotaciones.</li>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Imágenes+y+Formas" alt="Imágenes y formas en Excel">
            <figcaption>Ejemplo de gráfico en Excel con imágenes, formas y cuadros de texto para mejorar la presentación.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa imágenes y formas para:
        <ul class="steps">
            <li>Crear logotipos o marcas de agua.</li>
            <li>Destacar secciones importantes.</li>
            <li>Añadir flechas o indicadores.</li>
        </ul>
        </div>
    </div>
    </section>
    <!-- MÓDULO 7: FUNCIONES INTERMEDIAS -->
    <section id="modulo7" class="block">
    <h3>Módulo 7. Funciones Intermedias</h3>
    <p class="lead">
        Domina funciones de búsqueda, estadísticas, financieras y de texto avanzadas. Aprende a anidar funciones para resolver problemas complejos.
    </p>
    <!-- Sección: Funciones de búsqueda y referencia -->
    <div class="card">
        <h4>Funciones de búsqueda y referencia: BUSCARV, BUSCARH, COINCIDIR, INDICE</h4>
        <p>Busca y extrae datos de tablas:</p>
        <div class="grid grid-2">
        <div>
            <h5>BUSCARV</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=BUSCARV(valor_buscado; tabla; núm_columna; [coincidir])</code>.</li>
            <li>Ejemplo: <code>=BUSCARV("Manzana"; A2:B10; 2; FALSO)</code>.</li>
            <li><code>FALSO</code> para coincidencia exacta, <code>VERDADERO</code> para aproximada.</li>
            </ul>
        </div>
        <div>
            <h5>BUSCARH</h5>
            <ul class="steps">
            <li>Similar a BUSCARV, pero busca en filas.</li>
            <li>Ejemplo: <code>=BUSCARH("Enero"; A1:Z1; 3; FALSO)</code>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=BUSCARV+y+BUSCARH" alt="BUSCARV y BUSCARH en Excel">
                <figcaption>Ejemplo de BUSCARV para buscar el precio de un producto en una tabla.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>COINCIDIR</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=COINCIDIR(valor_buscado; rango; [tipo_coincidencia])</code>.</li>
            <li>Devuelve la posición de un valor en un rango.</li>
            <li>Ejemplo: <code>=COINCIDIR("Manzana"; A2:A10; 0)</code>.</li>
            </ul>
        </div>
        <div>
            <h5>INDICE</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=INDICE(rango; núm_fila; [núm_columna])</code>.</li>
            <li>Ejemplo: <code>=INDICE(B2:B10; COINCIDIR("Manzana"; A2:A10; 0))</code>.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Combina <code>INDICE</code> y <code>COINCIDIR</code> para búsquedas flexibles (alternativa a BUSCARV).
        </div>
    </div>
    <!-- Sección: Funciones estadísticas -->
    <div class="card">
        <h4>Funciones estadísticas: CONTAR.SI, SUMAR.SI, PROMEDIO.SI</h4>
        <p>Realiza cálculos condicionales:</p>
        <div class="grid grid-2">
        <div>
            <h5>CONTAR.SI</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=CONTAR.SI(rango; criterio)</code>.</li>
            <li>Ejemplo: <code>=CONTAR.SI(A2:A10; ">100")</code>.</li>
            </ul>
        </div>
        <div>
            <h5>SUMAR.SI</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=SUMAR.SI(rango; criterio; [rango_suma])</code>.</li>
            <li>Ejemplo: <code>=SUMAR.SI(A2:A10; "Manzana"; B2:B10)</code>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Funciones+Estadísticas" alt="Funciones estadísticas en Excel">
                <figcaption>Ejemplo de SUMAR.SI para sumar ventas de un producto específico.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>PROMEDIO.SI</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=PROMEDIO.SI(rango; criterio; [rango_promedio])</code>.</li>
            <li>Ejemplo: <code>=PROMEDIO.SI(A2:A10; "Manzana"; B2:B10)</code>.</li>
            </ul>
        </div>
        <div>
            <h5>Funciones con múltiples criterios</h5>
            <ul class="steps">
            <li><code>CONTAR.SI.CONJUNTO</code>, <code>SUMAR.SI.CONJUNTO</code>.</li>
            <li>Ejemplo: <code>=SUMAR.SI.CONJUNTO(B2:B10; A2:A10; "Manzana"; C2:C10; ">10")</code>.</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa comodines en criterios (ej: <code>"*a"</code> para términos que terminan en "a").
        </div>
    </div>
    <!-- Sección: Funciones financieras -->
    <div class="card">
        <h4>Funciones financieras: PAGO, VF, VA, TASA, NPER</h4>
        <p>Cálculos para préstamos, inversiones y finanzas:</p>
        <div class="grid grid-2">
        <div>
            <h5>PAGO</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=PAGO(tasa; nper; va; [vf]; [tipo])</code>.</li>
            <li>Ejemplo: <code>=PAGO(5%/12; 36; 20000)</code> (pago mensual de un préstamo).</li>
            </ul>
        </div>
        <div>
            <h5>VF (Valor Futuro)</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=VF(tasa; nper; pago; [va]; [tipo])</code>.</li>
            <li>Ejemplo: <code>=VF(5%/12; 36; -500)</code>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Funciones+Financieras" alt="Funciones financieras en Excel">
                <figcaption>Ejemplo de PAGO para calcular la cuota de un préstamo.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>VA (Valor Actual)</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=VA(tasa; nper; pago; [vf]; [tipo])</code>.</li>
            <li>Ejemplo: <code>=VA(5%/12; 36; -500)</code>.</li>
            </ul>
        </div>
        <div>
            <h5>TASA y NPER</h5>
            <ul class="steps">
            <li><code>TASA</code>: Calcula la tasa de interés.</li>
            <li><code>NPER</code>: Calcula el número de pagos.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa <code>PAGO</code> para calcular cuotas de préstamos o hipotecas, y <code>VF</code> para planificar ahorros.
        </div>
    </div>
    <!-- Sección: Funciones de texto avanzadas -->
    <div class="card">
        <h4>Funciones de texto avanzadas: MAYUSC, MINUSC, NOMPROPIO, ESPACIOS</h4>
        <p>Manipula texto para estandarizar datos:</p>
        <div class="grid grid-2">
        <div>
            <h5>MAYUSC, MINUSC, NOMPROPIO</h5>
            <ul class="steps">
            <li><code>=MAYUSC("texto")</code>: Convierte a mayúsculas.</li>
            <li><code>=MINUSC("TEXTO")</code>: Convierte a minúsculas.</li>
            <li><code>=NOMPROPIO("texto")</code>: Iniciales en mayúscula.</li>
            </ul>
        </div>
        <div>
            <h5>ESPACIOS y LIMPIAR</h5>
            <ul class="steps">
            <li><code>=ESPACIOS("  texto  ")</code>: Elimina espacios extra.</li>
            <li><code>=LIMPIAR("tex\to")</code>: Elimina caracteres no imprimibles.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Funciones+de+Texto+Avanzadas" alt="Funciones de texto avanzadas en Excel">
                <figcaption>Ejemplo de NOMPROPIO para formatear nombres correctamente.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>CONCATENAR y TEXTJOIN</h5>
            <ul class="steps">
            <li><code>=CONCATENAR(A1; " "; B1)</code>.</li>
            <li><code>=TEXTJOIN(", "; VERDADERO; A1:A10)</code> (Excel 2016+).</li>
            </ul>
        </div>
        <div>
            <h5>IZQUIERDA, DERECHA, EXTRAE</h5>
            <ul class="steps">
            <li>Extrae partes de una cadena.</li>
            <li>Ejemplo: <code>=EXTRAE(A1; 2; 4)</code>.</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <code>TEXTJOIN</code> para combinar celdas con un delimitador (ej: lista de correos separados por coma).
        </div>
    </div>
    <!-- Sección: Anidación de funciones -->
    <div class="card">
        <h4>Anidación de funciones</h4>
        <p>Combina funciones para resolver problemas complejos:</p>
        <div class="grid grid-2">
        <div>
            <h5>Ejemplo 1: SI + Y + O</h5>
            <ul class="steps">
            <li><code>=SI(Y(A1>100; B1<50); "Aprobado"; "Rechazado")</code>.</li>
            <li><code>=SI(O(A1="Sí"; B1="Sí"); "Válido"; "Inválido")</code>.</li>
            </ul>
        </div>
        <div>
            <h5>Ejemplo 2: BUSCARV + SI.ERROR</h5>
            <ul class="steps">
            <li><code>=SI.ERROR(BUSCARV(...); "No encontrado")</code>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Anidación+de+Funciones" alt="Anidación de funciones en Excel">
                <figcaption>Ejemplo de anidación: BUSCARV dentro de SI.ERROR para manejar errores.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Ejemplo 3: CONTAR.SI + FECHA</h5>
            <ul class="steps">
            <li><code>=CONTAR.SI(A2:A10; ">="&FECHA(2025;1;1))</code>.</li>
            </ul>
        </div>
        <div>
            <h5>Consejos para anidar</h5>
            <ul class="steps">
            <li>Usa paréntesis para definir el orden.</li>
            <li>Limita la anidación a 3-4 niveles para mantener la claridad.</li>
            </ul>
        </div>
        </div>
        <div class="callout warn">
        <strong>Advertencia:</strong> Funciones demasiado anidadas son difíciles de depurar. Considera dividirlas en columnas auxiliares.
        </div>
    </div>
    </section>
    <!-- MÓDULO 8: TABLAS DINÁMICAS -->
    <section id="modulo8" class="block">
    <h3>Módulo 8. Tablas Dinámicas</h3>
    <p class="lead">
        Aprende a crear, configurar y analizar datos con tablas dinámicas. Domina el uso de segmentadores, líneas de tiempo y gráficos dinámicos para informes interactivos.
    </p>
    <!-- Sección: Introducción a tablas dinámicas -->
    <div class="card">
        <h4>¿Qué es una tabla dinámica y para qué sirve?</h4>
        <p>Las tablas dinámicas permiten:</p>
        <ul class="steps">
        <li>Resumir grandes conjuntos de datos.</li>
        <li>Agrupar, filtrar y analizar información interactivamente.</li>
        <li>Crear informes sin fórmulas complejas.</li>
        </ul>
        <figure class="img-frame">
        <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Tablas+Dinámicas" alt="Tablas dinámicas en Excel">
        <figcaption>Ejemplo de tabla dinámica en Excel mostrando ventas por producto y región.</figcaption>
        </figure>
        <div class="callout ok">
        <strong>Ventajas:</strong>
        <ul class="steps">
            <li>Actualización automática al cambiar los datos fuente.</li>
            <li>Flexibilidad para reorganizar campos.</li>
            <li>Integración con gráficos dinámicos.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Crear una tabla dinámica -->
    <div class="card">
        <h4>Crear una tabla dinámica desde una base de datos</h4>
        <p>Pasos para crear una tabla dinámica:</p>
        <div class="grid grid-2">
        <div>
            <ol class="steps">
            <li>Selecciona el rango de datos (incluyendo encabezados).</li>
            <li>Ve a <strong>Insertar → Tabla dinámica</strong>.</li>
            <li>Elige el rango y la ubicación (hoja nueva o existente).</li>
            </ol>
        </div>
        <div>
            <ol class="steps" start="4">
            <li>Excel abrirá el panel <strong>Campos de tabla dinámica</strong>.</li>
            <li>Arrastra campos a las áreas: Filas, Columnas, Valores, Filtros.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Crear+Tabla+Dinámica" alt="Crear tabla dinámica en Excel">
                <figcaption>Panel de campos de tabla dinámica en Excel.</figcaption>
            </figure>
            </ol>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa tablas de Excel (Ctrl + T) como origen para facilitar la actualización.
        </div>
    </div>
    <!-- Sección: Configurar campos -->
    <div class="card">
        <h4>Agrupar y filtrar datos en tablas dinámicas</h4>
        <p>Personaliza la tabla dinámica:</p>
        <div class="grid grid-2">
        <div>
            <h5>Agrupar datos</h5>
            <ul class="steps">
            <li>Haz clic derecho en un elemento de fila/columna y elige <strong>Agrupar</strong>.</li>
            <li>Opciones: fechas (días, meses, años), números (rangos).</li>
            <li>Ejemplo: Agrupar fechas por trimestres.</li>
            </ul>
        </div>
        <div>
            <h5>Filtrar datos</h5>
            <ul class="steps">
            <li>Usa los menús desplegables en los encabezados.</li>
            <li>Añade un campo a la área <strong>Filtros</strong> para filtrar toda la tabla.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Agrupar+y+Filtrar" alt="Agrupar y filtrar en tablas dinámicas">
                <figcaption>Ejemplo de agrupación por meses y filtrado por región.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Campos calculados</h5>
            <ul class="steps">
            <li>Ve a <strong>Analizar → Campos, elementos y conjuntos → Campo calculado</strong>.</li>
            <li>Crea fórmulas usando campos existentes (ej: Margen = Ventas - Costos).</li>
            </ul>
        </div>
        <div>
            <h5>Ordenar y clasificar</h5>
            <ul class="steps">
            <li>Ordena de mayor a menor o viceversa.</li>
            <li>Clasifica por color o conjuntos de iconos.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa <strong>Segmentación de datos</strong> para filtrar interactivamente:
        <ul class="steps">
            <li>Ve a <strong>Analizar → Insertar segmentación de datos</strong>.</li>
            <li>Selecciona los campos para filtrar.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Segmentadores y líneas de tiempo -->
    <div class="card">
        <h4>Segmentadores y líneas de tiempo</h4>
        <p>Herramientas interactivas para analizar datos:</p>
        <div class="grid grid-2">
        <div>
            <h5>Segmentación de datos</h5>
            <ul class="steps">
            <li>Permite filtrar con botones.</li>
            <li>Puedes conectar un segmentador a múltiples tablas.</li>
            </ul>
        </div>
        <div>
            <h5>Línea de tiempo</h5>
            <ul class="steps">
            <li>Filtra por períodos de tiempo (días, meses, años).</li>
            <li>Ideal para datos con fechas.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Segmentadores+y+Líneas+de+Tiempo" alt="Segmentadores y líneas de tiempo en Excel">
                <figcaption>Ejemplo de segmentador y línea de tiempo conectados a una tabla dinámica.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Insertar segmentadores</h5>
            <ul class="steps">
            <li>Selecciona la tabla dinámica.</li>
            <li>Ve a <strong>Analizar → Insertar segmentación de datos</strong>.</li>
            </ul>
        </div>
        <div>
            <h5>Insertar línea de tiempo</h5>
            <ul class="steps">
            <li>Selecciona la tabla dinámica.</li>
            <li>Ve a <strong>Analizar → Insertar línea de tiempo</strong>.</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa segmentadores para informes ejecutivos donde los usuarios necesiten explorar datos sin conocer Excel.
        </div>
    </div>
    <!-- Sección: Gráficos dinámicos -->
    <div class="card">
        <h4>Gráficos dinámicos</h4>
        <p>Visualiza datos de tablas dinámicas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Crear un gráfico dinámico</h5>
            <ul class="steps">
            <li>Selecciona la tabla dinámica.</li>
            <li>Ve a <strong>Analizar → Gráfico dinámico</strong>.</li>
            <li>Elige el tipo de gráfico y ubicación.</li>
            </ul>
        </div>
        <div>
            <h5>Personalizar gráfico dinámico</h5>
            <ul class="steps">
            <li>Usa las mismas herramientas que para gráficos normales.</li>
            <li>El gráfico se actualiza al cambiar la tabla dinámica.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Gráficos+Dinámicos" alt="Gráficos dinámicos en Excel">
                <figcaption>Ejemplo de gráfico dinámico de columnas conectado a una tabla dinámica.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Combina tablas dinámicas, gráficos dinámicos y segmentadores para crear dashboards interactivos.
        </div>
    </div>
    <!-- Sección: Actualización y configuración avanzada -->
    <div class="card">
        <h4>Actualización y configuración avanzada</h4>
        <p>Mantén tus tablas dinámicas actualizadas y optimizadas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Actualizar datos</h5>
            <ul class="steps">
            <li>Haz clic derecho en la tabla y elige <strong>Actualizar</strong>.</li>
            <li>O ve a <strong>Analizar → Actualizar → Actualizar todo</strong>.</li>
            </ul>
        </div>
        <div>
            <h5>Cambiar origen de datos</h5>
            <ul class="steps">
            <li>Ve a <strong>Analizar → Cambiar origen de datos</strong>.</li>
            <li>Ajusta el rango si los datos fuente cambian.</li>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Opciones de tabla dinámica</h5>
            <ul class="steps">
            <li>Ve a <strong>Analizar → Opciones</strong>.</li>
            <li>Configura:
                <ul class="steps">
                <li>Totales y subtotales.</li>
                <li>Estilo y formato.</li>
                <li>Opciones de cálculo (ej: % del total).</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Tabla dinámica recomendada</h5>
            <ul class="steps">
            <li>Excel puede sugerir tablas dinámicas basadas en tus datos.</li>
            <li>Ve a <strong>Insertar → Tablas → Tabla dinámica recomendada</strong>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Opciones+Avanzadas" alt="Opciones avanzadas de tablas dinámicas">
                <figcaption>Panel de opciones de tabla dinámica en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <strong>Power Pivot</strong> (en Excel 2013+) para trabajar con millones de filas y relaciones entre tablas.
        </div>
    </div>
    </section>
    <!-- MÓDULO 9: ANÁLISIS DE DATOS -->
    <section id="modulo9" class="block">
    <h3>Módulo 9. Análisis de Datos</h3>
    <p class="lead">
        Domina herramientas avanzadas para análisis de datos, como Buscar objetivo, Escenarios, Tablas de datos y Solver. Aprende a consolidar datos y usar el Análisis Rápido.
    </p>
    <!-- Sección: Análisis Rápido -->
    <div class="card">
        <h4>Uso del Análisis Rápido</h4>
        <p>Accede rápidamente a herramientas de análisis:</p>
        <div class="grid grid-2">
        <div>
            <h5>Acceder al Análisis Rápido</h5>
            <ul class="steps">
            <li>Selecciona un rango de datos.</li>
            <li>Haz clic en el icono <strong>Análisis rápido</strong> (o usa <span class="keyboard-shortcut">Ctrl + Q</span>).</li>
            <li>Elige entre:
                <ul class="steps">
                <li>Formato (barras de datos, colores).</li>
                <li>Gráficos (recomendados).</li>
                <li>Totales (sumas, promedios).</li>
                <li>Tablas (tablas, tablas dinámicas).</li>
                <li>Mini gráficos.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Ejemplo práctico</h5>
            <ul class="steps">
            <li>Selecciona una columna con datos numéricos.</li>
            <li>Usa <strong>Totales → Suma</strong> para añadir una fila de total.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Análisis+Rápido" alt="Análisis rápido en Excel">
                <figcaption>Ejemplo de Análisis Rápido en Excel mostrando opciones de formato, gráficos y totales.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa Análisis Rápido para:
        <ul class="steps">
            <li>Aplicar formato condicional rápidamente.</li>
            <li>Insertar gráficos recomendados.</li>
            <li>Calcular totales o promedios.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Buscar objetivo -->
    <div class="card">
        <h4>Herramienta Buscar objetivo</h4>
        <p>Encuentra el valor de entrada necesario para alcanzar un resultado:</p>
        <div class="grid grid-2">
        <div>
            <h5>Usar Buscar objetivo</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Análisis de qué pasaría si → Buscar objetivo</strong>.</li>
            <li>Configura:
                <ul class="steps">
                <li><strong>Definir la celda:</strong> Celda con la fórmula.</li>
                <li><strong>Con el valor:</strong> Resultado deseado.</li>
                <li><strong>Para cambiar la celda:</strong> Celda de entrada.</li>
                </ul>
            </li>
            <li>Ejemplo: Encontrar la tasa de interés para alcanzar un valor futuro.</li>
            </ul>
        </div>
        <div>
            <h5>Ejemplo práctico</h5>
            <ul class="steps">
            <li>Fórmula: <code>=A1*(1+B1)</code> (valor final).</li>
            <li>Objetivo: Valor final = 1000.</li>
            <li>Cambiar celda: B1 (tasa).</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Buscar+Objetivo" alt="Buscar objetivo en Excel">
                <figcaption>Ejemplo de Buscar objetivo para calcular la tasa de crecimiento necesaria.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Buscar objetivo es útil para problemas simples con una variable. Para múltiples variables, usa <strong>Solver</strong>.
        </div>
    </div>
    <!-- Sección: Escenarios -->
    <div class="card">
        <h4>Escenarios</h4>
        <p>Guarda y compara diferentes conjuntos de entradas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Crear un escenario</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Análisis de qué pasaría si → Administrador de escenarios</strong>.</li>
            <li>Haz clic en <strong>Añadir</strong> y define las celdas cambiantes.</li>
            <li>Ingresa valores para el escenario (ej: "Optimista", "Pesimista").</li>
            </ul>
        </div>
        <div>
            <h5>Usar escenarios</h5>
            <ul class="steps">
            <li>Cambia entre escenarios para ver diferentes resultados.</li>
            <li>Genera un informe de resumen.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Escenarios" alt="Escenarios en Excel">
                <figcaption>Ejemplo de Administrador de escenarios en Excel mostrando escenarios optimista y pesimista.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa escenarios para:
        <ul class="steps">
            <li>Presupuestos con diferentes supuestos.</li>
            <li>Análisis de sensibilidad.</li>
            <li>Planificación de "qué pasaría si".</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Tablas de datos -->
    <div class="card">
        <h4>Tablas de datos (una y dos variables)</h4>
        <p>Analiza cómo cambian los resultados al variar una o dos entradas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Tabla de una variable</h5>
            <ul class="steps">
            <li>Ingresa una fórmula en una celda.</li>
            <li>Ingresa valores de entrada en una columna o fila.</li>
            <li>Selecciona el rango y ve a <strong>Datos → Análisis de qué pasaría si → Tabla de datos</strong>.</li>
            <li>Elige la celda de entrada (fila o columna).</li>
            </ul>
        </div>
        <div>
            <h5>Tabla de dos variables</h5>
            <ul class="steps">
            <li>Ingresa una fórmula en la esquina superior izquierda.</li>
            <li>Ingresa valores para dos variables en filas y columnas.</li>
            <li>Selecciona el rango y configura las celdas de entrada.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Tablas+de+Datos" alt="Tablas de datos en Excel">
                <figcaption>Ejemplo de tabla de datos de dos variables en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa tablas de datos para:
        <ul class="steps">
            <li>Calcular pagos de préstamos con diferentes tasas y plazos.</li>
            <li>Analizar el impacto de cambios en precio y costo.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Solver -->
    <div class="card">
        <h4>Solver (análisis avanzado de optimización)</h4>
        <p>Encuentra la solución óptima para problemas complejos:</p>
        <div class="grid grid-2">
        <div>
            <h5>Activar Solver</h5>
            <ul class="steps">
            <li>Ve a <strong>Archivo → Opciones → Complementos</strong>.</li>
            <li>Selecciona <strong>Solver</strong> y haz clic en <strong>Ir</strong>.</li>
            <li>Activa el complemento y haz clic en <strong>Aceptar</strong>.</li>
            </ul>
        </div>
        <div>
            <h5>Usar Solver</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Solver</strong>.</li>
            <li>Configura:
                <ul class="steps">
                <li><strong>Celda objetivo:</strong> Celda para optimizar (maximizar, minimizar o valor específico).</li>
                <li><strong>Cambiando las celdas variables:</strong> Celdas ajustables.</li>
                <li><strong>Sujeto a las siguientes restricciones:</strong> Límites para las variables.</li>
                </ul>
            </li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Solver" alt="Solver en Excel">
                <figcaption>Ejemplo de Solver en Excel para maximizar ganancias sujetas a restricciones.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa Solver para:
        <ul class="steps">
            <li>Optimizar asignación de recursos.</li>
            <li>Maximizar ganancias o minimizar costos.</li>
            <li>Resolver problemas de programación lineal.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Consolidar datos -->
    <div class="card">
        <h4>Consolidar datos de varias hojas</h4>
        <p>Combina datos de múltiples rangos o hojas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Consolidar por posición</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Consolidar</strong>.</li>
            <li>Elige la función (Suma, Promedio, etc.).</li>
            <li>Añade cada rango de origen.</li>
            <li>Marca <strong>Crear vínculos a los datos de origen</strong> para actualizar automáticamente.</li>
            </ul>
        </div>
        <div>
            <h5>Consolidar por categoría</h5>
            <ul class="steps">
            <li>Asegúrate de que los datos tengan etiquetas consistentes.</li>
            <li>Excel agrupará datos por etiquetas de fila/columna.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Consolidar+Datos" alt="Consolidar datos en Excel">
                <figcaption>Ejemplo de consolidación de datos de múltiples hojas en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa consolidación para:
        <ul class="steps">
            <li>Combinar presupuestos de diferentes departamentos.</li>
            <li>Resumir datos de múltiples sucursales.</li>
        </ul>
        </div>
    </div>
    </section>
    <!-- MÓDULO 10: FUNCIONES AVANZADAS -->
    <section id="modulo10" class="block">
    <h3>Módulo 10. Funciones Avanzadas</h3>
    <p class="lead">
        Domina funciones avanzadas como DESREF, INDIRECTO, SUMAR.SI.CONJUNTO, y las nuevas funciones dinámicas de Excel 365. Aprende a manejar errores y trabajar con fórmulas matriciales.
    </p>
    <!-- Sección: Funciones de referencia avanzadas -->
    <div class="card">
        <h4>Funciones de referencia avanzadas: DESREF, INDIRECTO</h4>
        <p>Trabaja con referencias dinámicas y texto:</p>
        <div class="grid grid-2">
        <div>
            <h5>DESREF</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=DESREF(referencia; filas; columnas; [alto]; [ancho])</code>.</li>
            <li>Ejemplo: <code>=DESREF(A1; 2; 3)</code> (celda D3 relativa a A1).</li>
            <li>Útil para crear referencias dinámicas en tablas.</li>
            </ul>
        </div>
        <div>
            <h5>INDIRECTO</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=INDIRECTO(texto_referencia; [a1])</code>.</li>
            <li>Ejemplo: <code>=INDIRECTO("A"&B1)</code> (B1 contiene el número de fila).</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=DESREF+y+INDIRECTO" alt="DESREF e INDIRECTO en Excel">
                <figcaption>Ejemplo de INDIRECTO para crear referencias dinámicas basadas en texto.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa <code>INDIRECTO</code> para:
        <ul class="steps">
            <li>Crear fórmulas que se ajusten automáticamente.</li>
            <li>Referenciar hojas o libros dinámicamente.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Funciones de base de datos -->
    <div class="card">
        <h4>Funciones de base de datos: BDSUMA, BDMAX, BDMIN</h4>
        <p>Realiza cálculos en bases de datos estructuradas:</p>
        <div class="grid grid-2">
        <div>
            <h5>BDSUMA</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=BDSUMA(base_de_datos; campo; criterios)</code>.</li>
            <li>Ejemplo: <code>=BDSUMA(A1:D10; "Ventas"; A12:A13)</code>.</li>
            </ul>
        </div>
        <div>
            <h5>BDMAX, BDMIN, BDPROMEDIO</h5>
            <ul class="steps">
            <li>Similar a BDSUMA, pero para máximo, mínimo y promedio.</li>
            <li>Requiere un rango de criterios con encabezados.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Funciones+de+Base+de+Datos" alt="Funciones de base de datos en Excel">
                <figcaption>Ejemplo de BDSUMA con rango de criterios para filtrar datos.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa funciones de base de datos para:
        <ul class="steps">
            <li>Analizar datos con múltiples criterios.</li>
            <li>Evitar fórmulas matriciales complejas.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Funciones dinámicas (Excel 365) -->
    <div class="card">
        <h4>Funciones dinámicas (Excel 365): FILTRAR, ORDENAR, UNICOS, SECUENCIA</h4>
        <p>Nuevas funciones para manipular matrices dinámicamente:</p>
        <div class="grid grid-2">
        <div>
            <h5>FILTRAR</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=FILTRAR(matriz; incluir; [si_vacío])</code>.</li>
            <li>Ejemplo: <code>=FILTRAR(A2:B10; B2:B10>100)</code>.</li>
            </ul>
        </div>
        <div>
            <h5>ORDENAR</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=ORDENAR(matriz; [índice_columna]; [orden]; [por_columna])</code>.</li>
            <li>Ejemplo: <code>=ORDENAR(A2:B10; 2; -1)</code> (orden descendente por columna 2).</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Funciones+Dinámicas" alt="Funciones dinámicas en Excel">
                <figcaption>Ejemplo de FILTRAR para mostrar solo productos con ventas mayores a 100.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>UNICOS</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=UNICOS(matriz; [por_columna]; [exactamente_una_vez])</code>.</li>
            <li>Ejemplo: <code>=UNICOS(A2:A10)</code> (lista de valores únicos).</li>
            </ul>
        </div>
        <div>
            <h5>SECUENCIA</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=SECUENCIA(filas; [columnas]; [inicio]; [paso])</code>.</li>
            <li>Ejemplo: <code>=SECUENCIA(5; 3; 10; 2)</code> (matriz 5x3 desde 10 con paso 2).</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Combina funciones dinámicas para análisis complejos sin VBA:
        <ul class="steps">
            <li><code>=ORDENAR(FILTRAR(...))</code>.</li>
            <li><code>=UNICOS(FILTRAR(...))</code>.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Manejo de errores avanzado -->
    <div class="card">
        <h4>Manejo de errores avanzado: SI.ERROR, SI.ND</h4>
        <p>Controla errores en fórmulas complejas:</p>
        <div class="grid grid-2">
        <div>
            <h5>SI.ERROR</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=SI.ERROR(valor; valor_si_error)</code>.</li>
            <li>Ejemplo: <code>=SI.ERROR(A1/B1; "Error en división")</code>.</li>
            </ul>
        </div>
        <div>
            <h5>SI.ND</h5>
            <ul class="steps">
            <li>Sintaxis: <code>=SI.ND(valor; valor_si_nd)</code>.</li>
            <li>Ejemplo: <code>=SI.ND(BUSCARV(...); "No encontrado")</code>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Manejo+de+Errores+Avanzado" alt="Manejo de errores avanzado en Excel">
                <figcaption>Ejemplo de SI.ERROR para manejar divisiones por cero.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <code>SI.ERROR</code> para:
        <ul class="steps">
            <li>Evitar que errores rompan tus cálculos.</li>
            <li>Mostrar mensajes personalizados.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Fórmulas matriciales -->
    <div class="card">
        <h4>Funciones matriciales y uso de fórmulas con rangos</h4>
        <p>Trabaja con matrices y fórmulas que devuelven múltiples valores:</p>
        <div class="grid grid-2">
        <div>
            <h5>Fórmulas matriciales clásicas</h5>
            <ul class="steps">
            <li>Ingresa la fórmula y confirma con <span class="keyboard-shortcut">Ctrl + Shift + Enter</span> (en versiones antiguas).</li>
            <li>Ejemplo: <code>{=SUMA(A1:A10*B1:B10)}</code> (multiplicación de matrices).</li>
            </ul>
        </div>
        <div>
            <h5>Fórmulas matriciales dinámicas</h5>
            <ul class="steps">
            <li>En Excel 365, muchas fórmulas se expanden automáticamente.</li>
            <li>Ejemplo: <code>=TRANSPONER(A1:C1)</code> (devuelve una columna).</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Fórmulas+Matriciales" alt="Fórmulas matriciales en Excel">
                <figcaption>Ejemplo de fórmula matricial para multiplicar y sumar dos rangos.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa fórmulas matriciales para:
        <ul class="steps">
            <li>Calcular productos de matrices.</li>
            <li>Realizar operaciones en rangos completos.</li>
        </ul>
        </div>
    </div>
    </section>
    <!-- MÓDULO 11: DISEÑO Y PRESENTACIÓN DE INFORMES -->
    <section id="modulo11" class="block">
    <h3>Módulo 11. Diseño y Presentación de Informes</h3>
    <p class="lead">
        Aprende a configurar páginas, encabezados, pies de página y saltos de página para imprimir informes profesionales. Domina la exportación a PDF y el diseño de reportes ejecutivos.
    </p>
    <!-- Sección: Configuración de página -->
    <div class="card">
        <h4>Configuración de página y márgenes</h4>
        <p>Ajusta la apariencia de tus informes impresos:</p>
        <div class="grid grid-2">
        <div>
            <h5>Configurar página</h5>
            <ul class="steps">
            <li>Ve a <strong>Diseño de página → Configurar página</strong>.</li>
            <li>Ajusta:
                <ul class="steps">
                <li>Orientación (vertical/horizontal).</li>
                <li>Tamaño del papel.</li>
                <li>Márgenes (normal, estrecho, ancho).</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Vista Diseño de página</h5>
            <ul class="steps">
            <li>Ve a <strong>Vista → Diseño de página</strong> para ver cómo se imprimirá.</li>
            <li>Arrastra los márgenes para ajustarlos.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Configuración+de+Página" alt="Configuración de página en Excel">
                <figcaption>Ejemplo de configuración de página en Excel mostrando márgenes y área de impresión.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <strong>Vista preliminar</strong> (<span class="keyboard-shortcut">Ctrl + F2</span>) para revisar antes de imprimir.
        </div>
    </div>
    <!-- Sección: Encabezados y pies de página -->
    <div class="card">
        <h4>Encabezados y pies de página</h4>
        <p>Añade información repetida en cada página:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar encabezado/pie</h5>
            <ul class="steps">
            <li>Ve a <strong>Insertar → Encabezado y pie de página</strong>.</li>
            <li>Excel mostrará la vista de diseño.</li>
            <li>Haz clic en los cuadros para añadir texto o elementos predefinidos.</li>
            </ul>
        </div>
        <div>
            <h5>Elementos predefinidos</h5>
            <ul class="steps">
            <li>Fecha y hora.</li>
            <li>Número de página.</li>
            <li>Nombre del archivo o hoja.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Encabezados+y+Pies" alt="Encabezados y pies de página en Excel">
                <figcaption>Ejemplo de encabezado con logo y pie con número de página y fecha.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa <strong>&[Página]</strong> para número de página y <strong>&[Fecha]</strong> para la fecha actual.
        </div>
    </div>
    <!-- Sección: Saltos de página -->
    <div class="card">
        <h4>Saltos de página y ajuste de impresión</h4>
        <p>Controla dónde se dividen las páginas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar saltos manuales</h5>
            <ul class="steps">
            <li>Selecciona la fila o columna donde deseas el salto.</li>
            <li>Ve a <strong>Diseño de página → Saltos → Insertar salto de página</strong>.</li>
            </ul>
        </div>
        <div>
            <h5>Ajustar a una página</h5>
            <ul class="steps">
            <li>Selecciona el rango a imprimir.</li>
            <li>Ve a <strong>Diseño de página → Ajustar área de impresión</strong>.</li>
            <li>Marca <strong>Ajustar a 1 página de ancho/alto</strong>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Saltos+de+Página" alt="Saltos de página en Excel">
                <figcaption>Ejemplo de saltos de página en Excel para imprimir una tabla en una sola página.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <strong>Vista preliminar</strong> para ver los saltos de página (líneas azules punteadas).
        </div>
    </div>
    <!-- Sección: Impresión -->
    <div class="card">
        <h4>Vista preliminar e impresión</h4>
        <p>Prepara tu informe para imprimir:</p>
        <div class="grid grid-2">
        <div>
            <h5>Vista preliminar</h5>
            <ul class="steps">
            <li>Ve a <strong>Archivo → Imprimir</strong> o usa <span class="keyboard-shortcut">Ctrl + F2</span>.</li>
            <li>Ajusta la configuración:
                <ul class="steps">
                <li>Impresora.</li>
                <li>Orientación y tamaño.</li>
                <li>Márgenes.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Imprimir rangos seleccionados</h5>
            <ul class="steps">
            <li>Selecciona el rango que deseas imprimir.</li>
            <li>Ve a <strong>Diseño de página → Área de impresión → Establecer área de impresión</strong>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Impresión" alt="Impresión en Excel">
                <figcaption>Ejemplo de vista preliminar en Excel mostrando el área de impresión.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout warn">
        <strong>Advertencia:</strong> Verifica que todas las columnas y filas importantes estén dentro del área de impresión.
        </div>
    </div>
    <!-- Sección: Exportar a PDF -->
    <div class="card">
        <h4>Exportar a PDF</h4>
        <p>Comparte informes en formato profesional:</p>
        <div class="grid grid-2">
        <div>
            <h5>Exportar a PDF</h5>
            <ul class="steps">
            <li>Ve a <strong>Archivo → Exportar → Crear PDF/XPS</strong>.</li>
            <li>Elige la ubicación y el nombre del archivo.</li>
            <li>Configura opciones:
                <ul class="steps">
                <li>Páginas (todas, selección, rango).</li>
                <li>Calidad (estándar o mínima).</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Opciones avanzadas</h5>
            <ul class="steps">
            <li>Incluir propiedades del documento.</li>
            <li>Optimizar para tamaño o calidad.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Exportar+a+PDF" alt="Exportar a PDF en Excel">
                <figcaption>Ejemplo de opciones al exportar a PDF en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa PDF para:
        <ul class="steps">
            <li>Compartir informes que no deben modificarse.</li>
            <li>Enviar por correo electrónico.</li>
            <li>Archivar versiones finales.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Diseño de reportes ejecutivos -->
    <div class="card">
        <h4>Diseño profesional de reportes ejecutivos</h4>
        <p>Crea informes claros y visualmente atractivos:</p>
        <div class="grid grid-2">
        <div>
            <h5>Estructura del informe</h5>
            <ul class="steps">
            <li>Portada con título, fecha y responsable.</li>
            <li>Índice o tabla de contenidos.</li>
            <li>Resumen ejecutivo (principales hallazgos).</li>
            <li>Detalle de datos y análisis.</li>
            <li>Anexos con datos adicionales.</li>
            </ul>
        </div>
        <div>
            <h5>Elementos visuales</h5>
            <ul class="steps">
            <li>Gráficos claros y bien etiquetados.</li>
            <li>Tablas con formato condicional.</li>
            <li>Logos y colores corporativos.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Reporte+Ejecutivo" alt="Reporte ejecutivo en Excel">
                <figcaption>Ejemplo de reporte ejecutivo en Excel con gráficos, tablas y formato profesional.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa <strong>Temas de Excel</strong> para mantener la coherencia visual en todos los informes.
        </div>
    </div>
    </section>
    <!-- MÓDULO 12: COLABORACIÓN Y USO EN LA NUBE -->
    <section id="modulo12" class="block">
    <h3>Módulo 12. Colaboración y Uso en la Nube</h3>
    <p class="lead">
        Aprende a guardar libros en OneDrive, compartir en tiempo real, usar comentarios y controlar versiones. Domina la colaboración en equipo con Excel en línea.
    </p>
    <!-- Sección: Guardar en OneDrive -->
    <div class="card">
        <h4>Guardar en OneDrive</h4>
        <p>Almacena tus archivos en la nube para acceder desde cualquier lugar:</p>
        <div class="grid grid-2">
        <div>
            <h5>Guardar en OneDrive</h5>
            <ul class="steps">
            <li>Ve a <strong>Archivo → Guardar como</strong>.</li>
            <li>Selecciona <strong>OneDrive</strong> como ubicación.</li>
            <li>Inicia sesión con tu cuenta Microsoft si es necesario.</li>
            </ul>
        </div>
        <div>
            <h5>AutoGuardado</h5>
            <ul class="steps">
            <li>Excel guardará cambios automáticamente.</li>
            <li>Ve el estado en la barra de título (ej: "Guardado en OneDrive").</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Guardar+en+OneDrive" alt="Guardar en OneDrive en Excel">
                <figcaption>Ejemplo de Excel guardando automáticamente en OneDrive.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa OneDrive para:
        <ul class="steps">
            <li>Acceder a tus archivos desde cualquier dispositivo.</li>
            <li>Colaborar en tiempo real.</li>
            <li>Recuperar versiones anteriores.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Compartir libros -->
<div class="card">
<h4>Compartir libros y colaborar en tiempo real</h4>
<p>Trabaja con otros usuarios simultáneamente en Excel 2025, permitiendo ediciones en tiempo real, comentarios y seguimiento de cambios. Ideal para equipos remotos o proyectos colaborativos.</p>

<div class="grid grid-2">
<div>
    <h5>Pasos para compartir un libro</h5>
    <ol class="steps">
    <li>
        <strong>Guarda el libro en la nube:</strong>
        <ul class="steps">
        <li>Ve a <strong>Archivo → Guardar como</strong>.</li>
        <li>Selecciona <strong>OneDrive</strong> o <strong>SharePoint</strong> como ubicación.</li>
        <li>Si es la primera vez, inicia sesión con tu cuenta Microsoft.</li>
        </ul>
    </li>
    <li>
        <strong>Compartir el archivo:</strong>
        <ul class="steps">
        <li>Haz clic en el botón <strong>Compartir</strong> (esquina superior derecha, junto al nombre del archivo).</li>
        <li>Ingresa los correos electrónicos de los colaboradores o genera un <strong>enlace compartible</strong>.</li>
        <li>Configura los permisos:
            <ul class="steps">
            <li><strong>Puede editar:</strong> Permite modificaciones.</li>
            <li><strong>Solo lectura:</strong> Solo visualización.</li>
            </ul>
        </li>
        </ul>
    </li>
    <li>
        <strong>Notificaciones:</strong>
        <ul class="steps">
        <li>Excel enviará una notificación por correo a los colaboradores.</li>
        <li>Los cambios se sincronizan en tiempo real y se muestran con indicadores de presencia (ej: "Irving está editando").</li>
        </ul>
    </li>
    </ol>
</div>

<div>
    <h5>Características de colaboración</h5>
    <ul class="steps">
    <li>
        <strong>Edición simultánea:</strong>
        <ul class="steps">
        <li>Varios usuarios pueden editar el mismo libro al mismo tiempo.</li>
        <li>Los cambios se reflejan instantáneamente (señalados con colores por usuario).</li>
        </ul>
    </li>
    <li>
        <strong>Comentarios y @menciones:</strong>
        <ul class="steps">
        <li>Usa <strong>@mención</strong> para notificar a un colaborador específico (ej: <code>@Irving</code>).</li>
        <li>Los comentarios aparecen en un panel lateral y se pueden resolver.</li>
        </ul>
    </li>
    <li>
        <strong>Historial de cambios:</strong>
        <ul class="steps">
        <li>Ve el historial de versiones en <strong>Archivo → Información → Historial de versiones</strong>.</li>
        <li>Restaura versiones anteriores si es necesario.</li>
        </ul>
    </li>
    <li>
        <strong>Seguridad:</strong>
        <ul class="steps">
        <li>Los archivos en OneDrive/SharePoint están cifrados y protegidos.</li>
        <li>Configura permisos avanzados para grupos o usuarios específicos.</li>
        </ul>
    </li>
    </ul>

    <!-- Imagen de referencia -->
    <figure class="img-frame">
    <img src="https://mistralaichatupprodswe.blob.core.windows.net/chat-images/assistant/8b/7c/c6/8b7cc698-644b-4f2d-8638-30ae0ca2b0a3/3b5e4fcc-db4d-435d-946a-bf8549868fb0/b7d33d1e-0741-4f0b-acd0-893ea5dab73c/a17f2139-2e0f-486e-aa0f-ce1a76bcab2d.jpg?sv=2025-01-05&st=2025-11-04T22%3A09%3A02Z&se=2025-11-04T23%3A09%3A02Z&sr=b&sp=rade&sig=KX%2B8AYlGc5KJcRd4u42egKSsY6MJFmQpVJ3kDvq391A%3D"
            alt="Interfaz de Excel 2025 mostrando colaboración en tiempo real con múltiples usuarios y comentarios">
    <figcaption>
        <strong>Ejemplo de colaboración en Excel 2025:</strong>
        <ul class="steps">
        <li>1. Indicadores de usuarios activos (colores distintos por colaborador).</li>
        <li>2. Panel de comentarios con @menciones.</li>
        <li>3. Botón "Compartir" en la esquina superior derecha.</li>
        <li>4. Sincronización automática de cambios.</li>
        </ul>
    </figcaption>
    </figure>
</div>
</div>

    <div class="callout ok">
        <strong>Consejos profesionales para colaboración:</strong>
        <ul class="steps">
        <li>
            <strong>Usa nombres descriptivos:</strong>
            <ul class="steps">
            <li>Ej: <code>Presupuesto_Q4_2025_EquipoFinanzas.xlsx</code>.</li>
            </ul>
        </li>
        <li>
            <strong>Organiza los datos:</strong>
            <ul class="steps">
            <li>Usa <strong>tablas de Excel</strong> (Ctrl + T) para que los rangos se ajusten automáticamente.</li>
            <li>Protege celdas con fórmulas (Revisar → Proteger hoja).</li>
            </ul>
        </li>
        <li>
            <strong>Comunicación clara:</strong>
            <ul class="steps">
            <li>Deja comentarios para explicar cambios complejos.</li>
            <li>Usa @menciones para asignar tareas (ej: <code>@Ana: Revisa los cálculos de la columna D</code>).</li>
            </ul>
        </li>
        <li>
            <strong>Revisión de cambios:</strong>
            <ul class="steps">
            <li>Antes de finalizar, revisa el <strong>historial de versiones</strong> para asegurarte de que todos los cambios estén incluidos.</li>
            </ul>
        </li>
        </ul>
    </div>

    <div class="callout warn">
        <strong>Advertencias importantes:</strong>
        <ul class="steps">
        <li>
            <strong>Conflictos de edición:</strong>
            <ul class="steps">
            <li>Si dos usuarios editan la misma celda, Excel guardará el último cambio y notificará el conflicto.</li>
            </ul>
        </li>
        <li>
            <strong>Macros y funciones avanzadas:</strong>
            <ul class="steps">
            <li>Las macros (<strong>.xlsm</strong>) no se ejecutan en Excel en línea. Usa la versión de escritorio para macros.</li>
            </ul>
        </li>
        <li>
            <strong>Permisos:</strong>
            <ul class="steps">
            <li>No compartas enlaces de edición con usuarios no autorizados.</li>
            <li>Revisa periódicamente los permisos en <strong>OneDrive → Compartir</strong>.</li>
            </ul>
        </li>
        </ul>
    </div>
    </div>
    <!-- Sección: Comentarios y seguimiento de cambios -->
    <div class="card">
        <h4>Comentarios y seguimiento de cambios</h4>
        <p>Colabora con otros usuarios mediante anotaciones:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar comentarios</h5>
            <ul class="steps">
            <li>Selecciona una celda y haz clic derecho → <strong>Nuevo comentario</strong>.</li>
            <li>O usa <span class="keyboard-shortcut">Shift + F2</span>.</li>
            <li>Escribe tu comentario y haz clic fuera para guardar.</li>
            <li>Los comentarios aparecen con el nombre del autor y fecha.</li>
            </ul>
        </div>
        <div>
            <h5>Gestionar comentarios</h5>
            <ul class="steps">
            <li>Ve a <strong>Revisar → Comentarios</strong> para ver, editar o eliminar.</li>
            <li>Resuelve comentarios con <strong>Marcar como resuelto</strong>.</li>
            <li>Usa <strong>@mención</strong> para notificar a otros usuarios.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Comentarios+en+Excel" alt="Comentarios en Excel">
                <figcaption>Ejemplo de comentarios en Excel, mostrando cómo mencionar usuarios y resolver conversaciones.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa comentarios para:
        <ul class="steps">
            <li>Explicar fórmulas complejas.</li>
            <li>Solicitar revisiones.</li>
            <li>Dejar notas para futuras ediciones.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Control de versiones -->
    <div class="card">
        <h4>Historial de versiones y recuperación</h4>
        <p>Recupera versiones anteriores de tu libro:</p>
        <div class="grid grid-2">
        <div>
            <h5>Ver historial de versiones</h5>
            <ul class="steps">
            <li>Abre el libro desde OneDrive o SharePoint.</li>
            <li>Haz clic en el nombre del archivo en la barra de título.</li>
            <li>Selecciona <strong>Historial de versiones</strong>.</li>
            <li>Excel mostrará una lista de versiones guardadas automáticamente.</li>
            </ul>
        </div>
        <div>
            <h5>Restaurar una versión</h5>
            <ul class="steps">
            <li>Selecciona una versión y haz clic en <strong>Restaurar</strong>.</li>
            <li>Excel creará una copia de la versión seleccionada.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Historial+de+Versiones" alt="Historial de versiones en Excel">
                <figcaption>Ejemplo de historial de versiones en Excel, mostrando cómo restaurar una versión anterior.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> El AutoGuardado en OneDrive crea versiones cada pocos minutos, lo que permite recuperar cambios accidentales.
        </div>
    </div>
    <!-- Sección: Excel en línea -->
    <div class="card">
        <h4>Excel en línea: diferencias y ventajas</h4>
        <p>Trabaja con Excel directamente en tu navegador:</p>
        <div class="grid grid-2">
        <div>
            <h5>Ventajas de Excel en línea</h5>
            <ul class="steps">
            <li>Acceso desde cualquier dispositivo con internet.</li>
            <li>Colaboración en tiempo real con múltiples usuarios.</li>
            <li>Integración con otras apps de Office 365.</li>
            <li>Actualizaciones automáticas sin instalación.</li>
            </ul>
        </div>
        <div>
            <h5>Limitaciones</h5>
            <ul class="steps">
            <li>No soporta macros o complementos avanzados.</li>
            <li>Funciones y capacidades limitadas comparadas con la versión de escritorio.</li>
            <li>Requiere conexión a internet para la mayoría de las funciones.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Excel+en+Línea" alt="Excel en línea">
                <figcaption>Interfaz de Excel en línea mostrando colaboración en tiempo real.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa Excel en línea para:
        <ul class="steps">
            <li>Revisión rápida de archivos.</li>
            <li>Colaboración con equipos remotos.</li>
            <li>Edición básica desde dispositivos móviles.</li>
        </ul>
        </div>
    </div>
    </section>
    <!-- MÓDULO 13: MACROS Y AUTOMATIZACIÓN -->
    <section id="modulo13" class="block">
    <h3>Módulo 13. Macros y Automatización</h3>
    <p class="lead">
        Aprende a grabar, editar y ejecutar macros con VBA. Domina la creación de botones, formularios y automatización de tareas repetitivas para ahorrar tiempo.
    </p>
    <!-- Sección: Introducción a macros -->
    <div class="card">
        <h4>Introducción a macros y VBA</h4>
        <p>Automatiza tareas repetitivas con macros:</p>
        <div class="grid grid-2">
        <div>
            <h5>¿Qué es una macro?</h5>
            <ul class="steps">
            <li>Secuencia de comandos grabados que se pueden reproducir.</li>
            <li>Escrita en <strong>VBA (Visual Basic for Applications)</strong>.</li>
            <li>Útil para:
                <ul class="steps">
                <li>Automatizar informes.</li>
                <li>Procesar datos repetitivos.</li>
                <li>Crear funciones personalizadas.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Habilitar macros</h5>
            <ul class="steps">
            <li>Ve a <strong>Archivo → Opciones → Centro de confianza → Configuración del Centro de confianza → Configuración de macros</strong>.</li>
            <li>Selecciona <strong>Habilitar todas las macros</strong> (solo si el archivo es de confianza).</li>
            <li>Guarda el libro como <strong>.xlsm</strong> para conservar las macros.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Macros+en+Excel" alt="Macros en Excel">
                <figcaption>Ejemplo de cómo habilitar macros en Excel y grabar una nueva macro.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout warn">
        <strong>Advertencia:</strong> Las macros pueden contener código malicioso. Solo habilita macros en archivos de fuentes confiables.
        </div>
    </div>
    <!-- Sección: Grabar una macro -->
    <div class="card">
        <h4>Grabar una macro</h4>
        <p>Pasos para grabar tus primeras macros:</p>
        <div class="grid grid-2">
        <div>
            <ol class="steps">
            <li>Ve a <strong>Vista → Macros → Grabar macro</strong>.</li>
            <li>Asigna un nombre (sin espacios, ej: <code>FormatearTabla</code>).</li>
            <li>Elige un atajo de teclado (opcional).</li>
            <li>Selecciona dónde guardar la macro (libro actual, libro nuevo o libro de macros personal).</li>
            <li>Haz clic en <strong>Aceptar</strong> para empezar a grabar.</li>
            </ol>
        </div>
        <div>
            <ol class="steps" start="6">
            <li>Realiza las acciones que deseas automatizar (ej: aplicar formato, insertar fórmulas).</li>
            <li>Ve a <strong>Vista → Macros → Detener grabación</strong>.</li>
            <li>La macro quedará guardada y lista para ejecutarse.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Grabar+Macro" alt="Grabar macro en Excel">
                <figcaption>Ejemplo de grabación de una macro para formatear una tabla en Excel.</figcaption>
            </figure>
            </ol>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa nombres descriptivos para tus macros (ej: <code>CalcularImpuestos</code>, <code>GenerarReporte</code>).
        </div>
    </div>
    <!-- Sección: Ejecutar una macro -->
    <div class="card">
        <h4>Ejecutar una macro</h4>
        <p>Cómo ejecutar macros grabadas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Ejecutar desde el menú</h5>
            <ul class="steps">
            <li>Ve a <strong>Vista → Macros → Ver macros</strong>.</li>
            <li>Selecciona la macro y haz clic en <strong>Ejecutar</strong>.</li>
            </ul>
        </div>
        <div>
            <h5>Ejecutar con atajo de teclado</h5>
            <ul class="steps">
            <li>Si asignaste un atajo al grabar (ej: <span class="keyboard-shortcut">Ctrl + Shift + M</span>), úsalo para ejecutar.</li>
            <li>Los atajos solo funcionan si el libro con la macro está abierto.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Ejecutar+Macro" alt="Ejecutar macro en Excel">
                <figcaption>Ejemplo de cómo ejecutar una macro desde el menú o con un atajo de teclado.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Asigna atajos únicos a macros frecuentes para ahorrar tiempo.
        </div>
    </div>
    <!-- Sección: Editor de VBA -->
    <div class="card">
        <h4>Editor de VBA: personalizar macros</h4>
        <p>Edita el código de tus macros para mayor flexibilidad:</p>
        <div class="grid grid-2">
        <div>
            <h5>Abrir el editor de VBA</h5>
            <ul class="steps">
            <li>Presiona <span class="keyboard-shortcut">Alt + F11</span>.</li>
            <li>O ve a <strong>Desarrollador → Visual Basic</strong> (activa la pestaña Desarrollador en <strong>Archivo → Opciones → Personalizar cinta</strong>).</li>
            <li>El editor mostrará el código de tus macros en <strong>Módulos</strong>.</li>
            </ul>
        </div>
        <div>
            <h5>Editar una macro</h5>
            <ul class="steps">
            <li>En el editor, busca el módulo con tu macro.</li>
            <li>Modifica el código según necesites.</li>
            <li>Ejemplo: Cambiar un rango fijo (<code>Range("A1:B10")</code>) por uno dinámico (<code>Range("A1").CurrentRegion</code>).</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Editor+de+VBA" alt="Editor de VBA en Excel">
                <figcaption>Ejemplo del editor de VBA en Excel mostrando el código de una macro.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Aprende conceptos básicos de VBA para:
        <ul class="steps">
            <li>Crear bucles (<code>For...Next</code>, <code>Do While</code>).</li>
            <li>Manejar errores (<code>On Error Resume Next</code>).</li>
            <li>Interactuar con el usuario (<code>MsgBox</code>, <code>InputBox</code>).</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Botones y formularios -->
    <div class="card">
        <h4>Asignar macros a botones y formularios</h4>
        <p>Haz tus macros accesibles con botones:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar un botón</h5>
            <ul class="steps">
            <li>Ve a <strong>Desarrollador → Insertar → Botón (control de formulario)</strong>.</li>
            <li>Dibuja el botón en la hoja.</li>
            <li>Asigna la macro en el cuadro de diálogo.</li>
            </ul>
        </div>
        <div>
            <h5>Personalizar el botón</h5>
            <ul class="steps">
            <li>Cambia el texto del botón.</li>
            <li>Ajusta el formato (color, fuente, tamaño).</li>
            <li>Usa imágenes para botones más intuitivos.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Botones+en+Excel" alt="Botones en Excel">
                <figcaption>Ejemplo de botones en Excel asignados a macros, con formato personalizado.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa botones para:
        <ul class="steps">
            <li>Ejecutar informes automáticos.</li>
            <li>Limpiar o resetear datos.</li>
            <li>Importar/exportar datos.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Automatización de tareas -->
    <div class="card">
        <h4>Ejemplos de automatización con macros</h4>
        <p>Casos prácticos para automatizar:</p>
        <div class="grid grid-2">
        <div>
            <h5>Generar informes automáticos</h5>
            <ul class="steps">
            <li>Macro para:
                <ul class="steps">
                <li>Consolidar datos de múltiples hojas.</li>
                <li>Aplicar formato condicional.</li>
                <li>Crear gráficos y exportar a PDF.</li>
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <h5>Procesar datos repetitivos</h5>
            <ul class="steps">
            <li>Macro para:
                <ul class="steps">
                <li>Limpiar y formatear datos importados.</li>
                <li>Aplicar fórmulas a nuevas filas.</li>
                <li>Enviar correos con resultados.</li>
                </ul>
            </li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Automatización+con+Macros" alt="Automatización con macros en Excel">
                <figcaption>Ejemplo de macro para generar un informe automático con gráficos y exportarlo a PDF.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Documenta tus macros con comentarios en el código (usando <code>'</code> al inicio de la línea).
        </div>
    </div>
    </section>
    <!-- MÓDULO 14: INTEGRACIÓN CON OTROS PROGRAMAS -->
    <section id="modulo14" class="block">
    <h3>Módulo 14. Integración con Otros Programas</h3>
    <p class="lead">
        Aprende a importar/exportar datos entre Excel y Word, PowerPoint, Access y bases de datos. Domina el uso de Power Query para transformar datos de múltiples fuentes.
    </p>
    <!-- Sección: Excel y Word -->
    <div class="card">
        <h4>Integración con Microsoft Word</h4>
        <p>Combina datos de Excel en documentos de Word:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar tabla de Excel en Word</h5>
            <ul class="steps">
            <li>En Word, ve a <strong>Insertar → Tabla → Tabla de Excel</strong>.</li>
            <li>Se abrirá una hoja de Excel incrustada.</li>
            <li>Edita los datos y cierra la ventana de Excel.</li>
            </ul>
        </div>
        <div>
            <h5>Vincular datos</h5>
            <ul class="steps">
            <li>En Excel, selecciona los datos y copia (<span class="keyboard-shortcut">Ctrl + C</span>).</li>
            <li>En Word, usa <strong>Pegado especial → Pegar vínculo → Hoja de cálculo de Excel</strong>.</li>
            <li>Los datos se actualizarán automáticamente al cambiar el archivo de Excel.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Excel+y+Word" alt="Excel y Word">
                <figcaption>Ejemplo de cómo vincular una tabla de Excel a un documento de Word.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa vinculación para:
        <ul class="steps">
            <li>Informes que requieren datos actualizados.</li>
            <li>Evitar duplicar información.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Excel y PowerPoint -->
    <div class="card">
        <h4>Integración con Microsoft PowerPoint</h4>
        <p>Presenta tus datos de Excel en diapositivas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Insertar gráficos de Excel</h5>
            <ul class="steps">
            <li>En Excel, selecciona el gráfico y copia (<span class="keyboard-shortcut">Ctrl + C</span>).</li>
            <li>En PowerPoint, pega con <strong>Pegado especial → Gráfico de Excel</strong>.</li>
            <li>Elige pegar como imagen o mantener el vínculo.</li>
            </ul>
        </div>
        <div>
            <h5>Actualizar datos vinculados</h5>
            <ul class="steps">
            <li>Haz clic derecho en el gráfico en PowerPoint.</li>
            <li>Selecciona <strong>Actualizar vínculos</strong>.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Excel+y+PowerPoint" alt="Excel y PowerPoint">
                <figcaption>Ejemplo de gráfico de Excel insertado en PowerPoint con vínculo a datos.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Usa <strong>Pegar como imagen</strong> si no necesitas actualizar los datos, para reducir el tamaño del archivo.
        </div>
    </div>
    <!-- Sección: Excel y Access -->
    <div class="card">
        <h4>Integración con Microsoft Access</h4>
        <p>Trabaja con bases de datos relacionales:</p>
        <div class="grid grid-2">
        <div>
            <h5>Importar datos de Access</h5>
            <ul class="steps">
            <li>En Excel, ve a <strong>Datos → Obtener datos → Desde base de datos → Desde Access</strong>.</li>
            <li>Selecciona el archivo .accdb y la tabla o consulta.</li>
            <li>Excel importará los datos como una tabla.</li>
            </ul>
        </div>
        <div>
            <h5>Exportar a Access</h5>
            <ul class="steps">
            <li>En Access, ve a <strong>Datos externos → Excel</strong>.</li>
            <li>Selecciona el archivo de Excel y la hoja.</li>
            <li>Define si deseas crear una nueva tabla o añadir a una existente.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Excel+y+Access" alt="Excel y Access">
                <figcaption>Ejemplo de importación de datos desde Access a Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa Power Query para transformar datos antes de importarlos desde Access.
        </div>
    </div>
    <!-- Sección: Power Query -->
    <div class="card">
        <h4>Power Query: importar y transformar datos</h4>
        <p>Herramienta poderosa para limpiar y combinar datos de múltiples fuentes:</p>
        <div class="grid grid-2">
        <div>
            <h5>Obtener datos con Power Query</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Obtener datos</strong>.</li>
            <li>Elige la fuente (Excel, CSV, web, base de datos, etc.).</li>
            <li>Power Query abrirá el editor para transformar los datos.</li>
            </ul>
        </div>
        <div>
            <h5>Transformar datos</h5>
            <ul class="steps">
            <li>Limpia datos:
                <ul class="steps">
                <li>Eliminar filas vacías.</li>
                <li>Corregir errores.</li>
                <li>Cambiar tipos de datos.</li>
                </ul>
            </li>
            <li>Combina consultas (unir tablas).</li>
            <li>Carga los datos a Excel como tabla o tabla dinámica.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Power+Query" alt="Power Query en Excel">
                <figcaption>Ejemplo de Power Query en Excel mostrando la transformación de datos.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Power Query es ideal para:
        <ul class="steps">
            <li>Combinar datos de múltiples archivos.</li>
            <li>Limpiar datos desorganizados.</li>
            <li>Automatizar la importación de datos recurrentes.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Conexión a bases de datos -->
    <div class="card">
        <h4>Conexión a bases de datos externas</h4>
        <p>Importa datos directamente desde SQL Server, Oracle, MySQL, etc.:</p>
        <div class="grid grid-2">
        <div>
            <h5>Conectar a SQL Server</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Obtener datos → Desde base de datos → Desde SQL Server</strong>.</li>
            <li>Ingresa el nombre del servidor y credenciales.</li>
            <li>Selecciona la tabla o escribe una consulta SQL.</li>
            </ul>
        </div>
        <div>
            <h5>Actualizar conexiones</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Conexiones</strong>.</li>
            <li>Selecciona la conexión y haz clic en <strong>Actualizar</strong>.</li>
            <li>Configura la frecuencia de actualización automática.</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Conexión+a+SQL" alt="Conexión a SQL en Excel">
                <figcaption>Ejemplo de conexión a SQL Server desde Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa consultas parametrizadas para crear informes dinámicos.
        </div>
    </div>
    </section>
    <!-- MÓDULO 15: TRUCOS Y ATAJOS -->
    <section id="modulo15" class="block">
    <h3>Módulo 15. Trucos y Atajos</h3>
    <p class="lead">
        Domina los atajos de teclado, trucos ocultos y técnicas avanzadas para trabajar más rápido en Excel. Aprende a personalizar la cinta de opciones y crear tus propios atajos.
    </p>
    <!-- Sección: Atajos de teclado esenciales -->
    <div class="card">
        <h4>Atajos de teclado esenciales</h4>
        <p>Los atajos más útiles para ahorrar tiempo:</p>
        <div class="grid grid-2">
        <div>
            <h5>Atajos de navegación</h5>
            <table>
            <thead><tr><th>Atajo</th><th>Acción</th></tr></thead>
            <tbody>
                <tr><td><span class="keyboard-shortcut">Ctrl + Flechas</span></td><td>Ir al borde de los datos.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Home</span></td><td>Ir a la celda A1.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + End</span></td><td>Ir a la última celda con datos.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + PgUp/PgDn</span></td><td>Moverse entre hojas.</td></tr>
                <tr><td><span class="keyboard-shortcut">Alt + PgUp/PgDn</span></td><td>Desplazarse horizontalmente.</td></tr>
            </tbody>
            </table>
        </div>
        <div>
            <h5>Atajos de selección</h5>
            <table>
            <thead><tr><th>Atajo</th><th>Acción</th></tr></thead>
            <tbody>
                <tr><td><span class="keyboard-shortcut">Shift + Flechas</span></td><td>Extender selección.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Shift + Flechas</span></td><td>Seleccionar hasta el borde.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + A</span></td><td>Seleccionar todo.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Espacio</span></td><td>Seleccionar columna.</td></tr>
                <tr><td><span class="keyboard-shortcut">Shift + Espacio</span></td><td>Seleccionar fila.</td></tr>
            </tbody>
            </table>
            <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Atajos+de+Teclado" alt="Atajos de teclado en Excel">
            <figcaption>Resumen de atajos de teclado esenciales en Excel.</figcaption>
            </figure>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Atajos de edición</h5>
            <table>
            <thead><tr><th>Atajo</th><th>Acción</th></tr></thead>
            <tbody>
                <tr><td><span class="keyboard-shortcut">F2</span></td><td>Editar celda.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + C/X/V</span></td><td>Copiar/cortar/pegar.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Z/Y</span></td><td>Deshacer/rehacer.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + D/R</span></td><td>Rellenar hacia abajo/derecha.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + ;</span></td><td>Insertar fecha actual.</td></tr>
            </tbody>
            </table>
        </div>
        <div>
            <h5>Atajos de formato</h5>
            <table>
            <thead><tr><th>Atajo</th><th>Acción</th></tr></thead>
            <tbody>
                <tr><td><span class="keyboard-shortcut">Ctrl + B/I/U</span></td><td>Negrita/cursiva/subrayado.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + 1</span></td><td>Formato de celdas.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Shift + $</span></td><td>Formato de moneda.</td></tr>
                <tr><td><span class="keyboard-shortcut">Ctrl + Shift + %</span></td><td>Formato de porcentaje.</td></tr>
            </tbody>
            </table>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Aprende estos atajos para trabajar 2-3 veces más rápido en Excel.
        </div>
    </div>
    <!-- Sección: Trucos ocultos -->
    <div class="card">
        <h4>Trucos ocultos de Excel</h4>
        <p>Funcionalidades poco conocidas pero muy útiles:</p>
        <div class="grid grid-2">
        <div>
            <h5>Relleno rápido</h5>
            <ul class="steps">
            <li>Escribe un patrón en una columna (ej: "Nombre Apellido" en A1).</li>
            <li>En B1, escribe el formato deseado (ej: "Apellido, Nombre").</li>
            <li>Selecciona ambas celdas y arrastra el controlador de relleno hacia abajo.</li>
            <li>Excel aplicará el patrón automáticamente.</li>
            </ul>
        </div>
        <div>
            <h5>Selección especial</h5>
            <ul class="steps">
            <li>Ve a <strong>Inicio → Buscar y seleccionar → Ir a especial</strong>.</li>
            <li>Selecciona:
                <ul class="steps">
                <li>Celdas con fórmulas.</li>
                <li>Celdas en blanco.</li>
                <li>Celdas con notas.</li>
                </ul>
            </li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Trucos+Ocultos" alt="Trucos ocultos en Excel">
                <figcaption>Ejemplo de relleno rápido y selección especial en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Nombres de rangos</h5>
            <ul class="steps">
            <li>Selecciona un rango y ve a <strong>Fórmulas → Definir nombre</strong>.</li>
            <li>Asigna un nombre (ej: <code>Ventas2025</code>).</li>
            <li>Usa el nombre en fórmulas (ej: <code>=SUMA(Ventas2025)</code>).</li>
            </ul>
        </div>
        <div>
            <h5>Validación de datos con listas desplegables</h5>
            <ul class="steps">
            <li>Ve a <strong>Datos → Validación de datos</strong>.</li>
            <li>Elige <strong>Lista</strong> y escribe los valores separados por comas.</li>
            <li>O referencia un rango con los valores (ej: <code>=A2:A10</code>).</li>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa nombres de rangos para:
        <ul class="steps">
            <li>Hacer fórmulas más legibles.</li>
            <li>Evitar errores al insertar/eliminar filas.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Personalizar la cinta de opciones -->
    <div class="card">
        <h4>Personalizar la cinta de opciones</h4>
        <p>Añade tus comandos favoritos para acceso rápido:</p>
        <div class="grid grid-2">
        <div>
            <h5>Añadir comandos a la cinta</h5>
            <ul class="steps">
            <li>Ve a <strong>Archivo → Opciones → Personalizar cinta</strong>.</li>
            <li>Selecciona una pestaña existente o crea una nueva.</li>
            <li>Añade comandos desde la lista de la izquierda.</li>
            </ul>
        </div>
        <div>
            <h5>Crear pestañas personalizadas</h5>
            <ul class="steps">
            <li>Haz clic en <strong>Nueva pestaña</strong>.</li>
            <li>Renombra la pestaña y los grupos.</li>
            <li>Añade comandos frecuentes (ej: "Guardar como PDF", "Insertar tabla dinámica").</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Personalizar+Cinta" alt="Personalizar cinta en Excel">
                <figcaption>Ejemplo de cómo personalizar la cinta de opciones en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Crea una pestaña llamada "Mis Herramientas" con:
        <ul class="steps">
            <li>Comandos de formato.</li>
            <li>Macros personalizadas.</li>
            <li>Herramientas de análisis.</li>
        </ul>
        </div>
    </div>
    <!-- Sección: Crear atajos personalizados -->
    <div class="card">
        <h4>Crear atajos de teclado personalizados</h4>
        <p>Asigna tus propias combinaciones de teclas:</p>
        <div class="grid grid-2">
        <div>
            <h5>Asignar atajos a macros</h5>
            <ul class="steps">
            <li>Ve a <strong>Archivo → Opciones → Personalizar cinta → Atajos de teclado</strong>.</li>
            <li>Selecciona la macro en la lista.</li>
            <li>Asigna una combinación de teclas (ej: <span class="keyboard-shortcut">Ctrl + Shift + M</span>).</li>
            </ul>
        </div>
        <div>
            <h5>Asignar atajos a comandos</h5>
            <ul class="steps">
            <li>En la misma ventana, elige un comando (ej: "Insertar tabla dinámica").</li>
            <li>Asigna un atajo (evita sobrescribir atajos existentes).</li>
            <figure class="img-frame">
                <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Atajos+Personalizados" alt="Atajos personalizados en Excel">
                <figcaption>Ejemplo de cómo asignar atajos personalizados a macros y comandos en Excel.</figcaption>
            </figure>
            </ul>
        </div>
        </div>
        <div class="callout info">
        <strong>Consejo:</strong> Usa atajos con <span class="keyboard-shortcut">Ctrl + Shift + [Letra]</span> para evitar conflictos.
        </div>
    </div>
    </section>
    <!-- MÓDULO 16: PRÁCTICAS Y PROYECTOS -->
    <section id="modulo16" class="block">
    <h3>Módulo 16. Prácticas y Proyectos</h3>
    <p class="lead">
        Aplica lo aprendido con proyectos reales: presupuesto personal, análisis de ventas, dashboard de KPIs, gestión de inventario y más. Incluye plantillas descargables y soluciones paso a paso.
    </p>
    <!-- Sección: Proyecto 1: Presupuesto personal -->
    <div class="card">
        <h4>Proyecto 1: Presupuesto personal mensual</h4>
        <p>Crea un presupuesto detallado con fórmulas, formato condicional y gráficos:</p>
        <div class="project-card">
        <h5>Objetivo</h5>
        <p>Controlar ingresos y gastos mensuales, con alertas para categorías que excedan el presupuesto.</p>
        <h5>Pasos</h5>
        <div class="project-steps">
            <ol class="steps">
            <li>Crea una tabla con columnas: Categoría, Presupuestado, Real, Diferencia.</li>
            <li>Usa <code>=SUMA</code> para totales y <code>=B2-C2</code> para diferencias.</li>
            <li>Aplica formato condicional a la columna "Diferencia" (rojo si negativo).</li>
            <li>Inserta un gráfico de columnas para comparar presupuestado vs. real.</li>
            <li>Protege las celdas con fórmulas para evitar cambios accidentales.</li>
            </ol>
        </div>
        <div class="project-example">
            <table>
            <thead>
                <tr><th>Categoría</th><th>Presupuestado</th><th>Real</th><th>Diferencia</th></tr>
            </thead>
            <tbody>
                <tr><td>Alquiler</td><td>$1,200</td><td>$1,200</td><td>$0</td></tr>
                <tr><td>Comida</td><td>$400</td><td>$450</td><td>-$50</td></tr>
                <tr><td>Transporte</td><td>$200</td><td>$180</td><td>$20</td></tr>
                <tr><td><strong>Total</strong></td><td><strong>$1,800</strong></td><td><strong>$1,830</strong></td><td><strong>-$30</strong></td></tr>
            </tbody>
            </table>
        </div>
        <a class="project-download" href="#">Descargar plantilla de presupuesto</a>
        <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Presupuesto+Personal" alt="Presupuesto personal en Excel">
            <figcaption>Ejemplo de presupuesto personal en Excel con formato condicional y gráfico.</figcaption>
        </figure>
        </div>
    </div>
    <!-- Sección: Proyecto 2: Análisis de ventas -->
    <div class="card">
        <h4>Proyecto 2: Análisis de ventas por producto y región</h4>
        <p>Analiza datos de ventas con tablas dinámicas, gráficos y segmentadores:</p>
        <div class="project-card">
        <h5>Objetivo</h5>
        <p>Identificar productos y regiones con mejor desempeño, y tendencias de ventas.</p>
        <h5>Pasos</h5>
        <div class="project-steps">
            <ol class="steps">
            <li>Importa datos de ventas (producto, región, fecha, cantidad, precio).</li>
            <li>Crea una tabla dinámica con:
                <ul class="steps">
                <li>Filas: Producto.</li>
                <li>Columnas: Región.</li>
                <li>Valores: Suma de Ventas.</li>
                </ul>
            </li>
            <li>Añade un segmentador para filtrar por región.</li>
            <li>Inserta un gráfico dinámico de columnas apiladas.</li>
            <li>Usa formato condicional para resaltar los 5 productos más vendidos.</li>
            </ol>
        </div>
        <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Análisis+de+Ventas" alt="Análisis de ventas en Excel">
            <figcaption>Ejemplo de tabla dinámica y gráfico para análisis de ventas por producto y región.</figcaption>
        </figure>
        <a class="project-download" href="#">Descargar plantilla de análisis de ventas</a>
        </div>
    </div>
    <!-- Sección: Proyecto 3: Dashboard de KPIs -->
    <div class="card">
        <h4>Proyecto 3: Dashboard de indicadores clave (KPIs)</h4>
        <p>Crea un panel de control interactivo con métricas de negocio:</p>
        <div class="project-card">
        <h5>Objetivo</h5>
        <p>Visualizar métricas como ventas totales, margen de ganancia, satisfacción del cliente y crecimiento mensual.</p>
        <h5>Pasos</h5>
        <div class="project-steps">
            <ol class="steps">
            <li>Prepara los datos en una tabla (ej: ventas mensuales, costos, encuestas).</li>
            <li>Calcula KPIs con fórmulas:
                <ul class="steps">
                <li>Ventas totales: <code>=SUMA(Ventas)</code>.</li>
                <li>Margen: <code>=SUMA(Ventas-Costos)/SUMA(Ventas)</code>.</li>
                <li>Crecimiento: <code>=(VentasEsteMes-VentasMesAnterior)/VentasMesAnterior</code>.</li>
                </ul>
            </li>
            <li>Crea minigráficos para tendencias.</li>
            <li>Usa gráficos de medidores o barras para mostrar progreso hacia metas.</li>
            <li>Añade segmentadores para filtrar por período o región.</li>
            </ol>
        </div>
        <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Dashboard+de+KPIs" alt="Dashboard de KPIs en Excel">
            <figcaption>Ejemplo de dashboard de KPIs en Excel con minigráficos, medidores y segmentadores.</figcaption>
        </figure>
        <a class="project-download" href="#">Descargar plantilla de dashboard</a>
        </div>
    </div>
    <!-- Sección: Proyecto 4: Gestión de inventario -->
    <div class="card">
        <h4>Proyecto 4: Sistema de gestión de inventario</h4>
        <p>Controla stock, alertas de reposición y rotación de productos:</p>
        <div class="project-card">
        <h5>Objetivo</h5>
        <p>Automatizar el seguimiento de inventario, con alertas para productos con stock bajo y cálculo de rotación.</p>
        <h5>Pasos</h5>
        <div class="project-steps">
            <ol class="steps">
            <li>Crea una tabla con: Producto, Stock Actual, Stock Mínimo, Proveedor, Última Compra.</li>
            <li>Usa formato condicional para resaltar productos con stock &lt; stock mínimo (rojo).</li>
            <li>Añade una columna "Estado" con <code>=SI(C2<B2; "Reponer"; "OK")</code>.</li>
            <li>Calcula la rotación de inventario: <code>=VentasAnuales/StockPromedio</code>.</li>
            <li>Crea un gráfico de barras para visualizar productos con mayor rotación.</li>
            </ol>
        </div>
        <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Gestión+de+Inventario" alt="Gestión de inventario en Excel">
            <figcaption>Ejemplo de sistema de gestión de inventario en Excel con alertas de stock.</figcaption>
        </figure>
        <a class="project-download" href="#">Descargar plantilla de inventario</a>
        </div>
    </div>
    <!-- Sección: Proyecto 5: Calendario de proyectos -->
    <div class="card">
        <h4>Proyecto 5: Calendario de proyectos con diagrama de Gantt</h4>
        <p>Planifica y visualiza el cronograma de un proyecto:</p>
        <div class="project-card">
        <h5>Objetivo</h5>
        <p>Crear un diagrama de Gantt para gestionar tareas, plazos y dependencias en un proyecto.</p>
        <h5>Pasos</h5>
        <div class="project-steps">
            <ol class="steps">
            <li>Lista las tareas con columnas: Tarea, Inicio, Fin, Duración, % Completado.</li>
            <li>Calcula la duración: <code>=Fin-Inicio</code>.</li>
            <li>Crea un gráfico de barras apiladas:
                <ul class="steps">
                <li>Eje X: tareas.</li>
                <li>Series: días transcurridos y días restantes.</li>
                </ul>
            </li>
            <li>Formatea el gráfico para que parezca un diagrama de Gantt.</li>
            <li>Añade líneas para marcar hitos importantes.</li>
            </ol>
        </div>
        <figure class="img-frame">
            <img src="https://via.placeholder.com/600x350/107C41/FFFFFF?text=Diagrama+de+Gantt" alt="Diagrama de Gantt en Excel">
            <figcaption>Ejemplo de diagrama de Gantt en Excel para gestión de proyectos.</figcaption>
        </figure>
        <a class="project-download" href="#">Descargar plantilla de Gantt</a>
        </div>
    </div>
    <!-- Sección: Consejos para proyectos reales -->
    <div class="card">
        <h4>Consejos para aplicar Excel en proyectos reales</h4>
        <p>Recomendaciones para llevar tus habilidades al siguiente nivel:</p>
        <div class="grid grid-2">
        <div>
            <h5>Planificación</h5>
            <ul class="steps">
            <li>Define claramente el objetivo del proyecto.</li>
            <li>Identifica las fuentes de datos y cómo se actualizarán.</li>
            <li>Diseña la estructura antes de empezar (hojas, tablas, fórmulas).</li>
            </ul>
        </div>
        <div>
            <h5>Diseño</h5>
            <ul class="steps">
            <li>Usa nombres de rangos y tablas para fórmulas claras.</li>
            <li>Aplica formato condicional para resaltar información clave.</li>
            <li>Mantén un diseño limpio y profesional.</li>
            </ul>
        </div>
        </div>
        <div class="grid grid-2">
        <div>
            <h5>Automatización</h5>
            <ul class="steps">
            <li>Usa macros para tareas repetitivas.</li>
            <li>Automatiza la importación de datos con Power Query.</li>
            <li>Configura actualizaciones automáticas para datos externos.</li>
            </ul>
        </div>
        <div>
            <h5>Colaboración</h5>
            <ul class="steps">
            <li>Guarda en OneDrive para colaboración en tiempo real.</li>
            <li>Protege hojas con fórmulas o datos sensibles.</li>
            <li>Documenta tus fórmulas y macros para otros usuarios.</li>
            </ul>
        </div>
        </div>
        <div class="callout ok">
        <strong>Consejo profesional:</strong> Para proyectos complejos:
        <ul class="steps">
            <li>Divide el trabajo en hojas separadas (ej: Datos, Cálculos, Informes).</li>
            <li>Usa tablas dinámicas para resúmenes ejecutivos.</li>
            <li>Valida los datos con reglas de validación.</li>
        </ul>
        </div>
    </div>
    </section>
</main>
</div>

<footer>
<div class="footer-inner">
    <div>
    <div class="footer-brand">
        <img src="https://cdn-icons-png.flaticon.com/512/732/732221.png" alt="Excel 2025" width="24" height="24">
        <span>Guía Completa de Microsoft Excel 2025</span>
    </div>
    <p class="footer-note">© 2025. Todos los derechos reservados. Esta guía es un recurso educativo para aprender Microsoft Excel desde cero hasta nivel avanzado.</p>
    <div class="footer-social">
        <a href="#" title="Facebook" aria-label="Facebook"><svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
        <a href="#" title="Twitter" aria-label="Twitter"><svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.47 1.88-2.67-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.94C8.28 9.09 5.11 11.6 3.1 15c-.83-.25-1.69-.45-2.55-.55.96 1.8 3.34 3 5.6 2.15C5.22 18.7 1.94 15.05.9 11.4c1.8-.6 3.96-1 6.1-1 1.64 0 3.2.43 4.5 1.18-.9-1.77-2.5-3.2-4.4-3.7-.3-.08-.6-.12-.9-.12h-2c-1.1 0-2.12.6-2.7 1.5-.6-.9-1.59-1.5-2.7-1.5-2.1 0-3.9 1.5-4.5 3.6C2.4 10.3 1.8 8.1 1.8 6c0-1.7.9-3 2.2-3.6.3-.14.6-.2 1-.2.4 0 .8.07 1.2.15.3.07.6.2.8.3L4 5c.6.3 1.3.5 2 .5-.3.4-.7.9-1 1.5l-.5.2c.8.4 1.7.7 2.6.7.8 0 1.6-.2 2.3-.5.7-.3 1.4-.8 1.9-1.4.5-.6.8-1.3.8-2.1 0-.3 0-.6-.02-.9-.2-.6-.5-1.2-.9-1.7-.4-.5-.9-.9-1.5-1.1.6-.6 1.5-1 2.4-1 1.5 0 2.8.9 3.4 2.2.6 1.3.9 2.8.9 4.3 0 1.5-.3 3-.9 4.3-.6 1.3-1.8 2.2-3.2 2.2-.6 0-1.2-.2-1.7-.5-.5-.3-1.1-.8-1.6-1.4-.5-.6-.8-1.3-.8-2.1 0-1.5.6-2.8 1.6-3.6-.3 0-.6 0-.9-.02-.3-.07-.6-.15-.8-.25-.2-.1-.5-.15-.75-.25-.3-.1-.6-.15-.9-.15h-2c-.8 0-1.5.3-2 .8-.5.5-1 1.2-1.4 2-.4.8-.6 1.7-.6 2.6 0 .3 0 .7.1 1 .1.3.2.6.4.8.2.2.5.3 1 .3.8.5 1.8.8 2.8.8.3 0 .6 0 .9-.02 1.2-.07.3-.07.6-.15.9-.25.3-.1.6-.15.9-.15h2c.8 0 1.5-.3 2-.8.5-.5 1-1.2 1.4-2 .4-.8.6-1.7.6-2.6zm-4.8 1.5c-.8 0-1.5.3-2 .8-.5.5-1 1.2-1.4 2-.4.8-.6 1.7-.6 2.6 0 .3 0 .7.1 1 .1.3.2.6.4.8.2.2.5.3 1 .3.8.5 1.8.8 2.8.8.3 0 .6 0 .9-.02 1.2-.07.3-.07.6-.15.9-.25.3-.1.6-.15.9-.15h2c.8 0 1.5-.3 2-.8.6-.5 1-1.2 1.4-2 .4-.8.6-1.7.6-2.6 0-.3 0-.7-.1-1-.1-.3-.2-.6-.4-.8-.2-.2-.5-.3-1-.3-.8 0-1.5.3-2 .8-.5.5-1 1.2-1.4.8-.4 1.7-.6 2.6-.6.3 0 .7 0 1 .02.3.07.6.15.9.25.3.1.5.2.8.3.3.1.6.15.9.15h2c1.1 0 2.12-.6 2.7-1.5.6.9 1.5 1.5 2.7 1.5 1.5 0 2.8-.9 3.4-2.2.6-1.3.9-2.8.9-4.3 0-1.5-.3-3-.9-4.3-.6-1.3-1.8-2.2-3.2-2.2z"/></svg></a>
        <a href="#" title="LinkedIn" aria-label="LinkedIn"><svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
        <a href="#" title="YouTube" aria-label="YouTube"><svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M23.5 6.5c-.4-.8-.9-1.5-1.6-2-.5-.4-1.1-.7-1.8-.7-.9 0-1.7.2-2.5.5-.8.3-1.5.7-2.2 1.2-.7.5-1.3 1.1-1.8 1.8-.5.6-1 1.3-1.4 2-.4.7-.7 1.4-.9 2.2-.2.8-.3 1.6-.3 2.5s.1 1.7.3 2.5c.2.8.5 1.5.9 2.2.4.7.9 1.3 1.4 1.8.5.5 1.1.9 1.8 1.2.7.3 1.5.5 2.3.5.8 0 1.6-.2 2.3-.5.7-.3 1.4-.7 1.9-1.2.5-.5 1-1.1 1.4-1.8.4-.7.7-1.4.9-2.2.2-.8.3-1.6.3-2.5s-.1-1.7-.3-2.5c-.2-.8-.5-1.5-.9-2.2-.4-.7-.9-1.3-1.4-1.8zM9.5 15.5v-7l7 3.5-7 3.5z"/></svg></a>
    </div>
    </div>
    <div>
    <h5 class="footer-title">Recursos</h5>
    <ul class="footer-list">
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#modulo1">Módulo 1: Introducción</a></li>
        <li><a href="#modulo2">Módulo 2: Celdas y Datos</a></li>
        <li><a href="#modulo3">Módulo 3: Formato</a></li>
        <li><a href="#modulo4">Módulo 4: Fórmulas Básicas</a></li>
    </ul>
    </div>
    <div>
    <h5 class="footer-title">Módulos Avanzados</h5>
    <ul class="footer-list">
        <li><a href="#modulo8">Tablas Dinámicas</a></li>
        <li><a href="#modulo10">Funciones Avanzadas</a></li>
        <li><a href="#modulo13">Macros y VBA</a></li>
        <li><a href="#modulo14">Integración con Otros Programas</a></li>
        <li><a href="#modulo16">Proyectos Prácticos</a></li>
    </ul>
    </div>
    <div>
    <h5 class="footer-title">Suscríbete</h5>
    <p>Recibe actualizaciones y plantillas exclusivas:</p>
    <form class="newsletter-form">
        <input type="email" placeholder="Tu correo electrónico" aria-label="Correo electrónico para suscripción">
        <button type="submit">Suscribirse</button>
    </form>
    </div>
</div>
</footer>

<a class="backtop" href="#top" aria-label="Volver al inicio">↑</a>
<script>
window.addEventListener('scroll', () => {
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    document.getElementById('progressBar').style.width = scrolled + '%';
});

const themeToggle = document.getElementById('themeToggle');
themeToggle.addEventListener('change', () => {
    document.body.classList.toggle('dark');
});

const siteSearch = document.getElementById('siteSearch');
const searchResults = document.getElementById('searchResults');
const clearSearch = document.getElementById('clearSearch');
const searchData = [
    { title: "Introducción a Excel", url: "#modulo1", keywords: "excel, introducción, inicio, qué es" },
    { title: "Fórmulas básicas", url: "#modulo4", keywords: "fórmulas, suma, promedio, contar, funciones" },
    { title: "Tablas dinámicas", url: "#modulo8", keywords: "tablas, dinámicas, pivot, análisis, datos" },
    { title: "Macros y VBA", url: "#modulo13", keywords: "macros, vba, automatización, grabar, código" },
    { title: "Gráficos en Excel", url: "#modulo6", keywords: "gráficos, visualización, columnas, líneas, circular" },
    { title: "Presupuesto personal", url: "#modulo16", keywords: "presupuesto, personal, finanzas, gastos, ingresos" },
    { title: "Power Query", url: "#modulo14", keywords: "power query, importar, transformar, datos, bases" },
    { title: "Atajos de teclado", url: "#modulo15", keywords: "atajos, teclado, trucos, rápidos, shortcuts" },
    { title: "Funciones avanzadas", url: "#modulo10", keywords: "funciones, avanzadas, buscarv, índice, coincidir" },
    { title: "Dashboard de KPIs", url: "#modulo16", keywords: "dashboard, kpi, indicadores, medidores, gráficos" }
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

clearSearch.addEventListener('click', () => {
    siteSearch.value = '';
    searchResults.classList.remove('show');
    siteSearch.focus();
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

// Close search results when clicking outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.search')) {
    searchResults.classList.remove('show');
    }
});

// Table of contents toggle (mobile)
const tocToggle = document.getElementById('tocToggle');
const toc = document.getElementById('toc');
tocToggle.addEventListener('click', () => {
    toc.classList.toggle('show');
    tocToggle.textContent = toc.classList.contains('show') ? '📋 Ocultar tabla de contenidos' : '📋 Mostrar tabla de contenidos';
});

// Back to top
const backTop = document.querySelector('.backtop');
backTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Smooth scrolling for anchor links
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

// Check for dark mode preference
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    themeToggle.checked = true;
    document.body.classList.add('dark');
}
</script>
</body>
</html>
