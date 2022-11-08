

<!-- header file -->
<?php get_header( ); ?>


<!-- Body Part -->
<section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9">

            <div id="search_title">
                <h1 class="title">
                    <?php 
                        printf( 
                            __( 'Search Results for: %s', 'alihossain'),
                            get_search_query()
                        );
                    ?>
                </h1>
            
            </div>
          
        <?php get_template_part('template/blog'); ?>
          


        </div>

        <div class="col-md-3">
          <?php get_sidebar( ); ?>
        </div>
      </div>
    </div>
  </section>


<!-- footer  -->
<?php get_footer( ); ?>