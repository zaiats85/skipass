<?php
/**
 * Template Name: Promotions
 *
 * @package MDLWP
 */

get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main mdl-grid mdlwp-1170" role="main">

        <?php do_action( 'mdlwp_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'promotions' ); ?>

        <?php endwhile; // End of the loop. ?>

        <?php do_action( 'mdlwp_after_content' ); ?>
    </main><!-- #main -->

</div><!-- #primary -->


<?php get_footer(); ?>
