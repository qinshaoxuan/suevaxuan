<?php function suevaxuan_css_custom() { ?>

<style type="text/css">

<?php

/* =================== BEGIN FOOTER STYLE =================== */

	$footerstyle = '';
	
	/* Background Image */
	if ( (suevaxuan_setting('suevaxuan_footer_background')) && (suevaxuan_setting('suevaxuan_footer_background') <> 'None') ):
		$footerstyle .= 'background: url('.get_template_directory_uri().suevaxuan_setting('suevaxuan_footer_background').');'; 
	elseif ( suevaxuan_setting('suevaxuan_footer_background') == "None") : 
		$footerstyle .= 'background-image: none;'; 
	endif;

	/* Background Repeat */
	if ( (suevaxuan_setting('suevaxuan_footer_background_repeat')) && (suevaxuan_setting('suevaxuan_footer_background') <> 'None') ) 
		$footerstyle .= 'background-repeat:'.suevaxuan_setting('suevaxuan_footer_background_repeat').';'; 
	
	/* Background Position */
	if ( (suevaxuan_setting('suevaxuan_footer_background_position')) && (suevaxuan_setting('suevaxuan_footer_background') <> 'None') ) 
		$footerstyle .= 'background-position:'.suevaxuan_setting('suevaxuan_footer_background_position').';'; 
	
	/* Background Color */
	if (suevaxuan_setting('suevaxuan_footer_background_color')) 
		$footerstyle .= 'background-color:'.suevaxuan_setting('suevaxuan_footer_background_color').';'; 
		
	/* Background Attachment */
	if ( (suevaxuan_setting('suevaxuan_footer_background_attachment')) && ( (suevaxuan_setting('suevaxuan_footer_background') <> 'None') || (suevaxuan_setting('suevaxuan_footer_custom_background')) )  ) 
		$footerstyle .= 'background-attachment:'.suevaxuan_setting('suevaxuan_footer_background_attachment').';'; 

	if ($footerstyle)
		echo '#footer { '.$footerstyle.' } ';
		
		
		
/* =================== END FOOTER STYLE =================== */

/* =================== BEGIN LOGO STYLE =================== */

	$logostyle = '';
	/* Logo Font Size */
	if (suevaxuan_setting('suevaxuan_logo_font_size')) 
		$logostyle .= "font-size:".suevaxuan_setting('suevaxuan_logo_font_size').";"; 
	
	if ($logostyle)
		echo '#logo a { '.$logostyle.' } ';

	$logospanstyle = '';

	/* Logo Font Size */
	if (suevaxuan_setting('suevaxuan_logo_description_font_size')) 
		$logospanstyle .= "font-size:".suevaxuan_setting('suevaxuan_logo_description_font_size').";"; 
	
	if ($logospanstyle)
		echo '#logo a span{ '.$logospanstyle.' } ';


/* =================== END LOGO STYLE =================== */

/* =================== BEGIN NAV STYLE =================== */

	$navstyle = '';

	/* Nav  Font Size */
	if (suevaxuan_setting('suevaxuan_menu_font_size')) 
		$navstyle .= "font-size:".suevaxuan_setting('suevaxuan_menu_font_size').";"; 
	
	/* Nav  Font Color */
	if (suevaxuan_setting('suevaxuan_menu_font_color')) 
		$navstyle .= "color:".suevaxuan_setting('suevaxuan_menu_font_color').";"; 
	
	if ($navstyle)
		echo 'nav#mainmenu ul li a { '.$navstyle.' } ';
		
	if ( suevaxuan_setting('suevaxuan_hover_font_color') ):
		echo "nav#mainmenu ul li a:hover, nav#mainmenu li:hover > a , nav#mainmenu ul li.current-menu-item > a, nav#mainmenu ul li.current_page_item > a, nav#mainmenu ul li.current-menu-parent > a,  nav#mainmenu ul li.current-menu-ancestor > a { color:".suevaxuan_setting('suevaxuan_hover_font_color')." } ;"; 
	endif;
		
		
	if ( suevaxuan_setting('suevaxuan_hover_font_color') ) 
		echo "nav#mainmenu ul ul li a:hover,  nav#mainmenu ul ul li.current-menu-item > a,  nav#mainmenu ul ul li.current-post-ancestor > a, nav#mainmenu ul ul li.current-menu-ancestor > a { color:".suevaxuan_setting('suevaxuan_hover_font_color')."; }"; 

/* =================== END NAV STYLE =================== */

/* =================== BEGIN CONTENT STYLE =================== */

	if (suevaxuan_setting('suevaxuan_content_font_size')) 
		echo ".article p, .article li, .article address, .article dd, .article blockquote, .article td, .article th { font-size:".suevaxuan_setting('suevaxuan_content_font_size')."}"; 

/* =================== END NAV STYLE =================== */

/* =================== START TITLE STYLE =================== */

	if (suevaxuan_setting('suevaxuan_h1_font_size')) 
		echo "h1 {font-size:".suevaxuan_setting('suevaxuan_h1_font_size')."; }"; 
	if (suevaxuan_setting('suevaxuan_h2_font_size')) 
		echo "h2 { font-size:".suevaxuan_setting('suevaxuan_h2_font_size')."; }"; 
	if (suevaxuan_setting('suevaxuan_h3_font_size')) 
		echo "h3 { font-size:".suevaxuan_setting('suevaxuan_h3_font_size')."; }"; 
	if (suevaxuan_setting('suevaxuan_h4_font_size')) 
		echo "h4 { font-size:".suevaxuan_setting('suevaxuan_h4_font_size')."; }"; 
	if (suevaxuan_setting('suevaxuan_h5_font_size')) 
		echo "h5 { font-size:".suevaxuan_setting('suevaxuan_h5_font_size')."; }"; 
	if (suevaxuan_setting('suevaxuan_h6_font_size')) 
		echo "h6 { font-size:".suevaxuan_setting('suevaxuan_h6_font_size')."; }"; 


/* =================== END TITLE STYLE =================== */

/* =================== START LINK STYLE =================== */

	if ( suevaxuan_setting('suevaxuan_link_color') ):
	
		echo '.pin-article .link:hover, .contact-form input[type=submit], .pin-article .quote:hover, .pin-article .link a:hover, .button, .wp-pagenavi a:hover , .wp-pagenavi span.current { background-color: '.suevaxuan_setting('suevaxuan_link_color').'; } ';
		echo 'a, nav#mainmenu ul li a:hover, nav#mainmenu li:hover > a, nav#mainmenu ul li.current-menu-item > a, nav#mainmenu ul li.current_page_item > a, nav#mainmenu ul li.current-menu-parent > a, nav#mainmenu ul li.current_page_ancestor > a, nav#mainmenu ul li.current-menu-ancestor > a { color: '.suevaxuan_setting('suevaxuan_link_color').'; } ';
		echo '::-moz-selection { background-color: '.suevaxuan_setting('suevaxuan_link_color').'; } ';
		echo '::selection { background-color: '.suevaxuan_setting('suevaxuan_link_color').'; } ';
		echo 'nav#mainmenu ul ul { border-top-color: '.suevaxuan_setting('suevaxuan_link_color').'; } ';
		echo 'nav#mainmenu ul ul:before { border-bottom-color: '.suevaxuan_setting('suevaxuan_link_color').'; } ';
		echo 'nav#mainmenu ul ul li ul { border-top-color: '.suevaxuan_setting('suevaxuan_link_color').'; } ';
		echo 'nav#mainmenu ul ul li a:hover, nav#mainmenu ul ul li.current-menu-item > a, nav#mainmenu ul ul li.current_page_item > a, nav#mainmenu ul ul li.current_page_ancestor > a, nav#mainmenu ul ul li.current_page_ancestor > a, nav#mainmenu ul ul li.current-menu-ancestor > a, #sidebar .tagcloud a, #footer .tagcloud a  { background: '.suevaxuan_setting('suevaxuan_link_color').'; } ';
		echo 'nav#mainmenu ul ul li a:hover, nav#mainmenu ul ul li.current-menu-item > a, nav#mainmenu ul ul li.current_page_item > a, nav#mainmenu ul ul li.current_page_ancestor > a, nav#mainmenu ul ul li.current_page_ancestor > a, nav#mainmenu ul ul li.current-menu-ancestor > a  { border-top-color: '.suevaxuan_setting('suevaxuan_link_color').'; } ';
		
		
	endif;	
	
	if ( suevaxuan_setting('suevaxuan_link_color_hover') ):

		echo '.contact-form input[type=submit]:hover, .button:hover, #sidebar .tagcloud a:hover, #footer .tagcloud a:hover, .contact-form input[type=submit]:hover, .archives li a:hover .archive-date:after, .m-title:hover:after { background: '.suevaxuan_setting('suevaxuan_link_color_hover').'; } ';
		echo 'a:hover, #footer a:hover, #footer ul.widget-category li:hover, #footer ul.widget-category li a:hover, .pin-article h1.title a:hover, #logo a:hover, .archives li a:hover .archive-date { color: '.suevaxuan_setting('suevaxuan_link_color_hover').'; } ';
	
	endif;	

	if ( suevaxuan_setting('suevaxuan_border_color') ):
	
		echo '#footer, #footer .widget, article blockquote { border-color: '.suevaxuan_setting('suevaxuan_border_color').'; } ';
		
	endif;	
		
	if ( suevaxuan_setting('suevaxuan_copyright_font_color')):
	
		echo '#footer .title, #footer p, #footer li, #footer address, #footer dd, #footer blockquote, #footer td, #footer th, #footer .textwidget, #footer a, #footer ul,#footer p, #footer .copyright p, #footer .copyright a  { color: '.suevaxuan_setting('suevaxuan_copyright_font_color').'; } ';
		
	endif;	

/* =================== END LINK STYLE =================== */


	if (suevaxuan_setting('suevaxuan_custom_css_code'))
		echo suevaxuan_setting('suevaxuan_custom_css_code'); 

?>

</style>
    
<?php }

add_action('wp_head', 'suevaxuan_css_custom');

?>