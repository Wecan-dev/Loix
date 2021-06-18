<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>	
<?php get_header();?>

	<?php echo do_shortcode('[woocommerce_my_account]'); ?>


<style>
		.header__main {
				background: #000;
			}
	.woocommerce {

		padding-top: 97px
	}
	@media (min-width: 0px) and (max-width: 767px) {
			.woocommerce {
		padding-top: 80px;
		}}
		@media (min-width: 768px) and (max-width: 997px) {
				.woocommerce {
		padding-top: 97px;
	}
		}
	
</style>

<?php get_footer();?>


