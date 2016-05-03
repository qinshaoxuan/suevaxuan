<?php

require_once get_template_directory() . '/core/admin/option/default.php';

$panel = array (

/* =================== NAV =================== */

array( "name" => "Navigation",  
       "type" => "navigation",  
       "item" => array( "General" => __( "常规","wip") , "Fonts" => __( "字体","wip") , "Colors" => __( "颜色","wip") , "Backgrounds" => __( "背景","wip")),   
       "start" => "<ul>", 
       "end" => "</ul>"),  
	   
/* =================== END NAV =================== */

/* =================== GENERAL TAB =================== */

array( "type" => "begintab",
	   "tab" => "General",
	   "element" =>
	   
/* START SKINS */ 

	array( "type" => "form",
	       "name" => "General"),

	array( "type" => "start",
	       "id" => "Skins",
	       "name" => __( "皮肤","wip")),

	array( "name" => __( "主题皮肤","wip"),
	       "desc" => __( "选择一个主题风格","wip"),
	       "id" => $shortname."_skins",
	       "type" => "select",
	       "options" => array(
	   	   "Cyan" => __( "Cyan","wip"),
	   	   "Orange" => __( "Orange","wip"),
	   	   "Blue" => __( "Blue","wip"),
	   	   "Red" => __( "Red","wip"),
	   	   "Pink" => __( "Pink","wip"),
	   	   "Purple" => __( "Purple","wip"),
	   	   "Yellow" => __( "Yellow","wip"),
	   	   "Green" => __( "Green","wip"),
		   ),
	       "std" => ""),

	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "General"),

	array( "type" => "end"),

/* END SKINS */ 

/* START MAIN */ 

	array( "type" => "start",
	       "id" => "General",
	       "name" => __( "常规","wip")),

	array( "name" => __( "主页布局","wip"),
	       "desc" => __( "选择一种主页的布局","wip"),
	       "id" => $shortname."_home",
	       "type" => "select",
	       "options" => array(
		   "full" => __( "Full Width","wip"),
	   	   "left-sidebar" => __( "Left Sidebar","wip"),
	   	   "right-sidebar" => __( "Right Sidebar","wip"),
		   ),
	       "std" => ""),

	array( "name" => __( "分类布局","wip"),
	       "desc" => __( "选择一个分类页面的布局","wip"),
	       "id" => $shortname."_category_layout",
	       "type" => "select",
	       "options" => array(
		   "full" => __( "Full Width","wip"),
	   	   "left-sidebar" =>  __( "Left Sidebar","wip"),
	   	   "right-sidebar" => __( "Right Sidebar","wip"),
		   ),
	       "std" => ""),

	array( "name" => __( "Read more","wip"),
	       "desc" => __( "是否开启read more按钮","wip"),
	       "class" => "hidden",
	       "id" => $shortname."_view_readmore",
	       "type" => "on-off",
	       "std" => "on"),

	array( "name" => __( "评论","wip"),
	       "desc" => __( "是否开启评论功能","wip"),
	       "class" => "hidden",
	       "id" => $shortname."_view_comments",
	       "type" => "on-off",
	       "std" => "off"),

	array( "name" => __( "作者","wip"),
	       "desc" => __( "是否在文章上显示作者","wip"),
	       "class" => "hidden",
	       "id" => $shortname."_view_author",
	       "type" => "on-off",
	       "std" => "off"),
	
	array( "name" => __( "定制 css","wip"),
	       "desc" => __( "输入自己定制的css风格","wip"),
	       "id" => $shortname."_custom_css_code",
	       "type" => "textarea",
	       "std" => ""),

	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "General"),

	array( "type" => "end"),

/* END GENERAL */ 

