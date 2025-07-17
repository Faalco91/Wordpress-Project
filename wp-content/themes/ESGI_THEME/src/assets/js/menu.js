document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('js-menu-toggle');
    const closeBtn = document.getElementById('js-menu-close');
    const overlay = document.getElementById('js-overlay-menu');
  
    toggle.addEventListener('click', () => {
      overlay.classList.add('active');
      toggle.setAttribute('aria-expanded', 'true');
      overlay.removeAttribute('aria-hidden');
    });
  
    closeBtn.addEventListener('click', () => {
      overlay.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
      overlay.setAttribute('aria-hidden', 'true');
    });
  
    // Fermer si on clique hors du menu
    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) {
        closeBtn.click();
      }
    });

    // 1. repérer les éléments
    const placeholder = document.getElementById('js-search-placeholder');
    const formContainer = document.getElementById('js-search-form');
    const formInput = formContainer.querySelector('input[type="search"]');

    // 2. au clic sur le texte, on cache le placeholder et on affiche le form
    placeholder.addEventListener('click', function() {
      placeholder.style.display = 'none';
      formContainer.style.display = 'block';
      // focus direct sur le champ
      formInput.focus();
    });
  });
  