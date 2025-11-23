const questions = [
  {
    question: "¿Qué es una computadora?",
    options: [
      "Un dispositivo de almacenamiento",
      "Un dispositivo que procesa datos",
      "Un aparato de comunicación"
    ],
    answer: 1
  },
  {
    question: "¿Cuál fue una de las primeras computadoras electrónicas?",
    options: ["ENIAC", "Macintosh", "IBM PC"],
    answer: 0
  },
  {
    question: "¿Qué componente es el 'cerebro' de la computadora?",
    options: ["Disco duro", "CPU", "Memoria RAM"],
    answer: 1
  },
  {
    question: "¿Qué tipo de software es el sistema operativo?",
    options: ["De aplicación", "De sistema", "De desarrollo"],
    answer: 1
  },
  {
    question: "¿Cuál es un ejemplo de licencia de uso libre?",
    options: ["GNU GPL", "Microsoft Office", "Adobe Photoshop"],
    answer: 0
  }
];

let current = 0;
let score = 0;

const triviaBox = document.getElementById('trivia-box');
const feedback = document.getElementById('feedback');
const nextBtn = document.getElementById('next-btn');

function loadQuestion() {
  const q = questions[current];
  triviaBox.innerHTML = `
    <div class="question">${current + 1}. ${q.question}</div>
    ${q.options.map((opt, i) =>
      `<div class="option" data-index="${i}">${opt}</div>`
    ).join('')}
  `;
  feedback.textContent = '';
  nextBtn.disabled = true;

  document.querySelectorAll('.option').forEach(opt => {
    opt.addEventListener('click', () => {
      const index = parseInt(opt.dataset.index);
      if (index === q.answer) {
        feedback.textContent = "✅ ¡Correcto!";
        feedback.style.color = "green";
        score++;
      } else {
        feedback.textContent = `❌ Incorrecto. La respuesta correcta es: ${q.options[q.answer]}`;
        feedback.style.color = "red";
      }
      // Desactivar opciones
      document.querySelectorAll('.option').forEach(o => o.style.pointerEvents = "none");
      nextBtn.disabled = false;
    });
  });
}

nextBtn.addEventListener('click', () => {
  current++;
  if (current < questions.length) {
    loadQuestion();
  } else {
    triviaBox.innerHTML = `<h3>🎉 ¡Has terminado la trivia!</h3>
    <p>Puntaje final: ${score} de ${questions.length}</p>`;
    feedback.textContent = '';
    nextBtn.style.display = "none";
  }
});

// Inicializa
loadQuestion();
