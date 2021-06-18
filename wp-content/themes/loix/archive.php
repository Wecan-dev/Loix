 <?php get_header(); ?>

<section class="comunidad">
  <div class="commit">
	    <?php $wcatTerms = get_terms('category', array('hide_empty' => 0,'orderby' => 'id', 'parent' =>0)); 
                   foreach($wcatTerms as $wcatTerm) : ?>
		  	<a class="tab-line2" href="<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>"><?php echo $wcatTerm->name; ?></a>
	  
	  <?php
						endforeach; ?> 
   
  </div>
  <h3 class="general-title" >  <?php the_archive_title() ?> </h3>
  <div class="container-grid">

    <div class="card-post">
		
		
	
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="card-post_item">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        <div class="card-post_text">
          <p> <?php the_archive_title() ?> </p>
          <h4><?php the_title(); ?></h4>
          <div class="btn_direc">
            <div class="">
              <a href="<?php the_permalink();?>">INSCRÍBETE</a>
            </div>
          </div>
        </div>
      </div>
	<?php endwhile  ?>
	</div>
        <div class="card-post-right">
 	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'offset' => 5  ); ?>
          <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="card-post_item_two">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.png">
            <div class="card-post_text">

              <p class="card-post__title" >AVENTURA</p>
              <div class="card-post__description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. </div>
              <div class="btn_direc">
                
                  <a href="<?php the_permalink();?>">LEER MÁS</a>

              </div>
            </div>
          </div>
			 <?php endwhile  ?>
         

        </div>
      </div>
    </section>
<section class="news" style="background-image:url(<?php bloginfo('url') ?>/wp-content/uploads/2021/03/BANNER_ABAJO_COMUNIDAD.jpg)"> 
	<div class="padding-right-left" >
		<div class="news-flex">
			
  <div class="text_news"> 
    <h3>OUR COMMUNITY NEWS</h3>
   <p>¿Quiere descubrir nuestras novedades? Únete a nuestra comunidad y sé el primero en conocer los nuevos productos, descuentos, ofertas y próximos eventos del mundo LOIX. </p>
   <a class="btn_custom" 
   href="#">SUBSCRIBE</a> 
	</div>
		</div>

		</div>
</section>
<style>
	header {
		background: #000;
	}
</style>
 <?php get_footer(); ?>