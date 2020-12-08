 <?php get_header(); ?>
 <div class="blog-page" style="background-color: #fff!important; ">
<?php if (get_theme_mod('nosotros_banner_img') != NULL){?>  
  <div class="header "  style="background-image: url(<?php echo get_theme_mod('nosotros_banner_img') ?>);">
    <div class="mask-blog">
        <?php }
         ?> 
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
<section id="about" class="container impacto">
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
</section>

<section>
<div class="valores">
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
        <div style="margin-left: 5%;" class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido') != NULL){?>
        <div style="margin-left: 5%;" class="title-act">
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
        <div style="margin-left: 5%;" class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo_2') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido_2') != NULL){?>
        <div style="margin-left: 5%;" class="title-act">
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
        <div style="margin-left: 5%;" class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo_3') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido_3') != NULL){?>
        <div style="margin-left: 5%;" class="title-act">
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
        <div style="margin-left: 5%;" class="categ">
          <p><?php echo get_theme_mod('nosotros_iniciativa_titulo_4') ?></p>
        </div>
 <?php }
         ?> 
         <?php if (get_theme_mod('nosotros_iniciativa_contenido_4') != NULL){?>
        <div style="margin-left: 5%;" class="title-act">
          <h6><?php echo get_theme_mod('nosotros_iniciativa_contenido_4') ?></h6>
        </div>
         <?php }
         ?> 
      </div>
    </div>
    </div>
  </div>
</div>
</section>

<section id="about" class="container impacto">
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
        <div style="display: flex; align-items: baseline;">
        <span class="fa fa-check"></span> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><br>    </div>
       <div style="display: flex; align-items: baseline;">
        <span class="fa fa-check"></span> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><br>    </div>  
         <div style="display: flex; align-items: baseline;">
        <span class="fa fa-check"></span> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><br>   
         </div>
         <div style="display: flex; align-items: baseline;">
        <span class="fa fa-check"></span> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><br>   
         </div>  
          <div style="display: flex; align-items: baseline;">
        <span class="fa fa-check"></span> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><br>  
          </div>
  

  </div>
   <?php if (get_theme_mod('nosotros_mision_img') != NULL){?>
    <div class="impacto_child_img">
      <img  src="<?php echo get_theme_mod('nosotros_mision_img') ?>">
    </div>
    <?php }
         ?> 
</section>

<section class="vistas">
  <h3>ULTIMAS VISTAS</h3>
      <div class="multiple-items">
        <div class="block4 card-product">
           <a href="#" class="addwishlist">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card1.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <!-- Button -->
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>

        <div class="block4 card-product">
            <a href="#" class="addwishlist">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card2.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <!-- Button -->
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>
        <div class="block4 card-product">
            <a href="#" class="addwishlist">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card1.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <!-- Button -->
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>
        <div class="block4 card-product">
            <a href="#" class="addwishlist">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card2.png">
          <div class="text-product">
            <h5>Classic Clock</h5>
            <p>$169,00</p>
            <div class="colors">
              <div class="black"></div>
              <div class="blue"></div>
              <div class="gray"></div>
            </div>
          </div>
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
              <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart trans-0-4">
              <!-- Button -->
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
            </div>
          </div>
        </div>

      </div>
</section>
 <?php get_footer(); ?>
