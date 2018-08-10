<?php
if( is_front_page() && true == quna_is_hide_title_on_homepage() ) {
  return;
}
?>
<header class="entry-header">
  <?php
  if ( is_singular() || is_page() ) :
    the_title( '<h1 class="entry-title">', '</h1>' );
  else :
    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  endif;

  if ( 'post' === get_post_type() ) :
    ?>
    <div class="entry-meta">
      <?php
      quna_posted_on();
      quna_posted_by();
      ?>
    </div><!-- .entry-meta -->
  <?php endif; ?>
</header><!-- .entry-header -->

<?php quna_post_thumbnail(); ?>
