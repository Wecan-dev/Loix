 <?php get_header(); ?>

<?php if (get_theme_mod('nosotros_banner_img') != NULL){?>  
 <div class="blog-page" style="background-color: #fff!important; ">
	   <?php  $extension = pathinfo(get_theme_mod('nosotros_banner_img'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <div class="header "  style="background-image: url(<?php echo get_theme_mod('nosotros_banner_img') ?>);">
              <?php } else { ?> 
					   <div class="header " >
						   
					
                    <video class="header-video__about"  id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('nosotros_banner_img') ?>" type="video/mp4">
                    </video>  
						      </div>
		     <?php } ?>


    <div class="mask-blog">
       
       <?php if (get_theme_mod('nosotros_banner_titulo') != NULL){?>  
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;"><?php echo get_theme_mod('nosotros_banner_titulo') ?></h3>
        <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_banner_subtitulo') != NULL){?> 
      <p><?php echo get_theme_mod('nosotros_banner_subtitulo') ?></p>
        <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#about"><span></span></a>
        </div>
    </div>
  </div>
	  <?php }
         ?> 
<section id="about" class="impacto about">
	<div class="padding-right-left" >
		

  <div class="impacto_child">
    <div class="impacto_informacion">
      <?php if (get_theme_mod('nosotros_historia') != NULL){?> 
      <h3><?php echo get_theme_mod('nosotros_historia') ?></h3>
<?php }
         ?> 
      <?php if (get_theme_mod('nosotros_historia_contenido') != NULL){?> 
      <p>
        <?php echo get_theme_mod('nosotros_historia_contenido') ?>
      </p>
      <?php }
         ?> 
    </div>
    <?php if (get_theme_mod('nosotros_historia_img') != NULL){?> 
    <div class="impacto_child_img2">
      <img  src="<?php echo get_theme_mod('nosotros_historia_img') ?>">
    </div>
    <?php }
         ?> 
  </div>
			</div>
</section>

<section>
<div class="valores">
		<div class="padding-right-left" >
   <?php if (get_theme_mod('nosotros_iniciativa_titulo_principal') != NULL){?>
<h3><?php echo get_theme_mod('nosotros_iniciativa_titulo_principal') ?></h3>
 <?php }
         ?> 
  <div class="valores_child">
    <div class="icon-valores icon-act wow fadeInUp" data-wow-duration="2s">
       <?php if (get_theme_mod('nosotros_iniciativa_img') != NULL){?>
      <div class="act-img">
        <img src="<?php echo get_theme_mod('nosotros_iniciativa_img') ?>">
      </div>
 <?php }
         ?> 
      <div class="text-act">
      <?php if (get_theme_mod('nosotros_iniciativa_titulo') != NULL){?>
        <div 
			  class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido') != NULL){?>
        <div class="title-act">
          <h6><?php echo get_theme_mod('nosotros_iniciativa_contenido') ?></h6>
        </div>
         <?php }
         ?> 
      </div>
    </div>





       <div class="icon-valores icon-act wow fadeInUp" data-wow-duration="2s">
       <?php if (get_theme_mod('nosotros_iniciativa_img_2') != NULL){?>
      <div class="act-img">
        <img src="<?php echo get_theme_mod('nosotros_iniciativa_img_2') ?>">
      </div>
 <?php }
         ?> 
      <div class="text-act">
      <?php if (get_theme_mod('nosotros_iniciativa_titulo_2') != NULL){?>
        <div  class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo_2') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido_2') != NULL){?>
        <div class="title-act">
          <h6><?php echo get_theme_mod('nosotros_iniciativa_contenido_2') ?></h6>
        </div>
         <?php }
         ?> 
      </div>
    </div>


        <div class="icon-valores icon-act wow fadeInUp" data-wow-duration="2s">
       <?php if (get_theme_mod('nosotros_iniciativa_img_3') != NULL){?>
      <div class="act-img">
        <img src="<?php echo get_theme_mod('nosotros_iniciativa_img_3') ?>">
      </div>
 <?php }
         ?> 
      <div class="text-act">
      <?php if (get_theme_mod('nosotros_iniciativa_titulo_3') != NULL){?>
        <div  class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo_3') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido_3') != NULL){?>
        <div class="title-act">
          <h6><?php echo get_theme_mod('nosotros_iniciativa_contenido_3') ?></h6>
        </div>
         <?php }
         ?> 
      </div>
    </div>

       <div class="icon-valores icon-act wow fadeInUp" data-wow-duration="2s">
       <?php if (get_theme_mod('nosotros_iniciativa_img_4') != NULL){?>
      <div class="act-img">
        <img src="<?php echo get_theme_mod('nosotros_iniciativa_img_4') ?>">
      </div>
 <?php }
         ?> 
      <div class="text-act">
      <?php if (get_theme_mod('nosotros_iniciativa_titulo_4') != NULL){?>
        <div  class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo_4') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido_4') != NULL){?>
        <div  class="title-act">
          <h6><?php echo get_theme_mod('nosotros_iniciativa_contenido_4') ?></h6>
        </div>
         <?php }
         ?> 
      </div>
    </div>
	  
	        <div class="icon-valores icon-act wow fadeInUp" data-wow-duration="2s">
       <?php if (get_theme_mod('nosotros_iniciativa_img_5') != NULL){?>
      <div class="act-img">
        <img src="<?php echo get_theme_mod('nosotros_iniciativa_img_5') ?>">
      </div>
 <?php }
         ?> 
      <div class="text-act">
      <?php if (get_theme_mod('nosotros_iniciativa_titulo_5') != NULL){?>
        <div  class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo_5') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido_5') != NULL){?>
        <div  class="title-act">
          <h6><?php echo get_theme_mod('nosotros_iniciativa_contenido_5') ?></h6>
        </div>
         <?php }
         ?> 
      </div>
    </div>
	  
	        <div class="icon-valores icon-act wow fadeInUp" data-wow-duration="2s">
       <?php if (get_theme_mod('nosotros_iniciativa_img_6') != NULL){?>
      <div class="act-img">
        <img src="<?php echo get_theme_mod('nosotros_iniciativa_img_6') ?>">
      </div>
 <?php }
         ?> 
      <div class="text-act">
      <?php if (get_theme_mod('nosotros_iniciativa_titulo_6') != NULL){?>
        <div  class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo_6') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido_6') != NULL){?>
        <div  class="title-act">
          <h6><?php echo get_theme_mod('nosotros_iniciativa_contenido_6') ?></h6>
        </div>
         <?php }
         ?> 
      </div>
    </div>
	  
	  
    </div>
  </div>
