<?php
if( is_front_page() && true == quna_is_hide_title_on_homepage() ) {
?>
  <header class="entry-header style-one">
    <?php quna_post_thumbnail(); ?>
  </header>
<?php
  return;
}
?>
<header class="entry-header style-one">

  <?php if ( 'post' === get_post_type() ) : ?>
  <p><?php quna_posted_by(); ?></p>
  <?php endif; ?>

  <?php quna_post_thumbnail(); ?>

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
      ?>
    </div><!-- .entry-meta -->
  <?php endif; ?>
</header><!-- .entry-header -->
