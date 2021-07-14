 <?php get_header(); ?>


 <div class="blog-page" style="background-color: #fff!important; ">

  <div class="header "  style="background-image: url(<?php echo get_theme_mod('catalago_imagen') ?>);">
    <div class="mask-blog">
      <h3><?php echo get_theme_mod('catalago_titulo') ?></h3>
      <p><?php echo get_theme_mod('catalago_subtitulo') ?></p>
         <div id="section01" class="demo">
          <a href="#about"><span></span></a>
        </div>
    </div>
  </div>
	    
<section id="about" class="impacto catalogue">
	<div class="padding-right-left" >
		
<?php $args = array( 'post_type' => 'catalago', 'post_per_page' => 1, 'order' => 'ASC' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="impacto_child">
    <div class="impacto_child_img">
            <img  src="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="impacto-mask">
              <h4><?php the_field('titulo_del_catalago'); ?></h4>
              <p><?php the_field('contenido_del_catalogo'); ?></p>
				<?php if ( get_field( 'cargar_pdf' ) ) : ?>
					<a class="btn_custom" href="<?php the_field( 'cargar_pdf' ); ?>" download>Descargar</a>
				<?php endif; ?>
             
            </div>
    </div>
	
    <div class="impacto_informacion">
      <p class="impacto-informacion__title" ><?php the_field( 'texto_antes_del_titulo' ); ?></p>
      <h3><?php the_title(); ?></h3>
      <div class="catalogue-description">
       <?php the_content(); ?>
      </div>
    </div>
  </div>
		 <?php endwhile; ?>
	</div>
</section>


 <?php get_footer(); ?>

