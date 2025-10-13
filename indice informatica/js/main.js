(function () {
  function startStorm() {
    var body = document.body;
    if (!body) return;

    // --- Contenedor relámpagos ---
    var lightning = document.createElement('div');
    lightning.id = 'lightning-container';
    body.appendChild(lightning);

    function createLightning() {
      var flash = document.createElement('div');
      flash.style.position = 'absolute';
      flash.style.top = '0'; flash.style.left = '0';
      flash.style.width = '100%'; flash.style.height = '100%';
      flash.style.background = 'rgba(255,255,255,0.25)'; // más sutil
      flash.style.opacity = '0';
      flash.style.animation = 'flash 0.3s ease-out';
      lightning.appendChild(flash);
      flash.addEventListener('animationend', function () { flash.remove(); });
    }

    (function lightningLoop() {
      setTimeout(function () {
        if (Math.random() < 0.5) createLightning(); // menos frecuentes
        lightningLoop();
      }, 2500 + Math.random()*3500);
    })();

    // --- Contenedor lluvia ---
    var rain = document.createElement('div'); rain.id = 'rain-container'; body.appendChild(rain);
    function createRainDrop() {
      var drop = document.createElement('div');
      drop.className = 'rain-drop';
      drop.style.left = Math.random() * 100 + 'vw';
      drop.style.height = (10 + Math.random() * 25) + 'vh';
      drop.style.animationDuration = (0.8 + Math.random()*1.2) + 's';
      rain.appendChild(drop);
      setTimeout(() => drop.remove(), 2000);
    }
    setInterval(createRainDrop, 50);

    // --- Contenedor gotas realistas ---
    var glass = document.createElement('div'); glass.id = 'droplets-container'; body.appendChild(glass);
    function createGlassDrop() {
      var g = document.createElement('div');
      g.className = 'glass-drop';
      g.style.left = Math.random()*100 + 'vw';
      g.style.top = Math.random()*20 + 'vh';
      g.style.width = (4 + Math.random()*8) + 'px';
      g.style.height = (4 + Math.random()*8) + 'px';
      g.style.animationDuration = (3 + Math.random()*5) + 's';
      glass.appendChild(g);
      setTimeout(() => g.remove(), 9000);
    }
    setInterval(createGlassDrop, 400);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', startStorm);
  } else {
    startStorm();
  }
})();