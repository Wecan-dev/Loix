<?php get_header(); 
if (is_user_logged_in()){ ?>
	<div class="container main-wishlist__content">
		 <?php echo do_shortcode('[yith_wcwl_wishlist]'); ?>
</div>
 
<?php }  else { ?>
<?php  echo do_shortcode('[yith_wcwl_wishlist]'); ?>  
<section class="padding-left-right">
<div class="woocommerce ">
  <div class="woocommerce-notices-wrapper">
    <div class="woocommerce-message" role="alert">
      You must be logged in to wishlist.  
    </div>  
  </div>  
  <p class="return-to-shop">
    <a class="button wc-backward" href="<?php echo get_home_url() ?>/my-account">
      Sign In   </a>
  </p>
</div>
<dir class="wishlist_title"></dir>
</section>
<?php } ?>

<?php get_footer(); ?>