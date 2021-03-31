 <?php get_header(); ?>

 <div class="blog-page" style="background-color: #fff!important; ">

  <div class="header "  style="background-image: url(<?php echo get_theme_mod('donacion_interna_imagen') ?>);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;"><?php echo get_theme_mod('donacion_interna_titulo') ?></h3>
      <p><?php echo get_theme_mod('donacion_interna_subtitulo') ?></p>
         <div id="section01" class="demo">
          <a href="#donacion"><span></span></a>
        </div>
    </div>
  </div>
<section id="donacion">
	   <?php $args = array( 'post_type' => 'donacion_interna', 'posts_per_page' => 1 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="info-donacion">
  <p style="font-weight: bold;">HA SELECCIONADO</p>
  <h3><?php the_title(); ?></h3>
<div class="text-selec container">
 <?php the_content(); ?>
</div>  
</div>
	  <?php endwhile; ?>
<div class="form-complete container">
  <p style="font-weight: bold; font-size: 18px; margin-bottom: 5%;">Completa este formulario</p>
      <div class="form2 ">
          <div class="  flex-this">
          <input type="name" name="" placeholder="Nombre">
          <input type="name" name="" placeholder="Apellido">
            </div>
             <input style="width: 100%;" type="email" name="" placeholder="Correo Electrónico">
        </div>

</div>
<div class="form-complete container">
  <p style="font-weight: bold; font-size: 18px; margin-bottom: 5%;">Comprobante de compra</p>
      <div class="form2 ">
          <div class="  flex-this">
            <div class="first">
              <p><span style="font-weight: bold">Número de serie</span> <br> Ubicado en la parte posterior de su reloj</p>
          <input type="name" name="" placeholder="Bq13345656">
        </div>
            <div class="first">
              <p><span style="font-weight: bold">Número de identificación</span> <br> Impreso en su certificado de su autenticidad</p>
          <input type="name" name="" placeholder="A356778-5567B">
        </div>
            </div>
        </div>
        <div class="btn-done">
        <div class="btn-black">
      <a href="">REALIZA TU DONACIÓN</a>
    </div>
</div>
</div>

</section>

 <?php get_footer(); ?>

