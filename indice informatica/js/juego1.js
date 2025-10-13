/* tema1-script.js
   Actividades:
   - Trivia (pregunta por pregunta con feedback)
   - Memory pairs (voltear y encontrar parejas)
   - Drag & drop labeling
*/

/* ========== TRIVIA ========== */
const quizQuestions = [
  { q: "¿Qué elemento es imprescindible para ejecutar programas?", opts:["Monitor","CPU","Teclado"], a:1 },
  { q: "¿Qué almacena datos de forma permanente?", opts:["RAM","SSD/HDD","GPU"], a:1 },
  { q: "¿Cuál es una unidad de entrada?", opts:["Impresora","Teclado","Monitor"], a:1 },
  { q: "¿La memoria RAM es volátil?", opts:["Sí","No","Solo en algunos casos"], a:0 },
  { q: "¿Qué hace el sistema operativo?", opts:["Gestiona recursos","Aumenta la velocidad del CPU","Hace copias de seguridad automáticamente"], a:0 }
];

let qIndex = 0;
let qScore = 0;

const qText = document.getElementById('q-text');
const qOptions = document.getElementById('q-options');
const qFeedback = document.getElementById('q-feedback');
const qNextBtn = document.getElementById('q-next');

function renderQuestion(){
  const Q = quizQuestions[qIndex];
  qText.textContent = `${qIndex+1}. ${Q.q}`;
  qOptions.innerHTML = "";
  qFeedback.textContent = "";
  qNextBtn.disabled = true;

  Q.opts.forEach((opt,i) => {
    const btn = document.createElement('button');
    btn.className = "btn";
    btn.style.background = "transparent";
    btn.style.border = "1px solid #e6eef0";
    btn.style.color = "#123";
    btn.style.textAlign = "left";
    btn.style.padding = "10px 12px";
    btn.textContent = opt;
    btn.onclick = () => {
      // disable all
      Array.from(qOptions.children).forEach(b => b.disabled = true);
      if (i === Q.a) {
        qFeedback.textContent = "✅ ¡Correcto!";
        qFeedback.style.color = "green";
        qScore++;
      } else {
        qFeedback.textContent = `❌ Incorrecto. Respuesta: ${Q.opts[Q.a]}`;
        qFeedback.style.color = "red";
      }
      qNextBtn.disabled = false;
    };
    qOptions.appendChild(btn);
  });
}
qNextBtn.addEventListener('click', () => {
  qIndex++;
  if (qIndex < quizQuestions.length) renderQuestion();
  else {
    qText.innerHTML = `🎉 ¡Trivia finalizada! Puntaje: ${qScore} de ${quizQuestions.length}`;
    qOptions.innerHTML = "";
    qFeedback.textContent = "";
    qNextBtn.style.display = "none";
  }
});
// start
if(document.getElementById('q-text')) renderQuestion();

/* ========== MEMORY PAIRS ========== */
const memoryPairs = [
  { id:1, label:"CPU" }, { id:1, label:"CPU" },
  { id:2, label:"RAM" }, { id:2, label:"RAM" },
  { id:3, label:"SSD" }, { id:3, label:"SSD" },
  { id:4, label:"GPU" }, { id:4, label:"GPU" }
];

function shuffle(array){
  for(let i=array.length-1;i>0;i--){
    const j = Math.floor(Math.random()*(i+1));
    [array[i],array[j]] = [array[j],array[i]];
  }
}
function initMemory(){
  const board = document.getElementById('memory-board');
  const result = document.getElementById('memory-result');
  if(!board) return;
  board.innerHTML = "";
  result.textContent = "";
  const cards = JSON.parse(JSON.stringify(memoryPairs));
  shuffle(cards);
  let first = null, lock = false, matches = 0;

  cards.forEach((c, idx) => {
    const div = document.createElement('div');
    div.className = "mem-card";
    div.dataset.id = c.id;
    div.dataset.idx = idx;
    div.textContent = ""; // initially blank
    div.addEventListener('click', () => {
      if(lock || div.classList.contains('revealed')) return;
      div.classList.add('revealed');
      div.textContent = c.label;
      if(!first) { first = {div, val:c.id, label:c.label}; }
      else {
        lock = true;
        setTimeout(() => {
          if(first.val === c.id) {
            // keep both revealed
            first.div.style.background = "#e6fffb";
            div.style.background = "#e6fffb";
            matches++;
            if(matches === memoryPairs.length/2){
              result.textContent = "🎉 ¡Has encontrado todas las parejas!";
              result.style.color = "green";
            }
          } else {
            // hide
            first.div.classList.remove('revealed');
            first.div.textContent = "";
            div.classList.remove('revealed');
            div.textContent = "";
          }
          first = null;
          lock = false;
        }, 700);
      }
    });
    board.appendChild(div);
  });
}
initMemory();

/* ========== DRAG & DROP ==========
   We'll generate three labels and three targets.
*/
const dragItemsData = [
  { id: "lbl-cpu", text: "CPU" },
  { id: "lbl-ram", text: "RAM" },
  { id: "lbl-ssd", text: "Almacenamiento (SSD/HDD)" }
];
const dropTargetsData = [
  { id: "slot-cpu", placeholder: "Lugar para CPU" },
  { id: "slot-ram", placeholder: "Lugar para RAM" },
  { id: "slot-ssd", placeholder: "Lugar para Almacenamiento" }
];

function initDragDrop(){
  const containerItems = document.getElementById('drag-items');
  const containerSlots = document.getElementById('drop-zone');
  const dragResult = document.getElementById('drag-result');
  const checkBtn = document.getElementById('drag-check');
  const resetBtn = document.getElementById('drag-reset');
  if(!containerItems || !containerSlots) return;

  containerItems.innerHTML = "";
  containerSlots.innerHTML = "";
  dragResult.textContent = "";

  // create items shuffled
  const items = JSON.parse(JSON.stringify(dragItemsData));
  shuffle(items);
  items.forEach(it => {
    const d = document.createElement('div');
    d.className = 'drag-item';
    d.draggable = true;
    d.id = it.id;
    d.textContent = it.text;
    d.addEventListener('dragstart', ev => {
      ev.dataTransfer.setData('text/plain', it.id);
    });
    containerItems.appendChild(d);
  });

  // create slots
  dropTargetsData.forEach(t => {
    const slot = document.createElement('div');
    slot.className = 'drop-slot';
    slot.id = t.id;
    slot.dataset.expected = t.id.replace('slot-','lbl-'); // mapping
    slot.innerHTML = `<small style="color:#7c8a8a">${t.placeholder}</small>`;
    slot.addEventListener('dragover', ev => ev.preventDefault());
    slot.addEventListener('drop', ev => {
      ev.preventDefault();
      const dragId = ev.dataTransfer.getData('text/plain');
      const dragged = document.getElementById(dragId);
      if(!dragged) return;
      // if slot already has child, return
      if(slot.querySelector('.drag-item')) return;
      slot.innerHTML = "";
      slot.appendChild(dragged);
      dragged.style.cursor = "default";
    });
    containerSlots.appendChild(slot);
  });

  checkBtn.onclick = ()=> {
    let correct = 0;
    dropTargetsData.forEach(t => {
      const slot = document.getElementById(t.id);
      const child = slot.querySelector('.drag-item');
      if(child && child.id === slot.dataset.expected) correct++;
    });
    dragResult.textContent = `Correctas: ${correct} de ${dropTargetsData.length}`;
    dragResult.style.color = (correct === dropTargetsData.length) ? "green":"red";
  };

  resetBtn.onclick = ()=> {
    initDragDrop();
  };
}
initDragDrop();
