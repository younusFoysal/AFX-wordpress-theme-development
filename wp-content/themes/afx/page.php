

<!-- header file -->
<?php get_header( ); ?>


<!-- Body Part -->
<section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          
        <?php get_template_part('template/post'); ?>
          
        </div>

        <div class="col-md-3">
          <?php get_sidebar( ); ?>
        </div>
      </div>
    </div>
  </section>


<!-- footer  -->
<?php get_footer( ); ?>