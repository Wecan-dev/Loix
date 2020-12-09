<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-3 logo-footer">
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
           <?php if (get_theme_mod('facebook') != NULL){?>  
            <li class="ftco-animate"><a href="<?php echo get_theme_mod('instagram') ?>"></a><i class="fa fa-instagram" aria-hidden="true"></i></li>
            <?php }
         ?> 
          </div>
        </div>
      </div>

      <div class="col-md-3 logo-footer">
        <div class="ftco-footer-widget">
          <h2 style="color: #0f4388; font-weight: bold" class="ftco-heading-2">MENÚ</h2>
          <div class="block-237 ">
            <ul>
              <li ><a href="  ">Job with us</a></li>
              <li ><a href="  ">Contact us</a></li>
              <li ><a href="  ">Stores</a></li>
              <li ><a href=" <?php echo bloginfo('url').'/index.php/terminos-y-condiciones';?> ">Terms and Conditions</a></li>
              <li ><a href="">Products</a></li>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-md-3 logo-footer">
        <div class="ftco-footer-widget">
          <div class="block-237 ">
            <ul>
              <li ><a href="">Shipping</a></li>
              <li><a href="<?php echo bloginfo('url').'/index.php/privacy-policy';?>">Privacy policy</a></li>
              <li><a href="">Return and exchanges</a></li>
            </ul>
          </div>
        </div>

      </div>

      <div class="col-md-3 logo-footer">
        <div class="ftco-footer-widget">
          <div class="block-237 ">
            <ul>   
                 <?php if (get_theme_mod('footer_direccion') != NULL){?>  
              <li><a href="#"><img style="width: 10%; margin-right: 3px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/loca.svg"><span class="text"><?php echo get_theme_mod('footer_direccion') ?></span></a></li>
              <?php }
         ?> 
            <?php if (get_theme_mod('footer_email') != NULL){?>  
              <li><a href="mailto:"><img style="margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg"><span class="text">Email: <?php echo get_theme_mod('footer_email') ?></span></a></li>
               <?php }
         ?> 
           <?php if (get_theme_mod('footer_telefono') != NULL){?>  
              <li ><a href="#"><img style="margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.svg"><span class="text">Phone: <?php echo get_theme_mod('footer_telefono') ?></span></a></li>
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
    <p style="margin-bottom: 0;
    padding-top: 25px;
    padding-bottom: 25px;
    color: #000!important;
    font-weight: bold;">Copyright 2020 Branch - Sitios Web
  </p>
</div>
</footer>


<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
<!-- owl carousel js-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
