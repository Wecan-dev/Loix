<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );
 ?>
	 
	    <div class="block4 card-product card-product2">
		  <div class="">
        	<img src="<?php echo get_the_post_thumbnail_url(); ?>">
			     </div>
          <div class="text-product">
            <h5><?php the_title(); ?></h5>
			  <p>
				  <?php echo excerpt(25); ?>
			  </p>
            <p><?php echo $product->get_price_html(); ?></p>
              <div class="colors">
          <?php foreach((get_the_terms(get_the_ID(), 'pa_color' )) as $category) {  termmeta_value('color',$category->term_id);?>
        <div class="black" style="background: <?php echo termmeta_value('color',$category->term_id); ?>"></div>
          <?php }?>
  </div>
          </div>
          <div class="icon-heart">          
            <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>  
                    <div class="discount">          
                    <div class="discount-p">
                    <p>20%</p>
                    </div>
          </div>  
          <div class="block2-overlay trans-0-4">
			  <div class="short-code_yith">
				    <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>

			  </div>
            
            <div class="block2-btn-addcart trans-0-4">
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>
  
 


    		
    	
<?php
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
