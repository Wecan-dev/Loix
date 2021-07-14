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
						<?php if ( get_field( 'seleccionar' ) == 1 ) : ?>
						<?php $archivo_descargable = get_field( 'archivo_descargable' ); ?>
						<?php if ( $archivo_descargable ) : ?>
						<a class="btn_custom"  href="<?php echo esc_url( $archivo_descargable['url'] ); ?>"><?php echo esc_html( $archivo_descargable['filename'] ); ?></a>
						<?php endif; ?>
						
						<?php else : ?>
						<?php $informacion_del_boton = get_field( 'informacion_del_boton' ); ?>
						<?php if ( $informacion_del_boton ) : ?>
						<a class="btn_custom" href="<?php echo esc_url( $informacion_del_boton['url'] ); ?>" target="<?php echo esc_attr( $informacion_del_boton['target'] ); ?>"><?php echo esc_html( $informacion_del_boton['title'] ); ?></a>
						<?php endif; ?>
						<?php endif; ?>


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
