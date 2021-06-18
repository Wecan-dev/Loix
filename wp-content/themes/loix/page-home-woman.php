<?php get_header(); ?>


<div class="main-banner">
  <div class="main-banner__content">
 <?php if (get_theme_mod('women_banner_slider_item_1') != NULL){?>  
    <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner_slider_titulo') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner_slider_titulo') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner_slider_subtitulo') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner_slider_subtitulo') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('women_banner_slider_texto_del_boton_') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner_slider_url_del_boton_2') ?>"><?php echo get_theme_mod('women_banner_slider_texto_del_boton_') ?></a>
   
          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section02"><span></span></a>
        </div>

      </div>
    </div>
		 <?php  $extension = pathinfo(get_theme_mod('women_banner_slider_item_1'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner_slider_item_1') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner_slider_item_1') ?>" type="video/mp4">
                    </video>  
		     <?php } ?>
     <div class="link-page2">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow.svg">
      <a href="<?php echo bloginfo('url').'/smart_';?>" class="link-page_item">
       <p>SMART</p>
      </a>
    </div>

    <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
		
  </div>
	   <?php }
         ?> 
	   <?php if (get_theme_mod('women_banner_slider_item_2') != NULL){?>  
 <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner_slider_titulo_2') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner_slider_titulo_2') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner_slider_subtitulo_2') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner_slider_subtitulo_2') ?>
            </p>
          </div>
           <?php }
         ?> 

           <?php if (get_theme_mod('women_banner_slider_texto_del_boton_') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner_slider_url_del_boton_2') ?>"><?php echo get_theme_mod('women_banner_slider_texto_del_boton_') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
	 		 <?php  $extension = pathinfo(get_theme_mod('women_banner_slider_item_2'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner_slider_item_2') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner_slider_item_2') ?>" type="video/mp4">
                    </video>  
		     <?php } ?>
   
 
      <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
		
  </div>
	   <?php }
         ?> 
	   <?php if (get_theme_mod('women_banner_slider_item_3') != NULL){?>  
 <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner_slider_titulo_3') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner_slider_titulo_3') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner_slider_subtitulo_3') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner_slider_subtitulo_3') ?>
            </p>
          </div>
           <?php }
         ?> 

           <?php if (get_theme_mod('women_banner_slider_texto_del_boton_3') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner_slider_url_del_boton_3') ?>"><?php echo get_theme_mod('women_banner_slider_texto_del_boton_3') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
       <?php  $extension = pathinfo(get_theme_mod('women_banner_slider_item_3'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner_slider_item_3') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner_slider_item_3') ?>" type="video/mp4">
                    </video>  
         <?php } ?>
   
 
      <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
    
  </div>
     <?php }
         ?> 
	   <?php if (get_theme_mod('women_banner_slider_item_4') != NULL){?>  
 <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner_slider_titulo_4') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner_slider_titulo_4') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner_slider_subtitulo_4') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner_slider_subtitulo_4') ?>
            </p>
          </div>
           <?php }
         ?> 

           <?php if (get_theme_mod('women_banner_slider_texto_del_boton_4') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner_slider_url_del_boton_4') ?>"><?php echo get_theme_mod('women_banner_slider_texto_del_boton_4') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
       <?php  $extension = pathinfo(get_theme_mod('women_banner_slider_item_4'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner_slider_item_4') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner_slider_item_4') ?>" type="video/mp4">
                    </video>  
         <?php } ?>
   
 
      <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
    
  </div>
     <?php }
         ?> 
 
</div>

