 <?php get_header(); ?>


  <div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner.png);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;">COLLECTIONS</h3>
      <p class="none-this">Lorem ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod
      tempor incididunt ut labore</p>
         <div id="section01" class="demo">
          <a href="#collections"><span></span></a>
        </div>
         <div class="link-page">
      <a href="<?php bloginfo('url') ?>/home-woman" class="link-page_item">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg"> 
       <p>WOMAN</p>
      </a>
    </div>

       <div class="link-page2">
      <a href="<?php bloginfo('url') ?>/" class="link-page_item">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow.svg"> 
       <p>MEN</p>
      </a>
    </div>
    </div>
  </div>

<div id="collections" class="main-banner">
	 <?php $args = array( 'post_type' => 'collection' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="main-banner-card">

    <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
          <div class="main-banner__title">
            <p><?php the_title(); ?></p>
          </div>
          <div class="main-banner__description">
            <p><?php the_content(); ?>
            </p>
          </div>
          <div class="btn_custom" >
           <a href="<?php the_field('collection_url_del_boton'); ?> "><?php the_field('collection_texto_del_boton'); ?> </a>
         </div>
      </div>
    </div>
    <div class="main-banner__img2">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>">
    </div>
  
  </div>

</div>
   <?php endwhile; ?> 
</div>


 <?php get_footer(); ?>
