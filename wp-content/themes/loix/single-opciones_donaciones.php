<?php get_header(); ?>
<div class="header "  style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<div class="mask-blog">
		<h3>TU DONACIÓN</h3>
		<p class="none-this">Gracias a tu ayuda estamos transformando al mundo</p>
		<div id="section01" class="demo">
			<a href="#about"><span></span></a>
		</div>

	</div>
</div>
<section id="about" class="single-donation" >
	<div class="padding-right-left" >
		<p class="single-donation__titlexs" >Ha seleccionado</p>
		<h3 class="general-title general-title__center" > <?php the_field( 'texto_antes_del_titulo' ); ?> <?php the_title(); ?></h3>
		<div class="single-donation__description" >
			<?php the_content(); ?>
		</div>
		<div class="single-donation__form" >
			<p class="single-donation__description" >
				Si desea apoyar esta causa, complete sus datos en el formulario a continuación
			</p>
			<h2 class="donation-form__title" >
				Completa este formulario
			</h2>
			<div class="single-donation__flex" >
				<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?> 
			</div>
		</div>   
	</div>
</section>
<?php get_footer(); ?>
