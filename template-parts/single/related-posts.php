<?php

$cats = get_the_terms($post->ID, 'category');
$cats = wp_list_pluck($cats, 'slug');

if (empty($cats)) {
    $cats = [''];
}

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'post__not_in'   => [get_the_ID()],
    'post_status'    => 'publish',
);

$tax_query = array(
    array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => $cats,
    )
);
$args['tax_query'] = $tax_query;

$query_obj   = new WP_Query($args);
$total_count = $query_obj->found_posts;
?>
<?php if (!empty($total_count)) : ?>
    <div class="wcl-related-posts">
        <div class="data-container wcl-container">
            <h2 class="data-title">
                <span>Related </span> Content
            </h2>

            <?php if ($query_obj->have_posts()) : ?>
                <div class="data-list-out">
                    <div class="data-list swiper">
                        <div class="data-list-inner swiper-wrapper">
                            <?php while ($query_obj->have_posts()) : $query_obj->the_post(); ?>
                                <?php
                                $image = get_the_post_thumbnail($post->ID, 'full');
                                ?>
                                <div class="data-item swiper-slide <?php echo 'post-' . $post->ID; ?>">
                                    <a href="<?php echo get_permalink(); ?>" class="data-item-inner">
                                        <?php if (!empty($image)) : ?>
                                            <div class="data-item-img">
                                                <?php echo $image; ?>
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>

                    <div class="data-list-nav">
                        <div class="data-list-nav-btn mod-prev">
                            <span class="icon-arrow-right"></span>
                        </div>

                        <div class="data-list-nav-btn mod-next">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>