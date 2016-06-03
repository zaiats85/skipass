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
		<span class="modal-trigger mdl-badge" data-badge="<?php echo WC()->cart->get_cart_contents_count() ?>">
			<img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
		</span>
	</label>
	<div class="modal" >
		<input class="modal-state" id="modal-1" type="checkbox" />
		<div class="modal-fade-screen">
			<div class="modal-inner">
				<div class="modal-close" for="modal-1"></div>
				<p class="modal-intro">
                	<?php wc_get_template( 'cart/cart.php' );?>
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
