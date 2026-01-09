/* ==========================================================
   JAVASCRIPT MEJORADO - Header y Buscador
   ========================================================== */

(function () {
  'use strict';
  
  const $ = (s, r = document) => r.querySelector(s);
  const $$ = (s, r = document) => Array.from(r.querySelectorAll(s));

  /* ========== HEADER FUNCTIONALITY ========== */
  
  // Header scroll effect
  const header = $('.header');
  const handleScroll = () => {
    if (header) {
      header.classList.toggle('scrolled', window.scrollY > 10);
    }
  };
  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // Mobile menu toggle
  const mobileMenuBtn = $('.mobile-menu-btn');
  const mobileNav = $('#mobileNav');
  
  if (mobileMenuBtn && mobileNav) {
    mobileMenuBtn.addEventListener('click', () => {
      const isOpen = mobileNav.classList.toggle('open');
      mobileMenuBtn.classList.toggle('active', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // Cerrar menú al hacer click en un enlace
    $$('.mobile-nav-item', mobileNav).forEach(item => {
      item.addEventListener('click', () => {
        mobileNav.classList.remove('open');
        mobileMenuBtn.classList.remove('active');
        document.body.style.overflow = '';
      });
    });

    // Cerrar menú al hacer click fuera
    document.addEventListener('click', (e) => {
      if (mobileNav.classList.contains('open') && 
          !mobileNav.contains(e.target) && 
          !mobileMenuBtn.contains(e.target)) {
        mobileNav.classList.remove('open');
        mobileMenuBtn.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  }

  // Suite dropdown para móvil
  const suiteToggle = $('.suite-toggle');
  const suiteMenu = $('.suite-menu');
  
  if (suiteToggle && suiteMenu && window.innerWidth <= 768) {
    suiteToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      suiteMenu.classList.toggle('show');
    });

    document.addEventListener('click', (e) => {
      if (!suiteMenu.contains(e.target) && !suiteToggle.contains(e.target)) {
        suiteMenu.classList.remove('show');
      }
    });
  }

  /* ========== PROGRESS BAR ========== */
  
  const progressBar = $('#progressBar');
  const updateProgress = () => {
    if (!progressBar) return;
    const html = document.documentElement;
    const scrolled = html.scrollTop;
    const height = html.scrollHeight - html.clientHeight;
    const progress = (scrolled / height) * 100;
    progressBar.style.width = `${progress}%`;
  };
  
  window.addEventListener('scroll', updateProgress, { passive: true });
  updateProgress();

  /* ========== ACTIVE NAV HIGHLIGHTING ========== */
  
  const sections = $$('.section[id]');
  const navLinks = $$('.nav-item, .mobile-nav-item');
  
  const observerOptions = {
    root: null,
    rootMargin: '-20% 0px -70% 0px',
    threshold: 0
  };

  const observerCallback = (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        navLinks.forEach(link => {
          const href = link.getAttribute('href');
          if (href === `#${id}`) {
            navLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
          }
        });
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  sections.forEach(section => observer.observe(section));

  /* ========== BUSCADOR MEJORADO ========== */
  
  const searchBtn = $('.search-btn');
  const searchOverlay = $('#searchOverlay');
  const searchModal = $('.search-modal', searchOverlay);
  const searchInput = $('#siteSearch');
  const searchClose = $('.search-close', searchOverlay);
  const searchResults = $('#searchResults');
  const searchStats = $('#searchStats');

  // Utilidades
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

  const escapeHtml = (str) => {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
  };

  const slugify = (str) => {
    return normalize(str)
      .replace(/[^a-z0-9\s\-]/g, '')
      .trim()
      .replace(/\s+/g, '-') || 'section';
  };

  // Generar IDs únicos
  const usedIds = new Set();
  const generateUniqueId = (base) => {
    let id = base;
    let counter = 2;
    while (usedIds.has(id) || document.getElementById(id)) {
      id = `${base}-${counter++}`;
    }
    usedIds.add(id);
    return id;
  };

  // Construir índice de búsqueda
  function buildSearchIndex() {
    const index = [];
    const sections = $$('.section[id]');

    sections.forEach(section => {
      const sectionId = section.id;
      const titleEl = $('.section-title h2, h2', section);
      const title = titleEl?.textContent?.trim() || sectionId;
      const content = section.innerText.replace(/\s+/g, ' ').trim();

      index.push({
        type: 'section',
        id: sectionId,
        title: title,
        content: content,
        normalized: normalize(title + ' ' + content),
        href: `#${sectionId}`,
        element: section
      });

      // Agregar subtítulos H3
      const subtitles = $$('h3', section);
      subtitles.forEach(h3 => {
        if (!h3.id) {
          h3.id = generateUniqueId(`${sectionId}-${slugify(h3.textContent)}`);
        }

        const card = h3.closest('.card') || h3.parentElement;
        const subContent = card?.innerText?.replace(/\s+/g, ' ').trim() || '';

        index.push({
          type: 'subtitle',
          id: h3.id,
          parentId: sectionId,
          title: h3.textContent.trim(),
          content: subContent,
          normalized: normalize(h3.textContent + ' ' + subContent),
          href: `#${h3.id}`,
          element: h3
        });
      });
    });

    return index;
  }

  const searchIndex = buildSearchIndex();

  // Función de búsqueda con ranking
  function searchContent(query) {
    const normalizedQuery = normalize(query.trim());
    if (!normalizedQuery) return [];

    const terms = normalizedQuery.split(/\s+/).filter(Boolean);
    const results = [];

    searchIndex.forEach(item => {
      let score = 0;
      let matchCount = 0;

      terms.forEach(term => {
        const titleIndex = normalize(item.title).indexOf(term);
        const contentIndex = item.normalized.indexOf(term);

        if (titleIndex !== -1) {
          score += 100; // Match en título pesa más
          matchCount++;
          if (titleIndex === 0) score += 50; // Bonus si empieza con el término
        }

        if (contentIndex !== -1) {
          score += 10; // Match en contenido
          matchCount++;
        }
      });

      // Solo incluir si todos los términos están presentes
      if (matchCount >= terms.length) {
        // Bonus por tipo
        if (item.type === 'section') score += 20;
        
        results.push({ item, score });
      }
    });

    // Ordenar por score descendente
    results.sort((a, b) => b.score - a.score);

    return results.slice(0, 20).map(r => r.item);
  }

  // Generar snippet con highlights
  function generateSnippet(item, query) {
    const content = item.content || '';
    const normalizedContent = normalize(content);
    const normalizedQuery = normalize(query);
    const terms = normalizedQuery.split(/\s+/).filter(Boolean);

    // Encontrar la primera aparición de cualquier término
    let firstIndex = Infinity;
    terms.forEach(term => {
      const idx = normalizedContent.indexOf(term);
      if (idx !== -1 && idx < firstIndex) {
        firstIndex = idx;
      }
    });

    if (!isFinite(firstIndex)) firstIndex = 0;

    // Extraer snippet alrededor de la primera aparición
    const start = Math.max(0, firstIndex - 80);
    const end = Math.min(content.length, firstIndex + 200);
    let snippet = content.slice(start, end);

    // Agregar puntos suspensivos
    if (start > 0) snippet = '...' + snippet;
    if (end < content.length) snippet = snippet + '...';

    // Highlight de términos
    const regex = new RegExp(
      `(${terms.map(t => t.replace(/[.*+?^${}()|[\]\\]/g, '\\$&')).join('|')})`,
      'gi'
    );

    return escapeHtml(snippet).replace(regex, '<mark>$1</mark>');
  }

  // Renderizar resultados
  function renderResults(results, query) {
    if (!results.length) {
      searchResults.innerHTML = `
        <div class="result-group">Sin resultados</div>
        <div style="padding: 2rem; text-align: center; color: var(--text-muted);">
          <p>No se encontraron resultados para "<strong>${escapeHtml(query)}</strong>"</p>
          <p style="font-size: 0.9rem; margin-top: 0.5rem;">Intenta con otros términos de búsqueda</p>
        </div>
      `;
      return;
    }

    const sections = results.filter(r => r.type === 'section');
    const subtitles = results.filter(r => r.type === 'subtitle');

    let html = '';

    if (sections.length) {
      html += '<div class="result-group">Secciones</div>';
      sections.forEach((item, index) => {
        html += `
          <a href="${item.href}" class="result-item" role="option" aria-selected="${index === 0}">
            <div class="result-ico">§</div>
            <div style="flex: 1; min-width: 0;">
              <div class="result-title">${escapeHtml(item.title)}</div>
              <div class="result-snippet">${generateSnippet(item, query)}</div>
            </div>
            <div class="result-badge">Sección</div>
          </a>
        `;
      });
    }

    if (subtitles.length) {
      html += '<div class="result-group">Subtemas</div>';
      subtitles.forEach(item => {
        html += `
          <a href="${item.href}" class="result-item" role="option" aria-selected="false">
            <div class="result-ico">•</div>
            <div style="flex: 1; min-width: 0;">
              <div class="result-title">${escapeHtml(item.title)}</div>
              <div class="result-snippet">${generateSnippet(item, query)}</div>
            </div>
            <div class="result-badge">Subtema</div>
          </a>
        `;
      });
    }

    searchResults.innerHTML = html;
  }

  // Abrir/cerrar buscador
  function openSearch() {
    if (!searchOverlay) return;
    searchOverlay.classList.add('open');
    searchInput.value = '';
    searchResults.innerHTML = '';
    searchStats.textContent = '';
    document.body.style.overflow = 'hidden';
    setTimeout(() => searchInput?.focus(), 100);
  }

  function closeSearch() {
    if (!searchOverlay) return;
    searchOverlay.classList.remove('open');
    document.body.style.overflow = '';
    selectedIndex = 0;
  }

  // Eventos del buscador
  if (searchBtn) {
    searchBtn.addEventListener('click', openSearch);
  }

  if (searchClose) {
    searchClose.addEventListener('click', closeSearch);
  }

  if (searchOverlay) {
    searchOverlay.addEventListener('click', (e) => {
      if (e.target === searchOverlay) {
        closeSearch();
      }
    });
  }

  // Atajos de teclado
  window.addEventListener('keydown', (e) => {
    // Abrir con "/"
    if (e.key === '/' && !isTyping()) {
      e.preventDefault();
      openSearch();
    }

    // Cerrar con "Escape"
    if (e.key === 'Escape' && searchOverlay?.classList.contains('open')) {
      closeSearch();
    }
  });

  function isTyping() {
    const activeElement = document.activeElement;
    return activeElement && 
           (activeElement.tagName === 'INPUT' || 
            activeElement.tagName === 'TEXTAREA' ||
            activeElement.isContentEditable);
  }

  // Realizar búsqueda con debounce
  let searchTimeout;
  if (searchInput) {
    searchInput.addEventListener('input', () => {
      clearTimeout(searchTimeout);
      searchTimeout = setTimeout(() => {
        const query = searchInput.value.trim();
        
        if (!query) {
          searchResults.innerHTML = '';
          searchStats.textContent = '';
          return;
        }

        const results = searchContent(query);
        searchStats.textContent = `${results.length} resultado${results.length === 1 ? '' : 's'} encontrado${results.length === 1 ? '' : 's'}`;
        renderResults(results, query);
        selectedIndex = 0;
        updateSelectedItem();
      }, 150);
    });
  }

  // Navegación con teclado en resultados
  let selectedIndex = 0;

  function updateSelectedItem() {
    const items = $$('.result-item', searchResults);
    items.forEach((item, index) => {
      item.setAttribute('aria-selected', index === selectedIndex);
    });

    if (items[selectedIndex]) {
      items[selectedIndex].scrollIntoView({
        block: 'nearest',
        behavior: 'smooth'
      });
    }
  }

  if (searchInput) {
    searchInput.addEventListener('keydown', (e) => {
      const items = $$('.result-item', searchResults);
      if (!items.length) return;

      if (e.key === 'ArrowDown') {
        e.preventDefault();
        selectedIndex = Math.min(items.length - 1, selectedIndex + 1);
        updateSelectedItem();
      } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        selectedIndex = Math.max(0, selectedIndex - 1);
        updateSelectedItem();
      } else if (e.key === 'Enter') {
        e.preventDefault();
        const selectedItem = items[selectedIndex];
        if (selectedItem) {
          closeSearch();
          setTimeout(() => {
            window.location.href = selectedItem.getAttribute('href');
          }, 100);
        }
      }
    });
  }

  // Click en resultado
  if (searchResults) {
    searchResults.addEventListener('click', (e) => {
      const item = e.target.closest('.result-item');
      if (item) {
        closeSearch();
      }
    });
  }

  /* ========== SMOOTH SCROLL ========== */
  
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href === '#') return;
      
      e.preventDefault();
      const targetId = href.substring(1);
      const target = document.getElementById(targetId);
      
      if (target) {
        const headerHeight = header?.offsetHeight || 70;
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
        const offsetPosition = targetPosition - headerHeight - 20;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });

        // Highlight temporal
        target.style.outline = '2px solid var(--primary)';
        target.style.outlineOffset = '4px';
        setTimeout(() => {
          target.style.outline = 'none';
        }, 1500);
      }
    });
  });

  /* ========== FADE IN ANIMATIONS ========== */
  
  const fadeElements = $$('.fade-in, .card, .tutorial-card');
  
  const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        fadeObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });

  fadeElements.forEach(el => fadeObserver.observe(el));

})();

/* ========== CSS para animaciones fade-in ========== */
// Agregar al CSS:
/*
.fade-in, .card, .tutorial-card {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}

.fade-in.visible, .card.visible, .tutorial-card.visible {
  opacity: 1;
  transform: translateY(0);
}
*/