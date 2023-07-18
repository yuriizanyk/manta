<?php


$title    = get_field('title');
$subtitle = get_field('subtitle');
$link     = get_field('link');
?>
<!-- wcl-block-11 - Hero Header Get a Free SEO Audit -->
<div class="wcl-block-11">
    <div class="b11-container">
        <?php if (!empty($title)) : ?>
            <div class="b11-title">
                <h3>
                    <?php echo $title; ?>
                </h3>
            </div>
        <?php endif; ?>

        <?php if (!empty($subtitle)) : ?>
            <div class="b11-subtitle">
                <?php echo $subtitle; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($link)) : ?>
            <?php
            $link_url    = $link['url'];
            $link_title  = $link['title'];
            $link_target = $link['target'] ?: '_self';
            ?>
            <div class="b11-link">
                <a href="<?php echo $link_url; ?>" class="wcl-button" target="<?php echo $link_target; ?>">
                    <?php echo $link_title; ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>