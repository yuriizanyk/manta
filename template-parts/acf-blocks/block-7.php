<?php

$title = get_field('title');
$text  = get_field('text');
?>
<!-- wcl-block-7 - Manta Services -->
<div class="wcl-block-7">
    <div class="data-container wcl-container">
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

        <?php if (have_rows('list')) : ?>
            <div class="data-list">
                <?php while (have_rows('list')) : the_row(); ?>
                    <?php
                    $icon  = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $text  = get_sub_field('text');
                    ?>
                    <div class="data-item">
                        <div class="data-item-inner">
                            <?php if (!empty($icon)) : ?>
                                <div class="data-item-icon">
                                    <?php echo $icon; ?>
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