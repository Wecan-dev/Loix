 <?php get_header(); ?>

 <section class="faqs">

<div class="main_faqs">
    <div class="cate-flex">
        <?php $args = array( 'post_type' => 'qr' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="card-cate">
          <div class="img-cate">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="text-cate">
              <h4 style="margin-bottom: 0;"><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
              <div class="btn_custom">
                  <a href="<?php the_field('qr_url_del_boton'); ?> "><?php the_field('qr_texto_del_boton'); ?></a>
              </div>
            </div>
          </div>
          </div>
          <?php endwhile; ?>
               

      </div>
</div>
 </section>

 <?php get_footer(); ?>
