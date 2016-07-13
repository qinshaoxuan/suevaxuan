<?php

/*-----------------------------------------------------------------------------------*/
/* THEME DATA */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_theme_data($id) {
	
	$themedata = wp_get_theme();
	return $themedata->get($id);
	
}
/*-----------------------------------------------------------------------------------*/
/* Admin class */
/*-----------------------------------------------------------------------------------*/   

function suevaxuan_admin_body_class( $classes ) {
	
	global $wp_version;
	
	if ( ( $wp_version >= 3.8 ) && ( is_admin()) ) {
		$classes .= 'wp-8';
	}
		return $classes;
}
	
add_filter( 'admin_body_class', 'suevaxuan_admin_body_class' );

/*-----------------------------------------------------------------------------------*/
/* Body class */
/*-----------------------------------------------------------------------------------*/   

function suevaxuan_body_class($classes) {

	$classes[] = 'custombody';
		
	return $classes;
	
}

add_filter('body_class', 'suevaxuan_body_class');

/*-----------------------------------------------------------------------------------*/
/* Post formats */
/*-----------------------------------------------------------------------------------*/   

function suevaxuan_setup() {

	add_theme_support( 'post-formats', array( 'aside','gallery','quote','video','audio','link','status','chat','image' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'title-tag' );

	add_image_size( 'blog', 940,429, TRUE );
	//add_image_size( 'index', 620,283, TRUE); 
	add_image_size( 'large', 449,304, TRUE ); 
	add_image_size( 'medium', 290,220, TRUE ); 
	add_image_size( 'small', 211,150, TRUE ); 

	register_nav_menu( 'main-menu', 'Main menu' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f3f3f3',
	) );

}

add_action( 'after_setup_theme', 'suevaxuan_setup' );

/*-----------------------------------------------------------------------------------*/
/* TAG TITLE */
/*-----------------------------------------------------------------------------------*/  

if ( ! function_exists( '_wp_render_title_tag' ) ) {

	function suevaxuan_title( $title, $sep ) {
		
		global $paged, $page;
	
		if ( is_feed() )
			return $title;
	
		$title .= get_bloginfo( 'name' );
	
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
	
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'wip' ), max( $paged, $page ) );
	
		return $title;
		
	}

	add_filter( 'wp_title', 'suevaxuan_title', 10, 2 );

	function suevaxuan_addtitle() {
		
?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php

	}

	add_action( 'wp_head', 'suevaxuan_addtitle' );

}

/*-----------------------------------------------------------------------------------*/
/* Theme name */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_themename() {
	
	$suevaxuan_themename = "suevaxuan_theme_settings";
	return $suevaxuan_themename;	
	
}

/*-----------------------------------------------------------------------------------*/
/* Theme settings */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_setting($id) {

	$suevaxuan_setting = get_option(suevaxuan_themename());
	if(isset($suevaxuan_setting[$id]))
		return $suevaxuan_setting[$id];

}

/*-----------------------------------------------------------------------------------*/
/* Post meta */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_postmeta($id) {

	global $post;
	
	$val = get_post_meta( $post->ID , $id, TRUE);
	if(isset($val))
		return $val;

}

/*-----------------------------------------------------------------------------------*/
/* Content template */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_template($id) {

	$template = array ("full" => "span12" , "left-sidebar" => "span8" , "right-sidebar" => "span8" );

	$span = $template["full"];
	$sidebar =  "full";

	if ( ( suevaxuan_setting('suevaxuan_home') )  && (  (is_home()) )  ){
		
		$span = $template[suevaxuan_setting('suevaxuan_home')];
		$sidebar =  suevaxuan_setting('suevaxuan_home');

	} else if ( ( suevaxuan_setting('suevaxuan_category_layout') )  && ( (is_category()) || (is_tag()) )  ){
		
		$span = $template[suevaxuan_setting('suevaxuan_category_layout')];
		$sidebar =  suevaxuan_setting('suevaxuan_category_layout');

	} else if ( ( suevaxuan_postmeta('suevaxuan_template') )  && ( (is_page()) || (is_single())  )  ){

		$span = $template[suevaxuan_postmeta('suevaxuan_template')];
		$sidebar =  suevaxuan_postmeta('suevaxuan_template');
			
	}
	
	return ${$id};
	
}

/*-----------------------------------------------------------------------------------*/
/* Excerpt */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_hide_excerpt_more() {
	return '';
}

