<?php

$title = get_field('title');
$image = get_field('image');
$image = wp_get_attachment_image($image, 'image-size-2');
$text  = get_field('text');
?>
<!-- wcl-block-2 - Award-Winning -->
<div class="wcl-block-2">
    <div class="data-container wcl-container">
        <?php if (!empty($title)) : ?>
            <div class="data-title">
                <?php echo $title; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="data-container mod-two wcl-container">
        <div class="data-row">
            <div class="data-col">
                <?php if (!empty($image)) : ?>
                    <div class="data-img">
                        <?php echo $image; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="data-col">
                <?php if (!empty($text)) : ?>
                    <div class="data-text mod-trigger">
                        <div class="data-text-inner">
                            <?php echo $text; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>