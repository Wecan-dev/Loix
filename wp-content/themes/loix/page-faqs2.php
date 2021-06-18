 <?php get_header(); ?>

 <section class="faqs">
        <h3>PREGUNTAS FRECUENTES</h3>
<div class="main_faqs">
    <div class="container-grid">
		<?php
			  $categories = get_terms( 'preguntas', array('hide_empty' => true) );
			  foreach($categories as $category) { ?>
				  
				  
				  <div class="services-item">
					  <div class="services-item__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner3.png">
						<div class="services-item__text">
						  <h4 class="services-item__title" ><?php echo $category->name; ?></h4>
						  <a class="btn_custom"
							 href="<?php echo get_category_link($category->term_id); ?>">Ver ahora</a>

						</div>
					  </div>
					  </div>
			 <?php } ?>
      </div>
</div>
 </section>

<style>
	.header__main {
		background-color: #000;	
	}
</style>
 <?php get_footer(); ?>

