<?php



define(
    'MENU_ITEMS',
    [
        'services'          => 76,
        'who-we-help'       => 77,
        'resources'         => 78,
        'why-choose-manta?' => 79,
    ],
);



/*
* plug for vs
*/
if (false) {
    function get_field() {
    }
    function acf_add_options_page() {
    }
    function get_sub_field() {
    }
    function have_rows() {
    }
    function the_row() {
    }
    function get_row_layout() {
    }
    function get_field_object() {
    }
    function update_field() {
    }
    function acf_register_block_type() {
    }
}




/**
 * the_breadcrumb
 */
function the_breadcrumb() {

    $separator = ' <span class="data-separator">/</span> ';

    if (!is_front_page()) {

        echo '<div class="wcl-breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a>' . $separator;
?>
        <span class="data-current">
            <?php
            if (is_single()) {
                the_title();
            }

            if (is_page()) {
                the_title();
            }
            ?>
        </span>
        <?php

        echo '</div>';
    }
}




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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_1.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_2.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_3.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_4.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_5.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_6.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_7.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_8.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_9.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_10.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_11.png'; ?>" alt="img">
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
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/block_12.png'; ?>" alt="img">
            <?php
                return;
            } else {
                get_template_part('template-parts/acf-blocks/block-12');
            }
        }
    }
}
add_action('acf/init', 'wcl_acf_blocks_init');




/*
* wcl_Walker_Nav_Menu
*/
class wcl_Walker_Nav_Menu extends Walker_Nav_Menu {

    /**
     * Starts the element output.
     *
     * @since 3.0.0
     * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
     *
     * @see Walker::start_el()
     *
     * @param string   $output Passed by reference. Used to append additional content.
     * @param WP_Post  $item   Menu item data object.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     * @param int      $id     Current item ID.
     */


    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }

        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';



        // создаем HTML код элемента меню
        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target)     ? $item->target     : '';
        $atts['rel']    = !empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = !empty($item->url)        ? $item->url        : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $data_output = '';

        $menuIds = array_values(MENU_ITEMS);

        if (in_array($item->ID, $menuIds)) {
            ob_start();
            ?>
            <div class="wcl-mega-menu">
                <?php if (MENU_ITEMS['services'] == $item->ID) : ?>
                    <?php if (is_active_sidebar('services-sidebar')) : ?>
                        <?php dynamic_sidebar('services-sidebar'); ?>
                    <?php endif; ?>
                <?php elseif (MENU_ITEMS['who-we-help'] == $item->ID) : ?>
                    <?php if (is_active_sidebar('who-we-help-sidebar')) : ?>
                        <?php dynamic_sidebar('who-we-help-sidebar'); ?>
                    <?php endif; ?>
                <?php elseif (MENU_ITEMS['resources'] == $item->ID) : ?>
                    <?php if (is_active_sidebar('resources-sidebar')) : ?>
                        <?php dynamic_sidebar('resources-sidebar'); ?>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
        <?php

            $data_output = ob_get_clean();
        }
        ?>

<?php
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $data_output;
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    public function end_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "{$indent}</ul>\n";
    }
}







// // Ваша функция для добавления кнопки
// function custom_style_button() {
//     add_filter('mce_external_plugins', 'add_custom_style_button_script');
//     add_filter('mce_buttons', 'register_custom_style_button');
// }

// // Добавление скрипта для кнопки
// function add_custom_style_button_script($plugins) {
//     $plugins['custom_style_button'] = plugin_dir_url(__FILE__) . 'custom-style-button.js';
//     return $plugins;
// }

// // Регистрация кнопки
// function register_custom_style_button($buttons) {
//     array_push($buttons, 'custom_style_button');
//     return $buttons;
// }

// // Подключение функции к хуку
// add_action('admin_init', 'custom_style_button');




function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');


/*
* Callback function to filter the MCE settings
*/
 
function my_mce_before_init_insert_formats( $init_array ) {  
 
    // Define the style_formats array
     
        $style_formats = array(  
    /*
    * Each array child is a format with it's own settings
    * Notice that each array has title, block, classes, and wrapper arguments
    * Title is the label which will be visible in Formats menu
    * Block defines whether it is a span, div, selector, or inline style
    * Classes allows you to define CSS classes
    * Wrapper whether or not to add a new block-level element around any selected elements
    */
            array(  
                'title' => 'Heading Style',  
                'block' => 'span',  
                'classes' => 'wcl-acf-heading-clear',
                'wrapper' => true,
                 
            ),  
        );  
        // Insert the array, JSON ENCODED, into 'style_formats'
        $init_array['style_formats'] = json_encode( $style_formats );  
         
        return $init_array;  
       
    } 
    // Attach callback to 'tiny_mce_before_init' 
    add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 