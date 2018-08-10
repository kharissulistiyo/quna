<?php

function quna_customize_register_color( $wp_customize ) {

  // Link color
  $wp_customize->add_setting(
      'quna_link_color',
      array(
          'default'           => '#2360db',
          'sanitize_callback' => 'sanitize_hex_color',
          'transport'         => 'postMessage'
      )
  );
  $wp_customize->add_control(
      new WP_Customize_Color_Control(
          $wp_customize,
          'quna_link_color',
          array(
              'label'         => __('Link', 'quna'),
              'section'       => 'colors',
              'settings'      => 'quna_link_color',
              'priority'      => 30
          )
      )
  );

  // Menu color
  $wp_customize->add_setting(
      'quna_menu_color',
      array(
          'default'           => '#94bf28',
          'sanitize_callback' => 'sanitize_hex_color',
          'transport'         => 'postMessage'
      )
  );
  $wp_customize->add_control(
      new WP_Customize_Color_Control(
          $wp_customize,
          'quna_menu_color',
          array(
              'label'         => __('Main menu', 'quna'),
              'section'       => 'colors',
              'settings'      => 'quna_menu_color',
              'priority'      => 35
          )
      )
  );

  // Widget title color
  $wp_customize->add_setting(
      'quna_widget_title_color',
      array(
          'default'           => '#604800',
          'sanitize_callback' => 'sanitize_hex_color',
          'transport'         => 'postMessage'
      )
  );
  $wp_customize->add_control(
      new WP_Customize_Color_Control(
          $wp_customize,
          'quna_widget_title_color',
          array(
              'label'         => __('Widget title', 'quna'),
              'section'       => 'colors',
              'settings'      => 'quna_widget_title_color',
              'priority'      => 40
          )
      )
  );

}
