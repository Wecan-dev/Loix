<?php 

function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag');

    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );

}
add_action('init', 'init_template');

/************* General wordpress ************/
the_post_thumbnail();
the_post_thumbnail('thumbnail');       
the_post_thumbnail('medium');          
the_post_thumbnail('large');           
the_post_thumbnail('full');            
add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 
set_post_thumbnail_size( 1568, 9999 );
// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 *
 */add_theme_support( 'title-tag' );
/*
 * Enable support for Post Thumbnails on posts and pages.
*
* @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );
    // This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'store' ),
  'top' => __( 'Top Menu', 'store' ),
) );
/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
  'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
) );
/*
 * Enable support for Post Formats.
 * See http://codex.wordpress.org/Post_Formats
 */
add_theme_support( 'post-formats', array(
    'aside', 'image', 'video', 'quote', 'link',
) );
// Set up the WordPress core custom background feature.
add_theme_support( 'custom-background', apply_filters( 'store_custom_background_args', array(
    'default-color' => 'f7f5ee',
    'default-image' => '',
) ) );
add_image_size('store-sq-thumb', 600,600, true );
add_image_size('store-thumb', 540,450, true );
add_image_size('pop-thumb',542, 340, true );
//Declare woocommerce support
add_theme_support('woocommerce');
add_theme_support( 'wc-product-gallery-lightbox' );
/*********** Woocommerce **********************/
function my_theme_setup() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );
add_action( 'after_setup_theme', 'yourtheme_setup' );
function yourtheme_setup() {
add_theme_support( 'wc-product-gallery-slider' );
} 



