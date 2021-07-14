<footer class="ftco-footer ftco-section">
  <div class=" container padding-right-left">
    <div class="container-grid">
      <div class="logo-footer">
        <div class="ftco-footer-widget">
            <?php if (get_theme_mod('logo') != NULL){?>  
          <div class="logo-footer" style="justify-content: flex-start;">

            <img src="<?php echo get_theme_mod('logo') ?>">
          </div>
            <?php }
         ?> 
           <?php if (get_theme_mod('slogan') != NULL){?>  
          <p><?php echo get_theme_mod('slogan') ?></p>
            <?php }
         ?> 
          <div class="ftco-footer-social list-unstyled ">
              <?php if (get_theme_mod('facebook') != NULL){?>  
            <li class="ftco-animate"><a href="<?php echo get_theme_mod('facebook') ?>"></a><i class="fa fa-facebook" aria-hidden="true"></i></li>
              <?php }
         ?> 
           <?php if (get_theme_mod('instagram') != NULL){?>  
            <li class="ftco-animate"><a href="<?php echo get_theme_mod('instagram') ?>"></a><i class="fa fa-instagram" aria-hidden="true"></i></li>
            <?php }
         ?> 
			  <?php if (get_theme_mod('youtube') != NULL){?>  
            <li class="ftco-animate"><a href="<?php echo get_theme_mod('youtube') ?>"></a><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
            <?php }
         ?> 
          </div>
        </div>
      </div>

      <div class=" logo-footer">
        <div class="ftco-footer-widget">
          <h2 style="color: #0f4388; font-weight: bold" class="ftco-heading-2">MENÚ</h2>
          <div>
            <ul>
             
              <li ><a href=" <?php echo bloginfo('url').'/index.php/contacto';?> ">Contáctanos</a></li>
              <li ><a href=" <?php echo bloginfo('url').'/index.php/terminos-y-condiciones';?> ">Términos y condiciones</a></li>
              <li ><a href=" <?php echo bloginfo('url').'/index.php/tienda';?> ">Productos</a></li>
				<li ><a href="<?php echo bloginfo('url').'/index.php/envios';?>">Envíos</a></li>
            </ul>
          </div>
        </div>
      </div>


      <div class="logo-footer">
        <div class="ftco-footer-widget">
          <div class=" ">
            <ul>
              <li><a href="<?php echo bloginfo('url').'/index.php/politica-privacidad/';?>">Política de privacidad</a></li>
              <li><a href="">Cambios y devoluciones</a></li>
            </ul>
          </div>
        </div>

      </div>

      <div class=" ">
        <div class="ftco-footer-widget">
          <div class="">
            <ul>   
                 <?php if (get_theme_mod('footer_direccion') != NULL){?>  
              <li><a href="#"><img style="width: 7.5%; margin-right: 3px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/loca.svg"><span class="text"><?php echo get_theme_mod('footer_direccion') ?></span></a></li>
              <?php }
         ?> 
            <?php if (get_theme_mod('footer_email') != NULL){?>  
              <li><a href="mailto:"><img style="margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg"><span class="text">Email: <?php echo get_theme_mod('footer_email') ?></span></a></li>
               <?php }
         ?> 
           <?php if (get_theme_mod('footer_telefono') != NULL){?>  
              <li ><a href="#"><img style="margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.svg"><span class="text">Teléfono: <?php echo get_theme_mod('footer_telefono') ?></span></a></li>
  <?php }
         ?> 
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
  <hr class="hr-this">
  <div class=" copy text-center">
	  <a href="https://www.branch.com.co/">
    <p style="margin-bottom: 0;
    padding-top: 0;
    padding-bottom: 22px;
    color: #000!important;
   ">Copyright 2020 Branch - Sitios Web
  </p>
		  </a>
</div>
</footer>


<!--===============================================================================================-->
<script src="https://use.fontawesome.com/22df709ab3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
<!-- owl carousel js-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script>
		
	$( document ).ready(function() {
content = $("#pa_outfit_buttons").change();
 	   $('.valoracion-1').html(content);
		
		content = $("#pa_talla_buttons").change();
 	   $('.valoracion-2').html(content);
		
		content = $("#pa_style_buttons").change();
 	   $('.valoracion-3').html(content);
		
		
});
</script>
  <?php wp_footer(); ?>

</div>
</body>
</html>
