<?php

function quna_customize_register_font_size( $wp_customize ) {

  // Section name
  $wp_customize->add_section(
		'quna_font_size',
		array(
				'title' => __('Font Size', 'quna'),
				'priority' => 40
		)
	);

	// Site title
	$wp_customize->add_setting(
			'quna_site_title_font_size',
			array(
        'default'           => '32',
        'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control(
			'quna_site_title_font_size',
			array(
					'label' => __( 'Site title', 'quna' ),
					'section' => 'quna_font_size',
					'type' => 'number',
					'priority' => 5,
          'input_attrs' => array(
              'min'   => 10,
              'max'   => 90,
              'step'  => 1,
          ),
			)
	);

  // Post/page title
	$wp_customize->add_setting(
			'quna_post_font_size',
			array(
        'default'           => '26',
        'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control(
			'quna_post_font_size',
			array(
					'label' => __( 'Post/page title', 'quna' ),
					'section' => 'quna_font_size',
					'type' => 'number',
					'priority' => 10,
          'input_attrs' => array(
              'min'   => 10,
              'max'   => 90,
              'step'  => 1,
          ),
			)
	);

  // Widget title
  $wp_customize->add_setting(
			'quna_widget_title_font_size',
			array(
        'default'           => '22',
        'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control(
			'quna_widget_title_font_size',
			array(
					'label' => __( 'Widget title', 'quna' ),
					'section' => 'quna_font_size',
					'type' => 'number',
					'priority' => 15,
          'input_attrs' => array(
              'min'   => 10,
              'max'   => 90,
              'step'  => 1,
          ),
			)
	);

  // Heading 1
  $wp_customize->add_setting(
			'quna_heading1_font_size',
			array(
        'default'           => '26',
        'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control(
			'quna_heading1_font_size',
			array(
					'label' => __( 'Heading 1', 'quna' ),
					'section' => 'quna_font_size',
					'type' => 'number',
					'priority' => 20,
          'input_attrs' => array(
              'min'   => 10,
              'max'   => 90,
              'step'  => 1,
          ),
			)
	);

  // Heading 2
  $wp_customize->add_setting(
			'quna_heading2_font_size',
			array(
        'default'           => '24',
        'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control(
			'quna_heading2_font_size',
			array(
					'label' => __( 'Heading 2', 'quna' ),
					'section' => 'quna_font_size',
					'type' => 'number',
					'priority' => 25,
          'input_attrs' => array(
              'min'   => 10,
              'max'   => 90,
              'step'  => 1,
          ),
			)
	);

  // Heading 3
  $wp_customize->add_setting(
			'quna_heading3_font_size',
			array(
        'default'           => '20',
        'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control(
			'quna_heading3_font_size',
			array(
					'label' => __( 'Heading 3', 'quna' ),
					'section' => 'quna_font_size',
					'type' => 'number',
					'priority' => 30,
          'input_attrs' => array(
              'min'   => 10,
              'max'   => 90,
              'step'  => 1,
          ),
			)
	);

  // Heading 4
  $wp_customize->add_setting(
			'quna_heading4_font_size',
			array(
        'default'           => '18',
        'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control(
			'quna_heading4_font_size',
			array(
					'label' => __( 'Heading 4', 'quna' ),
					'section' => 'quna_font_size',
					'type' => 'number',
					'priority' => 35,
          'input_attrs' => array(
              'min'   => 10,
              'max'   => 90,
              'step'  => 1,
          ),
			)
	);

  // Heading 5
  $wp_customize->add_setting(
			'quna_heading5_font_size',
			array(
        'default'           => '16',
        'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control(
			'quna_heading5_font_size',
			array(
					'label' => __( 'Heading 5', 'quna' ),
					'section' => 'quna_font_size',
					'type' => 'number',
					'priority' => 40,
          'input_attrs' => array(
              'min'   => 10,
              'max'   => 90,
              'step'  => 1,
          ),
			)
	);

  // Heading 6
  $wp_customize->add_setting(
			'quna_heading6_font_size',
			array(
        'default'           => '16',
        'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control(
			'quna_heading6_font_size',
			array(
					'label' => __( 'Heading 6', 'quna' ),
					'section' => 'quna_font_size',
					'type' => 'number',
					'priority' => 45,
          'input_attrs' => array(
              'min'   => 10,
              'max'   => 90,
              'step'  => 1,
          ),
			)
	);

}
