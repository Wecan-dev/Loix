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
      'description' => 'titulo de la slider 1',
      'section' => 'slider_3',
      'settings' => 'slider_3_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('slider_3_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_3_subtitulo', array (
      'description' => 'subtitulo de la slider 1',
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
  
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'slider_3_item_1', array (
    'label' => 'Imagen o Video',
    'description' => 'Ícono',
    'section' => 'slider_3',
    'settings' => 'slider_3_item_1'
  )));
/** slider 2 **/
   // texto de red
    $wp_customize->add_setting('slider_4_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_titulo', array (
      'description' => 'titulo de la slider 2',
      'section' => 'slider_3',
      'settings' => 'slider_4_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('slider_4_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_subtitulo', array (
      'description' => 'subtitulo de la slider 2',
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
  
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'slider_4_item_1', array (
    'label' => 'Imagen o Video',
    'description' => 'Ícono',
    'section' => 'slider_3',
    'settings' => 'slider_4_item_1'
  )));
/** slider 3 **/
   // texto de red
    $wp_customize->add_setting('slider_4_titulo_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_titulo_3', array (
      'description' => 'titulo de la slider 3',
      'section' => 'slider_3',
      'settings' => 'slider_4_titulo_3',
    )));  
    // texto de red
    $wp_customize->add_setting('slider_4_subtitulo_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_subtitulo_3', array (
      'description' => 'subtitulo de la slider 3',
      'section' => 'slider_3',
      'settings' => 'slider_4_subtitulo_3',
      'type' => 'textarea'
    ))); 
            // texto de red
    $wp_customize->add_setting('slider_4_texto_del_boton_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_texto_del_boton_3', array (
      'description' => 'Texto del boton',
      'section' => 'slider_3',
      'settings' => 'slider_4_texto_del_boton_3',
    )));  
       // texto de red
    $wp_customize->add_setting('slider_4_url_del_boton_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_url_del_boton_3', array (
      'description' => 'Url del boton',
      'section' => 'slider_3',
      'settings' => 'slider_4_url_del_boton_3',
    )));  
  //image
  $wp_customize->add_setting('slider_4_item_1_3');
  
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'slider_4_item_1_3', array (
    'label' => 'Imagen o Video',
    'description' => 'Ícono',
    'section' => 'slider_3',
    'settings' => 'slider_4_item_1_3'
  )));

/** slider 4 **/
   // texto de red
    $wp_customize->add_setting('slider_4_titulo_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_titulo_4', array (
      'description' => 'titulo de la slider 4',
      'section' => 'slider_3',
      'settings' => 'slider_4_titulo_4',
    )));  
    // texto de red
    $wp_customize->add_setting('slider_4_subtitulo_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_subtitulo_4', array (
      'description' => 'subtitulo de la slider 4',
      'section' => 'slider_3',
      'settings' => 'slider_4_subtitulo_4',
      'type' => 'textarea'
    ))); 
            // texto de red
    $wp_customize->add_setting('slider_4_texto_del_boton_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_texto_del_boton_4', array (
      'description' => 'Texto del boton',
      'section' => 'slider_3',
      'settings' => 'slider_4_texto_del_boton_4',
    )));  
       // texto de red
    $wp_customize->add_setting('slider_4_url_del_boton_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slider_4_url_del_boton_4', array (
      'description' => 'Url del boton',
      'section' => 'slider_3',
      'settings' => 'slider_4_url_del_boton_4',
    )));  
  //image
  $wp_customize->add_setting('slider_4_item_1_4');
  
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'slider_4_item_1_4', array (
    'label' => 'Imagen o Video',
    'description' => 'Ícono',
    'section' => 'slider_3',
    'settings' => 'slider_4_item_1_4'
  )));