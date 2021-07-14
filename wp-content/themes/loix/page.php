<?php
/*
 * Template Name: A Static Page
 */
get_header(); ?>

<section class="terminos ">
<div class="padding-right-left" >
	<div class="terminos-flex" >
 <h3><?php the_title(); ?></h3>		
	</div>
<div class="terminos-items" >
	
<?php the_content(); ?>
	</div>

	
	</div>
</section>
<style>
	header {
		background: #000;
	}
</style>
 <?php get_footer(); ?>