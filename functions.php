<?php
/**
 *
 * Sueva Theme Functions
 *
 * This is your standard WordPress
 * functions.php file.
 *
 * @author  Alessandro Vellutini
 *
*/

/* CORE */
require_once get_template_directory() . '/core/main.php';
require_once get_template_directory() . '/core/post-formats.php';

/* STYLE  */
require_once get_template_directory() . '/core/add-style.php';

/* WIDGET  */
require_once get_template_directory() . '/core/add-widgets.php';
require_once get_template_directory() . '/core/register-metaboxes.php';
require_once get_template_directory() . '/core/admin/function_panel.php';

function add_editor_buttons($buttons) {

$buttons[] = 'fontselect';

$buttons[] = 'fontsizeselect';

$buttons[] = 'cleanup';

$buttons[] = 'styleselect';

$buttons[] = 'hr';

$buttons[] = 'del';

$buttons[] = 'sub';

$buttons[] = 'sup';

$buttons[] = 'copy';

$buttons[] = 'paste';

$buttons[] = 'cut';

$buttons[] = 'undo';

$buttons[] = 'image';

$buttons[] = 'anchor';

$buttons[] = 'backcolor';

$buttons[] = 'wp_page';

$buttons[] = 'charmap';

return $buttons;

}

add_filter("mce_buttons_3", "add_editor_buttons");


if (!function_exists('remove_wp_open_sans')) :   
function remove_wp_open_sans() {   
wp_deregister_style( 'open-sans' );   
wp_register_style( 'open-sans', false );   
}
// 前台删除Google字体CSS   
add_action('wp_enqueue_scripts', 'remove_wp_open_sans');
// 后台删除Google字体CSS   
add_action('admin_enqueue_scripts', 'remove_wp_open_sans'); 
endif;


/**
* 移除 WordPress 加载的JS和CSS链接中的版本号
*/
function sb_remove_script_version( $src ){
    $parts = explode( '?', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', 'sb_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'sb_remove_script_version', 15, 1 );


//优化head（）函数
remove_action( 'wp_head', 'feed_links', 2 );   
remove_action( 'wp_head', 'feed_links_extra', 3 );   
remove_action( 'wp_head', 'rsd_link' );   
remove_action( 'wp_head', 'wlwmanifest_link' );   
remove_action( 'wp_head', 'index_rel_link' );   
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );   
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );   
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   
remove_action( 'wp_head', 'wp_generator' );   
 
add_action('widgets_init', 'my_remove_recent_comments_style');   
function my_remove_recent_comments_style() {   
global $wp_widget_factory;   
remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));   
}

/**
*	标签排序
*/
add_filter( 'widget_tag_cloud_args', 'theme_tag_cloud_args' );
function theme_tag_cloud_args( $args ){
    $newargs = array(
        'number'      => 99,     //显示个数
        'orderby'     => 'count',//排序字段，可以是name或count
        'order'       => 'DESC', //升序或降序，ASC或DESC
    );
    $return = array_merge( $args, $newargs);
    return $return;
}

function unblock_gravatar( $avatar ) {
    $avatar = str_replace( array( 'www.gravatar.com', '0.gravatar.com', '1.gravatar.com', '2.gravatar.com' ), 'gravatar.duoshuo.com', $avatar );
    return $avatar;
}
add_filter( 'get_avatar', 'unblock_gravatar' );

//关闭XML-RPC功能
add_filter('xmlrpc_enabled','__return_false');

//引入 Dashicons 图标的 CSS 文件
function Bing_enqueue_dashicons(){
    wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'Bing_enqueue_dashicons' );
?>