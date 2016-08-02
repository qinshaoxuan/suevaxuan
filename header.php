<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>


<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (suevaxuan_setting('suevaxuan_custom_favicon')) : ?> <link rel="shortcut icon" href="<?php echo suevaxuan_setting('suevaxuan_custom_favicon'); ?>"/> <?php endif; ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header class="header container" >

	<div class="row">
    	<div class="span12" >
        	<div id="logo">
                    
            	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name') ?>" style="font-size:70px;font-family:'Allura',Consolas,Verdana, Geneva, sans-serif;">
                        
                	<?php 
					
                    	if ( suevaxuan_setting('suevaxuan_custom_logo')) :
                        	echo "<img src='".suevaxuan_setting('suevaxuan_custom_logo')."' alt='logo'>"; 
                        else: 
                            bloginfo('name');
							echo "<span>".get_bloginfo('description')."</span>";
                        endif; 
						
					?>
                            
                </a>
                        
			</div>

            <nav id="mainmenu">
                <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'false','depth' => 3  )); ?>
            </nav>                
        </div>
	</div>

</header>