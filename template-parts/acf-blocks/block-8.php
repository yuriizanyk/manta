<?php


$group          = get_field('group');
$title_and_text = $group['title_&_text'];
$link           = $group['link'];
$image          = get_field('image');
$image          = wp_get_attachment_image($image, 'image-size-6');
?>
<!-- wcl-block-8 - Award Winning Workplace -->
<div class="wcl-block-8">
    <div class="data-container wcl-container">
        <div class="data-row">
            <div class="data-col">
                <div class="data-b1">
                    <?php if (!empty($title_and_text)) : ?>
                        <div class="data-head">
                            <?php echo $title_and_text; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($link)) : ?>
                        <?php
                        $link_url    = $link['url'];
                        $link_title  = $link['title'];
                        $link_target = $link['target'] ?: '_self';
                        ?>
                        <div class="data-link">
                            <a href="<?php echo $link_url; ?>" class="wcl-button" target="<?php echo $link_target; ?>">
                                <?php echo $link_title; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="data-col">
                <div class="data-b">
                <?php if (!empty($image)) : ?>
                    <div class="data-img">
                        <?php echo $image; ?>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>