<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
 <?php get_header(); ?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
		<section class="details single-product ">
		<div class="padding-right-left">
		  <!--       Detail Product-->
		  <div class="container-grid">
			<!--               picture product-->
			<div class="single-product__img">

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
</div>
<div class="single-product__text">

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
	
		 * @hooked woocommerce_template_single_excerpt - 20
		
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?> 
	</div>
		 <div class="radio radio-plus">
  <label><input type="radio" name="optradio"> Agregar para comparar</label>
</div>
<div class="description single-accordion" id="accordion-2">  
	<div class="head">
	<h5>Descripción</h5>
    </div>
	<div class="content">
<p>
<?php the_excerpt(); ?>  </p>	

	<button class="single-accordion__btn" type="button"  data-toggle="modal" data-target="#myModal">Leer más </button> 	
		 </div>
	<div class="modal modal2 single-modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Descripción de <span><?php the_title(); ?></span> </h4>
        </div>
        <div class="modal-body">
          <p><?php the_content(); ?></p>
        </div>
      
      </div>
      
    </div>
  </div>
  </div>
	<div id="accordion-1" class="features single-accordion">
    <div class="head">
  	<h5>Características Principales</h5>
    </div>
		  <div class="content">
  		<div class="features-icons"> 
				<div class="features-item"> 
			<?php $caracteristicas_imagen_ = get_field( 'caracteristicas_imagen_!' ); ?>
<?php if ( $caracteristicas_imagen_ ) : ?>
	<img src="<?php echo esc_url( $caracteristicas_imagen_['url'] ); ?>" alt="<?php echo esc_attr( $caracteristicas_imagen_['alt'] ); ?>" />
<?php endif; ?><?php the_field( 'caracteristica_1' ); ?>
			  </div>
				<div class="features-item"> 
		<?php $caracteristicas_imagen_2 = get_field( 'caracteristicas_imagen_2' ); ?>
<?php if ( $caracteristicas_imagen_2 ) : ?>
	<img src="<?php echo esc_url( $caracteristicas_imagen_2['url'] ); ?>" alt="<?php echo esc_attr( $caracteristicas_imagen_2['alt'] ); ?>" />
<?php endif; ?><?php the_field( 'caracteristica_2' ); ?>
			  </div>
				<div class="features-item"> 
		<?php $caracteristicas_imagen_3 = get_field( 'caracteristicas_imagen_3' ); ?>
<?php if ( $caracteristicas_imagen_3 ) : ?>
	<img src="<?php echo esc_url( $caracteristicas_imagen_3['url'] ); ?>" alt="<?php echo esc_attr( $caracteristicas_imagen_3['alt'] ); ?>" />
<?php endif; ?> <?php the_field( 'caracteristica_3' ); ?>
			  </div>
				<div class="features-item"> 
			<?php $caracteristicas_imagen_4 = get_field( 'caracteristicas_imagen_4' ); ?>
<?php if ( $caracteristicas_imagen_4 ) : ?>
	<img src="<?php echo esc_url( $caracteristicas_imagen_4['url'] ); ?>" alt="<?php echo esc_attr( $caracteristicas_imagen_4['alt'] ); ?>" />
<?php endif; ?> <?php the_field( 'caracteristica_4' ); ?>
			  </div>
				<div class="features-item"> 
			<?php $caracteristicas_imagen_5 = get_field( 'caracteristicas_imagen_5' ); ?>
<?php if ( $caracteristicas_imagen_5 ) : ?>
	<img src="<?php echo esc_url( $caracteristicas_imagen_5['url'] ); ?>" alt="<?php echo esc_attr( $caracteristicas_imagen_5['alt'] ); ?>" />
<?php endif; ?>
<?php the_field( 'caracteristica_5' ); ?>
			  </div>
			  </div>
    </div>
		

  </div>
		<div id="accordion-3" class="description single-accordion">
    <div class="head">
  	<h5>Modo Uso</h5>
    </div>
		  <div class="content">
  	 <div class="progress-info">
  	 <h2>
  	Outfit
    </h2>
		  
		 
		 <div class="valoracion-1">
			 
			 
</div>
		 <div class="name_atribute"> 
	
		 </div>
    </div>
		  	 <div class="progress-info">
  	 <h2>
  	Size
    </h2>

		 <div class="valoracion-2">
	 

			
			
</div>
				 <div class="title">
					 </div>
    </div>
