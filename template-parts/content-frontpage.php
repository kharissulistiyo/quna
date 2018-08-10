<?php
/**
 * This code looks for this plugin be enabled
 * https://wordpress.org/plugins/wp-instagram-widget/
 */
if( !is_front_page() ) {
  return;
}
if( class_exists('null_instagram_widget') ) {
  $settings = array();
  if( '' != get_theme_mod('quna_ig_feed') ) {
    $settings['username'] = esc_html( get_theme_mod('quna_ig_feed') );
    $settings['number']   = 4;
    $settings['size']     = 'small';
    $settings['target']   = '_blank';
  }
  ?>
  <div class="quna_bundled-widget">
  <?php the_widget( 'null_instagram_widget', $settings ); ?>
  </div>
  <?php
}
