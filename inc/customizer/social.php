<?php

function quna_customize_register_social( $wp_customize ) {

  // Section name
  $wp_customize->add_section(
		'quna_social',
		array(
				'title' => __('Social Profiles', 'quna'),
				'priority' => 50
		)
	);

  // Facebook
	$wp_customize->add_setting(
			'quna_facebook',
			array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
			)
	);
	$wp_customize->add_control(
			'quna_facebook',
			array(
					'label' => __( 'Facebook', 'quna' ),
					'section' => 'quna_social',
					'type' => 'text',
					'priority' => 5,
			)
	);

  $socials = array(
    'twitter'     => 'Twitter',
    'instagram'   => 'Instagram',
    'linkedin'    => 'Linkedin',
    'vk'          => 'VK',
    'youtube'     => 'YouTube',
    'github'      => 'GitHub',
    'googleplus'  => 'Google Plus',
    'behance'     => 'Behance'
  );
  $n = 1;
  foreach( $socials as $soc => $label ) {
    $n++;
    $wp_customize->add_setting(
  			'quna_'.$soc,
  			array(
          'default'           => '',
          'sanitize_callback' => 'esc_url_raw',
  			)
  	);
  	$wp_customize->add_control(
  			'quna_'.$soc,
  			array(
  					'label' => $label,
  					'section' => 'quna_social',
  					'type' => 'text',
  					'priority' => 5+$n,
  			)
  	);
  }

}
