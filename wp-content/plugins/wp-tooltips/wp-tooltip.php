<?php
/*
  Plugin Name: WP ToolTips
  Plugin URI: http://smartcatdesign.net/
  Description: Displays a customizable tooltip with an image
  Version: 1.0
  Author: SmartCat
  Author URI: http://smartcatdesign.net
  License: GPL v2
 */
register_activation_hook(__FILE__, 'wp_tooltip_install');

function wp_tooltip_install() {
    global $wp_version;
    if (version_compare($wp_version, "3.2.1", "<")) {
        deactivate_plugins(basename(__FILE__));
        wp_die("This plugin requires WordPress version 3.2.1 or higher.");
    }
    set_wp_tooltip();
}

add_action('admin_menu', 'wp_tooltip_menu');
//add_action('admin_head', 'wp_tooltip_admin_action');
add_action('wp_enqueue_scripts', 'addStylesScripts');

function addStylesScripts() {
    wp_register_style('wptt_style', plugins_url() . '/wp-tooltips/style/style.css', false, '1.0');
    wp_enqueue_style('wptt_style');
    wp_enqueue_script('custom-script', plugins_url() . '/wp-tooltips/script/script.js', array('jquery'));
}

function wp_tooltip_menu() {
//    add_menu_page('Tooltips', 'ToolTips', 'administrator', 'wp-tooltip.php', 'wp_tooltip_action', plugins_url('wp_tooltip.png', __FILE__));
}

function wp_tooltip_action() {
    if (isset($_REQUEST['act'])) {
        switch ($_REQUEST['act']) {
            case "save":
                set_wp_tooltip();
                echo '<div class="updated below-h2" id="message" style="position:relative; clear:both;"><p>Under Construction: ' . $_REQUEST['set_opt'] . '</p></div>';
                break;
            default:
        }
    }
    $set_caption = get_option('set_caption');
//    require_once('form.php');
}

function set_wp_tooltip() {

    $new_value4 = ($_REQUEST['set_caption'] == "") ? 'We will be back soon!' : $_REQUEST['set_caption'];
    if (get_option('set_caption') !== false) {
        update_option('set_caption', $new_value4);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('set_caption', $new_value4, $deprecated, $autoload);
    }
}

?>