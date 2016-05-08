<?php


function suevaxuan_add_menu() {
	global $suevaxuan_themename, $suevaxuan_adminmenuname,$suevaxuan_optionfile;
	
	add_theme_page("主题设置", "主题设置", 'administrator',  'themeoption', 'suevaxuan_themeoption');
}

add_action('admin_menu', 'suevaxuan_add_menu'); 

function suevaxuan_add_script() {
	
	 global $wp_version;
     wp_enqueue_style( "thickbox" );
     add_thickbox();

	 $file_dir = get_template_directory_uri()."/core/admin/include";
	 wp_enqueue_style ( 'suevaxuan_panel', $file_dir.'/css/wip_panel.css' ); 

	 wp_enqueue_script ( 'jquery.custom', $file_dir.'/js/jquery.custom.js',array('jquery','media-upload','thickbox'),'1.0',true ); 
	 wp_enqueue_script ( 'wip_on_off', $file_dir.'/js/wip_on_off.js','3.5', true); 
	 wp_enqueue_style  ( 'wip_on_off', $file_dir.'/css/wip_on_off.css' );
}

add_action('admin_init', 'suevaxuan_add_script');

function suevaxuan_save_option ( $panel ) {
	
	global $suevaxuan_message_action;
	
	$suevaxuan_setting = get_option( suevaxuan_themename() );
	
	if ( $suevaxuan_setting != false ) 
						
		{
			$suevaxuan_setting = maybe_unserialize( $suevaxuan_setting );
		} 
						
	else 
						
		{
			$suevaxuan_setting = array();
		}      
		
	if ( "Save" == suevaxuan_request('action') ) {

		foreach ($panel as $element ) {
			
			if ( ( isset($element['tab']) )  && ( $element['tab'] == $_GET['tab'] ) ){
					
				foreach ($element as $value )
		
					{
		
						if ( $_REQUEST['element-opened'] == "Skins" )
		
							{
								require_once get_template_directory() . '/core/admin/option/skins.php';
								update_option( suevaxuan_themename(), array_merge( $suevaxuan_setting  ,$current) );
								break;
							} 
						
						else if ( ( isset( $value['id']) ) && ( isset( $_POST[$value["id"]] ) ) ) 	
			
							{	
								if ( $value["id"] == "suevaxuan_copyright_text"||$value["id"] == "suevaxuan_comments_declaraction_text"):
									$current[$value["id"]] = $_REQUEST[$value["id"]];
								else:
									$current[$value["id"]] = sanitize_text_field( $_REQUEST[$value["id"]] );
								endif; 
								
								update_option( suevaxuan_themename(), array_merge( $suevaxuan_setting  ,$current) );
							}
							
								
							
						$suevaxuan_message_action = 'Options saved successfully.';
					
					}
				
				}
		
			}
		}
}

function suevaxuan_message () {
		global $suevaxuan_message_action;
		if (isset($suevaxuan_message_action))
		echo '<div id="message" class="updated fade message_save wip_message"><p><strong>'.$suevaxuan_message_action.'</strong></p></div>';
	}


function suevaxuan_themeoption() {

		$suevaxuan_themename = "Sueva";
		$shortname = "suevaxuan";
		require_once get_template_directory() . '/core/admin/option/options.php';   

	}

?>