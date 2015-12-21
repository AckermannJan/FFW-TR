$(document).ready(function(){
    $('#mainNav-tab1').hide();
    $('#mainNav-tab2').hide();
    $('#mainNav-tab3').hide();
    $('#mainNav-tab4').hide();
    $('#tab1').mouseover(function(){
        $('#mainNav-tab1').show();
        $('#mainNav-tab2').hide();
        $('#mainNav-tab3').hide();
        $('#mainNav-tab4').hide();
    });
    $('#tab2').mouseover(function(){
        $('#mainNav-tab2').show();
        $('#mainNav-tab1').hide();
        $('#mainNav-tab3').hide();
        $('#mainNav-tab4').hide();
    });
    $('#tab3').mouseover(function(){
        $('#mainNav-tab3').show();
        $('#mainNav-tab2').hide();
        $('#mainNav-tab1').hide();
        $('#mainNav-tab4').hide();
    });
    $('#tab4').mouseover(function(){
        $('#mainNav-tab4').show();
        $('#mainNav-tab2').hide();
        $('#mainNav-tab3').hide();
        $('#mainNav-tab1').hide();
    });
    
    $('.mainNav').mouseleave(function(){        
        setTimeout(function() {
            $('#mainNav-tab1').hide();
            $('#mainNav-tab2').hide();
            $('#mainNav-tab3').hide();
            $('#mainNav-tab4').hide();
        }, 500);
    });
    $('.mainNav-tab--divider > .btn').click(function(){    
        $('#mainNav-tab1').hide();
        $('#mainNav-tab2').hide();
        $('#mainNav-tab3').hide();
        $('#mainNav-tab4').hide();
    });
    
});