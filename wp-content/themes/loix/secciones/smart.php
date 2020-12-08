 <?php
 $wp_customize->add_section('banner_smart', array (
    'title' => 'banner',
    'panel' => 'smart'
  ));
  // texto de red
    $wp_customize->add_setting('smart_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_smart_titulo', array (
      'description' => 'titulo',
      'section' => 'banner_smart',
      'settings' => 'smart_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('smart_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_smart_subtitulo', array (
      'description' => 'Contenido',
      'section' => 'banner_smart',
      'settings' => 'smart_subtitulo',
      'type' => 'textarea'
    )));  
//image
  $wp_customize->add_setting('smart_imagen');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'smart_imagen', array (
    'label' => 'Imagen',
    'description' => 'Imagen',
    'section' => 'banner_smart',
    'settings' => 'smart_imagen'
  )));