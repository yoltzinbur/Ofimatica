/* ==========================================================
   LibreOffice Impress Guide — JavaScript Moderno
   Funcionalidad completa con animaciones y efectos
   ========================================================== */

(function () {
  'use strict';

  // Utilidades
  const $ = (s, r = document) => r.querySelector(s);
  const $$ = (s, r = document) => Array.from(r.querySelectorAll(s));

  /* ==================== BARRA DE PROGRESO ==================== */
  const progress = $('#progressBar');
  
  function updateProgress() {
    if (!progress) return;
    const h = document.documentElement;
    const scrolled = h.scrollTop;
    const total = h.scrollHeight - h.clientHeight;
    const percentage = (scrolled / Math.max(1, total)) * 100;
    progress.style.width = percentage.toFixed(2) + '%';
  }

  window.addEventListener('scroll', updateProgress, { passive: true });
  updateProgress();

  /* ==================== HEADER EFFECTS ==================== */
  const header = $('.header');
  
  function updateHeaderState() {
    if (!header) return;
    const scrolled = window.scrollY > 20;
    header.classList.toggle('scrolled', scrolled);
  }

  window.addEventListener('scroll', updateHeaderState, { passive: true });
  updateHeaderState();

  /* ==================== FADE-IN ANIMATIONS ==================== */
  const observeFadeIn = () => {
    const fadeElements = $$('.fade-in');
    
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            setTimeout(() => {
              entry.target.classList.add('in');
            }, index * 50); // Efecto escalonado
          }
        });
      },
      {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      }
    );

    fadeElements.forEach(el => observer.observe(el));
  };

  /* ==================== UTILIDADES ==================== */
  const normalize = (str) => {
    try {
      return (str || '')
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .toLowerCase();
    } catch {
      return (str || '').toLowerCase();
    }
  };

  const escape = (str) => {
    return (str || '').replace(/[&<>"']/g, (char) => {
      const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#39;'
      };
      return map[char];
    });
  };

  const slugify = (str) => {
    return normalize(str)
      .replace(/[^a-z0-9\s\-]/g, '')
      .trim()
      .replace(/\s+/g, '-') || 'section';
  };

  const uniqueId = (() => {
    const used = new Set();
    return (base) => {
      let id = base;
      let counter = 2;
      while (used.has(id) || document.getElementById(id)) {
        id = `${base}-${counter++}`;
      }
      used.add(id);
      return id;
    };
  })();

  /* ==================== CONSTRUCCIÓN DE ÍNDICE ==================== */
  function buildIndex() {
    const index = [];
    const sections = $$('.section[id]');

    sections.forEach((section) => {
      const titleElement = $('.section-title h2, h2', section);
      const title = titleElement?.textContent?.trim() || section.id;
      const rawText = section.innerText.replace(/\s+/g, ' ').trim();

      index.push({
        type: 'section',
        id: section.id,
        title: title,
        normalized: normalize(title),
        body: normalize(rawText),
        href: '#' + section.id,
        element: section
      });

      // Subtemas (H3)
      const h3Elements = $$('h3', section);
      h3Elements.forEach((h3) => {
        if (!h3.id) {
          h3.id = uniqueId(`${section.id}-${slugify(h3.textContent)}`);
        }

        const context = h3.closest('.card') || h3.parentElement || section;
        const contextText = context.innerText.replace(/\s+/g, ' ').trim();

        index.push({
          type: 'subsection',
          id: h3.id,
          parentId: section.id,
          title: h3.textContent.trim(),
          normalized: normalize(h3.textContent),
          body: normalize(contextText),
          href: '#' + h3.id,
          element: h3
        });
      });
    });

    return index;
  }

  const INDEX = buildIndex();

  /* ==================== BUSCADOR ==================== */
  function initSearch() {
    const headerContainer = $('.header .header-container');

    // Crear botón de búsqueda si no existe
    let searchBtn = $('.search-btn');
    if (!searchBtn && headerContainer) {
      searchBtn = document.createElement('button');
      searchBtn.className = 'search-btn';
      searchBtn.type = 'button';
      searchBtn.title = 'Buscar (/)';
      searchBtn.setAttribute('aria-label', 'Abrir buscador');
      searchBtn.innerHTML = '🔍 Buscar';
      
      const suiteNav = $('.office-suite-nav', headerContainer);
      headerContainer.insertBefore(searchBtn, suiteNav);
    }

    // Crear overlay de búsqueda si no existe
    let overlay = $('#searchOverlay');
    if (!overlay) {
      overlay = document.createElement('div');
      overlay.id = 'searchOverlay';
      overlay.className = 'search-overlay';
      overlay.innerHTML = `
        <div class="search-modal" role="dialog" aria-modal="true" aria-labelledby="searchTitle">
          <div class="search-head">
            <span id="searchTitle">🔍 Buscar en la guía</span>
            <button class="search-close" aria-label="Cerrar">✕</button>
          </div>
          <div class="search-field">
            <input type="search" id="siteSearch" placeholder="Escribe para buscar... ( / )" autocomplete="off" />
            <span class="search-stats" id="searchStats"></span>
          </div>
          <div class="search-results" id="searchResults" role="listbox" aria-label="Resultados"></div>
        </div>
      `;
      document.body.appendChild(overlay);
    }

    const searchInput = $('#siteSearch', overlay);
    const searchStats = $('#searchStats', overlay);
    const searchResults = $('#searchResults', overlay);
    const searchClose = $('.search-close', overlay);

    // Ranking de búsqueda
    function rankResults(query) {
      const q = normalize(query.trim());
      if (!q) return [];

      const tokens = q.split(/\s+/).filter(Boolean);
      const scored = [];

      for (const item of INDEX) {
        let score = 0;
        let matches = true;

        for (const token of tokens) {
          const titleIndex = item.normalized.indexOf(token);
          const bodyIndex = item.body.indexOf(token);

          if (titleIndex === -1 && bodyIndex === -1) {
            matches = false;
            break;
          }

          // Ponderación
          if (titleIndex !== -1) {
            score += 300 - titleIndex * 0.5; // Título pesa mucho
            if (item.normalized.startsWith(token)) score += 100; // Prefijo bonus
          }
          if (bodyIndex !== -1) {
            score += 50 - bodyIndex * 0.01; // Cuerpo suma menos
          }
          if (item.type === 'section') score += 20; // Bonus secciones
        }

        if (matches) {
          scored.push({ item, score });
        }
      }

      scored.sort((a, b) => b.score - a.score);
      return scored.slice(0, 30).map(x => x.item);
    }

    // Crear snippet con contexto
    function createSnippet(item, query) {
      const context = item.element.closest('.card') || item.element.parentElement || item.element;
      const text = (context.innerText || '').replace(/\s+/g, ' ').trim();
      const normalized = normalize(text);
      const queryNorm = normalize(query);

      // Encontrar posición del término
      let position = Infinity;
      for (const token of queryNorm.split(/\s+/)) {
        const pos = normalized.indexOf(token);
        if (pos !== -1) position = Math.min(position, pos);
      }
      position = isFinite(position) ? position : 0;

      // Extraer snippet
      const start = Math.max(0, position - 80);
      const end = Math.min(text.length, position + 200);
      let snippet = text.slice(start, end);
      
      if (start > 0) snippet = '…' + snippet;
      if (end < text.length) snippet = snippet + '…';

      // Resaltar términos
      const regex = new RegExp(
        '(' + queryNorm.split(/\s+/).map(t => 
          t.replace(/[.*+?^${}()|[\]\\]/g, '\\$&')
        ).join('|') + ')',
        'ig'
      );

      return escape(snippet).replace(regex, '<mark>$1</mark>');
    }

    // Renderizar resultados
    function renderResults(results, query) {
      const sections = results.filter(r => r.type === 'section');
      const subsections = results.filter(r => r.type === 'subsection');

      let html = '';

      if (sections.length) {
        html += '<div class="result-group">📄 Secciones</div>';
        html += sections.map((item, i) => `
          <a class="result-item" role="option" aria-selected="${i === 0}" href="${item.href}">
            <div class="result-ico" aria-hidden="true">§</div>
            <div>
              <div class="result-title">${escape(item.title)}</div>
              <div class="result-snippet">${createSnippet(item, query)}</div>
            </div>
            <div class="result-badge">Sección</div>
          </a>
        `).join('');
      }

      if (subsections.length) {
        html += '<div class="result-group">📌 Subtemas</div>';
        html += subsections.map(item => `
          <a class="result-item" role="option" aria-selected="false" href="${item.href}">
            <div class="result-ico" aria-hidden="true">•</div>
            <div>
              <div class="result-title">${escape(item.title)}</div>
              <div class="result-snippet">${createSnippet(item, query)}</div>
            </div>
            <div class="result-badge">Subtema</div>
          </a>
        `).join('');
      }

      if (!results.length) {
        html = `
          <div class="result-group">Resultados</div>
          <div style="padding: 3rem; text-align: center; color: var(--txt-3);">
            <div style="font-size: 3rem; margin-bottom: 1rem;">🔍</div>
            <div style="font-weight: 600;">No se encontraron resultados</div>
            <div style="font-size: 0.875rem; margin-top: 0.5rem;">Intenta con otros términos</div>
          </div>
        `;
      }

      searchResults.innerHTML = html;
    }

    // Abrir/Cerrar búsqueda
    function openSearch() {
      overlay.classList.add('open');
      searchInput.value = '';
      searchResults.innerHTML = '';
      searchStats.textContent = '';
      setTimeout(() => searchInput.focus(), 100);
    }

    function closeSearch() {
      overlay.classList.remove('open');
    }

    // Debounce para búsqueda
    const debounce = (fn, delay = 200) => {
      let timeout;
      return (...args) => {
        clearTimeout(timeout);
        timeout = setTimeout(() => fn(...args), delay);
      };
    };

    // Ejecutar búsqueda
    const performSearch = () => {
      const query = searchInput.value.trim();
      
      if (!query) {
        searchResults.innerHTML = '';
        searchStats.textContent = '';
        return;
      }

      const results = rankResults(query);
      const count = results.length;
      searchStats.textContent = `${count} resultado${count !== 1 ? 's' : ''} encontrado${count !== 1 ? 's' : ''}`;
      
      renderResults(results, query);

      // Auto-seleccionar primer resultado
      const items = $$('.result-item', searchResults);
      items.forEach((el, i) => el.setAttribute('aria-selected', String(i === 0)));
      if (items[0]) items[0].scrollIntoView({ block: 'nearest', behavior: 'smooth' });
    };

    // Navegación por teclado
    let selectedIndex = 0;
    searchInput.addEventListener('keydown', (e) => {
      const items = $$('.result-item', searchResults);
      if (!items.length) return;

      if (e.key === 'ArrowDown') {
        e.preventDefault();
        selectedIndex = Math.min(items.length - 1, selectedIndex + 1);
      } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        selectedIndex = Math.max(0, selectedIndex - 1);
      } else if (e.key === 'Enter') {
        e.preventDefault();
        const link = items[selectedIndex];
        if (link) {
          closeSearch();
          setTimeout(() => link.click(), 50);
        }
        return;
      } else {
        return;
      }

      items.forEach((el, i) => el.setAttribute('aria-selected', String(i === selectedIndex)));
      items[selectedIndex].scrollIntoView({ block: 'nearest', behavior: 'smooth' });
    });

    // Event listeners
    searchBtn?.addEventListener('click', openSearch);
    searchClose?.addEventListener('click', closeSearch);
    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) closeSearch();
    });
    searchInput.addEventListener('input', debounce(performSearch, 150));

    // Atajos de teclado
    window.addEventListener('keydown', (e) => {
      const isTyping = /INPUT|TEXTAREA|SELECT/.test(document.activeElement?.tagName || '');
      
      if (e.key === '/' && !isTyping) {
        e.preventDefault();
        openSearch();
      }
      
      if (e.key === 'Escape' && overlay.classList.contains('open')) {
        closeSearch();
      }
    });
  }

  /* ==================== TOC (Tabla de Contenidos) ==================== */
  function initTOC() {
    if ($('#tocDrawer')) return; // Ya existe

    // Crear overlay y drawer
    const overlay = document.createElement('div');
    overlay.className = 'toc-overlay';
    overlay.id = 'tocOverlay';

    const drawer = document.createElement('aside');
    drawer.className = 'toc-drawer';
    drawer.id = 'tocDrawer';
    drawer.innerHTML = `
      <div class="toc-head">
        <div class="toc-title">📑 Contenido</div>
        <button class="toc-close" aria-label="Cerrar">✕</button>
      </div>
      <nav class="toc-content toc-list" id="tocList"></nav>
    `;

    document.body.appendChild(overlay);
    document.body.appendChild(drawer);

    // Crear botón TOC en header
    const headerContainer = $('.header .header-container');
    if (headerContainer && !$('.toc-btn', headerContainer)) {
      const tocBtn = document.createElement('button');
      tocBtn.className = 'toc-btn';
      tocBtn.type = 'button';
      tocBtn.title = 'Tabla de contenidos (T)';
      tocBtn.innerHTML = '<span class="toc-dot"></span> Contenido';
      
      const suiteNav = $('.office-suite-nav', headerContainer);
      headerContainer.insertBefore(tocBtn, suiteNav);
      
      tocBtn.addEventListener('click', () => openTOC());
    }

    // Renderizar contenido
    renderTOC();

    // Event listeners
    $('.toc-close', drawer)?.addEventListener('click', closeTOC);
    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) closeTOC();
    });

    // Cerrar TOC al hacer clic en un enlace
    drawer.addEventListener('click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (link) {
        closeTOC();
        // Highlight temporal del elemento
        const targetId = link.getAttribute('href').slice(1);
        setTimeout(() => highlightElement(targetId), 300);
      }
    });

    // Atajos de teclado
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeTOC();
      
      const isTyping = /INPUT|TEXTAREA|SELECT/.test(document.activeElement?.tagName || '');
      if (!isTyping && (e.key === 't' || e.key === 'T')) {
        e.preventDefault();
        toggleTOC();
      }
    });

    // Scroll spy
    setupScrollSpy();
  }

  function renderTOC() {
    const list = $('#tocList');
    if (!list) return;

    // Agrupar por secciones
    const sectionsMap = new Map();
    INDEX.forEach(item => {
      if (item.type === 'section') {
        sectionsMap.set(item.id, {
          id: item.id,
          title: item.title,
          items: []
        });
      }
    });

    INDEX.forEach(item => {
      if (item.type === 'subsection' && sectionsMap.has(item.parentId)) {
        sectionsMap.get(item.parentId).items.push(item);
      }
    });

    // Crear HTML
    const ul = document.createElement('ul');
    
    for (const section of sectionsMap.values()) {
      const li = document.createElement('li');
      li.innerHTML = `<a href="#${section.id}">${escape(section.title)}</a>`;
      
      if (section.items.length) {
        const subList = document.createElement('ul');
        subList.className = 'sub';
        
        for (const sub of section.items) {
          const subLi = document.createElement('li');
          subLi.innerHTML = `<a href="#${sub.id}">${escape(sub.title)}</a>`;
          subList.appendChild(subLi);
        }
        
        li.appendChild(subList);
      }
      
      ul.appendChild(li);
    }

    list.innerHTML = '';
    list.appendChild(ul);
  }

  function openTOC() {
    $('#tocDrawer')?.classList.add('open');
    $('#tocOverlay')?.classList.add('open');
    document.body.classList.add('noscroll');
  }

  function closeTOC() {
    $('#tocDrawer')?.classList.remove('open');
    $('#tocOverlay')?.classList.remove('open');
    document.body.classList.remove('noscroll');
  }

  function toggleTOC() {
    const isOpen = $('#tocDrawer')?.classList.contains('open');
    isOpen ? closeTOC() : openTOC();
  }

  /* ==================== SCROLL SPY ==================== */
  function setupScrollSpy() {
    const tocLinks = new Map();
    $$('#tocList a[href^="#"]').forEach(link => {
      tocLinks.set(link.getAttribute('href').slice(1), link);
    });

    const navLinks = new Map();
    $$('.nav .nav-item[href^="#"]').forEach(link => {
      const id = link.getAttribute('href').slice(1);
      if (document.getElementById(id)) {
        navLinks.set(id, link);
      }
    });

    const observed = INDEX
      .filter(item => item.type === 'section' || item.type === 'subsection')
      .map(item => document.getElementById(item.id))
      .filter(Boolean);

    const observer = new IntersectionObserver(
      (entries) => {
        let activeId = null;
        
        for (const entry of entries) {
          if (entry.isIntersecting) {
            activeId = entry.target.id;
          }
        }

        if (!activeId) return;

        // Actualizar TOC
        $$('#tocList a').forEach(a => a.classList.remove('active'));
        const tocLink = tocLinks.get(activeId);
        tocLink?.classList.add('active');

        // Actualizar Nav
        const current = INDEX.find(x => x.id === activeId);
        const parentId = current?.type === 'section' ? current.id : current?.parentId;
        
        $$('.nav .nav-item').forEach(a => a.classList.remove('active'));
        if (parentId && navLinks.has(parentId)) {
          navLinks.get(parentId)?.classList.add('active');
        }
      },
      {
        rootMargin: '-20% 0px -60% 0px',
        threshold: 0.01
      }
    );

    observed.forEach(el => observer.observe(el));
  }

  /* ==================== HIGHLIGHT ELEMENT ==================== */
  function highlightElement(id) {
    const element = document.getElementById(id);
    if (!element) return;

    const color = getComputedStyle(document.documentElement)
      .getPropertyValue('--accent-2').trim() || '#44A5FF';

    element.style.outline = `3px solid ${color}`;
    element.style.outlineOffset = '8px';
    element.style.transition = 'outline 0.3s ease';

    setTimeout(() => {
      element.style.outline = 'none';
    }, 1500);
  }

  /* ==================== SMOOTH SCROLL ENHANCEMENTS ==================== */
  document.addEventListener('click', (e) => {
    const link = e.target.closest('a[href^="#"]');
    if (!link) return;

    const targetId = link.getAttribute('href').slice(1);
    const target = document.getElementById(targetId);
    
    if (target) {
      e.preventDefault();
      
      // Smooth scroll
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });

      // Highlight
      setTimeout(() => highlightElement(targetId), 500);

      // Actualizar URL sin scroll jump
      history.pushState(null, '', '#' + targetId);
    }
  });

  /* ==================== PARALLAX EFFECTS ==================== */
  function initParallax() {
    const hero = $('.hero');
    if (!hero) return;

    window.addEventListener('scroll', () => {
      const scrolled = window.scrollY;
      const rate = scrolled * 0.5;
      hero.style.transform = `translateY(${rate}px)`;
      hero.style.opacity = Math.max(0, 1 - scrolled / 600);
    }, { passive: true });
  }

  /* ==================== INICIALIZACIÓN ==================== */
  function init() {
    console.log('🚀 Inicializando LibreOffice Impress Guide...');
    
    observeFadeIn();
    initSearch();
    initTOC();
    initParallax();
    
    console.log('✅ Guía inicializada correctamente');
  }

  // Ejecutar cuando el DOM esté listo
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();