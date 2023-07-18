<?php


$title   = get_field('title');
$group_1 = get_field('group_1');
$group_2 = get_field('group_2');
?>
<!-- wcl-block-3 - Clients Testimonials -->
<div class="wcl-block-3">
    <div class="data-container wcl-container">
        <?php if (!empty($title)) : ?>
            <div class="data-title">
                <?php echo $title; ?>
            </div>
        <?php endif; ?>

        <div class="data-row">
            <div class="data-col">
                <?php if (!empty($group_1)) : ?>
                    <?php
                    $content = $group_1['content'];
                    $image   = $group_1['image'];
                    $link    = $group_1['link'];
                    $image   = wp_get_attachment_image($image, 'image-size-3');

                    $color_picker     = get_field('color_picker');
                    $color_picker     = !empty($color_picker) ? $color_picker : '#214752';
                    $custom_color_tag = '';
                    $custom_color_tag = 'style="background-color: ' . $color_picker . ';"';
                    ?>
                    <div class="data-a">
                        <?php if (!empty($image)) : ?>
                            <div class="data-a-img">
                                <?php echo $image; ?>
                            </div>
                        <?php endif; ?>

                        <div class="data-a-content">
                            <?php if (!empty($content)) : ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="data-col">
                <?php if (!empty($group_2)) : ?>
                    <?php
                    $content = $group_2['content'];
                    $image   = $group_2['image'];
                    $link    = $group_2['link'];
                    $image   = wp_get_attachment_image($image, 'image-size-3');

                    $color_picker     = get_field('color_picker');
                    $color_picker     = !empty($color_picker) ? $color_picker : '#214752';
                    $custom_color_tag = '';
                    $custom_color_tag = 'style="color: ' . $color_picker . ';"';
                    ?>
                    <div class="data-a mod-orange">
                        <?php if (!empty($image)) : ?>
                            <div class="data-a-img">
                                <?php echo $image; ?>
                            </div>
                        <?php endif; ?>

                        <div class="data-a-content">
                            <?php if (!empty($content)) : ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>