// Lluvia ligera
(function(){
  const canvas = document.getElementById('rainCanvas');
  if(!canvas) return;
  const ctx = canvas.getContext('2d');
  let w = canvas.width = window.innerWidth;
  let h = canvas.height = window.innerHeight;

  const drops = [];
  const dropCount = 150;

  for(let i=0;i<dropCount;i++){
    drops.push({
      x: Math.random()*w,
      y: Math.random()*h,
      length: 10 + Math.random()*15,
      speed: 2 + Math.random()*3
    });
  }

  function draw(){
    ctx.clearRect(0,0,w,h);
    ctx.strokeStyle = 'rgba(0,0,255,0.2)';
    ctx.lineWidth = 1;

    drops.forEach(d=>{
      ctx.beginPath();
      ctx.moveTo(d.x,d.y);
      ctx.lineTo(d.x,d.y+d.length);
      ctx.stroke();

      d.y += d.speed;
      if(d.y>h){
        d.y = -d.length;
        d.x = Math.random()*w;
      }
    });
    requestAnimationFrame(draw);
  }
  draw();

  window.addEventListener('resize',()=>{
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
  });
})();