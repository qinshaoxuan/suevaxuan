<?php
/*
Template Name: archives
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
					
                	<div class="archives">
                        <?php
                        $previous_year = $year = 0;
                        $previous_month = $month = 0;
                        $ul_open = false;
                 
                        $myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
                 
                        foreach($myposts as $post) :
                            setup_postdata($post);
                 
                            $year = mysql2date('Y', $post->post_date);
                            $month = mysql2date('n', $post->post_date);
                            $day = mysql2date('j', $post->post_date);
                 
                            if($year != $previous_year || $month != $previous_month) :
                                if($ul_open == true) : 
                                    echo '</ul>';
                                endif;
                 
                                echo '<h3 class="m-title">'; echo the_time('Y-m'); echo '</h3>';
                                echo '<ul>';
                                $ul_open = true;
                 
                            endif;
                 
                            $previous_year = $year; $previous_month = $month;
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><div class="archive-date"><?php the_time('Y-m-d'); ?></div><div class="atitle"><?php the_title(); ?></div></a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
					<?php
					wp_link_pages(); 
					
					if (suevaxuan_setting('suevaxuan_view_comments') == "on" ) :
                        comments_template(); ?>
                        <?php if(suevaxuan_setting('suevaxuan_view_comments_declaraction') == "on" && have_comments() ) :
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