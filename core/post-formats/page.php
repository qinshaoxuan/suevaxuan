<?php 
		
	if ( has_post_thumbnail() ) { ?>
        
		 <div class="pin-container">
			<?php the_post_thumbnail('blog'); ?>
		</div>
        
<?php } ?>
    
<article class="article">

    <h1 class="title"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h1>
    
    <div class="line"></div>

	<?php 
	
	if ( is_search() ):
		
		suevaxuan_excerpt(); 
	
	else:

		the_content();
		
		echo "<div class='clear'></div>";
		
		wp_link_pages();
		
		if (suevaxuan_setting('suevaxuan_view_comments') == "on" ) :
			comments_template(); ?>
			<?php if(suevaxuan_setting('suevaxuan_view_comments_declaraction') == "on" ) :
                echo stripslashes(suevaxuan_setting('suevaxuan_comments_declaraction_text')); ?>
            <?php endif; ?>

		<?php endif;
		
	}?>
	
	

</article>