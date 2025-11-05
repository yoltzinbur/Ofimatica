<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Guía Completa de LibreOffice Calc - Aurora Lite</title>
  <link rel="icon" type="image/jpeg" href="IMG/libreofice.jpg">
  <style>
/* ==========================================================
   Guía LibreOffice Calc – Aurora Lite (Mejorada)
   Mantiene tu estilo original + acentos modernos "Calc"
   ========================================================== */

/* ---------- Variables (paleta / ritmo) ---------- */
:root{
  --lib:rgba(34, 139, 34, 1);          /* matizado a verde para sentido Calc */
  --accent:rgba(41, 136, 153, 1);      
  --accent-600:#16A010;
  --bg:#F7F9FC;
  --bg-2:#EEF7EE;
  --card:#FFFFFF;
  --border:#E6F1E6;

  --txt:#082F2F;
  --txt-2:rgba(13, 102, 117, 0.94);
  --txt-3:rgba(8, 8, 8, 1);

  --ok:#107C10; --warn:#FF8C00; --danger:#D13438; --info:#1FB814;

  --ff:'Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',Arial,sans-serif;
  --fs-hero:clamp(2rem, 1.2rem + 2.5vw, 3rem);
  --fs-xl:clamp(1.5rem, 1rem + 1.6vw, 2.2rem);
  --fs-lg:clamp(1.1rem, .95rem + .6vw, 1.35rem);
  --fs:1rem; --fs-sm:.94rem; --fs-xs:.84rem;

  --radius:14px; --radius-sm:10px; --speed:180ms; --container:1180px;

  --sd4:0 2px 6px rgba(86, 131, 86, 0.06);
  --sd8:0 6px 15px rgba(86, 131, 86, 0.09);
  --sd16:0 14px 34px rgba(86, 131, 86, 0.12);

  --hero-gradient: linear-gradient(135deg,var(--lib),var(--accent));
}

/* ---------- Reset base ---------- */
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{
  font-family:var(--ff); font-size:var(--fs); line-height:1.65;
  color:var(--txt);
  background:
    radial-gradient(1200px 700px at 0% -10%, rgba(86, 131, 86, 0.03), transparent 40%),
    radial-gradient(900px 600px at 100% -10%, rgba(41, 136, 153, 0.02), transparent 42%),
    var(--bg);
  -webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale;
}
img{max-width:100%;display:block}
a{color:var(--accent);text-decoration:none}
a:hover{text-decoration:underline}
.container{max-width:var(--container);margin:0 auto;padding:0 22px}

/* ---------- Progress bar ---------- */
.progress-bar{
  position:fixed; left:0; top:0; height:3px; width:0;
  background:linear-gradient(90deg,var(--lib),var(--accent));
  z-index:1000;
  box-shadow:0 1px 0 #037ea314;
}

