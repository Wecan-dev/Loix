<?php get_header();?>
<section class="faqs">
        <h3>PREGUNTAS FRECUENTES SOBRE RELOJES</h3>
    <?php $i=1; ?>
		 
	  <div class="content">
                 <?php while ( have_posts() ) : the_post(); ?>
	   <div style="position:relative;">
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
 <?php get_footer();?>