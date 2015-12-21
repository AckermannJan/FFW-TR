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
		var posLeft = $(this).position().left;
		$('#mainNav-tab1').css("left", posLeft-80);
    });
    $('#tab2').mouseover(function(){
        $('#mainNav-tab2').show();
        $('#mainNav-tab1').hide();
        $('#mainNav-tab3').hide();
        $('#mainNav-tab4').hide();
		
		var posLeft = $(this).position().left;
		$('#mainNav-tab2').css("left", posLeft-120);
    });
    $('#tab3').mouseover(function(){
        $('#mainNav-tab3').show();
        $('#mainNav-tab2').hide();
        $('#mainNav-tab1').hide();
        $('#mainNav-tab4').hide();
		var posLeft = $(this).position().left;
		$('#mainNav-tab3').css("left", posLeft-70);
    });
    $('#tab4').mouseover(function(){
        $('#mainNav-tab4').show();
        $('#mainNav-tab2').hide();
        $('#mainNav-tab3').hide();
        $('#mainNav-tab1').hide();
		var posLeft = $(this).position().left;
		$('#mainNav-tab4').css("left", posLeft-144);
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