/* START HEADER */ 

	array( "type" => "start",
	       "id" => "Header",
	       "name" => __( "首部","wip")),

	array( "name" => __( "定制 Logo","wip"),
	       "desc" => __( "输入Logo的url","wip"),
           "id" => $shortname."_custom_logo",     
           "data" => "array",
           "type" => "text",
	       "std" => ""),
		   
	array( "name" => __( "定制图标","wip"),
	       "desc" => __( "输入网站图标的url","wip"),
           "id" => $shortname."_custom_favicon",     
           "data" => "array",
           "type" => "text",
	       "std" => ""),

	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "General"),

	array( "type" => "end"),

/* END HEADER */ 

/* START FOOTER */ 

	array( "type" => "start",
	       "id" => "Footer",
	       "name" => __( "底部","wip")),

	array( "name" => __( "版权信息","wip"),
	       "desc" => __( "输入版权信息，将放在网站下方","wip"),
	       "id" => $shortname."_copyright_text",
	       "type" => "textarea",
	       "std" => ""),
		   
	array( "name" => __( "QQ Url","wip"),
	       "desc" => __( "输入 QQ Url (隐藏图标则为空)","wip"),
	       "id" => $shortname."_footer_facebook_button",
	       "type" => "text",
	       "std" => ""),
		   
	array( "name" => __( "Twitter Url","wip"),
	       "desc" => __( "Insert Twitter Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_twitter_button",
	       "type" => "text",
	       "std" => ""),

	array( "name" => __( "Twitter Url","wip"),
	       "desc" => __( "Insert Flickr Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_flickr_button",
	       "type" => "text",
	       "std" => ""),
	
	array( "name" => __( "Google Url","wip"),
	       "desc" => __( "Insert Google Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_google_button",
	       "type" => "text",
	       "std" => ""),

	array( "name" => __( "Linkedin Url","wip"),
	       "desc" => __( "Insert Linkedin Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_linkedin_button",
	       "type" => "text",
	       "std" => ""),

	array( "name" => __( "Myspace Url","wip"),
	       "desc" => __( "Insert Myspace Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_myspace_button",
	       "type" => "text",
	       "std" => ""),

	array( "name" => __( "Pinterest Url","wip"),
	       "desc" => __( "Insert Pinterest Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_pinterest_button",
	       "type" => "text",
	       "std" => ""),
		   
	array( "name" => __( "Tumblr Url","wip"),
	       "desc" => __( "Insert Tumblr Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_tumblr_button",
	       "type" => "text",
	       "std" => ""),

	array( "name" => __( "Youtube Url","wip"),
	       "desc" => __( "Insert Youtube Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_youtube_button",
	       "type" => "text",
	       "std" => ""),
		   
	array( "name" => __( "Youtube Vimeo","wip"),
	       "desc" => __( "Insert Vimeo Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_vimeo_button",
	       "type" => "text",
	       "std" => ""),

	array( "name" => __( "Skype Url","wip"),
	       "desc" => __( "Insert Skype Url (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_skype_button",
	       "type" => "text",
	       "std" => ""),

	array( "name" => __( "Email Address","wip"),
	       "desc" => __( "Insert Email Address (empty if you want to hide the button)","wip"),
	       "id" => $shortname."_footer_email_button",
	       "type" => "text",
	       "std" => ""),
		   
	array( "name" => __( "Feed Rss Button","wip"),
	       "desc" => __( "You want display the Feed Rss button?","wip"),
	       "class" => "hidden",
	       "id" => $shortname."_footer_rss_button",
	       "type" => "on-off",
	       "std" => "1"),
		   
	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "General"),

array( "type" => "end"),

/* END FOOTER */ 

),

array( "type" => "endtab"),
	   

/* =================== FONTS OPTION TAB =================== */

array( "type" => "begintab",
	   "tab" => "Fonts",
	   "element" =>
	   
/* START LOGO FONT */ 

	array( "type" => "form",
	       "name" => "Fonts"),

	array( "type" => "start",
	       "id" => "Fonts",
	       "name" => __( "字体","wip")),

	array( "name" => __( "字体大小","wip"),
	       "desc" => __( "选择Logo的字体大小","wip"),
	       "id" => $shortname."_logo_font_size",
	       "type" => "select",
			"options" => $fontsize,
	       "std" => ""),
		   
	array( "name" => __( "描述字体大小","wip"),
	       "desc" => __( "选择Logo描述的字体大小","wip"),
	       "id" => $shortname."_logo_description_font_size",
	       "type" => "select",
			"options" => $fontsize,
	       "std" => ""),

	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "Fonts"),

	array( "type" => "end"),

/* END LOGO FONT */ 

/* START MENU FONT */ 

	array( "type" => "start",
	       "id" => "Menu font",
	       "name" => __( "菜单字体","wip")),

	array( "name" => __( "菜单大小","wip"),
	       "desc" => __( "选择菜单的大小","wip"),
	       "id" => $shortname."_menu_font_size",
	       "type" => "select",
			"options" => $fontsize,
	       "std" => ""),
		   
	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "Menu font"),

	array( "type" => "end"),

/* END MENU FONT */ 

/* START CONTENT FONT */ 

	array( "type" => "start",
	       "id" => "Contents font",
	       "name" => __( "正文字体","wip")),

	array( "name" => __( "正文字体大小","wip"),
	       "desc" => __( "选择正文字体大小(文章和页面)","wip"),
	       "id" => $shortname."_content_font_size",
	       "type" => "select",
		   "options" => $fontsize,
	       "std" => "14px"),
		   
	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "Menu font"),

	array( "type" => "end"),

/* END CONTENT FONT */ 

/* START HEADLINE FONT SIZES */ 
	   
	array( "type" => "start",
	       "id" => "Headline font sizes",
	       "name" => __( "标题字体大小","wip")),

	array( "name" => __( "H1 标题","wip"),
	       "desc" => __( "选择H1标题大小","wip"),
	       "id" => $shortname."_h1_font_size",
	       "type" => "select",
			"options" => $fontsize,
	       "std" => "26px"),

	array( "name" => __( "H2 标题","wip"),
	       "desc" => __( "选择H2标题大小","wip"),
	       "id" => $shortname."_h2_font_size",
	       "type" => "select",
			"options" => $fontsize,
	       "std" => "24px"),

	array( "name" => __( "H3 标题","wip"),
	       "desc" => __( "选择H3标题大小","wip"),
	       "id" => $shortname."_h3_font_size",
	       "type" => "select",
			"options" => $fontsize,
	       "std" => "21px"),
		   
	array( "name" => __( "H4 标题","wip"),
	       "desc" => __( "选择H4标题大小","wip"),
	       "id" => $shortname."_h4_font_size",
	       "type" => "select",
			"options" => $fontsize,
	       "std" => "16px"),
		   
	array( "name" => __( "H5 标题","wip"),
	       "desc" => __( "选择H5标题大小","wip"),
	       "id" => $shortname."_h5_font_size",
	       "type" => "select",
			"options" => $fontsize,
	       "std" => "14px"),
		   
	array( "name" => __( "H6 标题","wip"),
	       "desc" => __( "选择H6标题大小","wip"),
	       "id" => $shortname."_h6_font_size",
	       "type" => "select",
			"options" => $fontsize,
	       "std" => "12px"),
		   
	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "Headline font sizes"),

	array( "type" => "end"),

/* END FONT SIZES */ 

),

array( "type" => "endtab"),

/* =================== END FONTS OPTION TAB =================== */


/* =================== COLORS OPTION TAB =================== */

array( "type" => "begintab",
	   "tab" => "Colors",
	   "element" =>
	   
/* START TEXT COLOR */ 

	array( "type" => "form",
	       "name" => "Colors"),

	array( "type" => "startopen",
	       "name" => __( "颜色","wip")),

	array( "name" => __( "文本颜色","wip"),
	       "desc" => __( "选择常规文本的颜色","wip"),
	       "id" => $shortname."_text_font_color",
	       "type" => "text",
	       "std" => "#616161"),

	array( "name" => __( "版权信息颜色","wip"),
	       "desc" => __( "选择版权信息的颜色","wip"),
	       "id" => $shortname."_copyright_font_color",
	       "type" => "text",
	       "std" => "#fff"),

	array( "name" => __( "链接颜色","wip"),
	       "desc" => __( "选择链接的颜色","wip"),
	       "id" => $shortname."_link_color",
	       "type" => "text",
	       "std" => "#ff6644"),

	array( "name" => __( "链接悬停颜色","wip"),
	       "desc" => __( "选择链接悬停时的颜色","wip"),
	       "id" => $shortname."_link_color_hover",
	       "type" => "text",
	       "std" => "#d14a2b"),

	array( "name" => __( "Border color","wip"),
	       "desc" => __( "Select a color for borders","wip"),
	       "id" => $shortname."_border_color",
	       "type" => "text",
	       "std" => "#ff6644"),

	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "General"),

	array( "type" => "end"),

/* END TEXT COLOR */ 

),

array( "type" => "endtab"),
	   
/* =================== END COLORS OPTION TAB =================== */
	   
/* =================== BEGIN BACKGROUNDS TAB =================== */

array( "type" => "begintab",
	   "tab" => "Backgrounds",
	   "element" =>
	   
/* START BACKGROUNDS */ 

	array( "type" => "form",
	       "name" => "Backgrounds"),
	   
/* START FOOTER BACKGROUNDS */ 

	array( "type" => "start",
	       "id" => "Footer Background",
	       "name" => __( "底部背景","wip")),

	array( "name" => __( "颜色","wip"),
	       "desc" => __( "选择一个底部背景颜色","wip"),
	       "id" => $shortname."_footer_background_color",
	       "type" => "text",
	       "std" => ""),
	   
	array( "name" => __( "底部背景图片","wip"),
	       "desc" => __( "选择一个底部背景图片","wip"),
	       "id" => $shortname."_footer_background",
	       "type" => "select",
	       "options" => $backgrounds,
	       "std" => ""),
	   
	array( "name" => __( "重复","wip"),
	       "desc" => __( "重复","wip"),
	       "id" => $shortname."_footer_background_repeat",
	       "type" => "select",
	       "options" => array(
	   	   		"repeat" => __( "Repeat","wip"),
				"no-repeat" => __( "No repeat","wip"),
	   			"repeat-x" => __( "Repeat orizzontal","wip"),
				"repeat-y" => __( "Repeat vertical","wip"),
		    ),
	       "std" => ""),
	   
	array( "name" => __( "背景位置","wip"),
	       "desc" => __( "背景位置","wip"),
	       "id" => $shortname."_footer_background_position",
	       "type" => "select",
	       "options" => array(
	   			"" => "None",
	   			"top left" => "top left",
				"top center" => "top center",
	   			"top right" => "top right",
				"center" => "center",
	   			"bottom left" => "bottom left",
				"bottom center" => "bottom center",
				"bottom right" => "bottom right",
		    ),
	       "std" => ""),
		   
	array( "name" => __( "背景依附","wip"),
	       "desc" => __( "背景依附","wip"),
	       "id" => $shortname."_footer_background_attachment",
	       "type" => "select",
	       "options" => array(
	   			"normal" => "normal",
				"fixed" => "fixed",
		    ),
	       "std" => ""),
	   
	array( "type" => "save-button",
	       "value" => "Save",
	       "class" => "Footer Background"),

	array( "type" => "end"),

/* END PAGE BACKGROUNDS */ 

),

array( "type" => "endtab"),
	   
/* END PAGE BACKGROUNDS */ 
	   
/* =================== END BACKGROUNDS TAB =================== */


array( "type" => "endpanel"),  

);

require_once get_template_directory() . '/core/admin/panel.php';

thepane( $panel ); 

?>