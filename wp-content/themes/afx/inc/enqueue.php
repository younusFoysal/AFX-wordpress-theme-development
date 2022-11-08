<?php 


//Theme css and script enqueue
function afx_css_js_file_calling(){

    //CSS
    wp_enqueue_style( 'afx-style', get_stylesheet_uri( ));
    wp_register_style( 'bootstrap', get_template_directory_uri( ).'/css/bootstrap.css', array(), '6.0.3', 'all');
    wp_register_style( 'custom', get_template_directory_uri( ).'/css/custom.css', array(), '6.0.3', 'all');
    wp_enqueue_style( 'bootstrap');
    wp_enqueue_style( 'custom');

    //js
    wp_enqueue_script( 'jquery');
    wp_register_script( 'bootstrap', get_template_directory_uri(  ).'/js/bootstrap.js', array(), '6.0.3', 'true' );
    wp_register_script( 'main', get_template_directory_uri(  ).'/js/main.js', array(), '6.0.3', 'true' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'main' );



};
add_action( 'wp_enqueue_scripts', 'afx_css_js_file_calling' );
//add_action( 'wp_enqueue_styles', 'afx_css_js_file_calling' );  



// Google Fonts Enqueue
function afx_add_google_fonts(){
  wp_enqueue_style('afx_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'afx_add_google_fonts');

