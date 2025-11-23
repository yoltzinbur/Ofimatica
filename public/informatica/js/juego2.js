/* historia-script.js
   - Línea de tiempo interactiva (slider + prev/next)
   - Actividad ordenar eventos (drag & drop)
   - Mini-quiz cronológico (pregunta por pregunta)
*/

/* ========== DATOS DE LA LÍNEA DE TIEMPO ========== */
const timelineEvents = [
  { year: "Ábaco (≈3000 a.C.)", text: "Primeras herramientas de cálculo manuales: el ábaco y otros sistemas de conteo." },
  { year: "Máquina de Pascal (1642)", text: "Blaise Pascal crea una de las primeras calculadoras mecánicas." },
  { year: "Máquina Analítica (1830s)", text: "Charles Babbage diseña la máquina analítica; Ada Lovelace escribe algoritmos." },
  { year: "ENIAC (1945)", text: "Primeras computadoras electrónicas programables (grandes y de propósito general)." },
  { year: "Transistor (1947)", text: "Invención del transistor; marca el inicio de la miniaturización." },
  { year: "Microprocesador (1971)", text: "Intel produce el primer microprocesador (Intel 4004), base de las PCs." },
  { year: "Computadoras personales (1980s)", text: "Computadoras personales se popularizan; auge del software personal y redes." }
];

/* ====== LÍNEA DE TIEMPO ====== */
const tlRange = document.getElementById('timeline-range');
const tlCard = document.getElementById('timeline-card');
const tlPrev = document.getElementById('tl-prev');
const tlNext = document.getElementById('tl-next');

function renderTimeline(index){
  const ev = timelineEvents[index];
  tlCard.innerHTML = `<strong>${ev.year}</strong><p style="margin-top:8px">${ev.text}</p>`;
  tlRange.value = index;
}
if(tlRange){
  renderTimeline(0);
  tlRange.max = timelineEvents.length - 1;
  tlRange.addEventListener('input', e => renderTimeline(parseInt(e.target.value)));
  tlPrev.addEventListener('click', ()=> { let i = Math.max(0, parseInt(tlRange.value)-1); renderTimeline(i); });
  tlNext.addEventListener('click', ()=> { let i = Math.min(timelineEvents.length-1, parseInt(tlRange.value)+1); renderTimeline(i); });
}

/* ====== ORDENAR EVENTOS (DRAG & DROP) ====== */
const orderPool = document.getElementById('order-pool');
const orderTarget = document.getElementById('order-target');
const orderCheckBtn = document.getElementById('order-check');
const orderResetBtn = document.getElementById('order-reset');
const orderFeedback = document.getElementById('order-feedback');

const orderItems = timelineEvents.map((ev, i)=> ({ id:`ev${i}`, text: ev.year }));

function initOrderActivity(){
  if(!orderPool || !orderTarget) return;
  orderPool.innerHTML = "";
  orderTarget.innerHTML = "";
  orderFeedback.textContent = "";

  // shuffle pool
  const items = JSON.parse(JSON.stringify(orderItems));
  for(let i=items.length-1;i>0;i--){
    const j = Math.floor(Math.random()*(i+1));
    [items[i],items[j]] = [items[j],items[i]];
  }

  items.forEach(it => {
    const d = document.createElement('div');
    d.className = 'order-item';
    d.id = it.id;
    d.draggable = true;
    d.textContent = it.text;
    d.addEventListener('dragstart', e => e.dataTransfer.setData('text/plain', it.id));
    orderPool.appendChild(d);
  });

  // prepare  ordered slots
  for(let i=0;i<orderItems.length;i++){
    const slot = document.createElement('div');
    slot.className = 'order-target-slot';
    slot.style.minWidth = '120px';
    slot.style.padding = '8px';
    slot.style.border = '1px dashed #e6eef0';
    slot.style.borderRadius = '8px';
    slot.style.marginRight = '8px';
    slot.dataset.slot = i;
    slot.addEventListener('dragover', e => e.preventDefault());
    slot.addEventListener('drop', e => {
      e.preventDefault();
      const id = e.dataTransfer.getData('text/plain');
      const dragged = document.getElementById(id);
      if(!dragged) return;
      // if slot has child, append back to pool
      if(slot.querySelector('.order-item')) return;
      slot.appendChild(dragged);
    });
    orderTarget.appendChild(slot);
  }
}

if(orderCheckBtn){
  orderCheckBtn.addEventListener('click', () => {
    // check order by reading children of orderTarget slots
    let correct = 0;
    const slots = Array.from(orderTarget.querySelectorAll('.order-target-slot'));
    slots.forEach((slot, idx) => {
      const ch = slot.querySelector('.order-item');
      if(ch && ch.id === `ev${idx}`) correct++;
    });
    orderFeedback.textContent = `Correctas: ${correct} de ${orderItems.length}`;
    orderFeedback.style.color = (correct === orderItems.length) ? 'green' : 'red';
  });
}
if(orderResetBtn){
  orderResetBtn.addEventListener('click', initOrderActivity);
}
initOrderActivity();

/* ====== MINI-QUIZ CRONOLÓGICO ====== */
const histQuiz = [
  { q:"¿Qué invento facilitó la miniaturización después de las válvulas de vacío?", opts:["Transistor","Ábaco","Impresora"], a:0 },
  { q:"¿Quién diseñó la Máquina Analítica en el siglo XIX?", opts:["Alan Turing","Charles Babbage","Blaise Pascal"], a:1 },
  { q:"¿Cuál de estos marcó el inicio de las PCs populares?", opts:["ENIAC","Microprocesador Intel 4004","Tarjeta perforada"], a:1 }
];

let hIndex = 0;
let hScore = 0;

const hQText = document.getElementById('hist-q-text');
const hQOptions = document.getElementById('hist-q-options');
const hQFeedback = document.getElementById('hist-q-feedback');
const hNext = document.getElementById('hist-next');

function renderHistQuestion(){
  const H = histQuiz[hIndex];
  hQText.textContent = `${hIndex+1}. ${H.q}`;
  hQOptions.innerHTML = "";
  hQFeedback.textContent = "";
  hNext.disabled = true;

  H.opts.forEach((opt,i) => {
    const btn = document.createElement('button');
    btn.className = 'btn';
    btn.style.background = 'transparent';
    btn.style.border = '1px solid #e6eef0';
    btn.style.color = '#123';
    btn.style.textAlign = 'left';
    btn.style.padding = '8px 10px';
    btn.textContent = opt;
    btn.onclick = () => {
      Array.from(hQOptions.children).forEach(b=>b.disabled=true);
      if(i === H.a){
        hQFeedback.textContent = '✅ ¡Correcto!';
        hQFeedback.style.color = 'green';
        hScore++;
      } else {
        hQFeedback.textContent = `❌ Incorrecto. Respuesta: ${H.opts[H.a]}`;
        hQFeedback.style.color = 'red';
      }
      hNext.disabled = false;
    };
    hQOptions.appendChild(btn);
  });
}
if(hNext){
  hNext.addEventListener('click', () => {
    hIndex++;
    if(hIndex < histQuiz.length) renderHistQuestion();
    else {
      hQText.innerHTML = `🎉 Quiz finalizado. Puntaje: ${hScore} de ${histQuiz.length}`;
      hQOptions.innerHTML = "";
      hQFeedback.textContent = "";
      hNext.style.display = 'none';
    }
  });
}
if(hQText) renderHistQuestion();
