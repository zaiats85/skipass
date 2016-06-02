<?php
/**
 * The template part for displaying the main navigation
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MDLWP
 */

?>

<div class="mdl-layout__header-row">
  	<!-- Title -->
  	<span class="language-toggle">
  		<a href="javascript:void(0)"> укр </a>
			<span><?php echo ' | '; ?></span>
		<a href="javascript:void(0)"> рус </a>
  	</span>


	<!-- Add spacer, to align navigation to the right -->
	<div class="mdl-layout-spacer"></div>
	<label for="modal-1">
		<span class="modal-trigger mdl-badge" data-badge="4">
			<img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
		</span>
	</label>
	<div class="modal" >
		<input class="modal-state" id="modal-1" type="checkbox" />
		<div class="modal-fade-screen">
			<div class="modal-inner">
				<div class="modal-close" for="modal-1"></div>
				<h1>Cart</h1>
				<p class="modal-intro">
                <form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

                    <?php do_action( 'woocommerce_before_cart_table' ); ?>

                    <table class="shop_table shop_table_responsive cart" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
                            <th class="product-price"><?php _e( 'Price', 'woocommerce' ); ?></th>
                            <th class="product-quantity"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
                            <th class="product-subtotal"><?php _e( 'Total', 'woocommerce' ); ?></th>
                            <th class="product-remove">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                        <?php
                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                            $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                ?>
                                <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

                                    <td class="product-name" data-title="<?php _e( 'Product', 'woocommerce' ); ?>">
                                        <?php
                                        if ( ! $_product->is_visible() ) {
                                            echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
                                        } else {
                                            echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $_product->get_permalink( $cart_item ) ), $_product->get_title() ), $cart_item, $cart_item_key );
                                        }

                                        // Meta data
                                        echo WC()->cart->get_item_data( $cart_item );

                                        // Backorder notification
                                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                            echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
                                        }
                                        ?>
                                    </td>

                                    <td class="product-price" data-title="<?php _e( 'Price', 'woocommerce' ); ?>">
                                        <?php
                                        echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                                        ?>
                                    </td>

                                    <td class="product-quantity" data-title="<?php _e( 'Quantity', 'woocommerce' ); ?>" data-product_id="<?php echo esc_attr( $product_id );?>">

                                        <?php
                                        if ( $_product->is_sold_individually() ) {
                                            $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                        } else {
                                            $product_quantity = woocommerce_quantity_input( array(
                                                'input_name'  => "cart[{$cart_item_key}][qty]",
                                                'input_value' => $cart_item['quantity'],
                                                'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
                                                'min_value'   => '1',
                                            ), $_product, false );
                                        }

                                        echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                                        ?>

                                    </td>

                                    <td class="product-subtotal" data-title="<?php _e( 'Total', 'woocommerce' ); ?>">
                                        <?php
                                        echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
                                        ?>
                                    </td>

                                    <td class="product-remove">
                                        <a href="javascript:void(0)" class="remove"><span class="remove-product" data-product_sku = "<?php echo esc_attr($_product->get_sku()); ?>" data-product_id="<?php echo esc_attr( $product_id );?>">&times;</span></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }

                        do_action( 'woocommerce_cart_contents' );
                        ?>

                        <?php do_action( 'woocommerce_after_cart_contents' ); ?>
                        </tbody>
                    </table>

                    <?php do_action( 'woocommerce_after_cart_table' ); ?>

                </form>

                <div class="cart-collaterals">

                    <?php do_action( 'woocommerce_cart_collaterals' ); ?>

                </div>

                <?php do_action( 'woocommerce_after_cart' ); ?>

                </p>
			</div>
		</div>
	</div>


		<?php
		$args = array(
			'theme_location' => 'primary',
			'container'       => 'nav',
			'items_wrap' => '%3$s',
			'container_class' => 'mdl-navigation mdl-layout--large-screen-only',
			'walker' => new MDLWP_Nav_Walker()
		);

		if (has_nav_menu('primary')) {
			wp_nav_menu($args);
		}
		?>

</div>
