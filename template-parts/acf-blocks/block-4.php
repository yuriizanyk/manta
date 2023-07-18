<?php

$title               = get_field('title');
$bg_color            = get_field('bg_color');
$custom_color_picker = get_field('custom_color_picker');
$custom_color        = get_field('custom_color');
$custom_color_tag    = '';

$bg_color       = !empty($bg_color) ? $bg_color : 'blue';
$bg_color_class = 'mod-' . $bg_color;

if ($custom_color === true) {
    $bg_color_class = 'mod-custom-color';
}

if (!empty($custom_color_picker) && $custom_color === true) {
    $custom_color_tag = 'style="color: ' . $custom_color_picker . ';"';
}
?>
<!-- wcl-block-4 - Partner -->
<div class="wcl-block-4 <?php echo $bg_color_class; ?>" <?php echo $custom_color_tag; ?>>
    <div class="data-container wcl-container">
        <div class="data-inner">
            <?php if (!empty($title)) : ?>
                <div class="data-title">
                    <?php echo $title; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('list')) : ?>
                <div class="data-list">
                    <?php while (have_rows('list')) : the_row(); ?>
                        <?php
                        $image          = get_sub_field('image');
                        $image          = wp_get_attachment_image($image, 'image-size-3');
                        $title          = get_sub_field('title');
                        $text           = get_sub_field('text');
                        $value_in_image = get_sub_field('value_in_image');
                        ?>
                        <div class="data-item">
                            <div class="data-item-inner">
                                <?php if (!empty($image)) : ?>
                                    <div class="data-item-img">
                                        <div class="data-item-img-inner">
                                            <?php echo $image; ?>

                                            <?php if (!empty($value_in_image)) : ?>
                                                <div class="data-item-index">
                                                    <?php echo $value_in_image; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($title)) : ?>
                                    <div class="data-item-title">
                                        <?php echo $title; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($text)) : ?>
                                    <div class="data-item-text">
                                        <?php echo $text; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>