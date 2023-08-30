<?php


$cats = get_the_terms($post->ID, 'category');
$cats = wp_list_pluck($cats, 'slug');

if (empty($cats)) {
    $cats = [''];
}

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 4,
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
<div class="wcl-wdg2-related-posts">
    <div class="wdg2-container">
        <h2 class="wdg2-title">
            <span>Related </span> Articles
        </h2>

        <?php if ($query_obj->have_posts()) : ?>
            <div class="wdg2-list">
                <?php while ($query_obj->have_posts()) : $query_obj->the_post(); ?>
                    <div class="wdg2-item <?php echo 'post-' . $post->ID; ?>">
                        <a href="<?php echo get_permalink(); ?>" class="wdg2-item-inner">
                            <h3 class="wdg2-item-title">
                                <?php echo get_the_title(); ?>
                            </h3>
                        </a>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>