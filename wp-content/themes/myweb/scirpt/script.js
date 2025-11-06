// Hladké skrolování pro kotvy v rámci stránky
document.addEventListener('click', (e) => {
    const a = e.target.closest('a[href^="#"]');
    if (!a) return;
    const id = a.getAttribute('href').slice(1);
    const el = document.getElementById(id);
    if (el) {
      e.preventDefault();
      el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      history.pushState(null, '', '#' + id);
    }
  });
  
  // Zvýraznění aktivní sekce v menu (volitelné)
  const sections = ['o-nas','sluzby','galerie','kontakt']
    .map(id => document.getElementById(id))
    .filter(Boolean);
  
  const navLinks = Array.from(document.querySelectorAll('.main-nav a[href^="#"]'));
  
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if (entry.isIntersecting) {
        const id = entry.target.id;
        navLinks.forEach(a=>{
          const on = a.getAttribute('href') === '#' + id;
          a.style.opacity = on ? '1' : '0.65';
        });
      }
    });
  }, { rootMargin: '-40% 0px -55% 0px', threshold: 0 });
  
  sections.forEach(s => io.observe(s));
  