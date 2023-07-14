<?php

$logo = get_field('logo', 'option');
$logo = wp_get_attachment_image($logo, 'full');

$image       = get_field('image');
$image       = wp_get_attachment_image($image, 'image-size-4');
$group       = get_field('group');
$group_title = $group['title'];
$group_text  = $group['text'];

$list = get_field('list');

if (empty($list)) {
    $list = [''];
}

$args = array(
    'post_type'   => 'post',
    'post__in'    => $list,
    'orderby'     => 'post__in',
    'post_status' => 'publish',
);

$query_obj   = new WP_Query($args);
$total_count = $query_obj->found_posts;

?>
<!-- wcl-block-5 - Case Studies -->
<div class="wcl-block-5">
    <div class="data-container wcl-container">
        <div class="data-row">
            <div class="data-col">
                <?php if (!empty($image)) : ?>
                    <div class="data-img">
                        <?php echo $image; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="data-col">
                <?php if (!empty($group_title)) : ?>
                    <div class="data-title">
                        <?php echo $group_title; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($group_text)) : ?>
                    <div class="data-text">
                        <?php echo $group_text; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if ($query_obj->have_posts()) : ?>
        <div class="data-container wcl-container mod-two">
            <div class="data-list">
                <?php while ($query_obj->have_posts()) : $query_obj->the_post(); ?>
                    <?php
                    global $post;
                    $image = get_the_post_thumbnail($post->ID, 'image-size-5');
                    ?>
                    <div class="data-item">
                        <a href="<?php echo get_permalink(); ?>" class="data-item-inner">
                            <?php if (!empty($logo)) : ?>
                                <div class="data-item-logo">
                                    <?php echo $logo; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($image)) : ?>
                                <div class="data-item-img">
                                    <?php echo $image; ?>
                                </div>
                            <?php endif; ?>

                            <div class="data-item-link">
                                <div class="data-item-link-inner">
                                    Read Case Study

                                    <span class="icon-arrow-long-right"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>