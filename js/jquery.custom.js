jQuery(document).ready(function(){
	jQuery('nav#mainmenu').mobileMenu();
});
		
jQuery(document).ready(function($){


if(jQuery('.gobtm').length>0){
	jQuery('a.social').tipsy({fade:true, gravity:'s'});
}

if(jQuery('.indexbtn').length>0){
	jQuery('.content-index-title').tipsy({fade:true, gravity:'e', fallback: "点击隐藏"});
	jQuery('.content-index ul.children').css({margin: '0'});
}else{
	jQuery('.content-index ul.children').css({margin: '0px 0px 0px 15px'});
}
jQuery('.content-index-title').click(function(){
	jQuery('.content-index').slideToggle('fast');
});

jQuery('nav#mainmenu li').hover(
		function () {
			jQuery(this).children('ul').stop(true, true).fadeIn(100);
 
		}, 
		function () {
			jQuery(this).children('ul').stop(true, true).fadeOut(400);		
		}
		

);

jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
			// Parameters for PrettyPhoto styling
			animationSpeed:'fast',
			slideshow:5000,
			theme:'pp_default',
			show_title:false,
			overlay_gallery: false,
			social_tools: false
});

jQuery('.archives .m-title').click(function() {
    jQuery(this).next().slideToggle('fast');
    return false;
}); 

jQuery('.gotop').click(function() {
    $('body,html').animate({
            scrollTop: 0
        },
        1200);
    return false;
});

jQuery('.gotop-mobile').click(function() {
    $('body,html').animate({
            scrollTop: 0
        },
        1200);
    return false;
});

jQuery('.gobtm').click(function() {
    $('body,html').animate({
            scrollTop: document.body.scrollHeight
        },
        1200);
    return false;
});

jQuery('.gocom').click(function() {
    jQuery('body,html').animate({
            scrollTop: jQuery("a[name='comments']")[0].offsetTop
        },
        1200);
    return false;
});

$('.cat-item a').hover(function(){
        $(this).stop().animate({margin:"0 0 0 10px"},0);
    },
    function(){
        $(this).stop().animate({margin:"0 0 0 0px"},0);
    }
);

});  


       