add_filter('the_content_more_link', 'suevaxuan_hide_excerpt_more');
add_filter('excerpt_more', 'suevaxuan_hide_excerpt_more');

function suevaxuan_excerpt() {
	
	global $post,$more;
	
	$more = 0;

	
	if ($pos=strpos($post->post_content, '<!--more-->')): 
		$content = the_content();
	else:
		$content = the_excerpt();
	endif;
	
	echo '<p>' . $content . ' <a class="button" href="'.get_permalink($post->ID).'" title="More">  ' . __( "Read More","wip") . '</a> </p>';

}

/*-----------------------------------------------------------------------------------*/
/* Request */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_request($id) {
	
	if ( isset ( $_REQUEST[$id])) 
	return $_REQUEST[$id];	
	
}

/*-----------------------------------------------------------------------------------*/
/* Content width */
/*-----------------------------------------------------------------------------------*/ 

if ( ! isset( $content_width ) )
	$content_width = 940;

/*-----------------------------------------------------------------------------------*/
/* SCRIPTS */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_enqueue_scripts_styles() {

	wp_enqueue_style( "bootstrap", get_template_directory_uri()."/css/bootstrap.min.css");
	wp_enqueue_style( "bootstrap-responsive", get_template_directory_uri()."/css/bootstrap-responsive.min.css");
	wp_enqueue_style( "font-awesome.min", get_template_directory_uri()."/css/font-awesome.min.css");
	//wp_enqueue_style( "fonts.useso", "//fonts.useso.com/css?family=Maven+Pro|Abel|Oxygen|Allura|Handlee");
	wp_enqueue_style( "prettyPhoto", get_template_directory_uri()."/css/prettyPhoto.css");
	wp_enqueue_style( "tipsy", get_template_directory_uri()."/css/tipsy.css");
	wp_enqueue_script( 'jquery.tipsy', get_template_directory_uri().'/js/jquery.tipsy.js',array('jquery'),"1.0.0",TRUE  ); 
	wp_enqueue_script( 'jquery.mobilemenu', get_template_directory_uri().'/js/jquery.mobilemenu.js',array('jquery'),"1.0.0",TRUE );
	wp_enqueue_script( 'jquery.prettyPhoto', get_template_directory_uri().'/js/jquery.prettyPhoto.js',array('jquery'),"1.0.0",TRUE ); 
	wp_enqueue_script( 'jquery.custom', get_template_directory_uri().'/js/jquery.custom.js',array('jquery') ,"1.0.0",TRUE); 
	wp_enqueue_script( 'comment-reply' );
	
}

add_action( 'wp_enqueue_scripts', 'suevaxuan_enqueue_scripts_styles' );


/*-----------------------------------------------------------------------------------*/
/* Add default style, at theme activation */
/*-----------------------------------------------------------------------------------*/         

if ( is_admin() && isset($_GET['activated'] ) && $pagenow == 'themes.php' ) {
	
	$suevaxuan_setting = get_option(suevaxuan_themename());

	if (!$suevaxuan_setting) {	
	
	$skins = array( 
	
    "suevaxuan_skins" => "Orange", 
    "suevaxuan_logo_font" => "Allura", 
    "suevaxuan_logo_font_size" => "70px", 
    "suevaxuan_logo_description_font" => "Abel", 
    "suevaxuan_logo_description_font_size" => "14px", 
	
    "suevaxuan_menu_font" => "Abel", 
    "suevaxuan_menu_font_size" => "18px", 
	
    "suevaxuan_titles_font" => "Abel", 
	
    "suevaxuan_text_font_color" => "#616161", 
    "suevaxuan_copyright_font_color" => "#ffffff", 
    "suevaxuan_link_color" => "#ff6644", 
    "suevaxuan_link_color_hover" => "#d14a2b", 
    "suevaxuan_selection_color" => "#ff6644",
    "suevaxuan_border_color" => "#ff6644", 

	"suevaxuan_body_background" => "/images/background/patterns/pattern1.jpg",
	"suevaxuan_body_background_repeat" => "repeat",
	"suevaxuan_body_background_color" => "#f3f3f3",
	
	"suevaxuan_footer_background" => "/images/background/patterns/pattern2.jpg",
	"suevaxuan_footer_background_repeat" => "repeat",
	"suevaxuan_footer_background_color" => "#f3f3f3",

	"home-default" => "full",
	"suevaxuan_footer_QQ_button" => "#",
	"suevaxuan_footer_twitter_button" => "#",
	"suevaxuan_footer_skype_button" => "#",
	"suevaxuan_view_comments" => "on",
	"suevaxuan_view_comments_declaraction" => "off",
	"suevaxuan_footer_rss_button" => "on",
	"suevaxuan_category_layout" => "full",

	);

	update_option( suevaxuan_themename(), $skins ); 
	
}
}

