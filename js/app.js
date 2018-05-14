$(document).ready(function(){
    
    $('.animated-icon1,.animated-icon3,.animated-icon4').click(function(){
        $(this).toggleClass('open');
    });

    $('.overlay').hide();

    $('.portfolio').mouseenter(function(e){
        console.log(this);
        $(this).addClass('scale');
        $('> div',this).fadeIn();
    }).mouseleave(function(){
        $('> div', this).fadeOut();
        $(this).removeClass('scale');
    });
});