/* Header */
.header{
  position: sticky; top: 0; z-index: 900;
  background: color-mix(in srgb, var(--card, #fff) 85%, transparent);
  backdrop-filter: saturate(160%) blur(12px);
  border-bottom: 1px solid var(--border, #E6F1E6);
  transition: box-shadow 180ms ease, background-color 180ms ease;
}
.header.scrolled{
  box-shadow: 0 10px 24px rgba(3, 40, 163, 0.06);
}
.header .header-container{
  max-width: 1400px; margin: 0 auto; padding: 10px 22px;
  display: flex; align-items: center; gap: 16px; min-height: 76px;
  transition: min-height 180ms ease, padding 180ms ease;
}
.header.scrolled .header-container{ min-height: 64px; }

/* Logo */
.logo{ display:flex; align-items:center; gap:10px; color: var(--lib); font-weight: 900; }
.logo .logo-icon{
  width: 38px; height: 38px; border-radius: 10px;
  background: linear-gradient(135deg, var(--lib), var(--accent));
  box-shadow: 0 6px 15px rgba(3, 139, 163, 0.08);
}

/* Nav / suite */
.nav{ display:flex; gap:10px; align-items:center; flex-wrap:wrap; }
.nav-item{
  display:inline-flex; align-items:center; gap:8px;
  padding:8px 12px; border-radius:999px;
  color: var(--txt);
  border:1px solid transparent; white-space:nowrap;
  transition: background-color 160ms ease, border-color 160ms ease;
}
.nav-item:hover{
  background:#fff; border-color: var(--border);
}
.nav-item.active{
  background: color-mix(in srgb, var(--accent) 10%, transparent);
  color: var(--lib);
  border-color: color-mix(in srgb, var(--accent) 35%, var(--border));
  font-weight: 800;
}

/* Suite items */
.office-suite-nav{ margin-left:auto; display:flex; gap:10px; align-items:center; flex-wrap:wrap; }
.suite-item{
  display:flex; align-items:center; gap:8px;
  padding:8px 10px; border:1px solid var(--border); border-radius:10px;
  background:#fff; color: var(--txt);
  transition: border-color 160ms ease, box-shadow 160ms ease;
}
.suite-item:hover{ border-color: var(--accent); box-shadow: var(--sd4); }
.suite-item i{
  width:22px; height:22px; border-radius:6px; display:inline-block;
  background: linear-gradient(135deg, var(--lib), var(--accent));
}

/* TOC button */
.toc-btn{
  appearance:none; border:1px solid var(--border); background:#fff; color: var(--txt);
  padding:8px 12px; border-radius:999px; cursor:pointer; font-weight:800; margin-left:8px;
  display:inline-flex; align-items:center; gap:8px;
}
.toc-btn:hover{ border-color: var(--accent); box-shadow: var(--sd4); }
.toc-dot{
  width:8px; height:8px; border-radius:50%;
  background: radial-gradient(circle at 30% 30%, var(--accent), var(--lib));
  display:inline-block;
}

/* Hero */
.hero{
  color:#fff; background:var(--hero-gradient);
  padding:54px 0 42px; border-bottom:1px solid color-mix(in srgb, #fff 25%, transparent);
}
.hero-content{max-width:980px;margin:0 auto;text-align:center;padding:0 22px}
.hero h1{font-size:var(--fs-hero);font-weight:300;margin-bottom:10px}
.hero p{font-size:var(--fs-lg);opacity:.98}
.hero-image-placeholder{margin:22px 0;border-radius:14px;overflow:hidden;box-shadow:var(--sd16);border:1px solid color-mix(in srgb, #fff 40%, transparent); min-height:160px; display:flex;align-items:center;justify-content:center; background: rgba(255,255,255,0.06)}
.hero-image{width:100%;height:auto;display:block}
.cta-button{
  display:inline-flex;align-items:center;gap:8px;margin-top:12px;
  background:#fff;border:1px solid #fff;border-radius:999px;
  color:var(--lib);padding:10px 14px;font-weight:900;box-shadow:var(--sd8)
}
.cta-button:hover{transform:translateY(-2px);box-shadow:var(--sd16);text-decoration:none}

/* Sections */
.section{padding:72px 0}
.section:nth-of-type(even){background:var(--bg-2)}
.section-title{text-align:center;margin-bottom:28px}
.section-title h2{font-size:var(--fs-xl);font-weight:300;color:var(--lib);margin-bottom:6px}
.section-title p{color:var(--txt-2)}

/* Intro */
.intro-content{display:grid;grid-template-columns:1fr 1.1fr;gap:20px;align-items:center}
.intro-image{border-radius:14px;border:1px solid var(--border);box-shadow:var(--sd4)}
.intro-text h3{color:var(--lib);margin-bottom:10px}
.intro-text h4{color:var(--txt);margin-top:16px;margin-bottom:8px}
.feature-list{padding-left:18px}
.feature-list li{margin:.35rem 0}
.stats-grid{
  margin-top:18px; display:grid; gap:12px;
  grid-template-columns:repeat(auto-fit,minmax(160px,1fr))
}
.stat-item{
  background:#fff;border:1px solid var(--border);border-radius:12px;padding:12px;text-align:center;box-shadow:var(--sd4)
}
.stat-number{font-size:1.25rem;font-weight:900;color:var(--lib);display:block}
.stat-label{display:block;color:var(--txt-2);margin-top:4px}

/* Interface */
.interface-content{display:grid;grid-template-columns:1fr 1fr;gap:20px;align-items:start}
.interface-image{border-radius:14px;border:1px solid var(--border);box-shadow:var(--sd4); overflow:hidden}
.interface-elements{display:grid;gap:12px}
.interface-card{
  background:#fff;border:1px solid var(--border);border-radius:14px;padding:16px;box-shadow:var(--sd4)
}
.interface-card h4{margin-bottom:6px;color:var(--lib)}
.interface-card .workspace-img{border-radius:12px;border:1px solid var(--border);margin-top:8px}
.interface-tips h5, .quick-access-tips h5{color:var(--txt);margin:10px 0 6px;font-size:.95rem}
.interface-tips ul, .quick-access-tips ul{padding-left:18px}
.interface-tips li, .quick-access-tips li{margin:.25rem 0}

/* Cards */
.cards-grid{display:grid;gap:16px;grid-template-columns:repeat(auto-fit,minmax(300px,1fr))}
.card{
  background:#fff;border:1px solid var(--border);border-radius:14px;box-shadow:var(--sd4);
  padding:16px; position:relative; transition:transform var(--speed), box-shadow var(--speed), border-color var(--speed);
}
.card:hover{transform:translateY(-4px);box-shadow:var(--sd8);border-color:var(--accent)}
.card-image{border-radius:12px;overflow:hidden;border:1px solid var(--border);box-shadow:inset 0 1px 0 rgba(255,255,255,.7)}
.card-img{width:100%;height:auto;display:block}
.card-icon{
  position:absolute;top:12px;right:12px;width:36px;height:36px;border-radius:10px;
  background:color-mix(in srgb, var(--accent) 14%, transparent);display:grid;place-items:center;font-weight:900;color:var(--accent)
}
.card h3{color:var(--lib);margin:10px 0 8px}
.card .feature-list{margin-top:8px}

/* Tutoriales */
.tutorial-section { display:grid; gap:18px; }
.tutorial-list { display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:16px; }
.tutorial-card{overflow:hidden; border-radius:12px}
.tutorial-image{position:relative;border-radius:12px;overflow:hidden;border:1px solid var(--border); min-height:140px; display:flex;align-items:center;justify-content:center; font-size:3rem; opacity:0.9}
.tutorial-overlay{
  position:absolute;inset:0;display:grid;place-items:center;opacity:0;transition:opacity var(--speed);
  background:linear-gradient(to top, rgba(0,0,0,0.18), rgba(0,0,0,0.02) 60%)
}
.tutorial-image:hover .tutorial-overlay{opacity:1}
.tutorial-overlay .icon-play{width:54px;height:54px;border-radius:999px;background:#fff;display:grid;place-items:center;box-shadow:var(--sd16)}
.tutorial-content{margin-top:12px}
.tutorial-meta{display:flex;gap:10px;align-items:center;color:var(--txt-3);font-weight:800;font-size:.88rem}
.difficulty-badge{padding:2px 8px;border-radius:999px;font-size:.78rem;border:1px solid var(--border)}
.difficulty-beginner{background:rgba(16, 127, 16, 0.08);color:var(--ok)}
.difficulty-intermediate{background:rgba(255, 165, 0, 0.08);color:var(--warn)}
.difficulty-advanced{background:rgba(211, 75, 79, 0.08);color:var(--danger)}
.tutorial-content h3{color:var(--lib);margin:6px 0}

/* Shortcuts */
.shortcuts-category{margin-top:18px}
.shortcuts-category h3{color:var(--lib);margin-bottom:12px}
.shortcuts-grid{display:grid;gap:14px;grid-template-columns:repeat(auto-fit,minmax(280px,1fr))}
.shortcut-card{background:#fff;border:1px solid var(--border);border-radius:14px;padding:14px;box-shadow:var(--sd4)}
.shortcut-header{display:flex;gap:10px;align-items:center;margin-bottom:8px}
.shortcut-header h4{color:var(--lib)}
.shortcuts-list{display:grid;gap:8px}
.shortcut-item{display:flex;justify-content:space-between;gap:10px;padding:8px;border:1px dashed var(--border);border-radius:10px;background:#fff}
.shortcut-keys{
  font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
  background:rgba(31,184,20,.06); color:var(--accent); border:1px solid var(--border);
  padding:2px 8px; border-radius:999px; font-size:.82rem; font-weight:800; white-space:nowrap;
}

/* Tips */
.tips-container{display:grid;gap:16px;grid-template-columns:repeat(auto-fit,minmax(300px,1fr))}
.tip-card{background:#fff;border:1px solid var(--border);border-radius:14px;padding:14px;box-shadow:var(--sd4)}
.tip-image{border-radius:12px;overflow:hidden;border:1px solid var(--border);margin-bottom:10px}
.tip-header{display:flex;align-items:center;gap:10px;margin-bottom:6px}
.tip-icon{width:28px;height:28px;border-radius:8px;background:color-mix(in srgb, var(--accent) 14%, transparent);display:grid;place-items:center;color:var(--accent);font-weight:900}
.tip-title{font-size:1.05rem;color:var(--lib)}

/* Retos */
.challenges { margin-top:14px; display:grid; gap:12px; }
.challenge-card { background:#fff;border:1px solid var(--border);padding:12px;border-radius:12px; box-shadow:var(--sd4) }

/* Footer */
.footer{
  background:#0F2E10;
  color:#fff;margin-top:18px;
  border-top-left-radius:14px;border-top-right-radius:14px;
}
.footer .container{padding:0 22px}
.footer-content{
  display:grid;gap:18px;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
  padding:32px 0 18px;
}
.footer-section h4{color:#AAE6A8;margin-bottom:6px}
.footer-section ul{list-style:none}
.footer-section li{margin:.35rem 0}
.footer-section a{color:#dfe8ff}
.footer-bottom{
  border-top:1px solid rgba(255,255,255,.04);padding:12px 0 22px;
  display:flex;gap:10px;align-items:center;justify-content:space-between;flex-wrap:wrap
}
.footer-badges{display:flex;gap:8px;flex-wrap:wrap}
.footer .badge{background:rgba(68, 185, 240, 0.12);color:#BBF7BB;padding:6px 12px;border-radius:999px;border:1px solid rgba(31,184,20,.12);font-size:.78rem;font-weight:800}

/* Volver arriba */
.back-to-top {
  position: fixed;
  right: 18px;
  bottom: 22px;
  z-index: 1200;
  background: linear-gradient(135deg,var(--lib),var(--accent));
  color: #fff;
  border-radius:999px;
  padding:10px 12px;
  box-shadow:var(--sd16);
  display:none;
  align-items:center;
  gap:8px;
  cursor:pointer;
  font-weight:800;
  transition:transform .18s ease, opacity .18s ease;
}
.back-to-top.show { display:flex; transform:translateY(0); opacity:1; }

/* Fade-in */
.fade-in{opacity:0;transform:translateY(10px);transition:opacity .6s ease, transform .6s ease}
.fade-in.in{opacity:1;transform:none}

/* Icon placeholders */
[class^="icon-"], [class*=" icon-"]{
  display:inline-block; width:22px; height:22px; border-radius:6px;
  background:color-mix(in srgb, var(--accent) 18%, transparent);
}
.icon-arrow-right{width:auto;height:auto;background:none}
.icon-arrow-right::before{content:"›";font-weight:900;color:inherit}

/* Responsive */
@media (max-width:1024px){
  .intro-content,.interface-content,.feature-highlight{grid-template-columns:1fr}
  .hero-content{padding:0 14px}
}
@media (max-width:640px){
  .container{padding:0 16px}
  .section{padding:46px 0}
  .hero{padding:46px 0 32px}
  .nav{overflow:auto}
  .office-suite-nav{display:none}
}
@media (prefers-color-scheme:dark){
  :root{
    --bg:#07130b; --bg-2:#0a1a12; --card:#07110b; --border:#12321a;
    --txt:#E6E8EE; --txt-2:#CDD3E1; --txt-3:#AAB3C7;
  }
}
  </style>
</head>
<body>
  <div class="progress-bar" id="progressBar"></div>

  <header class="header" id="mainHeader">
    <div class="header-container">
      <div class="logo">
        <div class="logo-icon"></div>
        <span>LibreOffice Calc</span>
      </div>

      <nav class="nav" aria-label="Navegación principal">
        <a href="#inicio" class="nav-item active">Inicio</a>
        <a href="#introduccion" class="nav-item">Introducción</a>
        <a href="#interfaz" class="nav-item">Interfaz</a>
        <a href="#funcionalidades" class="nav-item">Funcionalidades</a>
        <a href="#tutoriales" class="nav-item">Tutoriales</a>
        <a href="#atajos" class="nav-item">Atajos</a>
        <a href="#consejos" class="nav-item">Consejos</a>
      </nav>

      <div class="office-suite-nav" aria-hidden="false">
        <a href="Writer/writer.php" class="suite-item" title="Writer">
          <i class="icon-writer"></i> 
          <span>Writer</span>
        </a>
        <a href="calc.php" class="suite-item" title="Calc">
          <i class="icon-calc"></i>
          <span>Calc</span>
        </a>
        <a href="impress.php" class="suite-item" title="Impress">
          <i class="icon-impress"></i>
          <span>Impress</span>
        </a>
        <a href="draw.php" class="suite-item" title="Draw">
          <i class="icon-draw"></i>
          <span>Draw</span>
        </a>
      </div>
    </div>
  </header>

  <section class="hero" id="inicio" aria-label="Sección inicio">
    <div class="hero-content container">
      <h1>LibreOffice Calc</h1>
      <p>Hojas de cálculo poderosas con más de 400 funciones, soporte para macros y capacidad para procesar grandes volúmenes de datos. La alternativa gratuita y open source a Excel.</p>
      <div class="hero-image-placeholder" aria-hidden="true">
        <!-- Puedes cambiar por una imagen real: <img src="img/hero-calc.png" alt="LibreOffice Calc"> -->
        <div style="text-align:center;color:rgba(255,255,255,0.9);font-weight:800;">LibreOffice Calc — Guía Completa</div>
      </div>
      <a href="#introduccion" class="cta-button">
        <span>Comenzar Aprendizaje</span>
        <i class="icon-arrow-right"></i>
      </a>
    </div>
  </section>

  <!-- Introducción -->
  <section class="section intro-section" id="introduccion" aria-label="Introducción a Calc">
    <div class="container">
      <div class="section-title">
        <h2>¿Por qué LibreOffice Calc?</h2>
        <p>Una herramienta completa para análisis de datos, cálculos complejos y automatización mediante macros.</p>
      </div>

      <div class="intro-content">
        <div class="intro-image-section">
          <img src="img/calc.png" alt="Características Calc" class="intro-image" loading="lazy">
        </div>

        <div class="intro-text">
          <h3>Potencia sin límites para tus datos</h3>
          <p>LibreOffice Calc es una hoja de cálculo profesional que combina facilidad de uso con capacidades avanzadas. Desde análisis financiero hasta procesamiento de big data, Calc ofrece todas las herramientas necesarias para trabajar con datos de manera eficiente.</p>

          <h4>Características destacadas de Calc:</h4>
          <ul class="feature-list">
            <li><strong>+400 Funciones:</strong> Biblioteca extensa de funciones matemáticas, estadísticas, financieras y lógicas.</li>
            <li><strong>Macros y Automatización:</strong> Soporte completo para LibreOffice Basic, Python y otras extensiones de scripting.</li>
            <li><strong>Big Data:</strong> Manejo de hojas con más de 1 millón de filas y procesamiento optimizado de grandes conjuntos de datos.</li>
            <li><strong>Tablas Dinámicas:</strong> Análisis multidimensional con tablas dinámicas (Pivot Tables) intuitivas y potentes.</li>
            <li><strong>Compatibilidad Total:</strong> Importa y exporta archivos Excel (XLSX, XLS) con alta fidelidad.</li>
            <li><strong>Gráficos Avanzados:</strong> Más de 13 tipos de gráficos con personalización completa.</li>
          </ul>

          <p>Ideal para analistas de datos, contadores, científicos, estudiantes y cualquier profesional que trabaje con información numérica.</p>
        </div>
      </div>

      <div class="stats-grid" style="margin-top:20px;">
        <div class="stat-item">
          <span class="stat-number">400+</span>
          <span class="stat-label">Funciones integradas</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">1M+</span>
          <span class="stat-label">Filas por hoja</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">10,000+</span>
          <span class="stat-label">Columnas soportadas</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">100%</span>
          <span class="stat-label">Gratuito y Open Source</span>
        </div>
      </div>

    </div>
  </section>

  <!-- Interfaz -->
  <section class="section" id="interfaz" aria-label="Interfaz de Calc">
    <div class="container">
      <div class="section-title">
        <h2>Conociendo la Interfaz de Calc</h2>
        <p>Domina cada elemento de la interfaz para maximizar tu productividad.</p>
      </div>

      <div class="interface-content">
        <div class="interface-image-section">
          <img src="img/maxresdefault.jpg" alt="Interfaz Calc" class="interface-image" loading="lazy">
        </div>

        <div class="interface-elements">
          <div class="interface-card">
            <i class="icon-ribbon"></i>
            <h4>Barra de Herramientas y Menús</h4>
            <p>La barra de menús proporciona acceso a todas las funcionalidades: Archivo, Edición, Ver, Insertar, Formato, Herramientas, Datos y Ventana. La barra de herramientas ofrece accesos directos a las funciones más utilizadas.</p>
            <div class="interface-tips">
              <h5>Personalización:</h5>
              <ul>
                <li>Ver → Barras de herramientas para activar/desactivar paneles específicos.</li>
                <li>Herramientas → Personalizar para crear tus propios atajos y barras.</li>
                <li>Usa F11 para abrir el panel de Estilos y formateo rápido.</li>
              </ul>
            </div>
          </div>

          <div class="interface-card">
            <i class="icon-toolbar"></i>
            <h4>Barra de Fórmulas</h4>
            <p>El corazón de Calc. Aquí introduces y editas fórmulas. Incluye el Asistente de Funciones (botón fx) que te guía en la construcción de fórmulas complejas con más de 400 funciones categorizadas.</p>
            <div class="quick-access-tips">
              <h5>Tips para Fórmulas:</h5>
              <ul>
                <li>Usa Ctrl + Shift + A después del nombre de una función para insertar sus argumentos.</li>
                <li>El autocompletado sugiere funciones mientras escribes.</li>
                <li>F2 para editar una celda y ver las referencias con códigos de color.</li>
              </ul>
            </div>
          </div>

          <div class="interface-card">
            <i class="icon-ruler"></i>
            <h4>Área de Celdas y Referencias</h4>
            <p>La cuadrícula donde ingresas datos. Cada celda tiene una referencia única (ej: A1, B2). Puedes seleccionar rangos (A1:D10), columnas completas (A:A) o filas completas (1:1). Las hojas múltiples permiten organizar datos relacionados.</p>
            <div class="interface-tips">
              <h5>Navegación Eficiente:</h5>
              <ul>
                <li>Ctrl + Flechas para saltar entre bloques de datos.</li>
                <li>Ctrl + Home/End para ir al inicio/final de la hoja.</li>
                <li>Ctrl + AvPág/RePág para cambiar entre hojas.</li>
              </ul>
            </div>
          </div>

          <div class="interface-card">
            <i class="icon-status"></i>
            <h4>Barra de Estado y Estadísticas Rápidas</h4>
            <p>Ubicada en la parte inferior, muestra información sobre la selección actual: suma, promedio, conteo, máximo y mínimo. También indica el modo de entrada y la escala de zoom.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Funcionalidades -->
  <section class="section" id="funcionalidades" aria-label="Funcionalidades de Calc">
    <div class="container">
      <div class="section-title">
        <h2>Funcionalidades Principales de Calc 💚</h2>
        <p>Explora las capacidades que hacen de Calc una herramienta profesional para análisis de datos.</p>
      </div>

      <div class="cards-grid">
        <!-- Funciones -->
        <div class="card fade-in">
          <div class="card-image">
            <img src="IMG/formulas.jpg" alt="Funciones" class="card-img" loading="lazy">
          </div>
          <div class="card-icon"><i class="icon-edit"></i></div>
          <h3>Más de 400 Funciones Integradas</h3>
          <p>Calc ofrece una biblioteca completa de funciones organizadas por categorías: <strong>Matemáticas</strong> (SUMA, PRODUCTO, RAÍZ), <strong>Estadísticas</strong> (PROMEDIO, DESVEST, MEDIANA), <strong>Financieras</strong> (TIR, VAN, PAGO), <strong>Lógicas</strong> (SI, Y, O), <strong>Texto</strong> (CONCATENAR, IZQUIERDA, BUSCAR), <strong>Fecha y Hora</strong> (HOY, AHORA, DIASEM), y muchas más. Cada función incluye ayuda contextual y ejemplos.</p>
          <hr>
          <h4>Ejemplos prácticos y buenas prácticas</h4>
          <ul class="feature-list">
            <li><strong>SUMA condicional:</strong> <code>=SUMAR.SI(Rango; "Criterio"; RangoSuma)</code> — útil para sumar ventas por categoría.</li>
            <li><strong>BUSCARV (VLOOKUP):</strong> <code>=BUSCARV(clave; tabla; columna; 0)</code> — para unir tablas por una clave.</li>
            <li><strong>SI anidado:</strong> usa funciones SI con E y O para evitar fórmulas extremadamente largas; considera SWITCH donde sea posible.</li>
            <li><strong>Tabla de ayuda:</strong> usa Comentarios y Descripción de celdas para documentar fórmulas complejas.</li>
            <li><strong>Velocidad:</strong> evita fórmulas volátiles como AHORA() en hojas gigantes; recalcula solo cuando sea necesario.</li>
          </ul>
        </div>

        <!-- Macros ampliadas -->
        <div class="card fade-in">
          <div class="card-image">
            <img src="IMG/macros.jpg" alt="Macros" class="card-img" loading="lazy">
          </div>
          <div class="card-icon"><i class="icon-table"></i></div>
          <h3>Macros y Automatización Total</h3>
          <p>Automatiza tareas repetitivas con <strong>LibreOffice Basic</strong>, un lenguaje similar a VBA. Graba macros con Herramientas → Macros → Grabar Macro, o escribe código personalizado para procesos complejos. También soporta <strong>Python</strong> y extensiones JavaScript para automatización avanzada.</p>

          <hr>
          <h4>Guía práctica para empezar con macros</h4>
          <ol style="padding-left:18px;">
            <li><strong>Grabar una macro:</strong> Herramientas → Macros → Grabar Macro → realiza acciones → Detener → Guardar. Útil para tareas simples.</li>
            <li><strong>Editar la macro:</strong> Herramientas → Macros → Organizar macros → LibreOffice Basic → editar para ajustar y parametrizar.</li>
            <li><strong>Asignar a botón:</strong> Inserta → Botón de formulario → asigna la macro al evento "Al hacer clic".</li>
            <li><strong>Uso de Python:</strong> Coloca scripts en la carpeta de usuario o en la carpeta de la aplicación para integrarlos en el menú de macros.</li>
            <li><strong>Seguridad:</strong> Activa nivel adecuado en Herramientas → Opciones → LibreOffice → Seguridad → Seguridad de macros. Firma digitalmente macros críticas y evita automatizaciones de fuentes no confiables.</li>
          </ol>

          <h4>Ejemplo sencillo de LibreOffice Basic</h4>
          <pre style="white-space:pre-wrap;background:#f7f7f7;border-radius:8px;padding:10px;border:1px solid var(--border);font-size:.9rem;">
Sub SaludarUsuario
  Dim oDoc As Object, oSheet As Object, oCell As Object
  oDoc = ThisComponent
  oSheet = oDoc.Sheets(0)
  oCell = oSheet.getCellRangeByName("A1")
  oCell.String = "Hola desde una macro!"
End Sub
          </pre>
          <p>Este ejemplo escribe un texto en A1. Puedes adaptarlo para copiar rangos, exportar a CSV, o refrescar conexiones de datos.</p>
        </div>

        <!-- Automatización y Big Data -->
        <div class="card fade-in">
          <div class="card-image">
            <img src="IMG/bigdata.jpg" alt="Big Data" class="card-img" loading="lazy">
          </div>
          <div class="card-icon"><i class="icon-database"></i></div>
          <h3>Procesamiento de grandes conjuntos y conexiones</h3>
          <p>Calc puede trabajar con grandes volúmenes si optimizas estructura y evitas funciones volátiles. Usa conexiones a bases de datos (Base, ODBC, JDBC), y filtra/limpia datos antes de procesarlos en hojas.</p>
          <hr>
          <h4>Recomendaciones técnicas</h4>
          <ul class="feature-list">
            <li>Trabaja con tablas externas y usa filtros en la importación para traer sólo lo necesario.</li>
            <li>Divide datos en varias hojas o archivos y usa referencias consolidantes.</li>
            <li>Usa formatos binarios nativos (.ods) para mejor rendimiento frente a formatos intermedios.</li>
          </ul>
        </div>

      </div> <!-- end cards-grid -->

      <!-- SECCIÓN EXTENDIDA DE FUNCIONES Y MACROS (más contenido sin borrar) -->
      <div style="margin-top:18px;">
        <div class="card fade-in">
          <h3>Funciones Avanzadas y Casos de Uso</h3>
          <p>A continuación ampliamos sobre funciones clave y patrones de uso en escenarios reales:</p>
          <ul class="feature-list">
            <li><strong>Modelos financieros:</strong> combina <code>VNA</code>, <code>TIR</code>, <code>NPER</code> y <code>PAGO</code> para construir modelos de flujo de caja robustos.</li>
            <li><strong>Series temporales:</strong> usa funciones FECHA, DIFERENCIA, y herramientas de gráfico para analizar tendencias y estacionalidad.</li>
            <li><strong>Limpieza de datos:</strong> <code>ESPACIOS()</code>, <code>MAYUSC()</code>, <code>EXTRAE()</code> y expresiones regulares en buscar/reemplazar para normalizar textos.</li>
            <li><strong>Control de errores:</strong> usa <code>SI.ERROR()</code> para capturar errores en fórmulas y mostrar valores predeterminados o mensajes amigables.</li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- Tutoriales (extendidos, con imágenes reubicadas) -->
  <section class="section" id="tutoriales" aria-label="Tutoriales">
    <div class="container">
      <div class="section-title">
        <h2>Tutoriales Paso a Paso</h2>
        <p>Selecciona un tutorial y sigue las instrucciones paso a paso. Incluí imágenes simbólicas — reemplaza por capturas reales si quieres.</p>
      </div>

      <div class="tutorial-section fade-in">
        <div class="tutorial-list">
          <!-- Tutorial 1 -->
          <article class="card tutorial-card">
            <div class="tutorial-image" style="background:linear-gradient(90deg, rgba(34,139,34,.06), rgba(41,136,153,.04));">
              <img src="img/tutorial_basico.png" alt="Crear primera hoja" style="max-height:140px; object-fit:contain" loading="lazy">
              <div class="tutorial-overlay">
                <div class="icon-play" aria-hidden="true">▶</div>
              </div>
            </div>
            <div class="tutorial-content">
              <div class="tutorial-meta">
                <span class="difficulty-badge difficulty-beginner">Principiante</span>
                <span>⏱️ 10 min</span>
              </div>
              <h3>Crear tu Primera Hoja de Cálculo</h3>
              <p>Aprende los conceptos básicos: ingresar datos, usar fórmulas simples (SUMA, PROMEDIO), dar formato a celdas y guardar tu trabajo. Ideal para comenzar.</p>
              <h4>Pasos</h4>
              <ol style="padding-left:18px">
                <li>Abrir Calc → Archivo → Nuevo → Hoja de cálculo.</li>
                <li>Ingresar títulos en la fila 1 y datos debajo.</li>
                <li>Usar <code>=SUMA(B2:B10)</code> para totalizar una columna.</li>
                <li>Formato: selecciona rango → Formato → Celdas → Número / Estilo.</li>
                <li>Guardar: Archivo → Guardar como → elige .ods.</li>
              </ol>
            </div>
          </article>

          <!-- Tutorial 2 -->
          <article class="card tutorial-card">
            <div class="tutorial-image" style="background:linear-gradient(90deg, rgba(41,136,153,.05), rgba(34,139,34,.02));">
              <img src="img/tutorial_presupuesto.png" alt="Presupuesto" style="max-height:140px; object-fit:contain" loading="lazy">
            </div>
            <div class="tutorial-content">
              <div class="tutorial-meta">
                <span class="difficulty-badge difficulty-intermediate">Intermedio</span>
                <span>⏱️ 25 min</span>
              </div>
              <h3>Crear un Presupuesto Personal</h3>
              <p>Diseña un presupuesto mensual: categorías, ingresos y balance automático. Usa SI, SUMAR.SI y crea gráficos para visualizar tus finanzas.</p>
              <h4>Puntos clave</h4>
              <ul style="padding-left:18px">
                <li>Organiza columnas: Fecha, Categoría, Descripción, Monto, Tipo (Ingreso/Gasto).</li>
                <li>Usa <code>=SUMAR.SI(CategoriaRange; "Alquiler"; MontoRange)</code> para totales por categoría.</li>
                <li>Inserta un gráfico de pastel para distribución de gastos: Insertar → Gráfico.</li>
              </ul>
            </div>
          </article>

          <!-- Tutorial 3 -->
          <article class="card tutorial-card">
            <div class="tutorial-image" style="background:linear-gradient(90deg, rgba(34,139,34,.04), rgba(41,136,153,.04));">
              <img src="img/tutorial_pivots.png" alt="Tablas dinámicas" style="max-height:140px; object-fit:contain" loading="lazy">
            </div>
            <div class="tutorial-content">
              <div class="tutorial-meta">
                <span class="difficulty-badge difficulty-intermediate">Intermedio</span>
                <span>⏱️ 30 min</span>
              </div>
              <h3>Análisis de Ventas con Tablas Dinámicas</h3>
              <p>Importa datos de ventas, crea una tabla dinámica para analizar por producto, región y período. Genera gráficos y filtros.</p>
              <h4>Ejemplo rápido</h4>
              <ol style="padding-left:18px">
                <li>Datos → Tabla dinámica → Selecciona rango → Crear desde selección.</li>
                <li>Arrastra "Producto" a filas, "Región" a columnas, "Ventas" a valores (suma).</li>
                <li>Aplica filtros por fecha o canal para segmentar.</li>
              </ol>
            </div>
          </article>

          <!-- Tutorial 4 -->
          <article class="card tutorial-card">
            <div class="tutorial-image" style="background:linear-gradient(90deg, rgba(41,136,153,.05), rgba(34,139,34,.02));">
              <img src="img/tutorial_buscarv.png" alt="BUSCARV y BUSCARH" style="max-height:140px; object-fit:contain" loading="lazy">
            </div>
            <div class="tutorial-content">
              <div class="tutorial-meta">
                <span class="difficulty-badge difficulty-advanced">Avanzado</span>
                <span>⏱️ 40 min</span>
              </div>
              <h3>Funciones de Búsqueda: BUSCARV y BUSCARH</h3>
              <p>Domina BUSCARV/BUSCARH para relacionar tablas — alternativa: usa INDICE + COINCIDIR para mayor flexibilidad y evitar limitaciones de BUSCARV.</p>
              <h4>Alternativa robusta</h4>
              <pre style="white-space:pre-wrap;background:#f7f7f7;border-radius:8px;padding:10px;border:1px solid var(--border);font-size:.9rem;">
=INDICE(RangoColumnaResultado; COINCIDIR(Clave; RangoColumnaClave; 0))
              </pre>
            </div>
          </article>

          <!-- Tutorial 5 -->
          <article class="card tutorial-card">
            <div class="tutorial-image" style="background:linear-gradient(90deg, rgba(34,139,34,.04), rgba(41,136,153,.04));">
              <img src="img/tutorial_macros.png" alt="Automatización con Macros" style="max-height:140px; object-fit:contain" loading="lazy">
            </div>
            <div class="tutorial-content">
              <div class="tutorial-meta">
                <span class="difficulty-badge difficulty-advanced">Avanzado</span>
                <span>⏱️ 50 min</span>
              </div>
              <h3>Automatización con Macros</h3>
              <p>Graba y edita macros, asigna a botones y crea flujos de trabajo automatizados. Recomendado para reportes periódicos o limpieza de datos.</p>
              <h4>Ejercicio práctico</h4>
              <ol style="padding-left:18px">
                <li>Graba una macro que filtre datos y copie el resultado a otra hoja.</li>
                <li>Detén y guarda la macro, luego edítala para parametrizar la hoja destino.</li>
                <li>Asigna la macro a un botón en la interfaz para ejecutarla con un clic.</li>
              </ol>
            </div>
          </article>

          <!-- Tutorial 6: Gráficos -->
          <article class="card tutorial-card">
            <div class="tutorial-image" style="background:linear-gradient(90deg, rgba(41,136,153,.05), rgba(34,139,34,.02));">
              <img src="img/tutorial_charts.png" alt="Gráficos" style="max-height:140px; object-fit:contain" loading="lazy">
            </div>
            <div class="tutorial-content">
              <div class="tutorial-meta">
                <span class="difficulty-badge difficulty-intermediate">Intermedio</span>
                <span>⏱️ 35 min</span>
              </div>
              <h3>Gráficos Avanzados y Visualización de Datos</h3>
              <p>Crea gráficos combinados, de dispersión con líneas de tendencia y dashboards interactivos. Personaliza ejes, leyendas y series de datos.</p>
              <h4>Consejo</h4>
              <p>Usa "Editar serie" y "Formato de ejes" para ajustar escalas y mejorar la legibilidad. Considera usar mini-gráficos posicionados sobre celdas para dashboards compactos.</p>
            </div>
          </article>

        </div>
      </div>

      <!-- Retos colocados abajo de tutoriales y funciones -->
      <div class="section-title" style="margin-top:22px">
        <h2>Retos y Ejercicios</h2>
        <p>Practica lo aprendido con estos retos, van desde principiante hasta avanzado.</p>
      </div>

      <div class="challenges">
        <div class="challenge-card">
          <h4>Reto 1 — Nivel Principiante</h4>
          <p>Crea una hoja con tu presupuesto mensual, usa SUMA para calcular totales y crea un gráfico de pastel para la distribución de gastos.</p>
        </div>
        <div class="challenge-card">
          <h4>Reto 2 — Nivel Intermedio</h4>
          <p>Importa un CSV con ventas, crea una tabla dinámica por producto y región, y calcula el top 5 de productos con mayor facturación.</p>
        </div>
        <div class="challenge-card">
          <h4>Reto 3 — Nivel Avanzado</h4>
          <p>Graba una macro que filtre las ventas del mes actual, copie los resultados a una hoja nueva y exporte ese reporte como CSV automáticamente.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Atajos -->
  <section class="section" id="atajos" aria-label="Atajos de teclado">
    <div class="container">
      <div class="section-title">
        <h2>Atajos de Teclado Esenciales ⌨️</h2>
        <p>Aumenta tu velocidad de trabajo con estos atajos imprescindibles.</p>
      </div>

      <div class="shortcuts-category">
        <h3>Navegación y Selección</h3>
        <div class="shortcuts-grid">
          <div class="shortcut-card">
            <div class="shortcut-header">
              <i class="icon-keyboard"></i>
              <h4>Movimiento Rápido</h4>
            </div>
            <div class="shortcuts-list">
              <div class="shortcut-item">
                <span>Ir al inicio de la hoja</span>
                <span class="shortcut-keys">Ctrl + Home</span>
              </div>
              <div class="shortcut-item">
                <span>Ir al final de datos</span>
                <span class="shortcut-keys">Ctrl + End</span>
              </div>
              <div class="shortcut-item">
                <span>Saltar a siguiente bloque</span>
                <span class="shortcut-keys">Ctrl + ←↑→↓</span>
              </div>
              <div class="shortcut-item">
                <span>Cambiar de hoja</span>
                <span class="shortcut-keys">Ctrl + AvPág/RePág</span>
              </div>
            </div>
          </div>

          <div class="shortcut-card">
            <div class="shortcut-header">
              <i class="icon-select"></i>
              <h4>Selección Avanzada</h4>
            </div>
            <div class="shortcuts-list">
              <div class="shortcut-item">
                <span>Seleccionar todo</span>
                <span class="shortcut-keys">Ctrl + A</span>
              </div>
              <div class="shortcut-item">
                <span>Seleccionar fila completa</span>
                <span class="shortcut-keys">Shift + Espacio</span>
              </div>
              <div class="shortcut-item">
                <span>Seleccionar columna completa</span>
                <span class="shortcut-keys">Ctrl + Espacio</span>
              </div>
              <div class="shortcut-item">
                <span>Extender selección</span>
                <span class="shortcut-keys">Shift + ←↑→↓</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="shortcuts-category">
        <h3>Edición y Fórmulas</h3>
        <div class="shortcuts-grid">
          <div class="shortcut-card">
            <div class="shortcut-header">
              <i class="icon-formula"></i>
              <h4>Trabajo con Fórmulas</h4>
            </div>
            <div class="shortcuts-list">
              <div class="shortcut-item">
                <span>Editar celda</span>
                <span class="shortcut-keys">F2</span>
              </div>
              <div class="shortcut-item">
                <span>Insertar función</span>
                <span class="shortcut-keys">Ctrl + F2</span>
              </div>
              <div class="shortcut-item">
                <span>Referencia absoluta ($)</span>
                <span class="shortcut-keys">Shift + F4</span>
              </div>
              <div class="shortcut-item">
                <span>Recalcular todo</span>
                <span class="shortcut-keys">Ctrl + Shift + F9</span>
              </div>
            </div>
          </div>

          <div class="shortcut-card">
            <div class="shortcut-header">
              <i class="icon-edit"></i>
              <h4>Edición Rápida</h4>
            </div>
            <div class="shortcuts-list">
              <div class="shortcut-item">
                <span>Copiar</span>
                <span class="shortcut-keys">Ctrl + C</span>
              </div>
              <div class="shortcut-item">
                <span>Pegar</span>
                <span class="shortcut-keys">Ctrl + V</span>
              </div>
              <div class="shortcut-item">
                <span>Pegar especial</span>
                <span class="shortcut-keys">Ctrl + Shift + V</span>
              </div>
              <div class="shortcut-item">
                <span>Deshacer</span>
                <span class="shortcut-keys">Ctrl + Z</span>
              </div>
            </div>
          </div>

          <div class="shortcut-card">
            <div class="shortcut-header">
              <i class="icon-cell"></i>
              <h4>Celdas y Filas</h4>
            </div>
            <div class="shortcuts-list">
              <div class="shortcut-item">
                <span>Insertar fila</span>
                <span class="shortcut-keys">Ctrl + +</span>
              </div>
              <div class="shortcut-item">
                <span>Eliminar fila</span>
                <span class="shortcut-keys">Ctrl + -</span>
              </div>
              <div class="shortcut-item">
                <span>Rellenar hacia abajo</span>
                <span class="shortcut-keys">Ctrl + D</span>
              </div>
              <div class="shortcut-item">
                <span>Rellenar hacia derecha</span>
                <span class="shortcut-keys">Ctrl + R</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="shortcuts-category">
        <h3>Formato y Visualización</h3>
        <div class="shortcuts-grid">
          <div class="shortcut-card">
            <div class="shortcut-header">
              <i class="icon-format"></i>
              <h4>Formato de Texto</h4>
            </div>
            <div class="shortcuts-list">
              <div class="shortcut-item">
                <span>Negrita</span>
                <span class="shortcut-keys">Ctrl + B</span>
              </div>
              <div class="shortcut-item">
                <span>Cursiva</span>
                <span class="shortcut-keys">Ctrl + I</span>
              </div>
              <div class="shortcut-item">
                <span>Subrayado</span>
                <span class="shortcut-keys">Ctrl + U</span>
              </div>
              <div class="shortcut-item">
                <span>Formato de celda</span>
                <span class="shortcut-keys">Ctrl + 1</span>
              </div>
            </div>
          </div>

          <div class="shortcut-card">
            <div class="shortcut-header">
              <i class="icon-view"></i>
              <h4>Visualización</h4>
            </div>
            <div class="shortcuts-list">
              <div class="shortcut-item">
                <span>Panel de estilos</span>
                <span class="shortcut-keys">F11</span>
              </div>
              <div class="shortcut-item">
                <span>Buscar y reemplazar</span>
                <span class="shortcut-keys">Ctrl + H</span>
              </div>
              <div class="shortcut-item">
                <span>Imprimir</span>
                <span class="shortcut-keys">Ctrl + P</span>
              </div>
              <div class="shortcut-item">
                <span>Vista previa</span>
                <span class="shortcut-keys">Ctrl + Shift + O</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Consejos -->
  <section class="section" id="consejos" aria-label="Consejos y trucos">
    <div class="container">
      <div class="section-title">
        <h2>Consejos y Trucos Profesionales 💡</h2>
        <p>Técnicas avanzadas para aprovechar al máximo LibreOffice Calc.</p>
      </div>

      <div class="tips-container">
        <div class="tip-card fade-in">
          <div class="tip-image" style="display:flex;align-items:center;justify-content:center;font-size:2.5rem;opacity:0.3;">🎯</div>
          <div class="tip-header">
            <div class="tip-icon">💡</div>
            <h3 class="tip-title">Usa Nombres de Rango</h3>
          </div>
          <p>En lugar de usar referencias como A1:A10, asigna nombres descriptivos a tus rangos (Hoja → Rangos y Expresiones con Nombres → Definir). Así tus fórmulas serán más legibles: <code>=SUMA(Ventas)</code>.</p>
        </div>

        <div class="tip-card fade-in">
          <div class="tip-image" style="display:flex;align-items:center;justify-content:center;font-size:2.5rem;opacity:0.3;">⚡</div>
          <div class="tip-header">
            <div class="tip-icon">💡</div>
            <h3 class="tip-title">Relleno Automático Inteligente</h3>
          </div>
          <p>Calc detecta patrones automáticamente. Escribe "Enero" y arrastra el controlador de relleno: completará todos los meses. Doble clic en el controlador rellena hasta el final de los datos adyacentes.</p>
        </div>

        <div class="tip-card fade-in">
          <div class="tip-image" style="display:flex;align-items:center;justify-content:center;font-size:2.5rem;opacity:0.3;">🔒</div>
          <div class="tip-header">
            <div class="tip-icon">💡</div>
            <h3 class="tip-title">Protege tus Fórmulas</h3>
          </div>
          <p>Bloquea celdas con fórmulas importantes para evitar modificaciones accidentales. Selecciona las celdas de datos → Formato → Celdas → Protección → Desmarcar "Protegido". Luego Herramientas → Proteger Hoja.</p>
        </div>

        <div class="tip-card fade-in">
          <div class="tip-image" style="display:flex;align-items:center;justify-content:center;font-size:2.5rem;opacity:0.3;">📋</div>
          <div class="tip-header">
            <div class="tip-icon">💡</div>
            <h3 class="tip-title">Transponer Datos Rápidamente</h3>
          </div>
          <p>Convierte filas en columnas y viceversa con Pegar Especial. Copia el rango → clic derecho en destino → Pegar Especial → marca "Transponer".</p>
        </div>

        <div class="tip-card fade-in">
          <div class="tip-image" style="display:flex;align-items:center;justify-content:center;font-size:2.5rem;opacity:0.3;">🔍</div>
          <div class="tip-header">
            <div class="tip-icon">💡</div>
            <h3 class="tip-title">Filtros Avanzados</h3>
          </div>
          <p>Los filtros avanzados permiten condiciones complejas con múltiples criterios y comodines. Define un área de criterios y usa Datos → Filtro Estándar.</p>
        </div>

        <div class="tip-card fade-in">
          <div class="tip-image" style="display:flex;align-items:center;justify-content:center;font-size:2.5rem;opacity:0.3;">📊</div>
          <div class="tip-header">
            <div class="tip-icon">💡</div>
            <h3 class="tip-title">Minigráficos en Celdas</h3>
          </div>
          <p>Aunque Calc no tiene minigráficos nativos como Excel, puedes crear gráficos pequeños y posicionarlos sobre celdas, o usar símbolos UNICODE con formato condicional para crear representaciones visuales compactas de tendencias.</p>
        </div>

        <div class="tip-card fade-in">
          <div class="tip-image" style="display:flex;align-items:center;justify-content:center;font-size:2.5rem;opacity:0.3;">💾</div>
          <div class="tip-header">
            <div class="tip-icon">💡</div>
            <h3 class="tip-title">Autoguardado y Versiones</h3>
          </div>
          <p>Activa el autoguardado en Herramientas → Opciones → Cargar/Guardar → General. Calc guarda versiones anteriores: Archivo → Versiones te permite recuperar estados previos.</p>
        </div>

        <div class="tip-card fade-in">
          <div class="tip-image" style="display:flex;align-items:center;justify-content:center;font-size:2.5rem;opacity:0.3;">🌐</div>
          <div class="tip-header">
            <div class="tip-icon">💡</div>
            <h3 class="tip-title">Importar Datos Web</h3>
          </div>
          <p>Importa tablas desde páginas web: Hoja → Insertar Hoja desde Archivo → ingresa URL. Actualiza los datos con clic derecho → Actualizar Rango.</p>
        </div>

        <div class="tip-card fade-in">
          <div class="tip-image" style="display:flex;align-items:center;justify-content:center;font-size:2.5rem;opacity:0.3;">🎨</div>
          <div class="tip-header">
            <div class="tip-icon">💡</div>
            <h3 class="tip-title">Plantillas Personalizadas</h3>
          </div>
          <p>Crea plantillas: diseña tu formato, fórmulas y estilos → Archivo → Plantillas → Guardar como Plantilla. Luego Archivo → Nuevo → Plantillas para reutilizar tu diseño.</p>
        </div>
      </div>

    </div>
  </section>

 <!-- ======== FOOTER ======== -->
<footer style="background: linear-gradient(90deg, #5a2d82, #2ecc71); color: #fff; text-align: center; padding: 40px 0; margin-top: 80px; border-top: 3px solid #ffffff44;">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
    <h2 style="font-size: 1.8em; margin-bottom: 15px;">🌿 Aprende más sobre LibreOffice Calc</h2>
    <p style="font-size: 1.1em; line-height: 1.6; margin-bottom: 25px;">
      Explora más recursos, guías oficiales, foros y comunidades donde podrás seguir aprendiendo sobre el uso de
      funciones, macros y análisis de datos con LibreOffice Calc.
    </p>

    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; margin-bottom: 25px;">
      <a href="https://www.libreoffice.org/" target="_blank" style="background: #ffffff22; color: #fff; padding: 12px 25px; border-radius: 30px; text-decoration: none; transition: 0.3s;">
        🌐 Sitio oficial LibreOffice
      </a>
      <a href="https://help.libreoffice.org/latest/es/text/scalc/main0000.html" target="_blank" style="background: #ffffff22; color: #fff; padding: 12px 25px; border-radius: 30px; text-decoration: none; transition: 0.3s;">
        📘 Documentación de Calc
      </a>
      <a href="https://ask.libreoffice.org/" target="_blank" style="background: #ffffff22; color: #fff; padding: 12px 25px; border-radius: 30px; text-decoration: none; transition: 0.3s;">
        💬 Foro de usuarios
      </a>
      <a href="https://www.youtube.com/@libreoffice" target="_blank" style="background: #ffffff22; color: #fff; padding: 12px 25px; border-radius: 30px; text-decoration: none; transition: 0.3s;">
        ▶️ Canal de YouTube
      </a>
      <a href="https://es.libreoffice.org/descarga/libreoffice/" target="_blank" style="background: #ffffff22; color: #fff; padding: 12px 25px; border-radius: 30px; text-decoration: none; transition: 0.3s;">
        ⬇️ Descargar LibreOffice
      </a>
    </div>

    <a href="#top" style="display: inline-block; background: #fff; color: #2ecc71; font-weight: bold; padding: 10px 20px; border-radius: 25px; text-decoration: none; transition: 0.3s;">
      ⬆️ Volver arriba
    </a>

    <p style="margin-top: 25px; font-size: 0.9em; color: #eee;">
      © 2025 Guía LibreOffice Calc - Proyecto educativo Aurora Lite. Todos los derechos reservados.
    </p>
  </div>
</footer>

  <!-- Botón volver arriba -->
  <button class="back-to-top" id="backToTop" aria-label="Volver arriba">⬆️ Volver arriba</button>

  <script>
    /* -------------------------
       Interacciones y mejoras JS
       ------------------------- */

    // Progress bar
    window.addEventListener('scroll', () => {
      const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
      document.getElementById('progressBar').style.width = scrolled + '%';
    });

    // Header scroll effect (arreglado: usamos el id existente mainHeader)
    const header = document.getElementById('mainHeader');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    // Fade-in animation con IntersectionObserver
    const observerOptions = {
      threshold: 0.12,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
        }
      });
    }, observerOptions);

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
    document.querySelectorAll('.card.fade-in').forEach(el => observer.observe(el));
    document.querySelectorAll('.tip-card.fade-in').forEach(el => observer.observe(el));

    // Active nav item on scroll
    const sections = document.querySelectorAll('section[id]');
    const navItems = document.querySelectorAll('.nav-item');

    function setActiveNav() {
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.scrollY >= (sectionTop - 200)) {
          current = section.getAttribute('id');
        }
      });

      navItems.forEach(item => {
        item.classList.remove('active');
        const href = item.getAttribute('href');
        if (href === `#${current}`) {
          item.classList.add('active');
        }
      });
    }

    window.addEventListener('scroll', setActiveNav);
    window.addEventListener('resize', setActiveNav);
    setActiveNav();

    // Back to top button
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        backToTop.classList.add('show');
      } else {
        backToTop.classList.remove('show');
      }
    });
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Smooth anchor links (improve nav click behavior)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          history.pushState(null, '', this.getAttribute('href'));
        }
      });
    });

    // Accessibility: keyboard support for back to top (Enter)
    backToTop.addEventListener('keyup', (e) => {
      if (e.key === 'Enter') backToTop.click();
    });

    // Ensure images with missing source show a subtle placeholder (prevents layout shift)
    document.querySelectorAll('img').forEach(img => {
      img.addEventListener('error', () => {
        img.style.opacity = '0.6';
        img.style.filter = 'grayscale(.4)';
        img.alt = img.alt || 'Imagen no disponible';
        // keep the element but show alt text if desired
      });
    });

    // Small enhancement: add "target=_blank" to external links in footer (if any)
    document.querySelectorAll('.footer-section a').forEach(a => {
      a.setAttribute('target', '_blank');
      a.setAttribute('rel', 'noopener noreferrer');
    });

    // Finish: trigger initial fade-in for hero
    document.querySelectorAll('.hero, .section-title').forEach(el => {
      setTimeout(() => el.classList.add('in'), 120);
    });
  </script>
</body>
</html>