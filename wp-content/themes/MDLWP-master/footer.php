<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package MDLWP
 */
?>
	<?php do_action( 'mdlwp_before_closing_content' ); ?>

	</div><!-- #content -->
   
		<footer class="mdl-mega-footer ">
			<div class="mdl-grid mdlwp-1170">

					<div class="mdl-cell mdl-cell--6-col  mdl-cell--12-col-tablet">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>

					<div class="mdl-cell mdl-cell--3-col  mdl-cell--12-col-tablet">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>

					<div class="mdl-cell mdl-cell--3-col  mdl-cell--12-col-tablet">
						<a href="http://skipass.loc/контакти/" target="_blank"><img src="/wp-content/themes/MDLWP-master/images/Mail.png" alt="contact"/></a>
						<a href="https://vk.com/club71072873" target="_blank"><img src="/wp-content/themes/MDLWP-master/images/Vk.png" alt="vkontakte"/></a>
						<a href="javascript:void(0)" target="_blank"><img src="/wp-content/themes/MDLWP-master/images/Facebook.png" alt="facebook"/></a>

					</div>

			</div>

			<?php
				$a = wp_get_sidebars_widgets();
			echo $a['footer-1'][1];
			?>


		<?php do_action( 'mdlwp_after_opening_footer' ); ?>

		 <?php get_template_part( 'template-parts/nav', 'footer' ); ?>

		<?php do_action( 'mdlwp_before_closing_footer' ); ?>

		</footer>

    </main> <!-- .mdl-layout__content -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php do_action( 'mdlwp_before_closing_body' ); ?>

</body>
</html>
