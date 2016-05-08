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


<div id="sticky-nav"><a class="gotop" onclick="window.scrollTo(0,0);return false;" href="#top">
<span>返回顶部</span></a> 
<a class="about" href="http://www.qinshaoxuan.com/about" target="_blank">
<span>&nbsp;关于我&nbsp;&nbsp;</span></a> 
<?php if ( is_singular() && comments_open() ) { ?>
<a class="gocom" onclick="document.getElementById('comment').focus();return false;" href="#respond">
<span>发表评论</span></a>
<?php } ?>
<a class="gobtm" onclick="window.scrollTo(0,document.body.scrollHeight);return false;" href="#colophon">
<span>前往底部</span></a></div>

</body>

</html>