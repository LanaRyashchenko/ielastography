<?php

add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );

function my_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  #  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

register_nav_menus( array(
  'primary' => esc_html__( 'Primary Menu', 'eightmedi-lite' ),
  'topmenu' => esc_html__( 'Top Menu', 'eightmedi-lite' ),
  ) );


pll_register_string('Team Memeber Title', get_theme_mod('eightmedi_lite_teammember_title'));
pll_register_string('News Title', get_theme_mod('eightmedi_lite_news_title'));
pll_register_string('CTA button slider', get_theme_mod('eightmedi_lite_slider_cta_btntext'));
?>
