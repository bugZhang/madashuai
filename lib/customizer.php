<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');

class WProfile extends \WP_Widget{
    function __construct()
    {
        $widget_ops = array(
            'classname' => 'mds-widget-profile',
            'description' => '侧边栏个人简介',
            'customize_selective_refresh' => true,
        );
        parent::__construct('mds-widget-profile', '个人简介', $widget_ops);
    }

    function widget($args, $instance)
    {
        $img_src = $instance['src'];
        if(!$img_src){
            return '';
        }
        $output = '';
        $output .= $args['before_widget'];
        $output .= '<img src="' . $img_src . '" class="rounded mx-auto d-block mt-4 mb-4" alt="" style="width: 120px; height: 120px;">';
        if($instance['git']){
            $output .= '<p class="text-center"><a href="' . $instance['git'] . '" target="_blank"><i class="fab fa-github fa-18 mr-1"></i>GitHub</a></p>';
        }
        if($instance['msg']){
            $output .= '<p class="text-center">' . $instance['msg'] . '</p>';
        }

        $output .= $args['after_widget'];

        echo $output;

    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['src'] = $new_instance['src'];
        $instance['msg'] = $new_instance['msg'];
        $instance['git'] = $new_instance['git'];
        return $instance;
    }

    function form($instance)
    {
        $img_src = isset($instance['src']) ? $instance['src'] : '';
        $output = '<p><label for="' . $this->get_field_id('src') . '">头像链接：</label>';
        $output .= '<input class="widefat" id="' . $this->get_field_id('src') . '" name="' . $this->get_field_name('src') . '" type="url" value="' . $img_src . '">';

        $msg = isset($instance['msg']) ? $instance['msg'] : '';
        $output .= '<p><label for="' . $this->get_field_id('msg') . '">简介文字：</label>';
        $output .= '<input class="widefat" id="' . $this->get_field_id('msg') . '" name="' . $this->get_field_name('msg') . '" type="text" value="' . $msg . '">';

        $git = isset($instance['git']) ? $instance['git'] : '';
        $output .= '<p><label for="' . $this->get_field_id('git') . '">Github地址：</label>';
        $output .= '<input class="widefat" id="' . $this->get_field_id('git') . '" name="' . $this->get_field_name('git') . '" type="url" value="' . $git . '">';

        echo $output;
    }
}