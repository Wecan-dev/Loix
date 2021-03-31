<?php get_header(); ?>
  <?php  $extension = pathinfo(get_theme_mod('smart_imagen'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
             <div class="header "  style="background-image: url(<?php echo get_theme_mod('smart_imagen') ?>);">
              <?php } else { ?> 
                    <video class="header" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('smart_imagen') ?>" type="video/mp4">
                    </video>  
		     <?php } ?>

 
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;"><?php echo get_theme_mod('smart_titulo') ?></h3>
      <p class="none-this"><?php echo get_theme_mod('smart_subtitulo') ?></p>
         <div id="section01" class="demo">
          <a href="#collections"><span></span></a>
        </div>
         <div class="link-page">
      <a href="<?php echo bloginfo('url').'/index.php/woman';?>" class="link-page_item">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg"> 
       <p>WOMAN</p>
      </a>
    </div>

       <div class="link-page2">
      <a href="<?php echo bloginfo('url').'/index.php/men';?>" class="link-page_item">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow.svg"> 
       <p>MEN</p>
      </a>
    </div>
    </div>
  </div>

<div id="collections" class="main-banner">
   <?php $args = array( 'post_type' => 'smart' ); ?>
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
            <p> <?php the_content(); ?>
            </p>
          </div>
          <div class="btn_custom" >
           <a href="<?php the_field('smart_boton_url'); ?> "><?php the_field('smart_boton_texto'); ?> </a>
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

