<?php 
/*
Plugin Name: Flat Floating Social Bar
Plugin URI: http://plugins.wpflaty.com/flat-floating-social-bar/
Version: 1.0
Description: Very very simple, lightweight and fast loaded Jquery based floating social share plugin.
Author: Tamim - wpflaty.com
Author URI: http://wpflaty.com
License : GPLv2
*/

function share_scripts(){
	wp_enqueue_script('jquery-share',plugins_url('jquery.share.js',__FILE__),array('jquery'),true);
	wp_register_style('jquery-share-css',plugins_url('jquery.share.css',__FILE__));
	wp_enqueue_style( 'jquery-share-css' );
}

add_action('wp_enqueue_scripts','share_scripts');

function share_init(){ ?>
<script>
	jQuery(document).ready(function() {
		jQuery('#ffloatbar').share({
        networks: ['twitter','facebook','tumblr','pinterest','googleplus'],
        orientation: 'vertical',
        affix: 'left center',
        theme: 'square'
    });
	});
</script>
<div id="ffloatbar"></div>
<?php }
add_action('wp_footer','share_init');

 ?>