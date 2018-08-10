<?php

function quna_customize_register_social_feed( $wp_customize ) {

  // Section name
  $wp_customize->add_section(
		'quna_social_feeds',
		array(
				'title' => __('Social Feeds', 'quna'),
				'priority' => 53
		)
	);

  // Instagram
	$wp_customize->add_setting(
			'quna_ig_feed',
			array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
	);
	$wp_customize->add_control(
			'quna_ig_feed',
			array(
					'label' => __( 'Instagram username (without @)', 'quna' ),
					'section' => 'quna_social_feeds',
					'type' => 'text',
					'priority' => 5,
			)
	);

}
