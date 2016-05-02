<?php 
	
	global $suevafree_wip_setting;
    
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
            
			<?php if (suevafree_setting('suevafree_view_comments') == "on" ): ?>
            
                <span class="entry-comments">
                    
                    <i class="icon-comments-alt" ></i>
                    <?php echo comments_number( '<a href="'.get_permalink($post->ID).'#respond">'.__( "No comments","wip").'</a>', '<a href="'.get_permalink($post->ID).'#comments">1 '.__( "comment","wip").'</a>', '<a href="'.get_permalink($post->ID).'#comments">% '.__( "comments","wip").'</a>' ); ?>
                
                </span>
            
			<?php endif; ?>
            
            <span class="entry-standard"><i class="icon-quote-left"></i><?php _e( "Quote","wip") ?></span>
        	
			<?php if (suevafree_setting('suevafree_view_author') == "on" ) : ?>

                <span class="entry-author"><i class="icon-user"></i><?php the_author(); ?></span>

            <?php endif; ?>
            
        </div>
    
    </div>

	<?php 
	
	if ((is_home()) || (is_category()) || (is_page()) || (is_search()) || (is_tag()) || (is_archive()) ) {
		
		if ( (!suevafree_setting('suevafree_view_readmore')) || (suevafree_setting('suevafree_view_readmore') == "on" ) ) {
			suevafree_excerpt(); 
		} else if (suevafree_setting('suevafree_view_readmore') == "off" ) {
			the_content(); 
		}

	} else {

		the_content();
		
		echo "<div class='clear'></div>";
		
		wp_link_pages();
		
		echo '<p class="categories"><strong>'. __( "Categories: ","wip").'</strong>'; the_category(', '); echo '</p>';
		
		the_tags( '<footer class="line"><div class="entry-info"><span class="tags">Tags: ', ', ', '</span></div></footer>' );
		
		if (suevafree_setting('suevafree_view_comments') == "on" ) :
			comments_template(); ?>
			<p><ul>
<li>支持使用微信、微博和QQ的账户登陆进行评论。由各自网站直接认证，不会泄露你的密码。</li>
<li>登陆后可选择分享评论到所绑定的社交网络，如微博和QQ空间。</li>
<li>评论提交后无法修改。如需修改，请删除原评论再重新提交。</li>
<li>
评论支持<span class="mrow" id="MathJax-Span-2"><span class="mi" id="MathJax-Span-3" style="font-family: MathJax_Main;">L</span><span class="mspace" id="MathJax-Span-4" style="height: 0.003em; vertical-align: 0.003em; margin-left: -0.305em;"></span><span class="mpadded" id="MathJax-Span-5"><span style="display: inline-block; position: relative; width: 0.557em; height: 0px;"><span style="position: absolute; clip: rect(3.328em 1000.003em 4.19em -999.997em); top: -4.184em; left: 0.003em;"><span class="mrow" id="MathJax-Span-6"><span class="texatom" id="MathJax-Span-7"><span class="mrow" id="MathJax-Span-8"><span class="mstyle" id="MathJax-Span-9"><span class="mrow" id="MathJax-Span-10"><span class="texatom" id="MathJax-Span-11"><span class="mrow" id="MathJax-Span-12"><span class="mi" id="MathJax-Span-13" style="font-size: 70.7%; font-family: MathJax_Main;">A</span></span></span></span></span></span></span></span><span style="display: inline-block; width: 0px; height: 4.006em;"></span></span></span></span><span class="mspace" id="MathJax-Span-14" style="height: 0.003em; vertical-align: 0.003em; margin-left: -0.182em;"></span><span class="mi" id="MathJax-Span-15" style="font-family: MathJax_Main;">T</span><span class="mspace" id="MathJax-Span-16" style="height: 0.003em; vertical-align: 0.003em; margin-left: -0.12em;"></span><span class="mpadded" id="MathJax-Span-17"><span style="display: inline-block; position: relative; width: 0.68em; height: 0px;"><span style="position: absolute; clip: rect(3.143em 1000.003em 4.19em -999.997em); top: -3.815em; left: 0.003em;"><span class="mrow" id="MathJax-Span-18"><span class="texatom" id="MathJax-Span-19"><span class="mrow" id="MathJax-Span-20"><span class="mi" id="MathJax-Span-21" style="font-family: MathJax_Main;">E</span></span></span></span><span style="display: inline-block; width: 0px; height: 4.006em;"></span></span></span></span><span class="mspace" id="MathJax-Span-22" style="height: 0.003em; vertical-align: 0.003em; margin-left: -0.12em;"></span><span class="mi" id="MathJax-Span-23" style="font-family: MathJax_Main;">X</span></span>代码，行内公式请用<code>\(a+b=c\)</code>，行间公式请用<code>\[a+b=c\]</code>。公式只支持英文字符，发表评论后请刷新</li>
</ul></p>

					<?php endif; 
		
	}?>
	

</article>