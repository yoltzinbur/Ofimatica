document.addEventListener('DOMContentLoaded', () => {

  // ======= Trivia =======
  const quizData = [
    { q: "¿Cuál es un ejemplo de software de sistema?", options: ["Windows", "Word", "Photoshop"], answer: 0 },
    { q: "¿Qué tipo de software permite crear programas?", options: ["De desarrollo", "De aplicación", "De sistema"], answer: 0 },
    { q: "¿Qué software se utiliza para procesar texto?", options: ["Excel", "Word", "Linux"], answer: 1 },
    { q: "¿Qué software gestiona los recursos del computador?", options: ["Sistema Operativo", "Editor de fotos", "IDE"], answer: 0 }
  ];

  let index = 0;
  let score = 0;
  const qText = document.getElementById('quiz-question');
  const qOptions = document.getElementById('quiz-options');
  const qFeedback = document.getElementById('quiz-feedback');
  const qNext = document.getElementById('quiz-next');

  function loadQuestion() {
    const q = quizData[index];
    qText.textContent = `${index+1}. ${q.q}`;
    qOptions.innerHTML = '';
    qFeedback.textContent = '';
    qNext.disabled = true;

    q.options.forEach((opt, i) => {
      const btn = document.createElement('button');
      btn.textContent = opt;
      btn.onclick = () => {
        Array.from(qOptions.children).forEach(b => b.disabled = true);
        if(i===q.answer){
          qFeedback.textContent = '✅ Correcto';
          qFeedback.style.color = 'green';
          score++;
        } else {
          qFeedback.textContent = `❌ Incorrecto. Respuesta: ${q.options[q.answer]}`;
          qFeedback.style.color = 'red';
        }
        qNext.disabled = false;
      }
      qOptions.appendChild(btn);
    });
  }

  qNext.onclick = () => {
    index++;
    if(index < quizData.length){
      loadQuestion();
    } else {
      qText.textContent = `Trivia finalizada. Puntaje: ${score}/${quizData.length}`;
      qOptions.innerHTML = '';
      qFeedback.textContent = '';
      qNext.style.display = 'none';
    }
  }

  loadQuestion();

  // ======= Drag & Drop =======
  const itemsData = [
    { text: 'Linux', cat: 'Sistema' },
    { text: 'Word', cat: 'Aplicación' },
    { text: 'Visual Studio', cat: 'Desarrollo' },
    { text: 'Photoshop', cat: 'Aplicación' },
    { text: 'Windows', cat: 'Sistema' },
    { text: 'Eclipse', cat: 'Desarrollo' }
  ];

  const itemsContainer = document.getElementById('drag-items');
  const dropSlots = document.querySelectorAll('.drop-slot');
  const checkBtn = document.getElementById('check-drag');
  const resetBtn = document.getElementById('reset-drag');
  const feedback = document.getElementById('drag-feedback');

  function resetGame() {
    feedback.textContent = '';
    itemsContainer.innerHTML = '';
    dropSlots.forEach(slot => {
      slot.innerHTML = slot.dataset.category;
      slot.style.background = '';
      slot.style.borderColor = '#2c3e50';
    });

    itemsData.forEach(data => {
      const div = document.createElement('div');
      div.textContent = data.text;
      div.className = 'drag-item';
      div.draggable = true;
      div.dataset.category = data.cat;
      div.addEventListener('dragstart', e => e.dataTransfer.setData('text/plain', data.text));
      itemsContainer.appendChild(div);
    });
  }

  dropSlots.forEach(slot => {
    slot.addEventListener('dragover', e => e.preventDefault());
    slot.addEventListener('drop', e => {
      e.preventDefault();
      const name = e.dataTransfer.getData('text/plain');
      const dragged = Array.from(itemsContainer.children).find(d => d.textContent === name);
      if(dragged) slot.appendChild(dragged);
    });
  });

  checkBtn.onclick = () => {
    let correct = 0;
    dropSlots.forEach(slot => {
      const item = slot.querySelector('.drag-item');
      if(item && item.dataset.category === slot.dataset.category){
        correct++;
        slot.style.background = '#d4f8d4';
      } else if(item){
        slot.style.background = '#f8d4d4';
      }
    });
    feedback.textContent = `Correctas: ${correct} de ${dropSlots.length}`;
    feedback.style.color = correct === dropSlots.length ? 'green' : 'red';
  }

  resetBtn.onclick = resetGame;
  resetGame();
});
