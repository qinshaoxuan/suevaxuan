<?php
/*
Template Name: map
*/
?>
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
					
                	<?php echo "<script type=\"text/javascript\" src=\"".get_template_directory_uri()."/js/echarts.min.js\"></script>
                    <script type=\"text/javascript\" src=\"".get_template_directory_uri()."/js/china.js\"></script>
                    <div id=\"map\" style=\"width: 100%;height:600px;\"></div>
                    <script type=\"text/javascript\" src=\"".get_template_directory_uri()."/js/map.js\"></script>"; ?>
					<?php 
                    the_content();                   
                    wp_link_pages(); 
                    
                    if (suevaxuan_setting('suevaxuan_view_comments') == "on" ) :
                        comments_template(); 
                        if(suevaxuan_setting('suevaxuan_view_comments_declaraction') == "on" && comments_open() ) :
                        echo stripslashes(suevaxuan_setting('suevaxuan_comments_declaraction_text')); 
                        endif;
                    endif; 
                    
                    ?>



            </article>
	        
        <div style="clear:both"></div>
        
    </div>
    
	<?php endwhile; endif;?>
           
    </div>
</div>

<?php get_footer(); ?>