<div id="section02" class="main-banner">
  <div class="main-banner__content">
  <?php if (get_theme_mod('women_banner2_slider_item_1') != NULL){?>  
        <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner2_slider_titulo') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner2_slider_titulo') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner2_slider_subtitulo') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner2_slider_subtitulo') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('women_banner2_slider_texto_del_boto') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner2_slider_url_del_boton') ?>"><?php echo get_theme_mod('women_banner2_slider_texto_del_boto') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section02"><span></span></a>
        </div>

      </div>
    </div>
   <?php  $extension = pathinfo(get_theme_mod('women_banner2_slider_item_1'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner2_slider_item_1') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner2_slider_item_1') ?>" type="video/mp4">
                    </video>  
		     <?php } ?>
   

      <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
		
  </div>
	   <?php }
         ?> 
	    <?php if (get_theme_mod('women_banner2_slider_item_2') != NULL){?>  
  <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner2_slider_titulo_2') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner2_slider_titulo_2') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner2_slider_subtitulo_2') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner2_slider_subtitulo_2') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('women_banner2_slider_texto_del_boton_') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner2_slider_url_del_boton_2') ?>"><?php echo get_theme_mod('women_banner2_slider_texto_del_boton_') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
   <?php  $extension = pathinfo(get_theme_mod('women_banner2_slider_item_2'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner2_slider_item_2') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner2_slider_item_2') ?>" type="video/mp4">
                    </video>  
		     <?php } ?>
    
       <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
		
  </div>
	   <?php }
         ?> 
	  <?php if (get_theme_mod('women_banner2_slider_item_3') != NULL){?>  
  <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner2_slider_titulo_3') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner2_slider_titulo_3') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner2_slider_subtitulo_3') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner2_slider_subtitulo_3') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('women_banner2_slider_texto_del_boton_3') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner2_slider_url_del_boton_3') ?>"><?php echo get_theme_mod('women_banner2_slider_texto_del_boton_3') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
   <?php  $extension = pathinfo(get_theme_mod('women_banner2_slider_item_3'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner2_slider_item_3') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner2_slider_item_3') ?>" type="video/mp4">
                    </video>  
         <?php } ?>
    
       <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
    
  </div>
     <?php }
         ?> 

         <?php if (get_theme_mod('women_banner2_slider_item_4') != NULL){?>  
  <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner2_slider_titulo_4') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner2_slider_titulo_4') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner2_slider_subtitulo_4') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner2_slider_subtitulo_4') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('women_banner2_slider_texto_del_boton_4') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner2_slider_url_del_boton_4') ?>"><?php echo get_theme_mod('women_banner2_slider_texto_del_boton_4') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
   <?php  $extension = pathinfo(get_theme_mod('women_banner2_slider_item_4'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner2_slider_item_4') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner2_slider_item_4') ?>" type="video/mp4">
                    </video>  
         <?php } ?>
    
       <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
    
  </div>
     <?php }
         ?> 
</div>
</div>