// Register Custom Post Type
if ( ! function_exists('qr') ) {
  
    // Register Custom Post Type
    function qr() {
    
        $labels = array(
            'name'                  => _x( 'qr', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'qr', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Qr', 'text_domain' ),
            'name_admin_bar'        => __( 'Qr', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'qr', 'text_domain' ),
            'description'           => __( 'qr de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-gallery',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'qr', $args );
    
    }
    add_action( 'init', 'qr', 0 );
    
    }
    // Register Custom Post Type
if ( ! function_exists('servicio_cliente') ) {
  
    // Register Custom Post Type
    function servicio_cliente() {
    
        $labels = array(
            'name'                  => _x( 'servicio_cliente', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'servicio_cliente', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Servicio al cliente', 'text_domain' ),
            'name_admin_bar'        => __( 'Servicio al cliente', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'servicio_cliente', 'text_domain' ),
            'description'           => __( 'servicio_cliente de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-users
',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'servicio_cliente', $args );
    
    }
    add_action( 'init', 'servicio_cliente', 0 );
    
    }
     // Register Custom Post Type
if ( ! function_exists('smart') ) {
  
    // Register Custom Post Type
    function smart() {
    
        $labels = array(
            'name'                  => _x( 'smart', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'smart', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Smart', 'text_domain' ),
            'name_admin_bar'        => __( 'Smart', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'smart', 'text_domain' ),
            'description'           => __( 'smart de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-clock
',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'smart', $args );
    
    }
    add_action( 'init', 'smart', 0 );
    
    }
      // Register Custom Post Type
if ( ! function_exists('preguntas_frecuentes') ) {
  
    // Register Custom Post Type
    function preguntas_frecuentes() {
    
        $labels = array(
            'name'                  => _x( 'preguntas_frecuentes', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'preguntas_frecuentes', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'preguntas', 'text_domain' ),
            'name_admin_bar'        => __( 'preguntas', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'preguntas_frecuentes', 'text_domain' ),
            'description'           => __( 'preguntas_frecuentes de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-clock
',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'preguntas_frecuentes', $args );
    
    }
    add_action( 'init', 'preguntas_frecuentes', 0 );
    
    }
 
////////PANELES//////////////////////////////////////////77
/***************Functions theme ********************/
/////////////////Banner Man/////////////////////////////////////77
function theme_customize_register($wp_customize){
  $wp_customize->add_panel('panel1',
        array(
            'title' => 'Banners/Man',
            'priority' => 1,
            )
        );

  require_once trailingslashit( get_template_directory() ) . 'secciones/Banners_del_home/banners_man_slider_1.php';
require_once trailingslashit( get_template_directory() ) . 'secciones/Banners_del_home/banners_man_slider_2.php';
require_once trailingslashit( get_template_directory() ) . 'secciones/Banners_del_home/banners_man_slider_3.php';
  
   
   /********************end*********************/
  /********************Banner women************/
  $wp_customize->add_panel('banner_women',
        array(
            'title' => 'Banners/Women',
            'priority' => 1,
            )
        );

  require_once trailingslashit( get_template_directory() ) . 'secciones/Banners_del_home/banners_women_slider_1.php';
  require_once trailingslashit( get_template_directory() ) . 'secciones/Banners_del_home/banners_women_slider_2.php';
  require_once trailingslashit( get_template_directory() ) . 'secciones/Banners_del_home/banners_women_slider_3.php';
  /***************************************************/
$wp_customize->add_panel('smart',
        array(
            'title' => 'Banner/smart',
            'priority' => 1, 
            )
        );

  require_once trailingslashit( get_template_directory() ) . 'secciones/smart.php';


   /***************************************************/
   /*******************Rompe sección***********/
    $wp_customize->add_panel('panel2',
        array(
            'title' => 'Rompe Sección',
            'priority' => 1,
            )
        );
  require_once trailingslashit( get_template_directory() ) . 'secciones/rompe-seccion-del-home.php';
  


   /***********PÁGINA NOSOTROS *************/

   /*******************Rompe sección***********/
    $wp_customize->add_panel('panel3',
        array(
            'title' => 'Página/Nosotros',
            'priority' => 1,
            )
        );
  
  require_once trailingslashit( get_template_directory() ) . 'secciones/pagina-nosotros.php';

    /*******************GIVING BACK***********/
    $wp_customize->add_panel('panel4',
        array(
            'title' => 'Página/GIVING BACK',
            'priority' => 1,
            )
        );
  
  
  $wp_customize->add_section('givin_back_banner', array (
    'title' => 'Banner',
    'panel' => 'panel4'
  ));
  //image
  $wp_customize->add_setting('givin_back_banner');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'givin_Back_banner', array (
    'label' => 'Banner',
    'description' => 'Imagen',
    'section' => 'givin_back_banner',
    'settings' => 'givin_back_banner'
  )));

   // texto de red
    $wp_customize->add_setting('givin_back_banner_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_givin_back_banner_titulo', array (
      'description' => 'Titulo',
      'section' => 'givin_back_banner',
      'settings' => 'givin_back_banner_titulo',
    ))); 
       // texto de red
    $wp_customize->add_setting('givin_back_banner_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_givin_back_banner_subtitulo', array (
      'description' => 'Subtitulo',
      'section' => 'givin_back_banner',
      'settings' => 'givin_back_banner_subtitulo',
      'type' => 'textarea'
    ))); 

    /////////////PROGRAM///////////////////////
$wp_customize->add_section('givin_back_program', array (
    'title' => 'PROGRAM',
    'panel' => 'panel4'
  ));

// texto de red
    $wp_customize->add_setting('givin_back_program_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_givin_back_program_titulo', array (
      'description' => 'Titulo',
      'section' => 'givin_back_program',
      'settings' => 'givin_back_program_titulo',
    ))); 
       // texto de red
    $wp_customize->add_setting('givin_back_program_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_givin_back_program_subtitulo', array (
      'description' => 'Subtitulo',
      'section' => 'givin_back_program',
      'settings' => 'givin_back_program_subtitulo',
      'type' => 'textarea'
    ))); 
    //image
  $wp_customize->add_setting('givin_back_prgram');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'givin_Back_prgram', array (
    'label' => 'Imagen',
    'description' => 'Imagen',
    'section' => 'givin_back_program',
    'settings' => 'givin_back_prgram'
  )));

    ////////////////////////////////////////

  //////////////////OUR THREE GREAT CAUSES/////////////7
$wp_customize->add_section('givin_back_great_causes', array (
    'title' => 'OUR THREE GREAT CAUSES',
    'panel' => 'panel4'
  ));

 //image
  $wp_customize->add_setting('givin_back_great_causes_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'givin_back_great_causes_img', array (
    'label' => 'Imagen',
    'description' => 'Imagen',
    'section' => 'givin_back_great_causes',
    'settings' => 'givin_back_great_causes_img'
  )));

   // texto de red
    $wp_customize->add_setting('givin_back_great_causes_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_givin_back_great_causes_subtitulo', array (
      'description' => 'Subtitulo',
      'section' => 'givin_back_great_causes',
      'settings' => 'givin_back_great_causes_subtitulo',
    ))); 
      // texto de red
    $wp_customize->add_setting('givin_back_great_causes_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_givin_back_great_causes_titulo', array (
      'description' => 'Título',
      'section' => 'givin_back_great_causes',
      'settings' => 'givin_back_great_causes_titulo',
    ))); 
  ///////////////////////////////////////////////////////
    /////////////////HOW IT WORKS///////////////////////
