 <?php get_header(); ?>

 <div class="blog-page" style="background-color: #fff!important; ">

  <div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner.png);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #fff; text-align: center; font-size:70px;">CONTACTO</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod
      tempor incididunt ut labore</p>
         <div id="section01" class="demo">
          <a href="#contacto"><span></span></a>
        </div>
    </div>
  </div>
  <div id="contacto" class="contact info-centro ">
    <div class="form">
        <h5>DEJANOS UN MENSAJE</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. </p>
       <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
    <div class="information">
      <h5>NUESTRA INFORMACIÓN</h5>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>

      <div class="block-237 ul-mar ">
        <ul>
          <li>
         <img style="margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg">
            <div>
              <span style="color: #000; font-size: 16px; font-weight: 600;">Email</span> <br><span style="color: #000; font-size: 15px;">info@jakielondon.com</span>
              </div>
            </li>
              <li >
               <img style="margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.svg">
                <div>
                <span style="color: #000; font-size: 16px; font-weight: 600;"> Phone</span> <br>
                <span style="color: #000; font-size: 15px;">57 (4) 444 35 69</span>
              </div>
              </li>
              </div>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

 <?php get_footer(); ?>