<div id="section03" class="main-banner">
  <div class="main-banner__content">
	    <?php if (get_theme_mod('women_banner3_slider_item_1') != NULL){?>  
   <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner3_slider_titulo') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner3_slider_titulo') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner3_slider_subtitulo') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner3_slider_subtitulo') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('women_banner3_slider_texto_del_boton') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner3_slider_url_del_boton') ?>"><?php echo get_theme_mod('women_banner3_slider_texto_del_boton') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
	    <?php  $extension = pathinfo(get_theme_mod('women_banner3_slider_item_1'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner3_slider_item_1') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner3_slider_item_1') ?>" type="video/mp4">
                    </video>  
		     <?php } ?>
  
             <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
		
  </div>
	   <?php }
         ?> 
	    <?php if (get_theme_mod('women_banner3_slider_item_2') != NULL){?>  
  <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner3_slider_titulo_2') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner3_slider_titulo_2') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner3_slider_subtitulo_2') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner3_slider_subtitulo_2') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('women_banner3_slider_texto_del_boton_') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner3_slider_url_del_boton_2') ?>"><?php echo get_theme_mod('women_banner3_slider_texto_del_boton_') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
  	    <?php  $extension = pathinfo(get_theme_mod('women_banner3_slider_item_2'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner3_slider_item_2') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner3_slider_item_2') ?>" type="video/mp4">
                    </video>  
		     <?php } ?>
   

         <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
		
  </div>
	   <?php }
         ?> 
	  <?php if (get_theme_mod('women_banner3_slider_item_3') != NULL){?>  
  <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner3_slider_titulo_3') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner3_slider_titulo_3') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner3_slider_subtitulo_3') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner3_slider_subtitulo_3') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('women_banner3_slider_texto_del_boton_3') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner3_slider_url_del_boton_3') ?>"><?php echo get_theme_mod('women_banner3_slider_texto_del_boton_3') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
        <?php  $extension = pathinfo(get_theme_mod('women_banner3_slider_item_3'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner3_slider_item_3') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner3_slider_item_3') ?>" type="video/mp4">
                    </video>  
         <?php } ?>
   

         <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
    
  </div>
     <?php }
         ?> 
              <?php if (get_theme_mod('women_banner3_slider_item_4') != NULL){?>  
  <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('women_banner3_slider_titulo_4') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('women_banner3_slider_titulo_4') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('women_banner3_slider_subtitulo_4') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('women_banner3_slider_subtitulo_4') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('women_banner3_slider_texto_del_boton_4') != NULL){?>  
          <a class="btn_custom"
        href="<?php echo get_theme_mod('women_banner3_slider_url_del_boton_4') ?>"><?php echo get_theme_mod('women_banner3_slider_texto_del_boton_4') ?></a>

          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
        <?php  $extension = pathinfo(get_theme_mod('women_banner3_slider_item_4'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img class="main-banner__img" src="<?php echo get_theme_mod('women_banner3_slider_item_4') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('women_banner3_slider_item_4') ?>" type="video/mp4">
                    </video>  
         <?php } ?>
   

         <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/';?>" class="link-page_item">
       <p>MEN</p>
      </a>
    </div>
    
  </div>
     <?php }
         ?> 
</div>
</div>


<section id="section04" class="products">
  <h3>PRODUCTS</h3>


  <div class="slider-nav tab2"> 
    <div>
      <button class="tablinks tab-line" onclick="openWork(event, 'NEWARRIVALS')" id="defaultOpen2"><p>NEW ARRIVALS</p></button>
    </div>
    <div>
      <button class="tablinks tab-line" onclick="openWork(event, 'TRENDS')"><p>TRENDS</p></button>
    </div>
    <div>
      <button class="tablinks " onclick="openWork(event, 'BESTSELLERS')"><p>BEST SELLERS</p></button>
    </div>
  </div>



  <div class="slider-for">
    <div id="NEWARRIVALS" class="">
      <div class="multiple-items">
         <?php $args = array( 'post_type' => 'product'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="card-product">
			<div class="card-products__img">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
				<div class=" card-products__mask">
      				<div class="card-products__heart">
						<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]') ?>
					</div>

              <!-- Button -->
              <a class="btn_custom"
                href="<?php the_permalink(); ?>">VER MÁS</a>

          </div>
				
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
    </div>

    <div id="TRENDS" class="">
      <div class="multiple-items">
          <?php $args = array( 'post_type' => 'product'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="card-product">
			<div class="card-products__img">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
				<div class=" card-products__mask">
      				<div class="card-products__heart">
						<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]') ?>
					</div>

              <!-- Button -->
              <a class="btn_custom"
                href="<?php the_permalink(); ?>">VER MÁS</a>

          </div>
				
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
    </div>

    <div id="BESTSELLERS" class="">
      <div class="multiple-items">
         <?php $args = 
    array(
      'post_type' => 'product',
      //'paged' => $paged,
      //'posts_per_page' =>12,
      'meta_key' => 'total_sales',
      'orderby' => 'meta_value_num',   
      'meta_query' => array(
        array(
            'key' => 'total_sales',
            'value' => 0,
            'compare' => '>'
        )
      ),
    ); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="card-product">
			<div class="card-products__img">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
				<div class=" card-products__mask">
      				<div class="card-products__heart">
						<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]') ?>
					</div>

              <!-- Button -->
              <a class="btn_custom"
                href="<?php the_permalink(); ?>">VER MÁS</a>

          </div>
				
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
    </div>
  </div>
  <div id="section07" class="demo">
    <a href="#section05"><span></span></a>
  </div>
</section>


<section id="section05" class="text-cta">
  <div class="text-cta_flex">
    <div class="text-cta_item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.png">
      <div class="text-overlay">
         <?php if (get_theme_mod('rompe_seccion_titulo') != NULL){?>  
        <h3><?php echo get_theme_mod('rompe_seccion_titulo') ?></h3>
         <?php }
         ?> 
          <?php if (get_theme_mod('rompe_seccion_subtitulo') != NULL){?>  
        <p><?php echo get_theme_mod('rompe_seccion_subtitulo') ?></p>
        <?php }
         ?> 
           <?php if (get_theme_mod('rompe_seccion_texto_del_boton') != NULL){?>  
        <a class="btn_custom"
        href="<?php echo get_theme_mod('rompe_seccion_url_del_boton') ?>"><?php echo get_theme_mod('rompe_seccion_texto_del_boton') ?></a>
       
       <?php }
         ?> 
     </div>
   </div>

   <div class="text-cta_item">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group.png">
   <div class="text-overlay">
         <?php if (get_theme_mod('rompe_seccion_2_titulo') != NULL){?>  
        <h3><?php echo get_theme_mod('rompe_seccion_2_titulo') ?></h3>
         <?php }
         ?> 
          <?php if (get_theme_mod('rompe_seccion_2_subtitulo') != NULL){?>  
        <p><?php echo get_theme_mod('rompe_seccion_2_subtitulo') ?></p>
        <?php }
         ?> 
           <?php if (get_theme_mod('rompe_seccion_2_texto_del_boton') != NULL){?>  
        <a class="btn_custom"
        href="<?php echo get_theme_mod('rompe_seccion_url_del_boton') ?>"><?php echo get_theme_mod('rompe_seccion_2_texto_del_boton') ?></a>
       
       <?php }
         ?> 
     </div>
 </div>
</div>
</section>


 <?php get_footer(); ?>