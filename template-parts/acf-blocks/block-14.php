<?php



$image = get_field('image');
$image = wp_get_attachment_image($image, 'full');

$group_1    = get_field('group_1');
$logo       = $group_1['logo'];
$image_text = $group_1['image_text'];

$logo       = wp_get_attachment_image($logo, 'full');
$image_text = wp_get_attachment_image($image_text, 'full');
?>
<!-- wcl-block-14 - Single Post - Banner -->
<div class="wcl-block-14">
    <div class="data-inner">
        <div class="data-row">
            <div class="data-col">
                <?php if (!empty($logo)) : ?>
                    <div class="data-logo">
                        <?php echo $logo; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($image_text)) : ?>
                    <div class="data-img-text">
                        <?php echo $image_text; ?>
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