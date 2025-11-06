<?php
/**
 * Patička
 */
?>
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
      <p>
        <a href="#">Facebook</a> ·
        <a href="#">Instagram</a> ·
        <a href="#">LinkedIn</a>
      </p>
    </div>
  </div>
  <div class="container small print">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Všechna práva vyhrazena.</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
