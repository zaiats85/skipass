<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
        <ul class="accordion-tabs">
            <?php
            $taxonomy     = 'product_cat';
            $orderby      = 'name';
            $show_count   = 0;      // 1 for yes, 0 for no
            $pad_counts   = 0;      // 1 for yes, 0 for no
            $hierarchical = 1;      // 1 for yes, 0 for no
            $title        = '';
            $empty        = 0;

            $args = array(
                'taxonomy'     => $taxonomy,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
            );

            $all_categories = get_categories($args); // retreive all shop categories

            foreach ($all_categories as $category) :
                if($category->category_parent == 0) :
                    $category_id = $category->term_id; ?>
                    <li class="tab-header-and-content <?php echo $category->slug; ?>">
                    <a href="javascript:void(0)" class="tab-link">
                        <?php echo $category->name ?>
                    </a>
                    <div class="tab-content">
                        <div class="mdl-grid">
                        <?php $args2 = array(
                            'taxonomy'     => $taxonomy,
                            'child_of'     => 0,
                            'parent'       => $category_id,
                            'orderby'      => $orderby,
                            'show_count'   => $show_count,
                            'pad_counts'   => $pad_counts,
                            'hierarchical' => $hierarchical,
                            'title_li'     => $title,
                            'hide_empty'   => $empty
                        );
                        $sub_categories = get_categories($args2);
                        switch ($category->name) :
                            case "Абонементи" :
                                if($sub_categories) :
                                    foreach($sub_categories as $sub_category) : ?>
                                        <div class="mdl-cell mdl-cell--4-col">
                                            <table class="mdl-data-table mdl-js-data-table">
                                                <?php $ordered_description = explode('*' , $sub_category->description); ?>
                                                <thead>
                                                    <tr>
                                                        <td colspan="3" ">
                                                            <h5><?php echo $sub_category->name;?></h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <?php echo $ordered_description[0]; ?>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $subcategory_products = new WP_Query(array('post_type' => 'product', 'product_cat' => $sub_category->slug ));
                                                if($subcategory_products->have_posts()): ?>
                                                    <tbody>
                                                    <?php while ($subcategory_products->have_posts()) : $subcategory_products->the_post(); ?>
                                                        <?php $product_ID = get_the_ID(); ?>
                                                        <?php $ajax_url = "/product-category/" . $category->slug . "/?add-to-cart=" . $product_ID; ?>
                                                        <tr>
                                                            <td class="mdl-data-table__cell--non-numeric"><?php the_title() ; ?></td>
                                                            <td class="mdl-data-table__cell--non-numeric"><?php  echo  get_post_meta( get_the_ID(), '_regular_price', true); ?> грн</td>
                                                            <td><a rel="nofollow" href=<?php echo $ajax_url; ?> data-product_id=<?php echo $product_ID?> class="product_type_simple add_to_cart_button ajax_add_to_cart"><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></a></td>
                                                        </tr>
                                                    <?php endwhile;?>
                                                    </tbody>
                                                    <tfoot>
                                                        <td colspan="3"><img title="snow" src="/wp-content/themes/MDLWP-master/images/snow.png" alt="snow">
                                                            <span><?php echo $ordered_description[1]; ?></span>
                                                        </td>
                                                    </tfoot>
                                                <?php endif; wp_reset_query(); ?>
                                            </table>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif;
                                break;
                            case "Прокат": ?>
                                <?php if($sub_categories) :
                                    foreach($sub_categories as $sub_category) : ?>
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <table class="mdl-data-table mdl-js-data-table">
                                            <thead>
                                                <tr>
                                                    <td colspan="3" ">
                                                        <h5><?php echo $sub_category->name;?></h5>
                                                        <span><?php echo $sub_category->description; ?></span>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <?php
                                            $subcategory_products = new WP_Query(array('post_type' => 'product', 'product_cat' => $sub_category->slug ));
                                            if($subcategory_products->have_posts()):    ?>
                                                <tbody>
                                                <?php while ($subcategory_products->have_posts()) : $subcategory_products->the_post(); ?>
                                                    <?php $product_ID = get_the_ID(); ?>
                                                    <?php $ajax_url = "/product-category/" . $category->slug . "/?add-to-cart=" . $product_ID; ?>
                                                    <tr>
                                                        <td class="mdl-data-table__cell--non-numeric"><?php the_title() ; ?><span> <?php echo apply_filters( 'the_content', get_post_field('post_content', $product_ID) ); ?></span></td>
                                                        <?php if(!empty(get_post_meta( get_the_ID(), '_regular_price', true))): ?>
                                                            <td class="mdl-data-table__cell--non-numeric"><?php  echo  get_post_meta( get_the_ID(), '_regular_price', true); ?> грн</td>
                                                            <td><a rel="nofollow" href=<?php echo $ajax_url; ?> data-product_id=<?php echo $product_ID?> class="product_type_simple add_to_cart_button ajax_add_to_cart"><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></a></td>
                                                        <?php endif; ?>

                                                    </tr>
                                                <?php endwhile;?>
                                                </tbody>
                                            <?php endif; wp_reset_query(); ?>
                                        </table>
                                    </div>
                                    <?php endforeach; ?>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <table class="mdl-data-table mdl-js-data-table">
                                                <td colspan="3">
                                                    <img title="snow" src="/wp-content/themes/MDLWP-master/images/snow.png" alt="snow">
                                                    <?php echo $category->description; ?>
                                                </td>
                                            </table>
                                        </div>
                                    <?php endif; ?>
                                <?php break;
                            case "Клубні карти": ?>
                                <?php if($sub_categories) :
                                    foreach($sub_categories as $sub_category) : ?>
                                        <?php if($sub_category->name != "Поповнення клубних карт") : ?>
                                            <div class="mdl-cell mdl-cell--4-col">
                                                <table class="mdl-data-table mdl-js-data-table">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="3" ">
                                                                <h5><?php echo $sub_category->name;?></h5>
                                                            </td>
                                                        </tr>
                                                    <?php if(!empty($sub_category->description)) : ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                <?php $ordered_description = explode('*' , $sub_category->description); ?>
                                                                <?php foreach ($ordered_description as $desc_item): ?>
                                                                    <img src="/wp-content/themes/MDLWP-master/images//tick-1.png"/>
                                                                    <div class="club-cards-description">
                                                                        <span>
                                                                            <?php echo $desc_item?>
                                                                        </span>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    </thead>
                                                    <?php
                                                    $subcategory_products = new WP_Query(array('post_type' => 'product', 'product_cat' => $sub_category->slug ));
                                                    if($subcategory_products->have_posts()):    ?>
                                                        <tbody>
                                                        <?php while ($subcategory_products->have_posts()) : $subcategory_products->the_post(); ?>
                                                            <?php $product_ID = get_the_ID(); ?>
                                                            <?php $ajax_url = "/product-category/" . $category->slug . "/?add-to-cart=" . $product_ID;?>
                                                            <thead >
                                                                <tr>
                                                                    <th colspan="3"><?php the_title();?></th>
                                                                </tr>
                                                            </thead>
                                                            <tr>
                                                                <td class="mdl-data-table__cell--non-numeric"><?php  echo  get_post_meta( get_the_ID(), '_regular_price', true); ?> грн</td>
                                                                <td><a rel="nofollow" href=<?php echo $ajax_url; ?> data-product_id=<?php echo $product_ID?> class="product_type_simple add_to_cart_button ajax_add_to_cart"><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></a></td>
                                                            </tr>
                                                        <?php endwhile;?>
                                                        </tbody>
                                                    <?php endif; wp_reset_query(); ?>
                                                </table>
                                            </div>
                                        <?php else : ?>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <table class="mdl-data-table mdl-js-data-table">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="3" ">
                                                                <h5><?php echo $sub_category->name;?></h5>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <div class="mdl-cell mdl-cell--12-col horizontal-category-layout">
                                                    <?php $subcategory_products = new WP_Query(array('post_type' => 'product', 'product_cat' => $sub_category->slug )); ?>
                                                    <?php if($subcategory_products->have_posts()):?>
                                                        <?php while ($subcategory_products->have_posts()) : $subcategory_products->the_post(); ?>
                                                            <?php $product_ID = get_the_ID(); ?>
                                                            <?php $ajax_url = "/product-category/" . $category->slug . "/?add-to-cart=" . $product_ID;?>
                                                            <div class="mdl-cell mdl-cell--4-col">
                                                                <table>
                                                                    <tr>
                                                                        <td class="mdl-data-table__cell--non-numeric"><?php the_title();?></td>
                                                                        <td class="mdl-data-table__cell--non-numeric"><?php  echo  get_post_meta( get_the_ID(), '_regular_price', true); ?> грн</td>
                                                                        <td><a rel="nofollow" href=<?php echo $ajax_url; ?> data-product_id=<?php echo $product_ID?> class="product_type_simple add_to_cart_button ajax_add_to_cart"><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></a></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        <?php endwhile;?>
                                                    <?php endif; wp_reset_query(); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <?php break;
                            case "Баланс абонемента": ?>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <table class="mdl-data-table mdl-js-data-table">
                                        <thead>
                                        <tr>
                                            <td colspan="4" ">
                                                <h4>Введіть номер картки з дефісами:</h4>
                                                <div class="mdl-spinner mdl-js-spinner is-active"></div>
                                                <form>
                                                    <div class="mdl-textfield mdl-js-textfield">
                                                        <input class="mdl-textfield__input" type="numer" id="skipass-ballance" name="card_number">
                                                        <label class="mdl-textfield__label" for="skipass-ballance">01-2167-21-154156</label>
                                                    </div>
                                                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-skipass-ballance">
                                                        Отримати
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        </thead>
                                        <tbody class="skipass-ballance-result">
                                            <tr>
                                                <td colspan="4"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php break;
                        endswitch; ?>
                        </div>
                    </div>
                <?php endif; ?>
                </li>
            <?php endforeach;?>
        <ul class="products">