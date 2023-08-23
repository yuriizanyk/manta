<?php


$title_and_text = get_field('title_&_text');
?>
<!-- wcl-block-12 - Why Choose Manta? -->
<div class="wcl-block-12">
    <div class="data-container wcl-container">
        <?php if (!empty($title_and_text)) : ?>
            <div class="data-head">
                <?php echo $title_and_text; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('list')) : ?>
            <div class="data-a">
                <div class="data-list">
                    <?php while (have_rows('list')) : the_row(); ?>
                        <?php
                        $icon           = get_sub_field('icon');
                        $title_and_text = get_sub_field('title_&_text');
                        ?>
                        <div class="data-item">
                            <div class="data-item-inner">
                                <?php if (!empty($icon)) : ?>
                                    <div class="data-item-icon">
                                        <?php echo $icon; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="data-item-a">
                                    <?php if (!empty($title_and_text)) : ?>
                                        <div class="data-item-head">
                                            <?php echo $title_and_text; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>