/*-----------------------------------------------------------------------------------*/
/* Admin menu */
/*-----------------------------------------------------------------------------------*/   

function suevaxuan_option_panel() {
        global $wp_admin_bar, $wpdb;
    	
		$wp_admin_bar->add_menu( array( 'id' => 'theme_options', 'title' => '<span> 主题设置 </span>', 'href' => get_admin_url() . 'themes.php?page=themeoption' ) );

}

add_action( 'admin_bar_menu', 'suevaxuan_option_panel', 1000 );

/*-----------------------------------------------------------------------------------*/
/* Prettyphoto at post gallery */
/*-----------------------------------------------------------------------------------*/   

function suevaxuan_prettyPhoto( $html, $id, $size, $permalink, $icon, $text ) {
	
    if ( ! $permalink )
        return str_replace( '<a', '<a data-rel="prettyPhoto" ', $html );
    else
        return $html;
}

add_filter( 'wp_get_attachment_link', 'suevaxuan_prettyPhoto', 10, 6);

/*-----------------------------------------------------------------------------------*/
/* Localize theme */
/*-----------------------------------------------------------------------------------*/   

load_theme_textdomain('wip', get_template_directory(). '/languages');

/*-----------------------------------------------------------------------------------*/
/* Remove category list rel */
/*-----------------------------------------------------------------------------------*/   

function suevaxuan_remove_category_list_rel($output)
{
	$output = str_replace('rel="category"', '', $output);
	return $output;
}
add_filter('wp_list_categories', 'suevaxuan_remove_category_list_rel');
add_filter('the_category', 'suevaxuan_remove_category_list_rel');

/*-----------------------------------------------------------------------------------*/
/* Remove thumbnail dimensions */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_filter( 'post_thumbnail_html', 'suevaxuan_remove_thumbnail_dimensions', 10, 3 );
  
/*-----------------------------------------------------------------------------------*/
/* Remove css gallery */
/*-----------------------------------------------------------------------------------*/ 


function suevaxuan_my_gallery_style() {
    return "<div class='gallery'>";
}

add_filter( 'gallery_style', 'suevaxuan_my_gallery_style', 99 );

/*-----------------------------------------------------------------------------------*/
/* Dropdown options */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_dropdown_options($dropdown_options) {
	$dropdown_options = '<script type="text/javascript" src="'. get_stylesheet_directory_uri().'/scripts/thematic-dropdowns.js"></script>';
	return $dropdown_options;
}

add_filter('thematic_dropdown_options','suevaxuan_dropdown_options');


/*-----------------------------------------------------------------------------------*/
/* Socials */
/*-----------------------------------------------------------------------------------*/ 

function suevaxuan_socials() {
	
	
	if (suevaxuan_setting('suevaxuan_footer_skype_button')): 
    	echo '<a href="skype:'.suevaxuan_setting('suevaxuan_footer_skype_button').'" title="Skype" class="social skype"> Skype  </a>'; 
	endif; 

	if (suevaxuan_setting('suevaxuan_footer_admin_button')): 
    	echo '<a href="'.suevaxuan_setting('suevaxuan_footer_admin_button').'" title="Admin" class="social admin" data-no-instant> Admin  </a>'; 
	endif; 

	if (suevaxuan_setting('suevaxuan_footer_email_button')): 
    	echo '<a href="'.suevaxuan_setting('suevaxuan_footer_email_button').'" target="_blank" title="Email" class="social email"> Email  </a>'; 
	endif; 

	$socials = array ("QQ","twitter","flickr","GitHub","google","linkedin","pinterest","tumblr","youtube","vimeo");
	
	foreach ( $socials as $social ) {
		
		if (suevaxuan_setting('suevaxuan_footer_'.$social.'_button')): 
		
			echo '<a href="'.esc_url(suevaxuan_setting('suevaxuan_footer_'.$social.'_button')).'" target="_blank" title="'.$social.'" class="social '.$social.'"> '.$social.'  </a> ';
				
		endif;

	}

	if (suevaxuan_setting('suevaxuan_footer_rss_button') == "on"): 
    	echo '<a href="'; bloginfo('rss2_url'); echo '" title="Rss" class="social rss"> Rss  </a> ';
	endif; 

}?>
