<?php
// index.php — Guía HTML compacta en una sola página
// -------------------------------------------------

// Configuración básica
$site = [
  'title' => 'Guía Rápida de HTML',
  'description' => 'Referencia práctica de HTML con ejemplos breves y un menú lateral.',
];

// Utilidad para imprimir bloques de código escapados
function codeblock(string $lang, string $code): string {
  $escaped = htmlspecialchars($code, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
  return <<<HTML
  <div class="code">
    <button class="copy" data-code="$escaped" aria-label="Copiar código">Copiar</button>
    <pre><code class="language-$lang">$escaped</code></pre>
  </div>
  HTML;
}

// Contenido de secciones (id, título, html explicativo, ejemplo de código y ejemplo renderizado opcional)
$sections = [

  [
    'id' => 'introduccion',
    'title' => 'Introducción',
    'html' => '<p><strong>HTML</strong> (HyperText Markup Language) define la estructura de las páginas web mediante etiquetas. Normalmente se combina con <em>CSS</em> para estilos y <em>JavaScript</em> para interactividad.</p>
               <p>Un documento mínimo siempre declara el tipo de documento (<code>&lt;!doctype html&gt;</code>) y contiene las secciones <code>&lt;head&gt;</code> y <code>&lt;body&gt;</code>.</p>',
    'code' => "<!doctype html>\n<html lang=\"es\">\n  <head>\n    <meta charset=\"utf-8\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n    <title>Mi primera página</title>\n  </head>\n  <body>\n    <h1>¡Hola, mundo!</h1>\n    <p>Esta es mi primera página HTML.</p>\n  </body>\n</html>",
    'render' => '<h1 style="margin:0">¡Hola, mundo!</h1><p style="margin-top:.25rem">Esta es mi primera página HTML.</p>',
  ],

  [
    'id' => 'estructura',
    'title' => 'Estructura básica',
    'html' => '<p>La estructura básica incluye metadatos (codificación, viewport, título) y contenido visible en <code>&lt;body&gt;</code>.</p>',
    'code' => "<!doctype html>\n<html lang=\"es\">\n<head>\n  <meta charset=\"utf-8\">\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n  <title>Título de la página</title>\n</head>\n<body>\n  <header>Encabezado del sitio</header>\n  <main>Contenido principal</main>\n  <footer>Pie de página</footer>\n</body>\n</html>",
    'render' => '<header>Encabezado del sitio</header><main>Contenido principal</main><footer>Pie de página</footer>',
  ],

  [
    'id' => 'etiquetas-comunes',
    'title' => 'Etiquetas comunes',
    'html' => '<ul>
      <li><code>&lt;h1&gt;...&lt;h6&gt;</code>: encabezados.</li>
      <li><code>&lt;p&gt;</code>: párrafos.</li>
      <li><code>&lt;a href&gt;</code>: enlaces.</li>
      <li><code>&lt;img src alt&gt;</code>: imágenes (siempre incluye <code>alt</code>).</li>
      <li><code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code>: énfasis.</li>
    </ul>',
    'code' => "<h1>Título</h1>\n<p>Texto con <strong>fuerza</strong> y <em>énfasis</em>. Visita <a href=\"https://example.com\">mi sitio</a>.</p>\n<img src=\"https://via.placeholder.com/160x90\" alt=\"Ejemplo\" />",
    'render' => '<h1 style="margin:0">Título</h1><p>Texto con <strong>fuerza</strong> y <em>énfasis</em>. Visita <a href="https://example.com" target="_blank" rel="noopener">mi sitio</a>.</p><img src="https://via.placeholder.com/160x90" alt="Ejemplo" />',
  ],

  [
    'id' => 'atributos',
    'title' => 'Atributos',
    'html' => '<p>Los atributos agregan información o comportamiento a las etiquetas: <code>href</code>, <code>src</code>, <code>alt</code>, <code>id</code>, <code>class</code>, <code>title</code>, etc.</p>',
    'code' => "<a href=\"/contacto\" title=\"Ir a contacto\" class=\"boton\" id=\"cta-contacto\">Contáctanos</a>",
    'render' => '<a href="#" title="Ir a contacto" class="chip">Contáctanos</a>',
  ],

  [
    'id' => 'enlaces',
    'title' => 'Enlaces',
    'html' => '<p>Usa <code>&lt;a href&gt;</code> para navegar. Para abrir en nueva pestaña: <code>target=&quot;_blank&quot;</code> con <code>rel=&quot;noopener&quot;</code>.</p>',
    'code' => "<a href=\"https://developer.mozilla.org/\" target=\"_blank\" rel=\"noopener\">MDN Web Docs</a>",
    'render' => '<a href="https://developer.mozilla.org/" target="_blank" rel="noopener" class="chip">MDN Web Docs</a>',
  ],

  [
    'id' => 'imagenes',
    'title' => 'Imágenes',
    'html' => '<p><code>alt</code> describe la imagen para accesibilidad y casos en que no cargue.</p>',
    'code' => "<img src=\"https://via.placeholder.com/300x180\" alt=\"Paisaje de ejemplo\">",
    'render' => '<img src="https://via.placeholder.com/300x180" alt="Paisaje de ejemplo" />',
  ],

  [
    'id' => 'listas',
    'title' => 'Listas',
    'html' => '<p>Listas ordenadas <code>&lt;ol&gt;</code> y no ordenadas <code>&lt;ul&gt;</code> con elementos <code>&lt;li&gt;</code>.</p>',
    'code' => "<ul>\n  <li>Elemento A</li>\n  <li>Elemento B</li>\n</ul>\n<ol>\n  <li>Paso 1</li>\n  <li>Paso 2</li>\n</ol>",
    'render' => '<ul><li>Elemento A</li><li>Elemento B</li></ul><ol><li>Paso 1</li><li>Paso 2</li></ol>',
  ],

  [
    'id' => 'tablas',
    'title' => 'Tablas',
    'html' => '<p>Usa <code>&lt;table&gt;</code> con <code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, <code>&lt;tr&gt;</code>, <code>&lt;th&gt;</code> y <code>&lt;td&gt;</code>. Añade <code>scope</code> a los encabezados para accesibilidad.</p>',
    'code' => "<table>\n  <thead>\n    <tr><th scope=\"col\">Nombre</th><th scope=\"col\">Edad</th></tr>\n  </thead>\n  <tbody>\n    <tr><td>Ana</td><td>28</td></tr>\n    <tr><td>Luis</td><td>31</td></tr>\n  </tbody>\n</table>",
    'render' => '<table class="demo"><thead><tr><th scope="col">Nombre</th><th scope="col">Edad</th></tr></thead><tbody><tr><td>Ana</td><td>28</td></tr><tr><td>Luis</td><td>31</td></tr></tbody></table>',
  ],

  [
    'id' => 'formularios',
    'title' => 'Formularios',
    'html' => '<p>Los formularios se construyen con <code>&lt;form&gt;</code> y controles como <code>&lt;input&gt;</code>, <code>&lt;label&gt;</code>, <code>&lt;select&gt;</code>, <code>&lt;textarea&gt;</code>. Usa <code>for</code>/<code>id</code> para asociar etiquetas y campos.</p>',
    'code' => "<form action=\"/buscar\" method=\"get\">\n  <label for=\"q\">Buscar</label>\n  <input id=\"q\" name=\"q\" type=\"search\" placeholder=\"Término...\" required>\n  <button type=\"submit\">Enviar</button>\n</form>",
    'render' => '<form action="#" method="get"><label for="q-demo">Buscar</label> <input id="q-demo" name="q" type="search" placeholder="Término..." required> <button type="button">Enviar</button></form>',
  ],

  [
    'id' => 'semantica',
    'title' => 'Etiquetas semánticas',
    'html' => '<p>Etiquetas como <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;aside&gt;</code> y <code>&lt;footer&gt;</code> describen el rol del contenido.</p>',
    'code' => "<main>\n  <article>\n    <h2>Noticia</h2>\n    <p>Contenido del artículo...</p>\n  </article>\n  <aside>Relacionado</aside>\n</main>",
    'render' => '<main><article><h3 style="margin:0">Noticia</h3><p>Contenido del artículo...</p></article><aside class="muted">Relacionado</aside></main>',
  ],

  [
    'id' => 'multimedia',
    'title' => 'Multimedia',
    'html' => '<p><code>&lt;audio&gt;</code> y <code>&lt;video&gt;</code> permiten reproducir medios, con atributos como <code>controls</code>, <code>autoplay</code>, <code>loop</code>.</p>',
    'code' => "<video controls width=\"320\">\n  <source src=\"movie.mp4\" type=\"video/mp4\">\n  Tu navegador no soporta el video.\n</video>",
    'render' => '<div class="box">[Video con <code>controls</code> (ejemplo)]</div>',
  ],

  [
    'id' => 'buenas-practicas',
    'title' => 'Buenas prácticas',
    'html' => '<ul>
      <li>Siempre define <code>lang</code> en <code>&lt;html&gt;</code> (por ejemplo, <code>lang="es"</code>).</li>
      <li>Incluye <code>alt</code> en imágenes.</li>
      <li>Usa encabezados jerárquicos (<code>h1</code> → <code>h2</code> → <code>h3</code>...).</li>
      <li>Valida tu HTML y cuida la accesibilidad (contraste, etiquetas, foco).</li>
    </ul>',
    'code' => "<!-- Checklist rápido -->\n<html lang=\"es\">\n  <!-- ... -->\n  <img src=\"logo.png\" alt=\"Logotipo de la empresa\">\n  <h1>Título principal</h1>\n  <h2>Sección</h2>\n</html>",
    'render' => '<ul class="check"><li>lang="es"</li><li>alt en imágenes</li><li>Jerarquía de encabezados</li><li>Accesibilidad básica</li></ul>',
  ],

];

// Comienza la salida HTML
?><!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($site['title']) ?></title>
  <meta name="description" content="<?= htmlspecialchars($site['description']) ?>">
  <style>
    :root{
      --bg:#0b0c10; --panel:#121318; --ink:#e8e8ea; --muted:#a9abb3;
      --accent:#6ee7b7; --accent-2:#60a5fa; --border:#23242c; --code:#0f111a;
    }
    *{box-sizing:border-box}
    html,body{margin:0;height:100%;color:var(--ink);background:linear-gradient(180deg, #0b0c10, #0f1115);}
    body{font-family: ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,'Helvetica Neue','Noto Sans',Arial,'Apple Color Emoji','Segoe UI Emoji'; line-height:1.6}
    a{color:var(--accent-2);text-decoration:none}
    a:hover{text-decoration:underline}
    header.top{
      position:sticky;top:0;z-index:10;background:rgba(11,12,16,.7);backdrop-filter:blur(8px);
      border-bottom:1px solid var(--border); padding:.75rem 1rem; display:flex; gap:1rem; align-items:center
    }
    .brand{font-weight:800;letter-spacing:.5px}
    .brand span{color:var(--accent)}
    .shell{display:grid; grid-template-columns: 270px 1fr; min-height:calc(100vh - 56px)}
    nav.side{border-right:1px solid var(--border); background:var(--panel); padding:1rem; position:sticky; top:56px; height:calc(100vh - 56px); overflow:auto}
    nav .search{display:flex;gap:.5rem}
    input[type="search"]{width:100%; padding:.6rem .8rem; border:1px solid var(--border); border-radius:.6rem; background:#0e1016; color:var(--ink)}
    ul.menu{list-style:none; padding:0; margin:.75rem 0 0 0}
    ul.menu li{margin:.15rem 0}
    ul.menu a{display:block; padding:.45rem .5rem; border-radius:.5rem; color:var(--ink)}
    ul.menu a:hover{background:#0f1219}
    main{padding:2rem; display:grid; gap:2rem}
    section.card{background:var(--panel); border:1px solid var(--border); border-radius:1rem; padding:1.25rem 1.25rem}
    section.card h2{margin:.2rem 0 0 0; font-size:1.4rem}
    section.card .muted{color:var(--muted)}
    .chip{display:inline-block; padding:.35rem .6rem; border:1px solid var(--border); border-radius:.5rem}
    .box{border:1px dashed var(--border); border-radius:.6rem; padding:1rem; text-align:center; color:var(--muted)}
    .demo{border-collapse:collapse}
    .demo th,.demo td{border:1px solid var(--border); padding:.4rem .6rem}
    /* Código */
    .code{position:relative; margin-top:.75rem; border:1px solid var(--border); background:var(--code); border-radius:.8rem; overflow:hidden}
    .code pre{margin:0; padding:1rem; overflow:auto}
    .code .copy{
      position:absolute; top:.5rem; right:.5rem; font-size:.8rem;
      border:1px solid var(--border); background:#141723; color:var(--ink);
      border-radius:.5rem; padding:.25rem .5rem; cursor:pointer
    }
    .render{margin-top:.8rem; border:1px solid var(--border); background:#0e1016; border-radius:.8rem; padding:1rem}
    footer{padding:2rem; text-align:center; color:var(--muted)}
    /* Responsive */
    @media (max-width: 980px){
      .shell{grid-template-columns: 1fr}
      nav.side{position:static; height:auto}
    }
  </style>
</head>
<body>
  <header class="top" role="banner">
    <div class="brand" aria-label="Marca del sitio">🔎 <span>HTML</span> Guía</div>
    <div style="flex:1 1 auto"></div>
    <div class="muted" style="font-size:.9rem"><?= htmlspecialchars($site['description']) ?></div>
  </header>

  <div class="shell">
    <nav class="side" role="navigation" aria-label="Menú lateral">
      <div class="search">
        <input id="filter" type="search" placeholder="Filtrar secciones..." aria-label="Filtrar secciones">
      </div>
      <ul id="menu" class="menu">
        <?php foreach ($sections as $s): ?>
          <li><a href="#<?= $s['id'] ?>" data-title="<?= strtolower($s['title']) ?>"><?= $s['title'] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <main id="content" role="main">
      <?php foreach ($sections as $s): ?>
        <section class="card" id="<?= $s['id'] ?>" tabindex="-1" aria-labelledby="h-<?= $s['id'] ?>">
          <header style="display:flex; align-items:center; justify-content:space-between; gap:1rem">
            <div>
              <p class="muted" style="margin:0">#<?= $s['id'] ?></p>
              <h2 id="h-<?= $s['id'] ?>"><?= $s['title'] ?></h2>
            </div>
            <a class="chip" href="#<?= $s['id'] ?>" aria-label="Enlace permanente">§</a>
          </header>
          <div class="body">
            <?= $s['html'] ?>
            <?= codeblock('html', $s['code']) ?>
            <div class="render" aria-label="Vista renderizada del ejemplo">
              <?= $s['render'] ?>
            </div>
          </div>
        </section>
      <?php endforeach; ?>
    </main>
  </div>

  <footer>
    Hecho con PHP • Esta página es solo de referencia educativa.
  </footer>

  <script>
    // Filtrado de secciones por texto
    const filter = document.getElementById('filter');
    const menu = document.getElementById('menu');
    filter.addEventListener('input', () => {
      const q = filter.value.trim().toLowerCase();
      for (const a of menu.querySelectorAll('a')) {
        const show = a.dataset.title.includes(q);
        a.parentElement.style.display = show ? '' : 'none';
      }
    });

    // Botón Copiar en bloques de código
    document.addEventListener('click', async (ev) => {
      const btn = ev.target.closest('.copy');
      if (!btn) return;
      const code = btn.getAttribute('data-code');
      try {
        await navigator.clipboard.writeText(code.replaceAll('&lt;','<').replaceAll('&gt;','>').replaceAll('&amp;','&').replaceAll('&#039;',\"'\")); // simple unescape
        btn.textContent = 'Copiado ✓';
        setTimeout(()=> btn.textContent = 'Copiar', 1500);
      } catch(e) {
        btn.textContent = 'Error';
        setTimeout(()=> btn.textContent = 'Copiar', 1500);
      }
    });

    // Scroll suave a secciones
    document.querySelectorAll('a[href^=\"#\"]').forEach(a=>{
      a.addEventListener('click', (e)=>{
        const id = a.getAttribute('href').slice(1);
        const el = document.getElementById(id);
        if (el){
          e.preventDefault();
          el.scrollIntoView({behavior:'smooth', block:'start'});
          el.focus({preventScroll:true});
          history.replaceState(null,'','#'+id);
        }
      });
    });
  </script>
</body>
</html>
