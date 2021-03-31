<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">

  <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

  <?php endif; ?>

  <?php
  /**
   * Hook: woocommerce_archive_description.
   *
   * @hooked woocommerce_taxonomy_archive_description - 10
   * @hooked woocommerce_product_archive_description - 10
   */
  do_action( 'woocommerce_archive_description' );
  ?>
</header>

  	<div class="blog-page" style="background-color: #fff!important; ">

  <div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Outlet_1.jpg);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;">OUTLET</h3>
      <p>Encuentra aquí los mejores descuentos y promociones  que no te puedes perder</p>
         <div id="section01" class="demo">
          <a href="#donacion"><span></span></a>
        </div>
    </div>
  </div>
<?php
if ( woocommerce_product_loop() ) {

  /**
   * Hook: woocommerce_before_shop_loop.
   *
   * @hooked woocommerce_output_all_notices - 10
   * @hooked woocommerce_result_count - 20
   * @hooked woocommerce_catalog_ordering - 30
   */
  

  woocommerce_product_loop_start();?>


  
<section class="shop-content">
<div class="shop-flex">
	<div class="filter">


    <div class="categorys-filter">
    	<p>PRECIO</p>
		<?php echo do_shortcode( '[br_filter_single filter_id=430]' ); ?>
    </div>

    <div class="categorys-filter">
    	<p>Talla</p>
	<ul class="cat-list">

    <!-- 		<li><input type="radio" id="color" name="gender" value="color"><span class="color-radio"></span> rojo</li>
    		<li><input type="radio" id="color" name="gender" value="color"><span class="color-radio2"></span> Azul</li>
    		<li>Amarillo</li> -->
    		<ul>
          <li class="color-check">
        <?php
                  global $wpdb;
                  $product_categories = get_categories( array( 'taxonomy' => pa_talla, 'orderby' => 'menu_order', 'order' => 'asc' ));  
                  ?>                                                        
                  <?php foreach($product_categories as $category): ?>
                    <?php $checked = NULL; $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id ); ?> 
                    <?php 
                    if ($category->slug == $_GET['cat']) { $checked = "checked='checked'"; }
                    global $wpdb;
                    $count = 0;
                    $result1 = $wpdb->get_results ("SELECT * FROM ".$wpdb->prefix."termmeta where term_id = '$category_id' and meta_key = 'pa_talla_swatches_id_phoen_color'");
                    foreach ( $result1 as $page1 )
                      {  $talla = $page1->meta_value;}
                    ?>        
                    <li>


                        <?php if ($_GET["filter_talla"] != NULL && $_GET["filter_talla"] == $category->slug){ ?> 
						    <a class="hover_cat" href="<?php echo get_home_url().'/tienda?&amp;query_type_talla=or';?>"> 
              
                
                  <span class="checked">
               <label for='radio4'><span class="color-radio" style="background: black; ?>"></span></label>
                </span>
                
              </a>
						
						 <label for='radio4'><span class="color-radio" style="background: border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-right: 1%;
    border: 2px solid;"></span></label>  <?= $categoria ?>
						
          
                        <?php }else{ ?> 
 <label for='radio4'><span class="color-radio" style="background: border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-right: 1%;
    border: 2px solid;"></span></label>
              <a class="filter-a" href="<?php echo get_home_url().'/tienda?filter_talla='.$category->slug.'&amp;query_type_talla=or';?>"><?= $categoria ?>                  
              
              </a>

                        <?php }  ?>                     
                    </li>
                  <?php endforeach; ?>  
    </li>
</ul>
    	</ul>
    </div>


          <div class="categorys-filter">
    	<p>Color</p>
	<ul class="cat-list">

    <!-- 		<li><input type="radio" id="color" name="gender" value="color"><span class="color-radio"></span> rojo</li>
    		<li><input type="radio" id="color" name="gender" value="color"><span class="color-radio2"></span> Azul</li>
    		<li>Amarillo</li> -->
    		<ul>
          
    <li class="color-check">
       <?php
                  global $wpdb;
                  $product_categories = get_categories( array( 'taxonomy' => pa_color, 'orderby' => 'menu_order', 'order' => 'asc' ));  
                  ?>                                                        
                  <?php foreach($product_categories as $category): ?>
                    <?php $checked = NULL; $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id ); ?> 
                    <?php 
                    if ($category->slug == $_GET['cat']) { $checked = "checked='checked'"; }
                    global $wpdb;
                    $count = 0;
                    $result1 = $wpdb->get_results ("SELECT * FROM ".$wpdb->prefix."termmeta where term_id = '$category_id' and meta_key = 'pa_color_swatches_id_phoen_color'");
                    foreach ( $result1 as $page1 )
                      {  $color = $page1->meta_value;}
                    ?>        
                    <li>


                        <?php if ($_GET["filter_color"] != NULL && $_GET["filter_color"] == $category->slug){ ?> 
						    <a class="hover_cat" href="<?php echo get_home_url().'/tienda?&amp;query_type_color=or';?>"> 
              
                
                  <span class="checked">
               <label for='radio4'><span class="color-radio" style="background: <?php echo $color; ?>"></span></label>
                </span>
                
              </a>
						
						 <label for='radio4'><span class="color-radio" style="background: border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-right: 1%;
    border: 2px solid;"></span></label>  <?= $categoria ?>
						
          
                        <?php }else{ ?> 
 <label for='radio4'><span class="color-radio" style="background: border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-right: 1%;
    border: 2px solid;"></span></label>
              <a class="filter-a" href="<?php echo get_home_url().'/tienda?filter_color='.$category->slug.'&amp;query_type_color=or';?>"><?= $categoria ?>                  
              
              </a>

                        <?php }  ?>                     
                    </li>
                  <?php endforeach; ?>  
    </li>
