<?php


/*
* Wcl_Widget_Related_Articles
*/
class Wcl_Widget_Related_Articles extends WP_Widget {
    // Constructor
    public function __construct() {
        parent::__construct(
            'related_articles', // Widget ID
            'Related Articles', // Widget name
            // array( 'description' => 'A custom widget for displaying XYZ.' ) // Widget description
        );
    }


    // Widget Output
    public function widget($args, $instance) {
        echo $args['before_widget'];

        get_template_part('template-parts/widget/related-posts');

        echo $args['after_widget'];
    }
}

// Register the widget
function register_Wcl_Widget_Related_Articles() {
    register_widget('Wcl_Widget_Related_Articles');
}
add_action('widgets_init', 'register_Wcl_Widget_Related_Articles');





/*
* Wcl_Widget_Seo_Audit
*/
class Wcl_Widget_Seo_Audit extends WP_Widget {
    // Constructor
    public function __construct() {
        parent::__construct(
            'seo_audit', // Widget ID
            'Seo Audit', // Widget name
            // array( 'description' => 'A custom widget for displaying XYZ.' ) // Widget description
        );
    }


    // Widget Output
    public function widget($args, $instance) {

        echo $args['before_widget'];

        get_template_part('template-parts/widget/seo-audit');

        echo $args['after_widget'];
    }
}

// Register the widget
function register_Wcl_Widget_Seo_Audit() {
    register_widget('Wcl_Widget_Seo_Audit');
}
add_action('widgets_init', 'register_Wcl_Widget_Seo_Audit');






/*
* Wcl_Widget_Table_of_Content
*/
class Wcl_Widget_Table_of_Content extends WP_Widget {
    // Constructor
    public function __construct() {
        parent::__construct(
            'table_of_content', // Widget ID
            'Table of Content', // Widget name
            // array( 'description' => 'A custom widget for displaying XYZ.' ) // Widget description
        );
    }

    // Widget Output
    public function widget($args, $instance) {
        // var_dump($this->id );
        // $widget_title = !empty($instance['title']) ? apply_filters('widget_title', $instance['title']) : '';

        echo $args['before_widget'];

        $args_new =  array(
            'widget_id' => $this->id,
        );

        get_template_part('template-parts/widget/table-of-content', null, $args_new);

        echo $args['after_widget'];
    }
}

// Register the widget
function register_Wcl_Widget_Table_of_Content() {
    register_widget('Wcl_Widget_Table_of_Content');
}
add_action('widgets_init', 'register_Wcl_Widget_Table_of_Content');
