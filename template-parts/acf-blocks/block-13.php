<?php


?>
<!-- wcl-block-13 - Single Post - List -->
<div class="wcl-block-13">
    <div class="data-container">
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