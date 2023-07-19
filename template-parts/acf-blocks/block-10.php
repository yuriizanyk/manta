<?php


$title = get_field('title');
?>
<!-- wcl-block-10 - Social Media -->
<div class="wcl-block-10">
    <div class="data-container wcl-container">
        <?php if (!empty($title)) : ?>
            <div class="data-title">
                <?php echo $title; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('social', 'option')) : ?>
            <div class="data-list swiper">
                <div class="data-list-inner swiper-wrapper">
                    <?php while (have_rows('social', 'option')) : the_row(); ?>
                        <?php
                        $icon = get_sub_field('icon');
                        $link = get_sub_field('link');
                        ?>
                        <?php if (!empty($link)) : ?>
                            <div class="data-item swiper-slide">
                                <a href="<?php echo $link; ?>" class="data-item-inner" target="_blank">
                                    <?php if (!empty($icon)) : ?>
                                        <?php echo $icon; ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>