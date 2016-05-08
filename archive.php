<?php get_header(); ?>

<div class="container">
	<div class="row" id="blog" >
    
	<?php if ( ( suevaxuan_template('sidebar') == "left-sidebar" ) || ( suevaxuan_template('sidebar') == "right-sidebar" ) ) : ?>
        
        <div class="<?php echo suevaxuan_template('span') .' '. suevaxuan_template('sidebar'); ?>"> 
        <div class="row"> 
        
    <?php endif; ?>
        

		<?php if ( have_posts() ) :  ?>
		
        <div <?php post_class(array('pin-article', suevaxuan_template('span') )); ?> >

			<article class="article category">
				<?php if (is_tag()) { ?>

                    <p><?php _e( 'Tag','wip'); ?> : <strong> <?php echo urldecode(get_query_var('tag'));  ?> </strong> </p>
				
				<?php  }else if (is_category()) { ?>
				
                    <p><?php _e( 'Category','wip'); ?> : <strong> <?php the_category(' '); ?> </strong> </p>

                <?php }else{ ?>
				
                    <p><?php _e( 'Archive','wip'); ?> : <strong> <?php the_time('Y年F'); ?> </strong> </p>

				<?php } ?>
			</article>

    	</div>
		
		<?php while ( have_posts() ) : the_post(); ?>

        <div <?php post_class(array('pin-article', suevaxuan_template('span') )); ?> >
    
				<?php do_action('suevaxuan_postformat'); ?>
        
                <div style="clear:both"></div>
            
            </div>
		
		<?php endwhile; else:  ?>

        <div <?php post_class(array('pin-article', suevaxuan_template('span') )); ?> >
    
                <article class="article category">
                    
                    <h1> Not found </h1>
                    <p><?php _e( 'Sorry, no posts matched into ',"wip" ) ?> <strong>: <?php the_category(' '); ?></strong></p>
     
                </article>
    
            </div>
	
		<?php endif; ?>
        
	<?php if ( ( suevaxuan_template('sidebar') == "left-sidebar" ) || ( suevaxuan_template('sidebar') == "right-sidebar" ) ) : ?>
        
        </div>
        </div>
        
    <?php endif; ?>

	<?php if ( suevaxuan_template('span') == "span8" ) :  ?>

        <section id="sidebar" class="pin-article span4">
            <div class="sidebar-box">
    
                <?php if ( is_active_sidebar('category-sidebar-area') ) { 
                
                    dynamic_sidebar('category-sidebar-area');
                
                } else { 
                    
                    the_widget( 'WP_Widget_Archives','',
                    array('before_widget' => '<div class="widget-box">',
                          'after_widget'  => '</div>',
                          'before_title'  => '<h3 class="title">',
                          'after_title'   => '</h3>'
                    ));
    
                    the_widget( 'WP_Widget_Calendar',
                    array("title"=> __('Calendar','wip')),
                    array('before_widget' => '<div class="widget-box">',
                          'after_widget'  => '</div>',
                          'before_title'  => '<h3 class="title">',
                          'after_title'   => '</h3>'
                    ));
    
                    the_widget( 'WP_Widget_Categories','',
                    array('before_widget' => '<div class="widget-box">',
                          'after_widget'  => '</div>',
                          'before_title'  => '<h3 class="title">',
                          'after_title'   => '</h3>'
                    ));
                
                 } 
                 
                 ?>
    
            </div>
        </section>

    <?php endif; ?>

    </div>
</div>

<?php

	get_template_part('pagination');
	get_footer(); 

?>