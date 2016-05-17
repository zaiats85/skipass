<?php
/**
 * The template used for displaying page content in page.php
 *
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

<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp need-to-know">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="mdl-card__media" style="<?php echo $color . $bg . $height; ?> ">
            <header>
                <?php the_title( sprintf( '<h3 style="%s"> ', $title_color, '</h3>' )); ?>
            </header><!-- .entry-header -->
        </div>

        <?php $args = array(
            'posts_per_page'   => 5,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => 'need-to-know',
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
            <div class="cards">
                <?php $posts_array = get_posts( $args );
                foreach ($posts_array as $num=>$item): ?>
                    <div class="card">
                        <div class="card-header">
                            <?php echo $item->post_title;?>
                        </div>
                        <div class="card-copy">
                            <p><?php echo $item->post_content; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div><!-- .entry-content -->
            <?php wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mdlwp' ),
                'after'  => '</div>',
            ) );
            ?>
    </article><!-- #post-## -->
</div> <!-- .mdl-cell -->


