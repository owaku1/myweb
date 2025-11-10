// Hamburger toggle (mobilní menu)
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('navToggle');
  const nav = document.getElementById('primary-nav');
  if (btn && nav) {
    const open = () => { document.body.classList.add('nav-open'); btn.setAttribute('aria-expanded','true'); btn.setAttribute('aria-label','Zavřít menu'); };
    const close = () => { document.body.classList.remove('nav-open'); btn.setAttribute('aria-expanded','false'); btn.setAttribute('aria-label','Otevřít menu'); };
    btn.addEventListener('click', () => document.body.classList.contains('nav-open') ? close() : open());
    nav.addEventListener('click', (e) => { if (e.target.closest('a')) close(); });
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') close(); });
  }
});

// Smooth scroll jen na kotvy (#…)
document.addEventListener('click', (e) => {
  const a = e.target.closest('a[href^="#"]');
  if (!a) return;
  const id = a.getAttribute('href').slice(1);
  const el = document.getElementById(id);
  if (!el) return;
  e.preventDefault();
  el.scrollIntoView({ behavior: 'smooth', block: 'start' });
  if (history.pushState) history.pushState(null, '', '#'+id);
});

// Zvýraznění aktivní sekce při scrollu
(() => {
  const ids = ['o-nas','sluzby','galerie','kontakt'];
  const sections = ids.map(id => document.getElementById(id)).filter(Boolean);
  const links = Array.from(document.querySelectorAll('.main-nav a[href^="#"]'));
  if (!sections.length || !links.length) return;

  const mark = (id) => links.forEach(a => a.classList.toggle('is-active', a.getAttribute('href') === '#'+id));
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e => { if (e.isIntersecting) mark(e.target.id); });
  }, { rootMargin: '-40% 0px -55% 0px' });
  sections.forEach(s => io.observe(s));
})();
