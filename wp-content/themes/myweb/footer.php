<?php /** Footer + inline JS fix pro mobilní menu */ ?>
<footer class="site-footer" id="kontakt">
  <div class="container footer-grid">
    <div>
      <h3><?php bloginfo('name'); ?></h3>
      <p><?php bloginfo('description'); ?></p>
    </div>

    <div>
      <h4>Kontakt</h4>
      <ul class="contact-list">
        <li>Email: <a href="mailto:info@example.com">info@example.com</a></li>
        <li>Tel: +420 123 456 789</li>
        <li>Adresa: Ulice 1, Město</li>
      </ul>
    </div>

    <div>
      <h4>Sociální sítě</h4>
      <div class="social-icons">
        <!-- (Tvoje originální SVG loga už máš – ponechávám) -->
        <a href="https://www.facebook.com/login/" target="_blank" aria-label="Facebook" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M22.675 0H1.325A1.325 1.325 0 0 0 0 1.325v21.351C0 23.403.597 24 1.325 24h11.495V14.708h-3.13v-3.62h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.764v2.314h3.587l-.467 3.62h-3.12V24h6.116A1.325 1.325 0 0 0 24 22.676V1.325A1.325 1.325 0 0 0 22.675 0z"/></svg>
        </a>
        <a href="https://www.instagram.com/accounts/login/" target="_blank" aria-label="Instagram" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.35 3.608 1.325.975.975 1.263 2.242 1.325 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.35 2.633-1.325 3.608-.975.975-2.242 1.263-3.608 1.325-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.35-3.608-1.325-.975-.975-1.263-2.242-1.325-3.608C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.062-1.366.35-2.633 1.325-3.608.975-.975 2.242-1.263 3.608-1.325C8.416 2.175 8.796 2.163 12 2.163zm0 1.837c-3.16 0-3.532.012-4.777.069-1.026.047-1.586.218-1.957.364-.493.191-.846.42-1.217.791-.37.37-.6.724-.79 1.216-.146.372-.317.932-.364 1.958-.058 1.245-.07 1.617-.07 4.777s.012 3.532.069 4.777c.047 1.026.218 1.586.364 1.957.191.493.42.846.791 1.217.37.37.724.6 1.216.79.372.146.932.317 1.958.364 1.245.058 1.617.07 4.777.07s3.532-.012 4.777-.069c1.026-.047 1.586-.218 1.957-.364.493-.191.846-.42 1.217-.791.37-.37.6-.724.79-1.216.146-.372.317-.932.364-1.958.058-1.245.07-1.617.07-4.777s-.012-3.532-.069-4.777c-.047-1.026-.218-1.586-.364-1.957-.191-.493-.42-.846-.791-1.217-.37-.37-.724-.6-1.216-.79-.372-.146-.932-.317-1.958-.364-1.245-.058-1.617-.07-4.777-.07zm0 3.675a5.325 5.325 0 1 1 0 10.65 5.325 5.325 0 0 1 0-10.65zm0 1.8a3.525 3.525 0 1 0 0 7.05 3.525 3.525 0 0 0 0-7.05zm5.406-3.006a1.245 1.245 0 1 1 0 2.49 1.245 1.245 0 0 1 0-2.49z"/></svg>
        </a>
        <a href="https://www.linkedin.com/login" target="_blank" aria-label="LinkedIn" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0H5C2.24 0 0 2.24 0 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5V5c0-2.76-2.24-5-5-5zM7.12 20.45H3.56V9h3.56v11.45zM5.34 7.53a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM20.45 20.45h-3.56v-5.6c0-1.34-.03-3.06-1.87-3.06-1.87 0-2.16 1.46-2.16 2.96v5.7H9.3V9h3.42v1.56h.05c.48-.9 1.65-1.85 3.4-1.85 3.64 0 4.31 2.4 4.31 5.53v6.21z"/></svg>
        </a>
        <a href="https://www.youtube.com/" target="_blank" aria-label="YouTube" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a2.99 2.99 0 0 0-2.104-2.116C19.323 3.5 12 3.5 12 3.5s-7.323 0-9.394.57A2.99 2.99 0 0 0 .502 6.186 31.26 31.26 0 0 0 0 12a31.26 31.26 0 0 0 .502 5.814 2.99 2.99 0 0 0 2.104 2.116C4.677 20.5 12 20.5 12 20.5s7.323 0 9.394-.57a2.99 2.99 0 0 0 2.104-2.116A31.26 31.26 0 0 0 24 12a31.26 31.26 0 0 0-.502-5.814zM9.75 15.5v-7l6 3.5-6 3.5z"/></svg>
        </a>
      </div>
    </div>
  </div>

  <div class="container small print">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Všechna práva vyhrazena.</p>
  </div>
</footer>

<!-- Inline JS: zajistí funkční hamburger i když se nenačte externí JS -->
<script>
(function(){
  var btn = document.getElementById('navToggle');
  var nav = document.getElementById('primary-nav');
  if (!btn || !nav) return;

  function openMenu(){ document.body.classList.add('nav-open'); btn.setAttribute('aria-expanded','true'); btn.setAttribute('aria-label','Zavřít menu'); }
  function closeMenu(){ document.body.classList.remove('nav-open'); btn.setAttribute('aria-expanded','false'); btn.setAttribute('aria-label','Otevřít menu'); }
  btn.addEventListener('click', function(){ document.body.classList.contains('nav-open') ? closeMenu() : openMenu(); });

  // zavřít po kliknutí na položku
  nav.addEventListener('click', function(e){ if (e.target.closest('a')) closeMenu(); });

  // Escape zavře
  document.addEventListener('keydown', function(e){ if (e.key === 'Escape') closeMenu(); });

  // Smooth scroll jen pro kotvy, pokud cíl existuje
  document.addEventListener('click', function(e){
    var a = e.target.closest && e.target.closest('a[href^="#"]');
    if (!a) return;
    var id = a.getAttribute('href').slice(1);
    var el = document.getElementById(id);
    if (!el) return; // normální odkaz – neblokuj
    e.preventDefault();
    el.scrollIntoView({ behavior:'smooth', block:'start' });
    if (history.pushState) history.pushState(null, '', '#'+id);
  });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
