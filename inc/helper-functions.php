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

    echo '<div class="wcl-breadcrumbs">';
    if (is_page() && !is_front_page()) {
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
    } elseif (is_single()) {
        // Get the post categories
        $categories = get_the_category();

        // Get the home URL
        $home_url = home_url();

        // Start building the breadcrumb trail
        $breadcrumb = '<a href="' . $home_url . '">Home</a>';


        $blog_page = get_option('page_for_posts'); // Assuming you have a page with the title "Blog"

        if ($blog_page) {
            $blog_page_link = get_permalink($blog_page);
            $breadcrumb .= $separator . ' <a href="' . $blog_page_link . '">Blog</a>';
        }

        // If the post has categories, add them to the breadcrumb trail
        if ($categories) {
            $category = $categories[0]; // Assuming the post has only one category
            $category_link = get_category_link($category->term_id);
            $breadcrumb .= $separator . ' <a href="' . $category_link . '" class="data-current">' . $category->name . '</a>';
        }

        // Display the breadcrumb trail
        echo $breadcrumb;
    }

    echo '</div>';
}








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

function my_mce_before_init_insert_formats($init_array) {

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

        // array(  
        //     'title' => 'Original Heading Style',  
        //     'block' => 'span',  
        //     'classes' => 'wcl-acf-original',
        //     'wrapper' => true,
        // ),  
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);

    return $init_array;
}
// Attach callback to 'tiny_mce_before_init' 
add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');





/* 
wcl_create_new_xml_by_url_rss_feed
 */
function wcl_create_new_xml_by_url_rss_feed($url = '') {
    if (empty($url)) {
        $url = 'https://www.medischevakhandel.nl/nl/huisarts-vandaag-feed';
    }

    $xml = file_get_contents($url);

    if ($xml !== false) {
        $dom = new DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml);

        $xpath = new DOMXPath($dom);
        $xpath->registerNamespace('media', 'http://search.yahoo.com/mrss/');

        // Find and remove the 'width' attribute from 'media:content' tags within 'item' elements
        $items = $xpath->query('//channel/item/media:content');
        foreach ($items as $item) {
            $item->removeAttribute('width');
        }

        $directory = get_template_directory() . '/xml-feeds/';

        // Проверка существования директории и создание, если она не существует
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        // Save the modified XML content to a file
        $dom->save(get_template_directory() . '/xml-feeds/new-rss-feed.xml');
        //echo "Modified XML file saved successfully.";
    } else {
        //echo "Failed to fetch the XML content.";
    }
}

//wcl_create_new_xml_by_url_rss_feed();




/* 
wcl_new_rss_feed_markup
 */
function wcl_new_rss_feed_markup() {
    // Чтение содержимого файла modified_channel.xml
    $file_path = get_template_directory() . '/xml-feeds/new-rss-feed.xml';

    header('Content-Type: application/xml');

    if (file_exists($file_path)) {
        $file_content = file_get_contents($file_path);
        echo $file_content;
    }
}

add_action('init', function () {
    add_feed('new-rss-feed', 'wcl_new_rss_feed_markup');
});
