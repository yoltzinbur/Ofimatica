<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Completa de Microsoft Excel 2019 - Fluent Design</title>
    <link rel="stylesheet" href="../CSS/ExelS.css">
</head>
<body>
    <div class="progress-bar" id="progressBar"></div>
    
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <div class="logo-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3h18v18H3V3zm2 2v14h14V5H5zm2 2h10v2H7V7zm0 4h10v2H7v-2zm0 4h10v2H7v-2z" fill="currentColor"/>
                    </svg>
                </div>
                <span>Excel 2019</span>
            <nav class="nav">
                <a href="#index.php" class="nav-item">Inicio</a>
                <a href="#introduccion" class="nav-item">Introducción</a>
                <a href="#interfaz" class="nav-item">Interfaz</a>
                <a href="#funcionalidades" class="nav-item">Funcionalidades</a>
                <a href="#consejos" class="nav-item">Consejos</a>
            </nav>
            <div class="office-suite-nav">
                <a href="Word.php" class="suite-item">
                    <i class="icon-excel"></i>
                    <span>Word</span>
                </a>
                <a href="Exel.php" class="suite-item">
                    <i class="icon-excel"></i>
                    <span>Excel</span>
                </a>
                <a href="Powert.php" class="suite-item">
                    <i class="icon-powerpoint"></i>
                    <span>PowerPoint</span>
                </a>
                <a href="outlook-guide.html" class="suite-item">
                    <i class="icon-outlook"></i>
                    <span>Outlook</span>
                </a>
            </div>
        </div>
    </header>

    <section class="hero" id="inicio">
        <div class="hero-content">
            <h1>Domina Microsoft Excel 2019 como un Analista de Datos</h1>
            <p>La guía más completa para convertirte en un experto en Excel 2019. Desde funciones básicas hasta análisis avanzado de datos, automatización y Business Intelligence.</p>
            <div class="hero-image">
                <img src="IMG/excel-2019-hero.webp" alt="Interfaz principal de Microsoft Excel 2019" width="800" height="400">
            </div>
            <a href="#introduccion" class="cta-button">
                <span>Comenzar Aprendizaje</span>
                <span>→</span>
            </a>
        </div>
    </section>

    <section class="section intro-section" id="introduccion">
        <div class="container">
            <div class="section-title">
                <h2>¿Por qué Dominar Excel 2019?</h2>
                <p>Descubre por qué Excel 2019 sigue siendo la herramienta más poderosa para análisis de datos y toma de decisiones</p>
            </div>
            <div class="intro-content">
                <div class="intro-text">
                    <h3>La herramienta universal de datos</h3>
                    <p>Microsoft Excel ha revolucionado el mundo de los datos desde 1985. Con más de 750 millones de usuarios activos, Excel no es solo una hoja de cálculo, sino una plataforma completa de análisis de datos, modelado financiero y business intelligence.</p>
                    <p>Desde análisis estadísticos complejos hasta dashboards interactivos, Excel ofrece más de 400 funciones integradas, capacidades de programación con VBA, integración con Power BI, y herramientas de machine learning básico que lo convierten en la navaja suiza de los datos.</p>
                    <p>Dominar Excel significa aumentar tu valor profesional significativamente: los especialistas en Excel ganan en promedio 23% más que sus pares, y es la habilidad técnica más demandada en ofertas laborales según LinkedIn.</p>
                    
                    <div class="stats-grid">
                        <div class="stat-item">
                            <span class="stat-number">750M+</span>
                            <span class="stat-label">Usuarios Activos</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">400+</span>
                            <span class="stat-label">Funciones Integradas</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">89%</span>
                            <span class="stat-label">Empresas Fortune 500</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">+23%</span>
                            <span class="stat-label">Incremento Salarial</span>
                        </div>
                    </div>
                </div>
                <div class="intro-image">
                    <div class="placeholder-content">
                        <img src="IMG/excel-interface-2019.webp" alt="Interfaz de Excel 2019" width="500" height="300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nueva Sección Excel 2019 Específico -->
    <section class="section excel2019-section" id="excel2019">
        <div class="container">
            <div class="section-title">
                <h2>Microsoft Excel 2019: Nuevas Características</h2>
                <p>Conoce las funcionalidades exclusivas de Excel 2019 que revolucionan el análisis de datos</p>
            </div>
            
            <div class="excel2019-content">
                <div class="excel2019-image">
                    <img src="IMG/excel-2019-interface.webp" alt="Interfaz completa de Excel 2019 con nuevas funciones" width="600" height="400">
                </div>
                
                <div class="excel2019-features">
                    <h3>Novedades de Excel 2019</h3>
                    <div class="feature-highlight">
                        <h4>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="currentColor"/>
                            </svg>
                            Nuevas Funciones Dinámicas
                        </h4>
                        <p>Excel 2019 introduce funciones revolucionarias que cambian la forma de trabajar con datos:</p>
                        <ul class="feature-list">
                            <li><strong>CONCATENAR</strong>: Une texto de múltiples celdas con delimitadores personalizados</li>
                            <li><strong>UNIRCADENAS</strong>: Combina texto con mayor flexibilidad y opciones de formato</li>
                            <li><strong>SI.CONJUNTO</strong>: Evaluación de múltiples condiciones en una sola función</li>
                            <li><strong>CONMUTAR</strong>: Reemplaza múltiples funciones SI anidadas de forma elegante</li>
                            <li><strong>MAXIFS/MINIFS</strong>: Encuentra máximos y mínimos con criterios múltiples</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="excel2019-improvements">
                <div class="improvement-card">
                    <div class="improvement-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 9h8l-2-2v5.17A3 3 0 0 1 21 15a3 3 0 0 1-6 0c0-.35.06-.69.17-1H13v-5zM7 9v5.17A3 3 0 0 1 9 17a3 3 0 0 1-6 0 3 3 0 0 1 2-2.83V9h2zm4-7a3 3 0 0 1 3 3v5h-6V5a3 3 0 0 1 3-3z" fill="currentColor"/>
                        </svg>
                    </div>
                    <h4>Gráficos Mejorados</h4>
                    <p>Nuevos tipos de gráficos incluyen mapas 2D, gráficos de embudo, y visualizaciones de rayos solares para análisis jerárquico de datos.</p>
                    <div class="improvement-image">
                        <img src="IMG/excel-2019-charts.webp" alt="Nuevos tipos de gráficos en Excel 2019" width="300" height="200">
                    </div>
                </div>

                <div class="improvement-card">
                    <div class="improvement-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="currentColor"/>
                        </svg>
                    </div>
                    <h4>Power Query Integrado</h4>
                    <p>Herramientas ETL (Extract, Transform, Load) nativas para importar, limpiar y transformar datos de múltiples fuentes sin código.</p>
                    <div class="improvement-image">
                        <img src="IMG/power-query-2019.webp" alt="Power Query en Excel 2019" width="300" height="200">
                    </div>
                </div>

                <div class="improvement-card">
                    <div class="improvement-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" fill="currentColor"/>
                        </svg>
                    </div>
                    <h4>Ideas en Excel</h4>
                    <p>IA integrada que analiza automáticamente tus datos y sugiere insights, patrones y visualizaciones relevantes.</p>
                    <div class="improvement-image">
                        <img src="IMG/excel-ideas-2019.webp" alt="Función Ideas de Excel 2019" width="300" height="200">
                    </div>
                </div>
            </div>

            <div class="excel2019-getting-started">
                <h3>Cómo Usar Excel 2019: Guía de Inicio</h3>
                <div class="getting-started-grid">
                    <div class="getting-started-card">
                        <div class="step-number">1</div>
                        <h4>Interfaz y Navegación</h4>
                        <p>Excel 2019 mantiene la interfaz de cinta (Ribbon) pero con mejoras visuales y nuevas pestañas como "Ideas" y herramientas de colaboración mejoradas.</p>
                        <div class="step-image">
                            <img src="IMG/excel-2019-ribbon.webp" alt="Cinta de herramientas de Excel 2019" width="400" height="250">
                        </div>
                    </div>

                    <div class="getting-started-card">
                        <div class="step-number">2</div>
                        <h4>Crear tu Primer Libro</h4>
                        <p>Al abrir Excel 2019, puedes elegir entre plantillas mejoradas o crear un libro en blanco. Las plantillas incluyen modelos de análisis de datos modernos.</p>
                        <div class="step-image">
                            <img src="IMG/excel-2019-templates.webp" alt="Plantillas de Excel 2019" width="400" height="250">
                        </div>
                    </div>

                    <div class="getting-started-card">
                        <div class="step-number">3</div>
                        <h4>Entrada y Formato de Datos</h4>
                        <p>Utiliza las nuevas herramientas de formato inteligente que detectan automáticamente tipos de datos (fechas, números, texto) y aplican formato apropiado.</p>
                        <div class="step-image">
                            <img src="IMG/excel-2019-data-entry.webp" alt="Entrada de datos en Excel 2019" width="400" height="250">
                        </div>
                    </div>

                    <div class="getting-started-card">
                        <div class="step-number">4</div>
                        <h4>Primeras Fórmulas</h4>
                        <p>Comienza con fórmulas básicas como =SUMA(), =PROMEDIO(), =CONTAR() y explora el nuevo asistente de fórmulas mejorado con sugerencias inteligentes.</p>
                        <div class="step-image">
                            <img src="IMG/excel-2019-formulas.webp" alt="Editor de fórmulas en Excel 2019" width="400" height="250">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funcionalidades Principales -->
    <section class="section" id="funcionalidades">
        <div class="container">
            <div class="section-title">
                <h2>Funcionalidades Principales de Excel 2019</h2>
                <p>Explora las características más poderosas que hacen de Excel 2019 la herramienta preferida por analistas y profesionales</p>
            </div>
            <div class="cards-grid">
                <div class="card fade-in">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z" stroke="currentColor" stroke-width="2"/>
                            <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Gestión de Datos Avanzada</h3>
                    <p>Organiza, filtra y ordena millones de registros. Utiliza tablas dinámicas, validación de datos y formatos condicionales para análisis profesional.</p>
                    <div class="card-image">
                        <img src="IMG/excel-data-management.webp" alt="Gestión avanzada de datos en Excel" width="300" height="180">
                    </div>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 1v6m0 6v6m11-7h-6m-6 0H1" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Funciones y Fórmulas Complejas</h3>
                    <p>Domina las 400+ funciones de Excel 2019: matemáticas, estadísticas, financieras, lógicas, de texto y fechas. Crea modelos de datos sofisticados.</p>
                    <div class="card-image">
                        <img src="IMG/excel-functions.webp" alt="Funciones y fórmulas complejas en Excel" width="300" height="180">
                    </div>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 20V10M12 20V4m-6 16v-8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Visualización de Datos</h3>
                    <p>Crea más de 30 tipos de gráficos profesionales, mapas de calor, dashboards interactivos y reportes ejecutivos con sparklines y mini-gráficos.</p>
                    <div class="card-image">
                        <img src="IMG/excel-charts-visualization.webp" alt="Visualización de datos y gráficos en Excel" width="300" height="180">
                    </div>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" stroke="currentColor" stroke-width="2"/>
                            <polyline points="3.27,6.96 12,12.01 20.73,6.96" stroke="currentColor" stroke-width="2"/>
                            <line x1="12" y1="22.08" x2="12" y2="12" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Power Query y ETL</h3>
                    <p>Extrae, transforma y carga datos de múltiples fuentes: bases de datos, web, archivos, APIs. Automatiza la limpieza y preparación de datos.</p>
                    <div class="card-image">
                        <img src="IMG/power-query-interface.webp" alt="Power Query para ETL de datos" width="300" height="180">
                    </div>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                            <rect x="9" y="9" width="6" height="6" stroke="currentColor" stroke-width="2"/>
                            <line x1="9" y1="1" x2="9" y2="3" stroke="currentColor" stroke-width="2"/>
                            <line x1="15" y1="1" x2="15" y2="3" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Power Pivot y Modelado</h3>
                    <p>Crea modelos de datos relacionales, utiliza DAX para análisis avanzados y maneja millones de registros con el motor xVelocity.</p>
                    <div class="card-image">
                        <img src="IMG/power-pivot-model.webp" alt="Power Pivot para modelado de datos" width="300" height="180">
                    </div>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 18l2-2 4 4-2 2-4-4zM2 18h8l-8 0z" stroke="currentColor" stroke-width="2"/>
                            <circle cx="9" cy="9" r="7" stroke="currentColor" stroke-width="2"/>
                            <path d="M9 1v16M1 9h16" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Automatización con VBA y Macros</h3>
                    <p>Programa soluciones personalizadas, automatiza tareas repetitivas y crea aplicaciones empresariales completas con Visual Basic para Aplicaciones.</p>
                    <div class="card-image">
                        <img src="IMG/vba-macros-editor.webp" alt="Editor VBA y macros en Excel" width="300" height="180">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funciones Avanzadas Expandida -->
    <section class="section advanced-section" id="avanzado">
        <div class="container">
            <div class="section-title">
                <h2>Funciones Avanzadas de Excel 2019</h2>
                <p>Domina las funciones más potentes para análisis profesional de datos</p>
            </div>
            
            <div class="feature-highlight fade-in">
                <h4>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                        <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Funciones de Búsqueda y Referencia
                </h4>
                <p>Las funciones más utilizadas en entornos empresariales para cruzar información y crear reportes dinámicos:</p>
                <div class="functions-grid">
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">V</div>
                            <div class="function-name">BUSCARV / VLOOKUP</div>
                        </div>
                        <div class="function-syntax">=BUSCARV(valor_buscado, tabla, columna, [exacto])</div>
                        <p>Busca verticalmente en la primera columna de una tabla y devuelve un valor de otra columna. Fundamental para cruzar bases de datos.</p>
                        <div class="function-image">
                            <img src="IMG/vlookup-example.webp" alt="Ejemplo de función BUSCARV" width="250" height="150">
                        </div>
                    </div>
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">H</div>
                            <div class="function-name">BUSCARH / HLOOKUP</div>
                        </div>
                        <div class="function-syntax">=BUSCARH(valor_buscado, tabla, fila, [exacto])</div>
                        <p>Versión horizontal de BUSCARV. Ideal para tablas organizadas por filas en lugar de columnas.</p>
                        <div class="function-image">
                            <img src="IMG/hlookup-example.webp" alt="Ejemplo de función BUSCARH" width="250" height="150">
                        </div>
                    </div>
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">I</div>
                            <div class="function-name">INDICE + COINCIDIR</div>
                        </div>
                        <div class="function-syntax">=INDICE(columna, COINCIDIR(valor, rango, 0))</div>
                        <p>Combinación más flexible y potente que BUSCARV. Permite búsquedas bidireccionales y es más eficiente.</p>
                        <div class="function-image">
                            <img src="IMG/index-match-example.webp" alt="Ejemplo de INDICE y COINCIDIR" width="250" height="150">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="feature-highlight fade-in">
                <h4>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 20V10M12 20V4m-6 16v-8" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Funciones Estadísticas y Matemáticas
                </h4>
                <p>Herramientas esenciales para análisis cuantitativo y toma de decisiones basada en datos:</p>
                <div class="functions-grid">
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">Σ</div>
                            <div class="function-name">SUMAR.SI / SUMIF</div>
                        </div>
                        <div class="function-syntax">=SUMAR.SI(rango, criterio, [rango_suma])</div>
                        <p>Suma valores que cumplan una condición específica. Base para análisis financiero y reportes por categorías.</p>
                        <div class="function-image">
                            <img src="IMG/sumif-example.webp" alt="Ejemplo de función SUMAR.SI" width="250" height="150">
                        </div>
                    </div>
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">Σ+</div>
                            <div class="function-name">SUMAR.SI.CONJUNTO</div>
                        </div>
                        <div class="function-syntax">=SUMAR.SI.CONJUNTO(rango_suma, criterio1, rango1...)</div>
                        <p>Suma con múltiples criterios simultáneos. Esencial para análisis multidimensional de datos.</p>
                        <div class="function-image">
                            <img src="IMG/sumifs-example.webp" alt="Ejemplo de SUMAR.SI.CONJUNTO" width="250" height="150">
                        </div>
                    </div>
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">#</div>
                            <div class="function-name">CONTAR.SI / COUNTIF</div>
                        </div>
                        <div class="function-syntax">=CONTAR.SI(rango, criterio)</div>
                        <p>Cuenta celdas que cumplen una condición. Fundamental para análisis demográfico y control de calidad.</p>
                        <div class="function-image">
                            <img src="IMG/countif-example.webp" alt="Ejemplo de función CONTAR.SI" width="250" height="150">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="feature-highlight fade-in">
                <h4>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Funciones Lógicas Avanzadas
                </h4>
                <p>Construye lógica compleja para automatizar decisiones y crear modelos inteligentes:</p>
                <div class="functions-grid">
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">?</div>
                            <div class="function-name">SI anidados</div>
                        </div>
                        <div class="function-syntax">=SI(condición1, resultado1, SI(condición2, resultado2, resultado3))</div>
                        <p>Evaluaciones lógicas múltiples para categorización y análisis de escenarios complejos.</p>
                        <div class="function-image">
                            <img src="IMG/nested-if-example.webp" alt="Ejemplo de SI anidados" width="250" height="150">
                        </div>
                    </div>
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">🎯</div>
                            <div class="function-name">CONMUTAR (Excel 2019)</div>
                        </div>
                        <div class="function-syntax">=CONMUTAR(expresión, valor1, resultado1, valor2, resultado2...)</div>
                        <p>Reemplaza múltiples SI anidados. Más limpio y eficiente para lógica compleja de múltiples condiciones.</p>
                        <div class="function-image">
                            <img src="IMG/switch-function-example.webp" alt="Ejemplo de función CONMUTAR" width="250" height="150">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="feature-highlight fade-in">
                <h4>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Nuevas Funciones de Excel 2019
                </h4>
                <p>Las funciones más innovadoras introducidas en Excel 2019:</p>
                <div class="functions-grid">
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">📝</div>
                            <div class="function-name">CONCATENAR</div>
                        </div>
                        <div class="function-syntax">=CONCATENAR(delimitador, omitir_vacías, texto1, [texto2], ...)</div>
                        <p>Une múltiples cadenas de texto con un delimitador especificado, con opción de omitir celdas vacías.</p>
                        <div class="function-image">
                            <img src="IMG/concatenate-function.webp" alt="Ejemplo de función CONCATENAR" width="250" height="150">
                        </div>
                    </div>
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">🔗</div>
                            <div class="function-name">UNIRCADENAS</div>
                        </div>
                        <div class="function-syntax">=UNIRCADENAS(delimitador, omitir_vacías, texto1, [texto2], ...)</div>
                        <p>Versión mejorada de CONCATENAR con mayor flexibilidad para unir rangos de celdas.</p>
                        <div class="function-image">
                            <img src="IMG/textjoin-function.webp" alt="Ejemplo de función UNIRCADENAS" width="250" height="150">
                        </div>
                    </div>
                    <div class="function-card">
                        <div class="function-header">
                            <div class="function-icon">🔍</div>
                            <div class="function-name">MAXIFS / MINIFS</div>
                        </div>
                        <div class="function-syntax">=MAXIFS(rango_max, criterio_rango1, criterio1, ...)</div>
                        <p>Encuentra el valor máximo o mínimo que cumple múltiples criterios especificados.</p>
                        <div class="function-image">
                            <img src="IMG/maxifs-minifs-example.webp" alt="Ejemplo de MAXIFS y MINIFS" width="250" height="150">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nueva Sección de Atajos de Teclado -->
    <section class="section shortcuts-section" id="atajos">
        <div class="container">
            <div class="section-title">
                <h2>Atajos de Teclado para Excel 2019</h2>
                <p>Domina estos atajos esenciales para aumentar tu productividad hasta 10 veces más rápido</p>
            </div>
            
            <div class="shortcuts-categories">
                <div class="shortcut-category fade-in">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Atajos Básicos Esenciales</h3>
                    </div>
                    <div class="shortcuts-grid">
                        <div class="shortcut-item">
                            <span class="shortcut-action">Nuevo libro</span>
                            <span class="shortcut-keys">Ctrl + N</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Abrir archivo</span>
                            <span class="shortcut-keys">Ctrl + A</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Guardar</span>
                            <span class="shortcut-keys">Ctrl + S</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Guardar como</span>
                            <span class="shortcut-keys">F12</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Imprimir</span>
                            <span class="shortcut-keys">Ctrl + P</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Deshacer</span>
                            <span class="shortcut-keys">Ctrl + Z</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Rehacer</span>
                            <span class="shortcut-keys">Ctrl + Y</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Cerrar libro</span>
                            <span class="shortcut-keys">Ctrl + W</span>
                        </div>
                    </div>
                    <div class="category-image">
                        <img src="IMG/excel-basic-shortcuts.webp" alt="Atajos básicos de Excel 2019" width="300" height="200">
                    </div>
                </div>

                <div class="shortcut-category fade-in">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 2v4l-6 6v10h20V12l-6-6V2H8z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Navegación y Selección</h3>
                    </div>
                    <div class="shortcuts-grid">
                        <div class="shortcut-item">
                            <span class="shortcut-action">Ir a celda específica</span>
                            <span class="shortcut-keys">Ctrl + I</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Seleccionar toda la hoja</span>
                            <span class="shortcut-keys">Ctrl + E</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Seleccionar hasta final de datos</span>
                            <span class="shortcut-keys">Ctrl + Shift + Fin</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Seleccionar fila completa</span>
                            <span class="shortcut-keys">Shift + Espacio</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Seleccionar columna completa</span>
                            <span class="shortcut-keys">Ctrl + Espacio</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Moverse al inicio de la fila</span>
                            <span class="shortcut-keys">Inicio</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Moverse al final de datos</span>
                            <span class="shortcut-keys">Ctrl + Fin</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Moverse al inicio del libro</span>
                            <span class="shortcut-keys">Ctrl + Inicio</span>
                        </div>
                    </div>
                    <div class="category-image">
                        <img src="IMG/excel-navigation-shortcuts.webp" alt="Atajos de navegación en Excel" width="300" height="200">
                    </div>
                </div>

                <div class="shortcut-category fade-in">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Edición y Formato</h3>
                    </div>
                    <div class="shortcuts-grid">
                        <div class="shortcut-item">
                            <span class="shortcut-action">Editar celda activa</span>
                            <span class="shortcut-keys">F2</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Insertar fecha actual</span>
                            <span class="shortcut-keys">Ctrl + ;</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Insertar hora actual</span>
                            <span class="shortcut-keys">Ctrl + Shift + ;</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Llenar hacia abajo</span>
                            <span class="shortcut-keys">Ctrl + D</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Llenar hacia la derecha</span>
                            <span class="shortcut-keys">Ctrl + R</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Formato de celdas</span>
                            <span class="shortcut-keys">Ctrl + 1</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Aplicar negrita</span>
                            <span class="shortcut-keys">Ctrl + B</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Aplicar cursiva</span>
                            <span class="shortcut-keys">Ctrl + I</span>
                        </div>
                    </div>
                    <div class="category-image">
                        <img src="IMG/excel-editing-shortcuts.webp" alt="Atajos de edición en Excel" width="300" height="200">
                    </div>
                </div>

                <div class="shortcut-category fade-in">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z" stroke="currentColor" stroke-width="2"/>
                                <path d="M14 2v6h6" stroke="currentColor" stroke-width="2"/>
                                <path d="M16 13H8" stroke="currentColor" stroke-width="2"/>
                                <path d="M16 17H8" stroke="currentColor" stroke-width="2"/>
                                <path d="M10 9H8" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Fórmulas y Funciones</h3>
                    </div>
                    <div class="shortcuts-grid">
                        <div class="shortcut-item">
                            <span class="shortcut-action">Insertar función SUMA automática</span>
                            <span class="shortcut-keys">Alt + =</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Mostrar fórmulas</span>
                            <span class="shortcut-keys">Ctrl + `</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Calcular solo hoja activa</span>
                            <span class="shortcut-keys">Shift + F9</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Calcular todo el libro</span>
                            <span class="shortcut-keys">F9</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Calcular todo y verificar dependencias</span>
                            <span class="shortcut-keys">Ctrl + Alt + F9</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Evaluar fórmula paso a paso</span>
                            <span class="shortcut-keys">Alt + M + V</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Insertar nombre en fórmula</span>
                            <span class="shortcut-keys">F3</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Crear nombre desde selección</span>
                            <span class="shortcut-keys">Ctrl + Shift + F3</span>
                        </div>
                    </div>
                    <div class="category-image">
                        <img src="IMG/excel-formula-shortcuts.webp" alt="Atajos de fórmulas en Excel" width="300" height="200">
                    </div>
                </div>

                <div class="shortcut-category fade-in">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                <rect x="9" y="9" width="6" height="6" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Tablas y Análisis de Datos</h3>
                    </div>
                    <div class="shortcuts-grid">
                        <div class="shortcut-item">
                            <span class="shortcut-action">Crear tabla</span>
                            <span class="shortcut-keys">Ctrl + T</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Insertar tabla dinámica</span>
                            <span class="shortcut-keys">Alt + N + V</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Aplicar filtro automático</span>
                            <span class="shortcut-keys">Ctrl + Shift + L</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Ordenar A a Z</span>
                            <span class="shortcut-keys">Alt + D + S + S</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Ordenar Z a A</span>
                            <span class="shortcut-keys">Alt + D + S + D</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Insertar gráfico</span>
                            <span class="shortcut-keys">Alt + F1</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Subtotales</span>
                            <span class="shortcut-keys">Alt + D + B</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Validación de datos</span>
                            <span class="shortcut-keys">Alt + D + L</span>
                        </div>
                    </div>
                    <div class="category-image">
                        <img src="IMG/excel-data-analysis-shortcuts.webp" alt="Atajos de análisis de datos" width="300" height="200">
                    </div>
                </div>

                <div class="shortcut-category fade-in">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Atajos Avanzados de Productividad</h3>
                    </div>
                    <div class="shortcuts-grid">
                        <div class="shortcut-item">
                            <span class="shortcut-action">Pegado especial</span>
                            <span class="shortcut-keys">Ctrl + Alt + V</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Buscar y reemplazar</span>
                            <span class="shortcut-keys">Ctrl + L</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Insertar hoja nueva</span>
                            <span class="shortcut-keys">Shift + F11</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Cambiar entre hojas</span>
                            <span class="shortcut-keys">Ctrl + Re Pág/Av Pág</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Agrupar filas/columnas</span>
                            <span class="shortcut-keys">Alt + Shift + →</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Desagrupar</span>
                            <span class="shortcut-keys">Alt + Shift + ←</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Ocultar filas</span>
                            <span class="shortcut-keys">Ctrl + 9</span>
                        </div>
                        <div class="shortcut-item">
                            <span class="shortcut-action">Ocultar columnas</span>
                            <span class="shortcut-keys">Ctrl + 0</span>
                        </div>
                    </div>
                    <div class="category-image">
                        <img src="IMG/excel-advanced-shortcuts.webp" alt="Atajos avanzados de Excel" width="300" height="200">
                    </div>
                </div>
            </div>

            <div class="shortcuts-tips">
                <div class="tip-highlight">
                    <h4>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2l3.09 6.26L22 9l-5 4.87 1.18 6.88L12 17.77l-6.18 2.98L7 14.87 2 9l6.91-1.74L12 2z" fill="currentColor"/>
                        </svg>
                        Consejos para Memorizar Atajos
                    </h4>
                    <ul class="tip-list">
                        <li>Practica los 10 atajos más básicos durante una semana antes de aprender nuevos</li>
                        <li>Usa las teclas Alt para acceder a todos los menús de la cinta de opciones</li>
                        <li>Combina Ctrl + Shift para seleccionar rangos mientras te mueves</li>
                        <li>Los atajos con F# (F1-F12) son específicos para funciones especiales</li>
                        <li>Personaliza tus propios atajos en Archivo → Opciones → Personalizar cinta</li>
                    </ul>
                </div>
                <div class="shortcuts-practice-image">
                    <img src="IMG/excel-shortcuts-practice.webp" alt="Práctica de atajos de teclado en Excel" width="400" height="250">
                </div>
            </div>
        </div>
    </section>

    <!-- Tutoriales Mejorados -->
    <section class="section" id="tutoriales">
        <div class="container">
            <div class="section-title">
                <h2>Tutoriales Paso a Paso para Excel 2019</h2>
                <p>Aprende con nuestros tutoriales estructurados desde nivel principiante hasta experto en análisis de datos</p>
            </div>
            <div class="cards-grid">
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <img src="IMG/excel-formulas-tutorial.webp" alt="Tutorial de fórmulas básicas en Excel 2019" width="350" height="200">
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 25 minutos</span>
                            <span class="difficulty-badge difficulty-beginner">Principiante</span>
                        </div>
                        <h3>Fundamentos y Fórmulas Básicas</h3>
                        <p>Domina referencias absolutas y relativas, operadores matemáticos, funciones esenciales (SUMA, PROMEDIO, MAX, MIN) y creación de fórmulas robustas para análisis básico.</p>
                    </div>
                </div>
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <img src="IMG/vlookup-tutorial.webp" alt="Tutorial de funciones BUSCARV en Excel 2019" width="350" height="200">
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 40 minutos</span>
                            <span class="difficulty-badge difficulty-intermediate">Intermedio</span>
                        </div>
                        <h3>Búsquedas y Funciones Avanzadas</h3>
                        <p>Aprende BUSCARV, INDICE+COINCIDIR, funciones SI anidadas, CONMUTAR y combinaciones complejas para crear sistemas de análisis profesional y reportes dinámicos.</p>
                    </div>
                </div>
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <img src="IMG/pivot-table-tutorial.webp" alt="Tutorial de tablas dinámicas profesionales" width="350" height="200">
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 60 minutos</span>
                            <span class="difficulty-badge difficulty-advanced">Avanzado</span>
                        </div>
                        <h3>Tablas Dinámicas y Business Intelligence</h3>
                        <p>Crea tablas dinámicas complejas, segmentaciones interactivas, campos calculados, KPIs automáticos y dashboards ejecutivos para toma de decisiones estratégicas.</p>
                    </div>
                </div>
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <img src="IMG/power-query-tutorial.webp" alt="Tutorial de Power Query en funcionamiento" width="350" height="200">
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 45 minutos</span>
                            <span class="difficulty-badge difficulty-advanced">Avanzado</span>
                        </div>
                        <h3>Power Query y ETL de Datos</h3>
                        <p>Automatiza la extracción, transformación y carga de datos de múltiples fuentes: bases de datos, web, APIs. Limpia y prepara datos para análisis avanzado.</p>
                    </div>
                </div>
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <img src="IMG/excel-charts-tutorial.webp" alt="Tutorial de gráficos profesionales en Excel 2019" width="350" height="200">
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 35 minutos</span>
                            <span class="difficulty-badge difficulty-intermediate">Intermedio</span>
                        </div>
                        <h3>Visualización y Gráficos Avanzados</h3>
                        <p>Crea gráficos profesionales, combina tipos de gráfico, utiliza ejes secundarios, aplica temas corporativos y diseña dashboards impactantes para presentaciones ejecutivas.</p>
                    </div>
                </div>
                <div class="tutorial-card fade-in">
                    <div class="tutorial-image">
                        <img src="IMG/vba-macros-tutorial.webp" alt="Tutorial de macros y VBA en Excel" width="350" height="200">
                    </div>
                    <div class="tutorial-content">
                        <div class="tutorial-meta">
                            <span>⏱️ 55 minutos</span>
                            <span class="difficulty-badge difficulty-advanced">Avanzado</span>
                        </div>
                        <h3>Automatización con Macros y VBA</h3>
                        <p>Programa macros para automatizar tareas repetitivas, crea formularios interactivos, desarrolla aplicaciones empresariales y optimiza flujos de trabajo complejos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Consejos y Trucos Expandidos -->
    <section class="section" id="consejos">
        <div class="container">
            <div class="section-title">
                <h2>Consejos y Trucos de Productividad para Excel 2019</h2>
                <p>Técnicas profesionales y trucos que utilizan los analistas de datos más eficientes</p>
            </div>
            <div class="tips-container">
                <div class="tip-card fade-in">
                    <div class="tip-header">
                        <div class="tip-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                <path d="M9 9h6v6H9z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h4 class="tip-title">Mejores Prácticas para Tablas de Datos</h4>
                    </div>
                    <p>Estructura tus datos como un profesional para facilitar el análisis y evitar errores comunes:</p>
                    <ul class="feature-list">
                        <li>Siempre convierte rangos de datos en tablas (Ctrl+T) para obtener funcionalidad avanzada</li>
                        <li>Usa una sola fila de encabezados descriptivos y sin espacios en blanco</li>
                        <li>Evita celdas combinadas y datos en encabezados - mantén estructura rectangular</li>
                        <li>Aplica validación de datos para prevenir errores de entrada</li>
                        <li>Utiliza formato condicional para identificar outliers y patrones automáticamente</li>
                        <li>Documenta tus fórmulas complejas con comentarios para futura referencia</li>
                    </ul>
                    <div class="tip-image">
                        <img src="IMG/excel-data-structure-best-practices

                            <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Guía Completa de Word 2019</h4>
                    <p>La resource definitiva para dominar Microsoft Word 2019 desde nivel principiante hasta experto. Aprende técnicas profesionales, atajos de productividad y funcionalidades avanzadas específicas de esta versión.</p>
                    <p>Manténte actualizado con las características más recientes y mejores prácticas de la suite Microsoft Office 2019.</p>
                </div>
                <div class="footer-section">
                    <h4>Navegación Rápida</h4>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#introduccion">Introducción</a></li>
                        <li><a href="#interfaz">Interfaz</a></li>
                        <li><a href="#funcionalidades">Funcionalidades</a></li>
                        <li><a href="#tutoriales">Tutoriales</a></li>
                        <li><a href="#atajos">Atajos de Teclado</a></li>
                        <li><a href="#consejos">Consejos</a></li>
                        <li><a href="#avanzado">Funciones Avanzadas</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Recursos Descargables</h4>
                    <ul>
                        <li><a href="#">Plantillas Profesionales Word 2019</a></li>
                        <li><a href="#">Guía Completa de Atajos PDF</a></li>
                        <li><a href="#">Macros y Automatización VBA</a></li>
                        <li><a href="#">Videotutoriales HD Completos</a></li>
                        <li><a href="#">Ejercicios Prácticos Interactivos</a></li>
                        <li><a href="#">Certificaciones Microsoft Oficiales</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Suite Office 2019 Completa</h4>
                    <ul>
                        <li><a href="excel-2019-guide.html">Microsoft Excel 2019</a></li>
                        <li><a href="powerpoint-2019-guide.html">Microsoft PowerPoint 2019</a></li>
                        <li><a href="outlook-2019-guide.html">Microsoft Outlook 2019</a></li>
                        <li><a href="access-2019-guide.html">Microsoft Access 2019</a></li>
                        <li><a href="publisher-2019-guide.html">Microsoft Publisher 2019</a></li>
                        <li><a href="onenote-2019-guide.html">Microsoft OneNote 2019</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Guía Completa de Microsoft Word 2019. Todos los derechos reservados. | Diseñado con Fluent Design System | Microsoft Office 2019 Edition</p>
                <div class="footer-badges">
                    <span class="badge">Microsoft Certified</span>
                    <span class="badge">Professional Training</span>
                    <span class="badge">Enterprise Ready</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="Script1.js"></script>
</body>
</html>