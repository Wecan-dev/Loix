 <?php get_header(); ?>



  <div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner.png);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;">OPCIONES DE DONACIÓN</h3>
      <p class="none-this">Lorem ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod
      tempor incididunt ut labore</p>
         <div id="section01" class="demo">
          <a href="#services"><span></span></a>
        </div>

    </div>
  </div>

<section id="about" class="container impacto">
	 <?php $args = array( 'post_type' => 'opciones_donaciones' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="impacto_child">
    <div class="impacto_informacion">
      <p style="color: #000; font-weight: bold; margin-bottom: 0;">GIVE BACK</p>
      <h3><?php the_title(); ?></h3>
      <p>
       <?php the_content(); ?>
      </p>
          <button class="btn_custom2">
                <a href="<?php the_field('opciones_de_donacion_url_del_boton'); ?> "><?php the_field('opciones_de_donacion_texto_del_boton'); ?> </a>
              </button>
    </div>
    <div class="impacto_child_img">
      <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.png">
    </div>
  </div>
 <?php endwhile; ?>
  
</section>

 <?php get_footer(); ?>
