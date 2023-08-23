<?php

$title                = get_field('title');
$group                = get_field('group');
$group_title_and_text = $group['title_&_text'];
$group_form_shortcode = $group['form_shortcode'];
$image                = get_field('image');
$image                = wp_get_attachment_image($image, 'image-size-7');
?>
<!-- wcl-block-9 - CTA -->
<div class="wcl-block-9">
    <div class="data-container wcl-container">
        <?php if (!empty($title)) : ?>
            <div class="data-title">
                <?php echo $title; ?>
            </div>

            <div class="data-line"></div>
        <?php endif; ?>

        <div class="data-row">
            <div class="data-col">
                <div class="data-a">
                    <?php if (!empty($group_title_and_text)) : ?>
                        <div class="data-a-head">
                            <?php echo $group_title_and_text; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (!empty($group_form_shortcode)) : ?>
                    <div class="data-form">
                        <?php echo do_shortcode($group_form_shortcode); ?>
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