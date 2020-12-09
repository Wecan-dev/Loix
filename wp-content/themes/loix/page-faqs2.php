 <?php get_header(); ?>

 <section class="faqs">
        <h3>PREGUNTAS FRECUENTES</h3>
<div class="main_faqs">
    <div class="cate-flex">
       <?php $args = array( 'post_type' => 'preguntas_frecuentes' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="card-cate">
          <div class="img-cate">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner3.png">
            <div class="text-cate">
              <h4><?php the_title(); ?></h4>
              <div class="btn_custom">
                  <a href=" ">Ver ahora</a>
              </div>
            </div>
          </div>
          </div>
 <?php endwhile; ?>
      </div>
</div>
 </section>


 <?php get_footer(); ?>

