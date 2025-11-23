/* hardware.js
   Contiene:
   - Juego ordenar generaciones (drag & drop entre tarjetas)
   - Trivia (pregunta por pregunta con feedback y botón siguiente)
   - Juego de memoria (pares)
*/

// ---------------- Ordenar generaciones ----------------
(function(){
  const tarjetas = document.getElementById('tarjetas');
  if(!tarjetas) return;
  let dragItem = null;

  // permitir drop en el contenedor (para manejar reorden)
  tarjetas.addEventListener('dragover', e => e.preventDefault());

  // add events to each card
  function initCards(){
    Array.from(tarjetas.children).forEach(card => {
      card.setAttribute('draggable', 'true');
      card.addEventListener('dragstart', () => {
        dragItem = card;
        card.classList.add('dragging');
      });
      card.addEventListener('dragend', () => {
        dragItem = null;
        card.classList.remove('dragging');
      });

      // allow dropping before/after
      card.addEventListener('dragover', e => {
        e.preventDefault();
        const bounding = card.getBoundingClientRect();
        const offset = bounding.y + (bounding.height / 2);
        if (e.clientY - bounding.y > bounding.height / 2) {
          card.style.borderBottom = '3px solid #cfeee6';
          card.style.borderTop = '';
        } else {
          card.style.borderTop = '3px solid #cfeee6';
          card.style.borderBottom = '';
        }
      });

      card.addEventListener('dragleave', () => {
        card.style.borderTop = '';
        card.style.borderBottom = '';
      });

      card.addEventListener('drop', e => {
        e.preventDefault();
        card.style.borderTop = '';
        card.style.borderBottom = '';
        if (!dragItem || dragItem === card) return;
        const children = Array.from(tarjetas.children);
        const draggedIndex = children.indexOf(dragItem);
        const droppedIndex = children.indexOf(card);
        if (draggedIndex < droppedIndex) {
          tarjetas.insertBefore(dragItem, card.nextSibling);
        } else {
          tarjetas.insertBefore(dragItem, card);
        }
      });
    });
  }

  document.getElementById('verificar').addEventListener('click', () => {
    const cards = Array.from(tarjetas.children);
    const correcto = cards.every((c, i) => parseInt(c.dataset.order, 10) === i + 1);
    const resultado = document.getElementById('resultado');
    if (correcto) {
      resultado.textContent = "✅ ¡Correcto! Has ordenado las generaciones.";
      resultado.style.color = "green";
    } else {
      resultado.textContent = "❌ El orden no es correcto, inténtalo de nuevo.";
      resultado.style.color = "red";
    }
  });

  initCards();
})();

// ---------------- Trivia (pregunta por pregunta) ----------------
(function(){
  const questions = [
    {q:"¿Qué componente se considera el 'cerebro' de la computadora?", opts:["Disco duro","CPU","Monitor"], a:1},
    {q:"¿Qué tecnología reemplazó a los tubos de vacío?", opts:["Transistor","Circuito integrado","GPU"], a:0},
    {q:"¿Qué permitió la aparición del microprocesador?", opts:["Mayor consumo energético","Integrar la CPU en un chip","Eliminar la memoria"], a:1},
    {q:"¿Cuál es una diferencia clave entre HDD y SSD?", opts:["SSD es magnético, HDD es memoria flash","HDD usa platos magnéticos, SSD usa flash","No hay diferencia"], a:1},
    {q:"¿Qué es una GPU?", opts:["Unidad de procesamiento gráfico","Un tipo de memoria","Un sistema operativo"], a:0}
  ];

  let idx = 0, score = 0;
  const qEl = document.getElementById('question');
  const optsEl = document.getElementById('options');
  const fbEl = document.getElementById('feedback');
  const nextBtn = document.getElementById('next-btn');

  function loadQuestion(){
    if(!qEl) return;
    const Q = questions[idx];
    qEl.textContent = `${idx+1}. ${Q.q}`;
    optsEl.innerHTML = '';
    fbEl.textContent = '';
    nextBtn.classList.add('hidden');
    Q.opts.forEach((opt,i) => {
      const b = document.createElement('button');
      b.textContent = opt;
      b.onclick = () => {
        Array.from(optsEl.children).forEach(ch=>ch.disabled=true);
        if(i === Q.a){
          fbEl.textContent = '✅ ¡Correcto!';
          fbEl.style.color = 'green';
          score++;
        } else {
          fbEl.textContent = `❌ Incorrecto. Respuesta: ${Q.opts[Q.a]}`;
          fbEl.style.color = 'red';
        }
        nextBtn.classList.remove('hidden');
      };
      optsEl.appendChild(b);
    });
  }

  nextBtn.addEventListener('click', () => {
    idx++;
    if(idx < questions.length){
      loadQuestion();
      window.scrollTo({ top: document.getElementById('trivia').offsetTop - 20, behavior: 'smooth' });
    } else {
      qEl.textContent = `🎉 Trivia finalizada — Puntaje: ${score} de ${questions.length}`;
      optsEl.innerHTML = '';
      fbEl.textContent = '';
      nextBtn.classList.add('hidden');
    }
  });

  loadQuestion();
})();

// ---------------- Memoria (pares) ----------------
(function(){
  const pairs = ['CPU','RAM','GPU','DISCO','MOTHERBOARD','CPU','RAM','GPU','DISCO','MOTHERBOARD'];
  // shuffle
  function shuffle(a){ for(let i=a.length-1;i>0;i--){ const j=Math.floor(Math.random()*(i+1)); [a[i],a[j]]=[a[j],a[i]]; } }
  shuffle(pairs);

  const grid = document.getElementById('memory-grid');
  const feedback = document.getElementById('memoria-feedback');
  if(!grid) return;
  grid.innerHTML = '';
  let first=null, second=null, lock=false, matches=0;

  pairs.forEach((label, i) => {
    const card = document.createElement('div');
    card.className = 'memory-card';
    card.dataset.value = label;
    card.dataset.index = i;
    card.addEventListener('click', () => {
      if(lock || card.classList.contains('revealed')) return;
      card.classList.add('revealed');
      card.textContent = label;
      if(!first){ first = card; return; }
      second = card;
      lock = true;
      setTimeout(()=> {
        if(first.dataset.value === second.dataset.value){
          matches++;
          first.style.pointerEvents = 'none';
          second.style.pointerEvents = 'none';
        } else {
          first.classList.remove('revealed');
          second.classList.remove('revealed');
          first.textContent = '';
          second.textContent = '';
        }
        first=null; second=null; lock=false;
        if(matches === pairs.length/2){
          feedback.textContent = '🎉 ¡Felicidades! Has encontrado todas las parejas.';
          feedback.style.color = 'green';
        }
      }, 700);
    });
    grid.appendChild(card);
  });

})();
