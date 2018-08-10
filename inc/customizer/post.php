<?php

function quna_customize_register_post( $wp_customize ) {

  // Section name
  $wp_customize->add_section(
		'quna_post',
		array(
				'title' => __('Post', 'quna'),
				'priority' => 70
		)
	);

  // Hide sidebar on single post page
	$wp_customize->add_setting(
			'quna_post_hide_right_sidebar',
			array(
        'default'           => false,
        'sanitize_callback' => 'quna_secure_checkbox',
			)
	);
	$wp_customize->add_control(
			'quna_post_hide_right_sidebar',
			array(
					'label' => __( 'Hide right sidebar on single post?', 'quna' ),
					'section' => 'quna_post',
					'type' => 'checkbox',
					'priority' => 5,
			)
	);

}
