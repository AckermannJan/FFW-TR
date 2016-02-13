
$(document).ready(function () {
    $(".menus").mouseenter(function () {
        $(this).children("div").toggle();
    });
    $(".menus").mouseleave(function () {
        $(this).children("div").hide();
    });

    $(".weiter").mouseenter(function () {
        $(this).stop().animate({ width: "+=100px" }, 200);
        $(this).children('p.more').removeClass('hidden').stop().animate({ top: "0px" });
    });
    $(".weiter").mouseleave(function () {
        $(this).stop().animate({ width: "50px" }, 200);
        $(this).children('p.more').addClass('hidden').stop().animate({ top: "-160px" }, 50);
    });

    /*Year menu Nav*/

    $('#nav2013').click(function () {
        $('#2015').hide();
        $('#2014').hide();
        $('#2016').hide();
        $('#2013').fadeIn();
    });
    $('#nav2014').click(function () {
        $('#2013').hide();
        $('#2015').hide();
        $('#2016').hide();
        $('#2014').fadeIn();
    });
    $('#nav2015').click(function () {
        $('#2014').hide();
        $('#2013').hide();
        $('#2016').hide();
        $('#2015').fadeIn();
    });
    $('#nav2016').click(function () {
        $('#2014').hide();
        $('#2015').hide();
        $('#2013').hide();
        $('#2016').fadeIn();
    });
    
    $('.mainNav-dropDown--item').click(function(){
        $('.mainNav-dropDown--item').children("ul").hide();
        $(this).children("ul").toggle();
    });
    $('.mainNav-header--dropperIcon').click(function(){
        $('.mainNav-dropDown').toggle();
    });

   
    
});