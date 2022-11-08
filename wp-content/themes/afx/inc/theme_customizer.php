<?php 


function afx_customizer_register($wp_customize){

    //Header logo menu
    $wp_customize -> add_section('afx_header_area', array(
        'title' => __('Header Area', 'afx'),
        'description' => 'If you are Interested to Change the title of website.'
    ));

    $wp_customize -> add_setting('afx_logo', array(
        'default' => get_bloginfo( 'template_directory').'/img/afx.png'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'afx_logo', array(
        'label' => 'Logo Upload',
        'section' => 'afx_header_area',
        'setting' => 'afx_logo',
        'description' => 'If you are Interested to Change the Logo of website.'
    )));


    // Menu Position Option
    $wp_customize->add_section('afx_menu_option', array(
        'title' => __('Menu Position Option', 'afx'),
        'description' => 'If you interested to change your menu position you can do it.'
    ));

    $wp_customize->add_setting('afx_menu_position', array(
        'default' => 'right_menu', 
    ));

    $wp_customize-> add_control('afx_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => 'afx_menu_position',
        'section' => 'afx_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));
    

    // Footer Option
    $wp_customize->add_section('afx_footer_section', array(
        'title' => __('Footer', 'afx'),
        'description' => 'If you interested to change or update your footer settings you can do it.'
    ));

    $wp_customize->add_setting('afx_copyright_position', array(
        'default' => '&copy; Copyright 2022 | AFX', 
    ));

    $wp_customize-> add_control('afx_copyright_position', array(
        'label' => 'Copyright Text',
        'description' => 'If need you can update your copyright text from here',
        'setting' => 'afx_copyright_position',
        'section' => 'afx_footer_section',
    ));


    // Theme Color
    $wp_customize-> add_section('afx_colors', array(
        'title' => __('Theme Color', 'afx'),
        'description' => 'If need you can change your theme color.',
    ));


    $wp_customize ->add_setting('afx_bg_color', array(
        'default' => '#ffffff',
    ));
    $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'afx_bg_color', array(
        'label' => 'Background Color',
        'section' => 'afx_colors',
        'settings' => 'afx_bg_color',
    )));


    $wp_customize ->add_setting('afx_primary_color', array(
        'default' => '#ea1a70',
    ));

    $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'afx_primary_color', array(
        'label' => 'Primary Color',
        'section' => 'afx_colors',
        'settings' => 'afx_primary_color',
    )));

}
add_action('customize_register', 'afx_customizer_register');



function afx_theme_color_customize(){
  ?>
  <style>
    body{background: <?php echo get_theme_mod('afx_bg_color'); ?>}
    :root{ --pink:<?php echo get_theme_mod('afx_primary_color'); ?>}
  </style>
  <?php 
}
add_action('wp_head', 'afx_theme_color_customize');






