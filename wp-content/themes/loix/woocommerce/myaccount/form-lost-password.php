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

      <div class="title_register">
        <i class="fa fa-user" style="    color: #0f4388; margin-bottom: 5%;" aria-hidden="true"></i>

        <h4><span style="color: #000; font-weight: bold;">OLVIDASTE TU CONTRASEÑA</span></h4>
        <p>¿perdiste tu contraseña? Por favor, introduzca su nombre de <br> usuario o su dirección de correo electrónico. Recibiras un enlance <br> para crear una nueva contraseña por correo electrónico  </p>
      </div>
    
        <form method="post" class="woocommerce-ResetPassword lost_reset_password">

	<?php // @codingStandardsIgnoreLine ?>

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<input placeholder="Correo electrónico" class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" />
	</p>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

	<p class="woocommerce-form-row form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" class="woocommerce-Button button btn-black" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
	</p>

	<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

</form>
        

      </div>
    </section>


<?php
do_action( 'woocommerce_after_lost_password_form' );
