<?php get_header(); ?>


  <div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner.png);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;">SERVICIO AL CLIENTE</h3>
      <p class="none-this">Lorem ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod
      tempor incididunt ut labore</p>
         <div id="section01" class="demo">
          <a href="#services"><span></span></a>
        </div>

    </div>
  </div>

<section id="services" class="faqs">

      <div class="cate-flex">
         <?php $args = array( 'post_type' => 'servicio_cliente' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="card-cate">
          <div class="img-cate">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="text-cate">
              <h4><?php the_title(); ?></h4>
              <div class="btn_custom">
                  <a href="<?php the_field('servicio_al_cliente_boton_url'); ?> "><?php the_field('servicio_al_cliente_boton_texto'); ?></a>
              </div>
            </div>
          </div>
          </div>
           <?php endwhile; ?>
       

      </div>
      <div class="btn_faqs">
          <div class="btn-black">
      <a href="">PREGUNTAS FRECUENTES</a>
    </div>
  </div>
</section>


 <?php get_footer(); ?>
