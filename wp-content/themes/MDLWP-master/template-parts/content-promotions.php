<?php
/**
 * The template used for displaying page content in page.php
 * Runs over Promotion category which is now wih ID = 34.
 * Do not change the ID of Promotion category. If so, you will break the template logic.
 * @package MDLWP
 */

?>

<?php
// Gets the stored background color value
$color_value = get_post_meta( get_the_ID(), 'mdlwp-bg-color', true );
// Checks and returns the color value
$color = (!empty( $color_value ) ? 'background-color:' . $color_value . ';' : '');

// Gets the stored title color value
$title_color_value = get_post_meta( get_the_ID(), 'mdlwp-title-color', true );
// Checks and returns the color value
$title_color = (!empty( $title_color_value ) ? 'color:' . $title_color_value . ';' : '');

// Gets the stored height value
$height_value = get_post_meta( get_the_ID(), 'mdlwp-height', true );
// Checks and returns the height value
$height = (!empty( $height_value ) ? 'height:' . $height_value . ';' : '');

// Gets the uploaded featured image
$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
// Checks and returns the featured image
$bg = (!empty( $featured_img ) ? "background-image: url('". $featured_img[0] ."');" : '');
?>

    <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp promotions-page" xmlns="http://www.w3.org/1999/html">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="mdl-card__media" style="<?php echo $color . $bg . $height; ?> ">
            <header>
                <?php the_title( sprintf( '<h3 style="%s"> ', $title_color, '</h3>' )); ?>
            </header><!-- .entry-header -->
        </div>
        <?php
        $args = array(
            'child_of'            => 34, //Id of Promotion category
            'current_category'    => 0,
            'depth'               => 0,
            'echo'                => 1,
            'exclude'             => '',
            'exclude_tree'        => '',
            'feed'                => '',
            'feed_image'          => '',
            'feed_type'           => '',
            'hide_empty'          => 0,
            'hide_title_if_empty' => false,
            'hierarchical'        => true,
            'order'               => 'ASC',
            'orderby'             => 'name',
            'separator'           => '<br />',
            'show_count'          => 0,
            'show_option_all'     => '',
            'show_option_none'    => __( 'No categories' ),
            'style'               => 'list',
            'taxonomy'            => 'category',
            'title_li'            => __( 'Categories' ),
            'use_desc_for_title'  => 1,
        ); ?>
        <?php $args2 = array(
            'posts_per_page'   => 10,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => '',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'post',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'author'	       => '',
            'post_status'      => 'publish',
            'suppress_filters' => true
        );
        ?>

        <div class="entry-content mdl-color-text--grey-600 mdl-card__supporting-text">

            <ul class="accordion promotions">
                <?php
                    $categories = get_categories( $args );
                    foreach($categories as $category) : ?>
                        <li>
                            <a href="javascript:void(0)" class="js-accordion-trigger"><?php echo $category->name;?><img src="/wp-content/themes/MDLWP-master/images/down.png" alt="down"></a>
                            <p class="excerpt-filled"><?php echo $category->description; ?></p>
                            <ul class="submenu">
                                <li>
                                    <?php
                                        query_posts('category_name='.$category->slug);
                                            while(have_posts()): the_post(); $do_not_duplicate = $post->ID;
                                                echo $post->post_content;
                                            endwhile;
                                        wp_reset_query();
                                    ?>
                                </li>
                            </ul>
                        </li>
                    <?php endforeach; ?>
            </ul>

        </div><!-- .entry-content -->
        <?php wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mdlwp' ),
            'after'  => '</div>',
        ) );
        ?>
    </article><!-- #post-## -->
</div> <!-- .mdl-cell -->


