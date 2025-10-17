// Partículas flotantes interactivas
(function(){
  const canvas = document.getElementById('particleCanvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let w = canvas.width = window.innerWidth;
  let h = canvas.height = window.innerHeight;

  const particles = [];
  const particleCount = 100;

  for(let i=0;i<particleCount;i++){
    particles.push({
      x: Math.random()*w,
      y: Math.random()*h,
      radius: 1 + Math.random()*3,
      dx: (Math.random()-0.5)*0.5,
      dy: (Math.random()-0.5)*0.5
    });
  }

  function draw(){
    ctx.clearRect(0,0,w,h);
    ctx.fillStyle = 'rgba(0,0,255,0.7)';
    particles.forEach(p=>{
      ctx.beginPath();
      ctx.arc(p.x,p.y,p.radius,0,Math.PI*2);
      ctx.fill();

      // Movimiento
      p.x += p.dx;
      p.y += p.dy;

      if(p.x < 0) p.x = w;
      if(p.x > w) p.x = 0;
      if(p.y < 0) p.y = h;
      if(p.y > h) p.y = 0;
    });
    requestAnimationFrame(draw);
  }
  draw();

  // Mover partículas según el mouse
  window.addEventListener('mousemove', e=>{
    particles.forEach(p=>{
      p.x += (e.clientX - w/2)*0.0005;
      p.y += (e.clientY - h/2)*0.0005;
    });
  });

  window.addEventListener('resize',()=>{
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
  });
})();