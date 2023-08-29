<?php

get_header();

$author_id   = get_post_field('post_author', get_the_ID());
$author_data = get_userdata($author_id);

$subtitle     = get_field('subtitle');
$time_to_read = get_field('time_to_read');

$image = get_the_post_thumbnail_url($post->ID, 'full');

$category = get_the_terms($post->ID, 'category');

$social = get_field('social', 'option');
?>
<div class="wcl-to-top wcl-button mod-border">
    TO TOP
    <span>>></span>
</div>

<div class="wcl-single-sc-1">
    <div class="data-container wcl-container">
        <div class="data-inner" style="background-image: url(<?php echo $image; ?>);">
            <?php the_breadcrumb(); ?>

            <?php if (!empty($category)) : ?>
                <div class="data-cat ">
                    <a href="<?php echo get_term_link((int)$category[0]->term_id); ?>" class="wcl-button mod-border">
                        <?php echo $category[0]->name; ?>
                    </a>
                </div>
            <?php endif; ?>

            <h1 class="data-title">
                <?php echo get_the_title(); ?>
            </h1>

            <?php if (!empty($subtitle)) : ?>
                <div class="data-subtitle">
                    <?php echo $subtitle; ?>
                </div>
            <?php endif; ?>

            <div class="data-meta">
                <div class="data-meta-item">
                    <div class="data-meta-author">
                        <?php echo 'BY: ' . $author_data->display_name; ?>
                    </div>
                </div>

                <div class="data-meta-item">
                    <div class="data-meta-date">
                        <?php
                        $post_date = strtotime($post->post_date);
                        $formatted_date = date("F d, Y", $post_date);
                        ?>
                        <?php echo $formatted_date; ?>
                    </div>
                </div>

                <div class="data-meta-item">
                    <?php if (!empty($time_to_read)) : ?>
                        <div class="data-meta-time-to-read">
                            <?php echo $time_to_read . ' read'; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wcl-single-sc-2">
    <div class="data-container wcl-container">
        <div class="data-row">
            <div class="data-col">
                <div class="data-content">
                    <?php the_content(); ?>
                </div>
            </div>

            <?php
            $social = get_field('social', 'option');
            $social_new = [];

            foreach ($social as $item) {
                preg_match('/<span class="icon-([A-Za-z0-9]+)">/', $item['icon'],  $matches);
                $class = $matches[1];
                $social_new[$class] = $item;
            }
            ?>
            <div class="data-col">
                <?php if (!empty($social_new)) : ?>
                    <div class="data-social">
                        <?php if (!empty($social_new['tiktok'])) : ?>
                            <?php
                            $item = $social_new['tiktok'];
                            ?>
                            <div class="data-social-item">
                                <?php if (!empty($item)) : ?>
                                    <a href="<?php echo $item['link']; ?>" class="data-social-item-link" target="_blank">
                                        <?php if (!empty($item['icon'])) : ?>
                                            <?php echo $item['icon']; ?>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($social_new['twitter'])) : ?>
                            <?php
                            $item = $social_new['twitter'];
                            ?>
                            <div class="data-social-item">
                                <?php if (!empty($item)) : ?>
                                    <a href="<?php echo $item['link']; ?>" class="data-social-item-link" target="_blank">
                                        <?php if (!empty($item['icon'])) : ?>
                                            <?php echo $item['icon']; ?>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($social_new['linkedin'])) : ?>
                            <?php
                            $item = $social_new['linkedin'];
                            ?>
                            <div class="data-social-item">
                                <?php if (!empty($item)) : ?>
                                    <a href="<?php echo $item['link']; ?>" class="data-social-item-link" target="_blank">
                                        <?php if (!empty($item['icon'])) : ?>
                                            <?php echo $item['icon']; ?>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($social_new['facebook'])) : ?>
                            <?php
                            $item = $social_new['facebook'];
                            ?>
                            <div class="data-social-item">
                                <?php if (!empty($item)) : ?>
                                    <a href="<?php echo $item['link']; ?>" class="data-social-item-link" target="_blank">
                                        <?php if (!empty($item['icon'])) : ?>
                                            <?php echo $item['icon']; ?>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($social_new['instagram'])) : ?>
                            <?php
                            $item = $social_new['instagram'];
                            ?>
                            <div class="data-social-item">
                                <?php if (!empty($item)) : ?>
                                    <a href="<?php echo $item['link']; ?>" class="data-social-item-link" target="_blank">
                                        <?php if (!empty($item['icon'])) : ?>
                                            <?php echo $item['icon']; ?>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="data-sidebar">
                    <div class="data-widget">
                        <form class="data-search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="text" name="s" placeholder="I’m Looking for..." value="<?php echo esc_attr(get_search_query()); ?>" required>

                            <button type="submit">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/img/search-2.svg'; ?>" alt="img">
                            </button>
                        </form>
                    </div>

                    <div class="data-widget">
                        <div class="data-widget-1">
                            <div class="data-widget-1-inner">
                                <div class="data-widget-1-title">
                                    What it is
                                </div>

                                <div class="data-widget-1-list">
                                    <div class="data-widget-1-item">
                                        Pros & Cons
                                    </div>

                                    <div class="data-widget-1-item">
                                        How Much it Costs
                                    </div>

                                    <div class="data-widget-1-item">
                                        Whether it’s worth it
                                    </div>

                                    <div class="data-widget-1-item">
                                        Whether it’s worth it
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="data-widget">
                        <div class="data-widget-2">
                            <div class="data-widget-2-title">
                                Get a free SEO audit
                            </div>

                            <div class="data-widget-2-form">
                                <input type="text" placeholder="Your Site URL">
                                <input type="submit" value="See Report">
                            </div>
                        </div>
                    </div>

                    <div class="data-widget">
                        <?php get_template_part('template-parts/acf-blocks/related-posts'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="wcl-single-sc-3">
    <div class="data-container wcl-container">
        <div class="data-row">
            <div class="data-col">
                <div class="data-inner">

                    <!-- <div class="wcl-cpn-b1-author">

            </div> -->

                    <div class="data-author">
                        <div class="data-author-avatar">
                            <?php echo get_avatar(wp_get_current_user()->ID, 90); ?>
                        </div>

                        <div class="data-author-info">
                            <div class="data-author-name">
                                <?php echo $author_data->display_name; ?>
                            </div>

                            <div class="data-author-desc">
                                Business listings get your business information placed in over 100 places online. This enhances your local presence, increases business awareness
                            </div>
                        </div>
                    </div>

                    <?php
                    $cats = get_the_terms($post->ID, 'category');
                    ?>
                    <?php if (!empty($cats)) : ?>
                        <div class="data-cats">
                            <?php foreach ($cats as $key => $cats_item) : ?>
                                <?php
                                if ($key > 3) {
                                    break;
                                }
                                ?>
                                <div class="data-cats-item">
                                    <a href="<?php echo get_term_link((int)$cats_item->term_id); ?>">
                                        <?php echo $cats_item->name; ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="data-share">
                        <div class="data-share-label">
                            Share
                        </div>

                        <div class="data-share-list">
                            <div class="data-share-list-item">
                                <a href="https://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>" class="data-share-list-item-link" target="_blank">
                                    <span class="icon-twitter"></span>
                                </a>
                            </div>

                            <div class="data-share-list-item">
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink(); ?>" class="data-share-list-item-link" target="_blank">
                                    <span class="icon-linkedin"></span>
                                </a>
                            </div>

                            <div class="data-share-list-item">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" class="data-share-list-item-link" target="_blank">
                                    <span class="icon-facebook"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('template-parts/single/related-posts'); ?>

<?php

get_footer();

?>