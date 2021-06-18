 <?php get_header(); ?>

 <section class="qr">
<div class="padding-right-left" >
	
<div class="container-grid">
        <?php $args = array( 'post_type' => 'qr' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="qr-item">
          <div class="qr-item__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="qr-item__text">
              <h4 class="qr-item__title"><?php the_title(); ?></h4>
              <div class="qr-item__description" ><?php the_content(); ?></div>
              <a class="btn_custom"
                 href="<?php the_field('qr_url_del_boton'); ?> "><?php the_field('qr_texto_del_boton'); ?></a> 
            </div>
          </div>
          </div>
          <?php endwhile; ?>
               </div>
		 </div>

 </section>
<style>
	header {
		background: #000;
	}
</style>
 <?php get_footer(); ?>
