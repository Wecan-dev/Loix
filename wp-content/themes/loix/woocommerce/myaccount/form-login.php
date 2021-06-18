<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>


<?php endif; ?>

		
<?php if ($_GET["create"] != 'account') { ?>
	<section class="register">
    <div class="register_form ">

		<div class="login-icon" >
			        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user.png">

		</div>
      <p class="login-text">
        

        Crea una cuenta para agailizar las futuras compras, hacer un seguimineto del <br> historial de pedidos y recibir correos electrónicos, descuentos, ofertas <br> especiales</p>
	<form class="woocommerce-form woocommerce-form-login login" method="post">
		
			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<!-- <label for="username"><?php// esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
				<input placeholder="<?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<!-- <label for="password"><?php //esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
				<input placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<div class="login-flex" >
					<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
						<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
					</label>
					<p class="woocommerce-LostPassword lost_password">
					<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Forgot your password', 'woocommerce' ); ?></a>
				</p>
				</div>
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<button type="submit" class="btn-login" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>">iniciar sesión</button>

            <p class="woocommerce-in-account create-account "><a href="?create=account">Crear una cuenta<i style="color: #000" class="fa fa-angle-right" aria-hidden="true"></i></a></p>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>
      
  
		
<?php } ?>  

</section>
<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<?php if ($_GET["create"] == 'account') { ?>
	<section class="register">
    <div class="register_form">

      <div class="login-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user.png">
    </div>
		<h2 class="login-title" > 
			Registro
		</h2>
		  <form method="post" class="woocommerce-form woocommerce-form-register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
			
			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<input placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<input placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				
					<input placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>"  type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-FormRow form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="btn-login" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
			</p>       
            <p class="woocommerce-in-account create-account"><a href="?create=">De regreso a iniciar sesión <i style="color: #000" class="fa fa-angle-right" aria-hidden="true"></i></a></p>


			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>
      

</div>
<?php } ?>
<?php endif; ?>
</section>
		<style>
		
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
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

