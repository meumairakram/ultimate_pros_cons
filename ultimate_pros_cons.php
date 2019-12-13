<?php
/**
 * @package Ultimate_Pros_Cons
 */
/*
Plugin Name: Ultimate Pros & Cons Tables
Plugin URI: https://codeivo.com/    
Description: A Wordpress plugin to create beautiful and response PRos and Cons Comparison tables within seconds and use them anywhere across pages, posts and custom post types.
Version: 1.2
Author: Umair A.
Author URI: https://github.com/meumairakram/
License: GPLv2 or later
Text Domain: ultimate_pros
*/

// add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )

define('UPCT_MAIN_PATH', plugin_dir_path( __FILE__ ) );


// adding styles 

function upct_addPluginStyles() {
    wp_enqueue_style('upct_style',plugin_dir_url(__FILE__).'assets/upct_style.css');
    wp_enqueue_style('upct_fa_style',plugin_dir_url(__FILE__).'assets/fontawesome-css.css');
    wp_enqueue_script('upct_script  ',plugin_dir_url(__FILE__).'assets/front_main.js');
}

add_action('wp_enqueue_scripts','upct_addPluginStyles');


// adding admin 

function upct_addAdminPluginStyles() {
    wp_enqueue_style('upct_admin_style',plugin_dir_url(__FILE__).'assets/admin_style.css');
    wp_enqueue_script('upct_admin_script',plugin_dir_url(__FILE__).'assets/admin_script.js',array('jquery'),false,true);
}

add_action('admin_enqueue_scripts','upct_addAdminPluginStyles',25);


add_action('admin_menu','upct_add_shortcode_gen_page');


function upct_add_shortcode_gen_page() {

    add_menu_page('Ultimate Pros and Cons','Pros & Cons','edit_posts ','ultimate-pros-cons','upct_create_code_gen_page');
}


function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __( 'Ultimate Pros and Cons', 'ultimate_pros' ),
        'Pros Cons',
        'edit_posts',
        'upct_shortcode_gen',
        'upct_create_code_gen_page',
        'dashicons-admin-plugins',
        6
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );



function upct_create_code_gen_page() {
ob_start();
require(UPCT_MAIN_PATH.'inc/shortcode_gen.php');
$output = ob_get_clean();
// var_dump($output);


echo $output;
}


require(UPCT_MAIN_PATH.'inc/shortcode_render.php');


