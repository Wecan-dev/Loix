<?php
/**************Sección slider 3*********************/
    $wp_customize->add_section('slider_3', array (
    'title' => 'Man slider Sección 3',
    'panel' => 'panel1'
  ));
  // texto de red
    $wp_customize->add_setting('slider_3_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_3_titulo', array (
      'description' => 'titulo de la slider_3',
      'section' => 'slider_3',
      'settings' => 'slider_3_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('slider_3_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_3_subtitulo', array (
      'description' => 'subtitulo de la slider_3',
      'section' => 'slider_3',
      'settings' => 'slider_3_subtitulo',
      'type' => 'textarea'
    ))); 
            // texto de red
    $wp_customize->add_setting('slider_3_texto_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_3_texto_del_boton', array (
      'description' => 'Texto del boton',
      'section' => 'slider_3',
      'settings' => 'slider_3_texto_del_boton',
    )));  
       // texto de red
    $wp_customize->add_setting('slider_3_url_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_3_url_del_boton', array (
      'description' => 'Url del boton',
      'section' => 'slider_3',
      'settings' => 'slider_3_url_del_boton',
    )));  
  //image
  $wp_customize->add_setting('slider_3_item_1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_3_item_1', array (
    'label' => 'Item 1',
    'description' => 'Ícono',
    'section' => 'slider_3',
    'settings' => 'slider_3_item_1'
  )));

   // texto de red
    $wp_customize->add_setting('slider_4_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_titulo', array (
      'description' => 'titulo de la slider_4',
      'section' => 'slider_3',
      'settings' => 'slider_4_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('slider_4_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_subtitulo', array (
      'description' => 'subtitulo de la slider_4',
      'section' => 'slider_3',
      'settings' => 'slider_4_subtitulo',
      'type' => 'textarea'
    ))); 
            // texto de red
    $wp_customize->add_setting('slider_4_texto_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_texto_del_boton', array (
      'description' => 'Texto del boton',
      'section' => 'slider_3',
      'settings' => 'slider_4_texto_del_boton',
    )));  
       // texto de red
    $wp_customize->add_setting('slider_4_url_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_url_del_boton', array (
      'description' => 'Url del boton',
      'section' => 'slider_3',
      'settings' => 'slider_4_url_del_boton',
    )));  
  //image
  $wp_customize->add_setting('slider_4_item_1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_4_item_1', array (
    'label' => 'Item 1',
    'description' => 'Ícono',
    'section' => 'slider_3',
    'settings' => 'slider_4_item_1'
  )));