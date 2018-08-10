<?php

if ( ! function_exists( 'quna_custom_google_fonts' ) ) :
  function quna_custom_google_fonts() {
    $body_font = get_theme_mod('quna_body_gfont', 'Roboto:400,400i,500,700,700i,900,900i');
    $heading_font = get_theme_mod('quna_heading_gfont', 'Dosis:400,500,600,700,800');
    $body_font_css = get_theme_mod('quna_body_gfont_css');
    $heading_font_css = get_theme_mod('quna_heading_gfont_css');

    $font = "\n";
    if($body_font) {
      $font .= "@import url('https://fonts.googleapis.com/css?family=".$body_font."');";
      $font .= "\n";
    }

    if($heading_font) {
      $font .= "@import url('https://fonts.googleapis.com/css?family=".$heading_font."');";
      $font .= "\n";
    }

    if($body_font_css) {
      $font .= "body { font-family: " . $body_font_css . " }" . "\n";
    }

    if($heading_font_css) {
      $font .= "h1,h2,h3,h4,h5,h5,p.site-title { font-family: " . $heading_font_css . "}" . "\n";
    }

    return $font;

  }
endif;

function quna_inline_styles($custom) {

  $prefix = 'quna_';

  $custom  = "";
  $custom .= quna_custom_google_fonts();

  $site_title_font_size = get_theme_mod($prefix . 'site_title_font_size');

  wp_add_inline_style( 'quna-style', $custom );

}
add_action( 'wp_enqueue_scripts', 'quna_inline_styles' );
