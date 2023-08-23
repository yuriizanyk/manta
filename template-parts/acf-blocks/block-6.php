<?php

$title_and_text = get_field('title_&_text');
?>
<!-- wcl-block-6 - Manta Benefits -->
<div class="wcl-block-6">
    <div class="data-container wcl-container">
        <?php if (!empty($title_and_text)) : ?>
            <div class="data-head">
                <?php echo $title_and_text; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('list')) : ?>
            <div class="data-list">
                <?php while (have_rows('list')) : the_row(); ?>
                    <?php
                    $icon = get_sub_field('icon');
                    $text = get_sub_field('text');
                    ?>
                    <div class="data-item">
                        <div class="data-item-inner">
                            <?php if (!empty($icon)) : ?>
                                <div class="data-item-icon">
                                    <?php echo $icon; ?>
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