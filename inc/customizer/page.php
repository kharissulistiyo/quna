<?php

function quna_customize_register_page( $wp_customize ) {

  // Section name
  $wp_customize->add_section(
		'quna_page',
		array(
				'title' => __('Page', 'quna'),
				'priority' => 60
		)
	);

  // Home page or archive with no right sidebar
	$wp_customize->add_setting(
			'quna_home_hide_right_sidebar',
			array(
        'default'           => false,
        'sanitize_callback' => 'quna_secure_checkbox',
			)
	);
	$wp_customize->add_control(
			'quna_home_hide_right_sidebar',
			array(
					'label' => __( 'Hide right sidebar on home/blog archive page?', 'quna' ),
					'section' => 'quna_page',
					'type' => 'checkbox',
					'priority' => 5,
			)
	);

  // Hide sidebar on default page template
	$wp_customize->add_setting(
			'quna_page_hide_right_sidebar',
			array(
        'default'           => false,
        'sanitize_callback' => 'quna_secure_checkbox',
			)
	);
	$wp_customize->add_control(
			'quna_page_hide_right_sidebar',
			array(
					'label' => __( 'Hide right sidebar on default page template?', 'quna' ),
					'section' => 'quna_page',
					'type' => 'checkbox',
					'priority' => 10,
			)
	);

  // Disable comment on static homepage
	$wp_customize->add_setting(
			'quna_disable_comment_homepage',
			array(
        'default'           => false,
        'sanitize_callback' => 'quna_secure_checkbox',
			)
	);
	$wp_customize->add_control(
			'quna_disable_comment_homepage',
			array(
					'label' => __( 'Disable comment on static homepage?', 'quna' ),
					'section' => 'quna_page',
					'type' => 'checkbox',
					'priority' => 15,
			)
	);

  // Hide page title on static homepage
  $wp_customize->add_setting(
			'quna_hide_title_homepage',
			array(
        'default'           => false,
        'sanitize_callback' => 'quna_secure_checkbox',
			)
	);
	$wp_customize->add_control(
			'quna_hide_title_homepage',
			array(
					'label' => __( 'Hide page title on static homepage?', 'quna' ),
					'section' => 'quna_page',
					'type' => 'checkbox',
					'priority' => 20,
			)
	);

}
