
function unescapeHTML(s){return s.replaceAll('&lt;','<').replaceAll('&gt;','>').replaceAll('&amp;','&').replaceAll('&#039;',"'").replaceAll('&quot;','"')}
document.addEventListener('click', async (ev)=>{
  const btn = ev.target.closest('.copy'); if(!btn) return;
  const code = btn.getAttribute('data-code') || '';
  try{
    await navigator.clipboard.writeText(unescapeHTML(code));
    btn.textContent = 'Copiado ✓'; setTimeout(()=> btn.textContent='Copiar', 1500);
  }catch(e){ btn.textContent = 'Error'; setTimeout(()=> btn.textContent='Copiar', 1500); }
});
const filter = document.querySelector('#filter');
if(filter){
  const items = document.querySelectorAll('.menu a');
  filter.addEventListener('input',()=>{
    const q = filter.value.trim().toLowerCase();
    items.forEach(a=>{ const show = (a.dataset.title||'').includes(q); a.parentElement.style.display = show ? '' : 'none'; });
  });
  const path = location.pathname.split('/').pop() || 'index.html';
  items.forEach(a=>{ if(a.getAttribute('href')===path) a.classList.add('active'); });
}
// ------ Quiz logic ------
function gradeQuiz(form){
  let score = 0, total = 0;
  form.querySelectorAll('fieldset').forEach(fs=>{
    total++;
    const checked = fs.querySelector('input[type=radio]:checked');
    const correct = fs.querySelector('input[data-correct="1"]');
    if(checked && checked===correct){ score++; }
  });
  const pct = Math.round(100*score/Math.max(total,1));
  const res = form.querySelector('.result');
  res.textContent = `Resultado: ${score}/${total} (${pct}%)`;
  res.dataset.score = score;
  // store in localStorage by form id
  if(form.id){ localStorage.setItem('quiz:'+form.id, JSON.stringify({score,total,ts:Date.now()})); }
}
document.addEventListener('submit', (e)=>{
  const form = e.target.closest('.quiz'); if(!form) return;
  e.preventDefault(); gradeQuiz(form);
});
window.addEventListener('DOMContentLoaded', ()=>{
  document.querySelectorAll('.quiz').forEach(form=>{
    if(form.id){
      const saved = localStorage.getItem('quiz:'+form.id);
      if(saved){ try{ const {score,total}=JSON.parse(saved); const res=form.querySelector('.result'); if(res){res.textContent=`Último resultado guardado: ${score}/${total}`;} }catch(_){} }
    }
  });
});
