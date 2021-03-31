 <?php get_header(); ?>

 <div class="blog-page" style="background-color: #fff!important; ">

   <?php if (get_theme_mod('givin_back_banner') != NULL){?>  
  <div class="header "  style="background-image: url(<?php echo get_theme_mod('givin_back_banner') ?>);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;"><?php echo get_theme_mod('givin_back_banner_titulo') ?></h3>
      <p><?php echo get_theme_mod('givin_back_banner_subtitulo') ?></p>
         <div id="section01" class="demo">
          <a href="#about"><span></span></a>
        </div>
    </div>
  </div>
<?php }
         ?> 

<section id="about" class="container impacto">
  <div class="impacto_child">
    <div class="impacto_informacion">
         <?php if (get_theme_mod('givin_back_program_titulo') != NULL){?>  
      <h3><?php echo get_theme_mod('givin_back_program_titulo') ?></h3>
<?php }
         ?> 
         <?php if (get_theme_mod('givin_back_program_subtitulo') != NULL){?>  
      <p>
       <?php echo get_theme_mod('givin_back_program_subtitulo') ?>
      </p>
<?php }
         ?> 

    </div>
       <?php if (get_theme_mod('givin_back_prgram') != NULL){?>  
    <div class="impacto_child_img2">
      <img  src="<?php echo get_theme_mod('givin_back_prgram') ?>">
    </div>
<?php }
         ?> 
  </div>
</section>
 <?php if (get_theme_mod('givin_back_great_causes_img') != NULL){?>  
<section class="great" style="background-image: url(<?php echo get_theme_mod('givin_back_great_causes_img') ?>);">

     <?php if (get_theme_mod('givin_back_great_causes_subtitulo') != NULL){?>  
  <p><?php echo get_theme_mod('givin_back_great_causes_subtitulo') ?></p>
<?php }
         ?> 
   <?php if (get_theme_mod('givin_back_great_causes_titulo') != NULL){?>  
<h3><?php echo get_theme_mod('givin_back_great_causes_titulo') ?></h3>
<?php }
         ?> 

  <div style="justify-content: space-around;" class="valores_child">
    <div class="icon-valores icon-act">
      <div class="text-act2">
        <div style="margin-left: 5%;" class="categ">

             <?php if (get_theme_mod('Item Subtítulo primer campo') != NULL){?>  
          <p><?php echo get_theme_mod('Item Subtítulo primer campo') ?></p>
<?php }
         ?> 
             <?php if (get_theme_mod('givin_back_great_causes_item_titulo') != NULL){?>  
          <h5><?php echo get_theme_mod('givin_back_great_causes_item_titulo') ?></h5>
<?php }
         ?> 

        </div>

           <?php if (get_theme_mod('givin_back_great_causes_item_contenido') != NULL){?>  
        <div style="margin-left: 5%;" class="title-actv">
          <h6><?php echo get_theme_mod('givin_back_great_causes_item_contenido') ?></h6>
        </div>
<?php }
         ?> 
      </div>
    </div>
    <div class="icon-valores icon-act">
      <div class="text-act2">
        <div style="margin-left: 5%;" class="categ">

             <?php if (get_theme_mod('givin_back_great_causes_item2_subtitulo') != NULL){?>  
          <p><?php echo get_theme_mod('givin_back_great_causes_item2_subtitulo') ?></p>
<?php }
         ?> 
             <?php if (get_theme_mod('givin_back_great_causes_item2_titulo') != NULL){?>  
          <h5><?php echo get_theme_mod('givin_back_great_causes_item2_titulo') ?></h5>
<?php }
         ?> 

        </div>

           <?php if (get_theme_mod('givin_back_great_causes_item2_contenido') != NULL){?>  
        <div style="margin-left: 5%;" class="title-actv">
          <h6><?php echo get_theme_mod('givin_back_great_causes_item2_contenido') ?></h6>
        </div>
<?php }
         ?> 
      </div>
    </div>
    <div class="icon-valores icon-act">
      <div class="text-act2">
        <div style="margin-left: 5%;" class="categ">
             <?php if (get_theme_mod('givin_back_great_causes_item3_subtitulo') != NULL){?>  
          <p><?php echo get_theme_mod('givin_back_great_causes_item3_subtitulo') ?></p>
<?php }
         ?> 
             <?php if (get_theme_mod('givin_back_great_causes_item3_titulo') != NULL){?>  
          <h5><?php echo get_theme_mod('givin_back_great_causes_item3_titulo') ?></h5>

<?php }
         ?> 
        </div>

           <?php if (get_theme_mod('givin_back_great_causes_item3_contenido') != NULL){?>  
        <div style="margin-left: 5%;" class="title-actv">
          <h6><?php echo get_theme_mod('givin_back_great_causes_item3_contenido') ?></h6>
        </div>
<?php }
         ?> 

      </div>
    </div>

  </div>

</section>
<?php }
         ?> 
<section id="about" class="container impacto">
  <div class="impacto_child">
    <div class="impacto_informacion">

         <?php if (get_theme_mod('how_it_works_subtitulo') != NULL){?>  
      <p style="color: #000; font-weight: bold; margin-bottom: 0;"><?php echo get_theme_mod('how_it_works_subtitulo') ?></p>
<?php }
         ?> 
         <?php if (get_theme_mod('how_it_works_titulo') != NULL){?>  
      <h3><?php echo get_theme_mod('how_it_works_titulo') ?></h3>
<?php }
         ?> 
         <?php if (get_theme_mod('how_it_works_contenido') != NULL){?>  
      <p>
        <?php echo get_theme_mod('how_it_works_contenido') ?>
      </p>
<?php }
         ?> 
         <?php if (get_theme_mod('how_it_works_text_boton') != NULL){?>  
          <button class="btn_custom2">
                <a href="<?php echo get_theme_mod('how_it_works_url_boton') ?>"><?php echo get_theme_mod('how_it_works_text_boton') ?></a>
              </button>
              <?php }
         ?> 
    </div>

       <?php if (get_theme_mod('how_it_works_img') != NULL){?>  
    <div class="impacto_child_img">
      <img  src="<?php echo get_theme_mod('how_it_works_img') ?>">
    </div>
    <?php }
         ?> 
  </div>
</section>


 <?php get_footer(); ?>
