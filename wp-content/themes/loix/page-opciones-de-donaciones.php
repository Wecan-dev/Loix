 <?php get_header(); ?>



  <div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner.png);">
    <div class="mask-blog">
      <h3>OPCIONES DE DONACIÓN</h3>
      <p class="none-this">Lorem ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod
      tempor incididunt ut labore</p>
         <div id="section01" class="demo">
          <a href="#about"><span></span></a>
        </div>

    </div>
  </div>

<section id="about" class="donation">
	<div class="padding-right-left">
		
	 <?php $args = array( 'post_type' => 'opciones_donaciones' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="donation-item">
    <div class="donation-item__text">
      <p class="donation-item__titlexs" ><?php the_field( 'texto_antes_del_titulo' ); ?></p>
      <h3 class="general-title" ><?php the_title(); ?></h3>
      <div class="donation-item__description" >
       <?php the_content(); ?>
      </div>
          <a class="btn_custom2"
                href="<?php the_permalink(); ?>"><?php the_field('opciones_de_donacion_texto_del_boton'); ?> </a>
              
    </div>
    <div class="donation-item__img">
      <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.png">
    </div>
  </div>
 <?php endwhile; ?>
  	</div>
</section>

 <?php get_footer(); ?>
