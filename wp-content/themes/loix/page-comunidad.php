 <?php get_header(); ?>

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
		
		
		<?php $args = 
        array(
          'post_type' => 'post',
          'post_status' => 'publish',
      	   'offset' => 0, 
			'posts_per_page' => 1,
          'tax_query' => array(
             'relation'=>'AND', // 'AND' 'OR' ...
              array(
                'taxonomy'        => 'category',
                'field'           => 'slug',
                'terms'           => array($wcatTerm->slug),
                'operator'        => 'IN',
               )),          
          ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="card-post_item">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        <div class="card-post_text">
          <p> <?php the_archive_title() ?> </p>
		 <?php	print_r  ($args) ?>
          <h4><?php the_title(); ?></h4>
          <div class="btn_direc">
            <div class="btn_custom2">
              <a href="">INSCRÍBETE</a>
            </div>
          </div>
        </div>
      </div>
		  <?php endwhile  ?>
      <div class="flex-this">
		  	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 1, 'offset' => 1  ); ?>
          <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
		 <?php endwhile  ?>
		  	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 1, 'offset' => 2  ); ?>
          <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="card-post_item_two">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="card-post_text">
              <p><?php the_archive_title() ?></p>
              <h4><?php the_title(); ?></h4>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>
              </div>
            </div>
          </div>
		  	 <?php endwhile  ?>
        </div>
        <div class="flex-this">
        	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 1, 'offset' => 3  ); ?>
          <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
		 <?php endwhile  ?>
           	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 1, 'offset' => 4  ); ?>
          <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="card-post_item_two">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="card-post_text">
              <p><?php the_archive_title() ?></p>
              <h4><?php the_title(); ?></h4>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>
              </div>
            </div>
          </div>
		  	 <?php endwhile  ?>
          </div>
        </div>
        <div class="card-post-right">
 	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'offset' => 5  ); ?>
          <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="card-post_item_two">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.png">
            <div class="card-post_text">

              <p>AVENTURA</p>
              <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. </h6>
              <div class="btn_direc">
                <div class="btn_custom3">
                  <a href="">LEER MÁS</a>
                </div>

              </div>
            </div>
          </div>
			 <?php endwhile  ?>
         

        </div>
      </div>
    </section>
<section class="news"> 
  <div class="text_news"> 
    <h3>  GET THE BEST NEWS <br> ABOUT OUR BRAND</h3>
   <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat.  </p>
   <div class="btn_custom"> 
   <a href="#">SUBSCRIBE</a> 
   </div>
  </div>
</section>

 <?php get_footer(); ?>

