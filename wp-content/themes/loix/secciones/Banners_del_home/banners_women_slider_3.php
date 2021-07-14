<?php
$wp_customize->add_section('women_banner3', array (
    'title' => 'Women slider Sección 3',
    'panel' => 'banner_women'
  ));
  // texto de red
    $wp_customize->add_setting('women_banner3_slider_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_titulo', array (
      'description' => 'titulo de la slider',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('women_banner3_slider_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_subtitulo', array (
      'description' => 'Contenido del slider',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_subtitulo',
      'type' => 'textarea'
    )));  
     // texto de red
    $wp_customize->add_setting('women_banner3_slider_texto_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_texto_del_boton', array (
      'description' => 'Texto del boton',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_texto_del_boton',
    )));  
       // texto de red
    $wp_customize->add_setting('women_banner3_slider_url_del_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_url_del_boton', array (
      'description' => 'Url del boton',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_url_del_boton',
    ))); 
  //image
  $wp_customize->add_setting('women_banner3_slider_item_1');
  
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'women_banner3_slider_item_1', array (
    'label' => 'Imagen o Video',
    'description' => 'Ícono',
    'section' => 'women_banner3',
    'settings' => 'women_banner3_slider_item_1'
  )));
  /////SEGUNDA IMAGEN//////
    // texto de red
    $wp_customize->add_setting('women_banner3_slider_titulo_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_titulo_2', array (
      'description' => 'titulo de la slider',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_titulo_2',
    )));  
    // texto de red
    $wp_customize->add_setting('women_banner3_slider_subtitulo_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_subtitulo_2', array (
      'description' => 'Contenido del slider',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_subtitulo_2',
      'type' => 'textarea'
    )));  
     // texto de red
    $wp_customize->add_setting('women_banner3_slider_texto_del_boton_', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_texto_del_boton_', array (
      'description' => 'Texto del boton',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_texto_del_boton_',
    )));  
       // texto de red
    $wp_customize->add_setting('women_banner3_slider_url_del_boton_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_url_del_boton_2', array (
      'description' => 'Url del boton',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_url_del_boton_2',
    ))); 
  
  //image
  $wp_customize->add_setting('women_banner3_slider_item_2');
  
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'women_banner3_slider_item_2', array (
    'label' => 'Imagen o Video',
    'description' => 'Ícono',
    'section' => 'women_banner3',
    'settings' => 'women_banner3_slider_item_2'
  )));
  /////////////////////////
    /////TERCERA IMAGEN//////
    // texto de red
    $wp_customize->add_setting('women_banner3_slider_titulo_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_titulo_3', array (
      'description' => 'titulo de la slider',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_titulo_3',
    )));  
    // texto de red
    $wp_customize->add_setting('women_banner3_slider_subtitulo_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_subtitulo_3', array (
      'description' => 'Contenido del slider',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_subtitulo_3',
      'type' => 'textarea'
    )));  
     // texto de red
    $wp_customize->add_setting('women_banner3_slider_texto_del_boton_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_texto_del_boton_3', array (
      'description' => 'Texto del boton',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_texto_del_boton_3',
    )));  
       // texto de red
    $wp_customize->add_setting('women_banner3_slider_url_del_boton_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_url_del_boton_3', array (
      'description' => 'Url del boton',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_url_del_boton_3',
    ))); 
  //image
  $wp_customize->add_setting('women_banner3_slider_item_3');
  
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'women_banner3_slider_item_3', array (
    'label' => 'Imagen o Video',
    'description' => 'Ícono',
    'section' => 'women_banner3',
    'settings' => 'women_banner3_slider_item_3'
  )));
  ///////////////////////////////////////////////////77
   /////Cuarta IMAGEN//////
    // texto de red
    $wp_customize->add_setting('women_banner3_slider_titulo_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_titulo_4', array (
      'description' => 'titulo de la slider',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_titulo_4',
    )));  
    // texto de red
    $wp_customize->add_setting('women_banner3_slider_subtitulo_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_subtitulo_4', array (
      'description' => 'Contenido del slider',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_subtitulo_4',
      'type' => 'textarea'
    )));  
     // texto de red
    $wp_customize->add_setting('women_banner3_slider_texto_del_boton_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_texto_del_boton_4', array (
      'description' => 'Texto del boton',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_texto_del_boton_4',
    )));  
       // texto de red
    $wp_customize->add_setting('women_banner3_slider_url_del_boton_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_women_banner3_slider_url_del_boton_4', array (
      'description' => 'Url del boton',
      'section' => 'women_banner3',
      'settings' => 'women_banner3_slider_url_del_boton_4',
    ))); 
  //image
  $wp_customize->add_setting('women_banner3_slider_item_4');
  
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'women_banner3_slider_item_4', array (
    'label' => 'Imagen o Video',
    'description' => 'Ícono',
    'section' => 'women_banner3',
    'settings' => 'women_banner3_slider_item_4'
  )));