$wp_customize->add_section('how_it_works', array (
    'title' => 'HOW IT WORKS',
    'panel' => 'panel4'
  ));

   // texto de red
    $wp_customize->add_setting('how_it_works_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_how_it_works_subtitulo', array (
      'description' => 'Subtitulo',
      'section' => 'how_it_works',
      'settings' => 'how_it_works_subtitulo',
    ))); 
      // texto de red
    $wp_customize->add_setting('how_it_works_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_how_it_works_titulo', array (
      'description' => 'Título',
      'section' => 'how_it_works',
      'settings' => 'how_it_works_titulo',
    ))); 

     // texto de red
    $wp_customize->add_setting('how_it_works_contenido', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_how_it_works_contenido', array (
      'description' => 'Contenido',
      'section' => 'how_it_works',
      'settings' => 'how_it_works_contenido',
      'type' => 'textarea'
    ))); 
    // texto de red
    $wp_customize->add_setting('how_it_works_text_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_how_it_works_text_boton', array (
      'description' => 'texto del boton',
      'section' => 'how_it_works',
      'settings' => 'how_it_works_text_boton',
    ))); 
      // texto de red
    $wp_customize->add_setting('how_it_works_url_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_how_it_works_url_boton', array (
      'description' => 'Url',
      'section' => 'how_it_works',
      'settings' => 'how_it_works_url_boton',
    ))); 
    //image
  $wp_customize->add_setting('how_it_works_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'how_it_works_img', array (
    'label' => 'Imagen',
    'description' => 'Imagen',
    'section' => 'how_it_works',
    'settings' => 'how_it_works_img'
  )));
    ////////////////////////////////////////////////////////
  /**************************************************/
  ////***************************************************************/

 $wp_customize->add_panel('servico/cliente',
        array(
            'title' => 'Banners/Servicio/cliente',
            'priority' => 1,
            )
        );
  
  
 /*************Banner Servicio al cliente*******/
    $wp_customize->add_section('servicio_cliente', array (
    'title' => 'Servicio al cliente',
    'panel' => 'servico/cliente'
  ));
  // texto de red
    $wp_customize->add_setting('servicio_cliente_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_servicio_cliente_titulo', array (
      'description' => 'titulo de la servicio_cliente',
      'section' => 'servicio_cliente',
      'settings' => 'servicio_cliente_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('servicio_cliente_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_servicio_cliente_subtitulo', array (
      'description' => 'Contenido del servicio_cliente',
      'section' => 'servicio_cliente',
      'settings' => 'servicio_cliente_subtitulo',
      'type' => 'textarea'
    )));  