</ul>
    	</ul>
    </div>


    <div class="categorys-filter">
		<p>Categorias</p>
	<ul class="cat-list">
			

    <!-- 		<li><input type="radio" id="color" name="gender" value="color"><span class="color-radio"></span> rojo</li>
    		<li><input type="radio" id="color" name="gender" value="color"><span class="color-radio2"></span> Azul</li>
    		<li>Amarillo</li> -->
    		<ul>
          <li class="color-check">
			
			     <?php
                  global $wpdb;
                  $product_categories = get_categories( array( 'taxonomy' => product_cat, 'orderby' => 'menu_order', 'order' => 'asc' ));  
                  ?>                                                        
                  <?php foreach($product_categories as $category): ?>
                    <?php $checked = NULL; $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id ); ?> 
                    <?php 
                    if ($category->slug == $_GET['cat']) { $checked = "checked='checked'"; }
                    global $wpdb;
                    $count = 0;
                    $result1 = $wpdb->get_results ("SELECT * FROM ".$wpdb->prefix."termmeta where term_id = '$category_id' and meta_key = 'pa_color_swatches_id_phoen_color'");
                    foreach ( $result1 as $page1 )
                      {  $color = $page1->meta_value;}
                    ?>        
                    <li>


                        <?php if ($_GET["product_cat"] != NULL && $_GET["product_cat"] == $category->slug){ ?> 
						    <a class="hover_cat" href="<?php echo get_home_url().'/tienda?&amp;query_type_product_cat=or';?>"> 
              
                
                  <span class="checked">
               <label for='radio4'><span class="color-radio" style="background: black; ?>"></span></label>
                </span>
                
              </a>
						
						 <label for='radio4'><span class="color-radio" style="background: border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-right: 1%;
    border: 2px solid;"></span></label>  <?= $categoria ?>
						
          
                        <?php }else{ ?> 
 <label for='radio4'><span class="color-radio" style="background: border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-right: 1%;
    border: 2px solid;"></span></label>
              <a class="filter-a" href="<?php echo get_home_url().'/tienda/?product_cat='.$category->slug.'&amp;query_type_product_cat=or';?>"><?= $categoria ?>                  
              
              </a>

                        <?php }  ?>                     
                    </li>
                  <?php endforeach; ?>    
		
	 
    </li>
</ul>
      </ul>
    </div>
	</div>
	<div class="cards-shop">
    <div class="filter-product">
		<div class="show-this">
    <p class="show-results">View as
		 <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true"><i class="fa fa-th" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </li>
    </ul>
			</p></div>
		
		
		
    <p class="show-results"> <?php echo woocommerce_catalog_ordering();  ?> </p>
             </div>
  <div class="tab-content" id="myTabContent">
	 <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
	  <div class="cards-shop-flex">
	    <?php
  if ( wc_get_loop_prop( 'total' ) ) {
    while ( have_posts() ) {
      the_post();
  
      /**
       * Hook: woocommerce_shop_loop.
       */
      do_action( 'woocommerce_shop_loop' );

      wc_get_template_part( 'content', 'product' );
		
		
    }
  }
?>
	  </div> 
	  </div>      
 <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	 <div class="cards-shop-flex">
				

	    <?php
  if ( wc_get_loop_prop( 'total' ) ) {
    while ( have_posts() ) {
      the_post();

      /**
       * Hook: woocommerce_shop_loop.
       */
      do_action( 'woocommerce_shop_loop' );

      wc_get_template_part( 'content', 'product_2' );
		
    }
  }
	
?> </div>
	 </div> 
		 </div> 
    
	
	

<?php
  woocommerce_product_loop_end();

   
  
       do_action( 'woocommerce_after_shop_loop' ); 
	
?>
  
<?php              
} else {
  /**
   * Hook: woocommerce_no_products_found.
   *
   * @hooked wc_no_products_found - 10
   */
  do_action( 'woocommerce_no_products_found' );
}


?> 


                 
		
		
<?php		
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10

do_action( 'woocommerce_sidebar' );
 */

get_footer( 'shop' );


?>

<style type="text/css">


</style>
<script type="text/javascript">


$('.nav-tabs .nav-link').on("click.bs.dropdown", function (e) { 
    $(this).tab('show'); 
    e.stopPropagation(); 
});

 $(function() {
$( "#slider-range" ).slider({
range: true,
min: 130,
max: 500,
values: [ 130, 250 ],
slide: function( event, ui ) {
$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
}
});
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
" - $" + $( "#slider-range" ).slider( "values", 1 ) );
});
</script>
<?php get_footer(); ?>