</div>
</div>
</section>

<section class=" impacto mision">
	<div class="padding-right-left">
		

  <div class="impacto_child">



    <div class="impacto_informacion">
       <?php if (get_theme_mod('nosotros_mision_titulo_principal') != NULL){?>
      <h3><?php echo get_theme_mod('nosotros_mision_titulo_principal') ?></h3>
<?php }
         ?> 
       <?php if (get_theme_mod('nosotros_mision_contenido') != NULL){?>
      <p>
        <?php echo get_theme_mod('nosotros_mision_contenido') ?> </p>
<?php }
         ?> 

  </div>
	      <div class="impacto_child_img">
      <img  src="<?php echo get_theme_mod('nosotros_mision_img') ?>">
    </div>
  </div>
	</div>
</section>

<section class="vistas products">
  <h3>VISTOS RECIENTEMENTE</h3>
      <div class="multiple-items">
		  <?php $args = array( 'post_type' => 'product'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="card-product">
					<div class="card-products__heart">
					<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]') ?>
				</div>
			<div class="card-products__img" >
		
				           

				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
			</div>
            
          <div class="text-product">
  <a href="<?php the_permalink(); ?>" class="product-title" ><?php the_title(); ?></a>
            <p class="product-price" > <?php echo $product->get_price_html();  ?></p>
            <div class="colors">
	<?php foreach((get_the_terms(get_the_ID(), 'pa_color' )) as $category) {  termmeta_value('color',$category->term_id);?>
				<div class="black" style="background: <?php echo termmeta_value('color',$category->term_id); ?>"></div>
					<?php }?>
            </div>
          </div>

        </div>
       <?php  endwhile; ?> 
		  
      </div>
</section>
 <?php get_footer(); ?>
