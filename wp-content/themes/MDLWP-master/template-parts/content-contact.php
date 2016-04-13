<?php
/**
 * Template part for contact page.
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

<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



        <div class="mdl-card__media" style="<?php echo $color . $bg . $height; ?> ">
            <header>
                <?php the_title( sprintf( '<h3 style="%s"> ', $title_color, '</h3>' )); ?>
            </header><!-- .entry-header -->
        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col google-map">
                <h3><?php echo "Location" ?></h3>
                <?php echo do_shortcode('[wpgmza id="1"]'); ?>
            </div>


            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--12-col-phone">
                <div class="call-us">
                    <h3><?php echo "Address";?></h3>
                    <p>
                        <span>Україна </span><br>
                        м. Івано-Франківськ 76018 <br>
                        вул. Лепкого 19Б <br>
                        <i class="fa fa-phone"></i> +38 (0342) 752441
                    </p>
                </div>

                <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-phone">
                    <h3><?php echo "Робочі години" ;?></h3>
                    <table class="mdl-data-table mdl-js-data-table">
                        <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">День</th>
                            <th class="mdl-data-table__cell--non-numeric">Години</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Понеділок</td>
                            <td class="mdl-data-table__cell--non-numeric">з 8.00 до 20.00</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Вівторок</td>
                            <td class="mdl-data-table__cell--non-numeric">з 8.00 до 20.00</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Середа</td>
                            <td class="mdl-data-table__cell--non-numeric">з 8.00 до 20.00</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Четвер</td>
                            <td class="mdl-data-table__cell--non-numeric">з 8.00 до 20.00</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Пятниця</td>
                            <td class="mdl-data-table__cell--non-numeric">з 8.00 до 20.00</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Субота</td>
                            <td class="mdl-data-table__cell--non-numeric">з 10.00 до 18.00</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Неділя</td>
                            <td class="mdl-data-table__cell--non-numeric">Вихідний</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--12-col-phone">
                <h3 class="panel-title"><i class="fa fa-envelope"></i> Feedback</h3>
                <p> Do not hesitate to send your questions. School administraion are glad to any feedback. </p>
                <?php echo do_shortcode('[contact-form-7 id="77" title="Contact form 1"]'); ?>
            </div>

        </div>
    </article><!-- #post-## -->
</div> <!-- .mdl-cell -->


