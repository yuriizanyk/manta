<?php

$widget_id = $args['widget_id'];
$title = get_field('title', 'widget_' . $widget_id);
//var_dump(get_field('list', 'widget_' . $widget_id));
?>
<div class="wcl-wdg3-table-of-content">
    <div class="wdg3-inner">
        <?php if (!empty($title)) : ?>
            <div class="wdg3-title">
                <?php echo $title; ?>
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