//image
  $wp_customize->add_setting('servicio_cliente_imagen');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicio_cliente_imagen', array (
    'label' => 'Imagen',
    'description' => 'Imagen',
    'section' => 'servicio_cliente',
    'settings' => 'servicio_cliente_imagen'
  )));
   /***************************************************/
/************* /*************Banner Contacto*******************************/
$wp_customize->add_panel('contacto',
        array(
            'title' => 'Banners/Contacto',
            'priority' => 1,
            )
        );
           /*************Banner Contacto*******/
    $wp_customize->add_section('contacto', array (
    'title' => 'Contacto',
    'panel' => 'contacto'
  ));
  // texto de red
    $wp_customize->add_setting('contacto_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contacto_titulo', array (
      'description' => 'titulo de la contacto',
      'section' => 'contacto',
      'settings' => 'contacto_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('contacto_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contacto_subtitulo', array (
      'description' => 'Contenido del contacto',
      'section' => 'contacto',
      'settings' => 'contacto_subtitulo',
      'type' => 'textarea'
    )));  
//image
  $wp_customize->add_setting('contacto_imagen');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contacto_imagen', array (
    'label' => 'Imagen',
    'description' => 'Imagen',
    'section' => 'contacto',
    'settings' => 'contacto_imagen'
  )));
   /***************************************************/
/*****************FOOTER*************************************/
$wp_customize->add_panel('footer',
        array(
            'title' => 'Footer',
            'priority' => 1,
            )
        );
  $wp_customize->add_section('logo', array (
    'title' => 'Logo',
    'panel' => 'footer'
  ));
  //image
  $wp_customize->add_setting('logo');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array (
    'label' => 'Imagen',
    'description' => 'Imagen',
    'section' => 'logo',
    'settings' => 'logo'
  )));
   $wp_customize->add_section('slogan', array (
    'title' => 'Slogan',
    'panel' => 'footer'
  ));
   // texto de red
    $wp_customize->add_setting('slogan', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_slogan', array (
      'description' => 'Slogan del footer',
      'section' => 'slogan',
      'settings' => 'slogan',
      'type' => 'textarea'
    )));  

     $wp_customize->add_section('footer_redes_sociales', array (
    'title' => 'Redes Sociales footer',
    'panel' => 'footer'
  ));
      // texto de red
    $wp_customize->add_setting('facebook', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_facebook', array (
      'description' => 'URL Facebook',
      'section' => 'footer_redes_sociales',
      'settings' => 'facebook'
    )));  

     // texto de red
    $wp_customize->add_setting('instagram', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_instagram', array (
      'description' => 'URL Instagram',
      'section' => 'footer_redes_sociales',
      'settings' => 'instagram'
    )));  

      $wp_customize->add_section('direccion', array (
    'title' => 'Dirección',
    'panel' => 'footer'
  ));
       // texto de red
    $wp_customize->add_setting('footer_direccion', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_direccion', array (
      'description' => 'Dirección',
      'section' => 'direccion',
      'settings' => 'footer_direccion'
    )));  

       $wp_customize->add_section('email', array (
    'title' => 'Correo eletrónico',
    'panel' => 'footer'
  ));
       // texto de red
    $wp_customize->add_setting('footer_email', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_email', array (
      'description' => 'Correo eletrónico',
      'section' => 'email',
      'settings' => 'footer_email'
    )));  

      $wp_customize->add_section('telefono', array (
    'title' => 'Teléfono',
    'panel' => 'footer'
  ));
       // texto de red
    $wp_customize->add_setting('footer_telefono', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_telefono', array (
      'description' => 'Teléfono',
      'section' => 'telefono',
      'settings' => 'footer_telefono'
    )));  


  /*********************************************************************/
 }
add_action('customize_register','theme_customize_register');


///////////////////////////////////////////////////////////////






    
