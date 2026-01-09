<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Completa de LibreOffice Writer</title>
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
            background: linear-gradient(135deg, #18974C 0%, #0e6b34 100%);
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
            color: #18974C;
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
            color: #18974C;
            font-size: 36px;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 3px solid #18974C;
        }

        h3 {
            color: #0e6b34;
            font-size: 24px;
            margin: 25px 0 15px 0;
        }

        .intro-box {
            background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
            padding: 30px;
            border-radius: 10px;
            border-left: 5px solid #18974C;
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
            border-left: 4px solid #18974C;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-card h4 {
            color: #18974C;
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
            background: #18974C;
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

        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .comparison-table th,
        .comparison-table td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .comparison-table th {
            background: #18974C;
            color: white;
        }

        .comparison-table tr:nth-child(even) {
            background: #f9f9f9;
        }

        .yes {
            color: #4CAF50;
            font-weight: bold;
            font-size: 20px;
        }

        .no {
            color: #f44336;
            font-weight: bold;
            font-size: 20px;
        }

        .download-section {
            background: linear-gradient(135deg, #18974C 0%, #0e6b34 100%);
            color: white;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            margin: 40px 0;
        }

        .download-btn {
            background: white;
            color: #18974C;
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
                <div class="logo">📝</div>
                <div class="header-text">
                    <h1>LibreOffice Writer</h1>
                    <p>Guía Completa y Detallada</p>
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
                <li><a href="#como-usar">Cómo Usar</a></li>
                <li><a href="#atajos">Atajos</a></li>
                <li><a href="#comparacion">Comparación</a></li>
                <li><a href="#consejos">Consejos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <main>
            <section id="que-es">
                <h2>¿Qué es LibreOffice Writer?</h2>
                <div class="intro-box">
                    <p><strong>LibreOffice Writer</strong> es un procesador de texto gratuito y de código abierto incluido en la suite LibreOffice.</p>
                    <p>Es una alternativa completa y profesional a Microsoft Word, diseñado para crear y editar documentos de texto de cualquier tipo.</p>
                    <p><strong>¿Por qué es popular?</strong> Es completamente gratuito, sin suscripciones, funciona en Windows, Mac y Linux.</p>
                </div>

                <div class="version-info">
                    <h3>📊 Información Clave</h3>
                    <p><strong>Desarrollador:</strong> The Document Foundation</p>
                    <p><strong>Licencia:</strong> MPL v2.0 (Código Abierto)</p>
                    <p><strong>Sistemas:</strong> Windows, macOS, Linux</p>
                    <p><strong>Formato Principal:</strong> ODT (Open Document Text)</p>
                    <p><strong>Idiomas:</strong> Más de 100 idiomas</p>
                </div>
            </section>

            <section id="caracteristicas">
                <h2>Características Principales</h2>

                <div class="features-grid">
                    <div class="feature-card">
                        <h4>📄 Múltiples Formatos</h4>
                        <p>ODT, DOC, DOCX, RTF, PDF y muchos más formatos compatibles.</p>
                    </div>

                    <div class="feature-card">
                        <h4>✍️ Edición Avanzada</h4>
                        <p>Estilos de párrafo, caracteres y páginas con control total.</p>
                    </div>

                    <div class="feature-card">
                        <h4>📊 Tablas e Imágenes</h4>
                        <p>Inserción de tablas, imágenes, gráficos y formas.</p>
                    </div>

                    <div class="feature-card">
                        <h4>🔤 Corrección Ortográfica</h4>
                        <p>Corrector multiidioma y sinónimos integrados.</p>
                    </div>

                    <div class="feature-card">
                        <h4>📑 Índices Automáticos</h4>
                        <p>Generación automática de tabla de contenidos.</p>
                    </div>

                    <div class="feature-card">
                        <h4>💾 Autoguardado</h4>
                        <p>Recuperación automática de documentos.</p>
                    </div>

                    <div class="feature-card">
                        <h4>🔐 Protección</h4>
                        <p>Contraseñas y firmas digitales.</p>
                    </div>

                    <div class="feature-card">
                        <h4>📧 Correspondencia</h4>
                        <p>Cartas personalizadas en masa.</p>
                    </div>

                    <div class="feature-card">
                        <h4>📐 Plantillas</h4>
                        <p>Biblioteca de plantillas prediseñadas.</p>
                    </div>

                    <div class="feature-card">
                        <h4>🔄 Control de Cambios</h4>
                        <p>Seguimiento de modificaciones.</p>
                    </div>

                    <div class="feature-card">
                        <h4>📤 Exportar PDF</h4>
                        <p>Exportación directa a PDF.</p>
                    </div>

                    <div class="feature-card">
                        <h4>🌐 100% Gratuito</h4>
                        <p>Sin costos ocultos ni suscripciones.</p>
                    </div>
                </div>
            </section>

            <section id="como-usar">
                <h2>Cómo Usar LibreOffice Writer</h2>

                <h3>1. Primeros Pasos</h3>
                <p><strong>Crear un Documento:</strong></p>
                <ul>
                    <li>Abre LibreOffice Writer</li>
                    <li>Menú "Archivo" → "Nuevo" → "Documento de Texto"</li>
                    <li>O presiona <span class="shortcut-key">Ctrl + N</span></li>
                </ul>

                <h3>2. Formato Básico</h3>
                <ul>
                    <li><strong>Negrita:</strong> <span class="shortcut-key">Ctrl + B</span></li>
                    <li><strong>Cursiva:</strong> <span class="shortcut-key">Ctrl + I</span></li>
                    <li><strong>Subrayado:</strong> <span class="shortcut-key">Ctrl + U</span></li>
                    <li><strong>Cambiar fuente:</strong> Usa el menú desplegable superior</li>
                    <li><strong>Alineación:</strong> Botones en la barra de herramientas</li>
                </ul>

                <h3>3. Trabajar con Estilos</h3>
                <ul>
                    <li>Presiona <span class="shortcut-key">F11</span> para abrir estilos</li>
                    <li>Selecciona: Título 1, Título 2, Cuerpo de texto, etc.</li>
                    <li>Modifica estilos: clic derecho → "Modificar"</li>
                    <li>Crea estilos nuevos con el botón "Nuevo estilo"</li>
                </ul>

                <h3>4. Insertar Elementos</h3>
                <ul>
                    <li><strong>Tablas:</strong> <span class="shortcut-key">Ctrl + F12</span></li>
                    <li><strong>Imágenes:</strong> Menú "Insertar" → "Imagen"</li>
                    <li><strong>Encabezados:</strong> "Insertar" → "Encabezamiento"</li>
                    <li><strong>Números de página:</strong> Desde encabezado/pie</li>
                </ul>

                <h3>5. Guardar y Exportar</h3>
                <ul>
                    <li><strong>Guardar:</strong> <span class="shortcut-key">Ctrl + S</span></li>
                    <li><strong>PDF:</strong> "Archivo" → "Exportar como PDF"</li>
                    <li><strong>Word:</strong> "Guardar como" → formato .docx</li>
                </ul>
            </section>

            <section id="atajos">
                <h2>Atajos de Teclado Esenciales</h2>

                <h3>Formato de Texto</h3>
                <table class="shortcuts-table">
                    <thead>
                        <tr>
                            <th>Atajo</th>
                            <th>Función</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + B</span></td>
                            <td>Negrita</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + I</span></td>
                            <td>Cursiva</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + U</span></td>
                            <td>Subrayado</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + Shift + P</span></td>
                            <td>Superíndice</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + Shift + B</span></td>
                            <td>Subíndice</td>
                        </tr>
                    </tbody>
                </table>

                <h3>Navegación y Edición</h3>
                <table class="shortcuts-table">
                    <thead>
                        <tr>
                            <th>Atajo</th>
                            <th>Función</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + A</span></td>
                            <td>Seleccionar todo</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + F</span></td>
                            <td>Buscar texto</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + H</span></td>
                            <td>Buscar y reemplazar</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + Z</span></td>
                            <td>Deshacer</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + Y</span></td>
                            <td>Rehacer</td>
                        </tr>
                    </tbody>
                </table>

                <h3>Funciones de Archivo</h3>
                <table class="shortcuts-table">
                    <thead>
                        <tr>
                            <th>Atajo</th>
                            <th>Función</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + N</span></td>
                            <td>Nuevo documento</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + O</span></td>
                            <td>Abrir documento</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + S</span></td>
                            <td>Guardar</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + P</span></td>
                            <td>Imprimir</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">F11</span></td>
                            <td>Panel de estilos</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">Ctrl + F12</span></td>
                            <td>Insertar tabla</td>
                        </tr>
                        <tr>
                            <td><span class="shortcut-key">F7</span></td>
                            <td>Revisión ortográfica</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="comparacion">
                <h2>Writer vs Microsoft Word</h2>

                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Característica</th>
                            <th>Writer</th>
                            <th>Word</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Precio</strong></td>
                            <td>Gratuito</td>
                            <td>De pago</td>
                        </tr>
                        <tr>
                            <td><strong>Código Abierto</strong></td>
                            <td><span class="yes">✓</span></td>
                            <td><span class="no">✗</span></td>
                        </tr>
                        <tr>
                            <td><strong>Linux</strong></td>
                            <td><span class="yes">✓</span></td>
                            <td><span class="no">✗</span></td>
                        </tr>
                        <tr>
                            <td><strong>Formato Nativo</strong></td>
                            <td>ODT</td>
                            <td>DOCX</td>
                        </tr>
                        <tr>
                            <td><strong>Compatible DOCX</strong></td>
                            <td><span class="yes">✓</span></td>
                            <td><span class="yes">✓</span></td>
                        </tr>
                        <tr>
                            <td><strong>Exportar PDF</strong></td>
                            <td><span class="yes">✓</span></td>
                            <td><span class="yes">✓</span></td>
                        </tr>
                        <tr>
                            <td><strong>Colaboración Online</strong></td>
                            <td>Limitada</td>
                            <td>Completa</td>
                        </tr>
                        <tr>
                            <td><strong>Plantillas</strong></td>
                            <td><span class="yes">✓</span></td>
                            <td><span class="yes">✓</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="consejos">
                <h2>Consejos y Mejores Prácticas</h2>

                <h3>💡 Tips Profesionales</h3>
                <ul>
                    <li><strong>Usa Estilos:</strong> Mantiene consistencia. Presiona F11 para acceder.</li>
                    <li><strong>Configura Autoguardado:</strong> "Herramientas" → "Opciones" → "Cargar/Guardar".</li>
                    <li><strong>Crea Plantillas:</strong> Para documentos frecuentes. "Archivo" → "Plantillas".</li>
                    <li><strong>Aprende Atajos:</strong> Ctrl+B, Ctrl+I, F11 te ahorrarán tiempo.</li>
                    <li><strong>Saltos de Página:</strong> Usa Ctrl+Enter, no múltiples "Enter".</li>
                    <li><strong>Usa el Navegador:</strong> Presiona F5 para moverte rápido.</li>
                    <li><strong>Revisa Ortografía:</strong> F7 antes de finalizar.</li>
                    <li><strong>Índices Automáticos:</strong> Usa estilos de título para generarlos.</li>
                    <li><strong>Guarda en Varios Formatos:</strong> ODT nativo y DOCX para compatibilidad.</li>
                    <li><strong>Control de Cambios:</strong> Para documentos colaborativos.</li>
                </ul>

                <h3>⚠️ Errores a Evitar</h3>
                <ul>
                    <li>No usar estilos (formato manual es difícil de mantener)</li>
                    <li>Usar muchos espacios en lugar de tabulaciones</li>
                    <li>No guardar frecuentemente</li>
                    <li>Ignorar la compatibilidad con Word cuando es necesaria</li>
                </ul>
            </section>

            <div class="download-section">
                <h2 style="color: white; border: none; padding: 0; margin-bottom: 20px;">Descarga LibreOffice Writer</h2>
                <p style="font-size: 18px;">Totalmente gratuito y de código abierto</p>
                <p>Compatible con Windows, macOS y Linux</p>
                <a href="https://www.libreoffice.org/download/download/" target="_blank" class="download-btn">Descargar Ahora</a>
            </div>
        </main>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Guía de LibreOffice Writer</p>
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