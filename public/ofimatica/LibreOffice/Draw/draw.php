<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Completa de LibreOffice Draw</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: linear-gradient(135deg, #E84924 0%, #B63618 100%);
            color: white;
            padding: 40px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .logo {
            font-size: 80px;
        }

        .header-text h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .header-text p {
            font-size: 20px;
            opacity: 0.9;
        }

        nav {
            background: white;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        nav ul {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            list-style: none;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: color 0.3s;
            padding: 5px 10px;
        }

        nav a:hover {
            color: #E84924;
        }

        main {
            background: white;
            margin: 40px auto;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        section {
            margin-bottom: 60px;
        }

        h2 {
            color: #E84924;
            font-size: 36px;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 3px solid #E84924;
        }

        h3 {
            color: #B63618;
            font-size: 24px;
            margin: 25px 0 15px 0;
        }

        .intro-box {
            background: linear-gradient(135deg, #ffe8e3 0%, #ffd4cc 100%);
            padding: 30px;
            border-radius: 10px;
            border-left: 5px solid #E84924;
            margin-bottom: 30px;
        }

        .intro-box p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .feature-card {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            border-left: 4px solid #E84924;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-card h4 {
            color: #E84924;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .shortcuts-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .shortcuts-table th,
        .shortcuts-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .shortcuts-table th {
            background: #E84924;
            color: white;
            font-weight: 600;
        }

        .shortcuts-table tr:hover {
            background: #f5f5f5;
        }

        .shortcut-key {
            background: #333;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-family: monospace;
            font-size: 14px;
            display: inline-block;
            margin: 2px;
        }

        .version-info {
            background: #e3f2fd;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #2196F3;
            margin: 20px 0;
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .tool-item {
            background: linear-gradient(135deg, #fff5f3 0%, #ffe8e3 100%);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            border: 2px solid #E84924;
            transition: transform 0.3s;
        }

        .tool-item:hover {
            transform: scale(1.05);
        }

        .tool-item h4 {
            color: #E84924;
            margin: 10px 0 0 0;
            font-size: 14px;
        }

        .visual-example {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
            text-align: center;
            border: 2px dashed #E84924;
        }

        .shape-examples {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin: 20px 0;
        }

        .shape-box {
            text-align: center;
        }

        .icon-large {
            font-size: 60px;
            margin: 10px 0;
        }

        .download-section {
            background: linear-gradient(135deg, #E84924 0%, #B63618 100%);
            color: white;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            margin: 40px 0;
        }

        .download-btn {
            background: white;
            color: #E84924;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .download-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
        }

        footer {
            background: #333;
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-top: 40px;
        }

        ul, ol {
            margin-left: 25px;
            margin-top: 15px;
        }

        li {
            margin: 10px 0;
        }

        @media (max-width: 768px) {
            main {
                padding: 30px 20px;
            }

            .header-content {
                flex-direction: column;
                text-align: center;
            }

            .header-text h1 {
                font-size: 32px;
            }

            h2 {
                font-size: 28px;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }

            .logo {
                font-size: 60px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">🎨</div>
                <div class="header-text">
                    <h1>LibreOffice Draw</h1>
                    <p>Guía Completa de Dibujo y Diseño</p>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="../Index.php" class="nav-item active">Office</a></li>
                <li><a href="#que-es">¿Qué es?</a></li>
                <li><a href="#caracteristicas">Características</a></li>
                <li><a href="#herramientas">Herramientas</a></li>
                <li><a href="#ejemplos">Ejemplos</a></li>
                <li><a href="#como-usar">Cómo Usar</a></li>
                <li><a href="#atajos">Atajos</a></li>
                <li><a href="#consejos">Consejos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <main>
            <section id="que-es">
                <h2>¿Qué es LibreOffice Draw?</h2>
                <div class="intro-box">
                    <p><strong>LibreOffice Draw</strong> es una herramienta de dibujo vectorial incluida en LibreOffice.</p>
                    <p>Perfecta para crear diagramas, ilustraciones, diseños técnicos, folletos y gráficos.</p>
                    <p><strong>¿Por qué usarlo?</strong> Es gratuito, potente y versátil.</p>
                </div>

                <div class="version-info">
                    <h3>📊 Información Clave</h3>
                    <p><strong>Desarrollador:</strong> The Document Foundation</p>
                    <p><strong>Tipo:</strong> Software de dibujo vectorial</p>
                    <p><strong>Sistemas:</strong> Windows, macOS, Linux</p>
                    <p><strong>Formato:</strong> ODG (OpenDocument Graphics)</p>
                    <p><strong>Tamaño máximo:</strong> 300 x 300 cm por página</p>
                </div>

                <h3>🎯 Usos Principales</h3>
                <div class="shape-examples">
                    <div class="shape-box">
                        <div class="icon-large">📊</div>
                        <strong>Diagramas</strong>
                    </div>
                    <div class="shape-box">
                        <div class="icon-large">📐</div>
                        <strong>Ilustraciones</strong>
                    </div>
                    <div class="shape-box">
                        <div class="icon-large">📄</div>
                        <strong>Folletos</strong>
                    </div>
                    <div class="shape-box">
                        <div class="icon-large">🏢</div>
                        <strong>Organigramas</strong>
                    </div>
                    <div class="shape-box">
                        <div class="icon-large">📈</div>
                        <strong>Infografías</strong>
                    </div>
                    <div class="shape-box">
                        <div class="icon-large">🎭</div>
                        <strong>Logos</strong>
                    </div>
                </div>
            </section>

            <section id="caracteristicas">
                <h2>Características Principales</h2>

                <div class="features-grid">
                    <div class="feature-card">
                        <h4>🎨 Dibujo Vectorial</h4>
                        <p>Gráficos escalables sin pérdida de calidad.</p>
                    </div>
                    <div class="feature-card">
                        <h4>📐 Formas Predefinidas</h4>
                        <p>Biblioteca de formas: círculos, flechas, símbolos.</p>
                    </div>
                    <div class="feature-card">
                        <h4>🖌️ Herramientas de Dibujo</h4>
                        <p>Líneas, curvas Bézier, polígonos.</p>
                    </div>
                    <div class="feature-card">
                        <h4>📊 Conectores</h4>
                        <p>Conectores automáticos para diagramas.</p>
                    </div>
                    <div class="feature-card">
                        <h4>🎭 Efectos</h4>
                        <p>Sombras, transparencias, gradientes.</p>
                    </div>
                    <div class="feature-card">
                        <h4>📄 Múltiples Páginas</h4>
                        <p>Documentos con varias páginas y capas.</p>
                    </div>
                    <div class="feature-card">
                        <h4>📏 Precisión</h4>
                        <p>Control exacto de posición y tamaño.</p>
                    </div>
                    <div class="feature-card">
                        <h4>🔤 Texto Artístico</h4>
                        <p>Texto con efectos y fuentes personalizadas.</p>
                    </div>
                    <div class="feature-card">
                        <h4>🖼️ Importar Imágenes</h4>
                        <p>PNG, JPG, SVG, GIF y más.</p>
                    </div>
                    <div class="feature-card">
                        <h4>📤 Exportar</h4>
                        <p>PDF, SVG, PNG, JPG, EPS.</p>
                    </div>
                </div>
            </section>

            <section id="herramientas">
                <h2>Herramientas de Dibujo</h2>

                <div class="tools-grid">
                    <div class="tool-item">
                        <svg width="40" height="40" viewBox="0 0 40 40">
                            <path d="M5 5 L35 35 M35 5 L5 35" stroke="#E84924" stroke-width="2" fill="none"/>
                        </svg>
                        <h4>Selección</h4>
                    </div>
                    <div class="tool-item">
                        <svg width="40" height="40" viewBox="0 0 40 40">
                            <line x1="5" y1="35" x2="35" y2="5" stroke="#E84924" stroke-width="2"/>
                        </svg>
                        <h4>Línea</h4>
                    </div>
                    <div class="tool-item">
                        <svg width="40" height="40" viewBox="0 0 40 40">
                            <circle cx="20" cy="20" r="15" stroke="#E84924" stroke-width="2" fill="none"/>
                        </svg>
                        <h4>Círculo</h4>
                    </div>
                    <div class="tool-item">
                        <svg width="40" height="40" viewBox="0 0 40 40">
                            <rect x="7" y="7" width="26" height="26" stroke="#E84924" stroke-width="2" fill="none"/>
                        </svg>
                        <h4>Rectángulo</h4>
                    </div>
                    <div class="tool-item">
                        <svg width="40" height="40" viewBox="0 0 40 40">
                            <polygon points="20,5 35,30 5,30" stroke="#E84924" stroke-width="2" fill="none"/>
                        </svg>
                        <h4>Polígono</h4>
                    </div>
                    <div class="tool-item">
                        <svg width="40" height="40" viewBox="0 0 40 40">
                            <text x="10" y="30" font-size="24" fill="#E84924" font-weight="bold">A</text>
                        </svg>
                        <h4>Texto</h4>
                    </div>
                    <div class="tool-item">
                        <svg width="40" height="40" viewBox="0 0 40 40">
                            <polygon points="20,5 23,15 33,15 25,22 28,32 20,25 12,32 15,22 7,15 17,15" fill="#E84924"/>
                        </svg>
                        <h4>Estrella</h4>
                    </div>
                    <div class="tool-item">
                        <svg width="40" height="40" viewBox="0 0 40 40">
                            <path d="M5 35 Q20 5, 35 35" stroke="#E84924" stroke-width="2" fill="none"/>
                        </svg>
                        <h4>Curvas</h4>
                    </div>
                </div>
            </section>

            <section id="ejemplos">
                <h2>Ejemplos Visuales</h2>

                <h3>Formas Básicas</h3>
                <div class="shape-examples">
                    <div class="shape-box">
                        <svg width="80" height="80">
                            <rect x="10" y="10" width="60" height="60" fill="#E84924" stroke="#B63618" stroke-width="2"/>
                        </svg>
                        <p><strong>Rectángulo</strong></p>
                    </div>
                    <div class="shape-box">
                        <svg width="80" height="80">
                            <circle cx="40" cy="40" r="30" fill="#4CAF50" stroke="#2E7D32" stroke-width="2"/>
                        </svg>
                        <p><strong>Círculo</strong></p>
                    </div>
                    <div class="shape-box">
                        <svg width="80" height="80">
                            <polygon points="40,10 70,70 10,70" fill="#2196F3" stroke="#1565C0" stroke-width="2"/>
                        </svg>
                        <p><strong>Triángulo</strong></p>
                    </div>
                    <div class="shape-box">
                        <svg width="80" height="80">
                            <polygon points="40,10 47,30 68,30 52,43 58,63 40,50 22,63 28,43 12,30 33,30" fill="#9C27B0" stroke="#6A1B9A" stroke-width="2"/>
                        </svg>
                        <p><strong>Estrella</strong></p>
                    </div>
                </div>

                <h3>Diagrama de Flujo Ejemplo</h3>
                <div class="visual-example">
                    <svg width="500" height="250" viewBox="0 0 500 250">
                        <ellipse cx="250" cy="30" rx="50" ry="25" fill="#4CAF50" stroke="#2E7D32" stroke-width="2"/>
                        <text x="250" y="37" text-anchor="middle" fill="white" font-weight="bold" font-size="14">Inicio</text>
                        
                        <line x1="250" y1="55" x2="250" y2="80" stroke="#333" stroke-width="2"/>
                        <polygon points="250,80 245,70 255,70" fill="#333"/>
                        
                        <rect x="200" y="80" width="100" height="40" fill="#2196F3" stroke="#1565C0" stroke-width="2" rx="5"/>
                        <text x="250" y="105" text-anchor="middle" fill="white" font-weight="bold" font-size="14">Proceso</text>
                        
                        <line x1="250" y1="120" x2="250" y2="145" stroke="#333" stroke-width="2"/>
                        <polygon points="250,145 245,135 255,135" fill="#333"/>
                        
                        <polygon points="250,145 300,175 250,205 200,175" fill="#FF9800" stroke="#F57C00" stroke-width="2"/>
                        <text x="250" y="180" text-anchor="middle" fill="white" font-weight="bold" font-size="14">¿OK?</text>
                        
                        <line x1="300" y1="175" x2="380" y2="175" stroke="#333" stroke-width="2"/>
                        <polygon points="380,175 370,170 370,180" fill="#333"/>
                        <text x="330" y="170" text-anchor="middle" fill="#333" font-weight="bold" font-size="12">Sí</text>
                        
                        <ellipse cx="420" cy="175" rx="40" ry="25" fill="#F44336" stroke="#C62828" stroke-width="2"/>
                        <text x="420" y="182" text-anchor="middle" fill="white" font-weight="bold" font-size="14">Fin</text>
                    </svg>
                </div>
            </section>

            <section id="como-usar">
                <h2>Cómo Usar LibreOffice Draw</h2>

                <h3>1. Iniciar un Nuevo Dibujo</h3>
                <ul>
                    <li>Abre LibreOffice Draw</li>
                    <li>"Archivo" → "Nuevo" → "Dibujo"</li>
                    <li>O presiona <span class="shortcut-key">Ctrl + N</span></li>
                </ul>

                <h3>2. Dibujar Formas</h3>
                <ul>
                    <li>Selecciona la herramienta (círculo, rectángulo, línea)</li>
                    <li>Haz clic y arrastra en el lienzo</li>
                    <li>Mantén <span class="shortcut-key">Shift</span> para formas perfectas</li>
                    <li>Mantén <span class="shortcut-key">Ctrl</span> para dibujar desde el centro</li>
                </ul>

                <h3>3. Modificar Objetos</h3>
                <ul>
                    <li><strong>Mover:</strong> Selecciona y arrastra</li>
                    <li><strong>Redimensionar:</strong> Arrastra las esquinas</li>
                    <li><strong>Rotar:</strong> Haz clic dos veces en el objeto</li>
                    <li><strong>Duplicar:</strong> <span class="shortcut-key">Ctrl + D</span></li>
                    <li><strong>Eliminar:</strong> <span class="shortcut-key">Delete</span></li>
                </ul>

                <h3>4. Aplicar Colores</h3>
                <ul>
                    <li><strong>Relleno:</strong> Clic izquierdo en la barra de colores</li>
                    <li><strong>Línea:</strong> Clic derecho en la barra de colores</li>
                    <li><strong>Gradientes:</strong> Panel derecho → "Área"</li>
                </ul>

                <h3>5. Guardar y Exportar</h3>
                <ul>
                    <li><strong>Guardar:</strong> <span class="shortcut-key">Ctrl + S</span></li>
                    <li><strong>PDF:</strong> "Archivo" → "Exportar como PDF"</li>
                    <li><strong>Imagen:</strong> "Archivo" → "Exportar" → PNG/JPG</li>
                </ul>
            </section>

            <section id="atajos">
                <h2>Atajos de Teclado</h2>

                <table class="shortcuts-table">
                    <thead>
                        <tr>
                            <th>Atajo</th>
                            <th>Función</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="shortcut-key">F2</span></td>
                            <td>Herramienta de texto</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + A</span></td>
                            <td>Seleccionar todo</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + D</span></td>
                            <td>Duplicar objeto</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Delete</span></td>
                            <td>Eliminar objeto</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + Shift + G</span></td>
                            <td>Agrupar objetos</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + Z</span></td>
                            <td>Deshacer</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + Y</span></td>
                            <td>Rehacer</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Shift</span> (al dibujar)</td>
                            <td>Mantener proporciones</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl</span> (al dibujar)</td>
                            <td>Dibujar desde el centro</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Flechas</span></td>
                            <td>Mover objeto 1 píxel</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="consejos">
                <h2>Consejos y Mejores Prácticas</h2>

                <h3>💡 Tips Profesionales</h3>
                <ul>
                    <li><strong>Usa la Cuadrícula:</strong> "Ver" → "Cuadrícula" para alineación precisa</li>
                    <li><strong>Agrupa Objetos:</strong> Facilita mover elementos relacionados juntos</li>
                    <li><strong>Usa Capas:</strong> Organiza elementos complejos en capas diferentes</li>
                    <li><strong>Guarda Frecuentemente:</strong> <span class="shortcut-key">Ctrl + S</span> regularmente</li>
                    <li><strong>Exporta en Alta Calidad:</strong> Usa SVG o PDF para mantener calidad vectorial</li>
                    <li><strong>Duplica con Alt:</strong> Mantén Alt mientras arrastras para copiar</li>
                    <li><strong>Alinea Objetos:</strong> "Formato" → "Alinear" para precisión</li>
                    <li><strong>Usa Conectores:</strong> Para diagramas que se ajustan automáticamente</li>
                </ul>

                <h3>⚠️ Errores Comunes</h3>
                <ul>
                    <li>No guardar antes de exportar</li>
                    <li>Exportar en baja resolución</li>
                    <li>No usar grupos para objetos relacionados</li>
                    <li>Olvidar los atajos de teclado</li>
                </ul>
            </section>

            <div class="download-section">
                <h2 style="color: white; border: none; padding: 0; margin-bottom: 20px;">Descarga LibreOffice Draw</h2>
                <p style="font-size: 18px;">Totalmente gratuito y de código abierto</p>
                <p>Compatible con Windows, macOS y Linux</p>
                <a href="https://www.libreoffice.org/download/download/" target="_blank" class="download-btn">Descargar Ahora</a>
            </div>
        </main>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Guía de LibreOffice Draw</p>
            <p>Información educativa - LibreOffice es software libre</p>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>