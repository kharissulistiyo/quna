<?php

function quna_customize_register_font( $wp_customize ) {

  // Section name
  $wp_customize->add_section(
		'quna_googlefonts',
		array(
				'title' => __('Google Fonts', 'quna'),
				'priority' => 30,
				'description' => __('Apply Google Fonts', 'quna'),
		)
	);

	//Body font
	$wp_customize->add_setting(
			'quna_body_gfont',
			array(
					'default' => 'Roboto:400,400i,500,700,700i,900,900i',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
	);
	$wp_customize->add_control(
			'quna_body_gfont',
			array(
					'label' => __( 'Body font name and specs', 'quna' ),
					'section' => 'quna_googlefonts',
					'type' => 'text',
					'priority' => 5
			)
	);
	$wp_customize->add_setting(
			'quna_body_gfont_css',
			array(
					'default' => "'Roboto', sans-serif;",
					'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
	);
	$wp_customize->add_control(
			'quna_body_gfont_css',
			array(
					'label' => __( 'Body font CSS', 'quna' ),
					'section' => 'quna_googlefonts',
					'type' => 'text',
					'priority' => 10
			)
	);


	// Heading font
	$wp_customize->add_setting(
			'quna_heading_gfont',
			array(
					'default' => 'Dosis:400,500,600,700,800',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
	);
	$wp_customize->add_control(
			'quna_heading_gfont',
			array(
					'label' => __( 'Heading font name and specs', 'quna' ),
					'section' => 'quna_googlefonts',
					'type' => 'text',
					'priority' => 15
			)
	);
	$wp_customize->add_setting(
			'quna_heading_gfont_css',
			array(
					'default' => "'Dosis', sans-serif;",
					'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
	);
	$wp_customize->add_control(
			'quna_heading_gfont_css',
			array(
					'label' => __( 'Heading font CSS', 'quna' ),
					'section' => 'quna_googlefonts',
					'type' => 'text',
					'priority' => 20
			)
	);

}
