<?php

$widget_id = $args['widget_id'];
$widget_title = $args['widget_title'];
?>
<div class="wcl-wdg3-table-of-content">
    <div class="wdg3-inner">
        <?php if (!empty($widget_title)) : ?>
            <div class="wdg3-title">
                <?php echo $widget_title; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('list', 'widget_' . $widget_id)) : ?>
            <div class="wdg3-list">
                <?php while (have_rows('list', 'widget_' . $widget_id)) : the_row(); ?>
                    <?php
                    $item = get_sub_field('item');
                    ?>
                    <?php if (!empty($item)) : ?>
                        <div class="wdg3-item">
                            <div class="wdg3-item-text">
                                <?php echo $item; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>