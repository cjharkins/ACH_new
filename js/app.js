$(document).ready(function(){

    $('.animated-icon1,.animated-icon3,.animated-icon4').click(function(){
        $(this).toggleClass('open');
    });
    $('.portfolio-btn-wrapper').on('click',function(e){
    	// $(this).slideUp();
    });



jQuery("#gallery").unitegallery({
	gallery_theme:"tiles"
}); 
});