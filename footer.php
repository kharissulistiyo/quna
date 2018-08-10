<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qunaslug
 */

?>

	</div><!-- #content -->

	<div id="footer-widgets-section">
		<div class="footer-widgets widget-area widget-col-5">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
				<div class="footer-widget-area"><?php dynamic_sidebar('sidebar-2'); ?></div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
				<div class="footer-widget-area"><?php dynamic_sidebar('sidebar-3'); ?></div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
				<div class="footer-widget-area"><?php dynamic_sidebar('sidebar-4'); ?></div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
				<div class="footer-widget-area"><?php dynamic_sidebar('sidebar-5'); ?></div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'sidebar-6' ) ) { ?>
				<div class="footer-widget-area last"><?php dynamic_sidebar('sidebar-6'); ?></div>
			<?php } ?>
		</div>
	</div>

	<footer id="colophon" class="site-footer">

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'quna' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'quna' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'quna' ), 'quna', '<a href="https://kharis.risbl.co">Kharis Sulistiyono</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
