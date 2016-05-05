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
                                 <a href="<?php the_permalink(); ?>"><span><?php the_time('Y-m-d'); ?></span>
                               <div class="atitle"><?php the_title(); ?></div></a>
                 
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
					<?php
					wp_link_pages(); 
					
					if (suevafree_setting('suevafree_view_comments') == "on" ) :
						comments_template(); ?>
                        <p><ul>
                        <li>支持使用微信、微博和QQ的账户登陆进行评论。由各自网站直接认证，不会泄露你的密码。</li>
                        <li>登陆后可选择分享评论到所绑定的社交网络，如微博和QQ空间。</li>
                        <li>评论提交后无法修改。如需修改，请删除原评论再重新提交。</li>
                        <li>
                        评论支持<span class="mrow" id="MathJax-Span-2"><span class="mi" id="MathJax-Span-3" style="font-family: MathJax_Main;">L</span><span class="mspace" id="MathJax-Span-4" style="height: 0.003em; vertical-align: 0.003em; margin-left: -0.305em;"></span><span class="mpadded" id="MathJax-Span-5"><span style="display: inline-block; position: relative; width: 0.557em; height: 0px;"><span style="position: absolute; clip: rect(3.328em 1000.003em 4.19em -999.997em); top: -4.184em; left: 0.003em;"><span class="mrow" id="MathJax-Span-6"><span class="texatom" id="MathJax-Span-7"><span class="mrow" id="MathJax-Span-8"><span class="mstyle" id="MathJax-Span-9"><span class="mrow" id="MathJax-Span-10"><span class="texatom" id="MathJax-Span-11"><span class="mrow" id="MathJax-Span-12"><span class="mi" id="MathJax-Span-13" style="font-size: 70.7%; font-family: MathJax_Main;">A</span></span></span></span></span></span></span></span><span style="display: inline-block; width: 0px; height: 4.006em;"></span></span></span></span><span class="mspace" id="MathJax-Span-14" style="height: 0.003em; vertical-align: 0.003em; margin-left: -0.182em;"></span><span class="mi" id="MathJax-Span-15" style="font-family: MathJax_Main;">T</span><span class="mspace" id="MathJax-Span-16" style="height: 0.003em; vertical-align: 0.003em; margin-left: -0.12em;"></span><span class="mpadded" id="MathJax-Span-17"><span style="display: inline-block; position: relative; width: 0.68em; height: 0px;"><span style="position: absolute; clip: rect(3.143em 1000.003em 4.19em -999.997em); top: -3.815em; left: 0.003em;"><span class="mrow" id="MathJax-Span-18"><span class="texatom" id="MathJax-Span-19"><span class="mrow" id="MathJax-Span-20"><span class="mi" id="MathJax-Span-21" style="font-family: MathJax_Main;">E</span></span></span></span><span style="display: inline-block; width: 0px; height: 4.006em;"></span></span></span></span><span class="mspace" id="MathJax-Span-22" style="height: 0.003em; vertical-align: 0.003em; margin-left: -0.12em;"></span><span class="mi" id="MathJax-Span-23" style="font-family: MathJax_Main;">X</span></span>代码，行内公式请用<code>\(a+b=c\)</code>，行间公式请用<code>\[a+b=c\]</code>。公式只支持英文字符，发表评论后请刷新</li>
                        </ul></p>

					<?php endif; ?>



            </article>
	        
        <div style="clear:both"></div>
        
    </div>
    
	<?php endwhile; endif;?>
           
    </div>
</div>

<?php get_footer(); ?>