<?php

$group = get_field('group');
$title = $group['title'];
$text  = $group['text'];
$image = get_field('image');
$image = wp_get_attachment_image($image, 'image-size-1');
?>
<!-- wcl-block-1 - Hero Header -->
<div class="wcl-block-1">
    <div class="data-container wcl-container">
        <div class="data-row">
            <div class="data-col">
                <?php the_breadcrumb(); ?>

                <?php if (!empty($title)) : ?>
                    <div class="data-title">
                        <?php echo $title; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($text)) : ?>
                    <div class="data-text">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="data-col">
                <?php if (!empty($image)) : ?>
                    <div class="data-img">
                        <?php echo $image; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>