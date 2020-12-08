<?php
  $wp_customize->add_section('nosotros_banner', array (
    'title' => 'Banner',
    'panel' => 'panel3'
  ));
  //image
  $wp_customize->add_setting('nosotros_banner_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_banner_img', array (
    'label' => 'Banner',
    'description' => 'Imagen',
    'section' => 'nosotros_banner',
    'settings' => 'nosotros_banner_img'
  )));

   // texto de red
    $wp_customize->add_setting('nosotros_banner_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_banner_titulo', array (
      'description' => 'Titulo',
      'section' => 'nosotros_banner',
      'settings' => 'nosotros_banner_titulo',
    ))); 
       // texto de red
    $wp_customize->add_setting('nosotros_banner_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_banner_subtitulo', array (
      'description' => 'Subtitulo',
      'section' => 'nosotros_banner',
      'settings' => 'nosotros_banner_subtitulo',
      'type' => 'textarea'
    ))); 
////////////////////////HISTORIA/////////////////
 $wp_customize->add_section('nosotros_historia', array (
    'title' => 'Historia',
    'panel' => 'panel3'
  ));
 // texto de red
    $wp_customize->add_setting('nosotros_historia', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_historia', array (
      'description' => 'Titulo',
      'section' => 'nosotros_historia',
      'settings' => 'nosotros_historia',
    ))); 
    // texto de red
    $wp_customize->add_setting('nosotros_historia_contenido', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_historia_contenido', array (
      'description' => 'Contenido',
      'section' => 'nosotros_historia',
      'settings' => 'nosotros_historia_contenido',
      'type' => 'textarea'
    ))); 
    //image
  $wp_customize->add_setting('nosotros_historia_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_historia_img', array (
    'label' => 'Imagen',
    'section' => 'nosotros_historia',
    'settings' => 'nosotros_historia_img'
  )));
    ////////////////////////////////////////////////
  ////////////////////Iniciativa//////////////////////////
$wp_customize->add_section('nosotros_iniciativa', array (
    'title' => 'Iniciativa',
    'panel' => 'panel3'
  ));
  // texto de red
    $wp_customize->add_setting('nosotros_iniciativa_titulo_principal', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_iniciativa_titulo_principal', array (
      'description' => 'Título Principal',
      'section' => 'nosotros_iniciativa',
      'settings' => 'nosotros_iniciativa_titulo_principal',
    ))); 
 //image
  $wp_customize->add_setting('nosotros_iniciativa_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_iniciativa_img', array (
    'label' => 'Imagen',
    'section' => 'nosotros_iniciativa',
    'settings' => 'nosotros_iniciativa_img'
  )));
   // texto de red
    $wp_customize->add_setting('nosotros_iniciativa_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_iniciativa_titulo', array (
      'description' => 'Título',
      'section' => 'nosotros_iniciativa',
      'settings' => 'nosotros_iniciativa_titulo',
    ))); 
    // texto de red
    $wp_customize->add_setting('nosotros_iniciativa_contenido', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_iniciativa_contenido', array (
      'description' => 'Contenido',
      'section' => 'nosotros_iniciativa',
      'settings' => 'nosotros_iniciativa_contenido',
      'type' => 'textarea'
    ))); 


    //image
  $wp_customize->add_setting('nosotros_iniciativa_img_2');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_iniciativa_img_2', array (
    'label' => 'Imagen',
    'section' => 'nosotros_iniciativa',
    'settings' => 'nosotros_iniciativa_img_2'
  )));
   // texto de red
    $wp_customize->add_setting('nosotros_iniciativa_titulo_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_iniciativa_titulo_2', array (
      'description' => 'Título',
      'section' => 'nosotros_iniciativa',
      'settings' => 'nosotros_iniciativa_titulo_2',
    ))); 
    // texto de red
    $wp_customize->add_setting('nosotros_iniciativa_contenido_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_iniciativa_contenido_2', array (
      'description' => 'Contenido',
      'section' => 'nosotros_iniciativa',
      'settings' => 'nosotros_iniciativa_contenido_2',
      'type' => 'textarea'
    ))); 

    //image
  $wp_customize->add_setting('nosotros_iniciativa_img_3');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_iniciativa_img_3', array (
    'label' => 'Imagen',
    'section' => 'nosotros_iniciativa',
    'settings' => 'nosotros_iniciativa_img_3'
  )));
   // texto de red
    $wp_customize->add_setting('nosotros_iniciativa_titulo_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_iniciativa_titulo_3', array (
      'description' => 'Título',
      'section' => 'nosotros_iniciativa',
      'settings' => 'nosotros_iniciativa_titulo_3',
    ))); 
    // texto de red
    $wp_customize->add_setting('nosotros_iniciativa_contenido_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_iniciativa_contenido_3', array (
      'description' => 'Contenido',
      'section' => 'nosotros_iniciativa',
      'settings' => 'nosotros_iniciativa_contenido_3',
      'type' => 'textarea'
    ))); 


     //image
  $wp_customize->add_setting('nosotros_iniciativa_img_4');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_iniciativa_img_4', array (
    'label' => 'Imagen',
    'section' => 'nosotros_iniciativa',
    'settings' => 'nosotros_iniciativa_img_4'
  )));
   // texto de red
    $wp_customize->add_setting('nosotros_iniciativa_titulo_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_iniciativa_titulo_4', array (
      'description' => 'Título',
      'section' => 'nosotros_iniciativa',
      'settings' => 'nosotros_iniciativa_titulo_4',
    ))); 
    // texto de red
    $wp_customize->add_setting('nosotros_iniciativa_contenido_4', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_iniciativa_contenido_4', array (
      'description' => 'Contenido',
      'section' => 'nosotros_iniciativa',
      'settings' => 'nosotros_iniciativa_contenido_4',
      'type' => 'textarea'
    ))); 
  //////////////////////////////////////////////////////
    //////////////MISIÓN///////////////////////////////
$wp_customize->add_section('nosotros_mision', array (
    'title' => 'Misión',
    'panel' => 'panel3'
  ));
  // texto de red
    $wp_customize->add_setting('nosotros_mision_titulo_principal', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_mision_titulo_principal', array (
      'description' => 'Título Principal',
      'section' => 'nosotros_mision',
      'settings' => 'nosotros_mision_titulo_principal',
    ))); 

     // texto de red
    $wp_customize->add_setting('nosotros_mision_contenido', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nosotros_mision_contenido', array (
      'description' => 'Contenido',
      'section' => 'nosotros_mision',
      'settings' => 'nosotros_mision_contenido',
      'type' => 'textarea'
    ))); 
  //image
  $wp_customize->add_setting('nosotros_mision_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_mision_img', array (
    'label' => 'Imagen',
    'section' => 'nosotros_mision',
    'settings' => 'nosotros_mision_img'
  )));
    ///////////////////////////////////////////////////

   /***************************************************/