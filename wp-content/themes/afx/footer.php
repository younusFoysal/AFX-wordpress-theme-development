




  <footer id="footer_area">
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php dynamic_sidebar( 'footer-1'); ?>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar( 'footer-2'); ?>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar( 'footer-3'); ?>


          <!-- Back to top button -->
            <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
                 ↑
            </button>


        </div>
      </div>
    </div>
  </section>
  <section id="copyright_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><?php echo get_theme_mod('afx_copyright_position'); ?></p>
        </div>
      </div>
    </div>
  </section>
</footer>



<?php wp_footer(); ?>
</body>
</html>

