<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CECyTEM - Formando Profesionales Técnicos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, #0055A4 0%, #003A70 100%);
            color: white;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            position: relative;
            overflow: hidden;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .logo-container img {
            max-width: 300px;
            height: auto;
            filter: drop-shadow(0 0 10px rgba(255,255,255,0.3));
        }

        header h1 {
            font-size: 1.8rem;
            margin: 10px 0;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        nav {
            background-color: #E20020;
            padding: 0.8rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            transition: all 0.3s;
            font-weight: bold;
            display: block;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .banner {
            width: 100%;
            height: 500px;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            border-radius: 0;
            margin: 2rem 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-align: center;
        }

        .banner-text {
            max-width: 800px;
            padding: 30px;
            position: relative;
            z-index: 2;
            background-color: rgba(0, 84, 166, 0.8);
            border-radius: 10px;
            color: white;
        }

        .banner h2 {
            color: white;
            margin-bottom: 1rem;
            font-size: 2.2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .banner p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            background-color: #0055A4;
            color: white;
            padding: 20px;
            margin: 30px 0;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .stat-item {
            text-align: center;
            padding: 15px;
            flex: 1;
            min-width: 200px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #FFD700;
        }

        .stat-label {
            font-size: 1.1rem;
        }

        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }

        .section {
            margin-bottom: 3rem;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            position: relative;
            overflow: hidden;
        }

        .section h2 {
            color: #0055A4;
            border-bottom: 3px solid #E20020;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            display: inline-block;
        }

        .section p {
            margin-bottom: 1rem;
            text-align: justify;
        }

        .carreras-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        .carrera-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1.5rem;
            background: linear-gradient(to bottom, #f9f9f9, #fff);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .carrera-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border-color: #0055A4;
        }

        .carrera-card h3 {
            color: #0055A4;
            margin-bottom: 0.8rem;
            font-size: 1.4rem;
            border-bottom: 2px solid #E20020;
            padding-bottom: 8px;
        }

        .carrera-card p {
            margin-bottom: 1rem;
        }

        .carrera-features {
            list-style: none;
            margin-top: 15px;
        }

        .carrera-features li {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        .carrera-features i {
            color: #E20020;
            margin-right: 10px;
        }

        .eventos-list {
            list-style: none;
        }

        .eventos-list li {
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 30px;
        }

        .eventos-list li:last-child {
            border-bottom: none;
        }

        .eventos-list li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 5px;
            width: 20px;
            height: 20px;
            background-color: #0055A4;
            border-radius: 50%;
        }

        .date {
            font-weight: bold;
            color: #E20020;
            display: block;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .planteles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .plantel-item {
            background: linear-gradient(to right, #f0f8ff, #e1f0ff);
            padding: 20px;
            border-radius: 8px;
            border-left: 5px solid #0055A4;
            transition: all 0.3s;
        }

        .plantel-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .mission-vision {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 25px;
        }

        .mission, .vision {
            flex: 1;
            min-width: 300px;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .mission h3, .vision h3 {
            color: #E20020;
            margin-bottom: 15px;
            border-bottom: 2px solid #0055A4;
            padding-bottom: 8px;
        }

        footer {
            background: linear-gradient(135deg, #2c3e50 0%, #1a2530 100%);
            color: white;
            padding: 2rem 0 1rem;
            margin-top: 2rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 1rem;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            padding: 1rem;
            text-align: center;
        }

        .footer-section h3 {
            color: #FFD700;
            margin-bottom: 1rem;
            font-size: 1.2rem;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            padding-bottom: 8px;
        }

        .footer-section p {
            margin-bottom: 0.8rem;
            line-height: 1.6;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            color: #E20020;
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            margin-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.8;
            width: 100%;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 1.4rem;
            }
            
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            
            nav ul li {
                width: 100%;
                text-align: center;
                margin: 5px 0;
            }
            
            .banner {
                height: auto;
                padding: 3rem 1rem;
            }
            
            .banner h2 {
                font-size: 1.8rem;
            }
            
            .stats-container {
                flex-direction: column;
            }
            
            .footer-content {
                flex-direction: column;
            }
            
            .mission-vision {
                flex-direction: column;
            }
        }

        .highlight {
            background-color: #FFF9E6;
            border-left: 4px solid #FFD700;
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }

        .quote {
            font-style: italic;
            color: #0055A4;
            text-align: center;
            padding: 20px;
            margin: 30px 0;
            background-color: #F0F8FF;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .quote::before, .quote::after {
            content: """;
            font-size: 2rem;
            color: #E20020;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="img/logo.png" alt="Logo CECyTEM">
        </div>
        <h1>Colegio de Estudios Científicos y Tecnológicos del Estado de México</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#oferta">Oferta Educativa</a></li>
            <li><a href="#planteles">Planteles</a></li>
            <li><a href="#eventos">Eventos</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><a href="reguistro.html">Registros</a></li>
        </ul>
    </nav>
    
    <div class="banner" id="inicio">
        <div class="banner-text">
            <h2>Formando profesionales técnicos en el Estado de México</h2>
            <p>Educación de calidad con enfoque científico y tecnológico para el desarrollo profesional y personal de nuestros estudiantes.</p>
        </div>
    </div>
    
    <main>
        <section id="nosotros" class="section">
            <h2>Quiénes Somos</h2>
            <p>El Colegio de Estudios Científicos y Tecnológicos del Estado de México (CECyTEM) es una institución de educación media superior tecnológica que ofrece a los jóvenes mexiquenses una formación integral basada en el desarrollo de competencias y habilidades para su incorporación a la educación superior o al sector productivo.</p>
            
            <p>Fundado en 1994, el CECyTEM ha crecido hasta convertirse en una de las instituciones educativas más importantes del Estado de México, con una amplia cobertura en toda la entidad. Nuestro modelo educativo combina la formación científica y humanística con la capacitación tecnológica, preparando a los estudiantes para los desafíos del mundo actual.</p>
            
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">65</div>
                    <div class="stat-label">Planteles</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">30,000+</div>
                    <div class="stat-label">Estudiantes</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Carreras Técnicas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">27</div>
                    <div class="stat-label">Años de Experiencia</div>
                </div>
            </div>
            
            <div class="mission-vision">
                <div class="mission">
                    <h3>Misión</h3>
                    <p>Formar técnicos profesionales a través de un bachillerato tecnológico que integre una educación científica y humanística con una capacitación tecnológica, para contribuir al desarrollo sustentable de la entidad y del país.</p>
                </div>
                <div class="vision">
                    <h3>Visión</h3>
                    <p>Ser la institución de educación media superior tecnológica de mayor reconocimiento en el Estado de México por su calidad educativa, innovación y contribución al desarrollo social y económico de la región.</p>
                </div>
            </div>
            
            <div class="highlight">
                <p>El CECyTEM cuenta con certificaciones de calidad educativa y forma parte del Sistema Nacional de Educación Media Superior, garantizando que nuestros programas cumplan con los más altos estándares educativos.</p>
            </div>
        </section>
        
        <section id="oferta" class="section">
            <h2>Oferta Educativa</h2>
            <p>Nuestros programas educativos están diseñados para preparar a los estudiantes con conocimientos teóricos y prácticos en diversas áreas tecnológicas, con especial enfoque en las demandas del sector productivo actual:</p>
            
            <div class="carreras-grid">
                <div class="carrera-card">
                    <h3>Técnico en Programación</h3>
                    <p>Formamos desarrolladores capaces de crear soluciones tecnológicas innovadoras. Los estudiantes aprenden a diseñar, desarrollar e implementar software de aplicación en diversos lenguajes de programación.</p>
                    <ul class="carrera-features">
                        <li><i class="fas fa-check"></i> Desarrollo de aplicaciones web y móviles</li>
                        <li><i class="fas fa-check"></i> Bases de datos y sistemas de información</li>
                        <li><i class="fas fa-check"></i> Programación orientada a objetos</li>
                        <li><i class="fas fa-check"></i> Alta demanda en el mercado laboral</li>
                    </ul>
                </div>
                
                <div class="carrera-card">
                    <h3>Técnico en Logística</h3>
                    <p>Formamos profesionales en la gestión de cadena de suministro, capaces de planificar, implementar y controlar el flujo eficiente de materiales y productos.</p>
                    <ul class="carrera-features">
                        <li><i class="fas fa-check"></i> Gestión de almacenes e inventarios</li>
                        <li><i class="fas fa-check"></i> Planificación de transporte y distribución</li>
                        <li><i class="fas fa-check"></i> Optimización de procesos logísticos</li>
                        <li><i class="fas fa-check"></i> Cadena de suministro global</li>
                    </ul>
                </div>
                
                <div class="carrera-card">
                    <h3>Desarrollo Organizacional</h3>
                    <p>Formamos especialistas en mejorar el desempeño organizacional a través del desarrollo del capital humano, el análisis de procesos y la implementación de cambios estratégicos.</p>
                    <ul class="carrera-features">
                        <li><i class="fas fa-check"></i> Gestión de recursos humanos</li>
                        <li><i class="fas fa-check"></i> Desarrollo de talento</li>
                        <li><i class="fas fa-check"></i> Mejora de procesos organizacionales</li>
                        <li><i class="fas fa-check"></i> Consultoría empresarial</li>
                    </ul>
                </div>
                
                <div class="carrera-card">
                    <h3>Enfermería</h3>
                    <p>Formamos profesionales de la salud capacitados para brindar cuidado integral al paciente, promoviendo la salud y previniendo enfermedades en diferentes contextos clínicos.</p>
                    <ul class="carrera-features">
                        <li><i class="fas fa-check"></i> Atención directa al paciente</li>
                        <li><i class="fas fa-check"></i> Promoción de la salud</li>
                        <li><i class="fas fa-check"></i> Técnicas de enfermería</li>
                        <li><i class="fas fa-check"></i> Trabajo en equipo multidisciplinario</li>
                    </ul>
                </div>
                
                <div class="carrera-card">
                    <h3>Ingeniería Industrial</h3>
                    <p>Formamos profesionales capaces de optimizar recursos, procesos y sistemas de producción para aumentar la productividad y calidad en las organizaciones.</p>
                    <ul class="carrera-features">
                        <li><i class="fas fa-check"></i> Optimización de procesos productivos</li>
                        <li><i class="fas fa-check"></i> Gestión de calidad</li>
                        <li><i class="fas fa-check"></i> Seguridad industrial</li>
                        <li><i class="fas fa-check"></i> Logística y cadena de suministro</li>
                    </ul>
                </div>
                
                <div class="carrera-card">
                    <h3>Técnico en Contabilidad</h3>
                    <p>Formamos profesionales capaces de registrar, clasificar y resumir la información financiera de las organizaciones, cumpliendo con la normatividad vigente.</p>
                    <ul class="carrera-features">
                        <li><i class="fas fa-check"></i> Registro de operaciones contables</li>
                        <li><i class="fas fa-check"></i> Elaboración de estados financieros</li>
                        <li><i class="fas fa-check"></i> Aplicación de normas fiscales</li>
                        <li><i class="fas fa-check"></i> Uso de software especializado</li>
                    </ul>
                </div>
            </div>
            
            <div class="quote">
                "Nuestras carreras técnicas tienen una duración de 3 años (6 semestres) y al concluir, los estudiantes obtienen tanto el certificado de bachillerato como el título de técnico profesional, lo que les permite incorporarse inmediatamente al mercado laboral o continuar sus estudios a nivel superior."
            </div>
        </section>
        
        <section id="planteles" class="section">
            <h2>Nuestros Planteles</h2>
            <p>Contamos con una amplia red de planteles distribuidos estratégicamente en el Estado de México para brindar acceso a educación tecnológica de calidad en todas las regiones:</p>
            
            <div class="planteles-grid">
                <div class="plantel-item">Valle de Chalco</div>
                <div class="plantel-item">Chimalhuacán</div>
                <div class="plantel-item">Ecatepec</div>
                <div class="plantel-item">Nicolás Romero</div>
                <div class="plantel-item">La Paz</div>
                <div class="plantel-item">Tecámac</div>
                <div class="plantel-item">Metepec</div>
                <div class="plantel-item">Jilotepec</div>
                <div class="plantel-item">Cuautitlán Izcalli</div>
                <div class="plantel-item">Ixtapaluca</div>
                <div class="plantel-item">Coatepec Harinas</div>
                <div class="plantel-item">Tultitlán</div>
                <div class="plantel-item">Zumpango</div>
                <div class="plantel-item">Texcoco</div>
                <div class="plantel-item">Nezahualcóyotl</div>
                <div class="plantel-item">Y muchos más...</div>
            </div>
            
            <div class="highlight">
                <p>Cada plantel cuenta con instalaciones modernas, laboratorios equipados, talleres especializados y personal docente calificado para garantizar una educación de calidad en todos nuestros programas.</p>
            </div>
        </section>
        
        <section id="eventos" class="section">
            <h2>Eventos y Noticias</h2>
            <p>Mantente informado sobre las actividades, eventos académicos y logros de nuestra comunidad estudiantil:</p>
            
            <ul class="eventos-list">
                <li>
                    <span class="date">5 de abril, 2025</span>
                    <h3>Feria Académica y Tecnológica</h3>
                    <p>Presentación de proyectos innovadores desarrollados por nuestros estudiantes en los diferentes planteles. Este evento contará con la participación de empresas del sector industrial y tecnológico que evaluarán los proyectos y ofrecerán oportunidades de prácticas profesionales.</p>
                </li>
                <li>
                    <span class="date">12 de abril, 2025</span>
                    <h3>Inicio de Periodo de Inscripciones</h3>
                    <p>Comienza el periodo de inscripciones para el ciclo escolar 2025-2026. Requisitos: Acta de nacimiento, CURP, certificado de secundaria, y comprobante de domicilio. ¡No pierdas la oportunidad de formar parte de nuestra comunidad educativa!</p>
                </li>
                <li>
                    <span class="date">20 de abril, 2025</span>
                    <h3>Competencia Estatal de Robótica</h3>
                    <p>Nuestros estudiantes participarán en la competencia estatal representando a los diferentes planteles del CECyTEM. Los equipos ganadores tendrán la oportunidad de representar al Estado de México en la competencia nacional a celebrarse en Guadalajara en junio.</p>
                </li>
                <li>
                    <span class="date">28 de abril, 2025</span>
                    <h3>Jornada de Salud y Bienestar</h3>
                    <p>Evento organizado por la carrera de Enfermería que ofrece servicios gratuitos de toma de presión arterial, medición de glucosa, asesoría nutricional y actividades de promoción de la salud para la comunidad.</p>
                </li>
            </ul>
        </section>
    </main>

    <footer id="contacto">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Dirección</h3>
                <p>Av. Independencia S/N, Paraje La Presa, Comunidad Villa de Canalejas, Jilotepec, Estado de México, C.P. 54270</p>
                <p>Horario de atención: Lunes a Viernes de 8:00 a 17:00 hrs</p>
            </div>
            
            <div class="footer-section">
                <h3>Contacto</h3>
                <p><i class="fas fa-phone"></i> Teléfono: (761) 734 16 97</p>
                <p><i class="fas fa-envelope"></i> e-mail: plantel.jilotepec@cecytem.mx</p>
                <p><i class="fas fa-globe"></i> Sitio web: www.cecytem.mx</p>
                
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Director</h3>
                <p>M. en C. E. Gustavo Maldonado Cuevas</p>
                <h3>Subdirectores</h3>
                <p>Mtra. Laura Martínez Hernández</p>
                <p>Lic. Carlos Sánchez Ortega</p>
            </div>
        </div>
        
        <div class="copyright">
            <p> © 2025 Elaborado por: Irving Yael - Todos los derechos reservados</p>
            <p>Colegio de Estudios Científicos y Tecnológicos del Estado de México</p>
        </div>
    </footer>
</body>
</html>