 <?php get_header(); ?>


<div class="main-banner">
  <div class="main-banner__content">

    <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('slider_titulo') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('slider_titulo') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('slider_subtitulo') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('slider_subtitulo') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('slider_texto_del_boton_') != NULL){?>  
          <div class="btn_custom">
           <a href="<?php echo get_theme_mod('slider_url_del_boton_2') ?>"><?php echo get_theme_mod('slider_texto_del_boton_') ?></a>
         </div>
          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section02"><span></span></a>
        </div>

      </div>
    </div>
    <?php if (get_theme_mod('slider_item_1') != NULL){?>  
    <div class="main-banner__img">
      <img src="<?php echo get_theme_mod('slider_item_1') ?>">

    </div>
 <?php }
         ?> 
    <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/index.php/home-woman';?>" class="link-page_item">
       <p>WOMAN</p>
      </a>
    </div>
  </div>
 <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('slider_titulo_2') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('slider_titulo_2') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('slider_subtitulo_2') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('slider_subtitulo_2') ?>
            </p>
          </div>
           <?php }
         ?> 

           <?php if (get_theme_mod('slider_texto_del_boton_') != NULL){?>  
          <div class="btn_custom">
           <a href="<?php echo get_theme_mod('slider_url_del_boton_2') ?>"><?php echo get_theme_mod('slider_texto_del_boton_') ?></a>
         </div>
          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
    <?php if (get_theme_mod('slider_item_2') != NULL){?>  
    <div class="main-banner__img">
      <img src="<?php echo get_theme_mod('slider_item_2') ?>">

    </div>
 <?php }
         ?> 
    <div class="link-page">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg">
      <a href="<?php echo bloginfo('url').'/index.php/home-woman';?>" class="link-page_item">
       <p>WOMAN</p>
      </a>
    </div>
  </div>
</div>

<div id="section02" class="main-banner">
  <div class="main-banner__content">

        <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('slider_2_titulo') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('slider_2_titulo') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('slider_2_subtitulo') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('slider_2_subtitulo') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('slider_2_texto_del_boton') != NULL){?>  
          <div class="btn_custom">
           <a href="<?php echo get_theme_mod('slider_2_url_del_boton') ?>"><?php echo get_theme_mod('slider_2_texto_del_boton') ?></a>
         </div>
          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section02"><span></span></a>
        </div>

      </div>
    </div>
    <?php if (get_theme_mod('slider_2_item_1') != NULL){?>  
    <div class="main-banner__img">
      <img src="<?php echo get_theme_mod('slider_2_item_1') ?>">

    </div>
 <?php }
         ?> 
    <div class="link-page">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg"> 
      <a href="#" class="link-page_item">
       <p>WOMAN</p>
      </a>
    </div>
  </div>
  <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('slider_2_titulo_2') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('slider_2_titulo_2') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('slider_2_subtitulo_2') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('slider_2_subtitulo_2') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('slider_2_texto_del_boton_2') != NULL){?>  
          <div class="btn_custom">
           <a href="<?php echo get_theme_mod('slider_2_url_del_boton_2') ?>"><?php echo get_theme_mod('slider_2_texto_del_boton_2') ?></a>
         </div>
          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
    <?php if (get_theme_mod('slider_2_item_1_2') != NULL){?>  
    <div class="main-banner__img">
      <img src="<?php echo get_theme_mod('slider_2_item_1_2') ?>">

    </div>
 <?php }
         ?> 
    <div class="link-page">
      <a href="#" class="link-page_item">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg"> 
       <p>WOMAN</p>
      </a>
    </div>
</div>
</div>
</div>

<div id="section03" class="main-banner">
  <div class="main-banner__content">
   <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('slider_3_titulo') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('slider_3_titulo') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('slider_3_subtitulo') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('slider_3_subtitulo') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('slider_3_texto_del_boton') != NULL){?>  
          <div class="btn_custom">
           <a href="<?php echo get_theme_mod('slider_3_url_del_boton') ?>"><?php echo get_theme_mod('slider_3_texto_del_boton') ?></a>
         </div>
          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
    <?php if (get_theme_mod('slider_3_item_1') != NULL){?>  
    <div class="main-banner__img">
      <img src="<?php echo get_theme_mod('slider_3_item_1') ?>">

    </div>
 <?php }
         ?> 
          <div class="link-page">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg"> 
      <a href="#" class="link-page_item">
       <p>WOMAN</p>
      </a>
    </div>
  </div>
  <div class="main-banner__item">
      <div class="mask">
        <div class="main-banner__text">
           <?php if (get_theme_mod('slider_4_titulo') != NULL){?>  
          <div class="main-banner__title">
            <p><?php echo get_theme_mod('slider_4_titulo') ?></p>
          </div>
           <?php }
         ?> 
          <?php if (get_theme_mod('slider_4_subtitulo') != NULL){?>  
          <div class="main-banner__description">
            <p><?php echo get_theme_mod('slider_4_subtitulo') ?>
            </p>
          </div>
           <?php }
         ?> 
           <?php if (get_theme_mod('slider_4_texto_del_boton') != NULL){?>  
          <div class="btn_custom">
           <a href="<?php echo get_theme_mod('slider_4_url_del_boton') ?>"><?php echo get_theme_mod('slider_4_texto_del_boton') ?></a>
         </div>
          <?php }
         ?> 
         <div id="section01" class="demo">
          <a href="#section03"><span></span></a>
        </div>

      </div>
    </div>
    <?php if (get_theme_mod('slider_4_item_1') != NULL){?>  
    <div class="main-banner__img">
      <img src="<?php echo get_theme_mod('slider_4_item_1') ?>">

    </div>
 <?php }
         ?> 
      <div class="link-page">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg"> 
      <a href="#" class="link-page_item">
       <p>WOMAN</p>
      </a>
    </div>
</div>
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
        <div class="block4 card-product">
           <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
          <div class="text-product">
            <h5> <?php the_title(); ?></h5>
            <p><?php echo $product->get_price_html();  ?></p>
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
<?php  endwhile; ?>
      

      </div>
    </div>

    <div id="TRENDS" class="">
      <div class="multiple-items">
          <?php $args = array( 'post_type' => 'product'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="block4 card-product">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
          <div class="text-product">
            <h5><?php the_title(); ?></h5>
            <p> <?php echo $product->get_price_html();  ?></p>
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
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
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
        <div class="block4 card-product">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_2.png">
          <div class="text-product">
            <h5><?php the_title(); ?></h5>
            <p><?php echo $product->get_price_html();  ?></p>
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
              <button class="btn_custom">
                <a href="<?php the_permalink(); ?>">VER MÁS</a>
              </button>
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
        <div class="btn_custom" >
         <a href="<?php echo get_theme_mod('rompe_seccion_url_del_boton') ?>"><?php echo get_theme_mod('rompe_seccion_texto_del_boton') ?></a>
       </div>
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
        <div class="btn_custom" >
         <a href="<?php echo get_theme_mod('rompe_seccion_url_del_boton') ?>"><?php echo get_theme_mod('rompe_seccion_2_texto_del_boton') ?></a>
       </div>
       <?php }
         ?> 
     </div>
 </div>
</div>
</section>


 <?php get_footer(); ?>