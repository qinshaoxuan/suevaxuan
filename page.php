<?php get_header(); ?>

<!-- start content -->

<div class="container">
    <div class="row" >
    
    <div class="pin-article span12 full" >
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
			<?php if ( has_post_thumbnail() ) : ?>
                    
                <div class="pin-container">
                    <?php the_post_thumbnail('blog'); ?>
                </div>
                    
            <?php endif; ?>
                
            <article class="article">
            
                <h1 class="title"><?php the_title(); ?></h1>             

                <div class="line"></div>
                <?php 
					
					the_content();  
					
					wp_link_pages(); 
					
					if (suevaxuan_setting('suevaxuan_view_comments') == "on" ) :
						comments_template(); ?>
                        <?php if(suevaxuan_setting('suevaxuan_view_comments_declaraction') == "on" ) :
                        echo stripslashes(suevaxuan_setting('suevaxuan_comments_declaraction_text')); ?>
                        <?php endif; ?>
					<?php endif; ?>



            </article>
	        
        <div style="clear:both"></div>
        
    </div>
    
	<?php endwhile; endif;?>
           
    </div>
</div>

<?php get_footer(); ?>