 <?php get_header(); ?>

 <section class="faqs">
        <h3>PREGUNTAS FRECUENTES</h3>
<div class="main_faqs">
    <div class="cate-flex">
		<?php
			  $categories = get_terms( 'preguntas', array('hide_empty' => true) );
			  foreach($categories as $category) { ?>
				  
				  
				  <div class="card-cate">
					  <div class="img-cate">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner3.png">
						<div class="text-cate">
						  <h4><?php echo $category->name; ?></h4>
						  <div class="btn_custom">
							  <a href="<?php echo get_category_link($category->term_id); ?>">Ver ahora</a>
						  </div>
						</div>
					  </div>
					  </div>
			 <?php } ?>
      </div>
</div>
 </section>


 <?php get_footer(); ?>

