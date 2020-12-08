<?php
/**************Sección slider 2*********************/
    $wp_customize->add_section('slider_2', array (
    'title' => 'Man slider Sección 2',
    'panel' => 'panel1'
  ));
  // texto de red
    $wp_customize->add_setting('slider_2_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_2_titulo', array (
      'description' => 'titulo de la slider_2',
      'section' => 'slider_2',
      'settings' => 'slider_2_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('slider_2_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_2_subtitulo', array (
      'description' => 'subtitulo de la slider_2',
      'section' => 'slider_2',
      'settings' => 'slider_2_subtitulo',
       'type' => 'textarea'
    )));  

         // texto de red
    $wp_customize->add_setting('slider_2_texto_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_2_texto_del_boton', array (
      'description' => 'Texto del boton',
      'section' => 'slider_2',
      'settings' => 'slider_2_texto_del_boton',
    )));  
       // texto de red
    $wp_customize->add_setting('slider_2_url_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_2_url_del_boton', array (
      'description' => 'Url del boton',
      'section' => 'slider_2',
      'settings' => 'slider_2_url_del_boton',
    ))); 

  //image
  $wp_customize->add_setting('slider_2_item_1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_2_item_1', array (
    'label' => 'Item 1',
    'description' => 'Ícono',
    'section' => 'slider_2',
    'settings' => 'slider_2_item_1'
  )));

   // texto de red
    $wp_customize->add_setting('slider_2_titulo_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_2_titulo_2', array (
      'description' => 'titulo de la slider_2',
      'section' => 'slider_2',
      'settings' => 'slider_2_titulo_2',
    )));  
    // texto de red
    $wp_customize->add_setting('slider_2_subtitulo_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_2_subtitulo_2', array (
      'description' => 'subtitulo de la slider_2',
      'section' => 'slider_2',
      'settings' => 'slider_2_subtitulo_2',
       'type' => 'textarea'
    ))); 

         // texto de red
    $wp_customize->add_setting('slider_2_texto_del_boton_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_2_texto_del_boton_2', array (
      'description' => 'Texto del boton',
      'section' => 'slider_2',
      'settings' => 'slider_2_texto_del_boton_2',
    )));  
       // texto de red
    $wp_customize->add_setting('slider_2_url_del_boton_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_2_url_del_boton_2', array (
      'description' => 'Url del boton',
      'section' => 'slider_2',
      'settings' => 'slider_2_url_del_boton_2',
    )));  
  //image
  $wp_customize->add_setting('slider_2_item_1_2');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_2_item_1_2', array (
    'label' => 'Item 1',
    'description' => 'Ícono',
    'section' => 'slider_2',
    'settings' => 'slider_2_item_1_2'
  )));
   /********************end*********************/