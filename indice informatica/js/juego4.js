/* clasificacion.js
   - Genera las tarjetas a arrastrar
   - Implementa la trivia (pregunta por pregunta con feedback)
   - Maneja la actividad drag & drop y la validación
*/

/* ====== Datos para trivia ====== */
const quizQuestions = [
  { q: "¿Cuál de estos es un dispositivo de entrada?", opts:["Monitor","Teclado","Impresora"], a:1 },
  { q: "¿Cuál es una memoria no volátil?", opts:["RAM","Cache","SSD"], a:2 },
  { q: "¿Qué componente se considera de procesamiento?", opts:["GPU","Teclado","Disco Duro"], a:0 },
  { q: "¿Dónde clasificarías un router?", opts:["Salida","Comunicación","Entrada"], a:1 },
  { q: "Una placa madre es:", opts:["Almacenamiento","Procesamiento","Interconexión y soporte"], a:2 }
];

(function initQuiz(){
  let idx = 0;
  let score = 0;
  const qText = document.getElementById('q-text');
  const qOptions = document.getElementById('q-options');
  const qFeedback = document.getElementById('q-feedback');
  const qNext = document.getElementById('q-next');

  function render(){
    const Q = quizQuestions[idx];
    qText.textContent = `${idx+1}. ${Q.q}`;
    qOptions.innerHTML = '';
    qFeedback.textContent = '';
    qNext.disabled = true;
    Q.opts.forEach((opt,i) => {
      const b = document.createElement('button');
      b.textContent = opt;
      b.onclick = () => {
        Array.from(qOptions.children).forEach(ch => ch.disabled = true);
        if(i === Q.a){
          qFeedback.textContent = '✅ ¡Correcto!';
          qFeedback.style.color = 'green';
          score++;
        } else {
          qFeedback.textContent = `❌ Incorrecto. Respuesta: ${Q.opts[Q.a]}`;
          qFeedback.style.color = 'red';
        }
        qNext.disabled = false;
      };
      qOptions.appendChild(b);
    });
  }

  qNext.addEventListener('click', () => {
    idx++;
    if(idx < quizQuestions.length) render();
    else {
      qText.textContent = `🎉 Trivia finalizada — Puntaje: ${score} / ${quizQuestions.length}`;
      qOptions.innerHTML = '';
      qFeedback.textContent = '';
      qNext.style.display = 'none';
    }
  });

  if(document.getElementById('q-text')) render();
})();

/* ====== Drag & Drop: Generar items y lógica ====== */
const dragItemsData = [
  { id: 'it-keyboard', text: 'Teclado', category: 'Entrada' },
  { id: 'it-mouse', text: 'Mouse', category: 'Entrada' },
  { id: 'it-monitor', text: 'Monitor', category: 'Salida' },
  { id: 'it-printer', text: 'Impresora', category: 'Salida' },
  { id: 'it-ssd', text: 'SSD', category: 'Almacenamiento' },
  { id: 'it-ram', text: 'Memoria RAM', category: 'Procesamiento' }, // RAM ayuda al proc.
  { id: 'it-cpu', text: 'CPU', category: 'Procesamiento' },
  { id: 'it-router', text: 'Router', category: 'Comunicación' },
  { id: 'it-hdd', text: 'HDD', category: 'Almacenamiento' },
  { id: 'it-gpu', text: 'GPU', category: 'Procesamiento' }
];

function initDragDrop(){
  const itemsContainer = document.getElementById('drag-items');
  const dropZoneParent = document.getElementById('drop-zones');
  const checkBtn = document.getElementById('drag-check');
  const resetBtn = document.getElementById('drag-reset');
  const resultEl = document.getElementById('drag-result');
  if(!itemsContainer || !dropZoneParent) return;

  itemsContainer.innerHTML = '';
  resultEl.textContent = '';

  // shuffle items
  const items = JSON.parse(JSON.stringify(dragItemsData));
  for (let i = items.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [items[i], items[j]] = [items[j], items[i]];
  }

  // create draggable elements
  items.forEach(it => {
    const d = document.createElement('div');
    d.className = 'drag-item';
    d.id = it.id;
    d.textContent = it.text;
    d.draggable = true;
    d.addEventListener('dragstart', e => {
      e.dataTransfer.setData('text/plain', it.id);
    });
    itemsContainer.appendChild(d);
  });

  // prepare drop slots already exist: get them
  const slots = Array.from(dropZoneParent.querySelectorAll('.drop-slot'));
  slots.forEach(slot => {
    slot.innerHTML = `<small style="color:#7c8a8a">${slot.dataset.category}</small>`;
    slot.addEventListener('dragover', e => e.preventDefault());
    slot.addEventListener('drop', e => {
      e.preventDefault();
      const id = e.dataTransfer.getData('text/plain');
      const dragged = document.getElementById(id);
      if(!dragged) return;
      // avoid duplicate in same slot
      if(slot.querySelector('.drag-item')) {
        // if already has one, return the dragged to items container
        itemsContainer.appendChild(dragged);
        return;
      }
      slot.innerHTML = '';
      slot.appendChild(dragged);
    });
  });

  checkBtn.onclick = () => {
    let correct = 0;
    slots.forEach(slot => {
      const child = slot.querySelector('.drag-item');
      if(child) {
        const itemData = dragItemsData.find(it => it.id === child.id);
        if(itemData && itemData.category === slot.dataset.category) {
          correct++;
          slot.style.borderColor = '#27ae60';
          slot.style.background = '#eafaf0';
        } else {
          slot.style.borderColor = '#e74c3c';
          slot.style.background = '#fdecea';
        }
      } else {
        slot.style.borderColor = '#f39c12';
      }
    });
    resultEl.textContent = `Correctas: ${correct} de ${slots.length}`;
    resultEl.style.color = (correct === slots.length) ? 'green' : 'red';
  };

  resetBtn.onclick = () => initDragDrop();
}

document.addEventListener('DOMContentLoaded', initDragDrop);
