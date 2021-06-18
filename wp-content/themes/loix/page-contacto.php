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
        <p class="contact-text" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
       <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
		</div>
    <div class="information">
      <h5>NUESTRA INFORMACIÓN</h5>
 <?php if (get_theme_mod('slogan') != NULL){?>  
          <p><?php echo get_theme_mod('slogan') ?></p>
            <?php } ?> 
      

        <ul class="contact-list">
			
			 <?php if (get_theme_mod('footer_email') != NULL){?>  
			
			  <li>
				 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg">
				  <a href="mailto:<?php echo get_theme_mod('footer_email') ?>">
					<div>
					  <span>Email</span> <br><span><?php echo get_theme_mod('footer_email') ?></span>
					  </div>
					  </a>
					</li>
               <?php }  ?> 
			
			 
           <?php if (get_theme_mod('footer_telefono') != NULL){?>  
			
			  <li >
               <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.svg">
				  <a href='tel:<?php echo get_theme_mod('footer_telefono') ?>'>
					<div>
					<span> Teléfono</span> <br>
					<span> <?php echo get_theme_mod('footer_telefono') ?></span>
				  </div>
				  </a>
              </li> 
			
     
  <?php }  ?> 
			
        
            
		  </ul>
           
          </div>
        </div>
      </div>



 <?php get_footer(); ?>
