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
    <div class="b14-inner">
        <div class="b14-row">
            <div class="b14-col">
                <?php if (!empty($logo)) : ?>
                    <div class="b14-logo">
                        <?php echo $logo; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($image_text)) : ?>
                    <div class="b14-img-text">
                        <?php echo $image_text; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="b14-col">
                <?php if (!empty($image)) : ?>
                    <div class="b14-img">
                        <?php echo $image; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>