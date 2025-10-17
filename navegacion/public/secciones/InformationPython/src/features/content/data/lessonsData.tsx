import type{ LessonData } from '../types/content.types';

export const LESSONS_DATA: LessonData = {
  '1.1': {
    id: '1.1',
    title: '¿Cómo funciona un programa de computadora?',
    sections: [
      {
        id: 'intro',
        title: '¿Cómo funciona un programa de computadora?',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              Un programa es lo que hace que una computadora sea útil. Por sí solas, las computadoras solo pueden ejecutar
              operaciones extremadamente simples, como sumar o dividir, pero lo hacen a velocidades muy altas y pueden repetirlas
              muchísimas veces. Para realizar una tarea compleja, como calcular una velocidad promedio, se necesita un programa
              que le dé a la computadora una serie de instrucciones simples:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-1">
              <li>Aceptar un número para la distancia.</li>
              <li>Aceptar un número para el tiempo de viaje.</li>
              <li>Dividir el primer valor entre el segundo y guardar el resultado.</li>
              <li>Mostrar el resultado en un formato legible.</li>
            </ul>
            <p className="text-gray-300">
              Estas acciones sencillas forman un programa. La clave para que esto funcione es el lenguaje.
            </p>
          </div>
        ),
      },
    ],
  },
  '1.2': {
    id: '1.2',
    title: 'Lenguajes naturales vs. lenguajes de programación',
    sections: [
      {
        id: 'natural-vs-programming',
        title: 'Lenguajes naturales vs. lenguajes de programación',
        content: (
          <p className="text-gray-300">
            Las computadoras tienen su propio lenguaje, llamado <strong className="text-blue-400">lenguaje máquina</strong>, que es muy rudimentario. Una computadora
            funciona como un perro bien adiestrado que solo responde a un conjunto de comandos conocidos. Este conjunto de comandos
            se llama <strong className="text-blue-400">lista de instrucciones (IL)</strong>. Los lenguajes máquina son desarrollados por humanos. En contraste, los idiomas que
            hablan las personas, como el español, se llaman <strong className="text-blue-400">lenguajes naturales</strong> y evolucionan por sí mismos con el tiempo.
          </p>
        ),
      },
    ],
  },
  '1.3': {
    id: '1.3',
    title: '¿Qué compone a un lenguaje?',
    sections: [
      {
        id: 'language-components',
        title: '¿Qué compone a un lenguaje?',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              Cualquier lenguaje, ya sea de máquina o natural, consta de los siguientes elementos:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-2">
              <li>
                <strong className="text-blue-400">Alfabeto:</strong> Un conjunto de símbolos que se usan para formar palabras
                (ej. el alfabeto latino).
              </li>
              <li>
                <strong className="text-blue-400">Léxico:</strong> Un diccionario con el conjunto de palabras que el lenguaje ofrece
                (ej. la palabra "computadora" está en el léxico del español).
              </li>
              <li>
                <strong className="text-blue-400">Sintaxis:</strong> Un conjunto de reglas que determinan si una cadena de palabras
                forma una oración válida.
              </li>
              <li>
                <strong className="text-blue-400">Semántica:</strong> Un conjunto de reglas que definen si una frase tiene sentido
                (ej. "Me comí una dona" tiene sentido semántico, pero "Una dona me comió", no).
              </li>
            </ul>
          </div>
        ),
      },
    ],
  },
  '1.4': {
    id: '1.4',
    title: 'Lenguaje máquina vs. lenguaje de alto nivel',
    sections: [
      {
        id: 'machine-vs-high-level',
        title: 'Lenguaje máquina vs. lenguaje de alto nivel',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              El <strong className="text-blue-400">lenguaje máquina</strong> es la lengua materna de una computadora, pero está muy lejos del lenguaje humano. Para crear un puente entre ambos, se necesitan los <strong className="text-blue-400">lenguajes de programación de alto nivel</strong>.
            </p>
            <p className="text-gray-300">
              Estos usan símbolos y palabras que los humanos pueden leer y permiten expresar comandos complejos. Un programa escrito en un lenguaje de alto nivel se llama <strong className="text-blue-400">código fuente</strong>, y se guarda en un <strong className="text-blue-400">archivo fuente</strong>.
            </p>
          </div>
        ),
      },
    ],
  },
  '1.5': {
    id: '1.5',
    title: 'Compilación vs. Interpretación',
    sections: [
      {
        id: 'compilation-vs-interpretation',
        title: 'Compilación vs. Interpretación',
        content: (
          <div className="space-y-6">
            <p className="text-gray-300">
              Para que una computadora ejecute un programa, este debe ser traducido a lenguaje máquina, un proceso que la propia
              computadora puede realizar. Hay dos formas principales de hacerlo:
            </p>

            <div className="bg-gray-800 p-4 rounded-lg">
              <h3 className="text-xl font-semibold mb-3 text-blue-400">Compilación</h3>
              <p className="mb-3 text-gray-300">
                Un programa traductor (<strong className="text-yellow-400">compilador</strong>) analiza todo el código fuente de una vez y crea un archivo ejecutable en
                lenguaje máquina.
              </p>
              <ul className="list-disc list-inside ml-4 text-gray-300 space-y-1">
                <li>
                  <strong className="text-yellow-400">Ventajas:</strong> La ejecución del código es más rápida; el usuario final
                  no necesita el compilador; el código máquina es difícil de leer.
                </li>
                <li>
                  <strong className="text-yellow-400">Desventajas:</strong> El proceso de compilación puede ser lento; se necesita
                  un compilador para cada plataforma de hardware.
                </li>
              </ul>
            </div>

            <div className="bg-gray-800 p-4 rounded-lg">
              <h3 className="text-xl font-semibold mb-3 text-blue-400">Interpretación</h3>
              <p className="mb-3 text-gray-300">
                Un programa (<strong className="text-yellow-400">intérprete</strong>) lee y ejecuta el código fuente línea por línea.
              </p>
              <ul className="list-disc list-inside ml-4 text-gray-300 space-y-1">
                <li>
                  <strong className="text-yellow-400">Ventajas:</strong> El código se puede ejecutar inmediatamente; el mismo
                  código fuente funciona en diferentes plataformas.
                </li>
                <li>
                  <strong className="text-yellow-400">Desventajas:</strong> La ejecución es más lenta; tanto el programador como
                  el usuario final necesitan el intérprete.
                </li>
              </ul>
            </div>

            <p className="text-gray-300">
              <strong className="text-yellow-400">Python es un lenguaje interpretado</strong>, por lo que hereda estas características. Afortunadamente, el intérprete de
              Python es gratuito.
            </p>
          </div>
        ),
      },
    ],
  },
  '1.6': {
    id: '1.6',
    title: 'Introducción a Python',
    sections: [
      {
        id: 'python-intro',
        title: 'Introducción a Python',
        content: (
          <div className="space-y-6">
            <div>
              <h3 className="text-xl font-semibold mb-3 text-blue-400">Python - una herramienta, no un reptil</h3>
              <p className="text-gray-300">
                Python es un lenguaje de programación de alto nivel, interpretado y de propósito general. Su nombre no proviene
                de la serpiente, sino de la serie de comedia de la BBC llamada <strong className="text-yellow-400">Monty Python's Flying Circus</strong>. El creador del
                lenguaje lo nombró en honor al programa.
              </p>
            </div>

            <div>
              <h3 className="text-xl font-semibold mb-3 text-blue-400">¿Quién creó Python?</h3>
              <p className="text-gray-300">
                A diferencia de otros grandes lenguajes de programación desarrollados por corporaciones, Python fue creado por
                una sola persona: <strong className="text-yellow-400">Guido van Rossum</strong>, nacido en los Países Bajos. Aunque miles de personas han contribuido a su
                desarrollo, la idea original fue suya.
              </p>
            </div>

            <div>
              <h3 className="text-xl font-semibold mb-3 text-blue-400">Objetivos de Python en 1999</h3>
              <ul className="list-disc list-inside ml-4 text-gray-300 space-y-1">
                <li>Un lenguaje fácil e intuitivo, pero tan potente como sus competidores.</li>
                <li>Ser de código abierto para que cualquiera pudiera contribuir a su desarrollo.</li>
                <li>Tener un código comprensible como el inglés simple.</li>
                <li>Ser adecuado para tareas cotidianas, permitiendo tiempos de desarrollo cortos.</li>
              </ul>
            </div>
          </div>
        ),
      },
    ],
  },
  '1.7': {
    id: '1.7',
    title: '¿Qué hace que Python sea tan especial?',
    sections: [
      {
        id: 'why-python-is-special',
        title: '¿Qué hace que Python sea tan especial?',
        content: (
          <div className="space-y-6">
            <h3 className="text-xl font-semibold mb-3 text-blue-400">Ventajas de Python</h3>
            <p className="text-gray-300">
              Python es extremadamente popular por varias razones:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-1">
              <li>Es fácil de aprender y de enseñar.</li>
              <li>Es fácil de utilizar para escribir nuevo software.</li>
              <li>El código es fácil de entender (código legible).</li>
              <li>Es fácil de obtener, ya que es gratuito, de <strong className="text-yellow-400">código abierto</strong> y <strong className="text-yellow-400">multiplataforma</strong>.</li>
            </ul>

            <h3 className="text-xl font-semibold mb-3 text-blue-400">Desventajas a considerar</h3>
            <p className="text-gray-300">
              A pesar de sus bondades, no es la mejor opción para:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-1">
              <li>Programación de bajo nivel (donde la velocidad y el acceso directo al hardware son críticos).</li>
              <li>Aplicaciones móviles (aunque existen marcos para ello, no es su fuerte principal).</li>
            </ul>
          </div>
        ),
      },
    ],
  },
  '1.8': {
    id: '1.8',
    title: 'Existe más de un Python',
    sections: [
      {
        id: 'multiple-versions',
        title: 'Python 2 vs. Python 3',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              Actualmente existen dos versiones principales de Python, y es crucial conocer la diferencia:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-2">
              <li>
                <strong className="text-yellow-400">Python 2:</strong> Es la versión antigua, cuyo desarrollo se ha detenido, aunque sigue recibiendo actualizaciones de seguridad limitadas.
              </li>
              <li>
                <strong className="text-yellow-400">Python 3:</strong> Es la versión <strong className="text-blue-400">actual</strong> y en evolución activa. Todos los proyectos nuevos deben usar Python 3.
              </li>
            </ul>
            <p className="text-gray-300">
              ¡Importante! Ambas versiones no son <strong className="text-red-400">compatibles</strong> entre sí sin modificaciones.
            </p>
          </div>
        ),
      },
    ],
  },
  '1.9': {
    id: '1.9',
    title: 'Implementaciones de Python',
    sections: [
      {
        id: 'implementations',
        title: 'Implementaciones de Python',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              Una "<strong className="text-blue-400">implementación</strong>" es un entorno que permite ejecutar programas escritos en Python. Existen varias:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-2">
              <li>
                <strong className="text-yellow-400">CPython:</strong> La implementación tradicional, escrita en C y la de referencia.
              </li>
              <li>
                <strong className="text-yellow-400">Cython:</strong> Traduce código Python a C para mayor velocidad de ejecución.
              </li>
              <li>
                <strong className="text-yellow-400">Jython:</strong> Implementación en Java, útil para integrar Python con sistemas en Java.
              </li>
              <li>
                <strong className="text-yellow-400">PyPy:</strong> Entorno escrito en RPython, conocido por su alta velocidad gracias a su compilador <strong className="text-blue-400">Just-In-Time (JIT)</strong>.
              </li>
              <li>
                <strong className="text-yellow-400">MicroPython:</strong> Implementación ligera de Python 3 diseñada específicamente para microcontroladores (hardware con recursos limitados).
              </li>
            </ul>
          </div>
        ),
      },
    ],
  },
  '1.10': {
    id: '1.10',
    title: 'Descarga e instalación de Python',
    sections: [
      {
        id: 'download-install',
        title: 'Descarga e instalación de Python',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              La forma de obtener Python varía según tu sistema operativo:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-2">
              <li>
                <strong className="text-blue-400">Linux:</strong> Usualmente ya tiene Python 3 preinstalado. Si no, se puede instalar fácilmente con el gestor de paquetes de tu distribución.
              </li>
              <li>
                <strong className="text-blue-400">Windows y macOS:</strong> Debes descargar el instalador desde <a href="https://www.python.org/downloads" target="_blank" className="text-yellow-400 underline">python.org/downloads</a>.
              </li>
            </ul>
          </div>
        ),
      },
    ],
  },
  '1.11': {
    id: '1.11',
    title: 'Configuración de Python',
    sections: [
      {
        id: 'configuration',
        title: 'Configuración básica (PATH)',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              La configuración del entorno es clave para poder ejecutar Python desde cualquier ubicación en tu terminal:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-2">
              <li>
                <strong className="text-blue-400">Windows:</strong> Al ejecutar el instalador `.exe`, <strong className="text-yellow-400">debes marcar la casilla "Add Python 3.x to PATH"</strong>. Esto te ahorrará problemas de configuración manual.
              </li>
              <li>
                <strong className="text-blue-400">macOS:</strong> Descarga e instala el archivo `.pkg` de Python 3, el instalador generalmente configura la ruta automáticamente.
              </li>
            </ul>
          </div>
        ),
      },
    ],
  },
  '1.12': {
    id: '1.12',
    title: 'Comenzando tu trabajo con Python',
    sections: [
      {
        id: 'tools-needed',
        title: 'Herramientas básicas de programación',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              Para programar se necesitan herramientas esenciales:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-2">
              <li>Un editor de código (para escribir el código fuente).</li>
              <li>Una consola o terminal (para ejecutar el programa).</li>
              <li>Un depurador (para encontrar y corregir errores).</li>
            </ul>
            <p className="text-gray-300">
              Python incluye una aplicación predeterminada llamada <strong className="text-yellow-400">IDLE</strong> (Integrated Development and Learning Environment) que proporciona estas funciones básicas para que puedas empezar inmediatamente.
            </p>
          </div>
        ),
      },
    ],
  },
  '1.13': {
    id: '1.13',
    title: 'Tu primer programa antes de tu primer programa',
    sections: [
      {
        id: 'first-program-idle',
        title: 'Ejecutando con IDLE',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              Sigue estos pasos para crear y ejecutar un programa simple en IDLE:
            </p>
            <ol className="list-decimal list-inside ml-4 text-gray-300 space-y-2">
              <li>Abre IDLE → Menú <strong className="text-yellow-400">File</strong> → <strong className="text-yellow-400">New File</strong>.</li>
              <li>Guarda el archivo. Los archivos de Python usan la extensión <strong className="text-yellow-400">.py</strong>.</li>
              <li>Escribe el siguiente código:
                <div className="bg-gray-800 p-3 rounded-lg mt-1 font-mono text-sm">
                  <code className="text-green-400">print("Hisssssss...")</code>
                </div>
              </li>
              <li>Guarda y ejecuta: Menú <strong className="text-yellow-400">Run</strong> → <strong className="text-yellow-400">Run Module</strong> (o presiona <strong className="text-yellow-400">F5</strong>).</li>
              <li>Verás el resultado <span className="text-blue-400">Hisssssss...</span> en la consola interactiva.</li>
            </ol>
          </div>
        ),
      },
    ],
  },
  '1.14': {
    id: '1.14',
    title: 'Cómo estropear y arreglar tu código',
    sections: [
      {
        id: 'debugging-basics',
        title: 'Entendiendo los errores',
        content: (
          <div className="space-y-4">
            <p className="text-gray-300">
              Experimentar con errores es la mejor manera de aprender a corregirlos. Puedes crear errores intencionalmente:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-2">
              <li>
                <strong className="text-red-400">Error de sintaxis:</strong> Falta de paréntesis o comillas. Puede causar un mensaje como <strong className="text-red-400">“EOF inesperado”</strong>.
              </li>
              <li>
                <strong className="text-red-400">Error de nombre:</strong> Escribir mal una palabra clave (ej. `prin` en vez de `print`).
              </li>
            </ul>

            <h3 className="text-xl font-semibold mt-6 mb-3 text-blue-400">Información del Error</h3>
            <p className="text-gray-300">
              La consola te proporcionará información útil para la corrección:
            </p>
            <ul className="list-disc list-inside ml-4 text-gray-300 space-y-1">
              <li>El <strong className="text-yellow-400">traceback</strong> (ruta del código hasta el error).</li>
              <li>La ubicación y línea exacta del error.</li>
              <li>El tipo de error y su explicación (generalmente en inglés).</li>
            </ul>
          </div>
        ),
      },
    ],
  },
};