<div class="progress-info">
  	 <h2>
  	Style
    </h2>

<div class="valoracion-3">
	
 
	 
</div>
    </div>
    </div>
		

  </div>
			<div id="accordion-4" class="description single-accordion">
    <div class="head">
  	<h5>Descripción Técnica</h5>
    </div>
		  <div class="content">
  <p>	<?php the_field( 'descripcion_tenica' ); ?> </p>
    </div>
		

  </div>
	
				<div id="accordion-5" class="description single-accordion">
    <div class="head">
  	<h5>Guia de Usuario</h5>
      
    </div>
		  <div class="content">
  	  <p>	<?php $guia_de_usuario = get_field( 'guia_de_usuario' ); ?>
<?php if ( $guia_de_usuario ) : ?>
	<a href="<?php echo esc_url( $guia_de_usuario['url'] ); ?>"target="_blank"><?php echo esc_html( $guia_de_usuario['filename'] ); ?></a>
<?php endif; ?>

			  </p>
    </div>
		

  </div>
	
	<div class="icon-heart2">					
					 <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>

		</div>
	
		
	<div class="arrows">
			
		<!--			<?php $prv_post = get_previous_post();
$next_post = get_next_post(); 
?>
<?php if(!empty($prv_post)) { ?>
<a href="<?php echo get_permalink($prv_post->ID ); ?>" class="prev" rel="prev">
	<div class="arrows2">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow2.svg">
		</div>
</a>
<?php } ?>

<?php if(!empty($next_post)) { ?>
			<div class="arrows2">
<a href="<?php echo get_permalink($next_post->ID ); ?>" class="next" rel="next">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next2.svg">
</a>
				</div>
<?php } ?> -->
			<div class="arrows2">
				<?php previous_post_link( ' %link',  true, '', 'product_cat' ); ?>
			
			</div>
			<div class="arrows3">	
		  	  <?php next_post_link( ' %link', true, '', 'product_cat' ); ?>		
	       </div>
		 
		</div>
	  </div>
</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>
</div>
</section>
</div>
</div>

<section class="other-images">
	<h3>
		OTHER IMAGES
	</h3>

<div class="images-des">
	  <?php if (get_field('imagen_1') != NULL){?> 
	<div class="images_item">
		 <?php $image = get_field('imagen_1'); ?>
  		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	</div>	
	<?php }
	?>
	  <?php if (get_field('imagen_2') != NULL){?> 
	<div class="images_item">
	 <?php $image = get_field('imagen_2'); ?>
  		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	</div>	
	<?php }
	?>
	  <?php if (get_field('imagen_3') != NULL){?> 
	<div class="images_item">
		 <?php $image = get_field('imagen_3'); ?>
  		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	</div>	
	<?php }
	?>
	  <?php if (get_field('imagen_4') != NULL){?> 
	<div class="images_item">
	 <?php $image = get_field('imagen_4'); ?>
  		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	</div>
	<?php }
	?>
	</div>
	
</section>

<section class="colecciones vistas products">
			<h3 style="margin-bottom: 60px; text-align:center">PRODUCTOS SIMILARES<br>
			</h3>
				 <?php $taxonomy = get_the_terms(get_the_id(),'product_cat'); ?>
		  <?php $args =  array(
          'post_type' => 'product',
          'post_status' => 'publish',
          'posts_per_page' => 99999,
          'tax_query' => array(
             'relation'=>'AND', // 'AND' 'OR' ...
              array(
                'taxonomy' => 'product_cat',
                'field'           => 'slug',
                'terms'           => $taxonomy[0]->slug,
                'operator'        => 'IN',
               )),
          ); ?>
	  <?php $product_cat = new WP_Query($args); ?>  
			<div class="multiple-items">
				  <?php while ( $product_cat->have_posts() ) : $product_cat->the_post(); global $product;?>
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
	<?php foreach((get_the_terms(get_the_ID(), 'pa_color' )) as $category) {  termmeta_value('color',$category->term_id);?>
				<div class="black" style="background: <?php echo termmeta_value('color',$category->term_id); ?>"></div>
					<?php }?>
            </div>
          </div>

        </div>
					<?php endwhile ?>
				
			</div>
		</section>

<?php do_action( 'woocommerce_after_single_product' ); ?>

<style>
	.header__main {
		background: #000;
	}
	
	.site-main {
		padding-top: 183px;	
	}
</style>