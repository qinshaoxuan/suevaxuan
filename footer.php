<footer id="footer">
<div class="container">
	
		<?php if ( is_active_sidebar('bottom-sidebar-area') ) : ?>
        
            <!-- FOOTER WIDGET BEGINS -->
            
                <section class="row widget">
                    <?php dynamic_sidebar('bottom-sidebar-area') ?>
                </section>
                
            <!-- FOOTER WIDGET END -->
            
        <?php endif; ?>

         <div class="row copyright" >
            <div class="span6" >
            <p>
				<?php if (suevaxuan_setting('suevaxuan_copyright_text')): ?>
                   <?php echo stripslashes(suevaxuan_setting('suevaxuan_copyright_text')); ?>
                <?php else: ?>
                  &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo("name"); ?>  
                <?php endif; ?>
            </p>
            </div>
            <div class="span5" >
                <!-- start social -->
                <div class="socials">
                    <center><?php suevaxuan_socials(); ?></center>
                </div>
                <!-- end social -->

            </div>
		</div>
	</div>
</footer>

<?php wp_footer() ?>   

<!-- gotop -->

<?php if( wp_is_mobile() ){  ?>

    <div id="sticky-nav"><a class="gotop-mobile" href="#top"></a> 
    <?php if ( is_singular() && get_post_meta($post->ID, '_content_index_enable', true) == '1') { ?>

        <a class="indexbtn-mobile" href="#index" onclick="jQuery('.content-index').slideToggle('fast');"><span>文章目录</span></a> 
        <script>
            jQuery('.content-index').hide();
        </script>

    <?php } ?>

    </div>

<?php }else{ ?>

    <div id="sticky-nav"><a class="gotop" href="#top"><span>返回顶部</span></a> 

    <?php if ( !is_singular() ) { ?>

        <a class="about" href="http://www.qinshaoxuan.com/about" target="_blank"><span>关于我　</span></a> 

    <?php } ?>

    <?php if ( is_singular() && get_post_meta($post->ID, '_content_index_enable', true) == '1') { ?>

        <a class="indexbtn" href="#index" onclick="jQuery('.content-index').slideToggle('fast');"><span>文章目录</span></a> 

    <?php } ?>

    <?php if ( is_singular() && comments_open() ) { ?>

        <a class="gocom" href="#respond"><span>发表评论</span></a>

    <?php } ?>

    <a class="gobtm" href="#colophon"><span>前往底部</span></a></div>

<?php } ?>

<!-- gotop end -->

</body>

</html>