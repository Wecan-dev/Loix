 <?php get_header(); ?>


 <div class="blog-page" style="background-color: #fff!important; ">

  <div class="header "  style="background-image: url(<?php echo get_theme_mod('catalago_imagen') ?>);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;"><?php echo get_theme_mod('catalago_titulo') ?></h3>
      <p><?php echo get_theme_mod('catalago_subtitulo') ?></p>
         <div id="section01" class="demo">
          <a href="#about"><span></span></a>
        </div>
    </div>
  </div>
	    <?php $args = array( 'post_type' => 'catalago', 'post_per_page' => 1 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<section id="about" class="container impacto">
  <div class="impacto_child">
    <div class="impacto_child_img">
          <div class="card-cate">
          <div class="img-cate">
            <img style="width: 100%;" src="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="text-cate">
              <h4 style="margin-bottom: 2%;"><?php the_field('titulo_del_catalago'); ?></h4>
              <p><?php the_field('contenido_del_catalogo'); ?></p>
              <div class="btn_custom">
                  <a href="<?php the_field('url_del_boton_catalogo'); ?> "><?php the_field('texto_del_boton_catalogo'); ?></a>
              </div>
            </div>
          </div>
          </div>
    </div>
	
    <div class="impacto_informacion">
      <p style="font-weight: bold;  margin-bottom: 0;">BIENVENIDOS</p>
      <h3><?php the_title(); ?></h3>
      <p>
       <?php the_content(); ?>
      </p>
    </div>
  </div>
</section>
 <?php endwhile; ?>

 <?php get_footer(); ?>

