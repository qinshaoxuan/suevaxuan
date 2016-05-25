<?php 
	
	global $suevaxuan_wip_setting;
    
	if ( has_post_thumbnail() ) : ?>
        
		<div class="pin-container">
			<?php the_post_thumbnail('blog'); ?>
        </div>
        
<?php 

	endif; 
	
?>
    
<article class="article">

    <h1 class="title"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h1>
    
    <div class="line"> 

        <div class="entry-info">
       
            <span class="entry-date"><i class="icon-time" ></i><?php echo get_the_date(); ?></span>
            
			<?php if (suevaxuan_setting('suevaxuan_view_comments') == "on" ): ?>
            
                <span class="entry-comments">
                    
                    <i class="icon-comments-alt" ></i>
                    <?php echo comments_number( '<a href="'.get_permalink($post->ID).'#respond">'.__( "No comments","wip").'</a>', '<a href="'.get_permalink($post->ID).'#comments">1 '.__( "comment","wip").'</a>', '<a href="'.get_permalink($post->ID).'#comments">% '.__( "comments","wip").'</a>' ); ?>
                
                </span>
            
			<?php endif; ?>
            
            <span class="entry-standard"><i class="icon-picture"></i><?php _e( "Image","wip") ?></span>
        	
			<?php if (suevaxuan_setting('suevaxuan_view_author') == "on" ) : ?>

                <span class="entry-author"><i class="icon-user"></i><?php the_author(); ?></span>

            <?php endif; ?>
            
        </div>
    
    </div>

	<?php 
	
	if ((is_home()) || (is_category()) || (is_page()) || (is_search()) || (is_tag()) || (is_archive()) ) {
		
		if ( (!suevaxuan_setting('suevaxuan_view_readmore')) || (suevaxuan_setting('suevaxuan_view_readmore') == "on" ) ) {
			suevaxuan_excerpt(); 
		} else if (suevaxuan_setting('suevaxuan_view_readmore') == "off" ) {
			the_content(); 
		}

	} else {

		the_content();
		
		echo "<div class='clear'></div>";
		
		wp_link_pages();
		
		echo '<p class="categories"><strong>'. __( "Categories: ","wip").'</strong>'; the_category(', '); echo '</p>';
		
		the_tags( '<footer class="line"><div class="entry-info"><span class="tags">Tags: ', ', ', '</span></div></footer>' );
		
		if (suevaxuan_setting('suevaxuan_view_comments') == "on" ) :
			comments_template(); ?>
			<?php if(suevaxuan_setting('suevaxuan_view_comments_declaraction') == "on" && have_comments() ) :
                echo stripslashes(suevaxuan_setting('suevaxuan_comments_declaraction_text')); ?>
            <?php endif; ?>

		<?php endif;
		
	}?>
	
	

</article>