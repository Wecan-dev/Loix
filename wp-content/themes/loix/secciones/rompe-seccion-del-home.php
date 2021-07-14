<?php
$wp_customize->add_section('rompe_seccion', array (
    'title' => 'Rompe sección 1',
    'panel' => 'panel2'
  ));
  //image
  $wp_customize->add_setting('rompe_seccion_item_1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rompe_seccion_item_1', array (
    'label' => 'Imagen 1',
    'description' => 'Ícono',
    'section' => 'rompe_seccion',
    'settings' => 'rompe_seccion_item_1'
  )));
  // texto de red
    $wp_customize->add_setting('rompe_seccion_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_rompe_seccion_titulo', array (
      'description' => 'titulo de la rompe_seccion',
      'section' => 'rompe_seccion',
      'settings' => 'rompe_seccion_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('rompe_seccion_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_rompe_seccion_subtitulo', array (
      'description' => 'Contenido del rompe_seccion',
      'section' => 'rompe_seccion',
      'settings' => 'rompe_seccion_subtitulo',
      'type' => 'textarea'
    )));  
     // texto de red
    $wp_customize->add_setting('rompe_seccion_texto_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_rompe_seccion_texto_del_boton', array (
      'description' => 'Texto del boton',
      'section' => 'rompe_seccion',
      'settings' => 'rompe_seccion_texto_del_boton',
    )));  
       // texto de red
    $wp_customize->add_setting('rompe_seccion_url_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_rompe_seccion_url_del_boton', array (
      'description' => 'Url del boton',
      'section' => 'rompe_seccion',
      'settings' => 'rompe_seccion_url_del_boton',
    ))); 
    //////////////////Rompe sección 2/////////////////////////
       $wp_customize->add_section('rompe_seccion_2', array (
    'title' => 'Rompe sección 2',
    'panel' => 'panel2'
  ));
  //image
  $wp_customize->add_setting('rompe_seccion_2_item_1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rompe_seccion_2_item_1', array (
    'label' => 'Imagen 1',
    'description' => 'Ícono',
    'section' => 'rompe_seccion_2',
    'settings' => 'rompe_seccion_2_item_1'
  )));
  // texto de red
    $wp_customize->add_setting('rompe_seccion_2_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_rompe_seccion_2_titulo', array (
      'description' => 'titulo de la rompe_seccion_2',
      'section' => 'rompe_seccion_2',
      'settings' => 'rompe_seccion_2_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('rompe_seccion_2_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_rompe_seccion_2_subtitulo', array (
      'description' => 'Contenido del rompe_seccion_2',
      'section' => 'rompe_seccion_2',
      'settings' => 'rompe_seccion_2_subtitulo',
      'type' => 'textarea'
    )));  
     // texto de red
    $wp_customize->add_setting('rompe_seccion_2_texto_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_rompe_seccion_2_texto_del_boton', array (
      'description' => 'Texto del boton',
      'section' => 'rompe_seccion_2',
      'settings' => 'rompe_seccion_2_texto_del_boton',
    )));  
       // texto de red
    $wp_customize->add_setting('rompe_seccion_2_url_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_rompe_seccion_2_url_del_boton', array (
      'description' => 'Url del boton',
      'section' => 'rompe_seccion_2',
      'settings' => 'rompe_seccion_url_del_boton',
    ))); 
    //////////////////////////////////////////////////////////
  
   /********************************************/