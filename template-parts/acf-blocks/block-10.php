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
            <div class="data-list">
                <?php while (have_rows('social', 'option')) : the_row(); ?>
                    <?php
                    $icon = get_sub_field('icon');
                    $link = get_sub_field('link');
                    ?>
                    <div class="data-item">
                        <?php if (!empty($link)) : ?>
                            <a href="<?php echo $link; ?>" class="data-item-inner" target="_blank">
                                <?php if (!empty($icon)) : ?>
                                    <?php echo $icon; ?>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>