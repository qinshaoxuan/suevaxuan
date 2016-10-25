jQuery(document).ready(function() {
    jQuery('nav#mainmenu').mobileMenu();
});

jQuery(document).ready(function($) {

    //对文章中插入的图片使用prettyPhoto插件
    $('.alignnone').parent().attr('data-rel', 'prettyPhoto');


    if (jQuery('.gobtm').length > 0) {
        jQuery('a.social').tipsy({ fade: true, gravity: 's' });
    }

    if (jQuery('.indexbtn').length > 0) {
        jQuery('.content-index-title').tipsy({ fade: true, gravity: 'e', fallback: "点击隐藏" });
        jQuery('.content-index ul.children').css({ margin: '0' });
    } else {
        jQuery('.content-index ul.children').css({ margin: '0px 0px 0px 15px' });
    }
    jQuery('.content-index-title').click(function() {
        jQuery('.content-index').slideToggle('fast');
    });

    jQuery('nav#mainmenu li').hover(
        function() {
            jQuery(this).children('ul').stop(true, true).fadeIn(100);

        },
        function() {
            jQuery(this).children('ul').stop(true, true).fadeOut(400);
        }


    );

    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
        // Parameters for PrettyPhoto styling
        animationSpeed: 'fast',
        slideshow: 5000,
        theme: 'pp_default',
        show_title: false,
        overlay_gallery: false,
        social_tools: false
    });

    jQuery('.archives .m-title').click(function() {
        jQuery(this).next().slideToggle('fast');
        return false;
    });

    jQuery('.gotop').click(function() {
        $('body,html').stop().animate({
                scrollTop: 0
            },
            1200);
        return false;
    });

    jQuery('.gotop-mobile').click(function() {
        $('body,html').stop().animate({
                scrollTop: 0
            },
            1200);
        return false;
    });

    jQuery('.gobtm').click(function() {
        $('body,html').stop().animate({
                scrollTop: document.body.scrollHeight
            },
            1200);
        return false;
    });

    jQuery('.gocom').click(function() {
        jQuery('body,html').stop().animate({
                scrollTop: jQuery("a[name='comments']")[0].offsetTop
            },
            1200);
        return false;
    });

    var str = "<!--\n\n\
                              :rSGH#@@@@@@@@@H9hi.  .     .,,::::::;;iiiiiirii;;,          .;1SX#@@@@@@@@@@A3i.              \n\
                              1XHM@#HHHBMMBM##BH&5,.,...,rh398G8GGXX&HHHAXAHHH&XSs;,,,....:1&BBM#MBHBBMBBMM#H9s              \n\
                            ,rX@@MH8i.:i1s,s&M@@@#M3s8MMM@@@#MBHBM#MBHBMMMM#MM#@####@#MHAAB#@#HA&5:.,;r;,r5&#@B5;.           \n\
                            r3H#&S;         .r9A#@@##BHHHH&GSs;:ihhs;.,irrs1sr5999XHHB#@@@@#B9;..         ,SAM@@&;           \n\
                           .5H#Mh.             sG&&X8s..,.                         ..;SGAHA8s:            .18H##&r           \n\
                           .5H#Mh.               ,:,                                   .::.               .rSH@MXs,          \n\
                           .5A#M5,                                        ,rs1r;.                         .iSH@#Xi           \n\
                           .h&BM&3;                                     ,r8M#MB&r                         .1GBMGh,           \n\
                            ;h&#@Ar            ,s11h1i.                 1H#MGhS83h,                      .;G#@Hh:.           \n\
                             .8@@MX5:        :hXM&S5S885r.            ;5X##A1  .SA8h,                    1GB@@Bs.            \n\
                             .9#@#X5:        h#@#5   s9XXSr.          h#@@#BG1: ,sGH9s,               .,rX@#BGh,             \n\
                            s9H#Gh,        ;SGABM&Si   ;hXASr.        1M@@@@BGs   :hAHr               .SHM#BG;               \n\
                           :8@@Ar        :S&##HM@@#S    .5&B&s.       hM@@B&5;,    .s1,               .3M###Ar               \n\
                          1XB#&S;        ,18M@@@@MA1     ,rXASi.      h#@@MA91:                        :1&@@Bs               \n\
                        ,rG@@#S,.          sM@@@#MB81:     ;i;,       hM@@@@@Bh                         .9#@Bs               \n\
                        sXB#BGr            ,s3AM#@@@Hh                ,r58&AAGs                         .SB@Bs               \n\
                      .;3M#HS;.              .;hGB#Gs:                   ,:;:,.                         .SB#Bs               \n\
                      :1X#MXs                   ,;i,                                                    .SH#Hs               \n\
                      :1X#M&1                            ,i535h53G9s:                                   .hXMBs               \n\
                      ;5&#MA1                           .hGHBBHHHMASr.                                  .1GMBs               \n\
                      sGB@BXs                            .;sh5hi;;:,.                                   .5A#Bs               \n\
                      sGB@M&s                                         ..,,,..                           ,9M@Bs               \n\
                      i9A@#A1                      ;si;rr,          .;h8XX31:                           ,9#@Bs               \n\
                      i3A#H8r                      r9H#BXs.  ...   .;hG##HS,                           ,rX@#&r               \n\
                      ,rG@MXs                      ,r9A##A95h983Sh58&BB&3s:                            SB@#9i,               \n\
                       .5B##8s,                       ,5A#@@@@#MMM##MA3;.                            .rG@M&r                 \n\
                        ;hX#@B5,                        ,SXXG9Shh5S3h:.                            .;SAMM3i,                 \n\
                         .SM@#H8s,                                                               .:5ABHXS;                   \n\
                          ;5&@@@H81:                                                         .;1S9G&A91:                     \n\
                            s9&B@@BX3hr:                                                   :sS&M@M&Si.                       \n\
                              ;1SGB@@@B&8Shhhh1;                                     .rh5S3XBMB&8h:.                         \n\
                                 .r59XHMBMM###M9,                                    :G#@@@@@B81.                            \n\
                                    .:iriSM@@@@H9r                             .   :5GM#&XAB@#AS;.                           \n\
                                         rH@#@@@#A9r                         .:i58SSGAHXr:rSXB#M&h.                          \n\
                                       :3A#@M&3GB@@BG31:               .  iS9GXA#@H8s:irhs:,:1XB@H3r                         \n\
                                       rB@@B&5,iS39H@MAX8S1i::;1hri;;;sS9XHM@@#HGSs;.   ;s1r ,18M@#3.                        \n\
                                       rH#&3i,  ,..:risX#MMHAAABBHAHHAHMBH91sri;,.        ::..;5&M@9.                        \n\
                                       rHMGh.  ;s;    .s9H@@@@@#MM#@@@@@Gr,  .ih5h;.  ..,;rh8XXAB##X1:                       \n\
                                       iAM&83S38GX&G8X&AHM@@@@@########@BGGX&&BMMBA&XGX&AHM########BX1                       \n\
                                       iH@MHX&BMM##BAHMHAHM##@@@@@@#&53AHHBMMMBH&XH#####MBMBA3rr5X#H8s                       \n\
                                       iABX5;:i9#X1i:::,:h8B@@#MM@@#Xr::,::::::,,,,i5XMHh;::,.  .5M#B5                       \n\
                                       rHMXh.  5MXs,    .1GB@###M##@B81             .sA#A3,      1A##S                       \n\
                                       rHMG1. .SMXs:    ,9M@@@#@###@#&5.             i&#M8:      1H##S                       \n\
                                       rHB9s. .5BXh;    .18H@@@##@@#A3r.            .rA@#G;      1A##S                       \n\
                                       rBB5;.  5B&Si      ,18H#@@@B9s.               iA@@A;      sGB#S                       \n\
                                       ;88s:   sGh.         ,sS8X&3,                 :3&&3:      :s3G1                       \n\
                                                                                                                             \n\
           i1si.,s11i               i1hs.    :s1s;                                                                           \n\
      .i1h9B@@&:rB@@8,:1hh;       r3B#X5.    h#@@3          ,s5555555h11h555555h;          ,15hh551; ;h55hhhs,               \n\
      .s39XB@@&;rH@@8,;SA@&5;  .r3&M@B9hsshr 1M@@AS55hs:    ,5888988&#@@BG998889i    .s5555S9&#BGAMS,3#AGH@@Bs               \n\
          ,X@@&:iH@@9.  ;53Si  ,G@MA939GAB#A9X#H939H@@B1            sA@@9            ;XB8G#X.iH9 1B3,SH1 9@@Bs               \n\
    .199938H#@M8G#@@H8333S33i  ,8#@Hi  iH@#@@B3i   S@@Mh            sH@#3            :XX:;AB8XMH8&#3,SMX3H#X5:               \n\
    .s333S9H#@B98M@@H9SS55SSi  ,G@@Ai  iA@@H3S393r.3@@Mh  ,h88888899&#@@H898889983;  ;AH;iAH9G#H9XM3,S@@@@Bs                 \n\
          :&@@X,iH@@8.;389i    ,G@@MX88XM@@G.,h&@9,3@@M1  .sSSSSSSS58M@@AS5SSSS5Sh:  ;AH;iHX,rB8.hM3,3#XSA#&S;               \n\
          ;&@@&;rH#MAGA#&5;    ,G@@M9hh9M@@G,  hM3,SM@Mh          :S&#@MA8r          ;AH;iHMX&MHGA#3,SB1.9@@Ms               \n\
        ,SXHM@&;.r9B#MGs,      ,G@#&;  ;&#@G,  :r:.SMH8r          sB@@@#@@9.         :XBX&#HS9M&5G#3.5&1,8@@Bs               \n\
    .hGXG55A#@&;;9AB##3.sXX8r  ,9M#Ar  rA#M9,      SMMAs        ;9H#A5ss8MBX1.       ;XHSSBX,rB8.1B3.5BH&MM3i,               \n\
     ;ssr.;&@@#AA#&sSBBAM@@#5  ,G#MBAXXABM#G,  .,.,3#@Mh   ...;9H@Hh:   .r8@MX1...   .i;  i58AM8:5B3.hHMB3i.                 \n\
        .S&B##Ahri: .;9#@M#Bh  ,9BMA5rr5AMB9,  sX&&BM3i.  ,3&&A#H1:       .iG#X3G8i      ;3A#&shGHH5.5HS;                    \n\
         :;;:;,        :::::.   .::,    ,::.   .;i;;:      :ii;;,           .:::;;.       :;;,  ;;:. .:.                     \n\
                                                                                                                             \n\
    -->";

    $('body').prepend(str);
});
