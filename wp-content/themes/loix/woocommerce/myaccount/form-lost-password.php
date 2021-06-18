<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>
 <section class="register">
    <div class="register_form container">

      <div class="login-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user.png">

      </div>

        <h4 class="login-title" >OLVIDASTE TU CONTRASEÑA</h4>
        <p class="login-text">¿perdiste tu contraseña? Por favor, introduzca su nombre de <br> usuario o su dirección de correo electrónico. Recibiras un enlance <br> para crear una nueva contraseña por correo electrónico  </p>
    
        <form method="post" class="woocommerce-ResetPassword lost_reset_password">

	<?php // @codingStandardsIgnoreLine ?>

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<input placeholder="Correo electrónico" class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" />
	</p>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

	<p class="woocommerce-form-row form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" class="btn-login" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
	</p>

	<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

</form>
        

      </div>
    </section>
<style>
	.login-text {
		font-size: 15px;
	}
	
		
			header {
				background: #000;
			}
			.dgwt-wcas-search-wrapp .dgwt-wcas-sf-wrapp input[type=search].dgwt-wcas-search-input, .dgwt-wcas-search-wrapp .dgwt-wcas-sf-wrapp input[type=search].dgwt-wcas-search-input:hover, .dgwt-wcas-search-wrapp .dgwt-wcas-sf-wrapp input[type=search].dgwt-wcas-search-input:focus, .dgwt-wcas-search-wrapp  {
				background-color: #000!important;
			}
				.woocommerce {
	  background-color: #d8d8d8;
			}
	

</style>

<?php
do_action( 'woocommerce_after_lost_password_form' );
