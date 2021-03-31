 <?php get_header(); ?>


 <section class="faqs">
        <h3>PREGUNTAS FRECUENTES SOBRE RELOJES</h3>
    <?php $i=1; ?>
		   <?php $taxonomy = get_the_terms(get_the_id(),'preguntas'); ?>
		  <?php $args =  array(
          'post_type' => 'preguntas_frecuentes',
          'post_status' => 'publish',
          'posts_per_page' => 99999,
          'tax_query' => array(
             'relation'=>'AND', // 'AND' 'OR' ...
              array(
                'taxonomy' => 'preguntas',
                'field'           => 'slug',
                'terms'           => $taxonomy[0]->slug,
                'operator'        => 'IN',
               )),
          ); ?>
		  
       <?php $preguntas_frecuentes = new WP_Query($args); ?>  
	  <div class="content">
                 <?php while ( $preguntas_frecuentes->have_posts() ) : $preguntas_frecuentes->the_post(); ?>
	   <div>
        <input type="checkbox" id="question<?php echo $i?>" name="q" class="questions">
        <div class="plus2">+</div>
        <label for="question<?php echo $i?>" class="question">
          <?php the_title(); ?>
        </label>
        <div class="answers">
    <?php the_content(); ?>
        </div>
		   </div>
 <?php $i= $i + 1; ?>  
		  <?php endwhile; ?>  
	  </div>
	  
 </section>


 <?php get_footer(); ?>

