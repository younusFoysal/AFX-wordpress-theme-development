

<!-- header file -->



<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"> 
    
    <title><?php add_theme_support('title-tag'); ?> </title>
 
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
 



<div id="header_area" class="<?php echo get_theme_mod('afx_menu_position'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="<?php echo home_url( ); ?>"><img src="<?php echo get_theme_mod('afx_logo'); ?>" alt=""></a>
        </div>
        <div class="col-md-9">
            <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
        </div>
      </div>
    </div>
  </div>



