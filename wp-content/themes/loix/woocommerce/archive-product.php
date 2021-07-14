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


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

get_header();
?>



    <div class="blog-page" style="background-color: #fff!important; ">

  <div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Outlet_1.jpg);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;">OUTLET</h3>
      <p>Encuentra aquí los mejores descuentos y promociones  que no te puedes perder</p>
         <div id="section01" class="demo">
          <a href="#shop"><span></span></a>
        </div>
    </div>
  </div>


<section id="shop"  class="shop-content">
<div class="shop-flex">
  <div class="filter">


    <div class="categories-filter">
      <p class="categories-filter__title">PRECIO</p>
    <?php echo do_shortcode( '[br_filter_single filter_id=430]' ); ?>
    </div>

    <div class="categories-filter">
      <p>Talla</p>
          <ul class="cat-list">
          


        </ul>
    </div>


    <div class="categories-filter">
      <p class="categories-filter__title">Color</p>
        <ul class="cat-list">

                      
        </ul>
    </div>


    <div class="categories-filter">
      <p class="categories-filter__title" >Categorias</p>
        <ul class="cat-list">
            

            

     
        </ul>
    </div>


  </div>
  <div class="cards-shop">
      <div class="filter-product">
        <div class="show-this">
          <p class="show-results">View as</p>
           <ul class="products-nav nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid.png" >
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/list.png" >
                  </a>
              </li>
           </ul>
         </div>
        
        
        
        <div class="show-results"> <?php echo woocommerce_catalog_ordering();  ?> </div>
    </div>



  <div class="tab-content" id="myTabContent">
       <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
        <div class="cards-shop-grid">
     <?php while ( have_posts() ): the_post(); global $product;?>
         <div class="card-product">
					<div class="card-products__heart">
					<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]') ?>
				</div>
			<div class="card-products__img" >
		<a href="<?php the_permalink(); ?>">
			
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
				</a>
				           

			</div>
            
          <div class="text-product">
  			<a href="<?php the_permalink(); ?>" class="product-title" ><?php the_title(); ?></a>
            <p class="product-price" > <?php echo $product->get_price_html();  ?></p>
            <div class="colors">
				  
				
	
       <div class="col-md-6 col-xs-12 col-lg-3 animated wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
        <div class="body">
          <div class="img" style="display: flex;">
				<?php foreach((get_the_terms(get_the_ID(), 'pa_color')) as $category) { ?>
					<div class="black" style="width: 30px; height: 30px; border-radius: 50%; background: <?php echo termmeta_value('color',$category->term_id); ?>"></div>
				<?php }?>
            </div>
          </div>

        </div>
				</div> 
				 </div>  
			 </div> 
        <?php endwhile; ?> 
            </div> 
  </div>  
</div>  

                 
<?php get_footer(); ?>

<style type="text/css">

  .products {
    padding-top: 0;
    padding-left: 0;

  }
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

