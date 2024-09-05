  <footer class="o-section c-page-footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">

    <div class="c-page-footer-upper">
      <div class="o-wrapper-wide">
      <div class="c-footer-columns">
          <div class="c-footer-column">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
              <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php endif; ?>
          </div>
          <div class="c-footer-column">
          <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>
          <?php endif; ?>
          </div>
          <div class="c-footer-column">
          <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <?php dynamic_sidebar( 'footer-3' ); ?>
          <?php endif; ?>
          </div>
          <div class="c-footer-column">
          <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
            <?php dynamic_sidebar( 'footer-4' ); ?>
          <?php endif; ?>
          </div>
        </div>
        <!-- /.c-footer-widgets -->
        
        <!-- /.c-logo-copy-wrap -->
      </div>
      <!-- /.o-wrapper-wide -->
    </div>
    <div class="c-page-footer-lower">
      <div class="o-wrapper-wider">
        <div class="">
          <p>CAUTION: The PULSE IVL™ System is in development. It is not yet cleared for commercial distribution in any country. Its future availability cannot be guaranteed.</p>
            <div class="c-copywrite">
            Copyright &copy; <?php echo date('Y'); ?>. <?php bloginfo('name'); ?>. All rights reserved. <a href="/privacy-policy">Privacy Policy</a>
            </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /.c-page-footer -->

  <?php // get_template_part( 'template-part/navigation/nav-modal' ); ?>

  <!-- all js scripts are loaded in lib/gdt-enqueues.php -->
  <?php wp_footer(); ?>

</body>
</html>
