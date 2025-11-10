<?php
/* --------------------------------------------------
   NEBULA STUDIO - OnePage Theme Index
   Kompletní OnePage šablona: O nás, Služby, Galerie, Mapa
-------------------------------------------------- */
get_header();

// Získání ID stránek z Customizeru
$about_id    = absint(get_theme_mod('moje_about_page', 0));
$services_id = absint(get_theme_mod('moje_services_page', 0));
$gallery_id  = absint(get_theme_mod('moje_gallery_page', 0));
$iframe_url  = esc_url(get_theme_mod('moje_iframe_url', ''));
?>

<main>

  <!-- 🟣 SEKCE: O NÁS -->
  <section id="o-nas" class="section">
    <div class="container">
      <h2>Nebula Studio</h2>
      <p>Jsme malé webové studio, které spojuje design, kód a technologii. Tvoříme moderní, rychlé a funkční weby s duší.</p>

      <div class="cards">
        <div class="card">
          <h3><span class="emoji">⚡</span>Rychlost & UX</h3>
          <p>Minimalistický design, bleskové načítání, přístupnost a přehledná struktura.</p>
          <div class="meta">Core Web Vitals ready</div>
        </div>
        <div class="card">
          <h3><span class="emoji">🛠️</span>WordPress & ACF</h3>
          <p>Vše plně spravovatelné v administraci – žádný text napevno v kódu.</p>
          <div class="meta">OnePage + CMS</div>
        </div>
        <div class="card">
          <h3><span class="emoji">🔒</span>Bezpečnost & Kvalita</h3>
          <p>Čistý kód, bezpečné pluginy, pravidelné aktualizace a podpora.</p>
          <div class="meta">GitHub workflow</div>
        </div>
      </div>

      <div style="margin-top:24px">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1200&auto=format&fit=crop" 
             alt="Tým Nebula Studio – spolupráce" 
             style="width:100%;border-radius:12px;"/>
      </div>
    </div>
  </section>

  <!-- 🟢 SEKCE: SLUŽBY -->
  <section id="sluzby" class="section">
    <div class="container">
      <h2>Služby</h2>
      <p>Pomáháme firmám růst díky kvalitním webům, e-shopům a digitálním řešením.  
      Každý projekt stavíme na míru vašim cílům.</p>

      <div class="cards">
        <div class="card">
          <h3><span class="emoji">🌐</span>OnePage web</h3>
          <p>Jednoduchý, moderní web na jedné stránce s plynulým scrollováním a responzivitou.</p>
          <div class="meta">od 12 900 Kč</div>
        </div>
        <div class="card">
          <h3><span class="emoji">🛒</span>E-shop (WooCommerce)</h3>
          <p>Rychlé a přehledné online obchody připravené na platby, dopravu i růst.</p>
          <div class="meta">nabídka na míru</div>
        </div>
        <div class="card">
          <h3><span class="emoji">🧩</span>Custom funkce</h3>
          <p>Specifické formuláře, integrace API, rezervační systémy a další vychytávky.</p>
          <div class="meta">podle specifikace</div>
        </div>
      </div>

      <div style="margin-top:24px">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop" 
             alt="Vývoj webu – laptop a kód" 
             style="width:100%;border-radius:12px;"/>
      </div>
    </div>
  </section>

  <!-- 🔵 SEKCE: GALERIE -->
  <section id="galerie" class="section">
    <div class="container">
      <h2>Galerie / Reference</h2>
      <p>Ukázky našich projektů, které kombinují estetiku, funkčnost a výkon.</p>

      <div class="grid-gallery">
        <figure>
          <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=1200&auto=format&fit=crop" alt="Kavárna – web" />
          <figcaption>Kavárna – minimalistický web</figcaption>
        </figure>
        <figure>
        <img src="https://images.unsplash.com/photo-1533750349088-cd871a92f312?q=80&w=1200&auto=format&fit=crop" alt="Ateliér – portfolio" />
          <figcaption>Ateliér – portfolio s galerií</figcaption>
        </figure>
        <figure>
          <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?q=80&w=1200&auto=format&fit=crop" alt="E-shop – produktová prezentace" />
          <figcaption>E-shop – produktová prezentace</figcaption>
        </figure>
        <figure>
          <img src="https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?q=80&w=1200&auto=format&fit=crop" alt="Studio – landing page" />
          <figcaption>Studio – landing page</figcaption>
        </figure>
        <figure>
          <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?q=80&w=1200&auto=format&fit=crop" alt="Kreativní brand – identity" />
          <figcaption>Kreativní brand – identity</figcaption>
        </figure>
        <figure>
          <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=1200&auto=format&fit=crop" alt="SaaS dashboard – UI" />
          <figcaption>SaaS dashboard – UI</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- 🔴 SEKCE: MAPA -->
  <section id="kontakt" class="section section-iframe">
    <div class="container">
      <h2>Kde nás najdete</h2>
      <p>Navštivte nás v našem pražském studiu nebo si domluvte schůzku online.</p>
      <div class="iframe-wrap">
        <iframe 
          src="<?php echo $iframe_url ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.947403418694!2d14.42076!3d50.08804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b94e1f1!2sPrague!5e0!3m2!1scs!2scz!4v0000000000'; ?>" 
          loading="lazy" allowfullscreen></iframe>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
