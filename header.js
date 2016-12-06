/**
 * Created by dmitriy on 06.12.16.
 */
$(document).ready(function(){
    var iframe = $('#content_frame', parent.document.body);
    iframe.height($(document.body).height());
    var $menu = $("#menu");

    $(window).scroll(function(){
        if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
            $menu.fadeOut('fast',function(){
                $(this).removeClass("default")
                    .addClass("fixed transbg")
                    .fadeIn('fast');
            });
        } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
            $menu.fadeOut('fast',function(){
                $(this).removeClass("fixed transbg")
                    .addClass("default")
                    .fadeIn('fast');
            });
        }
    });
});

