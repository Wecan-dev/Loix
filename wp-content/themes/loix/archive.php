 <?php get_header(); ?>
  <?php $category_id = get_queried_object_id();?>
<?php if($category_id == '19' or $category_id == '20'): ?>
 <section class="faqs">
        <h3>PREGUNTAS FRECUENTES SOBRE RELOJES</h3>
    <?php $i=1; ?>
		   <?php $taxonomy = get_the_terms(get_the_id(),'preguntas'); ?>
		  <?php $args =  array(
          'post_type' => 'preguntas_frecuentes',
          'post_status' => 'publish',
          'posts_per_page' => 99999,
          'tax_query' => array(
             'relation'=>'AND', // 'AND' 'OR' ...
              array(
                'taxonomy' => 'preguntas',
                'field'           => 'slug',
                'terms'           => $taxonomy[0]->slug,
                'operator'        => 'IN',
               )),
          ); ?>
		  
       <?php $preguntas_frecuentes = new WP_Query($args); ?>  
	  <div class="content">
                 <?php while ( $preguntas_frecuentes->have_posts() ) : $preguntas_frecuentes->the_post(); ?>
	   <div>
        <input type="checkbox" id="question<?php echo $i?>" name="q" class="questions">
        <div class="plus2">+</div>
        <label for="question<?php echo $i?>" class="question">
          <?php the_title(); ?>
        </label>
        <div class="answers">
    <?php the_content(); ?>
        </div>
		   </div>
 <?php $i= $i + 1; ?>  
		  <?php endwhile; ?>  
	  </div>
	  
 </section>



<?php else: ?>

<section class="comunidad">
  <div class="commit">
	    <?php $wcatTerms = get_terms('category', array('hide_empty' => 0,'orderby' => 'id', 'parent' =>0)); 
                   foreach($wcatTerms as $wcatTerm) : ?>
	  <p>
		  	<a class="tab-line2" href="<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>"><?php echo $wcatTerm->name; ?></a>
	  </p>
	  <?php
						endforeach; ?> 
   
  </div>
  <h3>  <?php the_archive_title() ?> </h3>
  <div class="posts">

    <div class="card-post">
	 <?php	$i = 0;    ?>
		
	 <?php if(have_posts()){
            while(have_posts()){
                the_post(); $i++;
            ?>
		<?php switch($i):
		case 1: ?>
				
      <div class="card-post_item">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        <div class="card-post_text">
          <p> <?php the_archive_title() ?> </p>
          <h4><?php the_title(); ?></h4>
          <div class="btn_direc">
            <div class="btn_custom2">
              <a href="">INSCRÍBETE</a>
            </div>
          </div>
        </div>
      </div>
			
		<?php break; ?>
							<?php endswitch; ?>
		  <?php
            }
    } ?>
      <div class="flex-this">
		   <?php	$i = 0;    ?>
		
	 <?php if(have_posts()){
            while(have_posts()){
                the_post(); $i++;
            ?>
		<?php switch($i):
		case 2: ?>
		  	
        <div class="card-post_item_two">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="card-post_text">
            <div class="flex-this">
              <p><?php the_archive_title() ?></p>
              <p style="color: #898a92;"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d/m/Y'); ?></p></div>
              <h4><?php the_title(); ?></h4>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>
              </div>
            </div>
          </div>
		<?php break; ?>
							<?php endswitch; ?>
		  <?php
            }
    } ?>
		  <?php	$i = 0;    ?>
		
	 <?php if(have_posts()){
            while(have_posts()){
                the_post(); $i++;
            ?>
		<?php switch($i):
		case 3: ?>
		  	
        <div class="card-post_item_two">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="card-post_text">
            <div class="flex-this">
              <p><?php the_archive_title() ?></p>
              <p style="color: #898a92;"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d/m/Y'); ?></p></div>
              <h4><?php the_title(); ?></h4>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>
              </div>
            </div>
          </div>
		<?php break; ?>
							<?php endswitch; ?>
		  <?php
            }
    } ?>
		  	
        </div>
        <div class="flex-this">
        	  <?php	$i = 0;    ?>
		
	 <?php if(have_posts()){
            while(have_posts()){
                the_post(); $i++;
            ?>
		<?php switch($i):
		case 4: ?>
        <div class="card-post_item_two">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="card-post_text">
            <div class="flex-this">
              <p><?php the_archive_title() ?></p>
              <p style="color: #898a92;"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d/m/Y'); ?></p></div>
              <h4><?php the_title(); ?></h4>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>
              </div>
            </div>
          </div>
		<?php break; ?>
							<?php endswitch; ?>
		  <?php
            }
    } ?>
			 <?php	$i = 0;    ?>
		
	 <?php if(have_posts()){
            while(have_posts()){
                the_post(); $i++;
            ?>
		<?php switch($i):
		case 5: ?>
        <div class="card-post_item_two">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="card-post_text">
            <div class="flex-this">
              <p><?php the_archive_title() ?></p>
              <p style="color: #898a92;"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d/m/Y'); ?></p></div>
              <h4><?php the_title(); ?></h4>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>
              </div>
            </div>
          </div>
		<?php break; ?>
							<?php endswitch; ?>
		  <?php
            }
    } ?>
           
          </div>
        </div>
        <div class="card-post-right">
 	 <?php	$i = 0;    ?>
		
	 <?php if(have_posts()){
            while(have_posts()){
                the_post(); $i++;
            ?>
		<?php switch($i):
		case 6: ?>
          <div class="card-post_item_two">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.png">
            <div class="card-post_text">

              <p><?php the_archive_title() ?></p>
              <h6><?php the_content() ?></h6>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>

              </div>
            </div>
          </div>
			<?php break; ?>
							<?php endswitch; ?>
		  <?php
            }
    } ?>
			 <?php	$i = 0;    ?>
		
	 <?php if(have_posts()){
            while(have_posts()){
                the_post(); $i++;
            ?>
		<?php switch($i):
		case 7: ?>
          <div class="card-post_item_two">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.png">
            <div class="card-post_text">

              <p><?php the_archive_title() ?></p>
              <h6><?php the_exerpt() ?></h6>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>

              </div>
            </div>
          </div>
			<?php break; ?>
							<?php endswitch; ?>
		  <?php
            }
    } ?>
			 <?php	$i = 0;    ?>
		
	 <?php if(have_posts()){
            while(have_posts()){
                the_post(); $i++;
            ?>
		<?php switch($i):
		case 8: ?>
          <div class="card-post_item_two">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.png">
            <div class="card-post_text">

              <p><?php the_archive_title() ?></p>
              <h6><?php the_exerpt() ?></h6>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>

              </div>
            </div>
          </div>
			<?php break; ?>
							<?php endswitch; ?>
		  <?php
            }
    } ?>
         

        </div>
      </div>
    </section>
<section class="news" style="background-image:url(<?php bloginfo('url') ?>/wp-content/uploads/2021/03/BANNER_ABAJO_COMUNIDAD.jpg)"> 
  <div class="text_news"> 
    <h3>OUR COMMUNITY NEWS</h3>
   <p>¿Quiere descubrir nuestras novedades? Únete a nuestra comunidad y sé el primero en conocer los nuevos productos, descuentos, ofertas y próximos eventos del mundo LOIX. </p>
   <div class="btn_custom"> 
   <a href="#">SUBSCRÍBETE</a> 
   </div>
  </div>
</section>


<?php endif; ?>


 <?php get_footer(); ?>

