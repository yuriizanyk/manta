<?php



/**
 * block_categories_all
 */
add_filter('block_categories_all', function ($categories) {

    // Adding a new category.
    $categories[] = array(
        'slug'  => 'wcl-category',
        'title' => 'WCL Blocks'
    );

    return $categories;
});




/**
 * wcl_acf_blocks_init
 */
function wcl_acf_blocks_init() {

    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'            => 'block-1',
            'title'           => __('Hero Header'),
            'description'     => __('Hero Header Block'),
            'render_template' => 'template-parts/acf-blocks/block-1.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_1',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_1($block, $content = '', $is_preview = false) {
            if ($is_preview) {
        ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_1.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-1');
            }
        }


        acf_register_block_type(array(
            'name'            => 'acf-block-2',
            'title'           => __('Award-Winning'),
            'description'     => __('Award-Winning Block'),
            'render_template' => 'template-parts/acf-blocks/block-2.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_2',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_2($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_2.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-2');
            }
        }



        acf_register_block_type(array(
            'name'            => 'acf-block-3',
            'title'           => __('Clients Testimonials'),
            'description'     => __('Clients Testimonials Block'),
            'render_template' => 'template-parts/acf-blocks/block-3.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_3',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_3($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_3.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-3');
            }
        }


        acf_register_block_type(array(
            'name'            => 'acf-block-4',
            'title'           => __('Partner'),
            'description'     => __('Partner Block'),
            'render_template' => 'template-parts/acf-blocks/block-4.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_4',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_4($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_4.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-4');
            }
        }



        acf_register_block_type(array(
            'name'            => 'acf-block-5',
            'title'           => __('Case Studies'),
            'description'     => __('Case Studies Block'),
            'render_template' => 'template-parts/acf-blocks/block-5.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_5',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_5($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_5.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-5');
            }
        }



        acf_register_block_type(array(
            'name'            => 'acf-block-6',
            'title'           => __('Manta Benefits'),
            'description'     => __('Manta Benefits Block'),
            'render_template' => 'template-parts/acf-blocks/block-6.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_6',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_6($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_6.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-6');
            }
        }


        acf_register_block_type(array(
            'name'            => 'acf-block-7',
            'title'           => __('Manta Services'),
            'description'     => __('Manta Services Block'),
            'render_template' => 'template-parts/acf-blocks/block-7.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_7',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_7($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_7.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-7');
            }
        }


        acf_register_block_type(array(
            'name'            => 'acf-block-8',
            'title'           => __('Award Winning Workplace'),
            'description'     => __('Award Winning Workplace Block'),
            'render_template' => 'template-parts/acf-blocks/block-8.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_8',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_8($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_8.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-8');
            }
        }



        acf_register_block_type(array(
            'name'            => 'acf-block-9',
            'title'           => __('CTA'),
            'description'     => __('CTA Block'),
            'render_template' => 'template-parts/acf-blocks/block-9.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_9',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_9($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_9.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-9');
            }
        }


        acf_register_block_type(array(
            'name'            => 'acf-block-10',
            'title'           => __('Social Media'),
            'description'     => __('Social Media Block'),
            'render_template' => 'template-parts/acf-blocks/block-10.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_10',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_10($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_10.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-10');
            }
        }



        acf_register_block_type(array(
            'name'            => 'acf-block-11',
            'title'           => __('Hero Header Get a Free SEO Audit'),
            'description'     => __('Hero Header Get a Free SEO Audit Block'),
            'render_template' => 'template-parts/acf-blocks/block-11.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_11',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_11($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_11.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-11');
            }
        }

        acf_register_block_type(array(
            'name'            => 'acf-block-12',
            'title'           => __('Why Choose Manta?'),
            'description'     => __('Why Choose Manta? Block'),
            'render_template' => 'template-parts/acf-blocks/block-12.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_12',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_12($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_12.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-12');
            }
        }



        acf_register_block_type(array(
            'name'            => 'acf-block-13',
            'title'           => __('Single Post - List'),
            'description'     => __('Single Post - List Block'),
            'render_template' => 'template-parts/acf-blocks/block-13.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_13',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_13($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_13.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-13');
            }
        }



        acf_register_block_type(array(
            'name'            => 'acf-block-14',
            'title'           => __('Single Post - Banner'),
            'description'     => __('Single Post - Banner Block'),
            'render_template' => 'template-parts/acf-blocks/block-14.php',
            'category'        => 'wcl-category',
            'mode'            => 'edit',
            'render_callback' => 'block_render_14',
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
        ));

        function block_render_14($block, $content = '', $is_preview = false) {
            if ($is_preview) {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_new_14.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-14');
            }
        }
    }
}
add_action('acf/init', 'wcl_acf_blocks_init');