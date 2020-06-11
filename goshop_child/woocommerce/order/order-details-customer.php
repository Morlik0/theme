<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>
<section class="woocommerce-customer-details">

	<?php if ( $show_shipping ) : ?>

	<section class="row">
		<div class="col-md-6">

        	<?php endif; ?>
        
        	<h5><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></h5>
        
        	<address>
        		<?php echo wp_kses_post( $order->get_formatted_billing_address( __( 'N/A', 'woocommerce' ) ) ); ?>
            </address>
        
        	

		</div>
        
        <?php if ( $show_shipping ) : ?>
    		<div class="col-md-6">
    			<h5><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h5>
    			<address>
    				<?php echo wp_kses_post( $order->get_formatted_shipping_address( __( 'N/A', 'woocommerce' ) ) ); ?>
    			</address>
    		</div>
        <?php endif; ?>

	</section>

	

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</section>
