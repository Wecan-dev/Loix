<?php get_header(); 
if (is_user_logged_in()){ 
  echo do_shortcode('[yith_wcwl_wishlist]');
} 
else { ?>
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
<style type="text/css">
  .border-cart{
    display: none;
  }
</style>
<?php } ?>

<?php get_footer(); ?>