<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package qunaslug
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function quna_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of post-excerpt-thumbnail-layout when Excerpt+Thumbnail of post archive option enabled.
	if ( ! is_singular() ) {
		$classes[] = 'post-excerpt-thumbnail-layout';
	}

	if( true == quna_mod_is_no_right_sidebar_on_default_page() ) {
		$classes[] = 'hide-right-sidebar-on-default-page';
	}

	if( true == quna_mod_is_no_right_sidebar_on_home() ) {
		$classes[] = 'hide-right-sidebar-on-home';
	}

	if( true == quna_mod_is_no_right_sidebar_on_post() ) {
		$classes[] = 'hide-right-sidebar-on-single-post';
	}

	if( true == quna_is_no_right_sidebar() ) {
		$classes[] = 'right-sidebar-disabled';
	}

	return $classes;
}
add_filter( 'body_class', 'quna_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function quna_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'quna_pingback_header' );

/**
 * Social profiles
 */
function quna_social_profiles() {
	$soc = array();
	$soc['facebook'] = get_theme_mod('quna_facebook');
	$soc['twitter'] = get_theme_mod('quna_twitter');
	$soc['instagram'] = get_theme_mod('quna_instagram');

	$socials = array(
    'linkedin'    => 'Linkedin',
    'vk'          => 'VK',
    'youtube'     => 'YouTube',
    'github'      => 'GitHub',
    'googleplus'  => 'Google Plus',
    'behance'     => 'Behance'
  );

  foreach( $socials as $key => $label ) {
		$soc[$key] = get_theme_mod('quna_'.$key);
	}

	$soc_item = '';
	if($soc['facebook'] != '') {
		$soc_item .= '<li><a target="_blank" href="' . esc_url($soc['facebook']) . '" title="Facebook"><i class="fab fa-facebook"></i></a></li>';
	}
	if($soc['twitter'] != '') {
		$soc_item .= '<li><a target="_blank" href="' . esc_url($soc['twitter']) . '" title="Twitter"><i class="fab fa-twitter"></i></a></li>';
	}
	if($soc['instagram'] != '') {
		$soc_item .= '<li><a target="_blank" href="' . esc_url($soc['instagram']) . '" title="Instagram"><i class="fab fa-instagram"></i></a></li>';
	}

	foreach( $socials as $key => $label ) {
		if($soc[$key] != '') {
			$soc_icon = '';
			switch ($key) {
				case 'linkedin':
					$soc_icon = 'fa-linkedin-in';
					break;
				case 'vk':
					$soc_icon = 'fa-vk';
					break;
				case 'youtube':
					$soc_icon = 'fa-youtube';
					break;
				case 'github':
					$soc_icon = 'fa-github';
					break;
				case 'googleplus':
					$soc_icon = 'fa-google-plus';
					break;
				case 'behance':
					$soc_icon = 'fa-behance';
					break;
				default:
					break;
			}
			$soc_item .= '<li><a target="_blank" href="' . esc_url($soc[$key]) . '" title="' . esc_attr($label) . '"><i class="fab ' . esc_attr($soc_icon) . '"></i></a></li>';
		}
	}

	if($soc_item != '') {
		return '<ul class="social-profiles">' . $soc_item . '</ul>';
	}

	return;

}

/**
 * Check if hide sidebar on default page
 */
function quna_mod_is_no_right_sidebar_on_default_page() {

	if( null !== get_theme_mod('quna_page_hide_right_sidebar') ) {
		if( is_page() && '' == is_page_template() && true == get_theme_mod('quna_page_hide_right_sidebar') ) {
			return true;
		}
	}
	return false;

}

/**
 * Check if hide sidebar on home/blog archive
 */
function quna_mod_is_no_right_sidebar_on_home() {

	if( null !== get_theme_mod('quna_home_hide_right_sidebar') ) {
		if( is_home() && true == get_theme_mod('quna_home_hide_right_sidebar') ) {
			return true;
		}
	}
	return false;

}

/**
 * Check if hide sidebar on single post
 */
function quna_mod_is_no_right_sidebar_on_post() {

	if( null !== get_theme_mod('quna_post_hide_right_sidebar') ) {
		if( is_singular( 'post' ) && '' == is_page_template() && true == get_theme_mod('quna_post_hide_right_sidebar') ) {
			return true;
		}
	}
	return false;

}

/**
 * Is hide right sidebar check
 */
function quna_is_no_right_sidebar() {

	$context = array();
	$context['home'] = quna_mod_is_no_right_sidebar_on_home();
	$context['page'] = quna_mod_is_no_right_sidebar_on_default_page();
	$context['post'] = quna_mod_is_no_right_sidebar_on_post();

	if( (true == $context['home']) || (true == $context['page']) || (true == $context['post']) ) {
		return true;
	}

	return false;

}

/**
 * Check if disable comment on static homepage
 */
function quna_is_disable_comment_on_homepage() {

	if( null !== get_theme_mod('quna_disable_comment_homepage') ) {
		if( true == get_theme_mod('quna_disable_comment_homepage') ) {
			return true;
		}
	}
	return false;

}

/**
 * Check if hide page title on static homepage
 */
function quna_is_hide_title_on_homepage() {

	if( null !== get_theme_mod('quna_hide_title_homepage') ) {
		if( true == get_theme_mod('quna_hide_title_homepage') ) {
			return true;
		}
	}
	return false;

}

/**
 * Social shortcode
 */
function quna_shortcode_social() {
	return quna_social_profiles();
}
