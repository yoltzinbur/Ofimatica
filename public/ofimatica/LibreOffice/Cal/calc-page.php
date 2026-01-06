<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LibreOffice Calc | Guía Informativa Completa</title>

<style>
:root{
--verde:#2e7d32;
--verde-claro:#e8f5e9;
--verde-oscuro:#1b5e20;
--blanco:#ffffff;
--negro:#1f1f1f;
--gris:#f3f3f3;
--gris-oscuro:#e0e0e0;
}

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI', Arial, Helvetica, sans-serif;
}

body{
background:var(--blanco);
color:var(--negro);
line-height:1.9;
overflow-x:hidden;
}

/* ANIMACIONES */
@keyframes fadeIn{
from{opacity:0; transform:translateY(20px);}
to{opacity:1; transform:translateY(0);}
}

@keyframes slideInLeft{
from{opacity:0; transform:translateX(-30px);}
to{opacity:1; transform:translateX(0);}
}

@keyframes slideInRight{
from{opacity:0; transform:translateX(30px);}
to{opacity:1; transform:translateX(0);}
}

@keyframes pulse{
0%{transform:scale(1);}
50%{transform:scale(1.05);}
100%{transform:scale(1);}
}

/* HEADER CON ENLACES SUPERIORES */
header{
background:linear-gradient(135deg,#2e7d32,#43a047,#66bb6a);
color:white;
padding:90px 20px;
text-align:center;
animation:fadeIn 1.2s ease-out;
box-shadow:0 5px 15px rgba(46,125,50,0.2);
position:relative;
}

/* ENLACES SUPERIORES DERECHOS */
.header-top-links{
position:absolute;
top:20px;
right:20px;
display:flex;
gap:15px;
z-index:10;
}

.header-top-link{
color:white;
text-decoration:none;
font-size:0.85rem;
padding:6px 12px;
border-radius:4px;
background:rgba(255,255,255,0.15);
transition:all 0.3s ease;
display:flex;
align-items:center;
gap:5px;
}

.header-top-link:hover{
background:rgba(255,255,255,0.25);
transform:translateY(-2px);
}

.header-top-link.calc{ border-left:3px solid #4CAF50; }
.header-top-link.draw{ border-left:3px solid #FF9800; }
.header-top-link.impress{ border-left:3px solid #2196F3; }
.header-top-link.writer{ border-left:3px solid #9C27B0; }

header h1{
font-size:2.8rem;
margin-bottom:20px;
text-shadow:2px 2px 4px rgba(0,0,0,0.3);
}

header p{
max-width:1100px;
margin:auto;
font-size:1.15rem;
line-height:1.8;
}

/* BUSCADOR */
.search-wrapper{
background:var(--verde-claro);
padding:50px 20px;
text-align:center;
border-bottom:5px solid var(--verde);
animation:fadeIn 1.5s ease-out;
transition:all 0.3s ease;
}

.search-wrapper:hover{
background:#d4edda;
}

.search-wrapper h2{
font-size:1.9rem;
color:var(--verde);
margin-bottom:25px;
}

.search-wrapper input{
width:95%;
max-width:800px;
padding:20px;
font-size:1.15rem;
border-radius:12px;
border:2px solid var(--verde);
outline:none;
transition:all 0.3s ease;
box-shadow:0 4px 6px rgba(0,0,0,0.1);
}

.search-wrapper input:focus{
border-color:var(--verde-oscuro);
box-shadow:0 4px 12px rgba(46,125,50,0.3);
transform:translateY(-2px);
}

/* LAYOUT */
.main{
display:grid;
grid-template-columns:260px 1fr;
gap:20px;
}

/* INDICE */
aside{
background:linear-gradient(180deg,#f8f9fa,#e9ecef);
padding:30px;
position:sticky;
top:20px;
height:fit-content;
border-radius:12px;
box-shadow:0 4px 6px rgba(0,0,0,0.1);
animation:slideInLeft 1s ease-out;
}

aside h3{
color:var(--verde);
margin-bottom:20px;
padding-bottom:10px;
border-bottom:2px solid var(--verde);
}

aside a{
display:block;
margin-bottom:12px;
text-decoration:none;
color:#1b5e20;
font-size:1rem;
padding:10px 15px;
border-radius:8px;
transition:all 0.3s ease;
position:relative;
overflow:hidden;
}

aside a:hover{
background:var(--verde-claro);
transform:translateX(10px);
color:var(--verde-oscuro);
}

aside a::before{
content:'';
position:absolute;
left:0;
top:0;
height:100%;
width:3px;
background:var(--verde);
transform:scaleY(0);
transition:transform 0.3s ease;
}

aside a:hover::before{
transform:scaleY(1);
}

/* CONTENEDOR */
.container{
padding:60px;
animation:fadeIn 1.8s ease-out;
}

/* SECCIONES */
section{
margin-bottom:110px;
opacity:0;
transform:translateY(30px);
transition:all 0.8s ease;
}

section.visible{
opacity:1;
transform:translateY(0);
}

section h2{
font-size:2.2rem;
color:var(--verde);
margin-bottom:25px;
border-left:6px solid var(--verde);
padding-left:15px;
position:relative;
overflow:hidden;
}

section h2::after{
content:'';
position:absolute;
left:0;
bottom:0;
height:2px;
width:0;
background:linear-gradient(90deg,var(--verde),transparent);
transition:width 1.5s ease;
}

section.visible h2::after{
width:100%;
}

/* BLOQUES */
.block{
background:var(--gris);
padding:30px;
border-radius:16px;
margin-bottom:30px;
transition:all 0.3s ease;
box-shadow:0 3px 10px rgba(0,0,0,0.08);
}

.block:hover{
transform:translateY(-5px);
box-shadow:0 8px 20px rgba(0,0,0,0.12);
}

.columns{
display:grid;
grid-template-columns:1fr 1fr;
gap:30px;
}

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
gap:25px;
}

.card{
background:linear-gradient(145deg,#ffffff,#f8f9fa);
padding:25px;
border-radius:14px;
border-left:6px solid var(--verde);
transition:all 0.4s ease;
box-shadow:0 4px 8px rgba(0,0,0,0.1);
position:relative;
overflow:hidden;
}

.card::before{
content:'';
position:absolute;
top:0;
left:-100%;
width:100%;
height:100%;
background:linear-gradient(90deg,transparent,rgba(46,125,50,0.1),transparent);
transition:left 0.7s ease;
}

.card:hover::before{
left:100%;
}

.card:hover{
transform:translateY(-10px) scale(1.02);
box-shadow:0 12px 25px rgba(46,125,50,0.2);
border-left-color:var(--verde-oscuro);
}

.card h3{
color:var(--verde);
margin-bottom:15px;
font-size:1.3rem;
}

/* IMAGEN */
.image-box{
height:240px;
background:linear-gradient(135deg,#f8fff9,#e8f5e9);
border:2px dashed var(--verde);
display:flex;
align-items:center;
justify-content:center;
color:#666;
font-style:italic;
margin-top:20px;
border-radius:12px;
transition:all 0.3s ease;
overflow:hidden;
}

.image-box img{
width:100%;
height:100%;
object-fit:cover;
}

.image-box:hover{
border-style:solid;
border-color:var(--verde-oscuro);
background:#e8f5e9;
transform:scale(1.01);
}

/* LISTAS */
ul{
margin-left:25px;
}

li{
margin-bottom:10px;
position:relative;
padding-left:10px;
transition:all 0.3s ease;
}

li:hover{
color:var(--verde-oscuro);
transform:translateX(5px);
}

li::marker{
color:var(--verde);
}

/* VIDEOS */
.video-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
}

.video-card{
background:linear-gradient(135deg,#e8f5e9,#d4edda);
padding:18px;
border-radius:16px;
position:relative;
transition:all 0.4s ease;
overflow:hidden;
}

.video-card::before{
content:'';
position:absolute;
top:0;
left:0;
right:0;
height:3px;
background:linear-gradient(90deg,var(--verde),#4caf50,var(--verde));
transform:scaleX(0);
transition:transform 0.5s ease;
}

.video-card:hover::before{
transform:scaleX(1);
}

.video-card:hover{
transform:translateY(-8px);
box-shadow:0 10px 25px rgba(46,125,50,0.25);
}

.video-card iframe{
width:100%;
height:170px;
border-radius:10px;
transition:all 0.3s ease;
border:none;
}

.video-card:hover iframe{
transform:scale(1.03);
}

.video-card h4{
margin-top:12px;
color:var(--verde);
transition:all 0.3s ease;
}

.video-card:hover h4{
color:var(--verde-oscuro);
}

.video-card p{
color:#555;
font-size:0.9rem;
margin-top:8px;
line-height:1.5;
}

.video-card button{
position:absolute;
top:14px;
right:14px;
background:var(--verde);
color:white;
border:none;
padding:8px 12px;
border-radius:6px;
cursor:pointer;
transition:all 0.3s ease;
z-index:2;
font-size:1.2rem;
}

.video-card button:hover{
background:var(--verde-oscuro);
transform:scale(1.1);
}

/* FULLSCREEN VIDEO */
#videoFullscreen{
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,.95);
display:none;
align-items:center;
justify-content:center;
z-index:2000;
animation:fadeIn 0.5s ease;
}

#videoFullscreen iframe{
width:90%;
height:80%;
border-radius:15px;
box-shadow:0 15px 40px rgba(0,0,0,0.5);
border:none;
}

#videoFullscreen button{
position:absolute;
top:20px;
right:30px;
padding:12px 16px;
background:#ff4444;
color:white;
border:none;
cursor:pointer;
border-radius:8px;
font-size:1.5rem;
transition:all 0.3s ease;
z-index:2001;
}

#videoFullscreen button:hover{
background:#ff0000;
transform:rotate(90deg);
}

/* FOOTER MODIFICADO */
footer{
background:linear-gradient(135deg,var(--verde-oscuro),var(--verde));
color:white;
padding:30px 20px;
text-align:center;
}

.footer-content{
max-width:1200px;
margin:0 auto;
display:grid;
grid-template-columns:repeat(5,1fr);
gap:20px;
padding:20px 0;
}

.footer-column{
display:flex;
flex-direction:column;
align-items:center;
}

.footer-column h4{
font-size:1.1rem;
margin-bottom:15px;
color:#c8e6c9;
border-bottom:2px solid rgba(200,230,201,0.3);
padding-bottom:8px;
width:100%;
text-align:center;
}

.footer-links{
display:flex;
flex-direction:column;
gap:8px;
width:100%;
}

footer a{
color:#e8f5e9;
text-decoration:none;
font-size:0.9rem;
padding:5px 10px;
border-radius:5px;
transition:all 0.3s ease;
display:flex;
align-items:center;
justify-content:center;
gap:5px;
}

footer a:hover{
background:rgba(255,255,255,0.1);
color:white;
transform:translateY(-3px);
}

.footer-bottom{
margin-top:25px;
padding-top:20px;
border-top:1px solid rgba(255,255,255,0.1);
font-size:0.85rem;
color:#c8e6c9;
}

/* BOTÓN VOLVER ARRIBA */
.back-to-top{
position:fixed;
bottom:30px;
right:30px;
background:var(--verde);
color:white;
width:50px;
height:50px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
text-decoration:none;
font-size:1.5rem;
box-shadow:0 4px 15px rgba(46,125,50,0.4);
transition:all 0.3s ease;
z-index:1000;
opacity:0;
transform:translateY(20px);
}

.back-to-top.visible{
opacity:1;
transform:translateY(0);
}

.back-to-top:hover{
background:var(--verde-oscuro);
transform:translateY(-5px) scale(1.1);
}

/* PROGRESS BAR */
.progress-container{
position:fixed;
top:0;
left:0;
width:100%;
height:4px;
background:transparent;
z-index:2001;
}

.progress-bar{
height:100%;
background:linear-gradient(90deg,#4caf50,var(--verde),#2e7d32);
width:0%;
transition:width 0.3s ease;
}

/* RESPONSIVE */
@media(max-width:1000px){
.main{
grid-template-columns:1fr;
}
aside{
display:none;
}
.container{
padding:40px 20px;
}
.video-grid{
grid-template-columns:repeat(2,1fr);
}
.columns{
grid-template-columns:1fr;
}
.footer-content{
grid-template-columns:repeat(3,1fr);
}
.header-top-links{
top:10px;
right:10px;
gap:8px;
}
.header-top-link{
font-size:0.75rem;
padding:4px 8px;
}
}

@media(max-width:768px){
.footer-content{
grid-template-columns:repeat(2,1fr);
gap:15px;
}
header h1{
font-size:2.2rem;
}
section h2{
font-size:1.8rem;
}
.video-grid{
grid-template-columns:1fr;
}
.header-top-links{
flex-wrap:wrap;
justify-content:flex-end;
max-width:150px;
}
.header-top-link{
font-size:0.7rem;
}
}

@media(max-width:480px){
.footer-content{
grid-template-columns:1fr;
}
.footer-column h4{
font-size:1rem;
}
footer a{
font-size:0.85rem;
}
.header-top-links{
top:5px;
right:5px;
}
.header-top-link{
font-size:0.65rem;
padding:3px 6px;
}
}
</style>
</head>

<body>

<div class="progress-container">
<div class="progress-bar" id="progressBar"></div>
</div>

<header id="inicio">
<!-- ENLACES SUPERIORES DERECHOS - AQUÍ ESTÁN LOS ICONOS/TEXTO -->
<div class="header-top-links">
<a href="calc-page.php" class="header-top-link calc">calc</a>
<a href="Draw/draw.php" class="header-top-link draw">draw</a>
<a href="Impress/impress.php" class="header-top-link impress">impress</a>
<a href="Writer/writer.php" class="header-top-link writer">writer</a>
</div>

<h1>LibreOffice Calc</h1>
<p>
Guía informativa completa sobre LibreOffice Calc, pensada para personas que nunca han utilizado
una hoja de cálculo. Aquí aprenderás desde qué es Calc hasta cómo usar funciones avanzadas,
tablas dinámicas, macros y gráficos profesionales. LibreOffice Calc es una alternativa poderosa
y gratuita a Microsoft Excel, desarrollada por The Document Foundation como parte del proyecto
LibreOffice. Esta suite ofimática de código abierto se distribuye bajo licencia MPL y es compatible
con múltiples sistemas operativos incluyendo Windows, macOS, Linux, FreeBSD y Android.
</p>
</header>

<div class="search-wrapper">
<h2>Buscar dentro del contenido</h2>
<input type="text" id="searchInput" placeholder="Ejemplo: fórmulas, BUSCARV, macros, tablas dinámicas...">
</div>

<div class="main">

<aside>
<h3>Contenido</h3>
<a href="#inicio">Inicio</a>
<a href="#introduccion">Introducción</a>
<a href="#interfaz">Interfaz</a>
<a href="#funcionalidades">Funcionalidades</a>
<a href="#ejemplos">Ejemplos prácticos</a>
<a href="#tutoriales">Tutoriales</a>
<a href="#atajos">Atajos y consejos</a>
</aside>

<div class="container">

<section id="introduccion">
<h2>Introducción Completa</h2>
<div class="block">
<p>
<strong>LibreOffice Calc</strong> es el componente de hoja de cálculo de la suite LibreOffice, una de las suites ofimáticas libres más utilizadas en el mundo. Su desarrollo comenzó en 2010 como una bifurcación de OpenOffice.org cuando Oracle adquirió Sun Microsystems. Desde entonces, ha evolucionado constantemente gracias a una comunidad activa de desarrolladores voluntarios y empresas colaboradoras.
</p>
<p>
<strong>Historia y Evolución:</strong> LibreOffice surge del proyecto OpenOffice.org, que a su vez provenía de StarOffice, adquirido por Sun Microsystems en 1999. En 2010, miembros de la comunidad crearon The Document Foundation para asegurar el desarrollo continuo del software libre de oficina. Calc heredó la robustez de sus predecesores pero ha superado muchas de sus limitaciones, añadiendo características modernas como soporte mejorado para formatos de Microsoft Excel, funciones avanzadas de análisis de datos, y una interfaz más intuitiva.
</p>
<p>
<strong>Ventajas Competitivas:</strong>
</p>
<ul>
<li><strong>Totalmente Gratuito:</strong> Sin costos de licencia para uso personal, educativo, gubernamental o comercial.</li>
<li><strong>Código Abierto:</strong> Transparencia total, seguridad auditada y posibilidad de modificación.</li>
<li><strong>Multiplataforma:</strong> Disponible para Windows, macOS, Linux, FreeBSD, y versiones portátiles.</li>
<li><strong>Estándares Abiertos:</strong> Usa el formato OpenDocument (ODS) certificado por ISO/IEC 26300.</li>
<li><strong>Compatibilidad Extendida:</strong> Abre y guarda en formatos de Microsoft Excel, CSV, HTML, PDF, y más.</li>
<li><strong>Comunidad Activa:</strong> Soporte a través de foros, documentación extensa y actualizaciones frecuentes.</li>
<li><strong>Localización Completa:</strong> Disponible en más de 110 idiomas y dialectos.</li>
<li><strong>Sin Bloqueo de Proveedor:</strong> Evita la dependencia de un solo proveedor de software.</li>
</ul>
<p>
<strong>Casos de Uso Principales:</strong> Educación (desde primaria hasta universidad), PyMEs (contabilidad, inventarios, nóminas), Gobiernos (administración pública, transparencia), Organizaciones sin fines de lucro (gestión de proyectos, informes), Usuarios domésticos (presupuestos familiares, planificación), Investigación científica (análisis estadístico, gráficos), y Desarrolladores (automatización con macros y API).
</p>
<!-- IMAGEN 1 DE LA CARPETA IMG -->
<div class="image-box">
<img src="img/1jpg.jpg" alt="Interfaz de LibreOffice Calc">
</div>
</div>
</section>

<section id="interfaz">
<h2>Interfaz Detallada</h2>
<div class="columns">
<div class="block">
<p>
La interfaz de Calc está diseñada siguiendo principios de usabilidad y eficiencia. Cada elemento cumple una función específica que facilita el trabajo con datos. La interfaz es altamente personalizable: puedes mover, añadir o quitar barras de herramientas según tus necesidades.
</p>
<ul>
<li><strong>Barra de Título:</strong> Muestra el nombre del archivo y controles de ventana.</li>
<li><strong>Barra de Menús:</strong> Acceso organizado a todas las funcionalidades (Archivo, Edición, Ver, Insertar, Formato, Herramientas, Datos, Ventana, Ayuda).</li>
<li><strong>Barra de Herramientas Estándar:</strong> Iconos para operaciones comunes (Nuevo, Abrir, Guardar, Imprimir, Cortar, Copiar, Pegar).</li>
<li><strong>Barra de Herramientas de Formato:</strong> Control de fuente, tamaño, estilo, alineación, bordes, colores y formatos numéricos.</li>
<li><strong>Barra de Fórmulas:</strong> Área para escribir y editar fórmulas con resaltado de sintaxis y asistente de funciones.</li>
<li><strong>Barra de Nombre:</strong> Muestra la referencia de la celda activa (ej: A1) o el nombre de un rango definido.</li>
<li><strong>Área de Trabajo Principal:</strong> Cuadrícula de celdas organizadas en columnas (A, B, C...) y filas (1, 2, 3...).</li>
<li><strong>Pestañas de Hojas:</strong> Navegación entre múltiples hojas dentro del mismo libro de trabajo.</li>
<li><strong>Barra de Estado:</strong> Información contextual (modo de entrada, suma/recuento de selección, zoom, estilos de página).</li>
<li><strong>Barra de Desplazamiento:</strong> Horizontal y vertical para navegar por grandes conjuntos de datos.</li>
<li><strong>Selector de Rango:</strong> Para navegación rápida entre rangos y hojas grandes.</li>
<li><strong>Barra de Zoom:</strong> Control deslizante para ajustar el nivel de ampliación.</li>
</ul>
<p>
<strong>Personalización Avanzada:</strong> Puedes crear tus propias barras de herramientas, asignar atajos de teclado personalizados, guardar configuraciones de interfaz como perfiles, y usar temas de color para reducir la fatiga visual.
</p>
</div>
<!-- IMAGEN 2 DE LA CARPETA IMG -->
<div class="image-box">
<img src="img/2jpg.jpg" alt="Interfaz detallada de LibreOffice Calc">
</div>
</div>
</section>

<section id="funcionalidades">
<h2>Funcionalidades Extendidas</h2>
<div class="cards">
<div class="card">
<h3>Biblioteca de 500+ Funciones</h3>
<p>Organizadas en categorías: Matemáticas (SUMA, PROMEDIO, REDONDEAR), Estadísticas (MEDIANA, MODA, DESVEST), Financieras (VA, VF, TIR, PAGO), Lógicas (SI, Y, O, NO), Texto (CONCATENAR, EXTRAE, MAYUSC), Fecha/Hora (AHORA, FECHA, DIA), Búsqueda (BUSCARV, BUSCARH, INDICE, COINCIDIR), Información (ESNUMERO, ESTEXTO), y Bases de Datos (BDSUMA, BDPROMEDIO).</p>
</div>
<div class="card">
<h3>Tablas Dinámicas Avanzadas</h3>
<p>Análisis multidimensional con agrupación automática, segmentación de datos, campos calculados, filtros temporales, diseño flexible y actualización en tiempo real. Ideal para dashboards ejecutivos y análisis de ventas por múltiples dimensiones (tiempo, región, producto).</p>
</div>
<div class="card">
<h3>Gráficos Profesionales</h3>
<p>15+ tipos de gráficos: Barras (agrupadas, apiladas, 100%), Líneas (con marcadores, suavizadas), Áreas, Dispersión (XY), Circulares (anillos, explosión 3D), Cotizaciones (velas japonesas), Superficies 3D, Radar, y Diagramas de Gantt para gestión de proyectos.</p>
</div>
<div class="card">
<h3>Automatización con Macros</h3>
<p>Soporte para tres lenguajes: LibreOffice Basic (similar a VBA), Python (con bibliotecas como uno, unohelper), y JavaScript. Grabación de macros, depuración paso a paso, editor integrado con resaltado de sintaxis, y creación de formularios interactivos.</p>
</div>
<div class="card">
<h3>Validación y Protección</h3>
<p>Validación por lista desplegable, rango numérico, fecha, longitud de texto y fórmulas personalizadas. Protección a nivel de celda, hoja y libro con contraseñas SHA-256. Control de cambios con historial y comparación de versiones.</p>
</div>
<div class="card">
<h3>Compatibilidad Total</h3>
<p>Importación/exportación perfecta con Excel (XLS, XLSX, XLSM), incluyendo fórmulas, formatos condicionales, gráficos y macros (con conversión). Soporte para ODS, CSV (con múltiples delimitadores), HTML, PDF (con marcadores), DIF, SLK, y formatos legacy.</p>
</div>
<div class="card">
<h3>Análisis Estadístico</h3>
<p>Herramientas integradas: Estadística descriptiva (media, moda, mediana, desviación), Análisis de regresión (lineal, logarítmica, exponencial), Pruebas de hipótesis (t-Student, chi-cuadrado), y Análisis de varianza (ANOVA).</p>
</div>
<div class="card">
<h3>Formato Condicional Avanzado</h3>
<p>Escalas de color (2 o 3 colores), conjuntos de iconos (semáforos, flechas, calificaciones), barras de datos (gradientes, sólidas), y reglas basadas en fórmulas personalizadas con operadores lógicos complejos.</p>
</div>
<div class="card">
<h3>Conectividad de Datos</h3>
<p>Conexión nativa a MySQL, PostgreSQL, Oracle, MS SQL Server, Access, dBase, y cualquier base de datos ODBC/JDBC. Consultas SQL directas, actualización programada, y creación de informes parametrizados.</p>
</div>
<div class="card">
<h3>Colaboración en Tiempo Real</h3>
<p>Integración con Collabora Online y otras soluciones para edición simultánea, comentarios en tiempo real, historial de revisiones detallado, y control de acceso por usuario o grupo.</p>
</div>
</div>
</section>

<section id="ejemplos">
<h2>Ejemplos Prácticos Detallados</h2>
<div class="block">
<p>LibreOffice Calc es utilizado en innumerables escenarios del mundo real. Aquí presentamos ejemplos detallados con explicaciones paso a paso:</p>

<h3>Finanzas Personales y Empresariales:</h3>
<ul>
<li><b>=VF(0.05/12;240;-500;;0)</b> → Calcula el valor futuro de una inversión de $500 mensuales durante 20 años al 5% anual compuesto mensualmente.</li>
<li><b>=PAGO(0.06/12;360;200000)</b> → Determina el pago mensual de una hipoteca de $200,000 a 30 años con tasa del 6% anual.</li>
<li><b>=TIR(B1:B120;0.1)</b> → Calcula la tasa interna de retorno para una serie de flujos de caja durante 10 años.</li>
<li><b>=NPV(0.08;C2:C10)+C1</b> → Valor presente neto de una inversión con tasa de descuento del 8%.</li>
</ul>

<h3>Análisis de Ventas e Inventarios:</h3>
<ul>
<li><b>=INDICE(A2:F100;COINCIDIR("ProductoX";A2:A100;0);COINCIDIR("Q3";A1:F1;0))</b> → Búsqueda bidimensional para encontrar ventas de un producto específico en un trimestre específico.</li>
<li><b>=SUMAR.SI.CONJUNTO(Ventas;Productos;"Laptop";Regiones;"Norte";Meses;">=Ene";Meses;"<=Jun")</b> → Suma condicional con múltiples criterios.</li>
<li><b>=PRODUCTO(SI(MES(Fechas)=1;Ventas;0))</b> → Fórmula matricial para sumar ventas solo de enero.</li>
</ul>

<h3>Recursos Humanos y Nóminas:</h3>
<ul>
<li><b>=SI(Y(Horas>40;Tipo="Contrato");SalarioBase+(Horas-40)*SalarioBase*1.5;SalarioBase)</b> → Cálculo de horas extras con tiempo y medio.</li>
<li><b>=BUSCARV(DNI;TablaEmpleados;COLUMNA(Salario);FALSO)+BUSCARV(DNI;TablaBonos;COLUMNA(Bono);FALSO)</b> → Salario total con búsquedas múltiples.</li>
</ul>

<h3>Análisis Estadístico y Científico:</h3>
<ul>
<li><b>=INTERSECCION.EJE.Y(C2:C10;D2:D10)</b> → Intersección Y en regresión lineal.</li>
<li><b>=PRUEBA.T(A2:A50;B2:B50;2;3)</b> → Prueba t de Student para muestras independientes.</li>
<li><b>=FREQUENCY(Datos;Rangos)</b> → Distribución de frecuencias para histogramas.</li>
</ul>

<h3>Gestión de Proyectos:</h3>
<ul>
<li><b>=SI(FechaFin<=HOY();"Completado";SI(FechaInicio<=HOY();"En Progreso";"Pendiente"))</b> → Estado del proyecto.</li>
<li><b>=DIAS.LAB(FechaInicio;FechaFin;Feriados)</b> → Días laborables entre fechas excluyendo fines de semana y feriados.</li>
</ul>

<h3>Dashboard Ejecutivo Avanzado:</h3>
<p>Creación de un dashboard interactivo con: Tablas dinámicas conectadas a base de datos SQL, Gráficos vinculados a segmentadores (slicers), Indicadores KPI con formato condicional, Filtros temporales dinámicos, y Macros para actualización automática cada hora.</p>
</div>
</section>

<!-- SECCIÓN MODIFICADA CON TUS VIDEOS -->
<section id="tutoriales">
<h2>Tutoriales Video y Texto</h2>
<div class="video-grid">
<div class="video-card">
<button onclick="openVideo('https://www.youtube.com/embed/R40ozV6dw28')">⛶</button>
<iframe src="https://www.youtube.com/embed/R40ozV6dw28" title="Tutorial 1 - Introducción a Calc" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Introducción a LibreOffice Calc</h4>
<p>Aprende los conceptos básicos: ingreso de datos, formato básico, operaciones aritméticas simples y guardado de archivos.</p>
</div>
<div class="video-card">
<button onclick="openVideo('https://www.youtube.com/embed/WRudkoxL5Jc')">⛶</button>
<iframe src="https://www.youtube.com/embed/WRudkoxL5Jc" title="Tutorial 2 - Funciones Básicas" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Funciones Básicas de Calc</h4>
<p>Desarrolla un presupuesto familiar con categorías, gráficos de seguimiento, alertas de sobrepaso y pronósticos.</p>
</div>
<div class="video-card">
<button onclick="openVideo('https://www.youtube.com/embed/spmZpkk0fHs')">⛶</button>
<iframe src="https://www.youtube.com/embed/spmZpkk0fHs" title="Tutorial 3 - Tablas Dinámicas" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Tablas Dinámicas Profesionales</h4>
<p>Domina el análisis multidimensional con agrupaciones, cálculos personalizados y segmentación de datos.</p>
</div>
<div class="video-card">
<button onclick="openVideo('https://www.youtube.com/embed/-9Hp0zJn8LY')">⛶</button>
<iframe src="https://www.youtube.com/embed/-9Hp0zJn8LY" title="Tutorial 4 - Funciones BUSCARV" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Funciones BUSCARV y BUSCARH</h4>
<p>Técnicas profesionales para búsquedas exactas, aproximadas, con coincidencia parcial y múltiples criterios.</p>
</div>
<div class="video-card">
<button onclick="openVideo('https://www.youtube.com/embed/2mI3vHNK5_8')">⛶</button>
<iframe src="https://www.youtube.com/embed/2mI3vHNK5_8" title="Tutorial 5 - Macros" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Macros y Automatización</h4>
<p>Introducción a la grabación, edición y programación de macros en LibreOffice Basic con ejemplos prácticos.</p>
</div>
<div class="video-card">
<button onclick="openVideo('https://www.youtube.com/embed/wy2_D3-5S-0')">⛶</button>
<iframe src="https://www.youtube.com/embed/wy2_D3-5S-0" title="Tutorial 6 - Gráficos" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Dashboard Ejecutivo Interactivo</h4>
<p>Creación de dashboards ejecutivos con gráficos combinados, controles de formulario y actualización automática.</p>
</div>
<div class="video-card">
<button onclick="openVideo('https://www.youtube.com/embed/C1j70knSf-I')">⛶</button>
<iframe src="https://www.youtube.com/embed/C1j70knSf-I" title="Tutorial 7 - Fórmulas Matriciales" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Fórmulas Matriciales Avanzadas</h4>
<p>Uso avanzado de fórmulas que procesan múltiples valores simultáneamente para cálculos complejos.</p>
</div>
<div class="video-card">
<button onclick="openVideo('https://www.youtube.com/embed/VShf7UFtpiA')">⛶</button>
<iframe src="https://www.youtube.com/embed/VShf7UFtpiA" title="Tutorial 8 - Validación de Datos" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Validación de Datos Profesional</h4>
<p>Implementación de sistemas de entrada de datos robustos con listas dependientes y rangos dinámicos.</p>
</div>
<div class="video-card">
<button onclick="openVideo('https://www.youtube.com/embed/I1Jvl6TsO9o')">⛶</button>
<iframe src="https://www.youtube.com/embed/I1Jvl6TsO9o" title="Tutorial 9 - Integración con Bases de Datos" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Integración con Bases de Datos SQL</h4>
<p>Conexión a MySQL, PostgreSQL y bases de datos corporativas para informes automatizados.</p>
</div>
</div>
</section>

<section id="atajos">
<h2>Atajos y Consejos Avanzados</h2>
<div class="block">
<p>Dominar Calc requiere conocer no solo sus funciones sino también técnicas que optimizan el flujo de trabajo. Aquí presentamos información organizada por nivel de experiencia:</p>

<h3>Atajos de Teclado Esenciales (Nivel Básico):</h3>
<ul>
<li><kbd>Ctrl</kbd> + <kbd>N</kbd> → Nuevo libro</li>
<li><kbd>Ctrl</kbd> + <kbd>O</kbd> → Abrir archivo existente</li>
<li><kbd>Ctrl</kbd> + <kbd>S</kbd> → Guardar documento</li>
<li><kbd>Ctrl</kbd> + <kbd>P</kbd> → Imprimir documento</li>
<li><kbd>Ctrl</kbd> + <kbd>Z</kbd> / <kbd>Y</kbd> → Deshacer / Rehacer</li>
<li><kbd>F2</kbd> → Editar celda activa</li>
<li><kbd>F4</kbd> → Alternar referencia absoluta/relativa</li>
<li><kbd>F9</kbd> → Recalcular todas las fórmulas</li>
</ul>

<h3>Atajos de Navegación (Nivel Intermedio):</h3>
<ul>
<li><kbd>Ctrl</kbd> + <kbd>Home</kbd> → Ir a celda A1</li>
<li><kbd>Ctrl</kbd> + <kbd>End</kbd> → Ir a última celda con contenido</li>
<li><kbd>Ctrl</kbd> + <kbd>↑↓←→</kbd> → Saltar al borde de región de datos</li>
<li><kbd>Ctrl</kbd> + <kbd>Page Up/Down</kbd> → Navegar entre hojas</li>
<li><kbd>Alt</kbd> + <kbd>Page Up/Down</kbd> → Desplazar pantalla horizontalmente</li>
<li><kbd>Ctrl</kbd> + <kbd>G</kbd> → Ir a celda específica (diálogo)</li>
</ul>

<h3>Atajos de Selección (Nivel Avanzado):</h3>
<ul>
<li><kbd>Ctrl</kbd> + <kbd>A</kbd> → Seleccionar toda la hoja</li>
<li><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>↑↓←→</kbd> → Seleccionar rango hasta el borde</li>
<li><kbd>Ctrl</kbd> + <kbd>Espacio</kbd> → Seleccionar columna completa</li>
<li><kbd>Shift</kbd> + <kbd>Espacio</kbd> → Seleccionar fila completa</li>
<li><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>*</kbd> → Seleccionar región actual alrededor de celda activa</li>
</ul>

<h3>Consejos Profesionales para Flujo de Trabajo:</h3>
<ul>
<li><strong>Plantillas Personalizadas:</strong> Crea plantillas para informes recurrentes con formatos, fórmulas y macros predefinidas.</li>
<li><strong>Nombres de Rango Dinámicos:</strong> Usa OFFSET y CONTARA para crear rangos que se expanden automáticamente al añadir datos.</li>
<li><strong>Formato de Tabla:</strong> Convierte rangos a tablas para obtener filtros automáticos, bandas de color y referencias estructuradas.</li>
<li><strong>Validación Cruzada:</strong> Implementa validación que referencia otras celdas para consistencia de datos.</li>
<li><strong>Protección Selectiva:</strong> Protege solo celdas con fórmulas dejando editables las celdas de entrada de datos.</li>
<li><strong>Versiones del Documento:</strong> Usa "Guardar como" con numeración de versiones o integra con sistema de control de versiones.</li>
<li><strong>Backup Automático:</strong> Configura copias de seguridad cada X minutos en Configuración → Opciones → Cargar/Guardar → General.</li>
<li><strong>Documentación Interna:</strong> Usa comentarios en celdas críticas para explicar fórmulas complejas o supuestos.</li>
</ul>

<h3>Optimización de Rendimiento:</h3>
<ul>
<li><strong>Fórmulas Volátiles:</strong> Minimiza el uso de HOY(), AHORA(), ALEATORIO() que se recalculan constantemente.</li>
<li><strong>Referencias Complejas:</strong> Evita referencias a celdas completas (A:A) en fórmulas; usa rangos específicos.</li>
<li><strong>Cálculos Iterativos:</strong> Para fórmulas circulares, limita el número de iteraciones en Herramientas → Opciones → LibreOffice Calc → Calcular.</li>
<li><strong>Gráficos Dinámicos:</strong> Para dashboards con muchos gráficos, considera convertir gráficos a imágenes estáticas durante el desarrollo.</li>
</ul>

<h3>Integración con Otras Herramientas:</h3>
<ul>
<li><strong>Base de Datos:</strong> Usa Base (componente de LibreOffice) para conectar Calc con MySQL, PostgreSQL, etc.</li>
<li><strong>Writer:</strong> Incrusta rangos de Calc en documentos Writer con vínculo dinámico para informes combinados.</li>
<li><strong>Impress:</strong> Crea presentaciones con gráficos de Calc que se actualizan automáticamente.</li>
<li><strong>Herramientas Externas:</strong> Exporta datos a CSV para procesar con Python, R, o herramientas de BI como Tableau.</li>
</ul>
</div>
</section>

</div>
</div>

<a href="#inicio" class="back-to-top" id="backToTop">↑</a>

<footer>
<div class="footer-content">
<div class="footer-column">
<h4>Descargas</h4>
<div class="footer-links">
<a href="https://www.libreoffice.org/download" target="_blank">⬇️ Descargar</a>
<a href="https://www.libreoffice.org/download/portable" target="_blank">💼 Portable</a>
<a href="https://www.libreoffice.org/download/appstore" target="_blank">📱 App Stores</a>
<a href="https://www.libreoffice.org/download/older" target="_blank">🕐 Versiones Antiguas</a>
</div>
</div>
<div class="footer-column">
<h4>Documentación</h4>
<div class="footer-links">
<a href="https://help.libreoffice.org/Calc" target="_blank">📘 Guías Oficiales</a>
<a href="https://wiki.documentfoundation.org/Documentation" target="_blank">📚 Wiki</a>
<a href="https://books.libreoffice.org" target="_blank">📖 Libros</a>
<a href="https://www.libreoffice.org/get-help/documentation" target="_blank">❓ FAQ</a>
</div>
</div>
<div class="footer-column">
<h4>Comunidad</h4>
<div class="footer-links">
<a href="https://ask.libreoffice.org" target="_blank">💬 Foros</a>
<a href="https://www.libreoffice.org/community/irc" target="_blank">💬 IRC/Chat</a>
<a href="https://www.libreoffice.org/community/mailing-lists" target="_blank">📧 Listas Correo</a>
<a href="https://www.libreoffice.org/community/developers" target="_blank">👨‍💻 Desarrolladores</a>
</div>
</div>
<div class="footer-column">
<h4>Multimedia</h4>
<div class="footer-links">
<a href="https://www.youtube.com/@LibreOffice" target="_blank">▶️ YouTube</a>
<a href="https://peertube.libreoffice.org" target="_blank">📺 PeerTube</a>
<a href="https://www.libreoffice.org/community/screenshots" target="_blank">🖼️ Capturas</a>
<a href="https://www.libreoffice.org/community/press-media" target="_blank">📰 Prensa</a>
</div>
</div>
<div class="footer-column">
<h4>Organización</h4>
<div class="footer-links">
<a href="https://www.libreoffice.org/about-us" target="_blank">🏢 Acerca de</a>
<a href="https://www.documentfoundation.org" target="_blank">🌐 Fundación</a>
<a href="https://www.libreoffice.org/donate" target="_blank">❤️ Donar</a>
<a href="https://www.libreoffice.org/impressum" target="_blank">⚖️ Legal</a>
</div>
</div>
</div>
<div class="footer-bottom">
<p>© 2025 LibreOffice Calc — Software libre bajo licencia MPL v2.0. The Document Foundation es una organización sin fines de lucro registrada en Alemania.</p>
<p>LibreOffice es compatible con los formatos OpenDocument (ISO/IEC 26300) y Microsoft Office.</p>
</div>
</footer>

<div id="videoFullscreen">
<button onclick="closeVideo()">✕</button>
<iframe id="videoFrame" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<script>
/* BUSCADOR MEJORADO */
document.getElementById("searchInput").addEventListener("keyup",function(){
let text=this.value.toLowerCase();
let hasResults=false;
document.querySelectorAll("section").forEach(sec=>{
let content=sec.innerText.toLowerCase();
if(content.includes(text)){
sec.style.display="block";
sec.classList.add("visible");
hasResults=true;
}else{
sec.style.display="none";
}
});

if(!hasResults && text.length>0){
alert("No se encontraron resultados para: "+text);
}
});

/* VIDEOS */
function openVideo(url){
document.getElementById("videoFullscreen").style.display="flex";
document.getElementById("videoFrame").src=url+"?autoplay=1&rel=0";
document.body.style.overflow="hidden";
}

function closeVideo(){
document.getElementById("videoFullscreen").style.display="none";
document.getElementById("videoFrame").src="";
document.body.style.overflow="auto";
}

/* Cerrar video con Escape */
document.addEventListener('keydown', function(event) {
if(event.key === 'Escape') {
closeVideo();
}
});

/* Cerrar video haciendo clic fuera del iframe */
document.getElementById('videoFullscreen').addEventListener('click', function(e) {
if(e.target === this) {
closeVideo();
}
});

/* SCROLL ANIMATIONS */
const sections=document.querySelectorAll("section");
const observer=new IntersectionObserver((entries)=>{
entries.forEach(entry=>{
if(entry.isIntersecting){
entry.target.classList.add("visible");
}
});
},{threshold:0.1});

sections.forEach(section=>{
observer.observe(section);
});

/* BACK TO TOP BUTTON */
const backToTop=document.getElementById("backToTop");
window.addEventListener("scroll",()=>{
if(window.scrollY>300){
backToTop.classList.add("visible");
}else{
backToTop.classList.remove("visible");
}

/* PROGRESS BAR */
const winScroll=document.body.scrollTop||document.documentElement.scrollTop;
const height=document.documentElement.scrollHeight-document.documentElement.clientHeight;
const scrolled=(winScroll/height)*100;
document.getElementById("progressBar").style.width=scrolled+"%";
});

/* SMOOTH SCROLL */
document.querySelectorAll('a[href^="#"]').forEach(anchor=>{
anchor.addEventListener("click",function(e){
e.preventDefault();
const targetId=this.getAttribute("href");
if(targetId==="#")return;
const targetElement=document.querySelector(targetId);
if(targetElement){
window.scrollTo({
top:targetElement.offsetTop-20,
behavior:"smooth"
});
}
});
});

/* HOVER EFFECTS ENHANCEMENT */
const cards=document.querySelectorAll(".card");
cards.forEach(card=>{
card.addEventListener("mouseenter",function(){
this.style.zIndex="10";
});
card.addEventListener("mouseleave",function(){
this.style.zIndex="1";
});
});

/* SEARCH INPUT ANIMATION */
const searchInput=document.getElementById("searchInput");
searchInput.addEventListener("focus",function(){
this.parentElement.style.transform="scale(1.02)";
});
searchInput.addEventListener("blur",function(){
this.parentElement.style.transform="scale(1)";
});
</script>

</body>
</html>