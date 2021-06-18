<?php get_header(); ?>


  <div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner.png);">
    <div class="mask-blog">
      <h3 >SERVICIO AL CLIENTE</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod
      tempor incididunt ut labore</p>
         <div id="section01" class="demo">
          <a href="#services"><span></span></a>
        </div>

    </div>
  </div>

<section id="services" class="services">
	<div class="padding-right-left" >
		
	
      <div class="container-grid">
         <?php $args = array( 'post_type' => 'servicio_cliente' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="services-item">
          <div class="services-item__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="services-item__text">
              <h4 class="services-item__title" ><?php the_title(); ?></h4>
              <a class="btn_custom"
                  href="<?php the_field('servicio_al_cliente_boton_url'); ?> "><?php the_field('servicio_al_cliente_boton_texto'); ?></a>
              
            </div>
          </div>
          </div>
           <?php endwhile; ?>
       

      </div>
      <div class="btn_faqs">
          <a class="btn-black"
      href="<?php echo bloginfo('url').'/faqs2';?>">PREGUNTAS FRECUENTES</a>
   
  </div>
		</div>
</section>


 <?php get_footer(); ?>
